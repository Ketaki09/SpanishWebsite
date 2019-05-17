
        <br>
    <h2> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
        &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp List De Voluntarios </h2>
    
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

$sql = "SELECT I_Name, I_Email, I_MobileNumber FROM individual_profile";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>Nombre de voluntario</th><th>Correo</th><th>Telephono</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row['I_Name']. "</td><td>" . $row['I_Email']. " </td>
        <td>" . $row['I_MobileNumber']. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>
