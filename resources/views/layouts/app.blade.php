<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
		<meta name="author" content="Coderthemes">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Cairo" rel="stylesheet">

    <!-- Styles -->
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->

      <link href="{{asset('sweetalert2\sweetalert2.min.css')}}" rel="stylesheet" type="text/css">


		<link rel="shortcut icon" href="{{ asset('assets/img/logo.png') }}">

        <link href="{{ asset('assets/plugins/dropzone/dropzone.css') }}" rel="stylesheet" type="text/css" />

        <!-- Plugins css-->
        <link href="{{ asset('assets/plugins/bootstrap-tagsinput/css/bootstrap-tagsinput.css') }}" rel="stylesheet" />
        <link href="{{ asset('assets/plugins/switchery/css/switchery.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('assets/plugins/multiselect/css/multi-select.css') }}"  rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/plugins/bootstrap-select/css/bootstrap-select.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('assets/plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css') }}" rel="stylesheet" />


        <link href="{{ asset('assets/css/bootstrap-rtl.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/core.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/components.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/pages.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet" type="text/css" />


        <script src="{{ asset('assets/js/modernizr.min.js') }}"></script>
              <!-- jQuery  -->
        <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap-rtl.min.js') }}"></script>
        <script src="{{ asset('assets/js/detect.js') }}"></script>
        <script src="{{ asset('assets/js/fastclick.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.slimscroll.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.blockUI.js') }}"></script>
        <script src="{{ asset('assets/js/waves.js') }}"></script>
        <script src="{{ asset('assets/js/wow.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.nicescroll.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.scrollTo.min.js') }}"></script>
        <link href="{{ asset('assets/css/components.css') }}" rel="stylesheet" type="text/css" />

        <script src="{{ asset('assets/plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/switchery/js/switchery.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/plugins/multiselect/js/jquery.multi-select.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/plugins/jquery-quicksearch/jquery.quicksearch.js') }}"></script>
        <script src="{{ asset('assets/plugins/select2/js/select2.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets/plugins/bootstrap-select/js/bootstrap-select.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets/plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets/plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js') }}" type="text/javascript"></script>

        <script type="text/javascript" src="{{ asset('assets/plugins/autocomplete/jquery.mockjax.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/plugins/autocomplete/jquery.autocomplete.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/plugins/autocomplete/countries.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/pages/autocomplete.js') }}"></script>

        <script type="text/javascript" src="{{ asset('assets/pages/jquery.form-advanced.init.js') }}"></script>

        <script src="{{ asset('assets/js/jquery.core.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.app.js') }}"></script>


        <link rel="stylesheet" type="text/css" href="{{ asset('assets/plugins/jquery.steps/css/jquery.steps.css') }}" />


        <style>
            .body{
                font-family: 'Cairo'
            }
            .table{
                   font-family: 'Cairo'
            }
            .label{
                  font-family: 'Cairo'

            }
            .h4{
                  font-family: 'Cairo'

            }
            .span{
                  font-family: 'Cairo'

            }

        </style>
    

</head>

  @guest

        <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="text-center">
                        <!-- <a href="index.html" class="logo"><i class="icon-magnet icon-c-logo"></i><span>Ub<i class="md md-album"></i>ld</span></a> -->
                        <a href="index.html" class="logo">
                            <i class="icon-c-logo"> <img src="{{ asset('img/logo.png') }}" height="42"/> </i>
                            <span>COMPANIES <img src="{{ asset('img/logo.png') }}" height="20"/>REG</span>
                        </a>
                    </div>
                </div>

                <!-- Button mobile view to collapse sidebar menu -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">
                        <div class="">
                            

                          


                          
                        </div>
                        <!--/.nav-collapse -->
                    </div>
                </div>
            </div>

            	<div class="content-page">
				<!-- Start content -->
				<div class="content">
					<div class="container">
                            @yield('content')
  </div>
                </div>
            </div>
                         
