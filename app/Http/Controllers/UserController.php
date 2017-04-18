<?php

namespace App\Http\Controllers;

use App\Toko;
use Illuminate\Http\Request;
use App\User;
use Auth;
use DB;

class UserController extends Controller
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
        $user = new User;
        $user->name = $request->name;
        $user->username = $request->username;
        $user->nohp = $request->nohp;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->foto = "null";
        $user->save();
        Auth::login($user);
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
        $user = User::where('username','=',$id)->firstOrFail();
        $alamat = DB::table('alamats')->where([
            ['status','primary'],
            ['user_id',Auth::user()->id],
        ])->get();
        // $alamat = DB::table('alamats')->where('iduser', '9')->first();

        return view ('profile/profile', compact('user','alamat'));

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
        $user = User::findOrFail($id);
        if (!$user) {
            return "tidak ada data";
        }else{
            return view ('profile/edit', compact('user'));

        }
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
        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->nohp = $request->nohp;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->foto = "null";
        $user->save();
        return view('profile/profile', compact('user','alamat'));

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

    public function trlogin(Request $request){
        if (Auth::attempt(['email' => $request->username, 'password' => $request->password])) {

            //$request->session()->flush();
            $user = User::find(Auth::user()->id);

            $tokoArray = array();
            foreach ($user->tokos as $toko){
               $tokoArray [] = $toko->nama;
            }
            print_r($tokoArray);
            if (empty($tokoArray)){
                return redirect()->route('home');
            }else{
                $request->session()->put('tokos', $tokoArray);
                var_dump($request->session()->get('toko'));
                return redirect()->route('home');
            }


            //$request->session()->put('toko', '');
        }else{
            echo "gagal";
        }
    }

}
