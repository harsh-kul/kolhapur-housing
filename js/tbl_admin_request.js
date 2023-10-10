$(document).ready(function() {
   ////Docament Ready Code loaddataofadminrequest();
    $('#btn_save_adminrequest').click(function() {
        console.log("adminrequest Save Clicked");
        saveadminrequest();
        loadAlladminrequest();

    });
    $('#btn_update_adminrequest').click(function() {
          console.log("adminrequest Update Clicked");
          updateadminrequest();
          loadAlladminrequest();
    });
    loadAlladminrequest();
   
});
  //////////// Docuemnt  Close Here ////////////////////////////
//////////// Go For Update  Here ////////////////////////////
function goforupdaterecord(id){
      localStorage.setItem("adminrequestid",id);
      console.log("adminrequest goforupdaterecord Clicked");
      window.location.href = "../user/adminrequest.php";
 }
 //////////// Go For Update  Here ////////////////////////////
//////////// Load Of Singlge data For Show  Here ////////////////////////////
function loaddataofadminrequest(){
      var adminrequestid =parseInt(localStorage.getItem("adminrequestid"));
      console.log("adminrequestid  "+adminrequestid);
      if(isNaN(adminrequestid)){
          console.log("adminrequest id is null Clicked");
      }
      else{
          $(document).ready(function() {
          console.log("adminrequest id data Loading");
          $.ajax({
          url: "../../php/adminrequest.php",
          type: "POST",
          data: {
          "key":"getone",
          "password":_AUTH_PASSWORD_,
          "username":_AUTH_USERNAME_,
          adminrequestid:adminrequestid
          },
          success: function(data, status, xhr) {
                console.log(data.fname);
                $('#adminrequest_pp_req_id').val(data.pp_req_id);
                $('#adminrequest_req_regi_id').val(data.req_regi_id);
                $('#adminrequest_req_pp_id').val(data.req_pp_id);
                $('#adminrequest_reg_status_id').val(data.reg_status_id);
                $('#adminrequest_updated_at').val(data.updated_at);
                $('#adminrequest_created_at').val(data.created_at);
                $('#adminrequest_is_deleted').val(data.is_deleted);
                $('#adminrequest_req_ppowner_id').val(data.req_ppowner_id);
                $('#adminrequest_req_remark').val(data.req_remark);
                $('#adminrequest_req_col1').val(data.req_col1);
                $('#adminrequest_req_col2').val(data.req_col2);
                $('#adminrequest_req_col3').val(data.req_col3);
                $('#adminrequest_req_col4').val(data.req_col4);
                $('#adminrequest_req_col5').val(data.req_col5);
                $('#adminrequest_deleted_on').val(data.deleted_on);
                $('#adminrequest_triggered_on').val(data.triggered_on);
                $('#adminrequest_req_admin_id').val(data.req_admin_id);
                console.log("adminrequest id data Single Loading :success ");
          },
          error: function() {
                console.log("adminrequest id data Single Loading :error "+data.responseText );
          },
          complete: function() {
               console.log("adminrequest id data Single Loading :complete ");
          }
          });
      });
      }
      loadAlladminrequest();
}
//////////// Load Of Singlge data For Show  Here   Close ////////////////////////////
 //////////// Update Data    ////////////////////////////
