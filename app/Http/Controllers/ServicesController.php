<?php

namespace App\Http\Controllers;

use App\Models\Services;
use App\Models\Equipments;
use App\Models\Customers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $equipments = Equipments::all();
        $customers  = Customers::all();
        $user       = User::all();
        $services   = Services::all();
        return view('services.index', compact('equipments', 'customers', 'user', 'services'));
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

        $services                 =  new Services();
        $services->equipment_id   =  $request->equipment_id;
        $services->customer_id    =  $request->customer_id;
        $services->user_id        =  $request->user_id;
        $services->state          =  $request->state;
        $services->type_service   =  $request->type_service;
        $services->description    =  $request->description;
        $services->date_entry     =  $request->date_entry;
        $services->deadline       =  $request->deadline;
        $services->solution_diagn =  $request->solution_diagn;
        $services->detail         =  $request->detail;
        $services->total          =  $request->total;
        $services->save();
        return redirect('/services');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Services  $services
     * @return \Illuminate\Http\Response
     */
    public function show(Services $services)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Services  $services
     * @return \Illuminate\Http\Response
     */
    public function edit(Services $services)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Services  $services
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Services $services)
    {
        $request->validate([
            'equipment_id'     => 'required',
            'customer_id'      => 'required',
            'user_id'          => 'required',
            'state'            =>  'required',
            'type_service'    => 'required',
            'description'      => 'required',
            'date_entry'       => 'required',
            'deadline'         => 'required',
            'solution_diagn'   => 'required',
            'detail'           => 'required',
            'total'           => 'required',

        ]);

        $row = DB::table('services')
        ->where('id', $request->id)
        ->update(['equipment_id' => $request->equipment_id,
        'customer_id' => $request->customer_id,
        'user_id' => $request->user_id,
        'state' => $request->state,
        'type_service'     => $request->type_service,
        'description'  => $request->description,
        'date_entry'  => $request->date_entry,
        'deadline'  => $request->deadline,
        'solution_diagn'  => $request->solution_diagn,
        'detail'  => $request->detail,
        'total'  => $request->total,

         ]);

        return redirect()->route('services.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Services  $services
     * @return \Illuminate\Http\Response
     */
    public function destroy(Services $services)
    {
        //
    }
}
