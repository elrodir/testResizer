<?php
    session_start();
    require_once    "classes/resizer.php";


    $s    =   Resizer();

    if(isset($_POST['url']))    {

        $url    =   $_POST['url'];
    }