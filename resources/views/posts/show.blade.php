@extends('layouts.base')

@section('page-content')
     <div class="container-fluid ">
      
      
      <div class="row">
        <div class="col-xl-12">
          <div class="card">
           
            <div class="card-header mt-2 d-flex align-items-center">
              <div class="d-flex align-items-center">
                
                <div class="mx-3">
                <a href="#" class="text-dark font-weight-700 text">{{$post->title}}</a>
                <small class="d-block text-muted">Created By {{$post->user()->first()->name}}</small>
                </div>
              </div>
              <div class="text-right ml-auto">
                <button type="button" class="btn btn-sm btn-primary btn-icon">
                  {{-- <span class="btn-inner--icon"><i class="ni ni-fat-add"></i></span> --}}
                <span class="btn-inner--text">{{$post->category->name}}</span>
                </button>
              </div>
            </div>
            <div class="card-body">
              <p class="mb-4">
                  {{$post->content}}
              </p>
              <div class="row align-items-center my-3 pb-3 border-bottom">
                <div class="col-sm-6">
                  <div class="icon-actions">
                   
                    <a href="#">
                      <i class="ni ni-chat-round"></i>
                    <span class="text-muted">{{$post->comments()->count()}}</span>
                    </a>
                    <a href="#">
                      <i class="ni ni-curved-next"></i>
                    </a>
                  </div>
                </div>
                <div class="col-sm-6 d-none d-sm-block">
                  <div class="d-flex align-items-center justify-content-sm-end">
                                        <small class="pl-2 font-weight-bold">Created{{$post->created_at->diffForHumans()}}</small>
                  </div>
                </div>
               
              </div>
              <!-- Comments -->
              @foreach ($post->comments as $comment)
                <div class="mb-1">
                <div class="media media-comment">
                  <img alt="Image placeholder" class="avatar avatar-lg media-comment-avatar rounded-circle" src="{{asset('images.png')}}">
                  <div class="media-body">
                    <div class="media-comment-text">
                    <h6 class="h5">{{$comment->user->name}}</h6>
                    <small class="">{{$comment->created_at->diffForHumans()}} </small>
                    <p class="text-sm lh-160">{{$comment->content}}</p>
                      
                    </div>
                  </div>
                </div> 
              </div>  
              @endforeach
              <div class="media align-items-center">
                  <img alt="Image placeholder" class="avatar avatar-lg rounded-circle mr-4" src="{{asset('images.png')}}">
                  <div class="media-body">
                    <form action="/comment" method="POST">
                        @csrf
                        @method('POST')
                    <input type="hidden" name="post_id" value="{{$post->id}}">
                      <input class="form-control" placeholder="Write your comment" type="text" name="content">
                      <button class="btn btn-sm btn-success my-2" type="submit">Sumbit</button>
                    </form>
                  </div>
                </div>
              
            </div>
          </div>
        </div>
        
      </div>
      
@endsection