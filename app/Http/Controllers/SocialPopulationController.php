<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SocialPopulation;

class SocialPopulationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $socpul = SocialPopulation::all();
        return view('Social_population.index', compact('socpul'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $socpul = SocialPopulation::all();
        return view('Social_population.addForm', compact('socpul'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $socpul = new SocialPopulation();

        $socpul->sospol_type=$request->type;
        $socpul->save();

        return redirect()->route('socpul.index')->with('status', 'Data Jenis Sosial dan Kependudukan Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $socpul = SocialPopulation::find($id);
        return view('Social_population.detailForm', compact('socpul')); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $socpul = SocialPopulation::find($id);
        return view('Social_population.editForm', compact('socpul'));
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
        $socpul = SocialPopulation::find($id);
        $socpul->sospol_type=$request->type;
        $socpul->save();

        return redirect()->route('socpul.index')->with('status', 'Data Jenis Sosial dan Kependudukan Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $socpul = SocialPopulation::find($id);
        $socpul->delete();

        return redirect()->route('socpul.index')->with('status', 'Data Jenis Sosial dan Kependudukan Berhasil Dihapus');
    }
}
