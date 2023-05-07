<?php

namespace App\Http\Controllers;

use App\Models\team;
use Illuminate\Http\Request;


class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $team = team::latest()->paginate(5);

        return view('team.index',compact('team'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('team.create');
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
        $team = new team();
        $team['name'] = $request->name;
        $team['Designation'] = $request->Designation;
        $team['image'] = $image->getClientOriginalName();
        $team->save();
        return redirect()->route('team.index')->with('Success','team created sucessfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $category
     * @return \Illuminate\Http\Response
     */
    public function show(team $team)
    {
        return view('team.show',compact('team'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(team $team)
    {
        return view('team.edit',compact('team'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, team $team)
    {
        $request->validate([
            'title' => 'required',
            'subtitle' => 'required',
        ]);

        $team->update($request->all());

        return redirect()->route('team.index')
            ->with('success','team updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\category  $Category
     * @return \Illuminate\Http\Response
     */
    public function destroy(team $team)
    {
        $team->delete();

        return redirect()->route('team.index')
            ->with('success',' deleted successfully');
    }
}
