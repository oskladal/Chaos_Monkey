   
<?php 

echo("<meta http-equiv='refresh' content='10'>");
echo date('H:i:s Y-m-d');


$username = 'root';
$password = 'example';
$servers = array(
	'databaze' => 'test_ITRP' ,
	'databaze2' => 'test_ITRP2',
	'databaze3' => 'test_ITRP3',
);


foreach($servers as $server => $DB) {
    
	
	// Create connection
$conn = new mysqli($server, $username, $password, $DB);
// Check connection
if ($conn->connect_error) {
   echo("<br>Connection failed: $DB " . $conn->connect_error);
}

else  echo "<br>Connected successfully: $DB";

}




/*
echo("<meta http-equiv='refresh' content='10'>");
echo date('H:i:s Y-m-d');
   
    
// Create connection
$conn = new mysqli("databaze", "root", "example","test_ITRP");


// Check connection
if ($conn->connect_error) {
  die("<br>Připojení k databázi 1 se nezdařilo " . $conn->connect_error);
}
echo "<br>Připojení k databázi 1 je v pořádku" ;

*/



/*
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
*/
    
?>
    
