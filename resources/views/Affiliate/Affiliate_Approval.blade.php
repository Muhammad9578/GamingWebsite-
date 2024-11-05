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
Affiliate Approval
@endsection
@section('content')
<div class="right_col" role="main">
  <div class="container bg-light">
    <div class="row">
      <div class="col-md-12  d-flex justify-content-between align-items-center">
        <div class="page-titlee">
          <h3>@yield('title')</h3>
        </div>
        <div class="button-on-top mr-5">
          <button class="btn btn-success">Affiliate Approval History</button>
        </div>
      </div>
    </div>
    <!-- Title close -->
  </div>
  <section class="bg-white">
  <div class="container p-3 border ">
    <div class="row px-3 pt-2 pb-5 " >
      <div class="col-md-3">
        <div class="form-group row">
          <label for="inputEmail3" class="col-sm-3 col-form-label">Merchant*</label>
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
      </div>

      <div class="col-md-3">
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
      </div>

      <div class="col-md-3">
        <div class="form-group row">
          <label for="inputEmail3" class="col-sm-3 col-form-label">Affiliate Login</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" name="">
          </div>

        </div>
      </div>

      <div class="col-md-3">
        <div class="form-group row">
          <label for="inputEmail3" class="col-sm-3 col-form-label">Affiliate Name</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" name="">
          </div>
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
      <th scope="col">Affiliate Login</th>
      <th scope="col">Name</th>
      <th scope="col">Currency</th>
      <th scope="col">Phone</th>
      <th scope="col">Email</th>
      <th scope="col">Affiliate Group</th>
      <th scope="col">Register Date</th>
      <th scope="col">Register IP</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>testaft</td>
      <td></td>
      <td>tst</td>
      <td>akd</td>
      <td>VND</td>
      <td></td>
      <td></td>
      <td></td>
      <td>2020-11-20 14:20</td>
      <td></td>
      <td><button class="btn btn-warning text-white"><small> success</small></button></td>
      <td class="d-flex"><button class="btn btn-success" data-toggle="modal" data-target="#AA_A"><i class="fa fa-check-circle"></i></button>
<!-- Modal -->
<div class="modal fade" id="AA_A" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Approval Remark For TestAff</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <input type="text" name="" class="form-control">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-light" data-dismiss="modal">Cancle</button>
        <button type="button" class="btn btn-success">Save</button>
      </div>
    </div>
  </div>
</div>
        <button class="btn btn-danger" data-toggle="modal" data-target="#RR_A"><i class="fa fa-times-circle"></i></button>
        <!-- Modal -->
<div class="modal fade" id="RR_A" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Reject Remark For TestAff</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <input type="text" name="" class="form-control">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-light" data-dismiss="modal">Cancle</button>
        <button type="button" class="btn btn-success">Save</button>
      </div>
    </div>
  </div>
</div>
      </td>
    </tr>

    
  </tbody>
</table>
        </div>
      </div>
    </div>

  </div>
  </section>




  @endsection


  @section('scripts')
  <script>
$(document).ready(function() {
            $('.datatables_all').dataTable();            
        } );
  </script>
  @endsection