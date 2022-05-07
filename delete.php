<?php
include('./inc/header.php');
include('./inc/functions.php');
include('./inc/db.php');
if (isset($_GET['id'])) {
    $id = getSafeData($_GET['id']);
}

$sql = "DELETE FROM patients WHERE id = $id";
if(mysqli_query($conn, $sql))
{
    header('location:index.php');
}

?>