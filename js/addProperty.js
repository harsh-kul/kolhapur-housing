$(document).ready(function () {
  $("#property_pp_aggrement_month").datepicker();


  $("#property_pp_aggrement_month").hide();
  $("#property_pp_aggrement_month_label").hide();
  $("#property_fk_ptid").change(function (e) { 
    // alert($("#property_fk_ptid :selected").text());
    if ($("#property_fk_ptid :selected").text() == 'Rent') {
      $("#property_pp_aggrement_month").show();
      $("#property_pp_aggrement_month_label").show();
    }else{
      $("#property_pp_aggrement_month").hide();
  $("#property_pp_aggrement_month_label").hide();
    }
  });
  $("#btn_save_property").click(function (e) {
    e.preventDefault();
    validateProperty();
  });
  loadPropertyType();
  // loadacproperty();
  // rjpeoperty();
  // loadcrproperty();
  // loadAllproperty();

  loaddataofproperty();

  $("#btn_update_property").click(function () {
    console.log("property Update Clicked");
    updateproperty();
    // loadAllproperty();
  });
});
//////////// Docuemnt  Close Here ////////////////////////////
//////////// Go For Update  Here ////////////////////////////
function goforupdaterecord(id) {
  localStorage.setItem("propertyid", id);
  console.log("property goforupdaterecord Clicked");
  window.location.href = __URL_propertypagepage_;
}
//////////// Go For Update  Here ////////////////////////////
//////////// Load Of Singlge data For Show  Here ////////////////////////////
function loaddataofproperty() {
  const token = $('meta[name="token"]').attr("content");
  // var propertyid = parseInt(localStorage.getItem("propertyid"));
  var propertyid = $("#pp_id").val();
  // console.log("propertyid  " + propertyid);
  if (isNaN(propertyid)) {
    console.log("property id is null Clicked");
  } else {
    $(document).ready(function () {
      console.log("property id data Loading");
      $.ajax({
        url: __URL_include_property_,
        type: "POST",
        headers: {token : token},
        data: {
          key: "getone",
          password: _AUTH_PASSWORD_,
          username: _AUTH_USERNAME_,
          propertyid: propertyid,
        },
        dataType: "json",

        success: function (jsondata, status, xhr) {
          console.log(jsondata);
          if (jsondata["status"]) {
            var data = JSON.parse(jsondata["data"]);

            $("#property_pk_ppid").val(data.pk_ppid);
            $("#property_fk_usid").val(data.fk_usid);
            $("#property_fk_ptid").val(data.fk_ptid);
            $("#property_pp_price").val(data.pp_price);
            $("#property_pp_plot_no").val(data.pp_plot_no);
            $("#property_pp_ward").val(data.pp_ward);
            $("#property_pp_bulding_name").val(data.pp_bulding_name);
            $("#property_pp_street").val(data.pp_street);
            $("#property_pp_landmark").val(data.pp_landmark);
            $("#property_pp_city").val(data.pp_city);
            $("#property_pp_district").val(data.pp_district);
            $("#property_pp_state").val(data.pp_state);
            $("#property_pp_pincode").val(data.pp_pincode);
            $("#property_pp_owner_name").val(data.pp_owner_name);
            $("#property_pp_contact_no").val(data.pp_contact_no); //property_pp_contact_no pp_rj_resone
            $("#property_pp_status").val(data.pp_status);
            $("#pp_rj_resone").val(data.pp_rj_resone);
            $("#property_pp_deposite").val(data.pp_deposite);
            $("#property_pp_aggrement_month").val(data.pp_aggrement_month);
          }
          console.log("property id data Single Loading :success ");
        },
        error: function () {
          console.log(
            "property id data Single Loading :error " + data.responseText
          );
        },
        complete: function () {
          console.log("property id data Single Loading :complete ");
        },
      });
    });
  }
  // loadAllproperty();
}
//////////// Load Of Singlge data For Show  Here   Close ////////////////////////////
//////////// Update Data    ////////////////////////////
function updateproperty() {
  // const token = $('meta[name="token"]').attr("content");
  $(document).ready(function () {
    const token = $('meta[name="token"]').attr("content");
    var pkId =  $("#pp_id").val();;

    // var fk_usid = 1;
    var fk_ptid = $("#property_fk_ptid").val();
    var pp_price = $("#property_pp_price").val();
    var pp_plot_no = $("#property_pp_plot_no").val();
    var pp_ward = $("#property_pp_ward").val();
    var pp_bulding_name = $("#property_pp_bulding_name").val();
    var pp_street = $("#property_pp_street").val();
    var pp_landmark = $("#property_pp_landmark").val();
    var pp_city = $("#property_pp_city").val();
    var pp_district = $("#property_pp_district").val();
    var pp_state = $("#property_pp_state").val();
    var pp_pincode = $("#property_pp_pincode").val();
    var pp_owner_name = $("#property_pp_owner_name").val();
    var pp_contact_no = $("#property_pp_contact_no").val(); //property_pp_contact_no pp_rj_resone
    var pp_rj_resone = $("#pp_rj_resone").val();
    var pp_deposite = $("#property_pp_deposite").val();
    var pp_aggrement_month = $("#property_pp_aggrement_month").val();

    var propertyobject = {
      pk_ppid: pkId,
      // fk_usid: fk_usid,
      fk_ptid: fk_ptid,
      pp_price: pp_price,
      pp_plot_no: pp_plot_no,
      pp_ward: pp_ward,
      pp_bulding_name: pp_bulding_name,
      pp_street: pp_street,
      pp_landmark: pp_landmark,
      pp_city: pp_city,
      pp_district: pp_district,
      pp_state: pp_state,
      pp_pincode: pp_pincode,
      pp_owner_name: pp_owner_name,
      pp_contact_no: pp_contact_no,
      pp_status: 1,
      pp_rj_resone: pp_rj_resone,
      pp_deposite: pp_deposite,
      pp_aggrement_month: pp_aggrement_month,
    };
    // alert(propertyobject);
    $.ajax({
      url: __URL_include_property_,
      type: "POST",
      headers: {token : token},
      data: {
        key: "updatedata",
        password: _AUTH_PASSWORD_,
        username: _AUTH_USERNAME_,
        property_data: JSON.stringify(propertyobject),
      },
      dataType: "json",
      success: function (jsondata, status, xhr) {
        console.log(jsondata);
        console.log("property id data Update  :success ");
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
        $("#property_pp_contact_no").val("");
        $("#property_pp_status").val("");
        $("#property_pp_rj_resone").val("");
        $("#property_pp_deposite").val("");
        $("#property_pp_aggrement_month").val("");
        window.location.href = "../pages/fileupload/photoupload.php?ppid="+data['data']; //+data;
      },
      error: function (error) {
        console.log("property id data Update  :error" + error.responseText);
      },
      complete: function () {
        console.log("property id data Update  :complete  ");
        localStorage.setItem("propertyid", NaN);
        // window.location.href = __URL_propertylistpage_;
      },
    });
  });
}
//////////// Update Data   Close  ////////////////////////////

