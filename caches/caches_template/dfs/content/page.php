<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
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
				<li>正文</li>
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
						<h1><?php echo $title;?></h1>
					</header>
					<article class="post post-single post-type-text">
						<div class="post-content">
							<div class="post-detail">
								<div class="text">
                                	<?php echo $content;?>
								<div>
							</div><!-- .content-right -->
						</div><!-- .post-content -->
					</article><!-- .post -->
				</div><!-- #content -->
			</div><!-- .col-md-9 -->
			<div class="col-md-3 hidden-xs hidden-sm" id="sidebar">
			<script>if(screen.width<750){$('#sidebar').hide();}</script>
				<div class="sidebar" id="sidebar-right">
                    <div class="widget devider-margin-medium">
                        <div class="widget-heading">
                            <div class="title title-main">
                                <h5><?php echo $CATEGORYS[$top_parentid]['catname'];?></h5>
                            </div>
                        </div>
						
                        <div class="widget-content">
                            <div class="nav">
                                <ul>
									<?php $n=1;if(is_array($arrchild_arr)) foreach($arrchild_arr AS $cid) { ?>
									<li class="cat-7"><a href="<?php echo $CATEGORYS[$cid]['url'];?>"><?php echo $CATEGORYS[$cid]['catname'];?></a></li>
									<?php $n++;}unset($n); ?>
                                </ul>
                            </div><!-- .nav -->
                        </div>
                    </div>
				</div>
			</div>
		</div><!-- .row -->
	</div><!-- .container -->
</div>
<script language="JavaScript" src="<?php echo JS_PATH;?>web/api.js"></script>
<?php include template("content","footer"); ?>