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
           <h1>Меню</h1>
        </section>
        <section class="menu">
            <div class="item">
                <div class="image-div">
                    <img class="image-img" src="./../resource/images/burger.jpg" alt="image">
                </div>
                <h3>Title</h3>
                <span>Сочный бургер с котлетой и булочками 300гр</span>
                <h3>000.00 руб</h3>
                <div class="button-div">
                    <button>Купить</button>
                </div>    
            </div>
            <div class="item">
                <div class="image-div">
                    <img class="image-img" src="./../resource/images/burger.jpg" alt="image">
                </div>
                <h3>Title</h3>
                <span>Сочный бургер с котлетой и булочками 300гр</span>
                <h3>000.00 руб</h3>
                <div class="button-div">
                    <button>Купить</button>
                </div>    
            </div>
            <div class="item">
                <div class="image-div">
                    <img class="image-img" src="./../resource/images/burger.jpg" alt="image">
                </div>
                <h3>Title</h3>
                <span>Сочный бургер с котлетой и булочками 300гр</span>
                <h3>000.00 руб</h3>
                <div class="button-div">
                    <button>Купить</button>
                </div>    
            </div>
            <div class="item">
                <div class="image-div">
                    <img class="image-img" src="./../resource/images/burger.jpg" alt="image">
                </div>
                <h3>Title</h3>
                <span>Сочный бургер с котлетой и булочками 300гр</span>
                <h3>000.00 руб</h3>
                <div class="button-div">
                    <button>Купить</button>
                </div>    
            </div>
        </section>
        <section>
            <div class="paging-div">
                <button><<</button>
                <h3>Страница 1</h3>
                <button>>></button>
            </div>
        </section>
    </main>
    <?php include_once $_SERVER["DOCUMENT_ROOT"]."/parts/footer.php" ?>
</body>
</html>