<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get the form data
  $name = $_POST["name"];
  $email = $_POST["email"];
  $phone = $_POST["phone"];

  // Validate the form data (you can add more validation if needed)
  if (empty($name) || empty($email) || empty($phone)) {
    echo "Please fill in all the required fields.";
  } else {
    // Connect to your database (replace with your database credentials)
    $host = "your_host";
    $username = "your_username";
    $password = "your_password";
    $database = "your_database";

    $conn = mysqli_connect($host, $username, $password, $database);

    // Check the database connection
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }

    // Prepare and execute the SQL query to insert the data
    $sql = "INSERT INTO users (name, email, phone) VALUES ('$name', '$email', '$phone')";
    if (mysqli_query($conn, $sql)) {
      echo "Registration successful!";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    // Close the database connection
    mysqli_close($conn);
  }
}
?>
