<?php 
$bulan = 5;

switch (true){
    case ($bulan < "1-3"):
        echo "musim dingin";
        break;
    case ($bulan > "4-6"):
        echo "musim semi";
        break;
    case ($bulan > "7-9"):
        echo "musim panas";
        break;
    case ($bulan > "10-12"):
        echo "musim gugur";
        break;
    default;
        echo "bulan 5";
}