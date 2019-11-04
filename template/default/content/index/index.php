<?php if (!defined('HKCMS_VERSION')) exit(); ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <style type="text/css">
#tour .center {
text-align: center;
}
#tour .center h2 {
margin: 10px 0;
font-size: 45px;
letter-spacing: 2px;
color: #666;
}
#tour .center p {
color: #666;
margin: 10px 0;
}
#tour figure {
border: 1px solid #ddd;
display: inline-block;
padding: 4px;
border-radius: 4px;
width: 380px;
margin: 15px 12px;
text-align: left;
position: relative;
}
#tour figure img {
vertical-align: middle;
}
#tour figure figcaption {
color: #777;
font-size: 14px;
padding: 7px 0 5px 0;
letter-spacing: 1px;
line-height: 1.5;
}
#tour .title {
color: #333;
font-weight: normal;
}
#tour .price {
color: #f60;
font-size: 14px;
}
#tour .price strong {
font-size: 20px;
letter-spacing: 1px;
}
#tour .sat {
color: #999;
font-size: 13px;
font-style: normal;
float: right;
position: relative;
right: 5px;
top: 5px;
}
#tour .type {
width: 90px;
height: 25px;
line-height: 25px;
text-align: center;
border-bottom-right-radius: 4px;
background-color: #59b200;
font-size: 14px;
color: #fff;
letter-spacing: 1px;
position: absolute;
top: 4px;
left: 4px;
}

    </style>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="applicable-device" content="pc,mobile" />
    <title>
        {if condition="!empty($SEO['title'])"}{$SEO['title']}{/if}{$SEO['site_title']}
    </title>
    <meta name="description" content="{$SEO['description']}" />
    <meta name="keywords" content="{$SEO['keyword']}" />
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
<!-- 内容1 -->
{hkcms:get table="hkcms_article" status="99" order="inputtime DESC" page="$page" num="10 n m "}
    <ul>
         
        {volist name="data" id="vo"}
        <a href='{$vo['url']}'>
            <li>标题：{$vo.title}</li>
            </a>
        {/volist}
        
    </ul>
    分页：{$pages}
{/hkcms:get}
<!--调用栏目列表-->
{hkcms:content action="category" catid="0"  order="listorder asc"}
    <ul>
        {volist name="data" id="vo"}
        <a href='{$vo['url']}'>
            <li>栏目标题：{$vo.catname}，地址：{$vo.url}</li>
            </a>
        {/volist}
    </ul>
{/hkcms:content}
<!--10.22-->
<div id="tour">
<section class="center">
                   <h1>最新产品</h1>
                        <span></span>
                        {hkcms:content action="category" catid="7"  order="listorder asc"}
                            {volist name="data" id="vo"}
                                <a href="{$vo.url}" style="font-size: 100px;">{$vo.catname}</a>
                            {/volist}
                        {/hkcms:content}
                        <a class="rightMore" href="{:url('content/Index/lists',['catid'=>7])}"></a>
                    
                   </section>
               </div>
{hkcms:position action="position" posid="2" order="listorder asc"}
                        {volist name="data" id="vo"}
                        <div id="tour">
                            <figure>
                            <a title="PRO-001" href='{$vo.data.url}'>
                                <span class="imgLink-hover"><span class="hover-link"></span></span>
                                <img src="{$vo['data']['thumb']?$vo['data']['thumb']:$config_siteurl.'statics/default/images/dpic.gif'}" alt="{$vo.data.title}" 
                                style="width: 300px;" />
                            </a>
                            <a class="productTitle" href="{$vo.data.url}" title="{$vo.data.title}">
                                {$vo.data.title}
                            </a>
                        </figure>
                        </div>
                        {/volist}
                        {/hkcms:position}
                        <!--搜索-->
                        <th> <div class="search">
                <input size="15" placeholder="Hi，HkCms！" id="J_search_keyword" type="text">
                <button type="button" name="keyword" id="J_search" value="" data-url="{$config_siteurl}admin/Index/public_find?">搜索</button>
            </div></th>
<!-- 内容 -->
<div class="container">
    <div class="row">

        <div class="col-xs-12 col-sm-9 col-md-9">
            <div class="aboutBox">
                <a href="{:url('content/Index/lists',['catid'=>11])}" class="aboutMore">MORE +</a>
                <div class="aboutTitle">
                    <h1>公司简介</h1>
                    <span>ABOUT US</span></div>
                <section>
                    {hkcms:get table="hkcms_page"  page="$page" where="catid=11" num="1"}
                    {if (!empty($data))}
                    {:strip_tags($data[0]['content'])}
                    {/if}
                    {/hkcms:get}
                </section>
            </div>
        </div>

        <div class="col-xs-12 col-sm-3 col-md-3">
            <div class="searchGroup">
                <div class="searchBox">
                    <div class="title">产品查询</div>
                    <input type="text" id="queryTxt" name="queryTxt" placeholder="请输入关键字" onClick="this.value = ''"/>
                    <a href="javascript:;" type="button" >搜 索</a>
                    <form action="http://www.baidu.com/baidu" target="_blank">
        <input id="kw" type="text" baiduSug="1" size="30" name="word">
         <input type="submit" value="百度">
     </form>
     <!-- 百度搜索框提示 -->
     <script charset="gbk" src="http://www.baidu.com/js/opensug.js"></script>
                </div>

                <div class="serviceBtn">
                    <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=376622798&site=qq&menu=yes"> <img src="{$config_siteurl}statics/default/images/qq.jpg" /><br />客服QQ</a>
                    <a target="_blank" href="http://weibo.com/"> <img src="{$config_siteurl}statics/default/images/wb.jpg" /><br />关注微博</a>
                    <a href="javascript:showWechatQR();"> <img src="{$config_siteurl}statics/default/images/wx.jpg" /><br />关注微信</a>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- 关注微信模态框（Modal）start -->
