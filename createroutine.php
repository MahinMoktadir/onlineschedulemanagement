<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Course and Classroom Management</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      text-align: center;
    }

    header {
      background-color: #b092e8;
      color: #ffffff;
      padding: 10px;
    }

    main {
      margin: 20px;
    }

    .form-section {
      background-color: #f9f9f9;
      border: 1px solid #ddd;
      border-radius: 10px;
      padding: 20px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .form-section h2 {
      margin-bottom: 20px;
    }

    .form-section label {
      font-weight: bold;
    }

    .form-section input,
    .form-section select,
    .form-section button {
      margin: 10px 0;
      padding: 8px;
      border: 1px solid #ddd;
      border-radius: 5px;
      width: 100%;
      max-width: 400px;
    }

    .form-section button {
      background-color: #b092e8; /* Change button color */
      color: #ffffff;
      cursor: pointer;
    }

    /* Center the button */
    .center-button {
      display: flex;
      justify-content: center;
    }
  </style>
</head>

<body>
  <header>
    <h1>Online Schedule Management</h1>
  </header>

  <main>
    <div align="center" style="margin-top:80px">
      <form name="import" method="post" enctype="multipart/form-data">
          <input type="file" name="file"/>
          <input type="submit" name="teacherexcel" id="teacherexcel" class="btn btn-info btn-lg" value="IMPORT EXCEL"/>
      </form>
      <!-- <?php
      if (isset($_POST['teacherexcel'])) {
          if (empty($_FILES['file']['tmp_name'])) {
              echo '<script>alert("Select a file first! ");</script>';
          } else {
              $file = $_FILES['file']['tmp_name'];
              $handle = fopen($file, 'r');
              $headings = true;
              while (!feof($handle)) {
                  $filesop = fgetcsv($handle, 1000);
  
                  $facno = $filesop[0];
                  $name = $filesop[1];
                  $alias = $filesop[2];
                  $designation = $filesop[3];
                  $contact = $filesop[4];
                  $email = $filesop[5];
                  if ($facno == "" || $facno == "Faculty No.") {
                      continue;
                  }
                  $q = mysqli_query(mysqli_connect("localhost", "root", "", "ttms"),
                      "INSERT INTO teachers VALUES ('$facno','$name','$alias','$designation','$contact','$email')");
                  if ($q) {
                      $sql = "CREATE TABLE " . $facno . " (
                  day VARCHAR(10) PRIMARY KEY, 
                  period1 VARCHAR(30),
                  period2 VARCHAR(30),
                  period3 VARCHAR(30),
                  period4 VARCHAR(30),
                  period5 VARCHAR(30),
                  period6 VARCHAR(30)
                  )";
                      mysqli_query(mysqli_connect("localhost", "root", "", "ttms"), $sql);
                      $days = array('monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday');
                      for ($i = 0; $i < 6; $i++) {
                          $day = $days[$i];
                          $sql = "INSERT into " . $facno . " VALUES('$day','','','','','','')";
                          mysqli_query(mysqli_connect("localhost", "root", "", "ttms"), $sql);
                      }
                  }
              }
          }
      }
      ?> -->
  </div>
    <div class="form-section">
      <h2>Add Teacher</h2>
      <form action="addteacherFormValidation.php" method="POST" id="addTeacherForm">
        <div class="form-group">
          <label for="teachername">Teacher's Name</label>
          <input type="text" class="form-control" id="teachername" name="TN" placeholder="Teacher's Name ...">
        </div>
        <div class="form-group">
          <label for="TF">Department Name</label>
          <input type="text" class="form-control" id="facultyno" name="TF" placeholder="Faculty No ...">
        </div>
        <div class="form-group">
          <label for="designation">Designation</label>
          <select class="form-control" id="designation" name="TD">
            <option selected disabled>Select</option>
            <option value="Professor">Professor</option>
            <option value="Assistant Professor">Assistant Professor</option>
            <option value="Associate Professor">Associate Professor</option>
            <option value="Guest Faculty">Guest Faculty</option>
          </select>
        </div>
        <div class="form-group">
          <label for="teachercontactnumber">Contact No.</label>
          <input type="text" class="form-control" id="teachercontactnumber" name="TP" placeholder="+088">
        </div>
        <div class="form-group">
          <label for="teacheremailid">Email-ID</label>
          <input type="text" class="form-control" id="teacheremailid" name="TE" placeholder="abc@xyz.com ...">
        </div>
      </form>
    </div>
    <div class="form-section">
      <input type="submit" class="btn btn-default" name="ADD" value="ADD">
    </div>
  </main>

  <script>
    // Function to add course details
    function addCourse(event) {
      event.preventDefault();
      const courseCodeInput = document.getElementById('courseCode');
      const courseTitleInput = document.getElementById('courseTitle');
      const creditHourInput = document.getElementById('creditHour');
      const courseCode = courseCodeInput.value.trim();
      const courseTitle = courseTitleInput.value.trim();
      const creditHour = parseInt(creditHourInput.value);
      if (courseCode !== '' && courseTitle !== '' && !isNaN(creditHour)) {
        const courseList = document.getElementById('courseList');
        const newCourseElement = document.createElement('p');
        newCourseElement.textContent = `Course Code: ${courseCode}, Course Title: ${courseTitle}, Credit/Hour: ${creditHour}`;
        courseList.appendChild(newCourseElement);
        courseCodeInput.value = '';
        courseTitleInput.value = '';
        creditHourInput.value = '';
      }
    }

    // Function to handle the "Next" button click
    function goToNextStep() {
      // Add your logic to proceed to the next step here
      alert("Proceed to the next step!");
    }
  </script>
</body>

</html>
