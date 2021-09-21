<?php

namespace App\Http\Controllers;

use App\Models\pii;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App;

class PiiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('add');        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $prodAgregar = new Pii;
        $request->validate([
            'cod' => 'required',
            'nombre' => 'required',
            'descripcion' => 'required',
            'precio' => 'required'
        ]);
        $prodAgregar->cod = $request->cod;
        $prodAgregar->nombre = $request->nombre;
        $prodAgregar->descripcion = $request->descripcion;
        $prodAgregar->precio = $request->precio;
        $prodAgregar->save();
        return back()->with('agregar', 'El producto se ha agregado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pii  $pii
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {        
        if($request){
            $query = trim($request->get('nombre'));
            $prod = Pii::where('nombre', 'LIKE', '%'.$query.'%')
                        ->orderBy('id', 'ASC')
                        ->get();
            return view('consu', ['produc' => $prod, 'nombre' => $query]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pii  $pii
     * @return \Illuminate\Http\Response
     */
    public function edit(pii $pii)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\pii  $pii
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pii $pii)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pii  $pii
     * @return \Illuminate\Http\Response
     */
    public function destroy(pii $pii)
    {
        //
    }
}
