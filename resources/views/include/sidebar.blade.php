<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{asset('dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{ Auth::user()->name }}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="active">
                <a href="{{route('dashboard')}}">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
            </li>

            <li>
                <a href="{{route('movie')}}">
                    <i class="fa fa-film"></i> <span>Movie</span>
                </a>
            </li>

            <li>
                <a href="{{route('performance')}}">
                    <i class="fa fa-clock-o"></i> <span>Performance</span>
                </a>
            </li>

            <li>
                <a href="{{route('screen')}}">
                    <i class="fa fa-picture-o"></i> <span>Screen</span>
                </a>
            </li>

            <li>
                <a href="{{route('seat')}}">
                    <i class="fa fa-hotel"></i> <span>Seat</span>
                </a>
            </li>

        </ul>
    </section> 
</aside>