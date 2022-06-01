<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\cliente;
use App\Http\Resources\clienteResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class clienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = Cliente::all();
        return response([ 'data' => clienteResource::collection($clientes), 'message' => 'Retrieved successfully.'], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $validator = Validator::make($data, [
            'nome' => array('required', 'max:255', 'regex:/^[a-zA-Z \x{00C0}-\x{00FF}]*$/u'),
            'cpf' => array('required', 'min:11', 'max:11', 'regex:/^[0-9]*$/u'),
            'telefone' => array('required', 'min:12', 'max:13', 'regex:/^[0-9]*$/u'),
            'cep' => array('required', 'min:8', 'max:8', 'regex:/^[0-9]*$/u'),
            'id_estado' => array('required', 'integer', 'exists:estados,id'),
            'cidade' => array('required', 'max:255', 'regex:/^[a-zA-Z \x{00C0}-\x{00FF}]*$/u'),
            'logradouro' => array('required', 'max:255'),
            'bairro' => array('required', 'max:255'),
            'numero' => array('required', 'max:8'),
            'complemento' => array('max:255', 'nullable'),
            'petNome' => array('required', 'max:255', 'regex:/^[a-zA-Z \x{00C0}-\x{00FF}]*$/u'),
            'petSexo' => array('required', 'max:1', 'regex:/^[M|F]*$/u'),
            'id_especie' => array('required', 'integer', 'exists:especies,id'),
            'petRaca' => array('required', 'max:255', 'regex:/^[a-zA-Z \x{00C0}-\x{00FF}]*$/u'),
            'petPeso' => array('numeric', 'between:0,999.9', 'nullable'),
            'observacao' => array('max:255', 'nullable')
        ]);

        if ($validator->fails()) {
            return response(['error' => $validator->errors(), 'message' => 'Validation error.']);
        }
        
        $cliente = cliente::create($data);
        return response(['data' => new clienteResource($cliente), 'message' => 'Created successfully.'], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function show(cliente $cliente)
    {
        return response(['data' => new clienteResource($cliente), 'message' => 'Retrieved successfully.'], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, cliente $cliente)
    {
        
        $data = $request->all();

        $validator = Validator::make($data, [
            'nome' => array('max:255', 'regex:/^[a-zA-Z \x{00C0}-\x{00FF}]*$/u'),
            'cpf' => array('min:11', 'max:11', 'regex:/^[0-9]*$/u'),
            'telefone' => array('min:12', 'max:13', 'regex:/^[0-9]*$/u'),
            'cep' => array('min:8', 'max:8', 'regex:/^[0-9]*$/u'),
            'id_estado' => array('integer', 'exists:estados,id'),
            'cidade' => array('max:255', 'regex:/^[a-zA-Z \x{00C0}-\x{00FF}]*$/u'),
            'logradouro' => array('max:255'),
            'bairro' => array('max:255'),
            'numero' => array('max:8'),
            'complemento' => array('max:255', 'nullable'),
            'petNome' => array('max:255', 'regex:/^[a-zA-Z \x{00C0}-\x{00FF}]*$/u'),
            'petSexo' => array('max:1', 'regex:/^[M|F]*$/u'),
            'id_especie' => array('integer', 'exists:especies,id'),
            'petRaca' => array('max:255', 'regex:/^[a-zA-Z \x{00C0}-\x{00FF}]*$/u'),
            'petPeso' => array('numeric', 'between:0,999.9', 'nullable'),
            'observacao' => array('max:255', 'nullable')
        ]);

        if ($validator->fails()) {
            return response(['error' => $validator->errors(), 'message' => 'Validation error.']);
        }

        $cliente->update($request->all());
        return response(['data' => new clienteResource($cliente), 'message' => 'Update successfully.'], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy(cliente $cliente)
    {
        $cliente->delete();
        return response(['message' => 'Deleted.']);
    }
}
