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
  .annauncement_models{
    max-width: 400px;
  }
</style>
@extends('layout')
@section('title')
Member Password
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
  </div>
<section class="bg-white">
  <div class="container border p-3 pt-3">
    <ul class="nav nav-tabs d-flex align-items-center">
      <li class="nav-item p-0">
        <a class="nav-link active p-0" id="transfer" data-toggle="tab" href="#transfer_tab">
          <input type="button" name="" value="Member Password" class="btn px-4">
        </a>
      </li>
      <li class="nav-item p-0">
        <a class="nav-link p-0" id="WithdrawDeposit" data-toggle="tab" href="#WithdrawDeposit_tab">
          <input type="button" name="" value="Same Member Password" class="btn px-3">
        </a>
      </li>
    </ul>
    <div class="tab-content">
      <div id="transfer_tab" class="container tab-pane active tableoverflow">
        <div class="row">
          <div class="col-12 d-flex">
            <div class="d-flex p-3 align-items-center">
              <label>
                <input type="radio" name="encryptpass" class="mr-1">
                Encrypt Password
              </label>
              
              <input type="text" name="" class="form-control">

            </div>
            <div class="d-flex p-3 align-items-center">
              <label>
                <input type="radio" name="encryptpass" class="f mr-1">
                Decrypt Password
              </label>
              <input type="text" name="" class="form-control">
            </div>
          </div>
          <div class="col-md-11 ml-auto">
            <button class="btn btn-primary"><i class="fa fa-times"></i> Clear</button>
            <button class="btn btn-success"><i class="fa fa-search"></i> Search</button>
          </div>
          <div class="col-md-12 p-5 d-flex align-items-center">
            <strong class="mr-2">Result</strong>
            <input type="text" name="" class="form-control w-50 mr-2 " id="result">
            <button class="btn btn-primary py-2" onclick="copy()"><i class="fa  fa-copy"></i></button>
          </div>
        </div>
      </div>





      <div id="WithdrawDeposit_tab" class="container tab-pane fade tableoverflow">
        <div class="row">
          <div class="col-12 d-flex">
            <div class="d-flex p-3 align-items-center">
              <label>
                <input type="radio" name="encryptpass" class="mr-1">
                Encrypt Password
              </label>
              
              <input type="text" name="" class="form-control">

            </div>
            <div class="d-flex p-3 align-items-center">
              <label>
                <input type="radio" name="encryptpass" class="f mr-1">
                Decrypt Password
              </label>
              <input type="text" name="" class="form-control">
            </div>
          </div>
          <div class="col-md-11 ml-auto">
            <button class="btn btn-primary"><i class="fa fa-times"></i> Clear</button>
            <button class="btn btn-success"><i class="fa fa-search"></i> Search</button>
          </div>
          <div class="col-md-12">
              <table class="table datatables_all table-striped table-bordered cms_table" cellspacing="0" width="100%">
                <thead class="thead-dark">
                  <tr class="">
                    <th scope="col">ID</th>
                    <th scope="col"> Login</th>
                    <th scope="col">Name</th>
                    <th scope="col">Curancy</th>
                    <th scope="col"> Group</th>
                    <th scope="col"> Status </th>
                    <th scope="col"> Phone </th>
                  </tr>
                </thead>
                <tbody>
                </tbody>
              </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</div>




<!-- model -->

<!-- EDIT BANNER Model model -->
<div class="modal fade " id="addstyle" role="dialog">
    <div class="annauncement_models modal-dialog ">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4> Add Style</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-12"><b>Web</b></div>
            <div class="col-6 pl-2 d-flex align-items-center pl-3">
              <span class="mr-2">speed</span>
              <select class="">
                  <option >Select Option</option>
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                </select>
            </div>
            <div class="col-6 ">
              <span class="mr-2"> color </span>
              <input type="color" name="color" value="#50573a">
            </div>
          </div>
          <div class="row">
            <div class="col-md-12"><b>Mobile</b></div>
            <div class="col-6 pl-2 d-flex align-items-center pl-3">
              <span class="mr-2">speed</span>
              <select class="">
                  <option >Select Option</option>
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                </select>
            </div>
            <div class="col-6">
              <span class="mr-2"> color </span>
              <input type="color" name="color" value="#c8f542">
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-white" data-dismiss="modal"><i class="fa fa-ban mr-1"></i>Cancel</button>
          <button type="button" class="btn btn-primary"> Save</button>
        </div>
      </div>
    </div>
  </div>





  <div class="modal fade " id="add_anauncement" role="dialog">
    <div class="cms_models modal-dialog ">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4> Add anauncement</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
            <table class="w-100 form-group">
          <tbody>
            <tr class="my-2">
              <td>
                <label>Content Type*</label>
              </td>
              <td colspan="">
                <select class="form-control">
                  <option>Select any Option</option>
                </select>
              </td>
            </tr>
            <tr class="my-2">
              <td>Marchent</td>
              <td colspan="">
                <input type="text" name="" class="form-control">
              </td>
            </tr>
            <tr class="my-2">
              <td> Index </td>
              <td colspan="">
                <input type="text" name="index" class="form-control">
              </td>
            </tr>
            <tr class="my-2">
              <td>Status</td>
              <td class="">
                <input type="checkbox" name="Status" class="mr-2">Active
              </td>
            </tr>

            <tr class="my-2">
              <td> Start Date </td>
              <td colspan="">
                <input type="date" name="index" class="form-control">
              </td>
            </tr>

            <tr class="my-2">
              <td> End Date </td>
              <td colspan="">
                <input type="date" name="index" class="form-control">
              </td>
            </tr>

            <tr class="py-2">
              <td class="py-4"> Language </td>
            </tr>
            <tr class="my-2">
              <td class="py-1"> En_NC </td>
            </tr>
            <tr>
              <td colspan="2" class="py-1">
                <input type="text" name="language" class="form-control">
              </td>
            </tr>

            <tr class="my-2">
              <td class="py-1"> En_NC </td>
            </tr>
            <tr>
              <td colspan="2" class="py-1">
                <input type="text" name="language" class="form-control">
              </td>
            </tr>

            <tr class="my-2">
              <td class="py-1"> En_NC </td>
            </tr>
            <tr>
              <td colspan="2" class="py-1">
                <input type="text" name="language" class="form-control">
              </td>
            </tr>
            <tr class="my-2">
              <td class="py-1"> En_NC </td>
            </tr>
            <tr>
              <td colspan="2" class="py-1">
                <input type="text" name="language" class="form-control">
              </td>
            </tr>
          </tbody>
      </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-white" data-dismiss="modal"><i class="fa fa-ban mr-1"></i>Cancel</button>
          <button type="button" class="btn btn-primary"> Save</button>
        </div>
      </div>
    </div>
  </div>
  <!-- Edit 43 Banner model end-->

<!-- model -->


@endsection


@section('scripts')
<script>
  function copy() {
    var copyText = document.getElementById("result");
    copyText.select();
    document.execCommand("copy");
  }
</script>
@endsection