function updateadminrequest(){
        var userid =parseInt(localStorage.getItem("adminrequestid"));
        var pp_req_id = $('#adminrequest_pp_req_id').val();
        var req_regi_id = $('#adminrequest_req_regi_id').val();
        var req_pp_id = $('#adminrequest_req_pp_id').val();
        var reg_status_id = $('#adminrequest_reg_status_id').val();
        var updated_at = $('#adminrequest_updated_at').val();
        var created_at = $('#adminrequest_created_at').val();
        var is_deleted = $('#adminrequest_is_deleted').val();
        var req_ppowner_id = $('#adminrequest_req_ppowner_id').val();
        var req_remark = $('#adminrequest_req_remark').val();
        var req_col1 = $('#adminrequest_req_col1').val();
        var req_col2 = $('#adminrequest_req_col2').val();
        var req_col3 = $('#adminrequest_req_col3').val();
        var req_col4 = $('#adminrequest_req_col4').val();
        var req_col5 = $('#adminrequest_req_col5').val();
        var deleted_on = $('#adminrequest_deleted_on').val();
        var triggered_on = $('#adminrequest_triggered_on').val();
        var req_admin_id = $('#adminrequest_req_admin_id').val();
        var adminrequestobject = {
        pp_req_id : pp_req_id,
        req_regi_id : req_regi_id,
        req_pp_id : req_pp_id,
        reg_status_id : reg_status_id,
        updated_at : updated_at,
        created_at : created_at,
        is_deleted : is_deleted,
        req_ppowner_id : req_ppowner_id,
        req_remark : req_remark,
        req_col1 : req_col1,
        req_col2 : req_col2,
        req_col3 : req_col3,
        req_col4 : req_col4,
        req_col5 : req_col5,
        deleted_on : deleted_on,
        triggered_on : triggered_on,
        req_admin_id : req_admin_id,
        }
        $.ajax({
                url: "../../php/adminrequest.php",
                type: "POST",
                data: {
                "key":"updatedata",
                "password":_AUTH_PASSWORD_,
                "username":_AUTH_USERNAME_,
                adminrequest_data: JSON.stringify(adminrequestobject)
                },
                dataType:"json",
                success: function(data, status, xhr) {
                          console.log(data);
                          console.log("adminrequest id data Update  :success ");
                          $('#adminrequest_pp_req_id').val('');
                          $('#adminrequest_req_regi_id').val('');
                          $('#adminrequest_req_pp_id').val('');
                          $('#adminrequest_reg_status_id').val('');
                          $('#adminrequest_updated_at').val('');
                          $('#adminrequest_created_at').val('');
                          $('#adminrequest_is_deleted').val('');
                          $('#adminrequest_req_ppowner_id').val('');
                          $('#adminrequest_req_remark').val('');
                          $('#adminrequest_req_col1').val('');
                          $('#adminrequest_req_col2').val('');
                          $('#adminrequest_req_col3').val('');
                          $('#adminrequest_req_col4').val('');
                          $('#adminrequest_req_col5').val('');
                          $('#adminrequest_deleted_on').val('');
                          $('#adminrequest_triggered_on').val('');
                          $('#adminrequest_req_admin_id').val('');
                },
                error: function(error) {
                       console.log("adminrequest id data Update  :error"+data.responseText  );
                },
                complete: function() {
                        console.log("userUpdatedjs Compelete"); 
                        console.log("adminrequest id data Update  :complete  ");
                        localStorage.setItem("userid",NaN);
                        window.location.href = "../user/adminrequest_list_page.php";
                }
        });
}
//////////// Update Data   Close  ////////////////////////////
  //////////// Save Data    ////////////////////////////
function saveadminrequest(){
      var pp_req_id = $('#adminrequest_pp_req_id').val();
      var req_regi_id = $('#adminrequest_req_regi_id').val();
      var req_pp_id = $('#adminrequest_req_pp_id').val();
      var reg_status_id = $('#adminrequest_reg_status_id').val();
      var updated_at = $('#adminrequest_updated_at').val();
      var created_at = $('#adminrequest_created_at').val();
      var is_deleted = $('#adminrequest_is_deleted').val();
      var req_ppowner_id = $('#adminrequest_req_ppowner_id').val();
      var req_remark = $('#adminrequest_req_remark').val();
      var req_col1 = $('#adminrequest_req_col1').val();
      var req_col2 = $('#adminrequest_req_col2').val();
      var req_col3 = $('#adminrequest_req_col3').val();
      var req_col4 = $('#adminrequest_req_col4').val();
      var req_col5 = $('#adminrequest_req_col5').val();
      var deleted_on = $('#adminrequest_deleted_on').val();
      var triggered_on = $('#adminrequest_triggered_on').val();
      var req_admin_id = $('#adminrequest_req_admin_id').val();
      var adminrequestobject = {
      pp_req_id : pp_req_id,
      req_regi_id : req_regi_id,
      req_pp_id : req_pp_id,
      reg_status_id : reg_status_id,
      updated_at : updated_at,
      created_at : created_at,
      is_deleted : is_deleted,
      req_ppowner_id : req_ppowner_id,
      req_remark : req_remark,
      req_col1 : req_col1,
      req_col2 : req_col2,
      req_col3 : req_col3,
      req_col4 : req_col4,
      req_col5 : req_col5,
      deleted_on : deleted_on,
      triggered_on : triggered_on,
      req_admin_id : req_admin_id,
      }
      $.ajax({
            url: "../../php/adminrequest.php",
            type: "POST",
            data: {
            "key":"savedata",
            "password":_AUTH_PASSWORD_,
            "username":_AUTH_USERNAME_,
            adminrequest_data: JSON.stringify(adminrequestobject)
            },
            dataType:"json",
            success: function(data, status, xhr) {
                console.log("adminrequest id data Save  :success ");
                $('#adminrequest_pp_req_id').val('');
                $('#adminrequest_req_regi_id').val('');
                $('#adminrequest_req_pp_id').val('');
                $('#adminrequest_reg_status_id').val('');
                $('#adminrequest_updated_at').val('');
                $('#adminrequest_created_at').val('');
                $('#adminrequest_is_deleted').val('');
                $('#adminrequest_req_ppowner_id').val('');
                $('#adminrequest_req_remark').val('');
                $('#adminrequest_req_col1').val('');
                $('#adminrequest_req_col2').val('');
                $('#adminrequest_req_col3').val('');
                $('#adminrequest_req_col4').val('');
                $('#adminrequest_req_col5').val('');
                $('#adminrequest_deleted_on').val('');
                $('#adminrequest_triggered_on').val('');
                $('#adminrequest_req_admin_id').val('');
            },
            error: function(data) {
                console.log("adminrequest id data Save  :error "+data.responseText );
            },
            complete: function() {
                console.log("adminrequest id data Save  :complete ");
                localStorage.setItem("adminrequestid",NaN);
                window.location.href = "../user/adminrequest_list_page.php";
            }
      });

}
 //////////// Save Data   Close   ////////////////////////////
 //////////// Load All Data    ////////////////////////////
