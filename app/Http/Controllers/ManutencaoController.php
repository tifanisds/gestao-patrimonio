<?php

namespace App\Http\Controllers;

use App\Models\Manutencao;
use App\Models\Patrimonio;
use Illuminate\Http\Request;

class ManutencaoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $manutencoes = Manutencao::all();
        return view('manutencoes.index', compact('manutencoes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $patrimonios = Patrimonio::all();
        return view('manutencoes.create', compact('patrimonios'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'patrimonio_id' => 'required|exists:patrimonios,id',
            'descricao' => 'required|string|max:1000',
            'data_manutencao' => 'nullable|date',
            'custo' => 'nullable|numeric|min:0',
            'tipo' => 'required|in:preventiva,corretiva',
        ]);

        Manutencao::create($validated);

        return redirect()->route('manutencoes.index')
            ->with('success', 'Manutenção cadastrada com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Manutencao $manutencao)
    {
        return view('manutencoes.show', compact('manutencao'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Manutencao $manutencao)
    {
        $patrimonios = Patrimonio::all();
        return view('manutencoes.edit', compact('manutencao', 'patrimonios'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Manutencao $manutencao)
    {
        $validated = $request->validate([
            'patrimonio_id' => 'required|exists:patrimonios,id',
            'descricao' => 'required|string|max:1000',
            'data_manutencao' => 'nullable|date',
            'custo' => 'nullable|numeric|min:0',
            'tipo' => 'required|in:preventiva,corretiva',
        ]);

        $manutencao->update($validated);

        return redirect()->route('manutencoes.show', $manutencao)
            ->with('success', 'Manutenção atualizada com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Manutencao $manutencao)
    {
        $manutencao->delete();

        return redirect()->route('manutencoes.index')
            ->with('success', 'Manutenção deletada com sucesso!');
    }
}
