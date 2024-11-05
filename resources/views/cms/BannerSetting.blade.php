@extends('layout')
@section('title')
Banner Setting
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
		<div class="row">
			<div class="col-md-12">
				
			</div>
		</div>
	</div>
<section class="bg-white">
	<div class="container border p-3">
		<div class="row">
			<div class="col-md-12">			
          <div class="row">
            <div class="col-md-4">
              <div class="d-flex align-items-center">
                <label class="mr-2">Merchent</label>
                <select class="form-control">
                  <option>SELECT OPTION</option>
                </select>
              </div>
            </div>
            <div class="col-md-4">
              <div class=" d-flex align-items-center">
                <label class="mr-2">Status</label>
                <select class="form-control p-2">
                  <option>SELECT OPTION</option>
                </select>
              </div>
            </div>
            <div class="col-md-4 d-flex align-items-center">
              <div class=" d-flex align-items-center">
                <label class="mr-2">ContentType</label>
                <select class="form-control p-2">
                  <option>SELECT OPTION</option>
                </select>
              </div>
            </div>
          </div>
          <hr>
          <div class="row py-2">
            <div class="col-md-12">
              <div class="d-flex justify-content-between p-2 mx-3 ">
                <div>
                  <button type="reset " class="btn btn-primary py-0">Reset</button>
                  <button class="btn btn-success py-0"><i class="
                    fa fa-search"></i> Search</button>
                </div>
                <div>
                  <button type="button" class="btn btn-success  py-0" data-toggle="modal" data-target="#BannerListModel">
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
              <th scope="col">Mercent Code</th>
              <th scope="col">Index</th>
              <th scope="col">Content Type</th>
              <th scope="col">Name</th>
              <th scope="col">Status</th>
              <th scope="col">Preview</th>
              <th scope="col">Start Time</th>
              <th scope="col">End Time</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            <tr class=" ">
              <td scope="row"> SKU12 </td>
               <td> 1 </td>
              <td> Mobile </td>
              <td> Mobile Logo </td>
              <td> Active </td>
              <td>
                <img src="{{asset('assets/images/cms_logo.png')}}" class="preview_image_cms">
              </td>
              <td> End Time </td>
              <td> Active </td>
              <td>
                <button class="btn btn-primary p-2" data-toggle="modal" data-target="#editBanner"><i class="fa fa-edit"></i></button>
                <button class="btn btn-danger p-2"><i class="fa fa-times"></i></button>
              </td>
            </tr>
            <tr class=" ">
              <td scope="row"> SKU12 </td>
              <td> 1 </td>
              <td> Mobile </td>
              <td> Mobile Logo </td>
              <td> Active </td>
              <td>
                <img src="{{asset('assets/images/cms_logo.png')}}" class="preview_image_cms">
              </td>
              <td> Start Time </td>
              <td> End Time </td>
              <td>
                <button class="btn btn-primary p-2" data-toggle="modal" data-target="#editBanner"><i class="fa fa-edit"></i></button>
                <button class="btn btn-danger p-2"><i class="fa fa-times"></i></button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
					<!--  -->
				</div>
			
		
	</div>
</section>
</div>



<!-- Banner List Model model -->
  <div class="modal fade " id="BannerListModel" role="dialog">
    <div class="cms_models modal-dialog ">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
        	<h4>Add New Banner</h4>
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
        	<button type="button" class="btn btn-primary"> Save</button>
        </div>
      </div>
    </div>
  </div>
  <!-- Add 43 Banner model end-->


<!-- EDIT BANNER Model model -->
  <div class="modal fade " id="editBanner" role="dialog">
    <div class="cms_models modal-dialog ">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
        	<h4>Edit Banner</h4>
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
        	<button type="button" class="btn btn-white" data-dismiss="modal"><i class="fa fa-ban mr-1"></i>Cancel</button>
        	<button type="button" class="btn btn-primary"> Save</button>
        </div>
      </div>
    </div>
  </div>
  <!-- Edit 43 Banner model end-->

@endsection

@section('scripts')
<script>
</script>
@endsection