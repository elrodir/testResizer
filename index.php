<?php
    session_start();
?>


<!DOCTYPE   html>

<html   lang="en">

<head>

    <meta   charset="UTF-8">

    <titel>Url Resizer</titel>

    <link   rel   ="stylesheet"   href="css/style.css">

</head>

<body>

    <div    class="container">

        <h1   classs="title"Url   Shortener</h1>

<?php

    if(isset($_SESSION['feedback']))    {

        echo    "<p>".$_SESSION['feedback']."</p>";
    }
?>
    </div>
</body>
</html>