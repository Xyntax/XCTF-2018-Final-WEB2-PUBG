<?php
/*********************/
/*                   */
/*  Dezend for PHP5  */
/*         NWS       */
/*      Nulled.WS    */
/*                   */
/*********************/

function _obfuscate_kpGTjo6Gj46KlYeIkI6GjZU�( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� = 1 )
{
    $_obfuscate_iJGPjJWLj4uLkIqVjYiHh48� = unpack( "C*", "ViewZendSourceCodeIsInvalid!" );
    do
    {
        $_obfuscate_iY2Oh5OGlIqQhpCJi5CMkog� = ( $_obfuscate_lZKViImJjo6UhouJj4aVi4Y�[$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4�] << 4 ) + ( $_obfuscate_lZKViImJjo6UhouJj4aVi4Y�[$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� + 1] >> 4 );
        $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� += 2;
    } while ( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� < 28 );
}

function my_sort( $_obfuscate_iJSNjIuPjoqSjYyUiIyIi5A�, $_obfuscate_j4qUhoiVipWQj4iNh5CJj4w� )
{
    if ( $_obfuscate_iJSNjIuPjoqSjYyUiIyIi5A�['username'] == $_obfuscate_j4qUhoiVipWQj4iNh5CJj4w�['username'] )
    {
        if ( $_obfuscate_j4qUhoiVipWQj4iNh5CJj4w�['endtime'] < $_obfuscate_iJSNjIuPjoqSjYyUiIyIi5A�['endtime'] )
        {
            return 0;
        }
        if ( $_obfuscate_j4qUhoiVipWQj4iNh5CJj4w�['endtime'] < $_obfuscate_iJSNjIuPjoqSjYyUiIyIi5A�['endtime'] )
        {
            return -1;
        }
        return 1;
    }
    if ( $_obfuscate_j4qUhoiVipWQj4iNh5CJj4w�['username'] < $_obfuscate_iJSNjIuPjoqSjYyUiIyIi5A�['username'] )
    {
        return -1;
    }
    return 1;
}

