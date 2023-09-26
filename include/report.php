<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();//Start session if none exists/already started
}
$headers = getallheaders();
include('../config/dbservice.php');
include('../utils/php/loghandler.php');
$loggeroject = new Logger("property");
$dbservice = new DB();
if (isset($headers['token'])) {
	$header_token = $headers['token'];
	if ($header_token == $_SESSION['token']) {
        if ($_POST['username'] == _AUTH_USERNAME_ && $_POST['password'] == _AUTH_PASSWORD_) {
            $loggeroject->printLogInClassfunction("In", "Auth Switch", ".tbl_property.php");
            switch ($_POST['key']) {
        
                case _LOADREPORTDATEWISE_:
                    fetchDateWiseDataForReport($dbservice);
                    break;
        
                case _LOADREPORTDATESTATUSWISE_:
                    fetchDateWiseStatusDataForReport($dbservice);
                    break;
        
                case _LOADREPORTDATEWISEUSER_:
                    fetchDateWiseUserReport($dbservice);
                    break;
        
                case _LOADDATEWISELONEREPORT_:
                    fetchDateWiseLoneReport($dbservice);
                    break;
        
                case _LOADLOANREQUESTREPORT_:
                    fetchLoneRequestReport($dbservice);
                    break;
                case _LOADLONEREQUESTSTATUS_:
                    fetchLoneRequestStatusReport($dbservice);
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



function fetchDateWiseDataForReport($dbservice)
{

    $tbl_propertyobject = $_POST['reportData'];
    echo ($tbl_propertyobject);
    $tbl_propertyobjectarray = json_decode($tbl_propertyobject, true);
    $fromDate = $tbl_propertyobjectarray['fromDate'];
    $toDate = $tbl_propertyobjectarray['toDate'];
    $status = $tbl_propertyobjectarray['statusId'];
    // print_r($tbl_propertyobjectarray);

    if (empty($status)) {
        $q = "SELECT * FROM tbl_property pt join tbl_registration rg on pt.fk_usid = rg.pk_rgid ".
                "join tbl_property_type ptype on pt.fk_ptid = ptype.pk_ptid  ".
                "where DATE_FORMAT(pp_created_at, '%Y-%m-%d %T') >=  DATE_FORMAT('" . $fromDate . " 00:00:00', '%Y-%m-%d %T') and  ".
                "DATE_FORMAT(pp_created_at, '%Y-%m-%d %T') <=  DATE_FORMAT('" . $toDate . " 00:00:00', '%Y-%m-%d %T');";
        echo ($q);
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
    } else {
        $q = "SELECT * FROM tbl_property pt join tbl_registration rg on pt.fk_usid = rg.pk_rgid ".
        "join tbl_property_type ptype on pt.fk_ptid = ptype.pk_ptid  ".
        "where DATE_FORMAT(pp_created_at, '%Y-%m-%d %T') >=  DATE_FORMAT('" . $fromDate . " 00:00:00', '%Y-%m-%d %T') and  ".
        "DATE_FORMAT(pp_created_at, '%Y-%m-%d %T') <=  DATE_FORMAT('" . $toDate . " 00:00:00', '%Y-%m-%d %T') and pp_status = '". $status ."';"; //. $status . ";";
        echo ($q);
        $mydat = $dbservice->executeDbFetchDataQuery($q);
        $row = $mydat->fetchAll(PDO::FETCH_ASSOC);
        $i = 0;
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


}
/**
 * Summary of fetchDateWiseStatusDataForReport
 * fetch property between 2 dates with status
 */
function fetchDateWiseStatusDataForReport($dbservice)
{

    $tbl_propertyobject = $_POST['reportData'];
    echo ($tbl_propertyobject);
    $tbl_propertyobjectarray = json_decode($tbl_propertyobject, true);
    $fromDate = $tbl_propertyobjectarray['fromDate'];
    $toDate = $tbl_propertyobjectarray['toDate'];
    $status = $tbl_propertyobjectarray['status'];
    print_r($tbl_propertyobjectarray);

    $q = "SELECT * FROM tbl_property where DATE_FORMAT(pp_created_at, '%Y-%m-%d %T') >=  DATE_FORMAT('" . $fromDate . " 00:00:00', '%Y-%m-%d %T') and DATE_FORMAT(pp_created_at, '%Y-%m-%d %T') <=  DATE_FORMAT('" . $toDate . " 23:59:59', '%Y-%m-%d %T') and `pp_status` = " . $status . ";";
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


/**
 * Summary of fetchDateWiseUserReport
 * load active users between 2 dates
 */
function fetchDateWiseUserReport($dbservice)
{

    $tbl_propertyobject = $_POST['reportData'];
    // echo ($tbl_propertyobject);
    $tbl_propertyobjectarray = json_decode($tbl_propertyobject, true);
    $fromDate = $tbl_propertyobjectarray['fromDate'];
    $toDate = $tbl_propertyobjectarray['toDate'];
    // print_r($tbl_propertyobjectarray);

    $q = "SELECT * FROM tbl_registration rg left join tbl_staff stf on rg.fk_sfid = stf.pk_sfid  where DATE_FORMAT(rg.rg_created_at, '%Y-%m-%d %T') >=  DATE_FORMAT('" . $fromDate . " 00:00:00', '%Y-%m-%d %T') and DATE_FORMAT(rg.rg_created_at, '%Y-%m-%d %T') <=  DATE_FORMAT('" . $toDate . " 23:59:59', '%Y-%m-%d %T') and rg_status like 'Active';";
    // echo ($q);
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


/**
 * Summary of fetchDateWiseLoneReport
 * fetch lone request between 2 dates
 */
function fetchDateWiseLoneReport($dbservice)
{

    $tbl_propertyobject = $_POST['reportData'];
    echo ($tbl_propertyobject);
    $tbl_propertyobjectarray = json_decode($tbl_propertyobject, true);
    $fromDate = $tbl_propertyobjectarray['fromDate'];
    $toDate = $tbl_propertyobjectarray['toDate'];
    $lonetype = $tbl_propertyobjectarray['lonetype'];
    print_r($tbl_propertyobjectarray);

    if (empty($lonetype)) {
        $q = "SELECT * FROM tbl_lone_request lr join tbl_registration rg on lr.fk_regi_id = rg.pk_rgid   ".
                "join tbl_lone_type ltype on lr.lr_lone_type_id = ltype.lt_id  ".
                "join tbl_status st on lr.fk_stid = st.id   ".
                "where DATE_FORMAT(lr.created_on, '%Y-%m-%d %T') >=  DATE_FORMAT('" . $fromDate . " 00:00:00', '%Y-%m-%d %T') and  ".
                "DATE_FORMAT(lr.created_on, '%Y-%m-%d %T') <=  DATE_FORMAT('" . $toDate . " 00:00:00', '%Y-%m-%d %T');";

        echo ($q);
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
    } else {
        $q = "SELECT * FROM tbl_lone_request lr join tbl_registration rg on lr.fk_regi_id = rg.pk_rgid   ".
        "join tbl_lone_type ltype on lr.lr_lone_type_id = ltype.lt_id   ".
        "join tbl_status st on lr.fk_stid = st.id   ".
        "where DATE_FORMAT(lr.created_on, '%Y-%m-%d %T') >=  DATE_FORMAT('" . $fromDate . " 00:00:00', '%Y-%m-%d %T') and ".
        "DATE_FORMAT(lr.created_on, '%Y-%m-%d %T') <=  DATE_FORMAT('" . $toDate . " 00:00:00', '%Y-%m-%d %T') and lr_lone_type_id = '$lonetype';";

        // echo ($q);
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

}



/**
 * Summary of fetchDateStatusWiseLoneReport
 * fetch lone request between 2 dates
 */
function fetchDateStatusWiseLoneReport($dbservice)
{

    $tbl_propertyobject = $_POST['reportData'];
    echo ($tbl_propertyobject);
    $tbl_propertyobjectarray = json_decode($tbl_propertyobject, true);
    $fromDate = $tbl_propertyobjectarray['fromDate'];
    $toDate = $tbl_propertyobjectarray['toDate'];
    $statusId = $tbl_propertyobjectarray['statusId'];
    print_r($tbl_propertyobjectarray);

    $q = "SELECT * FROM tbl_lone_request where DATE_FORMAT(created_on, '%Y-%m-%d %T') >=  DATE_FORMAT('" . $fromDate . " 00:00:00', '%Y-%m-%d %T') and DATE_FORMAT(created_on, '%Y-%m-%d %T') <=  DATE_FORMAT('" . $toDate . " 23:59:59', '%Y-%m-%d %T') and lr_lone_type_id = '$statusId';";

    echo ($q);
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

/**
 * Summary of fetchUserPropertyReport
 * fetch property of specific user
 */
function fetchUserPropertyReport($dbservice)
{

    $tbl_propertyobject = $_POST['reportData'];
    echo ($tbl_propertyobject);
    $tbl_propertyobjectarray = json_decode($tbl_propertyobject, true);
    $userId = $tbl_propertyobjectarray['userId'];
    $statusId = $tbl_propertyobjectarray['statusId'];
    print_r($tbl_propertyobjectarray);

    $q = "SELECT * FROM tbl_property where fk_usid = '$userId' and pp_status  = '$statusId';";
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


/**
 * Summary of fetchLoneRequestReport
 * fetch lone of specific user
 */
function fetchLoneRequestReport($dbservice)
{

    $tbl_propertyobject = $_POST['reportData'];
    echo ($tbl_propertyobject);
    $tbl_propertyobjectarray = json_decode($tbl_propertyobject, true);
    $userId = $tbl_propertyobjectarray['userId'];
    $statusId = $tbl_propertyobjectarray['statusId'];
    print_r($tbl_propertyobjectarray);

    $q = "SELECT * FROM tbl_lone_request where lr_id = '$userId' ;";
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



/**
 * Summary of fetchLoneRequestStatusReport
 * fetch lone with user ans status
 */
function fetchLoneRequestStatusReport($dbservice)
{

    $tbl_propertyobject = $_POST['reportData'];
    echo ($tbl_propertyobject);
    $tbl_propertyobjectarray = json_decode($tbl_propertyobject, true);
    $userId = $tbl_propertyobjectarray['userId'];
    $statusId = $tbl_propertyobjectarray['statusId'];
    print_r($tbl_propertyobjectarray);

    $q = "SELECT * FROM tbl_lone_request where lr_id = '$userId' and lr_lone_type_id = '$statusId';";
    $mydat = $dbservice->executeDbFetchDataQuery($q);
    $row = $mydat->fetchAll(PDO::FETCH_ASSOC);
    if ($row) {
        $data['status'] = true;
        $data['data'] = json_encode($row);
        echo ($row->fk_usid);
        echo json_encode($data);
    } else {
        $data['status'] = false;
        $data['data'] = json_encode($row);
        echo json_encode($data);
    }
}

?>