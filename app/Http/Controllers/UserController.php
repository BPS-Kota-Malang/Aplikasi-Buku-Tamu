<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengguna = User::all();
        return view('Auth.index', compact('pengguna'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $pengguna = User::all();
        // return view('Auth.addForm', compact('pengguna'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $pengguna = new User();

        // $pengguna->name=$request->name;
        // $pengguna->email=$request->email;
        // $pengguna->save();

        // return redirect()->route('list.index')->with('status', 'Data Admin Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $pengguna = User::find($id);
        // return view('Auth.detailForm', compact('pengguna')); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $pengguna = User::find($id);
        // return view('Auth.editForm', compact('pengguna'));
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
        // $pengguna = User::find($id);

        // $pengguna->name=$request->name;
        // $pengguna->email=$request->email;
        // $pengguna->save();

        // return redirect()->route('list.index')->with('status', 'Data Admin Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pengguna = User::find($id);
        $pengguna->delete();

        return redirect()->route('list.index')->with('status', 'Data Admin Berhasil Dihapus');
    }
}