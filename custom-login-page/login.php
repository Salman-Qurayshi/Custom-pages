<!-- This code creates a login page that can save a firstname,lastname,username,gmail,password and makes a file in the directry 
if not already created and saves all the data to that file -->

<!DOCTYPE html>
<html>
<head>
    <style>
        body,
        label,
        input,
        h2 {
            color: white;
        }

        body {
            background-image: linear-gradient(115deg, #004ff9, #000000);
            margin: 0;
            padding: 0;
            text-align: center;
        }

        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 100px;
            padding-right: 60; /* Remove the extra right padding */
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"]{
            width: 90%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
             color: black;
        }

        input[type="submit"] {
            background-color: #0073e6;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>User Registration</h2>
        <br>
        <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                // Get user input
                $first_name = $_POST['first_name'];
                $last_name = $_POST['last_name'];
                $username = $_POST['username'];
                $email = $_POST['email'];
                $password = $_POST['password'];
               

                // Create a user data string
                $user_data = "First Name: $first_name\nLast Name: $last_name\nUsername: $username\nPassword: $password\nEmail: $email\n\n";
                
                // Check if the file exists
                $file = 'usr.txt';
                if (!file_exists($file)) {
                    // Create the file if it doesn't exist
                    file_put_contents($file, '');
                }
                 
                // Append the user data to the usr.txt file
                file_put_contents('usr.txt', $user_data, FILE_APPEND);

                echo "Registration complete. Your username is $username and your email is $email.";
            }
        ?>
        <form action="" method="post">
            <label for="first_name">First Name:</label>
            <input type="text" id="first_name" name="first_name">
            <br>
            <label for "last_name">Last Name:</label>
            <input type="text" id="last_name" name="last_name">
            <br>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username">
            <br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email">
            <label for="password">Password:</label>
            <br>
            <input type="password" id="password" name="password">
            <br>
            
            <input type="submit" value="Submit">
        </form>


