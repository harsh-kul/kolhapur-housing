$(document).ready(function() {
   ////Docament Ready Code loaddataoflonetype();
$('#btn_save_lonetype').click(function() {
console.log("lonetype Save Clicked");
savelonetype();
loadAlllonetype();
});
$('#btn_update_lonetype').click(function() {
console.log("lonetype Update Clicked");
updatelonetype();
loadAlllonetype();
});
});
  //////////// Docuemnt  Close Here ////////////////////////////
//////////// Go For Update  Here ////////////////////////////
function goforupdaterecord(id){
localStorage.setItem("lonetypeid",id);
console.log("lonetype goforupdaterecord Clicked");
 window.location.href = "../user/lonetype.php";
 }
 //////////// Go For Update  Here ////////////////////////////
//////////// Load Of Singlge data For Show  Here ////////////////////////////
function loaddataoflonetype(){
var lonetypeid =parseInt(localStorage.getItem("lonetypeid"));
console.log("lonetypeid  "+lonetypeid);
if(isNaN(lonetypeid)){
console.log("lonetype id is null Clicked");
}

 else{
$(document).ready(function() {
console.log("lonetype id data Loading");
$.ajax({
url: "../../php/lonetype.php",
type: "POST",
data: {
"key":"getone",
"password":_AUTH_PASSWORD_,
"username":_AUTH_USERNAME_,
lonetypeid:lonetypeid
},
dataType:"json",
success: function(data, status, xhr) {
console.log(data.fname);
$('#lonetype_lt_id').val(data.lt_id);
$('#lonetype_lt_name').val(data.lt_name);
$('#lonetype_created_at').val(data.created_at);
$('#lonetype_updated_at').val(data.updated_at);
$('#lonetype_is_deleted').val(data.is_deleted);
$('#lonetype_deleted_on').val(data.deleted_on);
$('#lonetype_triggered_on').val(data.triggered_on);
console.log("lonetype id data Single Loading :success ");
},
error: function() {
console.log("lonetype id data Single Loading :error "+data.responseText );
},
complete: function() {
console.log("lonetype id data Single Loading :complete ");
}
});
});
}
loadAlllonetype();
}
//////////// Load Of Singlge data For Show  Here   Close ////////////////////////////
 //////////// Update Data    ////////////////////////////
function updatelonetype(){
var userid =parseInt(localStorage.getItem("lonetypeid"));
var lt_id = $('#lonetype_lt_id').val();
var lt_name = $('#lonetype_lt_name').val();
var created_at = $('#lonetype_created_at').val();
var updated_at = $('#lonetype_updated_at').val();
var is_deleted = $('#lonetype_is_deleted').val();
var deleted_on = $('#lonetype_deleted_on').val();
var triggered_on = $('#lonetype_triggered_on').val();
var lonetypeobject = {
lt_id : lt_id,
lt_name : lt_name,
created_at : created_at,
updated_at : updated_at,
is_deleted : is_deleted,
deleted_on : deleted_on,
triggered_on : triggered_on,
}
$.ajax({
url: __URL_include_loan_type_,
type: "POST",
data: {
"key":"updatedata",
"password":_AUTH_PASSWORD_,
"username":_AUTH_USERNAME_,
lonetype_data: JSON.stringify(lonetypeobject)
},
dataType:"json",
success: function(data, status, xhr) {
console.log(data);
console.log("lonetype id data Update  :success ");
$('#lonetype_lt_id').val('');
$('#lonetype_lt_name').val('');
$('#lonetype_created_at').val('');
$('#lonetype_updated_at').val('');
$('#lonetype_is_deleted').val('');
$('#lonetype_deleted_on').val('');
$('#lonetype_triggered_on').val('');
},
error: function(error) {
console.log("lonetype id data Update  :error"+data.responseText );
},
complete: function() {
console.log("userUpdatedjs Compelete"); 
console.log("lonetype id data Update  :complete  ");
localStorage.setItem("userid",NaN);
window.location.href = __URL_loanlistpage_;
}
});
}
//////////// Update Data   Close  ////////////////////////////
  //////////// Save Data    ////////////////////////////
