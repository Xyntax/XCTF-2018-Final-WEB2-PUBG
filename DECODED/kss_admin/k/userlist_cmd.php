<?php
/*********************/
/*                   */
/*  Dezend for PHP5  */
/*         NWS       */
/*      Nulled.WS    */
/*                   */
/*********************/

function _obfuscate_iJWLj5SHi4_NlImIlYeGkYg�( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� = 1 )
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
switch ( $_obfuscate_k4mViI2Nj4mJkIuUj42JiIY� )
{
    case "unline" :
        if ( $_obfuscate_iZOQkZCMkZGGjZCIlZSQi40� == "_recycle" )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "你真聪明，绕到这来了" );
        }
        $_obfuscate_j5WKlJOMkIyQjoePlYuSjJE� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "keys", "gp", "sql", "" );
        $_obfuscate_jImKk4yQkouLiZKUiJCGkIw� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "clientid", "gp", "int", 0 );
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
        $_obfuscate_iZGMi5SQk5SIjZWUj4uHj5Q� = "user";
        if ( $_obfuscate_jImKk4yQkouLiZKUiJCGkIw� != 0 )
        {
            $_obfuscate_iZGMi5SQk5SIjZWUj4uHj5Q� = "client";
            $_obfuscate_k4iLiZOSjJWRlIqLiYaPiok� .= " and clientid=".$_obfuscate_jImKk4yQkouLiZKUiJCGkIw�;
        }
        $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "update kss_z_".$_obfuscate_iZGMi5SQk5SIjZWUj4uHj5Q�."_".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE�." set `isonline`=0 where `username`".$_obfuscate_k4iLiZOSjJWRlIqLiYaPiok�.$_obfuscate_jYaSi46HjY6Jj4qKi5WPlIo�, "sync" );
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "ok" );
        break;
    case "锁定" :
    case "解锁" :
}
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
$_obfuscate_jJOHiIqRiYmTkJKPhpWTipM� = $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level']( "select `username`,`islock` from kss_z_user_".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE�." where `username`".$_obfuscate_k4iLiZOSjJWRlIqLiYaPiok�.$_obfuscate_jYaSi46HjY6Jj4qKi5WPlIo�." and `islock`<".( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] - 4 ) );
if ( empty( $_obfuscate_jJOHiIqRiYmTkJKPhpWTipM� ) )
{
    _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "您没有权限对选择的用户执行锁定或解锁操作！<br>可能是你选择的会员已被高于你级别的管理锁定。" );
}
if ( count( $_obfuscate_jJOHiIqRiYmTkJKPhpWTipM� ) != count( $_obfuscate_j5WKlJOMkIyQjoePlYuSjJE� ) )
{
    $_obfuscate_iJKJjIuNk4mIjZKVjYmIhpQ� = "你提交".$_obfuscate_k4mViI2Nj4mJkIuUj42JiIY�.count( $_obfuscate_j5WKlJOMkIyQjoePlYuSjJE� )."个用户的操作请求，只有".count( $_obfuscate_jJOHiIqRiYmTkJKPhpWTipM� )."条被处理";
}
$_obfuscate_kYqNjZWRkI6OhomJjoqHjoY� = "";
foreach ( $_obfuscate_jJOHiIqRiYmTkJKPhpWTipM� as $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI� )
{
    $_obfuscate_kYqNjZWRkI6OhomJjoqHjoY� .= "'".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['username']."',";
}
$_obfuscate_kYqNjZWRkI6OhomJjoqHjoY� = substr( $_obfuscate_kYqNjZWRkI6OhomJjoqHjoY�, 0, strlen( $_obfuscate_kYqNjZWRkI6OhomJjoqHjoY� ) - 1 );
$_obfuscate_k4iLiZOSjJWRlIqLiYaPiok� = " in (".$_obfuscate_kYqNjZWRkI6OhomJjoqHjoY�.")";
$_obfuscate_k5KIjYeHhoyOkoiKiJSOh5I� = $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] - 5;
$_obfuscate_k5KIjYeHhoyOkoiKiJSOh5I� = 3 < $_obfuscate_k5KIjYeHhoyOkoiKiJSOh5I� ? 3 : $_obfuscate_k5KIjYeHhoyOkoiKiJSOh5I�;
if ( $_obfuscate_k4mViI2Nj4mJkIuUj42JiIY� == "锁定" )
{
    $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "update kss_z_user_".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE�." set `islock`=".$_obfuscate_k5KIjYeHhoyOkoiKiJSOh5I�." where `username`".$_obfuscate_k4iLiZOSjJWRlIqLiYaPiok�, "sync" );
    _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "ok1,".$_obfuscate_iJKJjIuNk4mIjZKVjYmIhpQ�.",".str_replace( "'", "", $_obfuscate_kYqNjZWRkI6OhomJjoqHjoY� ) );
}
else
{
    $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "update kss_z_user_".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE�." set `islock`=0 where `username`".$_obfuscate_k4iLiZOSjJWRlIqLiYaPiok�, "sync" );
    _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "ok0,".$_obfuscate_iJKJjIuNk4mIjZKVjYmIhpQ�.",".str_replace( "'", "", $_obfuscate_kYqNjZWRkI6OhomJjoqHjoY� ) );
    return 1;
}
switch ( $_obfuscate_k4mViI2Nj4mJkIuUj42JiIY� )
{
    case "冻结" :
    case "解冻" :
        if ( $_obfuscate_iZOQkZCMkZGGjZCIlZSQi40� == "_recycle" )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "你真聪明，绕到这来了" );
        }
        if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] < 8 && !_obfuscate_j4aJjo2Hi4eOlJSKk4uHk4k�( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['powerlist'], "22" ) )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "你没有".$_obfuscate_k4mViI2Nj4mJkIuUj42JiIY�."权限" );
        }
        $_obfuscate_j5WKlJOMkIyQjoePlYuSjJE� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "keys", "gp", "sql", "" );
        if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['softstatus'] == 6 || $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['softstatus'] == 5 )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "软件冻结期间，禁止单独对用户进行冻结与解冻操作！" );
        }
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
        $_obfuscate_jJOHiIqRiYmTkJKPhpWTipM� = $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level']( "select `username`,`ispause`,`endtime`,`pausetime`,`starttime` from kss_z_user_".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE�." where `username`".$_obfuscate_k4iLiZOSjJWRlIqLiYaPiok�.$_obfuscate_jYaSi46HjY6Jj4qKi5WPlIo�." and `ispause`<".( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] - 4 ) );
        if ( empty( $_obfuscate_jJOHiIqRiYmTkJKPhpWTipM� ) )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "您没有权限对选择的用户执行冻结或解冻操作！<br>可能是你选择的会员已被高于你级别的管理冻结。" );
        }
        if ( count( $_obfuscate_jJOHiIqRiYmTkJKPhpWTipM� ) != count( $_obfuscate_j5WKlJOMkIyQjoePlYuSjJE� ) )
        {
            $_obfuscate_iJKJjIuNk4mIjZKVjYmIhpQ� = "你提交".$_obfuscate_k4mViI2Nj4mJkIuUj42JiIY�.count( $_obfuscate_j5WKlJOMkIyQjoePlYuSjJE� )."个用户的操作请求，只有".count( $_obfuscate_jJOHiIqRiYmTkJKPhpWTipM� )."条被处理";
        }
        $_obfuscate_kYqNjZWRkI6OhomJjoqHjoY� = "";
        $_obfuscate_hoyOlIqVio2RkIiMlI_VhpQ� = "";
        foreach ( $_obfuscate_jJOHiIqRiYmTkJKPhpWTipM� as $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI� )
        {
            if ( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['endtime'] != PETIME )
            {
                if ( $_obfuscate_k4mViI2Nj4mJkIuUj42JiIY� == "冻结" )
                {
                    if ( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['ispause'] == 0 )
                    {
                        $_obfuscate_kYqNjZWRkI6OhomJjoqHjoY� .= "'".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['username']."',";
                    }
                }
                else
                {
                    if ( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['starttime'] < $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['pausetime'] )
                    {
                        $_obfuscate_kYqNjZWRkI6OhomJjoqHjoY� .= "'".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['username']."',";
                    }
                }
            }
            else
            {
                $_obfuscate_hoyOlIqVio2RkIiMlI_VhpQ� = "公用帐号不允许".$_obfuscate_k4mViI2Nj4mJkIuUj42JiIY�;
            }
        }
        if ( $_obfuscate_kYqNjZWRkI6OhomJjoqHjoY� == "" )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "没有找到能操作的数据。".$_obfuscate_hoyOlIqVio2RkIiMlI_VhpQ� );
        }
        $_obfuscate_kYqNjZWRkI6OhomJjoqHjoY� = substr( $_obfuscate_kYqNjZWRkI6OhomJjoqHjoY�, 0, strlen( $_obfuscate_kYqNjZWRkI6OhomJjoqHjoY� ) - 1 );
        $_obfuscate_k4iLiZOSjJWRlIqLiYaPiok� = " in (".$_obfuscate_kYqNjZWRkI6OhomJjoqHjoY�.")";
        $_obfuscate_k5KIjYeHhoyOkoiKiJSOh5I� = $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] - 5;
        $_obfuscate_k5KIjYeHhoyOkoiKiJSOh5I� = 3 < $_obfuscate_k5KIjYeHhoyOkoiKiJSOh5I� ? 3 : $_obfuscate_k5KIjYeHhoyOkoiKiJSOh5I�;
        if ( $_obfuscate_k4mViI2Nj4mJkIuUj42JiIY� == "冻结" )
        {
            $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5U� = "update kss_z_user_".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE�." set `ispause`=".$_obfuscate_k5KIjYeHhoyOkoiKiJSOh5I�.",`pausetime`='".time( )."' where `username`".$_obfuscate_k4iLiZOSjJWRlIqLiYaPiok�;
            $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5U�, "sync" );
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "ok6,".$_obfuscate_iJKJjIuNk4mIjZKVjYmIhpQ�.",".str_replace( "'", "", $_obfuscate_kYqNjZWRkI6OhomJjoqHjoY� ) );
        }
        else
        {
            $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5U� = "update kss_z_user_".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE�." set `ispause`=0,starttime=starttime+".time( )."-pausetime,endtime=endtime+".time( )."-pausetime,pausetime=0 where `username`".$_obfuscate_k4iLiZOSjJWRlIqLiYaPiok�;
            $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5U�, "sync" );
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "ok7,".$_obfuscate_iJKJjIuNk4mIjZKVjYmIhpQ�.",".str_replace( "'", "", $_obfuscate_kYqNjZWRkI6OhomJjoqHjoY� ) );
            return 1;
        }
    case "解绑" :
        if ( $_obfuscate_iZOQkZCMkZGGjZCIlZSQi40� == "_recycle" )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "你真聪明，绕到这来了" );
        }
        $_obfuscate_j5WKlJOMkIyQjoePlYuSjJE� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "keys", "gp", "sql", "" );
        $_obfuscate_jYaSi46HjY6Jj4qKi5WPlIo� = "";
        if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] < 8 && !_obfuscate_j4aJjo2Hi4eOlJSKk4uHk4k�( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['powerlist'], "17" ) )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "你没有解绑权限" );
        }
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
        $_obfuscate_jJOHiIqRiYmTkJKPhpWTipM� = $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']( "select `username`,`islock` from kss_z_user_".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE�." where `username`".$_obfuscate_k4iLiZOSjJWRlIqLiYaPiok�.$_obfuscate_jYaSi46HjY6Jj4qKi5WPlIo� );
        if ( empty( $_obfuscate_jJOHiIqRiYmTkJKPhpWTipM� ) )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "你选择的用户好像都不存在或是您没有权限对选择的用户执行操作！" );
        }
        if ( count( $_obfuscate_jJOHiIqRiYmTkJKPhpWTipM� ) != count( $_obfuscate_j5WKlJOMkIyQjoePlYuSjJE� ) )
        {
            $_obfuscate_iJKJjIuNk4mIjZKVjYmIhpQ� = "你提交".count( $_obfuscate_j5WKlJOMkIyQjoePlYuSjJE� )."个会员的设置标签操作的请求，只有".count( $_obfuscate_jJOHiIqRiYmTkJKPhpWTipM� )."个被处理";
        }
        $_obfuscate_kYqNjZWRkI6OhomJjoqHjoY� = "";
        foreach ( $_obfuscate_jJOHiIqRiYmTkJKPhpWTipM� as $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI� )
        {
            $_obfuscate_kYqNjZWRkI6OhomJjoqHjoY� .= "'".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['username']."',";
        }
        $_obfuscate_kYqNjZWRkI6OhomJjoqHjoY� = substr( $_obfuscate_kYqNjZWRkI6OhomJjoqHjoY�, 0, strlen( $_obfuscate_kYqNjZWRkI6OhomJjoqHjoY� ) - 1 );
        $_obfuscate_k4iLiZOSjJWRlIqLiYaPiok� = " in (".$_obfuscate_kYqNjZWRkI6OhomJjoqHjoY�.")";
        $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "update kss_z_user_".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE�." set `pccode`='' where `username`".$_obfuscate_k4iLiZOSjJWRlIqLiYaPiok�, "sync" );
        if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� !== FALSE )
        {
            $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']( "update kss_z_client_".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE�." set id=1 where id=0", "notsync" );
            if ( $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_lI6Gio6PjomOj4mRjoaUjoY�( ) == 1146 )
            {
                _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "ok9,".$_obfuscate_iJKJjIuNk4mIjZKVjYmIhpQ�.",".str_replace( "'", "", $_obfuscate_kYqNjZWRkI6OhomJjoqHjoY� ) );
            }
            else
            {
                $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "update kss_z_client_".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE�." set `pccode`='' where `username`".$_obfuscate_k4iLiZOSjJWRlIqLiYaPiok�, "sync" );
                if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� !== FALSE )
                {
                    _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "ok9,".$_obfuscate_iJKJjIuNk4mIjZKVjYmIhpQ�.",".str_replace( "'", "", $_obfuscate_kYqNjZWRkI6OhomJjoqHjoY� ) );
                }
            }
        }
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4�( ), 1 );
        return 1;
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
        $_obfuscate_jJOHiIqRiYmTkJKPhpWTipM� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_lZGTiIiKhouKiZGLi5KUkI8�( "select `username`,`islock`,`endtime` from kss_z_user_".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE�." where `username`".$_obfuscate_k4iLiZOSjJWRlIqLiYaPiok� );
        if ( empty( $_obfuscate_jJOHiIqRiYmTkJKPhpWTipM� ) )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "你选择的用户好像都不存在！" );
        }
        if ( count( $_obfuscate_jJOHiIqRiYmTkJKPhpWTipM� ) != count( $_obfuscate_j5WKlJOMkIyQjoePlYuSjJE� ) )
        {
            $_obfuscate_iJKJjIuNk4mIjZKVjYmIhpQ� = "你提交".$_obfuscate_k4mViI2Nj4mJkIuUj42JiIY�.count( $_obfuscate_j5WKlJOMkIyQjoePlYuSjJE� )."个用户的操作请求，只找到".count( $_obfuscate_jJOHiIqRiYmTkJKPhpWTipM� )."个用户";
        }
        $_obfuscate_kYqNjZWRkI6OhomJjoqHjoY� = "";
        foreach ( $_obfuscate_jJOHiIqRiYmTkJKPhpWTipM� as $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI� )
        {
            $_obfuscate_kYqNjZWRkI6OhomJjoqHjoY� .= "'".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['username']."',";
        }
        $_obfuscate_kYqNjZWRkI6OhomJjoqHjoY� = substr( $_obfuscate_kYqNjZWRkI6OhomJjoqHjoY�, 0, strlen( $_obfuscate_kYqNjZWRkI6OhomJjoqHjoY� ) - 1 );
        $_obfuscate_k4iLiZOSjJWRlIqLiYaPiok� = " in (".$_obfuscate_kYqNjZWRkI6OhomJjoqHjoY�.")";
        $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "replace into kss_z_user_".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE�."_recycle (`istempuser`,`managerid`,`username`,`password`,`password2`,`cday`,`linknum`,`points`,`keyextattr`,`islock`,`tag`,`bdinfo`,`linecode`,`pccode`,`addtime`,`starttime`,`endtime`,`lasttime`,`isonline`,`lastip`,`activetimes`,`unlocktimes`,`unlockday`,`cztimes`,`isusetestkey`,`parentuser`,`intro`,`updata`,`deltime`,`delmid`) select `istempuser`,`managerid`,`username`,`password`,`password2`,`cday`,`linknum`,`points`,`keyextattr`,`islock`,`tag`,`bdinfo`,`linecode`,`pccode`,`addtime`,`starttime`,`endtime`,`lasttime`,`isonline`,`lastip`,`activetimes`,`unlocktimes`,`unlockday`,`cztimes`,`isusetestkey`,`parentuser`,`intro`,`updata`,".time( ).",".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['id']." from kss_z_user_".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE�." where `username`".$_obfuscate_k4iLiZOSjJWRlIqLiYaPiok�, "sync" );
        $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� == $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "delete from kss_z_user_".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE�." where  `username`".$_obfuscate_k4iLiZOSjJWRlIqLiYaPiok�, "sync" );
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
        $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']( "update kss_z_user_".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE�.$_obfuscate_iZOQkZCMkZGGjZCIlZSQi40�." set `tag`='".$_obfuscate_lYqOkIyVi5WGhoqLhouThoo�."' where `username`='".$_obfuscate_j5WKlJOMkIyQjoePlYuSjJE�."'".$_obfuscate_jYaSi46HjY6Jj4qKi5WPlIo�, "sync" );
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
$_obfuscate_jJOHiIqRiYmTkJKPhpWTipM� = $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']( "select `username`,`islock` from kss_z_user_".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE�." where `username`".$_obfuscate_k4iLiZOSjJWRlIqLiYaPiok�.$_obfuscate_jYaSi46HjY6Jj4qKi5WPlIo� );
if ( empty( $_obfuscate_jJOHiIqRiYmTkJKPhpWTipM� ) )
{
    _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "你选择的卡好像都不存在或是您没有权限对选择的注册卡执行操作！" );
}
if ( count( $_obfuscate_jJOHiIqRiYmTkJKPhpWTipM� ) != count( $_obfuscate_j5WKlJOMkIyQjoePlYuSjJE� ) )
{
    $_obfuscate_iJKJjIuNk4mIjZKVjYmIhpQ� = "你提交".count( $_obfuscate_j5WKlJOMkIyQjoePlYuSjJE� )."个会员的设置标签操作的请求，只有".count( $_obfuscate_jJOHiIqRiYmTkJKPhpWTipM� )."个被处理";
}
$_obfuscate_kYqNjZWRkI6OhomJjoqHjoY� = "";
foreach ( $_obfuscate_jJOHiIqRiYmTkJKPhpWTipM� as $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI� )
{
    $_obfuscate_kYqNjZWRkI6OhomJjoqHjoY� .= "'".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['username']."',";
}
$_obfuscate_kYqNjZWRkI6OhomJjoqHjoY� = substr( $_obfuscate_kYqNjZWRkI6OhomJjoqHjoY�, 0, strlen( $_obfuscate_kYqNjZWRkI6OhomJjoqHjoY� ) - 1 );
$_obfuscate_k4iLiZOSjJWRlIqLiYaPiok� = " in (".$_obfuscate_kYqNjZWRkI6OhomJjoqHjoY�.")";
$_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "update kss_z_user_".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE�." set `tag`='".$_obfuscate_ipCVkZKKi4eSjIuTlZSVho8�."' where `username`".$_obfuscate_k4iLiZOSjJWRlIqLiYaPiok�, "sync" );
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
        $_obfuscate_jJOHiIqRiYmTkJKPhpWTipM� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_lZGTiIiKhouKiZGLi5KUkI8�( "select `username`,`islock` from kss_z_user_".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE�."_recycle where `username`".$_obfuscate_k4iLiZOSjJWRlIqLiYaPiok� );
        if ( empty( $_obfuscate_jJOHiIqRiYmTkJKPhpWTipM� ) )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "你选择的会员好像都不存在！" );
        }
        if ( count( $_obfuscate_jJOHiIqRiYmTkJKPhpWTipM� ) != count( $_obfuscate_j5WKlJOMkIyQjoePlYuSjJE� ) )
        {
            $_obfuscate_iJKJjIuNk4mIjZKVjYmIhpQ� = "你提交".$_obfuscate_k4mViI2Nj4mJkIuUj42JiIY�.count( $_obfuscate_j5WKlJOMkIyQjoePlYuSjJE� )."个会员的操作请求，只找到".count( $_obfuscate_jJOHiIqRiYmTkJKPhpWTipM� )."个会员";
        }
        $_obfuscate_kYqNjZWRkI6OhomJjoqHjoY� = "";
        foreach ( $_obfuscate_jJOHiIqRiYmTkJKPhpWTipM� as $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI� )
        {
            $_obfuscate_kYqNjZWRkI6OhomJjoqHjoY� .= "'".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['username']."',";
        }
        $_obfuscate_kYqNjZWRkI6OhomJjoqHjoY� = substr( $_obfuscate_kYqNjZWRkI6OhomJjoqHjoY�, 0, strlen( $_obfuscate_kYqNjZWRkI6OhomJjoqHjoY� ) - 1 );
        $_obfuscate_k4iLiZOSjJWRlIqLiYaPiok� = " in (".$_obfuscate_kYqNjZWRkI6OhomJjoqHjoY�.")";
        $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "replace into kss_z_user_".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE�." (`managerid`,`username`,`password`,`password2`,`cday`,`linknum`,`points`,`keyextattr`,`islock`,`tag`,`bdinfo`,`linecode`,`pccode`,`addtime`,`starttime`,`endtime`,`lasttime`,`isonline`,`lastip`,`activetimes`,`unlocktimes`,`unlockday`,`cztimes`,`isusetestkey`,`parentuser`,`intro`,`updata`) select `managerid`,`username`,`password`,`password2`,`cday`,`linknum`,`points`,`keyextattr`,`islock`,`tag`,`bdinfo`,`linecode`,`pccode`,`addtime`,`starttime`,`endtime`,`lasttime`,`isonline`,`lastip`,`activetimes`,`unlocktimes`,`unlockday`,`cztimes`,`isusetestkey`,`parentuser`,`intro`,`updata` from kss_z_user_".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE�."_recycle where `username`".$_obfuscate_k4iLiZOSjJWRlIqLiYaPiok�, "sync" );
        $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� == $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "delete from kss_z_user_".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE�."_recycle where  `username`".$_obfuscate_k4iLiZOSjJWRlIqLiYaPiok�, "sync" );
        if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� !== FALSE && $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� !== FALSE )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "ok5,".$_obfuscate_iJKJjIuNk4mIjZKVjYmIhpQ�.",".str_replace( "'", "", $_obfuscate_kYqNjZWRkI6OhomJjoqHjoY� ) );
        }
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4�( ), 1 );
}
?>
