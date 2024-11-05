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
</style>
@extends('layout')
@section('title')
Advertisement
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
				<div class="col-lg-3 col-md-4">
					<div class=" row">
									<label  class="col-sm-12 ">Merchant</label>
									<div class="col-sm-12">
										<select class="form-control">
											<option></option>
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
									<label  class="col-sm-12 ">Language</label>
									<div class="col-sm-12">

										<select class="form-control" >
											<option></option>
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
								<label  class="col-sm-12 ">Add Type</label>
								<div class="col-sm-12">
									<select class="form-control" >
										<option></option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
										<option>5</option>
									</select>
								</div>

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
				<div class="col-lg-3 col-md-4">
					<div class="row">
								<label  class="col-sm-12 ">Add No</label>
								<div class="col-sm-12">
									<input type="text" class="form-control" name="">
								</div>

							</div>
				</div>
				<div class="col-lg-3 col-md-4">
					<div class="row">
								<label  class="col-sm-12 ">Add Title</label>
								<div class="col-sm-12">
									<input type="text" class="form-control" name="">
								</div>

							</div>
				</div>
			</div>



				
			

			<hr>

			<div class="row">
				<div class="col-md-12 d-flex justify-content-around">
					<div class="buttonsss">
						<button type="button" class="btn btn-primary"><i class="fa fa-times"></i> Clear</button>
					</div>
					<div class="buttonsss2">
						<button class="btn btn-success" data-toggle="modal" data-target="#add-advertisement"><i class="fa fa-plus-circle pr-2"></i> Add</button>

						<!-- Modal -->
						<div class="modal fade" id="add-advertisement" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
							<div class="modal-dialog model-dialoge-style" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="exampleModalLabel">Create and Edit advertisement</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-body">
										<div class="row">
											<div class="col-md-8 m-auto">
												<form>

													<div class="form-group row">
														<label class="col-sm-4 col-form-label">Merchant*</label>
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
														<label class="col-sm-4 col-form-label">Ad Type*</label>
														<div class="col-sm-8">
															<select class="form-control" >
																<option></option>
																<option>2</option>
																<option>3</option>
																<option>4</option>
																<option>5</option>
															</select>
														</div>
													</div>
													<div class="form-group row">
														<label class="col-sm-4 col-form-label">Ad Title</label>
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
														<label class="col-sm-4 col-form-label">Language*</label>
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
														<label class="col-sm-4 col-form-label">Link</label>
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
					</div>
				</div>
			</div>

			<hr>

			<div class="row">

				<div class="col-md-12 ">
					<div class="overflow-auto">
						<table class="table datatables_all border">
							<thead>
								<tr class="bg-dark text-white">
									<th scope="col">Merchant</th>
									<th scope="col">Ad Type</th>
									<th scope="col">Ad no</th>
									<th scope="col">Ad Title</th>
									<th scope="col">Language</th>
									<th scope="col">Image File</th>
									<th scope="col">Hits</th>
									<th scope="col">Registers</th>
									<th scope="col">First Deposit Count</th>
									<th scope="col">First Deposit Amount</th>
									<th scope="col">Deposit Count</th>
									<th scope="col">Deposit Amount</th>
									<th scope="col">Link</th>
									<th scope="col">Created by</th>
									<th scope="col">Created date</th>
									<th scope="col">Last Modified By</th>
									<th scope="col">Last Modified Date</th>
									<th scope="col">Status</th>
									<th scope="col">Action</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th scope="row">akq</th>
									<td>image</td>
									<td>1149</td>
									<td>test and title</td>
									<td>EN-VN</td>
									<td><img src="" alt="img"></td>
									<td>0</td>
									<td>0</td>
									<td>0</td>
									<td>0.00</td>
									<td>0</td>
									<td>0.00</td>
									<td><a href="#">something link</a></td>
									<td>admin6</td>
									<td>11:12:2020 14:47</td>
									<td>admin5</td>
									<td>11:12:2020 14:47</td>
									<td><button class="btn btn-success"><small class="text-white"> Active</small></button></td>
									<td>
										<button class="btn btn-info" data-toggle="modal" data-target="#edit-adver">
											<i class="fa fa-clipboard"></i></button>

											<!-- Modal -->
											<div class="modal fade" id="edit-adver" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
												<div class="modal-dialog model-dialoge-style" role="document">
													<div class="modal-content">
														<div class="modal-header">
															<h5 class="modal-title" id="exampleModalLabel">Create or edit an Advertisement</h5>
															<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																<span aria-hidden="true">&times;</span>
															</button>
														</div>
														<div class="modal-body">
															<div class="row">
																<div class="col-md-8 m-auto">
																	<form>
																		<div class="form-group row">
																			<label class="col-sm-4 col-form-label">Ad No*</label>
																			<div class="col-sm-8">
																				<input type="" class="form-control">
																			</div>
																		</div>
																		<div class="form-group row">
																			<label class="col-sm-4 col-form-label">Merchant*</label>
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
																			<label class="col-sm-4 col-form-label">Ad Type*</label>
																			<div class="col-sm-8">
																				<select class="form-control" >
																					<option></option>
																					<option>2</option>
																					<option>3</option>
																					<option>4</option>
																					<option>5</option>
																				</select>
																			</div>
																		</div>
																		<div class="form-group row">
																			<label class="col-sm-4 col-form-label">Ad Title</label>
																			<div class="col-sm-8">
																				<input type="" class="form-control">
																			</div>
																		</div>
																		<div class="form-group row">
																			<label class="col-sm-4 col-form-label">Language*</label>
																			<div class="col-sm-8">
																				<select class="form-control">
																					<option></option>
																					<option>2</option>
																					<option>3</option>
																					<option>4</option>
																					<option>5</option>
																				</select>
																			</div>
																		</div>

																		<div class="form-group row">
																			<label  class="col-sm-4 col-form-label">Upload Image</label>
																			<div class="col-sm-8">
																				<input type="file" class="form-control-file" >
																			</div>
																		</div>

																		<div class="form-group row">
																			<label class="col-sm-4 col-form-label">Image Type*</label>
																			<div class="col-sm-8">
																				<select class="form-control" id="exampleFormControlSelect1">
																					<option>Jpg</option>
																					<option>2</option>
																					<option>3</option>
																					<option>4</option>
																					<option>5</option>
																				</select>
																			</div>
																		</div> 
																		<div class="form-group row">
																			<label class="col-sm-4 col-form-label">Image Width</label>
																			<div class="col-sm-8">
																				<input type="text" class="form-control" placeholder="20px">
																			</div>
																		</div>
																		<div class="form-group row">
																			<label class="col-sm-4 col-form-label">Image Height</label>
																			<div class="col-sm-8">
																				<input type="text" class="form-control" placeholder="20px">
																			</div>
																		</div>
																		<div class="form-group row">
																			<label class="col-sm-4 col-form-label">Link</label>
																			<div class="col-sm-8">
																				<input type="text" class="form-control" placeholder="@something.com">
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
																	</form>
																</div>
															</div>
														</div>
														<div class="modal-footer">
															<button type="button" class="btn btn-light" data-dismiss="modal">Cancle</button>
															<button type="button" class="btn btn-success">Save </button>
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
	</div>





	@endsection


	@section('scripts')
	<script>
		$(document).ready(function() {
			$('.datatables_all').dataTable();            
		} );
	</script>
	@endsection