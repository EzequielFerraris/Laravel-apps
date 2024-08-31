<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveTipoRequest;
use App\Models\Tipo;
use Illuminate\Http\Request;

class TipoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('tipos.tipo_index', ['tipos' => Tipo::orderBy('created_at')
                                                            ->paginate(5)]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tipo = new Tipo();

        return view('tipos.tipo_create', compact('tipo'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SaveTipoRequest $request)
    {
        $tipo = Tipo::create($request->validated());
        
        return redirect()->route('tipos.show', $tipo)
                         ->with('status', 'Tipo creado');
    }

    /**
     * Display the specified resource.
     */
    public function show(Tipo $tipo)
    {
        return view('tipos.tipo_show', [  'tipo' => $tipo,
                                         'tramites' => $tipo->tramites()]);
        //return view('tipos.tipo_show', compact('tipo'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tipo $tipo)
    {
        return view('tipos.tipo_edit', compact('tipo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SaveTipoRequest $request, Tipo $tipo)
    {
        $tipo->update($request->validated());

        return redirect()->route('tipos.show', $tipo)
                        ->with('status', 'Tipo de trámite actualizado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tipo $tipo)
    {
        if(($tipo->tramites)->isEmpty())
        {
            $tipo->delete();

            return redirect()->route('tipos.index')
                        ->with('status', 'Tipo eliminado');
        }
        else
        {
            return redirect()->route('tipos.show', $tipo)
                        ->with('status', 'Existen trámites activos con este tipo. Imposible eliminar.');
        }
        
    }
}
