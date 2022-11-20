<!-- SERVICES TABLE -->

<?php

include ('../backend/form/conn.php');

$id = $_GET['id'];

$q = " DELETE FROM `services_tbl` WHERE id = $id ";

mysqli_query($con, $q);

header('location:services.php');

?>

<!-- PORTFOLIO TABLE -->
<?php

$id = $_GET['id'];

$q = " DELETE FROM `portfolio` WHERE id = $id ";

mysqli_query($con, $q);

header('location:portfolio.php');

?>

<!-- TESTIMONIAL TABLE -->
<?php

$id = $_GET['id'];

$q = " DELETE FROM `testimonial` WHERE id = $id ";

mysqli_query($con, $q);

header('location:testimonial.php');

?>

<!-- TEAM TABLE -->
<?php

$id = $_GET['id'];

$q = " DELETE FROM `team` WHERE id = $id ";

mysqli_query($con, $q);

header('location:team.php');

?>