<style >
  .table-of-agent td,.table-of-agent th{
    vertical-align: middle!important;
  }
  .modal-dialog-agent{
    max-width: 720px!important;
  }
  .for-lefting-chk{
    left: 115px;
    padding: 24px;
  }
  .form-check-input-setting{
    margin-left: 0!important;
    margin-top: 10px!important;
  }
</style>
@extends('layout')
@section('title')
Agent
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
<!-- Title close -->
<section class="border ">
  <div class="container bg-white"> 
  <div class="row p-3 ">
    <div class="col-md-6">
      <form class="">
      <label for="inputEmail3" class="col-sm-2 col-form-label">Merchant</label>
    <div class="col-sm-4">
       <select class="form-control" id="exampleFormControlSelect1">
      <option></option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
    </div>
    <label for="inputPassword3" class="col-sm-2 col-form-label">Login</label>
    <div class="col-sm-4">
      <input type="password" class="form-control" id="inputPassword3" placeholder="">
    </div>
    
</form>
    </div>
    <div class="col-md-6">
      <form class="">
      <label for="inputEmail3" class="col-sm-2 col-form-label">Role</label>
    <div class="col-sm-4">
       <select class="form-control" id="exampleFormControlSelect1">
      <option></option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
    </div>
    <label for="inputPassword3" class="col-sm-2 col-form-label">Status</label>
    <div class="col-sm-4">
      <select class="form-control" id="exampleFormControlSelect1">
      <option></option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
    </div>   
</form>
    </div>
  </div>
  <hr>
  <div class="row">
    <div class="col-md-12 d-flex justify-content-around">
      <button type="button" class="btn btn-success"><i class="fa fa-search pr-2"></i>Search</button>
      <button type="button" class="btn btn-success" data-toggle="modal" data-target="#adduser-agent"><i class="fa fa-plus-circle pr-2"></i> Add</button>
     <!--  model of add agent -->
<div class="modal" id="adduser-agent" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-dialog-agent" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Create and edit a user</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p><form>
  
  <div class="form-group row">
    <label  class="col-sm-2 col-form-label">Merchant*</label>
    <div class="col-sm-6">
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
    <label  class="col-sm-2 col-form-label">Department*</label>
    <div class="col-sm-6">
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
    <label  class="col-sm-2 col-form-label">Currency*</label>
    <div class="col-sm-6">
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
    <label  class="col-sm-2 col-form-label">Login*</label>
    <div class="col-sm-6">
      <input type="text"  class="form-control" >
    </div>
  </div>
  <div class="form-group row">
    <label  class="col-sm-2 col-form-label">New Password*</label>
    <div class="col-sm-6">
      <input type=""  class="form-control" placeholder="" >
      <small>password strength</small>
    </div>
  </div>
  <div class="form-check for-lefting-chk">
  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
  <label class="form-check-label" for="defaultCheck1">
    Force password change after first login
  </label>
</div>

  <div class="form-group row">
    <label  class="col-sm-2 col-form-label">First Name*</label>
    <div class="col-sm-6">
      <input  class="form-control" id="inputmerchant" placeholder="">
    </div>
  </div>
  <div class="form-group row">
    <label  class="col-sm-2 col-form-label">Last Name*</label>
    <div class="col-sm-6">
      <input  class="form-control" id="inputmerchant" placeholder="">
    </div>
  </div>
  <div class="form-group row">
    <label  class="col-sm-2 col-form-label">Email*</label>
    <div class="col-sm-6">
      <input  class="form-control" id="inputmerchant" placeholder="">
    </div>
  </div>
  <div class="form-group row">
    <label  class="col-sm-2 col-form-label">Phone*</label>
    <div class="col-sm-6">
      <input type="" class="form-control" id="inputmerchant" placeholder="">
    </div>
  </div>
  <div class="form-group row">
    <label  class="col-sm-2 col-form-label">Skype*</label>
    <div class="col-sm-6">
      <input  class="form-control" id="inputmerchant" placeholder="">
    </div>
  </div>
  <div class="form-group row">
    <label  class="col-sm-2 col-form-label">Activated</label>
    <div class="col-sm-6">
      <input class="form-check-input form-check-input-setting" type="checkbox" value="" >
    </div>
  </div>
