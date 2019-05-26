<?php 

try
{
    $database = new PDO('mysql:host=localhost;dbname=triavbem_blog','triavbem_anthony','twfZMKdQH5gFk2');
    $database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(Exception $e)
{
    die('ERROR:'.$e->getMessage());
}

?>







