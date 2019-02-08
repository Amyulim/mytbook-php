<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header("Access-Control-Allow-Headers: X-Requested-With, Content-Type");

try {
    $conn = new PDO("mysql:host=k9xdebw4k3zynl4u.cbetxkdyhwsb.us-east-1.rds.amazonaws.com;dbname=hxx7ktin4x3q7iue", "caqwo1iz5lww951z", "zqigtmtt81za05j2");
   
}
catch (PDOExpection $e) {
    echo "Error" . $e->getMessage();
}

echo ($conn);

$query = "SELECT * FROM books WHERE user_id='{$_POST["user_id"]}' AND book_id='{$_POST["book_id"]}'";



if($result){
  $books = $result->fetchAll();
  if(!empty($books)){
    echo json_encode($books);
  } else {
    echo json_encode(false);
  }
} else {
  echo json_encode(false);
} 


?>
