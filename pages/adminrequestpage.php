<?php 
if (session_status() == PHP_SESSION_NONE) {
	session_start();
}

// if (isset($_GET['get_token']) && empty($_SESSION["token"])) {
	$token = bin2hex(random_bytes(64));
	$_SESSION["token"] = $token;
// }

// if (isset($_GET['kill_token'])) {
// 	unset($_SESSION["token"]);
// 	session_destroy();
// }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- jQuery library -->
     <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
     <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
     <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- Datatable css -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">

<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>


<script src="..\js\config.js"></script>
<script src="..\js\adminrequest.js"></script>
<link rel="stylesheet" href="..\css\adminrequest.css">
<script src="../js/loaderhandler.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo __WEBSITE__TITLE__ ;?></title>
</head>

<body>
    
<?php
	if (isset($_SESSION["token"])) {
		echo '<meta name="token" content="' . $_SESSION["token"] . '">';

	}
	?>
    <script>
        $(document).ready(function () {
        var screenLoader = new ScreenLoaderHandler("displayScreen","loadingScreen");});
    </script>

<?php include('../pages/compoent/loadingpage.php') ?>

<section class="displayScreen">
<form >

<table>
 <tr>
    <td>
          <label for="adminrequest_pp_req_id">pp_req_id</label>
    </td>
    </tr>
    <tr><td>
        <input type="text" id="adminrequest_pp_req_id" >
    </td>
    </tr><tr> 
    <td>
          <label for="adminrequest_req_regi_id">req_regi_id</label>
    </td>
    </tr>
    <tr><td>
        <input type="text" id="adminrequest_req_regi_id" >
    </td>
    </tr><tr>
    <td>
          <label for="adminrequest_req_pp_id">req_pp_id</label>
    </td>
    </tr>
    <tr><td>
        <input type="text" id="adminrequest_req_pp_id" >
    </td>
    </tr><tr>
    <td>
          <label for="adminrequest_reg_status_id">reg_status_id</label>
    </td>
    </tr>
    <tr><td>
        <input type="text" id="adminrequest_reg_status_id" >
    </td>
    </tr><tr>
    <td>
          <label for="adminrequest_updated_at">updated_at</label>
    </td>
    </tr>
    <tr><td>
        <input type="text" id="adminrequest_updated_at" >
    </td>
    </tr><tr>
    <td>
          <label for="adminrequest_created_at">created_at</label>
    </td>
    </tr>
    <tr><td>
        <input type="text" id="adminrequest_created_at" >
    </td>
    </tr><tr>
    <td>
          <label for="adminrequest_is_deleted">is_deleted</label>
    </td>
    </tr>
    <tr><td>
        <input type="text" id="adminrequest_is_deleted" >
    </td>
    </tr><tr>
    <td>
          <label for="adminrequest_req_ppowner_id">req_ppowner_id</label>
    </td>
    </tr>
    <tr><td>
        <input type="text" id="adminrequest_req_ppowner_id" >
    </td>
    </tr><tr>
    <td>
          <label for="adminrequest_req_remark">req_remark</label>
    </td>
    </tr>
    <tr><td>
        <input type="text" id="adminrequest_req_remark" >
    </td>
    </tr><tr>
    <td>
          <label for="adminrequest_req_col1">req_col1</label>
    </td>
    </tr>
    <tr><td>
        <input type="text" id="adminrequest_req_col1" >
    </td>
    </tr><tr>
    <td>
          <label for="adminrequest_req_col2">req_col2</label>
    </td>
    </tr>
    <tr><td>
        <input type="text" id="adminrequest_req_col2" >
    </td>
    </tr><tr>
    <td>
          <label for="adminrequest_req_col3">req_col3</label>
    </td>
    </tr>
    <tr><td>
        <input type="text" id="adminrequest_req_col3" >
    </td>
    </tr><tr>
    <td>
          <label for="adminrequest_req_col4">req_col4</label>
    </td>
    </tr>
    <tr><td>
        <input type="text" id="adminrequest_req_col4" >
    </td>
    </tr><tr>
    <td>
          <label for="adminrequest_req_col5">req_col5</label>
    </td>
    </tr>
    <tr><td>
        <input type="text" id="adminrequest_req_col5" >
    </td>
    </tr><tr>
    <td>
          <label for="adminrequest_deleted_on">deleted_on</label>
    </td>
    </tr>
    <tr><td>
        <input type="text" id="adminrequest_deleted_on" >
    </td>
    </tr><tr>
    <td>
          <label for="adminrequest_triggered_on">triggered_on</label>
    </td>
    </tr>
    <tr><td>
        <input type="text" id="adminrequest_triggered_on" >
    </td>
    </tr><tr>
    <td>
          <label for="adminrequest_req_admin_id">req_admin_id</label>
    </td>
    </tr>
    <tr><td>
        <input type="text" id="adminrequest_req_admin_id" >
    </td>
    </tr></table>
    <br>
    <br>
<table>
    <tr><td>
        <input type="submit" id="btn_save_adminrequest"  value="Save">
    </td>
    <td>
        <input type="submit" id="btn_delete_adminrequest"  value="Delete">
    </td>
    <td>
        <input type="submit" id="btn_update_adminrequest"  value="Update">
    </td>
    <td>
        <input type="submit" id="btn_loadall_adminrequest"  value="Load All">
    </td>
    <td>
        <input type="submit" id="btn_load_adminrequest"  value="Load Single">
    </td>
    </tr>
</table>
</form>
    </section>
</body>

</html> 