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
  <h3 class="i-name">Portfolio</h3>
  <div class="mt-2">
    <a href="../addportfolio.php" class="btn btn-success btn-lg">Add New Portfolio</a>
  </div>
 <div class="col-lg-12">
 <br>
 <!-- <h1 class="text-warning text-center" > Display Table Data </h1> -->
 
 <table  id="tabledata" class=" table table-striped table-hover table-bordered">
 
 <tr class="bg-darkgreen text-white text-center">
 
 <th> Id </th>
 <th> Image </th>
 <th> Heading </th>
 <th> link </th>
 <th> Description </th>
 <th> Delete </th>
 <th> Update </th>

 </tr >

 <?php
 include ('../backend/form/conn.php'); 
 $q = "select * from portfolio ";

 $query = mysqli_query($con,$q);

 while($res = mysqli_fetch_array($query)){
 ?>
 <tr class="text-center">
 <td> <?php echo $res['id'];  ?> </td>
 <td> <img src="../<?php echo $res['port_image'];  ?>" class="testimonial-logo" alt=""> </td>
 <td> <?php echo $res['heading'];  ?> </td>
 <td> <?php echo $res['link'];  ?> </td>
 <td> <?php echo $res['big_description'];  ?> </td>
 <td> <button class="btn-danger btn"> <a href="delete.php?id=<?php echo $res['id']; ?>" class="text-white"> Delete </a>  </button> </td>
 <td> <button class="btn-primary btn"> <a href="../update/port.php?id=<?php echo $res['id']; ?>" class="text-white"> Update </a> </button> </td>

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
