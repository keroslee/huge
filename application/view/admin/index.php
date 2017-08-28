<html>

	<head>
		<title>88空间</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="description" content="88空间" />
		<meta name="decorator" content="index_template" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta content="width=device-width,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0,user-scalable=no" name="viewport" />
		<meta content="yes" name="apple-mobile-web-app-capable" />
		<meta content="black" name="apple-mobile-web-app-status-bar-style" />
		<meta content="telephone=no" name="format-detection" />
		<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
		<meta http-equiv="Pragma" content="no-cache" />
		<meta http-equiv="Expires" content="0" />

		<script type="text/javascript">
			function logout() {

				if(confirm("确定要退出吗？")) {
					document.userForm.submit();
				}
				/* layer.confirm("确定要退出吗？",function(){
				        
				}); */
			}
		</script>
		<style type="text/css">
			@charset "utf-8";
			/* CSS Document */
			
			html,
			body,
			ul,
			li,
			ol,
			dl,
			dd,
			dt,
			p,
			h1,
			h2,
			h3,
			h4,
			h5,
			h6,
			form,
			fieldset,
			legend,
			img {
				margin: 0;
				padding: 0;
			}
			
			fieldset,
			img {
				border: none;
			}
			
			img {
				display: block;
			}
			
			address,
			caption,
			cite,
			code,
			dfn,
			th,
			var {
				font-style: normal;
				font-weight: normal;
			}
			
			ul,
			ol {
				list-style: none;
			}
			
			body {
				color: #333;
				font: 12px/20px "SimSun", "宋体", "Arial Narrow", HELVETICA;
				background: #fff;
				/* overflow-y:scroll;*/
			}
			
			a {
				color: #666;
				text-decoration: none;
			}
			
			a:visited {
				color: #666;
			}
			
			.clear:after {
				content: ".";
				clear: both;
				display: block;
				height: 0;
				overflow: hidden;
				visibility: hidden;
			}
			
			form[name=userForm] {
				width: 80px;
				background: url(/img/t03.png) no-repeat 5px 5px;
				line-height: 33px;
				height: 33px;
				border-bottom: solid 2px #ccc;
				float: right;
				padding-right: 10px;
				margin-right: 5px;
				border-radius: 3px;
				cursor: pointer;
				text-align: right;
				margin-top: 35px;
			}
			
			form[name=userForm] a:hover {
				color: orange;
				font-weight: 600;
			}
			
			#searchForm {
				width: 100%;
				min-height: 120px;
				margin-top: 70px;
				float: left;
				/*background: #666666;*/
			}
			
			.formlist input {
				margin: 0;
				padding: 0;
				width: 100px;
				height: 30px;
				outline: 0;
				border-radius: 100px;
				background: #fff;
				text-align: center;
				color: #333;
			}
			
			.formlist input[type=submit],
			.formlist input[type=button] {
				background: #fff url(/img/ico06.png) no-repeat 12px 3px;
				background-size: 20px auto;
				padding-left: 6px;
			}
			
			.formlist input[type=button] {
				float: right;
				margin-bottom: 15px;
				margin-right: 10px;
				background: #fff url(/img/f06.png) no-repeat 12px 5px;
			}
			
			table {
				border: solid 1px #cbcbcb;
				width: 100%;
				min-height: 50px;
				clear: both;
				border-collapse: collapse;
				border-spacing: 0;
				display: table;
				margin-top: 12px;
			}
			
			tbody {
				display: table-row-group;
				vertical-align: middle;
			}
			
			tr {
				display: table-row;
				vertical-align: inherit;
			}
			
			td {
				padding: 0;
				margin: 0;
				font: 16px/34px "微软雅黑";
				text-indent: 11px;
				border-right: dotted 1px #c7c7c7;
				text-align: center;
			}
			
			.tablelist tbody tr.odd {
				background: #f5f8fa;
			}
			
			tr:nth-child(1) {
				background: url(/img/th.gif) repeat-x;
				height: 34px;
				line-height: 34px;
				border-bottom: solid 1px #b6cad2;
				text-indent: 11px;
				text-align: left;
			}
			
			tr:nth-child(1) td {
				border: 0;
				font-weight: 600;
			}
			
			#logo {
				width: 220px;
				height: 120px;
				position: absolute;
				left: 0px;
				top: -15px;
				z-index: 100;
			}
			
			#logo img {
				width: 100%;
				height: auto;
			}
			#font{
				width: 160px;
				height: 30px;
				float: left;
				text-align: center;
				font: 18px/30px "微软雅黑";
			}
			td .edit,td .delete{
				float: left;
				width: 50%;
				height: 100%;
				text-align: center;
				cursor: pointer;
			}
			td .delete{
				float: right;
			}
			td a:hover{
				color: #FFA500;
			}
		</style>
		<script src="/js/jquery.min.js" type="text/javascript" charset="utf-8"></script>
	</head>

	<body>

		<div id="logo">
			<img src="/img/88.png"/>
		</div>
		<form action="" name="userForm">
			<!--<a href="#" onclick="logout()">退出登录</a>-->
			<a href="<?php echo Config::get('URL'); ?>login/logout">退出登录</a>
		</form>

		<div id="searchForm">
			<div class="cont box-shadow clearfix" id="bdID">
				<div class="formlist left10">
					<div id="font">共<span class="numPage"><?=count($this->users)?></span>条数据</div>
					<input type="button" class="btn_dark" value="添 加">
					<div class="" id="userDiv">
						<table style="width: 100%" border="1">
							<tr>
								<td>编号</td>
								<td>姓名</td>
								<td>手机号</td>
								<td>URL</td>
								<td>操作</td>
							</tr>
							<?php foreach ($this->users as $user) { ?>
							<tr>
								<td><?= $user->user_id; ?></td>
								<td><?= $user->user_name; ?></td>
								<td><?= $user->phone; ?></td>
								<td><?= $user->video_url; ?></td>
								<td>
                                    <form id="form<?= $user->user_id; ?>" action="/admin/edit" method="post">
                                        <input name="id" hidden value="<?= $user->user_id; ?>">
                                    </form>
                                    <a href="javascript:;" class="edit" data-id="<?= $user->user_id; ?>">编辑</a>
                                    <a href="javascript:;"  class="delete" data-id="<?= $user->user_id; ?>">删除</a>
                                </td>
							</tr>
							<?php } ?>
						</table>
					</div>
				</div>
			</div>

		</div>

		<script type="text/javascript">
			$(function() {
				var len = $('tr').length;
				for(var i = 1; i < len; i++) {
					if(i % 2 == 1) {
						$('tr').eq(i).css("background", "#f5f8fa")
					}
				}
				//			alert(len);
				$("tr").mouseover(function() {
					$(this).css("background", "#e6e6e6");
				})
				$("tr").mouseout(function() {
					if(($(this).index()) % 2 == 1) {
						$(this).css("background", "#f5f8fa");
					} else {
						$(this).css("background", "#fff");
					}

				});
				$(".edit").click(function(){
                    var id = $(this).data('id')
                    $('#form'+id).submit()
				});
				$("table").on("click",".delete",function(){
					var id = $(this).data('id')
					$.post('/user/delete',{id:id}).done(function(ret){
						console.log(ret)
						if(ret>0) {
							var index = $(this).index(".delete");
							$("tr").eq(index + 1).remove();
						}else{
							alert('删除失败')
						}
					}).fail(function(ret){
						console.log(ret,'fail')
						alert('删除失败')
					})
				});
				$(".btn_dark").click(function(){
				    window.location.href = '/admin/edit'
				});
			})
		</script>
	</body>

</html>