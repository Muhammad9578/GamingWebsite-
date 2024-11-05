<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from colorlib.com/polygon/gentelella/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Feb 2021 19:57:06 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>

    <style type="text/css">
        .row-topbar-style{
            margin-left: 230px!important;
            margin-right: 0px!important;
            background: #fff;
        }
        .ul-head-top-set li{
            display: inline-block;
            list-style: none;
            padding: 0 3px;
        }
        .ul-head-top-set li i{
            font-size: 18px;
            color: #73879c;
        }
        .ul-head-top-set li span{
         color: #73879c;
        }
/*        -------------------------------------------*/
        .preview_image_cms{
            max-width: 120px;
            max-height: 60px;
        }
        .cms_table td{
            vertical-align: unset !important;
            padding: 5px !important;
        }
        .datatables_all{
          min-width: 820px;
      }
      .cms_models{
          max-width: 780px !important;
      }
      .padding_col div{
          padding-top: 8px;
      }
      .table_gap tr td, .tr_gap td{
          padding-top: 8px !important;
      }
      .align-top::after{
        vertical-align: top;
    }
    .profile_image_size{
        width: 220px;
        height: 220px;
    }
    /*for size  ofcolum in member info*/
    .big_col{
        min-width: 230px;
    }
    .member_list td , .member_list th{
        min-width: 140px;
    }
    .complain_models label{
        text-align: right;
    }
    /**/


    /**/
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
    .border_light{
        border:1px solid #d6d6d6;
    }
    /**/
    ::-webkit-scrollbar {
      width: 10px;
      height: 0px;
  }
  ::-webkit-scrollbar-track {
      background: transparent; 
  }
  /* Chrome, Safari, Edge, Opera */
  input[type=number]::-webkit-outer-spin-button,
  input[type=number]::-webkit-inner-spin-button {
      -webkit-appearance: none;
      margin: 0;
  }

  /* Firefox */
  input[type=number] {
      -moz-appearance: textfield;
  }
  @media (max-width: 1200px) {
    .row-topbar-style{
            margin-left: 0px!important;
            padding-left:140px!important;
        }

      
  }
  @media (max-width: 991px) {

        .row-topbar-style{
            padding-left:0px!important;

        }      
  }

  @media (max-width: 767px){
    .padding_col div{
        display: block;
    }
   /* @media (max-width: 1140px) {
        .for-setting-screen-1140{
                flex: 100%!important; 
                max-width: 100%!important;
        }
    }*/
}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="images/favicon.ico" type="image/ico" />
<title>Gentelella Alela! | </title>
<link href="{{asset('fassets/cdn.datatables.net/1.10.20/css/jquery.dataTables.min.html')}}">
<link href="{{asset('fassets/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('fassets/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
<link href="{{asset('fassets/vendors/nprogress/nprogress.css')}}" rel="stylesheet">
<link href="{{asset('fassets/vendors/iCheck/skins/flat/green.css')}}" rel="stylesheet">
<link href="{{asset('fassets/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet">
<link href="{{asset('fassets/vendors/jqvmap/dist/jqvmap.min.css')}}" rel="stylesheet" />
<link href="{{asset('fassets/vendors/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">
<link href="{{asset('fassets/build/css/custom.min.css')}}" rel="stylesheet">
<link href="{{asset('fassets/vendors/pnotify/dist/pnotify.css')}}" rel="stylesheet">
<link href="{{asset('fassets/vendors/pnotify/dist/pnotify.buttons.css')}}" rel="stylesheet">
<link href="{{asset('fassets/vendors/pnotify/dist/pnotify.nonblock.css')}}" rel="stylesheet">
<link href="{{asset('fassets/vendors/nprogress/nprogress.css')}}" rel="stylesheet">

