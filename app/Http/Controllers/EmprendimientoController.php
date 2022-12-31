<?php

namespace App\Http\Controllers;

use App\Models\emprendimiento;
use Illuminate\Http\Request;

class EmprendimientoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['emprendimiento']=emprendimiento::paginate(5);
        return view('emprendimiento.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('emprendimiento/create');
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
        // $datosemprendimiento = request()->all();

        $datosemprendimiento = request()->except('_token');
        if($request->hasFile('upload_proyect'))
     
        $datosemprendimiento['upload_proyect']=$request->file('upload_proyect')->store('uploads-PDF','public');
        $mamstes="la cantidad de byte es: " . filesize($request->file('upload_proyectk'));
        if($request->hasFile('up_image_logo'))
        $datosemprendimiento['up_image_logo']=$request->file('up_image_logo')->store('uploads','public');

        if($request->hasFile('up_image_main_products'))
        $datosemprendimiento['up_image_main_products']=$request->file('up_image_main_products')->store('uploads','public');

        if($request->hasFile('up_image_main_mark'))
        $datosemprendimiento['up_image_main_mark']=$request->file('up_image_main_mark')->store('uploads','public');
        
        emprendimiento::insert($datosemprendimiento);
        return response()->json($datosemprendimiento);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\emprendimiento  $emprendimiento
     * @return \Illuminate\Http\Response
     */
    public function show(emprendimiento $emprendimiento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\emprendimiento  $emprendimiento
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $emprendimiento=emprendimiento::findOrFail($id);
        return view('emprendimiento/edit' , compact('emprendimiento'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\emprendimiento  $emprendimiento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, emprendimiento $emprendimiento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\emprendimiento  $emprendimiento
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        emprendimiento::destroy($id);
        return redirect('emprendimiento');
    }
}
