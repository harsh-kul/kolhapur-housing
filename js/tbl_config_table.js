$(document).ready(function() {
   ////Docament Ready Code loaddataofconfigtable();
$('#btn_save_configtable').click(function() {
console.log("configtable Save Clicked");
saveconfigtable();
loadAllconfigtable();
});
$('#btn_update_configtable').click(function() {
console.log("configtable Update Clicked");
updateconfigtable();
loadAllconfigtable();
});
});
  //////////// Docuemnt  Close Here ////////////////////////////
//////////// Go For Update  Here ////////////////////////////
function goforupdaterecord(id){
localStorage.setItem("configtableid",id);
console.log("configtable goforupdaterecord Clicked");
 window.location.href = "../user/configtable.php";
 }
 //////////// Go For Update  Here ////////////////////////////
//////////// Load Of Singlge data For Show  Here ////////////////////////////
function loaddataofconfigtable(){
var configtableid =parseInt(localStorage.getItem("configtableid"));
console.log("configtableid  "+configtableid);
if(isNaN(configtableid)){
console.log("configtable id is null Clicked");
}

 else{
$(document).ready(function() {
console.log("configtable id data Loading");
$.ajax({
url: "../../php/configtable.php",
type: "POST",
data: {
"key":"getone",
"password":_AUTH_PASSWORD_,
"username":_AUTH_USERNAME_,
configtableid:configtableid
},
dataType:"json",
success: function(data, status, xhr) {
console.log(data.fname);
$('#configtable_pk_conid').val(data.pk_conid);
$('#configtable_con_key').val(data.con_key);
$('#configtable_con_value').val(data.con_value);
$('#configtable_con_col1').val(data.con_col1);
$('#configtable_con_col2').val(data.con_col2);
$('#configtable_con_col3').val(data.con_col3);
$('#configtable_con_col4').val(data.con_col4);
$('#configtable_con_col5').val(data.con_col5);
$('#configtable_created_at').val(data.created_at);
$('#configtable_updated_at').val(data.updated_at);
$('#configtable_is_delete').val(data.is_delete);
$('#configtable_deleted_on').val(data.deleted_on);
$('#configtable_triggerd_on').val(data.triggerd_on);
console.log("configtable id data Single Loading :success ");
},
error: function() {
console.log("configtable id data Single Loading :error "+data.responseText );
},
complete: function() {
console.log("configtable id data Single Loading :complete ");
}
});
});
}
loadAllconfigtable();
}
//////////// Load Of Singlge data For Show  Here   Close ////////////////////////////
 //////////// Update Data    ////////////////////////////
function updateconfigtable(){
var userid =parseInt(localStorage.getItem("configtableid"));
var pk_conid = $('#configtable_pk_conid').val();
var con_key = $('#configtable_con_key').val();
var con_value = $('#configtable_con_value').val();
var con_col1 = $('#configtable_con_col1').val();
var con_col2 = $('#configtable_con_col2').val();
var con_col3 = $('#configtable_con_col3').val();
var con_col4 = $('#configtable_con_col4').val();
var con_col5 = $('#configtable_con_col5').val();
var created_at = $('#configtable_created_at').val();
var updated_at = $('#configtable_updated_at').val();
var is_delete = $('#configtable_is_delete').val();
var deleted_on = $('#configtable_deleted_on').val();
var triggerd_on = $('#configtable_triggerd_on').val();
var configtableobject = {
pk_conid : pk_conid,
con_key : con_key,
con_value : con_value,
con_col1 : con_col1,
con_col2 : con_col2,
con_col3 : con_col3,
con_col4 : con_col4,
con_col5 : con_col5,
created_at : created_at,
updated_at : updated_at,
is_delete : is_delete,
deleted_on : deleted_on,
triggerd_on : triggerd_on,
}
$.ajax({
url: "../../php/configtable.php",
type: "POST",
data: {
"key":"updatedata",
"password":_AUTH_PASSWORD_,
"username":_AUTH_USERNAME_,
configtable_data: JSON.stringify(configtableobject)
},
dataType:"json",
success: function(data, status, xhr) {
console.log(data);
console.log("configtable id data Update  :success ");
$('#configtable_pk_conid').val('');
$('#configtable_con_key').val('');
$('#configtable_con_value').val('');
$('#configtable_con_col1').val('');
$('#configtable_con_col2').val('');
$('#configtable_con_col3').val('');
$('#configtable_con_col4').val('');
$('#configtable_con_col5').val('');
$('#configtable_created_at').val('');
$('#configtable_updated_at').val('');
$('#configtable_is_delete').val('');
$('#configtable_deleted_on').val('');
$('#configtable_triggerd_on').val('');
},
error: function(error) {
console.log("configtable id data Update  :error"+data.responseText );
},
complete: function() {
console.log("userUpdatedjs Compelete"); 
console.log("configtable id data Update  :complete  ");
localStorage.setItem("userid",NaN);
window.location.href = "../user/configtable_list_page.php";
}
});
}
//////////// Update Data   Close  ////////////////////////////
  //////////// Save Data    ////////////////////////////
