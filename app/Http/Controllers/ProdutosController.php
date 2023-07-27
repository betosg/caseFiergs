<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use App\Models\Categoria;
class ProdutosController extends Controller
{

    public function create(){
        $categoria = $this->listCategoriaAtiva();
        return view('produtos.create',['categorias'=>$categoria]);
    }

    public function save(Request $request){

        Produto::create([
            'nome'         => $request->nome,
            'custo'        => $request->custo,
            'preco'        => $request->preco,
            'quantidade'   => $request->quantidade,
            'descricao'    => $request->descricao,
            'categoria_id' => $request->categoria_id,
        ]);
        return redirect('/produtos/lista');
    }

    public function find($id){
        $produto = Produto::findOrFail($id);
        $categoria = $this->listCategoriaAtiva();
        return view('produtos.show',['produto'=>$produto,'categorias'=>$categoria]);
    }

    public function edit($id){
        $produto = Produto::findOrFail($id);
        $categoria = $this->listCategoriaAtiva();
        return view('produtos.edit',['produto'=>$produto,'categorias'=>$categoria]);
    }

    public function update(request $request, $id){
        $produto = Produto::findOrFail($id);
        $produto->update([
            'nome'         => $request->nome,
            'custo'        => $request->custo,
            'preco'        => $request->preco,
            'quantidade'   => $request->quantidade,
            'categoria_id' => $request->categoria_id,
            'descricao'    => $request->descricao,
        ]);
        return redirect('/produtos/lista');

    }

    public function delete($id){
        $produto = Produto::findOrFail($id);
        return view('produtos.delete',['produto'=>$produto]);
    }

    public function destroy($id){
        $produto = Produto::findOrFail($id);
        $produto->delete();
        return redirect('/produtos/lista');
    }

    public function listAll(request $request){
        $term = $request["search"];
        $produto = Produto::select('produtos.id', 'produtos.nome','produtos.descricao', 'categorias.nome as nome_categoria', 'produtos.preco','produtos.custo','produtos.quantidade')
            ->join('categorias', 'produtos.categoria_id', '=', 'categorias.id')
            ->Where('produtos.nome', 'like', '%' . $term . '%')
            ->orWhere('produtos.descricao', 'like', '%' . $term . '%')
            ->orWhere('categorias.nome', 'like', '%' . $term . '%')
            ->get();

        //$produto = Produto::join('categorias', 'produtos.categoria_id', '=', 'categorias.id')
        //    ->select('produtos.id', 'produtos.nome', 'categorias.nome as nome_categoria', 'produtos.preco','produtos.custo','produtos.quantidade')
        //    ->get();
        return view('produtos.lista',['produto'=>$produto]);
    }

//    public function listSearch(request $request){
//        echo $term = $request["search"];
//        $produto = Produto::select('produtos.id', 'produtos.nome','produtos.descricao', 'categorias.nome as nome_categoria', 'produtos.preco','produtos.custo','produtos.quantidade')
//            ->join('categorias', 'produtos.categoria_id', '=', 'categorias.id')
//            ->Where('produtos.nome', 'like', '%' . $term . '%')
//            ->orWhere('produtos.descricao', 'like', '%' . $term . '%')
//            ->orWhere('categorias.nome', 'like', '%' . $term . '%')
//            ->get();
//        return view('produtos.lista',['produto'=>$produto]);
//    }

    public function listCategoriaAtiva(){
        return Categoria::select('nome','id')->get();
    }
}