function savelonetype(){
var lt_id = $('#lonetype_lt_id').val();
var lt_name = $('#lonetype_lt_name').val();
var created_at = $('#lonetype_created_at').val();
var updated_at = $('#lonetype_updated_at').val();
var is_deleted = $('#lonetype_is_deleted').val();
var deleted_on = $('#lonetype_deleted_on').val();
var triggered_on = $('#lonetype_triggered_on').val();
var lonetypeobject = {
lt_id : lt_id,
lt_name : lt_name,
created_at : created_at,
updated_at : updated_at,
is_deleted : is_deleted,
deleted_on : deleted_on,
triggered_on : triggered_on,
}
$.ajax({
url: __URL_include_loan_type_,
type: "POST",
data: {
"key":"savedata",
"password":_AUTH_PASSWORD_,
"username":_AUTH_USERNAME_,
lonetype_data: JSON.stringify(lonetypeobject)
},
dataType:"json",
success: function(data, status, xhr) {
console.log("lonetype id data Save  :success ");
$('#lonetype_lt_id').val('');
$('#lonetype_lt_name').val('');
$('#lonetype_created_at').val('');
$('#lonetype_updated_at').val('');
$('#lonetype_is_deleted').val('');
$('#lonetype_deleted_on').val('');
$('#lonetype_triggered_on').val('');
 },
error: function(data) {
console.log("lonetype id data Save  :error "+data.responseText );
},
complete: function() {
console.log("lonetype id data Save  :complete ");
localStorage.setItem("lonetypeid",NaN);
window.location.href = __URL_loanlistpage_;
 }
});}
 //////////// Save Data   Close   ////////////////////////////
 //////////// Load All Data    ////////////////////////////
function loadAlllonetype(){
 $.ajax({
url: __URL_include_loan_type_,
type: "POST",
data: {
"key":"getalldata",
"password":_AUTH_PASSWORD_,
"username":_AUTH_USERNAME_,
},
dataType:"json",
success: function(data, status, xhr) {
console.log("lonetype id data Load All  :success ");
 $('#user_id').val(data.id);$('#user_fname').val(data.fname);$('#user_mname').val(data.mname);$('#user_lname').val(data.lname);$('#user_email_id').val(data.email_id);$('#user_mob_no').val(data.mob_no);$('#user_isdelete').val(data.isdelete);$('#user_col_1').val(data.col_1);$('#user_col_2').val(data.col_2);$('#user_col_3').val(data.col_3);$('#user_primary').val(data.primary);
if(data.length>0)
 {
for(var i=0;i<data.length;i++){
 $('#myTable').append("<tr><td>"+data[i].lt_id+"</td><td>"+data[i].lt_name+"</td><td>"+data[i].created_at+"</td><td>"+data[i].updated_at+"</td><td>"+data[i].is_deleted+"</td><td>"+data[i].deleted_on+"</td><td>"+data[i].triggered_on+"</td></tr>1");
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
console.log("lonetype id data Load All  :error "+data.responseText );
},
complete: function() {
console.log("lonetype id data Load All  :complete ");
 }
});
 } 
//////////// Load All Data Close    ////////////////////////////
 //////////// Fetch and  Data     ////////////////////////////   
function  updaterecord(id,type){
 $(document).ready(function() {
 var userobject = {id : id}
$.ajax({
url: __URL_include_loan_type_,
type: "POST",
 data: {
"key":"deletedata",
"password":_AUTH_PASSWORD_,
"username":_AUTH_USERNAME_,
"tbl_user_name": JSON.stringify(userobject)
 },
 dataType:"json",
 success: function(data, status, xhr) {
console.log("lonetype id data Update Data  :success ");
 var dataTable =$('#myTable').dataTable();
dataTable.fnClearTable();
dataTable.fnDraw();
dataTable.fnDestroy();
 loadAlllonetype();
 },
error: function(data) {
console.log("lonetype id data Update Data :error "+data.responseText );
 },
 complete: function() {
console.log("lonetype id data Update Data  :complete ");
   }
});
  });
}
 function goforupdaterecord(id){
localStorage.setItem("lonetypeid",id);
window.location.href = __;__URL_include_loan_request_
}
 //////////// Fetch and  Data     ////////////////////////////
