<?php

namespace App\Http\Controllers\Admin\Testemonial;

use App\Http\Controllers\Controller;
use App\Model\Testemonial;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Str;
use function response as responseAlias;

class TestemonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('admin.Testemonial.index');

        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {

        $validate = $this->validate($request, [
            'f_name' => 'required',
            'type' => 'required',
            'saying' => 'required',
        ]);

        if ($validate) {
            if (!is_dir(public_path('testemonialPhoto'))) {
                mkdir(public_path('testemonialPhoto'), 0777);
            }

            $baseName = Str::random(30);
            $originalName = $baseName . '.' . $request->photo->getClientOriginalExtension();
            $request->photo->move(public_path('/testemonialPhoto'), $originalName);
        }

        Testemonial::create([
            'saying' => $request->saying,
            'f_name' => $request->f_name,
            'type' => $request->type,
            'status' => 1,
            'details' => 'I dont know',
            'photo' => '/testemonialPhoto/' . $originalName,
        ]);

        return response()->json([
            'msg' => 'Succesfully Saved Testemonial'
        ], 200);

        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
