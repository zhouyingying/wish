<?php
//后台登录控制器

class LoginAction extends Action {
    public function index(){
    	$this->display();
     }

//验证码
public function verify(){
 	      ob_clean();
     	import('ORG.Util.Image');
     	Image::buildImageVerify(6,1,'png',80,25);
     }

//登录
public function login(){
	if(!IS_POST) halt('页面不存在');

	if(I('code','','md5') != session('verify')){
		$this->error('验证码错误');
	}

	//获取数据
	$username = I('username');
	$pwd = I('password','','md5');
	$user = M('user')->where(array('username' =>$username))->find();

	if(!$user || $user['password']!=$pwd){
		$this->error('账户或者密码错误');
	}
	if($user['lock'])
		$this->error('用户被锁定');

	$data = array(
		'id' =>$user['id'],
		'logintime' =>time(),
		'loginip' =>get_client_ip(),
		);
	M('user')->save($data);  //更新数据

	session(C('USER_AUTH_KEY'),$user['id']);
	session('username',$user['username']);
	session('logintime',date('Y-m-d H:i:s',$user['logintime']));
	session('loginip',$user['loginip']);

	//识别超级管理员
	if($user['username'] == C('RBAC_SUPERADMIN')){
		session(C('ADMIN_AUTH_KEY'),true);
	}

	//读取用户权限放入session
	import('ORG.Util.RBAC');
	RBAC::saveAccessList();

	$this->redirect('Admin/Index/index');
}
}
?>