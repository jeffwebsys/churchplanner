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
    public $selected_id;
    public $updateMode = false;
    

    // public function mount(){

    //     $announce = auth()->user()->announcements;
    //     $this->title = $announce->title;
    //     $this->description = $announce->description;
    //     $this->date = $announce->date;
    //     $this->message = $announce->message;
      
    
    // }
    
    public function edit($id)
    {
        $record = Announcement::findOrFail($id);
        $this->selected_id = $id;
        $this->title = $record->title;
        $this->description = $record->description;
        $this->date = $record->date;
        $this->message = $record->message;
        $this->updateMode = true;
    }
    public function update()
    {
        $this->validate([
            'selected_id' => 'required|numeric',
            'title' => 'required|min:5',
            'description' => 'required|min:5',
            'date' => 'required',
            'message' => 'required|min:5'


        ]);
        if ($this->selected_id) {
            $record = Announcement::find($this->selected_id);
            $record->update([
                'title' => $this->title,
                'description' => $this->description,
                'date' => $this->date,
                'message' => $this->message,



            ]);
         
            $this->updateMode = false;
            session()->flash('success','Form Submitted');
            $this->resetInput();
        }
    }


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
      

        auth()->user()->announcements()->create($data);
        $this->resetInput();

        }
        private function resetInput()
    {
        $this->title = null;
        $this->description = null;
        $this->date = null;
        $this->message = null;


        
    }
        

    
    use WithPagination;
    public function render()
    {
      
        return view('livewire.announce',[
            'announce' => Announcement::latest()->paginate(2),
            
            ]);
    }
}
