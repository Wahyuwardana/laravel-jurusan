<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4" style="background: rgb(144,138,247);
background: linear-gradient(175deg, rgba(144,138,247,1) 0%, rgba(0,255,243,1) 100%); color: white; position:fixed;">
    <!-- Brand Logo -->
    <a href="{{route('dashboard')}}" class="brand-link" style="border: none; background:white; color:black;">
        <img src="{{asset('img/school.svg')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3 bg-light"
            style="opacity: .8">
        <span class="brand-text font-weight-dark">{{config('app.name')}}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">



        <!-- Sidebar Menu -->
        <nav class="mt-3">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{route('dashboard')}}" class="nav-link" style="border-radius: 10px; color:white;">
                        <i class="nav-icon fa fa-dashboard" style="color: white;"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="https://web.facebook.com/profile.php?id=100026312860305" target="_blank" class="nav-link" style="border-radius: 10px; color:white;">
                        <i class="nav-icon fa fa-facebook" style="color: white;"></i>
                        <p>Facebook</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="https://www.instagram.com/wahyuwrdn_16/" target="_blank" class="nav-link" style="border-radius: 10px; color:white;">
                        <i class="nav-icon fa fa-instagram" style="color: white;"></i>
                        <p>Instagram</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link" target="_blank" style="border-radius: 10px; color:white;">
                        <i class="nav-icon fa fa-github" style="color: white;"></i>
                        <p>Github</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href=" https://wa.me/081229336154" target="_blank" class="nav-link" style="border-radius: 10px; color:white;">
                        <i class="nav-icon fa fa-whatsapp" style="color: white;"></i>
                        <p>Whatsapp</p>
                    </a>
                </li>
                <li class="nav-item">
                    <form id="logout-form" action="{{route('logout')}}" method="post">
                        @csrf
                    </form>
                    <a href="javascript:void(0)" class="nav-link active " style="border-radius: 10px; background-color: white; color:black; mx-auto;"onclick="$('#logout-form').submit();">
                        <i class="nav-icon fa fa-sign-out"></i>
                        <p>Logout</p>
                    </a>
                </li>
                {{-- <li class="nav-item has-treeview menu-open">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fa fa-dashboard"></i>
                        <p>
                            Dashboard
                            <i class="right fa fa-angle-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link active">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Active Page</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Inactive Page</p>
                            </a>
                        </li>
                    </ul>
                </li> --}}
                {{-- <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-th"></i>
                        <p>
                            Simple Link
                            <span class="right badge badge-danger">New</span>
                        </p>
                    </a>
                </li> --}}
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
