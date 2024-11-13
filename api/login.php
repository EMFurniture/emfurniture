<?php
// Include your database connection file
include_once '../conn/conn.php'; 

session_start(); // Start session for authentication

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Get username and password from the request
  $username = $_POST['username'];
  $password = $_POST['password'];

  // Sanitize inputs
  $username = mysqli_real_escape_string($conn, $username);
  $password = mysqli_real_escape_string($conn, $password);

  // Query the database
  $sql = "SELECT * FROM users WHERE username = '$username'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();

    // Verify password
    if (password_verify($password, $row['password'])) {
      // Login successful
      $_SESSION['isLoggedIn'] = true;
      $_SESSION['user_id'] = $row['id']; // Store user ID in the session

      // Return a success response to AngularJS
      echo json_encode(array('success' => true, 'username' => $username));
    } else {
      // Invalid password
      echo json_encode(array('success' => false, 'error' => 'Incorrect password'));
    }
  } else {
    // User not found
    echo json_encode(array('success' => false, 'error' => 'User not found'));
  }

  $conn->close();
}
?>