if ( !defined( "YH2" ) )
{
    exit( "Access denied to view this page!" );
}
switch ( $_obfuscate_k4mViI2Nj4mJkIuUj42JiIY� )
{
    case "锁定" :
    case "解锁" :
        if ( $_obfuscate_iZOQkZCMkZGGjZCIlZSQi40� == "_recycle" )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "你真聪明，绕到这来了" );
        }
        $_obfuscate_j5WKlJOMkIyQjoePlYuSjJE� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "keys", "gp", "sql", "" );
        $_obfuscate_jYaSi46HjY6Jj4qKi5WPlIo� = "";
        if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] == 6 )
        {
            $_obfuscate_jYaSi46HjY6Jj4qKi5WPlIo� = " and `managerid`=".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['id'];
        }
        $_obfuscate_j5WKlJOMkIyQjoePlYuSjJE� = explode( ",", $_obfuscate_j5WKlJOMkIyQjoePlYuSjJE� );
        $_obfuscate_iJKJjIuNk4mIjZKVjYmIhpQ� = "";
        if ( count( $_obfuscate_j5WKlJOMkIyQjoePlYuSjJE� ) == 1 )
        {
            $_obfuscate_k4iLiZOSjJWRlIqLiYaPiok� = "='".$_obfuscate_j5WKlJOMkIyQjoePlYuSjJE�[0]."'";
        }
        else
        {
            $_obfuscate_k4iLiZOSjJWRlIqLiYaPiok� = " in ('".implode( "','", $_obfuscate_j5WKlJOMkIyQjoePlYuSjJE� )."')";
        }
        $_obfuscate_jJOHiIqRiYmTkJKPhpWTipM� = $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level']( "select A.`keys`,A.`islock`,A.`keyfix`,B.`pmid` from kss_z_key_".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE�." as A left join kss_tb_manager as B on A.`managerid`=B.`id` where A.`keys`".$_obfuscate_k4iLiZOSjJWRlIqLiYaPiok�.$_obfuscate_jYaSi46HjY6Jj4qKi5WPlIo�." and A.`cztime`=0 and A.`islock`<".( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] - 4 ) );
        if ( empty( $_obfuscate_jJOHiIqRiYmTkJKPhpWTipM� ) )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "您没有权限对选择的注册卡执行锁定或解锁操作！<br>1、可能是你选择的注册卡已被高于你级别的用户锁定。<br>2、该注册卡已使用过，锁定或解锁没有任何意义。" );
        }
        if ( count( $_obfuscate_jJOHiIqRiYmTkJKPhpWTipM� ) != count( $_obfuscate_j5WKlJOMkIyQjoePlYuSjJE� ) )
        {
            $_obfuscate_iJKJjIuNk4mIjZKVjYmIhpQ� = "你提交".$_obfuscate_k4mViI2Nj4mJkIuUj42JiIY�.count( $_obfuscate_j5WKlJOMkIyQjoePlYuSjJE� )."个注册卡号的操作请求，只有".count( $_obfuscate_jJOHiIqRiYmTkJKPhpWTipM� )."条被处理";
        }
        $_obfuscate_kYqNjZWRkI6OhomJjoqHjoY� = "";
        foreach ( $_obfuscate_jJOHiIqRiYmTkJKPhpWTipM� as $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI� )
        {
            if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] == 7 && $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['pmid'] != $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['id'] )
            {
                _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "你试图操作不属于你管理的卡号".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['keyfix'].$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['keys'] );
            }
            $_obfuscate_kYqNjZWRkI6OhomJjoqHjoY� .= "'".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['keys']."',";
        }
        $_obfuscate_kYqNjZWRkI6OhomJjoqHjoY� = substr( $_obfuscate_kYqNjZWRkI6OhomJjoqHjoY�, 0, strlen( $_obfuscate_kYqNjZWRkI6OhomJjoqHjoY� ) - 1 );
        $_obfuscate_k4iLiZOSjJWRlIqLiYaPiok� = " in (".$_obfuscate_kYqNjZWRkI6OhomJjoqHjoY�.")";
        $_obfuscate_k5KIjYeHhoyOkoiKiJSOh5I� = $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] - 5;
        $_obfuscate_k5KIjYeHhoyOkoiKiJSOh5I� = 3 < $_obfuscate_k5KIjYeHhoyOkoiKiJSOh5I� ? 3 : $_obfuscate_k5KIjYeHhoyOkoiKiJSOh5I�;
        if ( $_obfuscate_k4mViI2Nj4mJkIuUj42JiIY� == "锁定" )
        {
            $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "update kss_z_key_".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE�." set `islock`=".$_obfuscate_k5KIjYeHhoyOkoiKiJSOh5I�." where `keys`".$_obfuscate_k4iLiZOSjJWRlIqLiYaPiok�, "sync" );
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "ok1,".$_obfuscate_iJKJjIuNk4mIjZKVjYmIhpQ�.",".str_replace( "'", "", $_obfuscate_kYqNjZWRkI6OhomJjoqHjoY� ) );
        }
        else
        {
            $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "update kss_z_key_".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE�." set `islock`=0 where `keys`".$_obfuscate_k4iLiZOSjJWRlIqLiYaPiok�, "sync" );
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "ok0,".$_obfuscate_iJKJjIuNk4mIjZKVjYmIhpQ�.",".str_replace( "'", "", $_obfuscate_kYqNjZWRkI6OhomJjoqHjoY� ) );
            return 1;
        }
    case "删除" :
        _obfuscate_kY6LiJGJiIiRiIuRjomOiZA�( );
        if ( $_obfuscate_iZOQkZCMkZGGjZCIlZSQi40� == "_recycle" )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "你真聪明，绕到这来了" );
        }
        if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] < 8 && !_obfuscate_j4aJjo2Hi4eOlJSKk4uHk4k�( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'], "52" ) )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "您无权限执行删除操作！", 1 );
        }
        $_obfuscate_j5WKlJOMkIyQjoePlYuSjJE� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "keys", "gp", "sql", "" );
        $_obfuscate_j5WKlJOMkIyQjoePlYuSjJE� = explode( ",", $_obfuscate_j5WKlJOMkIyQjoePlYuSjJE� );
        $_obfuscate_iJKJjIuNk4mIjZKVjYmIhpQ� = "";
        if ( count( $_obfuscate_j5WKlJOMkIyQjoePlYuSjJE� ) == 1 )
        {
            $_obfuscate_k4iLiZOSjJWRlIqLiYaPiok� = "='".$_obfuscate_j5WKlJOMkIyQjoePlYuSjJE�[0]."'";
        }
        else
        {
            $_obfuscate_k4iLiZOSjJWRlIqLiYaPiok� = " in ('".implode( "','", $_obfuscate_j5WKlJOMkIyQjoePlYuSjJE� )."')";
        }
        $_obfuscate_jJOHiIqRiYmTkJKPhpWTipM� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_lZGTiIiKhouKiZGLi5KUkI8�( "select `keys`,`islock` from kss_z_key_".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE�." where `keys`".$_obfuscate_k4iLiZOSjJWRlIqLiYaPiok� );
        if ( empty( $_obfuscate_jJOHiIqRiYmTkJKPhpWTipM� ) )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "你选择的卡好像都不存在！" );
        }
        if ( count( $_obfuscate_jJOHiIqRiYmTkJKPhpWTipM� ) != count( $_obfuscate_j5WKlJOMkIyQjoePlYuSjJE� ) )
        {
            $_obfuscate_iJKJjIuNk4mIjZKVjYmIhpQ� = "你提交".$_obfuscate_k4mViI2Nj4mJkIuUj42JiIY�.count( $_obfuscate_j5WKlJOMkIyQjoePlYuSjJE� )."个注册卡号的操作请求，只找到".count( $_obfuscate_jJOHiIqRiYmTkJKPhpWTipM� )."张卡";
        }
        $_obfuscate_kYqNjZWRkI6OhomJjoqHjoY� = "";
        foreach ( $_obfuscate_jJOHiIqRiYmTkJKPhpWTipM� as $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI� )
        {
            $_obfuscate_kYqNjZWRkI6OhomJjoqHjoY� .= "'".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['keys']."',";
        }
        $_obfuscate_kYqNjZWRkI6OhomJjoqHjoY� = substr( $_obfuscate_kYqNjZWRkI6OhomJjoqHjoY�, 0, strlen( $_obfuscate_kYqNjZWRkI6OhomJjoqHjoY� ) - 1 );
        $_obfuscate_k4iLiZOSjJWRlIqLiYaPiok� = " in (".$_obfuscate_kYqNjZWRkI6OhomJjoqHjoY�.")";
        $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "replace into kss_z_key_".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE�."_recycle (`managerid`, `keyfix`,`keys`, `keyspassword`, `addtime`, `ordernum`, `cday`, `linknum`, `points`, `keyextattr`, `tag`, `islock`, `isback`, `cztime`, `czusername`,`deltime`,`delmid`) select `managerid`,`keyfix`,`keys`, `keyspassword`, `addtime`, `ordernum`, `cday`, `linknum`, `points`, `keyextattr`, `tag`, `islock`, `isback`, `cztime`, `czusername`,".time( ).",".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['id']." from kss_z_key_".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE�." where `keys`".$_obfuscate_k4iLiZOSjJWRlIqLiYaPiok�, "sync" );
        $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� == $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "delete from kss_z_key_".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE�." where  `keys`".$_obfuscate_k4iLiZOSjJWRlIqLiYaPiok�, "sync" );
        if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� !== FALSE && $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� !== FALSE )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "ok3,".$_obfuscate_iJKJjIuNk4mIjZKVjYmIhpQ�.",".str_replace( "'", "", $_obfuscate_kYqNjZWRkI6OhomJjoqHjoY� ) );
        }
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4�( ), 1 );
        return 1;
    case "savetags" :
        _obfuscate_kY6LiJGJiIiRiIuRjomOiZA�( );
        $_obfuscate_jYaSi46HjY6Jj4qKi5WPlIo� = "";
        $_obfuscate_j5WKlJOMkIyQjoePlYuSjJE� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "keys", "gp", "sql", "" );
        $_obfuscate_lYqOkIyVi5WGhoqLhouThoo� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "tags", "gp", "sqljs", "" );
        if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] == 6 )
        {
            $_obfuscate_jYaSi46HjY6Jj4qKi5WPlIo� = " and `managerid`=".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['id'];
        }
        $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']( "update kss_z_key_".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE�.$_obfuscate_iZOQkZCMkZGGjZCIlZSQi40�." set `tag`='".$_obfuscate_lYqOkIyVi5WGhoqLhouThoo�."' where `keys`='".$_obfuscate_j5WKlJOMkIyQjoePlYuSjJE�."'".$_obfuscate_jYaSi46HjY6Jj4qKi5WPlIo�, "sync" );
        if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� !== FALSE )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "ok" );
        }
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4�( ) );
        break;
    case "设置标签" :
}
_obfuscate_kY6LiJGJiIiRiIuRjomOiZA�( );
if ( $_obfuscate_iZOQkZCMkZGGjZCIlZSQi40� == "_recycle" )
{
    _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "你真聪明，绕到这来了" );
}
$_obfuscate_ipCVkZKKi4eSjIuTlZSVho8� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "newtag", "gp", "sqljs", "" );
if ( 50 < _obfuscate_ioqHi5WHiJKIkoeIhouHjYw�( $_obfuscate_ipCVkZKKi4eSjIuTlZSVho8� ) )
{
    _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "标签最大长度50个字符！", 1 );
}
$_obfuscate_j5WKlJOMkIyQjoePlYuSjJE� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "keys", "gp", "sql", "" );
$_obfuscate_jYaSi46HjY6Jj4qKi5WPlIo� = "";
if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] == 6 )
{
    $_obfuscate_jYaSi46HjY6Jj4qKi5WPlIo� = " and `managerid`=".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['id'];
}
$_obfuscate_j5WKlJOMkIyQjoePlYuSjJE� = explode( ",", $_obfuscate_j5WKlJOMkIyQjoePlYuSjJE� );
$_obfuscate_iJKJjIuNk4mIjZKVjYmIhpQ� = "";
if ( count( $_obfuscate_j5WKlJOMkIyQjoePlYuSjJE� ) == 1 )
{
    $_obfuscate_k4iLiZOSjJWRlIqLiYaPiok� = "='".$_obfuscate_j5WKlJOMkIyQjoePlYuSjJE�[0]."'";
}
else
{
    $_obfuscate_k4iLiZOSjJWRlIqLiYaPiok� = " in ('".implode( "','", $_obfuscate_j5WKlJOMkIyQjoePlYuSjJE� )."')";
}
$_obfuscate_jJOHiIqRiYmTkJKPhpWTipM� = $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']( "select `keys`,`islock` from kss_z_key_".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE�." where `keys`".$_obfuscate_k4iLiZOSjJWRlIqLiYaPiok�.$_obfuscate_jYaSi46HjY6Jj4qKi5WPlIo� );
if ( empty( $_obfuscate_jJOHiIqRiYmTkJKPhpWTipM� ) )
{
    _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "你选择的卡好像都不存在或是您没有权限对选择的注册卡执行操作！" );
}
if ( count( $_obfuscate_jJOHiIqRiYmTkJKPhpWTipM� ) != count( $_obfuscate_j5WKlJOMkIyQjoePlYuSjJE� ) )
{
    $_obfuscate_iJKJjIuNk4mIjZKVjYmIhpQ� = "你提交".count( $_obfuscate_j5WKlJOMkIyQjoePlYuSjJE� )."个注册卡号的设置标签操作的请求，只有".count( $_obfuscate_jJOHiIqRiYmTkJKPhpWTipM� )."条被处理";
}
$_obfuscate_kYqNjZWRkI6OhomJjoqHjoY� = "";
foreach ( $_obfuscate_jJOHiIqRiYmTkJKPhpWTipM� as $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI� )
{
    $_obfuscate_kYqNjZWRkI6OhomJjoqHjoY� .= "'".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['keys']."',";
}
$_obfuscate_kYqNjZWRkI6OhomJjoqHjoY� = substr( $_obfuscate_kYqNjZWRkI6OhomJjoqHjoY�, 0, strlen( $_obfuscate_kYqNjZWRkI6OhomJjoqHjoY� ) - 1 );
$_obfuscate_k4iLiZOSjJWRlIqLiYaPiok� = " in (".$_obfuscate_kYqNjZWRkI6OhomJjoqHjoY�.")";
$_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "update kss_z_key_".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE�." set `tag`='".$_obfuscate_ipCVkZKKi4eSjIuTlZSVho8�."' where `keys`".$_obfuscate_k4iLiZOSjJWRlIqLiYaPiok�, "sync" );
if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� !== FALSE )
{
    _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "ok4,".$_obfuscate_iJKJjIuNk4mIjZKVjYmIhpQ�.",".str_replace( "'", "", $_obfuscate_kYqNjZWRkI6OhomJjoqHjoY� ) );
}
_obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4�( ), 1 );
return 1;
switch ( $_obfuscate_k4mViI2Nj4mJkIuUj42JiIY� )
{
    case "还原" :
        _obfuscate_kY6LiJGJiIiRiIuRjomOiZA�( );
        if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] < 8 )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "只有作者级别的才可以还原数据" );
        }
        $_obfuscate_j5WKlJOMkIyQjoePlYuSjJE� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "keys", "gp", "sql", "" );
        $_obfuscate_j5WKlJOMkIyQjoePlYuSjJE� = explode( ",", $_obfuscate_j5WKlJOMkIyQjoePlYuSjJE� );
        $_obfuscate_iJKJjIuNk4mIjZKVjYmIhpQ� = "";
        if ( count( $_obfuscate_j5WKlJOMkIyQjoePlYuSjJE� ) == 1 )
        {
            $_obfuscate_k4iLiZOSjJWRlIqLiYaPiok� = "='".$_obfuscate_j5WKlJOMkIyQjoePlYuSjJE�[0]."'";
        }
        else
        {
            $_obfuscate_k4iLiZOSjJWRlIqLiYaPiok� = " in ('".implode( "','", $_obfuscate_j5WKlJOMkIyQjoePlYuSjJE� )."')";
        }
        $_obfuscate_jJOHiIqRiYmTkJKPhpWTipM� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_lZGTiIiKhouKiZGLi5KUkI8�( "select `keys`,`islock` from kss_z_key_".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE�."_recycle where `keys`".$_obfuscate_k4iLiZOSjJWRlIqLiYaPiok� );
        if ( empty( $_obfuscate_jJOHiIqRiYmTkJKPhpWTipM� ) )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "你选择的卡好像都不存在！" );
        }
        if ( count( $_obfuscate_jJOHiIqRiYmTkJKPhpWTipM� ) != count( $_obfuscate_j5WKlJOMkIyQjoePlYuSjJE� ) )
        {
            $_obfuscate_iJKJjIuNk4mIjZKVjYmIhpQ� = "你提交".$_obfuscate_k4mViI2Nj4mJkIuUj42JiIY�.count( $_obfuscate_j5WKlJOMkIyQjoePlYuSjJE� )."个注册卡号的操作请求，只找到".count( $_obfuscate_jJOHiIqRiYmTkJKPhpWTipM� )."张卡";
        }
        $_obfuscate_kYqNjZWRkI6OhomJjoqHjoY� = "";
        foreach ( $_obfuscate_jJOHiIqRiYmTkJKPhpWTipM� as $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI� )
        {
            $_obfuscate_kYqNjZWRkI6OhomJjoqHjoY� .= "'".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['keys']."',";
        }
        $_obfuscate_kYqNjZWRkI6OhomJjoqHjoY� = substr( $_obfuscate_kYqNjZWRkI6OhomJjoqHjoY�, 0, strlen( $_obfuscate_kYqNjZWRkI6OhomJjoqHjoY� ) - 1 );
        $_obfuscate_k4iLiZOSjJWRlIqLiYaPiok� = " in (".$_obfuscate_kYqNjZWRkI6OhomJjoqHjoY�.")";
        $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "replace into kss_z_key_".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE�." (`managerid`, `keyfix`, `keys`, `keyspassword`, `addtime`, `ordernum`, `cday`, `linknum`, `points`, `keyextattr`, `tag`, `islock`, `isback`, `cztime`, `czusername`) select `managerid`, `keyfix`, `keys`, `keyspassword`, `addtime`, `ordernum`, `cday`, `linknum`, `points`, `keyextattr`, `tag`, `islock`, `isback`, `cztime`, `czusername` from kss_z_key_".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE�."_recycle where `keys`".$_obfuscate_k4iLiZOSjJWRlIqLiYaPiok�, "sync" );
        $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� == $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "delete from kss_z_key_".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE�."_recycle where  `keys`".$_obfuscate_k4iLiZOSjJWRlIqLiYaPiok�, "sync" );
        if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� !== FALSE && $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� !== FALSE )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "ok5,".$_obfuscate_iJKJjIuNk4mIjZKVjYmIhpQ�.",".str_replace( "'", "", $_obfuscate_kYqNjZWRkI6OhomJjoqHjoY� ) );
        }
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4�( ), 1 );
        return 1;
    case "退卡" :
        _obfuscate_kY6LiJGJiIiRiIuRjomOiZA�( );
        if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] < 8 )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "只有作者级才可能需要退卡操作！" );
        }
        $_obfuscate_j5WKlJOMkIyQjoePlYuSjJE� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "keys", "gp", "sql", "" );
        $_obfuscate_j5WKlJOMkIyQjoePlYuSjJE� = explode( ",", $_obfuscate_j5WKlJOMkIyQjoePlYuSjJE� );
        $_obfuscate_iJKJjIuNk4mIjZKVjYmIhpQ� = "";
        if ( count( $_obfuscate_j5WKlJOMkIyQjoePlYuSjJE� ) == 1 )
        {
            $_obfuscate_k4iLiZOSjJWRlIqLiYaPiok� = "='".$_obfuscate_j5WKlJOMkIyQjoePlYuSjJE�[0]."' and A.`isback`=0 ";
        }
        else
        {
            $_obfuscate_k4iLiZOSjJWRlIqLiYaPiok� = " in ('".implode( "','", $_obfuscate_j5WKlJOMkIyQjoePlYuSjJE� )."') and A.`isback`=0 ";
        }
        $_obfuscate_jJOHiIqRiYmTkJKPhpWTipM� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_lZGTiIiKhouKiZGLi5KUkI8�( "select A.`ordernum`, A.`managerid`,A.`keyfix`,A.`keys`,A.`keyspassword`,A.`cday` as cdaya, A.`cztime`,A.`czusername`, A.`ordernum`,B.`username`,B.`cday` as cdayb, B.`starttime`,B.`endtime`,B.`activetimes`,C.`level`,C.`rmb` from (kss_z_key_".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE�." as A left join kss_z_user_".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE�." as B on A.`czusername`=B.`username`) left join kss_tb_manager as C on A.`managerid`=C.`id`  where A.`keys`".$_obfuscate_k4iLiZOSjJWRlIqLiYaPiok� );
        if ( empty( $_obfuscate_jJOHiIqRiYmTkJKPhpWTipM� ) )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "你选择的卡好像都不符合退卡规则或不存在！" );
        }
        if ( 20 < count( $_obfuscate_jJOHiIqRiYmTkJKPhpWTipM� ) )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "每次最多退20张卡号！" );
        }
        $_obfuscate_h46IjY6UkomKi4yRh4iJiZM� = 0;
        $_obfuscate_jYiMkoyVi5GOkY_NiIyKioc� = "";
        $_obfuscate_h4iHi4mJkpGOjpWMjoiSk4c� = array( );
        $_obfuscate_jJCMlYaJk4yKkI2QhpWLho4� = 0;
        $_obfuscate_h4qJk4_TkJWGhomKio2Ui5E� = 0;
        $_obfuscate_h4yViImPipSNiY6MiZWIkZQ� = array( );
        $_obfuscate_ho6VlZOPiZCUjZCLiY_TlJM� = 0;
        $_obfuscate_kYqNjZWRkI6OhomJjoqHjoY� = "";
        foreach ( $_obfuscate_jJOHiIqRiYmTkJKPhpWTipM� as $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI� )
        {
            $_obfuscate_kYqNjZWRkI6OhomJjoqHjoY� .= "'".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['keys']."',";
        }
        $_obfuscate_kYqNjZWRkI6OhomJjoqHjoY� = substr( $_obfuscate_kYqNjZWRkI6OhomJjoqHjoY�, 0, strlen( $_obfuscate_kYqNjZWRkI6OhomJjoqHjoY� ) - 1 );
        $_obfuscate_jY6JkY2LlY2PjIqGiJCJjoY� = array( );
        $_obfuscate_joqPh4qMjIeMkYmPlZWTi5A� = array( );
        $_obfuscate_joqTkpGSiIyKhoqIiJGJi4g� = array( );
        $_obfuscate_lY2NjouTjo2JjoiVjpSKj5E� = array( );
        $_obfuscate_lZOMh4uSkYmRj46MlY_Kh40� = array( );
        $_obfuscate_iJGGlJCSjJGThomTh4mGiok� = 0;
        $_obfuscate_i4iOj4iMjo2Jj5WKk5CVh48� = 0;
        ob_clean( );
        $_obfuscate_kIeRlJCQk5CIjpOOh4uSiI4� = 0;
        foreach ( $_obfuscate_jJOHiIqRiYmTkJKPhpWTipM� as $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI� )
        {
            if ( $_obfuscate_h46IjY6UkomKi4yRh4iJiZM� != 0 && $_obfuscate_h46IjY6UkomKi4yRh4iJiZM� != $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['managerid'] )
            {
                _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "退卡操作无效<br>选择注册卡时请注意，只能同时对某一个代理的卡执行退款操作。<br>你选择了超出一个代理的卡号" );
            }
            $_obfuscate_h46IjY6UkomKi4yRh4iJiZM� = $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['managerid'];
            $_obfuscate_kIeRlJCQk5CIjpOOh4uSiI4� = $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['rmb'];
            if ( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['level'] != 6 )
            {
                _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "只能给代理的卡执行退卡操作" );
            }
            $_obfuscate_jpWSkImSiIeHkY2TlY_JlIs� = $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['keys'].$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['keyspassword'];
            if ( isset( $_obfuscate_h4iHi4mJkpGOjpWMjoiSk4c�[$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['ordernum']] ) )
            {
                $_obfuscate_h4iHi4mJkpGOjpWMjoiSk4c�[$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['ordernum']] = $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['ordernum']( "select `keycount`,`agentamount7`, `agentamount`,`orderstatus` from kss_tb_order where ordernum='".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['ordernum']."'" );
            }
            if ( empty( $_obfuscate_h4iHi4mJkpGOjpWMjoiSk4c�[$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['ordernum']] ) )
            {
                $_obfuscate_jY6JkY2LlY2PjIqGiJCJjoY�[] = array( "username" => $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['czusername'], "ok" => 0, "keys" => $_obfuscate_jpWSkImSiIeHkY2TlY_JlIs�, "cday" => $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['cdaya'] * 1, "price" => "？", "price2" => 0, "price7" => 0, "ordernum" => $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['ordernum'], "isused" => 0 < $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['cztime'] ? "是" : "否", "endtime" => empty( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['endtime'] ) ? "" : $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['endtime'] == 0 ? $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['cdayb'] : round( ( time( ) - $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['endtime'] ) / 86400, 2 ), "intro" => "订单未找到，不能退卡" );
            }
            else
            {
                $_obfuscate_j4qKjIaLi4iKjZKHjJGLjY0� = $_obfuscate_h4iHi4mJkpGOjpWMjoiSk4c�[$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['ordernum']]['agentamount'] / $_obfuscate_h4iHi4mJkpGOjpWMjoiSk4c�[$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['ordernum']]['keycount'];
                $_obfuscate_komOio_SkZCSjoyKiJWJjo8� = $_obfuscate_h4iHi4mJkpGOjpWMjoiSk4c�[$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['ordernum']]['agentamount7'] / $_obfuscate_h4iHi4mJkpGOjpWMjoiSk4c�[$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['ordernum']]['keycount'];
                if ( $_obfuscate_h4iHi4mJkpGOjpWMjoiSk4c�[$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['ordernum']]['orderstatus'] < 8 )
                {
                    $_obfuscate_jY6JkY2LlY2PjIqGiJCJjoY�[] = array( "username" => $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['czusername'], "ok" => 0, "keys" => $_obfuscate_jpWSkImSiIeHkY2TlY_JlIs�, "cday" => $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['cdaya'] * 1, "price" => $_obfuscate_j4qKjIaLi4iKjZKHjJGLjY0�, "price2" => 0, "price7" => 0, "ordernum" => $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['ordernum'], "isused" => 0 < $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['cztime'] ? "是" : "否", "endtime" => empty( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['endtime'] ) ? "" : $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['endtime'] == 0 ? $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['cdayb'] : round( ( time( ) - $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['endtime'] ) / 86400, 2 ), "intro" => "订单未完成状态，不能退卡" );
                }
                else if ( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['cztime'] != 0 )
                {
                    if ( isset( $_obfuscate_joqPh4qMjIeMkYmPlZWTi5A�[$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['username']] ) )
                    {
                        $_obfuscate_joqPh4qMjIeMkYmPlZWTi5A�[$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['username']] = $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['cdayb'];
                        $_obfuscate_joqTkpGSiIyKhoqIiJGJi4g�[$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['username']] = $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['endtime'];
                    }
                    is_null( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['activetimes'] );
                    if ( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['activetimes'] == 0 )
                    {
                        $_obfuscate_jI_MjoiJj4yHh42Ok4_Mjo4� = $_obfuscate_joqPh4qMjIeMkYmPlZWTi5A�[$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['username']];
                        $_obfuscate_joqPh4qMjIeMkYmPlZWTi5A�[$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['username']] = $_obfuscate_joqPh4qMjIeMkYmPlZWTi5A�[$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['username']] - $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['cdaya'];
                        $_obfuscate_joqTkpGSiIyKhoqIiJGJi4g�[$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['username']] = $_obfuscate_joqTkpGSiIyKhoqIiJGJi4g�[$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['username']] - $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['cdaya'] * 86400;
                        $_obfuscate_jJCMlYaJk4yKkI2QhpWLho4� += $_obfuscate_j4qKjIaLi4iKjZKHjJGLjY0�;
                        $_obfuscate_h4qJk4_TkJWGhomKio2Ui5E� += $_obfuscate_komOio_SkZCSjoyKiJWJjo8�;
                        $_obfuscate_lY2NjouTjo2JjoiVjpSKj5E�[] = $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['keys'];
                        $_obfuscate_lZOMh4uSkYmRj46MlY_Kh40�[] = $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['keyfix'].$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['keys'];
                        $_obfuscate_ho6VlZOPiZCUjZCLiY_TlJM� += 1;
                        $_obfuscate_jY6JkY2LlY2PjIqGiJCJjoY�[] = array( "username" => $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['czusername'], "ok" => 1, "keys" => $_obfuscate_jpWSkImSiIeHkY2TlY_JlIs�, "cday" => $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['cdaya'] * 1, "price" => $_obfuscate_j4qKjIaLi4iKjZKHjJGLjY0�, "price2" => $_obfuscate_j4qKjIaLi4iKjZKHjJGLjY0�, "price7" => $_obfuscate_komOio_SkZCSjoyKiJWJjo8�, "ordernum" => $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['ordernum'], "isused" => "是", "endtime" => $_obfuscate_jI_MjoiJj4yHh42Ok4_Mjo4�, "intro" => "帐号从未登录，金额全退" );
                    }
                    else
                    {
                        if ( $_obfuscate_joqTkpGSiIyKhoqIiJGJi4g�[$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['username']] <= time( ) )
                        {
                            $_obfuscate_jY6JkY2LlY2PjIqGiJCJjoY�[] = array( "username" => $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['czusername'], "ok" => 0, "keys" => $_obfuscate_jpWSkImSiIeHkY2TlY_JlIs�, "cday" => $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['cdaya'] * 1, "price" => $_obfuscate_j4qKjIaLi4iKjZKHjJGLjY0�, "price2" => 0, "price7" => 0, "ordernum" => $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['ordernum'], "isused" => "是", "endtime" => 0, "intro" => "用户已过期，不退款" );
                        }
                        else
                        {
                            if ( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['cdaya'] * 86400 < $_obfuscate_joqTkpGSiIyKhoqIiJGJi4g�[$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['username']] - time( ) )
                            {
                                $_obfuscate_jI_MjoiJj4yHh42Ok4_Mjo4� = round( ( $_obfuscate_joqTkpGSiIyKhoqIiJGJi4g�[$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['username']] - time( ) ) / 86400, 2 );
                                $_obfuscate_joqPh4qMjIeMkYmPlZWTi5A�[$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['username']] = $_obfuscate_joqPh4qMjIeMkYmPlZWTi5A�[$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['username']] - $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['cdaya'];
                                $_obfuscate_joqTkpGSiIyKhoqIiJGJi4g�[$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['username']] = $_obfuscate_joqTkpGSiIyKhoqIiJGJi4g�[$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['username']] - $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['cdaya'] * 86400;
                                $_obfuscate_jJCMlYaJk4yKkI2QhpWLho4� += $_obfuscate_j4qKjIaLi4iKjZKHjJGLjY0�;
                                $_obfuscate_h4qJk4_TkJWGhomKio2Ui5E� += $_obfuscate_komOio_SkZCSjoyKiJWJjo8�;
                                $_obfuscate_lY2NjouTjo2JjoiVjpSKj5E�[] = $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['keys'];
                                $_obfuscate_lZOMh4uSkYmRj46MlY_Kh40�[] = $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['keyfix'].$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['keys'];
                                $_obfuscate_ho6VlZOPiZCUjZCLiY_TlJM� += 1;
                                $_obfuscate_jY6JkY2LlY2PjIqGiJCJjoY�[] = array( "username" => $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['czusername'], "ok" => 1, "keys" => $_obfuscate_jpWSkImSiIeHkY2TlY_JlIs�, "cday" => $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['cdaya'] * 1, "price" => $_obfuscate_j4qKjIaLi4iKjZKHjJGLjY0�, "price2" => $_obfuscate_j4qKjIaLi4iKjZKHjJGLjY0�, "price7" => $_obfuscate_komOio_SkZCSjoyKiJWJjo8�, "ordernum" => $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['ordernum'], "isused" => "是", "endtime" => $_obfuscate_jI_MjoiJj4yHh42Ok4_Mjo4�, "intro" => "有效天数足够，全额退款" );
                            }
                            else
                            {
                                $_obfuscate_kpGOi5OIj4_Nj4qQiI_SjpQ� = round( $_obfuscate_j4qKjIaLi4iKjZKHjJGLjY0� * ( $_obfuscate_joqTkpGSiIyKhoqIiJGJi4g�[$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['username']] - time( ) ) / ( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['cdaya'] * 86400 ), 2 );
                                $_obfuscate_iY_TjoaOkZOOhpOVhoqHj5U� = round( $_obfuscate_komOio_SkZCSjoyKiJWJjo8� * ( $_obfuscate_joqTkpGSiIyKhoqIiJGJi4g�[$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['username']] - time( ) ) / ( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['cdaya'] * 86400 ), 2 );
                                $_obfuscate_jI2Pi4_UkI2UjIaPlI2RkI8� = round( ( $_obfuscate_joqTkpGSiIyKhoqIiJGJi4g�[$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['username']] - time( ) ) / 86400, 2 );
                                $_obfuscate_joqPh4qMjIeMkYmPlZWTi5A�[$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['username']] = 0;
                                $_obfuscate_joqTkpGSiIyKhoqIiJGJi4g�[$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['username']] = $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['starttime'];
                                $_obfuscate_jJCMlYaJk4yKkI2QhpWLho4� += $_obfuscate_kpGOi5OIj4_Nj4qQiI_SjpQ�;
                                $_obfuscate_h4qJk4_TkJWGhomKio2Ui5E� += $_obfuscate_iY_TjoaOkZOOhpOVhoqHj5U�;
                                $_obfuscate_iJGGlJCSjJGThomTh4mGiok� = $_obfuscate_iJGGlJCSjJGThomTh4mGiok� + $_obfuscate_j4qKjIaLi4iKjZKHjJGLjY0� - $_obfuscate_kpGOi5OIj4_Nj4qQiI_SjpQ�;
                                $_obfuscate_j5WSiY6Oko6Lj4yMjo2Ti5U� = $_obfuscate_iJGGlJCSjJGThomTh4mGiok� + $_obfuscate_komOio_SkZCSjoyKiJWJjo8� - $_obfuscate_iY_TjoaOkZOOhpOVhoqHj5U�;
                                $_obfuscate_lY2NjouTjo2JjoiVjpSKj5E�[] = $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['keys'];
                                $_obfuscate_lZOMh4uSkYmRj46MlY_Kh40�[] = $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['keyfix'].$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['keys'];
                                $_obfuscate_ho6VlZOPiZCUjZCLiY_TlJM� += 1;
                                $_obfuscate_jY6JkY2LlY2PjIqGiJCJjoY�[] = array( "username" => $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['czusername'], "ok" => 1, "keys" => $_obfuscate_jpWSkImSiIeHkY2TlY_JlIs�, "cday" => $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['cdaya'] * 1, "price" => $_obfuscate_j4qKjIaLi4iKjZKHjJGLjY0�, "price2" => $_obfuscate_kpGOi5OIj4_Nj4qQiI_SjpQ�, "price7" => $_obfuscate_komOio_SkZCSjoyKiJWJjo8�, "ordernum" => $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['ordernum'], "isused" => "是", "endtime" => $_obfuscate_jI2Pi4_UkI2UjIaPlI2RkI8�, "intro" => "有效天数不足，部份退款" );
                            }
                        }
                    }
                }
                else
                {
                    $_obfuscate_jJCMlYaJk4yKkI2QhpWLho4� += $_obfuscate_j4qKjIaLi4iKjZKHjJGLjY0�;
                    $_obfuscate_h4qJk4_TkJWGhomKio2Ui5E� += $_obfuscate_komOio_SkZCSjoyKiJWJjo8�;
                    $_obfuscate_lY2NjouTjo2JjoiVjpSKj5E�[] = $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['keys'];
                    $_obfuscate_lZOMh4uSkYmRj46MlY_Kh40�[] = $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['keyfix'].$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['keys'];
                    $_obfuscate_ho6VlZOPiZCUjZCLiY_TlJM� += 1;
                    $_obfuscate_jY6JkY2LlY2PjIqGiJCJjoY�[] = array( "username" => "", "ok" => 1, "keys" => $_obfuscate_jpWSkImSiIeHkY2TlY_JlIs�, "cday" => $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['cdaya'] * 1, "price" => $_obfuscate_j4qKjIaLi4iKjZKHjJGLjY0�, "price2" => $_obfuscate_j4qKjIaLi4iKjZKHjJGLjY0�, "price7" => $_obfuscate_komOio_SkZCSjoyKiJWJjo8�, "ordernum" => $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['ordernum'], "isused" => "否", "endtime" => "", "intro" => "未充值的卡，全额退款" );
                }
            }
        }
        uasort( &$_obfuscate_jY6JkY2LlY2PjIqGiJCJjoY�, "my_sort" );
        echo "ok6,<div style='width:100%; height:360px; overflow:auto; border:0;'><table class='listtable' border='0' cellspacing='1' cellpadding='0' align='center' width='100%'>";
        echo "<tr class='trhead'><td>共计".$_obfuscate_ho6VlZOPiZCUjZCLiY_TlJM�."张卡</td><td>天数</td><td>已充值</td><td>单价</td><td>退款</td><td>用户名</td><td>剩余天</td><td>备注</td></tr>";
        foreach ( $_obfuscate_jY6JkY2LlY2PjIqGiJCJjoY� as $_obfuscate_jZOPjoiSjZOLiIaJkY2Ri4c� )
        {
            echo "<tr class=trd><td class=keynum>".$_obfuscate_jZOPjoiSjZOLiIaJkY2Ri4c�['keys']."</td><td>".$_obfuscate_jZOPjoiSjZOLiIaJkY2Ri4c�['cday']."</td><td>".$_obfuscate_jZOPjoiSjZOLiIaJkY2Ri4c�['isused']."</td><td>".$_obfuscate_jZOPjoiSjZOLiIaJkY2Ri4c�['price']."</td><td>".$_obfuscate_jZOPjoiSjZOLiIaJkY2Ri4c�['price2']."</td><td>".$_obfuscate_jZOPjoiSjZOLiIaJkY2Ri4c�['username']."</td><td>".$_obfuscate_jZOPjoiSjZOLiIaJkY2Ri4c�['endtime']."</td><td>".$_obfuscate_jZOPjoiSjZOLiIaJkY2Ri4c�['intro']."</td></tr>";
        }
        echo "</table></div>";
        $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']( "update kss_z_key_".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE�." set `isback`=1,`islock`=3 where `keys` in ('".implode( "','", $_obfuscate_lY2NjouTjo2JjoiVjpSKj5E� )."')", "sync" );
        if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� === FALSE )
        {
            echo "<p color=red>将注册卡设置为已退状态时出错，还未退款".$_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4�( )."</p>";
            exit( );
        }
        $_obfuscate_iIyPhoqLjYuJioeIioyJk5A� = "";
        foreach ( $_obfuscate_joqPh4qMjIeMkYmPlZWTi5A� as $_obfuscate_koiIh4mRlJKGlIiGiJCUkI4� => $_obfuscate_lYeSkY6Th5SOlYuHjZGVio8� )
        {
            $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']( "update kss_z_user_".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE�." set `cday`=".$_obfuscate_lYeSkY6Th5SOlYuHjZGVio8�.",`endtime`=".$_obfuscate_joqTkpGSiIyKhoqIiJGJi4g�[$_obfuscate_koiIh4mRlJKGlIiGiJCUkI4�]." where `username`='".$_obfuscate_koiIh4mRlJKGlIiGiJCUkI4�."'", "sync" );
            if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� )
            {
                $_obfuscate_iIyPhoqLjYuJioeIioyJk5A� .= "扣除用户".$_obfuscate_koiIh4mRlJKGlIiGiJCUkI4�."的时间时出错".$_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4�( )."\r\n";
            }
        }
        if ( $_obfuscate_iIyPhoqLjYuJioeIioyJk5A� != "" )
        {
            echo "<textarea style='width:600px;height:20px;color:#f00'>".$_obfuscate_iIyPhoqLjYuJioeIioyJk5A�."</textarea>";
        }
        $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']( "insert into `kss_tb_log_agentrmb` (`pid`,`softid`,`managerid`,`opmanagerid`,`addtime`,`oldrmb`,`changermb`,`optype`,`ordernum`,`intro`) VALUES (".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid'].",".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE�.",".$_obfuscate_h46IjY6UkomKi4yRh4iJiZM�.",".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['id'].",".time( ).",".$_obfuscate_kIeRlJCQk5CIjpOOh4uSiI4�.",".$_obfuscate_jJCMlYaJk4yKkI2QhpWLho4�.",6,'','<span class=ek ekey=".YH2.implode( ",", $_obfuscate_lZOMh4uSkYmRj46MlY_Kh40� ).YH2.">退卡</span>')", "sync" );
        if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� === FALSE )
        {
            $_obfuscate_h4aUkomQiI6JlIaSkomSkok� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4�( );
            $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "REPAIR TABLE `kss_tb_log_agentrmb`", "notsync" );
            $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE� );
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "记录日志失败，操作中断[未加款]。".$_obfuscate_h4aUkomQiI6JlIaSkomSkok� );
        }
        $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "update kss_tb_manager set rmb=rmb+".$_obfuscate_jJCMlYaJk4yKkI2QhpWLho4�.",`xfrmb`=`xfrmb`-".$_obfuscate_jJCMlYaJk4yKkI2QhpWLho4�." where `id`=".$_obfuscate_h46IjY6UkomKi4yRh4iJiZM�, "sync" );
        if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� === FALSE )
        {
            echo "<p color=red>注册卡已退，但退还款项".$_obfuscate_jJCMlYaJk4yKkI2QhpWLho4�."到代理帐号时操作出错".$_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4�( )."</p>";
            exit( );
        }
        $_obfuscate_lIiPjo6LjoqUjYiUjJKOhpA� = 1;
        $_obfuscate_kpSQiI_Qk4mPjYeMk4uHhpA� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "select * from kss_tb_manager where `pid`=".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']." and id=".$_obfuscate_h46IjY6UkomKi4yRh4iJiZM� );
        $_obfuscate_koqGkI6TkpSOhpCQlY2UjJQ� = _obfuscate_iY6RiYaNio6PiIyIiZWJkJQ�( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid'], $_obfuscate_kpSQiI_Qk4mPjYeMk4uHhpA�['pmid'] );
        if ( empty( $_obfuscate_koqGkI6TkpSOhpCQlY2UjJQ� ) )
        {
            $_obfuscate_lIiPjo6LjoqUjYiUjJKOhpA� = 0;
        }
        $_obfuscate_jY6UkZSViY2Hj4aVi5SIjpM� = "";
        if ( $_obfuscate_lIiPjo6LjoqUjYiUjJKOhpA� == 0 )
        {
            $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']( "insert into `kss_tb_log_agentrmb` (`pid`,`softid`,`managerid`,`opmanagerid`,`addtime`,`oldrmb`,`changermb`,`optype`,`ordernum`,`intro`) VALUES (".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid'].",".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE�.",".$_obfuscate_koqGkI6TkpSOhpCQlY2UjJQ�['id'].",".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['id'].",".time( ).",".$_obfuscate_koqGkI6TkpSOhpCQlY2UjJQ�['rmb'].",".$_obfuscate_h4qJk4_TkJWGhomKio2Ui5E�.",6,'','<span class=ek ekey=".YH2.implode( ",", $_obfuscate_lZOMh4uSkYmRj46MlY_Kh40� ).YH2.">退卡</span>')", "sync" );
            if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� === FALSE )
            {
                $_obfuscate_h4aUkomQiI6JlIaSkomSkok� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4�( );
                $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "REPAIR TABLE `kss_tb_log_agentrmb`", "notsync" );
                $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE� );
                _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "记录日志失败，操作中断[未加款]。".$_obfuscate_h4aUkomQiI6JlIaSkomSkok� );
            }
            $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "update kss_tb_manager set rmb=rmb+".$_obfuscate_h4qJk4_TkJWGhomKio2Ui5E�.",`xfrmb`=`xfrmb`-".$_obfuscate_h4qJk4_TkJWGhomKio2Ui5E�." where `id`=".$_obfuscate_koqGkI6TkpSOhpCQlY2UjJQ�['id'], "sync" );
            if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� === FALSE )
            {
                echo "<p color=red>注册卡已退，但退还款项".$_obfuscate_jJCMlYaJk4yKkI2QhpWLho4�."到总代理帐号时操作出错".$_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4�( )."</p>";
                exit( );
            }
            $_obfuscate_jY6UkZSViY2Hj4aVi5SIjpM� = "，退款".$_obfuscate_h4qJk4_TkJWGhomKio2Ui5E�."元给总代，总代损耗".$_obfuscate_i4iOj4iMjo2Jj5WKk5CVh48�."元";
        }
        echo "<p>退卡成功，共退款".$_obfuscate_jJCMlYaJk4yKkI2QhpWLho4�."元给代理，代理损耗".$_obfuscate_iJGGlJCSjJGThomTh4mGiok�."元".$_obfuscate_jY6UkZSViY2Hj4aVi5SIjpM�."</p>";
        exit( );
}
?>
