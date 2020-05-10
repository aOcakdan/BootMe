<?php


class user
{
    static $users = [
        "laughmanlj@gmail.com" => ["name" => "Alptekin", "surname" => "Ocakdan", "password" => "1234567"]

    ];
    public static function logout(){
        unset($_SESSION["user"]);
    }
    public static function login($username, $password){
            if(isset(self::$users[$username])){
                if(self::$users[$username]["password"] == $password){
                    $_SESSION["user"] = $username;
                    return true;

                }
                return "passErr";

            }
            return "noUser";
    }
    public static function getData($user, $data){
        return self::$users[$user][$data];
    }
    static function getCurrentUser(){
        return $_SESSION["user"];

    }
    static function checkLogin(){
        return isset($_SESSION["user"]);
    }


}