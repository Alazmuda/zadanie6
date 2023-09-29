<?php
if(!empty($_GET["t1"]))
echo "rozmiar terrarium: 20x20x20" . "</br>";
if(!empty($_GET["t2"]))
echo "rozmiar terrarium: 15x15x25" . "</br>";
if(!empty($_GET["t3"]))
echo "rozmiar terrarium: 30x20x20" . "</br>";


if(!empty($_GET["gatunek1"]))
echo "gatunek: Caribena Versicolor" . "</br>";
if(!empty($_GET["gatunek2"]))
echo "gatunek: Brahypelma hamori" . "</br>";
if(!empty($_GET["gatunek3"]))
echo "gatunek: Monocentropus balfouri" . "</br>";


$rozmiar = $_GET["rozmiar"];
echo "rozmiar pajaka: " . $rozmiar . "</br>";

$karmowka = $_GET["karmowka"];
echo "karmowka: " . $karmowka . "</br></br>";

$nazwisko = $_GET["Nazwisko"];
echo "nazwisko: " . $nazwisko . "</br>";

$email = $_GET["E-mail"];
echo "e-mail: " . $email . "</br>";

$adres = $_GET["Adres"];
echo "adres: " . $adres . "</br>";
?>  