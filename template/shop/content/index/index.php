<?php if (!defined('HKCMS_VERSION')) exit(); ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="applicable-device" content="pc,mobile" />
    <title>
        {if condition="!empty($SEO['title'])"}{$SEO['title']}{/if}{$SEO['site_title']} Powered by HkCms.cn
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
<style type="text/css">
.main-promote .col-6{
  background: #dedede;
}
.main-promote .cat{
  background: #6e6568;
  color: #fff;
}
.main-promote .cat .item {
  padding: 16px 20px;
}
.main-promote .cat .item:hover{
  background: rgba(0, 0, 0, 0.2);
}
.main-promote .info{
  padding: 10px;
  background: #fff;
  color: #888;
  box-shadow: 0 1px 2px rgba(0,0,0,0.1);

}
.main-promote .info .avatar{
   background: #aaa;
   width: 50px;
   height: 50px;
   float: left;
   border-radius: 50%;
   margin-right: 10px;
}
.col-1,
.col-2,
.col-3,
.col-4,
.col-5,
.col-6,
.col-7,
.col-8,
.col-9{
  float: left;
  display: block;
  position: relative;
  min-height: 1px;
}

.col-1{
   width: 10%;
}
.col-2{
   width: 20%;
}
.col-3{
   width: 30%;
}
.col-4{
   width: 40%;
}
.col-5{
   width: 50%;
}
.col-6{
   width: 60%;
}
.col-7{
   width: 70%;
}
.col-8{
   width: 80%;
}
.col-9{
   width: 90%;
}


.cat-promote .title::before {
  content: '';
  display: inline-block;
  width: 5px;
  height: 22px;
  background: #dd182b;
  vertical-align: middle;
  margin-right: 10px;
}
.cat-promote .title{
  font-size: 22px;
  max-width: 200px;
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;
}

.cat-promote .item{
  padding: 5px;
}

.cat-promote .card{
  height: 300px;
  background: #ccc;
  border-radius: 3px;
  box-shadow: 0 2px 2px rgba(0, 0, 0, 0.1);
}

</style>
</head>
<body>
{hkcms:template file="content/header.php"/}
<!--首页展示-->

<div class="main-promote clearfix">
      <div class="container">
        <div class="col-2 cat">
          <div class="item">1</div>
          <div class="item">2</div>
          <div class="item">3</div>
          <div class="item">4</div>
          <div class="item">5</div>
          <div class="item">6</div>
          <div class="item">7</div>
          <div class="item">8</div>
          <div class="item">9</div>
        </div>
         <div class="col-6">
          <div class="silder">
        {hkcms:position action="position" posid="1" order="listorder asc" }
{volist name="data" id="vo"}
 <a href="{$vo.data.url}">
<img src="{$vo['data']['thumb']?$vo['data']['thumb']:$config_siteurl.'statics/default/images/dpic.gif'}" alt="{$vo.data.title}" width="150px" height="150px"  />
</a>
   {/volist}
                        {/hkcms:position}
                      </div>
                    </div>
        <div class="col-2 info">
          <div class="auth clearfix">
            <div class="avatar"></div>
            你好,欢迎剁手~
          </div>
          <div class="anno">
            <div class="title">公告</div>
            <div class="content">
              我是侧边栏
            </div>
          </div>
        </div>
      </div>
    </div>
 
<!-- 关注微信模态框（Modal）end -->


<!-- 模板-->
<div class="container">
    <div class="cat-promote clearfix">
        <div class="title">模板</div>
        <div class="content">
          <div class="col-2 item">
            <div class="card">
            </div>
          </div>
        </div>
      </div>
<!-- 模板-->


<!--新的产品栏start-->



<div class="container" >
{hkcms:position action="position" posid="2" order="listorder asc" }
{volist name="data" id="vo"}
    <div class="cat-promote clearfix" style="float: left;">
 <a href="{$vo.data.url}">
        <div class="title" >{$vo.data.title}</div>
                        </a>
        <div class="content">

          <div class="col-2 item" >

            <div class="card" >
               <a href="{$vo.data.url}">
<img src="{$vo['data']['thumb']?$vo['data']['thumb']:$config_siteurl.'statics/default/images/dpic.gif'}" alt="{$vo.data.title}" width="400px" height="300px"  />
</a>
            </div>
          </div>
        </div>
      </div>
{/volist}
                        {/hkcms:position}





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
<!--新闻中心-->
<div class="container">
  {hkcms:position action="position" posid="1"}
                    {volist name="data" id="vo"}
    <div class="cat-promote clearfix" style="float: left">
      <a href="{$vo.data.url}">
        <div class="title">{$vo.data.title}</div>
      </a>
        <div class="content">
          <div class="col-2 item" >
            <a href="{$vo.data.url}">
            <div >
              <img src="{$vo['data']['thumb']?$vo['data']['thumb']:$config_siteurl.'statics/default/images/dpic.gif'}" alt="{$vo.data.title}" style="max-width: 300px;max-height: 100px" >

            </div>
          </a>
          </div>
        </div>
      </div>
      {/volist}
                    {/hkcms:position}
<!--新闻中心-->

        
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