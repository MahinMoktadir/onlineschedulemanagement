<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Routine Search</title>
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
</style>
</head>
<body>
  <header>
    <h1>Routine Search</h1>
    <div id="header">
        <div id="menu-bar">
          <a href="home.html" style="margin-left: auto;">Home</a>
          <a href="Contactus.html" class="contact_us">Contact Us</a>
          <a href="Userprofile.html" class="user-profile">Profile</a>
        </div>
      </div>
      
  </header>

  <div class="container">
    <div class="search-form">
      <select id="searchType">
        <option value="batch">Search by Batch</option>
        <option value="teacher">Search by Teacher</option>
      </select>
      <input type="text" id="searchInput" placeholder="Enter Batch or Teacher Name">
      <!-- Add a new select element for batch sections -->
      <select id="batchSectionSelect" style="display: none;">
        <option value="">No Section</option>
        <option value="sectionA">Section A</option>
        <option value="sectionB">Section B</option>
      </select>
      <button id="searchButton">Search</button>
    </div>
    <div id="batchSection" style="display: none;">
    </div>
    <ul class="routine-list" id="routineList">
      <!-- Routine items will be displayed here -->
    </ul>
  </div>

  <script>
    const searchTypeSelect = document.getElementById("searchType");
    const searchInput = document.getElementById("searchInput");
    const batchSection = document.getElementById("batchSection");
    const searchButton = document.getElementById("searchButton");
    const batchSectionSelect = document.getElementById("batchSectionSelect");
    const routineList = document.getElementById("routineList");

    // Replace this with actual routine data or fetch routines from a data source
    const routinesByBatch = {
      "Batch 13 - Section A": {
        pdfPath: "d:/Projects/Website/13th batch_3rd year_1st semesteqwqr.pdf",
        routines: [
          { day: "Monday", time: "8:15 AM - 9:10 AM", course: "CSE-3105", teacher: "John Doe (MAR)" },
          { day: "Tuesday", time: "9:15 AM - 10:10 AM", course: "PHY-2102", teacher: "Jane Smith (MAR)" },
          // Add more routines
        ]
      },
      "Batch 14 - Section B": {
        pdfPath: "d:/Projects/Website/Class_Test_Schedule(2nd year 2nd semester).pdf",
        routines: [
          { day: "Monday", time: "10:15 AM - 11:10 AM", course: "ENG-1101", teacher: "Michael Johnson (MAR)" },
          { day: "Tuesday", time: "11:15 AM - 12:10 PM", course: "HIS-2203", teacher: "Emily Brown (MAR)" },
          // Add more routines
        ]
      },
      "Batch 15": {
        pdfPath: "path/to/batch15.pdf",
        routines: [
          { day: "Wednesday", time: "2:15 PM - 3:10 PM", course: "MATH-3205", teacher: "David Lee (MAR)" },
          // Add more routines
        ]
      },
      // Add more batches
    };

    searchButton.addEventListener("click", () => {
      const selectedBatch = searchInput.value.trim();
      const selectedBatchSection = batchSectionSelect.value;

      const key = selectedBatch + (selectedBatchSection ? " - " + selectedBatchSection : "");
      if (routinesByBatch[key]) {
        const batchInfo = routinesByBatch[key];

        batchSection.innerHTML = `<h2>${key}</h2>`;
        routineList.innerHTML = "";

        // Create a list of routine items
        const routineItems = batchInfo.routines.map(routine => {
          return `<li>Day: ${routine.day}, Time: ${routine.time}, Course: ${routine.course}, Teacher: ${routine.teacher}</li>`;
        });

        routineList.innerHTML = routineItems.join("");

        // Create a link to open the PDF
        const pdfLink = document.createElement("a");
        pdfLink.textContent = "Open PDF";
        pdfLink.href = batchInfo.pdfPath;
        pdfLink.target = "_blank"; // Open PDF in a new tab
        batchSection.appendChild(pdfLink);
      } else {
        batchSection.innerHTML = "<p>No routine found for the selected batch and section.</p>";
        routineList.innerHTML = "";
      }
    });

    searchTypeSelect.addEventListener("change", () => {
      if (searchTypeSelect.value === "teacher") {
        searchInput.placeholder = "Enter Teacher Name";
        batchSection.style.display = "none";
        batchSectionSelect.style.display = "none";
      } else {
        searchInput.placeholder = "Enter Batch";
        batchSection.style.display = "block"; // Show the batch section
        batchSectionSelect.style.display = "block"; // Show the batch section select
      }
    });
  </script>
</body>
</html>
