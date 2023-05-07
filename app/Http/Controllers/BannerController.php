<?php

namespace App\Http\Controllers;

use App\Models\banner;

use Illuminate\Http\Request;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banner = banner::latest()->paginate(5);

        return view('banner.index',compact('banner'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('banner.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $validatedData = $request->validate([

            'file' => 'required',

        ]);
        $image = $request->file('file');

        $path = public_path('images');
        $image->move($path, $image->getClientOriginalName());
        $banner = new Banner();
        $banner['title'] = $request->title;
        $banner['subtitle'] = $request->subtitle;
        $banner['image'] = $image->getClientOriginalName();
        $banner->save();
        return redirect()->route('banner.index')->with('Success','Banner created sucessfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $category
     * @return \Illuminate\Http\Response
     */
    public function show(banner $banner)
    {
        return view('banner.show',compact('banner'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(banner $banner)
    {
        return view('banner.edit',compact('banner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, banner $banner)
    {
        $request->validate([
            'title' => 'required',
            'subtitle' => 'required',
        ]);

        $banner->update($request->all());

        return redirect()->route('banner.index')
            ->with('success','banner updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\category  $Category
     * @return \Illuminate\Http\Response
     */
    public function destroy(banner $banner)
    {
        $banner->delete();

        return redirect()->route('banner.index')
            ->with('success',' deleted successfully');
    }
}
