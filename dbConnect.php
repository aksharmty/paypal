<?php 
// Connect with the database 
$db = new mysqli('Db host', 'DB username', 'DB password', 'Db name'); 
 
// Display error if failed to connect 
if ($db->connect_errno) { 
    printf("Connect failed: %s\n", $db->connect_error); 
    exit(); 
}