function saveconfigtable(){
var pk_conid = $('#configtable_pk_conid').val();
var con_key = $('#configtable_con_key').val();
var con_value = $('#configtable_con_value').val();
var con_col1 = $('#configtable_con_col1').val();
var con_col2 = $('#configtable_con_col2').val();
var con_col3 = $('#configtable_con_col3').val();
var con_col4 = $('#configtable_con_col4').val();
var con_col5 = $('#configtable_con_col5').val();
var created_at = $('#configtable_created_at').val();
var updated_at = $('#configtable_updated_at').val();
var is_delete = $('#configtable_is_delete').val();
var deleted_on = $('#configtable_deleted_on').val();
var triggerd_on = $('#configtable_triggerd_on').val();
var configtableobject = {
pk_conid : pk_conid,
con_key : con_key,
con_value : con_value,
con_col1 : con_col1,
con_col2 : con_col2,
con_col3 : con_col3,
con_col4 : con_col4,
con_col5 : con_col5,
created_at : created_at,
updated_at : updated_at,
is_delete : is_delete,
deleted_on : deleted_on,
triggerd_on : triggerd_on,
}
$.ajax({
url: "../../php/configtable.php",
type: "POST",
data: {
"key":"savedata",
"password":_AUTH_PASSWORD_,
"username":_AUTH_USERNAME_,
configtable_data: JSON.stringify(configtableobject)
},
dataType:"json",
success: function(data, status, xhr) {
console.log("configtable id data Save  :success ");
$('#configtable_pk_conid').val('');
$('#configtable_con_key').val('');
$('#configtable_con_value').val('');
$('#configtable_con_col1').val('');
$('#configtable_con_col2').val('');
$('#configtable_con_col3').val('');
$('#configtable_con_col4').val('');
$('#configtable_con_col5').val('');
$('#configtable_created_at').val('');
$('#configtable_updated_at').val('');
$('#configtable_is_delete').val('');
$('#configtable_deleted_on').val('');
$('#configtable_triggerd_on').val('');
 },
error: function(data) {
console.log("configtable id data Save  :error "+data.responseText );
},
complete: function() {
console.log("configtable id data Save  :complete ");
localStorage.setItem("configtableid",NaN);
window.location.href = "../user/configtable_list_page.php";
 }
});
}
 //////////// Save Data   Close   ////////////////////////////
 //////////// Load All Data    ////////////////////////////
function loadAllconfigtable(){
 $.ajax({
url: "../../php/configtable.php",
type: "POST",
data: {
"key":"getalldata",
"password":_AUTH_PASSWORD_,
"username":_AUTH_USERNAME_,
},
dataType:"json",
success: function(data, status, xhr) {
console.log("configtable id data Load All  :success ");
 $('#user_id').val(data.id);$('#user_fname').val(data.fname);$('#user_mname').val(data.mname);$('#user_lname').val(data.lname);$('#user_email_id').val(data.email_id);$('#user_mob_no').val(data.mob_no);$('#user_isdelete').val(data.isdelete);$('#user_col_1').val(data.col_1);$('#user_col_2').val(data.col_2);$('#user_col_3').val(data.col_3);$('#user_primary').val(data.primary);
if(data.length>0)
 {
for(var i=0;i<data.length;i++){
 $('#myTable').append("<tr><td>"+data[i].pk_conid+"</td><td>"+data[i].con_key+"</td><td>"+data[i].con_value+"</td><td>"+data[i].con_col1+"</td><td>"+data[i].con_col2+"</td><td>"+data[i].con_col3+"</td><td>"+data[i].con_col4+"</td><td>"+data[i].con_col5+"</td><td>"+data[i].created_at+"</td><td>"+data[i].updated_at+"</td><td>"+data[i].is_delete+"</td><td>"+data[i].deleted_on+"</td><td>"+data[i].triggerd_on+"</td></tr>");
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
console.log("configtable id data Load All  :error "+data.responseText );
},
complete: function() {
console.log("configtable id data Load All  :complete ");
 }
});
 } 
//////////// Load All Data Close    ////////////////////////////
 //////////// Fetch and  Data     ////////////////////////////   
function  updaterecord(id,type){
 $(document).ready(function() {
 var userobject = {id : id}
$.ajax({
url: "../../php/configtable.php",
type: "POST",
 data: {
"key":"deletedata",
"password":_AUTH_PASSWORD_,
"username":_AUTH_USERNAME_,
"tbl_user_name": JSON.stringify(userobject)
 },
 dataType:"json",
 success: function(data, status, xhr) {
console.log("configtable id data Update Data  :success ");
 var dataTable =$('#myTable').dataTable();
dataTable.fnClearTable();
dataTable.fnDraw();
dataTable.fnDestroy();
 loadAllconfigtable();
 },
error: function(data) {
console.log("configtable id data Update Data :error "+data.responseText );
 },
 complete: function() {
console.log("configtable id data Update Data  :complete ");
   }
});
  });
}
 function goforupdaterecord(id){
localStorage.setItem("configtableid",id);
window.location.href = "../user/configtable.php";
}
 //////////// Fetch and  Data     ////////////////////////////
