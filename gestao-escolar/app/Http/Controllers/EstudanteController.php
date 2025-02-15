<?php

namespace App\Http\Controllers;

use App\Models\Estudante;
use Illuminate\Http\Request;

class EstudanteController extends Controller
{
    public function index()
    {
        $estudantes = Estudante::all();
        return view('estudantes.index', compact('estudantes'));
    }

    public function create()
    {
        return view('estudantes.create');
    }

    public function store(Request $request)
    {
        $validado = $request->validate([
            'nome' => 'required|max:255',
            'email' => 'required|email|unique:estudantes',
            'data_nascimento' => 'required|date',
        ]);

        Estudante::create($validado);

        return redirect()->route('estudantes.index');
    }

    public function edit(Estudante $estudante)
    {
        return view('estudantes.edit', compact('estudante'));
    }

    public function update(Request $request, Estudante $estudante)
    {
        $validado = $request->validate([
            'nome' => 'required|max:255',
            'email' => 'required|email|unique:estudantes,email,' . $estudante->id,
            'data_nascimento' => 'required|date',
        ]);

        $estudante->update($validado);

        return redirect()->route('estudantes.index');
    }

    public function destroy(Estudante $estudante)
    {
        $estudante->delete();

        return redirect()->route('estudantes.index');
    }
}
