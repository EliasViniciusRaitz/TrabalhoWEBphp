<?php

namespace App\Http\Controllers;

use App\Models\Turma;
use App\Models\Curso;
use App\Models\Professor;
use Illuminate\Http\Request;

class TurmaController extends Controller
{
    public function index()
    {
        $turmas = Turma::with(['curso', 'professor'])->get();
        return view('turmas.index', compact('turmas'));
    }

    public function create()
    {
        $cursos = Curso::all();
        $professores = Professor::all();
        return view('turmas.create', compact('cursos', 'professores'));
    }

    public function store(Request $request)
    {
        $validado = $request->validate([
            'nome' => 'required|max:255',
            'curso_id' => 'required|exists:cursos,id',
            'professor_id' => 'required|exists:professores,id',
        ]);

        Turma::create($validado);

        return redirect()->route('turmas.index');
    }

    public function edit(Turma $turma)
    {
        $cursos = Curso::all();
        $professores = Professor::all();
        return view('turmas.edit', compact('turma', 'cursos', 'professores'));
    }

    public function update(Request $request, Turma $turma)
    {
        $validado = $request->validate([
            'nome' => 'required|max:255',
            'curso_id' => 'required|exists:cursos,id',
            'professor_id' => 'required|exists:professores,id',
        ]);

        $turma->update($validado);

        return redirect()->route('turmas.index');
    }

    public function destroy(Turma $turma)
    {
        $turma->delete();

        return redirect()->route('turmas.index');
    }
}
