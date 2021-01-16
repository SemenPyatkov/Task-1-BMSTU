<?php
$directory  = 'groups/';
$dots = array('.', '..');
$files = scandir($directory);
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Task 1</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<div>
    <h2>Список файлов в каталоге /groups</h2>
    <?php
    foreach($files as $file) {
        $path = $directory . $file;
        if(!in_array($file, $dots))
            echo '<a href="' . $path . '">' . $file . '</a><br/>';
    }
    ?>
</div>
</body>
</html>




