<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<style>

#messages {
    
    width: 400px;
    height: 160px;
    color: #494D5F;
    border-color:#3D9970;
    margin: 150px auto;
    display:block;
    background-color:#ffa8B6;
    padding: 30px 50px;
 }
 </style>
 </head>
<body>

<?php

include_once 'dbconfig.php'; 
if(isset($_POST['ime'])){ 
    // Get the submitted form data 
    $ime = $_POST['ime']; 
    $prezime=$_POST['prezime'];
    $pol=$_POST['flexRadioDefault'];
    $datum_dodjenja=$_POST['birthday'];
    $adresa=$_POST['adresa'];
    $grad=$_POST['grad'];
    $komentar=$_POST['komentar'];
   
}

             // Insert form data in the database 
             $query="INSERT INTO  forma (  ime ,  prezime ,  pol ,  datum_rodjenja ,  grad ,  adresa ,  komentar )
             VALUES ('$ime','$prezime','$pol','$datum_dodjenja','$adresa','$grad','$komentar')";
             //echo $query;
             $db->query($query);
             echo "<div id='messages'>Hvala puno ".$ime." ".$prezime."  . Vaši podaci su poslati. Očekujte odgovor</div>";
        
            $db->close();
         ?>

</body>
</html>
