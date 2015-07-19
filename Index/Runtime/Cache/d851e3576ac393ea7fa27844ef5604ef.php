<?php if (!defined('THINK_PATH')) exit();?>
<html><head lang="zh"><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">
    <title>手机量</title>
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/css/login.css">
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/css/dialog.css">
    <script type="text/javascript" src="__PUBLIC__/js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="__PUBLIC__/js/dialog.js"></script>
    <script type="text/javascript" src="__PUBLIC__/js/login.js"></script>
</head>

<body>
	<!--注册-->
	<div class="register_area" style="display: none;">
		<form id="register_form" action="<?php echo U('User/register');?>" method="post">
		    <div class="form form_register clearFix">
		        <div class="form_title">用户注册</div>
		        <div class="form_input">
		            <span class="icon_area bg_lg"><i class="icon_email"></i></span>
		            <input type="text" name="register_email" id="register_email" placeholder="请输入邮箱">
		        </div>
		        <div class="form_input">
		            <span class="icon_area bg_ly"><i class="icon_password"></i></span>
		            <input type="password" name="register_password1" id="register_password1" placeholder="请输入密码">
		        </div>
		        <div class="form_input">
		            <span class="icon_area bg_ly"><i class="icon_password"></i></span>
		            <input type="password" name="register_password2" id="register_password2" placeholder="请重复输入密码">
		        </div>
		        
		        <div class="form_input code">
		            <!-- <input type="text" name="register_vcode" id="register_vcode" placeholder="验证码" maxlength="4"> -->
		            <!-- <img id="register_vcode_image" src="<?php echo U('Base/verify');?>"> -->
		            <!-- <a id="refresh_register_vcode_image" href="javascript:void(0);">刷新</a> -->
		        </div>
		        
		        <div class="erro_area"><span class="erro" id="register_error">用户名不正确</span></div>
		        <div class="form_input"><input class="btn register" id="register_post_button" href="javascript:void(0);"  type="button" value="确认注册"/></div>
		    </div>
		    <div class="other_btn clearFix">
		        <a href="javascript:void(0);" class="btn go_login">我要登录</a>
		    </div>
	    </form>
	</div>
	
	<!--登录-->
	<form action="<?php echo U('User/login');?>" method="post" id="login_form">
	<div class="login_area" style="display: block;">
	    <div class="form form_register clearFix">
	        <div class="form_title">用户登录</div>
	        <div class="form_input">
	            <span class="icon_area bg_lg"><i class="icon_email"></i></span>
	            <input name="login_email" id="login_email" type="text" placeholder="请输入邮箱">
	        </div>
	        <div class="form_input">
	            <span class="icon_area bg_ly"><i class="icon_password"></i></span>
	            <input name="login_password" id="login_password" type="password" placeholder="请输入密码">
	        </div>
	        
	        <!-- 
	        <div class="form_input code">
	            <input name="login_vcode" id="login_vcode" type="text" placeholder="验证码" maxlength="4">
	            <img id="login_vcode_image"  src="/index.php?c=vcode&a=index&id=login">
	            <a id="refresh_login_vcode_image" href="javascript:void(0);">刷新</a>
	        </div>
	         -->
	        
	        <div class="erro_area"><span class="erro" id="login_error">用户名不正确</span></div>
	        <div class="form_input"><a class="btn login" id="login_post_button" href="javascript:void(0);">确认登录</a></div>
	        <a href="javascript:void(0);" class="forget_password">忘记密码</a>
	    </div>
	    <div class="other_btn clearFix">
	        <a href="javascript:void(0);" class="btn go_register">我要注册</a>
	    </div>
	</div>
	</form>
	<script type="text/javascript">
		$("#login_post_button").click(function(){
			$("#login_form").submit();
		});
	</script>

	<!--忘记密码-->
	<div class="forget_password_area" style="display: none;">
	    <div class="form form_register clearFix">
	        <div class="form_title"><p>请输入注册时填写的邮箱地址<br>系统会为你生成随机密码，并将新密码发送到该邮箱</p></div>
	        <div class="form_input">
	            <span class="icon_area bg_lo"><i class="icon_email"></i></span>
	            <input name="get_password_email" id="get_password_email" type="text" placeholder="请输入注册时的邮箱">
	        </div>
	        
	        <div class="form_input code">
	            <input name="get_password_vcode" id="get_password_vcode" type="text" placeholder="验证码" maxlength="4">
	            <img id="get_password_vcode_image" src="<?php echo U('Base/verify');?>">
	            <a id="refresh_get_password_vcode_image" href="javascript:void(0);">刷新</a>
	        </div>
	        
	        <div class="erro_area"><span class="erro" id="get_password_error">用户名不正确</span></div>
	        <div class="form_input"><a href="javascript:void(0);" class="btn send_email" id="get_password_post_button">发送邮件</a></div>
	    </div>
	    <div class="other_btn clearFix">
	        <a href="javascript:void(0);" class="btn go_back">返回</a>
	    </div>
	</div>
	
	<div id="dialog_root">

</div></body></html>