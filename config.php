<?php
    define('USER', 'currente_cyber');
    define('PASSWORD', 'k;=_GzV.w9MP');
    define('HOST', 'localhost');
    define('DATABASE', 'currente_sportin360');
    try {
        $connection = mysqli_connect(HOST, USER, PASSWORD, DATABASE);
        
        } catch (PDOException $e) {
        exit("Error: " . $e->getMessage());
            
                    echo "hii";

        }
?>