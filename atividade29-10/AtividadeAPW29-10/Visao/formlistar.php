<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<main class='videos'>
<?php
    require './Modelo/ClassVideos.php';
    require './Modelo/DAO/ClassVideosDAO.php';

    $classVideosDAO = new ClassVideosDAO();
    $us = $classVideosDAO->listarVideos();

   
    foreach ($us as $us) {
      echo  "<div class='card bg-dark' style='width: 18rem;'>";
      echo    "<iframe src='$us[embed]' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share' referrerpolicy='strict-origin-when-cross-origin' allowfullscreen></iframe>";
      echo      "<div class='card-body'>";
      echo         "<h5 class='card-title'>$us[nome]</h5>";
      echo          "<p class='card-text'>Lorem ipsum dolor sit paka mind never</p>";
      echo          "<a href='$us[link]' target='_blank' class='btn btn-primary'>Ver no youtube</a>";
      echo      "</div>";
      echo  "</div>";

    }


    ?>
</main>

</body>
</html>