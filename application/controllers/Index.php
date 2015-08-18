<?php
class IndexController extends Yaf_Controller_Abstract {
   public function indexAction() {//默认Action
   		$dbObj = new Db_Table('test','user');
   		$res = $dbObj->getCount('id=3');
   		var_dump($res);
   		$field = array();
   		$whereArr = array('order'=>'id','limit'=>'3');
   		$res = $dbObj->getAll( $field,$whereArr);
   		var_dump($res);
       $this->getView()->assign("content", "Hello World");
   }
}
?>

