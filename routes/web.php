<?php

use App\Livewire\Dashboard;
use App\Livewire\FornecedorCreate;
use App\Livewire\FornecedorIndex;
use App\Livewire\Login;
use App\Livewire\Movimentacao\Movimentacao;
use App\Livewire\ProdutoCreate;
use App\Livewire\ProdutoIndex;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('produtos/create', ProdutoCreate::class)->name('produtos.create');

Route::get('produtos', ProdutoIndex::class)->name('produtos.index');

Route::get('fornecedores/create', FornecedorCreate::class)->name('fornecedores.create');

Route::get('fornecedores', FornecedorIndex::class)->name('fornecedores.index');

Route::get('/login', Login::class)
    ->name('login');


    Route::get('movimentacao', Movimentacao::class)->name('dashboard');

    Route::get('dashboard', Dashboard::class)->name('dashboard');

