@extends('layout')
@section('title')
Compliance Roadbook
@endsection
@section('content')
<div class="right_col" role="main">


<!--  -->
<h2>
  card  body 1
</h2>
<!--  -->
<div class="card-body">
  <form method="...">
    <div class="row">
      <div class="col-md-4">
        <div class="form-group row">
          <label class="col-sm-4 col-form-label">Start</label>
          <div class="col-sm-8">
          <input class="form-control" type="date" placeholder="">
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="form-group row">
          <label class="col-sm-4 col-form-label">end</label>
          <div class="col-sm-8">
          <input class="form-control" type="date" placeholder="">
          </div>
        </div>
      </div>
      <div class="col-md-4"></div>
      <div class="col-md-4">
        <div class="form-group row">
          <label class="col-sm-4 col-form-label">Full Nmae</label>
          <div class="col-sm-8">
          <input class="form-control" type="text" placeholder="">
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="form-group row">
          <label class="col-sm-4 col-form-label">Remarks</label>
          <div class="col-sm-8">
          <input class="form-control" type="text" placeholder="">
          </div>
        </div>
      </div>
    </div>
    <div class="row py-2">
      <div class="col-md-12">
        <div class="d-flex justify-content-between p-2 mx-3 ">
          <div>
            <button type="reset " class="btn btn-primary py-1">Reset</button>
            <button class="btn btn-success py-1"><i class="fa fa-search"></i> Search</button>
          </div>
          <div>
            <button type="button" class="btn btn-primary  py-1">
              <i class="fa fa-file"></i> Export
            </button>
            <button type="button" class="btn btn-warning  py-1">
              <i class="fa fa-download"></i> Download
            </button>
            <button type="button" class="btn btn-success  py-1" data-toggle="modal" data-target="#registernameblacklist">
              <i class="fa fa-plus-circle"></i> Add
            </button>
          </div>
        </div>
      </div>
    </div>
  </form>
  <div class="row">
    <div class="col-md-12 overflow-auto">
      <table id="" class="table datatables_all table-striped table-bordered " cellspacing="0" width="100%">
        <thead class="thead-dark">
          <tr class="">
            <th scope="col"> ID</th>
            <th scope="col"> IP</th>
            <th scope="col">FingerPrint</th>
            <th scope="col">WishList</th>
            <th scope="col">Status</th>
            <th scope="col">Remarks</th>
            <th scope="col">Last Modified By</th>
            <th scope="col">Last Modified Date</th>
          </tr>
        </thead>
        <tbody>
        </tbody>
      </table>
    </div>
  </div>
</div>

<!--  -->
<h2>CATD BODY 2</h2>
<!--  -->

<div class="card-body">
                  <form method="...">
                    <div class="row">
                      <div class="col-md-4">
                        <div class="d-flex align-items-center">
                          <label class="mr-2">Merchent</label>
                          <select class="form-control">
                            <option>SELECT OPTION</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class=" d-flex align-items-center">
                          <label class="mr-2">Wishlist</label>
                          <select class="form-control p-2">
                            <option>SELECT OPTION</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-4 d-flex align-items-center">
                        <div class=" d-flex align-items-center">
                          <label class="mr-2">Status</label>
                          <select class="form-control p-2">
                            <option>SELECT OPTION</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="row py-2">
                      <div class="col-md-12">
                        <div class="d-flex justify-content-between p-2 mx-3 ">
                          <div>
                            <button type="reset " class="btn btn-primary py-1">Reset</button>
                            <button class="btn btn-success py-1"><i class="fa fa-search"></i> Search</button>
                          </div>
                          <div>
                            <button type="button" class="btn btn-primary  py-1">
                              <i class="fa fa-file"></i> Export
                            </button>
                            <button type="button" class="btn btn-warning  py-1">
                              <i class="fa fa-download"></i> Download
                            </button>
                            <button type="button" class="btn btn-success  py-1" data-toggle="modal" data-target="#memberrestrictionmodel">
                              <i class="fa fa-plus-circle"></i> Add
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </form>
                  <div class="row">
                    <div class="col-md-12 overflow-auto">
                      <table id="" class="table datatables_all table-striped table-bordered " cellspacing="0" width="100%">
                        <thead class="thead-dark">
                          <tr class="">
                            <th scope="col"> ID</th>
                            <th scope="col"> Country</th>
                            <th scope="col">Name</th>
                            <th scope="col">WishList</th>
                            <th scope="col">Status</th>
                            <th scope="col">Remarks</th>
                            <th scope="col">Last Modified By</th>
                          </tr>
                        </thead>
                        <tbody>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>

