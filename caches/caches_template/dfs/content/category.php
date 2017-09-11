<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<!--main-->
<aside id="page-header" class="page-header-image page-header-medium" style="background-image:url(<?php echo IMG_PATH;?>web/page_banner_002.jpg)">
	<div class="page-header-inner">
        <div class="page-header-content">
            <div class="container">
            	<h1 class="hide-to-left" style="position: relative; opacity: 1; right: 0px;"><?php echo $CATEGORYS[$catid]['catname'];?></h1>
                <p class="hide-to-right lead" style="position: relative; opacity: 1; left: 0px;"><?php echo $CATEGORYS[$catid]['description'];?></p>
            </div>
        </div>
    </div>
    <div class="breadcrumbs hide-to-bottom" style="position: relative; opacity: 1; top: 0px;">
        <div class="container">
            <ul>
                <li><a href="<?php echo siteurl($siteid);?>/" class="home"></a></li>
                <li><a href="<?php echo $CATEGORYS[$catid]['url'];?>"><?php echo $CATEGORYS[$catid]['catname'];?> </a></li>
				<li>列表</li>
			</ul>
        </div>
	</div><!-- .breadcrumbs -->
</aside>
<div id="page-content" role="main">
	<div class="container">
		<div class="row">
			<div class="col-md-9">
				<div id="content">
					<header class="devider-bottom devider-margin-medium">
						<h1><?php echo $CATEGORYS[$catid]['catname'];?></h1>
					</header>
					<section class="posts">
						<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=5ab4b05e97fd14c3ed386604ee1a9399&action=lists&catid=%24catid&num=25&order=id+DESC&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 25;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>$catid,'order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>$catid,'order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
						<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                        <article class="post post-thumb post-type-text devider-top devider-margin-medium">
                            <div class="post-heading">
                                <div class="thumbnail">
                                    <a class="link" href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>">
                                        <img src="<?php echo thumb($r[thumb], 320, 180);?>" alt="<?php echo $r['title'];?>" title="<?php echo $r['title'];?>">
                                    </a>
                                </div>
                            </div>
                            <div class="post-content">
                                <div class="title">
                                    <h2 class="h4"><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><?php echo $r['title'];?></a></h2>
                                    <p class="meta">
                                        <span class="meta-date"><?php echo date('Y-m-d',$r[inputtime]);?></span>
                                    </p>
                                </div>
                                <div class="text">
                                    <p><?php echo $r['description'];?> <a href="<?php echo $r['url'];?>">【查看全文】</a></p>
                                </div>
                            </div>
                        </article><!-- .post -->
						<?php $n++;}unset($n); ?>
						<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
					</section><!-- .posts -->
					<aside class="pagination devider-top devider-margin-medium animation animation-grow">
							<?php echo $pages;?>
					</aside><!-- .pagination -->
				</div><!-- #content -->
			</div><!-- .col-md-9 -->
			<div class="col-md-3" id="sidebar">
			<script>if(screen.width<750){$('#sidebar').hide();}</script>
				<!-- SIDEBAR -->
				<div class="sidebar" id="sidebar-right">
					<?php if($CATEGORYS[$catid][child]==1) { ?>
                    <div class="widget devider-margin-medium">
                        <div class="widget-heading">
                            <div class="title title-main">
                                <h5><?php echo $CATEGORYS[$catid]['catname'];?></h5>
                            </div>
                        </div>
						
                        <div class="widget-content">
                            <div class="nav">
                                <ul>
									<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=4af9746720a7f3313928eba9f692aab7&action=category&catid=%24catid&num=25&order=id+DESC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>$catid,'order'=>'id DESC','limit'=>'25',));}?>
									<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
									<li class="cat-7"><a href="<?php echo $r['url'];?>"><?php echo $r['catname'];?></a></li>
									<?php $n++;}unset($n); ?>
									<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                                </ul>
                            </div><!-- .nav -->
                        </div>
                    </div>
					<?php } ?>
                    <div class="widget devider-margin-medium animation animation-grow">
                        <div class="widget-content sidelist">
                            <div class="tab full-width" data-animation="slide">
                                <ul class="tab-heading tab-two">
                                    <li class="current"><h5><a href="javascript:void(0);">热点推荐</a></h5></li>
                                    <li><h5><a href="javascript:void(0);">最新推荐</a></h5></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="current">
                                        <section class="posts">
											<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=0ad40a45ad075d8f47798a231e25aec2&action=hits&catid=%24catid&num=10&order=views+DESC&cache=3600\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('catid'=>$catid,'order'=>'views DESC',)).'0ad40a45ad075d8f47798a231e25aec2');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'hits')) {$data = $content_tag->hits(array('catid'=>$catid,'order'=>'views DESC','limit'=>'10',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
											<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                                            <article class="post post-mini post-type-text devider-top devider-margin-medium">
                                                <div class="post-heading">
                                                    <div class="thumbnail">
                                                        <a class="link" href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>">
                                                            <span class="btn btn-icon-link"></span>
                                                            <img src="<?php echo thumb($r[thumb], 320, 180);?>" alt="<?php echo $r['title'];?>" title="<?php echo $r['title'];?>">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="post-content">
                                                    <div class="title">
                                                        <h2 class="h6"><a href="$r[url]}" title="<?php echo $r['title'];?>"><?php echo $r['title'];?></a></h2>
                                                    </div>
                                                </div>
                                            </article>
											<?php $n++;}unset($n); ?>
											<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                                        </section>
                                    </div>
                                    <div>
                                        <section class="posts">
                                            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=0ad40a45ad075d8f47798a231e25aec2&action=hits&catid=%24catid&num=10&order=views+DESC&cache=3600\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('catid'=>$catid,'order'=>'views DESC',)).'0ad40a45ad075d8f47798a231e25aec2');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'hits')) {$data = $content_tag->hits(array('catid'=>$catid,'order'=>'views DESC','limit'=>'10',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
											<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                                            <article class="post post-mini post-type-text devider-top devider-margin-medium">
                                                <div class="post-heading">
                                                    <div class="thumbnail">
                                                        <a class="link" href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>">
                                                            <span class="btn btn-icon-link"></span>
                                                            <img src="<?php echo thumb($r[thumb], 320, 180);?>" alt="<?php echo $r['title'];?>" title="<?php echo $r['title'];?>">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="post-content">
                                                    <div class="title">
                                                        <h2 class="h6"><a href="$r[url]}" title="<?php echo $r['title'];?>"><?php echo $r['title'];?></a></h2>
                                                    </div>
                                                </div>
                                            </article>
											<?php $n++;}unset($n); ?>
											<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                                        </section>
                                    </div>
                                </div><!-- .tab-content -->
                            </div><!-- .tab -->
                        </div>
                    </div>
				</div><!-- #sidebar -->
			</div><!-- .col-md-3 -->
		</div><!-- .row -->
	</div><!-- .container -->
</div>
<?php include template("content","footer"); ?>