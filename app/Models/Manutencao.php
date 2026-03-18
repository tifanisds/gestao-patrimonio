<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Manutencao extends Model
{
    protected $table = 'manutencoes';

    protected $fillable = [
        'patrimonio_id',
        'descricao',
        'data_manutencao',
        'custo',
        'tipo',
    ];

    protected $casts = [
        'data_manutencao' => 'date',
        'custo' => 'decimal:2',
    ];

    public function patrimonio()
    {
        return $this->belongsTo(Patrimonio::class);
    }
}
