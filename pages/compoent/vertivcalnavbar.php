<nav class="navbar show navbar-vertical h-lg-screen navbar-expand-lg px-0 py-3 navbar-light bg-white border-bottom border-bottom-lg-0 border-end-lg"
    id="navbarVertical">
    <div class="container-fluid">
        <!-- Toggler -->
        <button class="navbar-toggler ms-n2" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarCollapse"
            aria-controls="sidebarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Brand -->
        <a class="navbar-brand py-lg-2 mb-lg-5 px-lg-6 me-0" href="#">
            <div>
                <h2>Housing</h2>
            </div>
        </a>
        <!-- User menu (mobile) -->
        <div class="navbar-user d-lg-none">
            <!-- Dropdown -->
            <div class="dropdown">
                <!-- Toggle -->
                <a href="#" id="sidebarAvatar" role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    <div class="avatar-parent-child">
                        <img alt="Image Placeholder"
                            src="https://images.unsplash.com/photo-1548142813-c348350df52b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=3&w=256&h=256&q=80"
                            class="avatar avatar- rounded-circle">
                        <span class="avatar-child avatar-badge bg-success"></span>
                    </div>
                </a>
                <!-- Menu -->
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="sidebarAvatar">
                    <a href="#" class="dropdown-item">Profile</a>
                    <a href="#" class="dropdown-item">Settings</a>
                    <a href="#" class="dropdown-item">Billing</a>
                    <hr class="dropdown-divider">
                    <a href="#" class="dropdown-item">Logout</a>
                </div>
            </div>
        </div>
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidebarCollapse">
            <!-- Navigation -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="../../index.php">
                        <i class="bi bi-house"></i> Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="registrationpage.php">
                        <i class="bi bi-bar-chart"></i> Add New User
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="admin_request_list.php">
                        <i class="bi bi-bar-chart"></i> Approval List
                    </a>
                </li>
                <!--  <li class="nav-item">
                        <a class="nav-link" href="lonerequestpage.php">
                            <i class="bi bi-bar-chart"></i> Add New Loan Request
                        </a>
                    </li> -->
                <li class="nav-item">
                    <a class="nav-link" href="admin_request_list.php">
                        <i class="bi bi-chat"></i> User List

                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="property_list.php">
                        <i class="bi bi-chat"></i>Properties List

                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="loanrequest_list.php">
                        <i class="bi bi-chat"></i> Loan List

                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="bi bi-bookmarks"></i> Reports
                    </a>

                    <ul>
                        <li class="nav-item">
                            <a class="nav-link" href=<?php echo __URL_include_dateWiseUser_ ?>>
                                <i class="bi bi-chat"></i> Date Wise User Report

                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href=<?php echo __URL_include_loneReportPage_ ?>>
                                <i class="bi bi-chat"></i> Date Wise Lone Report

                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href=<?php echo __URL_include_propertyReportPage_ ?>>
                                <i class="bi bi-chat"></i> Date Wise Property Report

                            </a>
                        </li>
                    </ul>
                </li>
                <!-- <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="bi bi-people"></i> Users
                        </a>
                    </li> -->
            </ul>
            <!-- Divider -->
            <hr class="navbar-divider my-5 opacity-20">

            <div class="mt-auto"></div>
            <!-- User (md) -->
            <ul class="navbar-nav">
                <!-- <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="bi bi-person-square"></i> Account
                        </a>
                    </li> -->
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="bi bi-box-arrow-left"></i> Logout
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>