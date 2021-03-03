<?php

namespace App\Http\Controllers;

use App\addresss;
use Illuminate\Http\Request;

class AddresssController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('\address\address');
        //
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\addresss  $addresss
     * @return \Illuminate\Http\Response
     */
    public function show(addresss $addresss)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\addresss  $addresss
     * @return \Illuminate\Http\Response
     */
    public function edit(addresss $addresss)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\addresss  $addresss
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, addresss $addresss)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\addresss  $addresss
     * @return \Illuminate\Http\Response
     */
    public function destroy(addresss $addresss)
    {
        //
    }
}
