<?php  //Smarty PHP configuration    


  define('REAL_PATH', substr(dirname(__FILE__),0,-4));

  require(REAL_PATH.'/smarty/Smarty.class.php');
  require('/php/conn/db.class.php');

  //$conn = new ConnDB();

  $smarty = new Smarty();

  //定义目录路径
  $smarty->setCacheDir(REAL_PATH.'main/cache');
  $smarty->setConfigDir(REAL_PATH.'main/configs');
  $smarty->setPluginsDir(REAL_PATH.'main/plugins'); 
  $smarty->setTemplateDir(REAL_PATH.'main/templates');
  $smarty->setCompileDir(REAL_PATH.'main/templates_c');

  //添加Smarty自带的插件库 
  $smarty->addPluginsDir(REAL_PATH.'smarty/plugins');

  //检测Smarty目录结构配置是否有效  
   // $_smarty->testInstall();

  //定义左右结束符{# #}
  $smarty->left_delimiter = "{#";
  $smarty->right_delimiter = "#}";

  //关闭缓存
  $smarty->caching = false;

  //关闭调试
  $smarty->debugging = false;
?>
