<?php

class Bootstrap extends Yaf_Bootstrap_Abstract {
    public function _initConfig() {
        $arrConfig = Yaf_Application::app()->getConfig(); //把配置保存起来
        Yaf_Registry::set('config', $arrConfig);
    }

 
}
?>
