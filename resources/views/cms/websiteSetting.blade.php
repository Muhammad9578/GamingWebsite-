<style type="text/css">
	.preview_image_cms{
		max-width: 120px;
		max-height: 60px;

	}
	.cms_table td{
    vertical-align: unset !important;
    padding: 5px !important;
	}
.cms_models{
	max-width: 800px !important;
}
</style>

@extends('layout')
@section('title')
Website Setting
@endsection
@section('content')
<div class="right_col" role="main">

	<div class="container">
		<!-- title row start-->
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
		<!-- title row end -->

		<!-- main content start here-->
		<section>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<!-- test -->
<div id="accordion">



<!-- Logo List card start -->

  <div class="card">
    <div class="card-header" id="logoList">
      <h5 class="mb-0">
        <button class="btn text-dark btn-link text-decoration-none" data-toggle="collapse" data-target="#Logocollapse" aria-expanded="true" aria-controls="collapseOne">
          <h6>Logo List</h6>
        </button>
      </h5>
    </div>

    <div id="Logocollapse" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">

      <div class="card-body">
      	<form method="...">
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
	      	<div class="row py-2">
	      		<div class="col-md-12">
	      			<div class="d-flex justify-content-between p-2 mx-3 ">
	      				<div>
	      					<button type="reset " class="btn btn-primary py-0">Reset</button>
	      					<button class="btn btn-success py-0"><i class="
	      						fa fa-search"></i> Search</button>
	      				</div>
	      				<div>
	      					<button type="button" class="btn btn-success  py-0" data-toggle="modal" data-target="#logoListModel">
	      						<i class="fa fa-plus-circle"></i> Add
	      					</button>
	      				</div>
	      			</div>
	      		</div>
      		</div>
      	</form>
      	<!-- table display start -->
      	<div class="row">
      		<div class="col-md-12 overflow-auto">
				<table id="" class="table datatables_all table-striped table-bordered cms_table" cellspacing="0" width="100%">
				  <thead class="thead-dark">
				    <tr class="">
				      <th scope="col">Mercent Code</th>
				      <th scope="col">Content Type</th>
				      <th scope="col">Name</th>
				      <th scope="col">Status</th>
				      <th scope="col">Preview</th>
				      <th scope="col">Action</th>
				    </tr>
				  </thead>
				  <tbody>
				    <tr class=" ">
				      <td scope="row"> SKU12 </td>
				      <td> Mobile </td>
				      <td> Mobile Logo </td>
				      <td> Active </td>
				      <td>
				      	<img src="{{asset('assets/images/cms_logo.png')}}" class="preview_image_cms">
				      </td>
				      <td>
				      	<button class="btn btn-primary p-2" data-toggle="modal" data-target="#faviconEditModel"><i class="fa fa-edit"></i></button>
				      	<button class="btn btn-danger p-2"><i class="fa fa-times"></i></button>
				      </td>
				    </tr>
				    <tr class=" ">
				      <td scope="row"> SKU12 </td>
				      <td> Mobile </td>
				      <td> Mobile Logo </td>
				      <td> Active </td>
				      <td>
				      	<img src="{{asset('assets/images/cms_logo.png')}}" class="preview_image_cms">
				      </td>
				      <td>
				      	<button class="btn btn-primary p-2" data-toggle="modal" data-target="#faviconModel"><i class="fa fa-edit"></i></button>
				      	<button class="btn btn-danger p-2"><i class="fa fa-times"></i></button>
				      </td>
				    </tr>
				  </tbody>
				</table>
			</div>
		</div>
      	<!-- table display end -->
      </div>
  </div>
</div>
<!-- card end -->

