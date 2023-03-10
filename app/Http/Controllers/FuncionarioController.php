<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModelFuncionario;

class FuncionarioController extends Controller
{
    private $objFuncionario;

    public function __construct()
    {
        $this->objFuncionario = new ModelFuncionario();
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $funcionario = $this->objFuncionario->all();
        return view('index', compact('funcionario'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $func = $this->objFuncionario->all();
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->objFuncionario->create([
            'id' => $request->id,
            'nome' => $request->nome,
            'email' => $request->email,
            'telefone' => $request->telefone,
            'dtnasc' => $request->dtnasc,
            'endereco' => $request->endereco,
            'ec' => $request->ec
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $funcionario = $this->objFuncionario->find($id);
        return view('show', compact('funcionario'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
