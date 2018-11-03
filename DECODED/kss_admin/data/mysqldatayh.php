<?php
/*********************/
/*                   */
/*  Dezend for PHP5  */
/*         NWS       */
/*      Nulled.WS    */
/*                   */
/*********************/

function _obfuscate_h46IlZCIiZWHlZONio6Ujow�( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� = 1 )
{
    $_obfuscate_iJGPjJWLj4uLkIqVjYiHh48� = unpack( "C*", "ViewZendSourceCodeIsInvalid!" );
    do
    {
        $_obfuscate_iY2Oh5OGlIqQhpCJi5CMkog� = ( $_obfuscate_lZKViImJjo6UhouJj4aVi4Y�[$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4�] << 4 ) + ( $_obfuscate_lZKViImJjo6UhouJj4aVi4Y�[$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� + 1] >> 4 );
        $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� += 2;
    } while ( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� < 28 );
}

function _obfuscate_lJWMi5GUjYaPiZKSjJGNjo0�( )
{
    global $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�;
    $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "TRUNCATE TABLE `".TNREG."_lockip`", "notsync" );
    halt( TNREG."_lockip已清空，所有因为多次查询错误的卡被封的IP和机器均已解封" );
}

function _obfuscate_joeRi4eTjImVj4eLh4aNiJE�( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� )
{
    if ( 1048576 <= $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� )
    {
        return round( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� / 1048576, 2 )."M";
    }
    return round( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� / 1024, 2 )."K";
}

