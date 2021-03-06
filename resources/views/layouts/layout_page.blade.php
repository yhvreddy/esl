<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>@yield('title_name')</title>
    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{asset('public/assets/css/app.min.css')}}">
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{asset('public/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/css/components.css')}}">
    <!-- Custom style CSS -->
    <link rel="stylesheet" href="{{asset('public/assets/css/custom.css')}}">
    <link rel='shortcut icon' type='image/x-icon' href="{{asset('public/assets/img/>favicon.ico')}}">
    <link rel="stylesheet" href="{{asset('public/assets/bundles/datatables/datatables.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/bundles/datatables/DataTables-1.10.16\css\dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/bundles/summernote/summernote-bs4.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/bundles/select2/dist/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/bundles/bootstrap-daterangepicker/daterangepicker.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/bundles/owlcarousel2/dist/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/bundles/owlcarousel2/dist/assets/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/bundles/bootstrap-social/bootstrap-social.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    <style>
        .select2-container--default .select2-selection--single .select2-selection__rendered {
            color: #444;
            line-height: 40px !important;
        }
        .select2-container--default .select2-selection--multiple .select2-selection__choice {
            background-color: #6778f0 !important;
            padding: 0 10px !important;
        }
        .select2-container--default .select2-selection--multiple .select2-selection__choice__remove {
            margin-right: 6px !important;
            color: #f1f0f0 !important;
        }
        .fa-c13{
            font-size: 1.3em;
        }
    </style>
</head>

