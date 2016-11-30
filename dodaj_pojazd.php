<?php

    require "connection.php";
    
    global $connection;

    $marka = mysqli_real_escape_string($connection , $_POST['marka']);
    $model = mysqli_real_escape_string($connection , $_POST['model']);
    $rok = mysqli_real_escape_string($connection , $_POST['rok']);
    $cena = mysqli_real_escape_string($connection , $_POST['cena']);
    $kolor = mysqli_real_escape_string($connection , $_POST['kolor']);
    $wlasciciel = mysqli_real_escape_string($connection , $_POST['wlasciciel']);

    echo $marka."<br>";
    echo $model."<br>";
    echo $rok."<br>";
    echo $cena."<br>";
    echo $kolor."<br>";
    echo $wlasciciel."<br>";
    
    
    $connection -> select_db('pojazdy');
    $query = "insert into komis(marka, model, rok_produkcji, cena, kolor, nr_wlasciciela) values ('$marka', '$model', '$rok', '$cena', '$kolor', '$wlasciciel')";
    $result = mysqli_query($connection, $query);

    header("location: index.php");
?>


