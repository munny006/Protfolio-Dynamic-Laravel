<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use\App\Mail\ContactFormMail;

class contactFromController extends Controller
{
	public function store(){
		$contact_From_data = request()->all();
		Mail::to('mahmudaaktermunny4@gmail.com')->send(new ContactFormMail($contact_From_data));
	}
}
