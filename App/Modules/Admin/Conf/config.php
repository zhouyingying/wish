<?php
return array(
	//'配置项'=>'配置值'

	//配置超级管理员
	'RBAC_SUPERADMIN' =>'admin',

	//超级管理员识别
	'ADMIN_AUTH_KEY' =>'superadmin',
	'USER_AUTH_ON' =>true, //是否开启权限验证
	'USER_AUTH_TYPE' =>1,		//1 登录验证 2:时时验证  更改权限的时候,权限更改在下一次登录起效或者立刻起效
	'USER_AUTH_KEY' =>'uid',	//用户认证识别号 与登录sessionl里面的一样
	'NOT_AUTH_MODULE' =>'Index',			//无需认证的控制器,内的方法都不需要检测
	'NOT_AUTH_ACTION'=>'',		//无需认证的动作方法,分割
	'RBAC_ROLE_TABLE'=>'hd_role',//角色表名称
	'RBAC_USER_TABLE' =>'hd_role_user',//角色和用户的中间表
	'RBAC_ACCESS_TABLE' =>'hd_access',//权限表名称
	'RBAC_NODE_TABLE' =>'hd_node', //节点表名称


	//开启分组
	'APP_GROUP_LIST' =>'Index,Admin',
	//默认分组
	'DEFAULT_GROUP' =>'Index',

	'TMPL_PARSE_STRING' =>	array(
		'__PUBLIC__' =>___ROOT___.'/'.APP_NAME.'Tpl/Admin/Public',

		),

	//URL后缀链接
	'URL_HTML_SUFFIX' =>'',
);
?>