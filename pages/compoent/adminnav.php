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
                    <a class="nav-link" href=<?php echo __URL_dashboardpage_ ?>>
                        <i class="bi bi-house"></i> Dashboard
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href=<?php echo __URL_regipage_ ?>>
                        <i class="bi bi-bar-chart"></i> Add New User
                    </a>
                </li>

                <!-- ////////////////////////////////////////////////////////// -->
                <button class="dropdown-btn nav-item">Dropdown
                    <!-- <i class="fa fa-caret-down"></i> -->
                </button>
                <div class="dropdown-container">
                    <a href="#" class="nav-link">Link 1</a>
                    <a href="#" class="nav-link">Link 2</a>
                    <a href="#" class="nav-link">Link 3</a>
                </div>
                <!-- ////////////////////////////////////////////////////////// -->
                <li class="nav-item">
                    <a class="nav-link" href=<?php echo __URL_adminrequestlistpage_ ?>>
                        <i class="bi bi-bar-chart"></i> Approval List
                    </a>

                <li class="nav-item">
                    <a class="nav-link" href=<?php echo __URL_stafflistpage_ ?>>
                        <i class="bi bi-chat"></i> User List

                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href=<?php echo __URL_propertylistpage_ ?>>
                        <i class="bi bi-chat"></i>Properties List

                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href=<?php echo __URL_loanlistpage_ ?>>
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

            </ul>
            <!-- Divider -->
            <hr class="navbar-divider my-5 opacity-20">

            <div class="mt-auto"></div>
            <!-- User (md) -->
            <ul class="navbar-nav">

                <li class="nav-item">
                    <a class="nav-link" href=<?php echo __URL_INDEX_ ?>>
                        <i class="bi bi-box-arrow-left"></i> Logout
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>


<script>
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
}
</script>

<style>
body {
  font-family: "Lato", sans-serif;
}

/* Fixed sidenav, full height */
.sidenav {
  height: 100%;
  width: 200px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  padding-top: 20px;
}

/* Style the sidenav links and the dropdown button */
.sidenav a, .dropdown-btn {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 20px;
  color: #818181;
  display: block;
  border: none;
  background: none;
  width: 100%;
  text-align: left;
  cursor: pointer;
  outline: none;
}

/* On mouse-over */
.sidenav a:hover, .dropdown-btn:hover {
  color: #f1f1f1;
}

/* Main content */
.main {
  margin-left: 200px; /* Same as the width of the sidenav */
  font-size: 20px; /* Increased text to enable scrolling */
  padding: 0px 10px;
}

/* Add an active class to the active dropdown button */
.active {
  background-color: green;
  color: white;
}

/* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */
.dropdown-container {
  display: none;
  background-color: #262626;
  padding-left: 8px;
}

/* Optional: Style the caret down icon */
.fa-caret-down {
  float: right;
  padding-right: 8px;
}

/* Some media queries for responsiveness */
@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>