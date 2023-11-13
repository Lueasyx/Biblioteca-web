<?php

namespace App\Http\Controllers;

use App\Http\Resources\AutorResource;
use App\Models\Autor;
use App\Traits\HttpResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AutorController extends Controller
{
    use HttpResponse;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
//        return Autor::all();
        return AutorResource::collection(Autor::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'Nome' => 'required|max:40'
        ]);

        if($validator->fails()) {
            return $this->error('Não foi possivel adicionar o autor', 422, $validator->errors());
        }

        $created = Autor::create($validator->validated());

        if ($created) {
            return $this->Success('Autor criado com sucesso', 200, $validator->validated());
        }

        return $this->error('Opa, Algo deu errado', 400);
    }

    /**
     * Display the specified resource.
     */
    public function show(Autor $autor)
    {
        // return $autor; die;
    //    return DB::select("select * from autors where id = $id->id");
       return Autor::find($autor);
    //    return new AutorResource(Autor::select('*')->where('id', $id->id)->first());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Autor $autor)
    {
        $deleted = $autor->delete();

        if ($deleted) {
            return $this->Success('Autor deletado', 200);
        } else {
            return $this->error('Erro ao deletar Autor', 400);
        }
    }
}
