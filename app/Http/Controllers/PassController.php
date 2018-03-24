<?php

namespace App\Http\Controllers;

use App\Destination;
use App\Pass;
use Illuminate\Http\Request;

class PassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $passes = \App\Pass::all()->where('active',1)->sortBy('name');
        return view('passes.index',[
            'passes' => $passes
        ]);;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pass  $pass
     * @return \Illuminate\Http\Response
     */
    public function show(Destination $destination, Pass $pass)
    {
        $towns = $pass->discounts->sortBy('town')->groupBy('town')->map(function($d){
           return $d->count();
        });
        // return $towns;
        return view('passes.show',[
            'destination' => $destination,
            'pass' => $pass,
            'towns' => $towns
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pass  $pass
     * @return \Illuminate\Http\Response
     */
    public function edit(Destination $destination, Pass $pass)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pass  $pass
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pass $pass)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pass  $pass
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pass $pass)
    {
        //
    }
}
