@extends('layout')
@section('title')
Create or edit a Promotion
@endsection
@section('content')
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>@yield('title')</h3>
            </div>

        </div>
        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-4">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Basic Info</h2>

                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br />
                        <form class="form-label-left input_mask">

                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3">Merchant</label>
                                <div class="col-md-9 col-sm-9">
                                    <select class="form-control">
                                        <option>Choose option</option>
                                        <option>Option one</option>
                                        <option>Option two</option>
                                        <option>Option three</option>
                                        <option>Option four</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3">Bonus Type</label>
                                <div class="col-md-9 col-sm-9">
                                    <select class="form-control">
                                        <option>Choose option</option>
                                        <option>Option one</option>
                                        <option>Option two</option>
                                        <option>Option three</option>
                                        <option>Option four</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3">Bonus Name</label>
                                <div class="col-md-9 col-sm-9">
                                    <button type="reset" class="btn btn-success">
                                        <i class="fa fa-edit" aria-hidden="true"> Edit</i>
                                    </button>
                                </div>
                            </div>

                            <div class="form-group row">

                                <div class="col-md-9 col-sm-9">
                                    <label class="col-form-label col-md-3 col-sm-3">Code
                                    </label>
                                    <div class="col-md-9 col-sm-9">
                                        <input type="text" class="form-control" placeholder=" Input" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3">Linked Promotion</label>
                                <div class="col-md-9 col-sm-9">
                                    <button type="reset" class="btn btn-primary">
                                        <i class="fa fa-edit" aria-hidden="true"> select Promotion</i>
                                    </button>
                                </div>
                            </div>
                        </form>
                        <div class="ln_solid"></div>
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Star Rating</h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <form class="form-label-left input_mask">

                                    <div class="form-group row">
                                        <label class="control-label col-md-3 col-sm-3 text-white"
                                            style="background-color: rgb(50, 205, 192)">Provider</label>
                                        <div class="col-md-9 col-sm-9">
                                            <select class="select2_multiple form-control" multiple="multiple">
                                                <option>Choose option</option>
                                                <option>Option one</option>
                                                <option>Option two</option>
                                                <option>Option three</option>
                                                <option>Option four</option>
                                                <option>Option five</option>
                                                <option>Option six</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label col-md-8 col-sm-8 text-white"
                                            style="background-color: rgb(50, 205, 192)">Limit Provider Transfer
                                            Out</label>
                                        <div class="col-md-4 col-sm-4">
                                            <div class="radio">
                                                <label><br>
                                                    <input type="checkbox" value="option1" id="optionsRadios1"
                                                        name="optionsRadios" />

                                                </label>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label col-md-8 col-sm-8 text-white"
                                            style="background-color: rgb(50, 205, 192)">Limit Provider Transfer
                                            In</label>
                                        <div class="col-md-4 col-sm-4">
                                            <div class="radio">
                                                <label><br>
                                                    <input type="checkbox" value="option1" id="optionsRadios1"
                                                        name="optionsRadios" />

                                                </label>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label col-md-3 col-sm-3 text-white"
                                            style="background-color: rgb(50, 205, 192)">Bonus Rate(e.g 1=100%) </label>
                                        <div class="col-md-9 col-sm-9">
                                            <div class="radio">
                                                <label>
                                                    <input type="text" class="form-control" name="optionsRadios" />

                                                </label>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label col-md-3 col-sm-3 text-white"
                                            style="background-color: rgb(50, 205, 192)">Auto Unlock</label>
                                        <div class="col-md-9 col-sm-9">
                                            <div class="radio">
                                                <label><br>
                                                    <input type="checkbox" value="option1" id="optionsRadios1"
                                                        name="optionsRadios" />

                                                </label>
                                            </div>

                                        </div>
                                    </div>
                                    <h5 class="text-red">Please Select Target type before select provider</h5>
                                </form>

                            </div>
                        </div>

                    </div>
                </div>


            </div>
            <div class="col-md-4">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Basic Setting </h2>

                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br />
                        <form class="form-label-left input_mask">

                            <div class="form-group row">
                                <label class="control-label col-md-3 col-sm-3 text-white"
                                    style="background-color: rgb(50, 205, 192)">Valid Form</label>
                                <div class="col-md-9 col-sm-9">
                                    <input class="startDate" width="276" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3 col-sm-3 text-white"
                                    style="background-color: rgb(50, 205, 192)">Valid Till
                                </label>
                                <div class="col-md-9 col-sm-9">
                                    <input class="endDate" width="276" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3 col-sm-3 text-white"
                                    style="background-color: rgb(50, 205, 192)">Validity</label>
                                <div class="col-md-9 col-sm-9">
                                    <input type="text" class="form-control" placeholder="" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3 col-sm-3 text-white"
                                    style="background-color: rgb(50, 205, 192)">Date Of Birth <span
                                        class="required">*</span>
                                </label>
                                <div class="col-md-9 col-sm-9">
                                    <select class="form-control">
                                        <option>Choose option</option>
                                        <option>Option one</option>
                                        <option>Option two</option>
                                        <option>Option three</option>
                                        <option>Option four</option>
                                    </select>
                                </div>
                            </div>
                        </form>
                        <div class="ln_solid"></div>

                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Target Amount</h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <form class="form-label-left input_mask">

                                    <div class="form-group row">

                                        <label class="control-label col-md-3 col-sm-3 text-white"
                                            style="background-color: rgb(50, 205, 192)"> Target Type</label>
                                        <div class="col-md-9 col-sm-9">
                                            <select class="select2 form-control">
                                                <option>Choose option</option>
                                                <option>Option one</option>
                                                <option>Option two</option>
                                                <option>Option three</option>
                                                <option>Option four</option>
                                                <option>Option five</option>
                                                <option>Option six</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label col-md-3 col-sm-3 text-white"
                                            style="background-color: rgb(50, 205, 192)">Target Multiplier</label>
                                        <div class="col-md-9 col-sm-9">
                                            <input type="text" class="form-control" name="" id="">
                                        </div>
                                    </div>

                                    <h5 class="text-red">"Target Type BY WINOVER Only available for Maga888 and 918Kiss"
                                    </h5>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <div class="col-md-4">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>
                            Eligbility to Apply for Bonus
                        </h2>

                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br />
                        <form class="form-horizontal form-label-left">
                            <div class="form-group row">
                                <label class="control-label col-md-3 col-sm-3">Promotion Eligble Types</label>
                                <div class="col-md-9 col-sm-9">
                                    <input type="text" class="form-control" placeholder="Default Input" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3 col-sm-3">Group</label>
                                <div class="col-md-9 col-sm-9">
                                    <select class="select2_multiple form-control" multiple="multiple">
                                        <option>Choose option</option>
                                        <option>Option one</option>
                                        <option>Option two</option>
                                        <option>Option three</option>
                                        <option>Option four</option>
                                        <option>Option five</option>
                                        <option>Option six</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3 col-sm-3">Member List <span
                                        class="required">*</span>
                                </label>
                                <div class="col-md-9 col-sm-9">
                                    <textarea class="form-control" rows="5" placeholder=""></textarea>
                                </div>

                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3 col-sm-3"> <span class="required">*</span>
                                </label>

                                <div class="col-md-9 col-sm-9">
                                    <input type="file" class="form-control" name="" id="">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 col-sm-3 control-label">Recurring
                                    <br />

                                </label>
                                <div class="col-md-9 col-sm-9">
                                    <div class="radio">
                                        <label>
                                            <input type="radio" checked="" value="option1" id="optionsRadios1"
                                                name="optionsRadios" />
                                            Per Promo
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" value="option2" id="optionsRadios2"
                                                name="optionsRadios" />
                                            Recurring
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3">Max Per Player</label>
                                <div class="col-md-9 col-sm-9">
                                    <input type="text" class="form-control" placeholder="" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-sm-3 control-label">Last Deposite
                                    <br />

                                </label>
                                <div class="col-md-9 col-sm-9">
                                    <div class="radio">
                                        <label>
                                            <input type="checkbox" value="option1" id="optionsRadios1"
                                                name="optionsRadios" />
                                            Members has to deposite to main wallet first and have not applied to other
                                            promotion to apply the promotion
                                        </label>
                                    </div>

                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-sm-3 control-label">Auto Approve
                                    <br />

                                </label>
                                <div class="col-md-9 col-sm-9">
                                    <div class="radio">
                                        <label>
                                            <input type="checkbox" value="option1" id="optionsRadios1"
                                                name="optionsRadios" />

                                        </label>
                                    </div>

                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-sm-3 control-label">Active
                                    <br />

                                </label>
                                <div class="col-md-9 col-sm-9">
                                    <div class="radio">
                                        <label>
                                            <input type="checkbox" checked="" value="option1" id="optionsRadios1"
                                                name="optionsRadios" />

                                        </label>
                                    </div>

                                </div>
                            </div>
                            <div class="ln_solid"></div>

                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-4"></div>
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="form-group float-right">

                    <button type="button" class="btn btn-primary">
                        Cancel
                    </button>
                    <button type="submit" class="btn btn-success">
                        Submit
                    </button>

                </div>

            </div>
        </div>
        <div class="x_content">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card-box table-responsive">
                        <button type="button" data-toggle="modal" data-target="#exampleModal"
                            class="btn btn-success  float-right">
                            + Add
                        </button><br>
                        <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                            <thead class="table-bordered table-dark">
                                <tr>
                                    <th>Currency</th>
                                    <th>Max Players</th>
                                    <th>Max Total</th>
                                    <th>Min Bonus</th>
                                    <th>Max Bonus</th>
                                    <th>Allow Exceed Max Transfer Amount</th>
                                    <th>Layout</th>
                                    <th>Active</th>
                                    <th>Current Player </th>
                                    <th>Used Budget </th>
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
                        <label class="control-label col-md-3 col-sm-3 ">Currency</label>
                        <div class="col-md-9 col-sm-9">
                            <select class="select2 form-control">
                                <option>Choose option</option>
                                <option>Option one</option>
                                <option>Option two</option>
                                <option>Option three</option>
                                <option>Option four</option>
                                <option>Option five</option>
                                <option>Option six</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3 ">Max Players*</label>
                        <div class="col-md-9 col-sm-9">
                            <input type="text" class="form-control" name="" id="">
                        </div>
                    </div>           
                    <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3 ">Max Total*</label>
                        <div class="col-md-9 col-sm-9">
                            <input type="text" class="form-control" name="" id="">
                        </div>
                    </div>                   
                     <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3 ">Min Bonus*</label>
                        <div class="col-md-9 col-sm-9">
                            <input type="text" class="form-control" name="" id="">
                        </div>
                    </div>                    
                    <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3 ">Max Bonus*</label>
                        <div class="col-md-9 col-sm-9">
                            <input type="text" class="form-control" name="" id="">
                        </div>
                    </div>                    
                    <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3 ">Allow Exceed Max Transfer Amount*</label>
                        <div class="col-md-9 col-sm-9"><br>
                            <input type="checkbox" value="option1" id="optionsRadios1"
                            name="optionsRadios" />
                        </div>
                    </div>                   
                     <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3 ">Active*</label>
                        <div class="col-md-9 col-sm-9">
                            <input type="checkbox" value="option1" id="optionsRadios1"
                            name="optionsRadios" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3 ">Layout*</label>
                        <div class="col-md-9 col-sm-9">
                            <input type="text" class="form-control" name="" id="">
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