<?php
    session_start();
    require_once    "classes/resizer.php";


    $s  =   new   Resizer();

    if(isset($_POST['url']))    {

        $url    =   $_POST['url'];

        if($code   =   $s->makeCode($url))   {

            $_SESSION['feedback']   =   "Ready! Your    link    :
                <a  href='$url'>http://resizer/$code</a>";

        }   else   {
            $_SESSION['feedback']   =   "Error! Incorrect URL?";
        }
    }

    header('Location:   index.php');
