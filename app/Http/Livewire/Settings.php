<?php

namespace App\Http\Livewire;
use App\Profile;
use Livewire\Component;
use Livewire\WithFileUploads;

class Settings extends Component
{
    public $work,$gender,$location,$birthday,$testimonials,$photo;
    use WithFileUploads;

    public function updated($field)
    {
        $this->validateOnly($field, [
    
            
            'work' => 'min:1',
            'location' => 'min:1',
            'testimonials' => 'min:5',
            
        ]);
    }
    public function submit(){
        $data = $this->validate([
            'work' => 'required',
            'birthday' => 'required',
            'gender' => 'required',
            'location' => 'required',
            'testimonials' => 'required',
            'photo' => 'image|max:1024',
            
            ]);
            session()->flash('message','Updated');
            // dd($data);
            auth()->user()->profile()->create($data);
           // Store in the "photos" directory with the filename "avatar.png".
            $this->photo->storeAs('photos', 'avatar');
            $this->reset();
           
    }

    public function render()
    {
        $profile = Profile::where('user_id',auth()->user()->id)->get();
        return view('livewire.settings')->with('profile',$profile);
    }
}
