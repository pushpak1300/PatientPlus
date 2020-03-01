@extends('layouts.base')

@section('page-content')
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col-xl-4 order-xl-2">
          <div class="card card-profile">
            <img src="../../assets/img/theme/img-1-1000x600.jpg" alt="Image placeholder" class="card-img-top">
            <div class="row justify-content-center">
              <div class="col-lg-3 order-lg-2">
                <div class="card-profile-image">
                  <a href="#">
                  <img src="{{asset('images.png')}}" class="rounded-circle">
                  </a>
                </div>
              </div>
            </div>
            <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
              <div class="d-flex justify-content-between">
                <a href="#" class="btn btn-sm btn-info  mr-4 ">Connect</a>
                <a href="#" class="btn btn-sm btn-default float-right">Message</a>
              </div>
            </div>
            <div class="card-body pt-0">
              <div class="row">
                <div class="col">
                  <div class="card-profile-stats d-flex justify-content-center">
                    <div>
                    <span class="heading">{{$user->post->count()}}</span>
                      <span class="description">Post</span>
                    </div>
                    <div>
                    <span class="heading">{{$user->comments->count()}}</span>
                      <span class="description">Comment</span>
                    </div>
                    
                  </div>
                </div>
              </div>
              <div class="text-center">
                <h5 class="h3">
                {{$user->name}}<span class="font-weight-light">, 27</span>
                </h5>
               
              </div>
            </div>
          </div>
          <!-- Progress track -->
          
        </div>
        <div class="col-xl-8 order-xl-1">
          <div class="row">
            <div class="col-lg-6">
              <div class="card bg-gradient-info border-0">
                <!-- Card body -->
               
              </div>
            </div>
            
          </div>
          <div class="card">
            <div class="card-header">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0">Profile </h3>
                </div>
                <div class="col-4 text-right">
                  <a href="#!" class="btn btn-sm btn-primary">Settings</a>
                </div>
              </div>
            </div>
            <div class="card-body">
              <form>
                <h6 class="heading-small text-muted mb-4">User information</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-username">Name</label>
                      <input type="text" id="input-username" class="form-control" placeholder="Username" value="{{$user->name}}">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">Email address</label>
                      <input type="email" id="input-email" class="form-control" placeholder="{{$user->email}}">
                      </div>
                    </div>
                  </div>
                  
                </div>
                
                <hr class="my-4">
                <!-- Description -->
                <h6 class="heading-small text-muted mb-4">About me</h6>
                <div class="pl-lg-4">
                  <div class="form-group">
                    <label class="form-control-label">About Me</label>
                    <textarea rows="4" class="form-control" placeholder="A few words about you ...">I like to explore medical stratergy.</textarea>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      
@endsection