<?php

namespace App\Http\Controllers;

use App\Pesan;
use Illuminate\Http\Request;

class PesanController extends Controller
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
        $pesan = new Pesan();
        $pesan->subjek = $request->subjek;
        $pesan->message = $request->pesan;
        $pesan->user_id = $request->useri;
        $pesan->toko_id = $request->toko;
        $pesan->save();
        return redirect()->back();
    }

    public function storeOut(Request $request)
    {
        $pesan = new Pesan();
        $pesan->subjek = $request->subjek;
        $pesan->message = $request->pesan;
        $pesan->user_id = $request->useri;
        $pesan->toko_id = $request->toko;
        $pesan->status = "outbox";
        $pesan->save();
        return redirect()->back();
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
        $pesan = Pesan::with('toko')->where('status','inbox')->orderBy('created_at','desc')->get();
        return view('pesan/show', compact('pesan'));
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
