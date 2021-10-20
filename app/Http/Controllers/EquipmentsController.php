<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Equipments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EquipmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Categories::all();
        $equipments = Equipments::select('equipments.*','categories.name as nameCategories')->join('categories','equipments.category_id','=', 'categories.id')->get();
        return view('equipments.index', compact('equipments', 'categories'));
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
/*
       $request->validate([
        'equipment'         => 'required',
        'model'             => 'required',
        'brand'             => 'required',
        'category_id'       => 'required',
        'detail'            => 'required',
        'number'            =>  'required',


        ]);


         Equipments::create([

            'equipment'    => $request['equipment'],
            'model'        => $request['model'],
            'brand'        => $request['brand'],
            'category_id'  => $request['category_id'],
            'detail'       => $request['detail'],
            'number'       => $request['number'],
        ]); */

      /*   $request->validate([
            'equipment'         => 'required',
            'model'             => 'required',
            'brand'             => 'required',
            'category_id'       => 'required',
            'detail'            => 'required',
            'number'            =>  'required',


            ]); */

        $equipments               =  new Equipments();
        $equipments->equipment    =  $request->equipment;
        $equipments->model        =  $request->model;
        $equipments->brand        =  $request->brand;
        $equipments->category_id  =  $request->category_id;
        $equipments->detail       =  $request->detail;
        $equipments->n_inventory  =  $request->n_inventory;
        $equipments->save();
        return redirect('/equipments');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Equipments  $equipments
     * @return \Illuminate\Http\Response
     */
    public function show(Equipments $equipments)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Equipments  $equipments
     * @return \Illuminate\Http\Response
     */
    public function edit(Equipments $equipments)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Equipments  $equipments
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Equipments $equipments)
    {
        $request->validate([
            'equipment'        => 'required',
            'model'            => 'required',
            'brand'            => 'required',
            'category_id'      =>  'required',
            'detail'           => 'required',
            'n_inventory'      => 'required'
        ]);

        $row = DB::table('equipments')
        ->where('id', $request->id)
        ->update(['equipment' => $request->equipment,
        'model' => $request->model,
        'brand' => $request->brand,
        'category_id' => $request->category_id,
        'detail'     => $request->detail,
        'n_inventory'  => $request->n_inventory,
         ]);

        return redirect()->route('equipments.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Equipments  $equipments
     * @return \Illuminate\Http\Response
     */
    public function destroy(Equipments $equipments, $id)
    {
        $equipments = Equipments::find($id);
        $equipments->delete();

        return redirect()->route('equipments.index');
    }
}
