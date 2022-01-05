<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\EngineType;
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
       $motorcycles= Motorcycle::all()->sortBy('bid',SORT_REGULAR,false); //使用sortyBy使motorcycle.index的bid由小到大排序
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
        $brands= brand::all();
        $enginetypes= enginetype::all();
        return view("motorcycles.create")->with(['brands'=>$brands])->with(['enginetypes'=>$enginetypes]);;
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

        $bid = $request->input('bid');
        $name = $request->input('name');
        $year = $request->input('year');
        $CC = $request->input('CC');
        $eid = $request->input('eid');
        $horsepower = $request->input('horsepower');
        $torque = $request->input('torque');
        $tank_capacity = $request->input('tank_capacity');
        $sitting_height = $request->input('sitting_height');
        $price = $request->input('price');

        Motorcycle::create(
            [
            'bid' => $bid,
            'name'=>$name,
            'year'=>$year,
            'CC'=>$CC,
            'eid'=>$eid,
            'horsepower'=>$horsepower,
            'torque'=>$torque,
            'tank_capacity'=>$tank_capacity,
            'sitting_height'=>$sitting_height,
            'price'=>$price
        ]
        );

        return redirect('motorcycles');
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
        $brands= brand::all();
        $enginetypes= enginetype::all();
        return view("motorcycles.edit")->with(['motorcycle'=>$motorcycle])->with(['brands'=>$brands])->with(['enginetypes'=>$enginetypes]);;
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

    public function expensive()
    {
        $motorcycle = Motorcycle::expensive()->get();
        return view("motorcycles.index")->with(['motorcycles'=>$motorcycle]);
    }
    public function yamaha()
    {
        $motorcycle = Motorcycle::yamaha()->get();
        return view("motorcycles.index")->with(['motorcycles'=>$motorcycle]);
    }

    public function api_motorcycles()
    {
        return Motorcycle::all();
    }

    public function api_update(Request $request)
    {
        $motorcycle = Motorcycle::find($request->input('id'));
        if ($motorcycle == null)
        {
            return response()->json([
                'status' => 0,
            ]);
        }

        $motorcycle->bid = $request->input('bid');
        $motorcycle->name = $request->input('name');
        $motorcycle->CC = $request->input('CC');
        $motorcycle->eid = $request->input('eid');
        $motorcycle->horsepower = $request->input('horsepower');
        $motorcycle->torque = $request->input('torque');
        $motorcycle->tank_capacity = $request->input('tank_capacity');
        $motorcycle->sitting_height = $request->input('sitting_height');
        $motorcycle->price = $request->input('price');

        if ($motorcycle->save())
        {
            return response()->json([
                'status' => 1,
            ]);
        } else {
            return response()->json([
                'status' => 0,
            ]);
        }
    }

    public function api_delete(Request $request)
    {
        $motorcycle = Motorcycle::find($request->input('id'));

        if ($motorcycle == null)
        {
            return response()->json([
                'status' => 0,
            ]);
        }

        if ($enginetypes->delete())
        {
            return response()->json([
                'status' => 1,
            ]);
        }

    }
}
