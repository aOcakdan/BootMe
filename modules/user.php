<?php


class user
{
    static $users = [
        "laughmanlj@gmail.com" => ["name" => "Alptekin", "surname" => "Ocakdan", "password" => "1234567"]

    ];
    static function login($username, $password){
            if(isset(self::$users[$username])){
                if(self::$users[$username]["password"] == $password){
                    return true;
                }
                return "passErr";

            }
            return "noUser";
    }
}