<?php
return array(
	//'配置项'=>'配置值'
	//开启分组
	'APP_GROUP_LIST' =>'Index,Admin',
	//默认分组
	'DEFAULT_GROUP' =>'Index',
	//'__PUBLIC__'    =>  __ROOT__.'/Public',

	//开启独立分组
	'APP_GROUP_MODE' =>1,
	'APP_GROUP_PATH' =>'Modules',



	//数据库连接参数
	'DB_HOST' =>'127.0.0.1',
	'DB_USER' =>'root',
	'DB_PWD' =>'root',
	'DB_NAME' =>'thinkphp',			
	'DB_PREFIX' =>'hd_',

	//点语法解析
	'TMPL_VAR_IDENTIFY' =>'array',//默认解析数组而不是对象
	
	//模版连接名字
	'TMPL_FILE_DEPR' =>'_',

	//默认过滤函数,
	'DEFAULT_FILTER' =>'htmlspecialchars',
	
	//自定义SESSION数据库存储
	'SESSION_TYPE' =>'Db',
);
?>
