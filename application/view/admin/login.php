<!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title></title>
		<link href="https://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="/css/jq22.css" />
		<style type="text/css">
			.btn {
			    display: block;
			    margin: auto;
			    padding: 6px 55px;
			}
			#logo{
				width: 220px;
				height: 120px;
				position: absolute;
				left: 0px;
				top: -15px;
				z-index: 100;
			}
			#logo img{
				width: 100%;
				height: auto;
			}
		</style>
	</head>

	<body>
		<div id="logo">
			<img src="/img/88.png"/>
		</div>
			<!-- begin -->
		<div id="login">
			<div class="wrapper">
				<div class="login">
					<form action="<?php echo Config::get('URL'); ?>login/login" method="post" class="container offset1 loginform">
						<div id="owl-login">
							<div class="hand"></div>
							<div class="hand hand-r"></div>
							<div class="arms">
								<div class="arm"></div>
								<div class="arm arm-r"></div>
							</div>
						</div>
						<div class="pad">
							<div class="control-group">
								<div class="controls">
									<label for="email" class="control-label fa fa-envelope"></label>
									<input id="email" type="text" name="user_name" placeholder="输入账号" tabindex="1" autofocus="autofocus" class="form-control input-medium">
								</div>
							</div>
							<div class="control-group">
								<div class="controls">
									<label for="password" class="control-label fa fa-asterisk"></label>
									<input id="password" type="password" name="user_password" placeholder="输入密码" tabindex="2" class="form-control input-medium">
								</div>
							</div>
						</div>
						<input type="hidden" name="csrf_token" value="<?= Csrf::makeToken(); ?>" />
						<?php if (!empty($this->redirect)) { ?>
							<input type="hidden" name="redirect" value="<?php echo $this->encodeHTML($this->redirect); ?>" />
						<?php } ?>
						<div class="form-actions">
							<button type="submit" tabindex="4" class="btn btn-primary">登录</button>
						</div>
					</form>
				</div>
			</div>
			<script src="/js/jquery.min.js"></script>
			<script>
				$(function() {

					$('#login #password').focus(function() {
						$('#owl-login').addClass('password');
					}).blur(function() {
						$('#owl-login').removeClass('password');
					});
					$(".form-actions button").click(function(){
						window.location.href = "index.html";
					});
				});
			</script>
		</div>
		<!-- end -->
	</body>
</html>