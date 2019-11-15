<?php
include "php/BDD.php";
function getMonPtitBlock($file, $data = [])
{
    require $file;
}

echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\">
    <title>GHOST BASTARDS</title>
    <link rel=\"stylesheet\" href=\"style.css\">
</head>
<body>";
//getMonPtitBlock("php/header.php", $maladie);
//getMonPtitBlock("php/infos.php", $maladie);
include "php/header.php";
include "php/infos.php";
include "php/img.php";
include "php/footer.php";
//getMonPtitBlock("php/img.php", $maladie);
//getMonPtitBlock("php/footer.php");
echo "</body>
</html>";


?>