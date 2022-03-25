<?php

namespace App\Http\Controllers\Userpanel\Userhome;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\Userhome;
use Illuminate\Http\Request;

class UserhomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('\frontend\layout\userhome');
    }
//    public function userhome()
//    {
//        $userhome= Userhome::get();
//        return view('\frontend\layout\userhome',compact('userhome'));
//    }

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
     * @param  \App\Models\Userhome  $userhome
     * @return \Illuminate\Http\Response
     */
    public function show(Userhome $userhome)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Userhome  $userhome
     * @return \Illuminate\Http\Response
     */
    public function edit(Userhome $userhome)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Userhome  $userhome
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Userhome $userhome)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Userhome  $userhome
     * @return \Illuminate\Http\Response
     */
    public function destroy(Userhome $userhome)
    {
        //
    }
}
