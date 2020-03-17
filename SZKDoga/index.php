<?php

    require_once "Application/functions.php";

    $page = @$_GET['page'] ? $_GET['page'] : "Home";
    $configPath = 'config.json';

    switch ( $page )
    {
        case 'Kezdőlap':   require_once 'Application/Core/Home.php'; break;
        case 'Csapatok':  require_once 'Application/Core/Team.php'; break;
        case 'Tournament': require_once 'Application/Core/Tournament.php'; break;
        case 'Regisztráció':  require_once 'Application/Core/Registration.php'; break;
        case 'Belépés':  require_once 'Application/Core/Login.php'; break;
    }





    require_once "Application/Templates/_layout.php";