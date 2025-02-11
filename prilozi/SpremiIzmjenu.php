<?php

include("OtvoriVezu.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>spremi izmjenu</title>
</head>
<body>
    
<?php

$website = $_POST["Id"];

$ime = $_POST["ime"];

$prezime = $_POST["prezime"];

$adresa = $_POST["adresa"];

$mobitel = $_POST["mobitel"];

$email = $_POST["email"];

$website = $_POST["website"];


$veza = OtvoriVezu();

$sql = "UPDATE kontakti SET ime='$ime', prezime='$prezime', adresa='$adresa', mobitel='$mobitel', email='$email', website='$website' WHERE Id=$Id ";

if($veza->query($sql) === TRUE) {
    echo "<p>Zapis je uspješno spremljen.<p/>";
} else {
 "Greška: " . $veza->error;
}
$veza->close();


?>

</body>
</html>