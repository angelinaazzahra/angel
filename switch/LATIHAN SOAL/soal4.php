<?php 
$kendaraan = "M";

switch (true){
    case ($kendaraan == "M"):
        echo "Mobil";
        break;
    case ($kendaraan == "S"):
        echo "Sepedah motor";
        break;
    case ($kendaraan == "B"):
        echo "Bus";
        break;
    case ($kendaraan == "T"):
        echo "Truk";
        break;
    default;
    echo "kendaraan saya";
}