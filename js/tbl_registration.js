$(document).ready(function () {
  $("#btn_save_registration").click(function () {
    console.log("registration Save Clicked");
    saveregistration();
  });

  $("#login").click(function () {
    // alert("hhhhhhhhhhhhhhh");
    login();
  });
});
//////////// Docuemnt  Close Here ////////////////////////////
//////////// Go For Update  Here ////////////////////////////
function goforupdaterecord(id) {
  localStorage.setItem("registrationid", id);
  console.log("registration goforupdaterecord Clicked");
  window.location.href = "../user/registration.php";
}
//////////// Go For Update  Here ////////////////////////////
//////////// Load Of Singlge data For Show  Here ////////////////////////////
function loaddataofregistration() {
  var registrationid = parseInt(localStorage.getItem("registrationid"));
  console.log("registrationid  " + registrationid);
  if (isNaN(registrationid)) {
    console.log("registration id is null Clicked");
  } else {
    $(document).ready(function () {
      console.log("registration id data Loading");
      $.ajax({
        url: "../../php/registration.php",
        type: "POST",
        data: {
          key: "getone",
          password: _AUTH_PASSWORD_,
          username: _AUTH_USERNAME_,
          registrationid: registrationid,
        },
        dataType: "json",
        success: function (data, status, xhr) {
          console.log(data.fname);
          $("#registration_pk_rgid").val(data.pk_rgid);
          $("#registration_fk_sfid").val(data.fk_sfid);
          $("#registration_rg_fname").val(data.rg_fname);
          $("#registration_rg_lname").val(data.rg_lname);
          $("#registration_rg_email").val(data.rg_email);
          $("#registration_rg_mobile").val(data.rg_mobile);
          $("#registration_rg_address").val(data.rg_address);
          $("#registration_rg_password").val(data.rg_password);
          $("#registration_rd_is_super_admin").val(data.rd_is_super_admin);
          $("#registration_rg_is_seller").val(data.rg_is_seller);
          $("#registration_rg_is_buyer").val(data.rg_is_buyer);
          $("#registration_rg_is_app_user").val(data.rg_is_app_user);
          $("#registration_rg_is_deleted").val(data.rg_is_deleted);
          $("#registration_rg_created_at").val(data.rg_created_at);
          $("#registration_rg_updated_at").val(data.rg_updated_at);
          $("#registration_rg_status").val(data.rg_status);
          $("#registration_rg_col1").val(data.rg_col1);
          $("#registration_rg_col2").val(data.rg_col2);
          $("#registration_rg_col3").val(data.rg_col3);
          $("#registration_rg_col4").val(data.rg_col4);
          $("#registration_rg_col5").val(data.rg_col5);
          $("#registration_rg_deleted_on").val(data.rg_deleted_on);
          $("#registration_rg_triggered_on").val(data.rg_triggered_on);
          console.log("registration id data Single Loading :success ");
        },
        error: function () {
          console.log(
            "registration id data Single Loading :error " + data.responseText
          );
        },
        complete: function () {
          console.log("registration id data Single Loading :complete ");
        },
      });
    });
  }
  loadAllregistration();
}
//////////// Load Of Singlge data For Show  Here   Close ////////////////////////////
//////////// Update Data    ////////////////////////////
function updateregistration() {
  var userid = parseInt(localStorage.getItem("registrationid"));
  var pk_rgid = $("#registration_pk_rgid").val();
  var fk_sfid = $("#registration_fk_sfid").val();
  var rg_fname = $("#registration_rg_fname").val();
  var rg_lname = $("#registration_rg_lname").val();
  var rg_email = $("#registration_rg_email").val();
  var rg_mobile = $("#registration_rg_mobile").val();
  var rg_address = $("#registration_rg_address").val();
  var rg_password = $("#registration_rg_password").val();
  var rd_is_super_admin = $("#registration_rd_is_super_admin").val();
  var rg_is_seller = $("#registration_rg_is_seller").val();
  var rg_is_buyer = $("#registration_rg_is_buyer").val();
  var rg_is_app_user = $("#registration_rg_is_app_user").val();
  var rg_is_deleted = $("#registration_rg_is_deleted").val();
  var rg_created_at = $("#registration_rg_created_at").val();
  var rg_updated_at = $("#registration_rg_updated_at").val();
  var rg_status = $("#registration_rg_status").val();
  var rg_col1 = $("#registration_rg_col1").val();
  var rg_col2 = $("#registration_rg_col2").val();
  var rg_col3 = $("#registration_rg_col3").val();
  var rg_col4 = $("#registration_rg_col4").val();
  var rg_col5 = $("#registration_rg_col5").val();
  var rg_deleted_on = $("#registration_rg_deleted_on").val();
  var rg_triggered_on = $("#registration_rg_triggered_on").val();
  var registrationobject = {
    pk_rgid: pk_rgid,
    fk_sfid: fk_sfid,
    rg_fname: rg_fname,
    rg_lname: rg_lname,
    rg_email: rg_email,
    rg_mobile: rg_mobile,
    rg_address: rg_address,
    rg_password: rg_password,
    rd_is_super_admin: rd_is_super_admin,
    rg_is_seller: rg_is_seller,
    rg_is_buyer: rg_is_buyer,
    rg_is_app_user: rg_is_app_user,
    rg_is_deleted: rg_is_deleted,
    rg_created_at: rg_created_at,
    rg_updated_at: rg_updated_at,
    rg_status: rg_status,
    rg_col1: rg_col1,
    rg_col2: rg_col2,
    rg_col3: rg_col3,
    rg_col4: rg_col4,
    rg_col5: rg_col5,
    rg_deleted_on: rg_deleted_on,
    rg_triggered_on: rg_triggered_on,
  };
  $.ajax({
    url: "../../php/registration.php",
    type: "POST",
    data: {
      key: "updatedata",
      password: _AUTH_PASSWORD_,
      username: _AUTH_USERNAME_,
      registration_data: JSON.stringify(registrationobject),
    },
    dataType: "json",
    success: function (data, status, xhr) {
      console.log(data);
      console.log("registration id data Update  :success ");
      $("#registration_pk_rgid").val("");
      $("#registration_fk_sfid").val("");
      $("#registration_rg_fname").val("");
      $("#registration_rg_lname").val("");
      $("#registration_rg_email").val("");
      $("#registration_rg_mobile").val("");
      $("#registration_rg_address").val("");
      $("#registration_rg_password").val("");
      $("#registration_rd_is_super_admin").val("");
      $("#registration_rg_is_seller").val("");
      $("#registration_rg_is_buyer").val("");
      $("#registration_rg_is_app_user").val("");
      $("#registration_rg_is_deleted").val("");
      $("#registration_rg_created_at").val("");
      $("#registration_rg_updated_at").val("");
      $("#registration_rg_status").val("");
      $("#registration_rg_col1").val("");
      $("#registration_rg_col2").val("");
      $("#registration_rg_col3").val("");
      $("#registration_rg_col4").val("");
      $("#registration_rg_col5").val("");
      $("#registration_rg_deleted_on").val("");
      $("#registration_rg_triggered_on").val("");
    },
    error: function (error) {
      console.log("registration id data Update  :error" + data.responseText);
    },
    complete: function () {
      console.log("userUpdatedjs Compelete");
      console.log("registration id data Update  :complete  ");
      localStorage.setItem("userid", NaN);
      // window.location.href = "../user/registration_list_page.php";
    },
  });
}

