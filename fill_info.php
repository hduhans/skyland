<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>确认订单信息</title>
<link href="css/style.css" type="text/css" rel="stylesheet" />
<style>
#mtop{width:100%;float:left;text-align:center;margin-top:80px;}
 #mtop ul{float:left;margin-left:49px;height:25px;}
 #mtop  .type1{width:180px;height:19px;float:left;background:url(images/current_red.jpg) #CC0099;text-align:center;padding-top:6px;color:white;font-size:14px;font-weight:bold;}
 #mtop  .type2{width:180px;height:19px;float:left;background:url(images/next_bg.jpg) #CC0099;padding-top:6px;text-align:center;font-size:14px;font-weight:bold;}

#mmid{width:900px;float:left;margin-top:30px;margin-left:49px;} 
 #mmid ul{border-bottom:1px solid #d8ebfa;}	
 #mmid ul li{float:left;height:65px; background:#f1f8ff;text-align:center;}
 #mmid .w2{width:43%;height:27px;padding-top:11px;font-weight:600;border-bottom:1px solid #d8ebfa;}
 #mmid .w3{width:8%;height:27px;padding-top:11px;font-weight:600;border-bottom:1px solid #d8ebfa;}
 #mmid .w4{width:8%;height:27px;padding-top:11px;font-weight:600;border-bottom:1px solid #d8ebfa;}   /*height:27+11=35px;*/
 #mmid .w5{width:8%;height:27px;padding-top:11px;font-weight:600;border-bottom:1px solid #d8ebfa;}
 #mmid .w6{width:8%;height:27px;padding-top:11px;font-weight:600;border-bottom:1px solid #d8ebfa;}
 #mmid .w7{width:8%;height:27px;padding-top:11px;font-weight:600;border-bottom:1px solid #d8ebfa;}
 #mmid .w8{width:17%;height:27px;padding-top:11px;font-weight:600;border-bottom:1px solid #d8ebfa;}
 
 #mmid .c2{width:43%;border-bottom:1px solid #d8ebfa;text-align:left;line-height:20px;}
 #mmid .c3{width:8%;border-bottom:1px solid #d8ebfa;padding-top:26px;height:39px;font-size:15px;font-weight:800;}
 #mmid .c4{width:8%;border-bottom:1px solid #d8ebfa;padding-top:26px;height:39px;font-weight:550;}       /*height:65px*/
 #mmid .c5{width:8%;border-bottom:1px solid #d8ebfa;padding-top:23px;height:42px;}
 #mmid .c6{width:8%;border-bottom:1px solid #d8ebfa;padding-top:26px;height:39px;}
 #mmid .c7{width:8%;border-bottom:1px solid #d8ebfa;padding-top:26px;height:39px;color:red;font-weight:bold;}
 #mmid .c8{width:17%;border-bottom:1px solid #e2f2ff;padding-top:26px;height:39px;}
 #mmid img{width:53px;height:53px;float:left;margin-top:6px;margin-left:12px;}
 #mmid .imgtext{margin-top:10px;margin-left:5px;float:left;width:305px;line-height:18px;}
.chebox{width:15px;height:15px;}

.mdiv{width:900px;margin-left:49px;margin-top:30px;float:left;text-align:left;}
 .mdiv span{font:14px bolder;}
 .mdiv ul li{width:100%;float:left;height:28px;}
 .mdiv ul li .l{width:8%;float:left;text-align:right;}
 .mdiv ul li .r{width:91%;float:left;text-align:left;padding-left:1%;}
 
 #mbot{width:900px;margin-left:49px;float:left;margin-top:21px;font-weight:700;}
 #mbot #l{width:380px;float:left;text-align:left;padding-left:20px;}
 #mbot #r{width:490px;float:left;text-align:right;padding-right:10px;font-weight:700;}	
  #mbot #r span{font-size:20px;color:red;font-weight:bold;}
#mbot2{width:890px;margin-left:49px;margin-top:26px;float:left;} 
 #mbot2 #l{width:700px;float:left;text-align:right;height:19px;padding-top:8px;}
 #mbot2 #r{width:190px;float:left;text-align:right;}
</style>
</head>

