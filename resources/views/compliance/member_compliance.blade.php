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
Member Complaint Report
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
    <div class="container border p-2">

      <div class="row p-3 "> <!-- main row -->
        <div class="col-md-3">
          <div class="row">
            <label  class="col-sm-12 ">Merchent</label>
            <div class="col-sm-12">
              <select class="form-control" >
                <option>AUS</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="row">
            <label class="col-sm-12 ">Login</label>
            <div class="col-sm-12">

              <input type="text" name="login" class="form-control">

            </div>
          </div>
        </div>

        <div class="col-md-3 d-flex align-items-end pt-md-0 pt-2">
          <label class="btn btn-primary">
            <i class="fa fa-upload"></i> Upload
            <input type="file" name="upload" class="d-none ">
          </label>
        </div>
      </div>


      <div class="row">
        <div class="col-md-12">
          <div class="d-flex justify-content-between p-2 mx-3 ">
            <div>
              <button class="btn btn-primary py-1"><i class="
                fa fa-times"></i> Clear</button>
                <button class="btn btn-success py-1"><i class="
                  fa fa-search"></i> Search</button>
                </div>
                <div>
                  <button type="button" class="btn btn-primary  py-1" data-toggle="modal" data-target="">
                    <i class="fa fa-file mr-1"></i>Export
                  </button>
                  <button type="button" class="btn btn-warning  py-1" data-toggle="modal" data-target="">
                    <i class="fa fa-download mr-1"></i>Download
                  </button>
                </div>
              </div>
            </div>
          </div>
          <hr>

          <div class="row">
          <div class="col-md-12 overflow-auto ">
            <table class="table datatables_all table-striped table-bordered" cellspacing="0" width="100%">
              <thead class="thead-dark">
                <tr>
                  <th scope="col" rowspan="2" class="align-top" > Date </th>
                  <th scope="col" rowspan="2" class="align-top">Member Login</th>
                  <th scope="col" rowspan="2" class="align-top"> Curancy </th>
                  <th scope="col" rowspan="2" class="align-top">Register Date </th>
                  <th scope="col" rowspan="2" class="align-top"> Afiliate </th>
                  <th scope="col" rowspan="2" class="align-top"> Member Group</th>
                  <th scope="col" rowspan="2" class="align-top"> Game Provider </th>

                  <th scope="col" colspan="6"> Daily </th>
                  <th scope="col" colspan="5"> DOR now (All Game) </th>
                </tr>

                <tr class="">
                  <th scope="col"> Turnover </th>
                  <th scope="col"> Valid Turnover</th>
                  <th scope="col">Play win/loss</th>
                  <th scope="col">W %</th>
                  <th scope="col"> Adjustment</th>
                  <th scope="col"> Deposit </th>
                  <th scope="col"> Withdrawl </th>
                  <th scope="col"> Ternover </th>
                  <th scope="col"> Valid Turnover </th>
                  <th scope="col">player Win/Loss</th>
                  <th scope="col"> W % </th>
                </tr>

              </thead>
              <tbody>

                
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

  </script>
  @endsection