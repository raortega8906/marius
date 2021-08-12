<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMailRequest;
use App\Models\Mail;
use App\Models\User;
use App\Notifications\MailNotification;
use Illuminate\Http\Request;

class MailController extends Controller
{
    public function store(StoreMailRequest $request)
    {
        Mail::create($request->validated());
        $user = User::all()->first();
        $user->notify(new MailNotification(
            $request->name, 
            $request->email, 
            $request->phone, 
            $request->service, 
            $request->content
        )); 

        return redirect()->route('index');
    }
}
