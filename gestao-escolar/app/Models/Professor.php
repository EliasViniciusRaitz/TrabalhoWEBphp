<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'email'];

    public function turmas()
    {
        return $this->hasMany(Turma::class);
    }
}
