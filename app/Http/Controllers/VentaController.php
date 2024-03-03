<?php

namespace App\Http\Controllers;

use App\Models\Venta;
use App\Http\Requests\StoreVentaRequest;
use App\Http\Requests\UpdateVentaRequest;

class VentaController extends Controller
{

    public function index()
    {
        $ventas=Venta::get();
        return response()->json($ventas);
    }
    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $venta=Venta::create($request->all());
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
        $venta=Venta::find($id);
        if($venta)
        {
            $venta->update($request->all());
            //return response()->json('usuario actualizado',200);
            return $this->index();
        }
        else
            return response()->json('no existe el usuario',409);
    }


    public function destroy($id)
    {
        $venta=Venta::find($id);
        if($venta)
        {
            $venta->delete();
            //return response()->json('usuario eliminado',200);
            return $this->index();

        }
        else
            return response()->json('no existe el usuario',409);

    }
}
