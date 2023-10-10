<?php
include('../config/dbservice.php');
include('../utils/php/loghandler.php');
$loggeroject = new Logger("property");
$dbservice = new DB();
if ($_POST['username'] == _AUTH_USERNAME_ && $_POST['password'] == _AUTH_PASSWORD_) {
    $loggeroject->printLogInClassfunction("In", "Auth Switch", ".tbl_property.php");
    switch ($_POST['key']) {

        case _LOAD_USER_COUNT_:
            loadUserCount($dbservice);
            break;
        case _LOAD_RECENT_:
            loadRecent($dbservice);
            break;


    }
} else {
    echo ('HTTP/1.0 401 Unauthorized');
}

function loadUserCount($dbservice)
{


    $q = "SELECT * FROM tbl_registration where rg_is_deleted = false;";
    $mydat = $dbservice->executeDbFetchCountQuery($q);
    $data['userCount'] = json_encode($mydat);

    ////////////////////lone/////////////////////////////////////////////

    $loneQuery = "SELECT * FROM tbl_lone_request where is_deleted = false;";
    $loandata = $dbservice->executeDbFetchCountQuery($loneQuery);
    $data['loanCount'] = json_encode($loandata);

    ////////////////////////property////////////////////////////////////
    $ppQuery = "SELECT * FROM tbl_property where pp_is_deleted = false;";
    $ppdata = $dbservice->executeDbFetchCountQuery($ppQuery);
    $data['ppCount'] = json_encode($ppdata);

    //////////////////////////////media///////////////////////////////

    $mdQuery = "SELECT * FROM tbl_media where md_is_deleted=false ;";
    $mddata = $dbservice->executeDbFetchCountQuery($mdQuery);
    $data['mdCount'] = json_encode($mddata);

    echo json_encode($data);

}


function loadRecent($dbservice)
{

    $q = "SELECT * FROM tbl_property where pp_is_deleted = false order by pk_ppid desc;";
    $mydat = $dbservice->executeDbFetchDataQuery($q);
    $row = $mydat->fetchAll(PDO::FETCH_ASSOC);

    $loneQuery = "SELECT * FROM tbl_lone_request where is_deleted = false order by lr_id desc ;";
    $loandata = $dbservice->executeDbFetchDataQuery($loneQuery);
    $row1 = $loandata->fetchAll(PDO::FETCH_ASSOC);

    // echo (json_encode($row));
    
    // echo (json_encode($row1));
    if ($row || $row1) {
        $data['status'] = true;
        $data['data'] = json_encode($row);
        $data['data1'] = json_encode($row1);
        echo json_encode($data);
    } else {
        $data['status'] = false;
        $data['data'] = json_encode($row);
        echo json_encode($data);
    }

}



?>