<?php

namespace App\Http\Controllers;

use App\Models\ranking;
use Illuminate\Http\Request;

class RankingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
  
        $rankings = Ranking::all();

        return view('welcome', ['rankings'=> $rankings]);
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
     * @param  \App\Models\ranking  $ranking
     * @return \Illuminate\Http\Response
     */
    public function show(ranking $ranking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ranking  $ranking
     * @return \Illuminate\Http\Response
     */
    public function edit(ranking $ranking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ranking  $ranking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ranking $ranking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ranking  $ranking
     * @return \Illuminate\Http\Response
     */
    public function destroy(ranking $ranking)
    {
        //
    }
}
