@extends('layout')
@section('title')
Game Provider
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
        <!-- table display start -->
        <div class="row">
          <div class="col-md-12 overflow-auto">
        <table id="" class="table datatables_all table-striped table-bordered cms_table" cellspacing="0" width="100%">
          <thead class="thead-dark">
            <tr class="">
              <th scope="col">Id </th>
              <th scope="col">Provider</th>
              <th scope="col"> Catogery </th>
              <th scope="col">sequance</th>
              <th scope="col">Status</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            <tr class=" ">
              <td scope="row"> SKU12 </td>
               <td> 1 </td>
              <td> Mobile </td>
              <td> null </td>
              <td> Active </td>
              <td>
                <button class="btn btn-primary p-2" data-toggle="modal" data-target="#editaffiliateBanner"><i class="fa fa-edit"></i></button>
                <button class="btn btn-danger p-2"><i class="fa fa-times"></i></button>
              </td>
            </tr>
            <tr class=" ">
              <td scope="col"> SKU12 </td>
              <td> 1 </td>
              <td> Mobile </td>
              <td> null </td>
              <td> Active </td>
              <td>
                <button class="btn btn-primary p-2" data-toggle="modal" data-target="#editaffiliateBanner"><i class="fa fa-edit"></i></button>
                <button class="btn btn-danger p-2"><i class="fa fa-times"></i></button>
              </td>
            </tr>
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















<!-- Banner List Model model -->
  <div class="modal fade " id="AffiliateBannerListModel" role="dialog">
    <div class="cms_models modal-dialog ">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4>Add New Affiliate Banner</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
            <table class="w-100 form-group">
          <tbody>
            <tr class="my-2">
              <td>
                <label>Content Type*</label>
              </td>
              <td colspan="">
                <select class="form-control">
                  <option>Select any Option</option>
                </select>
              </td>
            </tr>
            <tr class="my-2">
              <td>Marchent</td>
              <td colspan="">
                <select class="form-control w-100">
                  <option>Select any Option</option>
                </select>
              </td>
            </tr>

            <tr class="my-2">
              <td> Index </td>
              <td colspan="">
                <input type="text" name="index" class="form-control">
              </td>
            </tr>


            <tr class="my-2">
              <td> Start Time </td>
              <td colspan="">
                <input type="date" name="index" class="form-control">
              </td>
            </tr>

            <tr class="my-2">
              <td> End time </td>
              <td colspan="">
                <input type="date" name="index" class="form-control">
              </td>
            </tr>

            <tr class="my-2">
              <td>Name</td>
              <td colspan="">
                <input type="text" name="merchantname" class="form-control">
              </td>
            </tr>
            <tr class="my-2">
              <td>Description</td>
              <td colspan="">
                <input type="text" name="Description" class="form-control">
              </td>
            </tr>

            <tr class="my-2">
              <td>Language</td>
              <td colspan="">
                <select class="form-control w-100">
                  <option>Select any Option</option>
                </select>
              </td>
            </tr>

            <tr class="my-2">
              <td>Gref</td>
              <td class="">
                <input type="text" name="href" class="form-control">
              </td>
            </tr>

            <tr class="my-2">
              <td>Image</td>
              <td class="form-control">
                <input type="file" name="Image" >
              </td>
            </tr>
            <tr class="my-2">
              <td>Status</td>
              <td class="">
                <input type="checkbox" name="Status" class="mr-2">Active
              </td>
            </tr>

          </tbody>
      </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-white" data-dismiss="modal"><i class="fa fa-ban mr-1"></i>Cancel</button>
          <button type="button" class="btn btn-primary">Save</button>
        </div>
      </div>
    </div>
  </div>
  <!-- Add 43 Banner model end-->


<!-- EDIT BANNER Model model -->
  <div class="modal fade " id="editaffiliateBanner" role="dialog">
    <div class="cms_models modal-dialog ">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4> Edit Affiliate Banner </h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
            <table class="w-100 form-group">
          <tbody>
            <tr class="my-2">
              <td>
                <label>Content Type*</label>
              </td>
              <td colspan="">
                <select class="form-control">
                  <option>Select any Option</option>
                </select>
              </td>
            </tr>
            <tr class="my-2">
              <td>Marchent</td>
              <td colspan="">
                <select class="form-control w-100">
                  <option>Select any Option</option>
                </select>
              </td>
            </tr>

            <tr class="my-2">
              <td> Index </td>
              <td colspan="">
                <input type="text" name="index" class="form-control">
              </td>
            </tr>


            <tr class="my-2">
              <td> Start Time </td>
              <td colspan="">
                <input type="date" name="index" class="form-control">
              </td>
            </tr>

            <tr class="my-2">
              <td> End time </td>
              <td colspan="">
                <input type="date" name="index" class="form-control">
              </td>
            </tr>

            <tr class="my-2">
              <td>Name</td>
              <td colspan="">
                <input type="text" name="merchantname" class="form-control">
              </td>
            </tr>
            <tr class="my-2">
              <td>Description</td>
              <td colspan="">
                <input type="text" name="Description" class="form-control">
              </td>
            </tr>

            <tr class="my-2">
              <td>Language</td>
              <td colspan="">
                <select class="form-control w-100">
                  <option>Select any Option</option>
                </select>
              </td>
            </tr>

            <tr class="my-2">
              <td>Gref</td>
              <td class="">
                <input type="text" name="href" class="form-control">
              </td>
            </tr>

            <tr class="my-2">
              <td>Image</td>
              <td class="form-control">
                <input type="file" name="Image" >
              </td>
            </tr>
            <tr class="my-2">
              <td>Status</td>
              <td class="">
                <input type="checkbox" name="Status" class="mr-2">Active
              </td>
            </tr>

            <tr class="my-2">
              <td>Preview</td>
              <td class="">
                <img src="{{asset('assets/images/cms_logo.png')}}" width="100%" height="220px">
              </td>
            </tr>

          </tbody>
      </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-white " data-dismiss="modal" ><i class="fa fa-ban mr-1"></i>Cancel</button>
          <button type="button" class="btn btn-primary"> Save</button>
        </div>
      </div>
    </div>
  </div>
  <!-- Edit 43 Banner model end-->

@endsection

@section('scripts')
<script>

$(document).ready(function() {
    $('#provider_datatable').dataTable();
    
     $("[data-toggle=tooltip]").tooltip();
    
} );
</script>
@endsection