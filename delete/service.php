<?php

include ('../backend/form/conn.php');

$id = $_GET['id'];

$q = " DELETE FROM `services_tbl` WHERE id = $id ";

mysqli_query($con, $q);

header('location:services.php');

?>
