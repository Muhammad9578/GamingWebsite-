@extends('layout')
@section('title')
Bank Details
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
      <div class="row p-3">
        <div class="col-lg-3 col-md-4">
          <div class=" row">
            <label class="col-sm-12 ">Merchant</label>
            <div class="col-sm-12">
              <select class="form-control">
                <option> UA9 </option>
                <option>1</option>
                <option>2</option>
              </select>
            </div>
          </div>

        </div>

        <div class="col-lg-3 col-md-4">
          <div class=" row">
            <label  class="col-sm-12 ">Currancy</label>
            <div class="col-sm-12">

              <select class="form-control" >
                <option>All</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4">
          <div class="row">
            <label  class="col-sm-12 ">Keyword</label>
            <div class="col-sm-12">
              <input type="text" name="" placeholder="Search By Remarks" class="form-control">
            </div>
          </div>
        </div>
      </div> <!-- close first row -->

      <div class="row p-3">
        <div class="col-lg-3 col-md-4">
                        <div class="row">
                <label  class="col-sm-12 ">Account</label>
                <div class="col-sm-12">
                  <select class="form-control">
                    <option>All</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                  </select>
                </div>
              </div> 
        </div>

        <div class="col-lg-3 col-md-4">
                        <div class=" row">
                <label  class="col-sm-12 ">Type</label>
                <div class="col-sm-12">

                  <select class="form-control" >
                    <option>All</option>
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
            <label class="col-sm-12 "> Transection </label>
            <div class="col-sm-12">
              <select class="form-control">
                <option>All</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
              </select>
            </div>
          </div>
        </div>
      </div> <!-- close row 2 -->

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
      </div> <!-- close row 3 -->

      <hr>

      <div class="row py-3">
        <div class="col-md-12  d-flex justify-content-around ">

         <div class="">
          <div class="form-group">

            <button type="reset" class="btn btn-primary">
              <i class="fa fa-times" aria-hidden="true"> Clear</i>
            </button>
            <button type="reset" class="btn btn-success">
              <i class="fa fa-search" aria-hidden="true">  Serch</i>
            </button>                             
          </div>
        </div>

        <div class="">
          <button type="submit" class="btn btn-warning text-white">
            <i class="fa fa-download mr-2" aria-hidden="true"></i>Download
          </button>
          <button type="submit" class="btn btn-success" data-toggle="modal" data-target="#Add_merchent_bank_transfer">
            <i class="fa fa-plus-circle mr-2" aria-hidden="true"></i>Add
          </button>
          <button type="submit" class="btn btn-primary">
            <i class="fa fa-file-word-o mr-2" aria-hidden="true"></i>Export
          </button>
        </div>
      </div>

    </div>
    <hr>
    <div class="row">
      <div class="col-md-6 px-5 py-3">
        <div class="d-flex w-100 align-items-center  justify-content-between">
          <strong> Current Page Total: </strong>
          <label>
            Income
            <span  class="bg-primary ml-3 text-white p-1">0.00</span>
          </label>
          <label>
            Expense
            <span  class="bg-primary ml-3 p-1 text-white">0.00</span>
          </label>
        </div>
      </div>
      <div class="col-md-6 px-5 py-3">
        <div class="d-flex w-100 align-items-center  justify-content-between">
          <strong>Current Search Total:  </strong>
          <label>
            Income
            <span  class="bg-primary ml-3 text-white p-1">0.00</span>
          </label>
          <label>
            Expense
            <span  class="bg-primary ml-3 p-1 text-white">0.00</span>
          </label>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
        <div class="card-box table-responsive">
          <table id="datatable" class="table table-striped table-bordered" style="width:100%">
            <thead class="table-bordered table-dark">
              <tr>
                <th>ID</th>
                <th class="big_col">Bank Accont/Payment Gateway</th>
                <th >Type</th>
                <th >Transaction</th>
                <th class="big_col">Created Date</th>
                <th >Currancy</th>
                <th >Amount</th>
                <th class="big_col">Processing Fee</th>
                <th >Balance</th>
                <th >Remark</th>
                <th class="big_col">Last Modified By</th>

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
</div>

<!--  -->

<!-- Edit Bank -->

<div class="modal fade " id="Add_merchent_bank_transfer" role="dialog">
  <div class="cms_models modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4>Add  Merchent Bank Transfer</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <div class="form-group row">
          <label class="col-sm-4 col-form-label"> Type </label>
          <div class="col-sm-8">
            <select class="form-control">
              <option></option>
              <option>ABU</option>
              <option>SKU</option>
              <option>ABU</option>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-4 col-form-label">Currency</label>
          <div class="col-sm-8">
            <select class="form-control">
              <option></option>
              <option>ABU</option>
              <option>SKU</option>
              <option>ABU</option>

            </select>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-4 col-form-label"> Transfer out Bank </label>
          <div class="col-sm-8">
            <select class="form-control">
              <option></option>
              <option>PKR</option>
              <option>CHEN</option>
              <option>2</option>
            </select>
          </div>




        </div>
        <div class="form-group row">
          <label class="col-sm-4 col-form-label">Transfer out Bank Current Balance</label>
          <div class="col-sm-8">
            <input type="Number" name="" class="form-control">
          </div>
        </div>
        <div class="form-group row pt-2">
          <label class="col-sm-4 col-form-label"> Transfer In  Bank</label>
          <div class="col-sm-8 d-flex align-items-center">
            <select class="form-control">
              <option></option>
              <option>PKR</option>
              <option>CHEN</option>
              <option>2</option>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-4 col-form-label">Transfer In Bank Balance</label>
          <div class="col-sm-8">
            <input class="form-control" type="number" placeholder="">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-4 col-form-label"> Trade Timme </label>
          <div class="col-sm-8">
            <input class="form-control" type="date" placeholder="">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-4 col-form-label"> Amount </label>
          <div class="col-sm-8">
            <input class="form-control" type="text" placeholder="">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-4 col-form-label"> Processing Fee </label>
          <div class="col-sm-8">
            <input class="form-control" type="text" placeholder="" value="0">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-4 col-form-label"> Remarks </label>
          <div class="col-sm-8">
            <input class="form-control" type="text" placeholder="">
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-white" data-dismiss="modal"><i class="fa fa-ban mr-1"></i>Cancel</button>
        <button type="button" class="btn btn-success">Save</button>
      </div>
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