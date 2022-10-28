<?php

/**
 * @return mysqli
 */
function connector()
{
    $connection = new mysqli("localhost", "root", "root", "test");
    echo $connection->connect_error;
    if ($connection->connect_error) {
        echo "Connection failed: " . $connection->connect_error;
    }

    $connection->set_charset("utf8");
    return $connection;
}





