@extends('layout')
@section('title')
Promotion Apply
@endsection
@section('content')
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>@yield('title')</h3>
      </div>

    </div>
    <section class="bg-white">
   
    <div class="container border p-3">
       
        
            <div class="row">
              <div class="col-md-3">
                <div class="form-group row">
                   
                  <div class="col-md-12 col-sm-12">
                    <label class="control-label col-md-12 col-sm-12"><strong>Login</strong>
                    </label>
                     <input  class="form-control" type="text" name="middle-name"/>
                  </div>
                </div>

              </div>                             
              <div class="col-md-3">
                <div class="form-group row">
                   
                  <div class="col-md-12 col-sm-12">
                    <label class="control-label col-md-12 col-sm-12"><strong>Provider</strong>
                    </label>
                     <input  class="form-control" type="text" name="middle-name"/>
                  </div>
                </div>

              </div>                                
   
               <div class="col-md-3">
                <div class="form-group row">
                 
                  <div class="col-md-12 col-sm-12">
                    <label class="control-label col-md-12 col-sm-12"><strong>Status</strong>
                    </label>
                    <select class="form-control">
                      <option>Choose </option>
                      <option>Option one</option>
                      <option>Option two</option>
                      <option>Option three</option>
                      <option>Option four</option>
                    </select>
                  </div>
                </div>

              </div>
              
               
            </div>
            <div class="row  ">
      <div class="col-lg-3 d-flex">
      <div class="row mr-2">
      <label  class="col-sm-12 d-flex align-items-center ">Start*</label>
      <div class="col-sm-12 ">
        <input type="Date" class="form-control">
      </div>
      </div>
    </div>
    <div class="col-lg-3 d-flex">
      <div class=" row">
      <label class="col-sm-12 d-flex align-items-center ">End*</label>
      <div class="col-sm-12 ">
      <input type="Date" class="form-control">
      </div>
    </div>
    </div>
    <div class="col-lg-6 d-flex align-items-end">
    <div class="row justify-content-lg-end pt-md-3">
    <div class="d-flex  fonts-for-btn" >
      <button type="button" class="btn btn-light small m-0 border rounded-0">All</button>
      <button type="button" class="btn btn-light small m-0 border rounded-0">Today</button>
      <button type="button" class="btn btn-light small m-0 border rounded-0">Yesterday</button>
      <button type="button" class="btn btn-light small m-0 border rounded-0">This Week</button>
    </div>
    <div class="d-flex fonts-for-btn">
      <button type="button" class="btn btn-light small m-0 border rounded-0">Last Week</button>
      <button type="button" class="btn btn-light small m-0 border rounded-0">This Month</button>
      <button type="button" class="btn btn-light small m-0 border rounded-0">Last Month</button>     
    </div>
    </div>

  </div>
  </div>
            <div class="row">                                
              <div class="col-md-3">
                <div class="form-group row">
                   
                  <div class="col-md-12 col-sm-12">
                    <label class="control-label col-md-12 col-sm-12"><strong>Promotion Code</strong>
                    </label>
                     <input  class="form-control" type="text" name="middle-name"/>
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
                    <i class="fa fa-search" aria-hidden="true">  Serch</i>
                  </button>                             
                </div>
              </div>
               <div class="col-md-6"></div>
                
                 
                         
                 <div class="col-md-3">
                 
                  <button type="submit" class="btn btn-success">
                    <i class="fa fa-file-word-o" aria-hidden="true">  Export</i>
                  </button>
                  <button type="reset" class="btn btn-danger">
                    <i class="fa fa-arrow-circle-down" aria-hidden="true">  Download</i>
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
                            <th>ID</th>
                            <th>Affiliate</th>
                            <th>Login</th>
                            <th>Provider</th>
                            <th>Promotion </th>
                            <th>Promo Name</th>
                            <th>Status</th>
                            <th>Approve  </th>
                            <th>Currency</th>
                            <th>Transfer Amount</th>
                            <th>Target Amount</th>
                            <th>Rebate Amount</th>
                            <th>Remark</th>
                            <th>Created Date</th>
                            <th>Last Modified Date</th>
                            <th>Last Modified By</th>
                            <th>Action</th>
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
                            <td><span class="badge badge-secondary">$320,800</span></td>
                            <td>$320,800</td>
                            <td>$320,800</td>
                            <td>$320,800</td>
                            <td>$320,800</td>
                            <td>$320,800</td>
                            <td>$320,800</td>
                            <td>$320,800</td>
                            <td>$320,800</td>
                            <td>$320,800</td>
                            <td>$320,800</td>
                            
                          </tr>                                                    
                             <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td><span class="badge badge-primary">Edinburgh</span></td>
                            <td><span class="badge badge-success">61</span></td>
                            <td>2011/04/25</td>
                            <td>$320,800</td>
                            <td><span class="badge badge-secondary">$320,800</span></td>
                            <td>$320,800</td>
                            <td>$320,800</td>
                            <td>$320,800</td>
                            <td>$320,800</td>
                            <td>$320,800</td>
                            <td>$320,800</td>
                            <td>$320,800</td>
                            <td>$320,800</td>
                            <td>$320,800</td>
                            <td>$320,800</td>
                          </tr>                                                    
                             <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td><span class="badge badge-primary">Edinburgh</span></td>
                            <td><span class="badge badge-success">61</span></td>
                            <td>2011/04/25</td>
                            <td>$320,800</td>
                            <td><span class="badge badge-secondary">$320,800</span></td>
                            <td>$320,800</td>
                            <td>$320,800</td>
                            <td>$320,800</td>
                            <td>$320,800</td>
                            <td>$320,800</td>
                            <td>$320,800</td>
                            <td>$320,800</td>
                            <td>$320,800</td>
                            <td>$320,800</td>
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
    












  </div>
  <div class="clearfix"></div>
</div>
@endsection

@section('scripts')
<script>
  var today = new Date(new Date().getFullYear(), new Date().getMonth(), new Date().getDate());
  $('.startDate').datepicker({
    uiLibrary: 'bootstrap4',
    iconsLibrary: 'fontawesome',
    minDate: today,
    maxDate: function () {
      return $('.endDate').val();
    }
  });
  $('.endDate').datepicker({
    uiLibrary: 'bootstrap4',
    iconsLibrary: 'fontawesome',
    minDate: function () {
      return $('.startDate').val();
    }
  });
</script>
@endsection