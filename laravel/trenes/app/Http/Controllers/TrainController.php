<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;

class TrainController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $trenes = Train::all(); 

        return view("/trains/index", ["trenes" => $trenes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("/trains/create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $trenes = new Train;
        $trenes -> name = $request -> input('name');
        $trenes -> passengers = $request -> input('passengers');
        $trenes -> year = $request -> input('year');
        $trenes -> train_type_id = $request -> input('train_type_id');
        $trenes -> save();

        return redirect('trains');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $trenes = Train::find($id);
        
        return view('trains/show', ['trenes'=>$trenes]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $trenes = Train::find($id);
        return view('trains/edit', ['trenes'=>$trenes]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $trenes = Train::find($id);
        
        $trenes -> name = $request -> input('name');
        $trenes -> passengers = $request -> input('passengers');
        $trenes -> year = $request -> input('year');
        $trenes -> train_type_id = $request -> input('train_type_id');
        $trenes -> save();

        return redirect('trains');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('trains')->where('id',"=",$id)->delete();
        return redirect('/trains');
    }
}
