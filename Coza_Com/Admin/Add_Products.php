<?php

session_start();
if(isset($_SESSION['Admin_Email'])) 
{
    $email = $_SESSION['Admin_Email'];

}
require './Master_Layout/header.php';
$con = mysqli_connect("localhost","root","","Coza_Store") or die("Conection Failed");
// check if the form has been submitted
if(isset($_POST['submit'])) {
	// get the form data
	$product_id = $_POST['product_id'];
	$product_name = $_POST['product_name'];
	$product_description = $_POST['product_description'];
	$product_image = $_FILES['product_image']['name'];
	$product_image_tmp = $_FILES['product_image']['tmp_name'];
	$product_price = $_POST['product_price'];
	$category_id = $_POST['category_id'];

	// move the uploaded file to a permanent location
	move_uploaded_file($product_image_tmp, "product_images/$product_image");      
	// insert the product data into the database
	
$sql = "INSERT INTO `products` 
(`product_id`, 
`product_name`, 
`product_description`, 
`product_image`, 
`product_price`, 
`category_id`)
 VALUES 
 ('$product_id', 
 '$product_name', 
 '$product_description', 
 '$product_image', 
 '$product_price', 
 '$category_id')";



}
?>

  <div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">
      <nav aria-label="breadcrumb">
      </nav>
    </div>
    <div class="row">
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h1 class="card-title">Add Product</h1>
             
              <!-- yaha pe humne total products show karwaye hain  -->
                 <?php
                    $con = mysqli_connect("localhost", "root", "", "Coza_Store") or die("Connection Failed");
                    $query = "SELECT COUNT(*) AS total_products FROM products";
                    $result = mysqli_query($con, $query);
                    $row = mysqli_fetch_assoc($result);
                    $totalProducts = $row['total_products'];
                    
                    // echo '<h5>Total Products: ' . $totalProducts . '</h5>';            
                 ?>
              <h5>Total Products :<?php echo  $totalProducts ?></h5>
            <form method="post" enctype="multipart/form-data">
              <div class="form-group">
                <label for="product_id">Product Number:</label>
                <input type="text" class="form-control" id="product_id" name="product_id">
              </div>
              <div class="form-group">
                <label for="product_name">Product Name:</label>
                <input type="text" class="form-control" id="product_name" name="product_name">
              </div>
              <div class="form-group">
                <label for="product_description">Product Description:</label>
                <textarea class="form-control" id="product_description" name="product_description"></textarea>
              </div>
              <div class="form-group">
                <label for="product_image">Product Image:</label>
                <input type="file" class="form-control-file" id="product_image" name="product_image">
              </div>
              <div class="form-group">
                <label for="product_price">Product Price:</label>
                <input type="text" class="form-control" id="product_price" name="product_price">
              </div>
              <div class="form-group">
                <label for="category_id">Select Category:</label>

                <!-- yaha pe humne category id aur name show karwaya hai  -->
                <?php
                 $con = mysqli_connect("localhost","root","","Coza_Store") or die("Connection Failed");
                 $query = "SELECT category_id,category_name FROM categories";
                 $result = mysqli_query($con, $query);
                ?>
                <select class="form-control" id="category_id" name="category_id">
                  <?php while($row = mysqli_fetch_assoc($result)) { ?>
                    <option value="<?php echo $row['category_id']; ?><?php echo $row['category_name']; ?>">
                      <?php echo $row['category_id']; ?>
                      <?php echo $row['category_name']; ?>
                    </option>
                  <?php } ?>
                </select>
              </div>

              <button type="submit" name="submit" class="btn btn-primary">Add Product</button>

              <!-- yaha pe humne submit ke button pe ek alert show karwaya hai  -->
              <?php
                if (isset($_POST['submit'])) {
                    // Process form submission
                         

                    // Display the success alert
                    echo '<div class="alert alert-success" role="alert">Product Added Succesfully</div>';
                    echo '<meta http-equiv="refresh" content="3;url=Add_Products.php">';
                }
                ?>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

