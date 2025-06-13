<?php
    require_once($_SERVER["DOCUMENT_ROOT"]."/src/connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cafe Online</title>
    <link rel='stylesheet' href='./../resource/css/style.css'>
    <link rel="stylesheet" href='./../resource/css/header.css'>
    <link rel="stylesheet" href='./../resource/css/index.css'>
    <link rel="stylesheet" href="./../resource/css/footer.css">
</head>
<body>       
    <?php include_once $_SERVER["DOCUMENT_ROOT"]."/parts/header.php" ?>
    <main>
        
      <?php if(pingDb()):?>
            <h1>Welcome</h1>
      <?php else: ?>
           <h1>Somthing wrong</h1>
      <?php endif ?>
    </main>
    <?php include_once $_SERVER["DOCUMENT_ROOT"]."/parts/footer.php" ?>
</body>
</html>
