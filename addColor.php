<? php
$data = json_decode($_GET['data']);
header("Content-Type: application/json");
$opacity = "";

if($method == "GET")
{ // 1. 자바스크립트 객체 또는 serialize() 로 전달
  $opacity = $_GET['opacity'];
  echo(json_encode(array("mode" => $_REQUEST['mode'], "opacity" => $opacity)));}

else if($method == "POST")
  { // 1. 자바스크립트 객체 또는 serialize() 로 전달
    $data = json_decode($_POST['data']);
    echo(json_encode(array("mode" => $_REQUEST['mode'], "opacity" => $data->opacity))); }



    ?>
