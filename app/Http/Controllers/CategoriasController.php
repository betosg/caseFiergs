<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
class CategoriasController extends Controller
{
    //
    public function create(){

        return view('categorias.create');
    }

    public function save(Request $request){

        Categoria::create([
            'nome'       => $request->nome,
            'ativo'      => $request->ativo,
        ]);
        return redirect('/categorias/lista');
    }

    public function find($id){
        $categoria = Categoria::findOrFail($id);
        return view('categorias.show',['categoria'=>$categoria]);
    }

    public function edit($id){
        $categoria = Categoria::findOrFail($id);
        return view('categorias.edit',['categoria'=>$categoria]);
    }

    public function update(request $request, $id){
        //die($request->ativo);
        $categoria = Categoria::findOrFail($id);
        $categoria->update([
            'nome'       => $request->nome,
            'ativo'      => $request->ativo,
        ]);
        return redirect('/categorias/lista');

    }

    public function inativa($id){
        $categoria = Categoria::findOrFail($id);
        return view('categorias.inativa',['categoria'=>$categoria]);
    }

    public function inativaUpd($id){
        $produto = Categoria::findOrFail($id);
        $produto->update([
            'ativo'      => 0,
        ]);
        return redirect('/categorias/lista');

    }

    public function listAll(){
        $categoria = Categoria::get();
        return view('categorias.lista',['categoria'=>$categoria]);
    }


}
