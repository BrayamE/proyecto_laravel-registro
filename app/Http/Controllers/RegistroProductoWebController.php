<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistroProductoWebController extends Controller
{
    Public function registroProducto(){
        return view('web.registro-producto-web');
    }
}
