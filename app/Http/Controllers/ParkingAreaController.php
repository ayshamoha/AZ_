<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ParkingArea;

class ParkingAreaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //retrieving the table
        $parking_areas = ParkingArea::all();
        return view('index_parking_area')->with('parking_areas',$parking_areas);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('create_parking_area');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate the request
        $this->validate($request,['name'=>'required',
                                  'longitude'=>'required',
                                  'latitude'=>'required',
                                  'slots_number'=>'numeric'  
                                    ]);
        //storing the request
        $parking_area = new ParkingArea;
        $parking_area->name = $request->name;
        $parking_area->longitude = $request->longitude;
        $parking_area->latitude = $request->latitude;
        $parking_area->slots_number = $request->slots_number;
        $parking_area->save();
        //redirecting
        return redirect()->route('ParkingArea.show',['id'=>$parking_area->id]);



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //obtaining the record form the data base
        $parking_area = ParkingArea::find($id);
        //returning the show view with this record
        return view('show_parking_area')->with('parking_area',$parking_area);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //obtaining the record form the data base
        $parking_area = ParkingArea::find($id);
        //returning the edit view with this record
        return view('edit_parking_area')->with('parking_area',$parking_area);

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
        //validate the request
        $this->validate($request,['name'=>'required',
                                  'longitude'=>'required',
                                  'latitude'=>'required',
                                  'slots_number'=>'numeric'  
                                    ]);
        //storing the request
        $parking_area = ParkingArea::find($id);
        $parking_area->name = $request->input('name');
        $parking_area->longitude = $request->input('longitude');
        $parking_area->latitude = $request->input('latitude');
        $parking_area->slots_number = $request->input('slots_number');
        $parking_area->save();
        //redirecting
        return redirect()->route('ParkingArea.show',['id'=>$parking_area->id]);


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
        ParkingArea::where('id',$id)->delete();
        //redirect
        return redirect()->route('ParkingArea.index');


    }
}
