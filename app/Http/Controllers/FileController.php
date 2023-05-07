<?php

namespace App\Http\Controllers;

use App\Models\File;
use App\Models\category;
use Illuminate\Http\Request;

class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $file = file::latest()->paginate(5);

        return view('file.index',compact('file'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Category = category::all();
        return view('file.create')->with(compact('Category'));
        return view('file.create');
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
        $file = new File();
        $file['name'] = $request->name;
        $file['detail'] = $request->detail;
        $file['category_id'] = $request->category_id;
        $file['image'] = $image->getClientOriginalName();
       /* $file->detail = $request->detail;
        $file->category_id = $request->category_id;*/
/*        $file->image = $image->getClientOriginalName();*/
/*        $file->image = $image->getClientOriginalName();*/
        $file->save();
        return redirect()->route('file.index')->with('Success','File created sucessfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $category
     * @return \Illuminate\Http\Response
     */
    public function show(file $file)
    {
        return view('file.show',compact('file'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(file $file)
    {
        return view('file.edit',compact('file'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, file $file)
    {
        $request->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);

        $file->update($request->all());

        return redirect()->route('file.index')
            ->with('success','File updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\category  $Category
     * @return \Illuminate\Http\Response
     */
    public function destroy(file $file)
    {
        $file->delete();

        return redirect()->route('file.index')
            ->with('success','File deleted successfully');
    }
}
