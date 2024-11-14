<?php
$servername = "localhost";
$username = "username";
$password = "password";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$ep=$_POST['epo'];
$on=$_POST['ono'];
$m=$_POST['mis'];

$kratiseis=$m*10/100;
$telikos_mis=$m-$kratiseis;
echo "Ο/Η υπάλληλος ",$ep," ",$on," έχει τελικό μισθό ",$telikos_mis;
echo "<br><br>";



$wt=$_POST['watt'];
$kostos=($wt*300);
echo "Το τελικό ποσό που πρόκειται να πληρωθεί: ",$kostos;
echo "<br><br>";
echo "<A href='askizi.html'> Επιστροφή </Α>";
?>