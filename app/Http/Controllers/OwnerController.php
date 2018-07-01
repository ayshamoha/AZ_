<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Owner;

class OwnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $owners = Owner::all();
        return view('index_owner')->with('owners',$owners);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('create_owner');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validation
        $this->validate($request,['email'=>'email',
                                  'name'=>'required',
                                  'phone_number'=>'numeric'
                                  ]);
        //storing
        $owner = new Owner;
        $owner->email = $request->email;
        $owner->name = $request->name;
        $owner->phone_number = $request->phone_number;
        $owner->save();
        //redirect
        return redirect()->route('Owner.show',['id'=>$owner->id]);


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
        $owner = Owner::find($id);
        return view('show_owner')->with('owner',$owner);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //obtaining the record
        $owner = Owner::find($id);
        //return to a view
        return view('edit_owner')->with('owner',$owner);
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
        //validating the request
        $this->validate($request,['email'=>'email',
                                  'name'=>'required',
                                  'phone_number'=>'numeric'
                                  ]);
        //updating the data
        $owner = Owner::find($id);
        $owner->email = $request->input('email');
        $owner->name = $request->input('name');
        $owner->phone_number = $request->input('phone_number');
        $owner->save();
        //redirect
        return redirect()->route('Owner.show',['id'=>$owner->id]);



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
        Owner::where('id',$id)->delete();
        //redirecting
        return redirect()->route('Owner.index');
    }
}
