<?php
session_start();
if(isset($_SESSION['Admin_Email'])) 
{
    $email = $_SESSION['Admin_Email'];
}
require './Master_Layout/header.php';

// Create a connection
$con = mysqli_connect("localhost","root","","Coza_Store") or die("Conection Failed");

// storing in variable
$sql = "SELECT * FROM products";
$result = mysqli_query($con, $sql);
?>
<!-- partial -->
<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">
      <!-- <h3 class="page-title"> Users Info </h3> -->
      <nav aria-label="breadcrumb">
      </nav>
    </div>
    <div class="row">
      <div class="col-lg-13 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title text-center">Available Products</h4>
            <div class="table-responsive">
              <?php
              if (mysqli_num_rows($result) > 0) {
                echo "<table class='table'>";
                echo "<thead>
                <tr>
                <th class='Text-Center'>Product ID</th>
                <th>Product Name</th>
                <th>Product Description</th>
                <th>Product Image</th>
                <th>Product Price</th>
                <th class='text-danger'>Action</th>
                     </tr>
                       </thead>";
                echo "<tbody>";
             
                while ($row = mysqli_fetch_assoc($result)) {
                  echo "<tr>";
                  echo "<td>" . $row["product_id"] . "</td>";
                  echo "<td>" . $row["product_name"] . "</td>";
                  echo "<td>" . $row["product_description"] . "</td>";
                  echo "<td><img src='product_images/" . $row["product_image"] . "' style='width: 200px; height: autopx;''></td>";
                  echo "<td>" . $row["product_price"] . "</td>";
                  echo "<td><a href='Remove_Product.php?product_id=" . $row["product_id"] . "' class='btn btn-danger'>Remove</a></td>";
                  echo "</tr>";
                }
                echo "</tbody></table>";
              } else {
                echo "No Products Found.";
              }
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- content-wrapper ends -->
  <!-- partial:../../partials/_footer.html -->

  <!-- partial -->
</div>
<!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->
<script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="../../assets/js/off-canvas.js"></script>
<script src="../../assets/js/hoverable-collapse.js"></script>
<script src="../../assets/js/misc.js"></script>
<script src="../../assets/js/settings.js"></script>
<script src="../../assets/js/todolist.js"></script>
<!-- endinject -->
<!-- Custom js for this page -->
<!-- End custom js for this page -->
</body>
</html>
