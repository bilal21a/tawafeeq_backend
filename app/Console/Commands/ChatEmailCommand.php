<?php

namespace App\Console\Commands;

use App\Mail\EmailNotificationMail;
use App\Models\EmailNotification;
use App\Models\Messages;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class ChatEmailCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'chat:emailNotification';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Chat Email Notification to reciver';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $tenMinutesAgo = Carbon::now()->subMinutes(10);

        $entries = EmailNotification::where('created_at', '<=', $tenMinutesAgo)->where('is_sent', 0)->first();

        if ($entries) {
            $message_id = $entries->message_id;
            $messages_data = Messages::where('id', $message_id)->first();
            $messages = $messages_data->body;
            $sender_data = User::where('id', $entries->sender_id)->first();
            $sender = $sender_data->name;
            $reciver_data = User::where('id', $entries->reciver_id)->first();
            $reciver = $reciver_data->name;
            $entries->is_sent = 1;
            $entries->save();
            Mail::to($reciver_data->email)->send(new EmailNotificationMail($messages, $sender, $reciver));
        }
    }
}
