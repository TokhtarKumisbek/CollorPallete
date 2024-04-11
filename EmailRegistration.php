<?php

if(isset($_POST['registerButton'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $hostname = "localhost";
    $db_username = "root";
    $db_password = ""; // Corrected variable name for database password
    $db_name = "registeruser"; // Replace "your_database_name" with your actual database name
    
    $mysqli = new mysqli($hostname, $db_username, $db_password, $db_name); // Corrected instantiation of MySQLi object
    
    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    }

    // Check if email already exists in the database
    $check_query = "SELECT * FROM users WHERE email='$email'";
    $result = $mysqli->query($check_query);
    if ($result->num_rows > 0) {
        $notification = "This email account is already registered.";

    } else {
        // Email doesn't exist, proceed with registration
        $query = "INSERT INTO users (email, password) VALUES ('$email', '$password')";

        if ($mysqli->query($query) === TRUE) {
            header('Location: Login.html');
            exit();
        } 
        else {
            echo "Error: " . $query . "<br>" . $mysqli->error;
        }
    }

    $mysqli->close();
}

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="uttf-8">
    <meta name="viewport" content="width=device-width, initial-scsle=1.0">
    <link rel="stylesheet" href="EmailRegistration.css">
     
</head>

<body>
    <div class="wrapper">
        <br>
        <div class=title><span>Registration for creating events</span></div>
        <div class="warning1">At the end, the password will be sent to the mail</div>

        <form action="EmailRegistration.php" method="post">
            <div class="row">
                <input type="email" class="type" placeholder="Enter your e-mail here" name="email" required >
                <input type="password" class="type" placeholder="Enter yourpassword here" name="password" required >
                <!-- Display the notification message here -->
                <?php if (!empty($notification)): ?>
                    <div style="color: red;"><?php echo htmlspecialchars($notification); ?></div>
                <?php endif; ?>
            </div>




            <button type="submit" class="btn" name="registerButton">Next</button>

           <div class="underNext">
                <div class="login"><a href="Login.html">Login</a></div> 
                <div class="back" onclick="goBack()"><a href="#">Back</a></div>
            </div>

            <div class="terms">By continuing to register on the site
                by any available means,
                you confirm that you have read
                and fully agree to the 
                <a href="#">terms
                of use of the site</a> </div>
            
           
        </form>


    </div>

    
    <script>
        function goBack() {
            window.history.back();
        }
    </script>

</body>
</html>