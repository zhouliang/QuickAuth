<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<meta name="keywords" content="QuickAuth, free, quick, OAuth, User System"/>
	<meta name="description"
	      content="QuickAuth is a user system and an implement of OAuth. By using QuickAuth, you can log in to some websites without sign up for another account, which most likely will be used only once. Also ,it is totally free!"/>
	<meta name="author" content="Newnius"/>
	<link rel="icon" href="favicon.ico"/>
	<title>Grant auth | QuickAuth</title>
	<link href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet"/>
	<link href="style.css" rel="stylesheet"/>
	<script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
</head>

<body>
<div class="wrapper">
	<?php require_once('header.php'); ?>
	<?php require_once('modals.php'); ?>
	<div class="container">
		<div id="auth_grant" class="panel panel-default">
			<h3>Grant following site to access your account</h3>
			<span class="text-info" id="auth-grant-host">example.com</span>
			<form id="form-auth" action="javascript:void(0)">
				<h4>Information to be accessed</h4>
				* <label for="form-auth-openid"></label><input type="checkbox" id="form-auth-openid" class="form-group"
				                                               checked disabled/>&nbsp;<span>OpenID</span><br/>
				* <label for="form-auth-email"></label><input type="checkbox" id="form-auth-email" class="form-group"/>&nbsp;<span>Email</span><br/>
				* <label for="form-auth-verified"></label><input type="checkbox" id="form-auth-verified"
				                                                 class="form-group"/>&nbsp;<span>Verified</span><br/>
				* <label for="form-auth-role"></label><input type="checkbox" id="form-auth-role" class="form-group"/>&nbsp;<span>Role</span><br/>
				<br/>
				<button id="form-auth-accept" type="button" class="btn btn-primary">&nbsp;Accept&nbsp;</button>
				<button id="form-auth-decline" type="button" class="btn btn-default">&nbsp;Decline&nbsp;</button>
			</form>
		</div>
	</div> <!-- /container -->
	<div class="push"></div>
</div>
<?php require_once('footer.php'); ?>

<script src="js/util.js"></script>
<script src="js/script.js"></script>
<script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="//cdn.bootcss.com/blueimp-md5/1.1.1/js/md5.min.js"></script>
<script src="//cdn.bootcss.com/jqueryui/1.11.4/jquery-ui.js"></script>
</body>
</html>