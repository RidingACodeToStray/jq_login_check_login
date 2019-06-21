$(function(){
	//先检查本地是否有toekn和user_id
	var token = window.localStorage.getItem("token");
	var user_id = window.localStorage.getItem("user_id");
	if(!token || !user_id){
		alert("请先登陆")
		window.location.href="login.html"
		return
	}
	//如果有token和user_id，则将其发送给后端验证
	$.ajax({
		method:"post",
		url:"../server/checkLogin.php",
		dataType:"json",
		data:{
			token:token,
			user_id:user_id
		},
		success:function(res){
			if(res.code == 201){
			alert("请先登录")
			window.location.href="login.html"
		}
		}
	})
})