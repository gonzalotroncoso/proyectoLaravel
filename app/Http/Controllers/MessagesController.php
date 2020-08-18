<?php

namespace App\Http\Controllers;
use App\Mail\MessageReceived;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class MessagesController extends Controller
{
 public function store(){
 	 $message = request()->validate([
 	 	'name'=>'required',
 	 	'email'=>'required|email',
		'subject'=>'required',
		'content'=>'required|min:3'
 	 ],[
 	 	'name.required'=>'Se necesita un nombre'
 	 ]);

 	 Mail::to('gonzalo.troncoso@coso.com')->queue(new MessageReceived($message));
 	return back()->with('status','Recibimos tu mensaje');
 		//queue realiza el envio en segundo plano
 }
}
