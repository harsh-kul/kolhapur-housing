$(document).ready(function () {
  loaddataoflonerequest();
  loadAlllonerequest();
  loadAllUserlonerequest();
  $("#btn_update_lonerequest").click(function () {
    updatelonerequest();
  });
});

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
//////////// Docuemnt  Close Here ////////////////////////////

function goforupdaterecord(id) {
  localStorage.setItem("lonerequestid", id);
  console.log("lonerequest goforupdaterecord Clicked");
  window.location.href = __URL_lonerequestpage_;
}


function updaterecord(id) {
  alert(id);
  $(document).ready(function () {
    var userobject = { tbl_lone_requestid: id };
  alert(userobject);

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
//////////// Load All Data    ////////////////////////////
function loadAlllonerequest() {
  // alert("loadAlllonerequest");
  var loandataTableHandler = new DataTableHandler("loanTable");
  loandataTableHandler.inlizlaiseDataTable();
  $(document).ready(function () {
    const token = $('meta[name="token"]').attr("content");
    $.ajax({
      url: __URL_include_loan_request_,
      type: "POST",
      headers: {token : token},
      data: {
        key: "getalldata",
        password: _AUTH_PASSWORD_,
        username: _AUTH_USERNAME_,
      },
      dataType: "json",
      success: function (datajson, status, xhr) {
        if (datajson["status"]) {
          var data = JSON.parse(datajson["data"]);
          console.log("lonerequest id data Load All  :success ");
          console.log(data);
          loandataTableHandler.CleanAndRefreshDataTable();
          if (data.length > 0) {
            for (var i = 0; i < data.length; i++) {
              loandataTableHandler.addRowInDataTable([
                i + 1,
                data[i].lr_fname + " " + data[i].lr_lname,
                data[i].lr_email_id,
                data[i].lr_mobile_no,
                data[i].lr_resident_type,
                data[i].lr_pp_loc,
                data[i].lr_req_type,
                data[i].lr_amt,
                data[i].lr_req_type,
                data[i].lr_amt,
                '<a href="#" class="btn btn-sm btn-neutral" onclick="goforupdaterecord(' +
                  data[i].lr_id +
                  ')">View</a><button type="button" class="btn btn-sm btn-square btn-neutral text-danger-hover" onclick="updaterecord(' +
                  data[i].lr_id +
                  ')"> <i class="bi bi-trash"></i></button>',
              ]);

              // +data[i].lr_amt+"</td><td>"+data[i].lr_tenure+"</td><td>"+data[i].lr_age+"</td><td>"+data[i].lr_pp_cost+"</td><td>"+data[i].lr_currently_employeed+"</td><td>"+data[i].lr_income+"</td><td>"+data[i].lr_emi+"</td></tr>");
            }
          } else {
            loandataTableHandler.CleanAndRefreshDataTable();
          }
        } else {
          console.log("No ReCord");
          console.log(datajson);
          loandataTableHandler.CleanAndRefreshDataTable();
        }
      },
      error: function (data) {
        console.log(
          "lonerequest id data Load All  :error " + data.responseText
        );
      },
      complete: function () {
        console.log("lonerequest id data Load All  :complete ");
      },
    });
  });
}

function loadAllUserlonerequest() {

  var userId = $("#userId").val();

  var loandataTableHandler = new DataTableHandler("userloanTable");
  loandataTableHandler.inlizlaiseDataTable();
  $(document).ready(function () {
    const token = $('meta[name="token"]').attr("content");
    $.ajax({
      url: __URL_include_loan_request_,
      type: "POST",
      headers: {token : token},
      data: {
        key: "getuserloan",
        password: _AUTH_PASSWORD_,
        username: _AUTH_USERNAME_,
        userId:userId,
      },
      dataType: "json",
      success: function (datajson, status, xhr) {
        if (datajson["status"]) {
          var data = JSON.parse(datajson["data"]);
          console.log("lonerequest id data Load All  :success ");
          console.log(data);
          loandataTableHandler.CleanAndRefreshDataTable();
          if (data.length > 0) {
            for (var i = 0; i < data.length; i++) {
              loandataTableHandler.addRowInDataTable([
                i + 1,
                data[i].lr_fname + " " + data[i].lr_lname,
                data[i].lr_email_id,
                data[i].lr_mobile_no,
                data[i].lr_resident_type,
                data[i].lr_pp_loc,
                data[i].lr_req_type,
                data[i].lr_amt,
                data[i].lr_req_type,
                data[i].lr_amt,
                '<a href="#" class="btn btn-sm btn-neutral" onclick="goforupdaterecord(' +
                  data[i].lr_id +
                  ')">View</a><button type="button" class="btn btn-sm btn-square btn-neutral text-danger-hover" onclick="updaterecord(' +
                  data[i].lr_id +
                  ')"> <i class="bi bi-trash"></i></button>',
              ]);

              // +data[i].lr_amt+"</td><td>"+data[i].lr_tenure+"</td><td>"+data[i].lr_age+"</td><td>"+data[i].lr_pp_cost+"</td><td>"+data[i].lr_currently_employeed+"</td><td>"+data[i].lr_income+"</td><td>"+data[i].lr_emi+"</td></tr>");
            }
          } else {
            loandataTableHandler.CleanAndRefreshDataTable();
          }
        } else {
          console.log("No ReCord");
          console.log(datajson);
          loandataTableHandler.CleanAndRefreshDataTable();
        }
      },
      error: function (data) {
        console.log(
          "lonerequest id data Load All  :error " + data.responseText
        );
      },
      complete: function () {
        console.log("lonerequest id data Load All  :complete ");
      },
    });
  });
}

//////////// Go For Update  Here ////////////////////////////
// function goforupdaterecord(id) {
//   localStorage.setItem("lonerequestid", id);
//   console.log("lonerequest goforupdaterecord Clicked");
//   window.location.href = __URL_INDEX_LOAN;
// }
//////////// Go For Update  Here ////////////////////////////

//////////// Load Of Singlge data For Show  Here ////////////////////////////
function loaddataoflonerequest() {
  var lonerequestid = parseInt(localStorage.getItem("lonerequestid"));
  alert(lonerequestid);
  console.log("lonerequestid  " + lonerequestid);
  if (isNaN(lonerequestid)) {
    console.log("lonerequest id is null Clicked");
  } else {
    $(document).ready(function () {
      console.log("lonerequest id data Loading");
      const token = $('meta[name="token"]').attr("content");
      $.ajax({
        url: __URL_include_loan_request_,
        type: "POST",
        headers: {token : token},
        data: {
          key: "getone",
          password: _AUTH_PASSWORD_,
          username: _AUTH_USERNAME_,
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
