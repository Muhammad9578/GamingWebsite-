<style >
  .fonts-for-btn button{
    font-size: 10px;

  }
  .table-class-sty th,.table-class-sty td{
    vertical-align: unset!important;
  }
  .model-dialoge-style{
    max-width: 820px!important;
  }
  .annauncement_models{
    max-width: 400px;
  }
</style>
@extends('layout')
@section('title')
Affiliate Approval History
@endsection
@section('content')
<div class="right_col" role="main">
  <div class="container bg-light">
    <div class="row">
      <div class="col-md-12  d-flex align-items-center">
        <div class="page-titlee">
          <h3>@yield('title')</h3>
        </div>
        
      </div>
    </div>
    <!-- Title close -->
  </div>
<section class="bg-white ">
  <div class="container p-3  border">
    <div class="row p-3 "> <!-- main row -->
      <div class="col-md-3">
        <div class=" row">
                <label  class="col-sm-12">Merchant*</label>
                <div class="col-sm-12">
                  <select class="form-control">
                    <option>UA9</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
                </div>

              </div>
      </div>

      <div class="col-md-3">
        <div class="row">
                <label  class="col-sm-12 ">Currency*</label>
                <div class="col-sm-12">
                  <select class="form-control">
                    <option></option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
                </div>

              </div>
      </div>
      <div class="col-md-3">
        <div class="row">
              <label class=" col-sm-12">Affiliate Login</label>
              <div class="col-sm-12">
                <input type="text" class="form-control" placeholder="">
              </div>
            </div>
      </div>
      <div class="col-md-3">
        <div class="row">
              <label class=" col-sm-12">Affiliate Name</label>
              <div class="col-sm-12">
                <input type="text" class="form-control" placeholder="">
              </div>
            </div>
      </div>
    </div>

    <div class="row p-3">
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
          <div class="col-md-12 ">
            <div class="pl-5">
              <button type="button" class="btn btn-primary"><i class="fa fa-times"></i>  Clear</button>
              <button type="button" class="btn btn-success"> <i class="fa fa-search"></i>  Search</button>
            </div>
            
          </div>
        </div>
        <hr>
        <div class="row">
        <div class="col-md-12">
          <div class="overflow-auto">
            <table class="table datatables_all border">
              <thead>
                <tr class="bg-dark text-white">
                  <th scope="col">#</th>
                  <th scope="col">Merchant</th>
                  <th scope="col">Parent</th>
                  <th scope="col">Affiliate Code</th>
                  <th scope="col">Affiliate Login</th>
                  <th scope="col">Name</th>
                  <th scope="col">Currency</th>
                  <th scope="col">Contact</th>
                  <th scope="col">Domain</th>
                  <th scope="col">Member</th>
                  <th scope="col">Clicks</th>
                  <th scope="col">Common Wallets</th>
                  <th scope="col">Common Groups</th>
                  <th scope="col">Affiliate Group</th>
                  <th scope="col">Register Date</th>
                  <th scope="col">Remark</th>
                  <th scope="col">Status</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    </section>

    <div class="container">
      
    </div>
  </div>
</section>
</div>
</div>

@endsection


@section('scripts')
<script>
  $(document).ready(function() {
    $('.datatables_all').dataTable();            
  } );
</script>
@endsection