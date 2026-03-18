<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Patrimonio extends Model
{
    protected $table = 'patrimonios';

    protected $fillable = [
        'codigo_identificacao',
        'descricao',
        'categoria_id',
        'localizacao_id',
        'usuario_responsavel_id',
        'fornecedor_id',
        'data_aquisicao',
        'valor',
        'estado',
        'observacoes',
    ];

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }

    public function localizacao()
    {
        return $this->belongsTo(Localizacao::class);
    }

    public function usuarioResponsavel()
    {
        return $this->belongsTo(User::class, 'usuario_responsavel_id');
    }

    public function fornecedor()
    {
        return $this->belongsTo(Fornecedor::class);
    }
}