<link href="{{asset('fassets/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('fassets/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('fassets/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('fassets/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('fassets/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css')}}" rel="stylesheet">
</head>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0;">
                        <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Back Office</span></a>
                    </div>
                    <div class="clearfix"></div>

                    <div class="text-center">


                        <div class="user-info">
                            {{-- <h4 class="font-16 ">{{Auth::user()->name}}</h4> --}}
                            <span class="text-muted user-status">
                                <hr>
                                @if (Auth::user()->type=='admin')
                                <span class="text-white">Admin Panel</span>
                                @else
                                <span class="account-position">Student Panel</span>
                                @endif

                            </span>
                            <hr>
                        </div>
                    </div>

                    <br />

                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                        <div class="menu_section">

                            <ul class="nav side-menu">
                                <li><a href="{{url('dashboard')}}"><i class="fa fa-home"></i> Dashboard <span class=""></span></a>
                                </li>
                                <li><a><i class="fa fa-users" aria-hidden="true"></i> 1. Member <span class="fa fa-chevron-down"></span></a>
                                      <ul class="nav child_menu">
                                        <li><a href="{{url('members/info')}}"> 1.1 Member Info</a></li>
                                        <li><a href="{{url('member/edit')}}"> 1.2 Member Edit</a></li>
                                        <li><a href="{{url('member/group')}}"> 1.3 Member Group</a></li>
                                        <li><a href="{{url('member/funds')}}"> 1.4 Member Funds</a></li>
                                        <li><a href="{{url('member/online')}}"> 1.5 Member Online</a></li>
                                        <li><a href="{{url('member/trace')}}"> 1.6 Member Trace </a></li>
                                        <li><a href="{{url('member/application')}}"> 1.12 Promotion Application </a></li>
                                    </ul>
                                </li>                                
                                <li><a><i class="fa fa-money" aria-hidden="true"></i> 2. Deposite/Withdraw <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="{{url('deposite')}}"> 2.1 Deposite</a></li>
                                        <li><a href="{{url('withdraw')}}"> 2.2 Withdraw</a></li>
                                        <li><a href="{{url('adjustment')}}"> 2.3 Adjustment</a></li>
                                        <li><a href="{{url('wallet')}}"> 2.4 Wallet Transfer</a></li>
                                        <li><a href="{{url('merchantbank')}}"> 2.5 Merchant Bank Transcation</a></li>

                                    </ul>
                                </li>
                                <li><a><i class="fa fa-gift" aria-hidden="true"></i> 3. Promotion <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="{{url('promotion_member')}}"> 3.1 Member Promotions</a></li>

                                        <li><a href="{{url('promotion_apply')}}"> 3.2 Promotion Apply</a></li>
                                        <li><a href="{{url('promotion_statistic')}}"> 3.3 Promotion Statistic</a></li>
                                        <li><a href="{{url('promotion_code')}}"> 3.4 Promotion Code</a></li>
                                        <li><a href="{{url('promotion_content')}}"> 3.5 Promotion Content</a></li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-reply-all" aria-hidden="true"></i> 4. Rebate <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="{{url('rebate_release')}}"> 4.1 Rebate Release</a></li>
                                        <li><a href="{{url('history')}}"> 4.2 Rebate History</a></li>
                                        <li><a href="{{url('member_rebate')}}"> 4.3 Member Rebate History</a></li>
                                        <li><a href="{{('rebate_setting')}}"> 4.3 Rebate Settings</a></li>

                                    </ul>
                                </li>

                                <li><a><i class="fa fa-line-chart" aria-hidden="true"></i> 5. Report <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="form.html">General Form</a></li>
                                        <li><a href="form_advanced.html">Advanced Components</a></li>
                                        <li><a href="form_validation.html">Form Validation</a></li>
                                        <li><a href="form_wizards.html">Form Wizard</a></li>
                                        <li><a href="form_upload.html">Form Upload</a></li>
                                        <li><a href="form_buttons.html">Form Buttons</a></li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-edit"></i> 6. System Message <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="{{url('announcement')}}"> 6.1 Announcement</a></li>
                                        <li><a href="{{url('member/messages')}}"> 6.2 Member Message</a></li>
                                        <li><a href="{{url('system/notificaton')}}"> 6.3 System Notification</a></li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-university" aria-hidden="true"></i> 7. Bank/Payment <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="{{route('bank/settings')}}">Bank Settings</a></li>
                                        <li><a href="{{route('bank/details')}}">Bank Details</a></li>
                                        <li><a href="{{route('deposit/details')}}">Deposit Details</a></li>
                                        <li><a href="{{route('transection/recon')}}">Transection Recon</a></li>
                                    </ul>
                                </li>                               
                                <li><a><i class="fa fa-sitemap" aria-hidden="true"></i> 8. Affiliate <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="{{url('Affiliate/Approval')}}">Affiliate Approval</a></li>
                                        <li><a href="{{url('Affiliate/List')}}">Affiliate List</a></li>
                                        <li><a href="{{url('Affiliate/Approval/History')}}">Affiliate Approval History</a></li>
                                        <li><a href="{{url('Affiliate/Domain')}}">Affiliate Domain</a></li>
                                        <li><a href="{{url('Affiliate/Group')}}">Affiliate Group</a></li>
                                        <li><a href="{{url('Affiliate/Gallery')}}">Affiliate Gallery</a></li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-usd" aria-hidden="true"></i> 9. Affiliate Comm <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="{{url('Aff_Generate_Comm')}}">Aff Generate Comm</a></li>
                                        <li><a href="{{url('Aff_Comm_History')}}">Aff Comm History</a></li>
                                        <li><a href="{{url('Aff_Withdrawal')}}">Aff Withdrawal</a></li>
                                        <li><a href="{{url('Aff_Withdrawal_History')}}">Aff Withdrawal History</a></li>
                                        <li><a href="{{url('Aff_Deposit')}}">Aff Deposit</a></li>
                                        <li><a href="{{url('Aff_Transfer_History')}}">Aff Transfer History</a></li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-wrench" aria-hidden="true"></i> 10. System Settings <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="{{url('game/provider')}}"> 10.1 Game Provider</a></li>
                                        <li><a href="{{url('department')}}"> 10.2 Department</a></li>
                                        <li><a href="{{url('agent')}}"> 10.3 Agent</a></li>
                                        <li><a href="{{url('adveritisement')}}">10.4 Adverstiment </a></li>
                                        <li><a href="{{url('IpWhitelist')}}"> 10.5 IP Whishlist</a></li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-file-image-o" aria-hidden="true"></i> 11. CMS <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="{{url('website/setting')}}"> 11.1 Website Setting</a></li>
                                        <li><a href="{{url('banner/setting')}}"> 11.2 Banner Setting</a></li>
                                        <li><a href="{{url('contact/setting')}}"> 11.3 Contact Setting</a></li>
                                        <li><a href="{{url('affliate/banner/setting')}}"> 11.4 Affiliate Banner Setting</a></li>
                                        <li><a href="{{url('seo/metadata')}}"> 11.5 SEO Metadata</a></li>
                                        <li><a href="{{url('seo/scripts')}}"> 11.6 SEO Scriptis</a></li>
                                        <li><a href="{{url('vip/banner/setting')}}"> 11.7 VIP Banner Setting</a></li>
                                        <li><a href="{{url('odds/feed/setting')}}"> 11.8 Odds Feed Setting</a></li>

                                    </ul>
                                </li>                                
                                <li><a><i class="fa fa-yelp" aria-hidden="true"></i> 12. Compliance <span class="fa fa-chevron-down"></span></a>



                                    <ul class="nav child_menu">
                                        <li><a href="{{route('member/compliance')}}">
                                        Member Complaince Report</a></li>
                                        <li><a href="{{route('risk/setting')}}">RISK Setting</a></li>
                                        <li><a href="{{route('member/info')}}">Member Info</a></li>
                                        <li><a href="{{route('withdrawal')}}"> withdrawal</a></li>
                                        
                                        <li><a href="{{route('member/password')}}">Member Password</a></li>
                                        <li><a href="{{route('compliance/roadbook')}}">Compliance Roadbook</a></li>
                                        <li><a href="{{route('batchmember/update')}}"> Batch Member Update</a></li>
                                    </ul>
                                </li>                                
                            </ul>
                        </div>

                    </div>


                    <div class="sidebar-footer hidden-small">
                        <a data-toggle="tooltip" data-placement="top" title="Settings">
                            <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                            <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Lock">
                            <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Logout" href="{{route('user.logout')}}">
                            <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                        </a>
                    </div>

                </div>
            </div>

