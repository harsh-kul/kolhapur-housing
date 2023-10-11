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
     <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- Datatable css -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
<!-- Datatable JS -->
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>


<script src="..\js\config.js"></script>
<script src="..\js\lonetype.js">
</script>
<link rel="stylesheet" href="..\css\lonetype.css">
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
<form >

<table><tr>
    <td>
          <label for="lonetype_lt_id">lt_id</label>
    </td>
    </tr>
    <tr><td>
        <input type="text" id="lonetype_lt_id" >
    </td>
    </tr><tr>
    <td>
          <label for="lonetype_lt_name">lt_name</label>
    </td>
    </tr>
    <tr><td>
        <input type="text" id="lonetype_lt_name" >
    </td>
    </tr><tr>
    <td>
          <label for="lonetype_created_at">created_at</label>
    </td>
    </tr>
    <tr><td>
        <input type="text" id="lonetype_created_at" >
    </td>
    </tr><tr>
    <td>
          <label for="lonetype_updated_at">updated_at</label>
    </td>
    </tr>
    <tr><td>
        <input type="text" id="lonetype_updated_at" >
    </td>
    </tr><tr>
    <td>
          <label for="lonetype_is_deleted">is_deleted</label>
    </td>
    </tr>
    <tr><td>
        <input type="text" id="lonetype_is_deleted" >
    </td>
    </tr><tr>
    <td>
          <label for="lonetype_deleted_on">deleted_on</label>
    </td>
    </tr>
    <tr><td>
        <input type="text" id="lonetype_deleted_on" >
    </td>
    </tr><tr>
    <td>
          <label for="lonetype_triggered_on">triggered_on</label>
    </td>
    </tr>
    <tr><td>
        <input type="text" id="lonetype_triggered_on" >
    </td>
    </tr></table>
    <br>
    <br>
<table>
    <tr><td>
        <input type="submit" id="btn_save_lonetype"  value="Save">
    </td>
    <td>
        <input type="submit" id="btn_delete_lonetype"  value="Delete">
    </td>
    <td>
        <input type="submit" id="btn_update_lonetype"  value="Update">
    </td>
    <td>
        <input type="submit" id="btn_loadall_lonetype"  value="Load All">
    </td>
    <td>
        <input type="submit" id="btn_load_lonetype"  value="Load Single">
    </td>
    </tr>
</table>
</form>

</body>

</html> 