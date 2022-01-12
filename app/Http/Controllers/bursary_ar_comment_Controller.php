<?php

namespace App\Http\Controllers;

use App\Models\bursary_ar_comment;
use Illuminate\Http\Request;

class bursary_ar_comment_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        bursary_ar_comment::create($request->all());
        return back()->with('success','New Process added successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\bursary_ar_comment  $bursary_ar_comment
     * @return \Illuminate\Http\Response
     */
    public function show(bursary_ar_comment $bursary_ar_comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\bursary_ar_comment  $bursary_ar_comment
     * @return \Illuminate\Http\Response
     */
    public function edit(bursary_ar_comment $bursary_ar_comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\bursary_ar_comment  $bursary_ar_comment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, bursary_ar_comment $bursary_ar_comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\bursary_ar_comment  $bursary_ar_comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(bursary_ar_comment $bursary_ar_comment)
    {
        //
    }
}
