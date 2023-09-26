$(document).ready(function() {
   ////Docament Ready Code loaddataofmedia();
$('#btn_save_media').click(function() {
console.log("media Save Clicked");
savemedia();
loadAllmedia();
});
$('#btn_update_media').click(function() {
console.log("media Update Clicked");
updatemedia();
loadAllmedia();
});
});
  //////////// Docuemnt  Close Here ////////////////////////////
//////////// Go For Update  Here ////////////////////////////
function goforupdaterecord(id){
localStorage.setItem("mediaid",id);
console.log("media goforupdaterecord Clicked");
 window.location.href = "../user/media.php";
 }
 //////////// Go For Update  Here ////////////////////////////
//////////// Load Of Singlge data For Show  Here ////////////////////////////
function loaddataofmedia(){
var mediaid =parseInt(localStorage.getItem("mediaid"));
console.log("mediaid  "+mediaid);
if(isNaN(mediaid)){
console.log("media id is null Clicked");
}
 else{
$(document).ready(function() {
  const token = $('meta[name="token"]').attr("content");
console.log("media id data Loading");
$.ajax({
url: "../../php/media.php",
type: "POST",
headers: {token : token},
data: {
"key":"getone",
"password":_AUTH_PASSWORD_,
"username":_AUTH_USERNAME_,
mediaid:mediaid
},
success: function(data, status, xhr) {
console.log(data.fname);
$('#media_pk_mdid').val(data.pk_mdid);
$('#media_fk_sfid').val(data.fk_sfid);
$('#media_fk_ppid').val(data.fk_ppid);
$('#media_md_media_url').val(data.md_media_url);
$('#media_md_media_type').val(data.md_media_type);
$('#media_md_is_deleted').val(data.md_is_deleted);
$('#media_md_updated_at').val(data.md_updated_at);
$('#media_md_created_at').val(data.md_created_at);
$('#media_md_col1').val(data.md_col1);
$('#media_md_col2').val(data.md_col2);
$('#media_md_col3').val(data.md_col3);
$('#media_md_col4').val(data.md_col4);
$('#media_md_col5').val(data.md_col5);
$('#media_deleted_on').val(data.deleted_on);
$('#media_triggered_on').val(data.triggered_on);
console.log("media id data Single Loading :success ");
},
error: function() {
console.log("media id data Single Loading :error "+data.responseText );
},
complete: function() {
console.log("media id data Single Loading :complete ");
}
});
});
}
loadAllmedia();
}
//////////// Load Of Singlge data For Show  Here   Close ////////////////////////////
 //////////// Update Data    ////////////////////////////
function updatemedia(){
var userid =parseInt(localStorage.getItem("mediaid"));
var pk_mdid = $('#media_pk_mdid').val();
var fk_sfid = $('#media_fk_sfid').val();
var fk_ppid = $('#media_fk_ppid').val();
var md_media_url = $('#media_md_media_url').val();
var md_media_type = $('#media_md_media_type').val();
var md_is_deleted = $('#media_md_is_deleted').val();
var md_updated_at = $('#media_md_updated_at').val();
var md_created_at = $('#media_md_created_at').val();
var md_col1 = $('#media_md_col1').val();
var md_col2 = $('#media_md_col2').val();
var md_col3 = $('#media_md_col3').val();
var md_col4 = $('#media_md_col4').val();
var md_col5 = $('#media_md_col5').val();
var deleted_on = $('#media_deleted_on').val();
var triggered_on = $('#media_triggered_on').val();
var mediaobject = {
pk_mdid : pk_mdid,
fk_sfid : fk_sfid,
fk_ppid : fk_ppid,
md_media_url : md_media_url,
md_media_type : md_media_type,
md_is_deleted : md_is_deleted,
md_updated_at : md_updated_at,
md_created_at : md_created_at,
md_col1 : md_col1,
md_col2 : md_col2,
md_col3 : md_col3,
md_col4 : md_col4,
md_col5 : md_col5,
deleted_on : deleted_on,
triggered_on : triggered_on,
}
const token = $('meta[name="token"]').attr("content");
$.ajax({
url: "../../php/media.php",
type: "POST",
headers: {token : token},
data: {
"key":"updatedata",
"password":_AUTH_PASSWORD_,
"username":_AUTH_USERNAME_,
media_data: JSON.stringify(mediaobject)
},
dataType:"json",
success: function(data, status, xhr) {
console.log(data);
console.log("media id data Update  :success ");
$('#media_pk_mdid').val('');
$('#media_fk_sfid').val('');
$('#media_fk_ppid').val('');
$('#media_md_media_url').val('');
$('#media_md_media_type').val('');
$('#media_md_is_deleted').val('');
$('#media_md_updated_at').val('');
$('#media_md_created_at').val('');
$('#media_md_col1').val('');
$('#media_md_col2').val('');
$('#media_md_col3').val('');
$('#media_md_col4').val('');
$('#media_md_col5').val('');
$('#media_deleted_on').val('');
$('#media_triggered_on').val('');
},
error: function(error) {
console.log("media id data Update  :error"+data.responseText );
},
complete: function() {
console.log("userUpdatedjs Compelete"); 
console.log("media id data Update  :complete  ");
localStorage.setItem("userid",NaN);
window.location.href = "../user/media_list_page.php";
}
});
}
//////////// Update Data   Close  ////////////////////////////
  //////////// Save Data    ////////////////////////////
