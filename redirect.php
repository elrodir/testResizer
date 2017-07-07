<?php
    require_once    "classes/resizer.php";


    if(isset($_GET['code']))    {

        $s   =   new    Resizer();

        $code   =   $_GET['code'];

        if($url   =   $s->getUrl($code))    {

            header('Location:   {$url}');

            exit();
        }
    }

    header('Location:   index.php');