<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ONLINE MATATU SACCO SYSTEM</title>

    <link href="{{asset('css/main.css')}}" rel="stylesheet">
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
    @yield('styles')
</head>
<body class="sidebar-mini fixed">
<div class="wrapper">
    <!-- Navbar-->
    <header class="main-header hidden-print"><a class="logo" href="{{ route('dashboard') }}"><h5
                style="font-family: sans-serif;"> MATATU SACCO SYSTEM</h5></a>
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button--><a class="sidebar-toggle" href="#" data-toggle="offcanvas"></a>
            <!-- Navbar Right Menu-->
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav navbar-left">
                    <li><a href="{{route('dashboard')}}"
                           style="background-color:transparent;color:#FFF;font-size:20px; font-weight:bold;"><strong>
                                ONLINE MATATU SACCO SYSTEM</strong></a></li>
                </ul>
                <ul class="top-nav">

                    <!-- User Menu-->
                    <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown" role="button"
                                            aria-haspopup="true" aria-expanded="false"><i
                                class="fa fa-user fa-lg fa-fw "></i>{{Sentinel::getUser()->name}}</a>
                        <ul class="dropdown-menu settings-menu">
                            <li><a href="" data-toggle="modal" data-target="myModal"><i class="fa fa-user fa-lg"></i>
                                    Profile</a></li>
                            <li><a href="{{ url('/signout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();"><i
                                        class="fa fa-power-off fa-lg"></i> Logout</a>
                                <form id="logout-form" action="{{ url('/signout') }}" method="POST"
                                      style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- Side-Nav-->
    <aside class="main-sidebar hidden-print">
        <section class="sidebar">

            <!-- Sidebar Menu-->
            <ul class="sidebar-menu">
                <li class="{{request()->is('dashboard') ? 'active':''}}"><a href="{{url('/dashboard')}}"><i class="fa fa-dashboard"></i><span>Dashboard</span></a></li>
                <li class="{{request()->is('admin/members') ? 'active':''}}"><a href="{{url('/admin/members')}}"><i class="fa fa-user"></i><span>Members</span></a></li>
                <li class="{{request()->is('admin/loan-applications') ? 'active':''}}"><a href="{{url('admin/loan-applications')}}"><i class="fa fa-pencil-square-o"></i><span>Loans Applications</span></a>
                </li>
                <li class="{{request()->is('admin/loans') ? 'active':''}}"><a href="{{url('admin/loans')}}"><i class="fa fa-money"></i><span>Loans</span></a></li>
                <li class="{{request()->is('admin/buses') ? 'active':''}}"><a href="{{url('admin/buses')}}"><i class="fa fa-cab"></i><span>Buses</span></a></li>
                <li class="{{request()->is('admin/bookings') ? 'active':''}}"><a href="{{url('/admin/bookings')}}"><i class="fa fa-list"></i><span>Bus Hires </span></a></li>
                <li class="{{request()->is('admin/shares') ? 'active':''}}"><a href="{{url('admin/shares')}}"><i class="fa fa-shopping-bag"></i><span>Shares</span></a>
                </li>
                <li class="{{request()->is('admin/insurance') ? 'active':''}}"><a href="{{url('admin/insurance')}}"><i class="fa fa-shield"></i><span>Insurance </span></a>
                </li>
                <li class="{{request()->is('admin/complains') ? 'active':''}}"><a href="{{url('admin/complains')}}"><i class="fa fa-list-alt"></i><span>Complains </span></a>
                </li>
                <li class="{{request()->is('admin/users') ? 'active':''}}"><a href="{{url('admin/users')}}"><i class="fa fa-user"></i><span>Users</span></a></li>

            </ul>
        </section>
    </aside>
    <div class="content-wrapper">
        <div class="page-title">
            <div>
                <h1>@yield('page_name')</h1>
            </div>
        </div>
        @yield('content')
    </div><!--end content-wrapper-->
</div><!--end wrapper-->
<!-- Javascripts-->
<script src="{{asset('js/jquery-2.1.4.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
@include('sweetalert::alert')
<script src="{{asset('js/plugins/bootstrap-datepicker.min.js')}}"></script>
<script src="{{asset('js/plugins/select2.min.js')}}"></script>
<script src="{{asset('js/plugins/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('js/plugins/dataTables.bootstrap.min.js')}}"></script>
<script type="text/javascript">
    $('#demoDate').datepicker({
        format: "dd/mm/yyyy",
        autoclose: true,
        todayHighlight: true
    });
    $('#demoSelect').select2();
    $('#sampleTable').DataTable();
</script>
@yield('scripts')

</body>
</html>
