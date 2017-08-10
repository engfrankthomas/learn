<?php
//connection to a database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "learn";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//fetch data from the form
if(isset($_POST['submit'])){
       $email = $_POST['email'];
    $password = $_POST['password'];
    $query = "INSERT INTO user(email, password) VALUES ('$email', SHA($password))";
    $result = mysqli_query($conn, $query);
}
?>
<html>
    <head>
        <title>Learn</title>
        <link rel="stylesheet" href="css/bootstrap.css"/>
    </head>
    <body>
        <div>
            <h1>Welcome in Learn</h1>
            <h2>Sign up here</h2>
            <form method="post" action="">
                <input type="email" class="" name="email" placeholder="email address" required/>
                <input type="password" class="" name="password" placeholder="password" required/>
                <input type="submit" class="" name="submit" value="register"/>
            </form>
        </div>
        <script src="js/bootstrap.js"></script>
    </body>
</html>