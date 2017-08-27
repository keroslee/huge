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
				background: url(../../public/img/t03.png) no-repeat 5px 5px;
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
				margin-top: 120px;
				float: left;
				/*background: #666666;*/
			}
			
			.formlist input {
				margin: 0;
				padding: 0;
				width: 400px;
				height: 40px;
				padding-left: 20px;
				outline: 0;
				border-radius: 5px;
				background: #fff;
				color: #333;
				font-size: 18px;
			}
			
			.formlist input[type=submit],
			.formlist input[type=button] {
				background: #fff url(../../public/img/ico06.png) no-repeat 12px 3px;
				background-size: 20px auto;
				padding-left: 6px;
			}
			
			.formlist input[type=button] {
				float: right;
				margin-bottom: 15px;
				margin-right: 10px;
				background: #fff url(../../public/img/f06.png) no-repeat 12px 5px;
			}
			
			table {
				border: solid 1px #cbcbcb;
				width: 100%;
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
				width:100px;
				height: 50px;
				text-indent: 11px;
				border-right: dotted 1px #c7c7c7;
				text-align: center;
			}
			tr>td:nth-last-child(1){
				text-align: left;
			}
			
			.tablelist tbody tr.odd {
				background: #f5f8fa;
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
			#btnDiv{
				width: 100%;
				height: 50px;
				margin-top: 20px;
			}
			#cancelBtn,#addBtn{
				width: 130px;
				height: 100%;
				text-align: center;
				font: 18px/50px "微软雅黑";
				color: #fff;
				background: rgb(244, 113, 113);
				float: right;
				border-radius: 5px;
				cursor: pointer;
			}
			#addBtn{
				margin:0 20px;
			}
		</style>
		<script src="jquery.min.js" type="text/javascript" charset="utf-8"></script>
	</head>

	<body>

		<div id="logo">
			<img src="../../public/img/88.png" />
		</div>
		<form id="searchForm" method="post" action="${base}/userList/select">
			<div class="cont box-shadow clearfix" id="bdID">
				<div class="formlist left10">
					<div id="userDiv">
						<table style="width: 100%" border="1">
							<tr>
								<td>姓名</td>
								<td><input type="text" name="" id="name"/></td>
								
							</tr>
							<tr>
								<td>电话</td>
								<td><input type="text" name="" id="phone"/></td>
								
							</tr>
							<tr>
								<td>url</td>
								<td><input type="text" name="" id="url"/></td>								
							</tr>
						</table>
						<div id="btnDiv">							
							<div id="addBtn">
								添加
							</div>
							<div id="cancelBtn">
								取消
							</div>
						</div>
					</div>
				</div>
			</div>

		</form>

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

				})
			})
		</script>
	</body>

</html>