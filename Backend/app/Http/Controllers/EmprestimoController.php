<?php

namespace App\Http\Controllers;

use App\Http\Resources\EmprestimosResource;
use App\Models\Emprestimo;
use Illuminate\Http\Request;
use App\Traits\HttpResponse;
use Illuminate\Support\Facades\Validator;

class EmprestimoController extends Controller
{
    use HttpResponse;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return EmprestimosResource::collection(Emprestimo::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'Data_emprestimo' => 'Required|data',
            'User' => 'Required'
        ]);

        if ($validator->fails()) {
            return $this->error('Não foi possivel adicionar o emprestimo', 422, $validator->errors());
        }

        $created = Emprestimo::create($validator->validated());

        if ($created) {
            return $this->Success('Emprestimo criado com sucesso', 200, $validator->validated());
        } else {
            return $this->error('Opa, algo deu errado', 400);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Emprestimo $emprestimo)
    {
        return $emprestimo;
    }
}
