$(document).ready(function () {
  // alert("fcgvhbj");
  $("#showReport").click(function (e) {
    var lonedataTableHandler = new DataTableHandler("loneReportTable");
    // alert("fcgvhbj");
    var fromDate = $("#fromDate").val(); //'2022-02-02 00:00:00';
    var toDate = $("#toDate").val(); //'2022-02-03 00:00:00';
    var lonetype = $("#loneTypeId").val();
    var registrationobject = {
      fromDate: fromDate,
      toDate: toDate,
      lonetype: lonetype,
    };
    // alert(JSON.stringify(registrationobject));
    $.ajax({
      url: "../../include/report.php",
      type: "POST",
      dataType: "json",
      data: {
        key: "loaddatewiselonerequest",
        password: _AUTH_PASSWORD_,
        username: _AUTH_USERNAME_,
        reportData: JSON.stringify(registrationobject),
      },
      success: function (data1, status, xhr) {
        if (data1["status"]) {
          // data=JSON.stringify(data1["data"]) ;
          data = JSON.parse(data1["data"]);
          console.log("data.length" + data.length);

          if (data.length > 0) {
            console.log(data);
            for (var i = 0; i < data.length; i++) {
              lonedataTableHandler.addRowInDataTable([
                i + 1,
                data[i].fk_usid,
                data[i].fk_ptid,
                data[i].pp_price,
                data[i].pp_plot_no +
                  " " +
                  data[i].pp_ward +
                  " " +
                  data[i].pp_bulding_name +
                  " " +
                  data[i].pp_street +
                  " " +
                  data[i].pp_city +
                  " " +
                  data[i].pp_district +
                  " " +
                  data[i].pp_pincode,
                data[i].pp_owner_name,
                data[i].pp_contact_no,
                data[i].pp_status,
                data[i].pp_deposite,
                data[i].pp_aggrement_month,
              ]);
            }
          } else {
            lonedataTableHandler.CleanAndRefreshDataTable();
          }
        } else {
          lonedataTableHandler.CleanAndRefreshDataTable();
        }
      },
      error: function (data) {
        console.log(data.responseText);
        console.log('<div class="text-center">error ' + data + "here</div>");
      },
      complete: function () {
        console.log('<div class="text-center">Compelete here</div>');
      },
    });
  });

  $("#showPropertyReport").click(function (e) {
    var propertydataTableHandler = new DataTableHandler("prpertyReportTable");
    propertydataTableHandler.CleanAndRefreshDataTable();
    var fromDate = $("#fromDate").val(); //'2022-02-02 00:00:00';
    var toDate = $("#toDate").val(); //'2022-02-03 00:00:00';
    var statusId = $("#statusId").val();
    // alert(statusId);
    var registrationobject = {
      fromDate: fromDate,
      toDate: toDate,
      statusId: statusId,
    };
    // alert(JSON.stringify(registrationobject));
    $.ajax({
      url: "../../include/report.php",
      type: "POST",
      dataType: "json",
      data: {
        key: "loaddatewisereport",
        password: _AUTH_PASSWORD_,
        username: _AUTH_USERNAME_,
        reportData: JSON.stringify(registrationobject),
      },
      success: function (data1, status, xhr) {
        if (data1["status"]) {
          // data=JSON.stringify(data1["data"]) ;
          data = JSON.parse(data1["data"]);
          console.log("data.length" + data.length);

          if (data.length > 0) {
            console.log(data);
            for (var i = 0; i < data.length; i++) {
              propertydataTableHandler.addRowInDataTable([
                i + 1,
                data[i].rg_fname + "   " + data[i].rg_lname,
                data[i].pt_name,
                data[i].pp_price,
                data[i].pp_plot_no +
                  " " +
                  data[i].pp_ward +
                  " " +
                  data[i].pp_bulding_name +
                  " " +
                  data[i].pp_street +
                  " " +
                  data[i].pp_city +
                  " " +
                  data[i].pp_district +
                  " " +
                  data[i].pp_pincode,
                data[i].pp_owner_name,
                data[i].pp_contact_no,
                data[i].pp_status,
                data[i].pp_deposite,
                data[i].pp_aggrement_month,
              ]);
            }
          } else {
            propertydataTableHandler.CleanAndRefreshDataTable();
          }
        } else {
          propertydataTableHandler.CleanAndRefreshDataTable();
        }
      },
      error: function (data) {
        console.log(data.responseText);
        console.log('<div class="text-center">error ' + data + "here</div>");
      },
      complete: function () {
        console.log('<div class="text-center">Compelete here</div>');
      },
    });
  });

  $("#showUserReport").click(function (e) {
    var userdataTableHandler = new DataTableHandler("userTable");
    // userdataTableHandler.inlizlaiseDataTable();
    // userdataTableHandler.convertTableToReportTable();
    // alert("fghjk");
    var fromDate = $("#fromDate").val(); //'2022-02-02 00:00:00';
    var toDate = $("#toDate").val(); //'2022-02-03 00:00:00';
    var registrationobject = {
      fromDate: fromDate,
      toDate: toDate,
    };
    // alert(registrationobject);
    $.ajax({
      url: "../../include/report.php",
      type: "POST",
      dataType: "json",
      data: {
        key: "loaddatewiseuserreport",
        password: _AUTH_PASSWORD_,
        username: _AUTH_USERNAME_,
        reportData: JSON.stringify(registrationobject),
      },
      success: function (data1, status, xhr) {
        if (data1["status"]) {
          // userdataTableHandler.CleanAndRefreshDataTable();
          // data=JSON.stringify(data1["data"]) ;
          data = JSON.parse(data1["data"]);
          console.log("data.length" + data.length);
          if (data.length > 0) {
            console.log(data);
            for (var i = 0; i < data.length; i++) {
              if (data[i].rg_is_buyer == "Y") {
                data[i].rg_is_buyer = "Buyer";
              }
              if (data[i].rg_is_seller == "Y") {
                data[i].rg_is_seller = "Seller";
              }
              if (data[i].rg_col1 == "Y") {
                data[i].rg_col1 = "Other";
              }
              userdataTableHandler.addRowInDataTable([
                i + 1,
                data[i].sf_name,
                data[i].rg_email,
                data[i].sf_mobile,
                data[i].rg_address,
                data[i].rg_is_buyer +
                  " " +
                  data[i].rg_is_seller +
                  " " +
                  data[i].rg_col1,
                data[i].rg_status,
              ]);
              // userdataTableHandler.RefreshDataTable();
            }
          } else {
            userdataTableHandler.CleanAndRefreshDataTable();
          }
        } else {
          userdataTableHandler.CleanAndRefreshDataTable();
        }
      },
      error: function (data) {
        console.log(data.responseText);
        console.log('<div class="text-center">error ' + data + "here</div>");
      },
      complete: function () {
        console.log('<div class="text-center">Compelete here</div>');
      },
    });
  });
});
