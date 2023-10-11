<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$token = bin2hex(random_bytes(64));
$_SESSION["token"] = $token;

if (isset($_SESSION['id'])) {
    // $productid = $_GET['productid'];
    // echo("session");
} else {
    // echo("not session");
    $url = __URL_INDEX_;
    header('Location: ' . $url);

}

if (isset($_GET['ppid'])) {
    $ppid = $_GET['ppid'];

}
?>
<!DOCTYPE html>
<html lang="en">

<head>


    <?php
    include('../config/route.php');
    include('compoent/commonheader.php'); ?>
    <script src="../js/addProperty.js"></script>

    <!-- <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap.min.js"></script> -->

    <!-- <script src="../js/datatablehandler.js"></script> -->


</head>

<body>

    <?php
    if (isset($_SESSION["token"])) {
        echo '<meta name="token" content="' . $_SESSION["token"] . '">';

    }
    ?>
    <?php include('../pages/compoent/mainheader.php'); ?>
    <!-- END nav -->
    <section>
        <?php include('../pages/compoent/findingheader.php'); ?>
    </section>

    <section>
        <?php include('../pages/compoent/progressBar1.php'); ?>
    </section>

    <section class="ftco-search">
        <div class="container">
            <div class="row">
                <div class="col-md-12 search-wrap">

                    <form action="#" class="search-property">
                        <input type="hidden" name="pp_id" id="pp_id" value=<?php echo $ppid ?>>
                        <div class="row">
                            <div class="col-md align-items-end">
                                <div class="form-group">
                                    <br />
                                    <select name="" id="property_fk_ptid" class="form-control custom-select">

                                        <option value="0" selected style="color: black;">Select Type</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md align-items-end">
                                <div class="form-group">
                                    <div class="user-input-wrp">
                                        <br />
                                        <input type="text" class="inputText form-control form-control-lg"
                                            id="property_pp_plot_no" />
                                        <span class="floating-label">Plot No</span>
                                    </div>

                                </div>
                            </div>

                        </div>

                        <div class="row">

                            <div class="col-md align-items-end">
                                <div class="form-group">
                                    <div class="user-input-wrp">
                                        <br />
                                        <input type="text" class="inputText form-control form-control-lg"
                                            id="property_pp_ward" />
                                        <span class="floating-label">Ward</span>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md align-items-end">
                                <div class="form-group">
                                    <div class="user-input-wrp">
                                        <br />
                                        <input type="text" class="inputText form-control form-control-lg"
                                            id="property_pp_bulding_name" />
                                        <span class="floating-label">Bulding Name</span>
                                    </div>

                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md align-items-end">
                                <div class="form-group">
                                    <div class="user-input-wrp">
                                        <br />
                                        <input type="text" class="inputText form-control form-control-lg"
                                            id="property_pp_street" />
                                        <span class="floating-label">Street</span>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md align-items-end">
                                <div class="form-group">
                                    <div class="user-input-wrp">
                                        <br />
                                        <input type="text" class="inputText form-control form-control-lg"
                                            id="property_pp_landmark" />

                                        <span class="floating-label">Landmark</span>
                                    </div>

                                </div>
                            </div>
                        </div>


                        <div class="row">

                            <div class="col-md align-items-end">
                                <div class="form-group">
                                    <div class="user-input-wrp">
                                        <br />
                                        <input type="text" class="inputText form-control form-control-lg"
                                            id="property_pp_city" />
                                        <span class="floating-label">City</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md align-items-end">
                                <div class="form-group">
                                    <div class="user-input-wrp">
                                        <br />
                                        <input type="text" class="inputText form-control form-control-lg"
                                            id="property_pp_district" />
                                        <span class="floating-label">District</span>
                                    </div>

                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md align-items-end">
                                <div class="form-group">
                                    <div class="user-input-wrp">
                                        <br />
                                        <input type="text" class="inputText form-control form-control-lg"
                                            id="property_pp_state" />
                                        <span class="floating-label">State</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md align-items-end">
                                <div class="form-group">
                                    <div class="user-input-wrp">
                                        <br />
                                        <input type="text" class="inputText form-control form-control-lg"
                                            id="property_pp_pincode" />
                                        <span class="floating-label">Pincode</span>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="row">
                            <div class="col-md align-items-end">
                                <div class="form-group">
                                    <div class="user-input-wrp">
                                        <br />
                                        <input type="text" class="inputText form-control form-control-lg"
                                            id="property_pp_owner_name" />
                                        <span class="floating-label">Owner Name</span>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md align-items-end">
                                <div class="form-group">
                                    <div class="user-input-wrp">
                                        <br />
                                        <input type="text" class="inputText form-control form-control-lg"
                                            id="property_pp_contact_no" />
                                        <span class="floating-label">Contact No</span>
                                    </div>

                                </div>
                            </div>


                        </div>

                        <div class="row">
                            <div class="col-md align-items-end">
                                <div class="form-group">
                                    <div class="user-input-wrp">
                                        <br />
                                        <input type="text" class="inputText form-control form-control-lg"
                                            id="property_pp_price" />
                                        <span class="floating-label">Price</span>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md align-items-end">
                                <div class="form-group">
                                    <div class="user-input-wrp">
                                        <br />
                                        <input type="text" class="inputText form-control form-control-lg"
                                            id="property_pp_deposite" />
                                        <span class="floating-label">Deposite</span>
                                    </div>

                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md align-items-end">
                                <div class="form-group">
                                    <div class="user-input-wrp">
                                        <br />
                                        <input type="text" class="inputText form-control form-control-lg"
                                            id="property_pp_aggrement_month" />
                                        <span class="floating-label" id="property_pp_aggrement_month_label">Aggrement
                                            Month</span>
                                    </div>

                                </div>


                            </div>
                            <div class="col-md align-items-end">
                                <div class="form-group">
                                    <!-- <input type="text" id="property_pp_aggrement_month"
                                            class="form-control form-control-lg" placeholder="Aggrement Month"> -->
                                </div>


                            </div>

                        </div>
                        <div class="row">
                            <br>
                        </div>
                        <div class="row">
                            <div class="col-md-6 align-items-end">
                            </div>
                            <div class="col-md-6 align-items-end">
                                <div class="form-group" id="btnForProperty">
                                    <script>
                                       
                                        var propertyid = $("#pp_id").val();//parseInt(localStorage.getItem("propertyid"));
                                        alert(isNaN(propertyid) );
                                        if (!isNaN(propertyid)) {
                                            $("#btnForProperty").append(
                                                "<button id='btn_save_property' value='Save' " +
                                                "class= 'next form-control btn btn-primary' > save</button > "
                                            );
                                        } else {
                                            $("#btnForProperty").append(
                                                "<button id='btn_update_property' value='Update' " +
                                                "class= 'next form-control btn btn-primary' > Next </button > "
                                            );
                                        }
                                    </script>
                                    
                                </div>
                            </div>
                            <!-- <div class="col-md align-items-end">
                                <div class="form-group">
                                    <input type="submit" id="btn_update_property" value="Update"
                                        class="form-control btn btn-primary">
                                </div>
                            </div>
                            <div class="col-md align-items-end">
                                <div class="form-group">
                                    <a href=<?php //echo __URL_fileuploadphotoupload_; ?>> <input type="submit"
                                            value="Show Media" class="form-control btn btn-primary"></a>
                                </div>
                            </div> -->

                        </div>


                    </form>
                </div>

                <div>
                    <table>

                    </table>
                </div>
            </div>
        </div>
    </section>


    <?php include('../pages/compoent/footer.php'); ?>

    <!-- loader -->
    <!-- <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#F96D00" />
        </svg></div> -->


    <!-- <script src="../js/jquery.min.js"></script>
    <script src="../js/jquery-migrate-3.0.1.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.easing.1.3.js"></script>
    <script src="../js/jquery.waypoints.min.js"></script>
    <script src="../js/jquery.stellar.min.js"></script>
    <script src="../js/owl.carousel.min.js"></script>
    <script src="../js/jquery.magnific-popup.min.js"></script>
    <script src="../js/aos.js"></script>
    <script src="../js/jquery.animateNumber.min.js"></script>
    <script src="../js/bootstrap-datepicker.js"></script>
    <script src="../js/jquery.timepicker.min.js"></script>
    <script src="../js/scrollax.min.js"></script>
    
    <script src="../js/google-map.js"></script>
    <script src="../js/main.js"></script>
    <script src="../js/index.js"></script> -->
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</body>

</html>