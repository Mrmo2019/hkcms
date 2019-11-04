<?php if (!defined('HKCMS_VERSION')) exit(); ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="applicable-device" content="pc,mobile" />

    <title>
        {if condition="!empty($SEO['title'])"}{$SEO['title']}{/if}{$SEO['site_title']}
    </title>
    <link href="{$config_siteurl}statics/default/css/bootstrap.css" rel="stylesheet" />
    <link href="{$config_siteurl}statics/default/css/glide.css" rel="stylesheet" />
    <link href="{$config_siteurl}statics/default/css/style.css" rel="stylesheet" />
    <link href="{$config_siteurl}statics/default/css/online.css"rel="stylesheet" />
    <script src="{$config_siteurl}statics/default/js/jquery.min.js" type="text/javascript"></script>
    <script src="{$config_siteurl}statics/default/js/bootstrap.js" type="text/javascript"></script>
    <script src="{$config_siteurl}statics/default/js/jquery.glide.js" type="text/javascript"></script>
    <!--[if lt IE 9]>
    <script src="{$config_siteurl}statics/default/js/html5shiv.min.js" type="text/javascript"></script>
    <script src="{$config_siteurl}statics/default/js/respond.min.js" type="text/javascript"></script>
    <![endif]-->
</head>

<body>

{hkcms:template file="content/header.php"/}

<!-- Banner -->
<div class="banner">
    <div class="slider">
        <ul class="slider__wrapper">
            <li class="slider__item">
                <a target="_blank" title="2" href="" style="background-image:url({$config_siteurl}statics/default/images/banner.jpg)">
                    <img src="{$config_siteurl}statics/default/images/banner.jpg" alt="HkCms 官方" />
                </a>
            </li>
        </ul>
    </div>
</div>

<script type="text/javascript">
    var glide = $('.slider').glide();
</script>

<!-- 内容 -->
<div class="container">
    <div class="row">

        <div class="col-xs-12 col-sm-8 col-md-9" id="rightBox">

            <div class="positionBox">
                <div class="titleBar">
                    <h1>当前位置</h1>
                    <span></span>
                    {hkcms:navigate catid="$catid" space=" > " /}
                </div>
            </div>

            <div class="col-sm-12 col-md-12 pad">

                <div class="detailTitle" style="border:0px; background:none; font-size:20px; color:#000;">
                    {$title}
                </div>

                <div class="detailTime">
                    {$updatetime}
                </div>

                <div class="detailContent">
					<!-- Banner -->
					<div class="banner homeBanner">
					    <div class="slider">
					        <ul class="slider__wrapper">
					  			{volist name='imgs' id='vo'}
					            <li class="slider__item"><a target="_blank" title="1" >
					            	<img src="{$vo.url}" alt="HkCms 官方" /></a>
					            </li>
					            {/volist}
					          <!--   <li class="slider__item"><a target="_blank" title="2" href="" style="background-image:url({$config_siteurl}statics/default/images/1.jpg)"><img src="{$config_siteurl}statics/default/images/banner-1.png" alt="HkCms 官方" /></a></li> -->
					        </ul>
					    </div>
					</div>

					<script type="text/javascript">
					    var glide = $('.slider').glide();
					</script>

                    <div class="row">
					  	{volist name='imgs' id='vo'}
					  <div class="col-xs-6 col-md-3">
					    <!-- <a href="#" class="thumbnail"> -->
					    	<br>
					      <img src="{$vo.url}" alt="{$vo.alt}" style="float:left;">
					      <!-- 20170307100117_5871.jpg -->
					    </a>
					  </div>
					    {/volist}
					</div>
                </div>

                <div class="otherPageBox">

                    <div class="col-xs-9 col-sm-9 col-md-9 pad">
                        <div class='otherPage'>
                            <div class='prevBox'>上一个：
                                {hkcms:pre catid="$catid" id="$id" target="1" msg="已经没有了" /}
                            </div>
                            <div class='nextBox'>下一个：
                                {hkcms:next catid="$catid" id="$id"  msg="已经没有了" /}
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-3 col-sm-3 col-md-3 pad">
                        <a class="back" href="javascript:history.go(-1)">返回</a>
                    </div>

                </div>

                <div class="aboutProduct newsBox">
                    <div class="titleBar">
                        <h1>相关新闻</h1>
                        <span>&nbsp</span>
                    </div>
                    <ul class="newsList">
                        {hkcms:content action="relation" catid="$catid" keywords="$keywords" order="id desc" num="5"}
                            {volist name="data" id="vo"}
                                <li><a href="{$vo['url']}" title="{$vo['title']}">{$vo['title']}</a></li>
                            {/volist}
                        {/hkcms:content}
                    </ul>
                </div>

            </div>

        </div>

        <div class="col-xs-12 col-sm-4 col-md-3">

            <div class="navigationBox" id="classification">
                <div class="titleBar">
                    <h1>导航栏目</h1>
                    <span></span>
                </div>
                <div class="list">
                    <ul id="firstpane">
                        {hkcms:content action="category" catid="$parentid"  order="listorder ASC"}
                        {volist name="data" id="vo"}
                        <li><a class='{if ($catid==$vo['catid'])}selected{/if}' href='{$vo['url']}'>{$vo['catname']}</a></li>
                        {/volist}
                        {/hkcms:content}
                    </ul>
                </div>
            </div>

            <div class="leftContactBox">
                <div class="content">
                    <p style="padding-top:20px;">联系人：张经理</p>
                    <p>手机：13800138000</p>
                    <p>电话：020-88668888</p>
                    <p>邮箱：admin@hkcms.cn</p>
                    <p>地址： 广东省广州市白云区</p>
                </div>
            </div>

        </div>

    </div>
</div>

{hkcms:template file="content/footer.php"/}

</body>
</html>