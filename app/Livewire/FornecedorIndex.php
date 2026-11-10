<?php

namespace App\Livewire;

use App\Models\Fornecedores;
use Livewire\Component;

class FornecedorIndex extends Component
{
    public $busca = '';

    public function render()
    {
        $fornecedores = Fornecedores::where(
            'nome',
            'like',
            '%' . $this->busca . '%'
        )->get();

        return view(
            'livewire.fornecedor-index',
            compact('fornecedores')
        );
    }
}