<body>
<div id="container_main">
   <div id="top">
	  <div id="welcome">
	   <div id="login">您好，欢迎来到天地汇商城！您可以 <a href="#">登录</a> 或 <a href="#">免费注册</a></div>
	   <div id="control">
		 <div><a href="#">首页</a></div>
		 <div><img src="images/shu.png" /></div><div><a href="#">我的天地</a></div>
		 <div><img src="images/shu.png" /></div><div><a href="#">购物车</a></div>
		 <div><img src="images/shu.png" /></div><div><a href="#">收藏夹</a></div>
	   </div>
	  </div>
	 
	  <div id="search">
		<div id="search_left"><img src="images/search_left.png" /></div>
		<div id="search_mid">
		  <input onfocus="this.value=''" value="查找我想要的宝贝？" id="input_search" type="text" maxlength="37" />
		</div>
		<div id="search_right"><img src="images/search_right.png" /></div>
	  </div><!--search -->
	</div><!--top -->

	 <div id="main">
		 <div id="mtop">
		   <ul>
			 <li class="type2" style="background:URL(images/current_left.jpg);">1. 查看购物车</li>
			 <li class="type1">2. 确认订单信息&nbsp;&nbsp;&nbsp;</li>
			 <li class="type2">3. 付款到天地汇&nbsp;&nbsp;&nbsp;</li>
			 <li class="type2">4. 确认收货&nbsp;&nbsp;&nbsp;</li>
			 <li class="type2" style="background:URL(images/next_bg_r.jpg)">5. 交易评价&nbsp;&nbsp;&nbsp;</li>
		   </ul>
		  </div><!--mtop -->
	 	 <div class="mdiv">
		    &nbsp;&nbsp;<span><b>确认收货地址</b></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#">管理我的收货地址 </a>
			<ul>
				<li style="margin-top:20px;">
					<div class="l"><input type="radio" style="width:15px;height:15px;color:#00CC66;" name="radio1" /></div>
					<div class="r">浙江省 宁波市 宁海县 浙江省宁海县知恩中学 (收货人：王冬)</div>
			   </li>
			   <li>
					<div class="l"><input type="radio" style="width:15px;height:15px;color:#00CC66;" name="radio1" /></div>
					<div class="r">浙江省 杭州市 下沙高教园区杭州电子科技大学 1号教学楼(收货人：XXX)</div>
			   </li>
			   <li>
					<div class="l"><input type="radio" style="width:15px;height:15px;color:#00CC66;" name="radio1" /></div>
					<div class="r">使用其他地址</div>
			   </li>
			</ul>
		 </div>
		 <div class="mdiv">
		    &nbsp;&nbsp;<span><b>确认订单信息</b></span>
	 	</div>
		 <div id="mmid">
	      <ul style="border-top:2px solid #aac9ff;">  <!--标题-->
			 <li class="w2">宝贝名称</li>
			 <li class="w3">赠送积分</li>
			 <li class="w4">单价(元)</li>
			 <li class="w5">数量</li>
			 <li class="w6">优惠</li>
			 <li class="w7">小计(元)</li>
			 <li class="w8">运输方式</li>
		  </ul>
		  <ul>    <!--商品-->
			 <li class="c2">
			 	<img src="images/img_littie.jpg" />
				 <div class="imgtext">
				    <a href="#">捷易通自动充值全功能代理版 全国手机话费充值卡QQ业务游戏点卡</a>
				 </div>
		     </li>
			 <li class="c3">0</li>
			 <li class="c4">300.00</li>
			 <li class="c5">1</li>
		 	 <li class="c6">-</li>
			 <li class="c7">300.00</li>
			 <li class="c8"></li>
		  </ul>
		  <ul> 
			 <li class="c2">
			 	<img src="images/img_littie.jpg" />
				 <div class="imgtext">
				    <a href="#">捷易通自动充值全功能代理版 全国手机话费充值卡QQ业务游戏点卡</a>
				 </div>
		     </li>
			 <li class="c3">0</li>
			 <li class="c4">300.00</li>
			 <li class="c5">1</li>
		 	 <li class="c6">-</li>
			 <li class="c7">300.00</li>
			 <li class="c8">
			     <select name="select1">
				    <option>快递8元</option>
					<option>EMS26</option>
				 </select>
			 </li>
		  </ul>
		  <ul> 
			 <li class="c2">
			 	<img src="images/img_littie.jpg" />
				 <div class="imgtext">
				    <a href="#">捷易通自动充值全功能代理版 全国手机话费充值卡QQ业务游戏点卡</a>
				 </div>
		     </li>
			 <li class="c3">0</li>
			 <li class="c4">300.00</li>
			 <li class="c5">1</li>
		 	 <li class="c6">-</li>
			 <li class="c7">300.00</li>
			 <li class="c8"></li>
		  </ul>
	   </div><!--mmid -->
	   
	   <div id="mbot">
	   	  <div id="l">给卖家留言：<input type="text" style="border:1px solid #a1a8ae;width:300px;height:17px;" name="message" /></div>
	      <div id="r">商品总价(含运费)：<span>310.00</span>元</div>
	   </div>
	   <div id="mbot2">
		  <div id="l"><a href="shopping_car.html">返回购物车</a></div>
		  
		  <div id="r"><a href="#"><img src="images/buy.png" border="0" /></a></div>
	   </div>
	   
	 </div>
	
</div><!--container_main -->
<div class="clr"></div><div class="clr" style="margin-top:100px;"></div>
<!--bottom begin-->
<div id="bottom" class="pagewt">
<a href="#">关于我们</a> | 
<a href="#">广告服务</a> | 
<a href="#">人才招聘</a> | 
<a href="#">商品评价</a> | 
<a href="#">销售联盟</a> | 
<a href="#">友情链接</a> | 
<a href="#">联系我们</a>
</div><div class="clr"></div>

<div style="text-align:center;float:left;width:100%; text-align:center;">
北京市公安局海淀分局备案编号：2202081681 京ICP证:070359号
<br/>CopyRight&copy;2004-2010 <img src="images/skyland.png" align="absmiddle"> 版权所有
</div>
<!--bottom end--><div class="clr"></div><div class="clr"></div>
</body>
</html>
