@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                    <h5>Announcements</h5>
                    </div>
                    <div class="row card-block">
                    <div class="col-md-12">
                    <ul class="list-view">
                        @foreach($churchann as $ann)
                    <li>
                    <div class="card list-view-media">
                     <div class="card-block">
                    <div class="media">
                    <a class="media-left" href="#">
                    <img class="media-object card-list-img" src="../files/assets/images/avatar-1.jpg" alt="Generic placeholder image">
                    </a>
                    <div class="media-body">
                    <div class="col-xs-12">
                    <div x-data="{ hover: false }">
                    <h6 class="d-inline-block" x-on:mouseover="hover = true" x-on:mouseout="hover = false">
                    {{$ann->user->name}}</h6>
                    <div x-show="hover" class="float-top" style="border: 2px solid black;
                    padding: 12px;
                    border-radius: 15px 50px; >
                    <p style="font-weight: bold; font-size: 16px;"> {{$ann->user->name}}</p>
                    </div>
                    </div>
                    <label class="label label-info">{{$ann->user->role}}</label>
                    </div>
                    <div class="f-13 text-muted m-b-15">Shared
                    {{$ann->user->devotions->count()}} Devotions
                    </div>
                <p>{{$ann->message}}</p>
                    <div class="m-t-15">
             <p class="text-muted">Posted: {{$ann->created_at->diffForhumans()}}</p>
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>
                    </li>
                   @endforeach
                 
                    </ul>
                    </div>
                    </div>
                    </div>
                    
            </div>
        </div>
    </div>
   
      
@endsection