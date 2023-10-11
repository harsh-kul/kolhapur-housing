<?php 
if (session_status() == PHP_SESSION_NONE) {
	session_start();
}

// if (isset($_GET['get_token']) && empty($_SESSION["token"])) {
	$token = bin2hex(random_bytes(64));
	$_SESSION["token"] = $token;
// }

// if (isset($_GET['kill_token'])) {
// 	unset($_SESSION["token"]);
// 	session_destroy();
// }
include('../config/route.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>
    <?php echo __WEBSITE__TITLE__; ?>
  </title>
  <?php include('compoent/commonheader.php'); ?>

  <link rel="stylesheet" href="../js/otp_Screen.js">
  <link rel="stylesheet" href="../css/internal/otp_Screen.css">
</head>
<script>
  var databaseOtp;
  var mobileNumber = 0;
  var interval;
  $(document).ready(function () {
    // sendOTP();
    $('#btnResent').hide();


    document.addEventListener("DOMContentLoaded", function (event) {
      function OTPInput() {
        const inputs = document.querySelectorAll("#otp > *[id]");
        for (let i = 0; i < inputs.length; i++) {
          inputs[i].addEventListener("keydown", function (event) {
            if (event.key === "Backspace") {
              inputs[i].value = "";
              if (i !== 0) inputs[i].focus();
            } else {
              if (i === inputs.length - 1 && inputs[i].value !== "") {
                return true;
              } else if (event.keyCode > 47 && event.keyCode < 58) {
                inputs[i].value = event.key;
                if (i !== inputs.length - 1) inputs[i + 1].focus();
                event.preventDefault();
              } else if (event.keyCode > 64 && event.keyCode < 91) {
                inputs[i].value = String.fromCharCode(event.keyCode);
                if (i !== inputs.length - 1) inputs[i + 1].focus();
                event.preventDefault();
              }
            }
          });
        }
      }
      OTPInput();


    });
    loadUserForOtpVerification();


    countdown();



    $('#btnResent').click(function (e) {
      resentOtp();
    });
    $('#btnverifyOtp').click(function (e) {
      var otp = "";
      otp = otp + $('#first').val();
      otp = otp + $('#second').val();
      otp = otp + $('#third').val();
      otp = otp + $('#fourth').val();
      otp = otp + $('#fifth').val();
      otp = otp + $('#sixth').val();
      // alert(otp);
      // alert(databaseOtp);
      if (otp === databaseOtp) {
        verifyOtp();

      } else {
        AlertHandler.getErrorAlert(StringHandler.USER_WRONG_OTP);
      }
    });
  });
  function loadUserForOtpVerification() {

    var rg_id = localStorage.getItem("registrationid");
    // alert(rg_id);
    var registrationobject = {
      tbl_registrationid: rg_id,
    };
    $(document).ready(function () {
      const token = $('meta[name="token"]').attr("content");
      $.ajax({
        url: __URL_include_registration_,
        type: "POST",
        dataType: "json",
        headers: {token : token},
        data: {
          key: "getone",
          password: _AUTH_PASSWORD_,
          username: _AUTH_USERNAME_,
          tbl_registrationobject: JSON.stringify(registrationobject),
        },
        success: function (jsondata, status, xhr) {
          console.log("registration id data Save  :success " + jsondata["data"]);
          var data = JSON.parse(jsondata["data"]);
          if (data.rg_status === StringHandler.USER_ACTIVE_STASTUS) {
            window.location.href = __URL_INDEX_;
          } else {
            databaseOtp = data.rg_col2;
            mobileNumber = data.rg_mobile;
            $("#mbend").html(mobileNumber.toString().substr(mobileNumber.toString().length - 4));
          }

        },
        error: function (data, status, xhr) {
          console.log("registration id data error  :error " + data.responseText);
        },
        complete: function () {
          console.log("registration id data complte  :complete ");

        },
      });
    });
  }
  function countdown() {
    clearInterval(interval);
    interval = setInterval(function () {
      var timer = $('.js-timeout').html();
      timer = timer.split(':');
      var minutes = timer[0];
      var seconds = timer[1];
      seconds -= 1;
      if (minutes < 0) return;
      else if (seconds < 0 && minutes != 0) {
        minutes -= 1;
        seconds = 59;
      }
      else if (seconds < 10 && length.seconds != 2) seconds = '0' + seconds;

      $('.js-timeout').html(minutes + ':' + seconds);

      if (minutes == 0 && seconds == 0) {

        clearInterval(interval);
        $('#btnResent').show();
      }
    }, 1000);
  }

  function verifyOtp() {
    var rg_id = Utils.localGetUserId();
    // alert(rg_id);
    var registrationobject = {
      tbl_registrationid: rg_id,
    };
    $(document).ready(function () {
      const token = $('meta[name="token"]').attr("content");
      $.ajax({
        url: __URL_include_registration_,
        type: "POST",
        dataType: "json",
        headers: {token : token},
        data: {
          key: "verifyotp",
          password: _AUTH_PASSWORD_,
          username: _AUTH_USERNAME_,
          tbl_registrationobject: JSON.stringify(registrationobject),
        },
        success: function (jsondata, status, xhr) {
          console.log("registration id data Save  :success " + jsondata["data"]);
          var data = JSON.parse(jsondata["data"]);
          // alert(jsondata.status);
          if (jsondata.status) {
            window.location.href = __URL_INDEX_;
          } else {
            AlertHandler.getErrorAlert(StringHandler.SOMETING_WENT_WRONG);
          }


          $("#mbend").html(mobileNumber.toString().substr(mobileNumber.toString().length - 4));
          // $("#mbend").html(mobileNumber);

        },
        error: function (data, status, xhr) {
          console.log("registration id data error  :error " + data.responseText);
        },
        complete: function () {
          console.log("registration id data complte  :complete ");

        },
      });


    });
  }
  
  function resentOtp() {
    var rg_id = Utils.localGetUserId();
    var otp = Utils.generateOTP();
    // alert(rg_id);
    var registrationobject = {
      tbl_registrationid: rg_id,
      tbl_registrationotp: otp,
    };
    $(document).ready(function () {
      const token = $('meta[name="token"]').attr("content");
      $.ajax({
        url: __URL_include_registration_,
        type: "POST",
        dataType: "json",
        headers: {token : token},
        data: {
          key: "resentotp",
          password: _AUTH_PASSWORD_,
          username: _AUTH_USERNAME_,
          tbl_registrationobject: JSON.stringify(registrationobject),
        },
        success: function (jsondata, status, xhr) {
          console.log("registration id data Save  :success " + jsondata["data"]);
          var data = JSON.parse(jsondata["data"]);
          // alert(jsondata.status);
          if (jsondata.status) {
            location.reload();
          } else {
            AlertHandler.getErrorAlert(StringHandler.SOMETING_WENT_WRONG);
          }


          $("#mbend").html(mobileNumber.toString().substr(mobileNumber.toString().length - 4));
          // $("#mbend").html(mobileNumber);

        },
        error: function (data, status, xhr) {
          console.log("registration id data error  :error " + data.responseText);
        },
        complete: function () {
          console.log("registration id data complte  :complete ");

        },
      });


    });
  }

  function sendOTP() {
    // alert("cvghjkl");
    var rg_id = localStorage.getItem("registrationid");
    // alert(rg_id);
    var registrationobject = {
      tbl_registrationid: rg_id,
    };
    // $(document).ready(function () {
      const token = $('meta[name="token"]').attr("content");
      $.ajax({
        url: __URL_include_registration_,
        type: "POST",
        dataType: "json",
        headers: {token : token},
        data: {
          key: "sendotp",
          password: _AUTH_PASSWORD_,
          username: _AUTH_USERNAME_,
          tbl_registrationobject: JSON.stringify(registrationobject),
        },
        success: function (jsondata, status, xhr) {
          console.log("registration id data Save  :success " + jsondata["data"]);
          var data = JSON.parse(jsondata["data"]);
          if (data.rg_status === StringHandler.USER_ACTIVE_STASTUS) {
            window.location.href = __URL_INDEX_;
          } else {
            databaseOtp = data.rg_col2;
            mobileNumber = data.rg_mobile;
            $("#mbend").html(mobileNumber.toString().substr(mobileNumber.toString().length - 4));
          }

        },
        error: function (data, status, xhr) {
          console.log("registration id data error  :error " + data.responseText);
        },
        complete: function () {
          console.log("registration id data complte  :complete ");

        },
      });
    // });
  }

</script>


<body>


<?php
	if (isset($_SESSION["token"])) {
		echo '<meta name="token" content="' . $_SESSION["token"] . '">';

	}
	?>
  <?php include('../pages/compoent/mainheader.php'); ?>

  <div class="container height-100 d-flex justify-content-center align-items-center">
    <div class="position-relative">
      <div class="card p-2 text-center">
        <h6>Please enter the one time password <br> to verify your account</h6>
        <div> <span>A code has been sent to</span> <small>*******<div id="mbend"></div></small> </div>
        <div id="otp" class="inputs d-flex flex-row justify-content-center mt-2"> <input
            class="m-2 text-center form-control rounded" type="text" id="first" maxlength="1" /> <input
            class="m-2 text-center form-control rounded" type="text" id="second" maxlength="1" /> <input
            class="m-2 text-center form-control rounded" type="text" id="third" maxlength="1" /> <input
            class="m-2 text-center form-control rounded" type="text" id="fourth" maxlength="1" /> <input
            class="m-2 text-center form-control rounded" type="text" id="fifth" maxlength="1" /> <input
            class="m-2 text-center form-control rounded" type="text" id="sixth" maxlength="1" /> </div>
        <div class="mt-4"> <button class="btn btn-danger px-4 validate" id="btnverifyOtp">Validate</button> </div>
        <p>Session will end in <span class="js-timeout btn-text">2:00</span>.</p>
        <div class="mt-4"> <button class="btn btn-danger px-4 validate" id="btnResent">Resent OTP</button> </div>


      </div>
    </div>
  </div>

  <?php include('../pages/compoent/footer.php'); ?>
  </div>

</body>

</html>

</html>