<?php

$userDatas  = $_POST;
$config     = getConfig( $configPath );
$pdo        = getConnetcion( $config );

Registration( $pdo, $userDatas );

header('Location: index.php');