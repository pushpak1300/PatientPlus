@extends('layouts.base') @section('page-content')
<div class="container-fluid ">
    <div class="row">
        <div class="col-xl-2"></div>
        <div class="col-xl-8">
            <div class="card">
                <!-- Card header -->
                <div class="card-header text-center">
                    <h3 class="mb-0">Start New Discussion</h3>
                </div>
                <!-- Card body -->
                <div class="card-body">
						  <form method="POST" action="/post">
							@csrf
							@method('POST')
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group text-center">
                                    <label
                                        class="form-control-label"
													 for="exampleDatepicker"
													
                                        >Title</label
                                    >
                                    <input
                                        class="form-control "
                                        placeholder="Please Add Title"
													 type="text"
													 name='title'
                                    />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group text-center">
                                    <label
                                        class="form-control-label"
													 for="exampleDatepicker"
													 
                                        >Details
                                    </label>
                                    <textarea
                                        class="form-control "
                                        rows="6"
													 type="text"
													 name='content'
                                    ></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group text-center">
                                    <label
                                        class="form-control-label"
                                        for="exampleFormControlSelect1"
                                        >Select Group</label
                                    >
                                    <select
                                        class="form-control"
													 id="exampleFormControlSelect1"
													 name='category_id'
                                    >
                                        @foreach ($category as $item)
														  <option value="{{$item->id}}">{{$item->name}}</option>
													 @endforeach
                                    </select>
                                </div>
                            </div>
								</div>
								 <div class="row">
                            <div class="col-md-12 text-center">
                                <div class="custom-control custom-checkbox mb-3">
                        <input class="custom-control-input" id="customCheck1" type="checkbox"  name='is_anonymous_post'>
                        <label class="custom-control-label" for="customCheck1" >Post Annonymously</label>
                      </div>
                            </div>
								</div>
								<div class="row text-center">
									
	<div class="col-lg-6"><button type="sumbit" class="btn btn-primary btn-lg btn-block">Post </button>
</div>
	<div class="col-lg-6"><button type="button" class="btn btn-danger btn-lg btn-block">Cancel</button>
</div>
										  
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-xl-2"></div>
    </div>

    @endsection
</div>
