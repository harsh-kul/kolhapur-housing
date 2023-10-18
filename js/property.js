$(document).ready(function () {
  // loadacproperty();
  // rjpeoperty();
  loadcrproperty();
  loadAllproperty();
  loadAllUserProperty();
  // loaddataofproperty();
});
function goforMediaPage(id) {
  localStorage.setItem("propertyid", id);
  console.log("property goforMediaPage Clicked");
  window.location.href = __URL_include_gallary_ + "?mdid=" + id;
}

function updaterecord(id) {
  localStorage.setItem("propertyid", id);
  console.log("property updaterecord Clicked");
  window.location.href = __URL_propertypagepage_ + "?ppid=" + id;
}

function deleterecord(id, tableName) {
  localStorage.setItem("propertyid", id);
  console.log("property deleterecord Clicked", tableName.id);
  deleteRecord(id, tableName.id);
}

//////////// Load All Data    ////////////////////////////
function loadAllproperty() {
  // alert("allproperty");
  const token = $('meta[name="token"]').attr("content");
  var dataTableHandler = new DataTableHandler("myPropertyTable");
  dataTableHandler.inlizlaiseDataTable();
  $(document).ready(function () {
    $.ajax({
      url: __URL_include_property_,
      type: "POST",
      headers: { token: token },
      data: {
        key: "allproperty",
        password: _AUTH_PASSWORD_,
        username: _AUTH_USERNAME_,
      },
      dataType: "json",
      success: function (datajson, status, xhr) {
        console.log("property id data Load All  :success ");
        console.log(datajson["data"]);
        if (datajson["status"]) {
          var data = JSON.parse(datajson["data"]);
          dataTableHandler.CleanAndRefreshDataTable();
          if (data.length > 0) {
            for (var i = 0; i < data.length; i++) {
              var statusString = statusName(data[i].pp_status);
              console.log(statusString);
              dataTableHandler.addRowInDataTable([
                i + 1,
                data[i].rg_fname + " " + data[i].rg_lname,
                data[i].pt_name,
                data[i].pp_price,
                data[i].pp_plot_no +
                  "   " +
                  data[i].pp_ward +
                  "   " +
                  data[i].pp_bulding_name +
                  "  " +
                  data[i].pp_street +
                  "   " +
                  data[i].pp_landmark +
                  "   " +
                  data[i].pp_city +
                  "   " +
                  data[i].pp_district +
                  "   " +
                  data[i].pp_state +
                  "   " +
                  data[i].pp_pincode,
                data[i].pp_owner_name,
                data[i].pp_contact_no,
                statusString,
                //"<span class='badge badge-primary'>"+statusString+"</span>",
                data[i].pp_deposite,
                data[i].pp_aggrement_month,
                '<a href="#" class="btn btn-sm btn-neutral" style="margin-left: 23px;" onclick="goforupdaterecord(' +
                  data[i].pk_ppid +
                  ')">View</a> <a href="#" class="btn btn-sm btn-neutral" onclick="goforupdaterecord(' +
                  data[i].pk_ppid +
                  ')">View Media</a><button type="button" class="btn btn-sm btn-square btn-neutral text-danger-hover" onclick="updaterecord(' +
                  data[i].pk_ppid +
                  ')"> <i class="bi bi-trash"></i></button>',
              ]);
            }
          } else {
          }
        } else {
          dataTableHandler.CleanAndRefreshDataTable();
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
//////////// Load All Data Close    ////////////////////////////

//////////// Load All Data    ////////////////////////////
function loadAllUserProperty() {
  const token = $('meta[name="token"]').attr("content");
  // alert("fghjkl");
  var userId = $("#userId").val();
  var dataTableHandler = new DataTableHandler("userPropertyTable");
  dataTableHandler.inlizlaiseDataTable();
  var tableName = "userPropertyTable";
  $(document).ready(function () {
    // alert(userId);
    $.ajax({
      url: __URL_include_property_,
      type: "POST",
      headers: { token: token },
      data: {
        key: "userproperty",
        password: _AUTH_PASSWORD_,
        username: _AUTH_USERNAME_,
        userid: userId,
      },
      dataType: "json",
      success: function (datajson, status, xhr) {
        console.log("property id data Load All  :success ");
        console.log(datajson);
        if (datajson["status"]) {
          var data = JSON.parse(datajson["data"]);
          dataTableHandler.CleanAndRefreshDataTable();
          if (data.length > 0) {
            for (var i = 0; i < data.length; i++) {
              dataTableHandler.addRowInDataTable([
                i + 1,
                data[i].fk_usid,
                data[i].fk_ptid,
                data[i].pp_price,
                data[i].pp_plot_no +
                  "   " +
                  data[i].pp_ward +
                  "   " +
                  data[i].pp_bulding_name +
                  "  " +
                  data[i].pp_street +
                  "   " +
                  data[i].pp_landmark +
                  "   " +
                  data[i].pp_city +
                  "   " +
                  data[i].pp_district +
                  "   " +
                  data[i].pp_state +
                  "   " +
                  data[i].pp_pincode,
                data[i].pp_owner_name,
                data[i].pp_contact_no,
                data[i].pp_status,
                data[i].pp_deposite,
                data[i].pp_aggrement_month,
                // '<a href="#" class="btn btn-sm btn-neutral" onclick="goforMediaPage(' +
                //   data[i].pk_ppid +
                //   ')">View</a>' +  '<a href="#" class="btn btn-sm btn-neutral" onclick="updaterecord(' +
                //   data[i].pk_ppid +
                //   ')">Update</a>'  +   '<a href="#" class="btn btn-sm btn-neutral" onclick="deleterecord(' +
                //   data[i].pk_ppid +
                //   ')"> <i class="bi bi-trash"></i></a>',

                "<button type='button' id='viewMedia'  onclick='goforMediaPage(" +
                  data[i].pk_ppid +
                  ")' class='btn btn-success'>View Media</button>&nbsp;&nbsp;" +
                  "<button type='button' id='updateProperty'  onclick='updaterecord(" +
                  data[i].pk_ppid +
                  ")' class='btn btn-success'><i class='bi bi-pencil'></i></button>&nbsp;&nbsp;" +
                  "<button type='button' id='=deleteProperty' onclick='deleterecord(" +
                  data[i].pk_ppid + " ," + tableName +
                  ")' class='btn btn-danger'><i class='bi bi-trash'></i></button>",
              ]);
            }
          } else {
          }
        } else {
          dataTableHandler.CleanAndRefreshDataTable();
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
//////////// Load All Data Close    ////////////////////////////

function loadacproperty() {
  $(document).ready(function () {
    const token = $('meta[name="token"]').attr("content");
    $.ajax({
      url: __URL_include_property_,
      type: "POST",
      headers: { token: token },
      data: {
        key: "acproperty",
        password: _AUTH_PASSWORD_,
        username: _AUTH_USERNAME_,
      },
      dataType: "json",
      success: function (data1, status, xhr) {
        console.log("property id data Load All  :success ");
        if (data1["status"]) {
          // data=JSON.stringify(data1["data"]) ;
          data = JSON.parse(data1["data"]);

          if (data.length > 0) {
            for (var i = 0; i < data.length; i++) {
              $("#myTable").append(
                "<tr><td>" +
                  data[i].pk_ppid +
                  "</td><td>" +
                  data[i].fk_usid +
                  "</td><td>" +
                  data[i].fk_ptid +
                  "</td><td>" +
                  data[i].pp_price +
                  "</td><td>" +
                  data[i].pp_plot_no +
                  "</td><td>" +
                  data[i].pp_ward +
                  "</td><td>" +
                  data[i].pp_bulding_name +
                  "</td><td>" +
                  data[i].pp_street +
                  "</td><td>" +
                  data[i].pp_landmark +
                  "</td><td>" +
                  data[i].pp_city +
                  "</td><td>" +
                  data[i].pp_district +
                  "</td><td>" +
                  data[i].pp_state +
                  "</td><td>" +
                  data[i].pp_pincode +
                  "</td><td>" +
                  data[i].pp_owner_name +
                  "</td><td>" +
                  data[i].pp_contact_no +
                  "</td><td>" +
                  data[i].pp_status +
                  "</td><td>" +
                  data[i].pp_rj_resone +
                  "</td><td>" +
                  data[i].pp_deposite +
                  "</td><td>" +
                  data[i].pp_aggrement_month +
                  "</td><td>" +
                  data[i].pp_is_deleted +
                  "</td><td>" +
                  data[i].pp_created_at +
                  "</td><td>" +
                  data[i].pp_updated_at +
                  "</td><td>" +
                  data[i].pp_col1 +
                  "</td><td>" +
                  data[i].pp_col2 +
                  "</td><td>" +
                  data[i].pp_col3 +
                  "</td><td>" +
                  data[i].pp_col4 +
                  "</td><td>" +
                  data[i].pp_col5 +
                  "</td><td>" +
                  data[i].pp_soid +
                  "</td><td>" +
                  data[i].deleted_on +
                  "</td><td>" +
                  data[i].triggered_on +
                  "</td></tr>"
              );
              // console.log(data[i]);
            }
            $("#myTable").dataTable().fnDestroy();
            $("#myTable").dataTable({
              // Cannot initialize it again error
              aoColumns: [{ bSortable: false }, null, null, null, null],
            });
          } else {
          }
        } else {
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

function rjpeoperty() {
  $(document).ready(function () {
    const token = $('meta[name="token"]').attr("content");
    $.ajax({
      url: __URL_include_property_,
      type: "POST",
      headers: { token: token },
      data: {
        key: "rjpeoperty",
        password: _AUTH_PASSWORD_,
        username: _AUTH_USERNAME_,
      },
      dataType: "json",
      success: function (data, status, xhr) {
        if (data.length > 0) {
          for (var i = 0; i < data.length; i++) {
            $("#myTable").append(
              "<tr><td>" +
                data[i].pk_ppid +
                "</td><td>" +
                data[i].fk_usid +
                "</td><td>" +
                data[i].fk_ptid +
                "</td><td>" +
                data[i].pp_price +
                "</td><td>" +
                data[i].pp_plot_no +
                "</td><td>" +
                data[i].pp_ward +
                "</td><td>" +
                data[i].pp_bulding_name +
                "</td><td>" +
                data[i].pp_street +
                "</td><td>" +
                data[i].pp_landmark +
                "</td><td>" +
                data[i].pp_city +
                "</td><td>" +
                data[i].pp_district +
                "</td><td>" +
                data[i].pp_state +
                "</td><td>" +
                data[i].pp_pincode +
                "</td><td>" +
                data[i].pp_owner_name +
                "</td><td>" +
                data[i].pp_contact_no +
                "</td><td>" +
                data[i].pp_status +
                "</td><td>" +
                data[i].pp_rj_resone +
                "</td><td>" +
                data[i].pp_deposite +
                "</td><td>" +
                data[i].pp_aggrement_month +
                "</td><td>" +
                data[i].pp_is_deleted +
                "</td><td>" +
                data[i].pp_created_at +
                "</td><td>" +
                data[i].pp_updated_at +
                "</td><td>" +
                data[i].pp_col1 +
                "</td><td>" +
                data[i].pp_col2 +
                "</td><td>" +
                data[i].pp_col3 +
                "</td><td>" +
                data[i].pp_col4 +
                "</td><td>" +
                data[i].pp_col5 +
                "</td><td>" +
                data[i].pp_soid +
                "</td><td>" +
                data[i].deleted_on +
                "</td><td>" +
                data[i].triggered_on +
                "</td></tr>"
            );
          }
          $("#myTable").dataTable().fnDestroy();
          $("#myTable").dataTable({
            // Cannot initialize it again error
            aoColumns: [{ bSortable: false }, null, null, null, null],
          });
        } else {
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

function loadcrproperty() {
  var dataTableHandler = new DataTableHandler("adminRequestList");
  dataTableHandler.inlizlaiseDataTable();
  $(document).ready(function () {
    const token = $('meta[name="token"]').attr("content");
    $.ajax({
      url: __URL_include_property_,
      type: "POST",
      headers: { token: token },
      data: {
        key: "openProperty",
        password: _AUTH_PASSWORD_,
        username: _AUTH_USERNAME_,
      },
      dataType: "json",
      success: function (data1, status, xhr) {
        console.log("property id data Load All  :success ");
        // console.log("CR"+data1["data"]);

        if (data1["status"]) {
          // data=JSON.stringify(data1["data"]) ;
          data = JSON.parse(data1["data"]);
          console.log("data.length" + data.length);

          dataTableHandler.CleanAndRefreshDataTable();
          if (data.length > 0) {
            for (var i = 0; i < data.length; i++) {
              var statusString = statusName(data[i].pp_status);
              console.log(statusString);
              dataTableHandler.addRowInDataTable([
                i + 1,
                data[i].rg_fname + " " + data[i].rg_lname,
                data[i].pt_name,
                data[i].pp_price,
                data[i].pp_plot_no +
                  "   " +
                  data[i].pp_ward +
                  "   " +
                  data[i].pp_bulding_name +
                  "  " +
                  data[i].pp_street +
                  "   " +
                  data[i].pp_landmark +
                  "   " +
                  data[i].pp_city +
                  "   " +
                  data[i].pp_district +
                  "   " +
                  data[i].pp_state +
                  "   " +
                  data[i].pp_pincode,
                data[i].pp_owner_name,
                data[i].pp_contact_no,
                statusString,
                //"<span class='badge badge-primary'>"+statusString+"</span>",
                data[i].pp_deposite,
                data[i].pp_aggrement_month,
                "<button type='submit' id='viewMedia'  onclick='viewMedia(" +
                  data[i].pk_ppid +
                  ")' class='btn btn-success'>View</button>&nbsp;&nbsp;" +
                  "<button type='submit' id='acPropertyId'  onclick='acProperty(" +
                  data[i].pk_ppid +
                  ")' class='btn btn-success'>Accept</button>&nbsp;&nbsp;" +
                  "<button type='submit' id='=rjPropertyId' onclick='rjProperty(" +
                  data[i].pk_ppid +
                  ")' class='btn btn-danger'>Reject</button>",
              ]);
            }
          } else {
            dataTableHandler.CleanAndRefreshDataTable();
          }
        } else {
          dataTableHandler.CleanAndRefreshDataTable();
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

function acProperty(id) {
  var yes = function yes() {
    var pk_ppid = id;

    var propertyobject = {
      pk_ppid: pk_ppid,
    };

    // var dataTableHandler = new DataTableHandler("adminRequestList");
    // dataTableHandler.inlizlaiseDataTable();

    $(document).ready(function () {
      const token = $('meta[name="token"]').attr("content");
      $.ajax({
        url: __URL_include_property_,
        type: "POST",
        headers: { token: token },
        data: {
          key: "updateacProperty",
          password: _AUTH_PASSWORD_,
          username: _AUTH_USERNAME_,
          property_data: JSON.stringify(propertyobject),
        },
        dataType: "json",
        success: function (data, status, xhr) {
          // dataTableHandler.CleanAndRefreshDataTable();
          console.log("property id data success  :success " + data);
          window.location.href = "../../pages/list_pages/admin_request_list.php";
        },
        error: function (data) {
          console.log("property id data eroor  :error " + data.responseText);
          $("#property_pk_ppid").val("");
          $("#property_fk_usid").val("");
          $("#property_fk_ptid").val("");
          $("#property_pp_price").val("");
          $("#property_pp_plot_no").val("");
          $("#property_pp_ward").val("");
          $("#property_pp_bulding_name").val("");
          $("#property_pp_street").val("");
          $("#property_pp_landmark").val("");
          $("#property_pp_city").val("");
          $("#property_pp_district").val("");
          $("#property_pp_state").val("");
          $("#property_pp_pincode").val("");
          $("#property_pp_owner_name").val("");
          $("#property_pp_contact").val("");
          $("#property_pp_status").val("");
          $("#property_pp_rj_resone").val("");
          $("#property_pp_deposite").val("");
          $("#property_pp_aggrement_month").val("");
          $("#property_pp_is_deleted").val("");
          $("#property_pp_created_at").val("");
          $("#property_pp_updated_at").val("");
          $("#property_pp_col1").val("");
          $("#property_pp_col2").val("");
          $("#property_pp_col3").val("");
          $("#property_pp_col4").val("");
          $("#property_pp_col5").val("");
          $("#property_pp_soid").val("");
          $("#property_deleted_on").val("");
          $("#property_triggered_on").val("");
        },
        complete: function () {
          console.log("property id data complte  :complete ");
        },
      });
    });
  };
  var no = function no() {
    closeNav();
  };
  AlertHandler.doYouWantAlert(
    __ALERT_TITLE__,
    StringHandler.ACCEPT_PROPERT,
    yes,
    no
  );
}

function rjProperty(id) {
  const token = $('meta[name="token"]').attr("content");
  var yes = function yes() {
    $(document).ready(function () {
      var pk_ppid = id;

      var propertyobject = {
        pk_ppid: pk_ppid,
      };

      $.ajax({
        url: __URL_include_property_,
        type: "POST",
        headers: { token: token },
        data: {
          key: "updaterjProperty",
          password: _AUTH_PASSWORD_,
          username: _AUTH_USERNAME_,
          property_data: JSON.stringify(propertyobject),
        },
        dataType: "json",
        success: function (data, status, xhr) {
          console.log("property id data success  :success " + data);
          // window.location.href = "../pages/list_pages/admin_request_list.php";
        },
        error: function (data) {
          console.log("property id data eroor  :error " + data.responseText);
          $("#property_pk_ppid").val("");
          $("#property_fk_usid").val("");
          $("#property_fk_ptid").val("");
          $("#property_pp_price").val("");
          $("#property_pp_plot_no").val("");
          $("#property_pp_ward").val("");
          $("#property_pp_bulding_name").val("");
          $("#property_pp_street").val("");
          $("#property_pp_landmark").val("");
          $("#property_pp_city").val("");
          $("#property_pp_district").val("");
          $("#property_pp_state").val("");
          $("#property_pp_pincode").val("");
          $("#property_pp_owner_name").val("");
          $("#property_pp_contact").val("");
          $("#property_pp_status").val("");
          $("#property_pp_rj_resone").val("");
          $("#property_pp_deposite").val("");
          $("#property_pp_aggrement_month").val("");
          $("#property_pp_is_deleted").val("");
          $("#property_pp_created_at").val("");
          $("#property_pp_updated_at").val("");
          $("#property_pp_col1").val("");
          $("#property_pp_col2").val("");
          $("#property_pp_col3").val("");
          $("#property_pp_col4").val("");
          $("#property_pp_col5").val("");
          $("#property_pp_soid").val("");
          $("#property_deleted_on").val("");
          $("#property_triggered_on").val("");
        },
        complete: function () {
          console.log("property id data complte  :complete ");
        },
      });
    });
  };
  var no = function no() {
    closeNav();
  };
  AlertHandler.doYouWantAlert(
    __ALERT_TITLE__,
    StringHandler.REJECT_PROPERT,
    yes,
    no
  );
}

function viewMedia(id) {
  var pk_ppid = id;

  window.location.href = "../viewmedia.php?pk_ppid=" + pk_ppid;
}

function statusName(stausString) {
  // alert(stausString);
  var respomceHtml = "";
  if (stausString == "1") {
    // stausString = "Create";
    respomceHtml = "<span class='label label-primary'>Create</span>";
  }
  if (stausString == "2") {
    // respomceHtml = "Accept";
    respomceHtml = "<span class='label label-success'>Accept</span>";
  }
  if (stausString == "3") {
    // respomceHtml = "Delete";
    respomceHtml = "<span class='label label-danger'>Delete</span>";
  }
  if (stausString == "4") {
    // respomceHtml = "Reject";
    respomceHtml = "<span class='label label-danger'>Reject</span>";
  }
  if (stausString == "5") {
    // respomceHtml = "Soled Out";
    respomceHtml = "<span class='label label-info'>Soled Out</span>";
  }
  if (stausString == "6") {
    // respomceHtml = "";
    respomceHtml = "<span class='label label-success'>Create</span>";
  }
  if (stausString == "7") {
    // respomceHtml = "";
    respomceHtml = "<span class='label label-success'>Create</span>";
  }
  if (stausString == "8") {
    // respomceHtml = "Resume";
    respomceHtml = "<span class='label label-warning'>Resume</span>";
  }
  return respomceHtml;
}

function deleteRecord(id, tableName) {
  $(document).ready(function () {
    const token = $('meta[name="token"]').attr("content");
    var pk_ppid = id;
    // var dataTableHandler = new DataTableHandler(tableName);
    // dataTableHandler.inlizlaiseDataTable();
    var propertyobject = {
      pk_ppid: pk_ppid,
    };

    $.ajax({
      url: __URL_include_property_,
      type: "POST",
      headers: { token: token },
      data: {
        key: "deletedata",
        password: _AUTH_PASSWORD_,
        username: _AUTH_USERNAME_,
        property_data: JSON.stringify(propertyobject),
      },
      dataType: "json",
      success: function (data, status, xhr) {
        console.log("property id data success  :success " + data);
        if (tableName == 'userPropertyTable') {
          loadAllUserProperty();
        }
        // dataTableHandler.CleanAndRefreshDataTable();
        // window.location.href = "../pages/list_pages/admin_request_list.php";
      },
      error: function (data) {
        console.log("property id data eroor  :error " + data.responseText);
        $("#property_pk_ppid").val("");
        $("#property_fk_usid").val("");
        $("#property_fk_ptid").val("");
        $("#property_pp_price").val("");
        $("#property_pp_plot_no").val("");
        $("#property_pp_ward").val("");
        $("#property_pp_bulding_name").val("");
        $("#property_pp_street").val("");
        $("#property_pp_landmark").val("");
        $("#property_pp_city").val("");
        $("#property_pp_district").val("");
        $("#property_pp_state").val("");
        $("#property_pp_pincode").val("");
        $("#property_pp_owner_name").val("");
        $("#property_pp_contact").val("");
        $("#property_pp_status").val("");
        $("#property_pp_rj_resone").val("");
        $("#property_pp_deposite").val("");
        $("#property_pp_aggrement_month").val("");
        $("#property_pp_is_deleted").val("");
        $("#property_pp_created_at").val("");
        $("#property_pp_updated_at").val("");
        $("#property_pp_col1").val("");
        $("#property_pp_col2").val("");
        $("#property_pp_col3").val("");
        $("#property_pp_col4").val("");
        $("#property_pp_col5").val("");
        $("#property_pp_soid").val("");
        $("#property_deleted_on").val("");
        $("#property_triggered_on").val("");
      },
      complete: function () {
        console.log("property id data complte  :complete ");
      },
    });
  });
}
