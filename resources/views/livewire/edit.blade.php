<form wire:submit.prevent="update">
    <div class="row">
    <div class="col-md-3">
<input type="hidden" wire:model="selected_id">
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
    <div class="float-right">
      <button type="submit" class="btn btn-sm btn-warning" id="pnotify-default">Update</button>
    </div>
        </div>
    </div>
</form>

        
     