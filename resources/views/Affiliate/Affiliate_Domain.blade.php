<style >
  .fonts-for-btn button{
    font-size: 10px;

  }
  .table th,.table td{
    vertical-align: bottom!important;
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
Affiliate Domain
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
  <div class="container   border">
    <div class="row p-3 "> <!-- main row -->
      <div class="col-md-4">
        <form>
          <div class="form-group row">
            <label  class="col-sm-4 col-form-label">Merchant*</label>
            <div class="col-sm-8">
              <select class="form-control">
                <option>UA9</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>
            </div>
          </div>
        </form>
      </div>
      <div class="col-md-4">
        <form>
          <div class="form-group row">
            <label  class="col-sm-4 col-form-label">Affiliate Login*</label>
            <div class="col-sm-8">
              <input type="" class="form-control" name="">
            </div>
          </div>
        </form>
      </div>
      <div class="col-md-4">
        <form>
          <div class="form-group row">
            <label  class="col-sm-4 col-form-label">Domain*</label>
            <div class="col-sm-8">
              <input type="" class="form-control" name="">
            </div>
          </div>
        </form>
      </div>
    </div>
    <hr>
    <div class="row">
          <div class="col-md-12  d-flex justify-content-around">
            <div class="">
              <button type="button" class="btn btn-primary"><i class="fa fa-times"></i>  Clear</button>
              <button type="button" class="btn btn-success"><i class="fa fa-search"></i>  Search</button>
            </div>
            <div class="">
              <button type="button" class="btn btn-success"data-toggle="modal" data-target="#add-domain"><i class="fa fa-plus-circle pr-2"></i>Add</button>

              <!-- Modal -->
              <div class="modal fade" id="add-domain" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Create Domain</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <div class="row">
                        <div class="col-md-12">
                          <form>

                            <div class="form-group row">
                              <label class="col-sm-4 col-form-label">Merchant*</label>
                              <div class="col-sm-8">
                                <input type="" class="form-control">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label class="col-sm-4 col-form-label">Affiliate Login*</label>
                              <div class="col-sm-8">
                                <input type="" class="form-control">
                                <div class="d-flex justify-content-between pt-3">
                                  <button class="btn btn-info pr-2"><i class="fa fa-clipboard pr-2"></i><small>Select Affiliate</small></button>
                                  <button class="btn btn-warning pr-2"><i class="fa fa-clipboard"></i><small> Unlink Affiliate</small></button>
                                </div>
                                
                              </div>

                            </div>         
                            <div class="form-group row">
                              <label class="col-sm-4 col-form-label">Domain*</label>
                              <div class="col-sm-8">
                                <input type="" class="form-control" placeholder="">
                                <small class="text-danger">e.g http://www.xyz.com</small>
                              </div>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-light" data-dismiss="modal"><i class="fa fa-ban"></i> Cancel</button>
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
                  <th scope="col">Affiliate Login</th>
                  <th scope="col">Affiliate Code</th>
                  <th scope="col">Domain</th>
                  <th scope="col">Created Date</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
               <tr>
                <th scope="row">2016</th>
                <td>akq</td>
                <td><button class="btn btn-info">gangan</button></td>
                <td>101</td>
                <td>xyz@gm****.com</td>
                <td>20-12-2020 14:50</td>
                <td>
                  <button class="btn btn-primary" data-toggle="modal" data-target="#add-domain"><i class="fa fa-clipboard"></i></button>
                  <button class="btn btn-danger" ><i class="fa fa-times-circle"></i></button>
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
@endsection


@section('scripts')
<script>
  $(document).ready(function() {
    $('.datatables_all').dataTable();            
  } );
</script>
@endsection