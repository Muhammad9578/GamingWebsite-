<style >
  .fonts-for-btn button{
    font-size: 10px;

  }
  .table-class-sty th,.table-class-sty td{
    vertical-align: unset!important;
  }
  .model-dialoge-style{
    max-width: 880px!important;
  }
  .model-dialoge-style3{
    max-width: 1050px!important;
  }
</style>
@extends('layout')
@section('title')
Member Group
@endsection
@section('content')
<div class="right_col" role="main">
  
    <div class="page-title">
      <div class="title_left">
        <h3>@yield('title')</h3>
      </div>

    </div>
    <section class=" bg-white">
      <div class="container border p-3">
        <div class="row py-4">
          <div class="col-md-4 ">
            <div class=" row">
              <label class="col-sm-4 ">Active</label>
              <div class="col-sm-8">
                <select class="form-control">
                  <option>All</option>
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                </select>
              </div>


            </div>
          </div>
        </div>
        
        <div class="row py-3">
          <div class="col-md-12  d-flex justify-content-around border-top py-3">


            <div class="">
              <button type="reset" class="btn btn-success">
                <i class="fa fa-search" aria-hidden="true">  Search</i>
              </button>                             
            </div>
            <div class="">
              <button type="submit" class="btn btn-success" data-toggle="modal" data-target="#add-group-mem">
                <i class="fa fa-plus-circle pr-2" aria-hidden="true" >  Add</i>
              </button>
              <!--              --------------------------------- -->

              <!-- Modal -->
              <div class="modal fade" id="add-group-mem" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog model-dialoge-style" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Create Groups</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <div class="row">
                        <div class="col-md-10 m-auto">
                          <form>
                            <div class="form-group row">
                              <label class="col-sm-4 col-form-label">Code*</label>
                              <div class="col-sm-8">
                                <input type="text"  class="form-control">
                              </div>
                            </div>

                            <div class="form-group row">
                              <label class="col-sm-4 col-form-label">Name*</label>
                              <div class="col-sm-8">
                                <input type="text"  class="form-control">
                              </div>
                            </div>

                            <div class="form-group row">
                              <label class="col-sm-4 col-form-label">Level*</label>
                              <div class="col-sm-8">
                                <select class="form-control" >
                                  <option>1</option>
                                  <option>2</option>
                                  <option>3</option>
                                  <option>4</option>
                                  <option>5</option>
                                </select>
                              </div>
                            </div>

                            <div class="form-group row">
                              <label class="col-sm-4 col-form-label">Group Logo*</label>
                              <div class="col-sm-8">
                                <input type="file" class="form-control-file" >
                              </div>
                            </div>

                            <div class="form-group row">
                              <label class="col-sm-4 col-form-label">Default</label>
                              <div class="col-sm-8 d-flex align-items-center">
                                <input class="" type="checkbox" >
                              </div>
                            </div>

                            <div class="form-group row">
                              <label class="col-sm-4 col-form-label">Active</label>
                              <div class="col-sm-8 d-flex align-items-center">
                                <input class="" type="checkbox" >
                              </div>
                            </div>

                            <div class="form-group row">
                              <label class="col-sm-4 col-form-label">Sequence*</label>
                              <div class="col-sm-8">
                                <input type="text"  class="form-control">
                              </div>
                            </div>

                            <div class="form-group row">
                              <label class="col-sm-4 col-form-label">Remark</label>
                              <div class="col-sm-8">
                                <input type="text"  class="form-control">
                              </div>
                            </div>

                          </form>
                        </div>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
                      <button type="button" class="btn btn-success">Save</button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- ----------------------------------------------------- -->


            </div>                
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-sm-12">
            <div class="card-box table-responsive">

              <table id="datatable" class="table table-striped table-bordered">
                <thead class="table-bordered table-dark">
                  <tr>
                    <th>ID</th>
                    <th>code</th>
                    <th>Name</th>
                    <th>Level</th>
                    <th>Default </th>
                    <th>Active</th>
                    <th>Sequence </th>
                    <th>Rank </th>
                    <th>Remark</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Tiger Nixon</td>
                    <td>System Architect</td>
                    <td><span class="badge badge-primary">Edinburgh</span></td>
                    <td><span class="badge badge-success">VIP</span></td>
                    <td>No</td>
                    <td>Active</td>
                    <td>5</td>
                    <td></td>
                    <td></td>
                    <td class="d-flex">
                      <button class="btn btn-primary" data-toggle="modal" data-target="#edit-group-mem"><i class="fa fa-edit"></i></button>

                      <!-- Modal -->
                      <div class="modal fade" id="edit-group-mem" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog model-dialoge-style3" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Edit Groups</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <div class="row">
                                <div class="col-md-12 m-auto">
                                  <form>
                                    <div class="form-group row">
                                      <label class="col-sm-4 col-form-label">Code*</label>
                                      <div class="col-sm-8">
                                        <input type="text"  class="form-control">
                                      </div>
                                    </div>

                                    <div class="form-group row">
                                      <label class="col-sm-4 col-form-label">Name*</label>
                                      <div class="col-sm-8">
                                        <input type="text"  class="form-control">
                                      </div>
                                    </div>

                                    <div class="form-group row">
                                      <label class="col-sm-4 col-form-label">Level*</label>
                                      <div class="col-sm-8">
                                        <select class="form-control" >
                                          <option>1</option>
                                          <option>2</option>
                                          <option>3</option>
                                          <option>4</option>
                                          <option>5</option>
                                        </select>
                                      </div>
                                    </div>

                                    <div class="form-group row">
                                      <label class="col-sm-4 col-form-label">Group Logo*</label>
                                      <div class="col-sm-8">
                                        <input type="file" class="form-control-file" >
                                      </div>
                                    </div>

                                    <div class="form-group row">
                                      <label class="col-sm-4 col-form-label">Default</label>
                                      <div class="col-sm-8 d-flex align-items-center">
                                        <input class="" type="checkbox" >
                                      </div>
                                    </div>

                                    <div class="form-group row">
                                      <label class="col-sm-4 col-form-label">Active</label>
                                      <div class="col-sm-8 d-flex align-items-center">
                                        <input class="" type="checkbox" >
                                      </div>
                                    </div>

                                    <div class="form-group row">
                                      <label class="col-sm-4 col-form-label">Sequence*</label>
                                      <div class="col-sm-8">
                                        <input type="text"  class="form-control">
                                      </div>
                                    </div>

                                    <div class="form-group row">
                                      <label class="col-sm-4 col-form-label">Remark</label>
                                      <div class="col-sm-8">
                                        <input type="text"  class="form-control">
                                      </div>
                                    </div>



                                    <div class="row">
                                      <div class="col-md-3 d-flex justify-content-between align-items-center">

                                        <p class="mb-0"><small>VND Withrawal Limitation:</small></p>
                                        <button class="btn btn-light">unset</button>

                                      </div>
                                      <div class="col-md-3 d-flex align-items-center">

                                        <div class="row ">
                                          <label class="col-md-4 col-form-label"><small>Minimum</small></label>
                                          <div class="col-md-8">
                                            <input type="text"  class="form-control" >
                                          </div>
                                        </div>
                                      </div>

                                      <div class="col-md-3 d-flex align-items-center">

                                        <div class=" row">
                                          <label class="col-md-4 col-form-label"><small>Maximum</small></label>
                                          <div class="col-md-8">
                                            <input type="text"  class="form-control" >
                                          </div>
                                        </div>
                                      </div>

                                      <div class="col-md-3 d-flex align-items-center">

                                        <div class=" row">
                                          <label class="col-md-4 col-form-label"><small>Daily Maximum</small></label>

                                          <div class="col-md-8 d-flex align-items-center">
                                            <input type="text"  class="form-control" >
                                          </div>
                                        </div>


                                      </div>


                                    </div>

                                    <div class="row">
                                      <div class="col-md-3 d-flex justify-content-between align-items-center">

                                        <p class="mb-0"><small>MYR Withrawal Limitation:</small></p>
                                        <button class="btn btn-light">unset</button>

                                      </div>
                                      <div class="col-md-3 d-flex align-items-center">

                                        <div class="row ">
                                          <label class="col-md-4 col-form-label"><small>Minimum</small></label>
                                          <div class="col-md-8">
                                            <input type="text"  class="form-control" >
                                          </div>
                                        </div>
                                      </div>

                                      <div class="col-md-3 d-flex align-items-center">

                                        <div class=" row">
                                          <label class="col-md-4 col-form-label"><small>Maximum</small></label>
                                          <div class="col-md-8">
                                            <input type="text"  class="form-control" >
                                          </div>
                                        </div>
                                      </div>

                                      <div class="col-md-3 d-flex align-items-center">

                                        <div class=" row">
                                          <label class="col-md-4 col-form-label"><small>Daily Maximum</small></label>

                                          <div class="col-md-8 d-flex align-items-center">
                                            <input type="text"  class="form-control" >
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-md-3 d-flex justify-content-between align-items-center">

                                        <p class="mb-0"><small>THB Withrawal Limitation:</small></p>
                                        <button class="btn btn-light">unset</button>

                                      </div>
                                      <div class="col-md-3 d-flex align-items-center">

                                        <div class="row ">
                                          <label class="col-md-4 col-form-label"><small>Minimum</small></label>
                                          <div class="col-md-8">
                                            <input type="text"  class="form-control" >
                                          </div>
                                        </div>
                                      </div>

                                      <div class="col-md-3 d-flex align-items-center">

                                        <div class=" row">
                                          <label class="col-md-4 col-form-label"><small>Maximum</small></label>
                                          <div class="col-md-8">
                                            <input type="text"  class="form-control" >
                                          </div>
                                        </div>
                                      </div>

                                      <div class="col-md-3 d-flex align-items-center">

                                        <div class=" row">
                                          <label class="col-md-4 col-form-label"><small>Daily Maximum</small></label>

                                          <div class="col-md-8 d-flex align-items-center">
                                            <input type="text"  class="form-control" >
                                          </div>
                                        </div>


                                      </div>


                                    </div>
                                    <div class="row">
                                      <div class="col-md-3 d-flex justify-content-between align-items-center">

                                        <p class="mb-0"><small>SGD Withrawal Limitation:</small></p>
                                        <button class="btn btn-light">unset</button>

                                      </div>
                                      <div class="col-md-3 d-flex align-items-center">

                                        <div class="row ">
                                          <label class="col-md-4 col-form-label"><small>Minimum</small></label>
                                          <div class="col-md-8">
                                            <input type="text"  class="form-control" >
                                          </div>
                                        </div>
                                      </div>

                                      <div class="col-md-3 d-flex align-items-center">

                                        <div class=" row">
                                          <label class="col-md-4 col-form-label"><small>Maximum</small></label>
                                          <div class="col-md-8">
                                            <input type="text"  class="form-control" >
                                          </div>
                                        </div>
                                      </div>

                                      <div class="col-md-3 d-flex align-items-center">

                                        <div class=" row">
                                          <label class="col-md-4 col-form-label"><small>Daily Maximum</small></label>

                                          <div class="col-md-8 d-flex align-items-center">
                                            <input type="text"  class="form-control" >
                                          </div>
                                        </div>


                                      </div>


                                    </div>

                                  </form>
                                </div>
                              </div>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
                              <button type="button" class="btn btn-success">Save</button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- ----------------------------------------------------- -->



                      <button class="btn btn-info"><i class="fa fa-university"data-toggle="modal" data-target="#Bank-member"></i></button>

                      <!----------------------------------------------------------- -->

                      <!-- Modal -->
                      <div class="modal fade" id="Bank-member" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog model-dialoge-style3" id="" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Select Bank</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <div class="row ">
                                <div class="col-md-3">
                                  <div class=" row">
                                    <label  class="col-sm-5 col-form-label"><small>Currency</small></label>
                                    <div class="col-sm-7">
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
                                    <label class="col-sm-5 col-form-label"><small>Merchant Bank Name</small></label>
                                    <div class="col-sm-7">
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
                                    <label  class="col-sm-5 col-form-label"><small>Purpose</small></label>
                                    <div class="col-sm-7">
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
                                    <label class="col-sm-5 col-form-label"><small>Type</small></label>
                                    <div class="col-sm-7">
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

                              </div>

                              <div class="row py-3">
                                <div class="col-md-12 border-top py-3">
                                  <div class="">
                                    <button class="btn btn-primary">
                                      Clear
                                    </button>
                                  </div>

                                  <div class="overflow-auto">
                                    <table class="table border datatables_all">
                                      <thead>
                                        <tr class="bg-dark text-white">
                                          <th scope="col">Select</th>
                                          <th scope="col">Bank Name</th>
                                          <th scope="col">Account Holder</th>
                                          <th scope="col">Account Number</th>
                                          <th scope="col">Bank Branch</th>
                                          <th scope="col">Purpose</th>
                                          <th scope="col">Type</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <td>  <input type="checkbox"></td>
                                        <td> abc</td>
                                        <td>  abc</td>
                                        <td>  123</td>
                                        <td>  xyz</td>
                                        <td>  XYZ</td>
                                        <td>  Bank</td>
                                      </tbody>
                                    </table>
                                  </div>
                                </div>
                              </div>


                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
                              <button type="button" class="btn btn-success">Save</button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- -------------------------------------------------------------------- -->
                      <button class="btn btn-success"data-toggle="modal" data-target="#Rebate-setting"><i class="fa fa-cog"></i></button>

                      <!----------------------------------------------------------- -->

                      <!-- Modal -->
                      <div class="modal fade" id="Rebate-setting" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog model-dialoge-style3" id="" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Rebate Setting</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <div class="row ">
                                <div class="col-md-3">
                                  <div class=" row">
                                    <label  class="col-sm-5 col-form-label"><small>Provider</small></label>
                                    <div class="col-sm-7">
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
                                    <label  class="col-sm-5 col-form-label"><small>Product</small></label>
                                    <div class="col-sm-7">
                                      <select class="form-control">
                                        <option>Live</option>
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
                                    <label class="col-sm-5 col-form-label"><small>Currency</small></label>
                                    <div class="col-sm-7">
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

                              </div>

                              <div class="row py-3">
                                <div class="col-md-12 border-top py-3">
                                  <div class="">
                                    <button class="btn btn-primary">
                                      Clear
                                    </button>
                                  </div>

                                  <div class="overflow-auto">
                                    <table class="table border datatables_all">
                                      <thead>
                                        <tr class="bg-dark text-white">
                                          <th scope="col">#</th>
                                          <th scope="col">Provider</th>
                                          <th scope="col">Product</th>
                                          <th scope="col">Currency</th>
                                          <th scope="col">Rebate</th>
                                          
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <td>1</td>
                                        <td>ab</td>
                                        <td>live</td>
                                        <td>MYR</td>
                                        <td>   <select class="form-control" >
																			      <option>1</option>
																			      <option>2</option>
																			      <option>3</option>
																			      <option>4</option>
																			      <option>5</option>
																			    </select></td>

                                      </tbody>
                                    </table>
                                  </div>
                                </div>
                              </div>


                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
                              <button type="button" class="btn btn-success">Save</button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- -------------------------------------------------------------------- -->

                      <button class="btn btn-primary"><i class="fa fa-cog" data-toggle="modal" data-target="#Provider-Bet-limit"></i></button>
                         

                      <!----------------------------------------------------------- -->

                      <!-- Modal -->
                      <div class="modal fade" id="Provider-Bet-limit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog model-dialoge-style3" id="" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Provider Bet Limit Settings</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <div class="row ">
                                <div class="col-md-3">
                                  <div class=" row">
                                    <label  class="col-sm-5 col-form-label"><small>Currency</small></label>
                                    <div class="col-sm-7">
                                      <select class="form-control">
                                        <option>VND</option>
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
                                    <label  class="col-sm-5 col-form-label"><small>Provider</small></label>
                                    <div class="col-sm-7">
                                      <select class="form-control">
                                        <option>CMD</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                      </select>
                                    </div>
                                  </div>    
                                </div>



                              </div>

                              <div class="row py-3">
                                <div class="col-md-12 border-top py-3">
                                  <div class="">
                                    <button class="btn btn-primary">
                                      Clear
                                    </button>
                                  </div>

                                  <div class="overflow-auto">
                                    <table class="table border datatables_all">
                                      <thead>
                                        <tr class="bg-dark text-white">
                                          <th scope="col">Sport Type</th>
                                          <th scope="col">Min Bet</th>
                                          <th scope="col">Max Bet</th>
                                          <th scope="col">Max Bet Per Month</th>
                                                                                    
                                        </tr>
                                      </thead>
                                      <tbody>
                                      	<tr>
                                        <td class="">Soccer</td>
                                        <td>
                                        	<div class="row">
                                        	<div class="col-md-12 d-flex">
                                        		<button class="btn btn-light border m-0">1<=</button>
                                        		<input type="" name="" class="form-control w-50">
                                        		<button class="btn btn-light border m-0"><=320000</button>
                                        	</div>
                                        </div>
                                      </td>
                                        <td><div class="row">
                                        	<div class="col-md-12 d-flex">
                                        		<button class="btn btn-light border m-0">1<=</button>
                                        		<input type="" name="" class="form-control w-50">
                                        		<button class="btn btn-light border m-0"><=320000</button>
                                        	</div>
                                        </div></td>
                                        <td><div class="row">
                                        	<div class="col-md-12 d-flex">
                                        		<button class="btn btn-light border m-0">320000<=</button>
                                        		<input type="" name="" class="form-control w-50">
                                        		<button class="btn btn-light border m-0"><=640000</button>
                                        	</div>
                                        </div></td>
                                        </tr>

                                        <tr>
                                        <td class="">PAR</td>
                                        <td>
                                        	<div class="row">
                                        	<div class="col-md-12 d-flex">
                                        		<button class="btn btn-light border m-0">1<=</button>
                                        		<input type="" name="" class="form-control w-50">
                                        		<button class="btn btn-light border m-0"><=320000</button>
                                        	</div>
                                        </div>
                                      </td>
                                        <td><div class="row">
                                        	<div class="col-md-12 d-flex">
                                        		<button class="btn btn-light border m-0">1<=</button>
                                        		<input type="" name="" class="form-control w-50">
                                        		<button class="btn btn-light border m-0"><=320000</button>
                                        	</div>
                                        </div>
                                      </td>
                                      <td></td>
                                        
                                        </tr>
                                        <tr>
                                        <td class="">Other Sports</td>
                                        <td>
                                        	<div class="row">
                                        	<div class="col-md-12 d-flex">
                                        		<button class="btn btn-light border m-0">1<=</button>
                                        		<input type="" name="" class="form-control w-50">
                                        		<button class="btn btn-light border m-0"><=320000</button>
                                        	</div>
                                        </div>
                                      </td>
                                        <td><div class="row">
                                        	<div class="col-md-12 d-flex">
                                        		<button class="btn btn-light border m-0">1<=</button>
                                        		<input type="" name="" class="form-control w-50">
                                        		<button class="btn btn-light border m-0"><=320000</button>
                                        	</div>
                                        </div></td>
                                        <td><div class="row">
                                        	<div class="col-md-12 d-flex">
                                        		<button class="btn btn-light border m-0">320000<=</button>
                                        		<input type="" name="" class="form-control w-50">
                                        		<button class="btn btn-light border m-0"><=640000</button>
                                        	</div>
                                        </div></td>
                                        </tr>

                                      </tbody>
                                    </table>
                                  </div>
                                </div>
                              </div>


                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
                              <button type="button" class="btn btn-success">Save</button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- -------------------------------------------------------------------- -->

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

  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="form-label-left input_mask">
          <div class="form-group row">
            <label class="control-label col-md-3 col-sm-3">Member</label>
            <div class="col-md-9 col-sm-9">
              <input type="text" class="form-control">
            </div>
          </div>                      
          <div class="form-group row">
            <label class="control-label col-md-3 col-sm-3">Member Bank</label>
            <div class="col-md-9 col-sm-9">
              <select class="form-control">
                <option>Choose </option>
                <option>Option one</option>
                <option>Option two</option>
                <option>Option three</option>
                <option>Option four</option>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label class="control-label col-md-3 col-sm-3">Bank Name</label>
            <div class="col-md-9 col-sm-9">
              <input type="text" class="form-control">
            </div>
          </div>  

          <div class="form-group row">
            <label class="control-label col-md-3 col-sm-3">Bank Branch</label>
            <div class="col-md-9 col-sm-9">
              <input type="text" class="form-control">
            </div>
          </div> 

          <div class="form-group row">
            <label class="control-label col-md-3 col-sm-3">Account Name</label>
            <div class="col-md-9 col-sm-9">
              <input type="text" class="form-control">
            </div>
          </div>                        
          <div class="form-group row">
            <label class="control-label col-md-3 col-sm-3">Account No</label>
            <div class="col-md-9 col-sm-9">
              <input type="text" class="form-control">
            </div>
          </div>                         
          <div class="form-group row">
            <label class="control-label col-md-3 col-sm-3">Amount</label>
            <div class="col-md-9 col-sm-9">
              <input type="text" class="form-control">
            </div>
          </div> 
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>
</div>
@endsection

@section('scripts')
<script>
  var today = new Date(new Date().getFullYear(), new Date().getMonth(), new Date().getDate());
  $('.startDate').datepicker({
    uiLibrary: 'bootstrap4',
    iconsLibrary: 'fontawesome',
    minDate: today,
    maxDate: function () {
      return $('.endDate').val();
    }
  });
  $('.endDate').datepicker({
    uiLibrary: 'bootstrap4',
    iconsLibrary: 'fontawesome',
    minDate: function () {
      return $('.startDate').val();
    }
  });
</script>
@endsection