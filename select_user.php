<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header("Access-Control-Allow-Headers: X-Requested-With, Content-Type");

 try {
    $conn = new PDO("mysql:host=localhost;dbname=mytbook","root", "root");
    echo "Connected &nbsp; ";
  }catch (PDOExpection $e){
    echo "Error" .$e->getMessage();
  }

$user_email = $_POST['user_email'];
$student_id = $_POST['student_id'];
$user_pass = $_POST['user_pass'];

$query = "SELECT user_id FROM users WHERE user_email='$user_email' AND user_pass='$user_pass'";

$result = $conn->query($query);
if($result){
  $users = $result->fetchAll();
  if(!empty($users)){
    echo json_encode(array(
      "status"=>true,
      "id"=>$users[0]["id"]
    ));
  } else {
    echo json_encode(false);
  }
} else {
  echo json_encode(false);
}

?>