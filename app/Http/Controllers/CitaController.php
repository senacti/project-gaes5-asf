<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Cita;
use Illuminate\Http\Request;

class CitaController extends Controller
{
    public function guardar(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'type' => 'required',
            'date' => 'required|date',
            'time' => 'required',
        ]);

        $existingCita = Cita::where([
            'nombre' => $request->name,
            'email' => $request->email,
            'tipo_servicio' => $request->type,
            'fecha' => $request->date,
            'hora' => $request->time,
        ])->first();

        if ($existingCita) {
            return redirect()->back()->with('error', 'Ya existe una cita con los mismos detalles.');
        }

        $cita = Cita::create([
            'nombre' => $request->name,
            'email' => $request->email,
            'tipo_servicio' => $request->type,
            'fecha' => $request->date,
            'hora' => $request->time,
        ]);

        $proximasCitas = Cita::whereDate('fecha', '>=', Carbon::now())->get();

        return view('clienteagenda', compact('proximasCitas'))->with('success', 'Cita guardada exitosamente.');
    }

    public function eliminar(Request $request)
    {
        $id = $request->input('id');
        $cita = Cita::findOrFail($id);
        $cita->delete();

        return redirect()->back()->with('success', 'Cita eliminada exitosamente.');
    }

    public function reagendar($id)
    {
        $cita = Cita::findOrFail($id);

        return view('reagendar', compact('cita'));
    }
}