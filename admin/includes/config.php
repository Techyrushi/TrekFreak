<?php 
// DB credentials.
define('DB_HOST','sql200.infinityfree.com');
define('DB_USER','if0_34968538');
define('DB_PASS','67IbiCY0Bm');
define('DB_NAME','if0_34968538_database');
// Establish database connection.
try
{
$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}
?>