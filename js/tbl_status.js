$(document).ready(function() {
   ////Docament Ready Code loaddataofstatus();
$('#btn_save_status').click(function() {
console.log("status Save Clicked");
savestatus();
loadAllstatus();
});
$('#btn_update_status').click(function() {
console.log("status Update Clicked");
updatestatus();
loadAllstatus();
});
});
  //////////// Docuemnt  Close Here ////////////////////////////
//////////// Go For Update  Here ////////////////////////////
function goforupdaterecord(id){
localStorage.setItem("statusid",id);
console.log("status goforupdaterecord Clicked");
 window.location.href = "../user/status.php";
 }
 //////////// Go For Update  Here ////////////////////////////
//////////// Load Of Singlge data For Show  Here ////////////////////////////
function loaddataofstatus(){
var statusid =parseInt(localStorage.getItem("statusid"));
console.log("statusid  "+statusid);
if(isNaN(statusid)){
console.log("status id is null Clicked");
}
 else{
$(document).ready(function() {
console.log("status id data Loading");
const token = $('meta[name="token"]').attr("content");
$.ajax({
url: "../../php/status.php",
type: "POST",
headers: {token : token},
data: {
"key":"getone",
"password":_AUTH_PASSWORD_,
"username":_AUTH_USERNAME_,
statusid:statusid
},
dataType:"json",
success: function(data, status, xhr) {
console.log(data.fname);
$('#status_id').val(data.id);
$('#status_name').val(data.name);
$('#status_created_at').val(data.created_at);
$('#status_updated_at').val(data.updated_at);
$('#status_is_deleted').val(data.is_deleted);
$('#status_deleted_on').val(data.deleted_on);
$('#status_triggered_on').val(data.triggered_on);
console.log("status id data Single Loading :success ");
},
error: function() {
console.log("status id data Single Loading :error "+data.responseText );
},
complete: function() {
console.log("status id data Single Loading :complete ");
}
});
});
}
loadAllstatus();
}
//////////// Load Of Singlge data For Show  Here   Close ////////////////////////////
 //////////// Update Data    ////////////////////////////
function updatestatus(){
var userid =parseInt(localStorage.getItem("statusid"));
var id = $('#status_id').val();
var name = $('#status_name').val();
var created_at = $('#status_created_at').val();
var updated_at = $('#status_updated_at').val();
var is_deleted = $('#status_is_deleted').val();
var deleted_on = $('#status_deleted_on').val();
var triggered_on = $('#status_triggered_on').val();
var statusobject = {
id : id,
name : name,
created_at : created_at,
updated_at : updated_at,
is_deleted : is_deleted,
deleted_on : deleted_on,
triggered_on : triggered_on,
}
const token = $('meta[name="token"]').attr("content");
$.ajax({
url: "../../php/status.php",
type: "POST",
headers: {token : token},
data: {
"key":"updatedata",
"password":_AUTH_PASSWORD_,
"username":_AUTH_USERNAME_,
status_data: JSON.stringify(statusobject)
},
dataType:"json",
success: function(data, status, xhr) {
console.log(data);
console.log("status id data Update  :success ");
$('#status_id').val('');
$('#status_name').val('');
$('#status_created_at').val('');
$('#status_updated_at').val('');
$('#status_is_deleted').val('');
$('#status_deleted_on').val('');
$('#status_triggered_on').val('');
},
error: function(error) {
console.log("status id data Update  :error"+data.responseText );
},
complete: function() {
console.log("userUpdatedjs Compelete"); 
console.log("status id data Update  :complete  ");
localStorage.setItem("userid",NaN);
window.location.href = "../user/status_list_page.php";
}
});
}
//////////// Update Data   Close  ////////////////////////////
  //////////// Save Data    ////////////////////////////
function savestatus(){
var id = $('#status_id').val();
var name = $('#status_name').val();
var created_at = $('#status_created_at').val();
var updated_at = $('#status_updated_at').val();
var is_deleted = $('#status_is_deleted').val();
var deleted_on = $('#status_deleted_on').val();
var triggered_on = $('#status_triggered_on').val();
var statusobject = {
id : id,
name : name,
created_at : created_at,
updated_at : updated_at,
is_deleted : is_deleted,
deleted_on : deleted_on,
triggered_on : triggered_on,
}
const token = $('meta[name="token"]').attr("content");
$.ajax({
url: "../../php/status.php",
type: "POST",
headers: {token : token},
data: {
"key":"savedata",
"password":_AUTH_PASSWORD_,
"username":_AUTH_USERNAME_,
status_data: JSON.stringify(statusobject)
},
dataType:"json",
success: function(data, status, xhr) {
console.log("status id data Save  :success ");
$('#status_id').val('');
$('#status_name').val('');
$('#status_created_at').val('');
$('#status_updated_at').val('');
$('#status_is_deleted').val('');
$('#status_deleted_on').val('');
$('#status_triggered_on').val('');
 },
error: function(data) {
console.log("status id data Save  :error "+data.responseText );
},
complete: function() {
console.log("status id data Save  :complete ");
localStorage.setItem("statusid",NaN);
window.location.href = "../user/status_list_page.php";
 }
});}
 //////////// Save Data   Close   ////////////////////////////
 //////////// Load All Data    ////////////////////////////
function loadAllstatus(){
  const token = $('meta[name="token"]').attr("content");
 $.ajax({
url: "../../php/status.php",
type: "POST",
headers: {token : token},
data: {
"key":"getalldata",
"password":_AUTH_PASSWORD_,
"username":_AUTH_USERNAME_,
},
dataType:"json",
success: function(data, status, xhr) {
console.log("status id data Load All  :success ");
 $('#user_id').val(data.id);$('#user_fname').val(data.fname);$('#user_mname').val(data.mname);$('#user_lname').val(data.lname);$('#user_email_id').val(data.email_id);$('#user_mob_no').val(data.mob_no);$('#user_isdelete').val(data.isdelete);$('#user_col_1').val(data.col_1);$('#user_col_2').val(data.col_2);$('#user_col_3').val(data.col_3);$('#user_primary').val(data.primary);
if(data.length>0)
 {
for(var i=0;i<data.length;i++){
 $('#myTable').append("<tr><td>"+data[i].id+"</td><td>"+data[i].name+"</td><td>"+data[i].created_at+"</td><td>"+data[i].updated_at+"</td><td>"+data[i].is_deleted+"</td><td>"+data[i].deleted_on+"</td><td>"+data[i].triggered_on+"</td></tr>");
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
 },
error: function(data) {
console.log("status id data Load All  :error "+data.responseText );
},
complete: function() {
console.log("status id data Load All  :complete ");
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
url: "../../php/status.php",
type: "POST",
headers: {token : token},
data: {
"key":"deletedata",
"password":_AUTH_PASSWORD_,
"username":_AUTH_USERNAME_,
"tbl_user_name": JSON.stringify(userobject)
 },
 dataType:"json",
 success: function(data, status, xhr) {
console.log("status id data Update Data  :success ");
 var dataTable =$('#myTable').dataTable();
dataTable.fnClearTable();
dataTable.fnDraw();
dataTable.fnDestroy();
 loadAllstatus();
 },
error: function(data) {
console.log("status id data Update Data :error "+data.responseText );
 },
 complete: function() {
console.log("status id data Update Data  :complete ");
   }
});
  });
}
 function goforupdaterecord(id){
localStorage.setItem("statusid",id);
window.location.href = "../user/status.php";
}
 //////////// Fetch and  Data     ////////////////////////////
