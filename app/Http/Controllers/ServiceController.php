<?php

namespace App\Http\Controllers;

use App\Models\service;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $service = service::latest()->paginate(5);

        return view('service.index',compact('service'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('service.create');
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
        $service = new service();
        $service['title'] = $request->title;
        $service['raised'] = $request->raised;
        $service['detail'] = $request->detail;
        $service['image'] = $image->getClientOriginalName();
        $service->save();
        return redirect()->route('service.index')->with('Success','service created sucessfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $category
     * @return \Illuminate\Http\Response
     */
    public function show(service $service)
    {
        return view('service.show',compact('service'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(service $service)
    {
        return view('service.edit',compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, service $service)
    {
        $request->validate([
            'title' => 'required',
            'subtitle' => 'required',
        ]);

        $service->update($request->all());

        return redirect()->route('service.index')
            ->with('success','service updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\category  $Category
     * @return \Illuminate\Http\Response
     */
    public function destroy(service $service)
    {
        $service->delete();

        return redirect()->route('service.index')
            ->with('success',' deleted successfully');
    }
}
