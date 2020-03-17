<?php

namespace App\Http\Controllers\Event;

use App\Http\Controllers\Controller;
use App\Model\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{

    public function fetchEvents()
    {

        $event = Event::take(4)->orderBy('date', 'DESC')->get();


        return response()->json([
            'event' => $event,
        ]);

    }


    public function showSingleEvent($id)
    {

        $event = Event::find($id)->where('is_notice', 0);

    }

    public function fetchWebsiteNotices()
    {
        $notice = Event::where('is_notice', 0)->get();
        return response()->json([
            'notice' => $notice
        ], 200);
    }

    public function  fetchWebsiteEvents(){
        $events = Event::where('is_notice', 1)->get();
        return response()->json([
            'event' => $events
        ], 200);


    }



    //
}
