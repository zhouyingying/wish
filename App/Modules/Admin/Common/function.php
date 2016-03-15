
<?php
//后台的单独私有配置文件

	//数据搜索后的排序递归为多维数组
	//要处理的节点数组和父级ID
	function  node_merge($node,$access=null,$pid=0){
		$arr=array();

		foreach($node as $v){
			if(is_array($access)){
				if(in_array($v['id'],$access)){
					$v['access']=1;
				}else{
					$v['access']=0;
				}
			}


			if($v['pid']==$pid){
				$v['child'] = node_merge($node,$access,$v['id']);
				$arr[]=$v;
			}
		}
		return $arr;
	}
?>