<html>
<body>
<?php
// include database and object files
include_once 'db_connect.php';
include_once 'user.php';
 
// get database connection
$database = new Database();
$dbname = $database->getConnection();
 
// prepare user object
$user = new User($dbname);
// set ID property of user to be edited
$user->email = isset($_GET['email']) ? $_GET['email'] : die();
$user->password = isset($_GET['password']) ? $_GET['password'] : die();

// read the details of user to be edited
$stmt = $user->login();

if($stmt->rowCount() > 0){
 
    // get retrieved row
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
   
    // create array
    $user_arr=array(
        "status" => true,
        "message" => "Successful Login!",
        "email" => $row['email']
        "password" => $row['password']
    );
}
else{
    $user_arr=array(
        "status" => false,
        "message" => "Invalid Email or Password!",
    );
}
// make it json format
print_r(json_encode($user_arr));
?>
</body>