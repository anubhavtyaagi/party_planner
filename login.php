<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Malhaar</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            height: 100vh;
            overflow: hidden;
            background-image: url('https://www.nist.gov/sites/default/files/styles/960_x_960_limit/public/images/2019/09/12/crowdofpeople.jpg?itok=9bSwoLUL');
            background-size: cover;       /* Ensures the image covers the entire background */
            background-position: center;  /* Centers the image */
            background-repeat: no-repeat; /* Prevents tiling of the image */
            background-attachment: fixed; /* Ensures the background stays fixed when scrolling */
        }

        .video-background {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover; /* Ensure the video covers the entire background */
            z-index: -1; /* Place it behind other elements */
        }

        .reg {
            position: absolute;
            top: 50%;
            left: 50%; /* Position on the horizontal center */
            transform: translate(-50%, -50%); /* Center the form both vertically and horizontally */
            max-width: 300px;
            background-color: rgba(255, 255, 255, 0.8); /* Semi-transparent white */
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        }

        h3 {
            font-family: 'Cinzel', serif;
            margin-bottom: 20px;
            font-size: 24px;
            text-align: center;
        }

        label {
            display: block;
            margin-bottom: 10px;
            font-size: 14px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            width: 100%;
            background-color: #3498db;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>
    <div class="reg">
        <form method="POST" action="login.php">
            <h3>Celebrations</h3>
            <label for="username">Enter your username</label>
            <input type="text" id="username" name="username" placeholder="some@eg.com" required>
            <label for="password">Enter password</label>
            <input type="password" id="password" name="password" placeholder="8 char" required>
            <input type="submit" value="Log in" name="submit1">
        </form>
    </div>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = $_POST['username'];
        $pass = $_POST['password'];

        $con = mysqli_connect("localhost", "root", "WJ28@krhps", "event_managment");

        if (!$con) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $result = mysqli_query($con, "SELECT * FROM registered WHERE username='$username'");
        if ($result) {
            $row = mysqli_fetch_array($result);
            if ($row) {
                $storedPassword = $row['password'];

                if ($pass === $storedPassword) {
                    header('Location: main.php');
                    exit();
                } else {
                    echo "<script>alert('Incorrect password for username: $username');</script>";
                }
            } else {
                echo "<script>alert('Username not found');</script>";
            }
        } else {
            echo "<script>alert('Error: " . mysqli_error($con) . "');</script>";
        }

        mysqli_close($con);
    }
    ?>
</body>
</html>
