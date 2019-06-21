<?php
$qd_token = $_POST["token"];
$qd_user_id = $_POST["user_id"];
if($qd_token === "asd123" && $qd_user_id === "ymh"){
	$data = array("code" => 200, "message"=>"已登录");
    echo json_encode($data);
}else{
	$data = array("code" => 201, "message"=>"未登录");
    echo json_encode($data);
}