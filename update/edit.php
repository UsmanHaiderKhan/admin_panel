<?php

 include ('../backend/form/conn.php');

 if(isset($_POST['submit'])){

 $id = $_GET['id'];
 $contact_email = $_POST['contact_email'];
 $support_email = $_POST['support_email'];
 $phone_number = $_POST['phone_number'];
 $facebook_link = $_POST['facebook_link'];
 $linkedIn_link = $_POST['linkedIn_link'];
 $twitter_link = $_POST['twitter_link'];
 $address = $_POST['address'];


//   $q = " INSERT INTO `contact_info_tbl`(`contact_email`, `support_email`, `phone_number`, `facebook_link`, `linkedIn_link`, `twitter_link`, `address`,) VALUES ( '$contact_email', '$support_email', '$phone_number', '$facebook_link', '$linkedIn_link', '$twitter_link', '$address')";
 $q = "UPDATE `contact_info_tbl` SET `id`='$id',`contact_email`='$contact_email',`support_email`='$support_email',`phone_number`='$phone_number',`facebook_link`='$facebook_link',`linkedIn_link`='$linkedIn_link',`twitter_link`='$twitter_link',`address`='$address' WHERE id = {$id} ";
 $query = mysqli_query($con,$q);

 header('location:contactInfo.php');
  
}
?>

<!DOCTYPE html>
<html>
<head>
 <title></title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
      integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

    <link rel="stylesheet" href="assets/css/style.css" />
</head>
<body>

 <div class="col-lg-6 m-auto">
 
 <form method="post" >
 
 <br><br><div class="card">
 <?php
 include ('../backend/form/conn.php');

$id = $_GET['id'];
 $q = "SELECT * FROM `contact_info_tbl` WHERE id = {$id}";
 $query = mysqli_query($con,$q);

 if(mysqli_num_rows($query) > 0) {
  while($row = mysqli_fetch_assoc($query)){
 ?>

 <div class="card-header bg-dark">
 <h1 class="text-white text-center">  Edit Contact Info </h1>
 </div><br>

 <label> Contact Email: </label>
 <input type="hidden" name="id" value="<?php echo $row['id']; ?>" class="form-control">
 <input type="text" name="contact_email" value="<?php echo $row['contact_email']; ?>" class="form-control"> <br>

 <label> Support Email: </label>
 <input type="text" name="support_email" value="<?php echo $row['support_email']; ?>" class="form-control"> <br>

 <label> Phone No: </label>
 <input type="text" name="phone_number" value="<?php echo $row['phone_number']; ?>" class="form-control"> <br>

 <label> Facebook Link: </label>
 <input type="text" name="facebook_link" value="<?php echo $row['facebook_link']; ?>" class="form-control"> <br>

 <label> LinkedIn Link: </label>
 <input type="text" name="linkedIn_link" value="<?php echo $row['linkedIn_link']; ?>" class="form-control"> <br>

 <label> Twitter Link: </label>
 <input type="text" name="twitter_link" value="<?php echo $row['twitter_link']; ?>" class="form-control"> <br>

 <label> Address: </label>
 <textarea
                class="form-control"
                name="address"
                rows="5"
                placeholder="Enter Your Address"
                required=""
              >
              <?php echo $row['address']; ?>
            </textarea><br>

 <button class="btn btn-success" type="submit" name="submit"> Submit </button><br>

 </div>
 </form>
 <?php
  }
}
 ?>
 </div>
 <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
      crossorigin="anonymous"
    ></script>

    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/js/all.min.js"
      integrity="sha512-rpLlll167T5LJHwp0waJCh3ZRf7pO6IT1+LZOhAyP6phAirwchClbTZV3iqL3BMrVxIYRbzGTpli4rfxsCK6Vw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
    <script src="assets/js/bundle.js"></script>
</body>
</html>