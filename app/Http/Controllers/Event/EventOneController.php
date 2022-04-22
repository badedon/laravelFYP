<?php

namespace App\Http\Controllers\Event;

use App\Http\Controllers\Controller;
use App\Models\EventOne;
use Illuminate\Http\Request;

class EventOneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware(['auth:sanctum', 'verified', 'is_admin']);
    }
    public function index()
    {
        //
    }
    public function eventAdmin()
    {
        $event= EventOne::get();
        return view('\Backend\events\event',compact('event'));
    }

    public function createEvent(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'location' => 'required',

        ]);
        //handle file upload

        //for deleting image use unlink() function.
        //for storing image

        $event= new EventOne();
        $event->name = $request->name;
        $event->location = $request->location;
        $event->startdate = $request->startdate;
        $event->enddate = $request->enddate;
        $event->save();
        return back()->with('event_created', 'Event has been created successfully!');
    }

    public function getEvent()
    {
        $event= EventOne::orderBy('id', 'DESC')->get();
        return view('events', compact('event'));
    }

    public function getEventById($id)
    {
        $event = EventOne::where('id', $id)->first();
        return view('\Backend\events\view-event', compact('event'));
    }

    public function deleteEvent($id)
    {
        $event= EventOne::findOrFail($id);
        $event->delete();
        return back()->with('event_deleted', 'Event has been deleted successfully');
    }


    public function editEvent($id)
    {
        $event= EventOne::find($id);
        return view('\Backend\events\edit-event', compact('event'));
    }

    public function updateEvent(Request $request)
    {

        $event= EventOne::find($request->id);
        $event->name = $request->name;
        $event->location = $request->location;
        $event->startdate = $request->startdate;
        $event->enddate = $request->enddate;

        $event->update();
        return redirect('event')->with('event_updated', "Event has been updated successfully");

    }
}
