<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Alamat;
use Auth;
use App\User;
use Session;

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
        // return view('profile/alamat/changeAlamat');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('profile/alamat/alamat');  
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
        $user = User::find(Auth::user()->id);
        $alamat = new Alamat;
        if (!Alamat::where('user_id', Auth::user()->id)) {
            # code...
            $alamat->status = "primary";
        }
        $alamat->name = $request->nama;
        $alamat->receiver = $request->receiver;
        $alamat->pos = $request->pos;
        $alamat->alamat = $request->alamat;
        $alamat->provinsi = $request->provinsi;
        $alamat->kota = $request->kota;
        $alamat->kecamatan = $request->kecamatan;
        $alamat->kelurahaan = $request->kelurahaan;
        $alamat->telepon = $request->telepon;
        $user->alamats()->save($alamat);
        return redirect()->route('profile', Auth::user()->username);
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
        $alamat = Alamat::where('user_id','=',$id)->orderBy('status', 'asc')->get();
        
        return view('profile/alamat/changeAlamat', compact('alamat'));
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
        $alamat = Alamat::findOrFail($id);
        return response()->json($alamat);
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
        //$task->task = $request->task;
        $alamat = Alamat::findOrFail($id);
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
        return redirect()->route('alamat.show',Auth::user()->id);
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
        $alamat = Alamat::findOrFail($id);
        $alamat->delete();

        Session::flash('flash_message', 'Alamat successfully deleted!');

        return redirect()->route('alamat.show',Auth::user()->id);
    }

    public function changestatus($id,$user_id)
    {        
        $alamat2 = Alamat::where([['user_id','=',$user_id], ['status','=','primary']])->firstOrFail();
        $alamat2->status = "secondary";
        $alamat2->save();

        $alamat = Alamat::findOrFail($id);
        $alamat->status = "primary";
        $alamat->save();
        return redirect()->back();
    }
}
