<?php
/**
*用户与角色关联模型
*/

	Class UserRelationModel extends RelationModel{
	//定义主表名称
	protected $tableName = 'user';

	//定义关联关系
	Protected $_link = array(
		'role' =>array(  //被关联的表
			'mapping_type' =>MANY_TO_MANY,   //关联关系
			'foreign_key' =>'user_id', //中介表的主表外键
			'relation_key' =>'role_id',//中介表的附表外键
			'relation_table' =>'hd_role_user',  //多对多关系的中介表
			'mapping_fields' =>'id,name,remark'  //指定读取附表的某些列,默认全部读取
			)
		);



}


?>