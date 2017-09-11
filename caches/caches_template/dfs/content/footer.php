<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><footer class="footer" id="footer">
    <div class="container">
    <div class="row">
		<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=e3d146232857be4579899ac97dbd2f7c&action=category&catid=1&num=15&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'1','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'15',));}?>
		<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
    	<div class="col-xs-12 col-sm-3">
        	<div class="list-header"><a href="#footer-links-12" data-toggle="collapse" class="collapsed" title="<?php echo $r['catname'];?>"><?php echo $r['catname'];?></a></div>
			<?php if($r[child]==1) { ?>
			<ul class="list-links collapse" id="footer-links-12">
				<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=1b878443c22a9f4f9354c1ae6730c9d8&action=category&catid=%24r%5Bcatid%5D&num=5&siteid=%24siteid&order=listorder+ASC&return=data2\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data2 = $content_tag->category(array('catid'=>$r[catid],'siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'5',));}?>
				<?php $n=1;if(is_array($data2)) foreach($data2 AS $c) { ?>
				<li><a href="<?php echo $c['url'];?>" rel="nofollow"><?php echo $c['catname'];?></a></li>
				<?php $n++;}unset($n); ?>
			</ul>
			<?php } ?>
        </div>
		<?php $n++;}unset($n); ?>
		<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
      <div class="col-xs-12 col-sm-2 ercodebox">
        <div class="ercode">
          <a href="javascript:void(0);" title="扫一扫关注我们" target="_blank"><img class="code" src="<?php echo IMG_PATH;?>picture/20170510040440247.jpg" alt="人口健康档案" /></a>
          <p>扫一扫关注我们</p>
          <div class="bottomBox">
            <!--底部微博邮箱按钮-->
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="footer-copyright">
  	<div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-7 address">
          <span>&copy; 2017 大富商唯一认证官方网站 codeBy OneStepAway</span><!--底部版权信息-->
        </div>
        <div class="col-xs-12 col-sm-5 text-right bttel">
          <ul class="list-inline">
            <li>
				<a href="tel:400-881-5858">
					<span class="fa fa-phone"></span> <span>400-9283-968</span>
				</a>
			</li>
			<!--底部联系方式-->
          </ul>
        </div>
      </div>
    </div>
  </div>
</footer>
<script type="text/javascript">
	$('#main-menu li.current').parents('li').addClass('current');
</script>
<script type="text/javascript" src="<?php echo JS_PATH;?>web/jquery.easing.min.js"></script>
<script type="text/javascript" src="<?php echo JS_PATH;?>web/jquery.touchswipe.min.js"></script>
<script type="text/javascript" src="<?php echo JS_PATH;?>web/jquery.mousewheel.min.js"></script>
<script type="text/javascript" src="<?php echo JS_PATH;?>web/imagesloaded.pkgd.min.js"></script>
<script type="text/javascript" src="<?php echo JS_PATH;?>web/retina.js"></script>
<script type="text/javascript" src="<?php echo JS_PATH;?>web/jquery.fancybox.pack8cbb.js"></script>
<script type="text/javascript" src="<?php echo JS_PATH;?>web/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo JS_PATH;?>web/jquery.caroufredsel-6.2.1-packed.js"></script>
<script type="text/javascript" src="<?php echo JS_PATH;?>web/jquery.themepunch.plugins.min.js"></script>
<script type="text/javascript" src="<?php echo JS_PATH;?>web/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript" src="<?php echo JS_PATH;?>web/home.js"></script>
<script type="text/javascript" src="<?php echo JS_PATH;?>web/theme.js"></script>
<div style="display:none;">
</div>
<script>
(function(){
    var bp = document.createElement('script');
    var curProtocol = window.location.protocol.split(':')[0];
    if (curProtocol === 'https') {
        bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';        
    }
    else {
        bp.src = 'http://push.zhanzhang.baidu.com/push.js';
    }
    var s = document.getElementsByTagName("script")[0];
    s.parentNode.insertBefore(bp, s);
})();
</script>

</body>
</html>