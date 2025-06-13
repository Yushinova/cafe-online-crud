<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel='stylesheet' href='./../resource/css/style.css'>
    <link rel="stylesheet" href='./../resource/css/header.css'>
    <link rel="stylesheet" href="./../resource/css/cart.css">
    <link rel="stylesheet" href='./../resource/css/main.css'>
    <link rel="stylesheet" href="./../resource/css/footer.css">
</head>
<body>
    <?php include_once $_SERVER["DOCUMENT_ROOT"]."/parts/header.php" ?>
    <main class="cart-main">
        <section>
            <h3>Ваша корзина пуста</h3>
            <div class="cart-item">
                <div>
                    <h3>Title</h3>
                    <span>00.00 руб</span>
                </div>
                <div class="cart-div-button">
                     <button>Удалить</button>
                </div>
            </div>
            <div class="cart-item">
                <div>
                    <h3>Title</h3>
                    <span>00.00 руб</span>
                </div>
                <div class="cart-div-button">
                     <button>Удалить</button>
                </div>
            </div>
            <h3>Сумма заказа: 00.00 руб</h3>
        </section>
        <section class="card-form-section">
            <form>
                <label for="address">Адрес доставки</label>
                <input type="text" name="address" required>
                <label for="phone">Контактный телефон</label>
                <input type="tel" name="phone" pattern="\+7(\d{3}\)d{3}-\d{2}-\d{2}" placeholder="+7(123)456-78-90" required>
                <button>Заказать</button>
            </form>
        </section>
        
    </main>
    <?php include_once $_SERVER["DOCUMENT_ROOT"]."/parts/footer.php" ?>
</body>
</html>