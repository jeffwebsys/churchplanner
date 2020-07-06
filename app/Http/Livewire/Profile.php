<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Profile as UserProfile;
use Livewire\WithFileUploads;

class Profile extends Component
{
    public $work,$gender,$location,$birthday,$testimonial,$photo;
    use WithFileUploads;


    public function render()
    {
        $profile = UserProfile::find('user_id',auth()->user()->id);
        return view('livewire.profile',compact('profile'));
    }

    

}
