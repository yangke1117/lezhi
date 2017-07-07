<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="/lezhi/Public/Home/css/register.css">
	<link rel="stylesheet" href="/lezhi/Public/Home/images/favicon32.ico">
	<title>注册</title>
</head>
<body>
	<!-- logo与主体内容 -->
	<div class="zc">
			<!-- logo显示 -->
			<div class="zc_logo">
				<a href="#"><img src="/lezhi/Public/Home/images/zc_logo.jpg" alt=""></a>
			</div>
			<!-- 主体内容 -->
			<div class="zc_main">
				<!-- 大图片logo -->
				<div class="zc_img">
				<img src="/lezhi/Public/Home/images/zc_login.jpg" alt="">
				</div>
				<!-- 用户注册填写 -->
				<div class="zc_fk">
					<!-- 表单题目 -->
					<div class="zc_fk_lab">
						<h3>新用户注册</h3>
					</div>
					<div class="clear"></div>
					<!-- 表单提交 -->
					<div class="zc_form">
						<form action="<?php echo U('Home/User/checkRegistr');?>" method="post">
							<div class="zc_form_inp">
								<p>
									<select name="" class="zc_form_sel">
										<option>中国</option>
										<option>美国</option>
										<option>英国</option>
										<option>意大利</option>
									</select>
									<input type="text" style="width:164px;" placeholder="手机号码" name="tel" maxlength="32"><span></span>
								</p>
								<p>
									<input id="code" type="text" style="width:164px; float:left;" placeholder="验证码" name="code">
									<img id="imgid" src="/lezhi/Public/Home/images/zc_yzm.jpg">
								</p>
								<p>
									<input type="password" placeholder="请设置密码(6-20位)" name="password">
								</p>
							</div>
							<div class="zc_form_sub">
								<input type="submit" value="注册" name="sub">
							</div>
							<div class="zc_ty">
								<input id="d_regs" type="checkbox" checked>
								<label for="zc_regs">
									我已阅读并且同意
									<a target="_blank" href="">《蘑菇街网络服务使用协议》</a>
								</label>
							</div>
						</form>
						<div class="zc_zh">
						<!-- 链接登陆页面 -->
							<a href="<?php echo U('Home/User/login');?>">已有账号</a>
						</div>
					</div>
				</div>
			</div>

	</div>

	<!-- 尾部内容 -->
	<div class="zc_footer">
		<div class="zc_footer_link">
			<div class="zc_code">
				<h3>蘑菇街移动客户端</h3>
				<a target="_blank" href="">
					<img src="/lezhi/Public/Home/images/zc_code.png" alt="">
				</a>
			</div>
			<ul class="zc_link_list">
				<li>
					<h3>新手帮助</h3>
					<a href="" target="_blank">如何购买</a>
					<a href="" target="_blank">支付教程</a>
					<a href="" target="_blank">优惠劵使用</a>
					<a href="" target="_blank">常见问题</a>
				</li>
				<li>
					<h3>权益保障</h3>
					<p>全国包邮</p>
					<p>7天无理由退货</p>
					<p>退货运费补贴</p>
					<p>72小时发货</p>
				</li>
				<li>
					<h3>商家服务</h3>
					<a target="_blank" href="">免费开店</a>
					<a target="_blank" href="">商家入驻</a>
					<a target="_blank" href="">管理后台</a>
				</li>
			</ul>
			<div class="clear"></div>
            <p class="zc_copyright">©Copyright 2010-2015 蘑菇街 Mogujie.com (增值电信业务经营许可证：浙B2-20110349)</p>
		</div>
	</div>
</body>
<script src="/lezhi/Public/Home/js/jquery-1.11.3.min.js"></script>
<script type="text/javascript">
		//点击获取验证码
		$("#imgid").click(function(){
			var s = 'code?rand=' + Math.random();
			$(this).attr('src', s);

		})

		//验证电话号码是否正确
		$("input:first").blur(function(){
				var that = $(this);
				if(!$(this).val().match(/^\d{11}$/)){
					alert("电话号码不正确，请重新输入！");
					that.val('');
				}
				//验证新用户注册的手机号是否已被注册
				var uname = $("input:first").val();

				$.ajax({
						"type" : "post",
						"data" : {"tel":uname},
						"url" : "/lezhi/index.php/Home/User/getTel",
						"success" : function(d){
							if(d == '1'){
								alert("该手机号已存在，请重新输入！");
								that.val('');
							}
						},
						"dataType" : "json"
				});
		})


		//验证密码
		$("input:password").blur(function(){
			if($(this).val().length < 6 || $(this).val().length >20){
				alert("请输入6-20位的密码");
			}
		})

		//验证复选框(是否同意协议)
		$("input:checkbox").change(function(){
			if(!($(this).attr("checked") == "checked")){
				$("input:submit").attr("disabled",true);
			}
		})

		//验证点击提交后的信息
		$("input:submit").click(function(){
			if($("input:first").val() == ""){
				alert("电话号码不能为空！");
				return false;
			}
			if($("#code").val() == ""){
				return false;
			}
			if($("input:password").val() == ""){
				return false;
			}
		})
	</script>
</html>