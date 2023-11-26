<?php
session_start();

if (isset($_SESSION['Admin_Email'])) { // check if session variable is set
    $email = $_SESSION['Admin_Email']; // assign session variable value to $email variable
  } else {
    $email = ''; // set $email variable to empty string if session variable is not set
  }
  require './Master_Layout/header.php';

// Check if the form is submitted
if (isset($_POST["submit"])) {
    // Get form data
    $category_id = $_POST["category_id"];
    $category_name = $_POST["category_name"];

    $con = mysqli_connect("localhost","root","","Coza_Store") or die("Conection Failed");
    
    // Prepare SQL statement to insert data into the table
    $sql = "INSERT INTO categories (category_id, category_name) VALUES ('$category_id', '$category_name')";

    if ($con->query($sql) === TRUE) {

    } else {

    }
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
                        
                        <div class="available-categories">
                            <?php
                            $con = mysqli_connect("localhost", "root", "", "Coza_Store") or die("Connection Failed");
                            $query = "SELECT COUNT(*) as total_users FROM categories";
                            $result = mysqli_query($con, $query);
                            $row = mysqli_fetch_assoc($result);
                            $total_users = $row['total_users'];
                            ?>
                            <h4>Available Categories: <?php echo $total_users; ?></h4>
                            <hr>
                        </div>
                        <form class="login100-form validate-form" method="POST">
                        
                        <!-- Category ID -->
                            <div class="form-group">
                                <label for="category_id">Category Number</label>
                                <br>
                                <br>
                                
                                <input class="form-control" type="text" name="category_id" id="category_id" placeholder="Category Number">
                            </div>
                            <!-- Category Name -->
                            <div class="form-group">
                                <label for="category_name">Category Name</label>
                                <input class="form-control" type="text" name="category_name" id="category_name" placeholder="Category Name">
                            </div>
                            
                            <!-- Submit Button -->
                            <div class="form-group">
                                <input type="submit" name="submit" value="Add Category" class="my-button">
                            </div>
                            <?php
                if (isset($_POST['submit'])) {
                    // Process form submission
                    // Add your PHP code here to handle the form data

                    // Display the success alert
                    echo '<div class="alert alert-success" role="alert">Category Added Succesfully</div>';
                    echo '<meta http-equiv="refresh" content="3;url=Category.php">';
                }
                ?>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .my-button {
        background-color: #4CAF50;
        width: 100%;
        border: none;
        color: white;
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
        border-radius: 4px;
        transition: background-color 0.3s ease;
    }

    .my-button:hover {
        background-color: #3e8e41;
    }

    .form-control {
        font-family: Arial, sans-serif;
        font-size: 16px;
        color: #333333;
        line-height: 1.2;
        border-radius: 10px;
        background: #f2f2f2;
        padding: 16px 20px;
        width: 100%;
        border: none;
        margin-bottom: 20px;
        box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
    }

    .form-control:focus {
        background: #e6e6e6;
        outline: none;
        box-shadow: 0px 3px 6px rgba(0, 0, 0, 0.2);
    }
</style>
