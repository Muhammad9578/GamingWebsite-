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
Withdrawal 
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

      <div class="row p-3 "> <!-- main row -->
        <div class="col-lg-3 col-md-4">
          <div class="row">
            <label  class="col-sm-12 ">Merchent</label>
            <div class="col-sm-12">
              <select class="form-control">
                <option>AUS</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4">
          <div class=" row">
            <label for="inputEmail3" class="col-sm-12 ">Login</label>
            <div class="col-sm-12">

              <input type="text" name="login" class="form-control">

            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-4">
          <div class="row">
            <label  class="col-sm-12 ">Currency</label>
            <div class="col-sm-12">
              <select class="form-control">
                <option>All</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>
            </div>
          </div>
        </div>
      </div> <!-- main row close -->

      <div class="row p-3">
      <div class="col-md-12 d-flex align-items-center">
     <label class="d-flex align-items-center pr-2">Range</label>
     <div class="d-flex align-items-center" >
      <input type="checkbox" name=""  class="ml-2 mr-1"> Approved
      <input type="checkbox" name=""  class="ml-2 mr-1"> Rejected
      <input type="checkbox" name=""  class="ml-2 mr-1"> Pending
      <input type="checkbox" name=""  class="ml-2 mr-1"> In Progress
      <input type="checkbox" name=""  class="ml-2 mr-1"> RISK
      <input type="checkbox" name=""  class="ml-2 mr-1"> KYC
    </div>
  </div>
      </div>
            <!-- ---------------------------- -->
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
      <!-- --------------------------------------- -->



<div class="row p-3">
  <div class="col-md-12 d-flex align-items-center py-2">
   <label class="d-flex  pr-2 align-items-center">Payment Method</label>
   <div class="d-flex align-items-center" >
    <select class="form-control w-100">
     <option>All Payment Method</option>
   </select>
 </div>
</div>
</div>

<hr>
<div class="row p-3">
<div class="col-md-12">
  <div class="d-flex justify-content-between p-2 mx-3 ">
    <div>
      <button class="btn btn-primary py-1"><i class="
        fa fa-times"></i> Clear</button>
        <button class="btn btn-success py-1"><i class="
          fa fa-search"></i> Search</button>
        </div>
        <div>
          <button type="button" class="btn btn-primary  py-1" data-toggle="modal" data-target="">
            <i class="fa fa-file mr-1"></i>Export
          </button>
          <button type="button" class="btn btn-warning  py-1" data-toggle="modal" data-target="">
            <i class="fa fa-download mr-1"></i>Download
          </button>
          <button type="button" class="btn btn-success  py-1" data-toggle="modal" data-target="#addWithdrawl">
            <i class="fa fa-plus-circle mr-1"></i>Add
          </button>
        </div>
      </div>
    </div>
  </div>
  <hr>
  <div class="row">
    <div class="col-md-12 overflow-auto ">
      <table class="table  datatables_all  table-striped table-bordered" cellspacing="0" width="100%">
        <thead class="thead-dark">
          <tr>
            <th scope="col" rowspan="" class="align-top" > ID </th>
            <th scope="col" rowspan="" class="align-top"> Type</th>
            <th scope="col" rowspan="" class="align-top"> Payment Method </th>
            <th scope="col" rowspan="" class="align-top"> Status </th>
            <th scope="col" rowspan="" class="align-top"> Login </th>
            <th scope="col" rowspan="" class="align-top"> Curancy</th>
            <th scope="col" rowspan="" class="align-top"> Amount </th>

            <th scope="col" colspan=""> Processing Fee</th>
            <th scope="col" colspan=""> Confirmed Amount </th>
            <th scope="col"> Member Bank </th>
            <th scope="col" class="big_col"> Member Account </th>
            <th scope="col"> Merchent Bank </th>
            <th scope="col" class="big_col"> Merchent Account </th>
            <th scope="col" class="big_col">Remarks</th>
            <th scope="col" > Approval/Rejected Remarks </th>
            <th scope="col">Created Date</th>
            <th scope="col">Processing Time</th>
            <th scope="col">Handler</th>

          </tr>
        </thead>
        <tbody>
          <tr>
            <td scope="col" rowspan="" class="align-top" > ID </td>
            <td scope="col" rowspan="" class="align-top"> Merchant</td>
            <td scope="col" rowspan="" class="align-top ">Transfer</td>
            <td scope="col" rowspan="" class="align-top"> <span class="text-white  bg-success px-2 py-1"> aproved </span> </td>
            <td scope="col" rowspan="" class="align-top"> <span class="text-white  bg-primary px-2 py-1"> tt1211 </span> </td>
            <td scope="col" rowspan="" class="align-top"> SGD</td>
            <td scope="col" rowspan="" class="align-top"> 12.00 </td>

            <td scope="col" colspan=""> 0.00</td>
            <td scope="col" colspan=""> 12.00 </td>
            <td scope="col"> City Bank </td>
            <td scope="col" class="big_col"> 00121341322 </td>
            <td scope="col" class="big_col">City Bank</td>
            <td scope="col" >74612983783219</td>
            <td scope="col" ></td>
            <td scope="col" >Verified</td>
            <td scope="col" >11-02-2021</td>
            <td scope="col" >11-02-2021</td>
            <td scope="col" >udb374</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
    
  </div>
  

</section>
</div>


<!--  model -->
<div class="modal fade " id="addWithdrawl" role="dialog">
  <div class="annauncement_models modal-dialog ">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4> Add Withdrawl</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
       <form method="" action="">
        <div class="form-group row">
         <div class="col-1"></div>
         <label class="col-sm-3 col-form-label">Member Name</label>
         <div class="col-sm-7">
          <input class="form-control" type="" placeholder="">
        </div>
      </div>
      <div class="form-group row">
       <div class="col-1"></div>
       <label class="col-sm-3 col-form-label">Member Bank</label>
       <div class="col-sm-7">
        <select class="form-control">
         <option>Select Bank</option>
         <option>1</option>
         <option>2</option>
         <option>3</option>
       </select>
     </div>
   </div>
   <div class="form-group row">
     <div class="col-1"></div>
     <label class="col-sm-3 col-form-label">Bank Name</label>
     <div class="col-sm-7">
      <input class="form-control" type="" placeholder="">
    </div>
  </div>
  <div class="form-group row">
   <div class="col-1"></div>
   <label class="col-sm-3 col-form-label">Bank Branch</label>
   <div class="col-sm-7">
    <input class="form-control" type="" placeholder="">
  </div>
</div>
<div class="form-group row">
 <div class="col-1"></div>
 <label class="col-sm-3 col-form-label">Account Name</label>
 <div class="col-sm-7">
  <input class="form-control" type="" placeholder="">
</div>
</div>
<div class="form-group row">
 <div class="col-1"></div>
 <label class="col-sm-3 col-form-label">Account No</label>
 <div class="col-sm-7">
  <input class="form-control" type="number" placeholder="">
</div>
</div>
<div class="form-group row">
 <div class="col-1"></div>
 <label class="col-sm-3 col-form-label"> Amoount </label>
 <div class="col-sm-7">
  <input class="form-control" type="number" placeholder="">
</div>
</div>
</form>
</div>
<div class="modal-footer">
  <button type="button" class="btn btn-white" data-dismiss="modal"><i class="fa fa-ban mr-1"></i>Cancel</button>
  <button type="button" class="btn btn-primary"> Save</button>
</div>
</div>
</div>
</div>
<!-- model  -->

@endsection


@section('scripts')
<script>

</script>
@endsection