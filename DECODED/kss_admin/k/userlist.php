<?php
/*********************/
/*                   */
/*  Dezend for PHP5  */
/*         NWS       */
/*      Nulled.WS    */
/*                   */
/*********************/

function _obfuscate_homTi4qOh46PiZOPkIqJjog�( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� = 1 )
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
$_obfuscate_i4uIkYuKkJGQlJKOjoiMj4c� = array( "action" => $_obfuscate_lZOThomRipOIi5SRhpWRjY4� );
$_obfuscate_i4uIkYuKkJGQlJKOjoiMj4c�['softid'] = $_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE�;
$_obfuscate_i4uIkYuKkJGQlJKOjoiMj4c�['recycle'] = $_obfuscate_iZOQkZCMkZGGjZCIlZSQi40�;
if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] == 6 )
{
    $_obfuscate_ho2NhoaMhoqMlYuLiJSKjo4� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "select * from kss_tb_agentprice where `managerid`=".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['id']." and `softid`=".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE� );
    if ( empty( $_obfuscate_ho2NhoaMhoqMlYuLiJSKjo4� ) )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "你没有该软件的授权", 1 );
    }
}
$_obfuscate_kIqPhpWOi4yQhpOJlJOUjY0� = array( "锁定", "解锁", "冻结", "解冻", "删除", "还原", "解绑", "下线", "清除", "savetags", "设置标签", "unline" );
$_obfuscate_jZGRipSRkIeUiIeQjoaUjJI� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "select * from kss_tb_soft where `id`=".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE� );
if ( in_array( $_obfuscate_k4mViI2Nj4mJkIuUj42JiIY�, $_obfuscate_kIqPhpWOi4yQhpOJlJOUjY0� ) )
{
    include( dirname( __FILE__ ).DIRECTORY_SEPARATOR."userlist_cmd.php" );
}
$_obfuscate_iI_VhpWIjpSPi4eQj4aTjZE� = $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['softmode'];
$_obfuscate_iYqPiJGIjoaVhoaQiI2Ti4w� = "SELECT `id` ";
$_obfuscate_jpCQi4aKkYaIjpSUhpWNipM� = "SELECT * ";
$_obfuscate_homTioySho6Vh5ORiYmUkok� = " where `id` ";
$_obfuscate_kZCPiJCHiI_IlY2Ok4_JlIc� = "SELECT count(*) as tnum ";
$_obfuscate_lJSNlZWKlYmGi4iSkIqHjpA� = "from `kss_z_user_".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE�.$_obfuscate_iZOQkZCMkZGGjZCIlZSQi40�."` ";
$_obfuscate_h4eJlYuIjpKNio6QkIuJlIY� = array( );
$_obfuscate_lImLiIqUj5OSipGOko6RlJQ� = trim( $_obfuscate_lImLiIqUj5OSipGOko6RlJQ� );
$_obfuscate_i4uIkYuKkJGQlJKOjoiMj4c�['selcmd'] = $_obfuscate_iIyVlIiOhoiMhomQk5GLh5M�;
$_obfuscate_i4uIkYuKkJGQlJKOjoiMj4c�['keywords'] = $_obfuscate_lImLiIqUj5OSipGOko6RlJQ�;
switch ( $_obfuscate_iIyVlIiOhoiMhomQk5GLh5M� )
{
    case "morekeys" :
        $_obfuscate_kJKTk5WSiI6NiYmHj4_Jkoc� = preg_replace( "/(\\r)/", "", $_obfuscate_kJKTk5WSiI6NiYmHj4_Jkoc� );
        $_obfuscate_kJKTk5WSiI6NiYmHj4_Jkoc� = str_replace( "\n\n", "\n", $_obfuscate_kJKTk5WSiI6NiYmHj4_Jkoc� );
        if ( $_obfuscate_iI_VhpWIjpSPi4eQj4aTjZE� == "USOFT" )
        {
            if ( strlen( $_obfuscate_kJKTk5WSiI6NiYmHj4_Jkoc� ) < 3 )
            {
                _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "你没输入任何用户名", 1 );
            }
        }
        else if ( strlen( $_obfuscate_kJKTk5WSiI6NiYmHj4_Jkoc� ) < 32 )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "你没输入任何卡号", 1 );
        }
        $_obfuscate_h5OVi5KSi5OIhpCSk42KiI4� = explode( "\n", $_obfuscate_kJKTk5WSiI6NiYmHj4_Jkoc� );
        $_obfuscate_joeNkJKLko2Hi4aNjomOj4s� = "";
        $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� = 0;
        $_obfuscate_kYiQkJKGlI6JlZWRioaKlYg� = array( );
        foreach ( $_obfuscate_h5OVi5KSi5OIhpCSk42KiI4� as $_obfuscate_ko2HkJOUh5WSiZKSjomUk4w� )
        {
            if ( $_obfuscate_iI_VhpWIjpSPi4eQj4aTjZE� == "KSOFT" && strlen( $_obfuscate_ko2HkJOUh5WSiZKSjomUk4w� ) == 32 )
            {
                $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� += 1;
                if ( ZPAGESIZE < $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� )
                {
                    _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "每次最多只能查询".ZPAGESIZE."条", 1 );
                }
                $_obfuscate_joeNkJKLko2Hi4aNjomOj4s� .= "'".substr( $_obfuscate_ko2HkJOUh5WSiZKSjomUk4w�, 0, 10 )."',";
                $_obfuscate_kYiQkJKGlI6JlZWRioaKlYg�[substr( $_obfuscate_ko2HkJOUh5WSiZKSjomUk4w�, 0, 10 )] = substr( $_obfuscate_ko2HkJOUh5WSiZKSjomUk4w�, 10, 10 );
            }
            else if ( !( $_obfuscate_iI_VhpWIjpSPi4eQj4aTjZE� == "USOFT" ) || !( 2 < _obfuscate_ioqHi5WHiJKIkoeIhouHjYw�( $_obfuscate_ko2HkJOUh5WSiZKSjomUk4w� ) ) )
            {
                $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� += 1;
                if ( ZPAGESIZE < $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� )
                {
                    _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "每次最多只能查询".ZPAGESIZE."条", 1 );
                }
                $_obfuscate_joeNkJKLko2Hi4aNjomOj4s� .= "'".$_obfuscate_ko2HkJOUh5WSiZKSjomUk4w�."',";
                $_obfuscate_kYiQkJKGlI6JlZWRioaKlYg�[$_obfuscate_ko2HkJOUh5WSiZKSjomUk4w�] = "";
            }
        }
        if ( $_obfuscate_joeNkJKLko2Hi4aNjomOj4s� == "" )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "你没输入任何要查询的资料", 1 );
        }
        $_obfuscate_joeNkJKLko2Hi4aNjomOj4s� = substr( $_obfuscate_joeNkJKLko2Hi4aNjomOj4s�, 0, strlen( $_obfuscate_joeNkJKLko2Hi4aNjomOj4s� ) - 1 );
        $_obfuscate_h4eJlYuIjpKNio6QkIuJlIY�['a'] = " `username` in (".$_obfuscate_joeNkJKLko2Hi4aNjomOj4s�.") ";
        break;
    case "keys" :
        if ( $_obfuscate_iI_VhpWIjpSPi4eQj4aTjZE� == "KSOFT" )
        {
            if ( strlen( $_obfuscate_lImLiIqUj5OSipGOko6RlJQ� ) != 32 && strlen( $_obfuscate_lImLiIqUj5OSipGOko6RlJQ� ) != 10 )
            {
                _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "输入的注册卡号必须是32位 或 卡号前10位", 1 );
            }
            if ( strlen( $_obfuscate_lImLiIqUj5OSipGOko6RlJQ� ) == 32 )
            {
                $_obfuscate_h4eJlYuIjpKNio6QkIuJlIY�['a'] = " `username`='".substr( $_obfuscate_lImLiIqUj5OSipGOko6RlJQ�, 0, 10 )."' and `password`='".substr( $_obfuscate_lImLiIqUj5OSipGOko6RlJQ�, 10, 10 )."' ";
                break;
            }
            else
            {
                $_obfuscate_h4eJlYuIjpKNio6QkIuJlIY�['a'] = " `username`='".substr( $_obfuscate_lImLiIqUj5OSipGOko6RlJQ�, 0, 10 )."' ";
                break;
            }
        }
        else
        {
            if ( _obfuscate_ioqHi5WHiJKIkoeIhouHjYw�( $_obfuscate_lImLiIqUj5OSipGOko6RlJQ� ) < 2 )
            {
                _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "输入的会员名少于2个字符", 1 );
            }
            $_obfuscate_h4eJlYuIjpKNio6QkIuJlIY�['a'] = " `username` like '".$_obfuscate_lImLiIqUj5OSipGOko6RlJQ�."%' ";
            break;
        }
    case "islock" :
        $_obfuscate_h4eJlYuIjpKNio6QkIuJlIY�['a'] = " `islock`>0 ";
        break;
    case "isonline" :
        if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['chkonline'] != 1 )
        {
            $_obfuscate_h4eJlYuIjpKNio6QkIuJlIY�['a'] = " `lasttime`>".( time( ) - 60 * $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['connectpenli'] - 300 )."";
            break;
        }
        else
        {
            $_obfuscate_h4eJlYuIjpKNio6QkIuJlIY�['a'] = " `isonline`=1 ";
            break;
        }
    case "isend" :
        $_obfuscate_h4eJlYuIjpKNio6QkIuJlIY�['a'] = " `endtime`<".time( )." ";
        break;
    case "tags" :
        if ( strlen( $_obfuscate_lImLiIqUj5OSipGOko6RlJQ� ) < 1 )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "标签最少两位", 1 );
        }
        $_obfuscate_h4eJlYuIjpKNio6QkIuJlIY�['a'] = " `tag` like '".$_obfuscate_lImLiIqUj5OSipGOko6RlJQ�."%' ";
        break;
    case "bdinfo" :
        if ( strlen( $_obfuscate_lImLiIqUj5OSipGOko6RlJQ� ) < 1 )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "绑定信息最少两位", 1 );
        }
        $_obfuscate_h4eJlYuIjpKNio6QkIuJlIY�['a'] = " `bdinfo` like '".$_obfuscate_lImLiIqUj5OSipGOko6RlJQ�."%' ";
        break;
    case "pccode" :
        if ( strlen( $_obfuscate_lImLiIqUj5OSipGOko6RlJQ� ) < 1 )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "机器码最少两位", 1 );
        }
        $_obfuscate_h4eJlYuIjpKNio6QkIuJlIY�['a'] = " `pccode` like '".$_obfuscate_lImLiIqUj5OSipGOko6RlJQ�."%' ";
        break;
    case "keyextattr" :
        $_obfuscate_h4eJlYuIjpKNio6QkIuJlIY�['a'] = " `keyextattr`='".$_obfuscate_lImLiIqUj5OSipGOko6RlJQ�."' ";
}
$_obfuscate_j5OIiY_GkpCLh5CJh5SIlYc� = array( );
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
    if ( $_obfuscate_iIyVlIiOhoiMhomQk5GLh5M� == "morekeys" && $_obfuscate_iI_VhpWIjpSPi4eQj4aTjZE� == "KSOFT" )
    {
        $_obfuscate_jY_UkIyPh4eOi4uNioaVkJQ� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_lZGTiIiKhouKiZGLi5KUkI8�( "SELECT `id`,`username`,`password` ".$_obfuscate_lJSNlZWKlYmGi4iSkIqHjpA�.$_obfuscate_homTioySho6Vh5ORiYmUkok� );
        echo htmlspecialchars( "SELECT `id`,`username`,`password` ".$_obfuscate_lJSNlZWKlYmGi4iSkIqHjpA�.$_obfuscate_homTioySho6Vh5ORiYmUkok� );
        echo "\r\n";
        $_obfuscate_iIiHi4aTkoySkpCNio_UjYo� = "";
        foreach ( $_obfuscate_jY_UkIyPh4eOi4uNioaVkJQ� as $_obfuscate_homIkYiRk5SSlImKk4_Jho8� )
        {
            if ( $_obfuscate_kYiQkJKGlI6JlZWRioaKlYg�[$_obfuscate_homIkYiRk5SSlImKk4_Jho8�['username']] != $_obfuscate_homIkYiRk5SSlImKk4_Jho8�['password'] )
            {
                $_obfuscate_koeUkImOlYeQiZSJkZWPiJU� .= $_obfuscate_homIkYiRk5SSlImKk4_Jho8�['username'].$_obfuscate_kYiQkJKGlI6JlZWRioaKlYg�[$_obfuscate_homIkYiRk5SSlImKk4_Jho8�['username']]."\r\n";
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
echo ";\r\nvar smode='";
echo $_obfuscate_iI_VhpWIjpSPi4eQj4aTjZE�;
echo "';\r\nvar softid=";
echo $_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE�;
echo ";\r\n\r\n\r\n</script>\r\n\r\n<script type=\"text/javascript\" src=\"";
echo INSTALLPATH;
echo "kss_inc/js/k/userlist.js?20170102\" charset=\"utf-8\"></script>\r\n<table class=\"listtable\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\" align=\"center\" width=\"99%\">\r\n<form id=\"find_key\" action=\"?action=userlist&softid=";
echo $_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE�;
echo "\" method=\"post\">\r\n<tr>\r\n<td class=\"findorpage\">\r\n";
if ( 7 < $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] || _obfuscate_j4aJjo2Hi4eOlJSKk4uHk4k�( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['powerlist'], "14" ) )
{
    echo "<input type='checkbox' name='recycle' value='_recycle' id='recycle' ".( $_obfuscate_iZOQkZCMkZGGjZCIlZSQi40� == "_recycle" ? " checked" : "" )." /><label for='recycle'>回收站</label> &nbsp;&nbsp;";
}
echo "<select id=\"selcmd\" name=\"selcmd\">\r\n";
if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] == 6 )
{
    echo "<option value='no'>所有</option>";
}
else
{
    echo "<option value='no'>所属</option>";
}
echo "<option value='keys' ";
echo $_obfuscate_iIyVlIiOhoiMhomQk5GLh5M� == "keys" ? " selected" : "";
echo ">";
echo $_obfuscate_iI_VhpWIjpSPi4eQj4aTjZE� == "KSOFT" ? "注册卡号" : "用户名";
echo "</option>\t\t\t\r\n<option value='tags' ";
echo $_obfuscate_iIyVlIiOhoiMhomQk5GLh5M� == "tags" ? " selected" : "";
echo ">标签</option>\r\n<option value='bdinfo' ";
echo $_obfuscate_iIyVlIiOhoiMhomQk5GLh5M� == "bdinfo" ? " selected" : "";
echo ">绑定信息</option>\r\n<option value='keyextattr' ";
echo $_obfuscate_iIyVlIiOhoiMhomQk5GLh5M� == "keyextattr" ? " selected" : "";
echo ">用户附属性</option>\r\n<option value='pccode' ";
echo $_obfuscate_iIyVlIiOhoiMhomQk5GLh5M� == "pccode" ? " selected" : "";
echo ">机器码</option>\r\n<option value='isonline' ";
echo $_obfuscate_iIyVlIiOhoiMhomQk5GLh5M� == "isonline" ? " selected" : "";
echo ">在线的用户</option>\r\n<option value='islock' style=\"background:#F6D892\"";
echo $_obfuscate_iIyVlIiOhoiMhomQk5GLh5M� == "islock" ? " selected" : "";
echo ">被锁定的用户</option>\r\n<option value='isend' style='background:#FAD4CB' ";
echo $_obfuscate_iIyVlIiOhoiMhomQk5GLh5M� == "isend" ? " selected" : "";
echo ">过期的用户</option>\r\n<option value='morekeys' ";
echo $_obfuscate_iIyVlIiOhoiMhomQk5GLh5M� == "morekeys" ? " selected" : "";
echo ">";
echo $_obfuscate_iI_VhpWIjpSPi4eQj4aTjZE� == "USOFT" ? "批量查询用户" : "批量查询注册卡";
echo "</option>\r\n</select>\r\n<input style=\"display:none\" type=text id=\"keywords\" name=\"keywords\" value=\"";
echo $_obfuscate_lImLiIqUj5OSipGOko6RlJQ�;
echo "\">\r\n";
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
if ( $_obfuscate_iI_VhpWIjpSPi4eQj4aTjZE� == "USOFT" )
{
    $_obfuscate_kI2Ri4iLjoaMioyTiIaPjJA� = "用户名";
}
else
{
    $_obfuscate_kI2Ri4iLjoaMioyTiIaPjJA� = "注册卡号";
}
echo "<input type=\"submit\" name=\"submit\" class=\"submitbtn\" value=\"搜索\" />\r\n<div id=\"morekeys\">每行一个";
echo $_obfuscate_kI2Ri4iLjoaMioyTiIaPjJA�;
echo "，每次最多只允许查询";
echo ZPAGESIZE;
echo "行<br><textarea id=\"morekeystextarea\" style=\"display:block;width:500px;height:100px;margin:5px 0 0 0;font-family:Fixedsys,Arial,Verdana;color:#333\" name=\"morekeys\">";
echo htmlspecialchars( $_obfuscate_kJKTk5WSiI6NiYmHj4_Jkoc� );
echo "</textarea>";
if ( $_obfuscate_koeUkImOlYeQiZSJkZWPiJU� != "" )
{
    echo "未找到的注册卡<br><textarea  style='display:block;width:500px;height:50px;margin:5px 0 0 0;font-family:Fixedsys,Arial,Verdana;color:#333'>".$_obfuscate_koeUkImOlYeQiZSJkZWPiJU�."</textarea>";
}
echo "</div>\r\n</td>\r\n</tr>\r\n</form>\r\n</table>\r\n\r\n<table class=\"listtable\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\" align=\"center\" width=\"99%\">\r\n<tr>\r\n<td class=\"findorpage\">";
echo $_obfuscate_k4yVk4iOipWPioqJlIuVkpE�;
echo "</td>\r\n</tr>\r\n</table>\r\n\r\n";
if ( $_obfuscate_iZOQkZCMkZGGjZCIlZSQi40� != "_recycle" || 7 < $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] )
{
    echo "<form id=\"userlist\" action=\"?action=userlist&softid=";
    echo $_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE�;
    echo "&isajax=1\" method=\"post\">\r\n";
}
echo "<table class=\"listtable\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\" align=\"center\" width=\"99%\">\r\n<tr class=\"trhead\">\r\n<td malt=\"ID号\">ID</td>\r\n<td nowrap=\"nowrap\" malt=\"";
echo $_obfuscate_iZOQkZCMkZGGjZCIlZSQi40� == "_recycle" ? "执行删除操作的管理用户" : "可以查看修改用户信息、查看用户使用日志、锁定与解锁用户、作者还可删除用户";
echo "\">操作</td>\r\n<td nowrap=\"nowrap\" malt=\"红色表示在线，如果软件参数设置勾选了登陆标识，用户被卡在线上可以点击红色小方块强制在线为离线状态\">状</td>\r\n";
if ( $_obfuscate_iI_VhpWIjpSPi4eQj4aTjZE� == "USOFT" )
{
    echo "<td nowrap='nowrap' malt='用户名'>用户名</td><td nowrap='nowrap' malt='用户充值的卡号数量'>卡数</td>";
}
else
{
    echo "<td nowrap='nowrap' malt='注册卡号'>注册卡号</td>";
}
echo "<td nowrap='nowrap' malt='用户连接服务器验证的次数'>验证</td>\t\t\r\n<td nowrap=\"nowrap\" malt=\"可修改，主要是方便用户管理注册卡，给用户备注一些信息\">标签</td>\t\t\r\n<td nowrap=\"nowrap\" malt=\"用户自激活日期算起的可使用天数\">天数</td>\r\n<td nowrap=\"nowrap\" malt=\"在某些软件里，你可能要按点计费，该点数是按点扣费的基础功能\">点数</td>\r\n<td nowrap=\"nowrap\" malt=\"通道数大于1的，客户可用同一注册卡/帐号和不同的通道号，同时在不同的电脑上登陆\">通道</td>\r\n<td nowrap=\"nowrap\" malt=\"绑定信息可修改，你可以通过软件参数来控制客户能否在客户端通过API来修改该信息\">绑定信息</td>\r\n<td nowrap=\"nowrap\" malt=\"附属性不可以修改，客户登陆后可以取得该属性，你可以利用该属性来实现不同属性可使用不同的客户端软件功能<br>为防止附属性太长破坏界面，附属性放在文本框中显示\">附属性</td>\r\n<td nowrap=\"nowrap\" malt=\"该注册卡是属于哪一个后台帐号的\">所属</td>\r\n<td nowrap=\"nowrap\" malt=\"用户到期日期\">到期日期</td>\r\n";
if ( $_obfuscate_iZOQkZCMkZGGjZCIlZSQi40� == "_recycle" )
{
    echo "<td malt='该用户被删除的日期'>删除日期</td>";
}
else
{
    echo "<td malt='该用户激活的日期'>激活日期</td>";
}
echo "\t\t\r\n</tr>\r\n";
if ( empty( $_obfuscate_iYeIjIaVlYaIj4yTiJWHk40� ) )
{
    echo "<tr nodata=1 class=trd><td colspan=15>无任何信息</td></tr>";
}
else
{
    foreach ( $_obfuscate_iYeIjIaVlYaIj4yTiJWHk40� as $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI� )
    {
        $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['bdinfo'] = _obfuscate_j5CKkY_GkomSkoaUlIuLlYk�( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['bdinfo'] );
        $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['pccode'] = _obfuscate_j5CKkY_GkomSkoaUlIuLlYk�( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['pccode'] );
        $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['username'] = _obfuscate_j5CKkY_GkomSkoaUlIuLlYk�( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['username'] );
        $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['keyextattr'] = _obfuscate_j5CKkY_GkomSkoaUlIuLlYk�( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['keyextattr'] );
        echo "<tr class='".( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['endtime'] < time( ) ? "trdisend" : 0 < $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['islock'] ? "trdislock" : $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['endtime'] == PETIME ? "trdpubuser" : "trd" )."' id='trd";
        echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['username'];
        echo "' malt='[table][tr][td class=vth]会员名[/td][td class=vtd]".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['username']."[/td][td class=vth]密码[/td][td class=vtd]";
        if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] == 6 && !_obfuscate_j4aJjo2Hi4eOlJSKk4uHk4k�( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['powerlist'], "18" ) )
        {
            echo "******";
        }
        else
        {
            echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['password'];
        }
        echo "[/td][td class=vth]安全密码[/td][td class=vtd]";
        if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] == 6 && !_obfuscate_j4aJjo2Hi4eOlJSKk4uHk4k�( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['powerlist'], "13" ) )
        {
            echo "******";
        }
        else
        {
            echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['password2'];
        }
        echo "[/td][td class=vth]冻结日期[/td][td class=vtd]".( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['pausetime'] != 0 ? date( "Y-m-d H:i", $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['pausetime'] ) : "-" )."[/td][td class=vth]备注[/td][td class=vtd]".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['intro']."[/td][td class=vth]使用过体验卡[/td][td class=vtd]".( 0 < $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['isusetestkey'] ? "是" : "否" )."[/td][td class=vth]私有数据[/td][td class=vtd]".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['updata']."[/td][/tr][tr][td class=vth]机器码[/td][td class=vtd]".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['pccode']."[/td][td class=vth]绑定信息[/td][td class=vtd]".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['bdinfo']."[/td][td class=vth]上次验证日期[/td][td class=vtd]"._obfuscate_jZGJkpOSkY_HiY2HjY2JlIg�( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['lasttime'] )."[/td][td class=vth]上次验证IP[/td][td class=vtd]".long2ip( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['lastip'] )."[/td][td class=vth]推广帐号[/td][td class=vtd]".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['parentuser']."[/td][td class=vth]解绑次数[/td][td class=vtd]";
        echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['unlockday'] == date( "d" ) ? $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['unlocktimes'] : 0;
        echo "[/td][td class=vth]-[/td][td class=vtd]-[/td][/tr][/table]'><td nowrap='nowrap' style='cursor:pointer'><input type='checkbox' name='keys[]' value='";
        echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['username'];
        echo "' id='check";
        echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['username'];
        echo "'>";
        echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['id'];
        echo "</td><td nowrap='nowrap'><img class=edituser malt='编辑用户信息' src=";
        echo INSTALLPATH;
        echo "kss_inc/images/b_edit.png>&nbsp;&nbsp;<img class=viewlog malt='查看用户使用日志' src=";
        echo INSTALLPATH;
        echo "kss_inc/images/b_calendar.png>";
        if ( $_obfuscate_iI_VhpWIjpSPi4eQj4aTjZE� == "USOFT" )
        {
            echo "&nbsp;&nbsp;<img class=viewczlog malt='查看用户充值日志' src=";
            echo INSTALLPATH;
            echo "kss_inc/images/b_rmb.png>";
        }
        if ( $_obfuscate_iZOQkZCMkZGGjZCIlZSQi40� == "_recycle" )
        {
            echo isset( $_obfuscate_j5OIiY_GkpCLh5CJh5SIlYc�[$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['delmid']] ) ? $_obfuscate_j5OIiY_GkpCLh5CJh5SIlYc�[$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['delmid']] : "";
        }
        else
        {
            echo "&nbsp;&nbsp;<img class='hand' malt='锁级别：".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['islock'].",  点击此按钮锁定或解锁用户或注册卡'  op='".( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['islock'] == 0 ? "锁定" : "解锁" )."' lock='".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['islock']."' src='".INSTALLPATH."kss_inc/images/".( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['islock'] == 0 ? "b_usrcheck.png" : "b_uncheck.png" )."'>";
            echo "&nbsp;&nbsp;<img class='hand' malt='冰结级别：".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['ispause'].",  点击此按钮冻结或解冻用户或注册卡，冻结后不计时'  op='".( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['ispause'] == 0 ? "冻结" : "解冻" )."' pause='".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['ispause']."' src='".INSTALLPATH."kss_inc/images/".( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['ispause'] == 0 ? "b_pause.png" : "b_unpause.png" )."'>";
            if ( 7 < $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] )
            {
                echo "&nbsp;&nbsp;<img class='hand' malt='点击将该注册卡放入回收站'  op='删除' src='".INSTALLPATH."kss_inc/images/b_empty.png'>";
            }
        }
        echo "</td>";
        if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['chkonline'] == 0 )
        {
            $_obfuscate_jpKIj4yRlZGKjYmOioqHjpQ� = time( ) < $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['lasttime'] + 60 * ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['connectpenli'] + 1 ) ? "'online1' title='在线'" : "'online0' title='不在线'";
        }
        else if ( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['isonline'] == 1 )
        {
            if ( time( ) < $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['lasttime'] + 60 * $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['outlinetime'] )
            {
                $_obfuscate_jpKIj4yRlZGKjYmOioqHjpQ� = "'online2' title='在线，单击可强制设置为离线'";
            }
            else
            {
                $_obfuscate_jpKIj4yRlZGKjYmOioqHjpQ� = "'online3' title='在线，已经".$_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['outlinetime']."分钟没有连接服务器验证，单击可强制设置为离线'";
            }
        }
        else
        {
            $_obfuscate_jpKIj4yRlZGKjYmOioqHjpQ� = "'online0' title='不在线'";
        }
        echo "<td><span class=".$_obfuscate_jpKIj4yRlZGKjYmOioqHjpQ�.">◆</span></td>";
        if ( $_obfuscate_iI_VhpWIjpSPi4eQj4aTjZE� == "USOFT" )
        {
            echo "<td nowrap='nowrap' id='copy_"._obfuscate_iI6QhpSTiJCJiI_KlYePlZI�( 16 )."' class='keynum' copyt='";
            echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['username'];
            echo "'>";
            echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['username'];
            echo "</td><td nowrap='nowrap'><a href='javascript:void(0)'  onclick=";
            echo YH2;
            echo "dwin('user_key1_";
            echo $_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE�;
            echo "','";
            echo $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['softname'];
            echo "注册卡列表','admin_key.php?action=keylist&softid=";
            echo $_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE�;
            echo "&selcmd=czusername&keywords='+encodeURIComponent('".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['username']."'))";
            echo YH2;
            echo ">";
            echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['cztimes'];
            echo "</td>";
        }
        else
        {
            echo "<td nowrap='nowrap' id='copy_"._obfuscate_iI6QhpSTiJCJiI_KlYePlZI�( 16 )."' class='keynum' copyt='";
            echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['username'].$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['password'].$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['password2'];
            echo "'>";
            echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['username'].substr( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['password'], 18 );
            echo "</td>";
        }
        echo "<td>";
        echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['activetimes'];
        echo "</td><td nowrap='nowrap'><input type=text class=viewinput  maxlength='50' oldval='";
        echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['tag'];
        echo "'";
        echo $_obfuscate_iZOQkZCMkZGGjZCIlZSQi40� == "_recycle" ? " Readonly" : "";
        echo " value='";
        echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['tag'];
        echo "'>";
        echo $_obfuscate_iZOQkZCMkZGGjZCIlZSQi40� != "_recycle" ? "<input type='button' class='savetag' value=''>" : "";
        echo "</td><td nowrap='nowrap' aj='cday";
        echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['username'];
        echo "'>";
        echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['cday'] * 1;
        echo "</td><td aj='points";
        echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['username'];
        echo "'>";
        echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['points'];
        echo "</td><td><img aj='imglinknum";
        echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['username'];
        echo "' ";
        echo 1 < $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['linknum'] ? "class=viewipc malt='查看各通道信息' " : "malt='单通道' ";
        echo "src=";
        echo INSTALLPATH;
        echo "kss_inc/images/b_view2.png><span aj='linknum";
        echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['username'];
        echo "'>";
        echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['linknum'];
        echo "</span></td><td><input type=text class=viewinput Readonly aj='bdinfo";
        echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['username'];
        echo "'  value='";
        echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['bdinfo'];
        echo "'></td><td><input type=text class=viewinput Readonly aj='keyextattr";
        echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['username'];
        echo "' value='";
        echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['keyextattr'];
        echo "'></td><td nowrap='nowrap'>";
        echo $_obfuscate_j5OIiY_GkpCLh5CJh5SIlYc�[$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['managerid']];
        echo "</td><td aj='endtime";
        echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['username'];
        echo "'>";
        echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['endtime'] == PETIME ? "无限期" : _obfuscate_jZGJkpOSkY_HiY2HjY2JlIg�( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['endtime'], "Y-m-d H:i" );
        echo "</td><td nowrap='nowrap'>";
        echo _obfuscate_jZGJkpOSkY_HiY2HjY2JlIg�( $_obfuscate_iZOQkZCMkZGGjZCIlZSQi40� == "_recycle" ? $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['deltime'] : $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['starttime'], "Y-m-d H:i" );
        echo "</td></tr>\r\n";
    }
}
echo "</table>\r\n<table class=\"listtable\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\" align=\"center\" width=\"99%\">\r\n<tr>\r\n<td class=\"findorpage\">\r\n<input type=\"hidden\" alt=\"ajax提交必须添加此项\" name=\"isajax\" value=\"1\" />\r\n<img  src=\"";
echo INSTALLPATH;
echo "kss_inc/images/arrow_ltr.png\" style=\"vertical-align:middle\"><input type=\"button\" name=\"chkall\" id=\"chkall\" value=\"全选/反选\" class=\"submitbtn\"> ━▶\r\n";
if ( $_obfuscate_iZOQkZCMkZGGjZCIlZSQi40� == "_recycle" )
{
    if ( 7 < $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] )
    {
        echo "&nbsp;&nbsp;<input type='submit' name='op' id='recoverykey' malt='将选中的卡号从回收站表还原到注册卡表中去' value='还原' class='submitbtn'>";
    }
}
else
{
    echo "&nbsp;&nbsp;<input type='submit' name='op' id='lockkey' malt='将选中的用户锁定，锁定后用户不能登陆' value='锁定' class='submitbtn'>&nbsp;&nbsp;<input type='submit' name='op' id='unlockkey' malt='将选中的用户解锁' value='解锁' class='submitbtn'>&nbsp;&nbsp;<input type='submit' name='op' id='pausekey' malt='将选中的用户冻结，冻结后用户不能登陆' value='冻结' class='submitbtn'>&nbsp;&nbsp;<input type='submit' name='op' id='unpausekey' malt='将选中的用户解冻' value='解冻' class='submitbtn'>&nbsp;&nbsp;<input type='submit' name='op' id='unbindkey' malt='将选中的用户解绑，即清空用户机器码' value='解绑' class='submitbtn'>";
    if ( 7 < $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] || _obfuscate_j4aJjo2Hi4eOlJSKk4uHk4k�( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['powerlist'], 52 ) )
    {
        echo "&nbsp;&nbsp;<input type='submit' name='op' id='delkey' malt='将选中的卡号移动到回收站中去' value='删除' class='submitbtn'>";
    }
    echo "&nbsp;&nbsp;<input type='submit' name='op' id='setalltag' malt='将选中的卡号标签都设置为指定值' value='设置标签' class='submitbtn'>━▶<input maxlength='50' type=text id='newtag' name='newtag' class=viewinput value=''>";
}
echo "<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style=\"color:red;font-weight:700\">友情提示：锁定后用户还在计时，冻结后不计时。如若想冻结所有用户时间，请到软件参数设置的基本页设置软件状态为冻结的相关状态。软件由冻结状态转为非冻结状态（也就是软件解冻操作)时，单独冻结的用户不会解冻）</span>\t\t\r\n</td>\r\n</tr>\r\n</table>\r\n</form>\r\n<table class=\"listtable\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\" align=\"center\" width=\"99%\">\r\n<tr>\r\n<td class=\"findorpage\">";
echo $_obfuscate_k4yVk4iOipWPioqJlIuVkpE�;
echo "</td>\r\n</tr>\r\n</table>\r\n";
$_obfuscate_i5GVjZWQj4ePkJKMjJSRipM�[] = _obfuscate_hpCTj4mKj5WSkpWPjouJkoc�( );
echo "<div id=pageruntime>页面运行时间"._obfuscate_i4mGjpKMk5WRipSVi4mLi40�( $_obfuscate_i5GVjZWQj4ePkJKMjJSRipM� )."毫秒</div>";
echo "<div id=\"altmsg001\" style=\"position:absolute;top:30px;left:80px;\"><img src=\"../kss_inc/images/altmsg001.gif\"></div>\r\n<script>\r\n$(document).ready(function(){ \r\n$('#altmsg001').bind(\"mouseover\",function(){$(this).hide();})\r\n});\r\n</script>\r\n</body>\r\n</html>";
?>
