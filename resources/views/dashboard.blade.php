@extends('layouts.base')

@section('page-content')
     <div class="container-fluid mt--6">
      
      
      <div class="row">
        <div class="col-xl-12">
          <div class="card">
            <div class="card-header">
              <h5 class="h3 mb-0">Activity feed</h5>
            </div>
            <div class="card-header d-flex align-items-center">
              <div class="d-flex align-items-center">
                <a href="#">
                  <img src="../../assets/img/theme/team-1.jpg" class="avatar">
                </a>
                <div class="mx-3">
                  <a href="#" class="text-dark font-weight-600 text-sm">John Snow</a>
                  <small class="d-block text-muted">3 days ago</small>
                </div>
              </div>
              <div class="text-right ml-auto">
                <button type="button" class="btn btn-sm btn-primary btn-icon">
                  <span class="btn-inner--icon"><i class="ni ni-fat-add"></i></span>
                  <span class="btn-inner--text">Follow</span>
                </button>
              </div>
            </div>
            <div class="card-body">
              <p class="mb-4">
                Personal profiles are the perfect way for you to grab their attention and persuade recruiters to continue reading your CV because you’re telling them from the off exactly why they should hire you.
              </p>
              <div class="row align-items-center my-3 pb-3 border-bottom">
                <div class="col-sm-6">
                  <div class="icon-actions">
                    <a href="#" class="like active">
                      <i class="ni ni-like-2"></i>
                      <span class="text-muted">150</span>
                    </a>
                    <a href="#">
                      <i class="ni ni-chat-round"></i>
                      <span class="text-muted">36</span>
                    </a>
                    <a href="#">
                      <i class="ni ni-curved-next"></i>
                      <span class="text-muted">12</span>
                    </a>
                  </div>
                </div>
                <div class="col-sm-6 d-none d-sm-block">
                  <div class="d-flex align-items-center justify-content-sm-end">
                    <div class="avatar-group">
                      <a href="#" class="avatar avatar-xs rounded-circle" data-toggle="tooltip" data-original-title="Jessica Rowland">
                        <img alt="Image placeholder" src="../../assets/img/theme/team-1.jpg" class="">
                      </a>
                      <a href="#" class="avatar avatar-xs rounded-circle" data-toggle="tooltip" data-original-title="Audrey Love">
                        <img alt="Image placeholder" src="../../assets/img/theme/team-2.jpg" class="rounded-circle">
                      </a>
                      <a href="#" class="avatar avatar-xs rounded-circle" data-toggle="tooltip" data-original-title="Michael Lewis">
                        <img alt="Image placeholder" src="../../assets/img/theme/team-3.jpg" class="rounded-circle">
                      </a>
                    </div>
                    <small class="pl-2 font-weight-bold">and 30+ more</small>
                  </div>
                </div>
              </div>
              <!-- Comments -->
              <div class="mb-1">
                <div class="media media-comment">
                  <img alt="Image placeholder" class="avatar avatar-lg media-comment-avatar rounded-circle" src="../../assets/img/theme/team-1.jpg">
                  <div class="media-body">
                    <div class="media-comment-text">
                      <h6 class="h5 mt-0">Michael Lewis</h6>
                      <p class="text-sm lh-160">Cras sit amet nibh libero nulla vel metus scelerisque ante sollicitudin. Cras purus odio vestibulum in vulputate viverra turpis.</p>
                      <div class="icon-actions">
                        <a href="#" class="like active">
                          <i class="ni ni-like-2"></i>
                          <span class="text-muted">3 likes</span>
                        </a>
                        <a href="#">
                          <i class="ni ni-curved-next"></i>
                          <span class="text-muted">2 shares</span>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="media media-comment">
                  <img alt="Image placeholder" class="avatar avatar-lg media-comment-avatar rounded-circle" src="../../assets/img/theme/team-2.jpg">
                  <div class="media-body">
                    <div class="media-comment-text">
                      <h6 class="h5 mt-0">Jessica Stones</h6>
                      <p class="text-sm lh-160">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
                      <div class="icon-actions">
                        <a href="#" class="like active">
                          <i class="ni ni-like-2"></i>
                          <span class="text-muted">10 likes</span>
                        </a>
                        <a href="#">
                          <i class="ni ni-curved-next"></i>
                          <span class="text-muted">1 share</span>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <hr>
                <div class="media align-items-center">
                  <img alt="Image placeholder" class="avatar avatar-lg rounded-circle mr-4" src="../../assets/img/theme/team-3.jpg">
                  <div class="media-body">
                    <form>
                      <textarea class="form-control" placeholder="Write your comment" rows="1"></textarea>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
      </div>
      <div class="row">
        <div class="col-xl-8">
          <div class="card">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h3 class="mb-0">Page visits</h3>
                </div>
                <div class="col text-right">
                  <a href="#!" class="btn btn-sm btn-primary">See all</a>
                </div>
              </div>
            </div>
            <div class="table-responsive">
              <!-- Projects table -->
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">Page name</th>
                    <th scope="col">Visitors</th>
                    <th scope="col">Unique users</th>
                    <th scope="col">Bounce rate</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">
                      /argon/
                    </th>
                    <td>
                      4,569
                    </td>
                    <td>
                      340
                    </td>
                    <td>
                      <i class="fas fa-arrow-up text-success mr-3"></i> 46,53%
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">
                      /argon/index.html
                    </th>
                    <td>
                      3,985
                    </td>
                    <td>
                      319
                    </td>
                    <td>
                      <i class="fas fa-arrow-down text-warning mr-3"></i> 46,53%
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">
                      /argon/charts.html
                    </th>
                    <td>
                      3,513
                    </td>
                    <td>
                      294
                    </td>
                    <td>
                      <i class="fas fa-arrow-down text-warning mr-3"></i> 36,49%
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">
                      /argon/tables.html
                    </th>
                    <td>
                      2,050
                    </td>
                    <td>
                      147
                    </td>
                    <td>
                      <i class="fas fa-arrow-up text-success mr-3"></i> 50,87%
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">
                      /argon/profile.html
                    </th>
                    <td>
                      1,795
                    </td>
                    <td>
                      190
                    </td>
                    <td>
                      <i class="fas fa-arrow-down text-danger mr-3"></i> 46,53%
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="col-xl-4">
          <div class="card">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h3 class="mb-0">Social traffic</h3>
                </div>
                <div class="col text-right">
                  <a href="#!" class="btn btn-sm btn-primary">See all</a>
                </div>
              </div>
            </div>
            <div class="table-responsive">
              <!-- Projects table -->
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">Referral</th>
                    <th scope="col">Visitors</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">
                      Facebook
                    </th>
                    <td>
                      1,480
                    </td>
                    <td>
                      <div class="d-flex align-items-center">
                        <span class="mr-2">60%</span>
                        <div>
                          <div class="progress">
                            <div class="progress-bar bg-gradient-danger" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                          </div>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">
                      Facebook
                    </th>
                    <td>
                      5,480
                    </td>
                    <td>
                      <div class="d-flex align-items-center">
                        <span class="mr-2">70%</span>
                        <div>
                          <div class="progress">
                            <div class="progress-bar bg-gradient-success" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;"></div>
                          </div>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">
                      Google
                    </th>
                    <td>
                      4,807
                    </td>
                    <td>
                      <div class="d-flex align-items-center">
                        <span class="mr-2">80%</span>
                        <div>
                          <div class="progress">
                            <div class="progress-bar bg-gradient-primary" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"></div>
                          </div>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">
                      Instagram
                    </th>
                    <td>
                      3,678
                    </td>
                    <td>
                      <div class="d-flex align-items-center">
                        <span class="mr-2">75%</span>
                        <div>
                          <div class="progress">
                            <div class="progress-bar bg-gradient-info" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;"></div>
                          </div>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">
                      twitter
                    </th>
                    <td>
                      2,645
                    </td>
                    <td>
                      <div class="d-flex align-items-center">
                        <span class="mr-2">30%</span>
                        <div>
                          <div class="progress">
                            <div class="progress-bar bg-gradient-warning" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%;"></div>
                          </div>
                        </div>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
@endsection