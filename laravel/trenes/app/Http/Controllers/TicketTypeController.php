<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TicketType;
use DB;

class TicketTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ticketstype = TicketType::all(); 

        return view("/ticketstype/index", ["ticketstype" => $ticketstype]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("/ticketstype/create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $ticketstype = new TicketType;
        $ticketstype -> type = $request -> input('type');
        $ticketstype -> save();

        return redirect('ticketstype');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $ticketstype = TicketType::find($id);
        
        return view('ticketstype/show', ['ticketstype'=> $ticketstype]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $ticketstype = TicketType::find($id);
        return view('ticketstype/edit', ['ticketstype'=>$ticketstype]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $ticketstype = TicketType::find($id);
        $ticketstype -> type = $request -> input('type');
        $ticketstype -> save();

        return redirect('ticketstype');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('ticket_types')->where('id',"=",$id)->delete();
        return redirect('/ticketstype');
    }
}
