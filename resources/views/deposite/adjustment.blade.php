@extends('layout')
@section('title')
Adjustment
@endsection
@section('content')
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>@yield('title')</h3>
            </div>

        </div>
        <section class="bg-white">

            <div class="container border p-3">


                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group row">

                            <div class="col-md-12 col-sm-12">
                                <label class="control-label col-md-12 col-sm-12"><strong>Login </strong>
                                </label>
                                <input type="text" class="form-control">
                            </div>
                        </div>

                    </div>
                    <div class="col-md-3">
                        <div class="form-group row">

                            <div class="col-md-12 col-sm-12">
                                <label class="control-label col-md-12 col-sm-12"><strong>Name</strong>
                                </label>
                                <input type="text" class="form-control">
                            </div>
                        </div>

                    </div>
                    <div class="col-md-3">
                        <div class="form-group row">

                            <div class="col-md-12 col-sm-12">
                                <label class="control-label col-md-12 col-sm-12"><strong>Affiliate</strong>
                                </label>
                                <input type="text" class="form-control">
                            </div>
                        </div>

                    </div>
                </div>


<div class="row  ">
                    <div class="col-lg-3 d-flex">
                      <div class="row mr-2">
                        <label class="col-sm-12 d-flex align-items-center ">Start*</label>
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
                <div class="d-flex  fonts-for-btn">
                  <button type="button" class="btn btn-light small m-0 border rounded-0">All</button>
                  <button type="button" class="btn btn-light small m-0 border rounded-0">Today</button>
                  <button type="button" class="btn btn-light small m-0 border rounded-0">Yesterday</button>
                  <button type="button" class="btn btn-light small m-0 border rounded-0">This Week</button>
              </div>
              <div class="d-flex fonts-for-btn">
                  <button type="button" class="btn btn-light small m-0 border rounded-0">Last Week</button>
                  <button type="button" class="btn btn-light small m-0 border rounded-0">This Month</button>
                  <button type="button" class="btn btn-light small m-0 border rounded-0">Last Month</button>     
              </div>
          </div>

      </div>
  </div>


  <div class="row pt-3">

    <div class="col-md-6">
        <div class="form-group row">

            <div class="col-md-12 col-sm-12">
                <label class="control-label col-md-12 col-sm-12"><strong>Type</strong>
                </label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                    value="option1">
                    <label class="form-check-label" for="inlineCheckbox1">Wallet</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2"
                    value="option2">
                    <label class="form-check-label" for="inlineCheckbox2">Bonus</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2"
                    value="option2">
                    <label class="form-check-label" for="inlineCheckbox2">Rebate</label>
                </div>


            </div>
        </div>

    </div>
</div>
<hr>

<div class="row">
    <div class="col-md-3">
        <div class="form-group">

            <button type="reset" class="btn btn-primary">
                <i class="fa fa-times" aria-hidden="true"> Cancel</i>
            </button>
            <button type="reset" class="btn btn-success">
                <i class="fa fa-search" aria-hidden="true"> Serch</i>
            </button>
        </div>
    </div>
    <div class="col-md-2"></div>



    <div class="col-md-6">

        <button type="button" data-toggle="modal" data-target="#exampleModal"
        class="btn btn-success">
        Adjust Bonus Rebate
    </button>
    <button type="button" data-toggle="modal" data-target="#exampleModal2"
    class="btn btn-success">
    Adjust Wallet
</button>
<button type="button" class="btn btn-danger" data-toggle="modal"
data-target=".bs-example-modal-lg">
Auto Wallet Adjustment
</button>
<button type="submit" class="btn btn-success">
    <i class="fa fa-file-word-o" aria-hidden="true"> Export</i>
</button>
<button type="reset" class="btn btn-danger">
    <i class="fa fa-arrow-circle-down" aria-hidden="true"> Download</i>
</button>


</div>
</div>
<hr>

