<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Alamat;
use Auth;

class AlamatController extends Controller
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('profile/alamat');  
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
        $alamat = new Alamat;
        $alamat->idUser = Auth::user()->id;
        $alamat->name = $request->nama;
        $alamat->receiver = $request->receiver;
        $alamat->pos = $request->pos;
        $alamat->alamat = $request->alamat;
        $alamat->provinsi = $request->provinsi;
        $alamat->kota = $request->kota;
        $alamat->kecamatan = $request->kecamatan;
        $alamat->kelurahaan = $request->kelurahaan;
        $alamat->telepon = $request->telepon;
        $alamat->save();
        return redirect()->route('profile');
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
