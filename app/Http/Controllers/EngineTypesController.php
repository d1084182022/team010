<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\EngineType;
use App\Models\Motorcycle;
use Illuminate\Http\Request;

class EngineTypesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $enginetypes= enginetype::all();
        return view("enginetypes.index")->with(['enginetypes'=>$enginetypes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("enginetypes.create");
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
        $engine_type = $request->input('engine_type');
        enginetype::create(
            [
                'engine_type'=>$engine_type
            ]
        );

        return redirect('enginetypes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $engine_type = enginetype::findOrFail($id);
        return view('enginetypes.show')->with(['engine_type'=>$engine_type]);
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
        $engine_type = enginetype::findOrFail($id);
        return view("enginetypes.edit")->with(['engine_type'=>$engine_type]);
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
        $engine_type = enginetype::findOrFail($id);
        $engine_type->engine_type = $request->input('engine_type');
        $engine_type->save();

        return redirect('enginetypes');
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
        $enginetypes = enginetype::findOrFail($id);
        $enginetypes->delete();
        return redirect('enginetypes');
    }

    public function api_enginetypes()
    {
        return enginetype::all();
    }

    public function api_update(Request $request)
    {
        $enginetypes = enginetype::find($request->input('id'));
        if ($enginetypes == null)
        {
            return response()->json([
                'status' => 0,
            ]);
        }

        $enginetypes->engine_type = $request->input('engine_type');

        if ($enginetypes->save())
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
        $enginetypes = enginetype::find($request->input('id'));

        if ($enginetypes == null)
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
