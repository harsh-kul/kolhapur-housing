

$(document).ready(function () {
  
    loadSinglePropety();
    
  });
  //////////// Docuemnt  Close Here ////////////////////////////
  
  function loadSinglePropety() {
    var propertyid = $('#productid').val();
    const token = $('meta[name="token"]').attr("content");
    $.ajax({
      url: __URL_include_SingleProduct_,
      type: "POST",
      headers: {token : token},
      data: {
        key: _GETONE_,
        password: _AUTH_PASSWORD_,
        username: _AUTH_USERNAME_,
        propertyid:propertyid,
      },
      dataType: "json",
      success: function (data1, status, xhr) {
        console.log("property id data success  :success " + data1);
        // window.location.href = "../pages/list_pages/admin_request_list.php";
        data = JSON.parse(data1["data"]);

        var strsignlecard = "";
        if (data.length > 0) {
          console.log(data.length)
          for (var i = 0; i < data.length; i++) {
            
            
          
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
  
  function indexlogout() {
    // alert("logoutt fuction call");
    const token = $('meta[name="token"]').attr("content");
    $.ajax({
      url: "include/registration.php",
      type: "POST",
      dataType: "json",
      headers: {token : token},
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
    const token = $('meta[name="token"]').attr("content");
    $.ajax({
      url: __URL_include_index_,
      type: "POST",
      headers: {token : token},
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
    const token = $('meta[name="token"]').attr("content");
    $.ajax({
      url: __URL_include_index_,
      type: "POST",
      headers: {token : token},
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
  