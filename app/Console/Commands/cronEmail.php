<?php

namespace App\Console\Commands;

use Illuminate\Support\Facades\Mail;
use Illuminate\Console\Command;
use App\Mail\SendMailable;
use App\Jobs\MailSenderJob;
use Cache;
use Illuminate\Support\Facades\Redis;
class cronEmail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'send:email';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send mail every minute.';

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
     * @return mixed
     */
    public function handle()
    {

        $getMail = Cache::get('emails');
        if($getMail) {
            foreach ($getMail[count($getMail)-1] as $key => $mailID) {
                dispatch(new MailSenderJob($mailID));
            }
            unset($getMail[count($getMail)-1]);
        }
        Cache::put('emails', $getMail);
    }
}
