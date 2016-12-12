<!DOCTYPE html>
<html lang="en">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Gentallela Alela! | </title>

        <!-- Bootstrap core CSS -->

        <link href="{{ URL::asset('adm/css/bootstrap.min.css')}}" rel="stylesheet">

        <link href="{{ URL::asset('adm/fonts/css/font-awesome.min.css')}}" rel="stylesheet">
        <link href="{{ URL::asset('adm/css/animate.min.css')}}" rel="stylesheet">

        <!-- Custom styling plus plugins -->
        <link href="{{ URL::asset('adm/css/custom.css')}}" rel="stylesheet">
        <link href="{{ URL::asset('adm/css/icheck/flat/green.css')}}" rel="stylesheet">
        
        


        <script src="{{ URL::asset('adm/js/jquery.min.js')}}"></script>

        <!--[if lt IE 9]>
              <script src="../assets/js/ie8-responsive-file-warning.js"></script>
              <![endif]-->

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
                <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
                <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
              <![endif]-->

    </head>


    <body class="nav-md">

        <div class="container body">


            <div class="main_container">

                <div class="col-md-3 left_col">
                    <div class="left_col scroll-view">

                        <div class="navbar nav_title" style="border: 0;">
                            <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Gentellela Alela!</span></a>
                        </div>
                        <div class="clearfix"></div>

                        <!-- menu prile quick info -->
                        <div class="profile">
                            <div class="profile_pic">
                                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
                            </div>
                            <div class="profile_info">
                                <span>Welcome,</span>
                                <h2>John Doe</h2>
                            </div>
                        </div>
                        <!-- /menu prile quick info -->

                        <br />

                        <!-- sidebar menu -->
                        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

                            <div class="menu_section">
                                <h3>General</h3>
                                <ul class="nav side-menu">
                                    <li><a><i class="fa fa-home"></i> Category <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu" style="display: none">
                                            <li><a href="{{Url::to('/admin/categories')}}">Manage Category</a></li>
                                            <li><a href="{{Url::to('/admin/category/add')}}">Add Category</a></li>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a><i class="fa fa-home"></i> News <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu" style="display: none">
                                            <li><a href="{{Url::to('/admin/news')}}">Manage News</a></li>
                                            <li><a href="{{Url::to('/admin/news/featured')}}">Featured News</a></li>
                                            <li><a href="{{Url::to('/admin/news/add')}}">Add News</a></li>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="{{Url::to('/sliders')}}"><i class="fa fa-home"></i> Manage Slider</a>
                                        
                                    </li>
                                    <li><a><i class="fa fa-home"></i> Widgets <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu" style="display: none">
                                            <li><a href="{{Url::to('/categories')}}">Manage Category</a></li>
                                            <li><a href="{{Url::to('/category/add')}}">Add Category</a></li>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a><i class="fa fa-home"></i> Settings <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu" style="display: none">
                                            <li><a href="{{Url::to('/categories')}}">General Setting</a></li>
                                            <li><a href="{{Url::to('/categories')}}">Layout Setting</a></li>
                                            <li><a href="{{Url::to('/categories')}}">Social Setting</a></li>
                                            <li><a href="{{Url::to('/categories')}}">Other Setting</a></li>
                                            </li>
                                        </ul>
                                    </li>
                                    
                                </ul>
                            </div>

                        </div>
                        <!-- /sidebar menu -->

                        
                    </div>
                </div>

                <!-- top navigation -->
                <div class="top_nav">

                    <div class="nav_menu">
                        <nav class="" role="navigation">
                            <div class="nav toggle">
                                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                            </div>

                            <ul class="nav navbar-nav navbar-right">
                                <li class="">
                                    <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                        <img src="images/img.jpg" alt="">John Doe
                                        <span class=" fa fa-angle-down"></span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-usermenu animated fadeInDown pull-right">
                                        <li><a href="javascript:;">  Profile</a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <span class="badge bg-red pull-right">50%</span>
                                                <span>Settings</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">Help</a>
                                        </li>
                                        <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                                        </li>
                                    </ul>
                                </li>

                            </ul>
                        </nav>
                    </div>

                </div>
                <!-- /top navigation -->

                <!-- page content -->
                <div class="right_col" role="main">
                    
                   
                    
                    
                    @yield('content')
                    
                    

                    <!-- footer content -->
                    <footer>
                        <div class="copyright-info">
                            <p class="pull-right">Gentelella - Bootstrap Admin Template <a href="http://sonusindhu.com">Sonu Sindhu</a>    
                            </p>
                        </div>
                        <div class="clearfix"></div>
                    </footer>
                    <!-- /footer content -->

                </div>
                <!-- /page content -->
            </div>

        </div>

        <div id="custom_notifications" class="custom-notifications dsp_none">
            <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
            </ul>
            <div class="clearfix"></div>
            <div id="notif-group" class="tabbed_notifications"></div>
        </div>

        <script src="{{ URL::asset('adm/js/bootstrap.min.js')}}"></script>

        <!-- bootstrap progress js -->
        <script src="{{ URL::asset('adm/js/progressbar/bootstrap-progressbar.min.js')}}"></script>
        <script src="{{ URL::asset('adm/js/nicescroll/jquery.nicescroll.min.js')}}"></script>
        <!-- icheck -->
        <script src="{{ URL::asset('adm/js/icheck/icheck.min.js')}}"></script>
        <!-- pace -->
        <script src="{{ URL::asset('adm/js/pace/pace.min.js')}}"></script>
        <script src="{{ URL::asset('adm/js/custom.js')}}"></script>
        
        
        <link href="{{ URL::asset('adm/js/datatables/jquery.dataTables.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ URL::asset('adm/js/datatables/buttons.bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ URL::asset('adm/js/datatables/fixedHeader.bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ URL::asset('adm/js/datatables/responsive.bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ URL::asset('adm/js/datatables/scroller.bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- Datatables-->
        <script src="{{ URL::asset('adm/js/datatables/jquery.dataTables.min.js')}}"></script>
        <script src="{{ URL::asset('adm/js/datatables/dataTables.bootstrap.js')}}"></script>
        <!--<script src="{{ URL::asset('adm/js/datatables/dataTables.buttons.min.js')}}"></script>-->
        <!--<script src="{{ URL::asset('adm/js/datatables/buttons.bootstrap.min.js')}}"></script>-->
        <!--<script src="{{ URL::asset('adm/js/datatables/jszip.min.js')}}"></script>-->
        <!--<script src="{{ URL::asset('adm/js/datatables/pdfmake.min.js')}}"></script>-->
        <!--<script src="{{ URL::asset('adm/js/datatables/vfs_fonts.js')}}"></script>-->
        <!--<script src="{{ URL::asset('adm/js/datatables/buttons.html5.min.js')}}"></script>-->
        <!--<script src="{{ URL::asset('adm/js/datatables/buttons.print.min.js')}}"></script>-->
        <!--<script src="{{ URL::asset('adm/js/datatables/dataTables.fixedHeader.min.js')}}"></script>-->
        <!--<script src="{{ URL::asset('adm/js/datatables/dataTables.keyTable.min.js')}}"></script>-->
        <!--<script src="{{ URL::asset('adm/js/datatables/dataTables.responsive.min.js')}}"></script>-->
        <!--<script src="{{ URL::asset('adm/js/datatables/responsive.bootstrap.min.js')}}"></script>-->
        <!--<script src="{{ URL::asset('adm/js/datatables/dataTables.scroller.min.js')}}"></script>-->
        
        <script type="text/javascript">
          $(document).ready(function() {
            $('#datatable').dataTable();
            $('#datatable-keytable').DataTable({
              keys: true
            });
            $('#datatable-responsive').DataTable();
            $('#datatable-scroller').DataTable({
              ajax: "js/datatables/json/scroller-demo.json",
              deferRender: true,
              scrollY: 380,
              scrollCollapse: true,
              scroller: true
            });
            var table = $('#datatable-fixed-header').DataTable({
              fixedHeader: true
            });
          });
          TableManageButtons.init();
        </script>
    </body>

</html>

