<?php

// categories.php - код для работы с категориями

// подключение необходимых файлов
require_once($_SERVER["DOCUMENT_ROOT"]."/src/connection.php");

// Category - категория товаров
class Category {
    public function __construct(
        public int $id = 0,
        public string $title = ""
    ) {}
}

// selectAllCategories - получение списка всех категорий
// вход: -
// выход: массив всех категорий
function selectAllCategories() : array {
    $conn = openDbConnection();
    $query = "SELECT id, title_f FROM category_t";
    $rows = $conn->execute_query($query);
    $categories = [];
    foreach ($rows as $row) {
        $categories[] = new Category(
            id: $row["id"],
            title: $row["title_f"]
        );
    }
    return $categories;
}

// selectCategoryById - получение категории по id
// вход: id категории
// выход: объект категории с заданным id либо null если категория с таким id не найдена
function selectCategoryById($id) : ?Category {
    $conn = openDbConnection();
    $query = "SELECT id, title_f FROM category_t WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $category = null;
    $row = $stmt->get_result()->fetch_assoc();
    if ($row !== null && $row !== false) {
        $category = new Category(id: $row["id"], title: $row["title_f"]);
    }
    $conn->close();
    return $category;
}