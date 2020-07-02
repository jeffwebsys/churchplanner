<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Announcement;

class ChurchAnnouncementController extends Controller
{
    //
    public function index(){

        $churchann = Announcement::all();
        return view('churchannouncements.index',compact('churchann'));
    }
}
