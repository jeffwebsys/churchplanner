<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Announcement;
use Carbon\Carbon;

class AnnouncementController extends Controller
{
    //
    public function index(){

        $data = Announcement::all();

        return view('announcements.index',compact('data'));
    }

    public function store(){

        $data = request()->validate([
            'title' => 'required',
            'description' => 'required',
            'date' => 'required',
            'message' => 'required',
        ]);
       

       auth()->user()->announcements()->create($data);

       return redirect('/announcements');


    }

    public function update(Request $request,$id){

        $announce = Announcement::find($id);

        $announce->title = $request->input('title');
        $announce->description = $request->input('description');
        $announce->date = $request->input('date');
        $announce->message = $request->input('message');

        $announce->save();
       


    }
}
