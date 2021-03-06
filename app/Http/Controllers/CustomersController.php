<?php

namespace App\Http\Controllers;

use App\Models\Customers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = Customers::all();
        return view('customers.index', compact('customers'));
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
        $row                       = new Customers();
        $row->name                 = $request->name;
        $row->lastname             = $request->lastname;
        $row->identification_nit   = $request->identification_nit;
        $row->address              = $request->address;
        $row->email                = $request->email;
        $row->telephone            = $request->telephone;
        $row->description          = $request->description;

        $row->save();

        return redirect('/customers');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customers  $customers
     * @return \Illuminate\Http\Response
     */
    public function show(Customers $customers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Customers  $customers
     * @return \Illuminate\Http\Response
     */
    public function edit(Customers $customers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Customers  $customers
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customers $customers)
    {
        $request->validate([
            'name'     => 'required',
            'lastname'      => 'required',
            'identification_nit'          => 'required',
            'address'            =>  'required',
            'email'    => 'required',
            'telephone'      => 'required',
            'description'       => 'required',
             

        ]);

        $row = DB::table('customers')
        ->where('id', $request->id)
        ->update(['name' => $request->name,
        'lastname' => $request->lastname,
        'identification_nit' => $request->identification_nit,
        'address' => $request->address,
        'email'     => $request->email,
        'telephone'  => $request->telephone,
        'description'  => $request->description,

         ]);

         return redirect()->route('customers.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customers  $customers
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customers $customers, $id)
    {
        $customers =Customers::find($id);
        $customers->delete();

        return redirect()->route('customers.index');
    }
}