function validateProperty() {
  // alert($("#property_fk_ptid").val());
  var fk_ptid = $("#property_fk_ptid").val();
  var pp_price = $("#property_pp_price").val();
  var pp_plot_no = $("#property_pp_plot_no").val();
  var pp_ward = $("#property_pp_ward").val();
  var pp_bulding_name = $("#property_pp_bulding_name").val();
  var pp_street = $("#property_pp_street").val();
  var pp_landmark = $("#property_pp_landmark").val();
  var pp_city = $("#property_pp_city").val();
  var pp_district = $("#property_pp_district").val();
  var pp_state = $("#property_pp_state").val();
  var pp_pincode = $("#property_pp_pincode").val();
  var pp_owner_name = $("#property_pp_owner_name").val();
  var pp_contact_no = $("#property_pp_contact_no").val();
  var pp_status = $("#property_pp_status").val();
  var pp_rj_resone = $("#property_pp_rj_resone").val();
  var pp_deposite = $("#property_pp_deposite").val();
  var pp_aggrement_month = $("#property_pp_aggrement_month").val();
  var pp_is_deleted = $("#property_pp_is_deleted").val();
  var pp_created_at = $("#property_pp_created_at").val();
  var pp_updated_at = $("#property_pp_updated_at").val();
  var pp_col1 = $("#property_pp_col1").val();
  var pp_col2 = $("#property_pp_col2").val();
  var pp_col3 = $("#property_pp_col3").val();
  var pp_col4 = $("#property_pp_col4").val();
  var pp_col5 = $("#property_pp_col5").val();
  var pp_soid = $("#property_pp_soid").val();
  var deleted_on = $("#property_deleted_on").val();
  var triggered_on = $("#property_triggered_on").val();
  if (fk_ptid != 0) {
    if (!ValidationHandler.checkVarIsNull(pp_plot_no)) {
      if (!ValidationHandler.checkVarIsNull(pp_ward)) {
        if (!ValidationHandler.checkVarIsNull(pp_landmark)) {
          if (!ValidationHandler.checkVarIsNull(pp_bulding_name)) {
            if (!ValidationHandler.checkVarIsNull(pp_street)) {
              if (!ValidationHandler.checkVarIsNull(pp_city)) {
                if (!ValidationHandler.checkVarIsNull(pp_district)) {
                  if (!ValidationHandler.checkVarIsNull(pp_state)) {
                    if (!ValidationHandler.checkVarIsNull(pp_pincode)) {
                      if (ValidationHandler.hasNumber(pp_pincode)) {
                        if (pp_pincode.length == 6) {
                          if (
                            !ValidationHandler.checkVarIsNull(pp_owner_name)
                          ) {
                            if (
                              !ValidationHandler.checkVarIsNull(pp_contact_no)
                            ) {
                              if (
                                ValidationHandler.isValidIndianMoblieNumber(
                                  pp_contact_no
                                )
                              ) {
                                if (
                                  !ValidationHandler.checkVarIsNull(pp_deposite)
                                ) {
                                  if (
                                    ValidationHandler.hasNumber(pp_deposite)
                                  ) {
                                    // if (
                                    //   !ValidationHandler.checkVarIsNull(
                                    //     pp_aggrement_month
                                    //   )
                                    // ) {
                                      // if (
                                      //   ValidationHandler.hasNumber(
                                      //     pp_aggrement_month
                                      //   )
                                      // ) {
                                        if (
                                         ! ValidationHandler.checkVarIsNull(
                                            pp_price
                                          )
                                        ) {
                                          if (
                                            ValidationHandler.hasNumber(
                                              pp_price
                                            )
                                          ) {
                                            var propertyobject = {
                                              pk_ppid: 0,
                                              // fk_usid: fk_usid,
                                              fk_ptid: fk_ptid,
                                              pp_price: pp_price,
                                              pp_plot_no: pp_plot_no,
                                              pp_ward: pp_ward,
                                              pp_bulding_name: pp_bulding_name,
                                              pp_street: pp_street,
                                              pp_landmark: pp_landmark,
                                              pp_city: pp_city,
                                              pp_district: pp_district,
                                              pp_state: pp_state,
                                              pp_pincode: pp_pincode,
                                              pp_owner_name: pp_owner_name,
                                              pp_contact_no: pp_contact_no,
                                              pp_status: pp_status,
                                              pp_rj_resone: pp_rj_resone,
                                              pp_deposite: pp_deposite,
                                              pp_aggrement_month:
                                                pp_aggrement_month,
                                              pp_is_deleted: pp_is_deleted,
                                              pp_created_at: pp_created_at,
                                              pp_updated_at: pp_updated_at,
                                              pp_col1: pp_col1,
                                              pp_col2: pp_col2,
                                              pp_col3: pp_col3,
                                              pp_col4: pp_col4,
                                              pp_col5: pp_col5,
                                              pp_soid: pp_soid,
                                              deleted_on: deleted_on,
                                              triggered_on: triggered_on,
                                            };
                                            saveproperty(propertyobject);
                                          } else {
                                            AlertHandler.getErrorAlert(
                                              StringHandler.REQ_PROPERTY_VALID_PRICE
                                            );
                                          }
                                        } else {
                                          AlertHandler.getErrorAlert(
                                            StringHandler.REQ_PROPERTY_VALID_PRICE
                                          );
                                        }
                                      // } else {
                                      //   AlertHandler.getErrorAlert(
                                      //     StringHandler.REQ_PROPERTY_AGREEMENT_MONTH
                                      //   );
                                      // }
                                    // } else {
                                    //   AlertHandler.getErrorAlert(
                                    //     StringHandler.REQ_PROPERTY_AGREEMENT_MONTH
                                    //   );
                                    // }
                                  } else {
                                    AlertHandler.getErrorAlert(
                                      StringHandler.REQ_PROPERTY_VALID_DEPOSITE_AMT
                                    );
                                  }
                                } else {
                                  AlertHandler.getErrorAlert(
                                    StringHandler.REQ_PROPERTY_DEPOSITE_AMT
                                  );
                                }
                              } else {
                                AlertHandler.getErrorAlert(
                                  StringHandler.ENTER_VAILD_MOBILE_NO
                                );
                              }
                            } else {
                              AlertHandler.getErrorAlert(
                                StringHandler.REQ_PROPERTY_CONTACT_NO
                              );
                            }
                          } else {
                            AlertHandler.getErrorAlert(
                              StringHandler.REQ_PROPERTY_OWN_NAME
                            );
                          }
                        } else {
                          AlertHandler.getErrorAlert(
                            StringHandler.REQ_PROPERTY_PINCODE_ONLY_6_DIGIT
                          );
                        }
                      } else {
                        AlertHandler.getErrorAlert(
                          StringHandler.REQ_PROPERTY_PINCODE_ONLY_DIGIT
                        );
                      }
                    } else {
                      AlertHandler.getErrorAlert(
                        StringHandler.REQ_PROPERTY_PINCODE
                      );
                    }
                  } else {
                    AlertHandler.getErrorAlert(
                      StringHandler.REQ_PROPERTY_STATE
                    );
                  }
                } else {
                  AlertHandler.getErrorAlert(StringHandler.REQ_PROPERTY_DIST);
                }
              } else {
                AlertHandler.getErrorAlert(StringHandler.REQ_PROPERTY_CITY);
              }
            } else {
              AlertHandler.getErrorAlert(StringHandler.REQ_PROPERTY_STREET);
            }
          } else {
            AlertHandler.getErrorAlert(
              StringHandler.REQ_PROPERTY_BULIDING_NAME
            );
          }
        } else {
          AlertHandler.getErrorAlert(StringHandler.REQ_PROPERTY_LANDMARK);
        }
      } else {
        AlertHandler.getErrorAlert(StringHandler.REQ_PROPERTY_WARD);
      }
    } else {
      AlertHandler.getErrorAlert(StringHandler.REQ_PROPERTY_PLOAT_NO);
    }
  } else {
    AlertHandler.getErrorAlert(StringHandler.REQ_PROPERTY_TYPE);
  }
}
//////////// Save Data    ////////////////////////////
function saveproperty(propertyobject) {
  // const token = $('meta[name="token"]').attr("content");
  $(document).ready(function () {
    const token = $('meta[name="token"]').attr("content");
    $.ajax({
      url: __URL_include_property_,
      type: "POST",
      headers: {token : token},
      data: {
        key: "savedata",
        password: _AUTH_PASSWORD_,
        username: _AUTH_USERNAME_,
        property_data: JSON.stringify(propertyobject),
      },
      dataType: "json",
      success: function (data, status, xhr) {
        console.log("property id data Save  :success "+data);
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
        window.location.href = "../pages/fileupload/photoupload.php?ppid="+data['data']; //+data;
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
        localStorage.setItem("propertyid", NaN);
      },
    });
  });
}
//////////// Save Data   Close   ////////////////////////////