</form></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-light" data-dismiss="modal"><i class="fa fa-ban"></i> Cancle</button>
        <button type="button" class="btn btn-success">Save </button>
        
      </div>
    </div>
  </div>
</div>
<!-- close model -->

    </div>
  </div>
  <div class="row">
    <div class="col-md-12 p-4 ">
      <div class="overflow-auto">
      <table class="table border table-of-agent datatables_all">
  <thead>
    <tr class="bg-dark text-white">
      <th scope="col">Merchant</th>
      <th scope="col">role</th>
      <th scope="col">Currency</th>
      <th scope="col">Login</th>
      <th scope="col">Email</th>
      <th scope="col">Online</th>
      <th scope="col">Status</th>
      <th scope="col">Last Login Date</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">akq</th>
      <td><button type="button" class="btn btn-info">admin</button></td>
      <td>All</td>
      <td>admin12</td>
      <td>admin@gmail.com</td>
      <td><i class="fa fa-times text-danger d-flex justify-content-center"></i></td>
      <td><button type="button" class="btn btn-success">Activated</button></td>
      <td>12/12/20 15:06</td>
      <td class="d-flex">
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edituser-agent"> <i class="fa fa-clipboard"></i></button>
        <!--  model of edit agent -->
<div class="modal" id="edituser-agent" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-dialog-agent" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Create and edit a user</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p><form>
  <div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Id*</label>
    <div class="col-sm-6">
      <input type="text"  class="form-control" >
    </div>
  </div>
  <div class="form-group row">
    <label  class="col-sm-2 col-form-label">Merchant*</label>
    <div class="col-sm-6">
      <input  class="form-control" id="inputmerchant" placeholder="">
    </div>
  </div>
  <div class="form-group row">
    <label  class="col-sm-2 col-form-label">Department*</label>
    <div class="col-sm-6">
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
    <label  class="col-sm-2 col-form-label">Currency*</label>
    <div class="col-sm-6">
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
    <label  class="col-sm-2 col-form-label">Login*</label>
    <div class="col-sm-6">
      <input type="text"  class="form-control" >
    </div>
  </div>
  <div class="form-check for-lefting-chk">
  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
  <label class="form-check-label" for="defaultCheck1">
    Force password change after first login
  </label>
</div>

  <div class="form-group row">
    <label  class="col-sm-2 col-form-label">First Name*</label>
    <div class="col-sm-6">
      <input  class="form-control" id="inputmerchant" placeholder="">
    </div>
  </div>
  <div class="form-group row">
    <label  class="col-sm-2 col-form-label">Last Name*</label>
    <div class="col-sm-6">
      <input  class="form-control" id="inputmerchant" placeholder="">
    </div>
  </div>
  <div class="form-group row">
    <label  class="col-sm-2 col-form-label">Email*</label>
    <div class="col-sm-6">
      <input  class="form-control" id="inputmerchant" placeholder="">
    </div>
  </div>
  <div class="form-group row">
    <label  class="col-sm-2 col-form-label">Phone*</label>
    <div class="col-sm-6">
      <input type="" class="form-control" id="inputmerchant" placeholder="">
    </div>
  </div>
  <div class="form-group row">
    <label  class="col-sm-2 col-form-label">Skype*</label>
    <div class="col-sm-6">
      <input  class="form-control" id="inputmerchant" placeholder="">
    </div>
  </div>
  <div class="form-group row">
    <label  class="col-sm-2 col-form-label">Activated</label>
    <div class="col-sm-6">
      <input class="form-check-input form-check-input-setting" type="checkbox" value="" >
    </div>
  </div>
</form></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-light" data-dismiss="modal"><i class="fa fa-ban"></i> Cancle</button>
        <button type="button" class="btn btn-success">Save </button>
        
      </div>
    </div>
  </div>
</div>
<!-- close model edit agent -->
      <button type="button" class="btn btn-info" data-toggle="modal" data-target="#password-useragent"><i class="fa fa-lock"></i></button>
      

<!-- Modal -->
<div class="modal fade" id="password-useragent" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-agent" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Password for admin</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
  <div class="form-group row">
    <label for="staticEmail" class="col-sm-4 col-form-label">New Password*</label>
    <div class="col-sm-8">
      <input type="password" class="form-control" placeholder="Password">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword" class="col-sm-4 col-form-label">New Password Confirmation*</label>
    <div class="col-sm-8">
      <input type="password" class="form-control" placeholder="Confirm the new password">
    </div>
  </div>
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-light" data-dismiss="modal"><i class="fa fa-ban"></i> Cancle</button>
        <button type="button" class="btn btn-success">Save </button>
        
        
      </div>
    </div>
  </div>
