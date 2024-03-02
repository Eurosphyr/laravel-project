<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function index(Request $req)
    {
        //return view("contato");
        //return "Estou no controle !!";
        dd($req);
    }
}
