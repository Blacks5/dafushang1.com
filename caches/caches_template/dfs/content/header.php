<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html>
<!--[if IE 8]><html lang="zh-CN" class="ie ie8"><![endif]-->
<!--[if IE 9]><html lang="zh-CN" class="ie ie9"><![endif]-->
<!--[if gt IE 9]><!--><html lang="zh-CN"><!--<![endif]--><head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
<meta name="keywords" content="<?php echo $SEO['keyword'];?>">
<meta name="description" content="<?php echo $SEO['description'];?>">
<link rel="stylesheet" href="<?php echo CSS_PATH;?>web/bootstrap.css" />
<link rel="stylesheet" href="<?php echo CSS_PATH;?>web/font-awesome.css">
<link rel="stylesheet" href="<?php echo CSS_PATH;?>web/style.css">
<link rel="stylesheet" href="<?php echo CSS_PATH;?>web/settings.css">
<link rel="stylesheet" href="<?php echo CSS_PATH;?>web/style_1.css">
<link rel="stylesheet" href="<?php echo CSS_PATH;?>web/theme-elements.css">
<script type="text/javascript" src="<?php echo JS_PATH;?>web/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="<?php echo JS_PATH;?>web/modernizr.js"></script>
<!--[if lte IE 8]>
<link rel="stylesheet" href="<?php echo CSS_PATH;?>web/ie8.css">
<script src="<?php echo JS_PATH;?>web/respond.src.js"></script>
<![endif]-->
</head>
<body class="index">
<h1 class="top-h1" style="margin-top:-80px;"><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></h1>
<!-- preload loaders -->
<div id="loading">
    <div class="spinner" style="display: block">
        <div class="bounce1"></div>
        <div class="bounce2"></div>
        <div class="bounce3"></div>
    </div>
</div>
<header id="header" class="default">
	<nav class="navbar">
        <div class="container desktop-navbar">
            <a class="logo" href="<?php echo siteurl($siteid);?>/" title="<?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?>">
				<img src="<?php echo IMG_PATH;?>v9/logo.png" alt="<?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?>">
			</a>
			<!-- <tel class="col-xs-hidden" style="font-size:18px;padding:5px;margin-left: 10px;color:#C09940;">4009283968</tel> -->
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=49e1cb31e8e8254e69addb9e9ca09791&action=category&catid=0&num=9&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'0','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'9',));}?>
            <ul id="main-menu" class="custom carret">
            	<li class="cat-home"><a class="topmenu" title="<?php echo $SEO['site_title'];?>" href="<?php echo siteurl($siteid);?>">首页</a></li>
				<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
            	<li class="cat-11"><a class="topmenu" href="<?php if($r[modelid]==0 && $r[child]==1) { ?>javascript:;<?php } else { ?><?php echo $r['url'];?><?php } ?>"><?php echo $r['catname'];?></a>
					<?php if($r[child]==1) { ?>
                	<ul class="submenu">
						<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=562eba0525a72e8a95a03bd7c7d4da01&action=category&catid=%24r%5Bcatid%5D&num=15&siteid=%24siteid&order=listorder+ASC&return=data2\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data2 = $content_tag->category(array('catid'=>$r[catid],'siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'15',));}?>
						<?php $n=1;if(is_array($data2)) foreach($data2 AS $c2) { ?> 
                    	<li><a href="<?php echo $c2['url'];?>"><?php echo $c2['catname'];?></a></li>
						<?php $n++;}unset($n); ?>
						<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                	</ul>
					<?php } ?>
            	</li>
				<?php $n++;}unset($n); ?>
            </ul>
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </div><!-- .desktop-navbar -->
        <div class="container mobile-navbar">
            <a class="logo" href="<?php echo siteurl($siteid);?>/" title="<?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?>"><img src="<?php echo IMG_PATH;?>v9/logo.png" alt="<?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?>"></a>
            <ul class="mobile-btn">
                <li><a class="btn-navbar" href="javascript:void(0);"><span class="fa fa-reorder"></span></a></li>
            </ul>
        </div><!-- .mobile-navbar -->
    </nav><!-- .navbar -->
    <nav id="mobile-menu"></nav>
</header>
