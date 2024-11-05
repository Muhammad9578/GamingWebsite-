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
Affiliate Generate Commission
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
    <div class="container border">

      <div class="row p-3 "> <!-- main row -->
        <div class="col-md-6">
          <div class="row">

            <div class="col-md-6"> <!-- inner first -->
              <form>
                <div class="form-group row">
                  <label for="inputEmail3" class="col-sm-3 col-form-label">Merchant</label>
                  <div class="col-sm-9">
                    <select class="form-control" id="exampleFormControlSelect1">
                      <option></option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>
                  </div>

                </div>

                <div class="form-group row">
                  <label for="inputPassword3" class="col-sm-3 col-form-label">Start*</label>
                  <div class="col-sm-9">

                    <input type="date" name="startdate" class="form-control" placeholder="Start Date">
                  </div>
                </div>


              </form>
            </div><!-- //close inner first -->

            <div class="col-md-6"> <!-- 2nd inner  -->
              <form>
                <div class="form-group row">
                  <label for="inputEmail3" class="col-sm-3 col-form-label">Currency</label>
                  <div class="col-sm-9">

                    <select class="form-control" id="exampleFormControlSelect1">
                      <option></option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>

                  </div>
                </div>

                <div class="form-group row">
                  <label for="inputPassword3" class="col-sm-3 col-form-label">End*</label>
                  <div class="col-sm-9">
                    <input type="date" name="enddate" class="form-control" placeholder="End Date">
                  </div>
                </div>
                
              </form>


            </div><!-- //close 2nd inner  -->
          </div>
        </div>
        <div class="col-md-6">
          <div class="row pt-3">
            <div class="col-md-12 ">
              

              <label class="d-flex align-items-center pr-2">Range</label>
              <div class="d-flex fonts-for-btn" >

                <button type="button" class="btn btn-light small">Last Week</button>

                <button type="button" class="btn btn-light small">Last Month</button>
                <button class="btn btn-success" data-toggle="modal" data-target="#Generate_Commission">Generate Commision</button>
                      
         <!-- Modal -->
<div class="modal fade" id="Generate_Commission" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Generate Commission Confirmation</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-10 m-auto">
            <h6 class="pb-3">Confirm Generating Commission On</h6>
            <form>
  <div class="form-group row">
    <label for="staticEmail" class="col-sm-3 col-form-label">Start*</label>
    <div class="col-sm-9">
      <input type="Date"  class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="staticEmail" class="col-sm-3 col-form-label">End*</label>
    <div class="col-sm-9">
      <input type="Date"  class="form-control">
    </div>
  </div>
  
</form>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        
        

        <button type="button" class="btn btn-success">Confirm</button>
        <button type="button" class="btn btn-light" data-dismiss="modal"><i class="fa fa-ban"></i> Cancel</button>
      </div>
    </div>

  </div>
</div>

              </div>
              
            </div>
          </div>

        </div>
        
      </div>

      <hr>

      <div class="row">
        <div class="col-md-12 ">
          <h3 class="pl-2">Affiliate Commission Approval</h3>
        </div>
      </div>

      <hr>
      <div class="row pb-3">
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

                  <div class="col-md-3 "> 
              
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

                  <div class="col-md-3 "> 
              
                <div class=" row p-2">
                  <label for="inputEmail3" class="col-sm-4 ">Affiliate</label>
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

                  <div class="col-md-3 "> 
              
                <div class=" row p-2">
                  <label for="inputEmail3" class="col-sm-4 ">Status</label>
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
          
        </div>
    <hr>
      <div class="row p-3">
        <div class="col-md-12 d-flex justify-content-between">
          <div class="d-flex">
            <button class="btn btn-primary"><i class="fa fa-times"></i> Clear</button>
            <button class="btn btn-success"><i class="fa fa-search"></i> Search</button>
          </div>
          <div class="d-flex">
            <button class="btn btn-warning"> <i class="fa fa-download"></i> Download</button>
            <button class="btn btn-info"  data-toggle="modal" data-target="#Approve_all">
              <i class="fa fa-"></i>
             Approve All</button>
         <!-- Modal -->
<div class="modal fade" id="Approve_all" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Approve All</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-10 m-auto">
            <form>
  <div class="form-group row">
    <label for="staticEmail" class="col-sm-3 col-form-label">Remark*</label>
    <div class="col-sm-9">
      <input type="text"  class="form-control">
    </div>
  </div>
  
</form>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        
        
        <button type="button" class="btn btn-primary">Approve</button>
        <button type="button" class="btn btn-success">Release Directly</button>
        <button type="button" class="btn btn-light" data-dismiss="modal"><i class="fa fa-ban"></i> Cancel</button>
      </div>
    </div>
  </div>
</div>
            <button class="btn btn-info">Approve Multiple</button>
          </div>

        </div>
        <div class="col-md-12 d-flex justify-content-end">
           <button class="btn btn-info">Export</button>
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
                  <th scope="col">Carry</th>
                  <th scope="col">Forward</th>
                  <th scope="col">Status</th>
                  <th scope="col">Remark</th>
                  
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