<!-- card start -->
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn text-dark btn-link text-decoration-none collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          <h6>Favicon</h6>
        </button>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
      <div class="card-body">
        <form method="...">
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
          <div class="row py-2">
            <div class="col-md-12">
              <div class="d-flex justify-content-between p-2 mx-3 ">
                <div>
                  <button type="reset " class="btn btn-primary py-0">Reset</button>
                  <button class="btn btn-success py-0"><i class="
                    fa fa-search"></i> Search</button>
                </div>
                <div>
                	<button type="button" class="btn btn-success  py-0" data-toggle="modal" data-target="#faviconModel"><i class="fa fa-plus-circle"></i> Add </button>
                </div>
              </div>
            </div>
          </div>
        </form>
        <!-- table display start -->
        <div class="row">
          <div class="col-md-12 overflow-auto">
        <table id="" class="table datatables_all table-striped table-bordered cms_table" cellspacing="0" width="100%">
          <thead class="thead-dark">
            <tr class="">
              <th scope="col">Mercent Code</th>
              <th scope="col">Content Type</th>
              <th scope="col">Name</th>
              <th scope="col">Status</th>
              <th scope="col">Preview</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            <tr class=" ">
              <td scope="row"> SKU12 </td>
              <td> Mobile </td>
              <td> Mobile Logo </td>
              <td> Active </td>
              <td>
                <img src="{{asset('assets/images/cms_logo.png')}}" class="preview_image_cms">
              </td>
              <td> Action </td>
            </tr>
            <tr class=" ">
              <td scope="row"> SKU12 </td>
              <td> Mobile </td>
              <td> Mobile Logo </td>
              <td> Active </td>
              <td>
                <img src="{{asset('assets/images/cms_logo.png')}}" class="preview_image_cms">
              </td>
              <td> Action </td>
            </tr>
          </tbody>
        </table>
          </div>
        </div>
        <!-- table display end -->
      </div>
    </div>
  </div>
<!-- card end -->




<!-- video link card start -->
  <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn text-dark btn-link text-decoration-none collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          <h6>Video Link</h6>
        </button>
      </h5>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
      <div class="card-body">
        <form method="...">
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
          <div class="row py-2">
            <div class="col-md-12">
              <div class="d-flex justify-content-between p-2 mx-3 ">
                <div>
                  <button type="reset " class="btn btn-primary py-0">Reset</button>
                  <button class="btn btn-success py-0"><i class="
                    fa fa-search"></i> Search</button>
                </div>
                <div>
                  <button type="button" class="btn btn-success  py-0" data-toggle="modal" data-target="#videoLinkModel"><i class="fa fa-plus-circle"></i> Add </button>
                </div>
              </div>
            </div>
          </div>
        </form>
        <!-- table display start -->
        <div class="row">
          <div class="col-md-12 overflow-auto">
        <table id="" class="table datatables_all table-striped table-bordered cms_table" cellspacing="0" width="100%">
          <thead class="thead-dark">
            <tr class="">
              <th scope="col">Mercent Code</th>
              <th scope="col">Content Type</th>
              <th scope="col">Name</th>
              <th scope="col">Status</th>
              <th scope="col">Preview</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            <tr class=" ">
              <td scope="row"> SKU12 </td>
              <td> Mobile </td>
              <td> Mobile Logo </td>
              <td> Active </td>
              <td>
                <img src="{{asset('assets/images/cms_logo.png')}}" class="preview_image_cms">
              </td>
              <td> Action </td>
            </tr>
            <tr class=" ">
              <td scope="row"> SKU12 </td>
              <td> Mobile </td>
              <td> Mobile Logo </td>
              <td> Active </td>
              <td>
                <img src="{{asset('assets/images/cms_logo.png')}}" class="preview_image_cms">
              </td>
              <td> Action </td>
            </tr>
          </tbody>
        </table>
          </div>
        </div>
        <!-- table display end -->
      </div>
    </div>
  </div>
<!-- video linkcard end-->

