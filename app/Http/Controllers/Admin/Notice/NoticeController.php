<?php

namespace App\Http\Controllers\Admin\Notice;

use App\Http\Controllers\Controller;
use App\Model\BlogImage;
use App\Model\Event;
use App\Model\EventNoticeImage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class NoticeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.Notice.addNotice');

        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'title' => 'required',
            'post' => 'required',
            'date' => 'required',
        ]);

        /*Sort it Later

        if (!is_dir(public_path('/events-notices'))) {
                    mkdir(public_path('/events-notices'), 0777);
                }*/
        /*
                $baseName = Str::random(20);
                $originalName = $baseName . '.' . $request->image[0]->getClientOriginalExtension();
                $request->image[0]->move(public_path('/events-notices/singlePic'), $originalName);*/

        if ($validate) {
            $event = Event::create([
                'title' => $request->title,
                'post' => $request->post,
                'date' => $request->date,
                'status' => 1,
                'is_notice' => $request->is_notice,
                'photo' => '/events-notices/singlePic/',
            ]);
        }

        if (!is_dir(public_path('/eventsImages'))) {
            mkdir(public_path('/eventsImages'), 0777);
        }

        foreach ($request->image as $image) {
            $imageName = Str::random(20);
            $originalImageName = $imageName . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('/eventsImages'), $originalImageName);
            $blogImage = EventNoticeImage::create([
                'event_id' => $event->id,
                'event_notice_photo' => '/eventsImages/' . $originalImageName,
            ]);
        }

        if ($blogImage) {
            $event->photo = $blogImage->event_notice_photo;
            $event->save();
        }

        return response()->json([
            'msg' => 'Succesfull Added Blog'
        ]);

        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
