<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light border-bottom container-fluid" style="background-color: #88c2ff;">
    <!-- Left navbar links -->
    <ul class="navbar-nav"">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{route('dashboard')}}" class="nav-link">Dashboard</a>
        </li>
    </ul>


    <!-- SEARCH FORM -->
    <form class="form-inline">
        <div class="input-group input-group-sm">
            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                    <i class="fa fa-search"></i>
                </button>
            </div>
        </div>
    </form>

    <form class="form-inline ml-auto mr-lg-5 pr-5" >
    @auth
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel  d-flex">
        <div class="image">
            <img src="{{asset('img/avatar.svg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info info-expand">
            <a href="{{route('dashboard')}}" class="d-block">{{Auth::user()->name}}</a>
        </div>
    </div>
    @endauth

    <!-- Right navbar links -->
    <ul class="navbar-nav">
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="fa fa-cog"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <a href="{{route('profile.edit')}}" class="dropdown-item">Settings</a>
            </div>
        </li>
    </ul>
    </form>
</nav>
<!-- /.navbar -->
