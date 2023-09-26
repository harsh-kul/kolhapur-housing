$(document).ready(function() {
   ////Docament Ready Code loaddataofregistrationtemp();
$('#btn_save_registrationtemp').click(function() {
console.log("registrationtemp Save Clicked");
saveregistrationtemp();
loadAllregistrationtemp();
});
$('#btn_update_registrationtemp').click(function() {
console.log("registrationtemp Update Clicked");
updateregistrationtemp();
loadAllregistrationtemp();
});
});
  //////////// Docuemnt  Close Here ////////////////////////////
//////////// Go For Update  Here ////////////////////////////
function goforupdaterecord(id){
localStorage.setItem("registrationtempid",id);
console.log("registrationtemp goforupdaterecord Clicked");
 window.location.href = "../user/registrationtemp.php";
 }
 //////////// Go For Update  Here ////////////////////////////
//////////// Load Of Singlge data For Show  Here ////////////////////////////
function loaddataofregistrationtemp(){
var registrationtempid =parseInt(localStorage.getItem("registrationtempid"));
console.log("registrationtempid  "+registrationtempid);
if(isNaN(registrationtempid)){
console.log("registrationtemp id is null Clicked");
}
 else{
$(document).ready(function() {
  const token = $('meta[name="token"]').attr("content");
console.log("registrationtemp id data Loading");
$.ajax({
url: "../../php/registrationtemp.php",
type: "POST",
headers: {token : token},
data: {
"key":"getone",
"password":_AUTH_PASSWORD_,
"username":_AUTH_USERNAME_,
registrationtempid:registrationtempid
},
dataType:"json",
success: function(data, status, xhr) {
console.log(data.fname);
$('#registrationtemp_pk_rgid').val(data.pk_rgid);
$('#registrationtemp_fk_sfid').val(data.fk_sfid);
$('#registrationtemp_rg_fname').val(data.rg_fname);
$('#registrationtemp_rg_lname').val(data.rg_lname);
$('#registrationtemp_rg_email').val(data.rg_email);
$('#registrationtemp_rg_mobile').val(data.rg_mobile);
$('#registrationtemp_rg_address').val(data.rg_address);
$('#registrationtemp_rg_password').val(data.rg_password);
$('#registrationtemp_rd_is_super_admin').val(data.rd_is_super_admin);
$('#registrationtemp_rg_is_seller').val(data.rg_is_seller);
$('#registrationtemp_rg_is_buyer').val(data.rg_is_buyer);
$('#registrationtemp_rg_is_app_user').val(data.rg_is_app_user);
$('#registrationtemp_rg_is_deleted').val(data.rg_is_deleted);
$('#registrationtemp_rg_created_at').val(data.rg_created_at);
$('#registrationtemp_rg_updated_at').val(data.rg_updated_at);
$('#registrationtemp_rg_status').val(data.rg_status);
$('#registrationtemp_rg_col1').val(data.rg_col1);
$('#registrationtemp_rg_col2').val(data.rg_col2);
$('#registrationtemp_rg_col3').val(data.rg_col3);
$('#registrationtemp_rg_col4').val(data.rg_col4);
$('#registrationtemp_rg_col5').val(data.rg_col5);
$('#registrationtemp_rg_deleted_on').val(data.rg_deleted_on);
$('#registrationtemp_rg_triggered_on').val(data.rg_triggered_on);
console.log("registrationtemp id data Single Loading :success ");
},
error: function() {
console.log("registrationtemp id data Single Loading :error "+data.responseText);
},
complete: function() {
console.log("registrationtemp id data Single Loading :complete ");
}
});
});
}
loadAllregistrationtemp();
}
//////////// Load Of Singlge data For Show  Here   Close ////////////////////////////
 //////////// Update Data    ////////////////////////////
