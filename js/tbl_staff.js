$(document).ready(function() {
  
   loaddataofstaff();
    $('#btn_save_staff').click(function() {
        console.log("staff Save Clicked");
        savestaff();
        loadAllstaff();
    });
    $('#btn_update_staff').click(function() {
        console.log("staff Update Clicked");
        updatestaff();

    });

  
    
    loadAllstaff(); 
});
  //////////// Docuemnt  Close Here ////////////////////////////
//////////// Go For Update  Here ////////////////////////////
function goforupdaterecord(id){
        localStorage.setItem("staffid",id);
        console.log("staff goforupdaterecord Clicked");
        window.location.href = "../user/staff.php";
 }
 //////////// Go For Update  Here ////////////////////////////
//////////// Load Of Singlge data For Show  Here ////////////////////////////
function loaddataofstaff(){
  var staffid =parseInt(localStorage.getItem("staffid"));
  console.log("staffid  "+staffid);
  if(isNaN(staffid)){
         console.log("staff id is null Clicked");
  }
  else
  {
        $(document).ready(function() {
            console.log("staff id data Loading");
            const token = $('meta[name="token"]').attr("content");
            $.ajax({
            url: __URL_include_staff_,
            type: "POST",
            headers: {token : token},
            data: {
            "key":"getone",
            "password":_AUTH_PASSWORD_,
            "username":_AUTH_USERNAME_,
            tbl_staffid :staffid
            },
            dataType:"json",
            success: function(jsondata, status, xhr) {
                    console.log(jsondata);
                    var data= JSON.parse(jsondata["data"]);
                    $('#staff_pk_sfid').val(data.pk_sfid);
                    $('#staff_sf_name').val(data.sf_name);
                    $('#staff_sf_email').val(data.sf_email);
                    $('#staff_sf_mobile').val(data.sf_mobile);
                    $('#staff_sf_status').val(data.sf_status);
                    $('#staff_sf_is_deleted').val(data.sf_is_deleted);
                    $('#staff_sf_created_at').val(data.sf_created_at);
                    $('#staff_sf_updated_at').val(data.sf_updated_at);
                    $('#staff_sf_col1').val(data.sf_col1);
                    $('#staff_sf_col2').val(data.sf_col2);
                    $('#staff_sf_col3').val(data.sf_col3);
                    $('#staff_sf_col4').val(data.sf_col4);
                    $('#staff_deleted_on').val(data.deleted_on);
                    $('#staff_triggered_on').val(data.triggered_on);
                    console.log("staff id data Single Loading :success "+data);
            },
            error: function(data) {
                     console.log("staff id data Single Loading :error "+data.responseText);
            },
            complete: function() {
                     console.log("staff id data Single Loading :complete ");
            }
            });
        });
  }
  loadAllstaff();
}
//////////// Load Of Singlge data For Show  Here   Close ////////////////////////////
 //////////// Update Data    ////////////////////////////
function updatestaff(){
var userid =parseInt(localStorage.getItem("staffid"));

var sf_name = $('#staff_sf_name').val();
var sf_email = $('#staff_sf_email').val();
var sf_mobile = $('#staff_sf_mobile').val();
var sf_status = $('#staff_sf_status').val();

var staffobject = {
pk_sfid : userid,
sf_name : sf_name,
sf_email : sf_email,
sf_mobile : sf_mobile,
sf_status : sf_status,

}
$(document).ready(function () {
  
  const token = $('meta[name="token"]').attr("content");
$.ajax({
url: __URL_include_staff_,
type: "POST",
headers: {token : token},
data: {
"key":"updatedata",
"password":_AUTH_PASSWORD_,
"username":_AUTH_USERNAME_,
tbl_staff: JSON.stringify(staffobject)
},
dataType:"json",
success: function(data, status, xhr) {
console.log(data);
// alert("SSS");
getsuccessAlert(__ALERT_DATAUPDATED___);
console.log("staff id data Update  :success ");
$('#staff_pk_sfid').val('');
$('#staff_sf_name').val('');
$('#staff_sf_email').val('');
$('#staff_sf_mobile').val('');
$('#staff_sf_status').val('');
$('#staff_sf_is_deleted').val('');
$('#staff_sf_created_at').val('');
$('#staff_sf_updated_at').val('');
$('#staff_sf_col1').val('');
$('#staff_sf_col2').val('');
$('#staff_sf_col3').val('');
$('#staff_sf_col4').val('');
$('#staff_deleted_on').val('');
$('#staff_triggered_on').val('');
},
error: function(error) {
console.log("staff id data Update  :error"+error.responseText );
// alert("Failser"+error.responseText);
},
complete: function() {

localStorage.setItem("staffid",NaN);

window.location.href = __URL_stafflistpage_;
}

});
});
}
//////////// Update Data   Close  ////////////////////////////
  //////////// Save Data    ////////////////////////////
