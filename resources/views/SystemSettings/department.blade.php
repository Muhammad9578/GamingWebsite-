@extends('layout')
@section('title')
Department
@endsection
@section('content')
<div class="right_col" role="main">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="page-title">
          <div class="title_left">
            <h3>@yield('title')</h3>
          </div>
        </div>
      </div>
    </div>
  </div>
<section class="bg-white">
  <div class="container border p-3">
    <div class="row">
      <div class="col-md-12">
        <div id="accordion">
          <!--  -->
<div class="card-body">
        
          <div class="row">
            <div class="col-md-4">
              <div class="row">
                <label class="col-sm-12">Merchent</label>
                <select class="form-control col-sm-12">
                  <option>SELECT OPTION</option>
                </select>
              </div>
            </div>
          </div>
          <hr>
          <div class="row py-2">
            <div class="col-md-12">
              <div class="d-flex justify-content-between p-2  ">
                <div>
                  <button type="reset " class="btn btn-primary py-1"><i class="fa fa-times"></i> Reset</button>
                  <button class="btn btn-success py-1"><i class="
                    fa fa-search"></i> Search</button>
                </div>
                <div>
                  <button type="button" class="btn btn-success  py-1" data-toggle="modal" data-target="#userRolesModel">
                    <i class="fa fa-plus-circle"></i> Add
                  </button>
                </div>
              </div>
            </div>
          </div>
          <hr>
        
        <!-- table display start -->
        <div class="row">
          <div class="col-md-12 overflow-auto">
            <table  class="table datatables_all table-striped table-bordered cms_table" cellspacing="0" width="100%">
          <thead class="thead-dark">
            <tr class="">
              <th scope="col">Mercent </th>
              <th scope="col">Role</th>
              <th scope="col">Level</th>
              <th scope="col">Remarks</th>
              <th scope="col">Status</th>
              <th scope="col">Last modified By</th>
              <th scope="col"> Last modified Date </th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>

          </tbody>
        </table>
      </div>
          <!--  -->
        </div>
      </div>
    </div>
  </div>
</section>
</div>



