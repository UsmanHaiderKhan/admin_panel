<?php
include ('../backend/form/conn.php');

$id = $_GET['id'];

$q = " DELETE FROM `team` WHERE id = $id ";

mysqli_query($con, $q);

header('location:team.php');

?>