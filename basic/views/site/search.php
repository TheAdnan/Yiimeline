<!doctype html>
<html>
  <head>
    <title>YouTube Search</title>
  </head>
  <body>
  <?php
    foreach ($video as $vid){
        echo "<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/" . $vid["videoId"] . "\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>";
    }
  ?>
  </body>
</html>
