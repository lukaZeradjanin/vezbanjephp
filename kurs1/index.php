

<?php

 $baza = mysqli_connect("localhost", "root" , "", "prvi_cas");

if(mysqli_connect_error())
{
    die("Desila se greska prilikom pvezivanja na bazu");
}

mysqli_query($baza , "INSERT INTO korsinici (email, lozinka,datum_rodjenja)  VALUES ('lana012@gmail.com' , 'luka12', '2012-08-06')");

$baza ->query("INSERT INTO proizvod (ime,opis,cena,dan_nabavke,kolicina)  VALUES  ('Test voce' ,'jbgl' , '105.5' , '2024-07-08' , '105' )");

$ime = "Krompir";
$opis = "Beli";
$cena = "102";
$datum = "2023-07-12";
$kolicina= "100";

$baza ->query("INSERT INTO proizvod (ime,opis,cena,dan_nabavke,kolicina)  VALUES  ('$ime' ,'$opis' , '$cena' , '$datum' ,'$kolicina'  )");



?>