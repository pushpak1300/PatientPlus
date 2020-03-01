@extends('layouts.base')

@section('page-content')
     <div class="container-fluid ">
       <div class="row">
           @foreach ($news as $new)
            <div class="col-lg-4">
               <div class="card">
            <!-- Card image -->
            <img class="card-img-top" src="{{$new->urlToImage}}" alt="Image placeholder">
            <!-- Card body -->
            <div class="card-body">
              <h5 class="h2 card-title mb-0">{{$new->title}}</h5>
            <small class="text-muted">by {{$new->source->name}} on {{$new->publishedAt}}</small>
              <p class="card-text mt-4">{{$new->description}}</p>
              <a href="{{$new->url}}" class="btn btn-link px-0">View article</a>
            </div>
          </div>
              </div>  
           @endforeach
           </div>  
           
      
      
      
@endsection