<style >
  .fonts-for-btn button{
    font-size: 10px;

  }
  .table-class-sty th,.table-class-sty td{
    vertical-align: unset!important;
  }
  .model-dialoge-style{
    max-width: 820px!important;
  }
</style>
@extends('layout')
@section('title')
Member Message
@endsection
@section('content')
<div class="right_col" role="main">
  <div class="container bg-light">
    <div class="row">
      <div class="col-md-12">
        <div class="page-title">
          <div class="title_left">
            <h3>@yield('title')</h3>
          </div>
        </div>
      </div>
    </div>
    <!-- /////////////////////////Title close -->
  </div>

  <section class=" bg-white">
    <div class="container border">
      <div class="row">
        <div class="col-md-12">
          <ul class="nav nav-tabs px-3 pt-3 " id="myTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Member Message</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Group Message</a>
            </li>

          </ul>
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
              <div class="row p-3 "> <!-- main row -->
                <div class="col-md-6">
                  <div class="row">

                    <div class="col-md-6"> <!-- inner first -->
                      <form>
                        <div class="form-group row">
                          <label for="inputEmail3" class="col-sm-3 col-form-label">Login</label>
                          <div class="col-sm-9">
                            <input type="email" class="form-control" id="inputEmail3" placeholder="">
                          </div>

                        </div>
                        <div class="form-group row">
                          <label for="inputEmail3" class="col-sm-3 col-form-label">Status</label>
                          <div class="col-sm-9">

                            <select class="form-control" id="exampleFormControlSelect1">
                              <option>Active</option>
                              <option>2</option>
                              <option>3</option>
                              <option>4</option>
                              <option>5</option>
                            </select>

                          </div>
                        </div>
                        
                      </form>
                    </div><!-- //close inner first -->

                    <div class="col-md-6"> <!-- 2nd inner  -->
                      <form>
                        <div class="form-group row">
                          <label for="inputEmail3" class="col-sm-3 col-form-label">Group</label>
                          <div class="col-sm-9">
                            <select class="form-control" id="exampleFormControlSelect1">
                              <option>All</option>
                              <option>2</option>
                              <option>3</option>
                              <option>4</option>
                              <option>5</option>
                            </select>
                          </div>

                        </div>
                        <div class="form-group row">
                          <label for="inputEmail3" class="col-sm-3 col-form-label">Currency*</label>
                          <div class="col-sm-9">
                            <select class="form-control" id="exampleFormControlSelect1">
                              <option></option>
                              <option>2</option>
                              <option>3</option>
                              <option>4</option>
                              <option>5</option>
                            </select>
                          </div>
                        </div>

                      </form>


                    </div><!-- //close 2nd inner  -->
                  </div>
                </div>
                <div class="col-md-6">
                  <div>
                    <form>
                      <div class="form-row">
                        <label for="inputEmail3" class=" col-form-label">Group msg id</label>
                        <div class="col">
                          <input type="text" class="form-control" placeholder="">
                        </div>
                        <label for="inputEmail3" class=" col-form-label">Title</label>
                        <div class="col">
                          <input type="text" class="form-control" placeholder="">
                        </div>
                      </div>
                    </form>
                  </div>

                  
                </div>
                <hr>
              </div>
              <div class="row p-3 ">
                <div class="col-lg-3 d-flex">
                  <div class="row mr-2">
                    <label  class="col-sm-12 d-flex align-items-center ">Start*</label>
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
              <!-- **********************button row************* -->
              <div class="row  py-3 m-0">
                <div class="col-md-12 d-flex justify-content-around">
                  <div class="">
                    <button type="button" class="btn btn-primary d-block"><i class="fa fa-times pr-2 "></i>clear</button>
                    <button type="button" class="btn btn-success d-block"><i class="fa fa-search pr-2"></i>Search</button>
                  </div>

                  <div class="">
                    <button type="button" class="btn btn-primary "data-toggle="modal" data-target="#sendtogroup"><i class="fa fa-users pr-2"></i>Send to group</button>
                    <div class="modal" tabindex="-1" id="sendtogroup" role="dialog">
                      <div class="modal-dialog model-dialoge-style" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title">Send Message</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <form>
                              <div class="form-group row">
                                <label  class="col-sm-2 col-form-label">Merchant*</label>
                                <div class="col-sm-10">
                                  <select class="form-control form-control-sm">
                                    <option>aql</option>
                                  </select>
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Currency</label>
                                <div class="col-sm-3">
                                  <select class="form-control form-control-sm">
                                    <option>All</option>
                                  </select>
                                </div>
                                <div class="col-sm-1">Group*</div>
                                <div class="col-sm-6">
                                  <div class="form-check">

                                    <input class="form-check-input" type="checkbox" id="gridCheck1">
                                    <label class="form-check-label pr-4 text-uppercase" for="gridCheck1">
                                      Normal
                                    </label>

                                    <input class="form-check-input" type="checkbox" id="gridCheck2">
                                    <label class="form-check-label pr-4 text-uppercase" for="gridCheck2">
                                      Vip Gold
                                    </label>

                                    <input class="form-check-input" type="checkbox" id="gridCheck3">
                                    <label class="form-check-label pr-4 text-uppercase" for="gridCheck3">
                                      Vip Silver
                                    </label>
                                    <br>
                                    <input class="form-check-input" type="checkbox" id="gridCheck4">
                                    <label class="form-check-label pr-4 text-uppercase" for="gridCheck4">
                                      Vip platinum
                                    </label>
                                    <input class="form-check-input" type="checkbox" id="gridCheck5">
                                    <label class="form-check-label pr-4 text-uppercase" for="gridCheck5">
                                      Vip Diamond
                                    </label>
                                  </div>
                                </div>

                              </div>
                              <div class="form-group row">
                                <label  class="col-sm-2 col-form-label">Send to</label>
                                <div class="col-sm-10">
                                  <select class="form-control form-control-sm">
                                    <option>Both current existing</option>
                                  </select>
                                </div>
                              </div>
                              <div class="form-group row">
                                <label  class="col-sm-2 col-form-label">Title*</label>
                                <div class="col-sm-10">
                                  <input class="form-control form-control-sm" type="text" placeholder="">
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="exampleFormControlTextarea1">Example textarea</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                              </div>
                            </form>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-light" data-dismiss="modal"><i class="fa fa-ban"></i> Cancel</button>
                            <button type="button" class="btn btn-success"><i class="fa fa-paper-plane"></i> Send</button>
                            
                          </div>
                        </div>
                      </div>
                    </div>


                    <button type="button" class="btn btn-success " data-toggle="modal" data-target="#sendtomodel"><i class="fa fa-user pr-2"></i>Send to model</button>
                    <div class="modal" id="sendtomodel" tabindex="-1" role="dialog">
                      <div class="modal-dialog model-dialoge-style" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title">Send Message</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <form>
                              <div class="form-group row">
                                <label  class="col-sm-2 col-form-label">Member list*</label>
                                <div class="col-sm-10">
                                  <button type="button" class="btn btn-success">
                                    <i class="fa fa-clipboard pr-2"></i>
                                  Select Members</button>
                                  <button type="button" class="btn btn-primary">
                                    <i class="fa fa-arrow-down pr-2" ></i>
                                  Import Members</button>
                                </div>
                              </div>
                              <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Title*</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" >
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="exampleFormControlTextarea2">Example textarea</label>
                                <textarea class="form-control" id="exampleFormControlTextarea2" rows="3"></textarea>
                              </div>
                            </form>
                            
                          </div>
                          <div class="modal-footer">

                            <button type="button" class="btn btn-light" data-dismiss="modal"><i class="fa fa-ban"></i> cancel</button>
                            <button type="button" class="btn btn-success"><i class="fa fa-paper-plane pr-2"></i> Send</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div> <!-- close btns row -->
              <!-- ***********************table rows**************** -->
              <hr>

              <div class="row">
                <div class="col-md-12">
                  <div class="overflow-auto">
                <table class="table datatables_all table-class-sty">
                  <thead class="thead-dark">
                    <tr class="">
                      <th scope="col">Group Message</th>
                      <th scope="col">Group</th>
                      <th scope="col">Title</th>
                      <th scope="col">Send to</th>
                      <th scope="col">Created Date</th>
                      <th scope="col">Created By</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="border bg-light">
                      <th scope="row">3054</th>
                      <td><button type="button" class="btn btn-success">Normal</button></td>
                      <td>text message</td>
                      <td>All</td>
                      <td>30/11/2020 18:03:35</td>
                      <td>admin8</td>
                      <td><button type="button" class="btn btn-danger"><i class="fa fa-times "></i></button></td>
                    </tr>

                  </tbody>
                </table>
              </div>
                </div>
              </div>
              
              <!-- close tABLE -->



            </div> <!-- close 1st tab -->

            <!-- second tab starts -->

            <div class="tab-pane fade " id="profile" role="tabpanel" aria-labelledby="profile-tab">
             <div class="row p-3 "> <!-- main row -->
              <div class="col-md-6">
               <div class="row">

                <div class="col-md-6"> <!-- inner first -->
                 <form>
                  <div class="form-group row">
                   <label for="inputEmail3" class="col-sm-3 col-form-label">Login</label>
                   <div class="col-sm-9">
                    <input type="email" class="form-control" id="inputEmail3" placeholder="">
                  </div>

                </div>
                <div class="form-group row">
                 <label for="inputEmail3" class="col-sm-3 col-form-label">Status</label>
                 <div class="col-sm-9">

                  <select class="form-control" id="exampleFormControlSelect1">
                   <option>Active</option>
                   <option>2</option>
                   <option>3</option>
                   <option>4</option>
                   <option>5</option>
                 </select>

               </div>
             </div>
             <div class="form-group row">
               <label for="inputPassword3" class="col-sm-3 col-form-label">Start*</label>
               <div class="col-sm-9">

                <input type="date" name="startdate" class="form-control" placeholder="Start Date">
              </div>
            </div>
          </form>
        </div><!-- //close inner first -->

        <div class="col-md-6"> <!-- 2nd inner  -->
         <form>
          <div class="form-group row">
           <label for="inputEmail3" class="col-sm-3 col-form-label">Group</label>
           <div class="col-sm-9">
            <select class="form-control" id="exampleFormControlSelect1">
             <option>All</option>
             <option>2</option>
             <option>3</option>
             <option>4</option>
             <option>5</option>
           </select>
         </div>

       </div>
       <div class="form-group row">
         <label for="inputEmail3" class="col-sm-3 col-form-label">Currency*</label>
         <div class="col-sm-9">
          <select class="form-control" id="exampleFormControlSelect1">
           <option></option>
           <option>2</option>
           <option>3</option>
           <option>4</option>
           <option>5</option>
         </select>
       </div>
     </div>
     <div class="form-group row">
       <label for="inputPassword3" class="col-sm-3 col-form-label">End*</label>
       <div class="col-sm-9">
        <input type="date" name="enddate" class="form-control" placeholder="End Date">
      </div>
    </div>
  </form>


