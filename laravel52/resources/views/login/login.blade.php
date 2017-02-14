<!DOCTYPE html>
<head>
<title>登录</title>
    <meta charset="UTF-8">
	<meta name="viewport" content="initial-scale=1,maximum-scale=1,user-scalable=no,width=device-width,height=device-height">
<link rel="stylesheet" type="text/css" href="./style/css/ionic.css">  
 <!-- <link rel="stylesheet" type="text/css" href="ionic.min.css">  -->
  
</head>
<body>
<div class="scroll-content padding" id="index_login">
			<div class="list list-borderless">
				<div class="item item-thumbnail-left item-positive">
				<img src="./style/img/9.jpg" style="margin:0;width:100%;height:100%;border-radius:50px;overflow:hidden;">
				<h1 class="light">login</h1>
			</div>

			</div>
		  <div class="list list-inset">
			  <label class="item item-input">
			  <i class="icon ion-android-person positive"></i>
				<input type="text" placeholder="用户名">
			  </label>
			  <label class="item item-input">
			  <i class="icon ion-ios-unlocked-outline positive"></i>
				<input type="password" placeholder="密码">
			  </label>
			  <label class="item item-checkbox">
				<label class="checkbox">
					<input type="checkbox" checked>
				</label>
				记住密码
			</label>
			  
		  </div>
	  <button class="button button-block button-positive">登陆 </button>
	   <a class="button button-block button-positive" href="{{URL('regist')}}">注册 </a>
</div>


</body>
</html>