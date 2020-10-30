<?php
require_once CORE.'/Model.php';

class User extends Model
{
    protected static $table = "users";
    protected static $pk = "id";

}