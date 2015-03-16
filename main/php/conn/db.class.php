<?php
/************************************************
* 文件名：db.class.php
*
* 作  用：定义数据库连接类和操作类
*
* 作  者：漫溯
*
* E-mail：lixinyu0476@163.com
************************************************/
class ConnDB {			//数据库连接类
						
	//var $conn;

	function __construct()		//构造方法，为成员变量赋值
	{
		require_once('db.config.php');	//在config文件中构建数据
		$this->connect($db_config["host"],$db_config["user"],$db_config["pwd"],
			   $db_config["dbname"],$db_config["debug"],$db_config["charset"],
			   $db_config["pconnect"]);
	}

	//数据库连接
	function connect($host,$user,$pwd,$dbname,$debug,$charset,$pconnect){
		
		$pconnect==0 ? @mysql_connect($host,$user,$pwd):@mysql_pconnect($host,$user,$pwd);
		//$conn = @mysql_connect($host,$user,$pwd);
		if (mysql_errno() != 0) {
			die('无法连接数据库<br/>代码：'.mysql_errno().'<br/>原因：'.mysql_error());
		}

		if (!@mysql_select_db($dbname)) {
			$this->halt('选择数据库出错');
		}

		@mysql_set_charset($charset);
	}

	//错误提示
	function halt($msg=''){
		$msg .="\r\n".mysql_error();
		die($msg);
	}

	//查询
	function query($sql){
		$query = mysql_query($sql);
		if(!$query){
			$this->halt('Query Error:'.$sql);
		}
		return $query;
	}

	//插入
	//取一条数据
	function getone($sql,$result_type=MYSQL_ASSOC){
		$query = $this->query($sql);
		$rt = mysql_fetch_array($query,$result_type);
		return $rt;
	}
	//取全部数据
	function getall($sql,$result_type=MYSQL_ASSOC){
		$query = $this->query($sql);
		$i = 0;
		$rt = array();
		while ($row =& mysql_fetch_array($query,$result_type)) {
			$rt[$i] = $row;
			$i++;
		}
		return $tr;
	}
	//关闭
	function close() {
  		return mysql_close();
	}
	//影响行数
	function affected_rows(){
		return mysql_affected_rows();
	}
	
}


?>