<?php

namespace App\Http\Controllers;

use App\Models\Movimentacao;
use App\Models\Patrimonio;
use App\Models\Localizacao;
use App\Models\User;
use Illuminate\Http\Request;

class MovimentacaoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $movimentacoes = Movimentacao::all();
        return view('movimentacoes.index', compact('movimentacoes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $patrimonios = Patrimonio::all();
        $localizacoes = Localizacao::all();
        $usuarios = User::all();
        
        return view('movimentacoes.create', compact('patrimonios', 'localizacoes', 'usuarios'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'patrimonio_id' => 'required|exists:patrimonios,id',
            'localizacao_origem_id' => 'nullable|exists:localizacoes,id',
            'localizacao_destino_id' => 'required|exists:localizacoes,id',
            'usuario_responsavel_id' => 'nullable|exists:users,id',
            'motivo' => 'nullable|string|max:1000',
            'data_movimentacao' => 'required|date_format:Y-m-d H:i',
        ]);

        Movimentacao::create($validated);

        return redirect()->route('movimentacoes.index')
            ->with('success', 'Movimentação registrada com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Movimentacao $movimentacao)
    {
        return view('movimentacoes.show', compact('movimentacao'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Movimentacao $movimentacao)
    {
        $patrimonios = Patrimonio::all();
        $localizacoes = Localizacao::all();
        $usuarios = User::all();
        
        return view('movimentacoes.edit', compact('movimentacao', 'patrimonios', 'localizacoes', 'usuarios'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Movimentacao $movimentacao)
    {
        $validated = $request->validate([
            'patrimonio_id' => 'required|exists:patrimonios,id',
            'localizacao_origem_id' => 'nullable|exists:localizacoes,id',
            'localizacao_destino_id' => 'required|exists:localizacoes,id',
            'usuario_responsavel_id' => 'nullable|exists:users,id',
            'motivo' => 'nullable|string|max:1000',
            'data_movimentacao' => 'required|date_format:Y-m-d H:i',
        ]);

        $movimentacao->update($validated);

        return redirect()->route('movimentacoes.show', $movimentacao)
            ->with('success', 'Movimentação atualizada com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Movimentacao $movimentacao)
    {
        $movimentacao->delete();

        return redirect()->route('movimentacoes.index')
            ->with('success', 'Movimentação deletada com sucesso!');
    }
}
