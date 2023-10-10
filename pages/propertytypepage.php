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
<script src="..\js\propertytype.js">
</script>
<link rel="stylesheet" href="..\css\propertytype.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo __WEBSITE__TITLE__ ;?></title>
</head>

<body>
<form >

<table><tr>
    <td>
          <label for="propertytype_pk_ptid">pk_ptid</label>
    </td>
    </tr>
    <tr><td>
        <input type="text" id="propertytype_pk_ptid" >
    </td>
    </tr><tr>
    <td>
          <label for="propertytype_pt_name">pt_name</label>
    </td>
    </tr>
    <tr><td>
        <input type="text" id="propertytype_pt_name" >
    </td>
    </tr><tr>
    <td>
          <label for="propertytype_pt_is_deleted">pt_is_deleted</label>
    </td>
    </tr>
    <tr><td>
        <input type="text" id="propertytype_pt_is_deleted" >
    </td>
    </tr><tr>
    <td>
          <label for="propertytype_pt_created_at">pt_created_at</label>
    </td>
    </tr>
    <tr><td>
        <input type="text" id="propertytype_pt_created_at" >
    </td>
    </tr><tr>
    <td>
          <label for="propertytype_pt_updated_at">pt_updated_at</label>
    </td>
    </tr>
    <tr><td>
        <input type="text" id="propertytype_pt_updated_at" >
    </td>
    </tr><tr>
    <td>
          <label for="propertytype_pt_col1">pt_col1</label>
    </td>
    </tr>
    <tr><td>
        <input type="text" id="propertytype_pt_col1" >
    </td>
    </tr><tr>
    <td>
          <label for="propertytype_pt_col2">pt_col2</label>
    </td>
    </tr>
    <tr><td>
        <input type="text" id="propertytype_pt_col2" >
    </td>
    </tr><tr>
    <td>
          <label for="propertytype_pt_col3">pt_col3</label>
    </td>
    </tr>
    <tr><td>
        <input type="text" id="propertytype_pt_col3" >
    </td>
    </tr><tr>
    <td>
          <label for="propertytype_pt_col4">pt_col4</label>
    </td>
    </tr>
    <tr><td>
        <input type="text" id="propertytype_pt_col4" >
    </td>
    </tr><tr>
    <td>
          <label for="propertytype_pt_col5">pt_col5</label>
    </td>
    </tr>
    <tr><td>
        <input type="text" id="propertytype_pt_col5" >
    </td>
    </tr><tr>
    <td>
          <label for="propertytype_deleted_on">deleted_on</label>
    </td>
    </tr>
    <tr><td>
        <input type="text" id="propertytype_deleted_on" >
    </td>
    </tr><tr>
    <td>
          <label for="propertytype_triggered_on">triggered_on</label>
    </td>
    </tr>
    <tr><td>
        <input type="text" id="propertytype_triggered_on" >
    </td>
    </tr></table>
    <br>
    <br>
<table>
    <tr><td>
        <input type="submit" id="btn_save_propertytype"  value="Save">
    </td>
    <td>
        <input type="submit" id="btn_delete_propertytype"  value="Delete">
    </td>
    <td>
        <input type="submit" id="btn_update_propertytype"  value="Update">
    </td>
    <td>
        <input type="submit" id="btn_loadall_propertytype"  value="Load All">
    </td>
    <td>
        <input type="submit" id="btn_load_propertytype"  value="Load Single">
    </td>
    </tr>
</table>
</form>

</body>

</html> 