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

var_dump($_POST);

$user_id = $_POST['user_id'];
$book_title = $_POST['book_title'];
$book_isbn = $_POST['book_isbn'];
$book_course = $_POST['book_course'];
$book_price = $_POST['book_price'];
$book_condition = $_POST['book_condition'];
$book_desc = $_POST['book_desc'];
$book_img = $_POST['book_img'];
$book_mdate = $_POST['book_mdate'];


$query = "INSERT INTO books (user_id, book_title, book_isbn, book_course, book_price, book_condition, book_desc, book_img, book_mdate) VALUES ('$user_id','$book_title','$book_isbn','$book_course','$book_price','$book_condition','$book_desc','$book_img','$book_mdate')";


echo $query;

$result = $conn->query($query);

if($result){
  echo json_encode(true);
} else {
  echo json_encode(false);
}

?>
