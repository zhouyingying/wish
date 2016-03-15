<?php
//判断权限,其他方法只要继承它就可以自动判断权限
class CommonAction extends Action{

	public function _initialize(){
		//if($_SERVER['PHP_SELF']!='/wish/index.php/Admin/Login/index.html')

		if(!isset($_SESSION[C('USER_AUTH_KEY')])){
			$this->redirect('Admin/Login/index');
		}

		$notAuth = in_array(MODULE_NAME,explode(',',C('NOT_AUTH_MODULE')))||in_array(ACTION_NAME,explode(',',C('NOT_AUTH_ACTION')));

		if(C('USER_AUTH_ON')&& !$notAuth){
			import('ORG.Util.RBAC');
			RBAC::AccessDecision(GROUP_NAME)||$this->error('没有权限');
		}
	}
}
?>