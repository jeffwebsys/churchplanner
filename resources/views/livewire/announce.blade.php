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
@if($updateMode)
        @include('livewire.edit')
    @else
        @include('livewire.create')
    @endif
{{-- <button type="button" class="btn btn-grd-primary btn-sm" data-toggle="modal" data-target="#sign-in">Add Announcement</button> --}}

<hr/>
{{-- @foreach($announce as $ann) --}}

<div class="col-xl-12 col-md-12">
  <div class="card latest-activity-card">
  <div class="card-header">
  <h5>Latest Activity</h5>
  </div>
  @forelse($announce as $ann)
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
  <button wire:click="edit({{$ann->id}})" class="btn btn-sm btn-info">Edit</button>
   
  
  </div>
  @endforeach
  <div class="flex justify-content-center">
    
      {{ $announce->links() }}
     
    </div>
  
  
  </div>
  
  </div>

</div>



  