//////////// Save Data   Close   ////////////////////////////
//////////// Load All Data    ////////////////////////////
function loadAllregistration() {
  $.ajax({
    url: "../../php/registration.php",
    type: "POST",
    data: {
      key: "getalldata",
      password: _AUTH_PASSWORD_,
      username: _AUTH_USERNAME_,
    },
    dataType: "json",
    success: function (data, status, xhr) {
      console.log("registration id data Load All  :success ");
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
              data[i].pk_rgid +
              "</td><td>" +
              data[i].fk_sfid +
              "</td><td>" +
              data[i].rg_fname +
              "</td><td>" +
              data[i].rg_lname +
              "</td><td>" +
              data[i].rg_email +
              "</td><td>" +
              data[i].rg_mobile +
              "</td><td>" +
              data[i].rg_address +
              "</td><td>" +
              data[i].rg_password +
              "</td><td>" +
              data[i].rd_is_super_admin +
              "</td><td>" +
              data[i].rg_is_seller +
              "</td><td>" +
              data[i].rg_is_buyer +
              "</td><td>" +
              data[i].rg_is_app_user +
              "</td><td>" +
              data[i].rg_is_deleted +
              "</td><td>" +
              data[i].rg_created_at +
              "</td><td>" +
              data[i].rg_updated_at +
              "</td><td>" +
              data[i].rg_status +
              "</td><td>" +
              data[i].rg_col1 +
              "</td><td>" +
              data[i].rg_col2 +
              "</td><td>" +
              data[i].rg_col3 +
              "</td><td>" +
              data[i].rg_col4 +
              "</td><td>" +
              data[i].rg_col5 +
              "</td><td>" +
              data[i].rg_deleted_on +
              "</td><td>" +
              data[i].rg_triggered_on +
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
      console.log("registration id data Load All  :error " + data.responseText);
    },
    complete: function () {
      console.log("registration id data Load All  :complete ");
    },
  });
}
//////////// Load All Data Close    ////////////////////////////
//////////// Fetch and  Data     ////////////////////////////
function updaterecord(id, type) {
  $(document).ready(function () {
    var userobject = { id: id };
    $.ajax({
      url: "../../php/registration.php",
      type: "POST",
      data: {
        key: "deletedata",
        password: _AUTH_PASSWORD_,
        username: _AUTH_USERNAME_,
        tbl_user_name: JSON.stringify(userobject),
      },
      dataType: "json",
      success: function (data, status, xhr) {
        console.log("registration id data Update Data  :success ");
        var dataTable = $("#myTable").dataTable();
        dataTable.fnClearTable();
        dataTable.fnDraw();
        dataTable.fnDestroy();
        loadAllregistration();
      },
      error: function (data) {
        console.log(
          "registration id data Update Data :error " + data.responseText
        );
      },
      complete: function () {
        console.log("registration id data Update Data  :complete ");
      },
    });
  });
}
function goforupdaterecord(id) {
  localStorage.setItem("registrationid", id);
  window.location.href = "../user/registration.php";
}
//////////// Fetch and  Data     ////////////////////////////

