<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Produtos extends Model
{
    use HasFactory;
    protected $fillable = [

        'nome',
        'descricao',
        'marca',
        'categoria',
        'unidade_medida',
        'preco_custo',
        'preco_venda',
        'fornecedores_id'
    ];

    protected function casts(): array
    {
        return [
            'preco_custo' => 'decimal:2',
            'preco_venda' => 'decimal:2',

        ];
    }

       public function fornecedores(): BelongsTo
    {
        return $this->belongsTo(Fornecedores::class);
    }
}
