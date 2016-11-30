<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/style.css">
        <script src="funkcje.js"></script>
        <?php require "funkcje.php";?>
    </head>
    <body onload = "onload()">
        <div class = "container">
            <div class = "row">
                <div class = "col-md-12 baner">
                </div>
            </div>
            <div class = "row">
                <div class = "col-md-12 menu">
                    <button class = "btn btn-primary mybtn" id = "wyswietlbtn" onclick = "ontop('wyswietl')">Wyświetl</button>
                    <button class = "btn btn-primary mybtn" id = "dodajbtn" onclick = "ontop('dodaj')">Dodaj</button>
                    <button class = "btn btn-primary mybtn" id = "usunbtn" onclick = "ontop('usun')">Usuń</button>
                    <button class = "btn btn-primary mybtn" id = "modyfikujbtn" onclick = "ontop('modyfikuj')">Modyfikuj</button>
                    <button class = "btn btn-primary mybtn" id = "kontaktbtn" onclick = "ontop('kontakt')">Kontakt</button>
                </div>
            </div>
            <div class = "row">
                <div class = "col-md-12 tresc">
                <?php wyswietl(); usun(); dodaj(); modyfikuj(); ?>
                </div>
            </div>
            <div class = "row">
                <div class = "col-md-12 stopka">
                </div>
            </div>    
        </div>
    </body>
</html>