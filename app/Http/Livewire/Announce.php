<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Announcement;
use Livewire\WithPagination;


class Announce extends Component
{


    public $title;
    public $description;
    public $date;
    public $message; 
    

    // public function mount(){

    //     $announce = auth()->user()->announcements;
    //     $this->title = $announce->title;
    //     $this->description = $announce->description;
    //     $this->date = $announce->date;
    //     $this->message = $announce->message;
      
    
    // }

    public function delete($id){
        
    if($id) {
    $record = Announcement::where('id', $id);
    $record->delete();
    }
    }

    public function updated($field)
    {
        $this->validateOnly($field, [
    
            'title' => 'min:5',
            'description' => 'min:5',
            'date' => 'min:1',
            'message' => 'min:5',
            
        ]);
    }

    public function submit()
    {
        $data = $this->validate([
            'title' => 'required|min:5',
            'description' => 'required|min:5',
            'date' => 'required',
            'message' => 'required|min:5',

        ]);
        
       
        session()->flash('success','Form Submitted');
        $this->reset();
        
        auth()->user()->announcements()->create($data);
       

        // return back()->with('success', 'Form Submitted');
  
    }
   
    
    use WithPagination;
    public function render()
    {
      
        return view('livewire.announce',[
            'announce' => Announcement::latest()->paginate(2),
            
            ]);
    }
}
