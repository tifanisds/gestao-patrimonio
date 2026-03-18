<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movimentacao extends Model
{
    protected $table = 'movimentacoes';

    protected $fillable = [
        'patrimonio_id',
        'localizacao_origem_id',
        'localizacao_destino_id',
        'usuario_responsavel_id',
        'motivo',
        'data_movimentacao',
    ];

    protected $casts = [
        'data_movimentacao' => 'datetime',
    ];

    public function patrimonio()
    {
        return $this->belongsTo(Patrimonio::class);
    }

    public function localizacaoOrigem()
    {
        return $this->belongsTo(Localizacao::class, 'localizacao_origem_id');
    }

    public function localizacaoDestino()
    {
        return $this->belongsTo(Localizacao::class, 'localizacao_destino_id');
    }

    public function usuarioResponsavel()
    {
        return $this->belongsTo(User::class, 'usuario_responsavel_id');
    }
}

