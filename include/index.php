<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();//Start session if none exists/already started
}
$headers = getallheaders();

include('../config/dbservice.php');
include('../utils/php/loghandler.php');
$loggeroject = new Logger("property");
$dbservice = new DB();
// echo ('token  ' . isset($headers['token']));
if (isset($headers['token'])) {
	$header_token = $headers['token'];
	if ($header_token == $_SESSION['token']) {
        if ($_POST['username'] == "shankar" && $_POST['password'] == "shankar") {
            $loggeroject->printLogInClassfunction("In", "Auth Switch", ".tbl_property.php");
            switch ($_POST['key']) {
                case _SHOW_MEDIA_:
                    showMediaPrice($dbservice);
                    break;
                case "loadcount":
                    loadCount($dbservice);
                    break;
                case _LOAD_DISTINCT_LANDMARK_:
                    loadDistinctLandmark($dbservice);
                    break;
        
        
        
            }
        } else {
            echo ('HTTP/1.0 401 Unauthorized');
        }
    }
	else{
		echo "ERROR: Tokens dont match";
		exit;
	}
}

function loadCount($dbservice)
{
    # code...
    $q = "SELECT * FROM `tbl_registration` WHERE `rg_status` = 'Active'";
    $mydat = $dbservice->executeDbFetchCountQuery($q);
    $data['customercount'] = json_encode($mydat);

    $ppQuery = "SELECT * FROM `tbl_property` WHERE pp_status =7";
    $ppdata = $dbservice->executeDbFetchCountQuery($ppQuery);
    $data['propertycount'] = json_encode($ppdata);

    $loneQuery = "SELECT * FROM `tbl_lone_request`";
    $loandata = $dbservice->executeDbFetchCountQuery($loneQuery);
    $data['loancount'] = json_encode($loandata);

    echo json_encode($data);

}

function showMediaPrice($dbservice)
{

    $q = "SELECT * FROM tbl_property pp join tbl_media md on pp.pk_ppid = md.fk_ppid where pp_price > 10000 group by pp.pk_ppid  order by md.pk_mdid";
    // echo $q;
    $mydat = $dbservice->executeDbFetchDataQuery($q);
    $row = $mydat->fetchAll(PDO::FETCH_ASSOC);
    if ($row) {
        $data['status'] = true;
        $data['data'] = json_encode($row);
        echo json_encode($data);
    } else {
        $data['status'] = false;
        $data['data'] = json_encode($row);
        echo json_encode($data);
    }
}


function showMediaType($dbservice)
{

    $q = "SELECT * FROM tbl_property pp join tbl_media md on pp.pk_ppid = md.fk_ppid where fk_ptid = 1 group by pp.pk_ppid  order by md.pk_mdid";
    $mydat = $dbservice->executeDbFetchDataQuery($q);
    $row = $mydat->fetchAll(PDO::FETCH_ASSOC);
    if ($row) {
        $data['status'] = true;
        $data['data'] = json_encode($row);
        echo json_encode($data);
    } else {
        $data['status'] = false;
        $data['data'] = json_encode($row);
        echo json_encode($data);
    }
}

function loadDistinctLandmark($dbservice)
{

    $q = "SELECT DISTINCT(pp_landmark) FROM tbl_property;";
    $mydat = $dbservice->executeDbFetchDataQuery($q);
    $row = $mydat->fetchAll(PDO::FETCH_ASSOC);
    if ($row) {
        $data['status'] = true;
        $data['data'] = json_encode($row);
        echo json_encode($data);
    } else {
        $data['status'] = false;
        $data['data'] = json_encode($row);
        echo json_encode($data);
    }
}

?>