<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $cate = Categories::all();
        // code helper function
        $result = dataCount($cate);
        return view('component.cate.index', compact('cate','result'));


    }

    public function getsingers()
    {
        $categories = Categories::all();
        return view('component.front end.homepage', compact('categories'));

    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $cate = Categories::all();
        return view('component.cate.create', compact('cate'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $image = time() . '.' . $request->image->extension();
        $request->image->move(public_path('category'), $image);
        $cate = new Categories();
        $cate->name =  $request->name;
        $cate->logo =  $image;
        $cate->description = $request->description;
        $cate->date =  $request->date;
        $cate->save();
        return redirect()->route('cate.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //  $cate = Categories::findOrfail($id);
        // return view('component.cate.show', compact('cate'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $cate = Categories::find($id);
        return view('component.cate.edit', compact('cate'));


    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        // dd($request);
        $cate = Categories::find($id);

        if (!$request->image) {
            $image = $cate->logo;
        } else {

            $image = time() . '.' . $request->image->extension();
            $request->image->move(public_path('cate'), $image);
        }

        $cate->name = $request->input('name');
        $cate->logo = $image;
        $cate->description = $request->input('description');

        $cate->date = $request->input('date');
        $cate->update();
        return redirect()->route('cate.index')->with(' Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $cate = Categories::find($id)->delete();
        return redirect()->route('cate.index')->with(' Deleted Successfully');
    }
}
