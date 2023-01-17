<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Computer;

class ComputerController extends Controller
{

    
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('computers.index',[
            'computers' => Computer::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('computers.create');
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
        $request->validate([
            'computer-name' => 'required',
            'computer-origin' => 'required',
            'computer-price' => 'required|integer ',

        ]);
        $computer = new Computer();
        $computer->name = $request->input('computer-name');
        $computer->origin = $request->input('computer-origin');
        $computer->price = $request->input('computer-price');

        $computer->save();
        return redirect()-> route('computers.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($computer)
    {
        //
        //$computers = self::getData();
         $index = Computer::findOrFail($computer);
        //$index = array_search($computer, array_column($computers,'id'));
        if ($index ===false){
            abort(404);
        }
        return view('computers.show',[
            'computer' => $index
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */ 
    public function edit($computer)
    {
        //
        return view ('computers.edit',[
            'computer' => Computer::findOrFail($computer)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $computer)
    {
        //
        $request->validate([
            'computer-name' => 'required',
            'computer-origin' => 'required',
            'computer-price' => 'required|integer ',

        ]);
        $to_update = Computer::findOrFail($computer);
        $to_update->name = $request->input('computer-name');
        $to_update->origin = $request->input('computer-origin');
        $to_update->price = $request->input('computer-price');

        $to_update->save();
        return redirect()-> route('computers.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($computer)
    {
        //
        $to_delete = Computer::findOrFail($computer);
        $to_delete-> delete();
        return redirect()-> route('computers.index');

    }
}
