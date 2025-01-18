<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Celebrations</title>
    <style>
        /* Global Styles */
        body {
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-image: url('https://www.nist.gov/sites/default/files/styles/960_x_960_limit/public/images/2019/09/12/crowdofpeople.jpg?itok=9bSwoLUL');
            background-size: cover;
            background-position: center;
            color: #fff;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .contact-container {
            background-color: rgba(0, 0, 0, 0.7); /* More transparent background */
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.5);
            width: 95%;
            max-width: 800px;
            margin: 20px;
            box-sizing: border-box; /* Ensures padding doesn't push elements outside */
        }

        .contact-container h1 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 2.2em;
        }

        .contact-container form {
            display: flex;
            flex-direction: column;
        }

        .contact-container label {
            margin-bottom: 10px;
            font-weight: bold;
        }

        .contact-container input, 
        .contact-container textarea, 
        .contact-container select, 
        .contact-container button {
            margin-bottom: 20px;
            padding: 10px;
            font-size: 1em;
            border: none;
            border-radius: 5px;
            outline: none;
            box-sizing: border-box; /* Prevents overflow */
        }

        .contact-container input, 
        .contact-container textarea, 
        .contact-container select {
            width: 100%;
            background-color: #f7f7f7;
            color: #333;
        }

        .contact-container textarea {
            resize: none;
        }

        .contact-container button {
            background-color: #3498db;
            color: #fff;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .contact-container button:hover {
            background-color: #2980b9;
        }

        @media (max-width: 768px) {
            .contact-container {
                padding: 20px;
            }
        }
    </style>
</head>
<body>
    <div class="contact-container">
        <h1>Describe Your event</h1>
        <form action="submit_event.php" method="POST">
            <label for="name">Your Name</label>
            <input type="text" id="name" name="name" placeholder="Enter your name" required>

            <label for="email">Email Address</label>
            <input type="email" id="email" name="email" placeholder="Enter your email" required>

            <label for="phone">Phone Number</label>
            <input type="tel" id="phone" name="phone" placeholder="Enter your phone number" required>

            <label for="event-type">Event Type</label>
            <select id="event-type" name="event_type" required>
                <option value="" disabled selected>Select event type</option>
                <option value="birthday">Birthday</option>
                <option value="wedding">Wedding</option>
                <option value="retirement">Retirement</option>
                <option value="youth-party">Youth Party</option>
                <option value="other">Other</option>
            </select>

            <label for="age-group">Age Group (if applicable)</label>
            <select id="age-group" name="age_group">
                <option value="" disabled selected>Select age group</option>
                <option value="children">Children</option>
                <option value="teens">Teens</option>
                <option value="adults">Adults</option>
                <option value="all-ages">All Ages</option>
            </select>

            <label for="event-description">Event Description</label>
            <textarea id="event-description" name="event_description" rows="5" placeholder="Describe your event, any specific requirements, theme, etc." required></textarea>

            <label for="event-date">Event Date</label>
            <input type="date" id="event-date" name="event_date" required>

            <button type="submit">Submit</button>
        </form>
    </div>

    <?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Collect form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $event_type = $_POST['event_type'];
    $age_group = $_POST['age_group'];
    $event_description = $_POST['event_description'];
    $event_date = $_POST['event_date'];

    // Database connection
    $con = mysqli_connect("localhost", "root", "WJ28@krhps", "event_managment");

    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Check if the 'booking' table exists, if not, create it (make sure it's properly structured)
    $createTableQuery = "CREATE TABLE IF NOT EXISTS booking (
        id INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(50),
        email VARCHAR(100),
        phone VARCHAR(20),
        event_type VARCHAR(50),
        age_group VARCHAR(50),
        event_description TEXT,
        event_date DATE
    )";

    mysqli_query($con, $createTableQuery);

    // Insert data into the booking table
    $insertQuery = "INSERT INTO booking (name, email, phone, event_type, age_group, event_description, event_date) 
                    VALUES ('$name', '$email', '$phone', '$event_type', '$age_group', '$event_description', '$event_date')";

    if (mysqli_query($con, $insertQuery)) {
        // Redirect to main.php with a success query parameter
        header('Location: main.php');
        exit(); // Ensure no further code is executed after the redirect
    } else {
        echo "<script>alert('Error: " . mysqli_error($con) . "');</script>";
    }

    // Close the database connection
    mysqli_close($con);
}
?>
</body>
</html>
