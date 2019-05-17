
    <br> <br> <br> <br> 
    <h2> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
        &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp List De fundacion </h2>
        <br>
      
                       <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wdm";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT B_Name, B_Email, B_MobileNumber FROM business_profile";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>Nombre de fundacion</th><th>Correo</th><th>Telephono</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row['B_Name']. "</td><td>" . $row['B_Email']. " </td>
        <td>" . $row['B_MobileNumber']. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>  
        </div>
  
    