<?php
$sadmin = isset($_GET['admin'])  ? $_GET['admin'] : false;
$stoolbar = isset($_GET['toolbar'])  ? $_GET['toolbar'] : false;
$user = isset($_SESSION['user']) ? $_SESSION['user'] : false;
$content = isset($_GET['articl']) ? $_GET['articl'] : false;
$saddart = isset($_GET['art'])  ? $_GET['art'] : false;
echo '<!DOCTYPE html>';
echo '<html>';
echo '<head>';
echo '<mta charset="UTF-8">';
echo '<title>schoo1 1.0</title>';
echo '<link rel="stylesheet" href="style/style.css">';
echo '
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href=\'http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700\' rel=\'stylesheet\' type=\'text/css\'>
<link rel="stylesheet" href="style/left-nav-style.css">
<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		    <link href="core/widget/Players/css/styles.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="core/widget/Players/js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="core/widget/Players/js/jquery-ui-1.8.21.custom.min.js"></script>
    <script type="text/javascript" src="core/widget/Players/js/main.js"></script>
		<script src="js/modernizr.custom.js"></script>
	<link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="css/nav.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="css/style.css"> <!-- Resource style -->
	<link href="style/main.css" rel="stylesheet" type="text/css" />
	<script src="js/modernizr.js"></script> <!-- Modernizr -->';
echo '</head><body><header class="cd-header">
		<a href="#" class="cd-logo"><img src="img/cd-logo.svg" alt="Logo"></a>
		<a href="#" class="cd-3d-nav-trigger">
			Menu
			<span></span>
		</a>
	</header>';
	echo '<div class="slides">
            <ul class="slidesul">';
require_once 'data.php';
$sql = mysqli_query($connect, sldr);
while ($result = mysqli_fetch_array($sql)) {

    echo ' <li><img src="'.$result["img"].'" alt="'.$result["id"].'" />
                    <div class="slidesDiv"><a href="'.$result["url"].'">'.$result["names"].'</a></div>
                </li>
                ';
}

           echo '</ul>
        </div>';
///
