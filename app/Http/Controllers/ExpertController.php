<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Expert;
use Symfony\Component\HttpFoundation\Session\Session;

class ExpertController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //create variable to store all experts
        $expert = Expert::orderBy('id','desc')->paginate(10);
        //return a view with all experts
        return view('experts.index')->withExpert($expert);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('experts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate the data
        $this->validate($request, array(
            'name'=> 'required|max:255',
            'slug'=> 'required|alpha_dash|min:5|max:255',
            'expertise' => 'required',
            'mobile_number' => 'required',
            'description' => 'required'
        ));

        //store data into the database
        $expert = new Expert;

        $expert->name = $request->name;
        $expert->slug = $request->slug;
        $expert->expertise = $request->expertise;
        $expert->mobile_number = $request->mobile_number;
        $expert->description = $request->description;

        $expert->save();

        $request->session()->flash('success','Expert added successfully to the database!');
        //redirect to another page
        return redirect()->route('experts.show', $expert->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $expert = Expert::find($id);
        return view('experts.show')->withExpert($expert);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //find the post in the db ans save as variable
        //return the view then pass in the variable created above
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
