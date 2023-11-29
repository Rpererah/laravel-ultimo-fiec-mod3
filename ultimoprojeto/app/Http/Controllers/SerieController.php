<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use Illuminate\Http\Request;

class SerieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $series=Serie::all();
        return view('index',["series"=>$series]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('inserir');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Serie::create($request->all());
        return to_route('series.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Serie $series)
    {
        return view('atualizar',compact("series"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Serie $series)
    {
        $series->fill($request->all());
        $series->save();
        return to_route('series.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Serie::destroy($id);
        return to_route('series.index');
    }
    public function pegaToken(){
        echo csrf_token();
    }
}
