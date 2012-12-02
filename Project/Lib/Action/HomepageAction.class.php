<?php
class HomepageAction extends Action{
	
	public function homepage(){
		$User = M('activity',null);
		$this->result = $list = $User->select();
		$this->assign('list',$list);
		$this->display('homepage');
	}
}
?>