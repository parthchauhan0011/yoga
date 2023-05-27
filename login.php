<?php
// Assuming the form is submitted to the same PHP file

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Get the submitted email/phone and password
  $emailPhone = $_POST['emailphone'];
  $password = $_POST['password'];

  // Validate the login credentials (You can customize this part according to your requirements)
  if (validateCredentials($emailPhone, $password)) {
    // Redirect the user to the dashboard or any other page
    header('Location: dashboard.php');
    exit;
  } else {
    // Invalid credentials, show an error message
    echo 'Invalid email/phone or password. Please try again.';
  }
}

// Function to validate the login credentials (Dummy example)
function validateCredentials($emailPhone, $password) {
  // Here you would typically query a database or check against your user data
  // Return true if the credentials are valid, otherwise return false
  // This is just a dummy example, replace it with your actual validation logic
  $validEmailPhone = 'user@example.com'; // Example valid email/phone
  $validPassword = 'password'; // Example valid password

  if (($emailPhone === $validEmailPhone || $emailPhone === '+1234567890') && $password === $validPassword) {
    return true;
  } else {
    return false;
  }
}
?>
