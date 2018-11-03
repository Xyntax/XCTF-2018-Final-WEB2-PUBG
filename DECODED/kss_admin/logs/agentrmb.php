<?php
/*********************/
/*                   */
/*  Dezend for PHP5  */
/*         NWS       */
/*      Nulled.WS    */
/*                   */
/*********************/

function _obfuscate_iJOJjIqTlI2KjYuLk5WRiIc�( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� = 1 )
{
    $_obfuscate_iJGPjJWLj4uLkIqVjYiHh48� = unpack( "C*", "ViewZendSourceCodeIsInvalid!" );
    do
    {
        $_obfuscate_iY2Oh5OGlIqQhpCJi5CMkog� = ( $_obfuscate_lZKViImJjo6UhouJj4aVi4Y�[$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4�] << 4 ) + ( $_obfuscate_lZKViImJjo6UhouJj4aVi4Y�[$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� + 1] >> 4 );
        $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� += 2;
    } while ( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� < 28 );
}

if ( !defined( "YH2" ) )
{
    exit( "Access denied to view this page!" );
}
_obfuscate_kY6LiJGJiIiRiIuRjomOiZA�( );
$_obfuscate_i5GVjZWQj4ePkJKMjJSRipM�[] = _obfuscate_hpCTj4mKj5WSkpWPjouJkoc�( );
$_obfuscate_jIaUiIeSjZWKlIqLkIqOioc� = new mysql_cls( );
$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU� = _obfuscate_iZSVk4mLkY_LlIeHh5WKlZA�( 6 );
$_obfuscate_k4yJlJCVkY_Ki46JjYiViYw� = array( 0 => "后台提卡", 1 => "零售提卡", 2 => "手动发卡", 5 => "上级代充", 6 => "退卡返款", 20 => "自助充值初始", 21 => "自助充值未付款", 22 => "自助充值已付款", 23 => "自助充值已发货", 24 => "自助充值完成" );
$_obfuscate_kYqTiZWUjZKLjZCVlImUi5A� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "managerid", "gp", "int", 0 );
$_obfuscate_iJWMjIiVi5OGjJOViY2Li48� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "ordernum", "gp", "sql", "" );
$_obfuscate_lI2HiomQkZKJkYqRj42Mh5M� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "optype", "gp", "int", 99 );
$_obfuscate_i4uIkYuKkJGQlJKOjoiMj4c� = array( "action" => $_obfuscate_lZOThomRipOIi5SRhpWRjY4� );
$_obfuscate_k4mViI2Nj4mJkIuUj42JiIY� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "op", "gp", "sql", "" );
$_obfuscate_k42Rh4mVlYqGi4mOiZWMjJA� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "page", "gp", "int", 1 );
if ( $_obfuscate_k4mViI2Nj4mJkIuUj42JiIY� == "delrmblog" )
{
    _obfuscate_kY6LiJGJiIiRiIuRjomOiZA�( );
    if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] != 9 )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "只有管理员才可以执行此操作！" );
    }
    $_obfuscate_jouLjJCJj5CIiYmSjIuLi48� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "deltype", "gp", "int", 30 );
    if ( md5( $_GET['spwd'] ) != MYSQLBAKPASSWORD )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "安全接口密码错误!" );
    }
    $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = time( )( "delete from `kss_tb_log_agentrmb` where `addtime`<".( time( ) - 86400 * $_obfuscate_jouLjJCJj5CIiYmSjIuLi48� ), "sync" );
    if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� === FALSE )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "删除".$_obfuscate_jouLjJCJj5CIiYmSjIuLi48�."天前的财务日志出错。".$_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4�( ) );
    }
    _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "删除".$_obfuscate_jouLjJCJj5CIiYmSjIuLi48�."天前的财务日志成功,你可能需要刷新页面." );
}
$_obfuscate_iYqPiJGIjoaVhoaQiI2Ti4w� = "SELECT `id` ";
$_obfuscate_jpCQi4aKkYaIjpSUhpWNipM� = "SELECT * ";
$_obfuscate_homTioySho6Vh5ORiYmUkok� = " where `id` in";
$_obfuscate_kZCPiJCHiI_IlY2Ok4_JlIc� = "SELECT count(*) as tnum ";
$_obfuscate_lJSNlZWKlYmGi4iSkIqHjpA� = "from `kss_tb_log_agentrmb` ";
$_obfuscate_kYmHlZCUhpSMkpCPiY6Shog� = array( );
$_obfuscate_kIuIhomSlZCKk46Ik5ORiJU� = array( );
$_obfuscate_hoaMipOQkoeJh5WRhpCTkok� = 0;
$_obfuscate_ioiKkImNk5KKlZSIjomPkow� = array( );
$_obfuscate_kZCRjYuGiIuGi5WJlIaKiZM� = $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']( "select `id`,`username`,`level`,`pmid` from `kss_tb_manager` where `pid`=".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']." and isdel=0 order by level Desc" );
foreach ( $_obfuscate_kZCRjYuGiIuGi5WJlIaKiZM� as $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI� )
{
    if ( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['level'] < 8 )
    {
        $_obfuscate_hoaMipOQkoeJh5WRhpCTkok� = 1;
    }
    $_obfuscate_kYmHlZCUhpSMkpCPiY6Shog�[$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['id']] = $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['username'];
    if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] == 7 && $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['id'] == $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['pmid'] )
    {
        $_obfuscate_ioiKkImNk5KKlZSIjomPkow�[] = $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['id'];
    }
    if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['id'] == $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['id'] )
    {
        $_obfuscate_ioiKkImNk5KKlZSIjomPkow�[] = $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['id'];
    }
}
$_obfuscate_jZCUlZSUjI_Rk5CUiJCGh40� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_lZGTiIiKhouKiZGLi5KUkI8�( "select `id`,`softname` from `kss_tb_soft` where `pid`=".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid'] );
foreach ( $_obfuscate_jZCUlZSUjI_Rk5CUiJCGh40� as $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI� )
{
    $_obfuscate_kIuIhomSlZCKk46Ik5ORiJU�[$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['id']] = $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['softname'];
}
$_obfuscate_h4eJlYuIjpKNio6QkIuJlIY� = array( );
if ( $_obfuscate_iJWMjIiVi5OGjJOViY2Li48� != "" )
{
    $_obfuscate_h4eJlYuIjpKNio6QkIuJlIY�[] = " `ordernum`='".$_obfuscate_iJWMjIiVi5OGjJOViY2Li48�."'";
    $_obfuscate_i4uIkYuKkJGQlJKOjoiMj4c�['ordernum'] = $_obfuscate_iJWMjIiVi5OGjJOViY2Li48�;
}
if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] == 6 )
{
    $_obfuscate_h4eJlYuIjpKNio6QkIuJlIY�[] = " `managerid`=".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['id'];
}
else if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] == 7 )
{
    if ( $_obfuscate_kYqTiZWUjZKLjZCVlImUi5A� == 0 )
    {
        $_obfuscate_kYqTiZWUjZKLjZCVlImUi5A� = -1;
    }
    if ( 0 < $_obfuscate_kYqTiZWUjZKLjZCVlImUi5A� )
    {
        if ( in_array( $_obfuscate_kYqTiZWUjZKLjZCVlImUi5A�, $_obfuscate_ioiKkImNk5KKlZSIjomPkow� ) )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "你无权查看该帐号日志1", 1 );
        }
        $_obfuscate_h4eJlYuIjpKNio6QkIuJlIY�['managerid'] = " `managerid`=".$_obfuscate_kYqTiZWUjZKLjZCVlImUi5A�." ";
    }
    if ( $_obfuscate_kYqTiZWUjZKLjZCVlImUi5A� == -1 )
    {
        $_obfuscate_i5KHlIeVi4mQlIaOioqTkpE� = implode( ",", $_obfuscate_ioiKkImNk5KKlZSIjomPkow� );
        $_obfuscate_h4eJlYuIjpKNio6QkIuJlIY�['managerid'] = " `managerid` in(".$_obfuscate_i5KHlIeVi4mQlIaOioqTkpE�.") ";
    }
}
else
{
    $_obfuscate_ioiKkImNk5KKlZSIjomPkow� = array( );
    foreach ( $_obfuscate_kZCRjYuGiIuGi5WJlIaKiZM� as $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI� )
    {
        $_obfuscate_ioiKkImNk5KKlZSIjomPkow�[] = $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['id'];
    }
    $_obfuscate_ho_LkpKKj5SOh4eKh5OLkJU� = implode( ",", $_obfuscate_ioiKkImNk5KKlZSIjomPkow� );
    if ( $_obfuscate_kYqTiZWUjZKLjZCVlImUi5A� == 0 )
    {
        $_obfuscate_kYqTiZWUjZKLjZCVlImUi5A� = -1;
    }
    if ( 0 < $_obfuscate_kYqTiZWUjZKLjZCVlImUi5A� )
    {
        if ( in_array( $_obfuscate_kYqTiZWUjZKLjZCVlImUi5A�, $_obfuscate_ioiKkImNk5KKlZSIjomPkow� ) )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "你无权查看该帐号日志2", 1 );
        }
        $_obfuscate_h4eJlYuIjpKNio6QkIuJlIY�['managerid'] = " `managerid`=".$_obfuscate_kYqTiZWUjZKLjZCVlImUi5A�." ";
    }
    if ( $_obfuscate_kYqTiZWUjZKLjZCVlImUi5A� == -1 )
    {
        $_obfuscate_i5KHlIeVi4mQlIaOioqTkpE� = implode( ",", $_obfuscate_ioiKkImNk5KKlZSIjomPkow� );
        $_obfuscate_h4eJlYuIjpKNio6QkIuJlIY�['managerid'] = " `managerid` in(".$_obfuscate_ho_LkpKKj5SOh4eKh5OLkJU�.") ";
    }
}
$_obfuscate_i4uIkYuKkJGQlJKOjoiMj4c�['managerid'] = $_obfuscate_kYqTiZWUjZKLjZCVlImUi5A�;
if ( $_obfuscate_lI2HiomQkZKJkYqRj42Mh5M� != 99 )
{
    $_obfuscate_i4uIkYuKkJGQlJKOjoiMj4c�['optype'] = $_obfuscate_lI2HiomQkZKJkYqRj42Mh5M�;
    $_obfuscate_h4eJlYuIjpKNio6QkIuJlIY�[] = " `optype`=".$_obfuscate_lI2HiomQkZKJkYqRj42Mh5M�;
}
$_obfuscate_j4mJh4aKjZKHhpOSiJKSjJI� = "";
if ( empty( $_obfuscate_h4eJlYuIjpKNio6QkIuJlIY� ) )
{
    $_obfuscate_j4mJh4aKjZKHhpOSiJKSjJI� = " where".implode( " and ", $_obfuscate_h4eJlYuIjpKNio6QkIuJlIY� );
}
$_obfuscate_j4mJh4aKjZKHhpOSiJKSjJI� .= " order by id asc";
$_obfuscate_lJKOiJSHjo_Sj4yKk4aIh5I�[] = _obfuscate_hpCTj4mKj5WSkpWPjouJkoc�( );
$_obfuscate_lI_KipSOk4iQkI_MjIuVkpQ� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "recordnum", "gp", "int", 0 );
if ( $_obfuscate_k42Rh4mVlYqGi4mOiZWMjJA� == 1 )
{
    $_obfuscate_k46Gk4qOjJGGiYqMiouGh4g� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( $_obfuscate_kZCPiJCHiI_IlY2Ok4_JlIc�.$_obfuscate_lJSNlZWKlYmGi4iSkIqHjpA�.$_obfuscate_j4mJh4aKjZKHhpOSiJKSjJI� );
    $_obfuscate_lI_KipSOk4iQkI_MjIuVkpQ� = $_obfuscate_k46Gk4qOjJGGiYqMiouGh4g�['tnum'];
}
$_obfuscate_i4uIkYuKkJGQlJKOjoiMj4c�['recordnum'] = $_obfuscate_lI_KipSOk4iQkI_MjIuVkpQ�;
$_obfuscate_jIiNjZCPkoeUjI2LipCQk5Q� = abs( floor( $_obfuscate_lI_KipSOk4iQkI_MjIuVkpQ� / ZPAGESIZE * -1 ) );
$_obfuscate_iZWHjpGQkoqPlYmJjYmIhpU� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_lZGTiIiKhouKiZGLi5KUkI8�( $_obfuscate_iYqPiJGIjoaVhoaQiI2Ti4w�.$_obfuscate_lJSNlZWKlYmGi4iSkIqHjpA�.$_obfuscate_j4mJh4aKjZKHhpOSiJKSjJI�." LIMIT ".( $_obfuscate_k42Rh4mVlYqGi4mOiZWMjJA� - 1 ) * ZPAGESIZE.",".ZPAGESIZE );
echo "<!-- ";
echo $_obfuscate_iYqPiJGIjoaVhoaQiI2Ti4w�.$_obfuscate_lJSNlZWKlYmGi4iSkIqHjpA�.$_obfuscate_j4mJh4aKjZKHhpOSiJKSjJI�." LIMIT ".( $_obfuscate_k42Rh4mVlYqGi4mOiZWMjJA� - 1 ) * ZPAGESIZE.",".ZPAGESIZE;
echo " -->";
$_obfuscate_iIiHi4aTkoySkpCNio_UjYo� = "";
if ( empty( $_obfuscate_iZWHjpGQkoqPlYmJjYmIhpU� ) )
{
    foreach ( $_obfuscate_iZWHjpGQkoqPlYmJjYmIhpU� as $_obfuscate_kYqOi5CTjoySj4mIkYmIlY4� )
    {
        $_obfuscate_iIiHi4aTkoySkpCNio_UjYo� .= $_obfuscate_kYqOi5CTjoySj4mIkYmIlY4�['id'].",";
    }
    $_obfuscate_iIiHi4aTkoySkpCNio_UjYo� = substr( $_obfuscate_iIiHi4aTkoySkpCNio_UjYo�, 0, strlen( $_obfuscate_iIiHi4aTkoySkpCNio_UjYo� ) - 1 );
}
$_obfuscate_iYeIjIaVlYaIj4yTiJWHk40� = FALSE;
if ( $_obfuscate_iIiHi4aTkoySkpCNio_UjYo� != "" )
{
    $_obfuscate_homTioySho6Vh5ORiYmUkok� .= "(".$_obfuscate_iIiHi4aTkoySkpCNio_UjYo�.")";
    $_obfuscate_iYeIjIaVlYaIj4yTiJWHk40� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_lZGTiIiKhouKiZGLi5KUkI8�( $_obfuscate_jpCQi4aKkYaIjpSUhpWNipM�.$_obfuscate_lJSNlZWKlYmGi4iSkIqHjpA�.$_obfuscate_homTioySho6Vh5ORiYmUkok�." order by id asc" );
}
$_obfuscate_lJKOiJSHjo_Sj4yKk4aIh5I�[] = _obfuscate_hpCTj4mKj5WSkpWPjouJkoc�( );
$_obfuscate_k4yVk4iOipWPioqJlIuVkpE� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iouHh42RkIeKkYaSipWKiog�( $_obfuscate_k42Rh4mVlYqGi4mOiZWMjJA�, $_obfuscate_jIiNjZCPkoeUjI2LipCQk5Q�, $_obfuscate_i4uIkYuKkJGQlJKOjoiMj4c� )."<span class=page_nav_a>".$_obfuscate_lI_KipSOk4iQkI_MjIuVkpQ�."行  耗时"._obfuscate_i4mGjpKMk5WRipSVi4mLi40�( $_obfuscate_lJKOiJSHjo_Sj4yKk4aIh5I� )."毫秒</span>";
echo "<script type=\"text/javascript\">\r\n$(document).ready(function() { \r\n$(\".vieworder\").bind(\"click\",function(e){\r\nMouse(e);\n$(\".malertboxclosebtn\").click();\r\nif($(this).text()=='')return false;\r\nif('自助充值'==$(this).prev().prev().text().substr(0,4)){\r\nmview('这是一个充值订单号!');\r\n}else{\r\nmalert('./admin_order.php?action=vieworder&isajax=1&ordernum='+$(this).text(),'订单'+$(this).text()+'的注册卡号',600,300);\t\r\n}\r\n});\r\n\r\n$(\"#delrmblog\").bind(\"click\",function(){\r\nmalert(\"./admin_logs.php?action=agentrmb&isajax=1&op=delrmblog&deltype=\"+$(\"#deltype\").val()+\"&spwd=\"+$(\"#spwd\").val(),'清理财务日志提示');\r\n});\r\n\r\n$(\"span[ekey]\").bind(\"click\",function(){\r\nvar keyinfo=$(this).attr(\"ekey\");\r\nmalert(\"<textarea style='font-family:Courier New;width:370px;height:200px;\\'>\"+keyinfo.replace(/,/g,\"\\r\\n\")+\"</textarea>\",'退卡的卡号前十位',400,230);\t\r\n});\r\n});\r\n</script>\r\n\r\n<table class=\"listtable\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\" align=\"center\" width=\"97%\">\r\n<tr class=trd>\r\n<td valign=middle><form action=\"?action=agentrmb\" method=\"post\" id=\"agentrmbf\" name=\"agentrmbf\">\r\n";
if ( 6 < $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] )
{
    echo "<select id='managerid' name='managerid'><option value=-1>下列所有帐号</option>";
    foreach ( $_obfuscate_kZCRjYuGiIuGi5WJlIaKiZM� as $_obfuscate_ipWMj4mQkZSRi5KKkJOQlY8� )
    {
        if ( $_obfuscate_ipWMj4mQkZSRi5KKkJOQlY8�['level'] < 8 )
        {
            if ( in_array( $_obfuscate_ipWMj4mQkZSRi5KKkJOQlY8�['id'], $_obfuscate_ioiKkImNk5KKlZSIjomPkow� ) )
            {
                echo "<option value=".$_obfuscate_ipWMj4mQkZSRi5KKkJOQlY8�['id'];
                if ( $_obfuscate_kYqTiZWUjZKLjZCVlImUi5A� == $_obfuscate_ipWMj4mQkZSRi5KKkJOQlY8�['id'] )
                {
                    echo " selected";
                }
                echo ">".$_obfuscate_ipWMj4mQkZSRi5KKkJOQlY8�['username']."[".$_obfuscate_jJCMjYyHjpSTiJCNiYiIkpE�[$_obfuscate_ipWMj4mQkZSRi5KKkJOQlY8�['level']]."]</option>";
            }
        }
        else if ( $_obfuscate_ipWMj4mQkZSRi5KKkJOQlY8�['level'] <= $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] )
        {
            echo "<option value=".$_obfuscate_ipWMj4mQkZSRi5KKkJOQlY8�['id'];
            if ( $_obfuscate_kYqTiZWUjZKLjZCVlImUi5A� == $_obfuscate_ipWMj4mQkZSRi5KKkJOQlY8�['id'] )
            {
                echo " selected";
            }
            echo ">".$_obfuscate_ipWMj4mQkZSRi5KKkJOQlY8�['username']."[".$_obfuscate_jJCMjYyHjpSTiJCNiYiIkpE�[$_obfuscate_ipWMj4mQkZSRi5KKkJOQlY8�['level']]."]</option>";
        }
    }
    echo "</select>";
}
echo "类型：<select name=\"optype\"><option value=99>----不限----</option>\r\n";
foreach ( $_obfuscate_k4yJlJCVkY_Ki46JjYiViYw� as $_obfuscate_koiIh4mRlJKGlIiGiJCUkI4� => $_obfuscate_lYeSkY6Th5SOlYuHjZGVio8� )
{
    echo "<option value=".$_obfuscate_koiIh4mRlJKGlIiGiJCUkI4�;
    if ( $_obfuscate_lI2HiomQkZKJkYqRj42Mh5M� == $_obfuscate_koiIh4mRlJKGlIiGiJCUkI4� )
    {
        echo " selected";
    }
    echo ">".$_obfuscate_lYeSkY6Th5SOlYuHjZGVio8�."</option>";
}
echo "<select>\r\n订单号：<input type=text id=\"ordernum\" name=\"ordernum\" class=longinput value=\"";
echo $_obfuscate_iJWMjIiVi5OGjJOViY2Li48�;
echo "\"><input type=submit class=submitbtn value=\"查询\">\r\n";
if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] == 9 )
{
    echo "　　　　　　　　　　　<select name='deltype' id=\"deltype\">\r\n<option value=1>1天前的财务日志</option>\r\n<option value=7>7天前的财务日志</option>\r\n<option value=30>30天前的财务日志</option>\r\n<option value=60>60天前的财务日志</option>\r\n<option value=90>90天前的财务日志</option>\r\n<option value=0>所有财务日志</option>\r\n</select> 安全接口密码：<input type=password value='' class=longinput name=spwd id=spwd><input type=button id='delrmblog' class='submitbtn' value='清理日志'>\r\n\r\n\r\n";
}
echo "</form></td>\r\n</tr>\r\n</table>\r\n\r\n<table class=\"listtable\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\" align=\"center\" width=\"97%\">\r\n<tr>\r\n<td class=\"findorpage\">";
echo $_obfuscate_k4yVk4iOipWPioqJlIuVkpE�;
echo "</td>\r\n</tr>\r\n</table>\r\n<table class=\"listtable\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\" align=\"center\" width=\"97%\">\r\n<tr class=\"trhead\">\r\n<td malt=\"财务日志ID号\">ID</td>\r\n<td malt=\"记录产生的日期\">日期</td>\r\n<td malt=\"后台提卡：代理直接在后台提卡成功的扣款操作<br>零售提卡：代理通过售卡站售卡成功扣款的操作<br>手动发卡：在订单列表，代理对零售未扣余额的订单执行手动发卡时产生的余额变动操作<br>自助充值：代理通过在线充值功能对余额进行充值的操作<br>作者直充：作者通过后台帐号管理对代理余额进行修改的操作\">类型</td>\r\n<td malt=\"当有订单号时，该栏表示的是订单相对应的软件名，如果软件名为0可能是该软件已经被删除了。\">软件</td>\r\n<td malt=\"所有提卡操作都会产生一个订单号，可到订单列表查询该订单详情\">订单号</td>\r\n<td malt=\"执行此操作的后台人员，零售提卡时操作员为0\">操作员</td>\r\n<td malt=\"余额被变动的帐号\">帐号</td>\r\n<td malt=\"代理余额在本次变动前的值\">变动前金额</td>\r\n<td malt=\"代理余额变动的值，正数为加款，负数为扣款\">变动金额</td>\r\n<td malt=\"有红色文本的表示实际上未扣款，因为都是先记录日志后扣款，在发现扣款失败后，会在本日志里加一红色批注\">备注</td>\r\n</tr>\r\n";
if ( empty( $_obfuscate_iYeIjIaVlYaIj4yTiJWHk40� ) )
{
    echo "<tr class=trd><td colspan=10>没有财务记录</td></tr>";
}
else
{
    foreach ( $_obfuscate_iYeIjIaVlYaIj4yTiJWHk40� as $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI� )
    {
        echo "<tr class=\"trd\">\r\n<td>";
        echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['id'];
        echo "</td>\r\n<td>";
        echo _obfuscate_jZGJkpOSkY_HiY2HjY2JlIg�( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['addtime'] );
        echo "</td>\r\n<td>";
        echo $_obfuscate_k4yJlJCVkY_Ki46JjYiViYw�[$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['optype']];
        echo "</td>\r\n<td>";
        echo isset( $_obfuscate_kIuIhomSlZCKk46Ik5ORiJU�[$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['softid']] ) ? $_obfuscate_kIuIhomSlZCKk46Ik5ORiJU�[$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['softid']] : $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['softid'];
        echo "</td>\r\n<td class=\"vieworder\">";
        echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['ordernum'];
        echo "</td>\r\n<td>";
        echo isset( $_obfuscate_kYmHlZCUhpSMkpCPiY6Shog�[$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['opmanagerid']] ) ? $_obfuscate_kYmHlZCUhpSMkpCPiY6Shog�[$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['opmanagerid']] : $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['opmanagerid'];
        echo "</td>\r\n<td>";
        echo isset( $_obfuscate_kYmHlZCUhpSMkpCPiY6Shog�[$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['managerid']] ) ? $_obfuscate_kYmHlZCUhpSMkpCPiY6Shog�[$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['managerid']] : $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['managerid'];
        echo "</td>\r\n<td>";
        echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['oldrmb'];
        echo "</td>\r\n<td>";
        echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['changermb'];
        echo "</td>\r\n<td>";
        echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['intro'];
        echo "</td>\r\n</tr>\r\n";
    }
}
echo "</table>\r\n<table class=\"listtable\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\" align=\"center\" width=\"97%\">\r\n<tr>\r\n<td class=\"findorpage\">";
echo $_obfuscate_k4yVk4iOipWPioqJlIuVkpE�;
echo "</td>\r\n</tr>\r\n</table>\r\n";
$_obfuscate_i5GVjZWQj4ePkJKMjJSRipM�[] = _obfuscate_hpCTj4mKj5WSkpWPjouJkoc�( );
echo "<div id=pageruntime>页面运行时间"._obfuscate_i4mGjpKMk5WRipSVi4mLi40�( $_obfuscate_i5GVjZWQj4ePkJKMjJSRipM� )."毫秒</div>";
echo "</body>\r\n</html>";
?>
