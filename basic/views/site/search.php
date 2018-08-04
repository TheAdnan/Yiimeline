<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Search</title>
  </head>
  <body>
    <div class="">
      <?php foreach ($video as $result): ?>
        <h2>
            <?php echo $result['title'] ?>
        </h2>
      <?php endforeach; ?>
    </div>
  </body>
</html>