<div class="modal fade" id="wechatModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="border: 0px;">
            <div class="modal-header">请扫描二维码关注我们</div>
            <div class="modal-body" style="text-align: center">
                <img src="{$config_siteurl}statics/default/images/qrcode.jpg" alt="" />
            </div>
            <div class="modal-footer" style="text-align: center;">
                <button type="button" class="btn btn-primary" data-dismiss="modal">关闭</button>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    function showWechatQR() {
        $("#wechatModal").modal("show")
    }
</script>
<!-- 关注微信模态框（Modal）end -->

<div style="background:#f9f9f9; padding-top:30px; margin-top:30px; padding-bottom:10px">
    <div class="container">
        <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="productBox">
                    <div class="titleBar">
                        <h1>最新产品</h1>
                        <span></span>
                        {hkcms:content action="category" catid="7"  order="listorder asc"}
                            {volist name="data" id="vo"}
                                <a href="{$vo.url}">{$vo.catname}</a>
                            {/volist}
                        {/hkcms:content}
                        <a class="rightMore" href="{:url('content/Index/lists',['catid'=>7])}">>></a>
                    </div>
                    <div class="list">
                        {hkcms:position action="position" posid="2" order="listorder asc"}
                        {volist name="data" id="vo"}
                        <div class="col-xs-6 col-sm-3 col-md-2 col-mm-6 productImg">
                            <a title="PRO-001" href='{$vo.data.url}'>
                                <span class="imgLink-hover"><span class="hover-link"></span></span>
                                <img src="{$vo['data']['thumb']?$vo['data']['thumb']:$config_siteurl.'statics/default/images/dpic.gif'}" alt="{$vo.data.title}" />
                            </a>
                            <a class="productTitle" href="{$vo.data.url}" title="{$vo.data.title}">
                                {$vo.data.title}
                            </a>
                        </div>
                        {/volist}
                        {/hkcms:position}
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="indexNavigationGroup" id="classification">
                <div class="navigationBox">
                    <div class="titleBar">
                        <h1>导航栏目</h1>
                        <span></span>
                    </div>
                    <div class="list">
                        <ul id="firstpane">
                            {hkcms:content action="category" catid="$catid"  order="listorder ASC"}
                            {volist name="data" id="vo"}
                            {if (!empty($vo['child']))}
                            <li>
                                <a class='' href='{$vo['url']}'>{$vo['catname']}</a><span>+</span>
                                <ul>
                                    {hkcms:content action="category" catid="$vo['catid']"  order="listorder ASC"}
                                    {volist name="data" id="rr"}
                                    <li><a class='' href='{$rr['url']}'>{$rr['catname']}</a><ul></ul></li>
                                    {/volist}
                                    {/hkcms:content}
                                </ul>
                            </li>
                            {else /}
                            <li><a class='' href='{$vo['url']}'>{$vo['catname']}</a></li>
                            {/if}
                            {/volist}
                            {/hkcms:content}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">

        <div class="col-xs-12 col-sm-9 col-md-9">
            <div class="newsBox">
                <div class="titleBar">
                    <h1>新闻中心</h1>
                    <span></span> <a class="rightMore" href="{:url('content/Index/lists',['catid'=>4])}">>></a>
                </div>
                <ul class="indexNewsList">
                    {hkcms:position action="position" posid="1"}
                    {volist name="data" id="vo"}
                    <li class="col-xs-12 col-sm-6 col-md-6">
                        <a href="{$vo.data.url}">
                            <div class="img">
                                <img src="{$vo['data']['thumb']?$vo['data']['thumb']:$config_siteurl.'statics/default/images/dpic.gif'}" alt="{$vo.data.title}" style="max-width: 120px">
                            </div>
                            <div class="txt">
                                    <span class="title">
                                        {$vo.data.title}
                                    </span>
                                <span class="time">{:date('Y-m-d',$vo['data']['inputtime'])}</span>
                                <p>
                                    {$vo.data.description}
                                </p>
                            </div>
                        </a>
                    </li>
                    {/volist}
                    {/hkcms:position}
                </ul>
            </div>
        </div>
        <div class="col-xs-12 col-sm-3 col-md-3">
            <div class="contactBox" style="padding:10px;">
                <p>联系人：张经理</p>
                <p>手机：13800138000</p>
                <p>电话：020-88668888</p>
                <p>邮箱：admin@hkcms.cn</p>
                <p>地址： 广东省广州市白云区</p>
            </div>
        </div>
    </div>
</div>
<div style="background:#f9f9f9; padding-top:20px; margin-top:20px; padding-bottom:20px;">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="linkBox">
                    <div class="titleBar">
                        <h1>友情链接</h1>
                        <span></span>
                        <ul class="linkList">
                            <li><a target="_blank" href="http://www.hkcms.cn/">HkCms官网</a></li>
                            <li><a target="_blank" href="http://bbs.hkcms.cn/">HkCms社区</a></li>
                            <li><a target="_blank" href="http://doc.hkcms.cn/">HkCms手册</a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

{hkcms:template file="content/footer.php"/}

</body>
</html>