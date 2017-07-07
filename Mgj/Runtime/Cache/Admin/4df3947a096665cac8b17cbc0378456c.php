<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>飞跃后台</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<!-- basic styles -->
		<link href="/lezhi/Public/Admin/assets/css/bootstrap.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="/lezhi/Public/Admin/assets/css/font-awesome.min.css" />

		<!--[if IE 7]>
		  <link rel="stylesheet" href="/lezhi/Public/admin/assets/css/font-awesome-ie7.min.css" />
		<![endif]-->

		<!-- page specific plugin styles -->

		<!-- fonts -->


		<!-- ace styles -->

		<link rel="stylesheet" href="/lezhi/Public/admin/assets/css/ace.min.css" />
		<link rel="stylesheet" href="/lezhi/Public/admin/assets/css/ace-rtl.min.css" />
		<link rel="stylesheet" href="/lezhi/Public/admin/assets/css/ace-skins.min.css" />

		<!--[if lte IE 8]>
		  <link rel="stylesheet" href="/lezhi/Public/admin/assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->

		<script src="/lezhi/Public/admin/assets/js/ace-extra.min.js"></script>

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

		<!--[if lt IE 9]>
		<script src="/lezhi/Public/admin/assets/js/html5shiv.js"></script>
		<script src="/lezhi/Public/admin/assets/js/respond.min.js"></script>
		<![endif]-->
	</head>

	<body class="skin-2">
		<?php echo W("Header/getHeader");?>

		<div class="main-container" id="main-container">
			<script type="text/javascript">
				try{ace.settings.check('main-container' , 'fixed')}catch(e){}
			</script>

			<div class="main-container-inner">
				<a class="menu-toggler" id="menu-toggler" href="#">
					<span class="menu-text"></span>
				</a>

				<div class="sidebar" id="sidebar">
					<script type="text/javascript">
						try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
					</script>

					<div class="sidebar-shortcuts" id="sidebar-shortcuts">
						<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
							<button class="btn btn-success">
								<span><a style="color: white" href="<?php echo U('Admin/Login/lyout');?>">退出</a></span>
							</button>

							<button class="btn btn-info">
								<i class="icon-pencil"></i>
							</button>

							<button class="btn btn-warning">
								<i class="icon-group"></i>
							</button>

							<button class="btn btn-danger">
								<i class="icon-cogs"></i>
							</button>
						</div>

						<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
							<span class="btn btn-success"></span>

							<span class="btn btn-info"></span>

							<span class="btn btn-warning"></span>

							<span class="btn btn-danger"></span>
						</div>
					</div><!-- #sidebar-shortcuts -->

					<ul class="nav nav-list">
						<li class="active">
							<a href="javascript:void (0);">
								<i class="icon-dashboard"></i>
								<span class="menu-text"> 控制台 </span>
							</a>
						</li>

						<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-user"></i>
								<span class="menu-text"> 用户管理 </span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu">
								<li>
									<a href="<?php echo U('Admin/User/index');?>">
										<i class="icon-double-angle-right"></i>
										用户列表
									</a>
								</li>
								<li>
									<a href="<?php echo U('Admin/User/add');?>">
										<i class="icon-double-angle-right"></i>
										用户添加
									</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-flickr"></i>
								<span class="menu-text"> 网站配置 </span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu">
								<li>
									<a href="<?php echo U('Admin/Config/index');?>">
										<i class="icon-double-angle-right"></i>
										网站配置信息
									</a>
								</li>
								<li>
									<a href="<?php echo U('Admin/Config/add');?>">
										<i class="icon-double-angle-right"></i>
										网站配置信息添加
									</a>
								</li>
								<li>
									<a href="<?php echo U('Admin/Config/webswitch');?>">
										<i class="icon-double-angle-right"></i>
										网站关闭
									</a>
								</li>
							</ul>
						</li>
						<?php
 $AUTH = new \Think\Auth(); if($AUTH->check('Admin/Rule/index', session('admin.id'))){ ?>
						<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-cog"></i>
								<span class="menu-text"> 权限管理 </span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu">
								<li>
									<a href="<?php echo U('Admin/Rule/index');?>">
										<i class="icon-double-angle-right"></i>
										规则列表
									</a>
								</li>
								<li>
									<a href="<?php echo U('Admin/Rule/add');?>">
										<i class="icon-double-angle-right"></i>
										规则添加
									</a>
								</li>
							</ul>
						</li>
						<?php
 } ?>
						<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-cogs"></i>
								<span class="menu-text"> 用户组管理 </span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu">
								<li>
									<a href="<?php echo U('Admin/Group/index');?>">
										<i class="icon-double-angle-right"></i>
										用户组列表
									</a>
								</li>
								<li>
									<a href="<?php echo U('Admin/Group/add');?>">
										<i class="icon-double-angle-right"></i>
										用户组添加
									</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-volume-down"></i>
								<span class="menu-text"> 首页管理 </span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu">
								<li>
									<a href="/lezhi/index.php/Admin/WebFirst/index.html">
										<i class="icon-double-angle-right"></i>
										首页轮播图
									</a>
								</li>
                                <li>
                                    <a href="/lezhi/index.php/Admin/WebFirst/add.html">
                                        <i class="icon-double-angle-right"></i>
                                        轮播图添加
                                    </a>
                                </li>
								<li>
									<a href="/lezhi/index.php/Admin/WebFirst/fenQu.html">
										<i class="icon-double-angle-right"></i>
										首页分区
									</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-building"></i>
								<span class="menu-text"> 商铺管理 </span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu">
								<li>
									<a href="<?php echo U('Admin/Shop/index');?>">
										<i class="icon-double-angle-right"></i>
										商铺列表
									</a>
								</li>

								<li>
									<a href="<?php echo U('Admin/Shop/add');?>">
										<i class="icon-double-angle-right"></i>
										商铺添加
									</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-inbox"></i>
								<span class="menu-text"> 商品管理 </span>

								<b class="arrow icon-angle-down"></b>
							</a>
							<ul class="submenu">
								<li>
									<a href="<?php echo U('Admin/Goods/index');?>">
										<i class="icon-double-angle-right"></i>
										商品列表
									</a>
								</li>

								<li>
									<a href="<?php echo U('Admin/Goods/add');?>">
										<i class="icon-double-angle-right"></i>
										商品添加
									</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-th-list"></i>
								<span class="menu-text"> 商品分类管理 </span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul id="test" class="submenu">
								<li>
									<a href="<?php echo U('Admin/Sort/index');?>" data="javascript:void (0);">
										<i class="icon-double-angle-right"></i>
										商品分类列表
									</a>
								</li>

								<li>
									<a href="<?php echo U('Admin/Sort/add');?>" href="javascript:void (0);">
										<i class="icon-double-angle-right"></i>
										添加商品分类
									</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-print"></i>
								<span class="menu-text"> 订单管理 </span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu">
								<li>
									<a href="<?php echo U('Admin/Order/index');?>">
										<i class="icon-double-angle-right"></i>
										订单列表
									</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-comment"></i>
								<span class="menu-text"> 评论管理 </span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu">
								<li>
									<a href="<?php echo U('Admin/Comment/index');?>">
										<i class="icon-double-angle-right"></i>
										评论列表
									</a>

								</li>
							</ul>
						</li>
						<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-th-list"></i>
								<span class="menu-text"> 商铺公告管理 </span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul id="test" class="submenu">
								<li>
									<a href="<?php echo U('Admin/Notice/index');?>" data="javascript:void (0);">
										<i class="icon-double-angle-right"></i>
										商铺公告列表
									</a>
								</li>
								<li>
									<a href="<?php echo U('Admin/Notice/add');?>" href="javascript:void (0);">
										<i class="icon-double-angle-right"></i>
										商铺公告添加
									</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-flickr"></i>
								<span class="menu-text"> 友情链接管理 </span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul id="test" class="submenu">
								<li>
									<a href="<?php echo U('Admin/Friend/index');?>">
										<i class="icon-double-angle-right"></i>
										友情链接展示
									</a>
									<a href="<?php echo U('Admin/Friend/add');?>">
										<i class="icon-double-angle-right"></i>
										友情链接添加
									</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-comment"></i>
								<span class="menu-text"> 回收站管理 </span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu">
								<li>
									<a href="<?php echo U('Admin/Trash/user');?>">
										<i class="icon-double-angle-<?php echo U('Admin/Sort/index');?>right"></i>
										会员回收列表
									</a>
									<a href="<?php echo U('Admin/Trash/shop');?>">
										<i class="icon-double-angle-<?php echo U('Admin/Sort/index');?>right"></i>
										商铺回收列表
									</a>
									<a href="<?php echo U('Admin/Trash/asort');?>">
										<i class="icon-double-angle-<?php echo U('Admin/Sort/index');?>right"></i>
										商品分类回收列表
									</a>
									<a href="<?php echo U('Admin/Trash/good');?>">
										<i class="icon-double-angle-<?php echo U('Admin/Sort/index');?>right"></i>
										商品回收列表
									</a>
								</li>
							</ul>
						</li>

					</ul><!-- /.nav-list -->

					<div class="sidebar-collapse" id="sidebar-collapse">
						<i class="icon-double-angle-left" data-icon1="icon-double-angle-left" data-icon2="icon-double-angle-right"></i>
					</div>

					<script type="text/javascript">
						try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
					</script>
				</div>

				
	<div class="main-content">
					<div class="breadcrumbs" id="breadcrumbs">
						<script type="text/javascript">
							try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
						</script>

						<ul class="breadcrumb">
							<li>
								<i class="icon-home home-icon"></i>
								<a href="#">主页</a>
							</li>

							<li>
								<a href="#">网站信息管理</a>
							</li>
							<li class="active">网站信息修改</li>
						</ul><!-- .breadcrumb -->

						<div class="nav-search" id="nav-search">
							<form class="form-search">
								<span class="input-icon">
									<input type="text" placeholder="Search ..." name="" class="nav-search-input" id="nav-search-input" autocomplete="off" />
									<input type="submit" class="btn btn-primary btn-xs" value="搜索" style="border-radius:3px; height:28px; margin-top:-4px; padding-right:24px;">
									<i class="icon-search nav-search-icon"></i>
								</span>
							</form>
						</div><!-- #nav-search -->
					</div>

					<div class="page-content">
						<div class="page-header">
							<h1>
								网站信息管理
								<small>
									<i class="icon-double-angle-right"></i>
									网站开关修改
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->

								<div class="row">
									<div class="col-xs-12">
										<div class="table-responsive">
											<form action="/lezhi/index.php/Admin/Config/webswitch" method="post">
											<table id="sample-table-1" class="table table-striped table-bordered table-hover">
												<tbody>
													<tr>
														<td style="text-align:right; width:30%">网站开关</td>
														<td><input type="radio" name="switch" value="0" <?php echo ($data[0]['switch'] == 0 ? 'checked' : ''); ?>>开　<input type="radio" name="switch" value="1" <?php echo ($data[0]['switch'] == 1 ? 'checked' : ''); ?>>关</td>
													</tr>
													<tr>
														<td colspan="2" style="padding-left:260px;"><input class="btn no-border btn-primary" type="submit" name="sub" value="修改网站状态"></td>
													</tr>
												</tbody>
											</table>
											<input type="hidden" name="id" value="<?php echo ($data[0]["id"]); ?>">
											</form>
										</div><!-- /.table-responsive -->
									</div><!-- /span -->
								</div><!-- /row -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div><!-- /.main-content -->


				<div class="ace-settings-container" id="ace-settings-container">
					<div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
						<i class="icon-cog bigger-150"></i>
					</div>

					<div class="ace-settings-box" id="ace-settings-box">
						<div>
							<div class="pull-left">
								<select id="skin-colorpicker" class="hide">
									<option data-skin="default" value="#438EB9">#438EB9</option>
									<option data-skin="skin-1" value="#222A2D">#222A2D</option>
									<option data-skin="skin-2" value="#C6487E">#C6487E</option>
									<option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
								</select>
							</div>
							<span>&nbsp; 选择皮肤</span>
						</div>

						<div>
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-navbar" />
							<label class="lbl" for="ace-settings-navbar"> 固定导航条</label>
						</div>

						<div>
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-sidebar" />
							<label class="lbl" for="ace-settings-sidebar"> 固定滑动条</label>
						</div>

						<div>
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-breadcrumbs" />
							<label class="lbl" for="ace-settings-breadcrumbs">固定面包屑</label>
						</div>

						<div>
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" />
							<label class="lbl" for="ace-settings-rtl">切换到左边</label>
						</div>

						<div>
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-add-container" />
							<label class="lbl" for="ace-settings-add-container">
								切换窄屏
								<b></b>
							</label>
						</div>
					</div>
				</div><!-- /#ace-settings-container -->
			</div><!-- /.main-container-inner -->

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="icon-double-angle-up icon-only bigger-110"></i>
			</a>
		</div>


        <script src='/lezhi/Public/admin/assets/js/jquery-2.0.3.min.js'></script>
        <script>
