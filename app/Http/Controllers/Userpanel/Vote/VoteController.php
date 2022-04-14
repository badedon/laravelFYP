<?php

namespace App\Http\Controllers\Userpanel\Vote;

use App\Http\Controllers\Controller;
use App\Models\Candidates;
use App\Models\Userhome;
use App\Models\Vote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class VoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        toast('Welcome to the voting page','success');
        $uservote= Candidates::get();
        return view('\frontend\Vote\uservote',compact('uservote'));
    }

    public function status_update(Request $request)
    {
        $candidates = Candidates::find($request->id);
        $candidates->name = $candidates->name;
        $candidates->position = $candidates->position;
        $candidates->event_id = $candidates->event_id;
        $candidates->image = $candidates->image;
        $candidates->vote += 1;
        $candidates->update();
        return redirect('uservote')->with('candidates_updated', "Candidates has been updated successfully");
    }
}
