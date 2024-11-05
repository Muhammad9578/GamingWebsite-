@extends('layout')
@section('title')
Dashboard
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
        <div class="">
            <div class="col-md-12 col-sm-12">
                <div class="x_panel">
                    <div class="x_content">
                        <ul class="nav nav-tabs bar_tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                                aria-controls="home" aria-selected="true">Company Report</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                                aria-controls="profile" aria-selected="false">Member Report</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab"
                                aria-controls="contact" aria-selected="false">Member Analysis Report</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-5 d-flex justify-content-between" >
                                            <div class="form-group row">
                                                <div class="col-md-12">

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

                                            <div class="col-md-12 ">
                                              <select class="form-control">
                                                <option>Choose option</option>
                                                <option>Option one</option>
                                                <option>Option two</option>
                                                <option>Option three</option>
                                                <option>Option four</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>


                            </div>


                            <div class="row">
                                <div class="col-lg-6 d-flex">
                                    <div class="row mr-2">
                                        <label  class="col-sm-12 d-flex align-items-center ">Start*</label>
                                        <div class="col-sm-12 ">
                                          <input type="Date" class="form-control">
                                      </div>
                                  </div>
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
                <div class="form-group">


                    <button type="submit" class="btn btn-success">
                        <i class="fa fa-search" aria-hidden="true"> Serch</i> 
                    </button>

                </div>

            </div>
            <hr>
            <div class="tile_count">
                <div class="row">
                    <div class="col-md-4 col-sm-4 tile_stats_count">
                        <span class="count_top"><i class="fa fa-user"></i> Total Users</span>
                        <div class="count">0.00</div>
                        <span class="count_bottom"><i class="green">4% </i> From last Week</span>
                    </div>
                    <div class="col-md-4 col-sm-4 tile_stats_count">
                        <span class="count_top"><i class="fa fa-clock-o"></i> Average Time</span>
                        <div class="count">0.00</div>
                        <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>3%
                        </i> From
                    last Week</span>
                </div>
                <div class="col-md-4 col-sm-4 tile_stats_count">
                    <span class="count_top"><i class="fa fa-user"></i> Total Males</span>
                    <div class="count green">0.00</div>
                    <span class="count_bottom"><i class="green"><i
                        class="fa fa-sort-asc"></i>34% </i> From
                    last Week</span>
                </div>

            </div>
        </div>
        <hr>


        <div class="col-md-6 col-sm-6">
            <div class="x_panel">
                <div class="x_title text-center">
                    <h2>Line graph<small>Sessions</small></h2>

                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <canvas id="lineChart"></canvas>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-6">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Bar graph <small>Sessions</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li>
                            <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                            role="button" aria-expanded="false"><i
                            class="fa fa-wrench"></i></a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Settings 1</a>
                                <a class="dropdown-item" href="#">Settings 2</a>
                            </div>
                        </li>
                        <li>
                            <a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <canvas id="mybarChart"></canvas>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-sm-6">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Radar <small>Sessions</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li>
                            <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                            role="button" aria-expanded="false"><i
                            class="fa fa-wrench"></i></a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Settings 1</a>
                                <a class="dropdown-item" href="#">Settings 2</a>
                            </div>
                        </li>
                        <li>
                            <a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <canvas id="canvasRadar"></canvas>
                </div>
            </div>
        </div>
    </div>
    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
        <div class="container">
            <div class="row">
                <div class="col-md-5 d-flex justify-content-between" >
                    <div class="form-group row">
                        <div class="col-md-12">

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

                    <div class="col-md-12 ">
                      <select class="form-control">
                        <option>Choose option</option>
                        <option>Option one</option>
                        <option>Option two</option>
                        <option>Option three</option>
                        <option>Option four</option>
                    </select>
                </div>
            </div>
        </div>


    </div>
    <div class="row">
        <div class="col-lg-6 d-flex">
            <div class="row mr-2">
                <label  class="col-sm-12 d-flex align-items-center ">Start*</label>
                <div class="col-sm-12 ">
                  <input type="Date" class="form-control">
              </div>
          </div>
          <div class=" row">
            <label class="col-sm-12 d-flex align-items-center ">End*</label>
            <div class="col-sm-12 ">
              <input type="Date" class="form-control">
          </div>
      </div>
  </div>

  <div class="col-lg-6 d-flex align-items-end">
    <div class="row justify-content-lg-end pt-3 pt-lg-0">
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
<div class="form-group">


    <button type="submit" class="btn btn-success">
        <i class="fa fa-search" aria-hidden="true"> Serch</i> 
    </button>

</div>

</div>
<div class="col-md-4 col-sm-6">
    <div class="x_panel">
        <div class="x_title">
            <h2>Donut Graph <small>Sessions</small></h2>

            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <canvas id="canvasDoughnut"></canvas>
        </div>
    </div>
</div>
<div class="col-md-4 col-sm-6">
    <div class="x_panel">
        <div class="x_title">
            <h2>Pie Area Chart <small>Sessions</small></h2>
            <ul class="nav navbar-right panel_toolbox">
                <li>
                    <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                    role="button" aria-expanded="false"><i
                    class="fa fa-wrench"></i></a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Settings 1</a>
                        <a class="dropdown-item" href="#">Settings 2</a>
                    </div>
                </li>
                <li>
                    <a class="close-link"><i class="fa fa-close"></i></a>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <canvas id="polarArea"></canvas>
        </div>
    </div>
