@extends('layouts.base')

@section('page-content')
     <div class="container-fluid ">
       <div class="row">
         
            <div class="col-xl-8">
              <div class="row">
                @foreach ($posts as $posts)
                   <div class="col-xl-12">
                <div class="card">
            <div class="card-header d-flex align-items-center">
              <div class="d-flex align-items-center">
                <a href="#">
                <img src="{{asset('images.png')}}" class="avatar">
                </a>
                <div class="mx-2">
                <a href="/post/{{$posts->id}}" class="text-dark font-weight-600 text-sm">{{$posts->title}}</a>
                <small class="d-block text-muted">Created By {{$posts->user->name }}</small>
                </div>
              </div>
              <div class="text-right ml-auto">
                <button type="button" class="btn btn-sm btn-primary btn-icon">
                <span class="btn-inner--text">{{$posts->category->name}}</span>
                </button>
              </div>
            </div>
            <div class="card-body">
              <p class="mb-4">
                {{Str::limit($posts->content,90)}}
              </p>
              <div class="row align-items-center my-3 pb-3 border-bottom">
                <div class="col-sm-6">
                  <div class="icon-actions">
                    
                    <a href="#">
                      <i class="ni ni-chat-round"></i>
                    <span class="text-muted">{{$posts->comments->count()}}</span>
                    </a>
                    <a href="#">
                      <i class="ni ni-curved-next"></i>
                    </a>
                  </div>
                </div>
                <div class="col-sm-6 d-none d-sm-block">
                  <div class="d-flex align-items-center justify-content-sm-end">
                    
                  <small class="pl-2 font-weight-bold">created by {{$posts->created_at->diffForHumans()}}</small>
                  </div>
                </div>
              </div>
              </div>
          
             
            </div>
          </div> 
                @endforeach
              
              </div>
        </div>
        <div class="col-lg-4">
            <div class="card">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h3 class="mb-0">Featured Groups</h3>
                </div>
                <div class="col text-right">
                  <a href="/groups" class="btn btn-sm btn-primary">See all</a>
                </div>

              </div>
            </div>
            <div class="table-responsive">
              <!-- Projects table -->
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">Gorup name</th>
                    <th scope="col">Post Count</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach (App\Categories::all() as $item)
                    <tr>
                    <th scope="row">
                      <a href="/group/{{$item->id}}">
                      {{$item->name}}
                      </a>
                    </th>
                    <td>
                      <i class="fas fa-arrow-up text-success mr-3"></i> {{$item->posts->count()}}
                    </td>
                    
                  </tr>  
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
         </div>
      
      

       </div>
  
      
@endsection