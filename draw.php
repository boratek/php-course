<?php
/**
 * Script contains functions to draw figures
 */

function draw()
{
    $type = $_POST['type'];
    $name = $_POST['name'];
    $result = false;

    switch ($type) {
        case 'triangle':
            $result = 'triangle';
            break;
        case 'square':
            $result = 'square';
            break;
        case 'double_triangle':
            $result = 'doubleTriangle';
            break;
        case 'chess_board':
            $result = 'chessBoard';
            break;
        default:
            break;
    }

    echo '<h1>This is ' . $name .'</h1>';
    figure($result);
}

function figure($figure)
{
    $size = $_POST['size'];
    $scriber = $_POST['scriber'];

    $figure($size, $scriber);
}

function triangle($size, $scriber)
{
    for ($i = 0; $i <= $size; $i++) {
        for ($j = 0; $j <=$i; $j++){
            echo $scriber;
        }
        echo "<br/>";
    }
}

function square($size, $scriber)
{
    for ($i = 0; $i <= $size; $i++){
        for ($j = 0; $j <= $size; $j++){
            echo $scriber;
        }
        echo "<br/>";
    }

}

function doubleTriangle($size, $scriber)
{
    for ($i = 0; $i <= $size; $i++) {
        for ($j = 0; $j <=$i; $j++){
            echo $scriber;
        }
        echo "<br/>";
    }

    for ($i = $size; $i >= 0; $i--) {
        for ($j = 0; $j <= $i; $j++){
            echo $scriber;
        }
        echo "<br/>";
    }
}

function chessBoard($size, $scriber)
{
    $space = ' ';

    for ($i = 0; $i <= $size; $i++) {
        if ($i % 2 == 0) {
            echo $space;
        }
        for ($j = 0; $j <= $size; $j++) {
            if ($j % 2 == 0) {
                echo $scriber;
            }
            echo $space;
        }
        echo "<br/>";
    }
}
