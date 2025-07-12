<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livro;

class LivroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $livros = Livro::all();
        return view("livros.index",compact('livros'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('livros.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $livros = Livro::create($request->only(['titulo','ator','preco','categoria','ano_de_publicacao']));
        return redirect()->route('livros.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $livros = Livro::findOrFail($id);
        return view('livros.edit',compact("livros"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $livros = Livro::findOrFail($id);
        $livros->update($request->only(['titulo','ator','preco','categoria','ano_de_publicacao']));
        return redirect()->route('livros.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $livros = Livro::findOrFail($id);
        $livros->delete();
        return redirect()->route('livros.index');
    }
}
