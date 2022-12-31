<?php

namespace App\Http\Controllers;

use App\Models\mypimes;
use Illuminate\Http\Request;

class MypimesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('mipyme.index');
        //
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mipyme.form');
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
     * @param  \App\Models\mypimes  $mypimes
     * @return \Illuminate\Http\Response
     */
    public function show(mypimes $mypimes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\mypimes  $mypimes
     * @return \Illuminate\Http\Response
     */
    public function edit(mypimes $mypimes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\mypimes  $mypimes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, mypimes $mypimes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\mypimes  $mypimes
     * @return \Illuminate\Http\Response
     */
    public function destroy(mypimes $mypimes)
    {
        //
    }
}
