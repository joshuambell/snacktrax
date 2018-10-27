<?php
// get database connection
include_once 'db_connect.php';
 
// instantiate user object
include_once 'user.php';
 
$database = new Database();
$dbname = $database->getConnection();
 
$user = new User($dbname);
 
// set user property values
$user->fname = $_POST['fname'];
$user->lname = $_POST['lname'];
$user->email = $_POST['email'];
$user->password = $_POST['password'];
$user->pswrepeat = $_POST['pswrepeat'];

 
// create the user
if($user->signup()){
    $user_arr=array(
        "status" => true,
        "message" => "Successful Signup!",
        "email" => $user->email
        "password" => $password->password
    );
}
else{
    $user_arr=array(
        "status" => false,
        "message" => "User already exists!"
    );
}
print_r(json_encode($user_arr));
?>