<!--           ----------------------------------topbar------------------- -->
<div class="bg-light">
<div class="row   bg-light row-topbar-style">
            <div class="col-xl-3 py-2  d-flex justify-content-center">
                <div class="nav toggle">
                    <a id="menu_toggle"><i class="fa fa-bars"></i></a>

                </div>
                <div class="nav  ">
                    <a id="menu_toggle">
                        <h6 class="text-muted">Merchant Credit Bal :</h6>
                        <h4 class="font-weight-bolder">USD123,254,589</h4>
                    </a>       
                </div>
            </div>
            <div class="col-xl-9 pr-0 d-flex align-items-center justify-content-center">
                <nav class="nav navbar-nav d-inline-block ">
                    <ul class=" ul-head-top-set mb-0 pl-0">
                        <li class="dropdown notification-list">
                            <a class="nav-link  arrow-none media-tooltip"  data-toggle="tooltip" data-placement="bottom"
                            title="New Notification" role="button" aria-haspopup="false"
                            aria-expanded="false">
                            <i class="fa fa-bell" aria-hidden="true" ></i>   
                        </a>
                    </li>
                    <!-- 1 -->

                    <li class="dropdown notification-list topbar-dropdown">
                        <a class="nav-link  d-flex align-items-center " href="#" role="button" aria-haspopup="false"
                        aria-expanded="false"
                        >
                        <span class="align-middle d-none d-sm-inline-block" style="font-size: 35px">|</span>
                    </a>

                </li>
                <!-- 2 -->
                <li class="dropdown notification-list topbar-dropdown">
                    <a class="nav-link  arrow-none" href="#" role="button" aria-haspopup="false"
                    aria-expanded="false">

                    <span class="align-middle d-none d-sm-inline-block" >MEMBER</span>
                </a>

            </li>
            <!-- 3 -->
            <li class="dropdown notification-list">
                <a class="nav-link  arrow-none media-tooltip"  data-toggle="tooltip" data-placement="bottom"
                title="New Member" role="button" aria-haspopup="false"
                aria-expanded="false">
                <i class="fa fa-user" aria-hidden="true" ></i>

            </a>

        </li>
        <!-- 4 -->           
        <li class="dropdown notification-list">
            <a class="nav-link  arrow-none media-tooltip"  data-toggle="tooltip" data-placement="bottom"
            title="Pendding Deposite" role="button" aria-haspopup="false"
            aria-expanded="false">
            <i class="fa fa-upload" aria-hidden="true" ></i>
        </a>
    </li>
    <!-- 5 -->       
    <li class="dropdown notification-list">
        <a class="nav-link  arrow-none media-tooltip"  data-toggle="tooltip" data-placement="bottom"
        title="In Progress Deposite" role="button" aria-haspopup="false"
        aria-expanded="false">
        <i class="fa fa-upload" aria-hidden="true" ></i>
    </a>
