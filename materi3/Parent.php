<?php

    require_once "Data/Shape.php";    
    use Data\Rectangle;    
    use Data\Shape;


    $shape = new Shape();
    echo $shape->getCorner();

    $data = new Rectangle();
    echo $data->getCorner();

    $data = new Rectangle();
    echo $data->getParentCorner();