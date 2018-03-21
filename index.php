<?php

include_once 'Kingdom.php';

echo "<br>Example 1: .......................................................<br>";
$kingdom = new Kingdom(6, 6);
$kingdom->place_queen(0, 0, 'NORTH');
$kingdom->move_queen();
$kingdom->report_queen();
echo "<br>Example 1:........................................................<br>";

echo "<br>Example 2: .......................................................<br>";
$kingdom = new Kingdom(6, 5);
$kingdom->place_queen(0, 0, 'NORTH');
$kingdom->rotate_queen_left();
$kingdom->report_queen();
echo "<br>Example 2:........................................................<br>";

echo "<br>Example 3: .......................................................<br>";
$kingdom = new Kingdom(5, 7);
$kingdom->place_queen(1, 2, 'EAST');
$kingdom->move_queen();
$kingdom->move_queen();
$kingdom->rotate_queen_left();
$kingdom->move_queen();
$kingdom->report_queen();
echo "<br>Example 3:........................................................<br>";

echo "<br>Example 4: .......................................................<br>";
$kingdom = new Kingdom(6, 5);
$kingdom->move_queen();
$kingdom->report_queen();
echo "<br>Example 4:........................................................<br>";
?>
