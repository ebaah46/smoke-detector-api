<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Data extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Return all data in DB
        $data = \App\Data::all();
        return response()->json([
            'success'=>true,
            'data'=>$data
        ],200);
    }

    /*
     * Display based on specific date
     *
    */

    public function search($date){
        $per_date = \App\Data::all()->whereDate('created_at',$date);
        return response()->json([
            'success'=>true,
            'data'=> $per_date
        ],200);
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
        // Create new data model
        try{
            $data = \App\Data::create(['data'=>$request->data]);
            return response()->json([
                'success'=>true,
                'msg'=>'data successfully created',
                'data'=> $data,
            ],201);

        }catch (\Exception $e){
            report($e);
            return response()->json([
               'success'=>false,
               'msg'=>'failed',
               'data'=>$e
            ],500);
        }

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
        //
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
