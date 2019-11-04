<?php if (!defined('HKCMS_VERSION')) exit(); ?>
<style type="text/css">
    body,h1,ul {
margin: 0;
padding: 0;
}
body {
background-color: #fff;
}
ul {
list-style: outside none none;
}a {
text-decoration: none;
}
#nav {
width: 100%;
height: 70px;
background: #333;
}
#nav .center {
width: 1263px;
margin: 0 auto;
}
#nav .logo {
width: 240px;
height: 70px;

float: left;
}
#nav .link {
width: 650px;
height: 70px;
line-height: 70px;
font-size: 18px;
float: right;
}
#nav .link li {
width: 120px;
height: 70px;
text-align: center;
float: left;
}
#nav .link a {
display: block;
color: #eee;
}
#nav .active a,
#nav .link a:hover {
background-color: #000;
}
</style>
<header>
    <div class="topBox">
        <div class="borderBottom">
            <div class="container">
                <div class="welcomeBox">欢迎光临HkCms官方演示站点</div>
                <div class="languageBox">
<!--                    <a href="#" class="en">English</a><a href="#" class="zh">中文版</a>-->
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-8 logo"><a href="/"><img src="{$config_siteurl}statics/default/images/logo.png" alt="" /></a></div>

                <div class="col-xs-6 col-sm-3 col-md-2">
                    <div class="address"></div>
                </div>

                <div class="col-xs-6 col-sm-3 col-md-2">
                    <div class="tel">
                        <img src="{$config_siteurl}statics/default/images/tel.gif" alt="" /><br />400-8888-8888
                    </div>
                </div>

            </div>
        </div>
    </div>
<!-- -->

<!-- -->
    <nav class="navbar navbar-static-top navbar-default">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/"></a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">

                    <li><a href="/">网站首页</a></li>

                    {hkcms:content action="category" catid="0"  order="listorder ASC"}
                    {volist name="data" id="vo"}
                    {if condition=" !empty($vo['child']) "}
                    <li class="dropdown">
                        <a href="{$vo['url']}" class="dropdown-toggle" data-toggle="dropdown">{$vo['catname']}</a>
                        <a href="" id="app_menudown" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            <span class="glyphicon glyphicon-menu-down btn-xs"></span>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            {hkcms:content action="category" catid="$vo['catid']"  order="listorder ASC" }
                            {volist name="data" id="r"}
                            {if condition=" !empty($r['child']) "}
                            <li>
                                <a class='' href='{$r['url']}'>{$r['catname']}</a><span>+</span>
                                <ul>
                                    {hkcms:content action="category" catid="$r['catid']"  order="listorder ASC" }
                                    {volist name="data" id="rr"}
                                    <li><a class='' href='{$rr['url']}'>{$rr['catname']}</a></li>
                                    {/volist}
                                    {/hkcms:content}
                                </ul>
                            </li>
                            {else /}
                            <li><a class='' href='{$r['url']}'>{$r['catname']}</a></li>
                            {/if}
                            {/volist}
                            {/hkcms:content}
                        </ul>
                    </li>
                    {else /}
                    <li><a href="{$vo['url']}">{$vo['catname']}</a></li>
                    {/if}
                    {/volist}
                    {/hkcms:content}

                    {:hook_listen('view_nav_menu')}
                </ul>
            </div>
        </div>
    </nav>
<nav id="nav">
<section class="center">

<h1 class="logo"><form action="http://www.baidu.com/baidu" target="_blank">
        <input id="kw" type="text" baiduSug="1" size="30" name="word">
         
     </form>
     <!-- 百度搜索框提示 -->
     <script charset="gbk" src="http://www.baidu.com/js/opensug.js"></script></h1>

     
<ul class="link">
<li class="active"><a href="/">首页</a></li>
  {hkcms:content action="category" catid="0"  order="listorder ASC"}
                    {volist name="data" id="vo"}
                    {if condition=" !empty($vo['child']) "}
                    <li class="dropdown">
                        <a href="{$vo['url']}" class="dropdown-toggle" data-toggle="dropdown">{$vo['catname']}</a>
                        <ul >
                            {hkcms:content action="category" catid="$vo['catid']"  order="listorder ASC" }
                            {volist name="data" id="r"}
                            {if condition=" !empty($r['child']) "}
                            <li>
                                <a class='' href='{$r['url']}'>{$r['catname']}</a><span>+</span>
                                <ul>
                                    {hkcms:content action="category" catid="$r['catid']"  order="listorder ASC" }
                                    {volist name="data" id="rr"}
                                    
                                    {/volist}
                                    {/hkcms:content}
                                </ul>
                            </li>
                            {else /}
                            <li><a class='' href='{$r['url']}'>{$r['catname']}</a></li>
                            {/if}
                            {/volist}
                            {/hkcms:content}
                        </ul>
                    </li>
                    {else /}
                    <li><a href="{$vo['url']}">{$vo['catname']}</a></li>
                    {/if}
                    {/volist}
                    {/hkcms:content}

                    {:hook_listen('view_nav_menu')}    
</ul>
</section>
</nav>
</header>