</div><!-- //close 2nd inner  -->
</div>
</div>
<div class="col-md-6">
 <div>
  <form>
   <div class="form-row">
    <label for="inputEmail3" class=" col-form-label">Group msg id</label>
    <div class="col">
     <input type="text" class="form-control" placeholder="">
   </div>
   <label for="inputEmail3" class=" col-form-label">Title</label>
   <div class="col">
     <input type="text" class="form-control" placeholder="">
   </div>
 </div>
</form>
</div>

<div class="row pt-3">
  <div class="col-md-12 ">

   <label class="d-flex align-items-center pr-2">Range</label>
   <div class="d-flex fonts-for-btn">
    <button type="button" class="btn btn-light small">Today</button>
    <button type="button" class="btn btn-light small">Yesterday</button>
    <button type="button" class="btn btn-light small">This Week</button>
    <button type="button" class="btn btn-light small">Last Week</button>
    <button type="button" class="btn btn-light small">This Month</button>
    <button type="button" class="btn btn-light small">Last Month</button>

  </div>
</div>
</div>

</div>
<hr>
</div>
<hr class="mb-0 ">
<!-- **********************button row************* -->
<div class="row bg-light py-3">
  <div class="col-md-12 d-flex justify-content-around">
   <div class="">
    <button type="button" class="btn btn-primary d-block"><i class="fa fa-times pr-2 "></i>clear</button>
    <button type="button" class="btn btn-success d-block"><i class="fa fa-search pr-2"></i>Search</button>
  </div>

  <div class="">
    <button type="button" class="btn btn-success " data-toggle="modal" data-target="#sendtogroup2"><i class="fa fa-users pr-2"></i>Send to group</button>
    <div class="modal" tabindex="-1" id="sendtogroup2" role="dialog">
     <div class="modal-dialog model-dialoge-style" role="document">
      <div class="modal-content">
       <div class="modal-header">
        <h5 class="modal-title">Send Message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
         <span aria-hidden="true">×</span>
       </button>
     </div>
     <div class="modal-body">
      <form>
       <div class="form-group row">
        <label class="col-sm-2 col-form-label">Merchant*</label>
        <div class="col-sm-10">
         <select class="form-control form-control-sm">
          <option>aql</option>
        </select>
      </div>
    </div>
    <div class="form-group row">
      <label for="inputPassword3" class="col-sm-2 col-form-label">Currency</label>
      <div class="col-sm-3">
       <select class="form-control form-control-sm">
        <option>All</option>
      </select>
    </div>
    <div class="col-sm-1">Group*</div>
    <div class="col-sm-6">
     <div class="form-check">

      <input class="form-check-input" type="checkbox" id="gridCheck1">
      <label class="form-check-label pr-4 text-uppercase" for="gridCheck1">
       Normal
     </label>

     <input class="form-check-input" type="checkbox" id="gridCheck2">
     <label class="form-check-label pr-4 text-uppercase" for="gridCheck2">
       Vip Gold
     </label>

     <input class="form-check-input" type="checkbox" id="gridCheck3">
     <label class="form-check-label pr-4 text-uppercase" for="gridCheck3">
       Vip Silver
     </label>
     <br>
     <input class="form-check-input" type="checkbox" id="gridCheck4">
     <label class="form-check-label pr-4 text-uppercase" for="gridCheck4">
       Vip platinum
     </label>
     <input class="form-check-input" type="checkbox" id="gridCheck5">
     <label class="form-check-label pr-4 text-uppercase" for="gridCheck5">
       Vip Diamond
     </label>
   </div>
 </div>

