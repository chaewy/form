<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect the user inputs
    $name = $_POST["name"];
    $email = $_POST["email"];

    // Process the data (You can perform additional validation or database operations here)

    // Display a simple confirmation message
    echo "Thank you, $name! Your email ($email) has been recorded.";
} else {
    // If someone tries to access this script directly without submitting the form
    echo "Oops! It seems like you are not supposed to be here.";
}

?>
