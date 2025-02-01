<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style1.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    

    
</head>
<body>

    <style>
        .visit-box {
            display: inline-block;
            padding: 15px 30px;
            background-color: #4CAF50; /* Green background */
            color: white;              /* White text */
            font-size: 18px;            /* Font size */
            font-weight: bold;          /* Bold text */
            border-radius: 10px;        /* Rounded corners */
            text-align: left;
            text-decoration: none;      /* Remove underline */
            transition: background-color 0.3s ease; /* Smooth hover effect */
        }
    
        .visit-box:hover {
            background-color: #45a049; /* Darker green on hover */
        }
       
    </style>
      <a href="scrolldown.html" class="visit-box">menu</a>

    <div class="wrapper">
       
            <h1> Login</h1>
            <div class="input-box">
                <input type="text" placeholder="username" required>
                <i class='bx bxs-user-pin' ></i>
                <br>
                <input type="password" placeholder="password" required>
                <i class='bx bxs-lock-alt' ></i>

            

            </div>
            <div class="remember-frogot">
                <label for><input type="checkbox"> remember me
                </label>
                <a href="#">  </a>
            </div>
           
            <div class="register-link">   </div>
            <p>   <a href="#" register> </a> </p>
            <input type="submit">
        </form>
    </div>
</body>
</html>
 
 <?php
// Database connection details
$servername = "localhost";
$username = "root"; // Replace with your MySQL username
$password = ""; // Replace with your MySQL password
$dbname = "keyboard"; // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$user = $_POST['username'];
$pass = $_POST['password'];

// Prepare SQL query to insert data into users table
$sql = "INSERT INTO users (username, password) VALUES ('$user', '$pass')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>
