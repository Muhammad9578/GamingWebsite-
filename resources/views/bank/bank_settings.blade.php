@extends('layout')
@section('title')
Bank Setting
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
                <div class="col-md-6">
                  <div class="row">

                    <div class="col-md-6"> <!-- inner first -->
                      <form>
                        <div class="form-group row">
                          <label for="inputEmail3" class="col-sm-4 col-form-label">Merchant</label>
                          <div class="col-sm-8">
                            <input type="text" name="" class="form-control">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputEmail3" class="col-sm-4 col-form-label">Type</label>
                          <div class="col-sm-8">
                            <select class="form-control">
                              <option >All</option>
                              <option>1</option>
                              <option>2</option>
                              <option>3</option>
                              <option>4</option>
                            </select>
                          </div>
                        </div>
                      </form>
                    </div><!-- //close inner first -->
                    <div class="col-md-6"> <!-- 2nd inner  -->
                      <form>
                        <div class="form-group row">
                          <label for="inputEmail3" class="col-sm-4 col-form-label"> Currancy</label>
                          <div class="col-sm-8">
                            <select class="form-control">
                              <option >All</option>
                              <option>1</option>
                              <option>2</option>
                              <option>3</option>
                              <option>4</option>
                            </select>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputEmail3" class="col-sm-4 col-form-label"> Keyword</label>
                          <div class="col-sm-8">
                            <input type="text" name="keyword" class="form-control">
                          </div>
                        </div>
                      </form>
                    </div><!-- //close 2nd inner  -->
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="row">
                    <div class="col-md-6">
                      <form>
                        <div class="form-group row">
                          <label for="inputEmail3" class="col-sm-4 col-form-label">Status</label>
                          <div class="col-sm-8">
                            <select class="form-control">
                              <option>active</option>
                              <option>1</option>
                              <option>2</option>
                            </select>
                          </div>
                        </div>
                      </form>
                    </div>
                    <div class="col-md-6">
                      <form>
                        <div class="form-group row">
                          <label for="inputEmail3" class="col-sm-4 col-form-label">Purpose</label>
                          <div class="col-sm-8">
                            <select class="form-control">
                              <option></option>
                              <option>1</option>
                              <option>2</option>
                            </select>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>

                <hr>
                <div class="row">
                <div class="col-md-12">
                            <div class="d-flex justify-content-between p-2 mx-3 ">
                              <div>
                                <button class="btn btn-success py-1"><i class="
                                  fa fa-search"></i> Search</button>
                              </div>
                              <div>
                                <button type="button" class="btn btn-success  py-1" data-toggle="modal" data-target="#add_edit_account">
                                  <i class="fa fa-plus-circle mr-1"></i>Add
                                </button>
                                <button type="button" class="btn btn-primary  py-1" data-toggle="modal" data-target="#sequance_setting">
                                  <i class="fa fa-arrows-v"></i> Arrange Sequence
                                </button>
                              </div>
                            </div>
                          </div>
                          </div>
                <hr>

                <div class="row">
              <div class="col-md-12 overflow-auto ">
                <table class="table member_list datatables_all  table-striped table-bordered" cellspacing="0" width="100%">
                  <thead class="thead-dark">
                    <tr>
                      <th scope="col" rowspan="" class="align-top" > Code </th>
                      <th scope="col" rowspan="" class="align-top"> Name</th>
                      <th scope="col" rowspan="" class="align-top"> Branch </th>
                      <th scope="col" rowspan="" class="align-top"> Currency </th>
                      <th scope="col" rowspan="" class="align-top"> Account Name </th>
                      <th scope="col" rowspan="" class="align-top "> Account Number</th>
                      <th scope="col" rowspan="" class="align-top"> Purpose </th>
                      <th scope="col" colspan=""> Type </th>
                      <th scope="col" colspan=""> Status </th>
                      <th scope="col"> Min Balance </th>
                      <th scope="col" class=""> Max Balance </th>
                      <th scope="col" class=""> Balance </th>
                      <th scope="col" class=""> Last Modified by </th>
                      <th scope="col" class=""> Last Modified Date </th>
                      <th scope="col" class=""> Sequance </th>
                      <th scope="col" > Action </th>
                    </tr>
                  </thead>
                  <tbody>
                     <tr>
                      <td scope="col" rowspan="" class="align-top" > 1 </td>
                      <td scope="col" rowspan="" class="align-top"> me</td>
                      <td scope="col" rowspan="" class="align-top ">12SQ11</td>
                      <td scope="col" rowspan="" class="align-top"> SKU </td>
                      <td scope="col" rowspan="" class="align-top"> afila </td>
                      <td scope="col" rowspan="" class="align-top"> 1222121221</td>
                      <td scope="col" rowspan="" class="align-top"> payment </td>

                      <td scope="col" colspan=""> submit </td>
                      <td scope="col" colspan=""> <span class="text-white  bg-success  px-2 py-1"> Active </span> </td>
                      <td scope="col"> 0.00 </td>
                      <td scope="col" class=" "> 5000 </td>
                      <td scope="col" class=" "> 2290 </td>
                      <td scope="col" class=" "> Admin </td>
                      <td scope="col" class=" "> Today </td>
                      <td scope="col" class=" "> 1 </td>
                      <td scope="col" >
                        <button class="btn btn-primary " data-toggle="modal" data-target="#add_edit_account"><i class="fa fa-edit"></i></button>
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

