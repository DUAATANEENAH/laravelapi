<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\request_clinic;
class request_clinicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return all data from table 
        $request=request_clinic::all();
        return $request;
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response;
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
        //add new request
        $request_clinic=new request_clinic;
        $request_clinic->clinic_id = $request->clinic_id;
        $request_clinic->full_name = $request->full_name;
        $request_clinic->mobile_number=$request->mobile_number;
        $request_clinic->email=$request->email;
        $request_clinic->appointment_date=$request->appointment_date;
        $request_clinic->save();
        return response()->json($request_clinic, 201);
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
        //add new request
        $request_clinic=request_clinic::find($id);
        $request_clinic->approved = $request->approved;
        $request_clinic->save();
        return response()->json($request_clinic, 201);
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
    }
}