function loadAlladminrequest(){

      $.ajax({
      url: "../../include/admin_request.php",
      type: "POST",
      data: {
      "key":"getalldata",
      "password":_AUTH_PASSWORD_,
      "username":_AUTH_USERNAME_,
      },
      dataType:"json",
      success: function(datajson, status, xhr) {
        
            console.log("adminrequest id data Load All  :success ");
            if(datajson["status"])
            {
            var data= JSON.parse(datajson["data"]);
         
            $('#user_id').val(data.id);$('#user_fname').val(data.fname);$('#user_mname').val(data.mname);$('#user_lname').val(data.lname);$('#user_email_id').val(data.email_id);$('#user_mob_no').val(data.mob_no);$('#user_isdelete').val(data.isdelete);$('#user_col_1').val(data.col_1);$('#user_col_2').val(data.col_2);$('#user_col_3').val(data.col_3);$('#user_primary').val(data.primary);
            if(data.length>0)
            {
            for(var i=0;i<data.length;i++){
            $('#myTable').append("<tr><td>"+data[i].pp_req_id+"</td><td>"+data[i].req_regi_id+"</td><td>"+data[i].req_pp_id+"</td><td>"+data[i].reg_status_id+"</td><td>"+data[i].updated_at+"</td><td>"+data[i].created_at+"</td><td>"+data[i].is_deleted+"</td><td>"+data[i].req_ppowner_id+"</td><td>"+data[i].req_remark+"</td><td>"+data[i].req_col1+"</td><td>"+data[i].req_col2+"</td><td>"+data[i].req_col3+"</td><td>"+data[i].req_col4+"</td><td>"+data[i].req_col5+"</td><td>"+data[i].deleted_on+"</td><td>"+data[i].triggered_on+"</td><td>"+data[i].req_admin_id+"</td></tr>");
            }
            $('#myTable').dataTable().fnDestroy();
            $('#myTable').dataTable({ // Cannot initialize it again error
            "aoColumns": [
            { "bSortable": false },
            null, null, null, null
              ]
            });
            }else{
              }
            }else{
              //errrpr
            }
      },
      error: function(data) {
           console.log("adminrequest id data Load All  :error "+data.responseText );
      },
      complete: function() {
             console.log("adminrequest id data Load All  :complete ");
      }
      });
  
 } 
//////////// Load All Data Close    ////////////////////////////
 //////////// Fetch and  Data     ////////////////////////////   
 function  updaterecord(id,type){
      $(document).ready(function() {
      var userobject = {id : id}
      $.ajax({
      url: "../../php/adminrequest.php",
      type: "POST",
      data: {
      "key":"deletedata",
      "password":_AUTH_PASSWORD_,
      "username":_AUTH_USERNAME_,
      "tbl_user_name": JSON.stringify(userobject)
      },
      dataType:"json",
      success: function(data, status, xhr) {
            console.log("adminrequest id data Update Data  :success ");
            var dataTable =$('#myTable').dataTable();
            dataTable.fnClearTable();
            dataTable.fnDraw();
            dataTable.fnDestroy();
            loadAlladminrequest();
      },
      error: function(data) {
             console.log("adminrequest id data Update Data :error "+data.responseText );
      },
      complete: function() {
          console.log("adminrequest id data Update Data  :complete ");
        }
      });
   });
}
 function goforupdaterecord(id){
    localStorage.setItem("adminrequestid",id);
    window.location.href = "../user/adminrequest.php";
}
 //////////// Fetch and  Data     ////////////////////////////
