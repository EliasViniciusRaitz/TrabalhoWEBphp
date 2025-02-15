<?php

namespace App\Http\Controllers;

use App\Models\Professor;
use Illuminate\Http\Request;

class ProfessorController extends Controller
{
    public function index()
    {
        $professores = Professor::all();
        return view('professores.index', compact('professores'));
    }

    public function create()
    {
        return view('professores.create');
    }

    public function store(Request $request)
    {
        $validado = $request->validate([
            'nome' => 'required|max:255',
            'email' => 'required|email|unique:professores',
        ]);

        Professor::create($validado);

        return redirect()->route('professores.index');
    }

    public function edit(Professor $professor)
    {
        return view('professores.edit', compact('professor'));
    }

    public function update(Request $request, Professor $professor)
    {
        $validado = $request->validate([
            'nome' => 'required|max:255',
            'email' => 'required|email|unique:professores,email,' . $professor->id,
        ]);

        $professor->update($validado);

        return redirect()->route('professores.index');
    }

    public function destroy(Professor $professor)
    {
        $professor->delete();

        return redirect()->route('professores.index');
    }
}
