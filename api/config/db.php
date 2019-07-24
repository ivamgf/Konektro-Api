<?php 
    function getConnections() {
        $connection = new \PDO(
            "mysql:host=localhost;dbname=orkneytech", 
            "root", 
            "1234"
        );
        return $connection;
    }
?>