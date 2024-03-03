<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Http\Requests\StoreProductoRequest;
use App\Http\Requests\UpdateProductoRequest;

class ProductoController extends Controller
{

    public function index()
    {
        $productos=Producto::get();
        return response()->json($productos);
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

    public function imageUpload(Request $request){
        $imagen=$request->file('image');
        $path_img='producto';
        $imageName = $path_img.'/'.$imagen->getClientOriginalName();
        try {
        Storage::disk('public')->put($imageName, File::get($imagen));
        }
        catch (\Exception $exception) {
        return response('error',400);
        }
        return response()->json(['image' => $imageName]);
        }


        public function image($nombre){
            try
            {
                return response()->download(public_path('storage').'/producto/'.$nombre,$nombre);
            }
            catch(\Exception $exception)
            {
            return response()->json('la imagen no existe',409);
            }


            }






}
