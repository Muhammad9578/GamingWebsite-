@extends('layout')
@section('title')
Batch Member Update
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
  				<div>
  					<p>To Update List of memners Status and Remarks from CSV file</p>
  					<p>Valid Status</p>
  					<ul>
  						<li>P(Pending)</li>
  						<li>A (active)</li>
  						<li>I (Inactive)</li>
  						<li>S(Suspended)</li>
  						<li>L (Locked)</li>
  						<li>D  (Deleted)</li>
  					</ul>
  					<p>Replace / Amend</p>
  					<ul>
  						<li>R (Replace)</li>
  						<li>A  (Amend)</li>
  					</ul>
  				</div>
  				<div >
  					<label>
  						Sample data in CSV File
  						<button class="btn btn-warning"><i class="fa fa-download mr-2"></i>Download File</button>
  					</label>
  				</div>
  			</div>
  			<div class="col-md-8 py-4">
  				<table id="" class="table table-striped table-bordered cms_table datatables_all" cellspacing="0" >
                    <thead class="thead-dark">
                        <tr class="">
                        	<th scope="col"> Login </th>
                            <th scope="col"> Account Status</th>
                            <th scope="col">Risk</th>
                            <th scope="col">Remarks</th>
                            <th scope="col">Replace/Amend</th>
                         </tr>
                    </thead>
                    <tbody>
           	        </tbody>
                </table>
  			</div>
  			<div class="col-md-12 py-2">
  				<label class="btn btn-success">
  					<i class="fa fa-upload mr-2"></i>Upload
  					<input type="file" name="" class="d-none">
  				</label>
  			</div>
  			<div class="col-md-12 py-4">
  				<table id="" class="table table-striped table-bordered cms_table datatables_all" cellspacing="0" >
                    <thead class="thead-dark">
                        <tr class="">
                        	<th scope="col"> Login </th>
                            <th scope="col"> Account Status</th>
                            <th scope="col"> Updated Account Status</th>
                            <th scope="col">Risk</th>
                            <th scope="col">Update Risk</th>
                            <th scope="col">Remarks</th>
                            <th scope="col">Update Remarks</th>
                            <th scope="col">Replace/Amend</th>
                         </tr>
                    </thead>
                    <tbody>
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
</script>
@endsection
