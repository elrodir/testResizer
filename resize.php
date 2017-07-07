<?php
    session_start();
    require_once    "classes/resizer.php";


    $s    =   Resizer();

    if(isset($_POST['url']))    {

        $url    =   $_POST['url'];

        if($code    =   $s->makeCode($url))   {

            $_SESSION['feedback']   =   "Ready! Your    link    :
                <a  href='$url'>http://resizer/$code</a";
        }
    }