<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function contact(Request $request)
    {
        Mail::to('yachouyne@gmail.com')->send(new ContactFormMail($request));

        return back()->with('success', 'Thanks for contacting us!');    }
}
