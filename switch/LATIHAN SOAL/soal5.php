<?php 
$Golongan = "2";

switch (true){
    case ($Golongan == "1"):
        echo "Rp5.000.000";
        break;
    case ($Golongan == "2"):
        echo "Rp4.000.000";
        break;
    case ($Golongan == "3"):
        echo "Rp3.000.000";
        break;
    case ($Golongan == "4"):
        echo "Rp2.000.000";
        break;
    default;
    echo "Golongan saya";
}