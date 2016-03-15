<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="__ROOT__/App/Modules/Admin/Tpl/Public/Css/public.css" />
</head>
<style>
.zhou{
    text-align: center;
}


</style>
<body>
    <table class="table" >
        <tr>
            <th class="zhou">ID</th>
            <th class="zhou">角色名称</th>
            <th class="zhou">角色描述</th>
            <th class="zhou">开启状态</th>
            <th class="zhou">操作</th>
        </tr>

    <?php if(is_array($role)): foreach($role as $key=>$v): ?><tr>
            <td><?php echo ($v["id"]); ?></td>
            <td><?php echo ($v["name"]); ?></td>
            <td><?php echo ($v["remark"]); ?></td>
            <td>
                <?php if($v['status']): ?>开启
                    <?php else: ?>
                    关闭<?php endif; ?>
            </td>
            <td>
                <a href="<?php echo U('Admin/Rbac/access',array('rid'=>$v['id']));?>">配置权限</a>
            </td>
        </tr><?php endforeach; endif; ?>

    </table>




</body>
</html>