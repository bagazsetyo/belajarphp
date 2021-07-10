<?php

    require_once "Data/Helper.php";
    require_once "Data/Conflic.php";
    
    use Data\Helper;
    use Data\Conflic;
    use data\One\Conflic as OneConflic;
    use data\Two\Conflic as TwoConflic;

    use function Data\Helper;
    use function Helper\helpMe;

    use const Data\Helper;

    $conflict = new OneConflic;
    $conflict2 = new TwoConflic;

    helpMe();