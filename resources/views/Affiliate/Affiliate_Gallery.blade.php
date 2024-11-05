<style >
  .fonts-for-btn button{
    font-size: 10px;

  }
  .table th,.table td{
    vertical-align: unset!important;
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
Affiliate Gallery
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
  <div class="container p-3  border">
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
            <label  class="col-sm-4 col-form-label">Language*</label>
            <div class="col-sm-8">
              <select class="form-control">
                <option>Env_s</option>
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
            <label  class="col-sm-4 col-form-label">Image Type*</label>
            <div class="col-sm-8">
              <select class="form-control">
                <option>All</option>
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
            <label  class="col-sm-4 col-form-label">Ad Number*</label>
            <div class="col-sm-8">
              <input type="" class="form-control" name="">
            </div>
          </div>
        </form>
      </div>
      <div class="col-md-4">
        <form>
          <div class="form-group row">
            <label  class="col-sm-4 col-form-label">Ad Title*</label>
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
              <button type="button" class="btn btn-primary"><i class="fa fa-times"></i> Clear</button>
              <button type="button" class="btn btn-success"><i class="fa fa-search"></i> Search</button>
            </div>
            <div class="">
              <button type="button" class="btn btn-success"data-toggle="modal" data-target="#add-domain"><i class="fa fa-plus-circle pr-2"></i>Add</button>

              <!-- Modal -->
              <div class="modal fade" id="add-domain" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog model-dialoge-style" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Create or Edit Affiliate Media</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <div class="row">
                        <div class="col-md-10 m-auto">
                          <form>

                            <div class="form-group row">
                              <label class="col-sm-4 col-form-label">Merchant*</label>
                              <div class="col-sm-8">
                                <select class="form-control form-control">
                                  <option></option>
                                </select>
                              </div>
                            </div>

                            <div class="form-group row">
                              <label class="col-sm-4 col-form-label">Ad Type*</label>
                              <div class="col-sm-8">
                                <select class="form-control form-control">
                                  <option></option>
                                </select>
                              </div>
                            </div>
                            <div class="form-group row">
                              <label class="col-sm-4 col-form-label">Add Title*</label>
                              <div class="col-sm-8">

                                <div class="d-flex justify-content-between pt-3">
                                  <select class="form-control form-control-sm">
                                    <option></option>
                                  </select>
                                </div>
                                

                              </div>

                            </div>

                            <div class="form-group row">
                              <label class="col-sm-4 col-form-label">Input Type*</label>
                              <div class="col-sm-8">

                                <div class="d-flex justify-content-between pt-3">
                                  <select class="form-control form-control">
                                    <option></option>
                                  </select>
                                </div>
                              </div>
                            </div>  

                            <div class="form-group row">
                              <label class="col-sm-4 col-form-label">Image Width*</label>
                              <div class="col-sm-8">

                                <div class="d-flex justify-content-between pt-3">
                                  <input type="" class="form-control" name="">
                                </div>
                              </div>
                            </div> 
                            <div class="form-group row">
                              <label class="col-sm-4 col-form-label">Image Height*</label>
                              <div class="col-sm-8">

                                <div class="d-flex justify-content-between pt-3">
                                  <input type="" class="form-control" name="">
                                </div>
                              </div>
                            </div> 


                            <div class="form-group row">
                              <label class="col-sm-4 col-form-label">Status*</label>
                              <div class="col-sm-8">
                                <select class="form-control form-control">
                                  <option></option>
                                </select> 
                              </div>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-light" data-dismiss="modal"><i class="fa fa-ban"></i> Cancle</button>
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
                  <th scope="col">Merchant</th>
                  <th scope="col">Ad Number</th>
                  <th scope="col">Ad Title</th>
                  <th scope="col">Language</th>
                  <th scope="col">Image file</th>
                  <th scope="col">Image Size</th>
                  <th scope="col">Created By </th>
                  <th scope="col">Created Date</th>
                  <th scope="col">Last modiefy By</th>
                  <th scope="col">Last modiefy Date</th>
                  <th scope="col">Status</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
               <tr>
                <th scope="row">abc</th>
                <td>123</td>
                <td>somee</td>
                <td>Eng</td>
                <td><img src= " " alt="img"></td>
                <td>20*14</td>
                <td>admin</td>
                <td>20/02/2020 15:02</td>
                <td>admin</td>
                <td>20/02/2020 15:02</td>
                <td><button class="btn btn-success"><small>Active</small> </i></button></td>
                <td>
                  <button class="btn btn-primary" data-toggle="modal" data-target="#add-gallary-e"><i class="fa fa-clipboard"></i></button>
                  <!-- Modal -->
                  <div class="modal fade" id="add-gallary-e" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog model-dialoge-style" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Create or Edit Affiliate Media</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <div class="row">
                            <div class="col-md-10 m-auto">
                              <form>

                                <div class="form-group row">
                                  <label class="col-sm-4 col-form-label">Ad No*</label>
                                  <div class="col-sm-8">
                                    <input type="" class="form-control" name="">
                                  </div>
                                </div>

                                <div class="form-group row">
                                  <label class="col-sm-4 col-form-label">Merchant*</label>
                                  <div class="col-sm-8">
                                    <select class="form-control form-control">
                                      <option></option>
                                    </select>
                                  </div>
                                </div>

                                <div class="form-group row">
                                  <label class="col-sm-4 col-form-label">Ad Type*</label>
                                  <div class="col-sm-8">
                                    <select class="form-control form-control">
                                      <option></option>
                                    </select>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <label class="col-sm-4 col-form-label">Add Title*</label>
                                  <div class="col-sm-8">

                                    <div class="d-flex justify-content-between pt-3">
                                      <input type="" class="form-control" name="">
                                    </div>


                                  </div>

                                </div>

                                <div class="form-group row">
                                  <label class="col-sm-4 col-form-label">Language*</label>
                                  <div class="col-sm-8">

                                    <div class="d-flex justify-content-between pt-3">
                                      <select class="form-control" >
                                        <option>Eng</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                      </select>
                                    </div>


                                  </div>

                                </div>
                                <div class="form-group row">
                                  <label class="col-sm-4 col-form-label">Upload Image*</label>
                                  <div class="col-sm-8">
                                    
                                      <div class="form-group">
                                        <input type="file" class="form-control-file">
                                      </div>
                                    
                                  </div>
                                </div>  

                                <div class="form-group row">
                                  <label class="col-sm-4 col-form-label">Input Type*</label>
                                  <div class="col-sm-8">

                                    <div class="d-flex justify-content-between pt-3">
                                      <select class="form-control form-control">
                                        <option></option>
                                      </select>
                                    </div>
                                  </div>
                                </div>  

                                <div class="form-group row">
                                  <label class="col-sm-4 col-form-label">Image Width*</label>
                                  <div class="col-sm-8">

                                    <div class="d-flex justify-content-between pt-3">
                                      <input type="" class="form-control" name="">
                                    </div>
                                  </div>
                                </div> 
                                <div class="form-group row">
                                  <label class="col-sm-4 col-form-label">Image Height*</label>
                                  <div class="col-sm-8">

                                    <div class="d-flex justify-content-between pt-3">
                                      <input type="" class="form-control" name="">
                                    </div>
                                  </div>
                                </div> 


                                <div class="form-group row">
                                  <label class="col-sm-4 col-form-label">Status*</label>
                                  <div class="col-sm-8">
                                    <select class="form-control form-control">
                                      <option></option>
                                    </select> 
                                  </div>
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-light" data-dismiss="modal"><i class="fa fa-ban"></i> Cancle</button>
                          <button type="button" class="btn btn-success">Save </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </section>

    <div class="container">
      
    </div>
  </div>
</div>

</div>

@endsection


@section('scripts')
<script>
  $(document).ready(function() {
    $('.datatables_all').dataTable();            
  } );
</script>
@endsection