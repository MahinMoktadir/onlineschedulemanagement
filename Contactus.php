<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us</title>
  <link rel="stylesheet" href="style.css">
  <style>
    /* ... existing CSS styles ... */
    body {
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
      text-align: center;
    }
    /* ... existing CSS styles ... */
    .contact-box {
      background-color: #f9f9f9;
      border: 1px solid #ddd;
      border-radius: 10px;
      padding: 20px;
      margin: 50px auto;
      max-width: 600px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    .contact-box h2 {
      margin-bottom: 20px;
    }
    .contact-box ul {
      list-style: none;
      padding: 0;
      margin: 0;
      text-align: left;
    }
    .contact-box ul li {
      margin-bottom: 10px;
    }
    .contact-form {
      text-align: center;
    }
    .contact-form form {
      display: flex;
      flex-direction: column;
      align-items: center;
    }
    .contact-form label {
      font-weight: bold;
    }
    .contact-form input,
    .contact-form textarea,
    .contact-form button {
      margin: 10px 0;
      padding: 8px;
      border: 1px solid #ddd;
      border-radius: 5px;
      width: 100%;
      max-width: 400px;
    }
    .contact-form textarea {
      resize: vertical;
    }
    .contact-form button {
      background-color: #b092e8;
      color: #ffffff;
      cursor: pointer;
    }
  </style>
</head>

<body>
  <header>
    <h1>Contact Us</h1>
  </header>

  <main>
    <div class="contact-box">
      <h2>Our Contact Information</h2>
      <ul>
        <li>Email: Online Routine Mannagement </li>
        <li>Phone: 01789-453464</li>
        <li>Address: Dhaka-1200</li>
      </ul>
    </div>

    <section class="contact-form">
      <h2>Contact Form</h2>
      <form action="submit_contact_form.php" method="POST">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="message">Message:</label>
        <textarea id="message" name="message" rows="5" required></textarea>

        <button type="submit">Send Message</button>
      </form>
    </section>
  </main>

  <footer>
    <p>&copy; 2023 Online Routine Mannagement. All rights reserved.</p>
  </footer>
</body>

</html>
