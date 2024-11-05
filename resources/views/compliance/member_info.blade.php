@extends('layout')
@section('title')
Members Info
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
                          <label for="inputEmail3" class="col-sm-3 col-form-label">Login</label>
                          <div class="col-sm-9">
                            <input type="text" name="" class="form-control">
                          </div>
                        </div>
                        <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Currency</label>
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
                        <div class="form-group row">
                          <label for="inputEmail3" class="col-sm-3 col-form-label">RiskStatus</label>
                          <div class="col-sm-9">
                            <select class="form-control" id="exampleFormControlSelect1">
                              <option>Active</option>
                              <option>Inactive</option>
                            </select>
                          </div>
                        </div>
                      </form>
                    </div><!-- //close inner first -->

                    <div class="col-md-6"> <!-- 2nd inner  -->
                      <form>
                        <div class="form-group row">
                          <label for="inputEmail3" class="col-sm-3 col-form-label">Play ID</label>
                          <div class="col-sm-9">

                            <input type="text" name="login" class="form-control">

                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputEmail3" class="col-sm-3 col-form-label">Staus</label>
                          <div class="col-sm-9">
                            <select class="form-control" id="exampleFormControlSelect1">
                              <option>Active</option>
                              <option>Inactive</option>
                            </select>
                          </div>
                        </div>
                        
                        <div class="form-group row">
                          <label for="inputPassword3" class="col-sm-3 col-form-label">From</label>
                          <div class="col-sm-9">
                            <input type="date" name="enddate" class="form-control" placeholder="End Date">
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
                          <label for="inputEmail3" class="col-sm-3 col-form-label">Name</label>
                          <div class="col-sm-9">

                            <input type="text" name="login" class="form-control">

                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputEmail3" class="col-sm-3 col-form-label">Group</label>
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
                        <div class="form-group row">
                          <label for="inputEmail3" class="col-sm-3 col-form-label">To</label>
                          <div class="col-sm-9">

                            <input type="date" name="to" class="form-control">

                          </div>
                        </div>
                      </form>
                    </div>

                    <div class="col-md-6">
                      <form>
                        <div class="form-group row">
                          <label for="inputEmail3" class="col-sm-3 col-form-label">Acc No</label>
                          <div class="col-sm-9">

                            <input type="number" name="login" class="form-control">

                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputEmail3" class="col-sm-3 col-form-label">Affiliate</label>
                          <div class="col-sm-9">

                            <input type="text" name="login" class="form-control">

                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputEmail3" class="col-sm-3 col-form-label">KYCStatus</label>
                          <div class="col-sm-9">

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
                <table class="table member_list datatables_all  table-striped table-bordered" cellspacing="0" width="100%">
                  <thead class="thead-dark">
                    <tr>
                      <th scope="col" rowspan="" class="align-top" > ID </th>
                      <th scope="col" rowspan="" class="align-top"> Merchant</th>
                      <th scope="col" rowspan="" class="align-top"> Login </th>
                      <th scope="col" rowspan="" class="align-top"> KYC Status </th>
                      <th scope="col" rowspan="" class="align-top"> Afiliate </th>
                      <th scope="col" rowspan="" class="align-top"> Name</th>
                      <th scope="col" rowspan="" class="align-top"> Curancy </th>

                      <th scope="col" colspan=""> Group</th>
                      <th scope="col" colspan=""> Status </th>
                      <th scope="col"> Error Cpunt </th>
                      <th scope="col" class="big_col"> Register Info</th>
                      <th scope="col" class="big_col">Last Login</th>
                      <th scope="col" > Action </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td scope="col" rowspan="" class="align-top" > ID </td>
                      <td scope="col" rowspan="" class="align-top"> Merchant</td>
                      <td scope="col" rowspan="" class="align-top "> <span class="text-white  bg-primary px-2 py-1"> Login </span></td>
                      <td scope="col" rowspan="" class="align-top"> KYC Status </td>
                      <td scope="col" rowspan="" class="align-top"> Afiliate </td>
                      <td scope="col" rowspan="" class="align-top"> Name</td>
                      <td scope="col" rowspan="" class="align-top"> Curancy </td>

                      <td scope="col" colspan=""> Group</td>
                      <td scope="col" colspan=""> <span class="text-white  bg-success  px-2 py-1"> Active </span> </td>
                      <td scope="col"> Error Cpunt </td>
                      <td scope="col" class="big_col"> Register Info</td>
                      <td scope="col" class="big_col">Last Login</td>
                      <td scope="col" >
                        <button class="btn btn-primary "data-toggle="modal" data-target="#editMember"><i class="fa fa-edit"></i></button>
                        <button class="btn btn-primary "><i class="fa fa-cog"></i></button>
                        <button class="btn btn-danger "><i class="fa fa-sign-out"></i></button>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
    </div>
  </section>
</div>

<!-- EDIT User Model -->
  <div class="modal fade " id="editMember" role="dialog">
    <div class="cms_models modal-dialog ">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4>Edit User</h4>
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
                <label class="col-sm-5 col-form-label">Play  ID*</label>
                <div class="col-sm-7">
                  <input class="form-control" type="text" value="1">
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
                <label class="col-sm-5 col-form-label">Lat Login Date*</label>
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
            </div>







            <div class="col-md-4">
              <div class="form-group row">
                <label class="col-sm-5 col-form-label">Merchant Code</label>
                <div class="col-sm-7">
                  <input class="form-control" type="text" value="relatedcontent">
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-5 col-form-label">Name*</label>
                <div class="col-sm-7">
                  <input class="form-control" type="text" value="1">
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
                <label class="col-sm-5 col-form-label">date of Birth*</label>
                <div class="col-sm-7">
                  <input class="form-control" type="text" value="relatedcontent">
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
                <label class="col-sm-5 col-form-label">KYC Status*</label>
                <div class="col-sm-7">
                  <input class="" type="checkbox" value="relatedcontent">
                </div>
              </div>


              <div class="form-group row">
                <label class="col-sm-5 col-form-label">RISK*</label>
                <div class="col-sm-7">
                  <input class="" type="checkbox" value="relatedcontent">
                </div>
              </div>



              <div class="form-group row">
                <label class="col-sm-5 col-form-label">Prefered Vallet*</label>
                <div class="col-sm-7">
                  <select class="form-control">
                    <option>Main Vallet</option>
                    <option>1</option>
                  </select>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-5 col-form-label">Group*</label>
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
                <label class="col-sm-5 col-form-label">Bank office App*</label>
                <div class="col-sm-7">
                  <input class="form-control" type="text" value="relatedcontent">
                </div>
              </div>
            </div>
            <div class="col-md-4">
              
              <table class="table table-striped">
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
        <div class="modal-footer">
          <button type="button" class="btn btn-white" data-dismiss="modal"><i class="fa fa-ban mr-1"></i>Cancel</button>
          <button type="button" class="btn btn-success"> Save</button>
        </div>
      </div>
    </div>
  </div>
  <!-- Edit User model end-->

@endsection


@section('scripts')
<script>

</script>
@endsection