<h2>card body 3</h2>


<div class="card-body">
                  <form method="...">
                    <div class="row">
                      <div class="col-md-4">
                        <div class="d-flex align-items-center">
                          <label class="mr-2">Merchent</label>
                          <select class="form-control">
                            <option>SELECT OPTION</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class=" d-flex align-items-center">
                          <label class="mr-2">Login</label>
                          <input type="text" name="" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-4 d-flex align-items-center">
                        <div class=" d-flex align-items-center">
                          <label class="mr-2">Status</label>
                          <select class="form-control">
                            <option>SELECT OPTION</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="row py-2">
                      <div class="col-md-12">
                        <div class="d-flex justify-content-between p-2 mx-3 ">
                          <div>
                            <button type="reset " class="btn btn-primary py-1">Reset</button>
                            <button class="btn btn-success py-1"><i class="fa fa-search"></i> Search</button>
                          </div>
                          <div>
                            <button type="button" class="btn btn-primary  py-1">
                              <i class="fa fa-file"></i> Export
                            </button>
                            <button type="button" class="btn btn-warning  py-1">
                              <i class="fa fa-download"></i> Download
                            </button>
                            <button type="button" class="btn btn-success  py-1" data-toggle="modal" data-target="#memberrestrictionmodel">
                              <i class="fa fa-plus-circle"></i> Add
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </form>
                  <div class="row">
                    <div class="col-md-12 overflow-auto">
                      <table id="" class="table datatables_all table-striped table-bordered " cellspacing="0" width="100%">
                        <thead class="thead-dark">
                          <tr class="">
                            <th scope="col"> ID</th>
                            <th scope="col"> Login </th>
                            <th scope="col">Currency</th>
                            <th scope="col">Providers</th>
                            <th scope="col">Block deposit</th>
                            <th scope="col">Status</th>
                            <th scope="col">Remarks</th>
                            <th scope="col">Last Modified By</th>
                            <th scope="col">Last Modified Date</th>
                            <th scope="col">Action</th>

                          </tr>
                        </thead>
                        <tbody>
                            <td scope="col"> 1</td>
                            <td scope="col"> 
                              <span class="bg-primary py-1 px-2 text-white rounded"> 22dfsbydb </span>
                            </td>
                            <td scope="col">SGD</td>
                            <td scope="col">Providers</td>
                            <td scope="col"> No </td>
                            <td scope="col"><span class="bg-success text-white px-2 py-1 rounded"> Active </span></td>
                            <td scope="col">Remarks</td>
                            <td scope="col">LastModifiedby</td>
                            <td scope="col">LastModifieddate</td>
                            <td scope="col" class="d-flex">
                              <button class="btn btn-primary "><i class="fa  fa-edit"></i></button>
                              <button class="btn btn-danger "><i class="fa  fa-times"></i></button>
                            </td>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>