<body>
<div class="loader"></div>
<div id="app">
    <div class="main-wrapper main-wrapper-1">
        <div class="navbar-bg"></div>
        <nav class="navbar navbar-expand-lg main-navbar sticky">
            <div class="form-inline mr-auto">
                <ul class="navbar-nav mr-3">
                    <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg collapse-btn"> <i data-feather="align-justify"></i></a></li>
                    <li><a href="#" class="nav-link nav-link-lg fullscreen-btn">
                            <i data-feather="maximize"></i>
                        </a></li>
                    <li>
                        <form class="form-inline mr-auto">
                            <div class="search-element">
                                <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="200">
                                <button class="btn" type="submit">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </form>
                    </li>
                </ul>
            </div>
            <ul class="navbar-nav navbar-right">
                <li class="dropdown dropdown-list-toggle">
                    <a href="#" data-toggle="dropdown" class="nav-link nav-link-lg message-toggle"><i data-feather="mail"></i>
                        <span class="badge headerBadge1"> 4 </span>
                    </a>
                    <div class="dropdown-menu dropdown-list dropdown-menu-right pullDown">
                        <div class="dropdown-header">
                            Messages
                            <div class="float-right">
                                <a href="#">Mark All As Read</a>
                            </div>
                        </div>
                        <div class="dropdown-list-content dropdown-list-message">
                            <a href="#" class="dropdown-item">
                                <span class="dropdown-item-avatar text-white"> <img alt="image" src="{{asset('public/assets/img/users/user-1.png')}}" class="rounded-circle"></span>
                                <span class="dropdown-item-desc"> <span class="message-user">John Deo</span>
                                <span class="time messege-text">Please check your mail !!</span>
                                <span class="time">2 Min Ago</span>
                              </span>
                            </a>
                            <a href="#" class="dropdown-item">
                                <span class="dropdown-item-avatar text-white"> <img alt="image" src="{{asset('public/assets/img/users/user-2.png')}}" class="rounded-circle"></span>
                                <span class="dropdown-item-desc"> <span class="message-user">John Deo</span>
                                <span class="time messege-text">Please check your mail !!</span>
                                <span class="time">2 Min Ago</span>
                              </span>
                            </a>
                            <a href="#" class="dropdown-item">
                                <span class="dropdown-item-avatar text-white"> <img alt="image" src="{{asset('public/assets/img/users/user-3.png')}}" class="rounded-circle"></span>
                                <span class="dropdown-item-desc"> <span class="message-user">John Deo</span>
                                <span class="time messege-text">Please check your mail !!</span>
                                <span class="time">2 Min Ago</span>
                              </span>
                            </a>
                            <a href="#" class="dropdown-item">
                                <span class="dropdown-item-avatar text-white"> <img alt="image" src="{{asset('public/assets/img/users/user-4.png')}}" class="rounded-circle"></span>
                                <span class="dropdown-item-desc"> <span class="message-user">John Deo</span>
                                <span class="time messege-text">Please check your mail !!</span>
                                <span class="time">2 Min Ago</span>
                              </span>
                            </a>
                        </div>
                        <div class="dropdown-footer text-center">
                            <a href="#">View All <i class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>
                </li>
                <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link notification-toggle nav-link-lg"><i data-feather="bell" class="bell"></i>
                    </a>
                    <div class="dropdown-menu dropdown-list dropdown-menu-right pullDown">
                        <div class="dropdown-header">
                            Notifications
                            <div class="float-right">
                                <a href="#">Mark All As Read</a>
                            </div>
                        </div>
                        <div class="dropdown-list-content dropdown-list-icons">
                            <a href="#" class="dropdown-item dropdown-item-unread"> <span class="dropdown-item-icon bg-primary text-white"> <i class="fas
												fa-code"></i>
                  </span> <span class="dropdown-item-desc"> Template update is
                    available now! <span class="time">2 Min
                      Ago</span>
                  </span>
                            </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-icon bg-info text-white"> <i class="far
												fa-user"></i>
                  </span> <span class="dropdown-item-desc"> <b>You</b> and <b>Dedik
                      Sugiharto</b> are now friends <span class="time">10 Hours
                      Ago</span>
                  </span>
                            </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-icon bg-success text-white"> <i class="fas
												fa-check"></i>
                  </span> <span class="dropdown-item-desc"> <b>Kusnaedi</b> has
                    moved task <b>Fix bug header</b> to <b>Done</b> <span class="time">12
                      Hours
                      Ago</span>
                  </span>
                            </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-icon bg-danger text-white"> <i class="fas fa-exclamation-triangle"></i>
                  </span> <span class="dropdown-item-desc"> Low disk space. Let's
                    clean it! <span class="time">17 Hours Ago</span>
                  </span>
                            </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-icon bg-info text-white"> <i class="fas
												fa-bell"></i>
                  </span> <span class="dropdown-item-desc"> Welcome to Otika
                    template! <span class="time">Yesterday</span>
                  </span>
                            </a>
                        </div>
                        <div class="dropdown-footer text-center">
                            <a href="#">View All <i class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>
                </li>
                <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user"> <img alt="image" src="{{asset('public/assets/img/user.png')}}" class="user-img-radious-style"> <span class="d-sm-none d-lg-inline-block"></span></a>
                    <div class="dropdown-menu dropdown-menu-right pullDown">
                        <div class="dropdown-title">Hello Sarah Smith</div>
                        <a href="profile.html" class="dropdown-item has-icon"> <i class="far
										fa-user"></i> Profile
                        </a> <a href="timeline.html" class="dropdown-item has-icon"> <i class="fas fa-bolt"></i>
                            Activities
                        </a> <a href="" class="dropdown-item has-icon"> <i class="fas fa-cog"></i>
                            Settings
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="auth-login.html" class="dropdown-item has-icon text-danger"> <i class="fas fa-sign-out-alt"></i>
                            Logout
                        </a>
                    </div>
                </li>
            </ul>
        </nav>
        @extends('layouts.layout_menu')
        <!-- Main Content -->
        <div class="main-content">
            <section class="section">
                @if(Session::has('success'))
                    <script type="text/javascript">
                        swal({
                            title:'Success!',
                            text:"{{Session::get('success')}}",
                            timer:5000,
                            type:'success'
                        }).then((value) => {
                            //location.reload();
                        }).catch(swal.noop);
                    </script>
                @endif
                @if(Session::has('failed'))
                    <script type="text/javascript">
                        swal({
                            title:'Oops!',
                            text:"{{Session::get('failed')}}",
                            type:'error',
                            timer:5000
                        }).then((value) => {
                            //location.reload();
                        }).catch(swal.noop);
                    </script>
                @endif

                @yield('content')
            </section>
            <div class="settingSidebar">
                <a href="javascript:void(0)" class="settingPanelToggle"> <i class="fa fa-spin fa-cog"></i>
                </a>
                <div class="settingSidebar-body ps-container ps-theme-default">
                    <div class=" fade show active">
                        <div class="setting-panel-header">Setting Panel
                        </div>
                        <div class="p-15 border-bottom">
                            <h6 class="font-medium m-b-10">Select Layout</h6>
                            <div class="selectgroup layout-color w-50">
                                <label class="selectgroup-item">
                                    <input type="radio" name="value" value="1" class="selectgroup-input-radio select-layout" checked="">
                                    <span class="selectgroup-button">Light</span>
                                </label>
                                <label class="selectgroup-item">
                                    <input type="radio" name="value" value="2" class="selectgroup-input-radio select-layout">
                                    <span class="selectgroup-button">Dark</span>
                                </label>
                            </div>
                        </div>
                        <div class="p-15 border-bottom">
                            <h6 class="font-medium m-b-10">Sidebar Color</h6>
                            <div class="selectgroup selectgroup-pills sidebar-color">
                                <label class="selectgroup-item">
                                    <input type="radio" name="icon-input" value="1" class="selectgroup-input select-sidebar">
                                    <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip" data-original-title="Light Sidebar"><i class="fas fa-sun"></i></span>
                                </label>
                                <label class="selectgroup-item">
                                    <input type="radio" name="icon-input" value="2" class="selectgroup-input select-sidebar" checked="">
                                    <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip" data-original-title="Dark Sidebar"><i class="fas fa-moon"></i></span>
                                </label>
                            </div>
                        </div>
                        <div class="p-15 border-bottom">
                            <h6 class="font-medium m-b-10">Color Theme</h6>
                            <div class="theme-setting-options">
                                <ul class="choose-theme list-unstyled mb-0">
                                    <li title="white" class="active">
                                        <div class="white"></div>
                                    </li>
                                    <li title="cyan">
                                        <div class="cyan"></div>
                                    </li>
                                    <li title="black">
                                        <div class="black"></div>
                                    </li>
                                    <li title="purple">
                                        <div class="purple"></div>
                                    </li>
                                    <li title="orange">
                                        <div class="orange"></div>
                                    </li>
                                    <li title="green">
                                        <div class="green"></div>
                                    </li>
                                    <li title="red">
                                        <div class="red"></div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="p-15 border-bottom">
                            <div class="theme-setting-options">
                                <label class="m-b-0">
                                    <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input" id="mini_sidebar_setting">
                                    <span class="custom-switch-indicator"></span>
                                    <span class="control-label p-l-10">Mini Sidebar</span>
                                </label>
                            </div>
                        </div>
                        <div class="p-15 border-bottom">
                            <div class="theme-setting-options">
                                <label class="m-b-0">
                                    <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input" id="sticky_header_setting">
                                    <span class="custom-switch-indicator"></span>
                                    <span class="control-label p-l-10">Sticky Header</span>
                                </label>
                            </div>
                        </div>
                        <div class="mt-4 mb-4 p-3 align-center rt-sidebar-last-ele">
                            <a href="#" class="btn btn-icon icon-left btn-primary btn-restore-theme">
                                <i class="fas fa-undo"></i> Restore Default
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer class="main-footer">
            <div class="footer-left">
                Copyright &copy; {{date('Y')}} <div class="bullet"></div> Developed By <a href="#">yhvreddy</a>
            </div>
            <div class="footer-right"></div>
        </footer>
    </div>
