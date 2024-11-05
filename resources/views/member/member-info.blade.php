<style type="text/css">
	



</style>


@extends('layout')
@section('title')
Member list
@endsection
@section('content')
<div class="right_col" role="main">
<!-- title -->
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
  </div>
<!-- title -->
	<section>
		<div class="container">
			<div class="row bg-white py-3">
				<!--  -->
				<div class="col-md-3">
					<div class="form-group row">
						<label class="col-sm-4 col-form-label">Merchant*</label>
						<div class="col-sm-8">
							<select class="form-control">
								<option>UA9</option>
								<option>One</option>
								<option>Two</option>
								<option>Three</option>
							</select>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group row">
						<label class="col-sm-4 col-form-label">Login</label>
						<div class="col-sm-8">
							<input class="form-control" type="" placeholder="">
						</div>
					</div>
				</div>

				<div class="col-md-3">
					<div class="form-group row">
						<label class="col-sm-4 col-form-label">Play Id</label>
						<div class="col-sm-8">
							<input class="form-control" type="" placeholder="">
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group row">
						<label class="col-sm-4 col-form-label">Name</label>
						<div class="col-sm-8">
							<input class="form-control" type="" placeholder="">
						</div>
					</div>
				</div>

				<!-- -->
				<div class="col-md-3">
					<div class="form-group row">
						<label class="col-sm-4 col-form-label">Bank Acc No.</label>
						<div class="col-sm-8">
							<input class="form-control" type="" placeholder="">
						</div>
					</div>
				</div>

				<div class="col-md-3">
					<div class="form-group row">
						<label class="col-sm-4 col-form-label">ID</label>
						<div class="col-sm-8">
							<input class="form-control" type="" placeholder="">
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group row">
						
					</div>
				</div>

				<div class="col-md-3">
					<div class="form-group row">
						
					</div>
				</div>

				<!-- -->

					<div class="col-md-3">
					<div class="form-group row">
						<label class="col-sm-4 col-form-label">Currency</label>
						<div class="col-sm-8">
							<select class="form-control">
								<option>All</option>
								<option>One</option>
								<option>Two</option>
								<option>Three</option>
							</select>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group row">
						<label class="col-sm-4 col-form-label">Status</label>
						<div class="col-sm-8">
							<select class="form-control">
								<option>All</option>
								<option>One</option>
								<option>Two</option>
								<option>Three</option>
							</select>
						</div>
					</div>
				</div>

				<div class="col-md-3">
					<div class="form-group row">
						<label class="col-sm-4 col-form-label">Group</label>
						<div class="col-sm-8">
							<select class="form-control">
								<option>All</option>
								<option>One</option>
								<option>Two</option>
								<option>Three</option>
							</select>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group row">
						<label class="col-sm-4 col-form-label">Affiliat</label>
						<div class="col-sm-8">
							<input class="form-control" type="" placeholder="">
						</div>
					</div>
				</div>

				<!-- -->
				<div class="col-md-3">
					<div class="form-group row">
						<label class="col-sm-4 col-form-label">Contact</label>
						<div class="col-sm-8">
							<input class="form-control" type="" placeholder="">
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group row">
						<label class="col-sm-4 col-form-label">Referral Source</label>
						<div class="col-sm-8">
							<select class="form-control">
								<option>All</option>
								<option>One</option>
								<option>Two</option>
								<option>Three</option>
							</select>
						</div>
					</div>
				</div>

				<div class="col-md-3">
					<div class="form-group row">
						<label class="col-sm-4 col-form-label">Register After</label>
						<div class="col-sm-8">
							<input class="form-control" type="" placeholder="">
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group row">
						<label class="col-sm-4 col-form-label">KYC Status</label>
						<div class="col-sm-8">
							<select class="form-control">
								<option>All</option>
								<option>One</option>
								<option>Two</option>
								<option>Three</option>
							</select>
						</div>
					</div>
				</div>
			</div>
			<!-- -->
			<div class="row bg-white">
				<div class="col-md-12 col-sm-12">
					<div class="x_Panel">
						<div class="x_title">
							<div class="row">
								<div class="col-sm-3">
									<div class="form-group mb-2">
										<button type="reset" class="btn btn-primary" style="border-radius: 3px">
											<i class="fa fa-times mr-2" aria-hidden="true"></i>cancel
										</button>
										<button type="reset" class="btn btn-success" style="border-radius: 3px">
											<i class="fa fa-search mr-2" aria-hidden="true"></i>Search
										</button>
									</div>
								</div>
								<div class="col-sm-4"></div>
								<div class="col-sm-4">
									<div class="form-group mb-2">
										<button type="reset" class="btn btn-success py-1" data-toggle="modal" data-target="#betlimitSetting">
											<i class="fa fa-plus-circle  mr-2" aria-hidden="true"></i>Add
										</button>
										<button type="reset" class="btn btn-info" style="border-radius: 3px">
											<i class="fa fa-file-word-o mr-2" aria-hidden="true"></i>Export
										</button>
										<button type="reset" class="btn btn-warning" style="border-radius: 3px">
											<i class="fa fa-arrow-circle-down mr-2" aria-hidden="true"></i>Download
										</button>
									</div>
								</div>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>

                            <div class="x_content">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="card-box table-responsive">
                                           
                                            <table id="datatable" class="datatables_all table-striped table-bordered" style="width:100%">
                                                <thead class="table-bordered table-dark">
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Merchant</th>
                                                        <th>Login</th>
                                                        <th>KYC Status</th>
                                                        <th>Affiliat</th>
                                                        <th>Name</th>
                                                        <th>Currency</th>
                                                        <th>Group</th>
                                                        <th>Status</th>
                                                        <th>Error Count</th>
                                                        <th>Register Info</th>
                                                        <th>Referral source</th>
                                                        <th>Last Login</th>
                                                        <th>Action</th>
                                                        <th>Reset Password</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>3675603</td>
                                                        <td>akq</td>
                                                        <td><button type="button" class="btn btn-primary">difllah</button></td>
                                                        <td>No</td>
                                                        <td></td>
                                                        <td>sity diffillah</td>
                                                        <td>SGD</td>
                                                        <td>Normal</td>
                                                        <td><button type="button" class="btn btn-success">Active</button></td>
                                                        <td>0</td>
                                                        <td></td>
                                                        <td>Mobile</td>
                                                        <td></td>
                                                        <td class="d-flex align-items-center"><div class="d-flex">
                                                         <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editMember"><i class="fa fa-pencil-square-o "></i></button><button type="button" class="btn btn-info" data-toggle="modal" data-target="#editWithdrawal"><i class="fa fa-trash-o "></i></button>
                                                         </div>
                                                     </td>
                                                        <td><button type="button" class="btn btn-warning"  data-toggle="modal" data-target="#resetPassword"><i class="fa fa-lock "></i></button>

                                                        </td></td>
                                                    </tr>                                             
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

