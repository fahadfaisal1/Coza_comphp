<!DOCTYPE html>
<html>
<head>
  <title>My Profile</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <h1>My Profile</h1>

    <form>
      <div class="form-group">
        <!-- <label for="image">Image:</label> -->
        <div class="profile-image">
          <!-- <img src="./Admin/product_images/1.png" alt=""> -->
          <?php
          
          ?>
        </div>
      </div>

      <div class="form-group">
        <label for="email">Username</label>
        <input type="email" id="email" name="email">
      </div>
      <div class="form-group">
        <label for="email">Email ID:</label>
        <input type="email" id="email" name="email">
      </div>
      <div class="form-group">
        <label for="email">My Number:</label>
        <input type="email" id="email" name="email">
      </div>
      <div class="form-group">
        <label for="email">My Address:</label>
        <input type="email" id="email" name="email">
      </div>
      <div class="form-group">
        <label for="email">City:</label>
        <input type="email" id="email" name="email">
      </div>

      <input type="submit" value="Save Profile" class="btn">
    </form>
  </div>
</body>
</html>
<style>
* {
  box-sizing: border-box;
}

body {
  margin: 0;
  font-family: Arial, sans-serif;
  background-color: #f2f2f2;
}

.container {
  max-width: 500px;
  margin: 0 auto;
  padding: 20px;
  background-color: #fff;
  border-radius: 10px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
}

h1 {
  text-align: center;
}

.form-group {
  margin-bottom: 20px;
}

label {
  display: block;
  margin-bottom: 5px;
}

input[type="file"] {
  display: block;
}

input[type="email"] {
  width: 100%;
  padding: 10px;
  border: none;
  border-radius: 5px;
  box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
}

.btn {
  display: block;
  width: 100%;
  padding: 10px;
  border: none;
  border-radius: 5px;
  background-color: #4CAF50;
  color: #fff;
  font-size: 18px;
  cursor: pointer;
  transition: background-color 0.3s;
}

.btn:hover {
  background-color: #3e8e41;
}

.profile-image {
  width: 150px;
  height: 150px;
  border-radius: 50%;
  overflow: hidden;
}

.profile-image img {
  object-fit: cover;
  width: 100%;
  height: 100%;
}
</style>
