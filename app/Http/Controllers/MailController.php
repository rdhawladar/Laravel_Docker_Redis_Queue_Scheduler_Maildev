<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Mail\SendMailable;
use App\Jobs\MailSenderJob;
use Session;
use Cache;
use Illuminate\Support\Facades\Redis;

class MailController extends Controller
{
	public function __construct()
    {
        $this->middleware('validity');
    }

    public function mailer() {
        return view('panel')->with('username', Session::get('foo'));
    }

    public function sending() {
        $emails = [];
        for($i=1; $i<=50; $i++) {
            $emails[] = 'test'.$i.'@gmail.com';
        }
        foreach (array_chunk($emails, 10) as $chunk_mail ) {
            $chunk[] = $chunk_mail;
        }
        Cache::put('emails', $chunk);
        return redirect()->back()->withErrors(['Email sent successfully! ...']);
    }
}
