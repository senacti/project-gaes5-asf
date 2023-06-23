<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class generalcontroller extends Controller
{
    public function agendar()
    {
        return view('clienteagenda');
    }

    public function contactos()
    {
        return view('clientecontactos');
    }

    public function puntuacion()
    {
        return view('clientepuntuacion');
    }

    public function skype()
    {
        return view('skype');
    }
}