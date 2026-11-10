<?php

namespace App\Livewire;

use App\Models\Fornecedores;
use Livewire\Component;

class FornecedorCreate extends Component
{
   public $nome;
   public $CPF;
   public $telefone;
   public $endereco;
   public $email;

   public function salvar(){
    $this->validate([
        'nome'=> 'required',
        'CPF'=> 'required',
        'telefone'=>'required',
        'endereco'=>'required',
        'email'=> 'required'
    ]);

    Fornecedores::create([
        'nome'=> $this->nome,
        'CPF'=>$this->CPF,
        'telefone'=>$this->telefone,
        'endereco'=>$this->endereco,
        'email'=>$this->email
    ]);

    session()->flash(
        'success',
        'Produto cadastrado com sucesso!'
    );
    return redirect()->route('fornecedores.index');
   }
}