<!-- model -->

<div class="modal fade " id="betlimitSetting" role="dialog">
<div class="modal-dialog cms_models">
<div class="modal-content">
<div class="modal-header">
<h4>Registration</h4>
<button type="button" class="close" data-dismiss="modal">&times;</button>
</div>
<div class="modal-body"> 
	<div class="container">
		<form class="form-label-left input_mask" style="margin:0 70px 0 70px ">
			<div class="form-group row">
				<label class="control-label col-md-3 col-sm-3">Email</label>
					<div class="col-md-9 col-sm-9">
						<input type="text" class ="form-control" placeholder="Email">
					</div>
			</div>

			<div class="form-group row">
				<label class="control-label col-md-3 col-sm-3">Contact Number</label>
					<div class="col-md-9 col-sm-9">
						<input type="string" class ="form-control" placeholder="Mobile Number">
					</div>
			</div>

			<div class="form-group row">
				<label class="control-label col-md-3 col-sm-3">Currency</label>
					<div class="col-md-9 col-sm-9">
						<select class="form-control">
							<option>THB</option>
							<option>One</option>
							<option>Two</option>
							<option>Three</option>
							<option>Four</option>
						</select>
					</div>
			</div>

			<div class="form-group row">
				<label class="control-label col-md-3 col-sm-3">Full Name</label>
					<div class="col-md-9 col-sm-9">
						<input type="text" class ="form-control" placeholder="Full Name">
					</div>
			</div>

			<div class="form-group row">
				<label class="control-label col-md-3 col-sm-3">Date of Birth</label>
					<div class="col-md-9 col-sm-9">
						<input type="Date" class ="form-control" placeholder="Date of Birth">
					</div>
			</div>
			<div class="form-group row">
				<label class="control-label col-md-3 col-sm-3">User Name</label>
					<div class="col-md-9 col-sm-9">
						<input type="text" class ="form-control" placeholder="User Name">
					</div>
			</div>
			<div class="form-group row">
				<label class="control-label col-md-3 col-sm-3">New Password</label>
					<div class="col-md-9 col-sm-9">
						<input type="string" class ="form-control" placeholder="New Password">
					</div>
			</div>
			<div class="form-group row">
				<label class="control-label col-md-3 col-sm-3">Confirm Password</label>
					<div class="col-md-9 col-sm-9">
						<input type="string" class ="form-control" placeholder="Confirm Password">
					</div>
			</div>
			<div class="form-group row">
				<label class="control-label col-md-3 col-sm-3">Bank</label>
					<div class="col-md-9 col-sm-9">
						<select class="form-control">
							<option>Select a Bank</option>
							<option>One</option>
							<option>Two</option>
							<option>Three</option>
							<option>Four</option>
						</select>
					</div>
			</div>
			<div class="form-group row">
				<label class="control-label col-md-3 col-sm-3">Account Name</label>
					<div class="col-md-9 col-sm-9">
						<input type="string" class ="form-control">
					</div>
			</div>
			<div class="form-group row">
				<label class="control-label col-md-3 col-sm-3">Account Name</label>
					<div class="col-md-9 col-sm-9">
						<input type="string" class ="form-control">
					</div>
			</div>
		</form>
	</div>