@else



    <body class="fixed-left" >

		<!-- Begin page -->
		<div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">

                 <!-- LOGO -->
                <div class="topbar-left">
                    <div class="text-center">
                        <!-- <a href="index.html" class="logo"><i class="icon-magnet icon-c-logo"></i><span>Ub<i class="md md-album"></i>ld</span></a> -->
                        <a href="index.html" class="logo">
                            <i class="icon-c-logo"> <img src="img/logo.png" height="42"/> </i>
                            <span>COMPANIES<img src="{{ asset('img/logo.png') }}" height="20"/>REG</span>
                        </a>
                    </div>
                </div>

                <!-- Button mobile view to collapse sidebar menu -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">
                        <div class="">
                            <div class="pull-left">
                                <button class="button-menu-mobile open-left waves-effect waves-light">
                                    <i class="md md-menu"></i>
                                </button>
                                <span class="clearfix"></span>
                            </div>

                          


                            <ul class="nav navbar-nav navbar-right pull-right">
                               
                                
                                        
                                        <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"  style="font-family: 'Cairo'"><i class="ti-power-off m-r-10 text-danger"></i> تسجيل خروج </a></li>


                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                  
                           
                            </ul>
                        </div>
                        <!--/.nav-collapse -->
                    </div>
                </div>
            </div>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->

            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">
                    <!--- Divider -->
                    <div id="sidebar-menu">

                    
                        <ul>

                        	<li class=" menu-title"> <h4  style="font-family: 'Cairo'">مرحبا بك {{ Auth::user()->name }}</h4></li>

                            <li class="has_sub">
                                <a href="{{ route('dashboard') }}" class="waves-effect"><i class="ti-home"></i> <span style="font-family: 'Cairo'"> الرئيسية </span> <span class="menu-arrow"></span></a>
                                
                            </li>

                        
                            @if(Auth::user()->show_export == 1 || Auth::user()->add_export ==1 )

                        	<li class="text-muted menu-title"  style="font-family: 'Cairo'"> ادارة البريد الصادر</li>


                            <li class="has_sub">

                                <a href="javascript:void(0);" class="waves-effect"><i class="ti-export"></i><span style="font-family: 'Cairo'">  البريد الصادر </span> <span class="menu-arrow"></span></a>
                               @endif
                                <ul class="list-unstyled">
                                    @if(Auth::user()->add_export == 1)
                                    <li><a href="{{route('Export.create' )}}"  style="font-family: 'Cairo'">اضافة بريد صادر</a></li>
                                    @endif

                                     @if(Auth::user()->show_export== 1)
                                    <li><a href="{{route('Export.index')}}"  style="font-family: 'Cairo'">عرض البريد الصادر </a></li>
                                    @endif

                                    
                                 
                                </ul>
                            </li>

                            @if(Auth::user()->show_import == 1 || Auth::user()->add_import ==1 )

                            <li class="text-muted menu-title"  style="font-family: 'Cairo'"> ادارة البريد الوارد</li>

                           

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="ti-import"></i><span  style="font-family: 'Cairo'"> البريد الوارد </span> <span class="menu-arrow"></span></a>
                                 @endif
                                 <ul class="list-unstyled">

                                   @if(Auth::user()->add_import== 1)
                                    <li><a href="{{route('Import.create')}}"  style="font-family: 'Cairo'"> اضافة بريد وارد</a></li>
                                    @endif

                                    @if(Auth::user()->show_import== 1)
                                    <li><a href="{{route('Import.index' )}}"  style="font-family: 'Cairo'">عرض البريد الوارد </a></li>
                                    @endif
                                  
                                </ul>
                            </li>

                             <li class="text-muted menu-title"  style="font-family: 'Cairo'"> ادارة المذكرات الداخلية</li>


                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="ti-menu-alt"></i><span  style="font-family: 'Cairo'"> المذكرات الداخلية  </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">

                                    <li><a href="{{ route('soon') }}"  style="font-family: 'Cairo'"> اضافة مذكرة داخلية</a></li>


                                   <li><a href="{{ route('soon') }}"  style="font-family: 'Cairo'">عرض  المذكرات الداخلية </a></li>


                                   
                                  
                                </ul>
                            </li>

                            <li class="text-muted menu-title"  style="font-family: 'Cairo'"> اخرى</li>

                            @if(Auth::user()->show_users== 1)
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="ti-user"></i><span  style="font-family: 'Cairo'">المستخدمون </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="{{route('User.create')}}" style="font-family: 'Cairo'">اضافة مستخدم جديد </a></li>
                                    <li><a href="{{route('User.index')}}" style="font-family: 'Cairo'">عرض  المستخدمون </a></li>
                                  
                                </ul>
                            </li>
                            @endif
                            
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="ti-menu"></i><span  style="font-family: 'Cairo'">ادارة الكتب </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="{{route('Generate.create')}}" style="font-family: 'Cairo'">انشاء كتاب جديد </a></li>
                                    <li><a href="{{route('Generate.index')}}" style="font-family: 'Cairo'">  عرض وطباعة الكتب </a></li>
                                  
                                </ul>
                            </li>
                            <li class="has_sub">
                                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="ti-power-off"></i><span style="font-family: 'Cairo'">تسجيل خروج </span> <span class="menu-arrow"></span></a>
                                
                            </li>
                          
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                            </form>
                        

                       

                           

                           

                          

                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
				<div class="content-page">
				<!-- Start content -->
				<div class="content">
					<div class="container">


                            @yield('content')


            		</div> <!-- container -->
                               
                </div> <!-- content -->

                <footer class="footer" style="text-align: center"><span>
                    Copyright © 2022, Designed and developed by <span><a href="mailto: rawan.taban94@gmail.com" >Rawan Ali Taban </a></span>, Companies Registeration - Server department. All rights reserved. 
