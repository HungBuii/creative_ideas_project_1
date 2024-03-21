@extends('admin.Website.layout.app')

@section('title', 'Admin Profile')

@section('main_content')

<section class="pcoded-main-container">
    <div class="pcoded-content">
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Profile</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#!"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">{{ Auth::guard('admin')->user()->name }}'s
                                    Profile</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="main-container ace-save-state" id="main-container">
            <div class="main-content">
                <div class="main-content-inner">

                    <div class="page-content">
                        <div class="row">
                            <div class="col-xs-12">
                                {{-- <div class="hr dotted">

                                </div> --}}

                                <div>
                                    <div id="user-profile-1" class="user-profile row">
                                        <div class="col-xs-12 col-sm-3 center">
                                            <div>
                                                <span class="profile-picture">
                                                    <img id="avatar" class="editable img-responsive" alt="User's Avatar"
                                                        src="{{ asset('uploads/admin.jpg') }}" />
                                                </span>

                                                <div class="space-4">

                                                </div>

                                                <div
                                                    class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
                                                    <div class="inline position-relative">
                                                        <span class="white">{{ Auth::guard('admin')->user()->name }}</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="hr hr12 dotted">

                                            </div>

                                            <div class="hr hr16 dotted">

                                            </div>
                                        </div>

                                        <div class="col-xs-12 col-sm-9">

                                            <div class="space-12">

                                            </div>

                                            <div class="profile-user-info profile-user-info-striped">
                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> Name </div>

                                                    <div class="profile-info-value">
                                                        <span class="editable" id="username">{{ Auth::guard('admin')->user()->name }}</span>
                                                    </div>
                                                </div>

                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> Gmail </div>

                                                    <div class="profile-info-value">
                                                        <span class="editable" id="age">{{ Auth::guard('admin')->user()->email }}</span>
                                                    </div>
                                                </div>

                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> Joined </div>

                                                    <div class="profile-info-value">
                                                        <span class="editable" id="signup">{{ Auth::guard('admin')->user()->created_at }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="dashboard.html">
                                                <button type="button" class="btn btn-secondary"
                                                    style="margin-left: 40%; margin-top: 3%;"><i
                                                        class="feather mr-2 icon-home"></i>Back to Homepage
                                                </button>
                                            </a>
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

</section>

@endsection

{{--
<!DOCTYPE html>
<html lang="en">

<head>
    <title>User Profile</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="keywords" content="">


    <!-- vendor css -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />


    <!-- ace styles -->
    <link rel="stylesheet" href="{{ asset('css/ace.min.css') }}" class="ace-main-stylesheet" id="main-ace-style" />

</head>

<body class="">
    <header class="navbar pcoded-header navbar-expand-lg navbar-light header-dark">


        <div class="m-header">
            <a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
            <a href="#!" class="b-brand">
            </a>
            <a href="#!" class="mob-toggler">
                <i class="feather icon-more-vertical"></i>
            </a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
                <li>
                    <div class="dropdown">
                        <a class="dropdown-toggle" href="#" data-toggle="dropdown">
                            <i class="icon feather icon-bell"></i>
                            <span class="badge badge-pill badge-danger">5</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right notification">
                            <div class="noti-head">
                                <h6 class="d-inline-block m-b-0">Notifications</h6>
                                <div class="float-right">
                                    <a href="#!" class="m-r-10">mark as read</a>
                                    <a href="#!">clear all</a>
                                </div>
                            </div>
                            <ul class="noti-body">
                                <li class="n-title">
                                    <p class="m-b-0">NEW</p>
                                </li>
                                <li class="notification">
                                    <div class="media">
                                        <img class="img-radius" src="" alt="Generic placeholder image">
                                        <div class="media-body">
                                            <p><strong>John Doe</strong><span class="n-time text-muted"><i
                                                        class="icon feather icon-clock m-r-10"></i>5 min</span></p>
                                            <p>New ticket Added</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="noti-footer">
                                <a href="#!">show all</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="dropdown drp-user">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="feather icon-user"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-notification">
                            <div class="pro-head">
                                <img src="" class="img-radius" alt="User-Profile-Image">
                                <span>John Doe</span>
                                <a href="auth-signin.html" class="dud-logout" title="Logout">
                                    <i class="feather icon-log-out"></i>
                                </a>
                            </div>
                            <ul class="pro-body" style="justify-content: space-between;margin-left: 0;">
                                <li><a href="profile.html" class="dropdown-item"><i class="feather icon-user"></i>
                                        Profile</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div>


    </header>
    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>

    <nav class="pcoded-navbar">
        <div class="navbar-wrapper">
            <div class="navbar-content scroll-div ">

                <div class="main-menu-header">
                    <a href="dashboard.html">
                        <div style="font-size: 25px">
                            <span><i class="feather icon-home" style="padding-right: 5px;"></span></i>
                            Admin Page
                        </div>
                    </a>
                </div>

                <ul class="nav pcoded-inner-navbar"
                    style="display: flex;justify-content: space-between;margin-left: 0;">
                    <li class="nav-item pcoded-menu-caption">
                        <label>Navigation</label>
                    </li>
                    <li class="nav-item">
                        <a href="/dashboard.html" class="nav-link ">
                            <span class="pcoded-micon"><i class="feather icon-bar-chart"></i></span>
                            <span class="pcoded-mtext">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item pcoded-hasmenu">
                        <a href="#!" class="nav-link ">
                            <span class="pcoded-micon"><i class="feather icon-layout"></i></span>
                            <span class="pcoded-mtext">System Management</span>
                        </a>
                        <ul class="pcoded-submenu">
                            <li><a href="/index.html" target="_blank">Account</a></li>
                            <li><a href="#!" target="_blank">Event</a></li>
                        </ul>
                    </li>
                </ul>

            </div>

        </div>
        </div>
    </nav>

    <div class="pcoded-main-container">
        <div class="pcoded-content">

            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h5 class="m-b-10">User Profile</h5>
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#!"><i class="feather icon-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="#!">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="#!">User Profile</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <div class="main-container ace-save-state" id="main-container">
            <div class="main-content">
                <div class="main-content-inner">

                    <div class="page-content">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="hr dotted"></div>

                                <div>
                                    <div id="user-profile-1" class="user-profile row">
                                        <div class="col-xs-12 col-sm-3 center">
                                            <div>
                                                <span class="profile-picture">
                                                    <img id="avatar" class="editable img-responsive" alt="User's Avatar"
                                                        src="https://avatarfiles.alphacoders.com/992/thumb-99223.gif" />
                                                </span>

                                                <div class="space-4"></div>

                                                <div
                                                    class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
                                                    <div class="inline position-relative">
                                                        <span class="white">John Doe</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="hr hr12 dotted"></div>

                                            <div class="clearfix">
                                                <div class="grid2">
                                                    <span class="bigger-175 blue">25</span>

                                                    <br />
                                                    Posts
                                                </div>

                                                <div class="grid2">
                                                    <span class="bigger-175 blue">12</span>

                                                    <br />
                                                    Course Joined
                                                </div>
                                            </div>

                                            <div class="hr hr16 dotted"></div>
                                        </div>

                                        <div class="col-xs-12 col-sm-9">

                                            <div class="space-12"></div>

                                            <div class="profile-user-info profile-user-info-striped">
                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> Name </div>

                                                    <div class="profile-info-value">
                                                        <span class="editable" id="username">John Doe</span>
                                                    </div>
                                                </div>

                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> Gmail </div>

                                                    <div class="profile-info-value">
                                                        <span class="editable" id="age">2@gmail.com</span>
                                                    </div>
                                                </div>

                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> Joined </div>

                                                    <div class="profile-info-value">
                                                        <span class="editable" id="signup">2010/06/20</span>
                                                    </div>
                                                </div>

                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> About Me </div>

                                                    <div class="profile-info-value">
                                                        <span class="editable" id="about">22 years old, anime avatar
                                                            profile picture</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="dashboard.html"><button type="button" class="btn btn-secondary"
                                                    style="margin-left: 40%; margin-top: 3%;"><i
                                                        class="feather mr-2 icon-home"></i>Back to Homepage</button></a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
                <i class="ace-icon fa fa-angle-double-up icon-only bigger-110">haha</i>
            </a>
        </div>




        <script src="{{ asset('js/vendor-all.min.js') }}"></script>
        <script src="{{ asset('js/plugins/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/pcoded.min.js') }}"></script>


</body>

</html> --}}