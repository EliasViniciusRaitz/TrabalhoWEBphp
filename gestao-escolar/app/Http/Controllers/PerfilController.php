<?php

namespace App\Http\Controllers;

use App\Http\Requests\PerfilAtualizarRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class PerfilController extends Controller
{
    public function edit(Request $request)
    {
        return view('perfil.editar', [
            'usuario' => $request->user(),
        ]);
    }

    public function update(PerfilAtualizarRequest $request)
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('perfil.editar')->with('status', 'perfil-atualizado');
    }

    public function destroy(Request $request)
    {
        $request->validateWithBag('excluirUsuario', [
            'senha' => ['required', 'current_password'],
        ]);

        $usuario = $request->user();

        Auth::logout();

        $usuario->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