</div>
<div class="col-md-4 col-sm-6">
    <div class="x_panel">
        <div class="x_title">
            <h2>Pie Chart Graph <small>Sessions</small></h2>
            <ul class="nav navbar-right panel_toolbox">
                <li>
                    <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                    role="button" aria-expanded="false"><i
                    class="fa fa-wrench"></i></a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Settings 1</a>
                        <a class="dropdown-item" href="#">Settings 2</a>
                    </div>
                </li>
                <li>
                    <a class="close-link"><i class="fa fa-close"></i></a>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <canvas id="pieChart"></canvas>
        </div>
    </div>
</div>
<div class="col-md-8 col-sm-6">
    <h2>
        Top 5 Member
    </h2>
    <div class="x_panel">
        <div class="x_title">


            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>User Name</th>
                        <th>Total Deposite</th>
                        <th>Total Valid Bet</th>
                        <th>GGR</th>
                        <th>Total Cost</th>
                        <th>NGR</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td>@mdo</td>
                        <td>@mdo</td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
    <div class="container">
      <div class="row">
        <div class="col-md-5 d-flex justify-content-between" >
            <div class="form-group row">
                <div class="col-md-12">

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

            <div class="col-md-12 ">
              <select class="form-control">
                <option>Choose option</option>
                <option>Option one</option>
                <option>Option two</option>
                <option>Option three</option>
                <option>Option four</option>
            </select>
        </div>
    </div>
</div>


</div>
<div class="row">
    <div class="col-lg-6 d-flex">
        <div class="row mr-2">
            <label  class="col-sm-12 d-flex align-items-center ">Start*</label>
            <div class="col-sm-12 ">
              <input type="Date" class="form-control">
          </div>
      </div>
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
<div class="form-group">


    <button type="submit" class="btn btn-success">
        <i class="fa fa-search" aria-hidden="true"> Serch</i> 
    </button>

</div>

</div>
<div class="col-md-4 col-sm-6">

    <div class="x_panel">
        <div class="x_title">

            <h2 class="text-center">
                Top 50 Member Deposite
            </h2>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <table class="table table-bordered">
                <thead class="table-bordered table-dark">
                    <tr>
                        <th>#</th>
                        <th>Member ID</th>
                        <th>Amount</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>

                    </tr>

                </tbody>
            </table>
        </div>
    </div>
</div>
<div class="col-md-4 col-sm-6">

    <div class="x_panel">
        <div class="x_title">

            <h2 class="text-center">
                Top 50 Member Withdraw
            </h2>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <table class="table table-bordered">
                <thead class="table-bordered table-dark">
                    <tr>
                        <th>#</th>
                        <th>Member ID</th>
                        <th>Amount</th>
                    </tr>
                </thead>
                <tbody class="table-bordered">
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>

                    </tr>

                </tbody>
            </table>
        </div>
    </div>
</div>
<div class="col-md-4 col-sm-6">

    <div class="x_panel">
        <div class="x_title">

            <h2 class="text-center">
                Top 50 Member Bonus
            </h2>
            <div class="clearfix"></div>
        </div>
        <div class="x_content overflow-auto">
            <table class="table table-bordered">
                <thead class="table-bordered table-dark">
                    <tr>
                        <th>#</th>
                        <th>Member ID</th>
                        <th>Amount</th>
                    </tr>
                </thead>
                <tbody class="table-bordered">
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>

                    </tr>

                </tbody>
            </table>
        </div>
    </div>
</div>
<div class="col-md-4 col-sm-6">

    <div class="x_panel">
        <div class="x_title">

            <h2 class="text-center">
                Top 50 Member Win
            </h2>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <table class="table table-bordered">
                <thead class="table-bordered table-dark">
                    <tr>
                        <th>#</th>
                        <th>Member ID</th>
                        <th>Amount</th>
                    </tr>
                </thead>
                <tbody class="table-bordered">
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>

                    </tr>

                </tbody>
            </table>
        </div>
    </div>
</div>
<div class="col-md-4 col-sm-6">

    <div class="x_panel">
        <div class="x_title">

            <h2 class="text-center">
                Top 50 Member Loss
            </h2>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <table class="table table-bordered">
                <thead class="table-bordered table-dark">
                    <tr>
                        <th>#</th>
                        <th>Member ID</th>
                        <th>Amount</th>
                    </tr>
                </thead>
                <tbody class="table-bordered">
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>

                    </tr>

                </tbody>
            </table>
        </div>
    </div>
</div>
<div class="col-md-4 col-sm-6">

    <div class="x_panel">
        <div class="x_title">

            <h2 class="text-center">
                Top 50 Member Turnover
            </h2>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <table class="table ">
                <thead class="table-bordered table-dark">
                    <tr>
                        <th>#</th>
                        <th>Member ID</th>
                        <th>Amount</th>
                    </tr>
                </thead>
                <tbody class="table-bordered">
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>

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