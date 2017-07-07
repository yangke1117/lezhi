<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">

    <title><?php echo ($ginfo[title]); ?></title>

	<link rel="icon" href="/Public/Home/images/favicon32.ico" type="image/x-icon"/>
    <meta name="copyright" content="<?php echo ($config['content']); ?>"/>
    <link rel="stylesheet" href="/Public/Home/css/bootstrap.min.css">
    <link rel="stylesheet" href="/Public/Home/css/css.css">
    
    <link rel="stylesheet" href="/Public/Home/css/css1.css">
    <link rel="stylesheet" href="/Public/Home/css/sort.css">
    <style type="text/css">
        #pages a, #pages span {
            background-color: #fff;
            border: 1px solid #ddd;
            color: #337ab7;
            float: left;
            line-height: 1.42857;
            margin-left: -1px;
            padding: 6px 12px;
            position: relative;
            text-decoration: none;

        }

        #pages span {
            background-color: #337ab7;
            border-color: #337ab7;
            color: #fff;
            cursor: pointer;
            z-index: 2;
        }
    </style>

</head>
<body>

<!-- 头部-->

    <div id="header" class="header_2015">
        <div class="wrap clearfix">
            <a href="<?php echo U('Home/Index/index');?>" class="home fl">蘑菇街首页</a>
            <ul class="header_top" style="width:550px">
                <?php if(empty($_SESSION['home'])): ?><li class="s1 show-nologin has_line"><a rel="nofollow" href="<?php echo U('Home/User/register');?>">注册</a></li>
                <li class="s1 show-nologin has_line"><a rel="nofollow" href="<?php echo U('Home/User/login');?>" style="padding-left:10px;">登录</a></li>
                <?php else: ?>
                <li class="s1 show-nologin has_line"><a rel="nofollow" href="<?php echo U('Home/Userinfo/userinfo');?>" style="color:red">您好：<?php echo ($ud['nickname']); ?></a></li>
                <li class="s1 show-nologin has_line logut"><a rel="nofollow" href="javascript:;">注销</a></li><?php endif; ?>
                <li class="s1 has_line "><a href="" target="_blank" class="text display_u" ref="nofollow" style="padding-left:10px;">我的订单</a></li>
                <li class="s1 has_line has_icon custom_item cas">
                    <a rel="nofollow" href="<?php echo U('Home/Collect/index');?>" style="padding-left:10px;" target="_blank">我的收藏</a>
                    <i class="icon_delta"></i>
                    <ol class="ext_mode ccc" style="display:none;">
                        <li class="s2"><a target="_blank" rel="nofollow" href="/index.php/Home/Collect/index/state/2">收藏的小店</a></li>
                        <li class="s2"><a rel="nofollow" href="/index.php/Home/Collect/index/state/1" target="_blank">喜欢的商品</a></li>
                        <li class="s2"><a rel="nofollow" href="/index.php/Home/Collect/index/state/3" target="_blank">浏览足迹</a></li>

                    </ol>
                </li>
                <li class="s1 has_line has_icon custom_item">
                    <a rel="nofollow" href="" style="padding-left:10px;" target="_blank">客户服务</a>
                    <i class="icon_delta"></i>
                    <ol class="ext_mode" style="display:none;">
                        <li class="s2"><a target="_blank" rel="nofollow" href="">联系合作</a></li>
                        <li class="s2"><a rel="nofollow" href="" target="_blank">帮助</a></li>
                    </ol>
                </li>
                <li class="s1 has_line myxiaodian"><a href="<?php echo U('Home/Sort/control');?>" ref="nofollow" target="_blank" class="text display_u">我的小店</a>
            </li>
            </ul>
        </div>
    </div>


    <div class="shop-header">
        <div class="header clearfix">
            <div class="user-info fl">
                <a href="" class="avatar" title="<?php echo ($shops[0][shopname]); ?>"><img class="face fl" src="/<?php echo ($shops[0][userpic]); ?>"></a>
                <div class="shop-name fl">
                    <div class="name-wrap clearfix">
                        <a href="" class="name fl" title="<?php echo ($shops[0][shopname]); ?>" data-ptp-idx="16"><?php echo ($shops[0][shopname]); ?></a>
                    </div>
                        <!-- 评分信息 -->
                    <div class="shop-score" id="d_shop-score">
                        <p>
                            <span class="s-cat">描述<b>4.64</b></span>
                            <span class="s-cat">质量<b>4.64</b></span>
                            <span class="s-cat">价格<b>4.64</b></span>
                            <span class="s-cat">服务<b>4.60</b></span>
                        </p>
                                <!-- 下拉列表 -->
                        <div class="shop-info" style="display:none;">
                            <div class="shop-info-content clearfix">
                                <div class="info-box fl">
                                    <ol class="li li3">
                                        <li><span class="tag">所在地区：</span><?php echo ($shops[0]['area']); ?></li>
                                        <li><span class="tag">商品数：</span><?php echo ($con); ?></li>
                                        <li><span class="tag">收藏数：</span>30725</li>
                                        <li><span class="tag">销售量：</span>12.5 万</li>
                                        <li><span class="tag">创建时间：</span><?php echo date('Y-m-d',$shops[0]['shoptime']);?></li>
                                        <li><span class="tag">店铺保证金：</span>已缴纳</li>
                                        <li class="tc mt10"><a class="go-detail" href="" target="_blank" rel="nofollow" data-ptp-idx="17">查看详情</a></li>
                                    </ol>
                                </div>
                                <ol class="li li1">
                                    <li class="title">动态评分</li>
                                    <li>描述相符：<span class="num">4.64</span></li>
                                    <li>质量满意：<span class="num">4.64</span></li>
                                    <li>价格合理：<span class="num">4.64</span></li>
                                    <li>服务周到：<span class="num">4.6</span></li>
                                </ol>
                                <ol class="li li2">
                                    <li class="title">比同行平均</li>
                                    <li><span class="tag up">高</span><span class="num">3.34%</span></li>
                                    <li><span class="tag up">高</span><span class="num">3.34%</span></li>
                                    <li><span class="tag up">高</span><span class="num">3.34%</span></li>
                                    <li><span class="tag up">高</span><span class="num">0.66%</span></li>
                                </ol>
                                <ol class="li li4">
                                    <li class="title"> 本店 </li>
                                    <li>平均发货时间：<span class="num">1.06</span>天</li>
                                    <li>退货率：<span class="low">11.05</span>%</li>
                                    <li>有效投诉率：<span class="low">0.22</span>%</li>
                                </ol>
                                <ol class="li li5">
                                    <li class="title"> 行业 </li>
                                    <li>1.09 天</li>
                                    <li>6.77 %</li>
                                    <li>0.07 %</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="shop-action fl">
                    <div class="shop-flow fl ">
                        <?php if($c[0]['state'] == 2): ?><a class="J-shop-follow shop-follow fl shop-followed" rel="nofollow" href="javascript:;" data-shopid="14ryk">已收藏</a>
                        <?php else: ?>
                            <a class="J-shop-follow shop-follow header-icons " rel="nofollow" href="javascript:;">收藏</a><?php endif; ?>
                    </div>
                    <a href="javascript:;" class="chart fl clearfix" data-ptp-idx="19">
                        <div class="mogutalk_widget_btn kefu fl">
                            <iframe src="/Public/Home/image/sl.gif" width="48" height="20" frameborder="0" scrolling="no" marginheight="0" allowtransparency="true"></iframe>
                        </div>
                    </a>
                </div>

                <div class="line-right fr"></div>
            </div>
            <div class="shop-search">
                <div id="nav_search_form" id="top_nav_search">
                    <form action="" target="_blank" method="get" id="top_nav_form">
                        <div class="text-wrap clearfix">
                            <input type="text" id="J_SearchKey" class="text ts_txt" autocomplete="off" name="q" placeholder="输入你想要的商品">
                            <a href="javascript:;" id="J_SearchInShop" class="search-inshop">搜本店</a>
                            <input type="submit" class="submit-btn" value="搜全站">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>



