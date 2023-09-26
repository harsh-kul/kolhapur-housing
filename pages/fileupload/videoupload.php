<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
$token = bin2hex(random_bytes(64));
$_SESSION["token"] = $token;

include('../../config/route.php');
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php echo __WEBSITE__TITLE__; ?>
    </title>
    <?php include('../compoent/commonheader.php'); ?>
    <link rel="stylesheet" href="../../css/internal/dashboard.css">
    <link rel="stylesheet" href="../../css/internal/dashboard_index.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="http://hayageek.github.io/jQuery-Upload-File/4.0.11/uploadfile.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="http://hayageek.github.io/jQuery-Upload-File/4.0.11/jquery.uploadfile.min.js"></script>
    <script src="../../js/config.js"></script>
    <script src="../../js/loaderhandler.js"></script>

</head>
<?php

if (isset($_GET['ppid'])) {
    $ppid = $_GET['ppid'];
    // echo $ppid;
} else {
    $location = __URL_propertypagepage_;
    header('Location:' . $location);
}
?>

<body>
    <?php
    if (isset($_SESSION["token"])) {
        echo '<meta name="token" content="' . $_SESSION["token"] . '">';

    }
    ?>
    <?php include('../compoent/mainheader.php'); ?>
    <section>
        <?php include('../compoent/findingheader.php'); ?>
    </section>
    <section>
        <?php include('../../pages/compoent/progressBar1.php'); ?>
    </section>
    <section class="displayScreen">
        <!-- Dashboard -->
        <div class="d-flex flex-column flex-lg-row h-lg-full bg-surface-secondary">


            <!-- Main content -->
            <div class="h-screen flex-grow-1 overflow-y-lg-auto">
                <!-- Header -->
                <header class="bg-surface-primary border-bottom pt-6">
                    <div class="container-fluid">
                        <div class="mb-npx">
                            <div class="row align-items-center">
                                <div class="col-sm-6 col-12 mb-4 mb-sm-0">
                                    <!-- Title -->
                                    <h1 class="h2 mb-0 ls-tight">Video Upload</h1>
                                </div>
                                <!-- Actions -->

                            </div>

                        </div>
                    </div>
                </header>
                <!-- Main -->
                <main class="py-6 bg-surface-secondary">
                    <div class="container-fluid">
                        <!-- Card stats -->
                        <div class="row g-6 mb-6">
                            <div class="col-xl-3 col-sm-6 col-12">
                                <div class="card shadow border-0">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col">
                                                <span class="h6 font-semibold text-muted text-sm d-block mb-2">Uploaded
                                                    Images</span>
                                                <span class="h3 font-bold mb-0" id="imagect">eeee</span>
                                            </div>
                                            <div class="col-auto">
                                                <div
                                                    class="icon icon-shape bg-tertiary text-white text-lg rounded-circle">
                                                    <i class="bi bi-cloud-arrow-up"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-2 mb-0 text-sm">
                                            <span class="badge badge-pill bg-soft-success text-success me-2">
                                                <i class="bi bi-arrow-up me-1"></i><span id="totalphotocount"></span>
                                            </span>
                                            <span class="text-nowrap text-xs text-muted">remaining photo</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-sm-6 col-12">
                                <div class="card shadow border-0">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col">
                                                <span class="h6 font-semibold text-muted text-sm d-block mb-2">Uploaded
                                                    Video</span>
                                                <span class="h3 font-bold mb-0" id="uploadedVideocount">1</span>
                                            </div>
                                            <div class="col-auto">
                                                <div
                                                    class="icon icon-shape bg-primary text-white text-lg rounded-circle">
                                                    <i class="bi bi-file-earmark-arrow-up-fill"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-2 mb-0 text-sm">
                                            <span class="badge badge-pill bg-soft-success text-success me-2">
                                                <i class="bi bi-arrow-up me-1"></i><span id="totalVideocount"></span>
                                            </span>
                                            <span class="text-nowrap text-xs text-muted"> video pending</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-sm-6 col-12">
                                <div class="card shadow border-0">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col">
                                                <span class="h6 font-semibold text-muted text-sm d-block mb-2">Media
                                                    Size</span>
                                                <span class="h3 font-bold mb-0" id="uploadedphotosize">100 Mb</span>
                                            </div>
                                            <div class="col-auto">
                                                <div class="icon icon-shape bg-info text-white text-lg rounded-circle">
                                                    <i class="bi bi-clock-history"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-2 mb-0 text-sm">
                                            <span class="badge badge-pill bg-soft-danger text-danger me-2">
                                                <i class="bi bi-arrow-down me-1" id="totaluploadedphotosize"></i> mb
                                            </span>
                                            <span class="text-nowrap text-xs text-muted">free space </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="card shadow border-0 mb-7">
                            <div class="card-header">
                                <h5 class="mb-0">Upload Photo</h5>
                            </div>
                            <section>
                                <div class="card-body">
                                    <form id="submit_form">

                                        <div class="col-lg-6 col-sm-6 col-12 col-xl-12">

                                            <div class="input-group">
                                                <label class="input-group-btn">
                                                    <span class="btn btn-primary">
                                                        Browse&hellip; <input type="file" style="display: none;"
                                                            name="myfile" id="upload_file" accept="video/*">
                                                    </span>
                                                </label>
                                                <input type="hidden" name="mediatype" value="VID">
                                                <input type="hidden" name="sf_id" id="sf_id" value=<?php echo $_SESSION['id'] ?>>
                                                <input type="hidden" name="pp_id" id="pp_id" value=<?php echo $ppid ?>>
                                                <input type="text" class="form-control input-normal .text-right"
                                                    style="margin-left: 10px; width: 300px;" readonly>
                                                <input type="submit" name="upload_button" id="upload_btn" value="Upload"
                                                    class="btn btn-warning" style="margin-left: 10px;" />
                                            </div>

                                        </div>

                                    </form>

                                </div>
                            </section>
                            <div class="table-responsive">
                                <table class="table table-hover table-nowrap">
                                    <thead class="thead-light">
                                        <tr>
                                            <th scope="col" colspan="4">Video List</th>


                                        </tr>
                                    </thead>
                                    <tbody id="videotbody">

                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </main>
                <section>
                    <div class="col-md align-items-end">
                        <div class="form-group">
                            <button id="submit" value="submit" class="form-control btn btn-primary">
                                submit</button>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>
    <?php include('../compoent/aboutus.php'); ?>
    <?php include('../compoent/placemap.php'); ?>
    <?php include('../compoent/footer.php'); ?>

