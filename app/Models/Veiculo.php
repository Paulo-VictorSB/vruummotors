<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Veiculo extends Model
{
    use HasFactory;

    protected $fillable = [
        'uid',
        'modelo_id',
        'cor_id',
        'ano_fabricacao',
        'ano_modelo',
        'km',
        'fipe',
        'preco',
        'localizacao'
    ];

    public function modelo()
    {
        return $this->belongsTo(Modelo::class);
    }

    public function cor()
    {
        return $this->belongsTo(Cor::class);
    }

    public function imagens()
    {
        return $this->hasMany(VeiculoImagem::class);
    }
}
