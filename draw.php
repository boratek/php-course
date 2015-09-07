<?php
/**
 * Script contains functions to draw figures
 */

function draw()
{
    $type = $_POST['type'];
    $result = false;

    switch ($type) {
        case 'triangle':
            $result = triangle();
            break;
        case 'square':
            $result = square();
            break;
        case 'double_triangle':
            $result = doubleTriangle();
            break;
        case 'chess_board':
            $result = chessBoard();
            break;
        default:
            break;
    }

    return $result;
}

function triangle()
{

}

function square()
{

}

function double_triangle()
{

}

function chess_board()
{

}