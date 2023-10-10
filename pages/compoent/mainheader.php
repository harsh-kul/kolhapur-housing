<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
  <!-- Draweer -->
  <div id="main">
    <button class="openbtn" onclick="openNav()">☰</button>
  </div>
  <div id="mySidebar" class="sidebar">
    <a href="#" class="closebtn" onclick="closeNav()">×</a>
    <a href="<?php echo __URL_INDEX_ABOUT_US ?>" onclick="closeNav()">About Us</a>
    <a href=<?php echo __URL_INDEX_CONTACT_US ?> onclick="closeNav()">Contact us</a>
    <a href="<?php echo __URL_INDEX_LOAN ?>" onclick="closeNav()"> Home Loan</a>
    <a href=<?php echo __URL_INDEX_LOAN ?> onclick="closeNav()"> Personal Loan</a>
    <a href=<?php echo __URL_INDEX_LOAN ?> onclick="closeNav()"> Vechical Loan</a>
    <a href=<?php echo __URL_INDEX_LOAN ?> onclick="closeNav()"> gold Loan</a>
    <a href=<?php echo __URL_INDEX_LOAN ?> onclick="closeNav()"> Bike Loan</a>
    <?php if (isset($_SESSION['id'])) {
      echo "<a href=" . __URL_propertypagepage_ . "  onclick='closeNav()'>Add property</a>";
    } ?>
    <?php if (isset($_SESSION['id'])) {
      echo "<a href='#'  onclick='closeNav()'>Property history</a>";

    } ?>


    <?php
    if (isset($_SESSION["is_admin"])) {

      if (strcmp($_SESSION["is_admin"], _MESSAGE_YES_) == 0) {
        echo "<a href=" . __URL_adminrequestlistpage_ . "   class='nav-link' onclick='mobileMenu()'>Approval List</a>";
      }
    }
    ?>

    <?php if (isset($_SESSION['id'])) {
      echo "<a href='#'  onclick='logout()'>Logout</a>";
    }
    ?>

  </div>
  <!-- Draweer -->
  <div class="container">

    <a class="navbar-brand" href="index.html">
      <?php echo __WEBSITE__TITLE__ ?>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav"
      aria-expanded="false" aria-label="Toggle navigation">
      <span class="oi oi-menu"></span> Menu
    </button>

    <div class="collapse navbar-collapse" id="ftco-nav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active"> <a href=<?php echo __URL_INDEX_ ?> class="nav-link" onclick="mobileMenu()">Home</a>
        </li>
        <li class="nav-item"><a href=<?php echo __URL_INDEX_PROPERTY_SECTION_ ?> class="nav-link"
            onclick="mobileMenu()">My House</a></li>
        <li class="nav-item"><a href=<?php echo __URL_INDEX_CONTACT_US ?> class="nav-link"
            onclick="mobileMenu()">Contact</a></li>

        <?php
        if (isset($_SESSION["is_admin"])) {
          // echo $_SESSION["is_admin"];
          // echo _MESSAGE_YES_;
          // echo strcmp($_SESSION["is_admin"],_MESSAGE_YES_);
          if (strcmp($_SESSION["is_admin"], _MESSAGE_YES_) == 0) {
            echo "<li class='nav-item'><a href=" . __URL_dashboardpage_ . "   class='nav-link' onclick='mobileMenu()'>Admin</a></li>";
          }
        }
        ?>
        <?php
        if (isset($_SESSION["id"])) {
          // echo "<li class='nav-item'><a href=" . __URL_propertypagepage_ . "   class='nav-link' onclick='mobileMenu()'>Add property</a></li>";
          $str = "<div class='dropdown nav-item'>" .
            "<a href='#' class='dropdown-toggle nav-link' data-bs-toggle='dropdown'>Property</a>" .
            "<li class='dropdown-menu nav-item'>" .
            "<a href='". __URL_propertypagepage_."' class='dropdown-item nav-link'>Add Property</a>" .
            "<a href='". __URL_userpropertylistpage_."' class='dropdown-item nav-link'>My Property List</a>" .
            "</li>" .
            "</div>";
            echo $str;
        }
        ?>
        <li class="nav-item"><a href=<?php echo __URL_INDEX_ABOUT_US ?> class="nav-link" onclick="mobileMenu()">About
            Us</a></li>

        <?php
        if (!isset($_SESSION["id"])) {
          echo "<li class='nav-item cta'><a href='" . __URL_loginpage_ . "'class='nav-link ml-lg-2'><span class='icon-user'> </span> Sign-In </a></li>";
        }
        ?>

        <!-- <li class="nav-item cta"><a href=<?php echo __URL_loginpage_ ?> class="nav-link ml-lg-2"><span
                            class="icon-user"></span> Sign-In</a></li> -->
        <li class="nav-item cta cta-colored"><a href=<?php echo __URL_regipage_ ?> class="nav-link"><span
              class="icon-pencil"></span> Sign-Up</a></li>

        <!-- /////////////////////////////////////////// -->

      </ul>
    </div>
  </div>
</nav>
<!-- END nav -->