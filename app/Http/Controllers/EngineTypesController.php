<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\EngineType;
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
        return '搜尋單一一筆資料 id=' .$id ;
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
}
