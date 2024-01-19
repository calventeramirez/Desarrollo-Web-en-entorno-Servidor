<?php

namespace App\Http\Controllers;

use App\models\TrainType;
use DB;
use Illuminate\Http\Request;


class TrainTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $trainstype = TrainType::all(); 

        return view("/trainstype/index", ["trainstype" => $trainstype]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("/trainstype/create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $trainstype = new TrainType;
        $trainstype -> type = $request -> input('type');
        $trainstype -> save();

        return redirect('trainstype');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $trainstype = TrainType::find($id);
        
        return view('trainstype/show', ['trainstype'=> $trainstype]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $trainstype = TrainType::find($id);
        return view('trainstype/edit', ['trainstype'=>$trainstype]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $trainstype = TrainType::find($id);
        $trainstype -> type = $request -> input('type');
        $trainstype -> save();

        return redirect('trainstype');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('train_types')->where('id',"=",$id)->delete();
        return redirect('/trainstype');
    }
}
