<!DOCTYPE html>
<html>
<head>
    <title>Registration Page</title>
    <style>

        body {
            margin: 0;
            padding: 40px;
            font-family: Arial, sans-serif;
            text-align: center;
            overflow: hidden;
            /* Prevent scrollbars due to fixed background */
        }

        body::before {
            content: "";
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url("d:/project_ttms/project_ttms/assets/img/backgound.jpg");
            /* Replace with the actual path to your background image */
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            filter: blur(5px);
            /* Adjust the blur value as needed for the desired effect */
            z-index: -1;
            /* Ensure the background is behind all other elements */
        }

        /* ... existing CSS styles ... */
        #header {
            background-color: rgba(0, 0, 0, 0.5);
            /* Semi-transparent black background for the header */
            padding: 10px;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            z-index: 1;
            /* Ensure the header is above the background */
        }

        #header h1 {
            color: #ffffff;
            /* Header text color */
            margin: 0;
            padding: 0;
        }

        #menu-bar {
            display: flex;
            gap: 20px;
            align-items: center;
        }

        #menu-bar a {
            color: #ffffff;
            /* Menu text color */
            text-decoration: none;
            padding: 8px 16px;
            border: 1px solid #ffffff;
            /* Menu border */
            border-radius: 4px;
        }

        #menu-bar a:hover {
            background-color: #ffffff;
            /* Menu background color on hover */
            color: #000000;
            /* Menu text color on hover */
        }

        #routine-buttons {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 1;
            /* Ensure the buttons are above the background */
        }

        .custom-button {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 10px;
            padding: 15px;
            background-color: #ffffff;
            border: 1px solid #000000;
            border-radius: 10px;
            /* Adjust the border-radius to make the buttons slightly rounded */
            font-size: 16px;
            cursor: pointer;
            text-decoration: none;
            color: #000000;
            transition: background-color 0.3s ease;
        }

        .custom-button img {
            width: 50px;
            height: 50px;
            margin-bottom: 10px;
        }

        .custom-button:hover {
            background-color: #b092e8;
            color: #000000;
            /* Change the text color on hover */
            border: 1px solid #222020;
            /* Change the border color on hover */
        }

        /* Slide menu styles */
        .slide-menu {
            position: fixed;
            top: 0;
            left: -250px;
            width: 250px;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            z-index: 2;
            padding-top: 50px;
            transition: left 0.3s ease;
        }

        .slide-menu a {
            color: #ffffff;
            text-decoration: none;
            display: block;
            padding: 10px;
            transition: background-color 0.3s ease;
        }

        .slide-menu a:hover {
            background-color: #333333;
        }
    </style>
</head>
</head>
<body>
<div id="header">
        <h1>online Schedule Mannagement</h1>
        <div id="menu-bar">
            <a href="home.php">Home</a>
            <a href="Contactus.php" class="contact_us">contact-us</a>
    

        </div>
    </div>
    <h1>Select Registration Option</h1>
    <div id="content">
        <div id="routine-buttons">

            <a href="stdregis.php" class="custom-button">
                <img src="d:\Projects\Website\edit-interface-symbol-of-a-pencil-on-a-square-outline-paper.png"
                    alt="Create Routine">
                    Student Registration
            </a>
            <a href="adreg.php" class="custom-button" onclick="showRoutine()">
                <img src="d:\Projects\Website\10613736_10172.jpg" alt="Find Your Routine">
                Teacher Registration
            </a>

        </div>

    <script>
        function studentLogin() {
            // Add your student login logic here
            alert("Student Login clicked");
        }
        
        function adminLogin() {
            // Add your admin login logic here
            alert("Admin Login clicked");
        }
    </script>
</body>
</html>
