<?php
    session_start();
?>


<!DOCTYPE   html>

<html   lang="en">

<head>

    <meta   charset="UTF-8">

    <title>Url Resizer</title>

    <link   rel   ="stylesheet"   href="css/style.css">

</head>

<body>

    <div    class="container">

        <h1   classs="title">Url   Shortener</h1>

<?php

    if(isset($_SESSION['feedback']))    {

        echo    "<p>".$_SESSION['feedback']."</p>";

        unset($_SESSION['feedback']);
    }
?>

        <form   action="resize.php"   method="post">

            <input  type="url"  name="url"
                    placeholder="Enter URL"    autocomplete="off">

            <input  type="submit"   value="Resize">
        </form>

    </div>

</body>

</html>