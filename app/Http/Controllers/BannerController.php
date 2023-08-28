<?php

namespace App\Http\Controllers;

use App\Http\Traits\StoreImageTrait;
use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    use StoreImageTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $banner = Banner::first();
        return view('Admin.Banner.edit', compact('banner'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'img' => 'sometimes|mimes:png,jpg,jpeg,webp'
        ]);
        $banner = Banner::first();
        $requestData = $request->only(['img', 'face', 'twit', 'insta', 'tiktok']);
        if($request->hasFile('img')) {
            $requestData['img'] = $this->verifyAndStoreImage2($request, 'img');
        }
        else {
            $requestData['img'] = $banner->img;
        }

        $banner->update($requestData);
        return redirect()->back()->with('success', 'updated successfully');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
