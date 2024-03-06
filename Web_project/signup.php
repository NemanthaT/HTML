<?php require_once('../config.php'); ?>

<?php

    if (isset($_POST['submit'])){

        $Username = $_POST['username'];
        $Email = $_POST['email'];
        $Password = $_POST['password'];

        
        $query = "INSERT INTO users (username, email, password) VALUES ('$Username', '$Email', '$Password')";

        $result = mysqli_query($conn, $query);

        if($result) {
            echo "<script>alert('Account created successfully!');</script>";
        } else {
            echo "<script>alert('Account creation failed!');</script>";        }
    }

    

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <style>
        body {
            font-family: 'Segoe UI';
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
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
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
        .form-group {
            padding: 5px 20px 20px 20px;
        }

        .form-group1 {
            padding: 20px 20px 5px 20px;
        }
        .form-group2 {
            padding: 15px 20px 5px 20px;
        }
        .form-group3 {
            padding: 15px 20px 5px 20px;
        }
        .showp {
            padding: 0px 0px 5px 20px;
        }

        .form-group1 label {
            display: block;
            margin-bottom: 8px;
            color: #333;
        }
        .form-group2 label {
            display: block;
            margin-bottom: 8px;
            color: #333;
        }
        .form-group3 label {
            display: block;
            margin-bottom: 8px;
            color: #333;
        }
        .showp label {
            display: inline;
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
        .form-group2 input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        .form-group3 input {
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
        footer a:hover {
            text-decoration: underline;
        }
              
    </style>
</head>

<body>
    <div class="blurry-background"></div>

            
        <div class="container">

        <form action="signup.php" method="post">

        <div class="form-header">
            <h2>Signup</h2>
        </div>
        <div class="form-group1">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" placeholder="Abc@1" required>
        </div>

        <div class="form-group2">
            <label for="email">e-mail:</label>
            <input type="email" id="email" name="email" placeholder="abc@something.com"  required>
        </div>
        <div class="form-group3">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required><br>
        </div>
        <div class="showp">
            
            <label for="showpassword">Show Password</label>
            <input type="checkbox" onclick="myFunction()">
            <script> function myFunction() {    
                var x = document.getElementById("password");
                if (x.type === "password") {
                    x.type = "text";
                } else {
                    x.type = "password";
                }
            }</script>
        </div>    
        <div class="form-group">
            <center>
                <button name="submit" type="submit">Signup</button>
            </center>
        </div>
        <div class="form-footer">
                <a href="login.php">Registered or already have an account? </a>
            </div>


        </form>
        
        </div>

    <footer>
        <p>&copy; 2024 NexusTech Solutions</p>
    </footer>
</body>

</html>
