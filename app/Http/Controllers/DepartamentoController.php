<?php

namespace App\Http\Controllers;

use App\Models\Departamento;
use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class DepartamentoController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departamentos = Departamento::with('user') -> get();
        
        return view('departamento.departamentoIndex', compact('departamentos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('departamento.departamentoForm');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'encargado' => 'required|string|max:255',
            'descripcion' => 'required|string|max:255'
        ]);

        $request->merge(['user_id' => Auth::id()]);

        //dd($request->all());

        Departamento::create($request->all());

        return redirect()->route('departamento.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Departamento  $departamento
     * @return \Illuminate\Http\Response
     */
    public function show(Departamento $departamento)
    {
        $clientes = Cliente::get();

        return view('departamento.departamentoShow', compact('clientes', 'departamento'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Departamento  $departamento
     * @return \Illuminate\Http\Response
     */
    public function edit(Departamento $departamento)
    {
        return view('departamento.departamentoForm', compact('departamento'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Departamento  $departamento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Departamento $departamento)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'encargado' => 'required|string|max:255',
            'descripcion' => 'required|string|max:255'
        ]);

        Departamento::where('id', $departamento->id)->update($request->except('_token', '_method'));

        return redirect()->route('departamento.show', $departamento);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Departamento  $departamento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Departamento $departamento)
    {
        $departamento->delete();
        return redirect()->route('departamento.index');
    }

    public function agregaCliente(Request $request, Departamento $departamento)
    {
        $departamento->clientes()->sync($request->cliente_id);

        return redirect()->route('departamento.show', $departamento);
    }
}
