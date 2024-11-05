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
Affiliate List
@endsection
@section('content')
<div class="right_col" role="main">
  <div class="container bg-light">
    <div class="row">
      <div class="col-md-12  d-flex align-items-center">
        <div class="page-titlee">
          <h3>@yield('title')</h3>
        </div>
        
      </div>
    </div>
    <!-- Title close -->
  </div>
<section class="bg-white">
  <div class="container  p-3 border">
    <div class="row px-3 py-1"><!-- main row -->
      <div class="col-md-3">
        <div class="row">
                <label class="col-sm-12 ">Merchant*</label>
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
      <div class="col-md-3">
        <div class=" row">
                <label  class="col-sm-12 ">Currency*</label>
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
        <div class="row">
              <label class=" col-sm-12">Affiliate Login</label>
              <div class="col-sm-12">
                <input type="text" class="form-control" placeholder="">
              </div>
            </div>
          </div>

            <div class="col-md-3">
              <label  class="col-sm-12 ">Affiliate Name</label>
              <div class="col-sm-12">
                <input type="text" class="form-control" placeholder="">
              </div>
            </div>
      </div> <!-- close mainrow -->

      <div class="row px-3 py-1"><!-- main row -->
      <div class="col-md-3">
        <div class="row">
                <label class="col-sm-12 ">Affiliate Code</label>
                <div class="col-sm-12">
                  <input type="" class="form-control" name="">
                </div>

              </div>
      </div>

      <div class="col-md-3">
        <div class=" row">
                <label  class="col-sm-12 ">Status*</label>
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
        <div class="row">
              <label class=" col-sm-12">Affiliate Group</label>
              <div class="col-sm-12">
                <select class="form-control">
                  <option></option>
                </select>
              </div>
            </div>
          </div>

            <div class="col-md-3">
              <label  class="col-sm-12 ">Contact</label>
              <div class="col-sm-12">
                <input type="text" class="form-control" placeholder="">
              </div>
            </div>
      </div> <!-- close row2 -->

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
          <div class="col-md-12 d-flex justify-content-around">
            <div class="">
              <button type="button" class="btn btn-primary"> <i class="fa fa-times"></i> Clear</button>
              <button type="button" class="btn btn-success"><i  class="fa fa-search"></i> Search</button>
            </div>
            <div class=" d-flex">
              <button type="button" class="btn btn-info"><i class="fa fa-file"></i> Export</button>
              <button type="button" class="btn btn-warning"><i class="fa fa-download"></i> Download</button>
              <button type="button" class="btn btn-success"data-toggle="modal" data-target="#Add-list-aff"><i class="fa fa-plus-circle pr-2"></i> Add</button>

              <!-- Modal -->
              <div class="modal fade" id="Add-list-aff" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Create Affiliate Info</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <div class="row">
                        <div class="col-md-10 m-auto">
                          <form>

                            <div class="form-group row">
                              <label class="col-sm-4 col-form-label">Merchant*</label>
                              <div class="col-sm-8">
                                <input type="" class="form-control">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label class="col-sm-4 col-form-label">Login*</label>
                              <div class="col-sm-8">
                                <input type="" class="form-control">
                              </div>
                            </div>

                            <div class="form-group row">
                              <label class="col-sm-4 col-form-label">Currency*</label>
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
                              <label class="col-sm-4 col-form-label">Password*</label>
                              <div class="col-sm-8">
                                <input type="" class="form-control" maxlength="10" placeholder="">
                                <small>password strength 6-10 letters</small>
                              </div>
                            </div>


                            <div class="form-group row">
                              <label class="col-sm-4 col-form-label">Confirm Password*</label>
                              <div class="col-sm-8">
                                <input class="form-control" type=""  placeholder="">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label class="col-sm-4 col-form-label">Name*</label>
                              <div class="col-sm-8">
                                <input class="form-control"  placeholder="">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label class="col-sm-4 col-form-label">Proposal*</label>
                              <div class="col-sm-8">

                                <textarea class="form-control"></textarea>
                              </div>
                            </div>
                            <div class="form-group row">
                              <label class="col-sm-4 col-form-label">Domain*</label>
                              <div class="col-sm-8">
                                <input type="" class="form-control"  placeholder="">
                                <small>e.g http://www.xyz.com</small>
                              </div>
                            </div>


                          </form>
                        </div>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-light" data-dismiss="modal"><i class="fa fa-ban"></i> Cancle</button>
                      <button type="button" class="btn btn-success">Save </button>
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
            <table class="table datatables_all border">
              <thead>
                <tr class="bg-dark text-white">
                  <th scope="col">#</th>
                  <th scope="col">Merchant</th>
                  <th scope="col">Parent</th>
                  <th scope="col">Affiliate Code</th>
                  <th scope="col">Affiliate Login</th>
                  <th scope="col">Name</th>
                  <th scope="col">Currency</th>
                  <th scope="col">Contact</th>
                  <th scope="col">Domain</th>
                  <th scope="col">Member</th>
                  <th scope="col">Clicks</th>
                  <th scope="col">Common Wallets</th>
                  <th scope="col">Common Groups</th>
                  <th scope="col">Affiliate Group</th>
                  <th scope="col">Register Date</th>
                  <th scope="col">Remark</th>
                  <th scope="col">Status</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>testaft</td>
                  <td></td>
                  <td>tst</td>
                  <td>akd</td>
                  <td>VND</td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td>2020-11-20 14:20</td>
                  <td></td>
                  <td><button class="btn btn-warning text-white"><small> success</small></button></td>
                  <td class="d-flex">
                    <button class="btn btn-danger" data-toggle="modal" data-target="#AA_list"><i class="fa fa-minus-circle"></i></button>

                    <!-- Modal -->
                    <div class="modal fade" id="AA_list" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Suspend Affiliate Account : gangan</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <input type="text" name="" class="form-control">
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-light" data-dismiss="modal">Cancle</button>
                            <button type="button" class="btn btn-success">Confirm</button>
                          </div>
                        </div>
                      </div>
                    </div>


                    <button class="btn btn-success" data-toggle="modal" data-target="#AA_listedit"><i class="fa fa-clipboard"></i></i></button>
                    <div class="modal fade" id="AA_listedit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit Affiliate Info</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <div class="row">
                              <div class="col-md-10 m-auto">
                                <form>
                                  <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Name*</label>
                                    <div class="col-sm-8">
                                      <input class="form-control" type=""  placeholder="">
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Email*</label>
                                    <div class="col-sm-8">
                                      <input class="form-control" type=""  placeholder="">
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Phone*</label>
                                    <div class="col-sm-8">
                                      <input class="form-control" type=""  placeholder="">
                                    </div>
                                  </div>
                                </form>
                              </div>
                            </div>
                            
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-light" data-dismiss="modal">Cancle</button>
                            <button type="button" class="btn btn-success">Confirm</button>
                          </div>
                        </div>
                      </div>
                    </div>


                    <button class="btn btn-warning" data-toggle="modal" data-target="#AA_listpass"><i class="fa fa-lock text-white"></i></button>
                    <!-- Modal -->
                    <div class="modal fade" id="AA_listpass" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Change Password for gangan</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <div class="row">
                              <div class="col-md-10 m-auto">
                                <form>
                                  <div class="form-group row">
                                    
                                    <div class="col-sm-12">
                                      <label class="">New Password*</label>
                                      <input class="form-control" type=""  placeholder="">
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    
                                    <div class="col-sm-12">
                                      <label class="">Confirm Password*</label>
                                      <input class="form-control" type=""  placeholder="">
                                    </div>
                                  </div>
                                </form>
                              </div>
                            </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-light" data-dismiss="modal">Cancle</button>
                            <button type="button" class="btn btn-success">Confirm</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <button class="btn btn-info" data-toggle="modal" data-target="#AA_editlist-2"><i class="fa fa-cog"></i></button>
                    <!-- Modal -->
                    <div class="modal fade" id="AA_editlist-2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit Affiliate Info</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <div class="row">
                              <div class="col-md-10 m-auto">
                                <form>
                                  <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Name*</label>
                                    <div class="col-sm-8">
                                      <input class="form-control" type=""  placeholder="">
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Email*</label>
                                    <div class="col-sm-8">
                                      <input class="form-control" type=""  placeholder="">
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Phone*</label>
                                    <div class="col-sm-8">
                                      <input class="form-control" type=""  placeholder="">
                                    </div>
                                  </div>
                                </form>
                              </div>
                            </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-light" data-dismiss="modal">Cancle</button>
                            <button type="button" class="btn btn-success">Confirm</button>
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
</div>
</section>
</div>
</div>


@endsection


@section('scripts')
<script>
  $(document).ready(function() {
    $('.datatables_all').dataTable();            
  } );
</script>
@endsection