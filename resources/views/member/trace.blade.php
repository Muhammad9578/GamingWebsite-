@extends('layout')
@section('title')
Member Trace
@endsection
@section('content')
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Member Trace</h3>
      </div>

    </div>
    <section class="bg-white">
      <div class="container border p-3">
        <ul class="nav nav-tabs pt-3 pl-3" id="myTab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                  aria-controls="home" aria-selected="true">Same Info Query</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab"
                  aria-controls="home" aria-selected="false">Same IP Query</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab"
                  aria-controls="home" aria-selected="false">Same FingerPrint </a>
              </li>
            </ul>
            <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="row pt-5">
                          <div class="col-md-3">
                            <div class="form-group row">
            
                              <div class="col-md-12 col-sm-12">
                                <label class="control-label col-md-12 col-sm-12"><strong>Login </strong>
                                </label>
                                <input type="text" class="form-control" name="" id="">
                              </div>
                            </div>
            
                          </div>

                        </div>
                      </div>


                    </div>
                    <hr>

                     <div class="row">
                            <div class="col-md-3">
                              <div class="form-group">
            
                                <button type="reset" class="btn btn-primary">
                                  <i class="fa fa-times" aria-hidden="true"> Cancel</i>
                                </button>
                                <button type="reset" class="btn btn-success">
                                  <i class="fa fa-search" aria-hidden="true"> Serch</i>
                                </button>
                              </div>
                            </div>
                            <div class="col-md-4"></div>
            
            
            
                            <div class="col-md-4">
            
            
                              <button type="submit" class="btn btn-success">
                                <i class="fa fa-file-word-o" aria-hidden="true"> Export</i>
                              </button>
                              <button type="reset" class="btn btn-danger">
                                <i class="fa fa-arrow-circle-down" aria-hidden="true"> Download</i>
                              </button>
            
                            </div>
                          </div>
                          <hr>
        							<div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
            
                              <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                                <thead class="table-bordered table-dark">
                                  <tr>
                                    
                                    <th>Login</th>
                                    <th>Name</th>
                                    <th>Password</th>
                                    <th>Register IP</th>
                                    <th>LAst Login IP</th>
                                    <th>LAst Login Date</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    <td><span class="badge badge-primary">Edinburgh</span></td>
                                    <td><span class="badge badge-success">61</span></td>
                                    <td>2011/04/25</td>
                                    <td>$320,800</td>
                                  </tr>
            
            
            
            
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
      </div>
    </section>
  </div>
</div>

            
@endsection