<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHPvremeplov</title>
</head>

<body>
    <h1>PHP vremeplov</h1>
    <p>Upišite datum u formatu dan.mjesec (npr. 10.5)</p>

    <form method="POST" action="">
        <input type="text" name="datum" required />
        <input type="submit" name="submit" /><br><br>
    </form>

</body>

</html>

<?php
if (isset($_POST["submit"]) == true) {
    $datum = $_POST['datum'];
    //echo $datum . "\n";

    list($dan, $mjesec) = explode('.', $datum);
    //echo $dan . "\n";
    //echo $mjesec;

    if ($mjesec == "4" && $dan >= "11" && $dan <= "27") {
        $poruka = "uređivanje radnog okruženja.";
    } elseif ($mjesec == "5" && $dan >= "2" && $dan <= "25") {
        $poruka = "Osnove PHP-a.";
    } elseif ($mjesec == "6" && $dan >= "2" && $dan <= "30") {
        $poruka = "Osnove MySQL-a.";
    } elseif (($mjesec == "7" && $dan >= "3" && $dan <= "31") || ($mjesec == "8" && $dan >= "1" && $dan <= "31")) {
        $poruka = "Napredno PHP programiranje.";
    } elseif (($mjesec == "9" && $dan >= "9" && $dan <= "30") || ($mjesec == "10" && $dan >= "1" && $dan <= "16")) {
        $poruka = "Osnove Laravel-a";
    } elseif ($mjesec == "10" && $dan >= "18" && $dan <= "28") {
        $poruka = "Produkcija.";
    } else {
        $poruka = " - ne sjećam se što smo radili tog dana.";
    }
    echo "Na datum " . $dan . "." . $mjesec . ". radili smo " . $poruka . "<br>";
    echo "Vraćamo se nazad u sadašnjost!";
}

?>