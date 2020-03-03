<?php

namespace App\Http\Controllers\Admin\Testemonial;

use App\Http\Controllers\Controller;
use App\Model\Testemonial;
use Illuminate\Http\Request;

class FetchTestemonialController extends Controller
{
    public function fetchTestemonial()
    {

        $testemonial = Testemonial::take(10)->where('status', '=', 1)->get();

        return response()->json([
            'testemonial' => $testemonial,
        ], 200);


    }

    public function viewTestemonial()
    {
        $testemonial = Testemonial::latest()->get();
        return response()->json([
            'testemonial' => $testemonial,
        ], 200);


    }


    //
}