function updateregistrationtemp(){
var userid =parseInt(localStorage.getItem("registrationtempid"));
var pk_rgid = $('#registrationtemp_pk_rgid').val();
var fk_sfid = $('#registrationtemp_fk_sfid').val();
var rg_fname = $('#registrationtemp_rg_fname').val();
var rg_lname = $('#registrationtemp_rg_lname').val();
var rg_email = $('#registrationtemp_rg_email').val();
var rg_mobile = $('#registrationtemp_rg_mobile').val();
var rg_address = $('#registrationtemp_rg_address').val();
var rg_password = $('#registrationtemp_rg_password').val();
var rd_is_super_admin = $('#registrationtemp_rd_is_super_admin').val();
var rg_is_seller = $('#registrationtemp_rg_is_seller').val();
var rg_is_buyer = $('#registrationtemp_rg_is_buyer').val();
var rg_is_app_user = $('#registrationtemp_rg_is_app_user').val();
var rg_is_deleted = $('#registrationtemp_rg_is_deleted').val();
var rg_created_at = $('#registrationtemp_rg_created_at').val();
var rg_updated_at = $('#registrationtemp_rg_updated_at').val();
var rg_status = $('#registrationtemp_rg_status').val();
var rg_col1 = $('#registrationtemp_rg_col1').val();
var rg_col2 = $('#registrationtemp_rg_col2').val();
var rg_col3 = $('#registrationtemp_rg_col3').val();
var rg_col4 = $('#registrationtemp_rg_col4').val();
var rg_col5 = $('#registrationtemp_rg_col5').val();
var rg_deleted_on = $('#registrationtemp_rg_deleted_on').val();
var rg_triggered_on = $('#registrationtemp_rg_triggered_on').val();
var registrationtempobject = {
pk_rgid : pk_rgid,
fk_sfid : fk_sfid,
rg_fname : rg_fname,
rg_lname : rg_lname,
rg_email : rg_email,
rg_mobile : rg_mobile,
rg_address : rg_address,
rg_password : rg_password,
rd_is_super_admin : rd_is_super_admin,
rg_is_seller : rg_is_seller,
rg_is_buyer : rg_is_buyer,
rg_is_app_user : rg_is_app_user,
rg_is_deleted : rg_is_deleted,
rg_created_at : rg_created_at,
rg_updated_at : rg_updated_at,
rg_status : rg_status,
rg_col1 : rg_col1,
rg_col2 : rg_col2,
rg_col3 : rg_col3,
rg_col4 : rg_col4,
rg_col5 : rg_col5,
rg_deleted_on : rg_deleted_on,
rg_triggered_on : rg_triggered_on,
}
const token = $('meta[name="token"]').attr("content");
$.ajax({
url: "../../php/registrationtemp.php",
type: "POST",
headers: {token : token},
data: {
"key":"updatedata",
"password":_AUTH_PASSWORD_,
"username":_AUTH_USERNAME_,
registrationtemp_data: JSON.stringify(registrationtempobject)
},
dataType:"json",
success: function(data, status, xhr) {
console.log(data);
console.log("registrationtemp id data Update  :success ");
$('#registrationtemp_pk_rgid').val('');
$('#registrationtemp_fk_sfid').val('');
$('#registrationtemp_rg_fname').val('');
$('#registrationtemp_rg_lname').val('');
$('#registrationtemp_rg_email').val('');
$('#registrationtemp_rg_mobile').val('');
$('#registrationtemp_rg_address').val('');
$('#registrationtemp_rg_password').val('');
$('#registrationtemp_rd_is_super_admin').val('');
$('#registrationtemp_rg_is_seller').val('');
$('#registrationtemp_rg_is_buyer').val('');
$('#registrationtemp_rg_is_app_user').val('');
$('#registrationtemp_rg_is_deleted').val('');
$('#registrationtemp_rg_created_at').val('');
$('#registrationtemp_rg_updated_at').val('');
$('#registrationtemp_rg_status').val('');
$('#registrationtemp_rg_col1').val('');
$('#registrationtemp_rg_col2').val('');
$('#registrationtemp_rg_col3').val('');
$('#registrationtemp_rg_col4').val('');
$('#registrationtemp_rg_col5').val('');
$('#registrationtemp_rg_deleted_on').val('');
$('#registrationtemp_rg_triggered_on').val('');
},
error: function(error) {
console.log("registrationtemp id data Update  :error"+data.responseText );
},
complete: function() {
console.log("userUpdatedjs Compelete"); 
console.log("registrationtemp id data Update  :complete  ");
localStorage.setItem("userid",NaN);
window.location.href = "../user/registrationtemp_list_page.php";
}
});
}
//////////// Update Data   Close  ////////////////////////////
  //////////// Save Data    ////////////////////////////