function savestaff(){
var pk_sfid = $('#staff_pk_sfid').val();
var sf_name = $('#staff_sf_name').val();
var sf_email = $('#staff_sf_email').val();
var sf_mobile = $('#staff_sf_mobile').val();
var sf_status = $('#staff_sf_status').val();
var sf_is_deleted = $('#staff_sf_is_deleted').val();
var sf_created_at = $('#staff_sf_created_at').val();
var sf_updated_at = $('#staff_sf_updated_at').val();
var sf_col1 = $('#staff_sf_col1').val();
var sf_col2 = $('#staff_sf_col2').val();
var sf_col3 = $('#staff_sf_col3').val();
var sf_col4 = $('#staff_sf_col4').val();
var deleted_on = $('#staff_deleted_on').val();
var triggered_on = $('#staff_triggered_on').val();
var staffobject = {
pk_sfid : pk_sfid,
sf_name : sf_name,
sf_email : sf_email,
sf_mobile : sf_mobile,
sf_status : sf_status,
sf_is_deleted : sf_is_deleted,
sf_created_at : sf_created_at,
sf_updated_at : sf_updated_at,
sf_col1 : sf_col1,
sf_col2 : sf_col2,
sf_col3 : sf_col3,
sf_col4 : sf_col4,
deleted_on : deleted_on,
triggered_on : triggered_on,
}
const token = $('meta[name="token"]').attr("content");
$.ajax({
url: "../../php/staff.php",
type: "POST",
headers: {token : token},
data: {
"key":"savedata",
"password":_AUTH_PASSWORD_,
"username":_AUTH_USERNAME_,
staff_data: JSON.stringify(staffobject)
},
dataType:"json",
success: function(data, status, xhr) {
console.log("staff id data Save  :success ");
$('#staff_pk_sfid').val('');
$('#staff_sf_name').val('');
$('#staff_sf_email').val('');
$('#staff_sf_mobile').val('');
$('#staff_sf_status').val('');
$('#staff_sf_is_deleted').val('');
$('#staff_sf_created_at').val('');
$('#staff_sf_updated_at').val('');
$('#staff_sf_col1').val('');
$('#staff_sf_col2').val('');
$('#staff_sf_col3').val('');
$('#staff_sf_col4').val('');
$('#staff_deleted_on').val('');
$('#staff_triggered_on').val('');
 },
error: function(data) {
console.log("staff id data Save  :error "+data.responseText );
},
complete: function() {
console.log("staff id data Save  :complete ");
localStorage.setItem("staffid",NaN);
window.location.href = __URL_stafflistpage_;
 }
});}
 //////////// Save Data   Close   ////////////////////////////
 //////////// Load All Data    ////////////////////////////