<!-- User Roles Model model -->
  <div class="modal fade " id="userRolesModel" role="dialog">
    <div class="cms_models modal-dialog ">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4>Create or Edit a User Role</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <div class="row padding_col">
            <div class="col-md-4 d-flex align-items-center justify-content-end">
              <span class="mr-2">Nmae</span>
            </div>
            <div class="col-md-8">
              <input type="text" name="name" class="form-control">
            </div>

            <div class="col-md-4 d-flex justify-content-end align-items-center">
              <span class="mr-2">Merchent</span>
            </div>
            <div class="col-md-8">
              <select class="form-control">
                <option>Select Merchhent Code</option>
              </select>
            </div>

            <div class="col-md-4 d-flex justify-content-end align-items-center">
              <span class="mr-2">Level</span>
            </div>
            <div class="col-md-8">
              <select class="form-control">
                <option>Select Level </option>
              </select>
            </div>

            <div class="col-md-4 d-flex justify-content-end align-items-center">
              <span class="mr-2">Remarks</span>
            </div>
            <div class="col-md-8">
              <input type="text" name="name" class="form-control">
            </div>
            <div class="col-md-4 d-flex justify-content-end align-items-center">
              <span class="mr-2">Status</span>
            </div>
            <div class="col-md-8 d-flex  align-items-center">
              <input type="radio" name="active" class="ml-2 mr-1" > Active
              <input type="radio" name="active" class="ml-2 mr-1"> Inctive
              <input type="radio" name="active" class="ml-2 mr-1" > Suspended
              <input type="radio" name="active" class="ml-2 mr-1" > Deleted
            </div>
            <div class="col-md-12">
              <table class="table b-0 mt-5">
                <thead class="">
                  <tr class="">
                    <th scope="col">
                      <input type="checkbox" name="right"> Section Action Rights
                    </th>
                    <th scope="col">
                      <input type="checkbox" name="right"> View Rights
                    </th>
                    <th scope="col">
                      <input type="checkbox" name="right"> Create Rights
                    </th>
                    <th scope="col">
                      <input type="checkbox" name="right"> Edit Rights
                    </th>
                    <th scope="col">
                      <input type="checkbox" name="right"> Export Rights
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="">
                    <td scope="col">
                      <input type="checkbox" name="right">
                    </td>
                    <td scope="col">
                      <input type="checkbox" name="right">
                    </td>
                    <td scope="col">
                      <input type="checkbox" name="right">
                    </td>
                    <td scope="col">
                      <input type="checkbox" name="right">
                    </td>
                    <td scope="col">
                      <input type="checkbox" name="right">
                    </td>
                  </tr>

                    <tr class="">
                    <td scope="col">
                      <input type="checkbox" name="right">
                    </td>
                    <td scope="col">
                      <input type="checkbox" name="right">
                    </td>
                    <td scope="col">
                      <input type="checkbox" name="right">
                    </td>
                    <td scope="col">
                      <input type="checkbox" name="right">
                    </td>
                    <td scope="col">
                      <input type="checkbox" name="right">
                    </td>
                  </tr>

                  <tr class="">
                    <td scope="col">
                      <input type="checkbox" name="right">
                    </td>
                    <td scope="col">
                      <input type="checkbox" name="right">
                    </td>
                    <td scope="col">
                      <input type="checkbox" name="right">
                    </td>
                    <td scope="col">
                      <input type="checkbox" name="right">
                    </td>
                    <td scope="col">
                      <input type="checkbox" name="right">
                    </td>
                  </tr>


                  <tr class="">
                    <td scope="col">
                      <input type="checkbox" name="right">
                    </td>
                    <td scope="col">
                      <input type="checkbox" name="right">
                    </td>
                    <td scope="col">
                      <input type="checkbox" name="right">
                    </td>
                    <td scope="col">
                      <input type="checkbox" name="right">
                    </td>
                    <td scope="col">
                      <input type="checkbox" name="right">
                    </td>
                  </tr>
                  <tr class="">
                    <td scope="col">
                      <input type="checkbox" name="right">
                    </td>
                    <td scope="col">
                      <input type="checkbox" name="right">
                    </td>
                    <td scope="col">
                      <input type="checkbox" name="right">
                    </td>
                    <td scope="col">
                      <input type="checkbox" name="right">
                    </td>
                    <td scope="col">
                      <input type="checkbox" name="right">
                    </td>
                  </tr>
                  <tr class="">
                    <td scope="col">
                      <input type="checkbox" name="right">
                    </td>
                    <td scope="col">
                      <input type="checkbox" name="right">
                    </td>
                    <td scope="col">
                      <input type="checkbox" name="right">
                    </td>
                    <td scope="col">
                      <input type="checkbox" name="right">
                    </td>
                    <td scope="col">
                      <input type="checkbox" name="right">
                    </td>
                  </tr>
                  <tr class="">
                    <td scope="col">
                      <input type="checkbox" name="right">
                    </td>
                    <td scope="col">
                      <input type="checkbox" name="right">
                    </td>
                    <td scope="col">
                      <input type="checkbox" name="right">
                    </td>
                    <td scope="col">
                      <input type="checkbox" name="right">
                    </td>
                    <td scope="col">
                      <input type="checkbox" name="right">
                    </td>
                  </tr>
                  <tr class="">
                    <td scope="col">
                      <input type="checkbox" name="right">
                    </td>
                    <td scope="col">
                      <input type="checkbox" name="right">
                    </td>
                    <td scope="col">
                      <input type="checkbox" name="right">
                    </td>
                    <td scope="col">
                      <input type="checkbox" name="right">
                    </td>
                    <td scope="col">
                      <input type="checkbox" name="right">
                    </td>
                  </tr>
                  <tr class="">
                    <td scope="col">
                      <input type="checkbox" name="right">
                    </td>
                    <td scope="col">
                      <input type="checkbox" name="right">
                    </td>
                    <td scope="col">
                      <input type="checkbox" name="right">
                    </td>
                    <td scope="col">
                      <input type="checkbox" name="right">
                    </td>
                    <td scope="col">
                      <input type="checkbox" name="right">
                    </td>
                  </tr>
                  <tr class="">
                    <td scope="col">
                      <input type="checkbox" name="right">
                    </td>
                    <td scope="col">
                      <input type="checkbox" name="right">
                    </td>
                    <td scope="col">
                      <input type="checkbox" name="right">
                    </td>
                    <td scope="col">
                      <input type="checkbox" name="right">
                    </td>
                    <td scope="col">
                      <input type="checkbox" name="right">
                    </td>
                  </tr>
                  <tr class="">
                    <td scope="col">
                      <input type="checkbox" name="right">
                    </td>
                    <td scope="col">
                      <input type="checkbox" name="right">
                    </td>
                    <td scope="col">
                      <input type="checkbox" name="right">
                    </td>
                    <td scope="col">
                      <input type="checkbox" name="right">
                    </td>
                    <td scope="col">
                      <input type="checkbox" name="right">
                    </td>
                  </tr>
                  <tr class="">
                    <td scope="col">
                      <input type="checkbox" name="right">
                    </td>
                    <td scope="col">
                      <input type="checkbox" name="right">
                    </td>
                    <td scope="col">
                      <input type="checkbox" name="right">
                    </td>
                    <td scope="col">
                      <input type="checkbox" name="right">
                    </td>
                    <td scope="col">
                      <input type="checkbox" name="right">
                    </td>
                  </tr>
                  <tr class="">
                    <td scope="col">
                      <input type="checkbox" name="right">
                    </td>
                    <td scope="col">
                      <input type="checkbox" name="right">
                    </td>
                    <td scope="col">
                      <input type="checkbox" name="right">
                    </td>
                    <td scope="col">
                      <input type="checkbox" name="right">
                    </td>
                    <td scope="col">
                      <input type="checkbox" name="right">
                    </td>
                  </tr>
                  
                </tbody>
              </table>
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
  <!-- User Roles model end-->
@endsection

@section('scripts')

<script>
$(document).ready(function() {
    $('#department_datatable').dataTable();
    
     $("[data-toggle=tooltip]").tooltip();
    
} );
</script>
@endsection