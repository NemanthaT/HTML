<?php 
session_start();
require_once('../config.php');

if (isset($_POST['submit'])){
    $Username = $_POST['username'];
    $Email = $_POST['email'];

    $query = "SELECT * FROM users WHERE username='$Username' AND email='$Email'";
    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result) > 0){
        $record = mysqli_fetch_assoc($result);
        $password = $record['password'];

        $newPassword = 

        // Update the password in the database
        $updateQuery = "UPDATE users SET password='$newPassword' WHERE username='$Username' AND email='$Email'";
        mysqli_query($conn, $updateQuery);

        // Send password recovery email to the user
        // email sending code
        $to = $Email;
        $subject = "Password Recovery";
        $message = "Dear $Username, your new password is: $newPassword";
        $headers = "From: nemanathatharusha@gmail.com";

        if(mail($to, $subject, $message, $headers)){
            echo "Email sent successfully.";
        } else {
            echo "Failed to send email.";
        }

        echo "<script>alert('Password updated and recovery email sent!');</script>";
    }else{
        echo "<script>alert('Invalid username or email!');</script>";
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <style>
        body {
            font-family: 'Segoe UI', 'cursive';
            background-color: black;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .blurry-background {
            width: 100vw;
            height: 100vh;
            background-image: url("nexustech2.gif");
            background-size: cover;
            background-position: center;
            position: fixed;
            top: 0;
            left: 0;
            filter: blur(10px);
            z-index: -1;
        }
        .container {
            background-color: #ececec;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            width: 400px;
            max-width: 100%;
        }

        .form-header {
            background-color: #8e44ad;
            color: #ffffff;
            text-align: center;
            padding: 20px;
        }

        .form-group1 {
            padding: 20px 20px 5px 20px;
        }

        .form-group1 label {
            display: block;
            margin-bottom: 8px;
            color: #333;
        }

        .form-group1 input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .form-group button {
            font-family: 'Segoe UI';
            background-color: #8e44ad;
            color: #ffffff;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        .form-group button:hover {
            background-color: #7504a5;
        }

        .form-footer {
            text-align: center;
            padding: 20px;
        }

        .form-footer a {
            color: #8e44ad;
            text-decoration: none;
        }

        .form-footer a:hover {
            text-decoration: underline;
        }
        footer {
            background-color: #d3d3d3;
            color: #576574;
            position: fixed;
            bottom: 0;
            width: 100%;
            text-align: center;
            border-top: 1px solid #8e44ad;
        }

    </style>
</head>

<body>
    <div class="blurry-background">

    </div>
    <div class="container">
        <form action="forgot.php" method="post">

            <div class="form-header">
                <h2>Update Password</h2>
            </div>
            <div class="form-group1">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <center>
                    <button name="submit" type="submit">Update Password</button>
                </center>    
            </div>

        </form>
    </div>
    <footer >
        <p>&copy; 2024 NexusTech Solutions</p>
    </footer>
</body>

</html>