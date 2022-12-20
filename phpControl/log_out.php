<?php
    include "./confit.php";

    session_start();

    session_unset();

    session_destroy();

    header("location:http://localhost/project-16-ecomin_shopping_site/index.php");

?>