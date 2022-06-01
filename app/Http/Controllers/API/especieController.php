<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\especie;
use App\Http\Resources\especieResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class especieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $especies = Especie::all();
        return response([ 'data' => especieResource::collection($especies), 'message' => 'Retrieved successfully.'], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\especie  $especie
     * @return \Illuminate\Http\Response
     */
    public function show(especie $especie)
    {
        return response(['data' => new especieResource($especie), 'message' => 'Retrieved successfully.'], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\especie  $especie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, especie $especie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\especie  $especie
     * @return \Illuminate\Http\Response
     */
    public function destroy(especie $especie)
    {
        //
    }
}
