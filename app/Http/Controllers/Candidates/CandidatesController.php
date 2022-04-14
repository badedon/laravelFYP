<?php

namespace App\Http\Controllers\Candidates;

use App\Http\Controllers\Controller;
use App\Models\Candidates;
use App\Models\EventOne;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use function back;
use function public_path;
use function redirect;
use function view;

class CandidatesController extends Controller
{
    public function __construct() {
        $this->middleware(['auth:sanctum', 'verified', 'is_admin']);
    }
    public function candidatesAdmin()
    {
        $event = EventOne::get();
        $candidates= Candidates::with('event')->get();
        return view('\Backend\Candidates\Candidate',compact('candidates','event'));
    }


    public function createCandidates(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'position' => 'required',
            'image' => 'image|nullable',
            'event_id' => 'required',
        ]);
        //handle file upload

        //for deleting image use unlink() function.
        //for storing image

        $candidates = new Candidates();
        $candidates->name = $request->name;
        $candidates->position = $request->position;
        $candidates->event_id = $request->event_id;
        $candidates->vote =0;
        if ($request->hasFile('image')) {
            $image_extension = $request->image->getClientOriginalExtension();
            $image_name = rand(11111, 99999) . "." . $image_extension;
            $path = public_path() . '/uploads/';
            $image_move = $request->image->move($path, $image_name);
            $candidates->image = $image_name;
        } else {
            $candidates->image = 'noimage.jpg';
        }
        $candidates->save();
        return back()->with('candidates_created', 'Candidates has been created successfully!');
    }

    public function getCandidates()
    {
        $candidates = Candidates::orderBy('id', 'DESC')->get();
        return view('candidatess', compact('candidates'));
    }

    public function getCandidatesById($id)
    {
        $candidates = Candidates::where('id', $id)->first();
        return view('\Backend\Candidates\view-candidates', compact('candidates'));
    }

    public function deleteCandidates($id)
    {
        $candidates = Candidates::findOrFail($id);
        $image_path = public_path() . '/uploads/'.$candidates->image;

        if (File::exists($image_path)) {
            //File::delete($image_path);
            unlink($image_path);
        }
        $candidates->delete();
        return back()->with('candidates_deleted', 'Candidates has been deleted successfully');
    }


    public function editCandidates($id)
    {
        $candidates = Candidates::find($id);
        return view('\Backend\Candidates\edit-candidates', compact('candidates'));
    }

    public function updateCandidates(Request $request)
    {

        $candidates = Candidates::find($request->id);
        $candidates->name = $request->name;
        $candidates->position = $request->position;
        $candidates->event_id = $request->event_id;
        $candidates->vote =0;
        if ($request->hasFile('image')) {
            //getting file name with the extension
            $candidates = Candidates::findOrFail($candidates->id);
            $image_path = public_path() . '/uploads/'.$candidates->image;

            if (File::exists($image_path)) {
                //File::delete($image_path);
                unlink($image_path);
            }

            $image_extension = $request->image->getClientOriginalExtension();
            $image_name = rand(11111, 99999) . "." . $image_extension;
            $path = public_path() . '/uploads/';
            $image_move = $request->image->move($path, $image_name);
            $candidates->image = $image_name;
        } else {
            $candidates->image = 'noimage.jpg';
        }

        $candidates->update();
        return redirect('candidates')->with('candidates_updated', "Candidates has been updated successfully");

    }
}