function saveregistrationtemp(){
var pk_rgid = $('#registrationtemp_pk_rgid').val();
var fk_sfid = $('#registrationtemp_fk_sfid').val();
var rg_fname = $('#registrationtemp_rg_fname').val();
var rg_lname = $('#registrationtemp_rg_lname').val();
var rg_email = $('#registrationtemp_rg_email').val();
var rg_mobile = $('#registrationtemp_rg_mobile').val();
var rg_address = $('#registrationtemp_rg_address').val();
var rg_password = $('#registrationtemp_rg_password').val();
var rd_is_super_admin = $('#registrationtemp_rd_is_super_admin').val();
var rg_is_seller = $('#registrationtemp_rg_is_seller').val();
var rg_is_buyer = $('#registrationtemp_rg_is_buyer').val();
var rg_is_app_user = $('#registrationtemp_rg_is_app_user').val();
var rg_is_deleted = $('#registrationtemp_rg_is_deleted').val();
var rg_created_at = $('#registrationtemp_rg_created_at').val();
var rg_updated_at = $('#registrationtemp_rg_updated_at').val();
var rg_status = $('#registrationtemp_rg_status').val();
var rg_col1 = $('#registrationtemp_rg_col1').val();
var rg_col2 = $('#registrationtemp_rg_col2').val();
var rg_col3 = $('#registrationtemp_rg_col3').val();
var rg_col4 = $('#registrationtemp_rg_col4').val();
var rg_col5 = $('#registrationtemp_rg_col5').val();
var rg_deleted_on = $('#registrationtemp_rg_deleted_on').val();
var rg_triggered_on = $('#registrationtemp_rg_triggered_on').val();
var registrationtempobject = {
pk_rgid : pk_rgid,
fk_sfid : fk_sfid,
rg_fname : rg_fname,
rg_lname : rg_lname,
rg_email : rg_email,
rg_mobile : rg_mobile,
rg_address : rg_address,
rg_password : rg_password,
rd_is_super_admin : rd_is_super_admin,
rg_is_seller : rg_is_seller,
rg_is_buyer : rg_is_buyer,
rg_is_app_user : rg_is_app_user,
rg_is_deleted : rg_is_deleted,
rg_created_at : rg_created_at,
rg_updated_at : rg_updated_at,
rg_status : rg_status,
rg_col1 : rg_col1,
rg_col2 : rg_col2,
rg_col3 : rg_col3,
rg_col4 : rg_col4,
rg_col5 : rg_col5,
rg_deleted_on : rg_deleted_on,
rg_triggered_on : rg_triggered_on,
}
const token = $('meta[name="token"]').attr("content");
$.ajax({
url: "../../php/registrationtemp.php",
type: "POST",
headers: {token : token},
data: {
"key":"savedata",
"password":_AUTH_PASSWORD_,
"username":_AUTH_USERNAME_,
registrationtemp_data: JSON.stringify(registrationtempobject)
},
dataType:"json",
success: function(data, status, xhr) {
console.log("registrationtemp id data Save  :success ");
$('#registrationtemp_pk_rgid').val('');
$('#registrationtemp_fk_sfid').val('');
$('#registrationtemp_rg_fname').val('');
$('#registrationtemp_rg_lname').val('');
$('#registrationtemp_rg_email').val('');
$('#registrationtemp_rg_mobile').val('');
$('#registrationtemp_rg_address').val('');
$('#registrationtemp_rg_password').val('');
$('#registrationtemp_rd_is_super_admin').val('');
$('#registrationtemp_rg_is_seller').val('');
$('#registrationtemp_rg_is_buyer').val('');
$('#registrationtemp_rg_is_app_user').val('');
$('#registrationtemp_rg_is_deleted').val('');
$('#registrationtemp_rg_created_at').val('');
$('#registrationtemp_rg_updated_at').val('');
$('#registrationtemp_rg_status').val('');
$('#registrationtemp_rg_col1').val('');
$('#registrationtemp_rg_col2').val('');
$('#registrationtemp_rg_col3').val('');
$('#registrationtemp_rg_col4').val('');
$('#registrationtemp_rg_col5').val('');
$('#registrationtemp_rg_deleted_on').val('');
$('#registrationtemp_rg_triggered_on').val('');
 },
error: function(data) {
console.log("registrationtemp id data Save  :error "+data.responseText );
},
complete: function() {
console.log("registrationtemp id data Save  :complete ");
localStorage.setItem("registrationtempid",NaN);
window.location.href = "../user/registrationtemp_list_page.php";
 }
});}
 //////////// Save Data   Close   ////////////////////////////
 //////////// Load All Data    ////////////////////////////
