<?php
$host="localhost";
$user="root";
$pass="";
$db="ttms";

// Create a connection
$conn = new mysqli($host, $user, $pass, $db);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form data if the form is submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $First_Name = $_POST["firstname"];
    $Last_Name = $_POST["lastname"];
    $Email_Address = $_POST["email"];
    $Department = $_POST["department"];
    $Password = $_POST["password"];
    $Confirm_Password = $_POST["confirm_password"];

    // Perform SQL insert query to add the data to the database
    $sql = "INSERT INTO studentregistration (First_Name, Last_Name, Email_Address, Department, Password, Confirm_Password) VALUES ('$First_Name', '$Last_Name', '$Email_Address', '$Department', '$Password', '$Confirm_Password')";

    if ($conn->query($sql) === TRUE) {
        // Registration successful, redirect to the login page
        header("Location: stdlogin.php");
        exit(); // Make sure to exit to prevent further execution of the script
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}



// Close the connection
$conn->close();
?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f9f3ec;
        }

        .container {
            width: 300px;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        }

        .container h2 {
            color: #007bff;
        }

        .container label {
            display: block;
            text-align: left;
            margin-bottom: 5px;
        }

        .container input {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .container button[type="submit"] {
            width: 100%;
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .container p {
            margin-top: 15px;
        }

        .container a {
            color: #007bff;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Student Registration</h2>
        <form method="POST" action="">
            <div>
                <label for="firstname">First Name:</label>
                <input type="text" id="firstname" name="firstname" placeholder="" required>
            </div>
            <div>
                <label for="lastname">Last Name:</label>
                <input type="text" id="lastname" name="lastname" placeholder="" required>
            </div>
            <div>
                <label for="email">Email Address:</label>
                <input type="email" id="email" name="email" placeholder="" required>
            </div>
            <div>
                <label for="department">Department:</label>
                <input type="text" id="department" name="department" placeholder="" required>
            </div>
            <div>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" placeholder="" required>
            </div>
            <div>
                <label for="confirm_password">Confirm Password:</label>
                <input type="password" id="confirm_password" name="confirm_password" placeholder="" required>
            </div>
            <button type="submit">Register</button>
        </form>
        <p>Already have an account? <a href="stdlogin.php" id="login-link">Login</a></p>
    </div>
</body>

</html>
