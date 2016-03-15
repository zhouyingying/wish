<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="__ROOT__/App/Modules/Admin/Tpl/Public/Css/public.css"/>
	<!-- <link rel="stylesheet" type="text/css" href="__ROOT__/App/Tpl/Admin/Public/Css/public.css" /> -->
</head>
<body>
	<table>
		<tr>
			<th>ID</th>
			<th>发布者</th>
			<th>内容</th>
			<th>发布时间</th>
			<th>操作</th>

		</tr>
		
		<?php if(is_array($wish)): foreach($wish as $key=>$v): ?><tr>
			<th><?php echo ($v["id"]); ?></th>
			<th><?php echo ($v["username"]); ?></th>
			<th><?php echo (replace_phiz($v["content"])); ?></th>
			<th><?php echo (date('y-m-d H:i',$v["time"])); ?></th>
			<th><a href="<?php echo U('Admin/MsgManage/delete',array('id'=>$v['id']));?>">删除</a></th>
		</tr><?php endforeach; endif; ?>
	<tr>
		<td colspan="5" align="center">
			<?php echo ($page); ?>
		</td>
	</tr>
</table>
</body>
</html>