</div>
<!-- 头部 logo  搜索-->









    <div class="ovbox mod_topBanner">
        <div class="mod_list clearfix">
            <div class="mod_item w1200">
                <div class="mod_cont topbanner">
                    <a class="shop_bg_img" href="" style="background: url(<?php echo ($shopo[0][shoplogo]); ?>) center no-repeat"></a>
                </div>
            </div>
        </div>
    </div>
    <div class="ovbox mod_topNav blackStyle">
        <div class="mod_list clearfix">
            <div class="mod_item">
                <div class="mod_cont topNav">
                    <ol class="clearfix">
                        <li><a href="/index.php/Home/Sorts/index/uid/<?php echo ($shopo[0]['uid']); ?>">首页</a></li>
                        <li class="all"><a href="/index.php/Home/Sorts/index/uid/<?php echo ($shopo[0]['uid']); ?>" class="al">全部商品</a>
                        <dl style="display:none">
                                <?php if(is_array($shopo)): foreach($shopo as $key=>$vo): ?><dd><a href="<?php echo ($vo["url"]); ?>"><?php echo ($vo["aname"]); ?></a></dd><?php endforeach; endif; ?>
                            </dl>

                        </li>
                        <?php if(is_array($shopo)): foreach($shopo as $key=>$v): ?><li><a href="<?php echo ($v["url"]); ?>"><?php echo ($v["aname"]); ?></a></li><?php endforeach; endif; ?>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="container creat-margin-2">
        <div class="row">
            <div class="col-xs-4">
                <div class="row">
                    <div class="item-pic-origin" style="max-height:550px;">
                        <img width="400" id="dtp" class="j-big-pic twitter_pic" src="<?php echo ($goodPic[0][ goodspic]); ?>">
                    </div>
                    <!--<div id="fdj" class="fdj">-->
                        <!--<img src="<?php echo ($ginfo["goodpic"]); ?>">-->
                    <!--</div>-->
                </div>
                <div class="row">
                    <div id="js-pic-thumb" class="item-pic-thumb">
                        <?php if(is_array($goodPic)): foreach($goodPic as $key=>$vo): ?><span class="active"><img width="68" height="68" src="<?php echo ($vo['goodspic']); ?>"></span><?php endforeach; endif; ?>
                    </div>
                </div>
            </div>
            <div class="col-xs-7 col-xs-offset-1">
                <div class="item-sale">
                    <h1 class="goods-title"><span itemprop="name"><?php echo ($ginfo["goodname"]); ?></span></h1>
                    <div class="goods-price goods-pro normal act">
                        <dl class="clearfix price-info">
                            <dt class="price-origin">原价：</dt>
                            <dd class="price-w"><span>¥</span><span id="J_Price"><?php echo ($ginfo["nowprice"]); ?></span></dd>
                        </dl>
                        <dl class="clearfix" style="padding-bottom:0;height:40px;">
                            <dt style="line-height:45px;">现价：</dt>
                            <dd>
                                <span class="normal-price-now">¥ </span>
                                <span id="J_NowPrice" class="normal-price-now" itemprop="price"><?php echo ($skus); ?></span>
                                <span class="fr normal-rate-sales" style="padding-top:15px;">
                                    <span class="rate-num">评价：<span class="num">9</span></span>
                                    <span>累计销量：<span class="num J_SaleNum">106</span></span>
                                </span>
                            </dd>
                        </dl>
                    </div>
                    <ul class="sku_meta"></ul>
                    <div class="sku_info">
                        <div class="skin">
                            <?php if(is_array($attr)): foreach($attr as $key=>$vo): ?><dl data="<?php echo ($key); ?>">
                                    <dt><?php echo ($vo["attrname"]); ?></dt>
                                    <dd>
                                        <ul class="item-size-types">
                                            <?php if(is_array($vo["value"])): foreach($vo["value"] as $key=>$v): ?><li>
                                                    <button type="button" attr-n="<?php echo ($vo["id"]); ?>" attr-v="<?php echo ($v["id"]); ?>" class="btn btn-default"><?php echo ($v["value"]); ?></button>
                                                </li><?php endforeach; endif; ?>
                                        </ul>
                                    </dd>
                                </dl><?php endforeach; endif; ?>
                        </div>
                        <div>
                            <dl class="amout">
                                <dt>数 量</dt>
                                <dd>
                                    <div class="item-stock js-stock">
                                        <div id="item-stock-num">1</div>
                                    <span class="item-stock-btns">
                                        <span id="numUp" class="item-stock-plus js-stock-plus"><i class="icon-up"></i></span>
                                        <span id="numDown" class="item-stock-minus js-stock-minus"><i class="icon-down"></i></span>
                                    </span>
                                        <span id="item-stock-reserve" class="item-stock-reserve js-stock-reserve">(库存&nbsp;<span><?php echo ($ginfo["stock"]); ?></span>&nbsp;件)</span>
                                    </div>
                                </dd>
                            </dl>
                            <dl class="mt10_f">
                                <dt>客服</dt>
                                <dd><a class="goqq knilmi" href=""><em class="qqico">&nbsp;</em>联系客服</a></dd>
                            </dl>
                        </div>
                        <div class="goods-social clearfix">
                            <dl>
                                <dt>收藏</dt>
                                <dd>
                                    <div class="fav item" goodsid="0" tradeitemid="182eop0" tid="0">
                                        <b></b><span class="fav-num" ><?php echo ($ginfo["collect"]); ?></span>
                                    </div>
                                </dd>
                            </dl>
                        </div>
                        <div class="row text-center creat-margin-2">
                            <div class="col-xs-3 col-xs-offset-1">

                                <button type="button" gid="<?php echo ($_GET['id']); ?>" data="<?php echo U('Home/Cart/addCart');?>" disabled id="toCart" data-loading-text="已加入购物车" class="btn btn-danger">加入购物车</button>
                            </div>
                            <div class="col-xs-2">
                                <button type="button" class="btn btn-danger">
                                    立即购买
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container detail-content">
        <div class="row">
            <div class="width-18">
                <div class="col-sidebar">
                    <div class="module-shop" id="J_ModuleShop">
                        <!-- 店铺信息 -->
                        <div class="ui-box shop-infoo">
                            <h3 class="ui-hd shop-hd ui-fixed">
                                <div class="shop-name">
                                    <a class="text text-hasim" href="">小四专注时尚潮流款
                                        <div class="mogutalk_widget_btn kefu">
                                            <iframe src="/Public/Home/image/sll.gif" width="16" height="17" frameborder="0" scrolling="no" marginheight="0" allowtransparency="true"></iframe>
                                        </div>
                                    </a>
                                </div>
                            </h3>
                            <div class="shop-occupying"></div>
                            <div class="ui-bd">
                                <div class="shop-evaluate">
                                    <ul>
                                        <li>
                                            <p class="text">描述</p>
                                            <p class="num-def ">4.64</p>
                                        </li>
                                        <li>
                                            <p class="text">质量</p>
                                            <p class="num-def ">4.60</p>
                                        </li>
                                        <li>
                                            <p class="text">价格</p>
                                            <p class="num-def ">4.60</p>
                                        </li>
                                        <li>
                                            <p class="text">服务</p>
                                            <p class="num-def ">4.62</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="shop-btns">
                                <?php if($c[0]['state'] == 2): ?><a rel="nofollow" class="J-shop-follow shop-follow btn-fav" href="javascript:;" id="" data-shopid="1nw1cw">
                                        已收藏
                                </a>

                                <?php else: ?>
                                    <a rel="nofollow" class="J-shop-follow shop-follow btn-fav" href="javascript:;" id="" data-shopid="1nw1cw">
                                        收藏店铺
                                    </a><?php endif; ?>
                                </div>
                                <div class="shop-btn">
                                    <a class="btn-goto" href="/index.php/Home/Sorts/index/uid/<?php echo ($shopo[0]['uid']); ?>">进入店铺</a>
                                </div>

                                <!-- 提供 -->
                                <div class="shop-provide">
                                    <i class="line"></i>
                                    <i class="arrow"></i>
                                    <a class="pic" href="javascript:;">
                                        <img class="img-lazyload" width="150" height="26" src="/Public/Home/image/ben.png">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="module-classify" id="J_ModuleClassify">
                        <!-- 分类信息 -->
                        <div class="ui-box classify-info">
                            <h3 class="ui-hd">本店分类</h3>
                            <div class="ui-bd">

                                <!-- 列表 -->
                                <ul class="classify-list">
                                    <li>
                                        <a href="/index.php/Home/Sorts/index/uid/<?php echo ($shopo[0]['uid']); ?>">全部商品</a>
                                    </li>
                                    <?php if(is_array($shopo)): foreach($shopo as $key=>$vo): ?><li>
                                            <a href="<?php echo ($vo["url"]); ?>"><?php echo ($vo["aname"]); ?></a>
                                        </li><?php endforeach; endif; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="width-63">
                <div class="col-main">
                    <div class="module-tabpanel" >

                            <div class="tabbar-box">
                                <ul class="tabbar-list clearfix">
                                    <li index="details" class="tab-graphic selected">
                                        <a href="javascript:;">商品详情</a>
                                    </li>
                                    <li index="comment">
                                        <a href="javascript:;">累计评价<em><?php echo ($commentNum); ?></em></a>
                                    </li>
                                    <li index="2">
                                        <a href="javascript:;">本店同类商品</a>
                                    </li>
                                </ul>
                            </div>
                        <div>
                            <div id="details" class="panel-box">
                                <div class="module-panel module-graphic">
                                    <div id="J_Graphic_item_desc">
                                        <div class="panel-title">
                                            <h1>商品描述</h1>
                                        </div>
                                        <div class="graphic-block">
                                            <!-- 描述 -->
                                            <div class="graphic-text"><?php echo ($arg[0]['describe']); ?></div>
                                        </div>
                                    </div>
                                    <div id="J_Graphic_product_info">
                                        <div class="panel-title">
                                            <h1>产品参数</h1>
                                        </div>
                                        <!-- 产品参数 -->
                                        <div class="graphic-block">
                                            <table class="parameter-table" id="J_ParameterTable">
                                                <tbody>
                                                <tr class="">
                                                    <?php if(!empty($arg[0]['num1'])){echo "<td>".$arg[0]['num1']."</td>";}else{ echo '';}?>
                                                    <?php if(!empty($arg[0]['num2'])){echo "<td>".$arg[0][num2]."</td>";}else{ echo '';}?>
                                                    <?php if(!empty($arg[0]['num3'])){echo "<td>".$arg[0][num3]."</td>";}else{ echo '';}?>
                                                </tr>
                                                <tr class="">
                                                    <?php if(!empty($arg[0]['num4'])){echo "<td>".$arg[0][num4]."</td>";}else{ echo '';}?>
                                                    <?php if(!empty($arg[0]['num5'])){echo "<td>".$arg[0][num5]."</td>";}else{ echo '';}?>
                                                    <?php if(!empty($arg[0]['num6'])){echo "<td>".$arg[0][num6]."</td>";}else{ echo '';}?>
                                                </tr>
                                                <tr class="">
                                                    <?php if(!empty($arg[0]['num7'])){echo "<td>".$arg[0][num7]."</td>";}else{ echo '';}?>
                                                    <?php if(!empty($arg[0]['num8'])){echo "<td>".$arg[0][num8]."</td>";}else{ echo '';}?>
                                                    <?php if(!empty($arg[0]['num9'])){echo "<td>".$arg[0][num9]."</td>";}else{ echo '';}?>
                                                </tr>
                                                <tr class="">
                                                    <?php if(!empty($arg[0]['num10'])){echo "<td>".$arg[0][num10]."</td>";}else{ echo '';}?>
                                                    <?php if(!empty($arg[0]['num11'])){echo "<td>".$arg[0][num11]."</td>";}else{ echo '';}?>
                                                    <?php if(!empty($arg[0]['num12'])){echo "<td>".$arg[0][num12]."</td>";}else{ echo '';}?>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div id="J_Graphic_model_img">
                                        <div class="panel-title">
                                            <h1>穿着效果</h1>
                                        </div>
                                        <div class="graphic-block">
                                            <?php if(is_array($arg)): foreach($arg as $key=>$v): ?><img class="img-lazyload img-responsive" src="<?php echo ($v['dresspic']); ?>" /><?php endforeach; endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-box hidden" id="comment">
                                <div class="module-panel module-graphic">
                                    <div style="padding: 0 15px">
                                        <div class="row">
                                            <div class="panel-title">
                                                <h1>买家评价</h1>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <!-- 描述 -->
                                            <div class="col-xs-12">
                                                <div class="panel panel-default" style="border-radius: 0; background: #FAFAFA;">
                                                    <div class="panel-body">
                                                        <div>
                                                            <span class="glyphicon glyphicon-star font-16"></span>
                                                            <span class="glyphicon glyphicon-star font-16"></span>
                                                            <span class="glyphicon glyphicon-star font-16"></span>
                                                            <span class="glyphicon glyphicon-star font-16"></span>
                                                            <span class="font-24" style="color: #ef2f23;margin-left: 10px">4分</span>
                                                        </div>
                                                        <ul class="grade">
                                                            <li class="width-2">质量很好 (20)</li>
                                                            <li class="width-2">款式好 (17)</li>
                                                            <li class="width-2">料子很不错 (10)</li>
                                                            <li class="width-2">性价比高 (4)</li>
                                                            <li class="width-2">和描述的一样 (3)</li>
                                                            <li class="width-2">有点薄 (3)</li>
                                                            <li class="width-2">水货(0)</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- 评论内容 -->
                                        <div class="row" id="comments">
                                            <div class="col-xs-12 clear-padding">
                                                <div class="panel panel-default" style="border: 0">
                                                    <div class="panel-body">
                                                        <a href="javascript:void(0);">
                                                            <b>全部评论(<?php echo ($commentNum); ?>)</b>
                                                        </a>
                                                    </div>

                                                    <!-- List group -->
                                                    <ul class="list-group">
                                                        <?php if(is_array($comment)): foreach($comment as $key=>$vo): if(is_numeric($key)): ?><li class="list-group-item" style="min-height: 100px;">
                                                                    <div class="media">
                                                                        <a class="pull-left" href="#">
                                                                            <img class="media-object img-circle" data-src="holder.js/64x64" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAABkElEQVR4Xu2YMY6EMAxFEwlKahp6qLn/GajhCDQ0lCCxSlZZZS1ARGSYSLypYCay459vPwY9TdOmXvzRCIADaAFmwItnoGIIQgEoAAWgABR4sQJgEAyCQTAIBl8MAf4MgUEwCAbBIBgEgy9WAAzGwOA8z6rrOrUsi/VSnueqbVtVFIW9d7+ba/97abxYcUIMfdsBfnFN06i+721+V6hflBTG32isOCHFm7VRBZCn64oqy1KN4/hPmKPT33NJSJyvCeDs77eAuTat4QtQ17UahsG2S1VVVhhznWWZ3fu6rn81OMfsxTlrpRARojvAbXbbfh8vtNZKtsaZMM4BV+K4GRNSsFz7MQFMIv+0XWJ5qrLgvfuzOHdF+KgAchDK4vZa40gQU+hVmoQ44rYAJtlVfMle92eAcYY86SOcmjhnRHlcgJCEqa2N4oDUigrZDwLEeBQOUTy1tTgAB/BOkHeCvBNMbTI/uR8oAAWgABSAAk9O3dRyQQEoAAWgABRIbTI/uR8oAAWgABSAAk9O3dRy/QDwoQCf5JU+PwAAAABJRU5ErkJggg==" style="width: 50px; height: 50px;">
                                                                        </a>
                                                                        <div class="media-body">
                                                                            <span class="media-heading font-16">用户名<?php echo ($vo["userid"]); ?></span>
                                                                            <span class="pull-right"><?php echo ($vo["ctime"]); ?></span>
                                                                            <br>
                                                                            <?php echo ($vo["content"]); ?>
                                                                        </div>
                                                                    </div>
                                                                </li><?php endif; endforeach; endif; ?>
                                                    </ul>
                                                </div>
                                                <div id="pages" class="col-xs-6 col-xs-offset-3">
                                                    <?php echo ($comment["page"]); ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="width-18">
                <div class="panel panel-default" style="border-radius: 0;">

                    <div class="font-20 text-center" style="border-bottom: 1px solid #E5E5E5;height: 58px;line-height: 58px">
                        <span class="glyphicon glyphicon-shopping-cart"></span>
                        加入购物车
                    </div>

                    <div class="panel-body clear-padding">
                        <ul class="list-group text-center">
                            <li class="list-group-item font-14">
                                <span class="glyphicon glyphicon-hand-right"></span>
                                <a href="javascript:;">商品描述</a>
                            </li>
                            <li class="list-group-item font-14">
                                <span class="glyphicon glyphicon-hand-right"></span>
                                <a href="javascript:;">产品参数</a>
                            </li>
                            <li class="list-group-item font-14">
                                <span class="glyphicon glyphicon-hand-right"></span>
                                <a href="javascript:;">穿着效果</a>
                            </li>
                            <li class="list-group-item font-14">
                                <span class="glyphicon glyphicon-hand-right"></span>
                                <a href="javascript:;">细节做工</a>
                            </li>
                            <li class="list-group-item font-14">
                                <span class="glyphicon glyphicon-hand-right"></span>
                                <a href="javascript:;">尺码说明</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>



