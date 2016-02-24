<?php
//minnetjes veranderen in letters
function minnetjesNaarNiks($Sudoku) {
    global $Sudoku;
    foreach ($Sudoku as &$value) {
        foreach ($value as &$value2) {
            if ($value2 == "-") {
                $value2 = '';
            }
        }
    }
}