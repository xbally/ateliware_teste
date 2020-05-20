<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Framework;

class ControllerFramework extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $framework = Framework::all();
        return view('list', compact('framework'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('registre');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $regra=[
                'name' => 'required|min:4|max:50|unique:frameworks',
                'title' => 'required|min:4|max:100|unique:frameworks',
                'link_ref'=>'required',
                'description' => 'required'
        ];
        $messenge = [
            'required' => 'attribute :attribute is blank',
            'name.required' => 'Framework name is required',
            'name.min' => 'Minimum for this field and 4 characters',
            'name.max' => 'Maximum character for this field is 50',
            'name.unique'=> 'framework already exists',
            'title.min' => 'Minimum for this field and 4 characters',
            'title.max' => 'Maximum character for this field is 100',
            'title.unique'=> 'framework title already exists',
            'link_ref.required' => 'Framework link is required',
            'description.required' => 'Framework description is required'
        ];
        $request->validate($regra, $messenge);

        $framework = new Framework();
        $framework->name = $request->input('name');
        $framework->title = $request->input('title');
        $framework->description = $request->input('description');
        $framework->link_ref = $request->input('link_ref');
        $framework->save();

        return redirect('/list');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $framework =  Framework::find($id);

        return view('show',['framework' => $framework]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @paramrew  \Illuminate\Http\Request  $request
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
