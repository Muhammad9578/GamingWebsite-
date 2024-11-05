@extends('layout')
@section('title')
Member Funds
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
    <div class="container border p-2 ">
      <div class="row">
        <div class="col-md-3">
          <div class=" row">
            <label  class="col-sm-12 ">Login</label>
            <div class="col-sm-12">
              <input type="text" name="" class="form-control">
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class=" row">
            <label  class="col-sm-12 ">Currency*</label>
            <div class="col-sm-12">

              <select class="form-control">
                <option></option>
                <option></option>
              </select>
            </div>
          </div>
        </div>
      </div>

      <div class="row pt-3">
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
              <button type="button" class="btn btn-light small m-0 border rounded-0">Monday</button>
              <button type="button" class="btn btn-light small m-0 border rounded-0">Tuesday</button>
              <button type="button" class="btn btn-light small m-0 border rounded-0">Wednesday</button>
              <button type="button" class="btn btn-light small m-0 border rounded-0">Thursday</button>
            </div>
            <div class="d-flex fonts-for-btn">
              <button type="button" class="btn btn-light small m-0 border rounded-0">Friday</button>
              <button type="button" class="btn btn-light small m-0 border rounded-0">Saterday</button>
              <button type="button" class="btn btn-light small m-0 border rounded-0">Sunday</button>     
            </div>
          </div>

        </div>
      </div>
      <div class="row pt-3">

       <div class="col-md-12">
        <div class=" row">

          <div class="col-md-12 col-sm-12 d-flex">
            <label class="control-label pr-5"><strong>Source</strong>
            </label>
            <div class="">
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox"  >
                <label class="form-check-label" >Withdrawal</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox"  >
                <label class="form-check-label" >Deposit</label>
              </div>                                         
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox"  >
                <label class="form-check-label" >Bonus</label>
              </div>                                         
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox"  >
                <label class="form-check-label" >Rebate</label>
              </div>                                           
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox"  >
                <label class="form-check-label" >Transfer</label>
              </div>                                          
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox"  >
                <label class="form-check-label" >Adjustment</label>
              </div>                                          
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" >
                <label class="form-check-label" >Referal</label>
              </div>
            </div>
          </div>
        </div>
          <div class="x_content">
    <div class="row">
      <div class="col-sm-12">
        <div class="card-box table-responsive">

          <table id="datatable" class="table table-striped table-bordered" style="width:100%">
            <thead class="table-bordered table-dark">
              <tr>
                <th>ID</th>
                <th>Login</th>
                <th>Record Time</th>
                <th>Currency</th>
                <th>Previous Balance</th>
                <th>Fund</th>
                <th>Amount</th>
                <th>Balance</th>
                <th>Operator</th>
                <th>Remark</th>
              </tr>
            </thead>
            <tbody>

            </tbody>
          </table>
        </div>



      </div>
    </div>
  </div>
      </div>
    </div>

  </div>
  </section>



</div>
<div class="clearfix"></div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
      <form class="form-label-left input_mask">
        <div class="form-group row">
          <label class="control-label col-md-3 col-sm-3">Member</label>
          <div class="col-md-9 col-sm-9">
           <input type="text" class="form-control">
         </div>
       </div>                      
       <div class="form-group row">
        <label class="control-label col-md-3 col-sm-3">Member Bank</label>
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
      <div class="form-group row">
        <label class="control-label col-md-3 col-sm-3">Bank Name</label>
        <div class="col-md-9 col-sm-9">
         <input type="text" class="form-control">
       </div>
     </div>  

     <div class="form-group row">
      <label class="control-label col-md-3 col-sm-3">Bank Branch</label>
      <div class="col-md-9 col-sm-9">
       <input type="text" class="form-control">
     </div>
   </div> 

   <div class="form-group row">
    <label class="control-label col-md-3 col-sm-3">Account Name</label>
    <div class="col-md-9 col-sm-9">
     <input type="text" class="form-control">
   </div>
 </div>                        
 <div class="form-group row">
  <label class="control-label col-md-3 col-sm-3">Account No</label>
  <div class="col-md-9 col-sm-9">
   <input type="text" class="form-control">
 </div>
</div>                         
<div class="form-group row">
  <label class="control-label col-md-3 col-sm-3">Amount</label>
  <div class="col-md-9 col-sm-9">
   <input type="text" class="form-control">
 </div>
</div> 
</form>
</div>
<div class="modal-footer">
  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
  <button type="button" class="btn btn-primary">Save changes</button>
</div>
</div>
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