</span>
                </footer>

            </div>
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


            <!-- Right Sidebar -->
          
            <!-- /Right-bar -->


        </div>
        <!-- END wrapper -->

        <script>
            var resizefunc = [];
        </script>


<script src="{{ asset('assets/plugins/dropzone/dropzone.js') }}"></script>


<!-- jQuery  -->
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap-rtl.min.js') }}"></script>
<script src="{{ asset('assets/js/detect.js') }}"></script>
<script src="{{ asset('assets/js/fastclick.js') }}"></script>
<script src="{{ asset('assets/js/jquery.slimscroll.js') }}"></script>
<script src="{{ asset('assets/js/jquery.blockUI.js') }}"></script>
<script src="{{ asset('assets/js/waves.js') }}"></script>
<script src="{{ asset('assets/js/wow.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.nicescroll.js') }}"></script>
<script src="{{ asset('assets/js/jquery.scrollTo.min.js') }}"></script>

<script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/dataTables.bootstrap.js') }}"></script>

<script src="{{ asset('assets/plugins/datatables/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/buttons.bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/jszip.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/pdfmake.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/vfs_fonts.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/buttons.html5.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/buttons.print.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/dataTables.fixedHeader.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/dataTables.keyTable.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/responsive.bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/dataTables.scroller.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/dataTables.colVis.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/dataTables.fixedColumns.min.js') }}"></script>

<script src="{{ asset('assets/pages/datatables.init.js') }}"></script>


        <script src="{{ asset('assets/plugins/switchery/js/switchery.min.js') }}"></script>



        <!--Form Wizard-->
        <script src="{{ asset('assets/plugins/jquery.steps/js/jquery.steps.min.js') }}" type="text/javascript"></script>
        <script type="text/javascript" src="{{ asset('assets/plugins/jquery-validation/js/jquery.validate.min.js') }}"></script>

        <!--wizard initialization-->
        <script src="{{ asset('assets/pages/jquery.wizard-init.js') }}" type="text/javascript"></script>

        <script src="{{ asset('assets/plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.min.js') }}"></script>

     
<script src="{{ asset('assets/js/jquery.core.js') }}"></script>
<script src="{{ asset('assets/js/jquery.app.js') }}"></script>
        <!-- Sweet-Alert  -->
        <script src="{{asset('sweetalert2\sweetalert2.min.js')}}"></script>

<script type="text/javascript">
    $(document).ready(function () {
        $('#datatable').dataTable();
        $('#datatable-keytable').DataTable({keys: true});
        $('#datatable-responsive').DataTable();
        $('#datatable-colvid').DataTable({
            "dom": 'C<"clear">lfrtip',
            "colVis": {
                "buttonText": "Change columns"
            }
        });
        $('#datatable-scroller').DataTable({
            ajax: "assets/plugins/datatables/json/scroller-demo.json",
            deferRender: true,
            scrollY: 380,
            scrollCollapse: true,
            scroller: true
        });
        var table = $('#datatable-fixed-header').DataTable({fixedHeader: true});
        var table = $('#datatable-fixed-col').DataTable({
            scrollY: "300px",
            scrollX: true,
            scrollCollapse: true,
            paging: false,
            fixedColumns: {
                leftColumns: 1,
                rightColumns: 1
            }
        });
    });
    TableManageButtons.init();

</script>
      @endguest
	</body>
</html>
