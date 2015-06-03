<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Modus-versus test</title>



    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,800,700,300,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/styles.css"/>

    <?php wp_head()?>
</head>
<body>

<header class="main-header">
    <div class="container">
        <div class="logo"><a href="#"><?php bloginfo('name'); ?></a></div>
        <nav class="main-menu">

            <?php wp_nav_menu(array('theme_location' => 'menu'))?>



        </nav>
    </div>
</header>