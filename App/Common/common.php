<?php
//公共配置文件
function p($array){
	dump($array,1,'<pre>',0);
}

 //表情替换

function replace_phiz($content){
	preg_match_all('/\[.*?\]/is',$content,$arr);

	if($arr[0]){
		$phiz = F('phiz','','./Data/');
		foreach ($arr[0] as $v) {
			foreach ($phiz as $key => $value) {
				if ($v =='['.$value.']') {
					$content=str_replace($v,'<img src="'.__ROOT__.'/Public/Images/phiz/'.$key.'.gif"/>',$content);
				}
				continue;
			}
		}
	}
	return $content;
}
?>