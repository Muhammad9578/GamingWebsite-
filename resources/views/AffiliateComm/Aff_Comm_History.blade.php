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
Affiliate Commission History
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
    <div class="container border p-2">
      <div class="row py-3">
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
      <div class="col-md-9 "> 
              
                <div class=" row p-2">
                  <label for="inputEmail3" class="col-sm-2 ">Affiliate*</label>
                  <div class="col-sm-10 d-flex">
                    <input type="" class="form-control mr-1" name="">
                    <select class="form-control mr-1" >
                      <option>Select Month</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>

                     <select class="form-control mr-1" >
                      <option>Select Group</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>

                     <select class="form-control mr-1" >
                      <option>Commission</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>
                  </div>
                </div>
            </div>
            </div><!-- main row -->     
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
      <hr>
            <div class="row">
        <div class="col-md-12 ">
          <div class="overflow-auto">
            <table class="table datatables_all border">
              <thead>
                <tr class="bg-dark text-white">
                  <th scope="col">Merchant</th>
                  <th scope="col">Start Date</th>
                  <th scope="col">End Date</th>
                  <th scope="col">Affiliate</th>
                  <th scope="col">Currency</th>
                  <th scope="col">Affiliate Group</th>
                  <th scope="col">Active Members</th>
                  <th scope="col">Calculated Commission</th>
                  <th scope="col">Last Carry Forward</th>
                  <th scope="col">Total Entitled Commission</th>
                  <th scope="col">Adjustment</th>
                  <th scope="col">Final Commission</th>
                  <th scope="col">Total Released Commission</th>
                  <th scope="col">Carry Forward</th>
                 
                  <th scope="col">Status</th>
                  <th scope="col">Remark</th>
                  <th scope="col">Real Released Amount</th>
                  <th scope="col">Last Modiefy Date</th>
                  
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