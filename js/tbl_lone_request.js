$(document).ready(function () {
  loadloneType();
  ////Docament Ready Code
   loaddataoflonerequest();
  $("#btn_save_lonerequest").click(function (e) {
    validateLonaRequestData();
    e.preventDefault();
  });
  $("#btn_update_lonerequest").click(function () {
    updatelonerequest();
  });
});
//////////// Docuemnt  Close Here ////////////////////////////
//////////// Go For Update  Here ////////////////////////////
function goforupdaterecord(id) {
  localStorage.setItem("lonerequestid", id);
  console.log("lonerequest goforupdaterecord Clicked");
  window.location.href = __URL_lonerequestpage_;
}
//////////// Go For Update  Here ////////////////////////////
//////////// Load Of Singlge data For Show  Here ////////////////////////////
function loaddataoflonerequest() {
  var lonerequestid = parseInt(localStorage.getItem("lonerequestid"));
  // alert(lonerequestid);
  console.log("lonerequestid  " + lonerequestid);
  if (isNaN(lonerequestid)) {
    console.log("lonerequest id is null Clicked");
  } else {
    $(document).ready(function () {
      const token = $('meta[name="token"]').attr("content");
      console.log("lonerequest id data Loading");
      $.ajax({
        url: _URL_include_loan_request,
        type: "POST",
        headers: {token : token},
        data: {
          key: "getone",
          password: AUTH_PASSWORD,
          username: AUTH_USERNAME,
          lonerequestid: lonerequestid,
        },
        dataType: "json",
        success: function (jsondata, status, xhr) {
          console.log(jsondata);

          if (jsondata["status"]) {
            var data = JSON.parse(jsondata["data"]);
            $("#lonerequest_lr_id").val(data.lr_id);
            $("#lonerequest_lr_fname").val(data.lr_fname);
            $("#lonerequest_lr_lname").val(data.lr_lname);
            $("#lonerequest_lr_email_id").val(data.lr_email_id);
            $("#lonerequest_lr_mobile_no").val(data.lr_mobile_no);
            $("#lonerequest_lr_resident_type").val(data.lr_resident_type);
            $("#lonerequest_lr_req_type").val(data.lr_req_type);
            $("#lonerequest_lr_amt").val(data.lr_amt);
            $("#lonerequest_lr_tenure").val(data.lr_tenure);
            $("#lonerequest_lr_age").val(data.lr_age);
            $("#lonerequest_lr_income").val(data.lr_income);
            $("#lonerequest_lr_emi").val(data.lr_emi);
            $("#lonerequest_lr_lone_type_id").val(data.lr_lone_type_id);
          } else {
            console.log("No record Found");
          }
          console.log("lonerequest id data Single Loading :success ");
        },
        error: function (data) {
          // alert(data);
          console.log(
            "lonerequest id data Single Loading :error " + data.responseText
          );
        },
        complete: function () {
          console.log("lonerequest id data Single Loading :complete ");
        },
      });
    });
  }
}
//////////// Load Of Singlge data For Show  Here   Close ////////////////////////////
//////////// Update Data    ////////////////////////////
function updatelonerequest() {
  var userid = parseInt(localStorage.getItem("lonerequestid"));

  var lonerequestobject = {
    lr_id: userid,
    lr_fname: lr_fname,
    lr_lname: lr_lname,
    lr_email_id: lr_email_id,
    lr_mobile_no: lr_mobile_no,

    lr_req_type: lr_req_type,
    lr_amt: lr_amt,
    lr_tenure: lr_tenure,
    lr_age: lr_age,
    lr_income: lr_income,
    lr_emi: lr_emi,
  };
  $(document).ready(function () {
    const token = $('meta[name="token"]').attr("content");
    $.ajax({
      url: _URL_include_loan_request,
      type: "POST",
      headers: {token : token},
      data: {
        key: "updatedata",
        password: AUTH_PASSWORD,
        username: AUTH_USERNAME,
        lonerequest_data: JSON.stringify(lonerequestobject),
      },
      dataType: "json",
      success: function (data, status, xhr) {
        console.log("data");
        console.log("lonerequest id data Update  :success ");
        // alert(data);
        $("#lonerequest_lr_id").val("");
        $("#lonerequest_lr_fname").val("");
        $("#lonerequest_lr_lname").val("");
        $("#lonerequest_lr_email_id").val("");
        $("#lonerequest_lr_mobile_no").val("");
        $("#lonerequest_lr_resident_type").val("");
        $("#lonerequest_lr_pp_loc").val("");
        $("#lonerequest_lr_req_type").val("");
        $("#lonerequest_lr_amt").val("");
        $("#lonerequest_lr_tenure").val("");
        $("#lonerequest_lr_age").val("");
        $("#lonerequest_lr_pp_cost").val("");
        $("#lonerequest_lr_currently_employeed").val("");
        $("#lonerequest_lr_income").val("");
        $("#lonerequest_lr_emi").val("");
        $("#lonerequest_lr_lone_type_id").val("");
      },
      error: function (error) {
        // alert(error.responseText);
        console.log("lonerequest id data Update  :error" + error.responseText);
      },
      complete: function () {
        console.log("userUpdatedjs Compelete");
        console.log("lonerequest id data Update  :complete  ");
        localStorage.setItem("userid", NaN);
        window.location.href = _URL_loanlistpage;
      },
    });
  });
}
//////////// Update Data   Close  ////////////////////////////
//////////// Save Data    ////////////////////////////
function savelonerequest(lonerequestobject) {
  const token = $('meta[name="token"]').attr("content");
  $.ajax({
    url: _URL_include_loan_request,
    type: "POST",
    headers: {token : token},
    data: {
      key: "savedata",
      password: AUTH_PASSWORD,
      username: AUTH_USERNAME,
      lonerequest_data: JSON.stringify(lonerequestobject),
    },
    dataType: "json",
    success: function (data, status, xhr) {
      // alert("Yes");
      console.log("lonerequest id data Save  :success ");
      $("#lonerequest_lr_fname").val("");
      $("#lonerequest_lr_lname").val("");
      $("#lonerequest_lr_email_id").val("");
      $("#lonerequest_lr_mobile_no").val("");
      $("#lonerequest_lr_resident_type").val("");
      $("#lonerequest_lr_lone_type_id").val("");
      $("#lonerequest_lr_amt").val("");
      $("#lonerequest_lr_tenure").val("");
      $("#lonerequest_lr_age").val("");
      $("#lonerequest_lr_income").val("");
      $("#lonerequest_lr_emi").val("");
      AlertHandler.getsuccessAlert(StringHandler.SAVE_SUCCESS);
    },
    error: function (data) {
      // alert(data.responseText);
      console.log("lonerequest id data Save  :error " + data.responseText);
    },
    complete: function () {
      console.log("lonerequest id data Save  :complete ");
      localStorage.setItem("lonerequestid", NaN);
      // window.location.href = "../user/lonerequest_list_page.php";
    },
  });
}

