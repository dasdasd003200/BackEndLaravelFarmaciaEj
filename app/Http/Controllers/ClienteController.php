<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Http\Requests\StoreClienteRequest;
use App\Http\Requests\UpdateClienteRequest;

class ClienteController extends Controller
{

    public function index()
    {
        $clientes=Cliente::get();
        return response()->json($clientes);
    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $cliente=Cliente::create($request->all());
        return $this->index();
        //return response()->json($user);

    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        $cliente=Cliente::find($id);
        if($cliente)
        {
            $cliente->update($request->all());
            //return response()->json('usuario actualizado',200);
            return $this->index();
        }
        else
            return response()->json('no existe el usuario',409);
    }


    public function destroy($id)
    {
        $cliente=Cliente::find($id);
        if($cliente)
        {
            $cliente->delete();
            //return response()->json('usuario eliminado',200);
            return $this->index();

        }
        else
            return response()->json('no existe el usuario',409);

    }
}
