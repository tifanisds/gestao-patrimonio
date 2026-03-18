<?php

namespace App\Http\Controllers;

use App\Models\Patrimonio;
use App\Models\Categoria;
use App\Models\Localizacao;
use App\Models\Fornecedor;
use App\Models\User;
use Illuminate\Http\Request;

class PatrimonioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $patrimonios = Patrimonio::all();
        return view('patrimonios.index', compact('patrimonios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categorias = Categoria::all();
        $localizacoes = Localizacao::all();
        $fornecedores = Fornecedor::all();
        $usuarios = User::all();
        
        return view('patrimonios.create', compact('categorias', 'localizacoes', 'fornecedores', 'usuarios'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'codigo_identificacao' => 'required|string|max:255|unique:patrimonios',
            'descricao' => 'required|string|max:1000',
            'categoria_id' => 'required|exists:categorias,id',
            'localizacao_id' => 'required|exists:localizacoes,id',
            'usuario_responsavel_id' => 'nullable|exists:users,id',
            'fornecedor_id' => 'nullable|exists:fornecedores,id',
            'data_aquisicao' => 'nullable|date',
            'valor' => 'nullable|numeric|min:0',
            'estado' => 'required|in:novo,bom,regular,ruim,inservivel',
            'observacoes' => 'nullable|string|max:1000',
        ]);

        Patrimonio::create($validated);

        return redirect()->route('patrimonios.index')
            ->with('success', 'Patrimônio cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Patrimonio $patrimonio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Patrimonio $patrimonio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Patrimonio $patrimonio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Patrimonio $patrimonio)
    {
        //
    }
}
