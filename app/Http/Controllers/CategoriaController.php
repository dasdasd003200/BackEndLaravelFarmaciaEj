<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Http\Requests\StoreCategoriaRequest;
use App\Http\Requests\UpdateCategoriaRequest;

class CategoriaController extends Controller
{

    public function index()
    {
        $categorias=Categoria::get();
        return response()->json($categorias);
    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $categoria=Categoria::create($request->all());
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
        $categoria=Categoria::find($id);
        if($categoria)
        {
            $categoria->update($request->all());
            //return response()->json('usuario actualizado',200);
            return $this->index();
        }
        else
            return response()->json('no existe el usuario',409);
    }


    public function destroy($id)
    {
        $categoria=Categoria::find($id);
        if($categoria)
        {
            $categoria->delete();
            //return response()->json('usuario eliminado',200);
            return $this->index();

        }
        else
            return response()->json('no existe el usuario',409);

    }
}
