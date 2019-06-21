<?php
$account = $_POST["account"];
$passwd = $_POST["passwd"];
if($account == "yi" && $passwd == 123){
	$data = array("code" => 200, "message"=>"登陆成功", "token"=>"asd123","user_id"=>"ymh");
    echo json_encode($data);
}else{
	$data = array("code" => 202, "message"=>"账号或密码错误");
    echo json_encode($data);
}