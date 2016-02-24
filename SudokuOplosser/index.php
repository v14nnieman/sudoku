<?php
include 'Functies/ArrayNaarTabel.php';
include 'Functies/BestandToevoegen.php';
include 'Functies/MinnetjesNaarNiks.php';
include 'Functies/PrintjQueryEnPHPOpmaak.php';
$Sudoku = file("Sudoku.txt");
$SudokuAntwoord = file("SudokuAntwoord.txt");
foreach ($Sudoku as &$regel) {
    $regel = str_split(trim($regel));
}
foreach ($SudokuAntwoord as &$regel) {
    $regel = str_split(trim($regel));
}
minnetjesNaarNiks($Sudoku);
minnetjesNaarNiks($SudokuAntwoord);

?>
<html>
    <head>
        <title>Sudoku</title>
        <meta charset="UTF-8">
        <link rel="shortcut icon" type="image/ico" href="fav.ico"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="opmaak.css">
        <!--<link rel="stylesheet" type="text/css" href="opmaak.php">-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <!--<?php //jQueryEnPhpOpmaak($gevondenWoordenCoordinaten, $zoekwoorden);  ?>-->
    </head>
    <body>
        <div id="boven">
            <img src="vergrootglas.png" alt="vergrootglas" style="width:40px; height:40px;">
            Sudoku
        </div>
        <?php
        //bestandtoevoegenaanenuit();
        ?>
        <div id="tabel">
            <?php
            //print_r($Sudoku);
            echo build_table($Sudoku);
            ?>   
        </div>
        <div id="tabel2">
            <?php
            //print_r($Sudoku);
            echo build_table($SudokuAntwoord);
            ?>   
        </div>
        <div id="copy">
            Sudoku&copy; 
        </div>
        <div id="namen">
            Neville
        </div>
    </body>
</html>
