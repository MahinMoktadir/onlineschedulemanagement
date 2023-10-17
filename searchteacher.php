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

  input, button {
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

  /* Show Routine Section */
  .show-routine-section {
    display: none;
    margin-top: 1rem;
  }
  .show-routine-section.show {
    display: block;
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
          <a href="Userprofile.html" class="contact_us">Profile</a>
        </div>
      </div>
  </header>

  <div class="container">
    <div class="search-form">
      <input type="text" id="searchInput" placeholder="Enter Teacher Name">
      <button id="searchButton">Search</button>
    </div>
    <div class="show-routine-section" id="showRoutineSection">
      <h2 id="teacherName">Teacher Routine</h2>
      <ul class="routine-list" id="routineList">
        <!-- Routine items will be displayed here -->
      </ul>
    </div>
  </div>

  <script>
    const searchInput = document.getElementById("searchInput");
    const searchButton = document.getElementById("searchButton");
    const showRoutineSection = document.getElementById("showRoutineSection");
    const routineList = document.getElementById("routineList");
    const teacherNameHeading = document.getElementById("teacherName");

    // Replace this with actual routine data or fetch routines from a data source
    const routinesByTeacher = {
      "John Doe": [
        { day: "Monday", time: "8:15 AM - 9:10 AM", course: "CSE-3105", batch: "Batch 13 - Section A" },
        { day: "Wednesday", time: "9:15 AM - 10:10 AM", course: "PHY-2102", batch: "Batch 13 - Section A" },
        // Add more routines
      ],
      "Jane Smith": [
        { day: "Tuesday", time: "10:15 AM - 11:10 AM", course: "ENG-1101", batch: "Batch 14 - Section B" },
        { day: "Thursday", time: "11:15 AM - 12:10 PM", course: "HIS-2203", batch: "Batch 14 - Section B" },
        // Add more routines
      },
      // Add more teachers
    };

    searchButton.addEventListener("click", () => {
      const teacherName = searchInput.value.trim();
      if (routinesByTeacher[teacherName]) {
        const teacherRoutines = routinesByTeacher[teacherName];

        routineList.innerHTML = teacherRoutines.map(routine => {
          return `<li>Day: ${routine.day}, Time: ${routine.time}, Course: ${routine.course}, Batch: ${routine.batch}</li>`;
        }).join("");

        teacherNameHeading.textContent = `${teacherName} Routine`; // Update teacher name heading
        showRoutineSection.classList.add("show");
      } else {
        routineList.innerHTML = "<p>No routine found for the selected teacher.</p>";
        teacherNameHeading.textContent = "Teacher Routine"; // Reset teacher name heading
        showRoutineSection.classList.remove("show");
      }
    });
  </script>
</body>
</html>