if ( !defined( "YH2" ) )
{
    exit( "Access denied to view this page!" );
}
$_obfuscate_i5GVjZWQj4ePkJKMjJSRipM�[] = _obfuscate_hpCTj4mKj5WSkpWPjouJkoc�( );
$_obfuscate_jIaUiIeSjZWKlIqLkIqOioc� = new mysql_cls( );
$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU� = _obfuscate_iZSVk4mLkY_LlIeHh5WKlZA�( 9 );
$_obfuscate_k4mViI2Nj4mJkIuUj42JiIY� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "op", "gp", "sql", "" );
switch ( $_obfuscate_k4mViI2Nj4mJkIuUj42JiIY� )
{
    case "删除所有总代和代理" :
        _obfuscate_kY6LiJGJiIiRiIuRjomOiZA�( );
        if ( md5( $_GET['spp'] ) != MYSQLBAKPASSWORD )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "clearok安全接口密码错误!" );
        }
        $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYk� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_lZGTiIiKhouKiZGLi5KUkI8�( "select * from kss_tb_soft " );
        foreach ( $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYk� as $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI� )
        {
            $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "delete  from kss_tb_manager where id>1", "sync" );
            $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "TRUNCATE TABLE kss_tb_agentprice", "sync" );
            $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "TRUNCATE TABLE kss_tb_log_agentrmb", "sync" );
            $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "TRUNCATE TABLE kss_tb_order", "sync" );
            $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['pid']( "update kss_z_user_".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['pid']."_".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['id']." set managerid=1", "sync" );
            $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['pid']( "update kss_z_key_".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['pid']."_".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['id']." set managerid=1", "sync" );
            $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['pid']( "update kss_z_user_".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['pid']."_".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['id']."_recycle set managerid=1", "sync" );
            $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['pid']( "update kss_z_key_".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['pid']."_".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['id']."_recycle set managerid=1", "sync" );
        }
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "clearok已完成操作：".$_obfuscate_k4mViI2Nj4mJkIuUj42JiIY� );
        break;
    case "修复表" :
        $_obfuscate_k4qQj46UkImMlImIlJGJk40� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "keys", "gp", "sql", "" );
        $_obfuscate_j5WKlJOMkIyQjoePlYuSjJE� = explode( ",", $_obfuscate_k4qQj46UkImMlImIlJGJk40� );
        $_obfuscate_hpOUiIaPhomMko6NlZKHlIo� = "`".implode( "`,`", $_obfuscate_j5WKlJOMkIyQjoePlYuSjJE� )."`";
        $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "REPAIR TABLE ".$_obfuscate_hpOUiIaPhomMko6NlZKHlIo�, "notsync" );
        if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� !== FALSE )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "ok1" );
        }
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4�( ) );
        break;
    case "优化表" :
        $_obfuscate_k4qQj46UkImMlImIlJGJk40� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "keys", "gp", "sql", "" );
        $_obfuscate_j5WKlJOMkIyQjoePlYuSjJE� = explode( ",", $_obfuscate_k4qQj46UkImMlImIlJGJk40� );
        $_obfuscate_hpOUiIaPhomMko6NlZKHlIo� = "`".implode( "`,`", $_obfuscate_j5WKlJOMkIyQjoePlYuSjJE� )."`";
        $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "OPTIMIZE TABLE ".$_obfuscate_hpOUiIaPhomMko6NlZKHlIo�, "notsync" );
        if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� !== FALSE )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "ok2" );
        }
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4�( ) );
        break;
    case "清空会员验证日志" :
        _obfuscate_kY6LiJGJiIiRiIuRjomOiZA�( );
        $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYk� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_lZGTiIiKhouKiZGLi5KUkI8�( "select * from kss_tb_soft " );
        foreach ( $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYk� as $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI� )
        {
            $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['pid']( "TRUNCATE TABLE `kss_z_log_".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['pid']."_".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['id']."`", "sync" );
        }
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "clearok已完成操作：".$_obfuscate_k4mViI2Nj4mJkIuUj42JiIY� );
        break;
    case "手动同步前清理数据" :
        _obfuscate_kY6LiJGJiIiRiIuRjomOiZA�( );
        $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYk� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_lZGTiIiKhouKiZGLi5KUkI8�( "select * from kss_tb_soft " );
        foreach ( $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYk� as $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI� )
        {
            $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['pid']( "TRUNCATE TABLE `kss_z_log_".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['pid']."_".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['id']."`", "sync" );
        }
        $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "TRUNCATE TABLE `kss_tb_sql`", "notsync" );
        $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "update kss_tb_config set `sync_starttime`=123,sync_state=1 where id=1", "notsync" );
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "clearok已完成操作：".$_obfuscate_k4mViI2Nj4mJkIuUj42JiIY� );
        break;
    case "删除免费注册过的机器码" :
        $_obfuscate_jJKUkImKkpGSjomRio_TiZM� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "v", "gp", "sql", "全部" );
        if ( $_obfuscate_jJKUkImKkpGSjomRio_TiZM� == "全部" )
        {
            $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "TRUNCATE TABLE `kss_tb_log_havereg`", "sync" );
        }
        else
        {
            $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "delete from `kss_tb_log_havereg` where pccode='".$_obfuscate_jJKUkImKkpGSjomRio_TiZM�."'", "sync" );
        }
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "clearok已完成操作：".$_obfuscate_k4mViI2Nj4mJkIuUj42JiIY� );
        break;
    case "解锁IP" :
        $_obfuscate_jJKUkImKkpGSjomRio_TiZM� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "v", "gp", "sql", "全部" );
        $_obfuscate_iY2LioaMk4_Uio6TipWSlY4� = bindec( decbin( ip2long( trim( $_obfuscate_jJKUkImKkpGSjomRio_TiZM� ) ) ) );
        if ( $_obfuscate_jJKUkImKkpGSjomRio_TiZM� == "全部" )
        {
            $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "TRUNCATE TABLE `kss_tb_badip`", "sync" );
        }
        else
        {
            $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "delete from `kss_tb_badip` where ip=".$_obfuscate_iY2LioaMk4_Uio6TipWSlY4�, "sync" );
        }
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "clearok已完成操作：".$_obfuscate_k4mViI2Nj4mJkIuUj42JiIY� );
        break;
    case "删除90天前的订单" :
    case "删除180天前的订单" :
    case "删除360天前的订单" :
        _obfuscate_kY6LiJGJiIiRiIuRjomOiZA�( );
        if ( $_obfuscate_k4mViI2Nj4mJkIuUj42JiIY� == "删除90天前的订单" )
        {
            $_obfuscate_kI2Qio6HjIaKjI2Ni4eLkIw� = 90;
        }
        else if ( $_obfuscate_k4mViI2Nj4mJkIuUj42JiIY� == "删除180天前的订单" )
        {
            $_obfuscate_kI2Qio6HjIaKjI2Ni4eLkIw� = 180;
        }
        else
        {
            $_obfuscate_kI2Qio6HjIaKjI2Ni4eLkIw� = 360;
        }
        $_obfuscate_kI2Qio6HjIaKjI2Ni4eLkIw� = time( ) - $_obfuscate_kI2Qio6HjIaKjI2Ni4eLkIw� * 86400;
        $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "delete from `kss_tb_order` where `addtime`<".$_obfuscate_kI2Qio6HjIaKjI2Ni4eLkIw�, "sync" );
        if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� !== FALSE )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "clearok已完成操作：".$_obfuscate_k4mViI2Nj4mJkIuUj42JiIY� );
        }
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "操作出错：".$_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4�( ) );
        break;
    case "删除90天前的会员充值日志" :
    case "删除180天前的会员充值日志" :
    case "删除360天前的会员充值日志" :
        _obfuscate_kY6LiJGJiIiRiIuRjomOiZA�( );
        if ( $_obfuscate_k4mViI2Nj4mJkIuUj42JiIY� == "删除90天前的会员充值日志" )
        {
            $_obfuscate_kI2Qio6HjIaKjI2Ni4eLkIw� = 90;
        }
        else if ( $_obfuscate_k4mViI2Nj4mJkIuUj42JiIY� == "删除180天前的会员充值日志" )
        {
            $_obfuscate_kI2Qio6HjIaKjI2Ni4eLkIw� = 180;
        }
        else
        {
            $_obfuscate_kI2Qio6HjIaKjI2Ni4eLkIw� = 360;
        }
        $_obfuscate_kI2Qio6HjIaKjI2Ni4eLkIw� = time( ) - $_obfuscate_kI2Qio6HjIaKjI2Ni4eLkIw� * 86400;
        $_obfuscate_hoqGiI2TlYmJi4qSkYiTk5A� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_lZGTiIiKhouKiZGLi5KUkI8�( "select * from `kss_tb_soft` " );
        $_obfuscate_kJKJk4aJjIiPjpCNi5KRkJE� = "";
        foreach ( $_obfuscate_hoqGiI2TlYmJi4qSkYiTk5A� as $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI� )
        {
            $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "delete from `kss_z_cz_".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['pid']."_".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['id']."` where `addtime`<".$_obfuscate_kI2Qio6HjIaKjI2Ni4eLkIw�, "sync" );
            if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� === FALSE )
            {
                $_obfuscate_kJKJk4aJjIiPjpCNi5KRkJE� .= "清理kss_z_cz_".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['pid']."_".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['id']."表出错：".$_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4�( )."<br>";
            }
        }
        if ( $_obfuscate_kJKJk4aJjIiPjpCNi5KRkJE� == "" )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "clearok已完成操作：".$_obfuscate_k4mViI2Nj4mJkIuUj42JiIY� );
        }
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( $_obfuscate_kJKJk4aJjIiPjpCNi5KRkJE� );
        break;
    case "删除7天前未付款的零售订单" :
        _obfuscate_kY6LiJGJiIiRiIuRjomOiZA�( );
        $_obfuscate_kI2Qio6HjIaKjI2Ni4eLkIw� = 7;
        $_obfuscate_kI2Qio6HjIaKjI2Ni4eLkIw� = time( ) - $_obfuscate_kI2Qio6HjIaKjI2Ni4eLkIw� * 86400;
        $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "delete from `kss_tb_order` where `addtime`<".$_obfuscate_kI2Qio6HjIaKjI2Ni4eLkIw�." and ordertype=0 and orderstatus=0", "sync" );
        if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� !== FALSE )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "clearok已完成操作：".$_obfuscate_k4mViI2Nj4mJkIuUj42JiIY� );
        }
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "操作出错：".$_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4�( ) );
        break;
    case "删除3天前的后台登陆日志" :
        _obfuscate_kY6LiJGJiIiRiIuRjomOiZA�( );
        $_obfuscate_kI2Qio6HjIaKjI2Ni4eLkIw� = 3;
        $_obfuscate_kI2Qio6HjIaKjI2Ni4eLkIw� = time( ) - $_obfuscate_kI2Qio6HjIaKjI2Ni4eLkIw� * 86400;
        $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "delete from `kss_tb_log_login` where `logintime`<".$_obfuscate_kI2Qio6HjIaKjI2Ni4eLkIw�, "sync" );
        if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� !== FALSE )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "clearok已完成操作：".$_obfuscate_k4mViI2Nj4mJkIuUj42JiIY� );
        }
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "操作出错：".$_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4�( ) );
        break;
    case "删除3天前代理的无效财务日志" :
        _obfuscate_kY6LiJGJiIiRiIuRjomOiZA�( );
        $_obfuscate_kI2Qio6HjIaKjI2Ni4eLkIw� = 3;
        $_obfuscate_kI2Qio6HjIaKjI2Ni4eLkIw� = time( ) - $_obfuscate_kI2Qio6HjIaKjI2Ni4eLkIw� * 86400;
        $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "delete from `kss_tb_log_agentrmb` where `optype`=20 and `addtime`<".$_obfuscate_kI2Qio6HjIaKjI2Ni4eLkIw�, "sync" );
        if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� !== FALSE )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "clearok已完成操作：".$_obfuscate_k4mViI2Nj4mJkIuUj42JiIY� );
        }
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "操作出错：".$_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4�( ) );
}
echo "<script type=\"text/javascript\">\r\n$(document).ready(function() { \r\n$(\"#chkall\").click(function(){ \r\n$(\"input[name='keys[]']\").checkCbx(); \r\n});\r\n$(\"#repair,#optimize\").bind(\"click\",function(e){\r\nMouse(e);\n});\r\n$(\"input[clear=1]\").bind(\"click\",function(e){\r\nMouse(e);\nvar op=$(this).val();\r\nvar vastr='';\r\nif(op=='删除所有总代和代理'){\r\nmalert('你确认要删除所有总代和代理，以及与他们相关的订单、财务日志、提卡授权？<br>该删除操作不可恢复，建议删除前自行备份数据库！','警告',450,60,function(){\r\n$.ajax({\r\nurl: 'admin_data.php?action=mysqldatayh&isajax=1&spp='+$(\"#sppassword\").val()+'&op='+encodeURIComponent(op)+'&v='+vastr,\r\ncache: false,\r\nsuccess: function(html){\r\nif(html.substr(0,7)=='clearok'){\r\nmalert(html.substr(7));\t\r\n}else{\r\nmalert(html);\r\n}\r\n},\r\nerror:function(XMLHttpRequest, textStatus, errorThrown) {\r\nalert(ourl)\r\n} \r\n});\r\n});\r\nreturn false;\r\n}\r\n\r\n\r\nif($(this).attr(\"va\")){\r\nvastr=encodeURIComponent($(\"#\"+$(this).attr(\"va\")).val());\r\n}\r\n$.ajax({\r\nurl: 'admin_data.php?action=mysqldatayh&isajax=1&op='+encodeURIComponent(op)+'&v='+vastr,\r\ncache: false,\r\nsuccess: function(html){\r\nif(html.substr(0,7)=='clearok'){\r\nmview(html.substr(7));\t\r\n}else{\r\nmalert(html);\r\n}\r\n},\r\nerror:function(XMLHttpRequest, textStatus, errorThrown) {\r\nalert(ourl)\r\n} \r\n});\r\n});\r\n$('#mysqldatayh').ajaxForm({\r\nbeforeSubmit:function (arr, \$form, options) {\r\nif($(\"input[name='keys[]']:checked\").length==0){\r\nmalert('请还未选择任何表！');\r\nreturn false;\r\n}\r\n\r\nreturn true;\r\n},\r\nsuccess:function (responseText, statusText, xhr, \$form) {\r\nif(responseText=='ok1'){\r\nmview(\"修复表操作完成。\");\r\n}else if(responseText=='ok2'){\r\nmview(\"优化表操作完成。\");\r\n}else{\r\nmalert(responseText);\r\n}\r\n},\r\nerror:function(){isclickadd=0;alert(\"error!\");}\r\n});\t\r\n});\r\n\r\n</script>\t\r\n";
if ( SVRID == 1 )
{
    echo "<table class=\"listtable\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\" align=\"center\" width=\"99%\">\r\n<tr>\r\n<td class=\"findorpage\">\r\n<div>对数据库的部份表执行相应清理数据操作</div>\r\n<table border=\"0\" cellspacing=\"3\" cellpadding=\"3\" align=\"center\" width=\"99%\">\r\n<tr>\r\n<td><input type='button' clear='1' malt='kss_tb_order' value='删除90天前的订单' class='submitbtnn'></td>\r\n<td><input type='button' clear='1' malt='kss_tb_order' value='删除180天前的订单' class='submitbtnn'></td>\r\n<td><input type='button' clear='1' malt='kss_tb_order' value='删除360天前的订单' class='submitbtnn'></td>\r\n</tr>\r\n<tr>\r\n<td><input type='button' clear='1' malt='kss_z_cz_*_*' value='删除90天前的会员充值日志' class='submitbtnn'></td>\r\n<td><input type='button' clear='1' malt='kss_z_cz_*_*' value='删除180天前的会员充值日志' class='submitbtnn'></td>\r\n<td><input type='button' clear='1' malt='kss_z_cz_*_*' value='删除360天前的会员充值日志' class='submitbtnn'></td>\r\n</tr>\r\n<tr>\r\n<td><input type='button' clear='1' malt='kss_tb_order' value='删除7天前未付款的零售订单' class='submitbtnn'></td>\r\n<td><input type='button' clear='1' malt='kss_tb_log_login' value='删除3天前的后台登陆日志' class='submitbtnn'></td>\r\n<td><input type='button' clear='1' malt='删除3天前的代理自助充值初始订单kss_tb_log_agentrmb' value='删除3天前代理的无效财务日志' class='submitbtnn'></td>\r\n</tr>\r\n<tr>\r\n<td><input type='button' clear='1' malt='清空所有kss_z_log_*_*表的所有数据' value='清空会员验证日志' class='submitbtnn'></td>\r\n<td><input type='button' clear='1' malt='清空所有kss_z_log_*_*表的所有数据' value='手动同步前清理数据' class='submitbtnn'></td>\r\n<td>.</td>\r\n</tr>\r\n</table>\r\n<table border=\"0\" cellspacing=\"3\" cellpadding=\"3\" align=\"center\" width=\"99%\">\r\n<tr>\r\n<td><input type='button' va=\"unlockpccode\" clear='1' malt='免费注册过的机器码被删除后，该电脑就可以重新免费注册帐号<br>默认是全部将会删除所有免费注册过的机器码' value='删除免费注册过的机器码' class='submitbtnn'> -> <input type=text value=\"全部\" id=\"unlockpccode\"  class=\"longinput\">&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td><input type='button' va=\"unlockip\" clear='1' malt='解锁指定的IP，默认是全部所有的IP都会被解锁' value='解锁IP' class='submitbtnn'> -> <input type=text value=\"全部\" id=\"unlockip\"  class=\"longinput\">&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td><input type='button' clear='1' malt='删掉所有总代和代理，以及相关订单、财务日志、提卡授权' value='删除所有总代和代理' class='submitbtnn'> -> 需输入安全接口密码<input type=password value=\"\" id=\"sppassword\"  class=\"longinput\"></td>\r\n</tr>\r\n</table>\r\n</td>\r\n</tr>\r\n</table>\r\n";
}
echo "<form id=\"mysqldatayh\" action=\"?action=mysqldatayh&isajax=1\" method=\"post\">\r\n<table class=\"listtable\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\" align=\"center\" width=\"99%\">\r\n<tr class=\"trhead\">\r\n<td nowrap=\"nowrap\" malt=\"\">数据库表名</td>\r\n<td nowrap=\"nowrap\" malt=\"\">表类型</td>\r\n<td nowrap=\"nowrap\" malt=\"\">数据大小</td>\r\n<td nowrap=\"nowrap\" malt=\"\">索引大小</td>\r\n<td nowrap=\"nowrap\" malt=\"\">多余</td>\r\n<td nowrap=\"nowrap\" malt=\"\">记录数</td>\r\n<td nowrap=\"nowrap\" malt=\"\">AuTo Id</td>\r\n<td nowrap=\"nowrap\" malt=\"\">更新时间</td>\r\n</tr>\r\n";
$_obfuscate_iJOHi5OUj5CPiIiUjI2Nioo� = FALSE;
$_obfuscate_iYmJioaKkIyOiY_PkJCOlJA� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "SELECT count(*) as tnum from kss_tb_soft" );
if ( 99 < $_obfuscate_iYmJioaKkIyOiY_PkJCOlJA�['tnum'] )
{
    $_obfuscate_iJOHi5OUj5CPiIiUjI2Nioo� = TRUE;
}
$_obfuscate_j4eSkIiSiZCRh4_NiYaQkYk� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_lZGTiIiKhouKiZGLi5KUkI8�( "SHOW TABLE STATUS " );
$_obfuscate_kIqHiYqIko2Qk4eOjIaOj4s� = 0;
$_obfuscate_i5OHlIuHjZOLio6Tj42Ujo8� = 0;
$_obfuscate_hpCPjIePioeHkYiIhpSPkok� = 0;
$_obfuscate_ko6SjpWTkI2Ojo_UjoyPh5U� = 0;
$_obfuscate_iZWGh5SKipCTk4mUkI_Kk48� = 0;
$_obfuscate_j4yNi4aOhoqTlZSHi4qIiZU� = 0;
foreach ( $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYk� as $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI� )
{
    if ( substr( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['Name'], 0, 4 ) != "kss_" )
    {
        $_obfuscate_kIqHiYqIko2Qk4eOjIaOj4s� += $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['Data_length'];
        $_obfuscate_i5OHlIuHjZOLio6Tj42Ujo8� += $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['Index_length'];
        if ( stripos( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['Name'], "z_key_" ) && !stripos( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['Name'], "recycle" ) )
        {
            $_obfuscate_hpCPjIePioeHkYiIhpSPkok� += $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['Rows'];
        }
        if ( stripos( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['Name'], "z_user_" ) && !stripos( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['Name'], "recycle" ) )
        {
            $_obfuscate_iZWGh5SKipCTk4mUkI_Kk48� += $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['Rows'];
        }
        if ( stripos( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['Name'], "z_log_" ) )
        {
            $_obfuscate_ko6SjpWTkI2Ojo_UjoyPh5U� += $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['Rows'];
        }
        if ( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['Rows'] == "" )
        {
            $_obfuscate_j4yNi4aOhoqTlZSHi4qIiZU� = 1;
        }
        if ( stripos( $_SERVER['HTTP_HOST'], ".hphu.com" ) && stripos( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['Name'], "ss_z_" ) )
        {
            if ( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['Engine'] == "" )
            {
                echo "<tr class='trd".( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['Engine'] != "" ? "" : "isend" )."'>";
                echo "<td nowrap='nowrap' style='cursor:pointer'><input type='checkbox' name='keys[]' value='";
                echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['Name'];
                echo "' id='check";
                echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['Name'];
                echo "' ";
                echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['Engine'] != "" ? "" : "checked";
                echo "><label for='check";
                echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['Name'];
                echo "'>";
                echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['Name'];
                echo "</label></td><td nowrap='nowrap'>";
                echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['Engine'] != "" ? $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['Engine'] : "<font color=red>表出错，请修复</font>";
                echo "</td><td nowrap='nowrap'>";
                echo _obfuscate_joeRi4eTjImVj4eLh4aNiJE�( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['Data_length'] );
                echo "</td><td nowrap='nowrap'>";
                echo _obfuscate_joeRi4eTjImVj4eLh4aNiJE�( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['Index_length'] );
                echo "</td><td nowrap='nowrap'>";
                echo _obfuscate_joeRi4eTjImVj4eLh4aNiJE�( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['Data_free'] );
                echo "</td><td nowrap='nowrap'>";
                echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['Rows'];
                echo "</td><td nowrap='nowrap'>";
                echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['Auto_increment'];
                echo "</td><td nowrap='nowrap'>";
                echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['Update_time'];
                echo "</td></tr>\r\n";
            }
        }
        else
        {
            echo "<tr class='trd".( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['Engine'] != "" ? "" : "isend" )."'>";
            echo "<td nowrap='nowrap' style='cursor:pointer'><input type='checkbox' name='keys[]' value='";
            echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['Name'];
            echo "' id='check";
            echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['Name'];
            echo "' ";
            echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['Engine'] != "" ? "" : "checked";
            echo "><label for='check";
            echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['Name'];
            echo "'>";
            echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['Name'];
            echo "</label></td><td nowrap='nowrap'>";
            echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['Engine'] != "" ? $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['Engine'] : "<font color=red>表出错，请修复</font>";
            echo "</td><td nowrap='nowrap'>";
            echo _obfuscate_joeRi4eTjImVj4eLh4aNiJE�( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['Data_length'] );
            echo "</td><td nowrap='nowrap'>";
            echo _obfuscate_joeRi4eTjImVj4eLh4aNiJE�( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['Index_length'] );
            echo "</td><td nowrap='nowrap'>";
            echo _obfuscate_joeRi4eTjImVj4eLh4aNiJE�( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['Data_free'] );
            echo "</td><td nowrap='nowrap'>";
            echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['Rows'];
            echo "</td><td nowrap='nowrap'>";
            echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['Auto_increment'];
            echo "</td><td nowrap='nowrap'>";
            echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['Update_time'];
            echo "</td></tr>\r\n";
        }
    }
}
echo "</table>";
if ( $_obfuscate_j4yNi4aOhoqTlZSHi4qIiZU� == 1 )
{
    echo "<script>malert('发现有错误表【淡红色背景的表出错了】，请执行修复操作！');</script>";
}
echo "\r\n<table class=\"listtable\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\" align=\"center\" width=\"99%\">\r\n<tr>\r\n<td class=\"findorpage\">\r\n<input type=\"hidden\" alt=\"ajax提交必须添加此项\" name=\"isajax\" value=\"1\" />\r\n<img  src=\"";
echo INSTALLPATH;
echo "kss_inc/images/arrow_ltr.png\" style=\"vertical-align:middle\"><input type=\"button\" name=\"chkall\" id=\"chkall\" value=\"全选/反选\" class=\"submitbtn\"> ━▶\r\n&nbsp;&nbsp;<input type='submit' name='op' id='repair' malt='将选中的卡号锁定' value='修复表' class='submitbtn'>\r\n&nbsp;&nbsp;<input type='submit' name='op' id='optimize' malt='将选中的卡号锁定' value='优化表' class='submitbtn'>\t\t\r\n&nbsp;&nbsp;索引：";
echo _obfuscate_joeRi4eTjImVj4eLh4aNiJE�( $_obfuscate_i5OHlIuHjZOLio6Tj42Ujo8� );
echo "，数据：";
echo _obfuscate_joeRi4eTjImVj4eLh4aNiJE�( $_obfuscate_kIqHiYqIko2Qk4eOjIaOj4s� );
echo "，共计：";
echo _obfuscate_joeRi4eTjImVj4eLh4aNiJE�( $_obfuscate_i5OHlIuHjZOLio6Tj42Ujo8� + $_obfuscate_kIqHiYqIko2Qk4eOjIaOj4s� );
echo "\t\r\n</td>\r\n</tr>\r\n</table>\r\n</form>\r\n";
?>
