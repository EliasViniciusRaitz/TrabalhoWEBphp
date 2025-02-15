<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Turma extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'curso_id'];

    public function estudantes()
    {
        return $this->belongsToMany(Estudante::class, 'turma_estudante', 'turma_id', 'estudante_id');
    }

    public function curso()
    {
        return $this->belongsTo(Curso::class);
    }
}
