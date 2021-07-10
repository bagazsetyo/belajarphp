<?php
    echo "Nama: ";
    echo "Bagas Setyo";
    echo "\n";
    
    echo "Nama: ";
    echo "Bagas \t Setyo";
    echo "\n";

    echo <<<EKO
        "Lorem ipsum dolor sit amet consectetur 
        adipisicing elit. 
        Maxime mollitia,"
        
    EKO;
    
    echo <<<'EKO'
        "Lorem ipsum dolor sit amet consectetur 
        adipisicing elit. 
        Maxime mollitia,"
    EKO;