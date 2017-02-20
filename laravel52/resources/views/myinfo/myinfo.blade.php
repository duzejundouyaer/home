<html>
<head>
        <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, width=device-width">
    <title>我的信息</title>
    <link href="{{asset('style/css/ionic.min.css')}}" rel="stylesheet">
    <script src="{{asset('style/js/ionic.bundle.min.js')}}"></script>
</head>
<body>
<!--我的资料-->
	
 <div id="my_info">
    <div class="bar bar-header bar-positive  " >
	<a class="button button-clear icon ion-ios-arrow-left" href="{{URL('center')}}"></a>
     <h1 class="title">我的资料</h1>
	
      <a class="button button-clear icon "  id="submit">保存</a>
   
   </div>
   <div class="scroll-content">
     
		 <div class="scroll-content has-header padding">
		 <div style="margin:10px auto;width:100px;height:100px;border-radius:50px;overflow:hidden;">
                      <img src="{{asset('style/img/3.jpg')}}" style="margin:0;width:100%;height:100%;">
            </div>
				<div class="list list-inset">
					<label class="item item-input">
					   昵称	<input type="text" id="nickname" value="{{$info['nickname']}}"  style="text-align:right;">
					  </label>
					  <label class="item ">
					   个人介绍	<textarea name="" calss="myInfo" placeholder="编辑个人介绍(不超过80个字)" id="desc" cols="50" rows="3" style="" value="">{{$info['user_desc']}}</textarea>
					  </label>
					  <span style="margin-left:150px; color:red;" id="info"></span>
				</div>
		      <a class="button button-block button-positive" href="{{URL('login_out')}}">退出登录 </a>
	    </div>	   
            

   </div>
</div>
<div class="bar bar-footer bar-positive item-input-inset " >
</div>
</body>	
</html>
<script type="text/javascript" src="{{asset('style/js/jquery.js')}}"></script>
<script type="text/javascript">
	$(function(){
        $("#submit").click(function(){
             var nickname = $("#nickname").val();
             var desc = $("#desc").val();
             var _token = "{{ csrf_token() }}";
             if(nickname.length>5){
                $("#info").html("昵称不能超过5个字");
                return false;
             }else if(nickname == ''){
             	$("#info").html("请输入昵称");
             	return false;
             }else if(desc.length>80){
             	$("#info").html("昵称不能超过80个字");
             	return false;
             }else{
				 $.ajax({
				   type: "POST",
				   url: "{{URL('insert_info')}}",
				   data: {nickname:nickname,desc:desc,_token:_token},
				   success: function(msg){
					   	if(msg==0){
					   		$("#info").css("color","green");
					    	$("#info").html("修改成功");
					   	}else if(msg=='500')
					   	{
					   		$("#info").css("color","black");
					   		$("#info").html("服务器错误");
					   		return false;
					   	}
				    }
				})
             }
            
        })
	})
</script>