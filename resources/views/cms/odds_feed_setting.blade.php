<style type="text/css">

::-webkit-scrollbar {
  width: 10px;
  height: 0px;
}
::-webkit-scrollbar-track {
  background: transparent; 
}
</style>
@extends('layout')
@section('title')
Odd Feed Setting
@endsection
@section('content')
<div class="right_col" role="main">
  <div class="row">
      <div class="col-md-12">
        <div class="page-title">
          <div class="title_left">
            <h3>@yield('title')</h3>
          </div>
        </div>
      </div>
    </div>
  <section class="bg-white">
  <div class="container border p-3">
    
    <div class="row">
      <div class="col-md-3">
        <div class="row">
                <label  class="col-sm-12 ">Merchant</label>
                <div class="col-sm-12">
                  <select class="form-control">
                  <option>UA9</option>
                </select>
                </div>
              </div>
      </div>
      <div class="col-md-3">
        <div class="row">
                <label  class="col-sm-12 ">Provider</label>
                <div class="col-sm-12">
                  <select class="form-control">
                  <option>IBC</option>
                </select>
                </div>
              </div>
      </div>
      <div class="col-md-3">
        <div class="row">
                <label  class="col-sm-12 ">Language</label>
                <div class="col-sm-12">
                  <select class="form-control">
                  <option>EN_VN</option>
                </select>
                </div>
              </div>
      </div>
      <div class="col-md-3">
        <div class="row">
                <label  class="col-sm-12 ">Status</label>
                <div class="col-sm-12">
                  <select class="form-control">
                  <option>ALL</option>
                </select>
                </div>
              </div>
      </div>
    </div>
    <hr>
    <div class="row">
      <div class="col-md-12">
              <div class="d-flex justify-content-between p-2 mx-3 ">
                <div>
                  <button type="reset " class="btn btn-primary ">Reset</button>
                  <button class="btn btn-success "><i class="
                    fa fa-search"></i> Search</button>
                </div>
                <div>
                  <button type="button" class="btn btn-success  " data-toggle="modal" data-target="#oddfeedModel">
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
              <th scope="col">League id</th>
              <th scope="col">League</th>
              <th scope="col">Status</th>
              <th scope="col">Type</th>
              <th scope="col">Index</th>
              <th scope="col">Match Date</th>
              <th scope="col">Start Time</th>
              <th scope="col">End Time</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            <tr class=" ">
              <td scope="row"> id </td>
              <td> 1 </td>
              <td> active </td>
              <td> Mobile  </td>
              <td> 1 </td>
              <td>11-01-2021</td>
              <td>11-01-2021</td>
              <td> 11-01-2021 </td>
              <td>
                <button class="btn btn-primary p-2" data-toggle="modal" data-target="#oddfeedModel"><i class="fa fa-edit"></i></button>
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



<!-- Banner List Model model -->
  <div class="modal fade " id="oddfeedModel" role="dialog">
    <div class="cms_models modal-dialog ">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4>Odds feed Model</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <table class="w-100 form-group tr_gap">
          <tbody>
            <tr class="my-2">
              <td>Marchent</td>
              <td colspan="3">
                <select class="form-control w-100">
                  <option>Select any Option</option>
                </select>
              </td>
            </tr>

            <tr class="my-2">
              <td> Start Time </td>
              <td colspan="3">
                <input type="date" name="index" class="form-control">
              </td>
            </tr>

            <tr class="my-2">
              <td> End time </td>
              <td colspan="3">
                <input type="date" name="index" class="form-control">
              </td>
            </tr>

            <tr class="my-2">
              <td> Index </td>
              <td colspan="3">
                <input type="text" name="index" class="form-control">
              </td>
            </tr>

            <tr class="my-2">
              <td></td>
              <td colspan="3">
                <input type="text" placeholder="Search By KeyWord" name="merchantname" class="form-control">
              </td>
            </tr>
            <tr class="my-2">
              <td>Match</td>
              <td colspan="3">
               <select class="form-control">
                 <option>Select Match</option>
               </select>
              </td>
            </tr>
            <tr class="my-2">
              <td>League id</td>
              <td colspan="3">
                <input type="text" name="LeagueId" class="form-control">
              </td>
            </tr>

            <tr class="my-2">
              <td> Type </td>
              <td colspan="3">
                <input type="text" name="type" class="form-control">
              </td>
            </tr>

            <tr class="my-2">
              <td>Match Date</td>
              <td class="" colspan="3">
                <input type="text" name="href" class="form-control">
              </td>
            </tr>
            <tr class="my-2">
              <td>Handicap</td>
              <td class="" colspan="3">
                <input type="text" name="href" class="form-control">
              </td>
            </tr>
            <tr class="my-2">
              <td>Home Odds</td>
              <td class="">
                <input type="text" name="href" class="form-control">
              </td>
              <td class="pl-2">Away Odds</td>
              <td class="">
                <input type="text" name="href" class="form-control">
              </td>
            </tr>

            <tr class="my-2">
              <td>Home Image</td>
              <td class="">
                <input type="text" name="href" class="form-control">
              </td>
              <td class="pl-2">Away Image</td>
              <td class="">
                <input type="text" name="href" class="form-control">
              </td>
            </tr>

            <tr class="my-2">
              <td>Preview</td>
              <td class="">
                <img src="">
              </td>
              <td class="pl-2">Preview</td>
              <td class="">
                <img src="">
              </td>
            </tr>
            <tr class="mt-4">
              <td colspan="4">
                <input type="checkbox" class=" mr-2" name="select_language">Select All Languages
              </td>
            </tr>
            <tr>
              <td colspan="4">
                <input type="checkbox" name="singleLanguage">EN_VN
              </td>
            </tr>
            <tr>
              <td>Language</td>
              <td colspan="3">
                <input type="text" name="singleLanguage" class="form-control">
              </td>
            </tr>
            <tr>
              <td>Home Name</td>
              <td colspan="">
                <input type="text" name="singleLanguage" class="form-control">
              </td>
              <td class="pl-2"> Away Name</td>
              <td colspan="">
                <input type="text" name="singleLanguage" class="form-control">
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
  <!-- Add Banner model end-->


@endsection

@section('scripts')
<script>
</script>
@endsection