/*
            $('#test a').click(function () {
                var url = $(this).attr('data');
                $.ajax({
                    type: "GET",
                    url: url,
                    success: function(msg){
                        $('#main').empty().append(msg);
                    }
                });
            }); */

        </script>


		<script type="text/javascript">
			if("ontouchend" in document) document.write("<script src='/lezhi/Public/admin/assets/js/jquery.mobile.custom.min.js'>"+"<"+"script>");
		</script>
		<script src="/lezhi/Public/admin/assets/js/bootstrap.min.js"></script>
		<script src="/lezhi/Public/admin/assets/js/typeahead-bs2.min.js"></script>

		<!-- page specific plugin scripts -->

		<!--[if lte IE 8]>
		  <script src="/lezhi/Public/admin/assets/js/excanvas.min.js"></script>
		<![endif]-->

		<script src="/lezhi/Public/admin/assets/js/jquery-ui-1.10.3.custom.min.js"></script>
		<script src="/lezhi/Public/admin/assets/js/jquery.ui.touch-punch.min.js"></script>
		<script src="/lezhi/Public/admin/assets/js/jquery.slimscroll.min.js"></script>
		<script src="/lezhi/Public/admin/assets/js/jquery.easy-pie-chart.min.js"></script>
		<script src="/lezhi/Public/admin/assets/js/jquery.sparkline.min.js"></script>
		<script src="/lezhi/Public/admin/assets/js/flot/jquery.flot.min.js"></script>
		<script src="/lezhi/Public/admin/assets/js/flot/jquery.flot.pie.min.js"></script>
		<script src="/lezhi/Public/admin/assets/js/flot/jquery.flot.resize.min.js"></script>

		<!--&lt;!&ndash; ace scripts &ndash;&gt;-->

		<script src="/lezhi/Public/admin/assets/js/ace-elements.min.js"></script>
		<script src="/lezhi/Public/admin/assets/js/ace.min.js"></script>
		

		

		<script type="text/javascript">
			jQuery(function($) {
				$('.easy-pie-chart.percentage').each(function(){
					var $box = $(this).closest('.infobox');
					var barColor = $(this).data('color') || (!$box.hasClass('infobox-dark') ? $box.css('color') : 'rgba(255,255,255,0.95)');
					var trackColor = barColor == 'rgba(255,255,255,0.95)' ? 'rgba(255,255,255,0.25)' : '#E2E2E2';
					var size = parseInt($(this).data('size')) || 50;
					$(this).easyPieChart({
						barColor: barColor,
						trackColor: trackColor,
						scaleColor: false,
						lineCap: 'butt',
						lineWidth: parseInt(size/10),
						animate: /msie\s*(8|7|6)/.test(navigator.userAgent.toLowerCase()) ? false : 1000,
						size: size
					});
				})

				$('.sparkline').each(function(){
					var $box = $(this).closest('.infobox');
					var barColor = !$box.hasClass('infobox-dark') ? $box.css('color') : '#FFF';
					$(this).sparkline('html', {tagValuesAttribute:'data-values', type: 'bar', barColor: barColor , chartRangeMin:$(this).data('min') || 0} );
				});

			  var placeholder = $('#piechart-placeholder').css({'width':'90%' , 'min-height':'150px'});
			  var data = [
				{ label: "social networks",  data: 38.7, color: "#68BC31"},
				{ label: "search engines",  data: 24.5, color: "#2091CF"},
				{ label: "ad campaigns",  data: 8.2, color: "#AF4E96"},
				{ label: "direct traffic",  data: 18.6, color: "#DA5430"},
				{ label: "other",  data: 10, color: "#FEE074"}
			  ]
			  function drawPieChart(placeholder, data, position) {
			 	  $.plot(placeholder, data, {
					series: {
						pie: {
							show: true,
							tilt:0.8,
							highlight: {
								opacity: 0.25
							},
							stroke: {
								color: '#fff',
								width: 2
							},
							startAngle: 2
						}
					},
					legend: {
						show: true,
						position: position || "ne",
						labelBoxBorderColor: null,
						margin:[-30,15]
					}
					,
					grid: {
						hoverable: true,
						clickable: true
					}
				 })
			 }
			 drawPieChart(placeholder, data);

			 /**
			 we saved the drawing function and the data to redraw with different position later when switching to RTL mode dynamically
			 so that's not needed actually.
			 */
			 placeholder.data('chart', data);
			 placeholder.data('draw', drawPieChart);



			  var $tooltip = $("<div class='tooltip top in'><div class='tooltip-inner'></div></div>").hide().appendTo('body');
			  var previousPoint = null;

			  placeholder.on('plothover', function (event, pos, item) {
				if(item) {
					if (previousPoint != item.seriesIndex) {
						previousPoint = item.seriesIndex;
						var tip = item.series['label'] + " : " + item.series['percent']+'%';
						$tooltip.show().children(0).text(tip);
					}
					$tooltip.css({top:pos.pageY + 10, left:pos.pageX + 10});
				} else {
					$tooltip.hide();
					previousPoint = null;
				}

			 });
				var d1 = [];
				for (var i = 0; i < Math.PI * 2; i += 0.5) {
					d1.push([i, Math.sin(i)]);
				}

				var d2 = [];
				for (var i = 0; i < Math.PI * 2; i += 0.5) {
					d2.push([i, Math.cos(i)]);
				}

				var d3 = [];
				for (var i = 0; i < Math.PI * 2; i += 0.2) {
					d3.push([i, Math.tan(i)]);
				}


				var sales_charts = $('#sales-charts').css({'width':'100%' , 'height':'220px'});
				$.plot("#sales-charts", [
					{ label: "Domains", data: d1 },
					{ label: "Hosting", data: d2 },
					{ label: "Services", data: d3 }
				], {
					hoverable: true,
					shadowSize: 0,
					series: {
						lines: { show: true },
						points: { show: true }
					},
					xaxis: {
						tickLength: 0
					},
					yaxis: {
						ticks: 10,
						min: -2,
						max: 2,
						tickDecimals: 3
					},
					grid: {
						backgroundColor: { colors: [ "#fff", "#fff" ] },
						borderWidth: 1,
						borderColor:'#555'
					}
				});


				$('#recent-box [data-rel="tooltip"]').tooltip({placement: tooltip_placement});
				function tooltip_placement(context, source) {
					var $source = $(source);
					var $parent = $source.closest('.tab-content')
					var off1 = $parent.offset();
					var w1 = $parent.width();

					var off2 = $source.offset();
					var w2 = $source.width();

					if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
					return 'left';
				}


				$('.dialogs,.comments').slimScroll({
					height: '300px'
			    });


				//Android's default browser somehow is confused when tapping on label which will lead to dragging the task
				//so disable dragging when clicking on label
				var agent = navigator.userAgent.toLowerCase();
				if("ontouchstart" in document && /applewebkit/.test(agent) && /android/.test(agent))
				  $('#tasks').on('touchstart', function(e){
					var li = $(e.target).closest('#tasks li');
					if(li.length == 0)return;
					var label = li.find('label.inline').get(0);
					if(label == e.target || $.contains(label, e.target)) e.stopImmediatePropagation() ;
				});

				$('#tasks').sortable({
					opacity:0.8,
					revert:true,
					forceHelperSize:true,
					placeholder: 'draggable-placeholder',
					forcePlaceholderSize:true,
					tolerance:'pointer',
					stop: function( event, ui ) {
						$(ui.item).css('z-index', 'auto');
					}
					}
				);
				$('#tasks').disableSelection();
				$('#tasks input:checkbox').removeAttr('checked').on('click', function(){
					if(this.checked) $(this).closest('li').addClass('selected');
					else $(this).closest('li').removeClass('selected');
				});
			})
		</script>
	</body>
</html>