<!DOCTYPE html>
<html lang="en">
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="assets\js\plugins\perfect-scrollbar.jquery.min.js"></script>
        <script src="\js\perfect-scrollbar.min.js"></script>
@csrf
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">

<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

<!-- Favicons -->
<link rel="apple-touch-icon" href="assets\img\apple-icon.png">
<link rel="icon" href="">

<title>
  Dashboard

</title>






<!--     Fonts and icons     -->
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">


<link rel="stylesheet" href="assets\css\material-dashboard.min.css?v=2.0.1">




<!-- Documentation extras -->




<!-- iframe removal -->



  <script type="text/javascript">
    if (document.readyState === 'complete') {
        if (window.location != window.parent.location) {
          const elements = document.getElementsByClassName("iframe-extern");
          while (elemnts.lenght > 0) elements[0].remove();
            // $(".iframe-extern").remove();
        }
    };
  </script>






    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-NKDMSK6');</script>
    <!-- End Google Tag Manager -->
      </head>

      <body>
        <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
        <div class="wrapper">
            <div class="sidebar" data-color="rose" data-background-color="black" data-image="assets/img/sidebar-1.jpg">
    <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->

    <div class="logo">


        <a href="" class="simple-text logo-mini">
            AV
        </a>

        <a href="" class="simple-text logo-normal">
            AceVel
        </a>

    </div>

    <div class="sidebar-wrapper">
        <div class="user">
            <div class="photo">
                <img src="images\profile_img\{{Auth::User()->avatar}}">
                @php $x=Auth::user();
            $x1=$x['role'] @endphp
            </div>
            <div class="user-info">
                <a data-toggle="collapse" href="#collapseExample" class="username">
                    <span>
                      {{Auth::User()->surname}}&nbsp{{Auth::User()->name}}
                      <b class="caret"></b>
                    </span>
                </a>
                @if($x1=='Etudiant')
                <div class="collapse" id="collapseExample">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link" href="profile">
                              <span class="sidebar-mini"> MP </span>
                              <span class="sidebar-normal"> My Profile </span>
                            </a>
                        </li>

                    </ul>
                </div>
                    @else
                    <div class="collapse" id="collapseExample">
                        <ul class="nav">
                            <li class="nav-item">
                                <a class="nav-link" href="profile">
                                    <span class="sidebar-mini"> MP </span>
                                    <span class="sidebar-normal"> My Profile </span>
                                </a>
                            </li>

                        </ul>
                    </div>
                @endif
            </div>
        </div>
        <ul class="nav">

            <li class="nav-item active ">
                <a class="nav-link" href="/dashboard">
                    <i class="material-icons">dashboard</i>
                    <p> Dashboard </p>
                </a>
            </li>
            @if($x1=='Etudiant')
            <li class="nav-item ">
                <a class="nav-link" data-toggle="collapse" href="#formsExamples">
                    <i class="material-icons">content_paste</i>
                    <p> Formation
                        <b class="caret"></b>
                    </p>
                </a>

                <div class="collapse" id="formsExamples">
                    <ul class="nav">
                        <li class="nav-item ">
                            <a class="nav-link" href="/tableM">
                                <span class="sidebar-mini"> T </span>
                                <span class="sidebar-normal"> Table of Contents </span>
                            </a>
                        </li>


                    </ul>
                </div>
            </li>
            {{--// table des matieres--}}


            {{--//Exaams--}}
            <li class="nav-item ">
                <a class="nav-link" data-toggle="collapse" href="#tablesExamples">
                    <i class="material-icons">grid_on</i>
                    <p>Time schedule
                        <b class="caret"></b>
                    </p>
                </a>

                <div class="collapse" id="tablesExamples">
                    <ul class="nav">

                        <li class="nav-item ">
                            <a class="nav-link" href="emploi">
                                <span class="sidebar-mini"> T </span>
                                <span class="sidebar-normal"> Time schedule </span>
                            </a>
                        </li>

                    </ul>
                </div>
            </li>




            <li class="nav-item ">
                <a class="nav-link" data-toggle="collapse" href="#pagesExamples">
                    <i class="material-icons">image</i>
                    <p> Orientation
                        <b class="caret"></b>
                    </p>
                </a>

                <div class="collapse" id="pagesExamples">
                    <ul class="nav">
                        <li class="nav-item ">
                            <a class="nav-link" href="/orientation">
                                <span class="sidebar-mini"> O </span>
                                <span class="sidebar-normal"> Orientation Form </span>
                            </a>
                        </li>

                    </ul>
                </div>
            </li>
            @else
                <li class="nav-item ">
                    <a class="nav-link" data-toggle="collapse" href="#formsExamples">
                        <i class="material-icons">content_paste</i>
                        <p> Manage
                            <b class="caret"></b>
                        </p>
                    </a>

                    <div class="collapse" id="formsExamples">
                        <ul class="nav">
                            <li class="nav-item ">
                                <a class="nav-link" href="/Fich_voeux">
                                    <span class="sidebar-mini"> W </span>
                                    <span class="sidebar-normal"> Wish List  </span>
                                </a>
                            </li>


                        </ul>
                    </div>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" data-toggle="collapse" href="#pagesExamples">
                        <i class="material-icons">book</i>
                        <p> Consult
                            <b class="caret"></b>
                        </p>
                    </a>

                    <div class="collapse" id="pagesExamples">
                        <ul class="nav">
                            <li class="nav-item ">
                                <a class="nav-link" href="/emploiprof">
                                    <span class="sidebar-mini"> T </span>
                                    <span class="sidebar-normal"> Time Schedule </span>
                                </a>
                            </li>

                        </ul>
                    </div>
                </li>
            @endif






        </ul>
    </div>
</div>


            <div class="main-panel">
                <!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-transparent  navbar-absolute fixed-top">
	<div class="container-fluid">
    <div class="navbar-wrapper">
      <div class="navbar-minimize">
        <button id="minimizeSidebar" class="btn btn-just-icon btn-white btn-fab btn-round">
            <i class="material-icons text_align-center visible-on-sidebar-regular">more_vert</i>
            <i class="material-icons design_bullet-list-67 visible-on-sidebar-mini">view_list</i>
        </button>
      </div>
			<a class="navbar-brand" href="#pablo">Dashboard</a>
		</div>

		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
      <span class="sr-only">Toggle navigation</span>
			<span class="navbar-toggler-icon icon-bar"></span>
			<span class="navbar-toggler-icon icon-bar"></span>
			<span class="navbar-toggler-icon icon-bar"></span>
		</button>

	    <div class="collapse navbar-collapse justify-content-end">
      <form class="navbar-form">
          <div class="input-group no-border">
              <input type="text" value="" class="form-control" placeholder="Search...">
              <button type="submit" class="btn btn-white btn-round btn-just-icon">
                <i class="material-icons">search</i>
                <div class="ripple-container"></div>
              </button>
          </div>
      </form>

			<ul class="navbar-nav">



				<li class="nav-item">

                <a class="nav-link" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    <i class="material-icons">lock</i>
                    </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>

					  <p>
              <span class="d-lg-none d-md-block">Account</span>
            </p>
					</a>
				</li>
			</ul>
	    </div>
	</div>
</nav>
<!-- End Navbar -->




                    <div class="content">
                      <div class="container-fluid">
                        <div class="row">
                            //something here
                            </div>

<!-- <button type="button" class="btn btn-round btn-default dropdown-toggle btn-link" data-toggle="dropdown">
    7 days
</button> -->

<div class="card here" >
  @yield('content')
</div>

<div class="row">
    //something here again
</div>


<br>
<div class="row">
    //something here !!
</div>

                      </div>
                    </div>

                    <footer class="footer ">

    <div class="container">
        <nav class="pull-left">
            <ul>
                <li>
                    <a href="">
AceVel                    </a>
                </li>
                <li>
                    <a href="">
                       About Us
                    </a>
                </li>
                <li>
                    <a href="">
                       Blog
                    </a>
                </li>
                <li>
                    <a href="">
                        Licenses
                    </a>
                </li>
            </ul>
        </nav>
        <div class="copyright pull-right">
            &copy; <script>document.write(new Date().getFullYear())</script>, made with <i class="material-icons">favorite</i> by AceVel</a>
        </div>
    </div>



</footer>


            </div>
        </div>



<div class="fixed-plugin">
    <div class="dropdown show-dropdown">
        <a href="#" data-toggle="dropdown">
            <i class="fa fa-cog fa-2x"> </i>
        </a>

        <ul class="dropdown-menu">
			      <li class="header-title"> Sidebar Filters</li>
            <li class="adjustments-line">
                <a href="javascript:void(0)" class="switch-trigger active-color">
                    <div class="ml-auto mr-auto">
                      <span class="badge filter badge-purple" data-color="purple"></span>
                      <span class="badge filter badge-azure" data-color="azure"></span>
                      <span class="badge filter badge-green" data-color="green"></span>
                      <span class="badge filter badge-orange" data-color="orange"></span>
                      <span class="badge filter badge-danger" data-color="danger"></span>
                      <span class="badge filter badge-rose active" data-color="rose"></span>
                    </div>
                    <div class="clearfix"></div>
                </a>
            </li>

            <li class="header-title">Sidebar Background</li>
              <li class="adjustments-line">
                  <a href="javascript:void(0)" class="switch-trigger background-color">
                      <div class="ml-auto mr-auto">
                          <span class="badge filter badge-white" data-color="white"></span>
                          <span class="badge filter badge-black active" data-color="black"></span>
                      </div>
                      <div class="clearfix"></div>
                  </a>
              </li>

            <li class="adjustments-line">
                <a href="javascript:void(0)" class="switch-trigger">
                    <p>Sidebar Mini</p>
                    <label class="ml-auto">
                      <div class="togglebutton switch-sidebar-mini">
                        <label>
                            <input type="checkbox">
                                <span class="toggle"></span>
                        </label>
                      </div>
                    </label>
                    <div class="clearfix"></div>
                </a>
            </li>

            <li class="adjustments-line">
                <a href="javascript:void(0)" class="switch-trigger">
                    <p>Sidebar Images</p>
                    <label class="switch-mini ml-auto">
                      <div class="togglebutton switch-sidebar-image">
                        <label>
                            <input type="checkbox" checked="">
                              <span class="toggle"></span>
                        </label>
                      </div>
                    </label>
                    <div class="clearfix"></div>
                </a>
            </li>

            <li class="header-title">Images</li>

            <li class="active">
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="assets\img\sidebar-1.jpg" alt="">
                </a>
            </li>
            <li>
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="assets\img\sidebar-2.jpg" alt="">
                </a>
            </li>
            <li>
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="assets\img\sidebar-3.jpg" alt="">
                </a>
            </li>
            <li>
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="assets\img\sidebar-4.jpg" alt="">
                </a>
            </li>



        </ul>
    </div>
</div>


    </body>

    {{--<!--   Core JS Files   -->--}}

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    {{--<script  src="{{asset('assets/js/plugins/chartist.min.js')}}"></script>--}}
{{--<script src="assets\js\core\popper.min.js"></script>--}}


{{--<script src="assets\js\bootstrap-material-design.min.js"></script>--}}


    <script src="assets\js\plugins\perfect-scrollbar.jquery.min.js"></script>



{{--<!--  Google Maps Plugin  -->--}}
{{--<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB2Yno10-YTnLjjn_Vtk0V8cdcY5lC4plU"></script>--}}


{{--<!--  Plugin for Date Time Picker and Full Calendar Plugin  -->--}}
{{--<script src="assets\js\plugins\moment.min.js"></script>--}}

{{--<!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->--}}
{{--<script src="assets\js\plugins\bootstrap-datetimepicker.min.js"></script>--}}

{{--<!--	Plugin for the Sliders, full documentation here: https://refreshless.com/nouislider/ -->--}}
{{--<script src="assets\js\plugins\nouislider.min.js"></script>--}}



{{--<!--	Plugin for Select, full documentation here: https://silviomoreto.github.io/bootstrap-select -->--}}
{{--<script src="assets\js\plugins\bootstrap-selectpicker.js"></script>--}}

{{--<!--	Plugin for Tags, full documentation here: https://xoxco.com/projects/code/tagsinput/  -->--}}
{{--<script src="assets\js\plugins\bootstrap-tagsinput.js"></script>--}}

{{--<!--	Plugin for Fileupload, full documentation here: https://www.jasny.net/bootstrap/javascript/#fileinput -->--}}
{{--<script src="assets\js\plugins\jasny-bootstrap.min.js"></script>--}}

{{--<!-- Plugins for presentation and navigation  -->--}}
{{--<script src="assets\assets-for-demo\js\modernizr.js"></script>--}}




{{--<!-- Material Kit Core initialisations of plugins and Bootstrap Material Design Library -->--}}

{{--<script src="assets\js\material-dashboard.js?v=2.0.1"></script>--}}



{{--<!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->--}}
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>--}}

{{--<!-- Library for adding dinamically elements -->--}}
{{--<script src="assets\js\plugins\arrive.min.js" type="text/javascript"></script>--}}

{{--<!-- Forms Validations Plugin -->--}}
{{--<script src="assets\js\plugins\jquery.validate.min.js"></script>--}}

{{--<!--  Charts Plugin, full documentation here: https://gionkunz.github.io/chartist-js/ -->--}}
{{--<script src="assets\js\plugins\chartist.min.js"></script>--}}

{{--<!--  Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->--}}
{{--<script src="assets\js\plugins\jquery.bootstrap-wizard.js"></script>--}}

{{--<!--  Notifications Plugin, full documentation here: https://bootstrap-notify.remabledesigns.com/    -->--}}
{{--<script src="assets\js\plugins\bootstrap-notify.js"></script>--}}

{{--<!-- Vector Map plugin, full documentation here: https://jvectormap.com/documentation/ -->--}}
{{--<script src="assets\js\plugins\jquery-jvectormap.js"></script>--}}

{{--<!-- Sliders Plugin, full documentation here: https://refreshless.com/nouislider/ -->--}}
{{--<script src="assets\js\plugins\nouislider.min.js"></script>--}}

{{--<!--  Plugin for Select, full documentation here: https://silviomoreto.github.io/bootstrap-select -->--}}
{{--<script src="assets\js\plugins\jquery.select-bootstrap.js"></script>--}}

{{--<!--  DataTables.net Plugin, full documentation here: https://datatables.net/    -->--}}
{{--<script src="assets\js\plugins\jquery.datatables.js"></script>--}}

{{--<!-- Sweet Alert 2 plugin, full documentation here: https://limonte.github.io/sweetalert2/ -->--}}
{{--<script src="assets\js\plugins\sweetalert2.js"></script>--}}

{{--<!-- Plugin for Fileupload, full documentation here: https://www.jasny.net/bootstrap/javascript/#fileinput -->--}}
{{--<script src="assets\js\plugins\jasny-bootstrap.min.js"></script>--}}

{{--<!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->--}}
{{--<script src="assets\js\plugins\fullcalendar.min.js"></script>--}}

{{--<!-- demo init -->--}}
{{--<script src="{{asset('js/demo.js')}}"></script>--}}

    {{--<script src="{{asset('js/jquery-ui.min.js')}}"></script>--}}

    <!--   Core JS Files   -->
    <script src="{{asset('js/sweetalert2.js')}}"></script>

    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap-material-design.min.js')}}"></script>



    <script src="{{asset('js/perfect-scrollbar.jquery.min.js')}}"></script>
    <!--  Plugin for Date Time Picker and Full Calendar Plugin  -->
    <script src="{{asset('js/moment.min.js')}}"></script>
    <!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
    <script src="{{asset('js/bootstrap-datetimepicker.min.js')}}"></script>
    <!--	Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="{{asset('js/nouislider.min.js')}}"></script>
    <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
    <script src="{{asset('js/bootstrap-selectpicker.js')}}"></script>
    <!--	Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
    <script src="{{asset('js/jasny-bootstrap.min.js')}}"></script>
    <!-- Material Kit Core initialisations of plugins and Bootstrap Material Design Library -->
    <script src="{{asset("js/material-dashboard790f.js")}}"></script>
    <!-- Library for adding dinamically elements -->
    <script src="{{asset('js/arrive.min.js')}}" type="text/javascript"></script>
    <!-- Forms Validations Plugin -->
    <script src="{{asset('js/jquery.validate.min.js')}}"></script>
    <!--  Charts Plugin, full documentation here: https://gionkunz.github.io/chartist-js/ -->

    <!--  Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
    <script src="{{asset('js/jquery.bootstrap-wizard.js')}}"></script>
    <!--  Notifications Plugin, full documentation here: http://bootstrap-notify.remabledesigns.com/    -->
    <script src="{{asset('js/bootstrap-notify.js')}}"></script>
    <!-- Sweet Alert 2 plugin, full documentation here: https://limonte.github.io/sweetalert2/ -->
    <script src="{{asset('js/sweetalert2.all.min.js')}}"></script>
    <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
    <script src="{{asset('js/fullcalendar.min.js')}}"></script>
    <!-- demo init -->
    <script src="{{asset('js/demo.js')}}"></script>
    <script src="{{asset('js/jquery.datatables.js')}}"></script>



    <script src="{{asset('js/sweetalert2.js')}}"></script>




    <script src="{{asset('js/jquery-ui.min.js')}}"></script>


    <script src="{{asset('js/arrive.min.js')}}"></script>









  <script type="text/javascript">

$(document).ready(function(){

  //init wizard

  demo.initMaterialWizard();

  // Javascript method's body can be found in assets/js/demos.js
  demo.initDashboardPageCharts();

  demo.initCharts();

});




$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});


</script>


    @yield('custemScript')
    @yield('custemImp')
</html>
