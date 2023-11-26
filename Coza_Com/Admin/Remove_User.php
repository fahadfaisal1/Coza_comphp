<?php
$con = mysqli_connect("localhost","root","","Coza_Store") or die("Conection Failed");
// Check if the user ID is set in the URL
if (isset($_GET['user_id'])) {
    // Get the user ID from the URL
    $user_id = $_GET['user_id'];

    // Prepare an SQL statement to delete the user record
    $sql = "DELETE FROM users WHERE user_id = ?";

    // Create a prepared statement
    $stmt = mysqli_prepare($con, $sql);

    // Bind the user ID parameter to the prepared statement
    mysqli_stmt_bind_param($stmt, "i", $user_id);

    // Execute the prepared statement to delete the user record
    if (mysqli_stmt_execute($stmt)) {
        // Redirect to the page that displays the user table
        header("Location: users.php");
        exit();
    } else {
        // Display an error message if the user record could not be deleted
        echo "Error deleting user record: " . mysqli_error($con);
    }
} else {
    // Display an error message if the user ID is not set in the URL
    echo "Error: User ID is not set.";
}


?>