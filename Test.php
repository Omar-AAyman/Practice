<?php

 class person {
    public $id;
    public $name;
    public $email;
    public $password;
    public const personType = 'client';
    public function login()
    {
        echo "login with email & password <br>";
    }
    public function logout()
    {
        echo "logout<br>";
    }
}


class user extends person {
}

$user = new user;
// $user->login();

class seller  extends person {
    public $phone;
    public $nantionalId;
    public $productType;
    public const personType = 'seller';
    #override
    public function login()
    {
        echo "login with phone & password <br>";
    }

    public static function getType()
    {
    }
    public static function getParentType()
    {
        // return seller::personType;
        // return self::personType;
        // return static::personType;
        return parent::personType;
    }
}

$seller = new seller;
// $seller->login();
// echo seller::getType();
echo seller::getParentType();



// final keyword
// final class => prevent inheritance 
// final method => prevent override