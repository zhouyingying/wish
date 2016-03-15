<?php
// 本类由系统自动生成，仅供测试用途
//这是首页的控制器
class IndexAction extends Action {
    public function index(){
        $widh = M('wish')->select();
        $this->assign('wish',$widh);
    	$this->display();
    }

    //异步表单处理
    public function handle(){
    	//p(I('post.'));
    	
    	if(!IS_AJAX)
    		_404('页面不存在');
        $data = array(
            'username'=>I('username'),
            'content'=>I('content'),
            'time' =>time());

       // replace_phiz($data['content']);
        if($id=M('wish')->data($data)->add()){
            $data['id']=$id;
            $data['content'] = replace_phiz($data['content']);
            $data['time'] = date('y-m-d H:i',$data['time']);
            $data['status'] = 1;
            $this->ajaxReturn($data,'json');
        }else{
            $this->ajaxReturn(array('status'=>0),'json');
        }
    }
}
