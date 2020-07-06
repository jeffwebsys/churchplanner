
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center" style="font-weight: bolder;">Share Your Daily Devotions :)</div>
                    
                    <div class="card-body">
                      

                        <div class="media">
                            
                            <a class="media-left" href="#">
                             
                            <img class="media-object img-radius m-r-20" src="../files/assets/images/user.png" alt="Generic placeholder image">
                            </a>
                            <div class="media-body">
                            
                            <form wire:submit.prevent="submit">
                            <div class="">
                                
                            <textarea class="f-13 form-control msg-send rounded" rows="3" cols="10" wire:model.debounce.500ms="message" placeholder="Write something....."></textarea>
                            @error('message')
                            <small class="text-primary">{{ $message }}</small>
                            @enderror
                            <div class="text-right m-t-20">
                                @if($counts >= 3)
                          
                            
                               <p class="text-muted">You've reached the maximum posts for today :)</p>
                            @else
                                <button type="submit" class="btn btn-primary waves-effect waves-light btn-sm rounded">Post</button>
                                @endif
                            </div>

                            </div>
                          
                            </form>
                           
                             </div>
                            </div>
                           
                       @foreach($devotions as $devo)
                        <div class="media mb-3">
                            <a class="media-left" href="#">
                            <img class="media-object img-radius m-r-20" src="../files/assets/images/avatar-1.jpg" alt="Generic placeholder image">
                            </a>
                            <div class="media-body b-b-theme social-client-description">
                            <div class="chat-header">{{$devo->user->name}} <span class="text-muted">{{$devo->created_at->diffForhumans()}}</span>
                                <label class="label label-primary rounded">Shared {{  $devo->user->devotions->count() }} Devotions</label>
                                <label class="label label-success rounded">{{ $devo->user->role }}</label>
                              
                            
                            
                            </div>
                            <p class="text-dark">{{$devo->message}}</p>
                            </div>
                            </div>
                            @endforeach
                           
                    </div>
                    {{ $devotions->links() }}
                    
                </div>
            </div>
        </div>
    </div>
   
      