function validateLonaRequestData() {
  var lr_fname = $("#lonerequest_lr_fname").val();
  var lr_lname = $("#lonerequest_lr_lname").val();
  var lr_email_id = $("#lonerequest_lr_email_id").val();
  var lr_mobile_no = $("#lonerequest_lr_mobile_no").val();

  var lr_req_type = $("#lonerequest_lr_req_type").val();
  var lr_amt = $("#lonerequest_lr_amt").val();
  var lr_tenure = $("#lonerequest_lr_tenure").val();
  var lr_age = $("#lonerequest_lr_age").val();
  var lr_income = $("#lonerequest_lr_income").val();
  var lr_emi = $("#lonerequest_lr_emi").val();

  var lonerequestobject = {
    lr_fname: lr_fname,
    lr_lname: lr_lname,
    lr_email_id: lr_email_id,
    lr_mobile_no: lr_mobile_no,

    lr_req_type: lr_req_type,
    lr_amt: lr_amt,
    lr_tenure: lr_tenure,
    lr_age: lr_age,
    lr_income: lr_income,
    lr_emi: lr_emi,
  };

  if (!ValidationHandler.checkVarIsNull(lr_fname)) {
    if (!ValidationHandler.checkVarIsNull(lr_lname)) {
      if (!ValidationHandler.checkVarIsNull(lr_email_id)) {
        if (ValidationHandler.isValidEmail(lr_email_id)) {
          if (!ValidationHandler.checkVarIsNull(lr_mobile_no)) {
            if (ValidationHandler.isValidIndianMoblieNumber(lr_mobile_no)) {
              if (lr_req_type != 0) {
                if (!ValidationHandler.checkVarIsNull(lr_amt)) {
                  if (!ValidationHandler.checkVarIsNull(lr_tenure)) {
                    if (ValidationHandler.hasNumber(lr_tenure)) {
                      if (!ValidationHandler.checkVarIsNull(lr_age)) {
                        if (ValidationHandler.hasNumber(lr_age)) {
                          if (parseInt(lr_age) > 18) {
                            if (!ValidationHandler.checkVarIsNull(lr_income)) {
                              if (ValidationHandler.hasNumber(lr_income)) {
                                if (parseInt(lr_income) > 0) {
                                  if (
                                    !ValidationHandler.checkVarIsNull(lr_emi)
                                  ) {
                                    if (ValidationHandler.hasNumber(lr_emi)) {
                                      if (parseInt(lr_emi) > 0) {
                                        savelonerequest(lonerequestobject);
                                      } else {
                                        AlertHandler.getErrorAlert(
                                          StringHandler.REQ_LOAN_VALID_EMI
                                        );
                                      }
                                    } else {
                                      AlertHandler.getErrorAlert(
                                        StringHandler.REQ_LOAN_VALID_EMI
                                      );
                                    }
                                  } else {
                                    AlertHandler.getErrorAlert(
                                      StringHandler.REQ_LOAN_VALID_EMI
                                    );
                                  }
                                } else {
                                  AlertHandler.getErrorAlert(
                                    StringHandler.REQ_LOAN_VALID_INCOME
                                  );
                                }
                              } else {
                                AlertHandler.getErrorAlert(
                                  StringHandler.REQ_LOAN_VALID_INCOME
                                );
                              }
                            } else {
                              AlertHandler.getErrorAlert(
                                StringHandler.REQ_LOAN_VALID_INCOME
                              );
                            }
                          } else {
                            AlertHandler.getErrorAlert(
                              StringHandler.REQ_LOAN_VALID_AGE
                            );
                          }
                        } else {
                          AlertHandler.getErrorAlert(
                            StringHandler.REQ_LOAN_AGE
                          );
                        }
                      } else {
                        AlertHandler.getErrorAlert(StringHandler.REQ_LOAN_AGE);
                      }
                    } else {
                      AlertHandler.getErrorAlert(
                        StringHandler.REQ_LOAN_VALLD_TENURE
                      );
                    }
                  } else {
                    AlertHandler.getErrorAlert(StringHandler.REQ_LOAN_TENURE);
                  }
                } else {
                  AlertHandler.getErrorAlert(StringHandler.REQ_AMT_LOAN_TYPE);
                }
              } else {
                AlertHandler.getErrorAlert(StringHandler.REQ_SELECT_LOAN_TYPE);
              }
            } else {
              AlertHandler.getErrorAlert(StringHandler.ENTER_VAILD_MOBILE_NO);
            }
          } else {
            AlertHandler.getErrorAlert(StringHandler.REQ_MOBILE);
          }
        } else {
          // alert(lr_email_id);

          AlertHandler.getErrorAlert(StringHandler.ENTER_VAILD_EMAILID);
        }
      } else {
        // alert(lr_email_id + lr_email_id);

        AlertHandler.getErrorAlert(StringHandler.REQ_EMAIL_NAME);
      }
    } else {
      AlertHandler.getErrorAlert(StringHandler.REQ_LAST_NAME);
    }
  } else {
    AlertHandler.getErrorAlert(StringHandler.REQ_FIRST_NAME);
  }
}
//////////// Save Data   Close   ////////////////////////////

