<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index()
    {
        $cursos = Curso::all();
        return view('cursos.index', compact('cursos'));
    }

    public function create()
    {
        return view('cursos.create');
    }

    public function store(Request $request)
    {
        $validado = $request->validate([
            'nome' => 'required|max:255',
            'descricao' => 'nullable',
        ]);

        Curso::create($validado);

        return redirect()->route('cursos.index');
    }

    public function edit(Curso $curso)
    {
        return view('cursos.edit', compact('curso'));
    }

    public function update(Request $request, Curso $curso)
    {
        $validado = $request->validate([
            'nome' => 'required|max:255',
            'descricao' => 'nullable',
        ]);

        $curso->update($validado);

        return redirect()->route('cursos.index');
    }

    public function destroy(Curso $curso)
    {
        $curso->delete();

        return redirect()->route('cursos.index');
    }
}
