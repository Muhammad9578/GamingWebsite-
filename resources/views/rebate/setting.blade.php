@extends('layout')
@section('title')
Rebate Setting
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
                            <div class="col-md-4">
                                <div class="form-group row">

                                    <div class="col-md-12 col-sm-12">
                                        <label class="control-label col-md-12 col-sm-12"><strong>Merchant*</strong>
                                        </label>
                                        <select class="form-control">
                                            <option>Choose </option>
                                            <option>Option one</option>
                                            <option>Option two</option>
                                            <option>Option three</option>
                                            <option>Option four</option>
                                        </select>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-4">
                                <div class="form-group row">

                                    <div class="col-md-12 col-sm-12">
                                        <label class="control-label col-md-12 col-sm-12"><strong>Category Name*</strong>
                                        </label>
                                        <select class="form-control">
                                            <option>Choose </option>
                                            <option>Option one</option>
                                            <option>Option two</option>
                                            <option>Option three</option>
                                            <option>Option four</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <hr>

                        <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">

                                        <button type="reset" class="btn btn-success">
                                            <i class="fa fa-times" aria-hidden="true"> Cancel</i>
                                        </button>
                                        <button type="reset" class="btn btn-success">
                                            <i class="fa fa-search" aria-hidden="true"> Serch</i>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-md-7"></div>



                                <div class="col-md-2">



                                    <button type="button" class="btn btn-danger" data-toggle="modal"
                                    data-target=".bs-example-modal-lg">                                        + Add
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
                                                <th>Merchant</th>
                                                <th>Name</th>
                                                <th>Status</th>
                                                <th>Min Rebate Limit</th>
                                                <th>Max Rebate Limit</th>
                                                <th>Rebate Percentage (%)</th>
                                                <th>Rebate Tier</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Tiger Nixon</td>
                                                <td>System Architect</td>
                                                <td>Edinburgh</td>
                                                <td>61</td>
                                                <td>2011/04/25</td>
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



<div class="modal fade bs-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="demo-form2" data-parsley-validate
                class="form-horizontal form-label-left">
                <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align"
                        for="first-name">Merchant <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6">
                        <input type="text" id="first-name" required="required"
                            class="form-control" />
                    </div>
                </div>               
                 <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align"
                        for="first-name">Name <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6">
                        <input type="text" id="first-name" required="required"
                            class="form-control" />
                    </div>
                </div>                 
                <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align"
                        for="first-name">Min Rebate Limit <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6">
                        <input type="text" id="first-name" required="required"
                            class="form-control" />
                    </div>
                </div>                
                <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align"
                        for="first-name">Max Rebate Limit <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6">
                        <input type="text" id="first-name" required="required"
                            class="form-control" />
                    </div>
                </div>                
                <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align"
                        for="first-name"> Rebate Percentage (%) <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6">
                        <input type="text" id="first-name" required="required"
                            class="form-control" />
                    </div>
                </div>               
                 <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align"
                        for="first-name"> Rebate Tier Setting<span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6">
                        <input type="text" id="first-name" required="required"
                            class="form-control" />
                    </div>
                </div>


            

                <div class="ln_solid"></div>
                <div class="item form-group">
                    <div class="col-md-6 col-sm-6 offset-md-3">
                        <button class="btn btn-primary" type="button">
                            Cancel
                        </button>
                        <button class="btn btn-primary" type="reset">
                            Reset
                        </button>
                        <button type="submit" class="btn btn-success">
                            Submit
                        </button>
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