<!--页脚-->
<div class="container-fluid footer">
    <div class="row">
        <div class="container">
            <div class="row">
                <div class="col-xs-3">
                    <div class="f_list service_info">
                        <div class="kefu">
                            <span class="tel_ico"></span>

                            <p class="f20_f">4000-800-577</p>

                            <p class="f14_f mt4_f">蘑菇街客服热线</p>
                        </div>
                        <ol class="business">
                            <li style="width:186px">周一至周日：08:00-24:00</li>
                        </ol>
                    </div>
                </div>
                <div class="col-xs-1 clear_padding">
                    <div class="f_list">
                        <h4>买家帮助</h4>
                        <ul>
                            <li><a href="#">新手指南</a></li>
                            <li><a href="#">服务保障</a></li>
                            <li><a href="#">帮助中心</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xs-1 clear_padding">
                    <div class="f_list">
                        <h4>关于我们</h4>
                        <ul>
                            <li><a href="#">关于蘑菇街</a></li>
                            <li><a href="#">联系我们</a></li>
                            <li><a href="#">加入蘑菇街</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xs-1 clear_padding">
                    <div class="f_list">
                        <h4>商家帮助</h4>
                        <ul>
                            <li><a href="#">商家入驻</a></li>
                            <li><a href="#">商家推广</a></li>
                            <li><a href="#">帮助中心</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xs-1 clear_padding">
                    <div class="f_list">
                        <h4>关注我们</h4>
                        <ul>
                            <li><a href="#"><span class="i_sina">&nbsp;</span>新浪微博</a></li>
                            <li><a href="#"><span class="i_qzone">&nbsp;</span>QQ空间</a></li>
                            <li><a href=#""><span class="i_tx">&nbsp;</span>腾讯微博</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xs-2 clear_padding">
                    <div class="f_list qr-code pull-right">
                        <h4>蘑菇街微信服务号</h4>
                        <img src="/Public/Home/images/ma.jpg" alt="蘑菇街服务号二维码">
                    </div>
                </div>
                <div class="col-xs-2 clear_padding">
                    <div class="f_list weixin_code pull-right">
                        <h4>蘑菇街客服端下载</h4>
                        <a class="client_pic" href="#"></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-8 col-xs-offset-1 rolling" align="center">
                        <ul>
                            <li>友情链接：</li>
                            <?php if(is_array($flink)): foreach($flink as $key=>$vo): ?><li><a href="<?php echo ($vo['url']); ?>" alt="<?php echo ($vo['content']); ?>"><?php echo ($vo['linkname']); ?></a></li><?php endforeach; endif; ?>
                        </ul>
                    </div>
                    <div class="col-xs-2 link_more">
                        <a href="">更多>></a>
                    </div>
                </div>
                <div class="row">
                    <div class="record" align="center">
                        Copyright <?php echo ($config['copyright']); ?> &nbsp; <a
                            href="http://i.meilishuo.net/css/images/about/licenseIPC.jpg"
                            target="_blank">电信与信息服务许可证&nbsp;<?php echo ($config['allow']); ?></a>&nbsp; <a
                            href="http://d03.res.meilishuo.net/pic/_o/e1/80/4f22feee45bb9d0a92e7a950f9c5_1131_1600.cg.jpg"
                            target="_blank">经营性网站备案信息</a>&nbsp; <?php echo ($config['number']); ?>&nbsp;
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <?php echo W('Cate/indexCart');?>





