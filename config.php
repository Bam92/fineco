<?php

/**
 * Configuration for local development database connection
 *
 */

$host       = "localhost";
$username   = "root";
$password   = "";
$dbname     = "schoolFi";
$dsn        = "mysql:host=$host;dbname=$dbname";
$options    = array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
);