<!--  -->









  <div class="modal fade " id="" role="dialog">
    <div class=" modal-dialog ">
      <div class="modal-content">
        <div class="modal-header">
          <h4>Add or edit Country Restriction</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <table class="w-100 form-group">
            <tbody>
              <tr class="my-2">
                <td>Marchent</td>
                <td colspan="">
                   <select class="form-control w-100">
                    <option>Select any Option</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                  </select>
                </td>
              </tr>
              <tr class="my-2">
                <td>IP</td>
                <td colspan="">
                  <input type="text" name="Country" class="form-control">
                </td>
              </tr>
              <tr class="my-2">
                <td>Finger</td>
                <td colspan="">
                  <input type="text" name="name" class="form-control">
                </td>
              </tr>
              <tr class="my-2">
                <td>WishList</td>
                <td class="">
                  <input type="checkbox" name="wishlist" >
                </td>
              </tr>
              <tr class="my-2">
                <td>Status</td>
                <td class="">
                  <select class="form-control">
                    <option>Active</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                  </select>
                </td>
              </tr>
              <tr class="my-2">
                <td>Remarks</td>
                <td class="">
                  <textarea class="form-control" rows="4" placeholder="Remarks"></textarea>
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



    <div class="modal fade " id="memberrestrictionmodel" role="dialog">
    <div class=" modal-dialog cms_models">
      <div class="modal-content">
        <div class="modal-header">
          <h4>Add or edit Member Restriction</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <table class="w-100 form-group heading_align_left">
            <tbody>
              <tr class="my-2">
                <td>Marchent</td>
                <td colspan="">
                   <select class="form-control w-100">
                    <option>Select any Option</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                  </select>
                </td>
              </tr>
              <tr class="my-2">
                <td>Login</td>
                <td colspan="">
                  <input type="text" name="Country" class="form-control">
                </td>
              </tr>
              <tr class="my-2">
                <td>Blocked Deposit</td>
                <td colspan="">
                  <input type="text" name="Country" class="form-control">
                </td>
              </tr>
              <tr class="my-2">
                <td>Providers</td>
                <td colspan="">
                  <div class="border_light p-2">
                    <div class="d-flex align-items-center">
                      <input type="checkbox" name="" class="mr-2"> All
                    </div>
                    <div class="d-flex align-items-center">
                      <input type="checkbox" name="" class="mr-2"> AllBet (AB)
                    </div>
                    <div class="d-flex align-items-center">
                      <input type="checkbox" name="" class="mr-2"> ASIA Gaming (AG2)
                    </div>
                    <div class="d-flex align-items-center">
                      <input type="checkbox" name="" class="mr-2"> Virtual Sports Sports (BR)
                    </div>
                    <div class="d-flex align-items-center">
                      <input type="checkbox" name="" class="mr-2"> C Sports (CMD)
                    </div>
                  </div>
                </td>
              </tr>
              <tr class="my-2">
                <td>Block Game  Only</td>
                <td colspan="">
                  <div class="border_light p-2">
                    <div class="d-flex align-items-center">
                      <input type="checkbox" name="" class="mr-2"> All
                    </div>
                    <div class="d-flex align-items-center">
                      <input type="checkbox" name="" class="mr-2"> AllBet (AB)
                    </div>
                    <div class="d-flex align-items-center">
                      <input type="checkbox" name="" class="mr-2"> ASIA Gaming (AG2)
                    </div>
                    <div class="d-flex align-items-center">
                      <input type="checkbox" name="" class="mr-2"> Virtual Sports Sports (BR)
                    </div>
                    <div class="d-flex align-items-center">
                      <input type="checkbox" name="" class="mr-2"> C Sports (CMD)
                    </div>
                  </div>
                </td>
              </tr>
              <tr class="my-2">
                <td>Block  Transfer Only</td>
                <td colspan="">
                  <div class="border_light p-2">
                    <div class="d-flex align-items-center">
                      <input type="checkbox" name="" class="mr-2"> All
                    </div>
                    <div class="d-flex align-items-center">
                      <input type="checkbox" name="" class="mr-2"> AllBet (AB)
                    </div>
                    <div class="d-flex align-items-center">
                      <input type="checkbox" name="" class="mr-2"> ASIA Gaming (AG2)
                    </div>
                    <div class="d-flex align-items-center">
                      <input type="checkbox" name="" class="mr-2"> Virtual Sports Sports (BR)
                    </div>
                    <div class="d-flex align-items-center">
                      <input type="checkbox" name="" class="mr-2"> C Sports (CMD)
                    </div>
                  </div>
                </td>
              </tr>
              <tr class="my-2">
                <td>Finger</td>
                <td colspan="">
                  <input type="text" name="name" class="form-control">
                </td>
              </tr>
              <tr class="my-2">
                <td>WishList</td>
                <td class="">
                  <input type="checkbox" name="wishlist" >
                </td>
              </tr>
              <tr class="my-2">
                <td>Status</td>
                <td class="">
                  <select class="form-control">
                    <option>Active</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                  </select>
                </td>
              </tr>
              <tr class="my-2">
                <td>Remarks</td>
                <td class="">
                  <textarea class="form-control" rows="4" placeholder="Remarks"></textarea>
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
</div>


<!-- member model -->

    <div class="modal fade " id="registernameblacklist" role="dialog">
    <div class=" modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4>Add or edit Member Restriction</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <div class="form-group row">
            <label class="col-sm-4 col-form-label">Full Name</label>
            <div class="col-sm-8">
              <input class="form-control" type="" placeholder="">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-4 col-form-label"> Remarks </label>
            <div class="col-sm-8">
              <input class="form-control" type="" placeholder="">
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-white" data-dismiss="modal"><i class="fa fa-ban mr-1"></i>Cancel</button>
          <button type="button" class="btn btn-primary">Save</button>
        </div>
      </div>
    </div>
  </div>
</div>



</div>

@endsection

@section('scripts')
<script>
</script>
@endsection