</li>
<!-- 6 -->
<li class="dropdown notification-list">
    <a class="nav-link  arrow-none media-tooltip"  data-toggle="tooltip" data-placement="bottom"
    title="Pending Widthdraw" role="button" aria-haspopup="false"
    aria-expanded="false">
    <i class="fa fa-download" aria-hidden="true" ></i> 
</a>
</li>
<!-- 7 -->
<li class="dropdown notification-list">
    <a class="nav-link  arrow-none media-tooltip"  data-toggle="tooltip" data-placement="bottom"
    title="In Progress Widthdraw" role="button" aria-haspopup="false"
    aria-expanded="false">
    <i class="fa fa-download" aria-hidden="true" ></i>
</a>
</li>
<!-- 8 -->
<li class="dropdown notification-list">
    <a class="nav-link  " href="#" >
    <i class="fa fa-gift" aria-hidden="true" ></i>
</a>
</li>
<!-- 9 -->
<li class="dropdown notification-list">
    <a class="nav-link   media-tooltip"  data-toggle="tooltip" data-placement="bottom"
    title="Notification" role="button" aria-haspopup="false"
    aria-expanded="false">
    <i class="fa fa-bell" aria-hidden="true" ></i>
</a>
</li>
<!-- 10 -->
<li class="dropdown notification-list topbar-dropdown">
    <a class="nav-link  d-flex align-items-center" href="#" role="button" aria-haspopup="false"
    aria-expanded="false">
    
    <span class="align-middle d-none d-sm-inline-block" style="font-size: 35px;">|</span>
