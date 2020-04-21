<?php
    define("HOST","localhost");
    define("DBNAME","controledeestoque");
    define("USERNAME","root");
    define("PASSWORD","");


    //classe

    try {
    $conn = new PDO('mysql:host='.HOST.';dbname=' . DBNAME .'', USERNAME, PASSWORD);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}

?>