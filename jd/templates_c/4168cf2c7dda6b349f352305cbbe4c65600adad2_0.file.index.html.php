<?php /* Smarty version 3.1.27, created on 2016-05-15 02:41:30
         compiled from "templates\index.html" */ ?>
<?php
/*%%SmartyHeaderCode:56955737e1da4dfd02_37172200%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4168cf2c7dda6b349f352305cbbe4c65600adad2' => 
    array (
      0 => 'templates\\index.html',
      1 => 1463280071,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '56955737e1da4dfd02_37172200',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5737e1da532bd2_50961766',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5737e1da532bd2_50961766')) {
function content_5737e1da532bd2_50961766 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '56955737e1da4dfd02_37172200';
?>
<!DOCTYPE html>
<html lang="zh-cn">
	<head>
		<meta http-equiv="Content-Type">
		<meta content="text/html; charset=utf-8">
		<meta charset="utf-8">
		<title>京东网厅</title>		
		<meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
		<meta name="format-detection" content="telephone=no">
		<meta name="format-detection" content="email=no">
		<link rel="stylesheet" type="text/css" href="css/reset.css" />
		<link rel="stylesheet" type="text/css" href="css/index.css" />
		<?php echo '<script'; ?>
 src="js/zepto.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="js/fx.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="https://res.wx.qq.com/open/js/jweixin-1.0.0.js "><?php echo '</script'; ?>
>
		<style type="text/css">
			.door_left{
				width:50%;
				position: absolute;
				left: 0;
				top: 0;
				height: 100%;
				z-index: 10;
			}
			.door_right{
				width:50%;
				position: absolute;
				right: 0;
				top: 0;
				height: 100%;
				z-index: 10;
			}
			.but{
				position: absolute;
				width:40px;
				height:40px;
				z-index: 10;
				
			}
			.xz{
				position: absolute;
			    width: 84px;
			    height: 84px;
			    left: 50%;
			    top: 50%;
			    margin-top: -42px;
			    margin-left: -42px;
			    z-index: 10;
			    -webkit-animation: circle 1s infinite linear;

			}
			.cover{
				position: absolute;
				
			   	width:100%;
			    height: 100%;
			    top: 0%;
			    left:0;
			    background: rgba(0,0,0,0.2);
			}
			.lock-wrap{
				position: absolute;
				top: 0;
				left: 0;
				width:100%;
				height: 100%;
				background: white;
				text-align: center;
				z-index: 100;
			}
			.lock{
				width:100%;
				height: 100%;
			}
			.lock img{
				width: 100%;
				height: 100%;
			}
			.first_prize{
				position: absolute;
				top: 0;
				width: 300px;
				
			}
			@-webkit-keyframes circle {
			        
			        to{-webkit-transform: rotate(-360deg); transform: rotate(-360deg);}
			}

			@-webkit-keyframes slide {
			        0% { -webkit-transform: rotate(0deg); transform: rotate(0deg);}
			        20%{-webkit-transform: rotate(30deg); transform: rotate(30deg);}
			        50%{-webkit-transform: rotate(-30deg); transform: rotate(-30deg);}
			        70%{-webkit-transform: rotate(30deg); transform: rotate(30deg);}
			        90%{-webkit-transform: rotate(-30deg); transform: rotate(-30deg);}
			        100%{-webkit-transform: rotate(0deg); transform: rotate(0deg);}
			}
			@keyframes slide {
			       	0% { -webkit-transform: rotate(0deg); transform: rotate(0deg);}
			        20%{-webkit-transform: rotate(30deg); transform: rotate(30deg);}
			        50%{-webkit-transform: rotate(-30deg); transform: rotate(-30deg);}
			        70%{-webkit-transform: rotate(30deg); transform: rotate(30deg);}
			        80%{-webkit-transform: rotate(-30deg); transform: rotate(-30deg);}
			        100%{-webkit-transform: rotate(0deg); transform: rotate(0deg);}
			}
				
			.tip{
				position: fixed;
			    width: 260px;
			    height:260px;
			    
    			text-align: center;
			}
			.tip{
				background: url(img/tip.png) no-repeat;
    			background-size:100% 100%;
			}
			.form_sub{
				position: fixed;
			    width: 260px;
			    height:280px;
			  	
    			text-align: center;
				background: url(img/form.png) no-repeat;
    			background-size:100% 100%;
			}
			.prize_name{
				
			    
			    width: 100%;
			    
			    font-size: 0.9rem;
			    padding: 7px 0;
			    font-weight: bolder;
			    color: rgb(47,157,155);
			}
			.close{
				display: inline-block;
			    width: 30px;
			    height: 30px;
			    position: absolute;
			    right: 20px;
			    top: 5px;
			    z-index:5;
			}
			.tip_but_l{
				color: rgb(47,157,155);
    			margin-right: 32px;
    			
			}
			.tip_but_r{
				color: rgb(47,157,155);
			}
			.commmon_text{
				font-size: 0.8rem;
				height: 26px;
			        width: 153px;
				    margin-left: 38px;
				    margin-top: 9px;
				    text-indent: 12px;
			    color: rgb(47,157,155);
			    font-family: "Microsoft YaHei UI";
			    background: transparent;
			    border: none;
			}
			input::-webkit-input-placeholder,
			textarea::-webkit-input-placeholder {
    			color: rgba(47,157,155,0.6);
			}
			input[type="text"]:first-child{
				margin-top: 12px;
			}
			input[type="text"]:last-child{
				text-indent: 14px;
			    width: 130px;
			        margin-top: 8px;
			    margin-left: 60px;
			}
			.flex_box{
				margin-top: 13px;
			    height: 170px;
			    display: flex;
			     display: -webkit-box;
			     display: -webkit-flex;	 
			     -webkit-justify-content: center;
			    justify-content: center;
			    align-items: center;
			    -webkit-align-items: center;
			}
			.share{
				position: absolute;
				z-index:10;
				top: 0;
				left:0;
				width:100%;
				height:100%;
			}
			.share img{
				width:100%;
				height: 100%;
			}
			.load_page{
			
			}
			.loadbar{
				    position: absolute;
				    height: 2.5%;
				    width: 0%;
				    top: 53%;
				    left: 33%;
				    border-radius: 5px;
				    background: rgb(47,157,155);
				    background-image: -webkit-linear-gradient(45deg,rgba(255,255,255,.25) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.25) 50%,rgba(255,255,255,.25) 75%,transparent 75%,transparent);
				    background-repeat: repeat-x;
				    background-size: 20px 20px;
				    -webkit-animation: progressStripeLTR .6s linear infinite;
			}
			.sub{
				width: 110px;
			    margin-top: 50px;
			    height: 25px;
			    opacity: 0;
			}
			.modal{
				    z-index: 1000;
				    position: fixed;
				    width: 260px;
				    height: 120px;
				    background: white;
			}
			@-webkit-keyframes progressStripeLTR{to{background-position:30px 0}}
			.tip_info{
				width: 100%;
			    height: 80px;
			    text-align: center;
			    line-height: 80px;
			}
			.btn_close{
				width: 100%;
			    height: 40px;
			    text-align: center;
			    line-height: 40px;
			    color: rgb(47,157,155);
			    box-sizing: content-box;
    			border-top: 1px solid rgb(47,157,155);
			}
			.title_tip{
				width: 210px;
			    position: absolute;
			    z-index: 10;
			    left: 50%;
			    top: 50%;
			    margin-top: -72px;
			    -webkit-animation: shade 1s infinite linear;
			}
			@-webkit-keyframes shade {
			        
			        to{opacity: 0;}
			}
		</style>
		<?php echo '<script'; ?>
>
		var _hmt = _hmt || [];
		(function() {
		  var hm = document.createElement("script");
		  hm.src = "//hm.baidu.com/hm.js?6dcd78c9190b16fed3694042166957dd";
		  var s = document.getElementsByTagName("script")[0]; 
		  s.parentNode.insertBefore(hm, s);
		})();
		<?php echo '</script'; ?>
>

		<?php echo '<script'; ?>
 type="text/javascript">	
			$(function(){
				/*窗口大小*/
				var winWidth,winHeight;
				var num=0;

				var now_prize='';
				var share_words=['人品爆发啦，我在京东网厅抽中了1台荣耀4X手机，去了就能直接抽，小伙伴们快跟上。',
				'人品爆发啦，我在京东网厅抽中了1条荣耀手环，去了就能直接抽，小伙伴快去，荣耀4X手机还在静候其主呢。',
				'提升颜值利器到手，我在京东网厅抽中了荣耀引擎耳机，去了就能直接抽，荣耀4X手机还在静候其主呢。',
				'提升颜值利器到手，我在京东网厅抽中了荣耀耳机，去了就能直接抽，荣耀4X手机还在静候其主呢。',
				'517电信日狂欢，抢超值合约机、办优惠套餐组合、消费赢免单，我要去京东网厅。'];
				var share_word=share_words[4];
				checkWinSize();
				$(window).resize(checkWinSize);	
				function checkWinSize(){		//检测窗口大小
					winWidth=$(window).width();
					winHeight=$(window).height();
					if(winWidth>winHeight){	//横屏
							$('.but').css({top:(winHeight-40)/2,left:(winWidth-40)/2});
							 $('.first_prize').css({left:(winWidth-300)/2});
							$('.lock-wrap').addClass('hide');

							//$('.first_prize').css({left:(winWidth-200)/2,top:(winHeight-150)});
							$('.form_sub').css({top:(winHeight-280)/2,left:(winWidth-260)/2});
					}
					else{
							
							$('.lock-wrap').removeClass('hide');
					}
				}
				function modal(info){
					$('.modal').css({top:(winHeight-120)/2,left:(winWidth-260)/2})
					$('.modal').removeClass('hide');
					$('.tip_info').html(info);
				}
				//modal('分享后还有一次机会哦');
				function getPrize(){
					$.ajax({
						url:'prize.php',
						data:'',  
						type: "POST",
						dataType:"json",
						success: function(res)
						{
							$('.first_prize').attr('src', 'img/last.png');
							if(res.a=="分享"){
								$('.share').removeClass('hide');
								modal('分享后还有一次机会哦');
								share_word=share_words[4];
								//alert('分享后还有一次机会哦');
							}
							else if(res.a=="您已抽过奖了"){	
								$('.share').removeClass('hide');
								modal(res.a);

								share_word=share_words[4];
							}
							else{
								$('.prize_name').html(res.a);
								$('#prize_img').attr('src',prizeArray[res.b-1]);
								
								$('.tip').css({top:(winHeight-260)/2,left:(winWidth-260)/2});
								$('.tip').removeClass('hide');

								if(res.b==8)
									{now_prize='quan';
									share_word=share_words[4];
									$('.tip_but_l').html('再来一次');
							}
								else{
									now_prize='';
									if(res.b==1){
										share_word=share_words[3];
										wx.onMenuShareAppMessage({
									    title: '京东网厅 省钱、省时、省心', // 分享标题
									    desc: share_word, // 分享描述
									    link: 'http://jdtrild.haidaofresh.com/jd/index.php', // 分享链接
									    imgUrl: 'http://jdtrild.haidaofresh.com/jd/img/share_img.png', // 分享图标
									    type: '', // 分享类型,music、video或link，不填默认为link
									    dataUrl: '', // 如果type是music或video，则要提供数据链接，默认为空
									    success: function (res) { 
									        // 用户确认分享后执行的回调函数
									         $.ajax({
											url: 'share.php',  //请求地址
											data: '',  
											type: "POST",
											success: function(){
												//modal('分享成功');
												wx.closeWindow();
				                                $('.share').addClass('hide');
				                                $('.lock-wrap').addClass('hide');
											}
											})
									    },
									    cancel: function () { 
									        // 用户取消分享后执行的回调函数
									        //alert('cao');
									    }
									});
								    
									}
									if(res.b==3){
										share_word=share_words[1];
										wx.onMenuShareAppMessage({
									    title: '京东网厅 省钱、省时、省心', // 分享标题
									    desc: share_word, // 分享描述
									    link: 'http://jdtrild.haidaofresh.com/jd/index.php', // 分享链接
									    imgUrl: 'http://jdtrild.haidaofresh.com/jd/img/share_img.png', // 分享图标
									    type: '', // 分享类型,music、video或link，不填默认为link
									    dataUrl: '', // 如果type是music或video，则要提供数据链接，默认为空
									    success: function (res) { 
									        // 用户确认分享后执行的回调函数
									         $.ajax({
											url: 'share.php',  //请求地址
											data: '',  
											type: "POST",
											success: function(){
												//modal('分享成功');
												wx.closeWindow();
				                                $('.share').addClass('hide');
				                                $('.lock-wrap').addClass('hide');
											}
											})
									    },
									    cancel: function () { 
									        // 用户取消分享后执行的回调函数
									        //alert('cao');
									    }
									});
									}
									if(res.b==5){
										share_word=share_words[0];
										wx.onMenuShareAppMessage({
									    title: '京东网厅 省钱、省时、省心', // 分享标题
									    desc: share_word, // 分享描述
									    link: 'http://jdtrild.haidaofresh.com/jd/index.php', // 分享链接
									    imgUrl: 'http://jdtrild.haidaofresh.com/jd/img/share_img.png', // 分享图标
									    type: '', // 分享类型,music、video或link，不填默认为link
									    dataUrl: '', // 如果type是music或video，则要提供数据链接，默认为空
									    success: function (res) { 
									        // 用户确认分享后执行的回调函数
									         $.ajax({
											url: 'share.php',  //请求地址
											data: '',  
											type: "POST",
											success: function(){
												//modal('分享成功');
												wx.closeWindow();
				                                $('.share').addClass('hide');
				                                $('.lock-wrap').addClass('hide');
											}
											})
									    },
									    cancel: function () { 
									        // 用户取消分享后执行的回调函数
									        //alert('cao');
									    }
									});
									}
									if(res.b==7){
										share_word=share_words[2];
										wx.onMenuShareAppMessage({
									    title: '京东网厅 省钱、省时、省心', // 分享标题
									    desc: share_word, // 分享描述
									    link: 'http://jdtrild.haidaofresh.com/jd/index.php', // 分享链接
									    imgUrl: 'http://jdtrild.haidaofresh.com/jd/img/share_img.png', // 分享图标
									    type: '', // 分享类型,music、video或link，不填默认为link
									    dataUrl: '', // 如果type是music或video，则要提供数据链接，默认为空
									    success: function (res) { 
									        // 用户确认分享后执行的回调函数
									         $.ajax({
											url: 'share.php',  //请求地址
											data: '',  
											type: "POST",
											success: function(){
												//modal('分享成功');
												wx.closeWindow();
				                                $('.share').addClass('hide');
				                                $('.lock-wrap').addClass('hide');
											}
											})
									    },
									    cancel: function () { 
									        // 用户取消分享后执行的回调函数
									        //alert('cao');
									    }
									});
									}
									$('.tip_but_l').html('领取礼包');
								}
							}
							console.log(share_word);
						},
						error:function(){
							modal('网络连接错误,请刷新页面。');
						}
					});
				}

				function post_form(){
					$.ajax({
							url: 'insertBaseInfo.php',  //请求地址
							data: $('#jd_form').serializeArray(),  //表单序列化
							type: "POST",
							success: function()
							{
								
								//alert('提交成功');
								modal('提交成功');
								$('.form_sub').addClass('hide');
								$('.first_prize').attr('src','img/first.png');
								if(num==1)
								window.location.href="http://jdtrild.haidaofresh.com/quanjing/";
								
							},
							error:function(){
								modal('网络连接错误,请刷新页面。');
								//alert('网络连接错误,请刷新页面.');
							}
					});
				}
				var load_num=0;
				var url=window.location.href;
				var imgs=['img/load.png','img/heng.jpg','img/title_tip.png','img/xz.png','img/door_l.jpg','img/button_1.png','img/door_r.jpg','img/last.png','img/first.png','img/form.png','img/hw_high.png','img/hw_phone.png','img/hwearphone.png','img/hwwatch.png','img/jd_back.jpg','img/quan.png','img/share.png','img/tip.png','img/share_close.png'];
				imgs.forEach(function(key,i){
					var loading_img=new Image();
					loading_img.src=key;
					loading_img.onload=function(){
						load_num++;
						$('.loadbar').animate({width: (load_num/imgs.length)*35+'%'},
							500,'ease-out', function() {
								if(load_num==imgs.length){
									setTimeout(function () {
							          $('.load_page').addClass('hide');
							          $('.page1').removeClass('hide');
							          
							       },500)
								}
							}
							
						);
						//console.log((load_num/imgs.length)*100+'%');
						
					}
				});
				$.ajax({
											url: 'is_prize.php',  //请求地址
											data: '',  //表单序列化
											type: "get",
											success: function(res)
											{

												if(res==1){
													//$('.share').removeClass('hide');
													num=2;
													//alert('已抽奖');
													
												}
												if(res==2){
													num=1;
												}
												
												
											},
											error:function(){
												modal('网络连接错误,请刷新页面。');
												
											}
				});
				var prizeArray=['img/hwearphone.png','','img/hwwatch.png','','img/hw_phone.png','','img/hw_high.png','img/quan.png']
				$('.but').css({top:(winHeight-40)/2,left:(winWidth-40)/2});
				
				$('.but').on('click',function(){
					if(num==2){
						window.location.href="http://jdtrild.haidaofresh.com/quanjing/";
						return false;
					}
					else{
					$(this).hide();
					$('.title_tip').addClass('hide');
					$('.xz').addClass('hide');
					$('.door_left').animate({left:-winWidth/2+'px'},1000,'linear',function(){

						$('.cover').removeClass('hide');
						$('.first_prize').css({left:(winWidth-300)/2});
						$('.first_prize').removeClass('hide');
						
						setTimeout(function(){
							$('.first_prize').animate({top:(winHeight-200)},1000,'ease-out',function(){
								$(this).on('click',function(){
									$(this).animate('slide',300,'ease-in-out',function(){
											$(this).attr('src', 'img/last.png');
											getPrize();
											
									});
									
								})

							});
						},300);
						
					});
					$('.door_right').animate({right:-winWidth/2+'px'},1000,'linear');
				}
					
				});
				$('.close').eq(0).on('click',function(){
					$('.tip').addClass('hide');
				});
				$('.close').eq(1).on('click',function(){
					$('.form_sub').addClass('hide');
				});
				$('.tip_but_l').on('click',function(){
					$('.tip').addClass('hide');
					if(now_prize=="quan"){
						/*$.ajax({
							url: 'fenxiang.php',  //请求地址
							data: {
								url:url
							},  
							type: "POST",
							dataType:"json",
							success:function(){

							}
						})*/
						if(num==0)
							modal('请先分享');
						else if(num==1)
							modal('两次抽奖机会已用完');
						$('.first_prize').attr('src','img/first.png');
						//alert('领券成功');
					}
					else if(now_prize==''){
						$('.form_sub').css({top:(winHeight-280)/2,left:(winWidth-260)/2});
						$('.form_sub').removeClass('hide');
					}
				});
				$('.sub').on('click',function(){
					var res=/^1\d{10}$/;
					if($('.commmon_text').eq(0).val()==''){
						modal('请输入正确的姓名');
						return false;
					}
					else if(!res.test($('.commmon_text').eq(1).val())){
						modal('请输入正确的手机号');
						return false;
					}
					else if($('.commmon_text').eq(2).val()==''){
						modal('请输入正确的地址');
						return false;
					}
					else
						post_form();
				});
				$('.btn_close').on('click',function(){
					$('.modal').addClass('hide');
					if(now_prize=='quan' && num==0){
						$('.share').removeClass('hide');
					}
					else if(now_prize=='quan' && num==1){
						window.location.href="http://jdtrild.haidaofresh.com/quanjing/";
					}
					
					
				});
				//微信参数配置
				$.ajax({
						url: 'fenxiang.php',  //请求地址
						data: {
							url:url
						},  
						type: "POST",
						dataType:"json",
						success: function(res)
						{
								wx.config({
								    debug: false, // 开启调试模式,调用的所有api的返回值会在客户端alert出来，若要查看传入的参数，可以在pc端打开，参数信息会通过log打出，仅在pc端时才会打印。
								    appId: res.appId, // 必填，公众号的唯一标识
								    timestamp: ""+res.timestamp, // 必填，生成签名的时间戳
								    nonceStr: res.nonceStr, // 必填，生成签名的随机串
								    signature: res.signature,// 必填，签名，见附录1
								    jsApiList: ['onMenuShareTimeline',
								    'onMenuShareAppMessage'] // 必填，需要使用的JS接口列表，所有JS接口列表见附录2
								});  
								
								wx.ready(function() {
									
									wx.onMenuShareTimeline({
								    title: '京东网厅 省钱、省时、省心', // 分享标题
								    link: 'http://jdtrild.haidaofresh.com/jd/index.php', // 分享链接
								    imgUrl: 'http://jdtrild.haidaofresh.com/jd/img/share_img.png', // 分享图标
								    success: function (res) { 
								        $.ajax({
											url: 'share.php',  //请求地址
											data: '',  
											type: "POST",
											success: function(){
												//alert('分享成功');
												//modal('分享成功');
												wx.closeWindow();
				                                $('.share').addClass('hide');
				                                $('.lock-wrap').addClass('hide');
											}
											})
								    },
								    cancel: function (res) { 
								       
								    }
									});
									wx.onMenuShareAppMessage({
									    title: '京东网厅 省钱、省时、省心', // 分享标题
									    desc: share_word, // 分享描述
									    link: 'http://jdtrild.haidaofresh.com/jd/index.php', // 分享链接
									    imgUrl: 'http://jdtrild.haidaofresh.com/jd/img/share_img.png', // 分享图标
									    type: '', // 分享类型,music、video或link，不填默认为link
									    dataUrl: '', // 如果type是music或video，则要提供数据链接，默认为空
									    success: function (res) { 
									        // 用户确认分享后执行的回调函数
									         $.ajax({
											url: 'share.php',  //请求地址
											data: '',  
											type: "POST",
											success: function(){
												//modal('分享成功');
												wx.closeWindow();
				                                $('.share').addClass('hide');
				                                $('.lock-wrap').addClass('hide');
											}
											})
									    },
									    cancel: function () { 
									        // 用户取消分享后执行的回调函数
									        //alert('cao');
									    }
									});
								    
								});
						}
				});

				//微信配置参数结束

			})
			
		<?php echo '</script'; ?>
