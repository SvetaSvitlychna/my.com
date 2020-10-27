<?php
// require_once CORE.'/Connection.php';

// class Category {
// public function save ($name, $status){
//     $connection =new Connection(require_once DB_CONFIG_FILE);
//     $stmt = $connection->pdo ->prepare("INSERT INTO categories (name, status)
//     VALUES(?,?)");
//     // $sql = "INSERT INTO categories (name, status) VALUES (?, ?)";
//    $stmt->bindParam(1,$name);
//    $stmt->bindParam(2,$status);
//    $stmt->execute();
   
//         return $connection->pdo->lastInsertId();
//         }
// public function all(){
//     $connection =new Connection(require_once DB_CONFIG_FILE);
//     $stmt = $connection->pdo ->query("SELECT * FROM categories ORDER BY id ASC");
//     $categories = $stmt ->fetchAll();
//     return $categories;      
//     }

// public function getCategories(){
//         $connection =new Connection(require_once DB_CONFIG_FILE);
//         $stmt = $connection->pdo ->query("SELECT * FROM categories WHERE
//         status=1 ORDER BY id ASC");
//         $categories = $stmt ->fetchAll(PDO::FETCH_OBJ);
//         return $categories;      
//         }
// public function getById($id){
//         $connection =new Connection(require_once DB_CONFIG_FILE);
//         $stmt = $connection->pdo ->prepare("SELECT * FROM categories WHERE id=?");
//      $stmt->execute([$id]);
//      return $stmt->fetch(PDO::FETCH_OBJ);
//         }
// public function destroy($id){
//     $connection =new Connection(require_once DB_CONFIG_FILE);
//     $stmt = $connection->pdo ->prepare("DELETE FROM categories WHERE id=?
//     LIMIT 1");
//     $stmt->execute([$id]);
//     }
// public function update($id, $name, $status){
//     $connection =new Connection(require_once DB_CONFIG_FILE);
//     $stmt = $connection->pdo ->prepare("UPDATE categories SET name=?,status=?
//     WHERE id=?");
//     $stmt->execute([$id,$name, $status]);

//     }

require_once CORE.'/Model.php';

class Category extends Model
{
    protected static $table = "categories";
    protected static $pk = "id";

    public static function getResource(){
        return self::$table;
    }
    public static function getCategories(){
        $sql ="SELECT t1.*,t2.picture FROM categories AS t1 
        JOIN (SELECT resource,resource_id, filename picture FROM pictures 
        GROUP BY resource_id) AS t2 on t2.resource = 'categories' AND 
        t1.id = t2.resource_id";
        return parent::getWithSql($sql);
    }
   
}