<?php 
   // подключение необходимых файлов
    require_once($_SERVER["DOCUMENT_ROOT"]."/src/categories.php");
    // получение категорий для вывода в шапке
    $categories = selectAllCategories();
?>

<header>
    <a href="/">
        <div class="logo">
            <img src="./../resource/images/лого.jpg" alt="Логотип">
        </div>
    </a> 
    <div class="deliver-div">
        <div class="deliver">
             <img class="deliver" src="./../resource/images/deliver.png" alt="Логотип">
        </div>
        <div class="phone">
             +7 (123) 456-78-90
        </div>
    </div>
    <a href="/pages/cart.php">
        <div class="cart">
            <img src="./../resource/images/cart.png" alt="Корзина">
            <span>3</span>
        </div>
    </a>
    <nav>
         <ul>
            <li><a href="./../pages/cafe.php">Меню</a></li>
            <?php foreach ($categories as $category): ?>
                    <li>
                        <a href="/pages/cafe.php?category=<?= $category->id ?>">
                            <?= $category->title ?>
                        </a>
                    </li>
            <?php endforeach; ?>
        </ul>
    </nav>       
</header>
    