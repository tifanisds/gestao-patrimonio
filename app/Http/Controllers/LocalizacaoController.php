<?php

namespace App\Http\Controllers;

use App\Models\Localizacao;
use Illuminate\Http\Request;

class LocalizacaoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $localizacoes = Localizacao::all();
        return view('localizacoes.index', compact('localizacoes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('localizacoes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nome' => 'required|string|max:255',
            'setor' => 'required|string|max:255',
            'bloco' => 'nullable|string|max:255',
            'andar' => 'required|string|max:255',
            'descricao' => 'nullable|string|max:1000',
        ]);

        Localizacao::create($validated);

        return redirect()->route('localizacoes.index')
            ->with('success', 'Localização cadastrada com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Localizacao $localizacao)
    {
        return view('localizacoes.show', compact('localizacao'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Localizacao $localizacao)
    {
        return view('localizacoes.edit', compact('localizacao'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Localizacao $localizacao)
    {
        $validated = $request->validate([
            'nome' => 'required|string|max:255',
            'setor' => 'required|string|max:255',
            'bloco' => 'nullable|string|max:255',
            'andar' => 'required|string|max:255',
            'descricao' => 'nullable|string|max:1000',
        ]);

        $localizacao->update($validated);

        return redirect()->route('localizacoes.show', $localizacao)
            ->with('success', 'Localização atualizada com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Localizacao $localizacao)
    {
        $localizacao->delete();

        return redirect()->route('localizacoes.index')
            ->with('success', 'Localização deletada com sucesso!');
    }
}
