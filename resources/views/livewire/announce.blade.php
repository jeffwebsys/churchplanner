<div class="col-sm-12">
<div class="card">
<div class="card-header">
<h5>Announcements</h5>

<span>Only admins can add, edit announcements</span>
<div class="card-header-right">
<ul class="list-unstyled card-option">
<li><i class="feather icon-maximize full-card"></i></li>
<li><i class="feather icon-minus minimize-card"></i></li>
<li><i class="feather icon-trash-2 close-card"></i></li>
</ul>
</div>
</div>

<div class="card-block">
@if(session()->has('success'))

<div class="alert alert-success" role="alert">
    Success
</div>
@endif
<form wire:submit.prevent="submit">
    <div class="row">
    <div class="col-md-3">
<div class="form-group">
<label for="title">Title</label>
<input type="text" wire:model.debounce.500ms="title" class="form-control" rows="2">
@error('title')
<small class="text-danger">{{ $message }}</small>
@enderror
</div>


<div class="form-group">
<label for="description">Description</label>
<input type="text" wire:model.debounce.500ms="description" class="form-control" rows="2">
@error('description')
<small class="text-danger">{{ $message }}</small>
@enderror
</div>
</div>
<div class="col-md-9">
    <div class="form-group">
    <label for="date">Date</label>
    <input type="date" wire:model.debounce.500ms="date" class="form-control col-md-2">
    @error('date')
    <small class="text-danger">{{ $message }}</small>
    @enderror
    </div>
    
    <div class="form-group">
    <label for="message">Message</label>
    <input type="text" wire:model.debounce.500ms="message" class="form-control col-md-6">
    @error('message')
    <small class="text-danger">{{ $message }}</small>
    @enderror
    </div>
        </div>
    </div>
        <button type="submit" class="btn btn-sm btn-primary" id="pnotify-default">Save</button>
      </form>
{{-- <button type="button" class="btn btn-grd-primary btn-sm" data-toggle="modal" data-target="#sign-in">Add Announcement</button> --}}

<hr/>
{{-- @foreach($announce as $ann) --}}

<div class="col-xl-12 col-md-12">
  <div class="card latest-activity-card">
  <div class="card-header">
  <h5>Latest Activity</h5>
  </div>
  @foreach($announce as $ann)
  <div class="card-block">
  <div class="latest-update-box">
  <div class="row p-t-20 p-b-30">
  <div class="col-auto text-right update-meta">
  <p class="text-muted m-b-0 d-inline">{{$ann->date}}</p>
  <i class="feather icon-sunrise bg-simple-c-blue update-icon"></i>
  </div>
  <div class="col">
  <h6>{{ $ann->title }}</h6>
  <p class="text-muted m-b-15">{{ $ann->message }}</p>
  
  <img src="../files/assets/images/mega-menu/01.jpg" alt="" class="img-fluid img-100 m-r-15 m-b-10">
  <img src="../files/assets/images/mega-menu/03.jpg" alt="" class="img-fluid img-100 m-r-15 m-b-10">
   
</div>

  </div>
  
  
  </div>
  
  <button wire:click="delete({{$ann->id}})" class="btn btn-sm btn-danger">Delete</button>
  
  </div>
  @endforeach
  <div class="flex justify-content-center">
    
      {{ $announce->links() }}
     
    </div>
  
  
  </div>
  
  </div>
  
</div>



  {{-- next --}}
  
  
{{-- @endforeach --}}
{{-- modal --}}
<div class="modal fade" id="sign-in" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Announcement</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

            @if(session()->has('success'))
    <div class="alert alert-success" role="alert">
        Success
    </div>
    @endif
    <form wire:submit.prevent="submit">
    <div class="form-group">
    <label for="title">Title</label>
    <input type="text" wire:model.debounce.500ms="title" class="form-control" rows="4">
    @error('title')
    <small class="text-danger">{{ $message }}</small>
    @enderror
    </div>
    
    <div class="form-group">
    <label for="description">Description</label>
    <input type="text" wire:model.debounce.500ms="description" class="form-control" rows="4">
    @error('description')
    <small class="text-danger">{{ $message }}</small>
    @enderror
    </div>
    
    <div class="form-group">
    <label for="date">Date</label>
    <input type="date" wire:model.debounce.500ms="date" class="form-control" rows="4">
    @error('date')
    <small class="text-danger">{{ $message }}</small>
    @enderror
    </div>
  
    <div class="form-group">
    <label for="message">Message</label>
    <input type="text" wire:model.debounce.500ms="message" class="form-control" rows="4">
    @error('message')
    <small class="text-danger">{{ $message }}</small>
    @enderror
    </div>
 
    
        </div> <!-- end modal div-->
        <div class="modal-footer">
            <button type="button" class="btn btn-grd-warning" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-grd-primary">Save changes</button>
          </form>
          </div>
        </div>
      </div>
    </div>
    