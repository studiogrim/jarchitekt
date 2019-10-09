<?php

if(isset($DIR_LEVEL) && $DIR_LEVEL == 2){
    include "../config/config.php";
}else{
    include "config/config.php";
}

if(!isset($BODY_CLASS)){
    $BODY_CLASS = "";
}
if(!isset($CURRENT_PAGE)){
    $CURRENT_PAGE = null;
}
$HP = false;
if($CURRENT_PAGE == "hp"){
    $HP = true;
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0, shrink-to-fit=no">

    <meta name="description" content="">
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Jelínková Architekt" />
    <meta property="og:description" content="" />
    <meta property="og:url" content="<?=$root_url?>" />
    <meta property="og:site_name" content="Jelínková Architekt" />
    <meta property="og:image" content="<?=$root_url?>assets/share/share.png" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />

    <link rel="shortcut icon" href="<?=$root?>favicon.png?v=1.1.0" type="image/png">
    <link rel="icon" href="<?=$root?>favicon.png?v=1.1.0" type="image/png">


    <?php if($DEV){ ?>
    <meta name="robots" content="noindex, nofollow" />
<?php } else { ?>

    <?php } ?>

    <link rel="stylesheet" href="<?=$css?>style.css?v=<?php echo ($DEV == false ? $version : date("U")); ?>" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <title><?php if(isset($TITLE) && trim($TITLE) != "") echo $TITLE . " | " ?>Jelínková – Architekt</title>

</head>
<body class="<?=$BODY_CLASS?>">


<?php if(!isset($_COOKIE["cookiesBar"]) || $_COOKIE["cookiesBar"] != "hidden") { ?>
    <!--div class="a-cookies-bar">

    </div-->
<?php } ?>

<header>
        <div class="container-fluid no-gutters">
            <div class="row">
                <div class="col">

                    <div class="o-header">
                        <a href="<?=$root?>" class="a-logo">
                            <img class="img" src="<?=$img?>logo-text-only.svg" alt="Jarchitekt" />
                        </a>

                        <div class="button">
                            <button type="button" class="a-btn a-navbar-toggle toggle-navbar">
                                <span class="title">menu</span>
                                <span class="bars">
                                    <span class="bar"></span>
                                    <span class="bar"></span>
                                    <span class="bar"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav class="m-nav main-nav">
            <ul role="navigation">
                <li class="item"><a href="<?=$root?>" class="a-nav-link<?=$CURRENT_PAGE=="hp"?" active":""?>">Úvod</a></li>
                <li class="item"><a href="<?=$root?>projekty" class="a-nav-link u-d-lg-n<?=$CURRENT_PAGE=="projekty"?" active":""?>">Projekty</a></li>
                <li class="item"><a href="<?=$root?>o-firme" class="a-nav-link<?=$CURRENT_PAGE=="o-firme"?" active":""?>">O firmě</a></li>
                <li class="item"><a href="<?=$root?>o-nas" class="a-nav-link<?=$CURRENT_PAGE=="o-nas"?" active":""?>">O nás</a></li>
                <li class="item"><a href="<?=$root?>kontakt" class="a-nav-link<?=$CURRENT_PAGE=="kontakt"?" active":""?>">Kontakt</a></li>
            </ul>
            <button type="button" class="a-btn a-cross toggle-navbar"></button>
        </nav>

</header>