<!-- card start -->
  <div class="card">
    <div class="card-header" id="headingFour">
      <h5 class="mb-0">
        <button class="btn text-dark btn-link text-decoration-none collapsed" data-toggle="collapse" data-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
          <h6>Mobile Bookmark Icon</h6>
        </button>
      </h5>
    </div>
    <div id="collapsefour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
      <div class="card-body">
        <form method="...">
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
          <div class="row py-2">
            <div class="col-md-12">
              <div class="d-flex justify-content-between p-2 mx-3 ">
                <div>
                  <button type="reset " class="btn btn-primary py-0">Reset</button>
                  <button class="btn btn-success py-0"><i class="
                    fa fa-search"></i> Search</button>
                </div>
                <div>
                  <button type="button" class="btn btn-success  py-0" data-toggle="modal" data-target="#BookmarkiconModel"><i class="fa fa-plus-circle"></i> Add </button>
                </div>
              </div>
            </div>
          </div>
        </form>
        <!-- table display start -->
        <div class="row">
          <div class="col-md-12 overflow-auto">
        <table id="" class="table datatables_all table-striped table-bordered cms_table" cellspacing="0" width="100%">
          <thead class="thead-dark">
            <tr class="">
              <th scope="col">Mercent Code</th>
              <th scope="col">Content Type</th>
              <th scope="col">Name</th>
              <th scope="col">Status</th>
              <th scope="col">Preview</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            <tr class=" ">
              <td scope="row"> SKU12 </td>
              <td> Mobile </td>
              <td> Mobile Logo </td>
              <td> Active </td>
              <td>
                <img src="{{asset('assets/images/cms_logo.png')}}" class="preview_image_cms">
              </td>
              <td> Action </td>
            </tr>
            <tr class=" ">
              <td scope="row"> SKU12 </td>
              <td> Mobile </td>
              <td> Mobile Logo </td>
              <td> Active </td>
              <td>
                <img src="{{asset('assets/images/cms_logo.png')}}" class="preview_image_cms">
              </td>
              <td> Action </td>
            </tr>
          </tbody>
        </table>
          </div>
        </div>
        <!-- table display end -->
      </div>
    </div>
  </div>
<!-- card end-->
</div>
					</div>
				</div>
			</div>
		</section>
		<!-- main content end here -->
	</div>
	<!-- model for add icons -->


</div>
<!-- logo model -->
  <div class="modal fade " id="logoListModel" role="dialog">
    <div class="cms_models modal-dialog ">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
        	<h4>Add New Logo</h4>
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
			        <td>Image</td>
			        <td class="form-control">
			        	<input type="file" name="Image" >
			        </td>
			      </tr>
			      <tr class="my-2">
			        <td>Status</td>
			        <td class="form-control">
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
  <!-- logo model end-->

<!-- favicon model -->
  <div class="modal fade " id="faviconModel" role="dialog">
    <div class="cms_models modal-dialog ">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
        	<h4>Add New Favicon</h4>
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
			        <td>Image</td>
			        <td class="form-control">
			        	<input type="file" name="Image" >
			        </td>
			      </tr>
			      <tr class="my-2">
			        <td>Status</td>
			        <td class="form-control">
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
<!-- favicon model end -->

<!-- video link model -->
  <div class="modal fade " id="videoLinkModel" role="dialog">
    <div class="cms_models modal-dialog ">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
        	<h4>Add New Video Link</h4>
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
			        <td>Image</td>
			        <td class="form-control">
			        	<input type="file" name="Image" >
			        </td>
			      </tr>
			      <tr class="my-2">
			        <td>Status</td>
			        <td class="form-control">
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
<!-- video link model end -->

<!-- mobile bookmark icon -->
  <div class="modal fade " id="BookmarkiconModel" role="dialog">
    <div class="cms_models modal-dialog ">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
        	<h4>Add New mobile bookmark icon</h4>
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
			        <td>Image</td>
			        <td class="form-control">
			        	<input type="file" name="Image" >
			        </td>
			      </tr>
			      <tr class="my-2">
			        <td>Status</td>
			        <td class="form-control">
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
<!-- Bookmark icon model end -->
@endsection

@section('scripts')
<script>
</script>
@endsection



