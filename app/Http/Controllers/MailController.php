<?php

namespace App\Http\Controllers;

use App\Mail\Email;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function send() {
        $objDemo = new \stdClass();
        $objDemo->sender = 'Darish, founder of Green Jungle';
        $objDemo->receiver = 'friend';

        Mail::to(\request()->get('email'))->send(new Email($objDemo));
        return redirect()->back();
    }
}
