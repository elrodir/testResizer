<?php
    require_once    "classes/resizer.php";


    if(isset($_GET['code']))    {

        $s   =   new    Resizer();
        $code   =   $_GET['code'];
    }