function login() {
  // swal("fgcvhbj");
  var rg_email = $("#login_email").val();
  var rg_password = $("#login_password").val();
  var registrationobject = {
    rg_email: rg_email,
    rg_password: rg_password,
  };

  if (
    !ValidationHandler.checkVarIsNull(rg_email) &&
    !ValidationHandler.checkVarIsNull(rg_password)
  ) {
    if (ValidationHandler.isValidEmail(rg_email)) {
      $(document).ready(function () {
        $.ajax({
          url: "../include/registration.php",
          type: "POST",
          dataType: "json",
          data: {
            key: "login",
            password: _AUTH_PASSWORD_,
            username: _AUTH_USERNAME_,
            registration_data: JSON.stringify(registrationobject),
          },
          success: function (data, status, xhr) {
            console.log("registration id data Save  :success " + data);
            console.log(data);
            if (data["status"] == true) {
              var yes = function yes(){
                alert("hhhhh");
                window.location.href = __URL_INDEX_;
              }

              AlertHandler.loginAlert("login success",__URL_INDEX_,yes);
              
              window.location.href = __URL_INDEX_;
            } else {
              AlertHandler.getErrorAlert(StringHandler.REQ_USER_NOT_REG);
            }
          },
          error: function (data, status, xhr) {
            // alert(data.responseText);
            console.log("registration id data error  :error " + data);
          },
          complete: function () {
            console.log("registration id data complte  :complete ");
          },
        });
      });
    } else {
      AlertHandler.getErrorAlert(StringHandler.ENTER_VAILD_EMAILID);
    }
  } else {
    AlertHandler.getErrorAlert(StringHandler.ENTER_USERNAME_PASSWORD_);
  }
}