</a>
</li>
<!-- 11 --> 
<li class="dropdown notification-list topbar-dropdown">
    <a class="nav-link  " href="#" >    
    <span class="align-middle d-none d-sm-inline-block" >AFFILIATE</span>
</a>
</li>
<!-- 12 -->
<li class="dropdown notification-list">
    <a class="nav-link " href="#">
    <i class="fa fa-user" aria-hidden="true"></i>
</a>
</li>
<!-- 13 -->
<li class="dropdown notification-list">
        <a class="nav-link  " href="#">
        <i class="fa fa-download" aria-hidden="true"></i>
    </a>
</li>
<!-- 14 -->
<li class="dropdown notification-list">
            <a class="nav-link  " href="#" >
            <i class="fa fa-upload" aria-hidden="true" ></i>     
        </a>
        
    </li>
    <!-- 15 -->
    <li class="dropdown notification-list">
            <a class="nav-link  " href="#" >
            <i class="fa fa-upload" aria-hidden="true" ></i>     
        </a>
        
    </li>
    <!-- 16 -->
    <li class="dropdown notification-list topbar-dropdown">
                        <a class="nav-link  d-flex align-items-center " href="#" 
                        >
                        <span class="align-middle d-none d-sm-inline-block" style="font-size: 35px">|</span>
                    </a>

                </li>
                <!-- 17 -->

                <div class="d-inline-block">
                                 <li class="dropdown notification-list topbar-dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        
                        <span class="align-middle d-none d-sm-inline-block"><i class="fa fa-globe" aria-hidden="true"> </i></span> <i class="mdi mdi-chevron-down d-none d-sm-inline-block align-middle"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated topbar-dropdown-menu" >
                        
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            
                           <span class="align-middle">ภาษาไทย</span>
                       </a>
                       
                       <!-- item-->
                       <a href="javascript:void(0);" class="dropdown-item notify-item">
                        
                        <span class="align-middle">中文</span>
                    </a>
                    
                </div>
            </li>
            <!-- 18 -->
            <li class="nav-item dropdown open">
                                <a href="javascript:;" class="user-profile dropdown-toggle text-decoration-none" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-user pr-2" aria-hidden="true" ></i>Admin
                            </a>
                            
                            <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="javascript:;"><i class="fa fa-bars" aria-hidden="true"> Log Views</i> </a> 
                            <a class="dropdown-item" href="javascript:;"><i class="fa fa-cog" aria-hidden="true"> Settings</i> </a>
                            <a class="dropdown-item" href="javascript:;"><i class="fa fa-unlock-alt" aria-hidden="true"> Password</i> </a>
                            <a class="dropdown-item" href="http://127.0.0.1:8000/logout"><i class="fa fa-sign-out "> Sign Out</i>
                            </a>
                        </div>
                    </li>
                    <!-- 19 -->
                </div>
   
</ul>
</nav>
<!-- close 1st nav -->


</div>
</div>
</div>
@yield('content')
<footer>
    <div class="pull-right">
        Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com/">Colorlib</a>
    </div>
    <div class="clearfix"></div>
