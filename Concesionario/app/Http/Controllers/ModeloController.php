<?php

namespace App\Http\Controllers;

use App\Models\Modelo;
use App\Models\Marca;
use Illuminate\Http\Request;

class ModeloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $modelos = Modelo::latest()->paginate(5);
        return view('modelos.index',compact('modelos'))
        ->with('i', (request()->input('page',1)-1)*5);
    }

    /**
     * Show the form for creating a new resource.
     * @param  \App\Models\Marca  $marcas
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $marcas= Marca::all();
        return view('modelos.create',compact('marcas'));
    }

    /**
     * Store a newly created resource in storage.
     * @param  \App\Models\Marca  $marcas
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombremodelo'=> 'required',
            'categoria'=> 'required',
            'precio'=> 'required',
            'marca_id',
        ]);

        Modelo::create($request->all());

        return redirect()->route('modelos.index')
        ->with('success','Modelo created successfully');
    }

    /**
     * Display the specified resource.
     * @param  \App\Models\Marca  $marcas
     * @param  \App\Models\Modelo  $modelo
     * @return \Illuminate\Http\Response
     */
    public function show(Modelo $modelo)
    {
        return view ('modelos.show',compact('modelo','marcas'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param  \App\Models\Marca  $marcas
     * @param  \App\Models\Modelo  $modelo
     * @return \Illuminate\Http\Response
     */
    public function edit(Modelo $modelo)
    {
        $marcas= Marca::all();
        return view ('modelos.edit',compact('modelo','marcas'));
    }

    /**
     * Update the specified resource in storage.
     * @param  \App\Models\Marca  $marcas
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Modelo  $modelo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Modelo $modelo)
    {
        $request->validate([
            'nombremodelo'=> 'required',
            'categoria'=> 'required',
            'precio'=> 'required',
            'marca_id',
        ]);
    
        $modelo->update($request->all());
    
        return redirect()->route('modelos.index')
        ->with('success','Modelo updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     * @param  \App\Models\Marca  $marcas
     * @param  \App\Models\Modelo  $modelo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Modelo $modelo)
    {
        $modelo->delete();

        return redirect()->route('modelos.index')
        ->with('success','Modelo deleted successfully');
    }
}
