<?php

namespace App\Http\Controllers\Event;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use function back;
use function public_path;
use function redirect;
use function view;


class EventController extends Controller
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
        $event= Event::get();
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

        $event= new Event();
        $event->name = $request->name;
        $event->location = $request->location;
        $event->startdate = $request->startdate;
        $event->enddate = $request->enddate;
        return back()->with('event_created', 'Event has been created successfully!');
    }

    public function getEvent()
    {
        $event= Event::orderBy('id', 'DESC')->get();
        return view('events', compact('event'));
    }

    public function getEventById($id)
    {
        $event= Event::where('id', $id)->first();
        return view('\Backend\Event\view-event', compact('event'));
    }

    public function deleteEvent($id)
    {
        $event= Event::findOrFail($id);
        $event->delete();
        return back()->with('event_deleted', 'Event has been deleted successfully');
    }


    public function editEvent($id)
    {
        $event= Event::find($id);
        return view('\Backend\Event\edit-event', compact('event'));
    }

    public function updateEvent(Request $request)
    {

        $event= Event::find($request->id);
        $event->name = $request->name;
        $event->location = $request->location;
        $event->startdate = $request->startdate;
        $event->enddate = $request->enddate;

        $event->update();
        return redirect('event')->with('event_updated', "Event has been updated successfully");

    }
}
