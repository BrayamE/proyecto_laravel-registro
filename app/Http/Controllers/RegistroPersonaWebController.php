<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistroPersonaWebController extends Controller
{
    Public function registroPersona(){
        return view('web.registro-persona-web');
    }
}
