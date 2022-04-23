<?php

namespace App\Http\Controllers\VotingResult;

use App\Http\Controllers\Controller;
use App\Models\Candidates;
use App\Models\EventOne;
use App\Models\result;
use Illuminate\Http\Request;

class ResultController extends Controller
{
     public function __construct() {
            $this->middleware(['auth:sanctum', 'verified', 'is_admin']);
        }

    public function resultAdmin()
    {
            $candidates= Candidates::with('event')->get();
        return view('\Backend\Votingresult\result',compact('candidates'));
    }


}
