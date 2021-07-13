   
<?php 
// Create connection
$conn = new mysqli("databaze", "root", "example","test_ITRP");

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";


$sql = "INSERT INTO osoby (Jméno, Příjmení)
VALUES ('LOREM', 'IPSUM');";
$sql .= "INSERT INTO osoby (Jméno, Příjmení)
VALUES ('LOREM', 'LIMSUM');";
$sql .= "INSERT INTO osoby (Jméno, Příjmení)
VALUES ('LOREM', 'DIPSUM');";



if ($conn->multi_query($sql) === TRUE) {
  echo "<br>Import successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}








$conn->close();
    
?>
    
