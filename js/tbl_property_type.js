$(document).ready(function () {
  ////Docament Ready Code loaddataofpropertytype();
  $("#btn_save_propertytype").click(function () {
    console.log("propertytype Save Clicked");
    savepropertytype();
    loadAllpropertytype();
  });
  $("#btn_update_propertytype").click(function () {
    console.log("propertytype Update Clicked");
    updatepropertytype();
    loadAllpropertytype();
  });
});
//////////// Docuemnt  Close Here ////////////////////////////
//////////// Go For Update  Here ////////////////////////////
function goforupdaterecord(id) {
  localStorage.setItem("propertytypeid", id);
  console.log("propertytype goforupdaterecord Clicked");
  window.location.href = "../user/propertytype.php";
}
//////////// Go For Update  Here ////////////////////////////
//////////// Load Of Singlge data For Show  Here ////////////////////////////
function loaddataofpropertytype() {
  var propertytypeid = parseInt(localStorage.getItem("propertytypeid"));
  console.log("propertytypeid  " + propertytypeid);
  if (isNaN(propertytypeid)) {
    console.log("propertytype id is null Clicked");
  } else {
    $(document).ready(function () {
      const token = $('meta[name="token"]').attr("content");
      console.log("propertytype id data Loading");
      $.ajax({
        url: "../../php/propertytype.php",
        type: "POST",
        headers: {token : token},
        data: {
          key: "getone",
          password: _AUTH_PASSWORD_,
          username: _AUTH_USERNAME_,
          propertytypeid: propertytypeid,
        },
        success: function (data, status, xhr) {
          console.log(data.fname);
          $("#propertytype_pk_ptid").val(data.pk_ptid);
          $("#propertytype_pt_name").val(data.pt_name);
          $("#propertytype_pt_is_deleted").val(data.pt_is_deleted);
          $("#propertytype_pt_created_at").val(data.pt_created_at);
          $("#propertytype_pt_updated_at").val(data.pt_updated_at);
          $("#propertytype_pt_col1").val(data.pt_col1);
          $("#propertytype_pt_col2").val(data.pt_col2);
          $("#propertytype_pt_col3").val(data.pt_col3);
          $("#propertytype_pt_col4").val(data.pt_col4);
          $("#propertytype_pt_col5").val(data.pt_col5);
          $("#propertytype_deleted_on").val(data.deleted_on);
          $("#propertytype_triggered_on").val(data.triggered_on);
          console.log("propertytype id data Single Loading :success ");
        },
        error: function () {
          console.log(
            "propertytype id data Single Loading :error " + data.responseText
          );
        },
        complete: function () {
          console.log("propertytype id data Single Loading :complete ");
        },
      });
    });
  }
  loadAllpropertytype();
}
//////////// Load Of Singlge data For Show  Here   Close ////////////////////////////
//////////// Update Data    ////////////////////////////
function updatepropertytype() {
  var userid = parseInt(localStorage.getItem("propertytypeid"));
  var pk_ptid = $("#propertytype_pk_ptid").val();
  var pt_name = $("#propertytype_pt_name").val();
  var pt_is_deleted = $("#propertytype_pt_is_deleted").val();
  var pt_created_at = $("#propertytype_pt_created_at").val();
  var pt_updated_at = $("#propertytype_pt_updated_at").val();
  var pt_col1 = $("#propertytype_pt_col1").val();
  var pt_col2 = $("#propertytype_pt_col2").val();
  var pt_col3 = $("#propertytype_pt_col3").val();
  var pt_col4 = $("#propertytype_pt_col4").val();
  var pt_col5 = $("#propertytype_pt_col5").val();
  var deleted_on = $("#propertytype_deleted_on").val();
  var triggered_on = $("#propertytype_triggered_on").val();
  var propertytypeobject = {
    pk_ptid: pk_ptid,
    pt_name: pt_name,
    pt_is_deleted: pt_is_deleted,
    pt_created_at: pt_created_at,
    pt_updated_at: pt_updated_at,
    pt_col1: pt_col1,
    pt_col2: pt_col2,
    pt_col3: pt_col3,
    pt_col4: pt_col4,
    pt_col5: pt_col5,
    deleted_on: deleted_on,
    triggered_on: triggered_on,
  };
  const token = $('meta[name="token"]').attr("content");
  $.ajax({
    url: "../../php/propertytype.php",
    type: "POST",
    headers: {token : token},
    data: {
      key: "updatedata",
      password: _AUTH_PASSWORD_,
      username: _AUTH_USERNAME_,
      propertytype_data: JSON.stringify(propertytypeobject),
    },
    dataType: "json",
    success: function (data, status, xhr) {
      console.log(data);
      console.log("propertytype id data Update  :success ");
      $("#propertytype_pk_ptid").val("");
      $("#propertytype_pt_name").val("");
      $("#propertytype_pt_is_deleted").val("");
      $("#propertytype_pt_created_at").val("");
      $("#propertytype_pt_updated_at").val("");
      $("#propertytype_pt_col1").val("");
      $("#propertytype_pt_col2").val("");
      $("#propertytype_pt_col3").val("");
      $("#propertytype_pt_col4").val("");
      $("#propertytype_pt_col5").val("");
      $("#propertytype_deleted_on").val("");
      $("#propertytype_triggered_on").val("");
    },
    error: function (error) {
      console.log("propertytype id data Update  :error" + data.responseText);
    },
    complete: function () {
      console.log("userUpdatedjs Compelete");
      console.log("propertytype id data Update  :complete  ");
      localStorage.setItem("userid", NaN);
      window.location.href = "../user/propertytype_list_page.php";
    },
  });
}
//////////// Update Data   Close  ////////////////////////////
//////////// Save Data    ////////////////////////////
function savepropertytype() {
  var pk_ptid = $("#propertytype_pk_ptid").val();
  var pt_name = $("#propertytype_pt_name").val();
  var pt_is_deleted = $("#propertytype_pt_is_deleted").val();
  var pt_created_at = $("#propertytype_pt_created_at").val();
  var pt_updated_at = $("#propertytype_pt_updated_at").val();
  var pt_col1 = $("#propertytype_pt_col1").val();
  var pt_col2 = $("#propertytype_pt_col2").val();
  var pt_col3 = $("#propertytype_pt_col3").val();
  var pt_col4 = $("#propertytype_pt_col4").val();
  var pt_col5 = $("#propertytype_pt_col5").val();
  var deleted_on = $("#propertytype_deleted_on").val();
  var triggered_on = $("#propertytype_triggered_on").val();
  var propertytypeobject = {
    pk_ptid: pk_ptid,
    pt_name: pt_name,
    pt_is_deleted: pt_is_deleted,
    pt_created_at: pt_created_at,
    pt_updated_at: pt_updated_at,
    pt_col1: pt_col1,
    pt_col2: pt_col2,
    pt_col3: pt_col3,
    pt_col4: pt_col4,
    pt_col5: pt_col5,
    deleted_on: deleted_on,
    triggered_on: triggered_on,
  };
  const token = $('meta[name="token"]').attr("content");
  $.ajax({
    url: "../../php/propertytype.php",
    type: "POST",
    headers: {token : token},
    data: {
      key: "savedata",
      password: _AUTH_PASSWORD_,
      username: _AUTH_USERNAME_,
      propertytype_data: JSON.stringify(propertytypeobject),
    },
    dataType: "json",
    success: function (data, status, xhr) {
      console.log("propertytype id data Save  :success ");
      $("#propertytype_pk_ptid").val("");
      $("#propertytype_pt_name").val("");
      $("#propertytype_pt_is_deleted").val("");
      $("#propertytype_pt_created_at").val("");
      $("#propertytype_pt_updated_at").val("");
      $("#propertytype_pt_col1").val("");
      $("#propertytype_pt_col2").val("");
      $("#propertytype_pt_col3").val("");
      $("#propertytype_pt_col4").val("");
      $("#propertytype_pt_col5").val("");
      $("#propertytype_deleted_on").val("");
      $("#propertytype_triggered_on").val("");
    },
    error: function (data) {
      console.log("propertytype id data Save  :error " + data.responseText);
    },
    complete: function () {
      console.log("propertytype id data Save  :complete ");
      localStorage.setItem("propertytypeid", NaN);
      window.location.href = "../user/propertytype_list_page.php";
    },
  });
}
//////////// Save Data   Close   ////////////////////////////
//////////// Load All Data    ////////////////////////////
function loadAllpropertytype() {
  const token = $('meta[name="token"]').attr("content");
  $.ajax({
    url: "../../php/propertytype.php",
    type: "POST",
    headers: {token : token},
    data: {
      key: "getalldata",
      password: _AUTH_PASSWORD_,
      username: _AUTH_USERNAME_,
    },
    dataType: "json",
    success: function (data, status, xhr) {
      console.log("propertytype id data Load All  :success ");
      $("#user_id").val(data.id);
      $("#user_fname").val(data.fname);
      $("#user_mname").val(data.mname);
      $("#user_lname").val(data.lname);
      $("#user_email_id").val(data.email_id);
      $("#user_mob_no").val(data.mob_no);
      $("#user_isdelete").val(data.isdelete);
      $("#user_col_1").val(data.col_1);
      $("#user_col_2").val(data.col_2);
      $("#user_col_3").val(data.col_3);
      $("#user_primary").val(data.primary);
      if (data.length > 0) {
        for (var i = 0; i < data.length; i++) {
          $("#myTable").append(
            "<tr><td>" +
              data[i].pk_ptid +
              "</td><td>" +
              data[i].pt_name +
              "</td><td>" +
              data[i].pt_is_deleted +
              "</td><td>" +
              data[i].pt_created_at +
              "</td><td>" +
              data[i].pt_updated_at +
              "</td><td>" +
              data[i].pt_col1 +
              "</td><td>" +
              data[i].pt_col2 +
              "</td><td>" +
              data[i].pt_col3 +
              "</td><td>" +
              data[i].pt_col4 +
              "</td><td>" +
              data[i].pt_col5 +
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
      console.log("propertytype id data Load All  :error " + data.responseText);
    },
    complete: function () {
      console.log("propertytype id data Load All  :complete ");
    },
  });
}
//////////// Load All Data Close    ////////////////////////////
//////////// Fetch and  Data     ////////////////////////////
function updaterecord(id, type) {
  $(document).ready(function () {
    const token = $('meta[name="token"]').attr("content");
    var userobject = { id: id };
    $.ajax({
      url: "../../php/propertytype.php",
      type: "POST",
      headers: {token : token},
      data: {
        key: "deletedata",
        password: _AUTH_PASSWORD_,
        username: _AUTH_USERNAME_,
        tbl_user_name: JSON.stringify(userobject),
      },
      dataType: "json",
      success: function (data, status, xhr) {
        console.log("propertytype id data Update Data  :success ");
        var dataTable = $("#myTable").dataTable();
        dataTable.fnClearTable();
        dataTable.fnDraw();
        dataTable.fnDestroy();
        loadAllpropertytype();
      },
      error: function (data) {
        console.log(
          "propertytype id data Update Data :error " + data.responseText
        );
      },
      complete: function () {
        console.log("propertytype id data Update Data  :complete ");
      },
    });
  });
}
function goforupdaterecord(id) {
  localStorage.setItem("propertytypeid", id);
  window.location.href = "../user/propertytype.php";
}
//////////// Fetch and  Data     ////////////////////////////
