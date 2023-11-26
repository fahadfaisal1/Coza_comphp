<?php
// session_start();
// if(isset($_SESSION['Admin_Email'])) 
// {
//     $email = $_SESSION['Admin_Email'];
// }

session_start(); // start the session

if (isset($_SESSION['Admin_Email'])) { // check if session variable is set
  $email = $_SESSION['Admin_Email']; // assign session variable value to $email variable
} else {
  $email = ''; // set $email variable to empty string if session variable is not set
}

require './Master_Layout/header.php';
?>
      <!-- partial -->
      
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              <div class="col-12 grid-margin stretch-card">
                <div class="card corona-gradient-card">
                  <div class="card-body py-0 px-0 px-sm-3">
                    <div class="row align-items-center">
                      <div class="col-4 col-sm-3 col-xl-2">
                        <!-- <img src="assets/images/dashboard/Group126@2x.png" class="gradient-corona-img img-fluid" alt=""> -->
                      </div>
                      <div class="col-5 col-sm-7 col-xl-8 p-0">
                        <!-- <h4 class="mb-1 mb-sm-0">Want even more features?</h4> -->
                        <!-- <p class="mb-0 font-weight-normal d-none d-sm-block">Check out our Pro version with 5 unique layouts!</p> -->
                      </div>
                      <div class="col-3 col-sm-2 col-xl-2 pl-0 text-center">
                        <span>
                          <!-- <a href="https://www.bootstrapdash.com/product/corona-admin-template/" target="_blank" class="btn btn-outline-light btn-rounded get-started-btn">Upgrade to PRO</a> -->
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
           
            <div class="row">
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                        <?php
                           $con = mysqli_connect("localhost","root","","Coza_Store") or die("Conection Failed");
                           $query = "SELECT COUNT(*) as total_users FROM users";
                           $result = mysqli_query($con, $query);
                           $row = mysqli_fetch_assoc($result);
                           $total_users = $row['total_users'];
                           ?>
                          <h3 class="mb-0"><?php echo $total_users; ?></h3>
                        </div>
                      </div>
                      <div class="col-3">
                        <div class="icon icon-box-">
                          <!-- <span class="mdi mdi-arrow-top-right icon-item"></span> -->
                        </div>
                      </div>
                    </div>
                    <h6 class="text-muted font-weight-normal">Total Users</h6>
                  </div>
                </div>
              </div>
              
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                        <?php
                           $con = mysqli_connect("localhost","root","","Coza_Store") or die("Conection Failed");
                           $query = "SELECT COUNT(*) as total_users FROM categories";
                           $result = mysqli_query($con, $query);
                           $row = mysqli_fetch_assoc($result);
                           $total_users = $row['total_users'];
                           ?>
                          <h3 class="mb-0"><?php echo $total_users; ?></h3>
                          <!-- <p class="text-success ml-2 mb-0 font-weight-medium">new</p> -->
                        </div>
                      </div>
                      <div class="col-3">
                        <div class="icon icon-box-">
                          <!-- <span class="mdi mdi-arrow-top-right icon-item"></span> -->
                        </div>
                      </div>
                    </div>
                    <h6 class="text-muted font-weight-normal">Total Categories</h6>
                  </div>
                </div>
              </div>

              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                        <?php
                           $con = mysqli_connect("localhost","root","","Coza_Store") or die("Conection Failed");
                           $query = "SELECT COUNT(*) as total_products FROM products";
                           $result = mysqli_query($con, $query);
                           $row = mysqli_fetch_assoc($result);
                           $total_products = $row['total_products'];
                           ?>
                          <h3 class="mb-0"><?php echo $total_products; ?></h3>
                          <!-- <p class="text-success ml-2 mb-0 font-weight-medium">new</p> -->
                        </div>
                      </div>
                      <div class="col-3">
                        <div class="icon icon-box-">
                          <!-- <span class="mdi mdi-arrow-top-right icon-item"></span> -->
                        </div>
                      </div>
                    </div>
                    <h6 class="text-muted font-weight-normal">Total Products</h6>
                  </div>
                </div>
              </div>
              
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                          <h3 class="mb-0">$12.34</h3>
                          <p class="text-danger ml-2 mb-0 font-weight-medium">-2.4%</p>
                        </div>
                      </div>
                      <div class="col-3">
                        <div class="icon icon-box-">
                          <!-- <span class="mdi mdi-arrow-bottom-left icon-item"></span> -->
                        </div>
                      </div>
                    </div>
                    <h6 class="text-muted font-weight-normal">Daily Income</h6>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                          <h3 class="mb-0">$31.53</h3>
                          <p class="text-success ml-2 mb-0 font-weight-medium">+3.5%</p>
                        </div>
                      </div>
                      <div class="col-3">
                        <div class="icon icon-box- ">
                          <!-- <span class="mdi mdi-arrow-top-right icon-item"></span> -->
                        </div>
                      </div>
                    </div>
                    <h6 class="text-muted font-weight-normal">Expense current</h6>
                  </div>
                </div>
              </div>
            </div>
            <!-- ye -->

          
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="assets/vendors/chart.js/Chart.min.js"></script>
    <script src="assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <script src="assets/js/settings.js"></script>
    <script src="assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>