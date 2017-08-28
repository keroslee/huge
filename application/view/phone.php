<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>登录</title>
    <link rel="stylesheet" type="text/css" href="/css/common.css"/>
    <link rel="stylesheet" type="text/css" href="/css/regLo.css"/>
    <script src="/js/zepto_1.1.3.js" type="text/javascript" charset="utf-8"></script>
</head>
<body>
	<div id="head">
	</div>

	<div id="bg">
		<div id="formDiv">
            <form id="formPhone" action="/user/verify" method="post">
			<div id="numberDiv">
				<input type="number" id="number" name="phone" placeholder="手机号"/>
			</div>
			<div id="codeDiv">
				<div id="code">
					<input type="text" id="codeInput" name="code" placeholder="验证码"/>
				</div>
				<div id="sendCode">
					发送验证码
				</div>
			</div>
			<!--<div id="agreeDiv">
				<div id="agreeBtn"></div>
				<div id="agreeFont">
					同意注册协议
				</div>
			</div>-->
			<div id="loginBtn">
				登录
			</div>
            </form>
		</div>
	</div>
    <script src="/js/app.js" type="text/javascript" charset="utf-8"></script>
    <script src="/js/jquery.min.js" type="text/javascript" charset="utf-8"></script>
	<script type="text/javascript">
		var isOk = false;
			$('#number').blur(function(){
				var numberValue = $(this).val();
				if(numberValue == ''){
//					alert("手机号码不得为空");
				}else{
					if(!(/^1[34578]\d{9}$/.test(numberValue))) {
						alert("手机号码有误，请重填");
					} else{
						isOk = true;
					}
				}
			});
			$('#sendCode').click(function(){
				if(isOk){
					alert("验证码是1234");
					var textStr = $(this).html().trim();
					var i = 10;
					var isthis = $(this);
					if(textStr == "发送验证码"){
						isthis.css({
							"background":"#ccc",
							"border": "1px solid #ccc"
							});
						isthis.html(i+"s后重试");
						isthis.attr("disabled","disabled");
				var Inerval = setInterval(function(){						
							i--;
							isthis.html(i+"s后重试");
							console.log(i);
							if(i==0){
								console.log(5);
								isthis.css({
								"background":"#F47171",
								"border": "1px solid #F47171"
								});
								clearInterval(Inerval);
								isthis.html("发送验证码");
								isthis.removeAttr("disabled");
							}
						},1000)
					}
				}	else{
					alert("手机号码有误，请重填");
				}
			});
			var isChoose = false;
			$('#agreeBtn').click(function(){
				isChoose = !isChoose;
				if(isChoose){
					$(this).css({
						'background':"url(img/ZhuanJiFen_YiWabCheng.png) no-repeat center center",
						"background-size": "25px auto"
					});
				}else{
					$(this).css("background","#fff");
				}
			});
			var isCode = false;
			$('#loginBtn').click(function(){
			    var phone = $('#number').val()
				var codeValue = $('#codeInput').val();
				if(codeValue == ''){
					alert("验证码不得为空");
				}else{
//				    $('#formPhone').submit();
				    $.post('/phone/verify',{phone:phone,code:codeValue}).done(function(ret){
				        if(ret!=='true'){
				            alert('验证码错误，请重新验证！')
                        }
                    }).fail(function(){

                    })
				}
//				if(!isChoose){
//					alert('请同意注册协议');
//				}
//				if(!isOk){
//					alert('手机号码有误');
//				}
//				if(isCode&&isOk){
//					alert("大吉大利！今晚吃鸡！");
//				}
			});
	</script>
</body>
</html>