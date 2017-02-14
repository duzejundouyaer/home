<html ng-app="ionicApp">
  <head>
        <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, width=device-width">
    <title>首页</title>
    <link href="./style/css/ionic.min.css" rel="stylesheet">
    <script src="./style/js/ionic.bundle.min.js"></script>
    <script type="text/javascript">
    angular.module('ionicApp', ['ionic'])

    .controller('SlideController', function($scope) {
      
      $scope.myActiveSlide = 0;
      
    });
    
    
    </script>
    <style type="text/css">
    .slider {
      height: 24%;
    }
   .slider-slide {
      color: #000; 
      text-align: center; 
      font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif; font-weight: 300; }
    .a {
      background-image: url(./style/img/001.jpg);
      background-size: 100% 100% ;
    }

    .b {
      background-image: url(./style/img/002.jpg);
      background-size: 100% 100% ;
    }

    .c {
      background-image: url(./style/img/003.jpg);
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
 <div class="bar bar-header bar-positive item-input-inset ">
            <a class=" button button-clear icon ion-location"></a>邯郸&nbsp;
                <label class="item-input-wrapper ">
                    <i class="icon ion-ios-search  placeholder-icon"></i>
                    <input type="search" placeholder="最热/类型/关键字">
                </label>
                <a class="button button-clear icon ion-navicon"></a>
        
         
    </div>
    
<!--内容-->
 <ion-view title="Home" hide-nav-bar="true">
  <ion-scroll  direction="y" scrollbar-y="false" style="width: 100%; height: 100%">
<div>
   
    <div>
    <table width="100%" border="1" cellpadding="1" cellspacing="1" style="margin-top:50px;">
    <tr>
       <td >
            <div style="margin:10px auto;width:40px;height:40px;border-radius:40px;overflow:hidden;">
                <img src="./style/img/01.png" style="margin:0;width:100%;height:100%;">
            </div>
            <p style="font-size:11px; text-align:center" >精选课程</p>
       </td>
       <td >
            <div style="margin:10px auto;width:40px;height:40px;border-radius:40px;overflow:hidden;">
                <img src="./style/img/02.png" style="margin:0;width:100%;height:100%;">
            </div>
            <p style="font-size:11px; text-align:center">精品系列课程</p>
       </td>
      <td >
            <div style="margin:10px auto;width:40px;height:40px;border-radius:40px;overflow:hidden;">
                <img src="./style/img/03.png" style="margin:0;width:100%;height:100%;">
            </div>
            <p style="font-size:11px; text-align:center">热门推荐</p>
      </td>
      <td>
            <div style="margin:10px auto;width:40px;height:40px;border-radius:40px;overflow:hidden;">
                <img src="./style/img/04.png" style="margin:0;width:100%;height:100%;">
            </div>
            <p style="font-size:11px; text-align:center">更多</p>
      </td>
      </tr>
     
     
    </table>   
      
       <div ng-app="ionicApp" animation="slide-left-right-ios7" ng-controller="SlideController">

  <ion-slide-box active-slide="myActiveSlide"  does-continue="true" slide-interval='4000' slide-page="true">
    <ion-slide>
      <div class="box a"><h3></h3></div>
    </ion-slide>
    <ion-slide>
      <div class="box b"><h3></h3></div>
    </ion-slide>
    <ion-slide>
      <div class="box c"><h3></h3></div>
    </ion-slide>
    
  </ion-slide-box>
    </div>

    <p></p>

      <div>
         <p style="background-color:#99BBFF  ">精选课程</p>
         <ul class="list">
            <li > 
                <p>只要让你开心就好</p>
                 <a class="item item-thumbnail-left">
                   <img src="./style/img/3.jpg"/>
                 </a>
            </li>
            <li > 
                <p>只要让你开心就好</p>
                 <a class="item item-thumbnail-left">
                   <img src="./style/img/3.jpg"/>
                 </a>
            </li><li > 
                <p>只要让你开心就好</p>
                 <a class="item item-thumbnail-left">
                   <img src="./style/img/3.jpg"/>
                 </a>
            </li><li > 
                <p>只要让你开心就好</p>
                 <a class="item item-thumbnail-left">
                   <img src="./style/img/3.jpg"/>
                 </a>
            </li>
         </ul>
      </div>

      <div>
         <p style="background-color:#99BBFF  ">职业路径</p>
         <ul class="list">
            <li > 
                <p>只要让你开心就好</p>
                 <a class="item item-thumbnail-left">
                   <img src="./style/img/3.jpg"/>
                 </a>
            </li>
            <li > 
                <p>只要让你开心就好</p>
                 <a class="item item-thumbnail-left">
                   <img src="./style/img/3.jpg"/>
                 </a>
            </li><li > 
                <p>只要让你开心就好</p>
                 <a class="item item-thumbnail-left">
                   <img src="./style/img/3.jpg"/>
                 </a>
            </li><li > 
                <p>只要让你开心就好</p>
                 <a class="item item-thumbnail-left">
                   <img src="./style/img/3.jpg"/>
                 </a>
            </li>
         </ul>
      </div>
      
      <div>
         <p style="background-color:#99BBFF  ">精品系列课程</p>
         <ul class="list">
            <li > 
                <p>只要让你开心就好</p>
                 <a class="item item-thumbnail-left">
                   <img src="./style/img/3.jpg"/>
                 </a>
            </li>
            <li > 
                <p>只要让你开心就好</p>
                 <a class="item item-thumbnail-left">
                   <img src="./style/img/3.jpg"/>
                 </a>
            </li><li > 
                <p>只要让你开心就好</p>
                 <a class="item item-thumbnail-left">
                   <img src="./style/img/3.jpg"/>
                 </a>
            </li><li > 
                <p>只要让你开心就好</p>
                 <a class="item item-thumbnail-left">
                   <img src="./style/img/3.jpg"/>
                 </a>
            </li>
         </ul>
      </div>
      
      <div>
         <p style="background-color:#99BBFF  ">热门推荐</p>
         <ul class="list">
            <li > 
                <p>只要让你开心就好</p>
                 <a class="item item-thumbnail-left">
                   <img src="./style/img/3.jpg"/>
                 </a>
            </li>
            <li > 
                <p>只要让你开心就好</p>
                 <a class="item item-thumbnail-left">
                   <img src="./style/img/3.jpg"/>
                 </a>
            </li><li > 
                <p>只要让你开心就好</p>
                 <a class="item item-thumbnail-left">
                   <img src="./style/img/3.jpg"/>
                 </a>
            </li><li > 
                <p>只要让你开心就好</p>
                 <a class="item item-thumbnail-left">
                   <img src="./style/img/3.jpg"/>
                 </a>
            </li>
         </ul>
      </div>
      
    </div>
    </div>
    </div>
      
    </div>

    </div>
     </ion-scroll>
    </ion-view>
    @include('master')
  </body>
</html>