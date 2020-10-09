
<!-- ============================================================== -->
<!-- Topbar header - style you can find in pages.scss -->
<!-- ============================================================== -->
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header">
                <div class="top-left-part">
                    <!-- Logo -->
                    <a class="logo" href="/">
                        <!-- Logo icon image, you can use font-icon also -->
                        <b>
                            <!--This is dark logo icon-
                            <img src="{{URL::to('admin/dash/plugins/images/admin-logo.png')}}" alt="home" class="dark-logo" />
                            --This is light logo icon-->
                            <img height="40px" src="{{URL::to('admin/front/img/core-img/favicon.ico')}}" alt="home" class="light-logo" />
                        </b>
                        <!-- Logo text image you can use text also -->
                        <span class="hidden-xs">
                            <!--This is dark logo text
                            <img src="{{URL::to('admin/dash/plugins/images/admin-text.png')}}" alt="home" class="dark-logo" />
                            This is light logo text-->
                            <img width="150px" src="{{URL::to('admin/front/img/core-img/logo.png')}}" alt="home" class="light-logo" />
                        </span> 
                    </a>
                </div>
                <!-- /Logo -->
                <ul class="nav navbar-top-links navbar-right pull-right">
                    <li>
                        <a class="nav-toggler open-close waves-effect waves-light hidden-md hidden-lg" href="javascript:void(0)"><i class="fa fa-bars"></i></a>
                    </li>
                    <li>
                        <form role="search" class="app-search hidden-sm hidden-xs m-r-10">
                            <input type="text" placeholder="Search..." class="form-control"> 
                            <a href="">
                                <i class="fa fa-search"></i>
                            </a> 
                        </form>
                    </li>
                    <li>
                        <a class="profile-pic" href="#"> <img src="{{URL::to('admin/dash/plugins/images/users/varun.jpg')}}" alt="user-img" width="36" class="img-circle"><b class="hidden-xs">{{ Auth::user()->name }}</b></a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        </nav>
<!-- End Top Navigation -->
<!-- ============================================================== -->
<!-- Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav slimscrollsidebar">
                <div class="sidebar-head">
                    <h3><span class="fa-fw open-close"><i class="ti-close ti-menu"></i></span> <span class="hide-menu">Navigation</span></h3>
                </div>
                <ul class="nav" id="side-menu">
                    <li style="padding: 70px 0 0;">
                        <a href="/dashboard" class="waves-effect"><i class="fa fa-clock-o fa-fw" aria-hidden="true"></i>Dashboard</a>
                    </li>
                    <li>
                        <a href="/dashboard/profile" class="waves-effect"><i class="fa fa-user fa-fw" aria-hidden="true"></i>Profile</a>
                    </li>
                    <li>
                        <a href="/dashboard/add-category" class="waves-effect"><i class="fa fa-calendar-minus-o fa-fw" aria-hidden="true"></i>Add Category</a>
                    </li>
                    <li>
                        <a href="/dashboard/create-post" class="waves-effect"><i class="fa fa-calendar-minus-o fa-fw" aria-hidden="true"></i>Add Post</a>
                    </li>
                    <li>
                        <a href="/dashboard/post-list" class="waves-effect"><i class="fa fa-calendar-minus-o fa-fw" aria-hidden="true"></i>All Post</a>
                    </li>
                    
                    <li>
                        <a href="{{route('subscriber')}}" class="waves-effect"><i class="fa fa-globe fa-fw" aria-hidden="true"></i>Subscriber List</a>
                    </li>
                    <li>
                        <a href="{{route('menu')}}" class="waves-effect"><i class="fa fa-globe fa-fw" aria-hidden="true"></i>Menu </a>
                    </li>
                    <li>
                        <a href="{{route('site')}}" class="waves-effect"><i class="fa fa-columns fa-fw" aria-hidden="true"></i>Site setting</a>
                    </li>
                    <li>
                        <a href="404.html" class="waves-effect"><i class="fa fa-info-circle fa-fw" aria-hidden="true"></i>Error 404</a>
                    </li>

                </ul>
                
            </div>
            
        </div>
<!-- ============================================================== -->
<!-- End Left Sidebar -->
<!-- ============================================================== -->
