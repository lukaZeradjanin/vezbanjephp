<?php

$baza = mysqli_connect("localhost", "root" , "", "prvi_cas");

if(mysqli_connect_error())
{
    die("Desila se greska prilikom pvezivanja na bazu");
}

if(!isset($_POST['ime_proizvoda']) || empty($_POST['ime_proizvoda']))
{
    die("Morate uneti ime");
}
if(!isset($_POST['opis']) || empty($_POST['opis']))
{
    die("Morate uneti opis");
}

if(!isset($_POST['cena']) || empty($_POST['cena']))
{
    die("Morate uneti cenu");
}
if(!isset($_POST['datum']) || empty($_POST['datum']))
{
    die("Morate uneti datum");
}
if(!isset($_POST['kolicina']) || empty($_POST['kolicina']))
{
    die("Morate uneti kolicinu");
}



$ime = $_POST['ime_proizvoda'];
$opis = $_POST['opis'];
$cena = $_POST['cena'];
$datum = $_POST['datum'];
$kolicina= $_POST['kolicina'];

$baza ->query("INSERT INTO proizvod(ime, opis, cena, dan_nabavke, kolicina)  VALUES ('$ime', '$opis' , '$cena' , '$datum' , '$kolicina' )");

?>