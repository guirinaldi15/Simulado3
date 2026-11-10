<?php

namespace App\Livewire;

use App\Models\Produtos;
use Livewire\Component;

class ProdutoIndex extends Component
{
    public $busca = '';

    public function render()
    {
        $produtos = Produtos::where(
            'nome',
            'like',
            '%' . $this->busca . '%'
        )->get();

        return view(
            'livewire.produto-index',
            compact('produtos')
        );
    }
}
