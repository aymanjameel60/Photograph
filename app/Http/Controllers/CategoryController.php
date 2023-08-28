<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cats = Category::all();
        return view('Admin.Category.index', compact('cats'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.Category.create' );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255'
        ]);

        Category::create([
            'name' => $request->name
        ]);
        return redirect()->route('admin.category.index')->with('success', 'category added successfully');
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
        $cat = Category::findOrFail($id);
        return view('Admin.Category.edit', compact('cat'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|max:255'
        ]);

        $cat = Category::findOrFail($id);

        $cat->update([
            'name' => $request->name
        ]);

        return redirect()->route('admin.category.index')->with('success', 'category Updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cat = Category::findOrFail($id);

        $cat->delete();

        return redirect()->route('admin.category.index')->with('success', 'category Deleted successfully');
    }
}