</div>
<div class="modal-footer">
<button type="button" class="btn btn-white" data-dismiss="modal"><i class="fa fa-ban mr-1"></i>Cancel</button>
<button type="button" class="btn btn-success">Save</button>
</div>
</div>
</div>
</div>

<!-- EDIT User Model -->
<div class="modal fade " id="editMember" role="dialog">
<div class="cms_models modal-dialog ">
<!-- Modal content-->
	<div class="modal-content">
		<div class="modal-header">
			<h4>Edit Member</h4>
			<button type="button" class="close" data-dismiss="modal">&times;</button>
		</div>
		<div class="modal-body complain_models">
		<div class="row">
		<div class="col-md-4">
		<div class="form-group row">
		<div class="col-12 d-flex justify-content-around">
		<div class="" >
		<img src="{{asset('assets/images/profile.png')}}" class="rounded-circle profile_image_size">
		</div>
		</div>
		</div>
		<div class="form-group row">
		<div class="col-md-12 d-flex justify-content-around">
		<label class="btn btn-primary"><i class="fa fa-upload"></i> Upload Profile
		<input type="file" name="profile_image" class="d-none">
		</label>
		</div>
		</div>
		<div class="form-group row">
		<label class="col-sm-5 col-form-label">Login*</label>
		<div class="col-sm-7">
		<input class="form-control" type="text" value="relatedcontent">
		</div>
		</div>
		<div class="form-group row">
		<label class="col-sm-5 col-form-label">Currancy*</label>
		<div class="col-sm-7">
		<input class="form-control" type="text" value="USD $">
		</div>
		</div>

		<div class="form-group row">
		<label class="col-sm-5 col-form-label">Created Date*</label>
		<div class="col-sm-7">
		<input class="form-control" type="text" value="relatedcontent">
		</div>
		</div>

		<div class="form-group row">
		<label class="col-sm-5 col-form-label">Last Login Date*</label>
		<div class="col-sm-7">
		<input class="form-control" type="text" value="relatedcontent">
		</div>
		</div>
		<div class="form-group row">
		<label class="col-sm-5 col-form-label">Last Login IP*</label>
		<div class="col-sm-7">
		<input class="form-control" type="text" value="relatedcontent">
		</div>
		</div>
		<div class="form-group row">
		<label class="col-sm-5 col-form-label">Last Login Location*</label>
		<div class="col-sm-7">
		<input class="form-control" type="text" value="relatedcontent">
		</div>
		</div>
		<div class="form-group row">
		<label class="col-sm-5 col-form-label">Merchant Code</label>
		<div class="col-sm-7">
		<input class="form-control" type="text" value="relatedcontent">
		</div>
		</div>
		<div class="form-group row">
		<label class="col-sm-5 col-form-label">date of Birth*</label>
		<div class="col-sm-7">
		<input class="form-control" type="text" value="relatedcontent">
		</div>
		</div>

		<div class="form-group row">
		<label class="col-sm-5 col-form-label">KYC Varified Status</label>
		<div class="col-sm-7">
		<select class="form-control">
		<option>Yes</option>
		<option>No</option>
		</select>
		</div>
		</div>
		<div class="form-group row">
		<label class="col-sm-5 col-form-label">Referral Source</label>
		<div class="col-sm-7">
		<input class="form-control" type="text" value="Mobile">
		</div>
		</div>
		</div>
		<div class="col-md-4">
		

		<div class="form-group row">
		<label class="col-sm-5 col-form-label">Name*</label>
		<div class="col-sm-7">
		<input class="form-control" type="text" value="Siti fadiha">
		</div>
		</div>

		<div class="form-group row">
		<label class="col-sm-5 col-form-label">Gender*</label>
		<div class="col-sm-7">
		<select class="form-control">
		<option>Male</option>
		<option>Female</option>
		<option>Other</option>
		</select>
		</div>
		</div>

		

		<div class="form-group row">
		<label class="col-sm-5 col-form-label">Afillite*</label>
		<div class="col-sm-7">
		<input class="form-control" type="text" value="relatedcontent">
		</div>
		</div>
		<div class="form-group row">
		<label class="col-sm-5 col-form-label">Status*</label>
		<div class="col-sm-7">
		<select class="form-control">
		<option>Active</option>
		<option>Inactive</option>
		</select>
		</div>
		</div>
		
		<div class="form-group row">
		<label class="col-sm-5 col-form-label">RISK*</label>
		<div class="col-sm-7">
		<input class="" type="checkbox" value="relatedcontent">
		</div>
		</div>
		<div class="form-group row">
		<label class="col-sm-5 col-form-label">Preferred Vallet*</label>
		<div class="col-sm-7">
		<select class="form-control">
		<option>Main Vallet</option>
		<option>1</option>
		</select>
		</div>
		</div>
		<div class="form-group row">
		<label class="col-sm-5 col-form-label">Member Group*</label>
		<div class="col-sm-7">
		<select class="form-control">
		<option>Normal</option>
		<option>Low</option>
		<option>Highh</option>
		</select>
		</div>
		</div>
		<div class="form-group row">
		<label class="col-sm-5 col-form-label">Remark*</label>
		<div class="col-sm-7">
		<input class="form-control" type="text" value="relatedcontent">
		</div>
		</div>
		<div class="form-group row">
		<label class="col-sm-5 col-form-label">Domain Remark*</label>
		<div class="col-sm-7">
		<input class="form-control" type="text" value="relatedcontent">
		</div>
		</div>

		<div class="form-group row">
		<label class="col-sm-5 col-form-label">error Count*</label>
		<div class="col-sm-7">
		<input class="form-control" type="text" value="0">
		</div>
		</div>
		<div class="form-group row">
		<label class="col-sm-5 col-form-label">Phone*</label>
		<div class="col-sm-7">
		<input class="form-control" type="text" value="relatedcontent">
		</div>
		</div>

		<div class="form-group row">
		<label class="col-sm-5 col-form-label">Email</label>
		<div class="col-sm-7">
		<input class="form-control" type="text" value="relatedcontent">
		</div>
		</div>
		<div class="form-group row">
		<label class="col-sm-5 col-form-label">Unsubscribe SMS</label>
		<div class="col-sm-7">
		<input class="" type="checkbox" value="relatedcontent">
		</div>
		</div>
		</div>
		<div class="col-md-4 ">
			<div class="overflow-auto">

		<table class="table table-striped datatables_all">
		<thead class="thead-dark">
		<th>Wallet</th>
		<th>Balance</th>
		<th>Last Modified Date</th>
		</thead>
		<tbody>
		<td>Main</td>
		<td>0.00</td>
		<td>22/2/2021 14:22:30</td>
		</tbody>
		</table>
		</div>

		</div>
		</div>
		</div>
		<div class="modal-footer">
		<button type="button" class="btn btn-white" data-dismiss="modal"><i class="fa fa-ban mr-1"></i>Cancel</button>
		<button type="button" class="btn btn-success"> Save</button>
		</div>
	</div>
