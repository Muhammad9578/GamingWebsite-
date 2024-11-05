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
</style>
@extends('layout')
@section('title')
Affiliate Withdrawal History
@endsection
@section('content')
<div class="right_col" role="main">
  <div class="container bg-light">
    <div class="row">
      <div class="col-md-12">
        <div class="page-title">
          <div class="title_left">
            <h3>@yield('title')</h3>
          </div>
        </div>
      </div>
    </div>
    <!-- Title close -->
  </div>
  <section class=" bg-white">
    <div class="container border p-2 ">
      <div class="row ">
        <div class="col-md-3 ">

          <div class=" row p-2">
            <label for="inputEmail3" class="col-sm-4 ">Merchant*</label>
            <div class="col-sm-8">
              <select class="form-control" >
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

          <div class=" row p-2">
            <label for="inputEmail3" class="col-sm-4 ">Currency*</label>
            <div class="col-sm-8">
              <select class="form-control" >
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
          <div class=" row p-2">
            <label for="inputEmail3" class="col-sm-4 ">Status*</label>
            <div class="col-sm-8">
              <select class="form-control" >
                <option></option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>
              
            </div>
          </div>    
        </div> 
      </div><!-- main row --> 
      <div class="row ">
        <div class="col-md-3">
          <div class=" row p-2">
            <label for="inputEmail3" class="col-sm-4 ">Affiliate Login</label>
            <div class="col-sm-8">
              <input type="" class="form-control" name="">
            </div>
          </div>    
        </div>

        <div class="col-md-3">

          <div class=" row p-2">
            <label for="inputEmail3" class="col-sm-4 ">Affiliate Name</label>
            <div class="col-sm-8">
              <input type="" class="form-control" name="">
            </div>
          </div>    
        </div>   
      </div><!-- main row -->    

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

      <div class="row p-3">
        <div class="col-md-12 d-flex justify-content-around">
          <div class="d-flex">
            <button class="btn btn-primary"><i class="fa fa-times"></i> Clear</button>
            <button class="btn btn-success"><i class="fa fa-search"></i> Search</button>
          </div>
          <div class="d-flex">
            <button class="btn btn-info"><i class="fa fa-file"></i> Export</button>
            <button class="btn btn-warning"><i class="fa fa-download"></i> Download</button>
          </div>
        </div> 
      </div>
      <div class="row">
        <div class="col-md-12 ">
          <div class="overflow-auto">
            <table class="table datatables_all border">
              <thead>
                <tr class="bg-dark text-white">
                  <th scope="col">Id</th>
                  <th scope="col">Merchant</th>
                  
                  <th scope="col">Affiliate</th>
                  
                  <th scope="col">Affiliate Group</th>
                  <th scope="col">Affiliate Name</th>

                  <th scope="col">Amount</th>
                  <th scope="col">Processing Fee</th>
                  <th scope="col">Confirmed Amount</th>
                  <th scope="col">Apply Time</th>
                  <th scope="col">Applicant Bank</th>
                  <th scope="col">Status</th>
                  <th scope="col">Remark</th>
                  <th scope="col">Approval Remark</th>
                  <th scope="col">Processing Time</th>
                  <th scope="col">Handler</th>
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
</div>





@endsection


@section('scripts')
<script>
  $(document).ready(function() {
    $('.datatables_all').dataTable();            
  } );
</script>
@endsection