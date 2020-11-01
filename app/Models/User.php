<?php
require_once CORE.'/Model.php';

class User extends Model
{
    protected static $table = "users";
    protected static $pk = "id";

    public static function checkUser($email, $password){
        $sql = "SELECT * FROM users WHERE email = '$email'";
        $user = parent::getOne($sql);
        if(!$user){
            return false;
        } else{
            if (password_verify($password, $user->password)){
                return $user->id;
                }else{
                return false;
            }
        }
    }

}