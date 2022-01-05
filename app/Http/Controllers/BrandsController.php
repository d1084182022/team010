<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Motorcycle;
use Illuminate\Http\Request;

class BrandsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $brands= brand::all();
        return view("brands.index")->with(['brands'=>$brands]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("brands.create");
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

        $name = $request->input('name');
        $country = $request->input('country');


        brand::create(
            [
                'name'=>$name,
                'country'=>$country
            ]
        );

        return redirect('brands');
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
        $brand=brand::FindOrFail($id);
        return view('brands.show')->with(['brand'=>$brand]);
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
        $brand=brand::FindOrFail($id);
        return view("brands.edit")->with(['brand'=>$brand]);
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
        $brand = brand::findOrFail($id);
        $brand->name = $request->input('name');
        $brand->country = $request->input('country');
        $brand->save();

        return redirect('brands');
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
        $brand = brand::findOrFail($id);
        $brand->delete();
        return redirect('brands');
    }

    public function api_brands()
    {
        return brand::all();
    }

    public function api_update(Request $request)
    {
        $brand = brand::find($request->input('id'));
        if ($brand == null)
        {
            return response()->json([
                'status' => 0,
            ]);
        }

        $brand->name = $request->input('name');
        $brand->country = $request->input('country');

        if ($brand->save())
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
        $brand = brand::find($request->input('id'));

        if ($brand == null)
        {
            return response()->json([
                'status' => 0,
            ]);
        }

        if ($brand->delete())
        {
            return response()->json([
                'status' => 1,
            ]);
        }

    }
}
