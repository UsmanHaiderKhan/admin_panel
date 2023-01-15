<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Devonsite</title>
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
        <h3 class="i-name">Dashboard</h3>
        <div class="row values">
          <div class="col-md-3">
            <div class="val-box">
              <i class="fas fa-users"></i>
              <div>
                <h3>6,789</h3>
                <span>New User</span>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="val-box">
              <i class="fas fa-shopping-cart"></i>
              <div>
                <h3>6,789</h3>
                <span>New User</span>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="val-box">
              <i class="fas fa-project-diagram"></i>
              <div>
                <h3>6,789</h3>
                <span>New User</span>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="val-box">
              <i class="fas fa-dollar-sign"></i>
              <div>
                <h3>$567.67</h3>
                <span>This Month</span>
              </div>
            </div>
          </div>
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
  </body>
</html>