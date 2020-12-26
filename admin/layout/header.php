<!-- Begin Header -->
<header class="header">
    <nav class="navbar fixed-top">       
        <!-- Begin Search Box-->
        <div class="search-box">
            <button class="dismiss"><i class="ion-close-round"></i></button>
            <form id="searchForm" action="#" role="search">
                <input type="search" placeholder="Tìm kiếm..." class="form-control">
            </form>
        </div>
        <!-- End Search Box-->
        <!-- Begin Topbar -->
        <div class="navbar-holder d-flex align-items-center align-middle justify-content-between">
            <!-- Begin Logo -->
            <div class="navbar-header">
                <a href="admin.php" class="navbar-brand">
                    <div class="brand-image brand-small">
                        <img src="admin/assets/img/logo-header.png" alt="logo" class="logo-small" height="50px">
                    </div>
                </a>
                <!-- Toggle Button -->
                <a id="toggle-btn" href="#" class="menu-btn active">
                    <span></span>
                    <span></span>
                    <span></span>
                </a>
                <!-- End Toggle -->
            </div>
            <!-- End Logo -->
            <!-- Begin Navbar Menu -->
            <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center pull-right">
                <!-- Search -->
                <li class="nav-item d-flex align-items-center"><a id="search" href="#"><i class="la la-search"></i></a></li>
                <!-- End Search -->
                <!-- Begin Notifications -->
                <li class="nav-item dropdown"><a id="notifications" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="la la-bell animated infinite swing"></i><span class="badge-pulse"></span></a>
                    <ul aria-labelledby="notifications" class="dropdown-menu notification">
                        <li>
                            <div class="notifications-header">
                                <div class="title">Thông báo mới (4)</div>
                                <div class="notifications-overlay"></div>
                                <img src="admin/assets/img/notifications/01.jpg" alt="..." class="img-fluid">
                            </div>
                        </li>
                        <li>
                            <a href="#">
                                <div class="message-icon">
                                    <i class="la la-user"></i>
                                </div>
                                <div class="message-body">
                                    <div class="message-body-heading">
                                       Tài khoản người dùng mới
                                    </div>
                                    <span class="date">2 giờ trước</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="message-icon">
                                    <i class="la la-calendar-check-o"></i>
                                </div>
                                <div class="message-body">
                                    <div class="message-body-heading">
                                       Sự kiện mới thêm
                                    </div>
                                    <span class="date">7 giờ trước</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="message-icon">
                                    <i class="la la-history"></i>
                                </div>
                                <div class="message-body">
                                    <div class="message-body-heading">
                                        Hệ thống
                                    </div>
                                    <span class="date">7 giờ trước</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="message-icon">
                                    <i class="la la-twitter"></i>
                                </div>
                                <div class="message-body">
                                    <div class="message-body-heading">
                                        Bạn có 3 thông báo mới
                                    </div>
                                    <span class="date">10 giờ trước</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a rel="nofollow" href="#" class="dropdown-item all-notifications text-center">Hiển thị tất cả thông báo</a>
                        </li>
                    </ul>
                </li>
                <!-- End Notifications -->
                <!-- User -->
                <li class="nav-item dropdown"><a id="user" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><img src="admin/assets/img/logo-header.png" alt="..." class="avatar rounded-circle"></a>
                    <ul aria-labelledby="user" class="user-size dropdown-menu">
                        <li class="welcome">
                            <a href="#" class="edit-profil"><i class="la la-gear"></i></a>
                            <img src="admin/assets/img/avatar/avatar-manh.jpg" alt="..." class="rounded-circle">
                        </li>
                        <li>
                            <a href="pages-profile.html" class="dropdown-item"> 
                                Thông tin cá nhân
                            </a>
                        </li>
                        <li>
                            <a href="app-mail.html" class="dropdown-item"> 
                                Thông báo
                            </a>
                        </li>
                        <li>
                            <a href="#" class="dropdown-item no-padding-bottom"> 
                                Cài đặt
                            </a>
                        </li>
                        <li><a rel="nofollow" href="admin.php" class="dropdown-item logout text-center"><i class="ti-power-off"></i></a></li>
                    </ul>
                </li>
                <!-- End User -->
                
            </ul>
            <!-- End Navbar Menu -->
        </div>
        <!-- End Topbar -->
    </nav>
</header>
<!-- End Header -->