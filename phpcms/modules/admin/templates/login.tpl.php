<?php defined('IN_ADMIN') or exit('No permission resources.'); ?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>管理员登陆-{{config('name')}}</title>

    <link href="<?php echo CSS_PATH ?>admin/materialize.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo CSS_PATH ?>admin/icon.css" rel="stylesheet">
    <style type="text/css">
	.login-body{width:100%;height:100%;position: absolute;top: 0;left:0;background: url(<?php echo IMG_PATH ?>web/login_bg.jpg);}
	.login-content{margin-top:20%;}
	</style>
</head>

<body>
<div class="login-body">
    <div class="container">
        <form action="index.php?m=admin&c=index&a=login&dosubmit=1" method="post" name="myform" onkeydown="if(event.keyCode==13){$this.submit()};" onsubmit="return login()">
            <div class="row">
                <div class="card col l4 s12 login-content">
                    <div class="card-content">
                        <div class="title">管理员登陆</div>
                        <div class="input-field col s12">
                            <a class="toolbar" data-position="right" data-delay="50" data-tooltip="努力更新！">
                            <i class="material-icons prefix">account_circle</i>
                            <input id="username" type="text" class="validate" autofocus name="username">
                            <label for="username">用户名</label></a>
                        </div>
                        <div class="input-field col s12">
                            <i class="material-icons prefix">lock</i>
                            <input id="password" type="password" class="validate" name="password">
                            <label for="password">密码</label>
                        </div>
						<div class="input-field col s6">
                            <i class="material-icons prefix">lock</i>
                            <input id="code" type="text" class="validate" name="code">
                            <label for="code">验证码</label>
                        </div>
						<div id="yzm" class="col s6">
								<?php echo form::checkcode('code_img')?><br />
									<a href="javascript:document.getElementById('code_img').src='<?php echo SITE_PROTOCOL.SITE_URL.WEB_PATH;?>api.php?op=checkcode&m=admin&c=index&a=checkcode&time='+Math.random();void(0);"><?php echo L('click_change_validate')?></a>
							</div>
                        <div class="input-field col s12 center-align">
                            <button class="btn btn-primary" type="submit" name="dosubmit">登陆</button>
                        </div>
                        <div class="row center-align"><div class="col s12 red-text" style="display:none;" id="error">账号错误</div> </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

</div>
</body>
<script src="<?php echo JS_PATH ?>admin/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo JS_PATH ?>admin/materialize.min.js" type="text/javascript"></script>
<script>
$('.toolbar').tooltip();
function login(){
    if($('#username').val()==""){Materialize.toast('请输入用户名！',3000);return false;}
    if($('#password').val()==""){Materialize.toast('请输入密码！',3000);return false;}
}
</script>
</html>
