<?php
class Model {
    public $primaryKey = 'id';
    const table = "Model";
    function __construct()
    {
        echo "Property :" . self::table . " in :". self::class ." class <br>"; // Property Model
        echo "Property :" . static::table . " in :". static::class ." class<br>"; // Property User
        echo "########## End Parent Constructor ###########<br>";
    }

    public function getTableName()
    {
        echo "Model <br>";
    }

    public static function getTableNameStaticlly()
    {
        echo "Model Staticlly <br>";
    }
}
class User extends Model {
    const table = "User";
    function __construct()
    {
        parent::__construct();    
        echo "Property : " . parent::table . "<br>"; // Property Model
        echo "Property : " . self::table   . "<br>";  // Property User
        echo "Property : " . static::table . "<br>";  // Property User
        echo "########## End Chlid Constructor ###########<br>";
    }

    public function getTableName()
    {
        echo "User <br>";
    }

    public function print()
    {
        parent::getTableName(); // Model
        $this->getTableName(); // User
        parent::getTableNameStaticlly();  // Model Staticlly
    }
}


$user = new User;$user->print(); // output
