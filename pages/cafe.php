<?php 
require_once($_SERVER["DOCUMENT_ROOT"]."/src/dishes.php");
require_once($_SERVER["DOCUMENT_ROOT"]."/src/categories.php");
//запоминать id выбранной категории, если он null то выводим все блюда
//id катергории берем из $_GET
//запоминать номер страницы, на которой сейчас находимся
//для сортировки передавать в функцию сортировки блюд id категории, номер страницы
$categoryId = null;
$category = null;
$page = 1;
$limit = 4;
$title = "Меню";
$categpryParam="?";
if (isset($_GET["category"])) {
        $categoryId = intval($_GET["category"]);
        $category = selectCategoryById($categoryId);
        if($category!=null){ $title = $category->title;}   
        $categpryParam = $categpryParam."category=$categoryId&";
        if ($category == null) {
            // если категория с заданным id не найден - перенаправить на страницу всех товаров
            header("Location: /pages/cafe.php");
        }
    }
$pageCount = ceil(selectCountById($categoryId)/$limit);
if(isset($_GET["page"])){
    $page=intval($_GET["page"]);
    if ($page < 1) $page = 1;
    elseif ($page>$pageCount) $page = $pageCount;
}
$dishes = selectAllByParams($categoryId, $page, $limit);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cafe Online</title>
    <link rel='stylesheet' href='./../resource/css/style.css'>
    <link rel="stylesheet" href='./../resource/css/header.css'>
    <link rel="stylesheet" href='./../resource/css/main.css'>
    <link rel="stylesheet" href="./../resource/css/footer.css">
    
</head>
<body>
    <?php include_once $_SERVER["DOCUMENT_ROOT"]."/parts/header.php" ?>
    <main>
        <section class="menu-title">
           <h1><?= $title ?></h1>
        </section>
        <section class="menu">
          <?php foreach ($dishes as $dish): ?>
            <div class="item">
                <div class="image-div">
                    <img class="image-img" src="./../resource/images/burger.jpg" alt="image">
                </div>
                <h3><?=$dish->title?></h3>
                <span><?=$dish->description ?></span>
                <h3><?=$dish->price?> руб</h3>
                <div class="button-div">
                    <button>Купить</button>
                </div>    
            </div>
          <?php endforeach; ?>
        </section>
        <section>
            <div class="paging-div">
                <a href="<?=$categpryParam?>page=<?php echo $page > 1? $page - 1 : 1; ?>">
                    <button><<</button></a>
                <!-- <button><<</button> -->
                <h3>Страница <?= $page?> из <?= $pageCount ?></h3>
                <a href="<?=$categpryParam?>page=<?php echo $page < $pageCount? $page + 1 : $pageCount; ?>">   
                    <button >>></button></a>
            </div>
        </section>
    </main>
    <?php include_once $_SERVER["DOCUMENT_ROOT"]."/parts/footer.php" ?>
</body>
</html>