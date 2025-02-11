<?php

include("OtvoriVezu.php")

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title> 
</head>
<body>
    
<div class="container">

<h1>Podatci:</h1>

<?php

$ime = $_POST["ime"];

$prezime = $_POST["prezime"];

$adresa = $_POST["adresa"];

$mobitel = $_POST["mobitel"];

$email = $_POST["email"];

$website = $_POST["website"];



echo "<p>$ime</p>";
echo "<p>$prezime</p>";
echo "<p>$adresa</p>";
echo "<p>$mobitel</p>";
echo "<p>$email</p>";
echo "<p>$website</p>";


// spremanje u datoteku
/*
$myfile = fopen("datoteka.txt", "a") or die("nije moguće otvoriti datoteku");
$txt = "$ime, $prezime, $adresa, $mobitel, $grad\n";
fwrite($myfile, $txt);
fclose($myfile);*/



// spremanje u bazu podataka
    $veza = OtvoriVezu();

    $sql = "INSERT INTO kontakti(ime, prezime, adresa, mobitel, email, website) VALUES('$ime', '$prezime', '$adresa', '$mobitel', '$email', '$website')";

    if($veza->query($sql) === TRUE) {
        echo "<p>Zapis je uspješno spremljen.<p/>";
    } else {
     "Greška: " . $veza->error;
    }
    $veza->close();

?>

</div>

</body>
</html>