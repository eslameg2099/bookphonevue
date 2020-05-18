<?php

namespace App\Http\Controllers;
use App\Http\Requests\PhonebookRequest;

use Illuminate\Http\Request;
use App\Phonebook;

class PhonebookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function getData()
    {
        return Phonebook::orderBy('name','ASC')->get();
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
    public function store( PhonebookRequest $request)
    {
        $pb = new Phonebook;
        $pb->name = $request->name;
        $pb->phone = $request->phone;
        $pb->email = $request->email;
        $pb->save();
        return $pb;
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
    public function update(PhonebookRequest $request)
    {
        $pb = Phonebook::find($request->id);
        $pb->name = $request->name;
        $pb->phone = $request->phone;
        $pb->email = $request->email;
        $pb->save();
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Phonebook $phonebook)
    {
        Phonebook::where('id',$phonebook->id)->delete();

        //
    }
}
