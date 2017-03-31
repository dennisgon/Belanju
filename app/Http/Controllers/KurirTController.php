<?php

namespace App\Http\Controllers;
use App\KurirT;
use App\Pengiriman;
use App\Toko;
use Illuminate\Http\Request;

class KurirTController extends Controller
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
        $pengiriman = Pengiriman::all();
        return view('KurirT/create', compact('pengiriman'));
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
        $pengiriman = new KurirT();
        $tokoId = Toko::where('nama','=',session()->get('tokos')[0])->firstOrFail();;
        $pengiriman->toko_id = $tokoId->id;
        $pengiriman->save();
        $checkbox = $request->pengiriman;
        foreach ( $checkbox as $item) {
            $pengiriman->KurirTs()->attach($item, ['status' => 'active']);
        }

        return redirect()->route('home');
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
