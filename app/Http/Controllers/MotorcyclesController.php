<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Motorcycle;
use Illuminate\Http\Request;

class MotorcyclesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
       $motorcycles= Motorcycle::all();
        return view("motorcycles.index")->with(['motorcycles'=>$motorcycles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $motorcycle=Motorcycle::FindOrFail($id);
        return view('motorcycles.show')->with(['motorcycle'=>$motorcycle]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $motorcycle=Motorcycle::FindOrFail($id);
        return view('motorcycles.edit')->with(['motorcycle'=>$motorcycle]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $motorcycle = Motorcycle::findOrFail($id);
        $motorcycle->bid = $request->input('bid');
        $motorcycle->name = $request->input('name');
        $motorcycle->year = $request->input('year');
        $motorcycle->CC = $request->input('CC');
        $motorcycle->eid = $request->input('eid');
        $motorcycle->horsepower = $request->input('horsepower');
        $motorcycle->torque = $request->input('torque');
        $motorcycle->tank_capacity = $request->input('tank_capacity');
        $motorcycle->sitting_height = $request->input('sitting_height');
        $motorcycle->price = $request->input('price');
        $motorcycle->save();

        return redirect('motorcycles');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $motorcycle = Motorcycle::findOrFail($id);
        $motorcycle->delete();
        return redirect('motorcycles');
    }
}
