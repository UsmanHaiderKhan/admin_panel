<?php

 include ('../backend/form/conn.php');

 if(isset($_POST['submit'])){

 $id = $_GET['id'];
 $heading = $_GET['heading'];
 $description = $_POST['description'];
 $files = $_FILES['file'];
 $para_heading = $_POST['para_heading'];
 $paragraph = $_POST['paragraph'];

 $filename = $files['name'];
 $file_error = $files['error'];
 $file_tmp = $files['tmp_name'];

 $file_ext = explode('.',$filename);
 $file_check = strtolower(end($file_ext));

 $file_ext_stored = array('png', 'jpg', 'jpeg');

//  if(in_array($file_check,$file_ext_stored)){
//   $destination_file ='../assets/about/'.$filename;
//   move_uploaded_file($file_tmp,$destination_file);
 

 $q = "UPDATE `about_us` SET `id`='$id',`heading`='$heading',`description`='$description',`about_img`='$destination_file',`para_heading`='$para_heading',`paragraph`='$paragraph' WHERE id = {$id} ";
 $query = mysqli_query($con,$q);

 header('location:aboutus.php');
//  }
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
        <?php
            include ('../backend/form/conn.php');

            $id = $_GET['id'];
            $q = "SELECT * FROM `about_us` WHERE id = {$id}";
            $query = mysqli_query($con,$q);

            if(mysqli_num_rows($query) > 0) {
            while($row = mysqli_fetch_assoc($query)){
            ?>
            <div class="col-md-9">
                <div class="card p-4">
                    <div class="card-header">
                    </div><br>
                    <label> Upload Image: </label>
                    <input type="file" name="file" id="file" class="form-control"><img src="<?php echo $res['about_img'];  ?>" alt=""> <br>
                            
                    <label> Heading: </label>
                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>" class="form-control">
                        <textarea name="heading" id="your_summernote" class="form-control" > <?php echo $row['heading']; ?> </textarea><br>
                    <label>Description</label>
                            <textarea name="description" id="your1_summernote" class="form-control" rows="4"> <?php echo $row['description']; ?> </textarea> <br>
                    
                    <div class="card-body">
                        <div class="mb-3">
                            <label>Paragraph Heading</label>
                            <textarea name="para_heading" id="your2_summernote" class="form-control" rows="4"> <?php echo $row['para_heading']; ?> </textarea><br>
                            <label>Paragraph</label>
                            <textarea name="paragraph" id="your3_summernote" value="" class="form-control" rows="4"> <?php echo $row['paragraph']; ?> </textarea>
                        </div>
                    </div><br>
                    <button class="btn btn-success" type="submit" name="submit"> Submit </button><br>
                </div>
            </div>
        </div>
        </form>
        <?php
  }
        }
        ?>
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
            $("#your1_summernote").summernote();
            $("#your2_summernote").summernote();
            $("#your3_summernote").summernote();
            $('.dropdown-toggle').dropdown();
        });
    </script>
    <!-- //Summernote JS - CDN Link -->
</body>
</html>