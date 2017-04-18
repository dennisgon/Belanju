<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Cart;
class CartController extends Controller
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
//        $cartItem = Cart::add(, , , );
        //$cartItem = Cart::add(, , , , [],[]);
        Cart::add($request->id, $request->nama,  $request->qty, $request->harga, ['size' => $request->pengiriman, 'image' => $request->gambar,'pengiriman' => $request->pengiriman]);
        return redirect()->route('home');
        foreach(Cart::content() as $row){
            echo $row->options->gambar;
            echo $row->id;
        }
//        var_dump($request->gambar);
        //var_dump($cartItem);
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

    public  function remove($id)
    {
        Cart::remove($id);
        return redirect()->back();
    }
}
