<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rubrique;

class RubriqueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $rubriques = Rubrique::orderBy('id','DESC')->paginate(10);
        return view('Rubriques/index')->with(compact('rubriques'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Rubrique $rubriques)
    {
        //
        return view('Rubriques/create')->with(compact('rubriques'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $rubrique = new Rubrique();
        $rubrique->name = $request->name;
        $rubrique->save();
        return redirect('/rubriques');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        $rubrique = Rubrique::find($id);
        return view('Rubriques/edit')->with(compact('rubrique'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        $rubrique = Rubrique::find($request->id);
        $rubrique->name = $request->name;
        $rubrique->save();
        return redirect('/rubriques');
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
        $rubrique = Rubrique::find($id);
        $rubrique->destroy($id);
        return redirect()->back();
    }
}
