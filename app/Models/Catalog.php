<?php
require_once CORE.'/Model.php';
require_once CORE.'/Connection.php';
require_once Models.'/Category.php';
require_once Models.'/Product.php';

class Catalog extends Model
{
    protected static $table = "products";
    protected static $pk = "id";

    public static function getResource(){
        return self::$table;
    }
    public static function getProducts()
    {
        $sql = "SELECT t1.*, t2.picture, categories.name AS categoryName  FROM products t1
                    JOIN (SELECT resource, resource_id, filename picture FROM pictures group by resource_id) as t2
                    ON t2.resource = 'products' 
                    AND t1.id = t2.resource_id
                    INNER JOIN categories ON categories.id=t1.category_id
                ";
        return parent::getWithSql($sql);
    }
}