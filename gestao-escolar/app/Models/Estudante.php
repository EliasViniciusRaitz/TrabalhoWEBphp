<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudante extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'email', 'data_nascimento'];

    public function turmas()
    {
        return $this->belongsToMany(Turma::class, 'turma_estudante', 'estudante_id', 'turma_id');
    }
}
