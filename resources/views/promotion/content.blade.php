@extends('layout')
@section('title')
Promotion Content
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

                                    <div class="col-md-9 col-sm-9">
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
                            <div class="col-md-3">
                                <div class="form-group row">

                                    <div class="col-md-9 col-sm-9">
                                        <label class="control-label col-md-12 col-sm-12"><strong>Status*</strong>
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

                                    <div class="col-md-9 col-sm-9">
                                        <label class="control-label col-md-12 col-sm-12"><strong>Language*</strong>
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
                                <div class="col-md-6"></div>
                                <div class="col-md-3">
                                    <button type="button" data-toggle="modal" data-target="#exampleModal"
                                        class="btn btn-success">
                                        <i class="fa fa-add" aria-hidden="true"> + Add</i>
                                    </button>
                                    <button type="button" class="btn btn-danger" data-toggle="modal"
                                        data-target=".bs-example-modal-lg">
                                        <i class="fa fa-arrow-circle-down" aria-hidden="true"> Manage Promotion Type</i>
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
                                                <th>Merchant</th>
                                                <th>Promotion Type</th>
                                                <th>Content Type</th>
                                                <th>Index</th>
                                                <th>Applicant</th>
                                                <th>Title</th>
                                                <th>Status</th>
                                                <th>Created Date</th>
                                                <th>Last Modified By</th>
                                                <th>Last Modified Date</th>
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
                                                <td>$320,800</td>
                                                <td>$320,800</td>
                                                <td>$320,800</td>
                                                <td>$320,800</td>
                                            </tr>
                                            <tr>
                                                <td>Tiger Nixon</td>
                                                <td>System Architect</td>
                                                <td>Edinburgh</td>
                                                <td>61</td>
                                                <td>2011/04/25</td>
                                                <td>$320,800</td>
                                                <td>$320,800</td>
                                                <td>$320,800</td>
                                                <td>$320,800</td>
                                                <td>$320,800</td>
                                                <td>$320,800</td>
                                                <td>$320,800</td>
                                            </tr>
                                            <tr>
                                                <td>Tiger Nixon</td>
                                                <td>System Architect</td>
                                                <td>Edinburgh</td>
                                                <td>61</td>
                                                <td>2011/04/25</td>
                                                <td>$320,800</td>
                                                <td>$320,800</td>
                                                <td>$320,800</td>
                                                <td>$320,800</td>
                                                <td>$320,800</td>
                                                <td>$320,800</td>
                                                <td>$320,800</td>
                                            </tr>
                                            <tr>
                                                <td>Tiger Nixon</td>
                                                <td>System Architect</td>
                                                <td>Edinburgh</td>
                                                <td>61</td>
                                                <td>2011/04/25</td>
                                                <td>$320,800</td>
                                                <td>$320,800</td>
                                                <td>$320,800</td>
                                                <td>$320,800</td>
                                                <td>$320,800</td>
                                                <td>$320,800</td>
                                                <td>$320,800</td>
                                            </tr>
                                            <tr>
                                                <td>Tiger Nixon</td>
                                                <td>System Architect</td>
                                                <td>Edinburgh</td>
                                                <td>62</td>
                                                <td>2011/04/25</td>
                                                <td>$320,800</td>
                                                <td>$320,800</td>
                                                <td>$320,800</td>
                                                <td>$320,800</td>
                                                <td>$320,800</td>
                                                <td>$320,800</td>
                                                <td>$320,800</td>
                                            </tr>
                                            <tr>
                                                <td>Tiger Nixon</td>
                                                <td>System Architect</td>
                                                <td>Edinburgh</td>
                                                <td>63</td>
                                                <td>2011/04/25</td>
                                                <td>$320,800</td>
                                                <td>$320,800</td>
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
                    <div class="row container">

                        <div class="col-md-6">
                            <div class="form-group row">

                                <div class="col-md-12 col-sm-12">
                                    <label class="control-label col-md-12 col-sm-12"><strong>Language*</strong>
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
                        <div class="col-md-6">
                            <div class="form-group row">

                                <div class="col-md-12 col-sm-12">
                                    <label class="control-label col-md-12 col-sm-12"><strong>Language*</strong>
                                    </label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row container">

                        <div class="col-md-6">
                            <div class="form-group row">

                                <div class="col-md-12 col-sm-12">
                                    <label class="control-label col-md-12 col-sm-12"><strong>Allow Apply*</strong>
                                    </label>
                                    <input type="checkbox" value="option1" id="optionsRadios1" name="optionsRadios" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">

                                <div class="col-md-12 col-sm-12">
                                    <label class="control-label col-md-12 col-sm-12"><strong>Max no of
                                            Application</strong>
                                    </label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
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
                <h4 class="modal-title" id="myModalLabel">
                    Modal title
                </h4>
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">


                <div class="" role="main">
                    <div class="">
                        <div class="page-title">
                            <div class="title_left">
                                <h3>General Elements</h3>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="">
                            <div class="col-md-12 col-sm-12">
                                <div class="x_panel">
                                    <div class="x_title">
                                  

                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="x_content">
                                        <ul class="nav nav-tabs bar_tabs" id="myTab" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home"
                                                    role="tab" aria-controls="home" aria-selected="true">Add</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile"
                                                    role="tab" aria-controls="profile" aria-selected="false">Edit</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact"
                                                    role="tab" aria-controls="contact" aria-selected="false">Delete</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content" id="myTabContent">
                                            <div class="tab-pane fade show active" id="home" role="tabpanel"
                                                aria-labelledby="home-tab">
                                                <form id="demo-form" data-parsley-validate
                                                    class="form-horizontal form-label-left">
                                                    <div class="item form-group">
                                                        <label class="col-form-label col-md-3 col-sm-3 label-align"
                                                            for="first-name">Promotion Type <span class="required">*</span>
                                                        </label>
                                                        <div class="col-md-6 col-sm-6">
                                                            <input type="text" id="first-name" required="required"
                                                                class="form-control" />
                                                        </div>
                                                    </div>
                                                    <div class="item form-group">
                                                        <label class="col-form-label col-md-3 col-sm-3 label-align"
                                                            for="last-name">EN_TH <span class="required">*</span>
                                                        </label>
                                                        <div class="col-md-6 col-sm-6">
                                                            <input type="text" id="last-name" name="last-name"
                                                                required="required" class="form-control" />
                                                        </div>
                                                    </div>
                                                    <div class="item form-group">
                                                        <label for="middle-name"
                                                            class="col-form-label col-md-3 col-sm-3 label-align">TH_TH</label>
                                                        <div class="col-md-6 col-sm-6">
                                                            <input id="middle-name" class="form-control" type="text"
                                                                name="middle-name" />
                                                        </div>
                                                    </div>                                                
                                                    <div class="item form-group">
                                                        <label for="middle-name"
                                                            class="col-form-label col-md-3 col-sm-3 label-align">EN_VN</label>
                                                        <div class="col-md-6 col-sm-6">
                                                            <input id="middle-name" class="form-control" type="text"
                                                                name="middle-name" />
                                                        </div>
                                                    </div>                                                   
                                                    <div class="item form-group">
                                                        <label for="middle-name"
                                                            class="col-form-label col-md-3 col-sm-3 label-align">VI_VN</label>
                                                        <div class="col-md-6 col-sm-6">
                                                            <input id="middle-name" class="form-control" type="text"
                                                                name="middle-name" />
                                                        </div>
                                                    </div>                                                 
                                                    <div class="item form-group">
                                                        <label for="middle-name"
                                                            class="col-form-label col-md-3 col-sm-3 label-align">EN_SG</label>
                                                        <div class="col-md-6 col-sm-6">
                                                            <input id="middle-name" class="form-control" type="text"
                                                                name="middle-name" />
                                                        </div>
                                                    </div>                                                    
                                                    <div class="item form-group">
                                                        <label for="middle-name"
                                                            class="col-form-label col-md-3 col-sm-3 label-align">ZH_SG</label>
                                                        <div class="col-md-6 col-sm-6">
                                                            <input id="middle-name" class="form-control" type="text"
                                                                name="middle-name" />
                                                        </div>
                                                    </div>                                                  
                                                      <div class="item form-group">
                                                        <label for="middle-name"
                                                            class="col-form-label col-md-3 col-sm-3 label-align">EN_MY</label>
                                                        <div class="col-md-6 col-sm-6">
                                                            <input id="middle-name" class="form-control" type="text"
                                                                name="middle-name" />
                                                        </div>
                                                    </div>                                            
                                                              <div class="item form-group">
                                                        <label for="middle-name"
                                                            class="col-form-label col-md-3 col-sm-3 label-align">MS_MY</label>
                                                        <div class="col-md-6 col-sm-6">
                                                            <input id="middle-name" class="form-control" type="text"
                                                                name="middle-name" />
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
                                            <div class="tab-pane fade" id="profile" role="tabpanel"
                                                aria-labelledby="profile-tab">
                                                <form id="demo-form2" data-parsley-validate
                                                class="form-horizontal form-label-left">
                                                <div class="item form-group">
                                                    <label class="col-form-label col-md-3 col-sm-3 label-align"
                                                        for="first-name">Promotion Type <span class="required">*</span>
                                                    </label>
                                                    <div class="col-md-6 col-sm-6">
                                                        <input type="text" id="first-name" required="required"
                                                            class="form-control" />
                                                    </div>
                                                </div>
                                                <div class="item form-group">
                                                    <label class="col-form-label col-md-3 col-sm-3 label-align"
                                                        for="last-name">EN_TH <span class="required">*</span>
                                                    </label>
                                                    <div class="col-md-6 col-sm-6">
                                                        <input type="text" id="last-name" name="last-name"
                                                            required="required" class="form-control" />
                                                    </div>
                                                </div>
                                                <div class="item form-group">
                                                    <label for="middle-name"
                                                        class="col-form-label col-md-3 col-sm-3 label-align">TH_TH</label>
                                                    <div class="col-md-6 col-sm-6">
                                                        <input id="middle-name" class="form-control" type="text"
                                                            name="middle-name" />
                                                    </div>
                                                </div>                                                
                                                <div class="item form-group">
                                                    <label for="middle-name"
                                                        class="col-form-label col-md-3 col-sm-3 label-align">EN_VN</label>
                                                    <div class="col-md-6 col-sm-6">
                                                        <input id="middle-name" class="form-control" type="text"
                                                            name="middle-name" />
                                                    </div>
                                                </div>                                                   
                                                <div class="item form-group">
                                                    <label for="middle-name"
                                                        class="col-form-label col-md-3 col-sm-3 label-align">VI_VN</label>
                                                    <div class="col-md-6 col-sm-6">
                                                        <input id="middle-name" class="form-control" type="text"
                                                            name="middle-name" />
                                                    </div>
                                                </div>                                                 
                                                <div class="item form-group">
                                                    <label for="middle-name"
                                                        class="col-form-label col-md-3 col-sm-3 label-align">EN_SG</label>
                                                    <div class="col-md-6 col-sm-6">
                                                        <input id="middle-name" class="form-control" type="text"
                                                            name="middle-name" />
                                                    </div>
                                                </div>                                                    
                                                <div class="item form-group">
                                                    <label for="middle-name"
                                                        class="col-form-label col-md-3 col-sm-3 label-align">ZH_SG</label>
                                                    <div class="col-md-6 col-sm-6">
                                                        <input id="middle-name" class="form-control" type="text"
                                                            name="middle-name" />
                                                    </div>
                                                </div>                                                  
                                                  <div class="item form-group">
                                                    <label for="middle-name"
                                                        class="col-form-label col-md-3 col-sm-3 label-align">EN_MY</label>
                                                    <div class="col-md-6 col-sm-6">
                                                        <input id="middle-name" class="form-control" type="text"
                                                            name="middle-name" />
                                                    </div>
                                                </div>                                            
                                                          <div class="item form-group">
                                                    <label for="middle-name"
                                                        class="col-form-label col-md-3 col-sm-3 label-align">MS_MY</label>
                                                    <div class="col-md-6 col-sm-6">
                                                        <input id="middle-name" class="form-control" type="text"
                                                            name="middle-name" />
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
                                            <div class="tab-pane fade" id="contact" role="tabpanel"
                                                aria-labelledby="contact-tab">
                                                <form id="demo-form2" data-parsley-validate
                                                class="form-horizontal form-label-left">
                                                <div class="item form-group">
                                                    <label class="col-form-label col-md-3 col-sm-3 label-align"
                                                        for="first-name">Promotion Type <span class="required">*</span>
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
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                            Close
                                        </button>
                                        <button type="button" class="btn btn-primary">
                                            Save changes
                                        </button>
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