
        


<?php
session_start(); 

if (isset($_POST['loginButton'])) {
    include('connection.php');  

    $mysqli = new mysqli($hostname, $db_username, $db_password, $db_name); 
    
    $email = $_POST['email'];  
    $password = $_POST['password'];  
    

    $email = $mysqli->real_escape_string($email);
    $password = $mysqli->real_escape_string($password);  
    
    $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";

    $result = $mysqli->query($sql);  

    if (!$result) {
     
        echo "<h1> Login failed. Error executing the query.</h1>";
    } else {
        $count = $result->num_rows;  

        if ($count == 1) {  
            $row = $result->fetch_assoc();
            
            header('Location: index1.html');
            exit(); 
        } else {  
            echo "<script>alert('Login failed. Invalid username or password.');</script>"; 
            echo "<script>window.location.href = 'EventHomePage.html';</script>"; 
            exit; 
        }  
    }
}  
?>







