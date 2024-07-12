<?php

namespace App\Http\Controllers;
use App\Models\viajero;
use Illuminate\Http\Request;

class ViajeroController extends Controller
{
    public function create(){
        return view('viajero.create');
    }
    
    public function store(Request $request){
        $via = new Viajero();
    
        $via->ndi = $request->ndi;
        $via->nombre = $request->nombre;
        $via->direccion = $request->direccion;
        $via->telefono = $request->telefono;
    
        $via->save();
    
        return redirect()->route('viajero.show', $via->id);
    }
    
    public function index(){
        $via = Viajero::orderBy('id', 'desc')->get();
        return view('viajero.listar', compact('via'));
    }
    
    public function destroy(Viajero $viajero){
        $viajero->delete();
        return redirect()->route('viajero.index');
    }
    
    public function edit(Viajero $viajero){
        return view('viajero.edit', compact('viajero'));
    }
    
    public function update(Request $request, Viajero $viajero){
        $viajero->ndi = $request->ndi;
        $viajero->nombre = $request->nombre;
        $viajero->direccion = $request->direccion;
        $viajero->telefono = $request->telefono;
        $viajero->save();
    
        return redirect()->route('viajero.index');
    }
    
    public function show($id){
        $viajero = Viajero::findOrFail($id);
        return view('viajero.show', compact('viajero'));
    }


}
