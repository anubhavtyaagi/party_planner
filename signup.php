<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Malhaar - Sign Up</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            height: 100vh;
            overflow: hidden;
            background-image: url('https://www.nist.gov/sites/default/files/styles/960_x_960_limit/public/images/2019/09/12/crowdofpeople.jpg?itok=9bSwoLUL');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

        /* Center the form both vertically and horizontally */
        .reg {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%); /* Center horizontally and vertically */
            max-width: 300px;
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        }

        h3 {
            font-family: 'Cinzel', serif;
            text-align: center;
            margin-bottom: 20px;
            font-size: 24px;
        }

        label {
            display: block;
            margin-bottom: 10px;
            font-size: 14px;
            font-weight: bold;
        }

        input[type="text"], input[type="password"], select {
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

        /* Styling for the login link */
        .login-link {
            text-decoration: none;
            color: #3498db;
        }

        .login-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="reg">
        <form method="POST" action="signup.php">
            <h1>Celebrations</h1>
            <h2 class="transition-text">Crafting moments to memories</h2>
            <label for="username">Enter your username</label>
            <input type="text" id="username" name="username" placeholder="some@eg.com" required>
            <label for="password">Enter password</label>
            <input type="password" id="password" name="password" placeholder="8 char" required>
            <label for="need">Select Need</label>
            <select id="need" name="need">
                <option value="wedding">Wedding</option>
                <option value="birthday">Birthday</option>
                <option value="corporate">Corporate Event</option>
            </select>
            <input type="submit" value="Sign up" name="submit1">
            <p>If you already have an account, <br>please <a class="login-link" href="login.php">login here</a>.</p>
        </form>
    </div>
</body>
</html>
