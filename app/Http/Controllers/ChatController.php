<?php

namespace App\Http\Controllers;

use App\Models\ChatRoom;
use App\Models\ChatMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{
    /**
     * Show chat page
     */
    public function index()
    {
        $user = Auth::user();

        if ($user->is_admin) {
            // Admin sees all chat rooms
            $chatRooms = ChatRoom::with(['user', 'latestMessage'])
                ->orderBy('updated_at', 'desc')
                ->get();

            $selectedRoom = request('room')
                ? ChatRoom::with('messages.user')->find(request('room'))
                : $chatRooms->first();

            if ($selectedRoom) {
                $selectedRoom->load('messages.user');
            }

            return view('chat', [
                'chatRooms' => $chatRooms,
                'selectedRoom' => $selectedRoom,
                'isAdmin' => true,
            ]);
        } else {
            // Customer sees only their own chat room
            $chatRoom = ChatRoom::with('messages.user')
                ->where('user_id', $user->id)
                ->first();

            // Create room if doesn't exist
            if (!$chatRoom) {
                $chatRoom = ChatRoom::create([
                    'user_id' => $user->id,
                    'room_name' => $user->name,
                ]);
            }

            return view('chat', [
                'chatRooms' => collect([$chatRoom]),
                'selectedRoom' => $chatRoom,
                'isAdmin' => false,
            ]);
        }
    }

    /**
     * Send a message
     */
    public function sendMessage(Request $request)
    {
        $request->validate([
            'message' => 'required|string|max:1000',
            'room_id' => 'required|exists:chat_rooms,id',
        ]);

        $user = Auth::user();
        $room = ChatRoom::findOrFail($request->room_id);

        // Check access
        if (!$user->is_admin && $room->user_id !== $user->id) {
            return response()->json(['error' => 'Unauthorized'], 403);
        }

        $message = ChatMessage::create([
            'chat_room_id' => $room->id,
            'user_id' => $user->id,
            'message' => $request->message,
            'is_admin_message' => $user->is_admin,
        ]);

        // Update room timestamp
        $room->touch();

        return response()->json([
            'success' => true,
            'message' => [
                'id' => $message->id,
                'message' => $message->message,
                'is_admin_message' => $message->is_admin_message,
                'sender_name' => $user->is_admin ? 'Admin' : $user->name,
                'created_at' => $message->created_at->format('H:i'),
            ],
        ]);
    }

    /**
     * Get messages for a room (for polling)
     */
    public function getMessages(Request $request, $roomId = null)
    {
        $user = Auth::user();

        if ($user->is_admin) {
            if (!$roomId) {
                return response()->json(['messages' => []]);
            }
            $room = ChatRoom::with('messages.user')->findOrFail($roomId);
        } else {
            $room = ChatRoom::with('messages.user')
                ->where('user_id', $user->id)
                ->firstOrFail();
        }

        $lastMessageId = $request->query('last_id', 0);

        $messages = $room->messages()
            ->when($lastMessageId > 0, function ($query) use ($lastMessageId) {
                return $query->where('id', '>', $lastMessageId);
            })
            ->orderBy('created_at', 'asc')
            ->get()
            ->map(function ($message) use ($room) {
                return [
                    'id' => $message->id,
                    'message' => $message->message,
                    'is_admin_message' => $message->is_admin_message,
                    'sender_name' => $message->is_admin_message ? 'Admin' : $room->user->name,
                    'created_at' => $message->created_at->format('H:i'),
                ];
            });

        return response()->json([
            'messages' => $messages,
            'room_name' => $room->room_name,
        ]);
    }

    /**
     * Get chat rooms list (for admin polling)
     */
    public function getRooms()
    {
        $user = Auth::user();

        if (!$user->is_admin) {
            return response()->json(['rooms' => []]);
        }

        $rooms = ChatRoom::with(['user', 'latestMessage'])
            ->orderBy('updated_at', 'desc')
            ->get()
            ->map(function ($room) {
                return [
                    'id' => $room->id,
                    'room_name' => $room->room_name,
                    'user_email' => $room->user->email,
                    'last_message' => $room->latestMessage?->message,
                    'last_message_time' => $room->latestMessage?->created_at->format('H:i'),
                    'updated_at' => $room->updated_at->toISOString(),
                ];
            });

        return response()->json(['rooms' => $rooms]);
    }
}
