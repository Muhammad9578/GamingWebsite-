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
Announcement
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
    <div class="container border p-3">
      
          <div class="row p-3 "> <!-- main row -->
            <div class="col-md-3">
              <div class=" row">
                          <label  class="col-sm-12">Type</label>
                          <div class="col-sm-12">
                            <select class="form-control">
                              <option>All</option>
                              <option>2</option>
                              <option>3</option>
                              <option>4</option>
                              <option>5</option>
                            </select>
                          </div>

                        </div>
            </div>
            <div class="col-md-3">
               <div class=" row">
                          <label  class="col-sm-12 ">Status</label>
                          <div class="col-sm-12">

                            <select class="form-control">
                              <option>Active</option>
                              <option>2</option>
                              <option>3</option>
                              <option>4</option>
                              <option>5</option>
                            </select>

                          </div>
                        </div>
            </div>
          </div>
          

<!--                 ------------------------------ -->
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
              <button type="button" class="btn btn-light small m-0 border rounded-0">Monday</button>
              <button type="button" class="btn btn-light small m-0 border rounded-0">Tuesday</button>
              <button type="button" class="btn btn-light small m-0 border rounded-0">Wednesday</button>
              <button type="button" class="btn btn-light small m-0 border rounded-0">Thursday</button>
            </div>
            <div class="d-flex fonts-for-btn">
              <button type="button" class="btn btn-light small m-0 border rounded-0">Friday</button>
              <button type="button" class="btn btn-light small m-0 border rounded-0">Saterday</button>
              <button type="button" class="btn btn-light small m-0 border rounded-0">Sunday</button>     
            </div>
          </div>

        </div>
      </div>
      <hr>
                <div class="row">
                <div class="col-md-12  d-flex justify-content-between p-3 ">
                            
                              <div>
                               
                                <button class="btn btn-success "><i class="
                                  fa fa-search"></i> Search</button>
                              </div>
                              <div>
                                <button type="button" class="btn btn-success  " data-toggle="modal" data-target="#addstyle">
                                  <i class="fa fa-plus-circle"></i> Add Style
                                </button>
                                <button type="button" class="btn btn-success  " data-toggle="modal" data-target="#add_anauncement">
                                  <i class="fa fa-plus-circle"></i> Add
                                </button>
                              </div>
                            </div>
                          </div>
                          
                <hr>
          
            <div class="row">
              <div class="col-md-12 overflow-auto ">
                <table class="table datatables_all table-striped table-bordered cms_table" cellspacing="0" width="100%">
                  <thead class="thead-dark">
                    <tr class="">
                      <th scope="col">ID</th>
                      <th scope="col">Anauncement Type</th>
                      <th scope="col">Status</th>
                      <th scope="col">Preview</th>
                      <th scope="col">Start date</th>
                      <th scope="col">Expire Date</th>
                      <th scope="col"> PopUp </th>
                      <th scope="col"> Seq </th>
                      <th scope="col"> Action </th>
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




<!-- model -->

<!-- EDIT BANNER Model model -->
<div class="modal fade " id="addstyle" role="dialog">
    <div class="annauncement_models modal-dialog ">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4> Add Style</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-12"><b>Web</b></div>
            <div class="col-6 pl-2 d-flex align-items-center pl-3">
              <span class="mr-2">speed</span>
              <select class="">
                  <option >Select Option</option>
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                </select>
            </div>
            <div class="col-6 ">
              <span class="mr-2"> color </span>
              <input type="color" name="color" value="#50573a">
            </div>
          </div>
          <div class="row">
            <div class="col-md-12"><b>Mobile</b></div>
            <div class="col-6 pl-2 d-flex align-items-center pl-3">
              <span class="mr-2">speed</span>
              <select class="">
                  <option >Select Option</option>
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                </select>
            </div>
            <div class="col-6">
              <span class="mr-2"> color </span>
              <input type="color" name="color" value="#c8f542">
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-white" data-dismiss="modal"><i class="fa fa-ban mr-1"></i>Cancel</button>
          <button type="button" class="btn btn-primary"> Save</button>
        </div>
      </div>
    </div>
  </div>





  <div class="modal fade " id="add_anauncement" role="dialog">
    <div class="cms_models modal-dialog ">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4> Add anauncement</h4>
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
                <input type="text" name="" class="form-control">
              </td>
            </tr>
            <tr class="my-2">
              <td> Index </td>
              <td colspan="">
                <input type="text" name="index" class="form-control">
              </td>
            </tr>
            <tr class="my-2">
              <td>Status</td>
              <td class="">
                <input type="checkbox" name="Status" class="mr-2">Active
              </td>
            </tr>

            <tr class="my-2">
              <td> Start Date </td>
              <td colspan="">
                <input type="date" name="index" class="form-control">
              </td>
            </tr>

            <tr class="my-2">
              <td> End Date </td>
              <td colspan="">
                <input type="date" name="index" class="form-control">
              </td>
            </tr>

            <tr class="py-2">
              <td class="py-4"> Language </td>
            </tr>
            <tr class="my-2">
              <td class="py-1"> En_NC </td>
            </tr>
            <tr>
              <td colspan="2" class="py-1">
                <input type="text" name="language" class="form-control">
              </td>
            </tr>

            <tr class="my-2">
              <td class="py-1"> En_NC </td>
            </tr>
            <tr>
              <td colspan="2" class="py-1">
                <input type="text" name="language" class="form-control">
              </td>
            </tr>

            <tr class="my-2">
              <td class="py-1"> En_NC </td>
            </tr>
            <tr>
              <td colspan="2" class="py-1">
                <input type="text" name="language" class="form-control">
              </td>
            </tr>
            <tr class="my-2">
              <td class="py-1"> En_NC </td>
            </tr>
            <tr>
              <td colspan="2" class="py-1">
                <input type="text" name="language" class="form-control">
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

<!-- model -->


@endsection


@section('scripts')
<script>

</script>
@endsection