
    <div class="con">
        <img src="<?php echo base_url('images/bannercboleto.jpg'); ?>" size width="100%" height="40%" />

    <div class="centered"><a href="Com16.html">Comprar Boletos</a></div>
    </div>
    <br>
    <br>
    <div class="middle2">
            <h3 ><b>&nbsp &nbsp &nbsp &nbsp  &nbsp   &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp   &nbsp  &nbsp   
                    &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp   &nbsp  &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp   &nbsp  &nbsp
                    --- NUSTROS EVENTOS --- </h3>

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

$sql = "SELECT Event_Name, Responsible, Place FROM add_event";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>Event</th><th>Responsible</th><th>Place</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row['Event_Name']. "</td><td>" . $row['Responsible']. " </td>
        <td>" . $row['Place']. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?> 
    <br>
    <br>
    <br>
    <div class="flex-container" >
        <div class="flex1">
         Registrese para recibir un <br>boletin
        </div>
        <input type="text" name="emailinput" placeholder="Introduce tu correo electronico"/>
        <button type="submit" class="emailbutton">Suscribir</button>
        <br>
 </div>
 </div>  
 