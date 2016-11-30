<?php 

    $connection = new mysqli('localhost', 'root', '');
    
    $connection->query("SET CHARSET utf8");
    if($connection -> connect_error){
        echo "Nie udalo sie polaczyc z baza ".$connection->connect_errno;
    } else {
        echo "Polaczono z baza";        
    } 

?>