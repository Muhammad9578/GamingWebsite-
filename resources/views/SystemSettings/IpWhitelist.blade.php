<style >
.fonts-for-btn button{
font-size: 10px;

}
.table th,.table td{
vertical-align: unset!important;
}
.model-dialoge-style{
max-width: 820px!important;
}
</style>
@extends('layout')
@section('title')
IpWhitelist
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
								<select class="form-control" >
									<option></option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
								</select>
							</div>

						</div>
					</form>
				</div><!-- //close inner first -->
				<div class="col-md-6"> <!-- inner Second -->
					<form>
						<div class="form-group row">
							<label for="inputEmail3" class="col-sm-3 col-form-label">Status</label>
							<div class="col-sm-9">
								<select class="form-control" >
									<option></option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
								</select>
							</div>

						</div>
					</form>
				</div><!-- //close inner Second -->
			</div>
		</div>
		<hr>
	</div>
	<hr>

	<div class="row">
		<div class="col-md-12 d-flex justify-content-end">
			<div class="buttonsss2">
				<button class="btn btn-success" data-toggle="modal" data-target="#add-ipWhitelist"><i class="fa fa-plus-circle pr-2"></i> Add</button>

				<!-- Modal -->
				<div class="modal fade" id="add-ipWhitelist" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog model-dialoge-style" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">Add Ip Whitelist</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<div class="row">
									<div class="col-md-8 m-auto">
										<form>
												<div class="form-group row">
												<label class="col-sm-4 col-form-label">IPv4*</label>
												<div class="col-sm-8">
													<input type="text" class="form-control">
												</div>
											</div>
											<div class="form-group row">
												<label class="col-sm-4 col-form-label">Status*</label>
												<div class="col-sm-8">
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
												<label class="col-sm-4 col-form-label">Remarks*</label>
												<div class="col-sm-8">
													<input type="text" class="form-control">
												</div>
											</div> 
										</form>
									</div>
								</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-light" data-dismiss="modal"><i class="fa fa-ban"></i> Cancle</button>
								<button type="button" class="btn btn-success">Save</button>


							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<hr>

	<div class="row">
		<div class="col-md-12">
			<div class="overflow-auto">
				<table class="table  datatables_all border">
  <thead>
    <tr class="bg-dark text-white">
      <th scope="col">IP</th>
      <th scope="col">Remarks</th>
      <th scope="col">Status</th>
      <th scope="col">Last Modified By</th>
      <th scope="col">Last Modified Date</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">192.168.0.0</th>
      <td></td>
      <td>Active</td>
      <td>admin123</td>
      <td>12/12/20 41:50</td>
      <td><button class="btn btn-primary "data-toggle="modal" data-target="#editwhitelist" ><i class="fa fa-clipboard"></i></button>
      	<!-- Modal -->
				<div class="modal fade" id="editwhitelist" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog model-dialoge-style" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">Edit Ip Whitelist</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<div class="row">
									<div class="col-md-8 m-auto">
										<form>
												<div class="form-group row">
												<label class="col-sm-4 col-form-label">IPv4*</label>
												<div class="col-sm-8">
													<input type="text" class="form-control">
												</div>
											</div>
											<div class="form-group row">
												<label class="col-sm-4 col-form-label">Status*</label>
												<div class="col-sm-8">
													<select class="form-control" id="exampleFormControlSelect1">
														<option>Active</option>
														<option>2</option>
														<option>3</option>
														<option>4</option>
														<option>5</option>
													</select>
												</div>
											</div> 
											<div class="form-group row">
												<label class="col-sm-4 col-form-label">Remarks*</label>
												<div class="col-sm-8">
													<input type="text" class="form-control">
												</div>
											</div> 
										</form>
									</div>
								</div>
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