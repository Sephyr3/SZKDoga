<?php

function getConfig( $configPath )
{
    return json_decode( file_get_contents($configPath) , true);
}

function  getConnetcion( $config )
{
    try 
    {
        return new PDO(
           "mysql:host={$config['hostName']};dbname={$config['database']};charset=utf8", 
            $config['userName'], 
            $config['password']
        );
                
    } 
    catch (PDOException $e)
    {
        var_dump($e->getMessage());
        die;
    }
}

function Login( PDO $pdo )
{    
    try 
    {
        $smt = $pdo->prepare("SELECT * FROM `users`");

        if ( !$smt->execute() )
        {
            throw new RuntimeException($smt->errorInfo()[2]);
        }       
        
        return $smt->fetchAll();
    } 
    catch (RuntimeException $e) 
    {
        var_dump($e->getMessage());        
    }

    return [];

}

function Registration( PDO $pdo, $userDatas )
{
    try 
    {
        $smt = $pdo->prepare("INSERT INTO `users` (`ign`,`name`,`email`,`password`,`born`) VALUES (:ign, :name, :email, :password, :born )");

        $smt->bindParam(':ign', $userData['ign']);
        $smt->bindParam(':name',    $userDatas['name']);        
        $smt->bindParam(':email',   $userDatas['email']);
        $smt->bindParam(':password', $userDatas['password']);
        $smt->bindParam(':born',  $userDatas['born']);

        if ( !$smt->execute() )
        {
            throw new RuntimeException($smt->errorInfo()[2]);
        }       
        
        return true;
    } 
    catch (RuntimeException $e) 
    {
        var_dump($e->getMessage());
    }

    return false;
}


/*function deleteUser( PDO $pdo, $uid )
{
    try 
    {
        $smt = $pdo->prepare("DELETE FROM `users` WHERE `id` = :uid");

        $smt->bindParam(':uid', $uid);
 

        if ( !$smt->execute() )
        {
            throw new RuntimeException($smt->errorInfo()[2]);
        }       
        
        return true;
    } 
    catch (RuntimeException $e) 
    {
        var_dump($e->getMessage());
    }

    return false;
}*/