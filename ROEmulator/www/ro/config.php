<?PHP
//-- --------------数据库地址-------------------------------------------------------- --//
$config_dbHost=			"127.0.0.1";
//-- -------------------------------------------------------------------------------- --//
//-- --------------RO数据库---------------------------------------------------------- --//
$config_dbName=			"ragnarok";
//-- -------------------------------------------------------------------------------- --//
//-- --------------数据库帐号-------------------------------------------------------- --//
$config_dbUser=			"root";
//-- -------------------------------------------------------------------------------- --//
//-- --------------数据库密码-------------------------------------------------------- --//
$config_dbPasswd=		"root";
//-- -------------------------------------------------------------------------------- --//
//-- --------------黑房地图---------------------------------------------------------- --//
$config_not_use=		"job_wiz.gat";
//-- -------------------------------------------------------------------------------- --//
//-- --------------LOGIN的IP--------------------------------------------------------- --//
$config_loginip=		"127.0.0.1";
//-- -------------------------------------------------------------------------------- --//
//-- --------------CHAR的IP---------------------------------------------------------- --//
$config_charip=			"127.0.0.1";
//-- -------------------------------------------------------------------------------- --//
//-- --------------MAP的IP----------------------------------------------------------- --//
$config_mapip=			"127.0.0.1";
//-- -------------------------------------------------------------------------------- --//
//-- --------------LOGIN的端口------------------------------------------------------- --//
$config_loginport=		"6900";
//-- -------------------------------------------------------------------------------- --//
//-- --------------CHAR的端口-------------------------------------------------------- --//
$config_charport=		"6121";
//-- -------------------------------------------------------------------------------- --//
//-- --------------MAP的端口--------------------------------------------------------- --//
$config_mapport=		"5121";
//-- -------------------------------------------------------------------------------- --//
//-- --------------网站名称---------------------------------------------------------- --//
$config_title=			"¨☆RO仙境传说☆¨";
$config_title2=			"RO仙境传说";
$config_game_Vname=		"<a href='index.php'>[ 返回首页 ]</a>";
//-- -------------------------------------------------------------------------------- --//
//-- --------------网站URL----------------------------------------------------------- --//
$config_index_url=		"http://127.0.0.1:8096/ro/";
//-- -------------------------------------------------------------------------------- --//
//-- --------------论坛URL----------------------------------------------------------- --//
$config_bbs_url=		"http://127.0.0.1:8096/";
//-- -------------------------------------------------------------------------------- --//
//-- --------------论坛新帖---------------------------------------------------------- --//
$config_bbs_msgscript=		"QQ群:129072156（99MaxEa RO 讨论组）";
//-- -------------------------------------------------------------------------------- --//
//-- --------------补丁设置---------------------------------------------------------- --//
//
$config_cilent_Vname=       "最新韩国KRO正式客户端20190306_Lite下载（请右键使用迅雷下载）";
$config_patch_Vname=		"¨☆RO仙境传说-单机版☆¨ - 登录补丁 下载（请右键使用迅雷下载）";
//
$config_cilent_url1=		"https://pan.baidu.com/s/1vrh-9wE29tfZvDiS10wkxw";
$config_cilent_url2=		"http://www.99max.me/thread-485-1-1.html";
$config_cilent_url3=		"http://ro.gnjoy.com/pds/down/";
$config_cilent_url4=		"ftp://ragadmin:icsragadmin!@222.122.19.217/Ragnarok110323.zip";
//
$config_patch_url1=		"https://pan.baidu.com/s/1qVFAwz55pdz-e_qTyjaXQg";
$config_patch_url2=		"http://www.99max.me/thread-3674-1-1.html";
$config_patch_url3=		"http://127.0.0.1/ro/down/ro.rar";
$config_patch_url4=		"http://127.0.0.1/ro/down/ro.rar";
/***********************************************************************************************\
*************************************************************************************************
*************************************************************************************************
****************************************下面为默认参数*******************************************
*************************************************************************************************
*************************************************************************************************
\***********************************************************************************************/
//-- ----连接数据库---- --//
$connect=mysql_pconnect($config_dbHost,$config_dbUser,$config_dbPasswd) or die("无法连接数据库！");
mysql_select_db($config_dbName) or die("数据库名可能有误！");
//-- ----匹配字符------ --//
function isAlNum($str) {
if(eregi("[^0-9a-zA-Z]",$str)) return 0;
return 1;
}
//-- ----匹配E-MAIL---- --//
function ismail( $str ) {
if( eregi("([a-z0-9\_\-\.]+)@([a-z0-9\_\-\.]+)", $str) ) return true;
else return false; 
}
?>