</div>
<div class="form-group row">
  <label class="col-sm-2 col-form-label">Send to</label>
  <div class="col-sm-10">
   <select class="form-control form-control-sm">
    <option>Both current existing</option>
  </select>
</div>
</div>
<div class="form-group row">
  <label class="col-sm-2 col-form-label">Title*</label>
  <div class="col-sm-10">
   <input class="form-control form-control-sm" type="text" placeholder="">
 </div>
</div>
<div class="form-group">
  <label for="exampleFormControlTextarea1">Example textarea</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>
</form>
</div>
<div class="modal-footer">
  <button type="button" class="btn btn-light" data-dismiss="modal"><i class="fa fa-close"></i> Cancel</button>
  <button type="button" class="btn btn-success"><i class="fa fa-paper-plane"></i> Send</button>

</div>
</div>
</div>
</div>
</div>
</div>
</div> <!-- close btns row -->
<!-- ***********************table rows**************** -->
<table class="table table-class-sty">
  <thead class="thead-dark">
   <tr class="">
    <th scope="col">Group Message</th>
    <th scope="col">Group</th>
    <th scope="col">Title</th>
    <th scope="col">Send to</th>
    <th scope="col">Created Date</th>
    <th scope="col">Created By</th>
    <th scope="col">Action</th>
  </tr>
