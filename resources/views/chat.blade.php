<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Live Chat</title>

    <link rel="icon" type="image/png" href="{{ asset('image/dyanaf-logo-circle.png') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased overflow-hidden">
    <div class="h-[100dvh] bg-gradient-to-br from-slate-900 via-slate-800 to-slate-900">
        <div class="flex h-full">

            @if($isAdmin)
            <!-- Sidebar for Admin (Desktop Only) -->
            <div class="hidden md:flex w-72 bg-white/5 border-r border-white/10 flex-col">
                <div class="p-4 border-b border-white/10">
                    <h2 class="text-white font-semibold flex items-center gap-2">
                        <i class="fas fa-comments text-white/60"></i>
                        Chats ({{ $chatRooms->count() }})
                    </h2>
                </div>

                <div class="flex-1 overflow-y-auto p-2">
                    @forelse($chatRooms as $room)
                    <a href="{{ route('chat', ['room' => $room->id]) }}"
                        class="flex items-center gap-3 p-3 rounded-xl mb-1 transition-all {{ $selectedRoom && $selectedRoom->id === $room->id ? 'bg-white/10' : 'hover:bg-white/5' }}">
                        <div class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center text-white/80 font-semibold text-sm">
                            {{ strtoupper(substr($room->user->name, 0, 2)) }}
                        </div>
                        <div class="flex-1 min-w-0">
                            <div class="text-white font-medium text-sm truncate">{{ $room->user->name }}</div>
                            <div class="text-white/40 text-xs truncate">
                                {{ $room->latestMessage ? $room->latestMessage->message : 'No messages' }}
                            </div>
                        </div>
                    </a>
                    @empty
                    <div class="text-center text-white/40 py-8">
                        <p class="text-sm">No chats yet</p>
                    </div>
                    @endforelse
                </div>

                <!-- Admin Info & Home -->
                <div class="p-4 border-t border-white/10">
                    <div class="flex items-center gap-3 mb-3">
                        <img src="{{ auth()->user()->avatar ?? asset('image/dyanaf-logo.jpg') }}" alt="Avatar" class="w-10 h-10 rounded-full object-cover border-2 border-white/10">
                        <div class="flex-1 min-w-0">
                            <div class="text-white font-medium text-sm truncate">{{ auth()->user()->name }}</div>
                            <div class="text-white/40 text-xs truncate">{{ auth()->user()->email }}</div>
                        </div>
                    </div>
                    <a href="{{ route('home') }}" class="w-full text-white/60 hover:text-white/80 text-sm px-4 py-2 rounded-lg bg-white/5 hover:bg-white/10 transition-all flex items-center justify-center gap-2">
                        <i class="fas fa-home"></i> Kembali ke Beranda
                    </a>
                </div>
            </div>
            @else
            <!-- Sidebar for Customer (Desktop Only) -->
            <div class="hidden md:flex w-72 bg-white/5 border-r border-white/10 flex-col">
                <div class="p-6 border-b border-white/10">
                    <h2 class="text-white font-semibold flex items-center gap-2">
                        <i class="fas fa-comments text-white/60"></i>
                        Live Chat
                    </h2>
                </div>

                <!-- User Info -->
                <div class="p-4 border-b border-white/10">
                    <div class="flex items-center gap-3">
                        <img src="{{ auth()->user()->avatar ?? asset('image/dyanaf-logo.jpg') }}" alt="Avatar" class="w-12 h-12 rounded-full object-cover border-2 border-white/10">
                        <div class="flex-1 min-w-0">
                            <div class="text-white font-medium text-sm truncate">{{ auth()->user()->name }}</div>
                            <div class="text-white/40 text-xs truncate">{{ auth()->user()->email }}</div>
                        </div>
                    </div>
                </div>

                <!-- Info -->
                <div class="flex-1 flex flex-col items-center justify-center p-6 text-center">
                    <i class="fas fa-shield-alt text-4xl text-white/20 mb-4"></i>
                    <p class="text-white/40 text-sm leading-relaxed">
                        Chat Anda dengan admin bersifat pribadi dan akan otomatis dihapus setelah 3 jam.
                    </p>
                </div>

                <!-- Home -->
                <div class="p-5">
                    <a href="{{ route('home') }}" class="w-full text-white/60 hover:text-white/80 text-sm px-4 py-2 rounded-lg bg-white/5 hover:bg-white/10 transition-all flex items-center justify-center gap-2">
                        <i class="fas fa-home"></i> Kembali ke Beranda
                    </a>
                </div>
            </div>
            @endif

            <!-- Main Chat Area -->
            <div class="flex-1 flex flex-col min-w-0">
                @if($selectedRoom)
                <!-- Chat Header -->
                <div class="flex items-center gap-3 p-3 md:p-4 border-b border-white/10 bg-white/5">
                    <div class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center text-white/80 font-semibold text-sm">
                        {{ $isAdmin ? strtoupper(substr($selectedRoom->user->name, 0, 2)) : 'AD' }}
                    </div>
                    <div class="flex-1">
                        <h3 class="text-white font-semibold text-sm md:text-base">
                            {{ $isAdmin ? $selectedRoom->user->name : 'Admin Dyanaf Store' }}
                        </h3>
                        <p class="text-white/40 text-xs flex items-center gap-1">
                            <span class="w-2 h-2 rounded-full bg-green-500"></span>
                            Online
                        </p>
                    </div>
                    <a href="{{ route('home') }}" class="w-9 h-9 rounded-full bg-white/10 flex items-center justify-center text-white/70 hover:bg-white/15 hover:text-white transition-all md:hidden">
                        <i class="fas fa-home"></i>
                    </a>
                </div>

                <!-- Info Banner (Mobile Only) -->
                <div class="flex md:hidden items-center justify-center gap-2 py-2 px-4 bg-white/5 border-b border-white/5 text-white/40 text-xs">
                    <i class="fas fa-clock"></i>
                    <span>Chat otomatis dihapus setelah 3 jam</span>
                </div>

                <!-- Messages -->
                <div class="flex-1 overflow-y-auto overscroll-contain p-3 md:p-4 space-y-3 min-h-0" id="chatMessages">
                    @forelse($selectedRoom->messages as $message)
                    @php
                    $isSent = ($isAdmin && $message->is_admin_message) || (!$isAdmin && !$message->is_admin_message);
                    @endphp
                    <div class="flex gap-2 max-w-[85%] md:max-w-[75%] {{ $isSent ? 'ml-auto flex-row-reverse' : '' }}">
                        <div class="w-8 h-8 rounded-full bg-white/10 flex items-center justify-center text-white/70 font-semibold text-xs flex-shrink-0">
                            {{ $message->is_admin_message ? 'AD' : strtoupper(substr($selectedRoom->user->name, 0, 2)) }}
                        </div>
                        <div class="rounded-2xl px-3 py-2 {{ $isSent ? 'bg-white/15' : 'bg-white/5' }} border border-white/10">
                            <div class="text-white/50 text-[10px] font-medium mb-1">
                                {{ $message->is_admin_message ? 'Admin' : $selectedRoom->user->name }}
                            </div>
                            <div class="text-white/90 text-sm leading-relaxed break-words">{{ $message->message }}</div>
                            <div class="text-white/30 text-[10px] text-right mt-1">{{ $message->created_at->format('H:i') }}</div>
                        </div>
                    </div>
                    @empty
                    <!-- Empty State - No Messages -->
                    <div class="flex-1 flex flex-col items-center justify-center h-full py-12">
                        <div class="w-24 h-24 mb-6 rounded-full bg-white/5 flex items-center justify-center">
                            <i class="fas fa-paper-plane text-4xl text-white/20"></i>
                        </div>
                        <h3 class="text-white/70 font-medium text-lg mb-2">Mulai Percakapan</h3>
                        <p class="text-white/40 text-sm text-center max-w-xs">
                            Belum ada pesan. Kirim pesan pertama Anda untuk memulai percakapan dengan {{ $isAdmin ? $selectedRoom->user->name : 'Admin' }}!
                        </p>
                        <div class="mt-6 flex items-center gap-2 text-white/30 text-xs">
                            <i class="fas fa-lock"></i>
                            <span>Pesan Anda bersifat pribadi & aman</span>
                        </div>
                    </div>
                    @endforelse
                </div>

                <!-- Input -->
                <div class="p-3 md:p-4 border-t border-white/10 bg-white/5">
                    <div class="flex gap-3 items-end">
                        <textarea
                            id="messageInput"
                            class="flex-1 bg-white/5 border border-white/10 rounded-2xl px-4 py-3 text-white text-sm resize-none outline-none focus:border-white/20 placeholder-white/30 disabled:opacity-50 disabled:cursor-not-allowed transition-opacity"
                            placeholder="Ketik pesan..."
                            rows="1"></textarea>
                        <button
                            id="sendBtn"
                            onclick="sendMessage()"
                            class="w-11 h-11 rounded-full bg-white/10 hover:bg-white/15 text-white/80 flex items-center justify-center transition-all disabled:opacity-50 disabled:cursor-not-allowed">
                            <i id="sendIcon" class="fas fa-paper-plane"></i>
                            <i id="loadingIcon" class="fas fa-spinner fa-spin" style="display: none;"></i>
                        </button>
                    </div>
                </div>
                @else
                <!-- Empty State -->
                <div class="flex items-center gap-3 p-4 border-b border-white/10 bg-white/5">
                    <h3 class="text-white font-semibold flex-1">Live Chat</h3>
                    <a href="{{ route('home') }}" class="w-9 h-9 rounded-full bg-white/10 flex items-center justify-center text-white/70 hover:bg-white/15 hover:text-white transition-all">
                        <i class="fas fa-home"></i>
                    </a>
                </div>
                <div class="flex-1 flex flex-col items-center justify-center text-white/40 text-center p-8">
                    <i class="fas fa-comments text-5xl mb-4 opacity-30"></i>
                    <h3 class="text-white/60 font-medium mb-1">Belum ada percakapan</h3>
                    <p class="text-sm">Pilih chat untuk memulai</p>
                </div>
                @endif
            </div>
        </div>
    </div>

    @php
    $chatConfig = [
    'roomId' => $selectedRoom ? $selectedRoom->id : null,
    'isAdmin' => (bool)$isAdmin,
    'lastMessageId' => ($selectedRoom && $selectedRoom->messages->count() > 0) ? $selectedRoom->messages->last()->id : 0,
    'sendUrl' => route('chat.send'),
    ];
    @endphp

    <script>
        (function() {
            var config = JSON.parse('{!! json_encode($chatConfig) !!}');
            var currentRoomId = config.roomId;
            var isAdmin = config.isAdmin;
            var csrfToken = document.querySelector('meta[name="csrf-token"]').content;
            var lastMessageId = config.lastMessageId;

            function scrollToBottom() {
                var el = document.getElementById('chatMessages');
                if (el) el.scrollTop = el.scrollHeight;
            }

            scrollToBottom();

            window.sendMessage = function() {
                var input = document.getElementById('messageInput');
                var message = input.value.trim();
                if (!message || !currentRoomId) return;

                var btn = document.getElementById('sendBtn');
                var sendIcon = document.getElementById('sendIcon');
                var loadingIcon = document.getElementById('loadingIcon');

                btn.disabled = true;
                input.disabled = true;
                sendIcon.style.display = 'none';
                loadingIcon.style.display = 'inline';

                fetch(config.sendUrl, {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': csrfToken,
                        },
                        body: JSON.stringify({
                            message: message,
                            room_id: currentRoomId
                        }),
                    })
                    .then(function(r) {
                        return r.json();
                    })
                    .then(function(data) {
                        if (data.success) {
                            input.value = '';
                            appendMessage(data.message, true);
                            lastMessageId = data.message.id;
                        }
                    })
                    .catch(function(e) {
                        console.error(e);
                    })
                    .finally(function() {
                        btn.disabled = false;
                        input.disabled = false;
                        sendIcon.style.display = 'inline';
                        loadingIcon.style.display = 'none';
                        input.focus();
                    });
            };

            function appendMessage(msg, isSent) {
                var container = document.getElementById('chatMessages');
                if (!container) return;

                var div = document.createElement('div');
                div.className = 'flex gap-2 max-w-[85%] md:max-w-[75%] ' + (isSent ? 'ml-auto flex-row-reverse' : '');
                div.innerHTML = '<div class="w-8 h-8 rounded-full bg-white/10 flex items-center justify-center text-white/70 font-semibold text-xs flex-shrink-0">' +
                    (msg.is_admin_message ? 'AD' : msg.sender_name.substring(0, 2).toUpperCase()) +
                    '</div><div class="rounded-2xl px-3 py-2 ' + (isSent ? 'bg-white/15' : 'bg-white/5') + ' border border-white/10">' +
                    '<div class="text-white/50 text-[10px] font-medium mb-1">' + escapeHtml(msg.sender_name) + '</div>' +
                    '<div class="text-white/90 text-sm leading-relaxed break-words">' + escapeHtml(msg.message) + '</div>' +
                    '<div class="text-white/30 text-[10px] text-right mt-1">' + msg.created_at + '</div></div>';

                container.appendChild(div);
                scrollToBottom();
            }

            function escapeHtml(text) {
                var div = document.createElement('div');
                div.textContent = text;
                return div.innerHTML;
            }

            function poll() {
                if (!currentRoomId) return;
                fetch('/chat/messages/' + currentRoomId + '?last_id=' + lastMessageId)
                    .then(function(r) {
                        return r.json();
                    })
                    .then(function(data) {
                        if (data.messages && data.messages.length > 0) {
                            data.messages.forEach(function(msg) {
                                var isMine = (isAdmin && msg.is_admin_message) || (!isAdmin && !msg.is_admin_message);
                                if (msg.id > lastMessageId) {
                                    appendMessage(msg, isMine);
                                    lastMessageId = msg.id;
                                }
                            });
                        }
                    })
                    .catch(function(e) {
                        console.error(e);
                    });
            }

            setInterval(poll, 3000);

            var input = document.getElementById('messageInput');
            if (input) {
                input.addEventListener('keydown', function(e) {
                    if (e.key === 'Enter' && !e.shiftKey) {
                        e.preventDefault();
                        window.sendMessage();
                    }
                });
            }
        })();
    </script>
</body>

</html>