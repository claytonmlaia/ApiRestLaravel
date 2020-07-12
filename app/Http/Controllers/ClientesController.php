<?php

namespace App\Http\Controllers;

use App\Clientes;
use Illuminate\Http\Request;

class ClientesController extends Controller
{

    public function index()
    {
        return Clientes::all();
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Clientes $clientes)
    {
        //
    }

    public function edit(Clientes $clientes)
    {
        //
    }

    public function update(Request $request, Clientes $clientes)
    {
        //
    }

    public function destroy(Clientes $clientes)
    {
        //
    }
}
