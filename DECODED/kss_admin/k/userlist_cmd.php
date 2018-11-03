<?php
/*********************/
/*                   */
/*  Dezend for PHP5  */
/*         NWS       */
/*      Nulled.WS    */
/*                   */
/*********************/

function _obfuscate_iJWLj5SHi4_NlImIlYeGkYgÿ( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ = 1 )
{
    $_obfuscate_iJGPjJWLj4uLkIqVjYiHh48ÿ = unpack( "C*", "ViewZendSourceCodeIsInvalid!" );
    do
    {
        $_obfuscate_iY2Oh5OGlIqQhpCJi5CMkogÿ = ( $_obfuscate_lZKViImJjo6UhouJj4aVi4Yÿ[$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ] << 4 ) + ( $_obfuscate_lZKViImJjo6UhouJj4aVi4Yÿ[$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ + 1] >> 4 );
        $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ += 2;
    } while ( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ < 28 );
}

if ( !defined( "YH2" ) )
{
    exit( "Access denied to view this page!" );
}
switch ( $_obfuscate_k4mViI2Nj4mJkIuUj42JiIYÿ )
{
    case "unline" :
        if ( $_obfuscate_iZOQkZCMkZGGjZCIlZSQi40ÿ == "_recycle" )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "ä½ çœŸèªæ˜ï¼Œç»•åˆ°è¿™æ¥äº†" );
        }
        $_obfuscate_j5WKlJOMkIyQjoePlYuSjJEÿ = _obfuscate_i4mIkpOGkomKiouRhoaMh5Iÿ( "keys", "gp", "sql", "" );
        $_obfuscate_jImKk4yQkouLiZKUiJCGkIwÿ = _obfuscate_i4mIkpOGkomKiouRhoaMh5Iÿ( "clientid", "gp", "int", 0 );
        $_obfuscate_jYaSi46HjY6Jj4qKi5WPlIoÿ = "";
        if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['level'] == 6 )
        {
            $_obfuscate_jYaSi46HjY6Jj4qKi5WPlIoÿ = " and `managerid`=".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['id'];
        }
        $_obfuscate_j5WKlJOMkIyQjoePlYuSjJEÿ = explode( ",", $_obfuscate_j5WKlJOMkIyQjoePlYuSjJEÿ );
        $_obfuscate_iJKJjIuNk4mIjZKVjYmIhpQÿ = "";
        if ( count( $_obfuscate_j5WKlJOMkIyQjoePlYuSjJEÿ ) == 1 )
        {
            $_obfuscate_k4iLiZOSjJWRlIqLiYaPiokÿ = "='".$_obfuscate_j5WKlJOMkIyQjoePlYuSjJEÿ[0]."'";
        }
        else
        {
            $_obfuscate_k4iLiZOSjJWRlIqLiYaPiokÿ = " in ('".implode( "','", $_obfuscate_j5WKlJOMkIyQjoePlYuSjJEÿ )."')";
        }
        $_obfuscate_iZGMi5SQk5SIjZWUj4uHj5Qÿ = "user";
        if ( $_obfuscate_jImKk4yQkouLiZKUiJCGkIwÿ != 0 )
        {
            $_obfuscate_iZGMi5SQk5SIjZWUj4uHj5Qÿ = "client";
            $_obfuscate_k4iLiZOSjJWRlIqLiYaPiokÿ .= " and clientid=".$_obfuscate_jImKk4yQkouLiZKUiJCGkIwÿ;
        }
        $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "update kss_z_".$_obfuscate_iZGMi5SQk5SIjZWUj4uHj5Qÿ."_".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid']."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpEÿ." set `isonline`=0 where `username`".$_obfuscate_k4iLiZOSjJWRlIqLiYaPiokÿ.$_obfuscate_jYaSi46HjY6Jj4qKi5WPlIoÿ, "sync" );
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "ok" );
        break;
    case "é”å®š" :
    case "è§£é”" :
}
if ( $_obfuscate_iZOQkZCMkZGGjZCIlZSQi40ÿ == "_recycle" )
{
    _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "ä½ çœŸèªæ˜ï¼Œç»•åˆ°è¿™æ¥äº†" );
}
$_obfuscate_j5WKlJOMkIyQjoePlYuSjJEÿ = _obfuscate_i4mIkpOGkomKiouRhoaMh5Iÿ( "keys", "gp", "sql", "" );
$_obfuscate_jYaSi46HjY6Jj4qKi5WPlIoÿ = "";
if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['level'] == 6 )
{
    $_obfuscate_jYaSi46HjY6Jj4qKi5WPlIoÿ = " and `managerid`=".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['id'];
}
$_obfuscate_j5WKlJOMkIyQjoePlYuSjJEÿ = explode( ",", $_obfuscate_j5WKlJOMkIyQjoePlYuSjJEÿ );
$_obfuscate_iJKJjIuNk4mIjZKVjYmIhpQÿ = "";
if ( count( $_obfuscate_j5WKlJOMkIyQjoePlYuSjJEÿ ) == 1 )
{
    $_obfuscate_k4iLiZOSjJWRlIqLiYaPiokÿ = "='".$_obfuscate_j5WKlJOMkIyQjoePlYuSjJEÿ[0]."'";
}
else
{
    $_obfuscate_k4iLiZOSjJWRlIqLiYaPiokÿ = " in ('".implode( "','", $_obfuscate_j5WKlJOMkIyQjoePlYuSjJEÿ )."')";
}
$_obfuscate_jJOHiIqRiYmTkJKPhpWTipMÿ = $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['level']( "select `username`,`islock` from kss_z_user_".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid']."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpEÿ." where `username`".$_obfuscate_k4iLiZOSjJWRlIqLiYaPiokÿ.$_obfuscate_jYaSi46HjY6Jj4qKi5WPlIoÿ." and `islock`<".( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['level'] - 4 ) );
if ( empty( $_obfuscate_jJOHiIqRiYmTkJKPhpWTipMÿ ) )
{
    _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "æ‚¨æ²¡æœ‰æƒé™å¯¹é€‰æ‹©çš„ç”¨æˆ·æ‰§è¡Œé”å®šæˆ–è§£é”æ“ä½œï¼<br>å¯èƒ½æ˜¯ä½ é€‰æ‹©çš„ä¼šå‘˜å·²è¢«é«˜äºä½ çº§åˆ«çš„ç®¡ç†é”å®šã€‚" );
}
if ( count( $_obfuscate_jJOHiIqRiYmTkJKPhpWTipMÿ ) != count( $_obfuscate_j5WKlJOMkIyQjoePlYuSjJEÿ ) )
{
    $_obfuscate_iJKJjIuNk4mIjZKVjYmIhpQÿ = "ä½ æäº¤".$_obfuscate_k4mViI2Nj4mJkIuUj42JiIYÿ.count( $_obfuscate_j5WKlJOMkIyQjoePlYuSjJEÿ )."ä¸ªç”¨æˆ·çš„æ“ä½œè¯·æ±‚ï¼Œåªæœ‰".count( $_obfuscate_jJOHiIqRiYmTkJKPhpWTipMÿ )."æ¡è¢«å¤„ç†";
}
$_obfuscate_kYqNjZWRkI6OhomJjoqHjoYÿ = "";
foreach ( $_obfuscate_jJOHiIqRiYmTkJKPhpWTipMÿ as $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ )
{
    $_obfuscate_kYqNjZWRkI6OhomJjoqHjoYÿ .= "'".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['username']."',";
}
$_obfuscate_kYqNjZWRkI6OhomJjoqHjoYÿ = substr( $_obfuscate_kYqNjZWRkI6OhomJjoqHjoYÿ, 0, strlen( $_obfuscate_kYqNjZWRkI6OhomJjoqHjoYÿ ) - 1 );
$_obfuscate_k4iLiZOSjJWRlIqLiYaPiokÿ = " in (".$_obfuscate_kYqNjZWRkI6OhomJjoqHjoYÿ.")";
$_obfuscate_k5KIjYeHhoyOkoiKiJSOh5Iÿ = $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['level'] - 5;
$_obfuscate_k5KIjYeHhoyOkoiKiJSOh5Iÿ = 3 < $_obfuscate_k5KIjYeHhoyOkoiKiJSOh5Iÿ ? 3 : $_obfuscate_k5KIjYeHhoyOkoiKiJSOh5Iÿ;
if ( $_obfuscate_k4mViI2Nj4mJkIuUj42JiIYÿ == "é”å®š" )
{
    $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "update kss_z_user_".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid']."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpEÿ." set `islock`=".$_obfuscate_k5KIjYeHhoyOkoiKiJSOh5Iÿ." where `username`".$_obfuscate_k4iLiZOSjJWRlIqLiYaPiokÿ, "sync" );
    _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "ok1,".$_obfuscate_iJKJjIuNk4mIjZKVjYmIhpQÿ.",".str_replace( "'", "", $_obfuscate_kYqNjZWRkI6OhomJjoqHjoYÿ ) );
}
else
{
    $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "update kss_z_user_".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid']."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpEÿ." set `islock`=0 where `username`".$_obfuscate_k4iLiZOSjJWRlIqLiYaPiokÿ, "sync" );
    _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "ok0,".$_obfuscate_iJKJjIuNk4mIjZKVjYmIhpQÿ.",".str_replace( "'", "", $_obfuscate_kYqNjZWRkI6OhomJjoqHjoYÿ ) );
    return 1;
}
switch ( $_obfuscate_k4mViI2Nj4mJkIuUj42JiIYÿ )
{
    case "å†»ç»“" :
    case "è§£å†»" :
        if ( $_obfuscate_iZOQkZCMkZGGjZCIlZSQi40ÿ == "_recycle" )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "ä½ çœŸèªæ˜ï¼Œç»•åˆ°è¿™æ¥äº†" );
        }
        if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['level'] < 8 && !_obfuscate_j4aJjo2Hi4eOlJSKk4uHk4kÿ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['powerlist'], "22" ) )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "ä½ æ²¡æœ‰".$_obfuscate_k4mViI2Nj4mJkIuUj42JiIYÿ."æƒé™" );
        }
        $_obfuscate_j5WKlJOMkIyQjoePlYuSjJEÿ = _obfuscate_i4mIkpOGkomKiouRhoaMh5Iÿ( "keys", "gp", "sql", "" );
        if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['softstatus'] == 6 || $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['softstatus'] == 5 )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "è½¯ä»¶å†»ç»“æœŸé—´ï¼Œç¦æ­¢å•ç‹¬å¯¹ç”¨æˆ·è¿›è¡Œå†»ç»“ä¸è§£å†»æ“ä½œï¼" );
        }
        $_obfuscate_jYaSi46HjY6Jj4qKi5WPlIoÿ = "";
        if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['level'] == 6 )
        {
            $_obfuscate_jYaSi46HjY6Jj4qKi5WPlIoÿ = " and `managerid`=".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['id'];
        }
        $_obfuscate_j5WKlJOMkIyQjoePlYuSjJEÿ = explode( ",", $_obfuscate_j5WKlJOMkIyQjoePlYuSjJEÿ );
        $_obfuscate_iJKJjIuNk4mIjZKVjYmIhpQÿ = "";
        if ( count( $_obfuscate_j5WKlJOMkIyQjoePlYuSjJEÿ ) == 1 )
        {
            $_obfuscate_k4iLiZOSjJWRlIqLiYaPiokÿ = "='".$_obfuscate_j5WKlJOMkIyQjoePlYuSjJEÿ[0]."'";
        }
        else
        {
            $_obfuscate_k4iLiZOSjJWRlIqLiYaPiokÿ = " in ('".implode( "','", $_obfuscate_j5WKlJOMkIyQjoePlYuSjJEÿ )."')";
        }
        $_obfuscate_jJOHiIqRiYmTkJKPhpWTipMÿ = $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['level']( "select `username`,`ispause`,`endtime`,`pausetime`,`starttime` from kss_z_user_".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid']."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpEÿ." where `username`".$_obfuscate_k4iLiZOSjJWRlIqLiYaPiokÿ.$_obfuscate_jYaSi46HjY6Jj4qKi5WPlIoÿ." and `ispause`<".( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['level'] - 4 ) );
        if ( empty( $_obfuscate_jJOHiIqRiYmTkJKPhpWTipMÿ ) )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "æ‚¨æ²¡æœ‰æƒé™å¯¹é€‰æ‹©çš„ç”¨æˆ·æ‰§è¡Œå†»ç»“æˆ–è§£å†»æ“ä½œï¼<br>å¯èƒ½æ˜¯ä½ é€‰æ‹©çš„ä¼šå‘˜å·²è¢«é«˜äºä½ çº§åˆ«çš„ç®¡ç†å†»ç»“ã€‚" );
        }
        if ( count( $_obfuscate_jJOHiIqRiYmTkJKPhpWTipMÿ ) != count( $_obfuscate_j5WKlJOMkIyQjoePlYuSjJEÿ ) )
        {
            $_obfuscate_iJKJjIuNk4mIjZKVjYmIhpQÿ = "ä½ æäº¤".$_obfuscate_k4mViI2Nj4mJkIuUj42JiIYÿ.count( $_obfuscate_j5WKlJOMkIyQjoePlYuSjJEÿ )."ä¸ªç”¨æˆ·çš„æ“ä½œè¯·æ±‚ï¼Œåªæœ‰".count( $_obfuscate_jJOHiIqRiYmTkJKPhpWTipMÿ )."æ¡è¢«å¤„ç†";
        }
        $_obfuscate_kYqNjZWRkI6OhomJjoqHjoYÿ = "";
        $_obfuscate_hoyOlIqVio2RkIiMlI_VhpQÿ = "";
        foreach ( $_obfuscate_jJOHiIqRiYmTkJKPhpWTipMÿ as $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ )
        {
            if ( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['endtime'] != PETIME )
            {
                if ( $_obfuscate_k4mViI2Nj4mJkIuUj42JiIYÿ == "å†»ç»“" )
                {
                    if ( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['ispause'] == 0 )
                    {
                        $_obfuscate_kYqNjZWRkI6OhomJjoqHjoYÿ .= "'".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['username']."',";
                    }
                }
                else
                {
                    if ( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['starttime'] < $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['pausetime'] )
                    {
                        $_obfuscate_kYqNjZWRkI6OhomJjoqHjoYÿ .= "'".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['username']."',";
                    }
                }
            }
            else
            {
                $_obfuscate_hoyOlIqVio2RkIiMlI_VhpQÿ = "å…¬ç”¨å¸å·ä¸å…è®¸".$_obfuscate_k4mViI2Nj4mJkIuUj42JiIYÿ;
            }
        }
        if ( $_obfuscate_kYqNjZWRkI6OhomJjoqHjoYÿ == "" )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "æ²¡æœ‰æ‰¾åˆ°èƒ½æ“ä½œçš„æ•°æ®ã€‚".$_obfuscate_hoyOlIqVio2RkIiMlI_VhpQÿ );
        }
        $_obfuscate_kYqNjZWRkI6OhomJjoqHjoYÿ = substr( $_obfuscate_kYqNjZWRkI6OhomJjoqHjoYÿ, 0, strlen( $_obfuscate_kYqNjZWRkI6OhomJjoqHjoYÿ ) - 1 );
        $_obfuscate_k4iLiZOSjJWRlIqLiYaPiokÿ = " in (".$_obfuscate_kYqNjZWRkI6OhomJjoqHjoYÿ.")";
        $_obfuscate_k5KIjYeHhoyOkoiKiJSOh5Iÿ = $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['level'] - 5;
        $_obfuscate_k5KIjYeHhoyOkoiKiJSOh5Iÿ = 3 < $_obfuscate_k5KIjYeHhoyOkoiKiJSOh5Iÿ ? 3 : $_obfuscate_k5KIjYeHhoyOkoiKiJSOh5Iÿ;
        if ( $_obfuscate_k4mViI2Nj4mJkIuUj42JiIYÿ == "å†»ç»“" )
        {
            $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5Uÿ = "update kss_z_user_".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid']."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpEÿ." set `ispause`=".$_obfuscate_k5KIjYeHhoyOkoiKiJSOh5Iÿ.",`pausetime`='".time( )."' where `username`".$_obfuscate_k4iLiZOSjJWRlIqLiYaPiokÿ;
            $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5Uÿ, "sync" );
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "ok6,".$_obfuscate_iJKJjIuNk4mIjZKVjYmIhpQÿ.",".str_replace( "'", "", $_obfuscate_kYqNjZWRkI6OhomJjoqHjoYÿ ) );
        }
        else
        {
            $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5Uÿ = "update kss_z_user_".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid']."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpEÿ." set `ispause`=0,starttime=starttime+".time( )."-pausetime,endtime=endtime+".time( )."-pausetime,pausetime=0 where `username`".$_obfuscate_k4iLiZOSjJWRlIqLiYaPiokÿ;
            $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5Uÿ, "sync" );
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "ok7,".$_obfuscate_iJKJjIuNk4mIjZKVjYmIhpQÿ.",".str_replace( "'", "", $_obfuscate_kYqNjZWRkI6OhomJjoqHjoYÿ ) );
            return 1;
        }
    case "è§£ç»‘" :
        if ( $_obfuscate_iZOQkZCMkZGGjZCIlZSQi40ÿ == "_recycle" )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "ä½ çœŸèªæ˜ï¼Œç»•åˆ°è¿™æ¥äº†" );
        }
        $_obfuscate_j5WKlJOMkIyQjoePlYuSjJEÿ = _obfuscate_i4mIkpOGkomKiouRhoaMh5Iÿ( "keys", "gp", "sql", "" );
        $_obfuscate_jYaSi46HjY6Jj4qKi5WPlIoÿ = "";
        if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['level'] < 8 && !_obfuscate_j4aJjo2Hi4eOlJSKk4uHk4kÿ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['powerlist'], "17" ) )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "ä½ æ²¡æœ‰è§£ç»‘æƒé™" );
        }
        if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['level'] == 6 )
        {
            $_obfuscate_jYaSi46HjY6Jj4qKi5WPlIoÿ = " and `managerid`=".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['id'];
        }
        $_obfuscate_j5WKlJOMkIyQjoePlYuSjJEÿ = explode( ",", $_obfuscate_j5WKlJOMkIyQjoePlYuSjJEÿ );
        $_obfuscate_iJKJjIuNk4mIjZKVjYmIhpQÿ = "";
        if ( count( $_obfuscate_j5WKlJOMkIyQjoePlYuSjJEÿ ) == 1 )
        {
            $_obfuscate_k4iLiZOSjJWRlIqLiYaPiokÿ = "='".$_obfuscate_j5WKlJOMkIyQjoePlYuSjJEÿ[0]."'";
        }
        else
        {
            $_obfuscate_k4iLiZOSjJWRlIqLiYaPiokÿ = " in ('".implode( "','", $_obfuscate_j5WKlJOMkIyQjoePlYuSjJEÿ )."')";
        }
        $_obfuscate_jJOHiIqRiYmTkJKPhpWTipMÿ = $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid']( "select `username`,`islock` from kss_z_user_".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid']."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpEÿ." where `username`".$_obfuscate_k4iLiZOSjJWRlIqLiYaPiokÿ.$_obfuscate_jYaSi46HjY6Jj4qKi5WPlIoÿ );
        if ( empty( $_obfuscate_jJOHiIqRiYmTkJKPhpWTipMÿ ) )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "ä½ é€‰æ‹©çš„ç”¨æˆ·å¥½åƒéƒ½ä¸å­˜åœ¨æˆ–æ˜¯æ‚¨æ²¡æœ‰æƒé™å¯¹é€‰æ‹©çš„ç”¨æˆ·æ‰§è¡Œæ“ä½œï¼" );
        }
        if ( count( $_obfuscate_jJOHiIqRiYmTkJKPhpWTipMÿ ) != count( $_obfuscate_j5WKlJOMkIyQjoePlYuSjJEÿ ) )
        {
            $_obfuscate_iJKJjIuNk4mIjZKVjYmIhpQÿ = "ä½ æäº¤".count( $_obfuscate_j5WKlJOMkIyQjoePlYuSjJEÿ )."ä¸ªä¼šå‘˜çš„è®¾ç½®æ ‡ç­¾æ“ä½œçš„è¯·æ±‚ï¼Œåªæœ‰".count( $_obfuscate_jJOHiIqRiYmTkJKPhpWTipMÿ )."ä¸ªè¢«å¤„ç†";
        }
        $_obfuscate_kYqNjZWRkI6OhomJjoqHjoYÿ = "";
        foreach ( $_obfuscate_jJOHiIqRiYmTkJKPhpWTipMÿ as $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ )
        {
            $_obfuscate_kYqNjZWRkI6OhomJjoqHjoYÿ .= "'".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['username']."',";
        }
        $_obfuscate_kYqNjZWRkI6OhomJjoqHjoYÿ = substr( $_obfuscate_kYqNjZWRkI6OhomJjoqHjoYÿ, 0, strlen( $_obfuscate_kYqNjZWRkI6OhomJjoqHjoYÿ ) - 1 );
        $_obfuscate_k4iLiZOSjJWRlIqLiYaPiokÿ = " in (".$_obfuscate_kYqNjZWRkI6OhomJjoqHjoYÿ.")";
        $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "update kss_z_user_".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid']."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpEÿ." set `pccode`='' where `username`".$_obfuscate_k4iLiZOSjJWRlIqLiYaPiokÿ, "sync" );
        if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ !== FALSE )
        {
            $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ = $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid']( "update kss_z_client_".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid']."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpEÿ." set id=1 where id=0", "notsync" );
            if ( $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_lI6Gio6PjomOj4mRjoaUjoYÿ( ) == 1146 )
            {
                _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "ok9,".$_obfuscate_iJKJjIuNk4mIjZKVjYmIhpQÿ.",".str_replace( "'", "", $_obfuscate_kYqNjZWRkI6OhomJjoqHjoYÿ ) );
            }
            else
            {
                $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "update kss_z_client_".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid']."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpEÿ." set `pccode`='' where `username`".$_obfuscate_k4iLiZOSjJWRlIqLiYaPiokÿ, "sync" );
                if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ !== FALSE )
                {
                    _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "ok9,".$_obfuscate_iJKJjIuNk4mIjZKVjYmIhpQÿ.",".str_replace( "'", "", $_obfuscate_kYqNjZWRkI6OhomJjoqHjoYÿ ) );
                }
            }
        }
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4ÿ( ), 1 );
        return 1;
    case "åˆ é™¤" :
        _obfuscate_kY6LiJGJiIiRiIuRjomOiZAÿ( );
        if ( $_obfuscate_iZOQkZCMkZGGjZCIlZSQi40ÿ == "_recycle" )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "ä½ çœŸèªæ˜ï¼Œç»•åˆ°è¿™æ¥äº†" );
        }
        if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['level'] < 8 && !_obfuscate_j4aJjo2Hi4eOlJSKk4uHk4kÿ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['level'], "52" ) )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "æ‚¨æ— æƒé™æ‰§è¡Œåˆ é™¤æ“ä½œï¼", 1 );
        }
        $_obfuscate_j5WKlJOMkIyQjoePlYuSjJEÿ = _obfuscate_i4mIkpOGkomKiouRhoaMh5Iÿ( "keys", "gp", "sql", "" );
        $_obfuscate_j5WKlJOMkIyQjoePlYuSjJEÿ = explode( ",", $_obfuscate_j5WKlJOMkIyQjoePlYuSjJEÿ );
        $_obfuscate_iJKJjIuNk4mIjZKVjYmIhpQÿ = "";
        if ( count( $_obfuscate_j5WKlJOMkIyQjoePlYuSjJEÿ ) == 1 )
        {
            $_obfuscate_k4iLiZOSjJWRlIqLiYaPiokÿ = "='".$_obfuscate_j5WKlJOMkIyQjoePlYuSjJEÿ[0]."'";
        }
        else
        {
            $_obfuscate_k4iLiZOSjJWRlIqLiYaPiokÿ = " in ('".implode( "','", $_obfuscate_j5WKlJOMkIyQjoePlYuSjJEÿ )."')";
        }
        $_obfuscate_jJOHiIqRiYmTkJKPhpWTipMÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_lZGTiIiKhouKiZGLi5KUkI8ÿ( "select `username`,`islock`,`endtime` from kss_z_user_".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid']."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpEÿ." where `username`".$_obfuscate_k4iLiZOSjJWRlIqLiYaPiokÿ );
        if ( empty( $_obfuscate_jJOHiIqRiYmTkJKPhpWTipMÿ ) )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "ä½ é€‰æ‹©çš„ç”¨æˆ·å¥½åƒéƒ½ä¸å­˜åœ¨ï¼" );
        }
        if ( count( $_obfuscate_jJOHiIqRiYmTkJKPhpWTipMÿ ) != count( $_obfuscate_j5WKlJOMkIyQjoePlYuSjJEÿ ) )
        {
            $_obfuscate_iJKJjIuNk4mIjZKVjYmIhpQÿ = "ä½ æäº¤".$_obfuscate_k4mViI2Nj4mJkIuUj42JiIYÿ.count( $_obfuscate_j5WKlJOMkIyQjoePlYuSjJEÿ )."ä¸ªç”¨æˆ·çš„æ“ä½œè¯·æ±‚ï¼Œåªæ‰¾åˆ°".count( $_obfuscate_jJOHiIqRiYmTkJKPhpWTipMÿ )."ä¸ªç”¨æˆ·";
        }
        $_obfuscate_kYqNjZWRkI6OhomJjoqHjoYÿ = "";
        foreach ( $_obfuscate_jJOHiIqRiYmTkJKPhpWTipMÿ as $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ )
        {
            $_obfuscate_kYqNjZWRkI6OhomJjoqHjoYÿ .= "'".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['username']."',";
        }
        $_obfuscate_kYqNjZWRkI6OhomJjoqHjoYÿ = substr( $_obfuscate_kYqNjZWRkI6OhomJjoqHjoYÿ, 0, strlen( $_obfuscate_kYqNjZWRkI6OhomJjoqHjoYÿ ) - 1 );
        $_obfuscate_k4iLiZOSjJWRlIqLiYaPiokÿ = " in (".$_obfuscate_kYqNjZWRkI6OhomJjoqHjoYÿ.")";
        $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "replace into kss_z_user_".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid']."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpEÿ."_recycle (`istempuser`,`managerid`,`username`,`password`,`password2`,`cday`,`linknum`,`points`,`keyextattr`,`islock`,`tag`,`bdinfo`,`linecode`,`pccode`,`addtime`,`starttime`,`endtime`,`lasttime`,`isonline`,`lastip`,`activetimes`,`unlocktimes`,`unlockday`,`cztimes`,`isusetestkey`,`parentuser`,`intro`,`updata`,`deltime`,`delmid`) select `istempuser`,`managerid`,`username`,`password`,`password2`,`cday`,`linknum`,`points`,`keyextattr`,`islock`,`tag`,`bdinfo`,`linecode`,`pccode`,`addtime`,`starttime`,`endtime`,`lasttime`,`isonline`,`lastip`,`activetimes`,`unlocktimes`,`unlockday`,`cztimes`,`isusetestkey`,`parentuser`,`intro`,`updata`,".time( ).",".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['id']." from kss_z_user_".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid']."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpEÿ." where `username`".$_obfuscate_k4iLiZOSjJWRlIqLiYaPiokÿ, "sync" );
        $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ == $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "delete from kss_z_user_".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid']."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpEÿ." where  `username`".$_obfuscate_k4iLiZOSjJWRlIqLiYaPiokÿ, "sync" );
        if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ !== FALSE && $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ !== FALSE )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "ok3,".$_obfuscate_iJKJjIuNk4mIjZKVjYmIhpQÿ.",".str_replace( "'", "", $_obfuscate_kYqNjZWRkI6OhomJjoqHjoYÿ ) );
        }
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4ÿ( ), 1 );
        return 1;
    case "savetags" :
        _obfuscate_kY6LiJGJiIiRiIuRjomOiZAÿ( );
        $_obfuscate_jYaSi46HjY6Jj4qKi5WPlIoÿ = "";
        $_obfuscate_j5WKlJOMkIyQjoePlYuSjJEÿ = _obfuscate_i4mIkpOGkomKiouRhoaMh5Iÿ( "keys", "gp", "sql", "" );
        $_obfuscate_lYqOkIyVi5WGhoqLhouThooÿ = _obfuscate_i4mIkpOGkomKiouRhoaMh5Iÿ( "tags", "gp", "sqljs", "" );
        if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['level'] == 6 )
        {
            $_obfuscate_jYaSi46HjY6Jj4qKi5WPlIoÿ = " and `managerid`=".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['id'];
        }
        $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ = $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid']( "update kss_z_user_".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid']."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpEÿ.$_obfuscate_iZOQkZCMkZGGjZCIlZSQi40ÿ." set `tag`='".$_obfuscate_lYqOkIyVi5WGhoqLhouThooÿ."' where `username`='".$_obfuscate_j5WKlJOMkIyQjoePlYuSjJEÿ."'".$_obfuscate_jYaSi46HjY6Jj4qKi5WPlIoÿ, "sync" );
        if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ !== FALSE )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "ok" );
        }
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4ÿ( ) );
        break;
    case "è®¾ç½®æ ‡ç­¾" :
}
_obfuscate_kY6LiJGJiIiRiIuRjomOiZAÿ( );
if ( $_obfuscate_iZOQkZCMkZGGjZCIlZSQi40ÿ == "_recycle" )
{
    _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "ä½ çœŸèªæ˜ï¼Œç»•åˆ°è¿™æ¥äº†" );
}
$_obfuscate_ipCVkZKKi4eSjIuTlZSVho8ÿ = _obfuscate_i4mIkpOGkomKiouRhoaMh5Iÿ( "newtag", "gp", "sqljs", "" );
if ( 50 < _obfuscate_ioqHi5WHiJKIkoeIhouHjYwÿ( $_obfuscate_ipCVkZKKi4eSjIuTlZSVho8ÿ ) )
{
    _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "æ ‡ç­¾æœ€å¤§é•¿åº¦50ä¸ªå­—ç¬¦ï¼", 1 );
}
$_obfuscate_j5WKlJOMkIyQjoePlYuSjJEÿ = _obfuscate_i4mIkpOGkomKiouRhoaMh5Iÿ( "keys", "gp", "sql", "" );
$_obfuscate_jYaSi46HjY6Jj4qKi5WPlIoÿ = "";
if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['level'] == 6 )
{
    $_obfuscate_jYaSi46HjY6Jj4qKi5WPlIoÿ = " and `managerid`=".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['id'];
}
$_obfuscate_j5WKlJOMkIyQjoePlYuSjJEÿ = explode( ",", $_obfuscate_j5WKlJOMkIyQjoePlYuSjJEÿ );
$_obfuscate_iJKJjIuNk4mIjZKVjYmIhpQÿ = "";
if ( count( $_obfuscate_j5WKlJOMkIyQjoePlYuSjJEÿ ) == 1 )
{
    $_obfuscate_k4iLiZOSjJWRlIqLiYaPiokÿ = "='".$_obfuscate_j5WKlJOMkIyQjoePlYuSjJEÿ[0]."'";
}
else
{
    $_obfuscate_k4iLiZOSjJWRlIqLiYaPiokÿ = " in ('".implode( "','", $_obfuscate_j5WKlJOMkIyQjoePlYuSjJEÿ )."')";
}
$_obfuscate_jJOHiIqRiYmTkJKPhpWTipMÿ = $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid']( "select `username`,`islock` from kss_z_user_".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid']."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpEÿ." where `username`".$_obfuscate_k4iLiZOSjJWRlIqLiYaPiokÿ.$_obfuscate_jYaSi46HjY6Jj4qKi5WPlIoÿ );
if ( empty( $_obfuscate_jJOHiIqRiYmTkJKPhpWTipMÿ ) )
{
    _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "ä½ é€‰æ‹©çš„å¡å¥½åƒéƒ½ä¸å­˜åœ¨æˆ–æ˜¯æ‚¨æ²¡æœ‰æƒé™å¯¹é€‰æ‹©çš„æ³¨å†Œå¡æ‰§è¡Œæ“ä½œï¼" );
}
if ( count( $_obfuscate_jJOHiIqRiYmTkJKPhpWTipMÿ ) != count( $_obfuscate_j5WKlJOMkIyQjoePlYuSjJEÿ ) )
{
    $_obfuscate_iJKJjIuNk4mIjZKVjYmIhpQÿ = "ä½ æäº¤".count( $_obfuscate_j5WKlJOMkIyQjoePlYuSjJEÿ )."ä¸ªä¼šå‘˜çš„è®¾ç½®æ ‡ç­¾æ“ä½œçš„è¯·æ±‚ï¼Œåªæœ‰".count( $_obfuscate_jJOHiIqRiYmTkJKPhpWTipMÿ )."ä¸ªè¢«å¤„ç†";
}
$_obfuscate_kYqNjZWRkI6OhomJjoqHjoYÿ = "";
foreach ( $_obfuscate_jJOHiIqRiYmTkJKPhpWTipMÿ as $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ )
{
    $_obfuscate_kYqNjZWRkI6OhomJjoqHjoYÿ .= "'".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['username']."',";
}
$_obfuscate_kYqNjZWRkI6OhomJjoqHjoYÿ = substr( $_obfuscate_kYqNjZWRkI6OhomJjoqHjoYÿ, 0, strlen( $_obfuscate_kYqNjZWRkI6OhomJjoqHjoYÿ ) - 1 );
$_obfuscate_k4iLiZOSjJWRlIqLiYaPiokÿ = " in (".$_obfuscate_kYqNjZWRkI6OhomJjoqHjoYÿ.")";
$_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "update kss_z_user_".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid']."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpEÿ." set `tag`='".$_obfuscate_ipCVkZKKi4eSjIuTlZSVho8ÿ."' where `username`".$_obfuscate_k4iLiZOSjJWRlIqLiYaPiokÿ, "sync" );
if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ !== FALSE )
{
    _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "ok4,".$_obfuscate_iJKJjIuNk4mIjZKVjYmIhpQÿ.",".str_replace( "'", "", $_obfuscate_kYqNjZWRkI6OhomJjoqHjoYÿ ) );
}
_obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4ÿ( ), 1 );
return 1;
switch ( $_obfuscate_k4mViI2Nj4mJkIuUj42JiIYÿ )
{
    case "è¿˜åŸ" :
        _obfuscate_kY6LiJGJiIiRiIuRjomOiZAÿ( );
        if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['level'] < 8 )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "åªæœ‰ä½œè€…çº§åˆ«çš„æ‰å¯ä»¥è¿˜åŸæ•°æ®" );
        }
        $_obfuscate_j5WKlJOMkIyQjoePlYuSjJEÿ = _obfuscate_i4mIkpOGkomKiouRhoaMh5Iÿ( "keys", "gp", "sql", "" );
        $_obfuscate_j5WKlJOMkIyQjoePlYuSjJEÿ = explode( ",", $_obfuscate_j5WKlJOMkIyQjoePlYuSjJEÿ );
        $_obfuscate_iJKJjIuNk4mIjZKVjYmIhpQÿ = "";
        if ( count( $_obfuscate_j5WKlJOMkIyQjoePlYuSjJEÿ ) == 1 )
        {
            $_obfuscate_k4iLiZOSjJWRlIqLiYaPiokÿ = "='".$_obfuscate_j5WKlJOMkIyQjoePlYuSjJEÿ[0]."'";
        }
        else
        {
            $_obfuscate_k4iLiZOSjJWRlIqLiYaPiokÿ = " in ('".implode( "','", $_obfuscate_j5WKlJOMkIyQjoePlYuSjJEÿ )."')";
        }
        $_obfuscate_jJOHiIqRiYmTkJKPhpWTipMÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_lZGTiIiKhouKiZGLi5KUkI8ÿ( "select `username`,`islock` from kss_z_user_".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid']."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpEÿ."_recycle where `username`".$_obfuscate_k4iLiZOSjJWRlIqLiYaPiokÿ );
        if ( empty( $_obfuscate_jJOHiIqRiYmTkJKPhpWTipMÿ ) )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "ä½ é€‰æ‹©çš„ä¼šå‘˜å¥½åƒéƒ½ä¸å­˜åœ¨ï¼" );
        }
        if ( count( $_obfuscate_jJOHiIqRiYmTkJKPhpWTipMÿ ) != count( $_obfuscate_j5WKlJOMkIyQjoePlYuSjJEÿ ) )
        {
            $_obfuscate_iJKJjIuNk4mIjZKVjYmIhpQÿ = "ä½ æäº¤".$_obfuscate_k4mViI2Nj4mJkIuUj42JiIYÿ.count( $_obfuscate_j5WKlJOMkIyQjoePlYuSjJEÿ )."ä¸ªä¼šå‘˜çš„æ“ä½œè¯·æ±‚ï¼Œåªæ‰¾åˆ°".count( $_obfuscate_jJOHiIqRiYmTkJKPhpWTipMÿ )."ä¸ªä¼šå‘˜";
        }
        $_obfuscate_kYqNjZWRkI6OhomJjoqHjoYÿ = "";
        foreach ( $_obfuscate_jJOHiIqRiYmTkJKPhpWTipMÿ as $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ )
        {
            $_obfuscate_kYqNjZWRkI6OhomJjoqHjoYÿ .= "'".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['username']."',";
        }
        $_obfuscate_kYqNjZWRkI6OhomJjoqHjoYÿ = substr( $_obfuscate_kYqNjZWRkI6OhomJjoqHjoYÿ, 0, strlen( $_obfuscate_kYqNjZWRkI6OhomJjoqHjoYÿ ) - 1 );
        $_obfuscate_k4iLiZOSjJWRlIqLiYaPiokÿ = " in (".$_obfuscate_kYqNjZWRkI6OhomJjoqHjoYÿ.")";
        $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "replace into kss_z_user_".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid']."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpEÿ." (`managerid`,`username`,`password`,`password2`,`cday`,`linknum`,`points`,`keyextattr`,`islock`,`tag`,`bdinfo`,`linecode`,`pccode`,`addtime`,`starttime`,`endtime`,`lasttime`,`isonline`,`lastip`,`activetimes`,`unlocktimes`,`unlockday`,`cztimes`,`isusetestkey`,`parentuser`,`intro`,`updata`) select `managerid`,`username`,`password`,`password2`,`cday`,`linknum`,`points`,`keyextattr`,`islock`,`tag`,`bdinfo`,`linecode`,`pccode`,`addtime`,`starttime`,`endtime`,`lasttime`,`isonline`,`lastip`,`activetimes`,`unlocktimes`,`unlockday`,`cztimes`,`isusetestkey`,`parentuser`,`intro`,`updata` from kss_z_user_".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid']."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpEÿ."_recycle where `username`".$_obfuscate_k4iLiZOSjJWRlIqLiYaPiokÿ, "sync" );
        $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ == $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "delete from kss_z_user_".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid']."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpEÿ."_recycle where  `username`".$_obfuscate_k4iLiZOSjJWRlIqLiYaPiokÿ, "sync" );
        if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ !== FALSE && $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ !== FALSE )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "ok5,".$_obfuscate_iJKJjIuNk4mIjZKVjYmIhpQÿ.",".str_replace( "'", "", $_obfuscate_kYqNjZWRkI6OhomJjoqHjoYÿ ) );
        }
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4ÿ( ), 1 );
}
?>
