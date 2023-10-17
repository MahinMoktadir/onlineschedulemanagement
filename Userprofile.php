<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>User Profile</title>
<style>
   #header h1 {
            color: #ffffff;
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
            text-decoration: none;
            padding: 8px 16px;
            border: 1px solid #ffffff;
            border-radius: 4px;
        }
        #menu-bar a:hover {
            background-color: #ffffff;
            color: #000000;
        }
        /* Routine button styles */
        #routine-buttons {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 1;
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
            border: 1px solid #222020;
        }
     body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
  }

  header {
    background-color: #35424a;
    color: #ffffff;
    text-align: center;
    padding: 1rem;
  }

  .container {
    max-width: 800px;
    margin: 2rem auto;
    padding: 1rem;
    background-color: #ffffff;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
  }

  .profile {
    display: flex;
    align-items: center;
    margin-bottom: 1rem;
  }

  .profile-image {
    width: 100px;
    height: 100px;
    border-radius: 50%;
    object-fit: cover;
    margin-right: 1rem;
  }

  .profile-info {
    flex: 1;
  }

  .profile-info h2 {
    margin: 0;
  }

  .profile-info .user-info {
    display: flex;
    flex-direction: column;
    gap: 0.5rem;
  }

  .profile-info .user-info p {
    margin: 0;
    color: #777777;
  }

  .edit-button {
    background-color: #3498db;
    color: #ffffff;
    border: none;
    cursor: pointer;
    padding: 0.25rem 0.5rem;
    border-radius: 4px;
  }
</style>
</head>
<body>
  <header>
    <h1>User Profile</h1>
    <div id="header">
      <div id="menu-bar">
        <a href="home.php" style="margin-left: auto;">Home</a>
        <a href="Contactus.php" class="contact_us">Contact Us</a>
        <a href="Registrationpage.php" class="user-profile">Registration</a>
      </div>
  </header>

  <div class="container">
    <div class="profile">
      <div class="profile-info">
        <h2><?php echo "John Doe"; ?></h2>
        <div class="user-info">
          <p>Username: <span id="username"><?php echo "johndoe"; ?></span> <button class="edit-button" onclick="editField('username')">Edit</button></p>
          <p>Email: <span id="email"><?php echo "johndoe@example.com"; ?></span> <button class="edit-button" onclick="editField('email')">Edit</button></p>
          <p>Department: <span id="department"><?php echo "Computer Science"; ?></span> <button class="edit-button" onclick="editField('department')">Edit</button></p>
          <p>Date of Birth: <span id="dateOfBirth"><?php echo "1990-01-01"; ?></span> <button class="edit-button" onclick="editField('dateOfBirth')">Edit</button></p>
          <!-- Add more fields as needed -->
        </div>
      </div>
      <img class="profile-image" src="d:\Projects\Website\download.png" alt="User Profile Image">
    </div>
    <div style="text-align: center; margin-top: 2rem;">
      <a href="home.php" class="edit-button">Logout</a> <!-- Login button -->
      <a href="loginpage.html" class="edit-button">Login</a> <!-- Login button -->
    </div>
  </div>

  <script>
    // ... existing JavaScript code ...

    // Function to handle logout
    function logout() {
      // Perform logout actions (e.g., clear session, redirect to login page, etc.)
      // You should implement the actual logout functionality here
      // For example:
      // window.location.href = 'logout.php';
    }
    function editField(field) {
      const fieldValue = document.getElementById(field);
      const newValue = prompt(`Edit ${field}:`, fieldValue.textContent);
      if (newValue !== null && newValue !== '') {
        fieldValue.textContent = newValue;
      }
    }
  </script>
</body>
</html>
