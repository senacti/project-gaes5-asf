<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Puntuacion;

class PuntuacionController extends Controller
{
    public function index()
    {
        return view('clientepuntuacion');
    }

    public function store(Request $request)
    {
        $request->validate([
            'rating' => 'required',
            'comment' => 'required',
        ]);

        Puntuacion::create([
            'rating' => $request->input('rating'),
            'comment' => $request->input('comment'),
        ]);

        // Redireccionar a la página de inicio o a cualquier otra página deseada
        return redirect()->route('home')->with('success', '¡Calificación enviada correctamente!');
    }
}