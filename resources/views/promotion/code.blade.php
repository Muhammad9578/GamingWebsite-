@extends('layout')
@section('title')
 Promotions Code
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
                                        <label class="control-label col-md-12 col-sm-12"><strong>Promotion Code</strong>
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
                            <div class="col-md-3">
                                <div class="form-group row">
                               
                                    <div class="col-md-12 col-sm-12">
                                        <label class="control-label col-md-12 col-sm-12"><strong>Status</strong>
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
                             <div class="col-md-3">
                                <div class="form-group row">
                               
                                    <div class="col-md-12 col-sm-12">
                                        <label class="control-label col-md-12 col-sm-12"><strong>Group</strong>
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
                            <div class="col-md-3">
                                <div class="form-group row">
                               
                                    <div class="col-md-12 col-sm-12">
                                        <label class="control-label col-md-12 col-sm-12"><strong>Bonus Type</strong>
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
                            <div class="col-md-3">
                                <div class="form-group row">
                               
                                    <div class="col-md-12 col-sm-12">
                                        <label class="control-label col-md-12 col-sm-12"><strong>Currency</strong>
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
                                                                    
                                    <button type="reset" class="btn btn-primary">
                                        <i class="fa fa-times" aria-hidden="true"> Cancel</i>
                                    </button>
                                    <button type="reset" class="btn btn-success">
                                        <i class="fa fa-search" aria-hidden="true">  Serch</i>
                                    </button>                             
                                </div>
                            </div>
                             <div class="col-md-7"></div>
                              
                                 
                                                 
                               <div class="col-md-2">
                                <a href="{{url('promotion_add')}}"><button type="button" class="btn btn-success">
                                     + Add
                                </button>  </a>
                                                                  
                          

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
                                                        <th>Bonus Type</th>
                                                        <th>code</th>
                                                        <th>Promo Name</th>
                                                        <th> Currency</th>
                                                        <th>Group / List</th>
                                                        <th> Valid Form</th>
                                                        <th>Valid Till</th>
                                                        <th>Status</th>
                                                        <th>Bonus Rate</th>
                                                        <th>Provider</th>
                                                        <th>Last Deposite</th>
                                                        <th>Auto Approve</th>
                                                        <th>Auto Unlock</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Tiger Nixon</td>
                                                        <td>System Architect</td>
                                                        <td>System Architect</td>
                                                        <td><span class="badge badge-primary">Edinburgh</span></td>
                                                        <td><span class="badge badge-success">61</span></td>
                                                        <td><span class="badge badge-success">61</span></td>
                                                        <td><span class="badge badge-success">61</span></td>
                                                        <td><span class="badge badge-success">61</span></td>
                                                        <td>2011/04/25</td>
                                                        <td>$320,800</td>
                                                        <td>$320,800</td>
                                                        <td>$320,800</td>
                                                        <td>$320,800</td>
                                                        <td><span class="badge badge-secondary">$320,800</span></td>
                                                        <td>$320,800</td>
                                                      
                                                    </tr>                                                       
                                                    <tr>
                                                        <td>Tiger Nixon</td>
                                                        <td>System Architect</td>
                                                        <td>System Architect</td>
                                                        <td><span class="badge badge-primary">Edinburgh</span></td>
                                                        <td><span class="badge badge-success">61</span></td>
                                                        <td><span class="badge badge-success">61</span></td>
                                                        <td><span class="badge badge-success">61</span></td>
                                                        <td><span class="badge badge-success">61</span></td>
                                                        <td>2011/04/25</td>
                                                        <td>$320,800</td>
                                                        <td>$320,800</td>
                                                        <td>$320,800</td>
                                                        <td>$320,800</td>
                                                        <td><span class="badge badge-secondary">$320,800</span></td>
                                                        <td>$320,800</td>
                                                      
                                                    </tr>                                                       
                                                    <tr>
                                                        <td>Tiger Nixon</td>
                                                        <td>System Architect</td>
                                                        <td>System Architect</td>
                                                        <td><span class="badge badge-primary">Edinburgh</span></td>
                                                        <td><span class="badge badge-success">61</span></td>
                                                        <td><span class="badge badge-success">61</span></td>
                                                        <td><span class="badge badge-success">61</span></td>
                                                        <td><span class="badge badge-success">61</span></td>
                                                        <td>2011/04/25</td>
                                                        <td>$320,800</td>
                                                        <td>$320,800</td>
                                                        <td>$320,800</td>
                                                        <td>$320,800</td>
                                                        <td><span class="badge badge-secondary">$320,800</span></td>
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