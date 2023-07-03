<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cita;
use Carbon\Carbon;

class CitaController extends Controller
{
    public function index()
    {
        $citas = Cita::all();
        return view('citas.index', compact('citas'));
    }

    public function create()
    {
        return view('citas.create');
    }

    public function store(Request $request)
{
    $request->validate([
        'nombre' => 'required',
        'email' => 'required|email',
        'tipo_servicio' => 'required',
        'fecha' => 'required|date',
        'hora' => 'required',
    ]);

    $existingCita = Cita::where([
        'nombre' => $request->nombre,
        'email' => $request->email,
        'tipo_servicio' => $request->tipo_servicio,
        'fecha' => $request->fecha,
        'hora' => $request->hora,
    ])->first();

    if ($existingCita) {
        return redirect()->back()->with('error', 'Ya existe una cita con los mismos detalles.');
    }

    $cita = new Cita();
    $cita->nombre = $request->nombre;
    $cita->email = $request->email;
    $cita->tipo_servicio = $request->tipo_servicio;
    $cita->fecha = $request->fecha;
    $cita->hora = $request->hora;
    $cita->save();

    $citas = Cita::all();

    return view('citas.index', compact('citas'))->with('success', 'Cita guardada exitosamente.');
}



    public function edit($id)
    {
        $cita = Cita::find($id);
        return view('citas.edit', compact('cita'));
    }

    public function update(Request $request, $id)
    {
        $cita = Cita::find($id);
        $cita->nombre = $request->input('nombre');
        $cita->email = $request->input('email');
        $cita->tipo_servicio = $request->input('tipo_servicio');
        $cita->fecha = $request->input('fecha');
        $cita->hora = $request->input('hora');
        $cita->save();

        return redirect()->route('citas.index')->with('success', 'Cita actualizada exitosamente');
    }

    public function destroy($id)
    {
        $cita = Cita::find($id);
        $cita->delete();

        return redirect()->route('citas.index')->with('success', 'Cita eliminada exitosamente');
    }
}
