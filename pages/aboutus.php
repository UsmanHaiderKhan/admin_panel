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
    <link rel="stylesheet" href="../assets/css/style.css" />
</head>
<body>
  <section>
       <?php include '../pages/sidebar.php' ?>
   </section>
   <section id="interface">
       <?php include '../pages/navigation.php' ?>

 <div class="container">
  <h3 class="i-name">About Us</h3>

 <div class="col-lg-12">
 <br>
 
 <table  id="tabledata" class=" table table-striped table-hover table-bordered">
 
 <tr class="bg-darkgreen text-white text-center">

 <th> Id </th>
 <th> Image </th>
 <th> Heading </th>
 <th> Description </th>
 <th> Paragraph Heading </th>
 <th> Paragraph </th>
 <th> Edit </th>

 </tr >

 <?php

 include ('../backend/form/conn.php'); 
 $q = "select * from about_us ";

 $query = mysqli_query($con,$q);

 while($res = mysqli_fetch_array($query)){
 ?>
 <tr class="text-center">
  <td> <?php echo $res['id'];  ?> </td>
  <td> <img src="<?php echo $res['about_img'];  ?>" alt=""> </td>
  <td> <?php echo $res['heading'];  ?> </td>
  <td> <?php echo $res['description'];  ?> </td>
  <td> <?php echo $res['para_heading'];  ?> </td>
  <td> <?php echo $res['paragraph'];  ?> </td>

 <td> <button class="btn-primary btn"> <a href="changeinfo.php?id=<?php echo $res['id']; ?>" class="text-white"> Edit </a> </button> </td>

 </tr>

 <?php 
 }
  ?>
 
 </table>  

 </div>
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
 <script type="text/javascript">
 
 $(document).ready(function(){
 $('#tabledata').DataTable();
 }) 
 
 </script>

</body>
</html>