function loadAllstaff(){
  var dataTableHandler = new DataTableHandler("myTable");
  dataTableHandler.inlizlaiseDataTable();
  const token = $('meta[name="token"]').attr("content");
  $.ajax({
  url: __URL_include_staff_,
  type: "POST",
  headers: {token : token},
  data: {
  "key":"getalldata",
  "password":_AUTH_PASSWORD_,
  "username":_AUTH_USERNAME_,
  },
  dataType:"json",
  success: function(datajson, status, xhr) {
    console.log(datajson["status"]);
            console.log("staff id data Load All  :success ");
            if(datajson["status"])
            {
            var data= JSON.parse(datajson["data"]);
            // console.log(data[0].pk_sfid);
            console.log(data);
   
            dataTableHandler.CleanAndRefreshDataTable();
           
            if(data.length>0)
            {
             
            for(var i=0;i<data.length;i++){
              dataTableHandler.addRowInDataTable([(i+1),data[i].sf_name,data[i].sf_email,data[i].sf_mobile,data[i].sf_status,'<a href="#" class="btn btn-sm btn-neutral" onclick="goforupdaterecord('+data[i].pk_sfid+')">View</a>              <button type="button" class="btn btn-sm btn-square btn-neutral text-danger-hover" onclick="updaterecord('+data[i].pk_sfid+')"> <i class="bi bi-trash"></i></button>']);
              // t.row.add([(i+1),data[i].sf_name,data[i].sf_email,data[i].sf_mobile,data[i].sf_status,'<a href="#" class="btn btn-sm btn-neutral" onclick="goforupdaterecord('+data[i].pk_sfid+')">View</a>              <button type="button" class="btn btn-sm btn-square btn-neutral text-danger-hover" onclick="updaterecord('+data[i].pk_sfid+')"> <i class="bi bi-trash"></i></button>']).draw();
        
            }
        
            // $('#myTable').fnClearTable();
            // $('#myTable').fnDraw();
          //  RefreshDataTable("myTable");
            }else{
              dataTableHandler.CleanAndRefreshDataTable();
          
              }
            }
            else{
              dataTableHandler.CleanAndRefreshDataTable();
              
            }
          

  },
  error: function(data) {
          console.log("staff id data Load All  :error "+data.responseText );
  },
  complete: function() {
           console.log("staff id data Load All  :complete ");
  }
  });
 } 
//////////// Load All Data Close    ////////////////////////////
 //////////// Fetch and  Data     ////////////////////////////   
function  updaterecord(id,type){
 $(document).ready(function() {
 var userobject = {id : id}
 const token = $('meta[name="token"]').attr("content");
$.ajax({
url: __URL_include_staff_,
type: "POST",
headers: {token : token},
 data: {
"key":"deletedata",
"password":_AUTH_PASSWORD_,
"username":_AUTH_USERNAME_,
"tbl_staff_name": JSON.stringify(userobject)//tbl_staff_name 
 },
 dataType:"json",
 success: function(data, status, xhr) {
console.log("staff id data Update Data  :success ");
console.log(data);
var data1= JSON.parse(data["data"]);
if(data["status"])
{
getsuccessAlert("Record Delete");
}
else{
// alert("Data Not Deleted ");
}
 
 loadAllstaff();
 },
error: function(data) {
console.log("staff id data Update Data :error "+data.responseText );
 },
 complete: function() {
console.log("staff id data Update Data  :complete ");


   }
});
  });
}
 function goforupdaterecord(id){
  localStorage.setItem("staffid",id);
  window.location.href =__URL_staffpage_;
}
 //////////// Fetch and  Data     ////////////////////////////

 function inlizlaiseDataTable(tableid) {
  $('#'+tableid+'').DataTable();
  }

  function CleanAndRefreshDataTable(tableid) {
    $('#'+tableid+'').DataTable();
    myt= $('#'+tableid+'').dataTable();
    myt.fnClearTable();
    myt.fnDraw();
    RefreshDataTable(tableid);
    }
    function RefreshDataTable(tableid) {
      $('#'+tableid+'').dataTable().fnDestroy();
      $('#'+tableid+'').dataTable();
      }

     function addRowInDataTable(row){
      var t = $('#myTable').DataTable();
      t.row.add(row).draw();

      }

