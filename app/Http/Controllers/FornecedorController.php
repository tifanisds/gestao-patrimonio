<?php

namespace App\Http\Controllers;

use App\Models\Fornecedor;
use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fornecedores = Fornecedor::all();
        return view('fornecedores.index', compact('fornecedores'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('fornecedores.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nome' => 'required|string|max:255',
            'cnpj' => 'nullable|string|max:18',
            'telefone' => 'nullable|string|max:15',
            'email' => 'nullable|email|max:255',
        ]);

        Fornecedor::create($validated);

        return redirect()->route('fornecedores.index')
            ->with('success', 'Fornecedor cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Fornecedor $fornecedor)
    {
        return view('fornecedores.show', compact('fornecedor'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Fornecedor $fornecedor)
    {
        return view('fornecedores.edit', compact('fornecedor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Fornecedor $fornecedor)
    {
        $validated = $request->validate([
            'nome' => 'required|string|max:255',
            'cnpj' => 'nullable|string|max:18',
            'telefone' => 'nullable|string|max:15',
            'email' => 'nullable|email|max:255',
        ]);

        $fornecedor->update($validated);

        return redirect()->route('fornecedores.show', $fornecedor)
            ->with('success', 'Fornecedor atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Fornecedor $fornecedor)
    {
        $fornecedor->delete();

        return redirect()->route('fornecedores.index')
            ->with('success', 'Fornecedor deletado com sucesso!');
    }
}
