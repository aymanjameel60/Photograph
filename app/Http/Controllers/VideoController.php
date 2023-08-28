<?php

namespace App\Http\Controllers;

use App\Http\Traits\StoreImageTrait;
use App\Models\Category;
use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    use StoreImageTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cats = Video::all();
        return view('Admin.Video.index', compact('cats'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.Video.create' );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'img' => 'required|mimes:png,jpg,jpeg,webp',
            'video' => 'required|mimes:mp4',
        ]);
        $request['myimg'] = $this->verifyAndStoreImage2($request, 'img');
        $request['myvideo'] = $this->verifyAndStoreImage2($request, 'video');
        Video::create([
            'img' => $request['myimg'],
            'video' => $request['myvideo']
        ]);

        return redirect()->route('admin.video.index')->with('success', 'Portfolio created successfully');
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
        $gall = Video::findOrFail($id);
        return view('Admin.Video.edit', compact('gall'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'img' => 'required|mimes:png,jpg,jpeg,webp',
            'video' => 'required|mimes:mp4',
        ]);

        $cat = Video::findOrFail($id);
        $request['myimg'] = $this->verifyAndStoreImage2($request, 'img');
        $request['myvideo'] = $this->verifyAndStoreImage2($request, 'video');

        $cat->update([
            'img' => $request['myimg'],
            'video' => $request['myvideo']
        ]);

        return redirect()->route('admin.video.index')->with('success', 'Video Updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cat = Video::findOrFail($id);

        $cat->delete();

        return redirect()->route('admin.video.index')->with('success', 'Video Deleted successfully');
    }
}
