<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class VideoController extends Controller
{
    public function index()
    {
        $videos = Video::all();

        return view('backend.pages.video',compact('videos'));
    }

    public function store(Request $request) {

        $validator = Validator::make($request->all(), [
            'video'    => 'required',
        ]);

        if ($validator->fails()) {
            $messages = $validator->messages();

            return back()->withErrors($validator);
        }


        $path    = "images/video/";
        $default = "default.jpg";

        if ($request->hasFile('video')) {

            if ($files = $request->file('video')) {
                $image    = $request->video;
                $fullName = time() . "." . $image->getClientOriginalExtension();
                $files->move(public_path($path), $fullName);
                $imageLink = $path . $fullName;
            }

        } else {
            $imageLink = $path . $default;
        }

        Video::create([
            'video'      => $imageLink,
            'title'      => $request->title,
        ]);

        return back()->with('success', 'Video add successfully');
    }

    public function allVideo()
    {
        $video = Video::where('status',1)->orderBy('id','desc')->get();

        return view('frontend.pages.kribtree-video',compact('video'));
    }
}
