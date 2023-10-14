<?php

namespace App\Http\Controllers;
use App\Models\Computer;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ComputersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("computers.index",['computers' =>computer::all()
    ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('computers.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'origin' => 'required',
            'price' => 'required|integer',
        ]);
        
        $computer=new Computer();


    $computer->name = strip_tags($request->input('name'));
    $computer->origin =strip_tags($request->input('origin'));
    $computer->price = strip_tags($request->input('price'));

    $computer->save();
    return redirect()->route('computers.index');





    }

    /**
     * Display the specified resource.
     */
    public function show($computer)
    {
        //
        $index=Computer::findOrFail($computer);
        
        return view('computers.show', ['computer' => $index]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $computer)
    {
        return view('computers.edit',['computer'=> Computer::findOrFail($computer)]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $computer)
    {
        //
        $request->validate([
            'name' => 'required',
            'origin' => 'required',
            'price' => 'required|integer',
        ]);
        $to_update=Computer::findOrFail($computer);
        $to_update->name = strip_tags($request->input('name'));
    $to_update->origin =strip_tags($request->input('origin'));
    $to_update->price = strip_tags($request->input('price'));

    $to_update->save();
    return redirect()->route('computers.show', $computer);

        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $computer)
    {
        $to_delete=Computer::findOrFail($computer);
        $to_delete->delete();

        return redirect()->route('computers.index');

    }
}
