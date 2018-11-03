<?php
/*********************/
/*                   */
/*  Dezend for PHP5  */
/*         NWS       */
/*      Nulled.WS    */
/*                   */
/*********************/

function _obfuscate_hpSLkImGkJOTiJOSjJWVjpM�( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� = 1 )
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
$_obfuscate_i5GVjZWQj4ePkJKMjJSRipM�[] = _obfuscate_hpCTj4mKj5WSkpWPjouJkoc�( );
$_obfuscate_jIaUiIeSjZWKlIqLkIqOioc� = new mysql_cls( );
$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU� = _obfuscate_iZSVk4mLkY_LlIeHh5WKlZA�( 6 );
if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] == 9 )
{
    _obfuscate_lI_NjpSLio_JjZCVh4qUjYc�( );
}
$_obfuscate_k4mViI2Nj4mJkIuUj42JiIY� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "op", "gp", "sql", "" );
$_obfuscate_k42Rh4mVlYqGi4mOiZWMjJA� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "page", "gp", "int", 1 );
$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "softid", "gp", "int", 0 );
$_obfuscate_h5GNiYiUjZGJlZWNjYaJi4o� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "isactive", "gp", "int", 0 );
$_obfuscate_iIyVlIiOhoiMhomQk5GLh5M� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "selcmd", "gp", "sql", "no" );
$_obfuscate_lImLiIqUj5OSipGOko6RlJQ� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "keywords", "gp", "sql", "" );
$_obfuscate_iZOQkZCMkZGGjZCIlZSQi40� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "recycle", "gp", "sql", "" );
if ( $_obfuscate_iZOQkZCMkZGGjZCIlZSQi40� != "" && $_obfuscate_iZOQkZCMkZGGjZCIlZSQi40� != "_recycle" )
{
    _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "您传入的参数错误严重！" );
}
if ( $_obfuscate_iZOQkZCMkZGGjZCIlZSQi40� == "_recycle" && $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] < 8 && !_obfuscate_j4aJjo2Hi4eOlJSKk4uHk4k�( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['powerlist'], "14" ) )
{
    _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "你无权查看回收站！" );
}
$_obfuscate_kYqTiZWUjZKLjZCVlImUi5A� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "managerid", "gp", "int", 0 );
$_obfuscate_kJKTk5WSiI6NiYmHj4_Jkoc� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "morekeys", "gp", "sql", "" );
$_obfuscate_lIeTkYqHioyIlJKMho6OiJE� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "prefix", "gp", "sql", "" );
$_obfuscate_i4uIkYuKkJGQlJKOjoiMj4c� = array( "action" => $_obfuscate_lZOThomRipOIi5SRhpWRjY4� );
$_obfuscate_kYmQkIuQkpOLjo6RlY6LkJU� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "cztime1", "gp", "time", "2012-01-01 00:00:00" );
$_obfuscate_kJSJjYyPlYyKj5GPiYyKjY4� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "cztime2", "gp", "time", "2012-01-01 00:00:00" );
if ( $_obfuscate_h5GNiYiUjZGJlZWNjYaJi4o� == 1 )
{
    $_obfuscate_i4uIkYuKkJGQlJKOjoiMj4c�['isactive'] = 1;
    $_obfuscate_i4uIkYuKkJGQlJKOjoiMj4c�['cztime1'] = $_obfuscate_kYmQkIuQkpOLjo6RlY6LkJU�;
    $_obfuscate_i4uIkYuKkJGQlJKOjoiMj4c�['cztime2'] = $_obfuscate_kJSJjYyPlYyKj5GPiYyKjY4�;
    if ( $_obfuscate_kYmQkIuQkpOLjo6RlY6LkJU� == "2012-01-01 00:00:00" && $_obfuscate_kYmQkIuQkpOLjo6RlY6LkJU� == "2012-01-01 00:00:00" )
    {
        $_obfuscate_iYeTlYuQiIuTlIqQi5KOkoo� = 0;
        $_obfuscate_h42Vi5OUi5OGlJCOjYmPlJE� = 0;
    }
    else
    {
        $_obfuscate_iYeTlYuQiIuTlIqQi5KOkoo� = strtotime( $_obfuscate_kYmQkIuQkpOLjo6RlY6LkJU� );
        $_obfuscate_h42Vi5OUi5OGlJCOjYmPlJE� = strtotime( $_obfuscate_kJSJjYyPlYyKj5GPiYyKjY4� );
        if ( $_obfuscate_h42Vi5OUi5OGlJCOjYmPlJE� < $_obfuscate_iYeTlYuQiIuTlIqQi5KOkoo� )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "你选择的充值日期时间段错误，前边的应该要比后边的小" );
        }
    }
}
$_obfuscate_i4uIkYuKkJGQlJKOjoiMj4c�['softid'] = $_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE�;
$_obfuscate_i4uIkYuKkJGQlJKOjoiMj4c�['recycle'] = $_obfuscate_iZOQkZCMkZGGjZCIlZSQi40�;
$_obfuscate_i4uIkYuKkJGQlJKOjoiMj4c�['prefix'] = $_obfuscate_lIeTkYqHioyIlJKMho6OiJE�;
if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] == 6 )
{
    $_obfuscate_ho2NhoaMhoqMlYuLiJSKjo4� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "select * from kss_tb_agentprice where `managerid`=".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['id']." and `softid`=".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE� );
    if ( empty( $_obfuscate_ho2NhoaMhoqMlYuLiJSKjo4� ) )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "你没有该软件的授权", 1 );
    }
}
$_obfuscate_kIqPhpWOi4yQhpOJlJOUjY0� = array( "锁定", "解锁", "删除", "还原", "清除", "savetags", "设置标签", "退卡" );
if ( in_array( $_obfuscate_k4mViI2Nj4mJkIuUj42JiIY�, $_obfuscate_kIqPhpWOi4yQhpOJlJOUjY0� ) )
{
    include( dirname( __FILE__ ).DIRECTORY_SEPARATOR."keylist_cmd.php" );
}
$_obfuscate_hoqKho2Mh4iNkpOTiZONio4� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_lZGTiIiKhouKiZGLi5KUkI8�( "select * from kss_tb_keyset where `softid`=".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE� );
$_obfuscate_iYqPiJGIjoaVhoaQiI2Ti4w� = "SELECT `id` ";
$_obfuscate_jpCQi4aKkYaIjpSUhpWNipM� = "SELECT * ";
$_obfuscate_homTioySho6Vh5ORiYmUkok� = " where `id` ";
$_obfuscate_kZCPiJCHiI_IlY2Ok4_JlIc� = "SELECT count(*) as tnum ";
$_obfuscate_lJSNlZWKlYmGi4iSkIqHjpA� = "from `kss_z_key_".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE�.$_obfuscate_iZOQkZCMkZGGjZCIlZSQi40�."` ";
$_obfuscate_h4eJlYuIjpKNio6QkIuJlIY� = array( );
$_obfuscate_lImLiIqUj5OSipGOko6RlJQ� = trim( $_obfuscate_lImLiIqUj5OSipGOko6RlJQ� );
$_obfuscate_jo6QkpGMio2RkpGNjZSQiZQ� = 32;
$_obfuscate_i4uIkYuKkJGQlJKOjoiMj4c�['selcmd'] = $_obfuscate_iIyVlIiOhoiMhomQk5GLh5M�;
$_obfuscate_i4uIkYuKkJGQlJKOjoiMj4c�['keywords'] = $_obfuscate_lImLiIqUj5OSipGOko6RlJQ�;
switch ( $_obfuscate_iIyVlIiOhoiMhomQk5GLh5M� )
{
    case "morekeys" :
        $_obfuscate_kJKTk5WSiI6NiYmHj4_Jkoc� = preg_replace( "/([^a-zA-Z0-9\\n])/", "", $_obfuscate_kJKTk5WSiI6NiYmHj4_Jkoc� );
        $_obfuscate_kJKTk5WSiI6NiYmHj4_Jkoc� = str_replace( "\n\n", "\n", $_obfuscate_kJKTk5WSiI6NiYmHj4_Jkoc� );
        $_obfuscate_kJKTk5WSiI6NiYmHj4_Jkoc� = str_replace( "\n\n", "\n", $_obfuscate_kJKTk5WSiI6NiYmHj4_Jkoc� );
        if ( strlen( $_obfuscate_kJKTk5WSiI6NiYmHj4_Jkoc� ) < 32 )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "你没输入任何卡号或输入的卡号格式非法", 1 );
        }
        $_obfuscate_h5OVi5KSi5OIhpCSk42KiI4� = explode( "\n", $_obfuscate_kJKTk5WSiI6NiYmHj4_Jkoc� );
        $_obfuscate_joeNkJKLko2Hi4aNjomOj4s� = "";
        $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� = 0;
        $_obfuscate_kYiQkJKGlI6JlZWRioaKlYg� = array( );
        foreach ( $_obfuscate_h5OVi5KSi5OIhpCSk42KiI4� as $_obfuscate_ko2HkJOUh5WSiZKSjomUk4w� )
        {
            if ( strlen( $_obfuscate_ko2HkJOUh5WSiZKSjomUk4w� ) != 32 )
            {
                _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "注册卡号必须是32位", 1 );
            }
            $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� += 1;
            if ( ZPAGESIZE < $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� )
            {
                _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "每次最多只能查询".ZPAGESIZE."条", 1 );
            }
            $_obfuscate_joeNkJKLko2Hi4aNjomOj4s� .= "'".substr( $_obfuscate_ko2HkJOUh5WSiZKSjomUk4w�, 4, 6 )."',";
            $_obfuscate_kYiQkJKGlI6JlZWRioaKlYg�[substr( $_obfuscate_ko2HkJOUh5WSiZKSjomUk4w�, 4, 6 )] = substr( $_obfuscate_ko2HkJOUh5WSiZKSjomUk4w�, 10 );
        }
        if ( $_obfuscate_joeNkJKLko2Hi4aNjomOj4s� == "" )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "你没输入任何卡号或输入的卡号格式非法", 1 );
        }
        $_obfuscate_joeNkJKLko2Hi4aNjomOj4s� = substr( $_obfuscate_joeNkJKLko2Hi4aNjomOj4s�, 0, strlen( $_obfuscate_joeNkJKLko2Hi4aNjomOj4s� ) - 1 );
        $_obfuscate_h4eJlYuIjpKNio6QkIuJlIY�['a'] = " `keys` in (".$_obfuscate_joeNkJKLko2Hi4aNjomOj4s�.") ";
        break;
    case "keys" :
        if ( strlen( $_obfuscate_lImLiIqUj5OSipGOko6RlJQ� ) != 32 && strlen( $_obfuscate_lImLiIqUj5OSipGOko6RlJQ� ) != 10 )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "输入的注册卡号必须是32位或前10位", 1 );
        }
        $_obfuscate_h4eJlYuIjpKNio6QkIuJlIY�['a'] = " `keys`='".substr( $_obfuscate_lImLiIqUj5OSipGOko6RlJQ�, 4, 6 )."' and `keyfix`='".substr( $_obfuscate_lImLiIqUj5OSipGOko6RlJQ�, 0, 4 )."' ";
        if ( strlen( $_obfuscate_lImLiIqUj5OSipGOko6RlJQ� ) == 32 )
        {
            $_obfuscate_h4eJlYuIjpKNio6QkIuJlIY� .= "a";
            break;
        }
    case "czusername" :
        if ( strlen( $_obfuscate_lImLiIqUj5OSipGOko6RlJQ� ) < 3 )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "用户名长度小于3", 1 );
        }
        $_obfuscate_h4eJlYuIjpKNio6QkIuJlIY�['a'] = " `czusername`='".$_obfuscate_lImLiIqUj5OSipGOko6RlJQ�."' ";
        break;
    case "islock" :
        $_obfuscate_h4eJlYuIjpKNio6QkIuJlIY�['a'] = " `islock`>0 ";
        break;
    case "isback" :
        $_obfuscate_h4eJlYuIjpKNio6QkIuJlIY�['a'] = " `isback`=1 ";
        break;
    case "ordernum" :
        if ( strlen( $_obfuscate_lImLiIqUj5OSipGOko6RlJQ� ) != 24 )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "输入的订单号必须是24位", 1 );
        }
        $_obfuscate_h4eJlYuIjpKNio6QkIuJlIY�['a'] = " `ordernum`='".$_obfuscate_lImLiIqUj5OSipGOko6RlJQ�."' ";
        break;
    case "tags" :
        if ( strlen( $_obfuscate_lImLiIqUj5OSipGOko6RlJQ� ) < 2 )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "标签最少两位", 1 );
        }
        $_obfuscate_h4eJlYuIjpKNio6QkIuJlIY�['a'] = " `tag` like '".$_obfuscate_lImLiIqUj5OSipGOko6RlJQ�."%' ";
        break;
    case "keyextattr" :
        $_obfuscate_h4eJlYuIjpKNio6QkIuJlIY�['a'] = " `keyextattr`='".$_obfuscate_lImLiIqUj5OSipGOko6RlJQ�."%' ";
        break;
    case "keytype_all" :
        if ( strlen( $_obfuscate_lIeTkYqHioyIlJKMho6OiJE� ) == 4 )
        {
            $_obfuscate_h4eJlYuIjpKNio6QkIuJlIY�['keys'] = " `keyfix` = '".$_obfuscate_lIeTkYqHioyIlJKMho6OiJE�."' ";
        }
}
$_obfuscate_j5OIiY_GkpCLh5CJh5SIlYc� = array( );
$_obfuscate_jJSLkI_TkpSTh5WOiYaTj4g� = 0;
$_obfuscate_kIiMk4_SkpOVho2SjoyMjZU� = $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']( "select `id`,`username`,`level`,`isdel`,`pmid` from `kss_tb_manager` where `pid`=".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']." order by id asc" );
$_obfuscate_ioiKkImNk5KKlZSIjomPkow� = array( );
foreach ( $_obfuscate_kIiMk4_SkpOVho2SjoyMjZU� as $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI� )
{
    $_obfuscate_j5OIiY_GkpCLh5CJh5SIlYc�[$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['id']] = $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['username'];
    if ( 7 < $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['level'] )
    {
        $_obfuscate_jJSLkI_TkpSTh5WOiYaTj4g� = $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['id'];
    }
    if ( !( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] == 7 ) || !( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['id'] == $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['pmid'] ) )
    {
        $_obfuscate_ioiKkImNk5KKlZSIjomPkow�[] = $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['id'];
    }
}
if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] == 6 )
{
    $_obfuscate_h4eJlYuIjpKNio6QkIuJlIY�['managerid'] = " `managerid`=".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['id']." ";
}
else
{
    if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] == 7 )
    {
        if ( $_obfuscate_kYqTiZWUjZKLjZCVlImUi5A� == 0 )
        {
            $_obfuscate_kYqTiZWUjZKLjZCVlImUi5A� = -1;
        }
        if ( 0 < $_obfuscate_kYqTiZWUjZKLjZCVlImUi5A� )
        {
            if ( in_array( $_obfuscate_kYqTiZWUjZKLjZCVlImUi5A�, $_obfuscate_ioiKkImNk5KKlZSIjomPkow� ) )
            {
                _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "你似乎越界了", 1 );
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
        if ( $_obfuscate_kYqTiZWUjZKLjZCVlImUi5A� == -1 )
        {
            $_obfuscate_h4eJlYuIjpKNio6QkIuJlIY�['managerid'] = " `managerid` <> ".$_obfuscate_jJSLkI_TkpSTh5WOiYaTj4g�." ";
        }
        if ( 0 < $_obfuscate_kYqTiZWUjZKLjZCVlImUi5A� )
        {
            $_obfuscate_h4eJlYuIjpKNio6QkIuJlIY�['managerid'] = " `managerid`=".$_obfuscate_kYqTiZWUjZKLjZCVlImUi5A�." ";
        }
    }
}
$_obfuscate_i4uIkYuKkJGQlJKOjoiMj4c�['managerid'] = $_obfuscate_kYqTiZWUjZKLjZCVlImUi5A�;
if ( $_obfuscate_iIyVlIiOhoiMhomQk5GLh5M� == "keytype_all" && $_obfuscate_h5GNiYiUjZGJlZWNjYaJi4o� == 1 )
{
    if ( $_obfuscate_iYeTlYuQiIuTlIqQi5KOkoo� == 0 && $_obfuscate_h42Vi5OUi5OGlJCOjYmPlJE� == 0 )
    {
        $_obfuscate_h4eJlYuIjpKNio6QkIuJlIY�['cztime'] = " `cztime` =0 ";
    }
    else
    {
        $_obfuscate_h4eJlYuIjpKNio6QkIuJlIY�['cztime'] = " `cztime` between ".$_obfuscate_iYeTlYuQiIuTlIqQi5KOkoo�." and ".$_obfuscate_h42Vi5OUi5OGlJCOjYmPlJE�;
    }
}
$_obfuscate_j4mJh4aKjZKHhpOSiJKSjJI� = "";
if ( empty( $_obfuscate_h4eJlYuIjpKNio6QkIuJlIY� ) )
{
    $_obfuscate_j4mJh4aKjZKHhpOSiJKSjJI� = " where".implode( " and ", $_obfuscate_h4eJlYuIjpKNio6QkIuJlIY� );
}
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
echo "<textarea id=viewsql>";
echo htmlspecialchars( $_obfuscate_iYqPiJGIjoaVhoaQiI2Ti4w�.$_obfuscate_lJSNlZWKlYmGi4iSkIqHjpA�.$_obfuscate_j4mJh4aKjZKHhpOSiJKSjJI�." LIMIT ".( $_obfuscate_k42Rh4mVlYqGi4mOiZWMjJA� - 1 ) * ZPAGESIZE.",".ZPAGESIZE );
echo "\r\n";
$_obfuscate_iIiHi4aTkoySkpCNio_UjYo� = "";
$_obfuscate_j4aSkImMlYyRiY6Mho2VkZM� = "";
if ( empty( $_obfuscate_iZWHjpGQkoqPlYmJjYmIhpU� ) )
{
    foreach ( $_obfuscate_iZWHjpGQkoqPlYmJjYmIhpU� as $_obfuscate_kYqOi5CTjoySj4mIkYmIlY4� )
    {
        $_obfuscate_iIiHi4aTkoySkpCNio_UjYo� .= $_obfuscate_kYqOi5CTjoySj4mIkYmIlY4�['id'].",";
        $_obfuscate_j4aSkImMlYyRiY6Mho2VkZM� = "=".$_obfuscate_kYqOi5CTjoySj4mIkYmIlY4�['id'];
    }
    $_obfuscate_iIiHi4aTkoySkpCNio_UjYo� = substr( $_obfuscate_iIiHi4aTkoySkpCNio_UjYo�, 0, strlen( $_obfuscate_iIiHi4aTkoySkpCNio_UjYo� ) - 1 );
}
$_obfuscate_iYeIjIaVlYaIj4yTiJWHk40� = FALSE;
$_obfuscate_koeUkImOlYeQiZSJkZWPiJU� = "";
if ( $_obfuscate_iIiHi4aTkoySkpCNio_UjYo� != "" )
{
    $_obfuscate_homTioySho6Vh5ORiYmUkok� .= 1 < count( $_obfuscate_iZWHjpGQkoqPlYmJjYmIhpU� ) ? " in (".$_obfuscate_iIiHi4aTkoySkpCNio_UjYo�.")" : $_obfuscate_j4aSkImMlYyRiY6Mho2VkZM�;
    if ( $_obfuscate_iIyVlIiOhoiMhomQk5GLh5M� == "morekeys" )
    {
        $_obfuscate_jY_UkIyPh4eOi4uNioaVkJQ� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_lZGTiIiKhouKiZGLi5KUkI8�( "SELECT `id`,`keys`,`keyspassword` ".$_obfuscate_lJSNlZWKlYmGi4iSkIqHjpA�.$_obfuscate_homTioySho6Vh5ORiYmUkok� );
        echo htmlspecialchars( "SELECT `id`,`keys`,`keyspassword` ".$_obfuscate_lJSNlZWKlYmGi4iSkIqHjpA�.$_obfuscate_homTioySho6Vh5ORiYmUkok� );
        echo "\r\n";
        $_obfuscate_iIiHi4aTkoySkpCNio_UjYo� = "";
        foreach ( $_obfuscate_jY_UkIyPh4eOi4uNioaVkJQ� as $_obfuscate_homIkYiRk5SSlImKk4_Jho8� )
        {
            if ( $_obfuscate_kYiQkJKGlI6JlZWRioaKlYg�[$_obfuscate_homIkYiRk5SSlImKk4_Jho8�['keys']] != $_obfuscate_homIkYiRk5SSlImKk4_Jho8�['keyspassword'] )
            {
                $_obfuscate_koeUkImOlYeQiZSJkZWPiJU� .= $_obfuscate_homIkYiRk5SSlImKk4_Jho8�['keys'].$_obfuscate_kYiQkJKGlI6JlZWRioaKlYg�[$_obfuscate_homIkYiRk5SSlImKk4_Jho8�['keys']]."\r\n";
                $_obfuscate_lI_KipSOk4iQkI_MjIuVkpQ� -= 1;
            }
            else
            {
                $_obfuscate_iIiHi4aTkoySkpCNio_UjYo� .= $_obfuscate_homIkYiRk5SSlImKk4_Jho8�['id'].",";
                $_obfuscate_j4aSkImMlYyRiY6Mho2VkZM� = "=".$_obfuscate_homIkYiRk5SSlImKk4_Jho8�['id'];
            }
        }
        $_obfuscate_iIiHi4aTkoySkpCNio_UjYo� = substr( $_obfuscate_iIiHi4aTkoySkpCNio_UjYo�, 0, strlen( $_obfuscate_iIiHi4aTkoySkpCNio_UjYo� ) - 1 );
        $_obfuscate_homTioySho6Vh5ORiYmUkok� = " where `id` ".( 1 < $_obfuscate_lI_KipSOk4iQkI_MjIuVkpQ� ? " in (".$_obfuscate_iIiHi4aTkoySkpCNio_UjYo�.")" : $_obfuscate_j4aSkImMlYyRiY6Mho2VkZM� );
    }
    $_obfuscate_iYeIjIaVlYaIj4yTiJWHk40� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_lZGTiIiKhouKiZGLi5KUkI8�( $_obfuscate_jpCQi4aKkYaIjpSUhpWNipM�.$_obfuscate_lJSNlZWKlYmGi4iSkIqHjpA�.$_obfuscate_homTioySho6Vh5ORiYmUkok� );
    echo htmlspecialchars( $_obfuscate_jpCQi4aKkYaIjpSUhpWNipM�.$_obfuscate_lJSNlZWKlYmGi4iSkIqHjpA�.$_obfuscate_homTioySho6Vh5ORiYmUkok� );
}
$_obfuscate_lJKOiJSHjo_Sj4yKk4aIh5I�[] = _obfuscate_hpCTj4mKj5WSkpWPjouJkoc�( );
$_obfuscate_k4yVk4iOipWPioqJlIuVkpE� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iouHh42RkIeKkYaSipWKiog�( $_obfuscate_k42Rh4mVlYqGi4mOiZWMjJA�, $_obfuscate_jIiNjZCPkoeUjI2LipCQk5Q�, $_obfuscate_i4uIkYuKkJGQlJKOjoiMj4c� )."<span class=page_nav_a>".$_obfuscate_lI_KipSOk4iQkI_MjIuVkpQ�."行  耗时"._obfuscate_i4mGjpKMk5WRipSVi4mLi40�( $_obfuscate_lJKOiJSHjo_Sj4yKk4aIh5I� )."毫秒</span>";
echo "</textarea><script type=\"text/javascript\">\r\nvar mylevel=";
echo $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'];
echo ";\r\n\r\nvar softid=";
echo $_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE�;
echo ";\r\n\r\n\r\n</script>\r\n<p style=\"padding:5px;background:#FFFF99;border:1px solid #999;color:#f00;font-weight:700\">注意：注册卡登陆模式的软件，注册卡激活后会被自动转为用户，要对注册卡进行管理操作（如加时、解绑、锁定、解锁、删除等等）请到用户管理->用户列表操作相应的用户即可</p>\r\n<script type=\"text/javascript\" src=\"";
echo INSTALLPATH;
echo "kss_inc/js/k/keylist.js?20120920\" charset=\"utf-8\"></script>\r\n<table class=\"listtable\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\" align=\"center\" width=\"99%\">\r\n<form id=\"find_key\" action=\"?action=keylist&softid=";
echo $_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE�;
echo "\" method=\"post\">\r\n<tr>\r\n<td class=\"findorpage\">\r\n";
if ( 7 < $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] || _obfuscate_j4aJjo2Hi4eOlJSKk4uHk4k�( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['powerlist'], "14" ) )
{
    echo "<input type='checkbox' name='recycle' value='_recycle' id='recycle' ".( $_obfuscate_iZOQkZCMkZGGjZCIlZSQi40� == "_recycle" ? " checked" : "" )." /><label for='recycle'>回收站</label> &nbsp;&nbsp;";
}
echo "<select id=\"selcmd\" name=\"selcmd\">\r\n<option value='keytype_all' ";
echo $_obfuscate_iIyVlIiOhoiMhomQk5GLh5M� == "keytype_all" ? " selected" : "";
echo ">卡类、充值状态</option>\r\n<option value='islock' style=\"background:#F6D892\"";
echo $_obfuscate_iIyVlIiOhoiMhomQk5GLh5M� == "islock" ? " selected" : "";
echo ">被锁定的卡</option>\r\n<option value='isback' style='background:#FAD4CB' ";
echo $_obfuscate_iIyVlIiOhoiMhomQk5GLh5M� == "isback" ? " selected" : "";
echo ">退款的卡</option>\r\n<option value='czusername' ";
echo $_obfuscate_iIyVlIiOhoiMhomQk5GLh5M� == "czusername" ? " selected" : "";
echo ">充值用户</option>\r\n<option value='keys' ";
echo $_obfuscate_iIyVlIiOhoiMhomQk5GLh5M� == "keys" ? " selected" : "";
echo ">注册卡号</option>\r\n<option value='tags' ";
echo $_obfuscate_iIyVlIiOhoiMhomQk5GLh5M� == "tags" ? " selected" : "";
echo ">标签</option>\r\n<option value='ordernum' ";
echo $_obfuscate_iIyVlIiOhoiMhomQk5GLh5M� == "ordernum" ? " selected" : "";
echo ">订单号</option>\r\n<option value='keyextattr' ";
echo $_obfuscate_iIyVlIiOhoiMhomQk5GLh5M� == "keyextattr" ? " selected" : "";
echo ">注册卡附属性</option>\r\n<option value='morekeys' ";
echo $_obfuscate_iIyVlIiOhoiMhomQk5GLh5M� == "morekeys" ? " selected" : "";
echo ">批量查询注册卡号</option>\r\n</select>\r\n<input style=\"display:none\" type=text id=\"keywords\" name=\"keywords\" value=\"";
echo $_obfuscate_lImLiIqUj5OSipGOko6RlJQ�;
echo "\">\r\n<select id=\"prefix\" name=\"prefix\" style=\"display:none\">\r\n<option value='no' ";
echo $_obfuscate_lIeTkYqHioyIlJKMho6OiJE� == "no" ? " selected" : "";
echo ">所有卡类</option>\r\n";
foreach ( $_obfuscate_hoqKho2Mh4iNkpOTiZONio4� as $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI� )
{
    echo "\t\t\t<option value='".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['prefix']."' ";
    echo $_obfuscate_lIeTkYqHioyIlJKMho6OiJE� == $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['prefix'] ? " selected" : "";
    echo ">".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['keyname']."</option>\r\n";
}
echo "</select>\r\n";
if ( 6 < $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] )
{
    echo "\t\t<select id='managerid' name='managerid'>";
    if ( 7 < $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] )
    {
        echo "\t\t\t<option value=0>所有后台用户</option>\r\n";
    }
    echo "\t\t\t<option value=-1 ";
    echo $_obfuscate_kYqTiZWUjZKLjZCVlImUi5A� == -1 ? " selected" : "";
    echo ">所有代理</option>\r\n";
    foreach ( $_obfuscate_kIiMk4_SkpOVho2SjoyMjZU� as $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI� )
    {
        if ( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['isdel'] != 1 )
        {
            if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] == 7 )
            {
                if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['id'] == $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['pmid'] )
                {
                    echo "\t\t\t<option value='".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['id']."' ";
                    echo $_obfuscate_kYqTiZWUjZKLjZCVlImUi5A� == $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['id'] ? " selected" : "";
                    echo ">".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['username']."[".$_obfuscate_jJCMjYyHjpSTiJCNiYiIkpE�[$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['level']]."]</option>";
                }
            }
            else
            {
                echo "\t\t\t<option value='".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['id']."' ";
                echo $_obfuscate_kYqTiZWUjZKLjZCVlImUi5A� == $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['id'] ? " selected" : "";
                echo ">".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['username']."[".$_obfuscate_jJCMjYyHjpSTiJCNiYiIkpE�[$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['level']]."]</option>";
            }
        }
    }
    echo "\t\t</select>";
}
echo "<span id=\"czarea\" style=\"display:none\"><input  type=\"checkbox\" name=\"isactive\" value=\"1\" id=\"isactive\" ";
echo $_obfuscate_h5GNiYiUjZGJlZWNjYaJi4o� == "1" ? " checked" : "";
echo "  malt=\"如果后边的两个日期都是 2012-01-01 00:00:00或0<br>就是查未充值的卡\"/><label for=\"isactive\" malt=\"如果后边的两个日期都是 2012-01-01 00:00:00或0<br>就是查未充值的卡\">充值状态</label> &nbsp;&nbsp;\r\n<span id=\"cztime\" style=\"display:none\"><input name=\"cztime1\" id=\"cztime1\" class=\"my_date_input\" type=\"text\" value=\"";
echo $_obfuscate_kYmQkIuQkpOLjo6RlY6LkJU�;
echo "\" /><span style=\"font-family: 宋体\">＜充值日期≤</span><input name=\"cztime2\" id=\"cztime2\" class=\"my_date_input\" type=\"text\" value=\"";
echo $_obfuscate_kJSJjYyPlYyKj5GPiYyKjY4�;
echo "\" /></span></span>\r\n<input type=\"submit\" name=\"submit\" class=\"submitbtn\" value=\"搜索\" />\r\n<div id=\"morekeys\">每行一张卡号，每次最多只允许查询";
echo ZPAGESIZE;
echo "张卡<br><textarea id=\"morekeystextarea\" style=\"display:block;width:500px;height:100px;margin:5px 0 0 0;font-family:Fixedsys,Arial,Verdana;color:#333\" name=\"morekeys\">";
echo htmlspecialchars( $_obfuscate_kJKTk5WSiI6NiYmHj4_Jkoc� );
echo "</textarea>";
if ( $_obfuscate_koeUkImOlYeQiZSJkZWPiJU� != "" )
{
    echo "未找到的注册卡<br><textarea  style='display:block;width:500px;height:50px;margin:5px 0 0 0;font-family:Fixedsys,Arial,Verdana;color:#333'>".$_obfuscate_koeUkImOlYeQiZSJkZWPiJU�."</textarea>";
}
echo "</div>\r\n</td>\r\n</tr>\r\n</form>\r\n</table>\r\n\r\n<table class=\"listtable\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\" align=\"center\" width=\"99%\">\r\n<tr>\r\n<td class=\"findorpage\">";
echo $_obfuscate_k4yVk4iOipWPioqJlIuVkpE�;
echo "</td>\r\n</tr>\r\n</table>\r\n";
if ( $_obfuscate_iZOQkZCMkZGGjZCIlZSQi40� != "_recycle" || 7 < $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] )
{
    echo "<form id=\"keylist\" action=\"?action=keylist&softid=";
    echo $_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE�;
    echo "&isajax=1\" method=\"post\">\r\n";
}
echo "<table class=\"listtable\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\" align=\"center\" width=\"99%\">\r\n<tr class=\"trhead\">\r\n<td malt=\"ID号\">ID</td>\r\n<td nowrap=\"nowrap\" malt=\"";
echo $_obfuscate_iZOQkZCMkZGGjZCIlZSQi40� == "_recycle" ? "执行删除操作的管理用户" : "可以锁定与解锁、作者还可删除注册卡";
echo "\">操作</td>\r\n";
if ( $_obfuscate_iZOQkZCMkZGGjZCIlZSQi40� == "_recycle" )
{
    echo "<td malt='该注册卡号被删除的日期'>删除日期</td>";
}
else
{
    echo "<td malt='该注册卡号生成的日期'>生成日期</td>";
}
echo "\t\t\r\n<td nowrap=\"nowrap\" malt=\"注册卡号由32位a-zA-Z0-9的字符组成，为节省显示空间，只显示前10位和后四位，鼠标单击注册卡号可复制完整的32位注册卡号到剪贴板\">卡号</td>\r\n<td nowrap=\"nowrap\" malt=\"可修改，主要是方便用户管理注册卡，给注册卡备注一些信息\">标签</td>\t\t\r\n<td nowrap=\"nowrap\" malt=\"注册卡自激活日期算起的可使用天数\">天数</td>\r\n<td nowrap=\"nowrap\" malt=\"在某些软件里，你可能要按点计费，该点数是按点扣费的基础功能\">点数</td>\r\n<td nowrap=\"nowrap\" malt=\"通道数大于1的，客户可用同一注册卡号和不同的通道号，同时在不同的电脑上登陆\">通道</td>\r\n<td nowrap=\"nowrap\" malt=\"附属性不可以修改，注册卡登陆后可以取得该属性，你可以利用该属性来实现不同属性可使用不同的客户端软件功能<br>为防止附属性太长破坏界面，附属性放在文本框中显示\">附属性</td>\r\n<td nowrap=\"nowrap\" malt=\"该注册卡是属于哪一个后台帐号的\">所属</td>\r\n<td nowrap=\"nowrap\" malt=\"该注册卡充值用户的日期和用户名\">充值日期用户</td>\r\n<td nowrap=\"nowrap\" malt=\"添加该注册卡的订单号，为节省显示空间，只显示前10位和后四位，鼠标单击订单号可复制完整的24位订单号到剪贴板\">订单号</td>\r\n</tr>\r\n";
if ( empty( $_obfuscate_iYeIjIaVlYaIj4yTiJWHk40� ) )
{
    echo "<tr nodata=1 class=trd><td colspan=12>没找到注册卡</td></tr>";
}
else
{
    foreach ( $_obfuscate_iYeIjIaVlYaIj4yTiJWHk40� as $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI� )
    {
        echo "<tr class='".( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['isback'] == 1 ? "trdisback" : 0 < $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['islock'] ? "trdislock" : "trd" )."' id='trd";
        echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['keys'];
        echo "'><td nowrap='nowrap' style='cursor:pointer'><input type='checkbox' name='keys[]' value='";
        echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['keys'];
        echo "' id='check";
        echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['keys'];
        echo "'>";
        echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['id'];
        echo "</td><td nowrap='nowrap'>";
        if ( $_obfuscate_iZOQkZCMkZGGjZCIlZSQi40� == "_recycle" )
        {
            echo isset( $_obfuscate_j5OIiY_GkpCLh5CJh5SIlYc�[$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['delmid']] ) ? $_obfuscate_j5OIiY_GkpCLh5CJh5SIlYc�[$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['delmid']] : "";
        }
        else
        {
            echo "<img class='hand' malt='锁级别：".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['islock'].",  点击此按钮锁定或解锁注册卡'  op='".( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['islock'] == 0 ? "锁定" : "解锁" )."' lock='".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['islock']."' src='".INSTALLPATH."kss_inc/images/".( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['islock'] == 0 ? "b_usrcheck.png" : "b_uncheck.png" )."'>";
            if ( 7 < $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] )
            {
                echo "&nbsp;<img class='hand' malt='点击将该注册卡放入回收站'  op='删除' src='".INSTALLPATH."kss_inc/images/b_empty.png'>";
            }
        }
        echo "</td><td nowrap='nowrap'>";
        echo _obfuscate_jZGJkpOSkY_HiY2HjY2JlIg�( $_obfuscate_iZOQkZCMkZGGjZCIlZSQi40� == "_recycle" ? $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['deltime'] : $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['addtime'], "m-d H:i:s" );
        echo "</td>";
        echo "<td nowrap='nowrap' id='copy_"._obfuscate_iI6QhpSTiJCJiI_KlYePlZI�( 16 )."' class='keynum' copyt='";
        echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['keyfix'];
        echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['keys'];
        echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['keyspassword'];
        echo "'>";
        echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['keyfix'];
        echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['keys'];
        echo "*";
        echo substr( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['keyspassword'], 18 );
        echo "</td><td nowrap='nowrap'><input type=text class=viewinput  maxlength='50' oldval='";
        echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['tag'];
        echo "'";
        echo $_obfuscate_iZOQkZCMkZGGjZCIlZSQi40� == "_recycle" ? " Readonly" : "";
        echo " value='";
        echo _obfuscate_j5CKkY_GkomSkoaUlIuLlYk�( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['tag'] );
        echo "'>";
        echo $_obfuscate_iZOQkZCMkZGGjZCIlZSQi40� != "_recycle" ? "<input type='button' class='savetag' value=''>" : "";
        echo "</td><td nowrap='nowrap'>";
        echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['cday'] * 1;
        echo "</td><td>";
        echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['points'];
        echo "</td><td>";
        echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['linknum'];
        echo "</td><td><input type=text class=viewinput Readonly value='";
        echo _obfuscate_j5CKkY_GkomSkoaUlIuLlYk�( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['keyextattr'] );
        echo "'></td><td nowrap='nowrap'>";
        echo $_obfuscate_j5OIiY_GkpCLh5CJh5SIlYc�[$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['managerid']];
        echo "</td><td nowrap='nowrap' ";
        echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['cztime'] == 0 ? "" : "title='"._obfuscate_jZGJkpOSkY_HiY2HjY2JlIg�( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['cztime'] )."'";
        echo ">";
        echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['cztime'] == 0 ? "-" : _obfuscate_jZGJkpOSkY_HiY2HjY2JlIg�( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['cztime'], "m-d H:i" )."<input type=text class=viewinput Readonly value='"._obfuscate_j5CKkY_GkomSkoaUlIuLlYk�( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['czusername'] )."'>";
        echo "</td>";
        echo "<td nowrap='nowrap' id='copy_"._obfuscate_iI6QhpSTiJCJiI_KlYePlZI�( 15 )."' class='keynum' copyt='";
        echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['ordernum'];
        echo "'>";
        echo substr( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['ordernum'], 0, 10 );
        echo "*";
        echo substr( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['ordernum'], 20 );
        echo "</td></tr>\r\n";
    }
}
echo "</table>\r\n<table class=\"listtable\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\" align=\"center\" width=\"99%\">\r\n<tr>\r\n<td class=\"findorpage\">\r\n<input type=\"hidden\" alt=\"ajax提交必须添加此项\" name=\"isajax\" value=\"1\" />\r\n<img  src=\"";
echo INSTALLPATH;
echo "kss_inc/images/arrow_ltr.png\" style=\"vertical-align:middle\"><input type=\"button\" name=\"chkall\" id=\"chkall\" value=\"全选/反选\" class=\"submitbtn\"> ━▶\r\n&nbsp;&nbsp;<input type='button' id='copyselkey' malt='将选中的卡号全部复制到剪贴板' value='复制卡号' class='submitbtn'>\r\n";
if ( $_obfuscate_iZOQkZCMkZGGjZCIlZSQi40� == "_recycle" )
{
    if ( 7 < $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] )
    {
        echo "&nbsp;&nbsp;<input type='submit' name='op' id='recoverykey' malt='将选中的卡号从回收站表还原到注册卡表中去' value='还原' class='submitbtn'>";
    }
}
else
{
    echo "&nbsp;&nbsp;<input type='submit' name='op' id='lockkey' malt='将选中的卡号锁定' value='锁定' class='submitbtn'>&nbsp;&nbsp;<input type='submit' name='op' id='unlockkey' malt='将选中的卡号解锁' value='解锁' class='submitbtn'>";
    if ( 7 < $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] || _obfuscate_j4aJjo2Hi4eOlJSKk4uHk4k�( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['powerlist'], 52 ) )
    {
        echo "&nbsp;&nbsp;<input type='submit' name='op' id='delkey' malt='将选中的卡号移动到回收站中去' value='删除' class='submitbtn'>&nbsp;&nbsp;<input type='submit' name='op' id='backkey' malt='将选中的某一代理的卡号退回，系统会返还部份金额到代理的帐号' value='退卡' class='submitbtn'>";
    }
    echo "&nbsp;&nbsp;<input type='submit' name='op' id='setalltag' malt='将选中的卡号标签都设置为指定值' value='设置标签' class='submitbtn'>━▶<input maxlength='50' type=text id='newtag' name='newtag' class=viewinput value=''>";
}
echo "\t\t\r\n</td>\r\n</tr>\r\n</table>\r\n</form>\r\n<table class=\"listtable\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\" align=\"center\" width=\"99%\">\r\n<tr>\r\n<td class=\"findorpage\">";
echo $_obfuscate_k4yVk4iOipWPioqJlIuVkpE�;
echo "</td>\r\n</tr>\r\n</table>\r\n";
$_obfuscate_i5GVjZWQj4ePkJKMjJSRipM�[] = _obfuscate_hpCTj4mKj5WSkpWPjouJkoc�( );
echo "<div id=pageruntime>页面运行时间"._obfuscate_i4mGjpKMk5WRipSVi4mLi40�( $_obfuscate_i5GVjZWQj4ePkJKMjJSRipM� )."毫秒</div>";
echo "<div id=\"altmsg001\" style=\"position:absolute;top:75px;left:80px;\"><img src=\"../kss_inc/images/altmsg001.gif\"></div>\r\n<script>\r\n$(document).ready(function(){ \r\n$('#altmsg001').bind(\"mouseover\",function(){$(this).hide();})\r\n});\r\n</script>\r\n</body>\r\n</html>";
?>
