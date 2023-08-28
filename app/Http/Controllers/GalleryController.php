<?php

namespace App\Http\Controllers;

use App\Http\Traits\StoreImageTrait;
use App\Models\Category;
use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    use StoreImageTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cats = Gallery::latest()->get();
        return view('Admin.Gallery.index', compact('cats'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cats = Category::all();
        return view('Admin.Gallery.create', compact('cats'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'img' => 'required|mimes:png,jpg,jpeg,gif,webp',
            'category_id' => 'required'
        ]);
        $request['myimg'] = $this->verifyAndStoreImage2($request, 'img');
        Gallery::create([
            'name' => $request->name,
            'category_id' => $request->category_id,
            'img' => $request['myimg']
        ]);

        return redirect()->route('admin.gallery.index')->with('success', 'Portfolio created successfully');

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
        $cats = Category::all();
        $gall = Gallery::findOrFail($id);
        return view('Admin.Gallery.edit', compact('cats', 'gall'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
        $request->validate([
            'name' => 'required',
            'category_id' => 'required'
        ]);
        $gall = Gallery::findOrFail($id);
        if($request->hasFile('img')) {
            $request['myimg'] = $this->verifyAndStoreImage2($request, 'img');
        }
        else {
            $request['myimg']  = $gall->img;
        }
        $gall->update([
            'name' => $request->name,
            'category_id' => $request->category_id,
            'img' => $request['myimg']
        ]);

        return redirect()->route('admin.gallery.index')->with('success', 'Portfolio created successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cat = Gallery::findOrFail($id);

        $cat->delete();

        return redirect()->route('admin.gallery.index')->with('success', 'gallery Deleted successfully');
    }
}
