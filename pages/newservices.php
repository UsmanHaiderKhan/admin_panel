<?php

include ('../backend/form/conn.php');

if(isset($_POST['submit'])){

 $files = $_FILES['file'];
 $heading = $_POST['heading'];
 $description = $_POST['description'];

 
 $filename = $files['name'];
 $file_error = $files['error'];
 $file_tmp = $files['tmp_name'];

 $file_ext = explode('.',$filename);
 $file_check = strtolower(end($file_ext));

 $file_ext_stored = array('png', 'jpg', 'jpeg');

 if(in_array($file_check,$file_ext_stored)){
  $destination_file ='../assets/img/service/'.$filename;
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
        <!-- Bootstrap 5 CDN Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Summernote CSS - CDN Link -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <!-- //Summernote CSS - CDN Link -->

    <link rel="stylesheet" href="../assets/css/style.css" />
</head>
<body>
    <section>
       <?php include '../pages/sidebar.php' ?>
   </section>
    <section id="interface">
       <?php include '../pages/navigation.php' ?>
    <div class="container">
        <form method="post" enctype="multipart/form-data">
        <div class="row justify-content-center" style="margin-top:7rem;">
            <div class="col-md-9">
                <div class="card p-4">
                    <div class="card-header">
                    </div><br>
                    <label> Upload Image: </label>
                    <input type="file" name="file" id="file" class="form-control"> <br>
                            
                    <label> Heading: </label>
                    <textarea name="heading" class="form-control" > </textarea><br>
                    
                    <div class="card-body">
                        <div class="mb-3">
                            <label>Description</label>
                            <textarea name="description" id="your_summernote" class="form-control" rows="4"></textarea>
                        </div>
                    </div><br>
                    <button class="btn btn-success" type="submit" name="submit"> Submit </button><br>
                </div>
            </div>
        </div>
        </form>
    </div>
    </section>

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

    <script src="https://code.jquery.com/jquery-3.6.0.min.js""></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Summernote JS - CDN Link -->
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#your_summernote").summernote();
            $('.dropdown-toggle').dropdown();
        });
    </script>
    <!-- //Summernote JS - CDN Link -->

</body>
</html>

