<?php

namespace App\Console\Commands;

use App\Models\ChatMessage;
use App\Models\ChatRoom;
use Illuminate\Console\Command;

class DeleteOldChats extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'chat:cleanup {--hours=3 : Number of hours after which to delete messages}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Delete chat messages older than specified hours (default 3 hours)';

    /**
     * Execute the console command.
     */
    public function handle(): int
    {
        $hours = $this->option('hours');
        $cutoffTime = now()->subHours($hours);

        $this->info("Deleting chat messages older than {$hours} hours (before {$cutoffTime})...");

        // Delete old messages
        $deletedMessages = ChatMessage::where('created_at', '<', $cutoffTime)->delete();
        $this->info("Deleted {$deletedMessages} messages.");

        // Delete empty chat rooms (rooms with no messages)
        $deletedRooms = ChatRoom::whereDoesntHave('messages')->delete();
        $this->info("Deleted {$deletedRooms} empty chat rooms.");

        $this->info('Chat cleanup completed successfully!');

        return Command::SUCCESS;
    }
}
