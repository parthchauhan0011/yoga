<?php
// Assuming the form is submitted to the same PHP file

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Get the submitted form data
  $name = $_POST['name'];
  $contact = $_POST['contact'];
  $height = $_POST['height'];
  $weight = $_POST['weight'];
  $healthProblem = $_POST['health_problem'];
  $eatingHabits = $_POST['eating_habits'];

  // Store the data (You can customize this part according to your requirements)
  store
