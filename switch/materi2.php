<?php 
$angka = 10;

switch (true) {
    case ($angka > 0):
      echo "Positif";
    break;
    case ($angka < 0):
      echo "Negatif";
    break;
    default:
      echo "Nol";
break;
}