
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>online Schedule Mannagement</title>
    <style>
        /* ... existing CSS styles ... */
        body {
            margin: 0;
            padding: 0;
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
            background-image: url("d:/Projects/Website/backgound.jpg");
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

<body>
    <div id="header">
        <h1>Online Schedule Mannagement</h1>

    </div>
    <div id="content">
        <!-- ... existing HTML code ... -->

        <div id="routine-buttons">
            <!-- Modify the anchor element below to point to the "createroutine" page -->
            <a href="option1.php" class="custom-button" onclick="login()">
                <img src="d:\Projects\Website\10613736_10172.jpg" alt="login">
                login
            </a>
            <a href="option2.php" class="custom-button" onclick="registration()">
                <img src="d:\Projects\Website\10613736_10172.jpg" alt="Registration">
                Registration
            </a>
            <a href="Contactus.php" class="custom-button" onclick="Contactus()">
                <img src="d:\Projects\Website\288ppi\Asset 1.png" alt="Contactus">
                Contact Us
            </a>

        </div>

        <!-- ... rest of the HTML code ... -->

    </div>

    <!-- Slide menu content -->
    

    <!-- Include Font Awesome for icons (not needed if you're using custom images) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- JavaScript functions for the buttons -->
    <script>
        // JavaScript functions for the buttons
        function redirectToCreateRoutine() {
            const loggedIn = sessionStorage.getItem('loggedIn');
            if (loggedIn === 'true') {
                window.location.href = 'createroutine.html';
            } else {
                window.location.href = 'loginpage.html';
            }
        }
        function loginDemo() {
            sessionStorage.setItem('loggedIn', 'true');
            updateButtonVisibility();
        }

        // ... other JavaScript code ...

        // JavaScript functions (same as in the previous example)
        // ...

        // JavaScript to toggle the slide menu
        const menuToggle = document.getElementById('menu-toggle');
        const slideMenu = document.querySelector('.slide-menu');

        menuToggle.addEventListener('click', () => {
            slideMenu.style.left = slideMenu.style.left === '0px' ? '-250px' : '0px';
        });
    </script>
    <section class="about-me-sec">

    </section>
</body>

</html>