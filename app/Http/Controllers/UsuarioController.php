<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;
class UsuarioController extends Controller
{
    //
    public function loginon(Request $request){
        return view('welcome');
    }
}
