<style >
   .fonts-for-btn button{
   font-size: 10px;
   }
   .table th,.table td{
   vertical-align: bottom!important;
   }
   .modal-dialog-style2{
   max-width: 1140px!important;
   }
   .annauncement_models{
   max-width: 400px;
   }
   .btn:focus {
   outline: none;
   box-shadow: none!important;
   }
</style>
@extends('layout')
@section('title')
Affiliate Group
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
     
   </div>
    <!-- Title close -->
   <section class=" bg-white">
   <div class="container  border">
      <div class="row p-3 ">
         <!-- main row -->
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
                  <label  class="col-sm-4 col-form-label">Currency*</label>
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
                     <button type="button" class="btn btn-success"><i class="fa fa-search"></i>  Search</button>
                  </div>
                  <div class="">
                     <button type="button" class="btn btn-success"data-toggle="modal" data-target="#add-group"><i class="fa fa-plus-circle pr-2"></i>Add</button>
                     <!-- Modal -->
                     <div class="modal fade" id="add-group" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                           <div class="modal-content">
                              <div class="modal-header">
                                 <h5 class="modal-title" id="exampleModalLabel">Create</h5>
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
                                             <label class="col-sm-4 col-form-label">Name*</label>
                                             <div class="col-sm-8">
                                                <input type="" class="form-control">
                                             </div>
                                          </div>
                                          <div class="form-group row">
                                             <label class="col-sm-4 col-form-label">Currency*</label>
                                             <div class="col-sm-8">
                                                <select class="form-control" >
                                                   <option></option>
                                                   <option>2</option>
                                                   <option>3</option>
                                                   <option>4</option>
                                                   <option>5</option>
                                                </select>
                                             </div>
                                          </div>
                                          <div class="form-group row">
                                             <label class="col-sm-4 col-form-label">Default Member Group*</label>
                                             <div class="col-sm-8">
                                                <select class="form-control" >
                                                   <option ><small>---Please Select---</small></option>
                                                   <option>2</option>
                                                   <option>3</option>
                                                   <option>4</option>
                                                   <option>5</option>
                                                </select>
                                             </div>
                                          </div>
                                          <div class="form-group row">
                                             <label class="col-sm-4 col-form-label">Remark*</label>
                                             <div class="col-sm-8">
                                                <input type="" class="form-control" placeholder="">
                                             </div>
                                          </div>
                                          <div class="form-group row">
                                             <label class="col-sm-4 col-form-label">Default*</label>
                                             <div class="col-sm-8">
                                                <select class="form-control" >
                                                   <option ><small>No</small></option>
                                                   <option><small>Yes</small></option>
                                                </select>
                                             </div>
                                          </div>
                                          <div class="form-group row">
                                             <label class="col-sm-4 col-form-label">Active*</label>
                                             <div class="col-sm-8">
                                                <select class="form-control" >
                                                   <option ><small>Yes</small></option>
                                                   <option><small>No</small></option>
                                                </select>
                                             </div>
                                          </div>
                                          <div class="form-group row">
                                             <label class="col-sm-4 col-form-label">Seq*</label>
                                             <div class="col-sm-8">
                                                <input type="" class="form-control" name="">
                                             </div>
                                          </div>
                                          <div class="row">
                                             <div class="col-md-4 ">
                                                <div class="form-group row d-flex align-items-center">
                                                   <label class="col-sm-6 col-form-label">Widthrawal Limition</label>
                                                   <div class="col-sm-6">
                                                      <button class="btn btn-light"><small>Unset</small> </button>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-md-4">
                                                <div class="form-group row">
                                                   <label class="col-sm-6 col-form-label">Minimum</label>
                                                   <div class="col-sm-6">
                                                      <input type="" class="form-control" name="">
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-md-4">
                                                <div class="form-group row">
                                                   <label class="col-sm-6 col-form-label">Maximum</label>
                                                   <div class="col-sm-6">
                                                      <input type=""  class="form-control" name="">
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="row">
                                             <div class="col-md-4 ml-auto">
                                                <div class="form-group row">
                                                   <label class="col-sm-6 col-form-label">Daily Count</label>
                                                   <div class="col-sm-6">
                                                      <input type="" class="form-control" name="">
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-md-4">
                                                <div class="form-group row">
                                                   <label class="col-sm-6 col-form-label">Daily Minimum</label>
                                                   <div class="col-sm-6">
                                                      <input type="" class="form-control" name="">
                                                   </div>
                                                </div>
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
               <ul class="nav nav-tabs d-flex align-items-center">
                  <li class="nav-item p-0">
                     <a class="nav-link active p-0" id="transfer" data-toggle="tab" href="#transfer_tab">
                     <input type="button" name="" value="Active Affiliate Group" class="btn px-3">
                     </a>
                  </li>
                  <li class="nav-item p-0">
                     <a class="nav-link p-0" id="WithdrawDeposit" data-toggle="tab" href="#WithdrawDeposit_tab">
                     <input type="button" name="" value="Inactive Affiliate Group" class="btn px-3">
                     </a>
                  </li>
               </ul>
               <div class="tab-content py-3">
                  <div id="transfer_tab" class="container tab-pane active tableoverflow">
                     <div class="overflow-auto">
                        <table class="table datatables_all border">
                           <thead>
                              <tr class="bg-dark text-white">
                                 <th scope="col">ID</th>
                                 <th scope="col">Affiliate Group</th>
                                 <th scope="col">Currency</th>
                                 <th scope="col">Member Group</th>
                                 <th scope="col">Default</th>
                                 <th scope="col">Active</th>
                                 <th scope="col">Seq</th>
                                 <th scope="col">Last Modified Date</th>
                                 <th scope="col">Action</th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                                 <th scope="row">480</th>
                                 <td>gangan</td>
                                 <td>$</td>
                                 <td>101</td>
                                 <td>101</td>
                                 <td></td>
                                 <td></td>
                                 <td>20-12-2020 14:50</td>
                                 <td class="d-flex">
                                    <button class="btn btn-info"><i class="fa fa-clipboard"data-toggle="modal" data-target="#add-group"></i></button>
                                    <button class="btn btn-primary" data-toggle="modal" data-target="#setting-group"><i class="fa fa-cog"></i></button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="setting-group" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                       <div class="modal-dialog modal-dialog-style2" role="document">
                                          <div class="modal-content">
                                             <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Settlement Settings</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                             </div>
                                             <div class="modal-body">
                                                <div class="row">
                                                   <div class="col-md-12">
                                                      <div class="form-group row">
                                                         <div class="col-md-3 d-flex align-items-center justify-content-between">
                                                            <label class=""><small>Active Member Valid Turnover*</small></label>
                                                         </div>
                                                         <div class="col-md-4 d-flex align-items-center justify-content-between">
                                                            <input type="" class="form-control " placeholder="0" name="">
                                                         </div>
                                                         <div class="col-md-5 d-flex align-items-center justify-content-between">
                                                            <small>Member only considered as active members when their valid turnover exceed this amount.Default is 0</small>
                                                         </div>
                                                      </div>
                                                      <div class="form-group row">
                                                         <div class="col-md-3 d-flex align-items-center justify-content-between">
                                                            <label class=""><small>Active Member Minimum Deposit*</small></label>
                                                         </div>
                                                         <div class="col-md-4 d-flex align-items-center justify-content-between">
                                                            <input type="" class="form-control " placeholder="0" name="">
                                                         </div>
                                                         <div class="col-md-5 d-flex align-items-center justify-content-between">
                                                            <small>Member only considered as active members when their valid turnover exceed this amount.Default is 0</small>
                                                         </div>
                                                      </div>
                                                      <div class="form-group row">
                                                         <div class="col-md-3 d-flex align-items-center justify-content-between">
                                                            <label class=""><small>Total Commission Active Members*</small></label>
                                                         </div>
                                                         <div class="col-md-4 d-flex align-items-center justify-content-between">
                                                            <input type="" class="form-control " placeholder="0" name="">
                                                         </div>
                                                         <div class="col-md-5 d-flex align-items-center justify-content-between">
                                                            <small>Member only considered as active members when their valid turnover exceed this amount.Default is 0</small>
                                                         </div>
                                                      </div>
                                                      <div class="form-group row">
                                                         <div class="col-md-3 d-flex align-items-center justify-content-between">
                                                            <label class=""><small>Deposit Transation fee rate(%)*</small></label>
                                                         </div>
                                                         <div class="col-md-4 d-flex align-items-center justify-content-between">
                                                            <input type="" class="form-control " placeholder="0" name="">
                                                         </div>
                                                         <div class="col-md-5 d-flex align-items-center justify-content-between">
                                                            <small>Member only considered as active members when their valid turnover exceed this amount.Default is 0</small>
                                                         </div>
                                                      </div>
                                                      <div class="form-group row">
                                                         <div class="col-md-3 d-flex align-items-center justify-content-between">
                                                            <label class=""><small>Widthraw Transation fee rate(%)*</small></label>
                                                         </div>
                                                         <div class="col-md-4 d-flex align-items-center justify-content-between">
                                                            <input type="" class="form-control " placeholder="0" name="">
                                                         </div>
                                                         <div class="col-md-5 d-flex align-items-center justify-content-between">
                                                            <small>Member only considered as active members when their valid turnover exceed this amount.Default is 0</small>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="modal-footer">
                                                <button type="button" class="btn btn-light" data-dismiss="modal">Cancle</button>
                                                <button type="button" class="btn btn-success">Save</button>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <button class="btn btn-info" data-toggle="modal" data-target="#circle-group"><i class="fa fa-circle"></i></button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="circle-group" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                       <div class="modal-dialog modal-dialog-style2" role="document">
                                          <div class="modal-content">
                                             <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Commission Settings</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                             </div>
                                             <div class="modal-body">
                                                <div class="">
                                                   <h6>Default Setting</h6>
                                                </div>
                                                <div class="row">
                                                   <div class="col-md-10 m-auto">
                                                      <div class="form-group row">
                                                         <div class="col-md-3 d-flex align-items-center justify-content-between">
                                                            <label class=""><small>Minimun Win Account*</small></label>
                                                         </div>
                                                         <div class="col-md-4 d-flex align-items-center justify-content-between">
                                                            <input type="" class="form-control " placeholder="0" name="">
                                                         </div>
                                                         <div class="col-md-5 d-flex align-items-center justify-content-between">
                                                            <small>Minimum win amount for Affiliate Commission</small>
                                                         </div>
                                                      </div>
                                                      <div class="form-group row">
                                                         <div class="col-md-3 d-flex align-items-center justify-content-between">
                                                            <label class=""><small>Max Amount*</small></label>
                                                         </div>
                                                         <div class="col-md-4 d-flex align-items-center justify-content-between">
                                                            <input type="" class="form-control " placeholder="0" name="">
                                                         </div>
                                                         <div class="col-md-5 d-flex align-items-center justify-content-between">
                                                            <small>Max win amount for Affiliate Commission</small>
                                                         </div>
                                                      </div>
                                                      <div class="form-group row">
                                                         <div class="col-md-3 d-flex align-items-center justify-content-between">
                                                            <label class=""><small>Commission Rate(%)*</small></label>
                                                         </div>
                                                         <div class="col-md-4 d-flex align-items-center justify-content-between">
                                                            <input type="" class="form-control " placeholder="0" name="">
                                                         </div>
                                                         <div class="col-md-5 d-flex align-items-center justify-content-between">
                                                            <small>Minimum win amount for Affiliate Commission</small>
                                                         </div>
                                                      </div>
                                                      <div class="form-group row">
                                                         <div class="col-md-3 d-flex align-items-center justify-content-between">
                                                            <label class=""><small>Sub Affiliate Commission rate(%)*</small></label>
                                                         </div>
                                                         <div class="col-md-4 d-flex align-items-center justify-content-between">
                                                            <input type="" class="form-control " placeholder="0" name="">
                                                         </div>
                                                         <div class="col-md-5 d-flex align-items-center justify-content-between">
                                                            <small>Minimum win amount for Affiliate Commission</small>
                                                         </div>
                                                      </div>
                                                      <div class="form-group row">
                                                         <div class="col-md-3 d-flex align-items-center justify-content-between">
                                                            <label class=""><small>Tier Settings*</small></label>
                                                         </div>
                                                         <div class="col-md-4 d-flex align-items-center justify-content-between">
                                                            <input type="" class="form-control " placeholder="0" name="">
                                                         </div>
                                                         <div class="col-md-5 d-flex align-items-center justify-content-between">
                                                            <button class="btn btn-success"><small>Tier Rate Setting</small></button>
                                                         </div>
                                                      </div>
                                                      <div class="form-group row">
                                                         <div class="col-md-3 d-flex align-items-center justify-content-between">
                                                            <label class=""><small>Royality Rate(%)*</small></label>
                                                         </div>
                                                         <div class="col-md-4 d-flex align-items-center justify-content-between">
                                                            <input type="" class="form-control " placeholder="0" name="">
                                                         </div>
                                                         <div class="col-md-5 d-flex align-items-center justify-content-between">
                                                            <small>Minimum win amount for Affiliate Commission</small>
                                                         </div>
                                                      </div>
                                                      <div class="form-group row">
                                                         <div class="col-md-3 d-flex align-items-center justify-content-between">
                                                            <label class=""><small>Exclusive Adjustment*</small></label>
                                                         </div>
                                                         <div class="col-md-4 d-flex align-items-center justify-content-between">
                                                            <input class="" type="checkbox" value="" >
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <hr>
                                                <div class="">
                                                   <h6>Provider Setting</h6>
                                                </div>
                                                <div class="row">
                                                   <div class="col-md-12">
                                                      <div class="overflow-auto">
                                                         <table class="table datatables_all border">
                                                            <thead>
                                                               <tr class="bg-dark text-white">
                                                                  <th scope="col">Provider</th>
                                                                  <th scope="col">Commission Rate(%)</th>
                                                                  <th scope="col">Tier Rate Setting</th>
                                                                  <th scope="col">Ignore loss</th>
                                                                  <th scope="col">Action</th>
                                                               </tr>
                                                            </thead>
                                                            <tbody>
                                                               <tr>
                                                                  <th scope="row"></th>
                                                                  <td class="d-flex align-items-center">
                                                                     <select class="form-control w-75 mr-3">
                                                                        <option></option>
                                                                        <option>2</option>
                                                                        <option>3</option>
                                                                        <option>4</option>
                                                                        <option>5</option>
                                                                     </select>
                                                                     <button class="btn btn-info   m-0">
                                                                     <i class="fa fa-plus-circle small"></i><small>Add</small>  </button>
                                                                  </td>
                                                                  <td></td>
                                                                  <td></td>
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
                                             <div class="modal-footer">
                                                <button type="button" class="btn btn-light" data-dismiss="modal">Cancle</button>
                                                <button type="button" class="btn btn-success">Save</button>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <button class="btn btn-primary"data-toggle="modal" data-target="#circle-group"><i class="fa fa-dollar"></i></button>
                                    <button class="btn btn-success" data-toggle="modal" data-target="#settinglast-group"><i class="fa fa-cog"></i></button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="settinglast-group" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                       <div class="modal-dialog" role="document">
                                          <div class="modal-content">
                                             <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Other Setting</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                             </div>
                                             <div class="modal-body">
                                                <div class="row">
                                                   <div class="col-md-12">
                                                      <div class="form-group row">
                                                         <label class="col-sm-6 col-form-label">Merchant*</label>
                                                         <div class="col-sm-6">
                                                            <input type="" class="form-control" name="">
                                                         </div>
                                                      </div>
                                                      <div class="form-group row">
                                                         <label class="col-sm-6 col-form-label">Name*</label>
                                                         <div class="col-sm-6">
                                                            <input type="" class="form-control" name="">
                                                         </div>
                                                      </div>
                                                      <div class="form-group row">
                                                         <label class="col-sm-6 col-form-label">Hide*</label>
                                                         <div class="col-sm-6">
                                                            <div class="border overflow-auto p-2">
                                                               <div class="">
                                                                  <input class="" type="checkbox">
                                                               <label class="form-check-label">Select All</label>
                                                               </div>
                                                               <div class="">
                                                                  <input class="" type="checkbox">
                                                               <label class="form-check-label">Member With Loss</label>
                                                               </div>
                                                               <div class="">
                                                                  <input class="" type="checkbox">
                                                               <label class="form-check-label">Monthly with Loss</label>
                                                               </div>
                                                               <div class="">
                                                                  <input class="" type="checkbox">
                                                               <label class="form-check-label">Widthrawal</label>
                                                               </div>
                                                               <div class="">
                                                                  <input class="" type="checkbox">
                                                               <label class="form-check-label">Deposit</label>
                                                               </div>
                                                               
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="modal-footer">
                                                <button type="button" class="btn btn-light" data-dismiss="modal">Cancle</button>
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
                  <div id="WithdrawDeposit_tab" class="container tab-pane fade tableoverflow">
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
   $(document).ready(function() {
   	$('.datatables_all').dataTable();            
   } );
</script>
@endsection