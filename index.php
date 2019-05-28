<?php session_start(); 
    // f_include zawiera funkcje służące do dołączania plików do strony za pomocą komendy dolacz_plik("v", "sciezka/plik");
	require_once("funkcje/f_include.php");
	
?>
<!DOCTYPE html>
<html lang="pl-PL">

<?php 
    // dołączenie <head> witryny
    include("funkcje/head.php");
?>  
       
        <?php 
            // dołączenie nagłowka strony (górny pasek widoczny na każdej podstronie)
            include ("funkcje/naglowek.php");
            // dołączamy plik z daną podstroną
            dolacz_plik("v", "tresc/strona_glowna");
        ?>   