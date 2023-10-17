<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select Batches and Classrooms</title>
    <style>
        /* Your CSS styles go here */

        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }

        header {
            background-color: #b092e8;
            color: #ffffff;
            padding: 10px;
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        header a {
            color: #ffffff;
            text-decoration: none;
            padding: 8px 16px;
            border-radius: 4px;
            margin: 0 5px;
        }

        header a.home {
            border: 2px solid #091623; /* Blue border for Home button */
        }
        header a.contact_us {
            border: 2px solid #091623; /* Blue border for Home button */
        }
        header a.user_profile {
            border: 2px solid #091623; /* Blue border for Home button */
        }

        .container {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
        }

        .container h2 {
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            font-weight: bold;
            display: block;
        }

        .form-row {
            display: grid;
            grid-template-columns: repeat(6, 1fr);
            gap: 10px;
            background-color: #FFA500; /* Orange background color */
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 20px;
        }

        select {
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 5px;
            width: 100%;
            max-width: 300px;
            height: 150px; /* Adjust the height for multiple selections */
        }

        .select-all-button,
        .generate-button {
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 5px 10px;
            cursor: pointer;
            width: 100%;
            max-width: 150px;
            margin: 0 auto;
            display: block; /* Make the buttons take up full width */
        }

        .generate-button {
            background-color: #28a745;
            padding: 10px 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Select Batches and Classrooms</h2>
        <form>
            <div class="form-row">
                <div class="form-group" style="grid-column: span 6;">
                    <label for="batch">Select Batches:</label>
                    <select id="batch" name="batch[]" multiple>
                        <option value="Batch 1">Batch 1</option>
                        <option value="Batch 2">Batch 2</option>
                        <option value="Batch 3">Batch 3</option>
                        <!-- Add more batch options as needed -->
                    </select>
                    <button type="button" class="select-all-button" id="selectAllBatchButton">Select All</button>
                </div>
                <div class="form-group" style="grid-column: span 6;">
                    <label for="classroom">Select Classrooms:</label>
                    <select id="classroom" name="classroom[]" multiple>
                        <option value="Classroom A">Classroom A</option>
                        <option value="Classroom B">Classroom B</option>
                        <option value="Classroom C">Classroom C</option>
                        <!-- Add more classroom options as needed -->
                    </select>
                    <button type="button" class="select-all-button" id="selectAllClassroomButton">Select All</button>
                </div>
                <div class="form-group" style="grid-column: span 6; text-align: center;">
                    <button type="button" class="generate-button" id="generateScheduleButton">Generate Schedule</button>
                </div>
            </div>
        </form>
    </div>

    <script>
        const selectAllBatchButton = document.getElementById('selectAllBatchButton');
        const selectAllClassroomButton = document.getElementById('selectAllClassroomButton');
        const batchSelect = document.getElementById('batch');
        const classroomSelect = document.getElementById('classroom');
        const generateScheduleButton = document.getElementById('generateScheduleButton');

        selectAllBatchButton.addEventListener('click', () => {
            Array.from(batchSelect.options).forEach(option => {
                option.selected = true;
            });
        });

        selectAllClassroomButton.addEventListener('click', () => {
            Array.from(classroomSelect.options).forEach(option => {
                option.selected = true;
            });
        });

        generateScheduleButton.addEventListener('click', () => {
            // Add your schedule generation logic here
            alert('Generating schedule...');
        });
    </script>
</body>

</html>
