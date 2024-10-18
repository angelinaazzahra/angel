<?php 
$hari = 3;

switch (true){
    case ($hari == "1"):
        echo "senin";
        break;
    case ($hari == "2"):
        echo "selasa";
        break;
    case ($hari == "3"):
        echo "rabu";
        break;
    case ($hari == "4"):
        echo "kamis";
        break;
    case ($hari == "5"):
        echo "jumat";
        break;
    case ($hari == "6"):
        echo "sabtu";
        break;
    case ($hari == "7"):
        echo "minggu";
        break;
    default;
        echo "rabu";
}