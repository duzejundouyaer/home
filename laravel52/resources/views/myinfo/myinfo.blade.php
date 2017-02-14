<html>
<head>
        <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, width=device-width">
    <title>我的信息</title>
    <link href="./style/css/ionic.min.css" rel="stylesheet">
    <script src="./style/js/ionic.bundle.min.js"></script>
</head>
<body>
<!--我的资料-->
	
 <div id="my_info">
    <div class="bar bar-header bar-positive  " >
	<a class="button button-clear icon ion-ios-arrow-left" href="{{URL('index')}}"></a>
     <h1 class="title">我的资料</h1>
	 
   </div>
   <div class="scroll-content has-header">
     
		
		 <div class="scroll-content has-header padding">
				<div class="list list-inset">
				   <div class="item item-avatar-right">
				     <img src="img/3.jpg"/> <p>头像</p>
				   </div>
					<label class="item item-input">
					   用户名	<input type="text" value="张三" readonly="red" style="text-align:right;">
					  </label>
					<label class="item item-input">
					   密码	<input type="password" value="11111" readonly="red" style="text-align:right;">
					  </label>
					  <label class="item item-input">
					   性别	<input type="text" value="女" readonly="red" style="text-align:right">
					  </label>
					  <label class="item item-input">
					   地址管理	<input type="text" value="邯郸学院" readonly="red" style="text-align:right">
					  </label>
				</div>
		      <a class="button button-block button-positive" href="{{URL('login_out')}}">退出登录 </a>
	    </div>	   
            

   </div>
</div>
<div class="bar bar-footer bar-positive item-input-inset " >
</div>
</body>	
</html>