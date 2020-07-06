





<div class="col-lg-12">

<div class="card">
<div class="card-header">
<h5>Basic Form Inputs</h5>
<span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>
<div class="card-header-right">
<i class="icofont icofont-spinner-alt-5"></i>
</div>
</div>
<div class="card-block">
<h4 class="sub-title">Profile Settings</h4>
<form wire:submit.prevent="submit">
<div class="form-group row">
<label class="col-sm-2 col-form-label">Birthday</label>
<div class="col-sm-10">
<input type="date" class="form-control" wire:model="birthday" value="{{auth()->user()->profile->birthday}}">
</div>
@error('birthday')
<small class="text-primary">{{ $message }}</small>
@enderror
</div>
<div class="form-group row">
<label class="col-sm-2 col-form-label">Work</label>
<div class="col-sm-10">
<input type="text" class="form-control" placeholder="Ex. Engineer" wire:model="work" value="{{auth()->user()->profile->work}}">
 </div>
 @error('work')
<small class="text-primary">{{ $message }}</small>
@enderror
</div>



<div class="form-group row">
<label class="col-sm-2 col-form-label">Location</label>
<div class="col-sm-10">
<input type="text" class="form-control form-control-round" placeholder="Ex. Manila" wire:model="location" value="{{ auth()->user()->profile->location }}">
</div>
@error('location')
<small class="text-primary">{{ $message }}</small>
@enderror
</div>



{{-- <div class="form-group row">
<label class="col-sm-2 col-form-label">Color</label>
<div class="col-sm-10">
<input type="color" class="form-control">
</div>
</div> --}}
<div class="form-group row">
    <div>
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
    </div>
<label class="col-sm-2 col-form-label">Upload Avatar</label>
<div class="col-sm-10">
<input type="file" class="form-control" wire:model="photo">
</div>
@error('photo')
<small class="text-primary">{{ $message }}</small>
@enderror
 </div>
 
 <div class="form-radio">
    <div class="group-add-on">
    <div class="radio radiofill radio-inline">
    <label>
    <input type="radio" wire:model="gender" value="Male" checked><i class="helper"></i> Male
    </label>
    </div>
    <div class="radio radiofill radio-inline">
    <label>
    <input type="radio" wire:model="gender" value="Female"><i class="helper"></i> Female
    </label>
    </div>
    </div>
     </div>
<div class="form-group row">
<label class="col-sm-2 col-form-label">Share your experience with Jesus :)</label>
<div class="col-sm-10">
<textarea rows="5" cols="5" class="form-control" placeholder="Default textarea" wire:model="testimonials" value="{{auth()->user()->profile->testimonials}}"></textarea>
</div>
@error('testimonial')
<small class="text-primary">{{ $message }}</small>
@enderror
</div>
<button type="submit" class="btn btn-sm btn-dark">Save</button>
</form>
{{-- END BASIC FORM --}}

</div>
</div>

</div>