//////////// Fetch and  Data     ////////////////////////////
function updaterecord(id, type) {
  $(document).ready(function () {
    var userobject = { tbl_lone_requestid: id };
    const token = $('meta[name="token"]').attr("content");
    $.ajax({
      url: _URL_include_loan_request,
      type: "POST",
      headers: {token : token},
      data: {
        key: "deletedata",
        password: AUTH_PASSWORD,
        username: AUTH_USERNAME,
        tbl_lone_request_name: JSON.stringify(userobject),
      },
      dataType: "json",
      success: function (data, status, xhr) {
        console.log(data);
        console.log("lonerequest id data Update Data  :success ");
      },
      error: function (data) {
        console.log(
          "lonerequest id data Update Data :error " + data.responseText
        );
      },
      complete: function () {
        console.log("lonerequest id data Update Data  :complete ");
        loadAlllonerequest();
      },
    });
  });
}

//////////// Fetch and  Data     ////////////////////////////

function loadloneType() {

  // alert("okkkk");
  const token = $('meta[name="token"]').attr("content");
  $.ajax({
    url: _URL_include_loan_type,
    type: "POST",
    headers: {token : token},
    dataType: "json",
    data: {
      key: "getalldata",
      password: AUTH_PASSWORD,
      username: AUTH_USERNAME,
    },
    success: function (data1, status, xhr) {
      console.log("lone type type  :success ");
      console.log("CR  harsh " + data1["data"]);
      if (data1["status"]) {
        // data=JSON.stringify(data1["data"]) ;
        data = JSON.parse(data1["data"]);
        if (data.length > 0) {
          for (var i = 0; i < data.length; i++) {
            console.log("data[i].pt_name   " + data[i].pt_name);
            $("#lonerequest_lr_req_type").append(
              "<option value=" +
                data[i].lt_id +
                ">" +
                data[i].lt_name +
                "</option>"
            );
          }
        }
      }
    },
    error: function (data) {
      console.log("lone type :error " + data.responseText);
    },
    complete: function () {
      console.log("lone type  :complete ");
    },
  });
}