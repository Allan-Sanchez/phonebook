<?php

namespace App\Http\Controllers;

use App\Phonebook;
use Illuminate\Http\Request;
use App\Http\Requests\RequestPhonebook;

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
        return view('phonebook');
    }

    public function getData()
    {
        return Phonebook::orderBy('name', 'ASC')->get();
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
    public function store(RequestPhonebook $request)
    {

        $newPhone = new Phonebook;
        $newPhone->name = $request->name;
        $newPhone->phone = $request->phone;
        $newPhone->email = $request->email;
        $newPhone->save();       
        
        return $newPhone;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Phonebook  $phonebook
     * @return \Illuminate\Http\Response
     */
    public function show(Phonebook $phonebook)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Phonebook  $phonebook
     * @return \Illuminate\Http\Response
     */
    public function edit(Phonebook $phonebook)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Phonebook  $phonebook
     * @return \Illuminate\Http\Response
     */
    public function update(RequestPhonebook $request)
    {
        $newPhone = Phonebook::findOrfail($request->id);
        $newPhone->name = $request->name;
        $newPhone->phone = $request->phone;
        $newPhone->email = $request->email;
        $newPhone->save();
        
        return $newPhone;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Phonebook  $phonebook
     * @return \Illuminate\Http\Response
     */
    public function destroy(Phonebook $phonebook)
    {
        //
        Phonebook::where('id',$phonebook->id)->delete();
    }
}
