@extends('layout')
@section('title')
Member Online
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
                                        <input type="text" class="form-control" name="" id="">
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-3">
                        
                                <div class="form-group row">

                                    <div class="col-md-12 col-sm-12">
                                        <label class="control-label col-md-12 col-sm-12"><strong>Name </strong>
                                        </label>
                                        <input type="text" class="form-control" name="" id="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group row">

                                    <div class="col-md-12 col-sm-12">
                                        <label class="control-label col-md-12 col-sm-12"><strong>IP </strong>
                                        </label>
                                        <input type="text" class="form-control" name="" id="">
                                    </div>
                                </div>

                            </div>                           
                             <div class="col-md-3">
                                <div class="form-group row">

                                    <div class="col-md-12 col-sm-12">
                                        <label class="control-label col-md-12 col-sm-12"><strong>Affiliate </strong>
                                        </label>
                                        <input type="text" class="form-control" name="" id="">
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
                                <div class="col-md-4"></div>



                                <div class="col-md-4">


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
                                                
                                                <th>Login</th>
                                                <th>Name</th>
                                                <th>Currency</th>
                                                <th>Group</th>
                                                <th>Affiliate</th>
                                                <th>Current Login Info</th>
                                                <th>Last Activity Time  </th>
                                                <th>Online Time</th>
                                                <th>Last Login Info</th>
                                                <th>Action</th>
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




                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

            </div> <!-- c.c -->
            </section>
            


        </div>

    </div>

@endsection