</div>
    </td>
    </tr> <!-- cr1 -->
    <tr>
      <th scope="row">akq</th>
      <td><button type="button" class="btn btn-info">admin</button></td>
      <td>All</td>
      <td>admin12</td>
      <td>admin@gmail.com</td>
      <td><i class="fa fa-times text-danger d-flex justify-content-center"></i></td>
      <td><button type="button" class="btn btn-success">Activated</button></td>
      <td>12/12/20 15:06</td>
      <td class="d-flex">
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edituser-agent"> <i class="fa fa-clipboard"></i></button>
        <!--  model of edit agent -->
<div class="modal" id="edituser-agent" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-dialog-agent" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Create and edit a user</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p><form>
  <div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Id*</label>
    <div class="col-sm-6">
      <input type="text"  class="form-control" >
    </div>
  </div>
  <div class="form-group row">
    <label  class="col-sm-2 col-form-label">Merchant*</label>
    <div class="col-sm-6">
      <input  class="form-control" id="inputmerchant" placeholder="">
    </div>
  </div>
  <div class="form-group row">
    <label  class="col-sm-2 col-form-label">Department*</label>
    <div class="col-sm-6">
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
    <label  class="col-sm-2 col-form-label">Currency*</label>
    <div class="col-sm-6">
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
    <label  class="col-sm-2 col-form-label">Login*</label>
    <div class="col-sm-6">
      <input type="text"  class="form-control" >
    </div>
  </div>
  <div class="form-check for-lefting-chk">
  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
  <label class="form-check-label" for="defaultCheck1">
    Force password change after first login
  </label>
</div>

  <div class="form-group row">
    <label  class="col-sm-2 col-form-label">First Name*</label>
    <div class="col-sm-6">
      <input  class="form-control" id="inputmerchant" placeholder="">
    </div>
  </div>
  <div class="form-group row">
    <label  class="col-sm-2 col-form-label">Last Name*</label>
    <div class="col-sm-6">
      <input  class="form-control" id="inputmerchant" placeholder="">
    </div>
  </div>
  <div class="form-group row">
    <label  class="col-sm-2 col-form-label">Email*</label>
    <div class="col-sm-6">
      <input  class="form-control" id="inputmerchant" placeholder="">
    </div>
  </div>
  <div class="form-group row">
    <label  class="col-sm-2 col-form-label">Phone*</label>
    <div class="col-sm-6">
      <input type="" class="form-control" id="inputmerchant" placeholder="">
    </div>
  </div>
  <div class="form-group row">
    <label  class="col-sm-2 col-form-label">Skype*</label>
    <div class="col-sm-6">
      <input  class="form-control" id="inputmerchant" placeholder="">
    </div>
  </div>
  <div class="form-group row">
    <label  class="col-sm-2 col-form-label">Activated</label>
    <div class="col-sm-6">
      <input class="form-check-input form-check-input-setting" type="checkbox" value="" >
    </div>
  </div>
</form></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-light" data-dismiss="modal"><i class="fa fa-ban"></i> Cancle</button>
        <button type="button" class="btn btn-success">Save </button>
        
      </div>
    </div>
  </div>
</div>
<!-- close model edit agent -->
      <button type="button" class="btn btn-info" data-toggle="modal" data-target="#password-useragent"><i class="fa fa-lock"></i></button>
      

<!-- Modal -->
<div class="modal fade" id="password-useragent" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-agent" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Password for admin</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
  <div class="form-group row">
    <label for="staticEmail" class="col-sm-4 col-form-label">New Password*</label>
    <div class="col-sm-8">
      <input type="password" class="form-control" placeholder="Password">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword" class="col-sm-4 col-form-label">New Password Confirmation*</label>
    <div class="col-sm-8">
      <input type="password" class="form-control" placeholder="Confirm the new password">
    </div>
  </div>
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-light" data-dismiss="modal"><i class="fa fa-ban"></i> Cancle</button>
        <button type="button" class="btn btn-success">Save </button>
        
        
      </div>
    </div>
  </div>
