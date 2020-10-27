<?php
require_once CORE.'/Model.php';

class Catalog extends Model
{
    protected static $table = "categories";
    protected static $pk = "id";
}