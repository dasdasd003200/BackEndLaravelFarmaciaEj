<?php

namespace App\Http\Controllers;

use App\Models\Transaccion;
use App\Http\Requests\StoreTransaccionRequest;
use App\Http\Requests\UpdateTransaccionRequest;

class TransaccionController extends Controller
{

    public function index()
    {
        $transacciones=Transaccion::get();
        return response()->json($transacciones);
    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $producto=Producto::create($request->all());
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
        $producto=Producto::find($id);
        if($producto)
        {
            $producto->update($request->all());
            //return response()->json('usuario actualizado',200);
            return $this->index();
        }
        else
            return response()->json('no existe el usuario',409);
    }


    public function destroy($id)
    {
        $producto=Producto::find($id);
        if($producto)
        {
            $producto->delete();
            //return response()->json('usuario eliminado',200);
            return $this->index();

        }
        else
            return response()->json('no existe el usuario',409);

    }
}