//////////// Fetch and  Data     ////////////////////////////
function loadPropertyType() {
  // const token = $('meta[name="token"]').attr("content");
  $(document).ready(function () {
    const token = $('meta[name="token"]').attr("content");
    $.ajax({
      url: __URL_include_property_type_,
      type: "POST",
      dataType: "json",
      headers: {token : token},
      data: {
        key: "getalldata",
        password: _AUTH_PASSWORD_,
        username: _AUTH_USERNAME_,
      },
      success: function (datajson, status, xhr) {
        console.log(datajson);
        if (datajson["status"]) {
          var data = JSON.parse(datajson["data"]);
          console.log(data[0].pk_ptid);
          if (data.length > 0) {
            console.log("property type  :lenght   " + data[0]);
            for (var i = 0; i < data.length; i++) {
              $("#property_fk_ptid").append(
                "<option value=" +
                  data[i].pk_ptid +
                  " style='color: black;' >" +
                  data[i].pt_name +
                  " </option>"
              );
            }
          } 
        }else{
          // alert(datajson);
          console.log(datajson);
        }
      },
      error: function (data) {
        console.log("property type :error " + data.responseText);
      },
      complete: function () {
        console.log("property type  :complete ");
      },
    });
  });
}


function acProperty(id) {
  var pk_ppid = id;

  var propertyobject = {
    pk_ppid: pk_ppid,
  };
  $(document).ready(function () {
    const token = $('meta[name="token"]').attr("content");
    $.ajax({
      url: __URL_include_property_,
      type: "POST",
      headers: {token : token},
      data: {
        key: "updateacProperty",
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
}

function rjProperty(id) {
  // const token = $('meta[name="token"]').attr("content");
  $(document).ready(function () {
    const token = $('meta[name="token"]').attr("content");
    var pk_ppid = id;

    var propertyobject = {
      pk_ppid: pk_ppid,
    };

    $.ajax({
      url: __URL_include_property_,
      type: "POST",
      headers: {token : token},
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
}

function viewMedia(id) {
  var pk_ppid = id;

  window.location.href = "../viewmedia.php?pk_ppid=" + pk_ppid;
}