</footer>
</div>
</div>

<script src="{{asset('fassets/vendors/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('fassets/vendors/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('fassets/vendors/fastclick/lib/fastclick.js')}}"></script>
<script src="{{asset('fassets/vendors/nprogress/nprogress.js')}}"></script>
<script src="{{asset('fassets/vendors/Chart.js/dist/Chart.min.js')}}"></script>
<script src="{{asset('fassets/vendors/gauge.js/dist/gauge.min.js')}}"></script>
<script src="{{asset('fassets/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>
<script src="{{asset('fassets/vendors/iCheck/icheck.min.js')}}"></script>
<script src="{{asset('fassets/vendors/skycons/skycons.js')}}"></script>
<script src="{{asset('fassets/vendors/Flot/jquery.flot.js')}}"></script>
<script src="{{asset('fassets/vendors/Flot/jquery.flot.pie.js')}}"></script>
<script src="{{asset('fassets/vendors/Flot/jquery.flot.time.js')}}"></script>
<script src="{{asset('fassets/vendors/Flot/jquery.flot.stack.js')}}"></script>
<script src="{{asset('fassets/vendors/Flot/jquery.flot.resize.js')}}"></script>
<script src="{{asset('fassets/vendors/flot.orderbars/js/jquery.flot.orderBars.js')}}"></script>
<script src="{{asset('fassets/vendors/flot-spline/js/jquery.flot.spline.min.js')}}"></script>
<script src="{{asset('fassets/vendors/flot.curvedlines/curvedLines.js')}}"></script>
<script src="{{asset('fassets/vendors/DateJS/build/date.js')}}"></script>
<script src="{{asset('fassets/vendors/jqvmap/dist/jquery.vmap.js')}}"></script>
<script src="{{asset('fassets/vendors/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>
<script src="{{asset('fassets/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js')}}"></script>
<script src="{{asset('fassets/vendors/moment/min/moment.min.js')}}"></script>
<script src="{{asset('fassets/vendors/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
<script src="{{asset('fassets/build/js/custom.min.js')}}"></script>
<script src="{{asset('fassets/vendors/pnotify/dist/pnotify.js')}}"></script>
<script src="{{asset('fassets/vendors/pnotify/dist/pnotify.buttons.js')}}"></script>
<script src="{{asset('fassets/vendors/pnotify/dist/pnotify.nonblock.js')}}"></script>
<script src="{{asset('fassets/vendors/fastclick/lib/fastclick.js')}}"></script>
<script src="{{asset('fassets/vendors/nprogress/nprogress.js')}}"></script>
<script src="{{asset('fassets/vendors/Chart.js/dist/Chart.min.js')}}"></script>

<script src="{{asset('fassets/vendors/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('fassets/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
<script src="{{asset('fassets/vendors/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('fassets/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js')}}"></script>
<script src="{{asset('fassets/vendors/datatables.net-buttons/js/buttons.flash.min.js')}}"></script>
<script src="{{asset('fassets/vendors/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('fassets/vendors/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('fassets/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js')}}"></script>
<script src="{{asset('fassets/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js')}}"></script>
<script src="{{asset('fassets/vendors/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('fassets/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js')}}"></script>
<script src="{{asset('fassets/vendors/datatables.net-scroller/js/dataTables.scroller.min.js')}}"></script>
<script src="{{asset('fassets/vendors/jszip/dist/jszip.min.js')}}"></script>
<script src="{{asset('fassets/vendors/pdfmake/build/pdfmake.min.js')}}"></script>
<script src="{{asset('fassets/vendors/pdfmake/build/vfs_fonts.js')}}"></script>
<script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
<link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
@yield('scripts')
<script type="text/javascript">
    $(document).ready(function() {
        $('.datatables_all').dataTable();            
    } );
</script>
</body>

<!-- Mirrored from colorlib.com/polygon/gentelella/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Feb 2021 19:57:29 GMT -->

</html>