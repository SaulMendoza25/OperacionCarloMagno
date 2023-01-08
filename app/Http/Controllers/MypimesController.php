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
        $datos['mipymes'] = mypimes::paginate(5);
        return view('mipyme.index', $datos);
        //
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mipyme.create');
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
        $datosmipymes = request()->except('_token');
        if ($request->hasFile('up_image_logo'))
            $datosmipymes['up_image_logo'] = $request->file('up_image_logo')->store('uploads', 'public');
        if ($request->hasFile('image'))
            $datosmipymes['image'] = $request->file('image')->store('uploads', 'public');
        mypimes::insert($datosmipymes);
        return response()->json($datosmipymes);
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
    public function edit($id)
    {
        $mypimes = mypimes::findOrFail($id);
       
        return view('mipyme.edit', compact('mypimes'));
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
    public function destroy($id)
    {
        mypimes::destroy($id);
        return redirect('mipyme');
    }
}
