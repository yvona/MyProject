<?php
class DetailAction extends Action{
	
	public function detail(){
		$User = M('comment',null);
		$list = $User->table('activity,comment')->where('activity.number = comment.act_num and activity.number = ?')->select();
		$this->assign('list',$list);
		$this->display('detail');
	}
}
?>