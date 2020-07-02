<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Devotion as DevotionMessage;
use Livewire\WithPagination;
use Carbon\Carbon;

class Devotion extends Component
{

    public $message;
   
   
   
    public function updated($field)
    {
        $this->validateOnly($field, [
    
            
            'message' => 'min:5',
            
        ]);
    }
    public function submit()
        {
        $data = $this->validate([
        'message' => 'required|min:5',

        ]);
        session()->flash('success','Form Submitted');
      
        $levels = auth()->user()->devotions->count();
        auth()->user()->devotions()->create(array_merge($data,['level' => $levels]));
        $this->reset();
       
      

        }



    use WithPagination;
    public function render()
    {
        $count = DevotionMessage::where('user_id', auth()->id())
        ->where('created_at', '>=', Carbon::now()->startOfDay())
        ->count();
        return view('livewire.devotion',[
            'devotions' => DevotionMessage::latest()->paginate(3),
            'counts' => $count
            ]);
    }
}
