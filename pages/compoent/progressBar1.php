<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="../../css/internal/progressbar.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="../../js/progressBar.js"></script> -->
    <?php
    // include('../config/route.php');
    // include('compoent/commonheader.php'); ?>
    <script src=<?php echo _JS_PROGRESS_BAR_;?>></script>
<link rel="stylesheet" href=<?php echo __URL_CSS_INTERNAL_PROGRESS_BAR_; ?>>
    
</head>

<body>
    <!-- multistep form -->
    <form id="multistepsform">
        <!-- progressbar -->
        <ul id="progressbar">
            <li class="active">Account Setup</li>
            <li>Personal Details</li>
            <li>Social Profiles</li>

        </ul>
    </form>
</body>

</html>