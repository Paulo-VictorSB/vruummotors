<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VeiculoImagem extends Model
{
    use HasFactory;

    protected $fillable = ['veiculo_id', 'url_imagem', 'ordem'];

    public function veiculo()
    {
        return $this->belongsTo(Veiculo::class);
    }
}
