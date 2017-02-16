<html ng-app="ionicApp">
  <head>
        <meta charset="UTF-8">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, width=device-width">
      {{--<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.5" charset="utf-8"/>--}}
      <title>详情页</title>
    <link href="{{asset('style/css/ionic.min.css')}}" rel="stylesheet">
      <link href="{{asset('style/css/main.css')}}" rel="stylesheet" type="text/css" />
      <link href="{{asset('style/css/commons.css')}}" rel="stylesheet" type="text/css" />
      <link rel="stylesheet" type="text/css" href="{{asset('style/css/base2013.css')}}" charset="gbk"/>
      <link rel="stylesheet" type="text/css" href="{{asset('style/css/2013/sale/sale.css')}}" charset="gbk"/>
    <script type="text/javascript">
    angular.module('ionicApp', ['ionic'])
    .controller('SlideController', function($scope) {
      $scope.myActiveSlide = 0;
    })
    </script>
  </head>
<body style="height: 500px;">
<!--顶部-->
    {{--<div class="bar bar-header bar-positive  ">--}}
		    {{--<h1 class="title">全部课程</h1>--}}
		    {{--<a class="button button-clear icon ion-android-cart" href="{{URL('shopcart')}}"></a>--}}
	{{--</div>--}}

<div class="top_tit">
    <span class="top_tit_left"></span>
    <span class="top_tit_center">课程列表</span>
</div>
<!--内容-->
<div class="new-ct">
    <div class="new-search new-goods-lst">
        <ul class="new-mu_l2w">
            <li class="new-mu_l2">
                <a href="../product/1.html" class="new-mu_l2a">
                    <span class="new-mu_tmb"><img imgsrc="http://img13.360buyimg.com/n4/g15/M07/05/1D/rBEhWlIUf7oIAAAAAALnZATd9X4AACSsAGXLa8AAud8547.jpg" src="../images/touch2013/no_100_100.png" width="100" height="100"  alt=""/></span>
             <span class="new-mu_l2cw">
                  <strong class="new-mu_l2h">杉杉男装FIRS 2014春季新款时尚格纹长袖衬衫 商务高档男士衬衣 TCTB0365蓝白灰绿格子 40</strong>
                    <span class="new-mu_l2h new-mu_l2h-v1"><span class="new-txt-rd2"></span></span>
                 <span class="new-mu_l2c new-p-re"><strong class="new-txt-rd2">&yen;159.00</strong>
						<span class="new-txt-price" style="color:red">
    												</span>
				 </span>
             </span>
                </a>
            </li>
            <li class="new-mu_l2">
                <a class="new-mu_l2a">
                    <span class="new-mu_tmb"><img imgsrc="http://img10.360buyimg.com/n4/g15/M04/09/13/rBEhWVIu6l8IAAAAAAQfYNF16GYAADAkgJhMXUABB94158.jpg" src="../images/touch2013/no_100_100.png" width="100" height="100"  alt=""/></span>
             <span class="new-mu_l2cw">
                  <strong class="new-mu_l2h">2013秋装新款  GXG 男士休闲时尚T恤#23234477 黑色 M</strong>
                    <span class="new-mu_l2h new-mu_l2h-v1"><span class="new-txt-rd2"></span></span>
                 <span class="new-mu_l2c new-p-re"><strong class="new-txt-rd2">&yen;129.00</strong>
						<span class="new-txt-price" style="color:red">
    												</span>
				 </span>
             </span>
                </a>
            </li>
            <li class="new-mu_l2">
                <a class="new-mu_l2a">
                    <span class="new-mu_tmb"><img imgsrc="http://img30.360buyimg.com/n4/g15/M09/00/17/rBEhWFHs5PMIAAAAAAHh6NTxeqIAABRugCuyVgAAeIA199.jpg" src="../images/touch2013/no_100_100.png" width="100" height="100"  alt=""/></span>
             <span class="new-mu_l2cw">
                  <strong class="new-mu_l2h">TOMMY HILFIGER 汤米·希尔费格 男士经典正装休闲立体缝线黑色真皮针扣腰带皮带 08-4299-14 36</strong>
                    <span class="new-mu_l2h new-mu_l2h-v1"><span class="new-txt-rd2"></span></span>
                 <span class="new-mu_l2c new-p-re"><strong class="new-txt-rd2">&yen;399.00</strong>
						<span class="new-txt-price" style="color:red">
    												</span>
				 </span>
             </span>
                </a>
            </li>
            <li class="new-mu_l2">
                <a href="../product/1083633743.html@resourceType=index_floor&resourceValue=t101&sid=e0d0f025d6d3e8e8d7be5428c43ef911" class="new-mu_l2a">
                    <span class="new-mu_tmb"><img imgsrc="http://img13.360buyimg.com/n4/g14/M07/12/1D/rBEhVlMNXrYIAAAAAAHSWqLRzaEAAJLywApN9kAAdJy732.jpg" src="../images/touch2013/no_100_100.png" width="100" height="100"  alt=""/></span>
             <span class="new-mu_l2cw">
                  <strong class="new-mu_l2h">【抢先体验】九牧王2014春装新品 男士直筒休闲裤 JB142011T 33码2.58尺86厘米</strong>
                    <span class="new-mu_l2h new-mu_l2h-v1"><span class="new-txt-rd2"></span></span>
                 <span class="new-mu_l2c new-p-re"><strong class="new-txt-rd2">&yen;279.00</strong>
						<span class="new-txt-price" style="color:red">
    												</span>
				 </span>
             </span>
                </a>
            </li>
            <li class="new-mu_l2">
                <a href="../product/1077373310.html@resourceType=index_floor&resourceValue=t101&sid=e0d0f025d6d3e8e8d7be5428c43ef911" class="new-mu_l2a">
                    <span class="new-mu_tmb"><img imgsrc="http://img10.360buyimg.com/n4/g15/M00/04/07/rBEhWlL0a7wIAAAAAAXb7YAq3OgAAISVgMZ3GYABdwF439.jpg" src="../images/touch2013/no_100_100.png" width="100" height="100"  alt=""/></span>
             <span class="new-mu_l2cw">
                  <strong class="new-mu_l2h">【支持货到付款】比菲力（BEVERRY）新款男士顶级新生代丝光生态镶边亚麻休闲裤0701 浅灰 29(2尺2腰围)</strong>
                    <span class="new-mu_l2h new-mu_l2h-v1"><span class="new-txt-rd2"></span></span>
                 <span class="new-mu_l2c new-p-re"><strong class="new-txt-rd2">&yen;128.00</strong>
						<span class="new-txt-price" style="color:red">
    												</span>
				 </span>
             </span>
                </a>
            </li>
            <li class="new-mu_l2">
                <a href="../product/863291.html@resourceType=index_floor&resourceValue=t101&sid=e0d0f025d6d3e8e8d7be5428c43ef911" class="new-mu_l2a">
                    <span class="new-mu_tmb"><img imgsrc="http://img11.360buyimg.com/n4/g10/M00/18/10/rBEQWFF2USwIAAAAAAEXpEgs80UAAEySAPkJFoAARe8612.jpg" src="../images/touch2013/no_100_100.png" width="100" height="100"  alt=""/></span>
             <span class="new-mu_l2cw">
                  <strong class="new-mu_l2h">COACH 蔻驰 女款粉色绸布大号多功能子母包 F77316 SV/HP ry</strong>
                    <span class="new-mu_l2h new-mu_l2h-v1"><span class="new-txt-rd2"></span></span>
                 <span class="new-mu_l2c new-p-re"><strong class="new-txt-rd2">&yen;880.00</strong>
						<span class="new-txt-price" style="color:red">
    												</span>
				 </span>
             </span>
                </a>
            </li>
            <li class="new-mu_l2">
                <a href="../product/1074452552.html@resourceType=index_floor&resourceValue=t101&sid=e0d0f025d6d3e8e8d7be5428c43ef911" class="new-mu_l2a">
                    <span class="new-mu_tmb"><img imgsrc="http://img12.360buyimg.com/n4/g13/M05/1B/04/rBEhVFMdIfEIAAAAAAH_f9NIQRoAAJxHQBedhcAAf-X546.jpg" src="../images/touch2013/no_100_100.png" width="100" height="100"  alt=""/></span>
             <span class="new-mu_l2cw">
                  <strong class="new-mu_l2h">苏醒的乐园 2014春装新款新品 韩版女装修身上装衬衫衬衣CS552 黑白 M</strong>
                    <span class="new-mu_l2h new-mu_l2h-v1"><span class="new-txt-rd2"></span></span>
                 <span class="new-mu_l2c new-p-re"><strong class="new-txt-rd2">&yen;109.00</strong>
						<span class="new-txt-price" style="color:red">
    												</span>
				 </span>
             </span>
                </a>
            </li>
            <li class="new-mu_l2">
                <a href="../product/1090541159.html@resourceType=index_floor&resourceValue=t101&sid=e0d0f025d6d3e8e8d7be5428c43ef911" class="new-mu_l2a">
                    <span class="new-mu_tmb"><img imgsrc="http://img12.360buyimg.com/n4/g15/M02/0A/06/rBEhWlMWieUIAAAAAALA3zUv7uMAAJctQGyvdIAAsD3952.jpg" src="../images/touch2013/no_100_100.png" width="100" height="100"  alt=""/></span>
             <span class="new-mu_l2cw">
                  <strong class="new-mu_l2h">季候风2014新品春装 甜美公主假两件拼接太阳花图案无袖连衣裙8160LD155 花绿MN6 XL/170</strong>
                    <span class="new-mu_l2h new-mu_l2h-v1"><span class="new-txt-rd2"></span></span>
                 <span class="new-mu_l2c new-p-re"><strong class="new-txt-rd2">&yen;299.00</strong>
						<span class="new-txt-price" style="color:red">
    												</span>
				 </span>
             </span>
                </a>
            </li>
            <li class="new-mu_l2">
                <a href="../product/1076603003.html@resourceType=index_floor&resourceValue=t101&sid=e0d0f025d6d3e8e8d7be5428c43ef911" class="new-mu_l2a">
                    <span class="new-mu_tmb"><img imgsrc="http://img13.360buyimg.com/n4/g15/M05/03/0A/rBEhWVLfVM0IAAAAAAOrWc0eV7wAAIG3QEGPnMAA6tx545.jpg" src="../images/touch2013/no_100_100.png" width="100" height="100"  alt=""/></span>
             <span class="new-mu_l2cw">
                  <strong class="new-mu_l2h">探路者TOREAD户外徒步鞋TFAB81603男式 户外鞋登山鞋超强耐磨防滑减震 深灰色 39</strong>
                    <span class="new-mu_l2h new-mu_l2h-v1"><span class="new-txt-rd2"></span></span>
                 <span class="new-mu_l2c new-p-re"><strong class="new-txt-rd2">&yen;259.00</strong>
						<span class="new-txt-price" style="color:red">
    												</span>
				 </span>
             </span>
                </a>
            </li>
            <li class="new-mu_l2">
                <a href="../product/1036215046.html@resourceType=index_floor&resourceValue=t101&sid=e0d0f025d6d3e8e8d7be5428c43ef911" class="new-mu_l2a">
                    <span class="new-mu_tmb"><img imgsrc="http://img30.360buyimg.com/n4/g13/M03/14/01/rBEhVFJxxlcIAAAAAAGA0JzvcVgAAEzwQC03JwAAYDo411.jpg" src="../images/touch2013/no_100_100.png" width="100" height="100"  alt=""/></span>
             <span class="new-mu_l2cw">
                  <strong class="new-mu_l2h">[韩寒推荐款]骆驼（CAMEL）户外 挡风防水保暖防寒冲锋衣 男2F16030 军绿色 XL</strong>
                    <span class="new-mu_l2h new-mu_l2h-v1"><span class="new-txt-rd2"></span></span>
                 <span class="new-mu_l2c new-p-re"><strong class="new-txt-rd2">&yen;528.00</strong>
						<span class="new-txt-price" style="color:red">
    												</span>
				 </span>
             </span>
                </a>
            </li>
            <li class="new-mu_l2">
                <a href="../product/1076654239.html@resourceType=index_floor&resourceValue=t101&sid=e0d0f025d6d3e8e8d7be5428c43ef911" class="new-mu_l2a">
                    <span class="new-mu_tmb"><img imgsrc="http://img12.360buyimg.com/n4/g13/M01/19/0C/rBEhU1MVT60IAAAAAATziTMWo5AAAJa7wCdoaYABPOh437.jpg" src="../images/touch2013/no_100_100.png" width="100" height="100"  alt=""/></span>
             <span class="new-mu_l2cw">
                  <strong class="new-mu_l2h">【买一送一】康尔KingCamp皮肤衣皮肤风衣 轻薄户外防晒衣 情侣KWA118 升级女款玫红自收纳 M</strong>
                    <span class="new-mu_l2h new-mu_l2h-v1"><span class="new-txt-rd2"></span></span>
                 <span class="new-mu_l2c new-p-re"><strong class="new-txt-rd2">&yen;209.00</strong>
						<span class="new-txt-price" style="color:red">
    												</span>
				 </span>
             </span>
                </a>
            </li>
            <li class="new-mu_l2">
                <a href="../product/1036204.html@resourceType=index_floor&resourceValue=t101&sid=e0d0f025d6d3e8e8d7be5428c43ef911" class="new-mu_l2a">
                    <span class="new-mu_tmb"><img imgsrc="http://img14.360buyimg.com/n4/g13/M00/10/0D/rBEhVFLLdy4IAAAAAAKZ9xkK25QAAHq9AJN2qUAApoP211.jpg" src="../images/touch2013/no_100_100.png" width="100" height="100"  alt=""/></span>
             <span class="new-mu_l2cw">
                  <strong class="new-mu_l2h">GUESS 盖尔斯 女士花朵水钻浅粉百搭包时尚手提单肩包 VG345619</strong>
                    <span class="new-mu_l2h new-mu_l2h-v1"><span class="new-txt-rd2"></span></span>
                 <span class="new-mu_l2c new-p-re"><strong class="new-txt-rd2">&yen;399.00</strong>
						<span class="new-txt-price" style="color:red">
    												</span>
				 </span>
             </span>
                </a>
            </li>
            <li class="new-mu_l2">
                <a href="../product/1017526852.html@resourceType=index_floor&resourceValue=t101&sid=e0d0f025d6d3e8e8d7be5428c43ef911" class="new-mu_l2a">
                    <span class="new-mu_tmb"><img imgsrc="http://img12.360buyimg.com/n4/g14/M05/15/1B/rBEhVVMZm2QIAAAAAAD_wucCbMsAAJw1QDZJqAAAP_a005.jpg" src="../images/touch2013/no_100_100.png" width="100" height="100"  alt=""/></span>
             <span class="new-mu_l2cw">
                  <strong class="new-mu_l2h">播 森林类2014春新款修身长袖印花连衣裙BDG1LB0293 雾灰色G04 M</strong>
                    <span class="new-mu_l2h new-mu_l2h-v1"><span class="new-txt-rd2"></span></span>
                 <span class="new-mu_l2c new-p-re"><strong class="new-txt-rd2">&yen;315.00</strong>
						<span class="new-txt-price" style="color:red">
    												</span>
				 </span>
             </span>
                </a>
            </li>
            <li class="new-mu_l2">
                <a href="../product/1063178731.html@resourceType=index_floor&resourceValue=t101&sid=e0d0f025d6d3e8e8d7be5428c43ef911" class="new-mu_l2a">
                    <span class="new-mu_tmb"><img imgsrc="http://img11.360buyimg.com/n4/g14/M01/05/0C/rBEhVlKhYKEIAAAAAAQ9DjgVRpoAAGivQIVClAABD0m825.jpg" src="../images/touch2013/no_100_100.png" width="100" height="100"  alt=""/></span>
             <span class="new-mu_l2cw">
                  <strong class="new-mu_l2h">春装热卖 心族2014春装新款甜美气质镶钻娃娃领长袖上衣修身毛衣针织衫套头女装 黄色 L</strong>
                    <span class="new-mu_l2h new-mu_l2h-v1"><span class="new-txt-rd2"></span></span>
                 <span class="new-mu_l2c new-p-re"><strong class="new-txt-rd2">&yen;109.00</strong>
						<span class="new-txt-price" style="color:red">
    												</span>
				 </span>
             </span>
                </a>
            </li>
            <li class="new-mu_l2">
                <a href="../product/1076135273.html@resourceType=index_floor&resourceValue=t101&sid=e0d0f025d6d3e8e8d7be5428c43ef911" class="new-mu_l2a">
                    <span class="new-mu_tmb"><img imgsrc="http://img13.360buyimg.com/n4/g14/M09/0D/0C/rBEhV1LYlyoIAAAAAADdKPvtpb0AAIG_gHw3EIAAN1A064.jpg" src="../images/touch2013/no_100_100.png" width="100" height="100"  alt=""/></span>
             <span class="new-mu_l2cw">
                  <strong class="new-mu_l2h">保罗盖帝2014新款时尚潮流商务正装软面皮正品休闲英伦皮鞋 PC090-1 黑色 标准40码(250)</strong>
                    <span class="new-mu_l2h new-mu_l2h-v1"><span class="new-txt-rd2"></span></span>
                 <span class="new-mu_l2c new-p-re"><strong class="new-txt-rd2">&yen;399.00</strong>
						<span class="new-txt-price" style="color:red">
    												</span>
				 </span>
             </span>
                </a>
            </li>
            <li class="new-mu_l2">
                <a href="../product/1071682.html@resourceType=index_floor&resourceValue=t101&sid=e0d0f025d6d3e8e8d7be5428c43ef911" class="new-mu_l2a">
                    <span class="new-mu_tmb"><img imgsrc="http://img12.360buyimg.com/n4/g14/M00/14/0A/rBEhV1MT94gIAAAAAADksCtG37IAAJddgGsX2kAAOTI773.jpg" src="../images/touch2013/no_100_100.png" width="100" height="100"  alt=""/></span>
             <span class="new-mu_l2cw">
                  <strong class="new-mu_l2h">雷朋（RAY-BAN） 意大利进口RAYBAN 雷朋 中性款玳瑁镜框茶色镜片太阳镜 2132-710 52mm</strong>
                    <span class="new-mu_l2h new-mu_l2h-v1"><span class="new-txt-rd2"></span></span>
                 <span class="new-mu_l2c new-p-re"><strong class="new-txt-rd2">&yen;459.00</strong>
						<span class="new-txt-price" style="color:red">
    												</span>
				 </span>
             </span>
                </a>
            </li>
            <li class="new-mu_l2">
                <a href="../product/1029261962.html@resourceType=index_floor&resourceValue=t101&sid=e0d0f025d6d3e8e8d7be5428c43ef911" class="new-mu_l2a">
                    <span class="new-mu_tmb"><img imgsrc="http://img12.360buyimg.com/n4/g15/M0A/02/00/rBEhWlH3Ua8IAAAAAAMYsMiZYpIAABhnQHsQYsAAxjI944.jpg" src="../images/touch2013/no_100_100.png" width="100" height="100"  alt=""/></span>
             <span class="new-mu_l2cw">
                  <strong class="new-mu_l2h">红蜻蜓 正品漆皮经典正装男鞋男单鞋WTA34691/92 黑色 43</strong>
                    <span class="new-mu_l2h new-mu_l2h-v1"><span class="new-txt-rd2"></span></span>
                 <span class="new-mu_l2c new-p-re"><strong class="new-txt-rd2">&yen;239.00</strong>
						<span class="new-txt-price" style="color:red">
    												</span>
				 </span>
             </span>
                </a>
            </li>
            <li class="new-mu_l2">
                <a href="../product/1096431671.html@resourceType=index_floor&resourceValue=t101&sid=e0d0f025d6d3e8e8d7be5428c43ef911" class="new-mu_l2a">
                    <span class="new-mu_tmb"><img imgsrc="http://img11.360buyimg.com/n4/g14/M00/17/18/rBEhV1MhWqMIAAAAAADkiHGSH5gAAKITgMMAu8AAOSg595.jpg" src="../images/touch2013/no_100_100.png" width="100" height="100"  alt=""/></span>
             <span class="new-mu_l2cw">
                  <strong class="new-mu_l2h">【2014春夏新品】 THE NORTH FACE(北面)  男款连帽冲锋衣  A9RY  J4N 蓝色 L</strong>
                    <span class="new-mu_l2h new-mu_l2h-v1"><span class="new-txt-rd2"></span></span>
                 <span class="new-mu_l2c new-p-re"><strong class="new-txt-rd2">&yen;933.00</strong>
						<span class="new-txt-price" style="color:red">
    												</span>
				 </span>
             </span>
                </a>
            </li>
            <li class="new-mu_l2">
                <a href="../product/1097019614.html@resourceType=index_floor&resourceValue=t101&sid=e0d0f025d6d3e8e8d7be5428c43ef911" class="new-mu_l2a">
                    <span class="new-mu_tmb"><img imgsrc="http://img14.360buyimg.com/n4/g13/M00/1C/1A/rBEhU1MimdIIAAAAAALmKKdvfKMAAKF4APAL9MAAuZA370.jpg" src="../images/touch2013/no_100_100.png" width="100" height="100"  alt=""/></span>
             <span class="new-mu_l2cw">
                  <strong class="new-mu_l2h">【2014春夏新品】三夫户外THE NORTH FACE(北面) 女款冲锋衣-A4R0 FN4白色 S</strong>
                    <span class="new-mu_l2h new-mu_l2h-v1"><span class="new-txt-rd2"></span></span>
                 <span class="new-mu_l2c new-p-re"><strong class="new-txt-rd2">&yen;1103.00</strong>
						<span class="new-txt-price" style="color:red">
    												</span>
				 </span>
             </span>
                </a>
            </li>
            <li class="new-mu_l2">
                <a href="../product/1075263109.html@resourceType=index_floor&resourceValue=t101&sid=e0d0f025d6d3e8e8d7be5428c43ef911" class="new-mu_l2a">
                    <span class="new-mu_tmb"><img imgsrc="http://img12.360buyimg.com/n4/g15/M0A/05/01/rBEhWlINwNkIAAAAAARtnu41f8sAACHfACYArcABG22342.jpg" src="../images/touch2013/no_100_100.png" width="100" height="100"  alt=""/></span>
             <span class="new-mu_l2cw">
                  <strong class="new-mu_l2h">李宁Lining旗舰店经典休闲鞋防滑透气简约运动生活低帮男鞋ALCH155-1/-2/-3 帝国蓝/墨黑/白 39.5</strong>
                    <span class="new-mu_l2h new-mu_l2h-v1"><span class="new-txt-rd2"></span></span>
                 <span class="new-mu_l2c new-p-re"><strong class="new-txt-rd2">&yen;149.00</strong>
						<span class="new-txt-price" style="color:red">
    												</span>
				 </span>
             </span>
                </a>
            </li>
        </ul>

    </div>
    <div class="new-paging">
        <div class="new-tbl-type">
            <div class="new-tbl-cell">
                <span class="new-a-prve"><span>上一页</span></span>
            </div>
            <div class="new-tbl-cell new-p-re">
                <div class="new-a-page">
                    <span class="new-open">1/5</span>
                </div>
                <select class="new-select" onChange="window.location.href=this.value">
                    <option value="hotSaleWare.action@type=101&page=1&module=1&resourceType=index_floor&resourceValue=t101&sid=e0d0f025d6d3e8e8d7be5428c43ef911" selected>第1页</option>
                    <option value="hotSaleWare.action@type=101&page=2&module=1&resourceType=index_floor&resourceValue=t101&sid=e0d0f025d6d3e8e8d7be5428c43ef911" >第2页</option>
                    <option value="hotSaleWare.action@type=101&page=3&module=1&resourceType=index_floor&resourceValue=t101&sid=e0d0f025d6d3e8e8d7be5428c43ef911" >第3页</option>
                    <option value="hotSaleWare.action@type=101&page=4&module=1&resourceType=index_floor&resourceValue=t101&sid=e0d0f025d6d3e8e8d7be5428c43ef911" >第4页</option>
                    <option value="hotSaleWare.action@type=101&page=5&module=1&resourceType=index_floor&resourceValue=t101&sid=e0d0f025d6d3e8e8d7be5428c43ef911" >第5页</option>
                </select>
            </div>
            <div class="new-tbl-cell">
                <a class="new-a-next" href="hotSaleWare.action@type=101&page=2&module=1&resourceType=index_floor&resourceValue=t101&sid=e0d0f025d6d3e8e8d7be5428c43ef911">
                    <span>下一页</span>
                </a>
            </div>
        </div>
    </div>
</div>
	<!-- 底部-->
    @include('master')
  </body>
  {{--<script src="{{asset('jquery-2.1.1.min.js')}}"></script>--}}
  {{--<script src="{{asset('style/js/ionic.bundle.min.js')}}"></script>--}}
  {{--<script src="{{asset('style/js/common.js')}}"></script>--}}
  <script src="{{asset('jquery-2.1.1.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('style/js/common.js')}}" type="text/javascript"></script>
</html>