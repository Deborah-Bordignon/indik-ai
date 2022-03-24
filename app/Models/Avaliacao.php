<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Avaliacao extends Model
{
    use HasFactory;
    protected $fillable = ['nota'];

    public function clientes()
    {
        return $this->hasMany(Cliente::class);
    }

    public function fornecedores()
    {
        return $this->hasMany(Fornecedor::class);
    }
}
