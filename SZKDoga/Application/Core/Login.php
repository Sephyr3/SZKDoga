<?php

$userDatas  = $_POST;
$config     = getConfig( $configPath );
$pdo        = getConnetcion( $config );

insertUser( $pdo, $userDatas );

header('Location: index.php');