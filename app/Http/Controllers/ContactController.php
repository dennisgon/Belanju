<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use URL;
use App\Image;
use Validator;

class contactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $path =resource_path('json/contact.json');
        $content = json_decode(file_get_contents($path), true);
        return view('admin/contact',compact('content'));   
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
        $path =resource_path('json/contact.json');
        $data['Alamat'] = $request->alamat;
        $data['noTelepon'] = $request->notelp;
        $data['email'] = $request->Email;
        $data['facebook'] = $request->facebook;
        $data['twitter'] = $request->twitter;
        $data['googlePlus'] = $request->googleplus;
        $data['youtube'] = $request->youtube;
        file_put_contents($path,json_encode($data,true));
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
