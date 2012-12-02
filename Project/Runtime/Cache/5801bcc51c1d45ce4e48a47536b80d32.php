<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>
<body>
<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>活动名称：<?php echo ($vo['act_name']); ?><br/>  
活动开始时间：<?php echo ($vo['time_start']); ?><br/>  
活动结束时间：<?php echo ($vo['time_end']); ?><br/>
活动归属：<?php echo ($vo['belong_to']); ?><br/>
活动地点：<?php echo ($vo['place']); ?><br/>
活动照片：<?php echo ($vo['photo']); ?><br/>
<br/><?php endforeach; endif; else: echo "" ;endif; ?>
</body>
</html>