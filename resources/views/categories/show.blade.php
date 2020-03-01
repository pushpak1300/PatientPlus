@extends('layouts.base')

@section('page-content')
     <div class="container-fluid ">
       <div class="row">
        
      <div class="col-xl-12">
          <div class="card">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h3 class="mb-0">All Grous</h3>
                </div>
                <div class="col text-right">
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
                    <th scope="col">Go to Space</th>
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
                    <td>
                      <a href="/group/{{$item->id}}">
                        <button class="btn btn-success">Visit Group</button>
                      
                      </a>
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