<?php

/**Proxy connection for php motors database */
function phpmotorsConnect()
{
    $server = '127.0.0.1:3308';
    $dbname = 'phpmotors';
    $username = 'samuel';
    $password = 'GrvsC0ICeigTa1m5';
    $dsn = "mysql:host=$server;dbname=$dbname";
    $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);

    // Create the actual connection object and assign it to a variable
    try {
        $link = new PDO($dsn, $username, $password, $options);
        return $link;
    } catch (PDOException $e) {
        header('Location: /amazing_trip/view/error.php');
        exit;
    }
}
phpmotorsConnect();
