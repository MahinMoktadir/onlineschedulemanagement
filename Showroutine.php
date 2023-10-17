<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Routine Management</title>
<style>
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

  .search-form {
    display: flex;
    flex-direction: column;
    align-items: center;
    margin-bottom: 1rem;
  }

  select, input, button {
    padding: 0.5rem;
    margin-bottom: 0.5rem;
    width: 100%;
    box-sizing: border-box;
  }

  /* Colorful Search Button */
  button#searchButton {
    background-color: #3498db;
    color: #ffffff;
    border: none;
    cursor: pointer;
    transition: background-color 0.3s;
  }

  button#searchButton:hover {
    background-color: #2980b9;
  }

  .routine-list {
    list-style: none;
    padding: 0;
  }

  .routine-item {
    border: 1px solid #ddd;
    margin-bottom: 0.5rem;
    padding: 1rem;
    background-color: #f9f9f9;
  }
  .batch-13 {
  display: block;
  background-color: #f2f2f2;
  padding: 10px;
  margin: 5px 0;
  font-weight: bold;

}
.batch-14 {
  display: block;
  background-color: #f2f2f2;
  padding: 10px;
  margin: 5px 0;
  font-weight: bold;
}
</style>
</head>
<body>
  <header>
    <h1>All Routine</h1>
    <div id="header">
        <div id="menu-bar">
          <a href="home.html" style="margin-left: auto;">Home</a>
          <a href="Contactus.html" class="contact_us">Contact Us</a>
          <a href="Userprofile.html" class="user-profile">Profile</a>
        </div>
      </div>
  </header>

  <div class="container">
    <div id="routineList">
      <h2>Routines</h2>
      <ul>
        <!-- PDF links will be dynamically added here -->
      </ul>
    </div>
  </div>

  <script>
  // ... existing JavaScript code ...

  // Replace this with actual batch data or fetch batches from a data source
  const batches = [
    { name: "Batch 13", pdfPath: "d:/Projects/Website/13th batch_3rd year_1st semesteqwqr.pdf" },
    { name: "Batch 14", pdfPath: "d:/Projects/Website/Class_Test_Schedule(2nd year 2nd semester).pdf" },
    // Add more batches
  ];

  // Populate the routine PDF links
  batches.forEach(batch => {
    const listItem = document.createElement("li");
    const pdfLink = document.createElement("a");
    pdfLink.textContent = batch.name;
    pdfLink.href = batch.pdfPath;
    pdfLink.target = "_blank"; // Open PDF in a new tab
    listItem.appendChild(pdfLink);

    if (batch.name === "Batch 13") {
      listItem.classList.add("batch-13");
    } else if (batch.name === "Batch 14") {
      listItem.classList.add("batch-14");
    }

    routineList.querySelector("ul").appendChild(listItem);
  });
</script>

</body>
</html>
