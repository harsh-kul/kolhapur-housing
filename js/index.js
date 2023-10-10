$(document).ready(function () {
  showMedia();
  loadCount();
  $("#logOutBtn").click(function (e) {
    // alert("logOut Click");
    indexlogout();
  });

  $(document).ready(function () {
    $("#subscribe-btn").click(function (e) {
      // if (
      //   !ValidationHandler.checkVarIsNull(rg_email) &&
      //   !ValidationHandler.checkVarIsNull(rg_password)
      // ) {
      // } else {
        AlertHandler.getsuccessAlert(StringHandler.NEWSLETTER_SUCCESS);
      // }
    });
  });
});
//////////// Docuemnt  Close Here ////////////////////////////
function loadCount() {
  $.ajax({
    url: __URL_include_index_,
    type: "POST",
    data: {
      key: "loadcount",
      password: _AUTH_PASSWORD_,
      username: _AUTH_USERNAME_,
    },
    dataType: "json",
    success: function (data1, status, xhr) {
      // console.log("property id data success  :success " );
      // console.log(data1);
      // console.log(data1["customercount"]);
      // console.log(data1.propertycount);
      // console.log(data1.loancount);

      // $("#somefun").html(str);
      // alert(str);
      // $("#userCount").html("<strong class='number' data-number="+data1.customercount+">"+data1.customercount+"</strong>"+
      // "<span>Happy Customers</span>");

      // $("#selledOutPP").html("<strong class='number' data-number="+data1.propertycount+">"+data1.propertycount+"</strong>"+
      // "<span>Properties</span>");

      // $("#loanCount").html("<strong class='number' data-number="+data1.loancount+">"+data1.loancount+"</strong>"+
      // "<span>Loan</span>");
      var a = $(".usercount").data("number");
      $(".usercount").data("number", data1.customercount);
      var b = $(".selledoutpp").data("number");
      $(".selledoutpp").data("number", data1.propertycount);
      var c = $(".loancount").data("number");
      $(".loancount").data("number", data1.loancount);
      // $('#propertycount').html(data1.propertycount);
      // $('#loancount').html(data1.loancount);
    },
    error: function (data) {
      console.log("property id data eroor  :error " + data.responseText);
    },
    complete: function () {
      console.log("property id data complte  :complete ");
    },
  });
}
function showMedia() {
  // alert("showMedia");

  $.ajax({
    url: __URL_include_index_,
    type: "POST",
    data: {
      key: "showMedia",
      password: _AUTH_PASSWORD_,
      username: _AUTH_USERNAME_,
    },
    dataType: "json",
    success: function (data1, status, xhr) {
      console.log("property id data success  :success " + data1);
      // window.location.href = "../pages/list_pages/admin_request_list.php";
      data = JSON.parse(data1["data"]);
      // $("#kkk").html("");
      var strsignlecard = "";
      if (data.length > 0) {
        console.log(data.length);
        for (var i = 0; i < 4; i++) {
          console.log("data.length");
          strsignlecard = strsignlecard + "";
        }
        console.log("hhhhhhhhhh  " + strsignlecard);
        $(".staticForCard").val(strsignlecard);
      }
    },
    error: function (data) {
      console.log("property id data eroor  :error " + data.responseText);
    },
    complete: function () {
      console.log("property id data complte  :complete ");
      localStorage.setItem("propertyid", NaN);
    },
  });
}

function indexlogout() {
  alert("logoutt fuction call");
  $.ajax({
    url: "include/registration.php",
    type: "POST",
    dataType: "json",
    data: {
      key: "logout",
      password: _AUTH_PASSWORD_,
      username: _AUTH_USERNAME_,
    },
    success: function (data, status, xhr) {
      window.location.href = "../index.php";
    },
    error: function (data, status, xhr) {
      console.log("registration id data error  :error " + data);
    },
    complete: function () {
      console.log("registration id data complte  :complete ");
      // localStorage.setItem("registrationid",NaN);
    },
  });
}
function showSingleProduct(id) {
  window.location.href = __URL_singleproductpage_;
}

function showMediaTypeWise() {
  // alert("showMedia");

  $.ajax({
    url: __URL_include_index_,
    type: "POST",
    data: {
      key: "showMedia",
      password: _AUTH_PASSWORD_,
      username: _AUTH_USERNAME_,
    },
    dataType: "json",
    success: function (data1, status, xhr) {
      console.log("property id data success  :success " + data1);
      // window.location.href = "../pages/list_pages/admin_request_list.php";
      data = JSON.parse(data1["data"]);
      console.log("data.length" + data.length);
      if (data.length > 0) {
        for (var i = 0; i < data.length; i++) {
          $(".").append(
            "<div class='card'>" +
              "<div class='op' style='display: none;'>1</div>" +
              "<div class='card-image'><img src='assets/house4.jpg' class='proprtytypecardimage'></div>" +
              "<div class='card-title'>" +
              "<h3>Row Housing</h3>" +
              "</div>" +
              "<div class='card-content'>" +
              "<p>Simple And Elegant Two-Bedroom Modern House Plan - Ulric Home</p>" +
              "</div>" +
              "<div class='card-button'>" +
              "<a href='pages/singleproductpage.php?productid=1'> <button>Get started</button> </a>" +
              "</div>" +
              "</div>"
          );
          // console.log(data[i]);
        }
      }
    },
    error: function (data) {
      console.log("property id data eroor  :error " + data.responseText);
    },
    complete: function () {
      console.log("property id data complte  :complete ");
      localStorage.setItem("propertyid", NaN);
    },
  });
}

function showMediaPopular() {
  // alert("showMedia");

  $.ajax({
    url: __URL_include_index_,
    type: "POST",
    data: {
      key: "showMedia",
      password: _AUTH_PASSWORD_,
      username: _AUTH_USERNAME_,
    },
    dataType: "json",
    success: function (data1, status, xhr) {
      console.log("property id data success  :success " + data1);
      // window.location.href = "../pages/list_pages/admin_request_list.php";
      data = JSON.parse(data1["data"]);
      console.log("data.length" + data.length);
      if (data.length > 0) {
        for (var i = 0; i < data.length; i++) {
          $(".").append(
            "<div class='card'>" +
              "<div class='op' style='display: none;'>1</div>" +
              "<div class='card-image'><img src='assets/house4.jpg' class='proprtytypecardimage'></div>" +
              "<div class='card-title'>" +
              "<h3>Row Housing</h3>" +
              "</div>" +
              "<div class='card-content'>" +
              "<p>Simple And Elegant Two-Bedroom Modern House Plan - Ulric Home</p>" +
              "</div>" +
              "<div class='card-button'>" +
              "<a href='pages/singleproductpage.php?productid=1'> <button>Get started</button> </a>" +
              "</div>" +
              "</div>"
          );
          // console.log(data[i]);
        }
      }
    },
    error: function (data) {
      console.log("property id data eroor  :error " + data.responseText);
    },
    complete: function () {
      console.log("property id data complte  :complete ");
      localStorage.setItem("propertyid", NaN);
    },
  });
}
