<?php

namespace App\Http\Controllers;

use App\Mail\ContactoMailable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactoController extends Controller
{
    public function store(Request $request){
        $correo = new ContactoMailable($request->all());
        Mail::to('oscarruiz2614@gmail.com')->send($correo);
        return redirect()->route('home')->with('info','Mensaje enviado');
    }
}
