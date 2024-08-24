<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tramite;
use App\Models\Tipo;
use App\Models\Sector;
use App\Http\Requests\SaveTramiteRequest;

class TramiteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('tramites.tramite_index', ['tramites' => Tramite::orderBy('created_at')
                                                            ->paginate(3)]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tipos = Tipo::all();
        $sectores = Sector::all();
        $tramite = new Tramite();

        return view('tramites.tramite_create', [    'tramite' => $tramite,
                                                    'tipos' => $tipos,
                                                    'sectores' => $sectores ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SaveTramiteRequest $request)
    {
        $tramite = Tramite::create($request->validated());
        
        return redirect()->route('tramites.show', $tramite)
                         ->with('status', 'Tramite creado');
    }

    /**
     * Display the specified resource.
     */
    public function show(Tramite $tramite)
    {
        
        $tramite->tipo = $tramite->tipo->nombre;
        $tramite->sector = $tramite->sector->nombre;

        return view('tramites.tramite_show', compact('tramite'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tramite $tramite)
    {
        $tipos = Tipo::all();
        $sectores = Sector::all();

        return view('tramites.tramite_edit', [  'tramite' => $tramite,
                                                'tipos' => $tipos,
                                                'sectores' => $sectores ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SaveTramiteRequest $request, Tramite $tramite)
    {
        $tramite->update($request->validated());

        return redirect()->route('tramites.show', $tramite)
                        ->with('status', 'Tramite actualizado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tramite $tramite)
    {
        $tramite->delete();

        return redirect()->route('tramites.index')
                        ->with('status', 'Tramite eliminado');
    }
}