<div class="row">
    <div class="col-sm-12">
        <div class="card-box table-responsive">

            <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                <thead class="table-bordered table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Login</th>
                        <th>Name</th>
                        <th>Affiliate</th>
                        <th>Currency</th>
                        <th>Amount</th>
                        <th>Adjustment Type</th>
                        <th>Adjustment Form</th>
                        <th>Status</th>
                        <th>Remark</th>
                        <th>Handler</th>
                        <th>Process Time</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Tiger Nixon</td>
                        <td>System Architect</td>
                        <td><span class="badge badge-primary">Edinburgh</span></td>
                        <td><span class="badge badge-success">61</span></td>
                        <td>2011/04/25</td>
                        <td>$320,800</td>
                        <td><span class="badge badge-secondary">$320,800</span></td>
                        <td>$320,800</td>
                        <td>$320,800</td>
                        <td>$320,800</td>
                        <td>$320,800</td>
                        <td>$320,800</td>

                    </tr>
                    <tr>
                        <td>Tiger Nixon</td>
                        <td>System Architect</td>
                        <td><span class="badge badge-primary">Edinburgh</span></td>
                        <td><span class="badge badge-success">61</span></td>
                        <td>2011/04/25</td>
                        <td>$320,800</td>
                        <td><span class="badge badge-secondary">$320,800</span></td>
                        <td>$320,800</td>
                        <td>$320,800</td>
                        <td>$320,800</td>
                        <td>$320,800</td>
                        <td>$320,800</td>

                    </tr>
                    <tr>
                        <td>Tiger Nixon</td>
                        <td>System Architect</td>
                        <td><span class="badge badge-primary">Edinburgh</span></td>
                        <td><span class="badge badge-success">61</span></td>
                        <td>2011/04/25</td>
                        <td>$320,800</td>
                        <td><span class="badge badge-secondary">$320,800</span></td>
                        <td>$320,800</td>
                        <td>$320,800</td>
                        <td>$320,800</td>
                        <td>$320,800</td>
                        <td>$320,800</td>

                    </tr>




                </tbody>
            </table>
        </div>
    </div>
</div>

</div>
</section>


</div>
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
                    <label class="control-label col-md-3 col-sm-3">Account</label>
                    <div class="col-md-9 col-sm-9">
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-md-3 col-sm-3">Type</label>
                    <div class="col-md-9 col-sm-9">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                            <label class="form-check-label" for="inlineRadio1">1</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                            <label class="form-check-label" for="inlineRadio2">2</label>
                        </div>
                        
                    </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-md-3 col-sm-3">Remark</label>
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

            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
        </div>
    </div>
</div>
</div>    
<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                    <label class="control-label col-md-3 col-sm-3">current</label>
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
                <div class="form-group row">
                    <label class="control-label col-md-3 col-sm-3">Bank</label>
                    <div class="col-md-9 col-sm-9">
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-md-3 col-sm-3">Type</label>
                    <div class="col-md-9 col-sm-9">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                            <label class="form-check-label" for="inlineRadio1">1</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                            <label class="form-check-label" for="inlineRadio2">2</label>
                        </div>                                 
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                            <label class="form-check-label" for="inlineRadio2">2</label>
                        </div>
                        
                    </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-md-3 col-sm-3">Remark</label>
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

            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
        </div>
    </div>
</div>
</div>  
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
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
                        <label class="control-label col-md-3 col-sm-3">import</label>
                        <div class="col-md-9 col-sm-9">
                            <input type="file" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3">remark</label>
                        <div class="col-md-9 col-sm-9">
                            <input type="text" class="form-control">
                        </div>
                    </div>                       
                    <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3">Remark</label>
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

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="card-box table-responsive">

                        <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                            <thead class="table-bordered table-dark">
                                <tr>

                                    <th>Login</th>
                                    <th>Currency</th>
                                    <th>Amount</th>
                                    <th>Remark</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    <td><span class="badge badge-primary">Edinburgh</span></td>
                                    <td><span class="badge badge-success">61</span></td>

                                </tr>
                                <tr>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    <td><span class="badge badge-primary">Edinburgh</span></td>
                                    <td><span class="badge badge-success">61</span></td>


                                </tr>
                                <tr>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    <td><span class="badge badge-primary">Edinburgh</span></td>
                                    <td><span class="badge badge-success">61</span></td>

                                </tr>




                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>










</div>
<div class="clearfix"></div>
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