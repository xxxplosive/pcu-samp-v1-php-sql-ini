<?php
define('USER', 'adminweb');
define('PASSWORD', '_q6d6oB9');
define('HOST', 'PMYSQL151.dns-servicio.com');
define('DATABASE', '9086405_bdpadmin');
try {
    $connection = new PDO("mysql:host=".HOST.";dbname=".DATABASE, USER, PASSWORD);
} catch (PDOException $e) {
    exit("Error: " . $e->getMessage());
}
?>
