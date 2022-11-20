<?php

include ('../backend/form/conn.php');

if(isset($_POST['submit'])){

 $heading = $_POST['heading'];
 $description = $_POST['description'];
 $files = $_FILES['file'];
 
 $filename = $files['name'];
 $file_error = $files['error'];
 $file_tmp = $files['tmp_name'];

 $file_ext = explode('.',$filename);
 $file_check = strtolower(end($file_ext));

 $file_ext_stored = array('png', 'jpg', 'jpeg');

 if(in_array($file_check,$file_ext_stored)){
  $destination_file ='../assets/upload/'.$filename;
  move_uploaded_file($file_tmp,$destination_file);
 
 $q = " INSERT INTO `services_tbl`(`heading`, `description`, `service_img`) VALUES ('$heading','$description','$destination_file')";
 $query = mysqli_query($con,$q);
}
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
</head>
<body>

 <div class="col-lg-6 m-auto">
 
 <form method="post" enctype="multipart/form-data">
 
 <br><br><div class="card">
 
 <div class="card-header bg-dark">
 <h1 class="text-white text-center">  Add Service </h1>
 </div><br>

 <label> Upload Image: </label>
 <input type="file" name="file" id="file" class="form-control"> <br>
 
 <label> Heading: </label>
 <input type="text" name="heading" class="form-control"> <br>

 <label> Description: </label>
 <textarea
                class="form-control"
                name="description"
                rows="7"
                placeholder="Message"
                required=""
              ></textarea><br>

 <button class="btn btn-success" type="submit" name="submit"> Submit </button><br>

 </div>
 </form>
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
    <script src="../assets/js/bundle.js"></script>
</body>
</html>

