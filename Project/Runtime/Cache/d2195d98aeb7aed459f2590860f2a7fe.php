<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>123</title>
</head>
<body>
<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>act_name：<?php echo ($vo['act_name']); ?><br />  
number：<?php echo ($vo['number']); ?><br />  
belong_to：<?php echo ($vo['belong_to']); ?><br /><?php endforeach; endif; else: echo "" ;endif; ?> 
</body>
</html>