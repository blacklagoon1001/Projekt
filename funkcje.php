<script> 
    function onload() {
        document.getElementById('wyswietl').style.display="block";
    }
    
    function ontop(id) {
        document.getElementById('wyswietl').style.display="none";
        document.getElementById('usun').style.display="none";
        document.getElementById('modyfikuj').style.display="none";
        document.getElementById('dodaj').style.display="none";
        
        document.getElementById(id).style.display="block";
    }
</script>
  
   
<?php
    require "connection.php";
      
    function wyswietl() {
        global $connection;
        
        $connection -> select_db('pojazdy');
        $query = "select * from komis";
        $result = mysqli_query($connection, $query);

        $liczba_wierszy = mysqli_num_rows($result); 
        echo "<div id = 'wyswietl'>";
        if ($liczba_wierszy == 0) {
            echo "<h3>W bazie nie ma jeszcze żadnych samochodów</h3>";
            //$connection -> close();
        } else {
            echo "<table class='table table-hover'><tbody>";
            echo "<thead><tr>";
            echo "<th>Marka</th><th>Model</th><th>Rok produkcji</th><th>Cena</th><th>Kolor</th><th>Właściciel</th>";
            echo "</tr></thead>";
            echo "<tbody>";
            while($row = $result -> fetch_object()) {
                echo "<tr><td>";
                print_r($row->marka);
                echo "</td><td>";
                print_r($row->model);            
                echo "</td><td>";
                print_r($row->rok_produkcji);            
                echo "</td><td>";
                print_r($row->cena);           
                echo "</td><td>";
                print_r($row->kolor);           
                echo "</td><td>";
                print_r($row->nr_wlasciciela);
                echo "</tr>";
            }        
            echo "</tbody></table>";
            //$connection -> close();            
        }
        echo "</div>";

    }

    function usun() {
        global $connection;
        
        $connection -> select_db('pojazdy');
        $query = "select * from komis";
        $result = mysqli_query($connection, $query);

        $liczba_wierszy = mysqli_num_rows($result); 
        echo "<div id = 'usun'>";
        if ($liczba_wierszy == 0) {
            echo "<h3>W bazie nie ma jeszcze żadnych samochodów</h3>";
            //$connection -> close();
        } else {
            echo "<table class='table table-hover'>";
            echo "<thead><tr>";
            echo "<th>Marka</th><th>Model</th><th>Rok produkcji</th><th>Cena</th><th>Kolor</th><th>Właściciel</th><th>Usuń</th>";
            echo "</tr></thead>";
            echo "<tbody>";
            while($row = $result -> fetch_object()) {
                $id = $row -> id_pojazdu;
                
                echo "<tr><td>";
                print_r($row->marka);
                echo "</td><td>";
                print_r($row->model);            
                echo "</td><td>";
                print_r($row->rok_produkcji);            
                echo "</td><td>";
                print_r($row->cena);           
                echo "</td><td>";
                print_r($row->kolor);           
                echo "</td><td>";
                print_r($row->nr_wlasciciela);
                echo "</td><td>";
                    echo "<form class = 'form-inline' method = 'post' role = 'form' action = 'usun_pojazd.php'>";
                    echo "<div class = 'form-group'>";
                    echo "<input type = 'hidden' id = 'id_pojazdu' value = '$id' name = 'id_pojazdu'/>";
                    ?>
                    <input id = 'submit' name = 'submit' type = 'submit' value = 'X' class = 'btn btn-danger' onclick="return confirm('Czy na pewno usunąć?')">
                    <?php
                    echo "</div>";
                    echo "</form>";   
                echo "</tr>";
            }        
            echo "</tbody></table>";
            //$connection -> close();            
        }       
        echo "</div>";
    }

    function dodaj() {
        ?>
        
        <div id = "dodaj">
            <form class = "form-horizontal" method = "post" action = "dodaj_pojazd.php">
                <div class = "form-group" >
                    <label for = "marka" class = "col-xs-2">Marka pojazdu</label>
                    <div class = "col-xs-5">
                        <input type = "text" class = "form-control" name = "marka" id = "marka"/>
                    </div>
                </div>  
                <div class = "form-group" >
                    <label for = "model" class = "col-xs-2">Model pojazdu</label>
                    <div class = "col-xs-5">
                        <input type = "text" class = "form-control" name = "model" id = "model"/>
                    </div>
                </div>
                <div class = "form-group">
                    <label for = "rok" class = "col-xs-2">Rok produkcji</label>
                    <div class = "col-xs-2">
                        <select class="form-control" id = "rok" name = "rok" >
                        <?php
                            for($i=1990; $i<=2016; $i++) {
                                echo "<option id = 'rok' name = 'rok' value = $i>$i</option>";
                            }
                        ?>
                        </select>
                    </div>
                </div>
                <div class = "form-group" >
                    <label for = "cena" class = "col-xs-2">Cena</label>
                    <div class = "col-xs-5">
                        <input type = "text" class = "form-control" name = "cena" id = "cena"/>
                    </div>
                </div>                
                 <div class = "form-group" >
                    <label for = "kolor" class = "col-xs-2">Kolor</label>
                    <div class = "col-xs-5">
                        <input type = "text" class = "form-control" name = "kolor" id = "kolor1"/>
                    </div>
                </div>               
                 <div class = "form-group" >
                    <label for = "wlasciciel" class = "col-xs-2">Liczba właścicieli</label>
                    <div class = "col-xs-1">
                        <input type = "number" class = "form-control" name = "wlasciciel" id = "wlasciciel"/>
                    </div>
                </div>               
                <div class="form-group">
                    <div class="col-sm-10 col-sm-offset-2">
                        <input id="submit" name="submit" type="submit" value="Dodaj!" class="btn btn-primary">
                    </div>
                </div>    
            </form>
        </div>

        <?php
    }

    function modyfikuj() {
        global $connection;
        echo "<div id = 'modyfikuj'>";
        $connection -> select_db('pojazdy');
        $query = "select * from komis";
        $result = mysqli_query($connection, $query);

        while($row = $result -> fetch_object()) {
            $marka = $row->marka;
            $model = $row->model;            
            $rok = $row->rok_produkcji;            
            $cena = $row->cena;           
            $kolor = $row->kolor;           
            $wlasciciel = $row->nr_wlasciciela;
        } 
        
        echo "</div>";
          
    }
        
?>