</thead>
<tbody>
 <tr class="border bg-light">
  <th scope="row">3054</th>
  <td><button type="button" class="btn btn-success">Normal</button></td>
  <td>text message</td>
  <td>All</td>
  <td>30/11/2020 18:03:35</td>
  <td>admin8</td>
  <td><button type="button" class="btn btn-danger"><i class="fa fa-times "></i></button></td>
</tr>

</tbody>
</table>
<!-- close tABLE -->
<!-- **************pagination************** -->
<div class="">
  <nav aria-label="Page navigation example" class="d-flex justify-content-end pr-4">
   <ul class="pagination">
    <li class="page-item">
     <a class="page-link" href="#" aria-label="Previous">
      <span aria-hidden="true">«</span>
      <span class="sr-only">Previous</span>
    </a>
  </li>
  <li class="page-item"><a class="page-link" href="#">1</a></li>
  <li class="page-item"><a class="page-link" href="#">2</a></li>
  <li class="page-item"><a class="page-link" href="#">3</a></li>
  <li class="page-item">
   <a class="page-link" href="#" aria-label="Next">
    <span aria-hidden="true">»</span>
    <span class="sr-only">Next</span>
  </a>
</li>
</ul>
</nav>
</div>
<!-- close pagination -->


</div>

</div>  
</div>
</div>
</div>
</section>
</div>





@endsection


@section('scripts')
<script>

</script>
@endsection