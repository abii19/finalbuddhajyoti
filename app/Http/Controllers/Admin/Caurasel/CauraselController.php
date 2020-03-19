<?php

namespace App\Http\Controllers\Admin\Caurasel;

use App\Http\Controllers\Controller;
use App\Model\Corausel;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CauraselController extends Controller
{

    public function saveCaurasel(Request $request)
    {

        if (!is_dir(public_path('/caurasel_images'))) {
            mkdir(public_path('/caurasel_images'), 0777);
        }
        try {
            $baseName = Str::random(30);
            $originalName = $baseName . '.' . $request->file->getClientOriginalExtension();

            if ($request->file->move(public_path('/caurasel_images'), $originalName)) {
                $success = Corausel::create([
                    'corausel_images' => '/caurasel_images/' . $originalName
                ]);

                if ($success) {
                    return response()->json([
                        'success' => 'Sucessfullt Added Caurasel Image',
                        'images' => $success->corausel_images,
                    ]);
                }
            };

        } catch (\Exception $e) {
            return response()->json([
                'err' => $e->getMessage(),
            ]);
        }


    }


    public function fetchCaurasel()
    {
        return response()->json([
            'images' => Corausel::all()
        ]);
    }

    public function setUnsetImage(Request $request)
    {
        $courasel = Corausel::findOrFail($request->id);

        if ($courasel) {
            if ($courasel->status == 0) {
                $courasel->status = 1;
                $courasel->save();
            } elseif ($courasel->status == 1) {
                $courasel->status = 0;
                $courasel->save();
            }
        }

        return response()->json([
            'msg' => 'success'
        ]);


    }


    public function deleteImage(Request $request)
    {
        Corausel::findOrFail($request->id)->delete();
        return response()->json([
            'msg' => 'Succesfully Deleted Image',
        ]);


    }


    //
}
