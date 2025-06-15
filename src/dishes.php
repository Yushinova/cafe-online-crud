<?php
require_once($_SERVER["DOCUMENT_ROOT"]."/src/connection.php");

class Dish {
    public function __construct(
        public int $id = 0,
        public string $title = "",
        public string $description = "",
        public float $price = 0.0,
        public string $image = "",
        public int $categoryId = 0
    ) {}
}
//по умолчанию у нас без сортировки и выодит с 1 страницы по 4 элемента
function selectAllByParams(int $id=null, int $page=1, int $limit=4) : array {
    $conn = openDbConnection();
    $dishes = [];
    $page--;
    if($page>0){
        $page = $page*$limit;
    }
    $argValues = array($limit, $page);
    // конструирование общего запроса
    $query = "SELECT id, title_f, description_f, price_f, category_id, image_f FROM dishes_t";
    //у нас всегда пейджирование осуществяется в любом случае будет передаваться limit offset
    $typeParams = "ii";
    if($id!=null){
        $typeParams = $typeParams."i";
        $query = $query." WHERE category_id = ?";
        array_unshift($argValues , $id);
    } 
    $query = $query." LIMIT ? OFFSET ?";
    $statement = $conn->prepare($query);
    //привязка параметров
    $statement->bind_param($typeParams, ...$argValues);
    $statement->execute();
    $rows = $statement->get_result();
    foreach ($rows as $row) {
        $dishes[] = new Dish(
            id: $row["id"],
            title: $row["title_f"],
            description: $row["description_f"],
            price: $row["price_f"],
            image: $row["image_f"],
            categoryId: $row["category_id"]
        );
    }
    $conn->close();
    
    return $dishes;
}
//возвращает количество записей в таблице по id если id =null то всех
function selectCountById(int $id=null): int{
  $conn = openDbConnection(); 
  $query = "SELECT * FROM dishes_t";
  if($id!=null){
      $query=$query." WHERE category_id = $id";
   }
   $result = mysqli_query($conn, $query);
   $count = mysqli_num_rows($result);
   return $count;
}