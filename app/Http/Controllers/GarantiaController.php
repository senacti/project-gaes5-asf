<?php

namespace App\Http\Controllers;

use App\Models\Garantia;
use Illuminate\Http\Request;

/**
 * Class GarantiaController
 * @package App\Http\Controllers
 */
class GarantiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $garantias = Garantia::paginate();

        return view('garantia.index', compact('garantias'))
            ->with('i', (request()->input('page', 1) - 1) * $garantias->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $garantia = new Garantia();
        return view('garantia.create', compact('garantia'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Garantia::$rules);

        $garantia = Garantia::create($request->all());

        return redirect()->route('garantias.index')
            ->with('success', 'Garantia creada exitosamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $garantia = Garantia::find($id);

        return view('garantia.show', compact('garantia'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $garantia = Garantia::find($id);

        return view('garantia.edit', compact('garantia'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Garantia $garantia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Garantia $garantia)
    {
        request()->validate(Garantia::$rules);

        $garantia->update($request->all());

        return redirect()->route('garantias.index')
            ->with('success', 'Garantia actualizada exitosamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $garantia = Garantia::find($id)->delete();

        return redirect()->route('garantias.index')
            ->with('success', 'Garantia eliminada exitosamente');
    }
}
