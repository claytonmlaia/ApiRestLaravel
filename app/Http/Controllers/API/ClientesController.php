<?php

namespace App\Http\Controllers\API;

use App\Clientes;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClientesController extends Controller
{

    public function index()
    {
        return Clientes::all();
    }

    public function store(Request $request)
    {
        $clientes = new Clientes();
        $clientes->nome = $request->nome;
        $clientes->email = $request->email;
        $clientes->save();
    }

    public function show($id)
    {
        return Clientes::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
      $clientes = Clientes::where('id',$id)
      ->update([
        'nome' => $request->nome,
        'email' => $request->email,
      ]);
    }

    public function destroy($id)
    {
        $clientes = Clientes::findOrFail($id);
        $clientes->delete();
    }
}
