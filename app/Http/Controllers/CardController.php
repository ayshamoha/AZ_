<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Card;

class CardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $cards = Card::all();
        return view('index_cards')->with('cards',$cards);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('create_cards');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate the data
        $this->validate($request,['Rfid_number'=>'required','Qr_number'=>'required']);
        //store data
        $card = new Card;
        $card->Rfid_number = $request->Rfid_number;
        $card->Qr_number = $request->Qr_number;
        $card->save();
        //redirect
        return redirect()->route('Card.show',['id'=>$card->id]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //obtaining the user
        //$card_id = $id;
        $card = Card::find($id);
        //
        return view('show_cards')->with('card',$card);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //obtain the element
        $card = Card::find($id);
        //return the view that allows editing .....from there implement update which actually insert or put the new value in the data base
        return view('edit_card')->with('card',$card);

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
        //validating the data
        $this->validate($request,['Rfid_number'=>'required','Qr_number'=>'required']);
        //obtaining the record to be updated
        $card = Card::find($id);
        $card->Rfid_number = $request->input('Rfid_number');
        $card->Qr_number = $request->input('Qr_number');
        $card->save();
        //redirecting
        return redirect()->route('Card.show',['id'=>$card->id]);


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //obtaining the record and deleting it        
        Card::where('id',$id)->delete();      
        
        //redirecting
        return redirect()->route('Card.index');
    }
}