</div>
</div>
<!-- Edit User model end-->
  
  <!-- Edit withdraw bank start-->
   <div class="modal fade " id="editWithdrawal" role="dialog">
    <div class="modal-dialog cms_models">
      <div class="modal-content">
        <div class="modal-header">
          <h4>Withdrawal Bank</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
        	                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box table-responsive">

                            <table id="datatable" class="table table-striped datatables_all table-bordered" style="width:100%">
                                <thead class="table-bordered table-dark">
                                    <tr>
                                        
                                        <th>Code</th>
                                        <th>Name</th>
                                        <th>Branch</th>
                                        <th>Account Number</th>
                                        <th>Account Name</th>
                                        <th>Status</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>

                            </table>
                        </div>
                    </div>
                </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-white" data-dismiss="modal"><i class="fa fa-times mr-1"></i>Close</button>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="modal fade " id="resetPassword" role="dialog">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<h4>Reset Password</h4>
<button type="button" class="close" data-dismiss="modal">&times;</button>
</div>
<div class="modal-body">
	<form class="form-label-left input_mask">
			<div class="form-group row">
					<div class="col-md-12 col-sm-12">
						<input type="string" class ="form-control">
					</div>
			</div>
	</form>		

</div>
<div class="modal-footer">
<button type="button" class="btn btn-white" data-dismiss="modal"><i class="fa fa-ban mr-1"></i>Cancel</button>
<button type="button" class="btn btn-success"><i class="fa fa-check mr-1"></i> Confirm</button>
</div>
</div>
</div>
</div>
</div>


</div>



@endsection


@section('scripts')
<script>

</script>
@endsection