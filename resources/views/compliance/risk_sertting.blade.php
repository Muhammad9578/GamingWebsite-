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
Risk Setting
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
                <div class="col-md-6">
                  <div class="row">

                    <div class="col-md-6"> <!-- inner first -->
                      <form>
                        <div class="form-group row">
                          <label for="inputEmail3" class="col-sm-3 col-form-label">Merchent</label>
                          <div class="col-sm-9">
                            <select class="form-control" id="exampleFormControlSelect1">
                              <option>AUS</option>
                              <option>2</option>
                              <option>3</option>
                              <option>4</option>
                              <option>5</option>
                            </select>
                          </div>
                        </div>
                      </form>
                    </div><!-- //close inner first -->

                    <div class="col-md-6"> <!-- 2nd inner  -->
                      <form>
                        <div class="form-group row">
                          <label for="inputEmail3" class="col-sm-3 col-form-label">Status</label>
                          <div class="col-sm-9">
                            <select class="form-control" id="exampleFormControlSelect1">
                              <option>AUS</option>
                              <option>2</option>
                              <option>3</option>
                              <option>4</option>
                              <option>5</option>
                            </select>
                          </div>
                        </div>
                      </form>
                    </div><!-- //close 2nd inner  -->
                  </div>
                </div>
              </div>
                <hr>
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
                                <button type="button" class="btn btn-success  py-1" data-toggle="modal" data-target="#risk_setting">
                                  <i class="fa fa-plus-circle mr-1"></i>Add
                                </button>
                              </div>
                            </div>
                          </div>
                          </div>
                <hr>
            
            <div class="row">
              <div class="col-md-12 overflow-auto ">
                <table class="table  table-striped table-bordered datatables_all" cellspacing="0" width="100%">
                  <thead class="thead-dark">
                    <tr>
                      <th scope="col" rowspan="2" class="align-top" > ID </th>
                      <th scope="col" rowspan="2" class="align-top"> Provider </th>
                      <th scope="col" rowspan="2" class="align-top"> Product </th>
                      <th scope="col" rowspan="2" class="align-top"> Promo code </th>
                      <th scope="col" rowspan="2" class="align-top"> Currency </th>
                      <th scope="col" rowspan="2" class="align-top"> Amount </th>
                      <th scope="col" rowspan="2" class="align-top"> First Deposit Amount  </th>

                      <th scope="col" colspan="2"> Valid Date </th>
                      <th scope="col" rowspan="2" class="align-top" > Afiliate </th>
                      <th scope="col" rowspan="2" class="align-top"> IP </th>
                      <th scope="col" rowspan="2" class="align-top"> Seq </th>
                      <th scope="col" rowspan="2" class="align-top"> Full Name </th>
                      <th scope="col" rowspan="2" colspan="2" class="align-top"> Bank Account Number </th>
                      <th scope="col" rowspan="2" class="align-top"> Status </th>
                      <th scope="col" rowspan="2" class="align-top"> Remarks  </th>
                      <th scope="col" rowspan="2" class="align-top"> Action  </th>

                    </tr>
                    <tr class="">
                      <th scope="col"> From </th>
                      <th scope="col"> To</th>
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




<!-- model -->
  <div class="modal fade " id="risk_setting" role="dialog">
    <div class="cms_models modal-dialog ">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4> Create Or Edit RISK Setting </h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
        <table class="w-100 form-group  table_gap">
          <tbody>
            <tr class="my-2">
              <td>
                <label> Merchhent</label>
              </td>
              <td colspan="">
                <select class="form-control">
                  <option>Select any Option</option>
                  <option> 1 </option>
                  <option> 2 </option>
                  <option> 3 </option>
                  <option> 4 </option>
                  <option> 5 </option>
                </select>
              </td>
            </tr>
            <tr class="my-2">
              <td>Provider</td>
              <td colspan="">
                <select class="form-control">
                  <option>Select any Option</option>
                  <option> 1 </option>
                  <option> 2 </option>
                  <option> 3 </option>
                  <option> 4 </option>
                  <option> 5 </option>
                </select>
              </td>
            </tr>
            <tr class="my-2">
              <td> product </td>
              <td colspan="">
                <select class="form-control">
                  <option>Select any Option</option>
                  <option> 1 </option>
                  <option> 2 </option>
                  <option> 3 </option>
                  <option> 4 </option>
                  <option> 5 </option>
                </select>
              </td>
            </tr>
            <tr class="my-2">
              <td>Curancy</td>
              <td class="">
                <select class="form-control">
                  <option>Select any Option</option>
                  <option> 1 </option>
                  <option> 2 </option>
                  <option> 3 </option>
                  <option> 4 </option>
                  <option> 5 </option>
                </select>
              </td>
            </tr>

            <tr class="my-2">
              <td> Promo code </td>
              <td colspan="">
                <select class="form-control">
                  <option>Select any Option</option>
                  <option> 1 </option>
                  <option> 2 </option>
                  <option> 3 </option>
                  <option> 4 </option>
                  <option> 5 </option>
                </select>
              </td>
            </tr>

            <tr class="my-2">
              <td> Amount </td>
              <td colspan="">
                <input type="number" name="index" class="form-control">
              </td>
            </tr>

            <tr class="py-2">
              <td class="py-4">Valid Date from </td>
              <td>
                <input type="date" name="" class="form-control">
              </td>
            </tr>
            <tr class="py-2">
              <td class="py-4">Valid Date To </td>
              <td>
                <input type="date" name="" class="form-control">
              </td>
            </tr>
            <tr class="py-2">
              <td class="py-4">First Deposit amount </td>
              <td>
                <input type="number" name="" class="form-control">
              </td>
            </tr>
            <tr class="py-2">
              <td class="py-4"> Afliate </td>
              <td>
                <input type="text" name="" class="form-control">
              </td>
            </tr>
            <tr class="py-2">
              <td class="py-4"> IP </td>
              <td>
                <textarea class="form-control"  rows="3"></textarea>
              </td>
            </tr>
            <tr class="py-2">
              <td class="py-4"> Seq </td>
              <td>
                <input type="text" name="" class="form-control">
              </td>
            </tr>
            <tr class="py-2">
              <td class="py-4"> Full Name </td>
              <td>
                <input type="text" name="" class="form-control">
              </td>
            </tr>
            <tr class="py-2">
              <td class="py-4"> Bank Account Number </td>
              <td>
                <input type="text" name="" class="form-control">
              </td>
            </tr>
            <tr class="py-2">
              <td class="py-4"> Status </td>
              <td>
                <select class="form-control">
                  <option>Active</option>
                  <option> Inactive </option>
                </select>
              </td>
            </tr>
            <tr class="py-2">
              <td class="py-4"> Remarks </td>
              <td>
                <textarea class="form-control"  rows="2"></textarea>
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
  <!--  model end-->

<!-- model -->


@endsection


@section('scripts')
<script>

</script>
@endsection