</div>
    </td>
    </tr> <!-- cr2 -->
    <tr>
      <th scope="row">akq</th>
      <td><button type="button" class="btn btn-info">admin</button></td>
      <td>All</td>
      <td>admin12</td>
      <td>admin@gmail.com</td>
      <td><i class="fa fa-times text-danger d-flex justify-content-center"></i></td>
      <td><button type="button" class="btn btn-success">Activated</button></td>
      <td>12/12/20 15:06</td>
      <td class="d-flex">
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edituser-agent"> <i class="fa fa-clipboard"></i></button>
        <!--  model of edit agent -->
<div class="modal" id="edituser-agent" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-dialog-agent" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Create and edit a user</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p><form>
  <div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Id*</label>
    <div class="col-sm-6">
      <input type="text"  class="form-control" >
    </div>
  </div>
  <div class="form-group row">
    <label  class="col-sm-2 col-form-label">Merchant*</label>
    <div class="col-sm-6">
      <input  class="form-control" id="inputmerchant" placeholder="">
    </div>
  </div>
  <div class="form-group row">
    <label  class="col-sm-2 col-form-label">Department*</label>
    <div class="col-sm-6">
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
    <label  class="col-sm-2 col-form-label">Currency*</label>
    <div class="col-sm-6">
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
    <label  class="col-sm-2 col-form-label">Login*</label>
    <div class="col-sm-6">
      <input type="text"  class="form-control" >
    </div>
  </div>
  <div class="form-check for-lefting-chk">
  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
  <label class="form-check-label" for="defaultCheck1">
    Force password change after first login
  </label>
</div>

  <div class="form-group row">
    <label  class="col-sm-2 col-form-label">First Name*</label>
    <div class="col-sm-6">
      <input  class="form-control" id="inputmerchant" placeholder="">
    </div>
  </div>
  <div class="form-group row">
    <label  class="col-sm-2 col-form-label">Last Name*</label>
    <div class="col-sm-6">
      <input  class="form-control" id="inputmerchant" placeholder="">
    </div>
  </div>
  <div class="form-group row">
    <label  class="col-sm-2 col-form-label">Email*</label>
    <div class="col-sm-6">
      <input  class="form-control" id="inputmerchant" placeholder="">
    </div>
  </div>
  <div class="form-group row">
    <label  class="col-sm-2 col-form-label">Phone*</label>
    <div class="col-sm-6">
      <input type="" class="form-control" id="inputmerchant" placeholder="">
    </div>
  </div>
  <div class="form-group row">
    <label  class="col-sm-2 col-form-label">Skype*</label>
    <div class="col-sm-6">
      <input  class="form-control" id="inputmerchant" placeholder="">
    </div>
  </div>
  <div class="form-group row">
    <label  class="col-sm-2 col-form-label">Activated</label>
    <div class="col-sm-6">
      <input class="form-check-input form-check-input-setting" type="checkbox" value="" >
    </div>
  </div>
</form></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-light" data-dismiss="modal"><i class="fa fa-ban"></i> Cancle</button>
        <button type="button" class="btn btn-success">Save </button>
        
      </div>
    </div>
  </div>
</div>
<!-- close model edit agent -->
      <button type="button" class="btn btn-info" data-toggle="modal" data-target="#password-useragent"><i class="fa fa-lock"></i></button>
      

<!-- Modal -->
<div class="modal fade" id="password-useragent" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-agent" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Password for admin</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
  <div class="form-group row">
    <label for="staticEmail" class="col-sm-4 col-form-label">New Password*</label>
    <div class="col-sm-8">
      <input type="password" class="form-control" placeholder="Password">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword" class="col-sm-4 col-form-label">New Password Confirmation*</label>
    <div class="col-sm-8">
      <input type="password" class="form-control" placeholder="Confirm the new password">
    </div>
  </div>
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-light" data-dismiss="modal"><i class="fa fa-ban"></i> Cancle</button>
        <button type="button" class="btn btn-success">Save </button>
        
        
      </div>
    </div>
  </div>
</div>
    </td>
    </tr> <!-- cr3 -->


  </tbody>
</table>
    </div>
  </div>
  </div>
  </div>



</section>


</div><!-- close right -->





@endsection


@section('scripts')
<script>
        $(document).ready(function() {
            $('.datatables_all').dataTable();            
        } );
</script>
@endsection