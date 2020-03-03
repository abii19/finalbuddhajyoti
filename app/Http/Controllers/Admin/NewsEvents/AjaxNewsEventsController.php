<?php

namespace App\Http\Controllers\Admin\NewsEvents;

use App\Http\Controllers\Controller;
use App\Model\Event;
use Illuminate\Http\Request;

class AjaxNewsEventsController extends Controller
{
    public  function getNewsEvents(){
        $newsEvents = Event::latest()->limit(3)->get();

        return response()->json([
           'newsEvents'=>$newsEvents,
        ]);

    }


    //
}
