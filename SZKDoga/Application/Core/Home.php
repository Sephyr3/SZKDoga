<?php

$config = getConfig( $configPath );

//$pdo    = getConnetcion( $config );

$users  = getUsers( $pdo );
header('Location: index.php');



