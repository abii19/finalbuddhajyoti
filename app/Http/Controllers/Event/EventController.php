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

    //
}
