<?php

namespace App\Http\Controllers;

use App\Models\main;
use Illuminate\Http\Request;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $main = main::latest()->paginate(5);

        return view('main.index',compact('main'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('main.create');
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

            'vision_img' => 'required',
            'mission_img' => 'required',
            'about_img' => 'required',

        ]);
        $v_image = $request->file('vision_img');
        $a_image = $request->file('mission_img');
        $m_image = $request->file('about_img');

        $path = public_path('images');
        $m_image->move($path, $m_image->getClientOriginalName());
        $a_image->move($path, $a_image->getClientOriginalName());
        $v_image->move($path, $v_image->getClientOriginalName());
        $main = new main();
        $main['vision'] = $request->vision;
        $main['about'] = $request->about;
        $main['mission'] = $request->mission;
        $main['vision_img'] = $v_image->getClientOriginalName();
        $main['about_img'] = $a_image->getClientOriginalName();
        $main['mission_img'] = $m_image->getClientOriginalName();
        $main->save();
        return redirect()->route('main.index')->with('Success','main created sucessfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $category
     * @return \Illuminate\Http\Response
     */
    public function show(main $main)
    {
        return view('main.show',compact('main'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(main $main)
    {
        return view('main.edit',compact('main'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, main $main)
    {
        $request->validate([
            'mission' => 'required',
            'vision' => 'required',
            'about' => 'required',
        ]);

        $main->update($request->all());

        return redirect()->route('main.index')
            ->with('success','main updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\category  $Category
     * @return \Illuminate\Http\Response
     */
    public function destroy(main $main)
    {
        $main->delete();

        return redirect()->route('main.index')
            ->with('success',' deleted successfully');
    }
}