</body>

</html>
<style>
    .element.style {
        vertical-align: top;
        width: 600px;
    }
</style>
<script>

    $(document).ready(function () {
        var screenLoader = new ScreenLoaderHandler("displayScreen");

        loadPhotoMedia();
        fieEventProcessing();

        $("#submit").click(function () {

            console.log("property Update Clicked");
            updateproperty();
        });
        $("#submit_form").on("submit", function (e) {
            e.preventDefault();
            var formData = new FormData(this);
            phtoUpload(formData);
        });


    });

    function updateproperty() {
        $(document).ready(function () {
            var ppid = $("#pp_id").val();
            const token = $('meta[name="token"]').attr("content");
            $.ajax({
                url: __URL_include_property_,
                type: "POST",
                headers: { token: token },
                data: {
                    key: "propertyStatusUpdate",
                    password: _AUTH_PASSWORD_,
                    username: _AUTH_USERNAME_,
                    ppid: ppid,
                },
                dataType: "json",
                success: function (jsondata, status, xhr) {
                    console.log(jsondata);
                    console.log("property id data Update  :success ");
                    window.location.href = __URL_INDEX_;

                },
                error: function (error) {
                    console.log("property id data Update  :error" + error.responseText);
                },
                complete: function () {
                    console.log("property id data Update  :complete  ");
                    // localStorage.setItem("propertyid", NaN);
                    // window.location.href = __URL_propertylistpage_;
                },
            });
        });
    }
    // functions 
    function viewImage(id) {
        //   alert(id);
    }

    function deleteImage(id, name) {
        //   alert(id);
        const token = $('meta[name="token"]').attr("content");
        $.ajax({
            url: "delete.php",
            type: "POST",
            headers: { token: token },
            data: { name: name, mdid: id, mediatype: "vid" },
            dataType: "json",
            success: function (jsondata) {
                console.log(jsondata);
                //  var data= JSON.parse(jsondata["data"]);


            }, error: function (data, status, xhr) {
                console.log("registration id data error  :error " + data.responseText);
            }, complete: function () {
                console.log("property id data complte  :complete ");
                localStorage.setItem("propertyid", NaN);
                loadPhotoMedia();
                location.reload(true);
            },
        });
    }
    function loadPhotoMedia() {
        var totaldatabasephotosizecount = 0;
        var ppid = $("#pp_id").val();
        const token = $('meta[name="token"]').attr("content");
        $.ajax({
            url: "load.php",
            headers: { token: token },
            type: "POST",
            dataType: "json",
            data: {
                pp_id: ppid
            },
            success: function (jsondata) {
                console.log(jsondata);
                var data = JSON.parse(jsondata["videodata"]);
                var str = "";
                console.log(data.length);
                for (var i = 0; i < data.length; i++) {
                    var filename = data[i].name.split(".");
                    var newfilename = filename[0].toString().split("_");
                    var dislpayName = newfilename[0] + "." + filename[1];

                    str = str + '<tr><td>    <a class="text-heading font-semibold" onclick="viewImage(' + data[i].mdid + ')">  <img  src="../../assets/th.jpg" width ="100px" height="100px" >   </a>   </td>';
                    str = str + '<td>    <a class="text-heading font-semibold" onclick="viewImage(' + data[i].mdid + ')"> ' + newfilename[0] + "." + filename[1] + '    </a>   </td>';
                    str = str + '<td class="text-end"> <button type="button" class="btn btn-sm btn-square btn-neutral"  onclick="viewImage(' + data[i].mdid + ')"><span class="bi bi-eye"></span></button> '
                    str = str + '<button type="button" class="btn btn-sm btn-square btn-neutral text-danger-hover" onclick="deleteImage(' + data[i].mdid + ',\'' + data[i].name + '\')"><i class="bi bi-trash"></i> </button>';
                    str = str + '<button type="button" class="btn btn-sm btn-square btn-neutral text-danger-hover" onclick="DownloadImage(' + data[i].mdid + ',\'' + data[i].name + '\')"><span class="bi bi-download"></span> </button>';

                    str = str + '</td></tr>';
                    totaldatabasephotosizecount = totaldatabasephotosizecount + data[i].size;
                }
                $("#videotbody").append(str);
                //total photo count
                $('#totalphotocount').html(_MAX_PHOTO_COUNT_SIZE_LIMIT_);
                //Added photo count
                var imagedata = JSON.parse(jsondata["data"]);
                $("#imagect").html(imagedata.length);
                //total photo Size count
                $('#totaluploadedphotosize').html(Number((_MAX_VIDEO_SIZE_LIMIT_ / (1024 ** 2)).toFixed(2)));
                //Added photo  Size count 
                $('#uploadedphotosize').html(Number((totaldatabasephotosizecount / (1024 ** 2)).toFixed(2)));
                //total video count
                $('#totalVideocount').html(_MAX_VIDEO_COUNT_SIZE_LIMIT_);
                //uploaded video count
                $('#uploadedVideocount').html(data.length);
                if (data.length >= _MAX_VIDEO_COUNT_SIZE_LIMIT_ || totaldatabasephotosizecount >= _MAX_VIDEO_SIZE_LIMIT_) {
                    $('#submit_form').hide();
                }

            }, error: function (data, status, xhr) {
                console.log("registration id data error  :error " + data.responseText);
            },
        });
    }
    function fieEventProcessing() {

        $(function () {

            $(document).on('change', ':file', function () {
                var input = $(this),
                    numFiles = input.get(0).files ? input.get(0).files.length : 1,
                    label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
                input.trigger('fileselect', [numFiles, label]);
                if (input.get(0).files[0].size < _MAX_PHOTO_SIZE_LIMIT_) {
                    // alert("validatre");
                } else {
                    alert(__ALERT_SELECTED_PHOTO_LARGE_);
                    input.trigger('fileselect', [numFiles, ""]);
                }

            });



            $(document).ready(function () {
                //below code executes on file input change and append name in text control
                $(':file').on('fileselect', function (event, numFiles, label) {

                    var input = $(this).parents('.input-group').find(':text'),
                        log = numFiles > 1 ? numFiles + ' files selected' : label;

                    if (input.length) {
                        input.val(log);

                    } else {
                        // if (log) alert(log);
                    }

                });
            });

        });
    }
    function phtoUpload(formData) {

        $(document).ready(function () {

            const token = $('meta[name="token"]').attr("content");
            $.ajax({
                url: "upload.php",
                data: formData,
                type: "POST",
                headers: { token: token },
                contentType: false,
                processData: false,
                dataType: "json",
                success: function (jsondata) {
                    console.log(jsondata);



                }, error: function (data, status, xhr) {
                    console.log("registration id data error  :error " + data.responseText);
                }, complete: function () {
                    console.log("property id data complte  :complete ");
                    localStorage.setItem("propertyid", NaN);
                    loadPhotoMedia();
                    location.reload(true);
                },
            });
        });
    }
    function DownloadImage(id, path) {
        //   alert("download image");


        $(document).ready(function () {
            window.location.href = "download.php?filename=" + path + "&mediatype='video'";
            console.log("download.php?filename='" + path + "'&mediatype='video'");

        });
    }

</script>


</html>