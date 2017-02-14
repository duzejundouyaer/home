<html ng-app="ionicApp">
  <head>
        <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, width=device-width">
    <title>详情页</title>
    <link href="./style/css/ionic.min.css" rel="stylesheet">
    <script src="./style/js/ionic.bundle.min.js"></script>
    <script type="text/javascript">
    angular.module('ionicApp', ['ionic'])

    .controller('SlideController', function($scope) {
      
      $scope.myActiveSlide = 0;
      
    })
    </script>
    <style type="text/css">
    
        .col img{
            width:100%
        }
    .slider {
      height: 34%;
    }
   .slider-slide {
      color: #000; 
      text-align: center; 
      font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif; font-weight: 300; }
    .a {
      background-image: url(./style/img/004.jpg);
      background-size: 100% 100% ;
    }

    .b {
      background-image: url(./style/img/005.jpg);
      background-size: 100% 100% ;
    }

    .c {
      background-image: url(./style/img/006.jpg);
      background-size: 100% 100% ;
    }
		.box{ 
      height:100%; 
    } 
    .box h3{
      position:relative; top:50%; transform:translateY(-50%); 
    }
    </style>
  </head>
<body>
<!--顶部-->
    <div class="bar bar-header bar-positive  ">
		    <h1 class="title">课程详情</h1>
		    <a class="button button-clear icon ion-android-cart" href="{{URL('shopcart')}}"></a>
	</div>
	
<!--内容-->
<ion-view title="Home" hide-nav-bar="true">
  <ion-scroll  direction="y" scrollbar-y="false" style="width: 100%; height: 100%">
  <div >
  <div ng-app="ionicApp" animation="slide-left-right-ios7" ng-controller="SlideController">

	  <ion-slide-box active-slide="myActiveSlide"  does-continue="true" slide-interval=4000 slide-page="true">
		<ion-slide>
		  <div class="box a"></div>
		</ion-slide>
		<ion-slide>
		  <div class="box b"></div>
		</ion-slide>
		<ion-slide>
		  <div class="box c"></div>
		</ion-slide>
		
	  </ion-slide-box>
    </div>
	
	<div>
	<table width="100%" style="border:1px;" >
	<tr>
	   <td >
			<div style="margin:10px auto;width:50px;height:50px;">
				<img src="./style/img/01.png" style="margin:0;width:100%;height:100%;border-radius:50px;overflow:hidden;">
			</div>
			<p style="text-align:center">目录</p>
	   </td>
	   <td >
			<div style="margin:10px auto;width:50px;height:50px;border-radius:50px;overflow:hidden;">
				<img src="./style/img/02.png" style="margin:0;width:100%;height:100%;">
			</div>
			<p style="text-align:center">评价</p>
	   </td>
	  <td >
			<div style="margin:10px auto;width:50px;height:50px;border-radius:50px;overflow:hidden;">
				<img src="./style/img/03.png" style="margin:0;width:100%;height:100%;">
		    </div>
			<p style="text-align:center">详情</p>
	  </td>
	  <td>
			<div style="margin:10px auto;width:50px;height:50px;border-radius:50px;overflow:hidden;">
				<img src="./style/img/04.png" style="margin:0;width:100%;height:100%;">
			</div>
			<p style="text-align:center">相关课程</p>
	  </td>
	  </tr>
	<!--  
	  <tr>
		   <td >
			  <div style="margin:10px auto;width:50px;height:50px;border-radius:50px;overflow:hidden;">
				<img src="./style/img/55.jpg" style="margin:0;width:100%;height:100%;">
			  </div>
			  <p style="text-align:center">装备</p>
		  </td>
		  <td >
			  <div style="margin:10px auto;width:50px;height:50px;border-radius:50px;overflow:hidden;">
				<img src="./style/img/66.jpg" style="margin:0;width:100%;height:100%;">
			  </div>
			  <p style="text-align:center">鞋袜</p>
		  </td>
		  <td >
			  <div style="margin:10px auto;width:50px;height:50px;border-radius:50px;overflow:hidden;">
				<img src="./style/img/77.jpg" style="margin:0;width:100%;height:100%;">
			  </div>
			  <p style="text-align:center">配件</p>
		  </td>
		  <td>
			  <div style="margin:10px auto;width:50px;height:50px;border-radius:50px;overflow:hidden;">
				<img src="./style/img/66.jpeg" style="margin:0;width:100%;height:100%;">
			  </div>
			  <p style="text-align:center">配件售后</p>
		  </td>
	  </tr> -->
	</table>
</div>	
	 <div style="width:100%;height:2px;background-color:#E6E6FA;margin-bottom:4px"></div>
	<div style="margin:0px ;padding: 0px;width:auto;height:anto">
	   
	   <ul class="row">
		   <li class="col">
		    <img src="./style/img/3.jpg">
		   </li>
		  
		    <li class="col">
		    <img src="./style/img/3.jpg">
		   </li>
	   </ul>
	    <div style="width:100%;height:2px;background-color:#E6E6FA;margin-bottom:4px"></div>
	     <ul class="row">
		   <li class="col">
		    <img src="./style/img/3.jpg">
		   </li>
		    <li class="col">
		    <img src="./style/img/3.jpg">
		   </li>
	   </ul>
	 </div>
	
	</div>
	<div style="height:50px;width:100%;clear:all"></div>
	</ion-scroll>
    </ion-view>
	<!-- 底部-->
    @include('master')
  </body>
</html>