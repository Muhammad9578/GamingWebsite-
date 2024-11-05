<style >
  .for-light-sky{
    background-color: #d4f7f7;
    border-top: 0px!important;
  }
</style>
@extends('layout')
@section('title')
System Notification
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
  </div>
  <!-- Title close -->
  <section class="">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="inner-first-sn">
            <table class="table border-top-0">
              <thead>
                <tr>
                  <th class="text-center border-bottom-0 for-light-sky" colspan="4 ">no notifications</th>
                </tr>
              </thead>
            </table>
          </div>
        </div>
        <!-- Provider Maintenance<small>(last 10 hours-Next 12 hours)</small> -->
        <!-- close first column -->
        <div class="col-md-6">
         <div class="inner-second-sn">
          <div class="border rounded">
            <h5 class="text-dark p-2 w-100 for-light-sky">Provider Maintenance<small>(last 10 hours-Next 12 hours)</small></h5>	
            <div class="p-3 overflow-auto">
             <table class="table border datatables_all">
              <thead>
                <tr class="bg-dark text-white">
                  <th  class="small text-uppercase">start time</th>
                  <th  class="small text-uppercase">end time</th>
                  <th  class="small text-uppercase">provider</th>
                  <th  class="small text-uppercase">status</th>
                  <th  class="small text-uppercase">Game Maintenance</th>
                  <th  class="small text-uppercase">Api Maintenance</th>
                  <th  class="small text-uppercase">Remarks</th>
                </tr>
              </thead>
              <tbody>
                
                
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>
</div>





@endsection


@section('scripts')
<script>
  $('.datatables_all').dataTable();
</script>
@endsection