>
	</head>
	<body>
		<div class="load_page page">
			<img src="img/load.png" class="page">
			<div class="loadbar"></div>
		</div>
		<div class="lock-wrap hide">
			<div class="lock">
				<img src="img/heng.jpg">
			</div>
		</div>
		<div class="page1 page hide">
			<img src="img/door_l.jpg" class="door_left">
			<img src="img/door_r.jpg" class="door_right">
			<img src="img/xz.png" class="xz">	
			<img src="img/button_1.png" class="but ">
			<img src="img/title_tip.png" class="title_tip">
			<div class="cover">
				<img src="img/first.png" class="first_prize hide">
			</div>
		</div>
		<div id="tip" class="tip hide" >
			<p class="prize_name"></p>
			<a href="javascript:;" class="close"></a>
			<div class="flex_box">
					<img src="" style="height: 140px" id="prize_img">
			</div>
			<div style="margin-top: 13px;">
			<a href="javascript:;" class="tip_but_l">领取礼包</a>
			<a href="http://jdtrild.haidaofresh.com/quanjing/" class="tip_but_r">返回大厅</a>
			</div>
		</div>
		<div>

		</div>
		<div class="form_sub hide" >
			<a href="javascript:;" class="close"></a>
			<div style="margin-top: 60px;">
			<form id="jd_form">
			<input type="text" class="commmon_text" name="name">
			<input type="text" class="commmon_text" name="mobile">
			<input type="text" class="commmon_text" name="address">
			<input type="text" class="commmon_text" name="jd_account" placeholder="选填">
			</form>
			</div>
			<button type="button" class="sub">领取礼包</button>
		</div>
		<div class="share hide">
			<a href="http://jdtrild.haidaofresh.com/quanjing/"><img src="img/share_close.png" style="position: absolute;top:5%;left:5%;width:30px;height: 30px;"></a>
			<img src="img/share.png">
		</div>
		<div class="modal hide">
			<div class="tip_info">
				
			</div>
			<div class="btn_close">
				确定
			</div>
		</div>
	</body>
</html>
<?php }
}
?>