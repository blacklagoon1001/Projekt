<?php
    require 'connection.php';

    global $connection;
    
    $id = mysqli_real_escape_string($connection, $_POST['id_pojazdu']);

    $connection -> select_db('pojazdy');
    $query = "delete from komis where id_pojazdu = $id";
    $result = mysqli_query($connection, $query);

    header("location: index.php");
?>