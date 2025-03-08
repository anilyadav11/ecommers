<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categorie;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $category = categorie::all();
        return view('admin.category.index', compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required',
            'slug' => 'required',
        ]);

        $category = new categorie;
        $category->name = $request->name;
        $category->slug = $request->slug;
        $category->save();
        return redirect()->route('admin.category.index')->with('success', 'Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category = categorie::find($id);
        return view('admin.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validateData = $request->validate([
            'name' => 'required',
            'slug' => 'required',
        ]);

        $category = categorie::find($id);
        $category->name = $request->name;
        $category->slug = $request->slug;
        $category->save();
        return redirect()->route('admin.category.index')->with('success', 'Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $delete = categorie::find($id);
        $delete->delete();
        return redirect()->route('admin.category.index')->with('success', 'Deleted Successfully');
    }
}
