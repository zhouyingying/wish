<?php
// 本类由系统自动生成，仅供测试用途
//这是后台首页的控制器
class IndexAction extends Action {



    public function index(){
    	if(!isset($_SESSION['uid'])|| !isset($_SESSION['username'])){
			$this->redirect('Admin/Login/index');
		}
    	$this->display();
     }

    public function logout(){
    	session_unset();
    	session_destroy();
    	$this->redirect('Admin/Login/index');


    }
}
