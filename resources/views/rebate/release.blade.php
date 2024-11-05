@extends('layout')
@section('title')
Rebalte Release
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
            <div class="col-md-12">
                <h2>
                            Form Basic Elements <small>different form elements</small>
                        </h2>
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
                              <hr>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group row">
                                        <label class="control-label col-md-3 col-sm-3"><strong>Currency*</strong>
                                        </label>
                                        <div class="col-md-9 col-sm-9">
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
                                <div class="col-md-3">
                                    <div class="form-group row">
                                        <label class="control-label col-md-3 col-sm-3"><strong>Affiliate*</strong> </label>
                                        <div class="col-md-9 col-sm-9">
                                            <input class="form-control" />
                                        </div>
                                    </div>

                                </div>

                                <div class="col-md-3">
                                    <div class="form-group row">
                                        <label class="control-label col-md-3 col-sm-3"><strong>Login*</strong> </label>
                                        <div class="col-md-9 col-sm-9">
                                            <input  class="form-control" />
                                        </div>
                                        </div>
                                     
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group row">
                                        <label class="control-label col-md-3 col-sm-3"><strong>Rabates*</strong> </label>
                                        <div class="col-md-9 col-sm-9">
                                            <input  class="form-control" />
                                        </div>
                                        </div>
                                     
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group row">
                                        <label class="control-label col-md-3 col-sm-3"><strong>Provider*</strong>
                                        </label>
                                        <div class="col-md-9 col-sm-9">
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
                                <div class="col-md-3">
                                    <div class="form-group row">
                                        <label class="control-label col-md-3 col-sm-3"><strong>Currency*</strong>
                                        </label>
                                        <div class="col-md-9 col-sm-9">
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

                            </div><hr>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="">
                                        <button class="btn btn-primary">Cancle</button>
                                        <button class="btn btn-success">Search</button>
                                    </div>
                                </div>
                                <div class="col-md-8 d-flex justify-content-lg-end">
                                                                   <button type="submit" class="btn btn-success">
                                    Release Partial
                                </button>
                                <button type="reset" class="btn btn-danger">
                                    <i class="fa fa-times" aria-hidden="true">  Reset Partial</i>
                                </button>                             
                                <button type="submit" class="btn btn-success">
                                    Release All
                                </button>                             
                                <button type="reset" class="btn btn-danger">
                                    <i class="fa fa-times" aria-hidden="true"> Reset All</i> 
                                </button>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                    <div class="col-sm-12">
                                        <div class="card-box table-responsive">
                                           <h5>Current Page Total:0000</h5>
                                           <h5>Total Amount:0000</h5><br>
                                            <table id="datatable-checkbox" class="table table-striped table-bordered bulk_action" style="width:100%">
                                                <thead class="table-bordered table-dark">
                                                    <tr>
                                                        <th>
                                                            <th><input type="checkbox" id="check-all"></th>
                                                        </th>
                                                        <th>Start Time</th>
                                                        <th>End Time</th>
                                                        <th>Status</th>
                                                        <th>Login</th>
                                                        <th>Group</th>
                                                        <th>Affiliate</th>
                                                        <th>Provider</th>
                                                        <th>Currency</th>
                                                        <th>Valid Turn Over</th>
                                                        <th>Promo Turn Over</th>
                                                        <th>Total Eligble Turnover</th>
                                                        <th>Rate</th>
                                                        <th>Win Loss</th>
                                                        <th>Rebate Amount</th>
                                                        <th>Relwase Amount</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <th><input type="checkbox" id="check-all"></th>
                                                        </td>
                                                        <td>Tiger Nixon</td>
                                                        <td>System Architect</td>
                                                        <td>Edinburgh</td>
                                                        <td>61</td>
                                                        <td>2011/04/25</td>
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

<!-- Button trigger modal -->

  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
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