function saveregistration() {
  // console.log("cghjb");
  var rg_fname = $("#registration_rg_fname").val();
  var rg_lname = $("#registration_rg_lname").val();
  var rg_email = $("#registration_rg_email").val();
  var rg_mobile = $("#registration_rg_mobile").val();
  var rg_address = $("#registration_rg_address").val();
  var rg_password = $("#registration_rg_password").val();
  var rg_c_password = $("#registration_rg_confim_password").val();

  if (!ValidationHandler.checkVarIsNull(rg_fname)) {
    if (!ValidationHandler.checkVarIsNull(rg_email)) {
      if (ValidationHandler.isValidEmail(rg_email)) {
        if (!ValidationHandler.checkVarIsNull(rg_mobile)) {
          if (ValidationHandler.isValidIndianMoblieNumber(rg_mobile)) {
            if (!ValidationHandler.checkVarIsNull(rg_address)) {
              if (!ValidationHandler.checkVarIsNull(rg_password)) {
                if (!ValidationHandler.checkVarIsNull(rg_c_password)) {
                  if (rg_c_password === rg_password) {
                    SaveRegData(
                      rg_fname,
                      rg_lname,
                      rg_email,
                      rg_mobile,
                      rg_address,
                      rg_password
                    );
                  } else {
                    AlertHandler.getErrorAlert(
                      StringHandler.REQ_EQUAL_PASSWORD
                    );
                  }
                } else {
                  AlertHandler.getErrorAlert(StringHandler.REQ_CONFIG_PASSWORD);
                }
              } else {
                AlertHandler.getErrorAlert(StringHandler.REQ_PASSWORD);
              }
            } else {
              AlertHandler.getErrorAlert(StringHandler.REQ_ADDRESS);
            }
          } else {
            AlertHandler.getErrorAlert(StringHandler.ENTER_VAILD_MOBILE_NO);
          }
        } else {
          AlertHandler.getErrorAlert(StringHandler.REQ_MOBILE);
        }
      } else {
        AlertHandler.getErrorAlert(StringHandler.ENTER_VAILD_EMAILID);
      }
    } else {
      AlertHandler.getErrorAlert(StringHandler.REQ_EMAIL_NAME);
    }
  } else {
    AlertHandler.getErrorAlert(StringHandler.REQ_FIRST_NAME);
  }
}

function SaveRegData(
  rg_fname,
  rg_lname,
  rg_email,
  rg_mobile,
  rg_address,
  rg_password
) {
  var allVals = [];
  $(".registration_roles :checked").each(function () {
    allVals.push($(this).val());
    // alert("hhhhhhhhhh" + allVals);
  });
  // alert("kkkkkkkkkkkk" + allVals);
  if (allVals.length != 0) {
    var rg_is_seller = "N";
    var rg_is_buyer = "N";
    var rg_col1 = "N";
    for (let i = 0; i < allVals.length; i++) {
      const element = allVals[i];

      if (element == "SE") {
        console.log(element);
        var rg_is_seller = "Y";
      }
      if (element == "BU") {
        console.log(element);
        var rg_is_buyer = "Y";
      }
      if (element == "O") {
        console.log(element);
        var rg_col1 = "Y";
      }
    }

    var rg_col2 = Utils.generateOTP();
    // alert(rg_col2);

    var registrationobject = {
      rg_fname: rg_fname,
      rg_lname: rg_lname,
      rg_email: rg_email,
      rg_mobile: rg_mobile,
      rg_address: rg_address,
      rg_password: rg_password,
      rg_is_seller: rg_is_seller,
      rg_is_buyer: rg_is_buyer,

      rg_col1: rg_col1,
      rg_col2: rg_col2,
    };
    // alert(registrationobject);

    $.ajax({
      url: __URL_include_registration_,
      type: "POST",
      dataType: "json",
      data: {
        key: "savedata",
        password: _AUTH_PASSWORD_,
        username: _AUTH_USERNAME_,
        tbl_registrationobject: JSON.stringify(registrationobject),
      },
      success: function (data, status, xhr) {
        console.log("registration id data Save  :success " + data);
        localStorage.setItem("registrationid", NaN);
        $("#registration_pk_rgid").val("");
        $("#registration_fk_sfid").val("");
        $("#registration_rg_fname").val("");
        $("#registration_rg_lname").val("");
        $("#registration_rg_email").val("");
        $("#registration_rg_mobile").val("");
        $("#registration_rg_address").val("");
        $("#registration_rg_password").val("");
        $("registration_rg_confim_password").val("");
        $("#registration_rd_is_super_admin").val("");
        $("#registration_rg_is_seller").val("");
        $("#registration_rg_is_buyer").val("");
        $("#registration_rg_is_app_user").val("");

        window.location.href = "../pages/otpscreen.php";
        localStorage.setItem("registrationid", data.data);
      },
      error: function (data) {

        console.log("registration id data Save  :error " + data['status']);
        console.log(data.responseText);
      },
      complete: function () {
        console.log("registration id data Save  :complete ");
        // window.location.href = "../pages/login.php";
        // window.navigate("../pages/otpscreen.php");
      },
    });
  } else {
    AlertHandler.getErrorAlert(StringHandler.USER_SELECT_USER_ROLE);
  }
}
