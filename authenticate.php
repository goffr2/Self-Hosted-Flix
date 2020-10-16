 <?php
$servername = "localhost";
$username = "readonly";
$password = "readonly";
$dbname = "SHF";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "<p>connected</p>";
$str = $_POST["password"];
$string_hash = sha1($str);

$sql = "SELECT USERNAME, PASSWORD FROM USERS WHERE USERNAME = '" . $_POST['username'] . "'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    if ($row['PASSWORD'] = $string_hash) {
       echo "You're in";
    	}
    }
} else {
  echo "0 results";
}
$conn->close();
?> 