<!-- Edit Bank -->

 <div class="modal fade " id="add_edit_account" role="dialog">
    <div class="cms_models modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4>Add Edit Merchent Bank Account</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <div class="form-group row">
            <label class="col-sm-4 col-form-label"> ID </label>
            <div class="col-sm-8">
              <input class="form-control" type="" placeholder="">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-4 col-form-label">Merchent</label>
            <div class="col-sm-8">
              <select class="form-control">
                <option>SKU</option>
                <option>ABU</option>
                <option>SKU</option>
                <option>ABU</option>

              </select>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-4 col-form-label"> Currency </label>
            <div class="col-sm-8">
              <select class="form-control">
                <option>USD</option>
                <option>PKR</option>
                <option>CHEN</option>
                <option>2</option>

              </select>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-4 col-form-label">Bank</label>
            <div class="col-sm-8">
              <select class="form-control">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>

              </select>
            </div>
          </div>
          <div class="form-group row pt-2">
            <label class="col-sm-4 col-form-label">Type</label>
            <div class="col-sm-8 d-flex align-items-center">
              <input type="text" name="" class="form-control">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-4 col-form-label">Bank Balance</label>
            <div class="col-sm-8">
              <input class="form-control" type="text" placeholder="">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-4 col-form-label"> Account Name </label>
            <div class="col-sm-8">
              <input class="form-control" type="text" placeholder="">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-4 col-form-label"> Account Number </label>
            <div class="col-sm-8">
              <input class="form-control" type="text" placeholder="">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-4 col-form-label"> Max  Balance </label>
            <div class="col-sm-8">
              <input class="form-control" type="text" placeholder="">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-4 col-form-label"> Min  Balance </label>
            <div class="col-sm-8">
              <input class="form-control" type="text" placeholder="">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-4 col-form-label">Purpose</label>
            <div class="col-sm-8">
              <select class="form-control">
                <option></option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-4 col-form-label"> Status </label>
            <div class="col-sm-8">
              <select class="form-control">
                <option>Active</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>

              </select>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-4 col-form-label">Payment Type</label>
            <div class="col-sm-8">
              <select class="form-control">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>

              </select>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-white" data-dismiss="modal"><i class="fa fa-ban mr-1"></i>Cancel</button>
          <button type="button" class="btn btn-success">Save</button>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="modal fade " id="sequance_setting" role="dialog">
    <div class="cms_models modal-dialog ">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4>Arange Sequance</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body ">
          <div class="row">
            <div class="col-md-6 mr-auto">
              <div class="row ">
                <label class="col-4 d-flex align-items-center pl-5">Currency</label>
                <div class="col-md-8">
                  <select class="form-control">
                    <option>1</option>
                    <option>2</option>
                  </select>
                </div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="row ">
                <div class="col-md-12">
                  <button class="btn btn-success">
                    <i class="fa fa-search mr-1"></i> Search
                  </button>
                </div>
              </div>
            </div>

            <div class="col-md-12 overflow-auto py-2">
              <table class="table  table-striped table-bordered model_table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col" rowspan="" class="align-top" > Code </th>
                          <th scope="col" rowspan="" class="align-top"> Name</th>
                          <th scope="col" rowspan="" class="align-top"> Account Name </th>
                          <th scope="col" rowspan="" class="align-top "> Account Number</th>
                          <th scope="col" class=""> Sequance </th>
                      </tr>
                  </thead>
                  <tbody>
                  </tbody>
              </table>
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
@endsection


@section('scripts')
<script>



</script>
@endsection




