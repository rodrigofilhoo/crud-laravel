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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