function loadAllregistrationtemp(){
  const token = $('meta[name="token"]').attr("content");
 $.ajax({
url: "../../php/registrationtemp.php",
type: "POST",
headers: {token : token},
data: {
"key":"getalldata",
"password":_AUTH_PASSWORD_,
"username":_AUTH_USERNAME_,
},
dataType:"json",
success: function(data, status, xhr) {
console.log("registrationtemp id data Load All  :success ");
 $('#user_id').val(data.id);$('#user_fname').val(data.fname);$('#user_mname').val(data.mname);$('#user_lname').val(data.lname);$('#user_email_id').val(data.email_id);$('#user_mob_no').val(data.mob_no);$('#user_isdelete').val(data.isdelete);$('#user_col_1').val(data.col_1);$('#user_col_2').val(data.col_2);$('#user_col_3').val(data.col_3);$('#user_primary').val(data.primary);
if(data.length>0)
 {
for(var i=0;i<data.length;i++){
 $('#myTable').append("<tr><td>"+data[i].pk_rgid+"</td><td>"+data[i].fk_sfid+"</td><td>"+data[i].rg_fname+"</td><td>"+data[i].rg_lname+"</td><td>"+data[i].rg_email+"</td><td>"+data[i].rg_mobile+"</td><td>"+data[i].rg_address+"</td><td>"+data[i].rg_password+"</td><td>"+data[i].rd_is_super_admin+"</td><td>"+data[i].rg_is_seller+"</td><td>"+data[i].rg_is_buyer+"</td><td>"+data[i].rg_is_app_user+"</td><td>"+data[i].rg_is_deleted+"</td><td>"+data[i].rg_created_at+"</td><td>"+data[i].rg_updated_at+"</td><td>"+data[i].rg_status+"</td><td>"+data[i].rg_col1+"</td><td>"+data[i].rg_col2+"</td><td>"+data[i].rg_col3+"</td><td>"+data[i].rg_col4+"</td><td>"+data[i].rg_col5+"</td><td>"+data[i].rg_deleted_on+"</td><td>"+data[i].rg_triggered_on+"</td></tr>");
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
console.log("registrationtemp id data Load All  :error "+data.responseText );
},
complete: function() {
console.log("registrationtemp id data Load All  :complete ");
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
url: "../../php/registrationtemp.php",
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
console.log("registrationtemp id data Update Data  :success ");
 var dataTable =$('#myTable').dataTable();
dataTable.fnClearTable();
dataTable.fnDraw();
dataTable.fnDestroy();
 loadAllregistrationtemp();
 },
error: function(data) {
console.log("registrationtemp id data Update Data :error "+data.responseText );
 },
 complete: function() {
console.log("registrationtemp id data Update Data  :complete ");
   }
});
  });
}
 function goforupdaterecord(id){
localStorage.setItem("registrationtempid",id);
window.location.href = "../user/registrationtemp.php";
}
 //////////// Fetch and  Data     ////////////////////////////
