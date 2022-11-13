<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\SubCategory;

class SubCategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sub_categories = SubCategory::all();
        $categories = Category::all();
        return view('SubCategory.index',compact('sub_categories','categories'));
    }

    /**
     * Show the form for creating a new resource.
     *9
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('SubCategory.addForm',compact('categories'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // SubCategory::create([
        //     'sub_categories_type' => $request->sub_categories_type,
        //     'id_categories' => $request->id_categories,
        // ]);

        $validate =  $request->validate([
            'sub_categories_type' => 'required|string',
            'id_categories' => 'required'
        ]);

        SubCategory::create($validate);

        return redirect()->route('subcategory.index')->with('status', 'Data Sub Kategori Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sub_categories = SubCategory::find($id);
        $categories= Category::find($id);
        return view('SubCategory.detailForm', compact('categories','sub_categories'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sub_categories= SubCategory::find($id);
        $categories= Category::all();
        return view('SubCategory.editForm', compact('sub_categories','categories'));
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
        // $sub_categories= SubCategory::with('guestCategory')->find($id);
        // $sub_categories->sub_categories_type=$request->sub_categories_type;
        // $sub_categories->id_categories=$request->id_categories;

        // $sub_categories->save();
        $sub_categories = SubCategory::with('guestCategory')->find($id);

        $validate =  $request->validate([
            'sub_categories_type' => 'required|string',
            'id_categories' => 'required'
        ]);

        $sub_categories->update($validate);

        return redirect()->route('subcategory.index')->with('status', 'Data Sub Kategori Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sub_categories  = SubCategory::find($id);
        $sub_categories ->delete();

        return redirect()->route('subcategory.index')->with('status', 'Data Sub Kategori Berhasil Dihapus');
    }
}
