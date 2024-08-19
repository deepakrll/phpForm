<?php
// Include the database connection file
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $mobile_number = $_POST['mobile_number'];
    $email = $_POST['email'];

    // Validate the input
    if (!empty($name) && !empty($age) && !empty($mobile_number) && !empty($email)) {
        // Prepare the SQL statement
        $stmt = $con->prepare("INSERT INTO students (name, age, mobile_number, email) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("siss", $name, $age, $mobile_number, $email);

        // Execute the statement
        if ($stmt->execute()) {
            echo "Registration successful!";
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "All fields are required!";
    }
}

$con->close();
?>