function savemedia(){
var pk_mdid = $('#media_pk_mdid').val();
var fk_sfid = $('#media_fk_sfid').val();
var fk_ppid = $('#media_fk_ppid').val();
var md_media_url = $('#media_md_media_url').val();
var md_media_type = $('#media_md_media_type').val();
var md_is_deleted = $('#media_md_is_deleted').val();
var md_updated_at = $('#media_md_updated_at').val();
var md_created_at = $('#media_md_created_at').val();
var md_col1 = $('#media_md_col1').val();
var md_col2 = $('#media_md_col2').val();
var md_col3 = $('#media_md_col3').val();
var md_col4 = $('#media_md_col4').val();
var md_col5 = $('#media_md_col5').val();
var deleted_on = $('#media_deleted_on').val();
var triggered_on = $('#media_triggered_on').val();
var mediaobject = {
pk_mdid : pk_mdid,
fk_sfid : fk_sfid,
fk_ppid : fk_ppid,
md_media_url : md_media_url,
md_media_type : md_media_type,
md_is_deleted : md_is_deleted,
md_updated_at : md_updated_at,
md_created_at : md_created_at,
md_col1 : md_col1,
md_col2 : md_col2,
md_col3 : md_col3,
md_col4 : md_col4,
md_col5 : md_col5,
deleted_on : deleted_on,
triggered_on : triggered_on,
}
const token = $('meta[name="token"]').attr("content");
$.ajax({
url: "../../php/media.php",
type: "POST",
headers: {token : token},
data: {
"key":"savedata",
"password":_AUTH_PASSWORD_,
"username":_AUTH_USERNAME_,
media_data: JSON.stringify(mediaobject)
},
dataType:"json",
success: function(data, status, xhr) {
console.log("media id data Save  :success ");
$('#media_pk_mdid').val('');
$('#media_fk_sfid').val('');
$('#media_fk_ppid').val('');
$('#media_md_media_url').val('');
$('#media_md_media_type').val('');
$('#media_md_is_deleted').val('');
$('#media_md_updated_at').val('');
$('#media_md_created_at').val('');
$('#media_md_col1').val('');
$('#media_md_col2').val('');
$('#media_md_col3').val('');
$('#media_md_col4').val('');
$('#media_md_col5').val('');
$('#media_deleted_on').val('');
$('#media_triggered_on').val('');
 },
error: function(data) {
console.log("media id data Save  :error "+data.responseText );
},
complete: function() {
console.log("media id data Save  :complete ");
localStorage.setItem("mediaid",NaN);
window.location.href = "../user/media_list_page.php";
 }
});}
 //////////// Save Data   Close   ////////////////////////////
 //////////// Load All Data    ////////////////////////////
function loadAllmedia(){
  const token = $('meta[name="token"]').attr("content");
 $.ajax({
url: "../../php/media.php",
type: "POST",
headers: {token : token},
data: {
"key":"getalldata",
"password":_AUTH_PASSWORD_,
"username":_AUTH_USERNAME_,
},
dataType:"json",
success: function(data, status, xhr) {
console.log("media id data Load All  :success ");
 $('#user_id').val(data.id);$('#user_fname').val(data.fname);$('#user_mname').val(data.mname);$('#user_lname').val(data.lname);$('#user_email_id').val(data.email_id);$('#user_mob_no').val(data.mob_no);$('#user_isdelete').val(data.isdelete);$('#user_col_1').val(data.col_1);$('#user_col_2').val(data.col_2);$('#user_col_3').val(data.col_3);$('#user_primary').val(data.primary);
if(data.length>0)
 {
for(var i=0;i<data.length;i++){
 $('#myTable').append("<tr><td>"+data[i].pk_mdid+"</td><td>"+data[i].fk_sfid+"</td><td>"+data[i].fk_ppid+"</td><td>"+data[i].md_media_url+"</td><td>"+data[i].md_media_type+"</td><td>"+data[i].md_is_deleted+"</td><td>"+data[i].md_updated_at+"</td><td>"+data[i].md_created_at+"</td><td>"+data[i].md_col1+"</td><td>"+data[i].md_col2+"</td><td>"+data[i].md_col3+"</td><td>"+data[i].md_col4+"</td><td>"+data[i].md_col5+"</td><td>"+data[i].deleted_on+"</td><td>"+data[i].triggered_on+"</td></tr>");
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
console.log("media id data Load All  :error "+data.responseText );
},
complete: function() {
console.log("media id data Load All  :complete ");
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
url: "../../php/media.php",
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
console.log("media id data Update Data  :success ");
 var dataTable =$('#myTable').dataTable();
dataTable.fnClearTable();
dataTable.fnDraw();
dataTable.fnDestroy();
 loadAllmedia();
 },
error: function(data) {
console.log("media id data Update Data :error "+data.responseText );
 },
 complete: function() {
console.log("media id data Update Data  :complete ");
   }
});
  });
}
 function goforupdaterecord(id){
localStorage.setItem("mediaid",id);
window.location.href = "../user/media.php";
}
 //////////// Fetch and  Data     ////////////////////////////
