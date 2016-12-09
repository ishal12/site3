<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Laboratorium;

use App\User;

use Session;

use Illuminate\Support\Facades\Auth;

class LaboratoriumController extends Controller
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
        $laboratoriums = Laboratorium::paginate(5);
        return view('admin.laboratorium.index')->withLaboratoriums($laboratoriums);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        return view('admin.laboratorium.create')->withUsers($users);
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
                'nama' => 'required|max:255',
                'kalabid' => 'required|integer',
            ));

        $laboratorium = new Laboratorium;

        $laboratorium->nama = $request->nama;
        $laboratorium->kalabid = $request->kalabid;

        $laboratorium->save();

        Session::flash('csuccess', 'Data berhasil ditambah!');
        //mahasiswa::create(Request::all());
        return redirect()->route('admin.laboratorium.index');
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
        $laboratorium = Laboratorium::find($id);
        $users = User::all();
        $uss = array();
        foreach ($users as $user){
            if($user->jabatanid == 4){
                $uss[$user->id] = $user->name;
            }
        }
        return view('admin.laboratorium.edit')->withLaboratorium($laboratorium)->withUsers($uss);
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
                'nama' => 'required|max:255',
                'kalabid' => 'required|integer',
            ));

        $laboratorium = Laboratorium::find($id);

        $laboratorium->nama = $request->input('nama');
        $laboratorium->kalabid = $request->input('kalabid');

        $laboratorium->save();

        Session::flash('csuccess', 'Data berhasil ditambah!');
        //mahasiswa::create(Request::all());
        return redirect()->route('admin.laboratorium.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $laboratorium = Laboratorium::find($id);

        $laboratorium->delete();

        Session::flash('dsuccess', 'Data telah dihapus!');

        return redirect()->route('admin.laboratorium.index');
    }
}
