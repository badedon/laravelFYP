<?php

namespace App\Http\Controllers\Userpanel\Userevent;

use App\Http\Controllers\Controller;
use App\Models\EventOne;
use App\Models\Userevent;
use App\Models\Userhome;
use Illuminate\Http\Request;

class UsereventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $event= EventOne::get();
        return view('frontend.Event.userevent',compact('event'));
    }
//    public function userevent(){
//        $userevent= Userevent::get();
//        return view('\frontend\Event\userevent',compact('userevent'));
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
     * @param  \App\Models\Userevent  $userevent
     * @return \Illuminate\Http\Response
     */
    public function show(Userevent $userevent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Userevent  $userevent
     * @return \Illuminate\Http\Response
     */
    public function edit(Userevent $userevent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Userevent  $userevent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Userevent $userevent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Userevent  $userevent
     * @return \Illuminate\Http\Response
     */
    public function destroy(Userevent $userevent)
    {
        //
    }
}
