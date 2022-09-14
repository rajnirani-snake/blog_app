
 <?php

include 'conn.php';

$id = $_GET['id'];

$q = " DELETE FROM `blog2` WHERE id = $id ";

mysqli_query($con, $q);

header('location:blogs.php');

?> 