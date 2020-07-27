<?php

namespace App\Http\Controllers\FrontPic;

use App\Http\Controllers\Controller;
use App\Model\Corausel;
use Illuminate\Http\Request;

class FrontPicController extends Controller
{
    public function fetchCauraselImage()
    {
        return response()->json([
            'corausel' => Corausel::where('status', 1)->get()
        ], 200);
    }

    //
}
