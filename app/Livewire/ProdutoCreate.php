<?php

namespace App\Livewire;

use App\Models\Fornecedores;
use App\Models\Produtos;
use Livewire\Component;

class ProdutoCreate extends Component
{ 
    public $nome;
    public $descricao;
    public $marca;
    public $categoria;
    public $unidade_medida;
    public $preco_custo;
    public $preco_venda;
    public $fornecedores_id;


    public function salvar(){
        $this->validate([
            'nome' => 'required',
            'marca'=> 'required',
            'categoria'=> 'required',
            'unidade_medida' => 'required|integer',
            'preco_custo' => 'required',
            'preco_venda' => 'required',
            'fornecedores_id'=>'required'
        ]);

        Produtos::create([
            'nome'=>$this->nome,
            'descricao'=>$this->descricao,
            'marca'=>$this->marca,
            'categoria'=>$this->categoria,
            'unidade_medida'=> $this->unidade_medida,
            'preco_custo'=> $this->preco_custo,
            'preco_venda'=> $this->preco_venda,
            'fornecedores_id'=> $this->fornecedores_id,
        ]);

        session()->flash(
            'success',
            'Produto cadastrado com sucesso!'
        );
        return redirect()->route('produtos.index');
    }

     public function render()
    {
        $fornecedores = Fornecedores::all();

        return view(
            'livewire.produto-create',
            compact('fornecedores')
        );
    }

}