<script src="/Public/Home/js/jquery-1.11.3.min.js"></script>
<script src="/Public/Home/js/bootstrap.min.js"></script>
<script src="/Public/Home/js/move.js"></script>
<script src="/Public/Home/js/indexs.js"></script>

<script type="text/javascript" src="/Public/Home/js/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="/Public/Home/js/sort.js"></script>
    <script>
        var logut = "<?php echo U('Home/Sorts/loginOut');?>";
        var url = '<?php echo U("Home/Detail/ajaxStock", array("id"=>I("get.id")));?>';
    </script>
    <script src="/Public/Home/js/details.js"></script>
    <script type="text/javascript">
        //收藏商品
        $(".fav").click(function(){
            var uid = "<?php echo ($_SESSION['home']['id']); ?>";
             var fav = $(this);
             var url = location.href;
            if(uid){
                var id="<?php echo ($ginfo["id"]); ?>";
                $.ajax({
                    url:"<?php echo U('Home/Detail/shoucang');?>",  //请求地址
                    type:"post",        //请求方式
                    data:{id:id,url:url},//发送数据
                    async:true,
                    dataType:"json",    //响应数据格式
                    success:function(data){ //成功回调函数
                        if(data==1){
                            fav.css('border-color', '#ef2f23');
                            var col = fav.find(".fav-num").html();
                            col = parseInt(col)+1;
                            fav.find(".fav-num").html(col);
                        }else{
                            fav.css('border-color', '#E4E4E4');
                            var col = fav.find(".fav-num").html();
                            col = parseInt(col)-1;
                            fav.find(".fav-num").html(col);
                        }
                    },
                    error:function(){   //失败回调函数
                        alert("ajax请求失败!");
                    }
                });
            }else{
                location.href="<?php echo U('Home/User/login');?>"
            }
        });

        //收藏店铺
        $('.shop-flow').click(function(){
             var uid = "<?php echo ($_SESSION['home']['id']); ?>";
             var fav = $(this);
             if(uid){
                var id="<?php echo ($shopo["0"]["shopid"]); ?>";
                $.ajax({
                    url:"<?php echo U('Home/Detail/shou');?>",  //请求地址
                    type:"post",        //请求方式
                    data:{id:id},//发送数据
                    async:true,
                    dataType:"json",    //响应数据格式
                    success:function(data){ //成功回调函数
                        if(data==1){
                            fav.html('<a class="J-shop-follow shop-follow fl shop-followed" rel="nofollow" href="javascript:;" data-shopid="14ryk">已收藏</a>');
                        }else{
                            fav.html('<a class="J-shop-follow shop-follow header-icons fl " rel="nofollow" href="javascript:;">收藏</a>');
                        }
                    },
                    error:function(){
                        alert("ajax请求失败!");
                    }
                });
            }else{
                location.href="<?php echo U('Home/User/login');?>"
            }
        });

        $('.shop-btns').click(function(){
             var uid = "<?php echo ($_SESSION['home']['id']); ?>";
             var fav = $(this);
             if(uid){
                var id="<?php echo ($shopo["0"]["shopid"]); ?>";
                $.ajax({
                    url:"<?php echo U('Home/Detail/shou');?>",  //请求地址
                    type:"post",        //请求方式
                    data:{id:id},//发送数据
                    async:true,
                    dataType:"json",    //响应数据格式
                    success:function(data){ //成功回调函数
                        if(data==1){
                            fav.html('<a rel="nofollow" class="J-shop-follow shop-follow btn-fav" href="javascript:;" id="" data-shopid="1nw1cw">已收藏</a>');
                                window.location.reload();
                        }else{
                            fav.html('<a rel="nofollow" class="J-shop-follow shop-follow btn-fav" href="javascript:;" id="" data-shopid="1nw1cw">收藏店铺</a>');
                            window.location.reload();
                        }
                    },
                    error:function(){
                        alert("ajax请求失败!");
                    }
                });
            }else{
                location.href="<?php echo U('Home/User/login');?>"
            }
        });
        var logut = "<?php echo U('Home/Sorts/loginOut');?>";
    </script>

</body>
</html>