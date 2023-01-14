

<form action="" method="post">
    <input type="text" name="userName1" id="">
    <input type="text" name="userName2" id="">
    <input type="submit" value="submit">
</form>
<?php


// class User {
//     public $name;
//     public $id;
//     public $age;
//     public $gender = 'm';
//     public $email;
//     public $password;
//     public $phone;
//     public $image = 'default.png';

//     public function login(){
//         echo "login </br>";
//     }
//     public function logout(){
//         echo "logout </br>";
//     }
//     public function register(){
//         echo "register </br>";
//     }
// }

// $user = new user;
// $user->name = 'norhan';
// $user->gender = 'f';
// $user->id = 22;
// $user->email = 'norhan@gmail.com';
// $user->phone = 123456789;
// $user->password = 123456;
// $user->age = 25;
// $user->cart = ['laptop','tshirt'];

// $user2 = new user;
// $user2->name = 'Omar';
// $user2->gender = 'M';
// $user2->id = 24;
// $user2->email = 'omar@gmail.com';
// $user2->phone = 1149685494;
// $user2->password = 123456;
// $user2->age = 25;
// $user2->cart = ['Iphone','Ball'];
// print_r($user );
// print_r($user2 );
// $user->login();
// $user2->logout();
// $user2->register();
// echo '<br>'.__FILE__;

// class : blueprint which group similar tasks => organize application structure
// class className {
// property => variable , method => function
// }
// object->instance to access class scope (local scope) into global scope

# class user
// function login
// function logout
// function register

# class order
// function makeOrder 
// function cancelOrder 
// function reviewOrder 

#class product
// function getAllProducts 
// function recentProducts 

// access modifiers => public , protected , private
// class User {
//     public $name;
//     public $id;
//     public $age;
//     public $gender = 'm';
//     public $email;
//     public $password;
//     public $phone;
//     public $image = 'default.png';

//     public function login(){
//         echo "login<br>";
//     }
//     public function logout(){
//         echo "logout<br>";
//     }
//     public function register(){
//         echo "register<br>";
//     }
// }

// $user = new user;
// // print_r($user);
// // echo $user->gender;
// // echo $user->image;
// $user->name = 'norhan';
// $user->gender = 'f';
// $user->id = 22;
// $user->email = 'norhan@gmail.com';
// $user->phone = 123456789;
// $user->password = 123456;
// $user->age = 25;
// $user->cart = ['laptop','tshirt'];
// // print_r($user);
// $user2 = new user;
// $user2->id = 2;
// $user2->name = 'omar';
// $user2->email = 'omar@gmail.com';
// $user2->password = 123456;
// $user2->phone = 1234567891;
// $user2->age = 30;
// // print_r($user2);
// $user3 =  new user;
// // print_r($user3);

// $user->login();
// $user2->logout();
// $user3->register();

// echo '<br>'.__FILE__;



class user
{
    public $name;
    public $gender;

    public function getName()
    {
        echo "{$this->name} <br>";
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    public function getUser()
    {
        print_r($this);
    }
}
if (isset($_POST['userName1'])& isset($_POST['userName2'])){
$user1= new user;

$user1->getName();
$user1->setName($_POST['userName1']);
$user1->getUser();
$user2= new user;

$user2->getName();
$user2->setName($_POST['userName2']);
$user2->getUser();
}

?>
