<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;

use App\Jabatan;

use Session;

use Hash;

use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function __construct(){
        $this->middleware('admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::paginate(5);
        return view('admin.user.index')->withUsers($users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jabatans = Jabatan::all();
        return view('admin.user.create')->withJabatans($jabatans);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, array(
                'id' => 'required',
                'name' => 'required|max:255',
                'email' => 'required|email|max:255|unique:users',
                'jabatanid' => 'required|integer',
                'password' => 'required|min:6|confirmed',
            ));

        $user = new User;

        $user->id = $request->id;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->jabatanid = $request->jabatanid;
        $user->password = Hash::make($request->password);

        $user->save();

        Session::flash('csuccess', 'Data berhasil ditambah!');
        //mahasiswa::create(Request::all());
        return redirect()->route('admin.user.index');
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
        $user = User::find($id);
        $jabatans = Jabatan::all();
        $jabs = array();
        foreach ($jabatans as $jabatan){
            $jabs[$jabatan->id] = $jabatan->nama;
        }
        return view('admin.user.edit')->withUser($user)->withJabatans($jabs);
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
        $this->validate($request, array(
                'id' => 'required',
                'name' => 'required|max:255',
                'email' => 'required|email|max:255|unique:users',
                'jabatanid' => 'required|integer',
            ));

        $user = User::find($id);

        $user->id = $request->input('id');
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->jabatanid = $request->input('jabatanid');

        $user->save();

        Session::flash('usuccess', 'Data berhasil diubah!');
        //mahasiswa::create(Request::all());
        return redirect()->route('admin.user.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);

        $user->delete();

        Session::flash('dsuccess', 'Data telah dihapus!');

        return redirect()->route('admin.user.index');
    }
}
