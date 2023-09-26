$(document).ready(function () {
    // alert("Clicked");
    loadViewMedia();
    // loadacproperty();
    // rjpeoperty();
    // loadcrproperty();
    // ////Docament Ready Code loaddataofproperty();
    // $("#btn_save_property").click(function () {
    //   alert("property Save Clicked");
    //   console.log("property Save Clicked");
    //   saveproperty();
    //   // loadAllproperty();
    // });
    // $("#btn_update_property").click(function () {
    //   console.log("property Update Clicked");
    //   updateproperty();
    //   loadAllproperty();
    // });
  });
  //////////// Docuemnt  Close Here ////////////////////////////
  //////////// Go For Update  Here ////////////////////////////
  function goforupdaterecord(id) {
    localStorage.setItem("propertyid", id);
    console.log("property goforupdaterecord Clicked");
    window.location.href = "../user/property.php";
  }
  //////////// Go For Update  Here ////////////////////////////
  //////////// Load Of Singlge data For Show  Here ////////////////////////////
  function loaddataofproperty() {
    var propertyid = parseInt(localStorage.getItem("propertyid"));
    console.log("propertyid  " + propertyid);
    if (isNaN(propertyid)) {
      console.log("property id is null Clicked");
    } else {
      $(document).ready(function () {
        const token = $('meta[name="token"]').attr("content");
        console.log("property id data Loading");
        $.ajax({
          url: "../../php/property.php",
          type: "POST",
          headers: {token : token},
          data: {
            key: "getone",
            password: _AUTH_PASSWORD_,
            username: _AUTH_USERNAME_,
            propertyid: propertyid,
          },
  
          success: function (data, status, xhr) {
            console.log(data.fname);
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
            $("#property_pp_contact_no").val(data.pp_contact_no);
            $("#property_pp_status").val(data.pp_status);
            $("#property_pp_rj_resone").val(data.pp_rj_resone);
            $("#property_pp_deposite").val(data.pp_deposite);
            $("#property_pp_aggrement_month").val(data.pp_aggrement_month);
            $("#property_pp_is_deleted").val(data.pp_is_deleted);
            $("#property_pp_created_at").val(data.pp_created_at);
            $("#property_pp_updated_at").val(data.pp_updated_at);
            $("#property_pp_col1").val(data.pp_col1);
            $("#property_pp_col2").val(data.pp_col2);
            $("#property_pp_col3").val(data.pp_col3);
            $("#property_pp_col4").val(data.pp_col4);
            $("#property_pp_col5").val(data.pp_col5);
            $("#property_pp_soid").val(data.pp_soid);
            $("#property_deleted_on").val(data.deleted_on);
            $("#property_triggered_on").val(data.triggered_on);
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
    loadAllproperty();
  }
  //////////// Load Of Singlge data For Show  Here   Close ////////////////////////////
  //////////// Update Data    ////////////////////////////
  function updateproperty() {
    var userid = parseInt(localStorage.getItem("propertyid"));
    var pk_ppid = $("#property_pk_ppid").val();
    var fk_usid = $("#property_fk_usid").val();
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
    var propertyobject = {
      pk_ppid: pk_ppid,
      fk_usid: fk_usid,
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
      pp_aggrement_month: pp_aggrement_month,
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
    const token = $('meta[name="token"]').attr("content");
    $.ajax({
      url: "../../php/property.php",
      type: "POST",
      headers: {token : token},
      data: {
        key: "updatedata",
        password: _AUTH_PASSWORD_,
        username: _AUTH_USERNAME_,
        property_data: JSON.stringify(propertyobject),
      },
      dataType: "json",
      success: function (data, status, xhr) {
        console.log(data);
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
      error: function (error) {
        console.log("property id data Update  :error" + data.responseText);
      },
      complete: function () {
        console.log("userUpdatedjs Compelete");
        console.log("property id data Update  :complete  ");
        localStorage.setItem("userid", NaN);
        window.location.href = "../user/property_list_page.php";
      },
    });
  }
  //////////// Update Data   Close  ////////////////////////////
  //////////// Save Data    ////////////////////////////
  function saveproperty() {
    // alert("jgfusdjgh");
    var pk_ppid = $("#property_pk_ppid").val();
    var fk_usid = $("#property_fk_usid").val();
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
    var pp_contact_no = $("#property_pp_contact").val();
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
  
    var propertyobject = {
      pk_ppid: pk_ppid,
      fk_usid: fk_usid,
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
      pp_aggrement_month: pp_aggrement_month,
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
    const token = $('meta[name="token"]').attr("content");
    // alert("propertyobject" + propertyobject);
    $.ajax({
      url: "../include/property.php",
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
        console.log("property id data Save  :success ");
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
        window.location.href = "../pages/fileupload/photoupload.php/"+data;
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
  }
  //////////// Save Data   Close   ////////////////////////////
  //////////// Load All Data    ////////////////////////////
  function loadAllproperty() {
    const token = $('meta[name="token"]').attr("content");
    $.ajax({
      url: "../../php/property.php",
      type: "POST",
      headers: {token : token},
      data: {
        key: "getalldata",
        password: _AUTH_PASSWORD_,
        username: _AUTH_USERNAME_,
      },
      dataType: "json",
      success: function (data, status, xhr) {
        console.log("property id data Load All  :success ");
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
  }
  //////////// Load All Data Close    ////////////////////////////
  //////////// Fetch and  Data     ////////////////////////////
  function updaterecord(id, type) {
    $(document).ready(function () {
      const token = $('meta[name="token"]').attr("content");
      var userobject = { id: id };
      $.ajax({
        url: "../../php/property.php",
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
          console.log("property id data Update Data  :success ");
          var dataTable = $("#myTable").dataTable();
          dataTable.fnClearTable();
          dataTable.fnDraw();
          dataTable.fnDestroy();
          loadAllproperty();
        },
        error: function (data) {
          console.log("property id data Update Data :error " + data.responseText);
        },
        complete: function () {
          console.log("property id data Update Data  :complete ");
        },
      });
    });
  }
  function goforupdaterecord(id) {
    localStorage.setItem("propertyid", id);
    window.location.href = "../user/property.php";
  }
  //////////// Fetch and  Data     ////////////////////////////
  function loadViewMedia(){
    // alert("loadMedia");
    const token = $('meta[name="token"]').attr("content");
    $.ajax({
        url: "../include/viewmedia.php",
        type: "POST",
        dataType: "json",
        headers: {token : token},
        data: {
          key: "getalldata",
          password: _AUTH_PASSWORD_,
          username: _AUTH_USERNAME_,
          propertyid:9102,
        },
        success: function (data, status, xhr) {
          console.log("property type  :success "+ JSON.parse(data['data']));
         medialist= JSON.parse(data['data'])
         
          if (medialist.length > 0) {
            
             createOuterContainer(medialist.slice(0,4));
        }
          
        },
        error: function (data) {
          console.log("property type :error " + data.responseText);
        },
        complete: function () {
          console.log("property type  :complete ");
        },
      });
  }


function createOuterContainer(imagelist){
    var outercontainer ='';
    outercontainer=outercontainer+  ' <div class="container-fluid">';
    outercontainer=outercontainer+'<div class="row g-6 mb-6">';
         var innerconter="";
    for (var i = 0; i < imagelist.length; i++) {
             
        outercontainer=outercontainer+'    <div class="col-xl-3 col-sm-6 col-12" onclick="getimagename(\''+imagelist[i].md_media_url+'\')">';
        outercontainer=outercontainer+ '      <div class="card shadow border-0">';
        outercontainer=outercontainer+'           <div class="card-body">';
        outercontainer=outercontainer+  '                  <div class="col">';
        outercontainer=outercontainer+  '                      <div class="col-auto">';
        outercontainer=outercontainer+ '                     <img src="../upload/images/'+imagelist[i].md_media_url +'" alt="" >';
        outercontainer=outercontainer+   '                </div>';
                
        outercontainer=outercontainer+ '                 </div>';
                          
        outercontainer=outercontainer+'           </div>';
        outercontainer=outercontainer+ '       </div>';
        outercontainer=outercontainer+ '   </div>';
           
            
            
      
    }
    outercontainer=outercontainer+'</div>';
    outercontainer=outercontainer+'</div>';
    console.log(outercontainer);
    $('#mainContiermedia').html(outercontainer);
}

function getimagename(imagename){

  $(document).ready(function () {
    
  
  localStorage.setItem(_SELECTED_IMAGE_FOR_VIEW_,imagename);
  window.location.href="singlemediashow.php";
});
}

  function loadacproperty() {
    const token = $('meta[name="token"]').attr("content");
    $.ajax({
      url: "../../include/property.php",
      type: "POST",
      headers: {token : token},
      data: {
        key: "acproperty",
        password: _AUTH_PASSWORD_,
        username: _AUTH_USERNAME_,
      },
      dataType: "json",
      success: function (data1, status, xhr) {
        console.log("property id data Load All  :success ");
          if(data1["status"])
          {
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
          }else{
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
  }


  function rjpeoperty() {
    const token = $('meta[name="token"]').attr("content");
    $.ajax({
      url: "../../include/property.php",
      type: "POST",
      headers: {token : token},
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
  }


  function loadcrproperty() {
    // alert('cr property');
    const token = $('meta[name="token"]').attr("content");
    $.ajax({
      url: "../../include/property.php",
      type: "POST",
      headers: {token : token},
      data: {
        key: "openProperty",
        password: _AUTH_PASSWORD_,
        username: _AUTH_USERNAME_,
      },
      dataType: "json",
      success: function (data1, status, xhr) {
        console.log("property id data Load All  :success ");
          console.log("CR"+data1["data"]);
          if(data1["status"])
          {
            // data=JSON.stringify(data1["data"]) ;
            data = JSON.parse(data1["data"]);
            console.log("data.length"+ data.length );
            if (data.length > 0) {
              for (var i = 0; i < data.length; i++) {
                $("#requestTable").append(
                  "<tr><td>" +
                    (i+1) +
                    "</td><td>" +
                    data[i].fk_usid +
                    "</td><td>" +
                    data[i].fk_ptid +
                    "</td><td>" +
                    data[i].pp_price +
                    "</td><td>" +
                    data[i].pp_plot_no + "   " + data[i].pp_ward +
                    "   "+  data[i].pp_bulding_name + "  " +data[i].pp_street +  
                    "   "+  data[i].pp_landmark +  "   "+  data[i].pp_city + 
                    "   "+  data[i].pp_district +  "   "+  data[i].pp_state + "   "+ data[i].pp_pincode +
                    "</td><td>" +
                    data[i].pp_owner_name +
                    "</td><td>" +
                    data[i].pp_contact_no +
                    "</td><td>" +
                    data[i].pp_status +
                    "</td><td>" +
                    data[i].pp_deposite +
                    "</td><td>" +
                    data[i].pp_aggrement_month +
                    "</td><td>" +
                    "<button type='submit' id='viewMedia'  onclick='viewMedia("+data[i].pk_ppid +")' class='btn btn-success'>View</button>&nbsp;&nbsp;"+
                    "<button type='submit' id='acPropertyId'  onclick='acProperty("+data[i].pk_ppid +")' class='btn btn-success'>Accept</button>&nbsp;&nbsp;"+
                    "<button type='submit' id='=rjPropertyId' onclick='rjProperty("+data[i].pk_ppid +")' class='btn btn-danger'>Reject</button>"+
                    "</td></tr>"
                );
                // console.log(data[i]);
              
              
              }
              $("#requestTable").dataTable().fnDestroy();
              $("#requestTable").dataTable({
                // Cannot initialize it again error
                aoColumns: [{ bSortable: false }, null, null, null, null],
              });
            } else {
            }
          }else{
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
  }


  function acProperty(id) {
    // alert("jgfusdjgh"+id);
    var pk_ppid = id;
  
    var propertyobject = {
      pk_ppid: pk_ppid,
    };
    const token = $('meta[name="token"]').attr("content");
    // alert("propertyobject" + propertyobject);
    $.ajax({
      url: "../../include/property.php",
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
        localStorage.setItem("propertyid", NaN);
        
      },
    });
  }


  function rjProperty(id) {
    // alert("updaterjProperty"+id);
    var pk_ppid = id;
  
    var propertyobject = {
      pk_ppid: pk_ppid,
    };
    const token = $('meta[name="token"]').attr("content");
    // alert("propertyobject" + propertyobject);
    $.ajax({
      url: "../../include/property.php",
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
        localStorage.setItem("propertyid", NaN);
        
      },
    });
  }


  function viewMedia(id) {
    var pk_ppid = id;
  
    window.location.href="../viewmedia.php?pk_ppid="+pk_ppid;
  }