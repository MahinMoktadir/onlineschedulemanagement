<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "ttms";

// Create a connection
$conn = new mysqli($host, $user, $pass, $db);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form data if the form is submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Perform SQL select query to check the login credentials
    $checkSql = "SELECT * FROM studentregistration WHERE email = '$email' AND password = '$password'";
    $result = $conn->query($checkSql);

    if ($result->num_rows > 0) {
        // Login successful
        session_start();
        $_SESSION["loggedin"] = true;

        // Redirect to the home page
        header("Location: facultypage.php");
        exit();
    }
    else {
        $loginError = "Invalid email or password. Please try again.";
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
    <title> Student Login Page</title>
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

        /* ... existing styles ... */
    </style>
</head>

<body>
    <div class="container">
        <h2>Student login</h2>
        <form method="POST" action="facultypage.php">
            <div>
                <label for="email">Email:</label>
                <input type="text" id="email" name="email" placeholder="Email" required>
            </div>
            <div>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" placeholder="Password" required>
            </div>
            <button type="submit">Login</button>
        </form>
        <p>Don't have an account? <a href="stdregis.php" id="login-link">Sign Up</a></p>
    </div>
</body>

</html>
