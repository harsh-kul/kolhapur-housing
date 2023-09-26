$(document).ready(function () {
    loadusercount();
    // loadRecentAdded();
});

function loadusercount() {
  // alert("ghjk");
  const token = $('meta[name="token"]').attr("content");
  $.ajax({
    url: "../include/dashbord.php",//__URL_include_dashbord_,
    type: "POST",
    headers: {token : token},
    data: {
      key: "loadusercount",
      password: _AUTH_PASSWORD_,
      username: _AUTH_USERNAME_,
    },
    dataType: "json",
    success: function (data1, status, xhr) {
      console.log("adminrequest id data Load All  :success ");
    //   if (data1["status"]) 
        // userdataTableHandler.CleanAndRefreshDataTable();
        // data=JSON.stringify(data1["data"]) ;
        // data = (data1);
        console.log("dfghjk" + data1['userCount']);
        $("#usercount").html("<h3>"+data1['userCount']+"</h3>");
        $("#loanrequestcont").html("<h3>"+data1['loanCount']+"</h3>");
        $("#propertycount").html("<h3>"+data1['ppCount']+"</h3>");
        $("#mediacount").html("<h3>"+data1['mdCount']+"</h3>");


    },
    error: function (data) {
      console.log("adminrequest id data Load All  :error " + data.responseText);
    },
    complete: function () {
      console.log("adminrequest id data Load All  :complete ");
    },
  });
}


function loadRecentAdded() {
  const token = $('meta[name="token"]').attr("content");
// alert("in loadRecentAdded")
  var dataTableHandler = new DataTableHandler("loadRecent");
  dataTableHandler.inlizlaiseDataTable();

  $(document).ready(function () {
    $.ajax({
      url: __URL_dashboardpage_,
      type: "POST",
      headers: {token : token},
      data: {
        key: "loadRecent",
        password: _AUTH_PASSWORD_,
        username: _AUTH_USERNAME_,
      },
      dataType: "json",
      success: function (data1, status, xhr) {
        console.log("property id data Load All  :success ");
        if (data1["status"]) {
          // data=JSON.stringify(data1["data"]) ;
          data = JSON.parse(data1["data"]);

          data1 = JSON.parse(data1["data1"]);

          dataTableHandler.CleanAndRefreshDataTable();
          if (data.length > 0) {
            for (var i = 0; i < data.length; i++) {
              if (data.length == 5) {
                // $("#myTable").append(
                  
                // );
                dataTableHandler.addRowInDataTable([i+1,"Property",data[i].pp_created_at]);
              }
                           
              // console.log(data[i]);
            }
           
          } else {
          }
        } else {
          dataTableHandler.CleanAndRefreshDataTable();
          console.log("error :");
        }
      },
      error: function (data) {
        console.log("property id data Load All  :error " + data.responseText);
      },
      complete: function () {
        console.log("property id data Load All  :complete ");
      },
    });
  });
}

