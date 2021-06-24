 <?php
$servername = "nsmed1.ddns.net:3306";
$username = "sistema";
$password = "hismetsis";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?> 