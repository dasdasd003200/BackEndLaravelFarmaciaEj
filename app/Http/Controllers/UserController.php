<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\support\Facades\Storage;
use Illuminate\support\Facades\File;


class UserController extends Controller
{

    public function index()
    {
       $users=User::get();
       return response()->json($users);
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $user=User::create($request->all());
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
        $user=User::find($id);
        if($user)
        {
            $user->update($request->all());
            //return response()->json('usuario actualizado',200);
            return $this->index();
        }
        else
            return response()->json('no existe el usuario',409);
    }


    public function destroy($id)
    {
        $user=User::find($id);
        if($user)
        {
            $user->delete();
            //return response()->json('usuario eliminado',200);
            return $this->index();

        }
        else
            return response()->json('no existe el usuario',409);

    }

    public function imageUpload(Request $request){
        $imagen=$request->file('image');
        $path_img='usuario';
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
                return response()->download(public_path('storage').'/usuario/'.$nombre,$nombre);
            }
            catch(\Exception $exception)
            {
            return response()->json('la imagen no existe',409);
            }


            }







}
