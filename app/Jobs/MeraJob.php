<?php

namespace App\Jobs;

use App\Mail\MyCustomMail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class MeraJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        Log::info('MyMailJob is starting...');
        $email = new MyCustomMail();

        // Add logic to set recipient, subject, etc.
        $email->to('ramgupta86928@gmail.com')->subject('My Subject');

        // Dispatch the email
        \Mail::send($email);
        Log::info('MyMailJob has finished.');
    }
}
