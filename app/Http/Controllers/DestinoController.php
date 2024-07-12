<?php

namespace App\Http\Controllers;
use App\Models\destino;
use Illuminate\Http\Request;

class DestinoController extends Controller
{

    public function create(){
        return view('destino.create');
    }
    
    public function store(Request $request){
        $des = new destino();
    
        $des->nombre = $request->nombre;
        $des->otrosdatos = $request->otrosdatos;
    
        $des->save();
    
        return redirect()->route('destino.show', $des->id);
    }
    
    public function index(){
        $des = destino::orderBy('id', 'desc')->get();
        return view('destino.listar', compact('des'));
    }
    
    public function destroy(destino $destino){
        $destino->delete();
        return redirect()->route('destino.index');
    }
    
    public function edit(destino $destino){
        return view('destino.edit', compact('destino'));
    }
    
    public function update(Request $request, destino $destino){
        $destino->nombre = $request->nombre;
        $destino->otrosdatos = $request->otrosdatos;
        $destino->save();
    
        return redirect()->route('destino.index');
    }
    
    public function show($id){
        $des = destino::findOrFail($id);
        return view('destino.show', compact('des'));
    }
}