</div>
<!-- General JS Scripts -->
<script src="{{asset('public/assets/js/app.min.js')}}"></script>
<!-- JS Libraies -->
<script src="{{asset('public/assets/bundles/apexcharts/apexcharts.min.js')}}"></script>
<!-- Page Specific JS File -->
<script src="{{asset('public/assets/js/page/index.js')}}"></script>
<!-- Template JS File -->
<script src="{{asset('public/assets/js/scripts.js')}}"></script>
<!-- Custom JS File -->
<script src="{{asset('public/assets/js/custom.js')}}"></script>

<script src="{{asset('public/assets/bundles/datatables/datatables.min.js')}}"></script>
<script src="{{asset('public/assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('public/assets/bundles/jquery-ui/jquery-ui.min.js')}}"></script>
<script src="{{asset('public/assets/bundles/summernote/summernote-bs4.js')}}"></script>
<script src="{{asset('public/assets/bundles/select2/dist/js/select2.full.min.js')}}"></script>
<script src="{{asset('public/assets/bundles/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
<script src="{{asset('public/assets/js/page/forms-advanced-forms.js')}}"></script>
<script src="{{asset('public/assets/bundles/chartjs/chart.min.js')}}"></script>
<script src="{{asset('public/assets/bundles/owlcarousel2/dist/owl.carousel.min.js')}}"></script>
<script src="{{asset('public/assets/js/page/widget-data.js')}}"></script>
<script>
    $(document).ready(function(){
        $(".alert").fadeTo(2000, 500).slideUp(500, function(){
            $(".alert").slideUp(1000);
        });
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();
        });
        $('.datatable').dataTable();
        $('select').select2();
    });
</script>
<script>
    var xlocationsatus = document.getElementById("locationStatus");
    /*function getLocation() {
        if (navigator.geolocation) {
            navigator.geolocation.watchPosition(showPosition);
        } else {
            xlocationsatus.innerHTML = "Geolocation is not supported by this browser.";
        }
    }*/
    $('#getGeoLocation').click(function(){
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(position){
                console.log(position);
                $.get( "http://maps.googleapis.com/maps/api/geocode/json?latlng="+ position.coords.latitude + "," + position.coords.longitude +"&sensor=false"+"CA&key=AIzaSyARX8R2S5Ni2YBChp5EvBqo5bdVnXjZXDY", function(data) {
                    console.log(data);
                    document.getElementById("locationStatus").innerText = "Successfully Get Location.";
                    document.getElementById('showGeoLocation').value = position.coords.latitude + "," + position.coords.longitude;
                })

                /*var img = new Image();
                img.src = "https://maps.googleapis.com/maps/api/staticmap?center=" + position.coords.latitude + "," + position.coords.longitude + "&zoom=13&size=800x400&sensor=false";
                $('#output').html(img);*/
            });
        }
    });



</script>
</body>

</html>
