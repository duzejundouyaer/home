
<!DOCTYPE html>
<head>
<title>登录</title>
    <meta charset="UTF-8">
	<meta name="viewport" content="initial-scale=1,maximum-scale=1,user-scalable=no,width=device-width,height=device-height">
<link rel="stylesheet" type="text/css" href="{{asset('style/css/ionic.css')}}">  
 <!-- <link rel="stylesheet" type="text/css" href="ionic.min.css">  -->
  
</head>
<body>
<div class="scroll-content padding" id="index_login">

			<div class="list list-borderless">
				<div class="item item-thumbnail-left item-positive">
				<img src="{{asset('style/img/1a.png')}}" style="margin:0;width:100%;height:100%;border-radius:50px;overflow:hidden;">
				<h1 class="light">login</h1>
			</div>
			</div>
	<form action="{{URL('checklogin')}}" method="post">
		{{csrf_field()}}
		  <div class="list list-inset">
			  <label class="item item-input">
			  <i class="icon ion-android-person positive"></i>
				<input type="text" placeholder="手机号" name="tel">
			  </label>
			  <label class="item item-input">
			  <i class="icon ion-ios-unlocked-outline positive"></i>
				<input type="password" placeholder="密码" name="pwd">
			  </label>
			  <label class="item item-checkbox">
				<label class="checkbox">
					<input type="checkbox" checked>
				</label>
				记住密码
			</label>
		  </div>
	  <button class="button button-block button-positive" type="submit">登陆 </button>
	</form>
	   <a class="button button-block button-positive" href="{{URL('regist')}}">注册 </a>
	<div class="info" style="margin-left: 140px;">
		@if(session('errors'))
			<p style="font-size: 16px; color:red;" id="errorInfo">{{session('errors')}}</p>
		@endif
	</div>
	<a href="#" onclick='toLogin()'>
		<img src="{{asset('style/img/qq.png')}}"></a>
</div>
</body>
</html>
<script src="{{asset('style/js/jquery.js')}}"></script>
<script>
    function toLogin()
    {
        //以下为按钮点击事件的逻辑。注意这里要重新打开窗口
        //否则后面跳转到QQ登录，授权页面时会直接缩小当前浏览器的窗口，而不是打开新窗口
        //var A=window.open("http://127.0.0.1/Connect2.1/example/oauth/index.php","TencentLogin","width=900,height=800,menubar=0,scrollbars=1,resizable=1,status=1,titlebar=0,toolbar=0,location=1");
        location.href="http://127.0.0.1/Connect2.1/example/oauth/index.php";
    }
</script>
{{--code=0EBB7D797ECB71925EAF2E852FA0A550&state=8d2132b4c8d1574239c97c3aca85cde1--}}
{{--code=B99EBB4382ED6131D7A7E59F1C20534D&state=213b5454fda003b6c34db6739b2c1aeb--}}