<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header("Access-Control-Allow-Headers: X-Requested-With, Content-Type");

 try {
    $conn = new PDO("mysql:host=k9xdebw4k3zynl4u.cbetxkdyhwsb.us-east-1.rds.amazonaws.com;dbname=hxx7ktin4x3q7iue","caqwo1iz5lww951z", "zqigtmtt81za05j2");
   echo "Good";
  }catch (PDOExpection $e){
    echo "Error" .$e->getMessage();
  }

$user_email = $_POST['user_email'];
$student_id = $_POST['student_id'];
$user_pass = $_POST['user_pass'];

//$query = "SELECT id FROM users WHERE user_email='$user_email' AND user_pass='$user_pass'";
$query = "SELECT * FROM users";

$result = $conn->query($query);

echo "user_email";
//if($result){
//  $users = $result->fetchAll();
////  if(!empty($users)){
////    echo json_encode(array(
////      "status"=>true,
////      "id"=>$users[0]["id"]
////    ));
////  } else {
////    echo json_encode(false);
////  }
//} else {
//  echo json_encode(false);
//} 

?>