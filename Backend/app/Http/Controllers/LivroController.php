<?php

namespace App\Http\Controllers;

use App\Models\Livro;
use App\Traits\HttpResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Resources\LivroResource;
use Illuminate\Support\Facades\Validator;

class LivroController extends Controller
{
    use HttpResponse;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return LivroResource::collection(DB::select("
            select
                l.id,
                l.isbn,
                l.Titulo,
                l.Edicao,
                l.Estoque,
                a.Nome as Autor
            from
                livros l,
                autors a
            where
                l.Autor = a.id
        "));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request;
        $validator = Validator::make($request->all(),[
            'isbn' => 'required|max:20',
            'Titulo' => 'required|max:80',
            'Edicao' => 'required|max:11',
            'Estoque' => 'required|max:4',
            'Autor' => 'required|max:11'
        ]);

        if($validator->fails()) {
            return $this->error('Não foi possivel adicionar o autor', 422, $validator->errors());
        }

        $created = Livro::create($validator->validated());

        if ($created) {
            return $this->Success('Livro Adicionado com sucesso', 200, $validator->validated());
        } else {
            return $this->error('Opa, Algo deu errado', 400);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        dd($request);
//        return Livro::findOrFail($livro->id);
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Livro $livro)
    {
        $deleted = $livro->delete();

        if ($deleted) {
            return $this->Success('Livro Deletado', 200);
        } else {
            return $this->error('Erro ao deletar o Livro', 400);
        }
    }
}
