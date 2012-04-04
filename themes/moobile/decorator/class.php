<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title><?php echo isset($vars['title']) ? $vars['title'] : '' ?> | Moobile %%VERSION%%</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" href="../../css/reset.css">
	<link rel="stylesheet" href="../../css/style.css">
	<script src="../../js/libs/modernizr-2.5.3.min.js"></script>
</head>
<body>
	<div id="sidebar" class="sidebar"><?php echo isset($vars['sidebar']) ? $vars['sidebar'] : '' ?></div>
	<div id="content" class="content"><?php echo isset($vars['content']) ? $vars['content'] : '' ?></div>
</body>
</html>