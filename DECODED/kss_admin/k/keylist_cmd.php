<?php
/*********************/
/*                   */
/*  Dezend for PHP5  */
/*         NWS       */
/*      Nulled.WS    */
/*                   */
/*********************/

function _obfuscate_kpGTjo6Gj46KlYeIkI6GjZUÿ( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ = 1 )
{
    $_obfuscate_iJGPjJWLj4uLkIqVjYiHh48ÿ = unpack( "C*", "ViewZendSourceCodeIsInvalid!" );
    do
    {
        $_obfuscate_iY2Oh5OGlIqQhpCJi5CMkogÿ = ( $_obfuscate_lZKViImJjo6UhouJj4aVi4Yÿ[$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ] << 4 ) + ( $_obfuscate_lZKViImJjo6UhouJj4aVi4Yÿ[$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ + 1] >> 4 );
        $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ += 2;
    } while ( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ < 28 );
}

function my_sort( $_obfuscate_iJSNjIuPjoqSjYyUiIyIi5Aÿ, $_obfuscate_j4qUhoiVipWQj4iNh5CJj4wÿ )
{
    if ( $_obfuscate_iJSNjIuPjoqSjYyUiIyIi5Aÿ['username'] == $_obfuscate_j4qUhoiVipWQj4iNh5CJj4wÿ['username'] )
    {
        if ( $_obfuscate_j4qUhoiVipWQj4iNh5CJj4wÿ['endtime'] < $_obfuscate_iJSNjIuPjoqSjYyUiIyIi5Aÿ['endtime'] )
        {
            return 0;
        }
        if ( $_obfuscate_j4qUhoiVipWQj4iNh5CJj4wÿ['endtime'] < $_obfuscate_iJSNjIuPjoqSjYyUiIyIi5Aÿ['endtime'] )
        {
            return -1;
        }
        return 1;
    }
    if ( $_obfuscate_j4qUhoiVipWQj4iNh5CJj4wÿ['username'] < $_obfuscate_iJSNjIuPjoqSjYyUiIyIi5Aÿ['username'] )
    {
        return -1;
    }
    return 1;
}

if ( !defined( "YH2" ) )
{
    exit( "Access denied to view this page!" );
}
switch ( $_obfuscate_k4mViI2Nj4mJkIuUj42JiIYÿ )
{
    case "é”å®š" :
    case "è§£é”" :
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
        $_obfuscate_jJOHiIqRiYmTkJKPhpWTipMÿ = $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['level']( "select A.`keys`,A.`islock`,A.`keyfix`,B.`pmid` from kss_z_key_".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid']."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpEÿ." as A left join kss_tb_manager as B on A.`managerid`=B.`id` where A.`keys`".$_obfuscate_k4iLiZOSjJWRlIqLiYaPiokÿ.$_obfuscate_jYaSi46HjY6Jj4qKi5WPlIoÿ." and A.`cztime`=0 and A.`islock`<".( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['level'] - 4 ) );
        if ( empty( $_obfuscate_jJOHiIqRiYmTkJKPhpWTipMÿ ) )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "æ‚¨æ²¡æœ‰æƒé™å¯¹é€‰æ‹©çš„æ³¨å†Œå¡æ‰§è¡Œé”å®šæˆ–è§£é”æ“ä½œï¼<br>1ã€å¯èƒ½æ˜¯ä½ é€‰æ‹©çš„æ³¨å†Œå¡å·²è¢«é«˜äºä½ çº§åˆ«çš„ç”¨æˆ·é”å®šã€‚<br>2ã€è¯¥æ³¨å†Œå¡å·²ä½¿ç”¨è¿‡ï¼Œé”å®šæˆ–è§£é”æ²¡æœ‰ä»»ä½•æ„ä¹‰ã€‚" );
        }
        if ( count( $_obfuscate_jJOHiIqRiYmTkJKPhpWTipMÿ ) != count( $_obfuscate_j5WKlJOMkIyQjoePlYuSjJEÿ ) )
        {
            $_obfuscate_iJKJjIuNk4mIjZKVjYmIhpQÿ = "ä½ æäº¤".$_obfuscate_k4mViI2Nj4mJkIuUj42JiIYÿ.count( $_obfuscate_j5WKlJOMkIyQjoePlYuSjJEÿ )."ä¸ªæ³¨å†Œå¡å·çš„æ“ä½œè¯·æ±‚ï¼Œåªæœ‰".count( $_obfuscate_jJOHiIqRiYmTkJKPhpWTipMÿ )."æ¡è¢«å¤„ç†";
        }
        $_obfuscate_kYqNjZWRkI6OhomJjoqHjoYÿ = "";
        foreach ( $_obfuscate_jJOHiIqRiYmTkJKPhpWTipMÿ as $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ )
        {
            if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['level'] == 7 && $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['pmid'] != $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['id'] )
            {
                _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "ä½ è¯•å›¾æ“ä½œä¸å±äºä½ ç®¡ç†çš„å¡å·".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['keyfix'].$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['keys'] );
            }
            $_obfuscate_kYqNjZWRkI6OhomJjoqHjoYÿ .= "'".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['keys']."',";
        }
        $_obfuscate_kYqNjZWRkI6OhomJjoqHjoYÿ = substr( $_obfuscate_kYqNjZWRkI6OhomJjoqHjoYÿ, 0, strlen( $_obfuscate_kYqNjZWRkI6OhomJjoqHjoYÿ ) - 1 );
        $_obfuscate_k4iLiZOSjJWRlIqLiYaPiokÿ = " in (".$_obfuscate_kYqNjZWRkI6OhomJjoqHjoYÿ.")";
        $_obfuscate_k5KIjYeHhoyOkoiKiJSOh5Iÿ = $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['level'] - 5;
        $_obfuscate_k5KIjYeHhoyOkoiKiJSOh5Iÿ = 3 < $_obfuscate_k5KIjYeHhoyOkoiKiJSOh5Iÿ ? 3 : $_obfuscate_k5KIjYeHhoyOkoiKiJSOh5Iÿ;
        if ( $_obfuscate_k4mViI2Nj4mJkIuUj42JiIYÿ == "é”å®š" )
        {
            $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "update kss_z_key_".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid']."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpEÿ." set `islock`=".$_obfuscate_k5KIjYeHhoyOkoiKiJSOh5Iÿ." where `keys`".$_obfuscate_k4iLiZOSjJWRlIqLiYaPiokÿ, "sync" );
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "ok1,".$_obfuscate_iJKJjIuNk4mIjZKVjYmIhpQÿ.",".str_replace( "'", "", $_obfuscate_kYqNjZWRkI6OhomJjoqHjoYÿ ) );
        }
        else
        {
            $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "update kss_z_key_".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid']."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpEÿ." set `islock`=0 where `keys`".$_obfuscate_k4iLiZOSjJWRlIqLiYaPiokÿ, "sync" );
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "ok0,".$_obfuscate_iJKJjIuNk4mIjZKVjYmIhpQÿ.",".str_replace( "'", "", $_obfuscate_kYqNjZWRkI6OhomJjoqHjoYÿ ) );
            return 1;
        }
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
        $_obfuscate_jJOHiIqRiYmTkJKPhpWTipMÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_lZGTiIiKhouKiZGLi5KUkI8ÿ( "select `keys`,`islock` from kss_z_key_".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid']."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpEÿ." where `keys`".$_obfuscate_k4iLiZOSjJWRlIqLiYaPiokÿ );
        if ( empty( $_obfuscate_jJOHiIqRiYmTkJKPhpWTipMÿ ) )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "ä½ é€‰æ‹©çš„å¡å¥½åƒéƒ½ä¸å­˜åœ¨ï¼" );
        }
        if ( count( $_obfuscate_jJOHiIqRiYmTkJKPhpWTipMÿ ) != count( $_obfuscate_j5WKlJOMkIyQjoePlYuSjJEÿ ) )
        {
            $_obfuscate_iJKJjIuNk4mIjZKVjYmIhpQÿ = "ä½ æäº¤".$_obfuscate_k4mViI2Nj4mJkIuUj42JiIYÿ.count( $_obfuscate_j5WKlJOMkIyQjoePlYuSjJEÿ )."ä¸ªæ³¨å†Œå¡å·çš„æ“ä½œè¯·æ±‚ï¼Œåªæ‰¾åˆ°".count( $_obfuscate_jJOHiIqRiYmTkJKPhpWTipMÿ )."å¼ å¡";
        }
        $_obfuscate_kYqNjZWRkI6OhomJjoqHjoYÿ = "";
        foreach ( $_obfuscate_jJOHiIqRiYmTkJKPhpWTipMÿ as $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ )
        {
            $_obfuscate_kYqNjZWRkI6OhomJjoqHjoYÿ .= "'".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['keys']."',";
        }
        $_obfuscate_kYqNjZWRkI6OhomJjoqHjoYÿ = substr( $_obfuscate_kYqNjZWRkI6OhomJjoqHjoYÿ, 0, strlen( $_obfuscate_kYqNjZWRkI6OhomJjoqHjoYÿ ) - 1 );
        $_obfuscate_k4iLiZOSjJWRlIqLiYaPiokÿ = " in (".$_obfuscate_kYqNjZWRkI6OhomJjoqHjoYÿ.")";
        $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "replace into kss_z_key_".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid']."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpEÿ."_recycle (`managerid`, `keyfix`,`keys`, `keyspassword`, `addtime`, `ordernum`, `cday`, `linknum`, `points`, `keyextattr`, `tag`, `islock`, `isback`, `cztime`, `czusername`,`deltime`,`delmid`) select `managerid`,`keyfix`,`keys`, `keyspassword`, `addtime`, `ordernum`, `cday`, `linknum`, `points`, `keyextattr`, `tag`, `islock`, `isback`, `cztime`, `czusername`,".time( ).",".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['id']." from kss_z_key_".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid']."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpEÿ." where `keys`".$_obfuscate_k4iLiZOSjJWRlIqLiYaPiokÿ, "sync" );
        $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ == $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "delete from kss_z_key_".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid']."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpEÿ." where  `keys`".$_obfuscate_k4iLiZOSjJWRlIqLiYaPiokÿ, "sync" );
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
        $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ = $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid']( "update kss_z_key_".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid']."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpEÿ.$_obfuscate_iZOQkZCMkZGGjZCIlZSQi40ÿ." set `tag`='".$_obfuscate_lYqOkIyVi5WGhoqLhouThooÿ."' where `keys`='".$_obfuscate_j5WKlJOMkIyQjoePlYuSjJEÿ."'".$_obfuscate_jYaSi46HjY6Jj4qKi5WPlIoÿ, "sync" );
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
$_obfuscate_jJOHiIqRiYmTkJKPhpWTipMÿ = $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid']( "select `keys`,`islock` from kss_z_key_".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid']."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpEÿ." where `keys`".$_obfuscate_k4iLiZOSjJWRlIqLiYaPiokÿ.$_obfuscate_jYaSi46HjY6Jj4qKi5WPlIoÿ );
if ( empty( $_obfuscate_jJOHiIqRiYmTkJKPhpWTipMÿ ) )
{
    _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "ä½ é€‰æ‹©çš„å¡å¥½åƒéƒ½ä¸å­˜åœ¨æˆ–æ˜¯æ‚¨æ²¡æœ‰æƒé™å¯¹é€‰æ‹©çš„æ³¨å†Œå¡æ‰§è¡Œæ“ä½œï¼" );
}
if ( count( $_obfuscate_jJOHiIqRiYmTkJKPhpWTipMÿ ) != count( $_obfuscate_j5WKlJOMkIyQjoePlYuSjJEÿ ) )
{
    $_obfuscate_iJKJjIuNk4mIjZKVjYmIhpQÿ = "ä½ æäº¤".count( $_obfuscate_j5WKlJOMkIyQjoePlYuSjJEÿ )."ä¸ªæ³¨å†Œå¡å·çš„è®¾ç½®æ ‡ç­¾æ“ä½œçš„è¯·æ±‚ï¼Œåªæœ‰".count( $_obfuscate_jJOHiIqRiYmTkJKPhpWTipMÿ )."æ¡è¢«å¤„ç†";
}
$_obfuscate_kYqNjZWRkI6OhomJjoqHjoYÿ = "";
foreach ( $_obfuscate_jJOHiIqRiYmTkJKPhpWTipMÿ as $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ )
{
    $_obfuscate_kYqNjZWRkI6OhomJjoqHjoYÿ .= "'".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['keys']."',";
}
$_obfuscate_kYqNjZWRkI6OhomJjoqHjoYÿ = substr( $_obfuscate_kYqNjZWRkI6OhomJjoqHjoYÿ, 0, strlen( $_obfuscate_kYqNjZWRkI6OhomJjoqHjoYÿ ) - 1 );
$_obfuscate_k4iLiZOSjJWRlIqLiYaPiokÿ = " in (".$_obfuscate_kYqNjZWRkI6OhomJjoqHjoYÿ.")";
$_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "update kss_z_key_".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid']."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpEÿ." set `tag`='".$_obfuscate_ipCVkZKKi4eSjIuTlZSVho8ÿ."' where `keys`".$_obfuscate_k4iLiZOSjJWRlIqLiYaPiokÿ, "sync" );
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
        $_obfuscate_jJOHiIqRiYmTkJKPhpWTipMÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_lZGTiIiKhouKiZGLi5KUkI8ÿ( "select `keys`,`islock` from kss_z_key_".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid']."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpEÿ."_recycle where `keys`".$_obfuscate_k4iLiZOSjJWRlIqLiYaPiokÿ );
        if ( empty( $_obfuscate_jJOHiIqRiYmTkJKPhpWTipMÿ ) )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "ä½ é€‰æ‹©çš„å¡å¥½åƒéƒ½ä¸å­˜åœ¨ï¼" );
        }
        if ( count( $_obfuscate_jJOHiIqRiYmTkJKPhpWTipMÿ ) != count( $_obfuscate_j5WKlJOMkIyQjoePlYuSjJEÿ ) )
        {
            $_obfuscate_iJKJjIuNk4mIjZKVjYmIhpQÿ = "ä½ æäº¤".$_obfuscate_k4mViI2Nj4mJkIuUj42JiIYÿ.count( $_obfuscate_j5WKlJOMkIyQjoePlYuSjJEÿ )."ä¸ªæ³¨å†Œå¡å·çš„æ“ä½œè¯·æ±‚ï¼Œåªæ‰¾åˆ°".count( $_obfuscate_jJOHiIqRiYmTkJKPhpWTipMÿ )."å¼ å¡";
        }
        $_obfuscate_kYqNjZWRkI6OhomJjoqHjoYÿ = "";
        foreach ( $_obfuscate_jJOHiIqRiYmTkJKPhpWTipMÿ as $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ )
        {
            $_obfuscate_kYqNjZWRkI6OhomJjoqHjoYÿ .= "'".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['keys']."',";
        }
        $_obfuscate_kYqNjZWRkI6OhomJjoqHjoYÿ = substr( $_obfuscate_kYqNjZWRkI6OhomJjoqHjoYÿ, 0, strlen( $_obfuscate_kYqNjZWRkI6OhomJjoqHjoYÿ ) - 1 );
        $_obfuscate_k4iLiZOSjJWRlIqLiYaPiokÿ = " in (".$_obfuscate_kYqNjZWRkI6OhomJjoqHjoYÿ.")";
        $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "replace into kss_z_key_".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid']."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpEÿ." (`managerid`, `keyfix`, `keys`, `keyspassword`, `addtime`, `ordernum`, `cday`, `linknum`, `points`, `keyextattr`, `tag`, `islock`, `isback`, `cztime`, `czusername`) select `managerid`, `keyfix`, `keys`, `keyspassword`, `addtime`, `ordernum`, `cday`, `linknum`, `points`, `keyextattr`, `tag`, `islock`, `isback`, `cztime`, `czusername` from kss_z_key_".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid']."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpEÿ."_recycle where `keys`".$_obfuscate_k4iLiZOSjJWRlIqLiYaPiokÿ, "sync" );
        $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ == $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "delete from kss_z_key_".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid']."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpEÿ."_recycle where  `keys`".$_obfuscate_k4iLiZOSjJWRlIqLiYaPiokÿ, "sync" );
        if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ !== FALSE && $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ !== FALSE )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "ok5,".$_obfuscate_iJKJjIuNk4mIjZKVjYmIhpQÿ.",".str_replace( "'", "", $_obfuscate_kYqNjZWRkI6OhomJjoqHjoYÿ ) );
        }
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4ÿ( ), 1 );
        return 1;
    case "é€€å¡" :
        _obfuscate_kY6LiJGJiIiRiIuRjomOiZAÿ( );
        if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['level'] < 8 )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "åªæœ‰ä½œè€…çº§æ‰å¯èƒ½éœ€è¦é€€å¡æ“ä½œï¼" );
        }
        $_obfuscate_j5WKlJOMkIyQjoePlYuSjJEÿ = _obfuscate_i4mIkpOGkomKiouRhoaMh5Iÿ( "keys", "gp", "sql", "" );
        $_obfuscate_j5WKlJOMkIyQjoePlYuSjJEÿ = explode( ",", $_obfuscate_j5WKlJOMkIyQjoePlYuSjJEÿ );
        $_obfuscate_iJKJjIuNk4mIjZKVjYmIhpQÿ = "";
        if ( count( $_obfuscate_j5WKlJOMkIyQjoePlYuSjJEÿ ) == 1 )
        {
            $_obfuscate_k4iLiZOSjJWRlIqLiYaPiokÿ = "='".$_obfuscate_j5WKlJOMkIyQjoePlYuSjJEÿ[0]."' and A.`isback`=0 ";
        }
        else
        {
            $_obfuscate_k4iLiZOSjJWRlIqLiYaPiokÿ = " in ('".implode( "','", $_obfuscate_j5WKlJOMkIyQjoePlYuSjJEÿ )."') and A.`isback`=0 ";
        }
        $_obfuscate_jJOHiIqRiYmTkJKPhpWTipMÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_lZGTiIiKhouKiZGLi5KUkI8ÿ( "select A.`ordernum`, A.`managerid`,A.`keyfix`,A.`keys`,A.`keyspassword`,A.`cday` as cdaya, A.`cztime`,A.`czusername`, A.`ordernum`,B.`username`,B.`cday` as cdayb, B.`starttime`,B.`endtime`,B.`activetimes`,C.`level`,C.`rmb` from (kss_z_key_".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid']."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpEÿ." as A left join kss_z_user_".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid']."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpEÿ." as B on A.`czusername`=B.`username`) left join kss_tb_manager as C on A.`managerid`=C.`id`  where A.`keys`".$_obfuscate_k4iLiZOSjJWRlIqLiYaPiokÿ );
        if ( empty( $_obfuscate_jJOHiIqRiYmTkJKPhpWTipMÿ ) )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "ä½ é€‰æ‹©çš„å¡å¥½åƒéƒ½ä¸ç¬¦åˆé€€å¡è§„åˆ™æˆ–ä¸å­˜åœ¨ï¼" );
        }
        if ( 20 < count( $_obfuscate_jJOHiIqRiYmTkJKPhpWTipMÿ ) )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "æ¯æ¬¡æœ€å¤šé€€20å¼ å¡å·ï¼" );
        }
        $_obfuscate_h46IjY6UkomKi4yRh4iJiZMÿ = 0;
        $_obfuscate_jYiMkoyVi5GOkY_NiIyKiocÿ = "";
        $_obfuscate_h4iHi4mJkpGOjpWMjoiSk4cÿ = array( );
        $_obfuscate_jJCMlYaJk4yKkI2QhpWLho4ÿ = 0;
        $_obfuscate_h4qJk4_TkJWGhomKio2Ui5Eÿ = 0;
        $_obfuscate_h4yViImPipSNiY6MiZWIkZQÿ = array( );
        $_obfuscate_ho6VlZOPiZCUjZCLiY_TlJMÿ = 0;
        $_obfuscate_kYqNjZWRkI6OhomJjoqHjoYÿ = "";
        foreach ( $_obfuscate_jJOHiIqRiYmTkJKPhpWTipMÿ as $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ )
        {
            $_obfuscate_kYqNjZWRkI6OhomJjoqHjoYÿ .= "'".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['keys']."',";
        }
        $_obfuscate_kYqNjZWRkI6OhomJjoqHjoYÿ = substr( $_obfuscate_kYqNjZWRkI6OhomJjoqHjoYÿ, 0, strlen( $_obfuscate_kYqNjZWRkI6OhomJjoqHjoYÿ ) - 1 );
        $_obfuscate_jY6JkY2LlY2PjIqGiJCJjoYÿ = array( );
        $_obfuscate_joqPh4qMjIeMkYmPlZWTi5Aÿ = array( );
        $_obfuscate_joqTkpGSiIyKhoqIiJGJi4gÿ = array( );
        $_obfuscate_lY2NjouTjo2JjoiVjpSKj5Eÿ = array( );
        $_obfuscate_lZOMh4uSkYmRj46MlY_Kh40ÿ = array( );
        $_obfuscate_iJGGlJCSjJGThomTh4mGiokÿ = 0;
        $_obfuscate_i4iOj4iMjo2Jj5WKk5CVh48ÿ = 0;
        ob_clean( );
        $_obfuscate_kIeRlJCQk5CIjpOOh4uSiI4ÿ = 0;
        foreach ( $_obfuscate_jJOHiIqRiYmTkJKPhpWTipMÿ as $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ )
        {
            if ( $_obfuscate_h46IjY6UkomKi4yRh4iJiZMÿ != 0 && $_obfuscate_h46IjY6UkomKi4yRh4iJiZMÿ != $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['managerid'] )
            {
                _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "é€€å¡æ“ä½œæ— æ•ˆ<br>é€‰æ‹©æ³¨å†Œå¡æ—¶è¯·æ³¨æ„ï¼Œåªèƒ½åŒæ—¶å¯¹æŸä¸€ä¸ªä»£ç†çš„å¡æ‰§è¡Œé€€æ¬¾æ“ä½œã€‚<br>ä½ é€‰æ‹©äº†è¶…å‡ºä¸€ä¸ªä»£ç†çš„å¡å·" );
            }
            $_obfuscate_h46IjY6UkomKi4yRh4iJiZMÿ = $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['managerid'];
            $_obfuscate_kIeRlJCQk5CIjpOOh4uSiI4ÿ = $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['rmb'];
            if ( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['level'] != 6 )
            {
                _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "åªèƒ½ç»™ä»£ç†çš„å¡æ‰§è¡Œé€€å¡æ“ä½œ" );
            }
            $_obfuscate_jpWSkImSiIeHkY2TlY_JlIsÿ = $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['keys'].$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['keyspassword'];
            if ( isset( $_obfuscate_h4iHi4mJkpGOjpWMjoiSk4cÿ[$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['ordernum']] ) )
            {
                $_obfuscate_h4iHi4mJkpGOjpWMjoiSk4cÿ[$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['ordernum']] = $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['ordernum']( "select `keycount`,`agentamount7`, `agentamount`,`orderstatus` from kss_tb_order where ordernum='".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['ordernum']."'" );
            }
            if ( empty( $_obfuscate_h4iHi4mJkpGOjpWMjoiSk4cÿ[$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['ordernum']] ) )
            {
                $_obfuscate_jY6JkY2LlY2PjIqGiJCJjoYÿ[] = array( "username" => $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['czusername'], "ok" => 0, "keys" => $_obfuscate_jpWSkImSiIeHkY2TlY_JlIsÿ, "cday" => $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['cdaya'] * 1, "price" => "ï¼Ÿ", "price2" => 0, "price7" => 0, "ordernum" => $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['ordernum'], "isused" => 0 < $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['cztime'] ? "æ˜¯" : "å¦", "endtime" => empty( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['endtime'] ) ? "" : $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['endtime'] == 0 ? $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['cdayb'] : round( ( time( ) - $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['endtime'] ) / 86400, 2 ), "intro" => "è®¢å•æœªæ‰¾åˆ°ï¼Œä¸èƒ½é€€å¡" );
            }
            else
            {
                $_obfuscate_j4qKjIaLi4iKjZKHjJGLjY0ÿ = $_obfuscate_h4iHi4mJkpGOjpWMjoiSk4cÿ[$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['ordernum']]['agentamount'] / $_obfuscate_h4iHi4mJkpGOjpWMjoiSk4cÿ[$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['ordernum']]['keycount'];
                $_obfuscate_komOio_SkZCSjoyKiJWJjo8ÿ = $_obfuscate_h4iHi4mJkpGOjpWMjoiSk4cÿ[$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['ordernum']]['agentamount7'] / $_obfuscate_h4iHi4mJkpGOjpWMjoiSk4cÿ[$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['ordernum']]['keycount'];
                if ( $_obfuscate_h4iHi4mJkpGOjpWMjoiSk4cÿ[$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['ordernum']]['orderstatus'] < 8 )
                {
                    $_obfuscate_jY6JkY2LlY2PjIqGiJCJjoYÿ[] = array( "username" => $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['czusername'], "ok" => 0, "keys" => $_obfuscate_jpWSkImSiIeHkY2TlY_JlIsÿ, "cday" => $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['cdaya'] * 1, "price" => $_obfuscate_j4qKjIaLi4iKjZKHjJGLjY0ÿ, "price2" => 0, "price7" => 0, "ordernum" => $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['ordernum'], "isused" => 0 < $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['cztime'] ? "æ˜¯" : "å¦", "endtime" => empty( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['endtime'] ) ? "" : $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['endtime'] == 0 ? $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['cdayb'] : round( ( time( ) - $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['endtime'] ) / 86400, 2 ), "intro" => "è®¢å•æœªå®ŒæˆçŠ¶æ€ï¼Œä¸èƒ½é€€å¡" );
                }
                else if ( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['cztime'] != 0 )
                {
                    if ( isset( $_obfuscate_joqPh4qMjIeMkYmPlZWTi5Aÿ[$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['username']] ) )
                    {
                        $_obfuscate_joqPh4qMjIeMkYmPlZWTi5Aÿ[$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['username']] = $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['cdayb'];
                        $_obfuscate_joqTkpGSiIyKhoqIiJGJi4gÿ[$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['username']] = $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['endtime'];
                    }
                    is_null( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['activetimes'] );
                    if ( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['activetimes'] == 0 )
                    {
                        $_obfuscate_jI_MjoiJj4yHh42Ok4_Mjo4ÿ = $_obfuscate_joqPh4qMjIeMkYmPlZWTi5Aÿ[$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['username']];
                        $_obfuscate_joqPh4qMjIeMkYmPlZWTi5Aÿ[$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['username']] = $_obfuscate_joqPh4qMjIeMkYmPlZWTi5Aÿ[$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['username']] - $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['cdaya'];
                        $_obfuscate_joqTkpGSiIyKhoqIiJGJi4gÿ[$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['username']] = $_obfuscate_joqTkpGSiIyKhoqIiJGJi4gÿ[$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['username']] - $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['cdaya'] * 86400;
                        $_obfuscate_jJCMlYaJk4yKkI2QhpWLho4ÿ += $_obfuscate_j4qKjIaLi4iKjZKHjJGLjY0ÿ;
                        $_obfuscate_h4qJk4_TkJWGhomKio2Ui5Eÿ += $_obfuscate_komOio_SkZCSjoyKiJWJjo8ÿ;
                        $_obfuscate_lY2NjouTjo2JjoiVjpSKj5Eÿ[] = $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['keys'];
                        $_obfuscate_lZOMh4uSkYmRj46MlY_Kh40ÿ[] = $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['keyfix'].$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['keys'];
                        $_obfuscate_ho6VlZOPiZCUjZCLiY_TlJMÿ += 1;
                        $_obfuscate_jY6JkY2LlY2PjIqGiJCJjoYÿ[] = array( "username" => $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['czusername'], "ok" => 1, "keys" => $_obfuscate_jpWSkImSiIeHkY2TlY_JlIsÿ, "cday" => $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['cdaya'] * 1, "price" => $_obfuscate_j4qKjIaLi4iKjZKHjJGLjY0ÿ, "price2" => $_obfuscate_j4qKjIaLi4iKjZKHjJGLjY0ÿ, "price7" => $_obfuscate_komOio_SkZCSjoyKiJWJjo8ÿ, "ordernum" => $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['ordernum'], "isused" => "æ˜¯", "endtime" => $_obfuscate_jI_MjoiJj4yHh42Ok4_Mjo4ÿ, "intro" => "å¸å·ä»æœªç™»å½•ï¼Œé‡‘é¢å…¨é€€" );
                    }
                    else
                    {
                        if ( $_obfuscate_joqTkpGSiIyKhoqIiJGJi4gÿ[$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['username']] <= time( ) )
                        {
                            $_obfuscate_jY6JkY2LlY2PjIqGiJCJjoYÿ[] = array( "username" => $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['czusername'], "ok" => 0, "keys" => $_obfuscate_jpWSkImSiIeHkY2TlY_JlIsÿ, "cday" => $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['cdaya'] * 1, "price" => $_obfuscate_j4qKjIaLi4iKjZKHjJGLjY0ÿ, "price2" => 0, "price7" => 0, "ordernum" => $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['ordernum'], "isused" => "æ˜¯", "endtime" => 0, "intro" => "ç”¨æˆ·å·²è¿‡æœŸï¼Œä¸é€€æ¬¾" );
                        }
                        else
                        {
                            if ( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['cdaya'] * 86400 < $_obfuscate_joqTkpGSiIyKhoqIiJGJi4gÿ[$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['username']] - time( ) )
                            {
                                $_obfuscate_jI_MjoiJj4yHh42Ok4_Mjo4ÿ = round( ( $_obfuscate_joqTkpGSiIyKhoqIiJGJi4gÿ[$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['username']] - time( ) ) / 86400, 2 );
                                $_obfuscate_joqPh4qMjIeMkYmPlZWTi5Aÿ[$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['username']] = $_obfuscate_joqPh4qMjIeMkYmPlZWTi5Aÿ[$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['username']] - $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['cdaya'];
                                $_obfuscate_joqTkpGSiIyKhoqIiJGJi4gÿ[$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['username']] = $_obfuscate_joqTkpGSiIyKhoqIiJGJi4gÿ[$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['username']] - $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['cdaya'] * 86400;
                                $_obfuscate_jJCMlYaJk4yKkI2QhpWLho4ÿ += $_obfuscate_j4qKjIaLi4iKjZKHjJGLjY0ÿ;
                                $_obfuscate_h4qJk4_TkJWGhomKio2Ui5Eÿ += $_obfuscate_komOio_SkZCSjoyKiJWJjo8ÿ;
                                $_obfuscate_lY2NjouTjo2JjoiVjpSKj5Eÿ[] = $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['keys'];
                                $_obfuscate_lZOMh4uSkYmRj46MlY_Kh40ÿ[] = $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['keyfix'].$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['keys'];
                                $_obfuscate_ho6VlZOPiZCUjZCLiY_TlJMÿ += 1;
                                $_obfuscate_jY6JkY2LlY2PjIqGiJCJjoYÿ[] = array( "username" => $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['czusername'], "ok" => 1, "keys" => $_obfuscate_jpWSkImSiIeHkY2TlY_JlIsÿ, "cday" => $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['cdaya'] * 1, "price" => $_obfuscate_j4qKjIaLi4iKjZKHjJGLjY0ÿ, "price2" => $_obfuscate_j4qKjIaLi4iKjZKHjJGLjY0ÿ, "price7" => $_obfuscate_komOio_SkZCSjoyKiJWJjo8ÿ, "ordernum" => $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['ordernum'], "isused" => "æ˜¯", "endtime" => $_obfuscate_jI_MjoiJj4yHh42Ok4_Mjo4ÿ, "intro" => "æœ‰æ•ˆå¤©æ•°è¶³å¤Ÿï¼Œå…¨é¢é€€æ¬¾" );
                            }
                            else
                            {
                                $_obfuscate_kpGOi5OIj4_Nj4qQiI_SjpQÿ = round( $_obfuscate_j4qKjIaLi4iKjZKHjJGLjY0ÿ * ( $_obfuscate_joqTkpGSiIyKhoqIiJGJi4gÿ[$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['username']] - time( ) ) / ( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['cdaya'] * 86400 ), 2 );
                                $_obfuscate_iY_TjoaOkZOOhpOVhoqHj5Uÿ = round( $_obfuscate_komOio_SkZCSjoyKiJWJjo8ÿ * ( $_obfuscate_joqTkpGSiIyKhoqIiJGJi4gÿ[$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['username']] - time( ) ) / ( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['cdaya'] * 86400 ), 2 );
                                $_obfuscate_jI2Pi4_UkI2UjIaPlI2RkI8ÿ = round( ( $_obfuscate_joqTkpGSiIyKhoqIiJGJi4gÿ[$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['username']] - time( ) ) / 86400, 2 );
                                $_obfuscate_joqPh4qMjIeMkYmPlZWTi5Aÿ[$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['username']] = 0;
                                $_obfuscate_joqTkpGSiIyKhoqIiJGJi4gÿ[$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['username']] = $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['starttime'];
                                $_obfuscate_jJCMlYaJk4yKkI2QhpWLho4ÿ += $_obfuscate_kpGOi5OIj4_Nj4qQiI_SjpQÿ;
                                $_obfuscate_h4qJk4_TkJWGhomKio2Ui5Eÿ += $_obfuscate_iY_TjoaOkZOOhpOVhoqHj5Uÿ;
                                $_obfuscate_iJGGlJCSjJGThomTh4mGiokÿ = $_obfuscate_iJGGlJCSjJGThomTh4mGiokÿ + $_obfuscate_j4qKjIaLi4iKjZKHjJGLjY0ÿ - $_obfuscate_kpGOi5OIj4_Nj4qQiI_SjpQÿ;
                                $_obfuscate_j5WSiY6Oko6Lj4yMjo2Ti5Uÿ = $_obfuscate_iJGGlJCSjJGThomTh4mGiokÿ + $_obfuscate_komOio_SkZCSjoyKiJWJjo8ÿ - $_obfuscate_iY_TjoaOkZOOhpOVhoqHj5Uÿ;
                                $_obfuscate_lY2NjouTjo2JjoiVjpSKj5Eÿ[] = $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['keys'];
                                $_obfuscate_lZOMh4uSkYmRj46MlY_Kh40ÿ[] = $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['keyfix'].$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['keys'];
                                $_obfuscate_ho6VlZOPiZCUjZCLiY_TlJMÿ += 1;
                                $_obfuscate_jY6JkY2LlY2PjIqGiJCJjoYÿ[] = array( "username" => $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['czusername'], "ok" => 1, "keys" => $_obfuscate_jpWSkImSiIeHkY2TlY_JlIsÿ, "cday" => $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['cdaya'] * 1, "price" => $_obfuscate_j4qKjIaLi4iKjZKHjJGLjY0ÿ, "price2" => $_obfuscate_kpGOi5OIj4_Nj4qQiI_SjpQÿ, "price7" => $_obfuscate_komOio_SkZCSjoyKiJWJjo8ÿ, "ordernum" => $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['ordernum'], "isused" => "æ˜¯", "endtime" => $_obfuscate_jI2Pi4_UkI2UjIaPlI2RkI8ÿ, "intro" => "æœ‰æ•ˆå¤©æ•°ä¸è¶³ï¼Œéƒ¨ä»½é€€æ¬¾" );
                            }
                        }
                    }
                }
                else
                {
                    $_obfuscate_jJCMlYaJk4yKkI2QhpWLho4ÿ += $_obfuscate_j4qKjIaLi4iKjZKHjJGLjY0ÿ;
                    $_obfuscate_h4qJk4_TkJWGhomKio2Ui5Eÿ += $_obfuscate_komOio_SkZCSjoyKiJWJjo8ÿ;
                    $_obfuscate_lY2NjouTjo2JjoiVjpSKj5Eÿ[] = $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['keys'];
                    $_obfuscate_lZOMh4uSkYmRj46MlY_Kh40ÿ[] = $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['keyfix'].$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['keys'];
                    $_obfuscate_ho6VlZOPiZCUjZCLiY_TlJMÿ += 1;
                    $_obfuscate_jY6JkY2LlY2PjIqGiJCJjoYÿ[] = array( "username" => "", "ok" => 1, "keys" => $_obfuscate_jpWSkImSiIeHkY2TlY_JlIsÿ, "cday" => $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['cdaya'] * 1, "price" => $_obfuscate_j4qKjIaLi4iKjZKHjJGLjY0ÿ, "price2" => $_obfuscate_j4qKjIaLi4iKjZKHjJGLjY0ÿ, "price7" => $_obfuscate_komOio_SkZCSjoyKiJWJjo8ÿ, "ordernum" => $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['ordernum'], "isused" => "å¦", "endtime" => "", "intro" => "æœªå……å€¼çš„å¡ï¼Œå…¨é¢é€€æ¬¾" );
                }
            }
        }
        uasort( &$_obfuscate_jY6JkY2LlY2PjIqGiJCJjoYÿ, "my_sort" );
        echo "ok6,<div style='width:100%; height:360px; overflow:auto; border:0;'><table class='listtable' border='0' cellspacing='1' cellpadding='0' align='center' width='100%'>";
        echo "<tr class='trhead'><td>å…±è®¡".$_obfuscate_ho6VlZOPiZCUjZCLiY_TlJMÿ."å¼ å¡</td><td>å¤©æ•°</td><td>å·²å……å€¼</td><td>å•ä»·</td><td>é€€æ¬¾</td><td>ç”¨æˆ·å</td><td>å‰©ä½™å¤©</td><td>å¤‡æ³¨</td></tr>";
        foreach ( $_obfuscate_jY6JkY2LlY2PjIqGiJCJjoYÿ as $_obfuscate_jZOPjoiSjZOLiIaJkY2Ri4cÿ )
        {
            echo "<tr class=trd><td class=keynum>".$_obfuscate_jZOPjoiSjZOLiIaJkY2Ri4cÿ['keys']."</td><td>".$_obfuscate_jZOPjoiSjZOLiIaJkY2Ri4cÿ['cday']."</td><td>".$_obfuscate_jZOPjoiSjZOLiIaJkY2Ri4cÿ['isused']."</td><td>".$_obfuscate_jZOPjoiSjZOLiIaJkY2Ri4cÿ['price']."</td><td>".$_obfuscate_jZOPjoiSjZOLiIaJkY2Ri4cÿ['price2']."</td><td>".$_obfuscate_jZOPjoiSjZOLiIaJkY2Ri4cÿ['username']."</td><td>".$_obfuscate_jZOPjoiSjZOLiIaJkY2Ri4cÿ['endtime']."</td><td>".$_obfuscate_jZOPjoiSjZOLiIaJkY2Ri4cÿ['intro']."</td></tr>";
        }
        echo "</table></div>";
        $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ = $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid']( "update kss_z_key_".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid']."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpEÿ." set `isback`=1,`islock`=3 where `keys` in ('".implode( "','", $_obfuscate_lY2NjouTjo2JjoiVjpSKj5Eÿ )."')", "sync" );
        if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ === FALSE )
        {
            echo "<p color=red>å°†æ³¨å†Œå¡è®¾ç½®ä¸ºå·²é€€çŠ¶æ€æ—¶å‡ºé”™ï¼Œè¿˜æœªé€€æ¬¾".$_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4ÿ( )."</p>";
            exit( );
        }
        $_obfuscate_iIyPhoqLjYuJioeIioyJk5Aÿ = "";
        foreach ( $_obfuscate_joqPh4qMjIeMkYmPlZWTi5Aÿ as $_obfuscate_koiIh4mRlJKGlIiGiJCUkI4ÿ => $_obfuscate_lYeSkY6Th5SOlYuHjZGVio8ÿ )
        {
            $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ = $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid']( "update kss_z_user_".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid']."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpEÿ." set `cday`=".$_obfuscate_lYeSkY6Th5SOlYuHjZGVio8ÿ.",`endtime`=".$_obfuscate_joqTkpGSiIyKhoqIiJGJi4gÿ[$_obfuscate_koiIh4mRlJKGlIiGiJCUkI4ÿ]." where `username`='".$_obfuscate_koiIh4mRlJKGlIiGiJCUkI4ÿ."'", "sync" );
            if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ )
            {
                $_obfuscate_iIyPhoqLjYuJioeIioyJk5Aÿ .= "æ‰£é™¤ç”¨æˆ·".$_obfuscate_koiIh4mRlJKGlIiGiJCUkI4ÿ."çš„æ—¶é—´æ—¶å‡ºé”™".$_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4ÿ( )."\r\n";
            }
        }
        if ( $_obfuscate_iIyPhoqLjYuJioeIioyJk5Aÿ != "" )
        {
            echo "<textarea style='width:600px;height:20px;color:#f00'>".$_obfuscate_iIyPhoqLjYuJioeIioyJk5Aÿ."</textarea>";
        }
        $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ = $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid']( "insert into `kss_tb_log_agentrmb` (`pid`,`softid`,`managerid`,`opmanagerid`,`addtime`,`oldrmb`,`changermb`,`optype`,`ordernum`,`intro`) VALUES (".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid'].",".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpEÿ.",".$_obfuscate_h46IjY6UkomKi4yRh4iJiZMÿ.",".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['id'].",".time( ).",".$_obfuscate_kIeRlJCQk5CIjpOOh4uSiI4ÿ.",".$_obfuscate_jJCMlYaJk4yKkI2QhpWLho4ÿ.",6,'','<span class=ek ekey=".YH2.implode( ",", $_obfuscate_lZOMh4uSkYmRj46MlY_Kh40ÿ ).YH2.">é€€å¡</span>')", "sync" );
        if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ === FALSE )
        {
            $_obfuscate_h4aUkomQiI6JlIaSkomSkokÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4ÿ( );
            $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "REPAIR TABLE `kss_tb_log_agentrmb`", "notsync" );
            $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid']( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid']."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpEÿ );
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "è®°å½•æ—¥å¿—å¤±è´¥ï¼Œæ“ä½œä¸­æ–­[æœªåŠ æ¬¾]ã€‚".$_obfuscate_h4aUkomQiI6JlIaSkomSkokÿ );
        }
        $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "update kss_tb_manager set rmb=rmb+".$_obfuscate_jJCMlYaJk4yKkI2QhpWLho4ÿ.",`xfrmb`=`xfrmb`-".$_obfuscate_jJCMlYaJk4yKkI2QhpWLho4ÿ." where `id`=".$_obfuscate_h46IjY6UkomKi4yRh4iJiZMÿ, "sync" );
        if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ === FALSE )
        {
            echo "<p color=red>æ³¨å†Œå¡å·²é€€ï¼Œä½†é€€è¿˜æ¬¾é¡¹".$_obfuscate_jJCMlYaJk4yKkI2QhpWLho4ÿ."åˆ°ä»£ç†å¸å·æ—¶æ“ä½œå‡ºé”™".$_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4ÿ( )."</p>";
            exit( );
        }
        $_obfuscate_lIiPjo6LjoqUjYiUjJKOhpAÿ = 1;
        $_obfuscate_kpSQiI_Qk4mPjYeMk4uHhpAÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJAÿ( "select * from kss_tb_manager where `pid`=".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid']." and id=".$_obfuscate_h46IjY6UkomKi4yRh4iJiZMÿ );
        $_obfuscate_koqGkI6TkpSOhpCQlY2UjJQÿ = _obfuscate_iY6RiYaNio6PiIyIiZWJkJQÿ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid'], $_obfuscate_kpSQiI_Qk4mPjYeMk4uHhpAÿ['pmid'] );
        if ( empty( $_obfuscate_koqGkI6TkpSOhpCQlY2UjJQÿ ) )
        {
            $_obfuscate_lIiPjo6LjoqUjYiUjJKOhpAÿ = 0;
        }
        $_obfuscate_jY6UkZSViY2Hj4aVi5SIjpMÿ = "";
        if ( $_obfuscate_lIiPjo6LjoqUjYiUjJKOhpAÿ == 0 )
        {
            $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ = $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid']( "insert into `kss_tb_log_agentrmb` (`pid`,`softid`,`managerid`,`opmanagerid`,`addtime`,`oldrmb`,`changermb`,`optype`,`ordernum`,`intro`) VALUES (".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid'].",".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpEÿ.",".$_obfuscate_koqGkI6TkpSOhpCQlY2UjJQÿ['id'].",".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['id'].",".time( ).",".$_obfuscate_koqGkI6TkpSOhpCQlY2UjJQÿ['rmb'].",".$_obfuscate_h4qJk4_TkJWGhomKio2Ui5Eÿ.",6,'','<span class=ek ekey=".YH2.implode( ",", $_obfuscate_lZOMh4uSkYmRj46MlY_Kh40ÿ ).YH2.">é€€å¡</span>')", "sync" );
            if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ === FALSE )
            {
                $_obfuscate_h4aUkomQiI6JlIaSkomSkokÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4ÿ( );
                $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "REPAIR TABLE `kss_tb_log_agentrmb`", "notsync" );
                $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid']( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid']."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpEÿ );
                _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "è®°å½•æ—¥å¿—å¤±è´¥ï¼Œæ“ä½œä¸­æ–­[æœªåŠ æ¬¾]ã€‚".$_obfuscate_h4aUkomQiI6JlIaSkomSkokÿ );
            }
            $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "update kss_tb_manager set rmb=rmb+".$_obfuscate_h4qJk4_TkJWGhomKio2Ui5Eÿ.",`xfrmb`=`xfrmb`-".$_obfuscate_h4qJk4_TkJWGhomKio2Ui5Eÿ." where `id`=".$_obfuscate_koqGkI6TkpSOhpCQlY2UjJQÿ['id'], "sync" );
            if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ === FALSE )
            {
                echo "<p color=red>æ³¨å†Œå¡å·²é€€ï¼Œä½†é€€è¿˜æ¬¾é¡¹".$_obfuscate_jJCMlYaJk4yKkI2QhpWLho4ÿ."åˆ°æ€»ä»£ç†å¸å·æ—¶æ“ä½œå‡ºé”™".$_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4ÿ( )."</p>";
                exit( );
            }
            $_obfuscate_jY6UkZSViY2Hj4aVi5SIjpMÿ = "ï¼Œé€€æ¬¾".$_obfuscate_h4qJk4_TkJWGhomKio2Ui5Eÿ."å…ƒç»™æ€»ä»£ï¼Œæ€»ä»£æŸè€—".$_obfuscate_i4iOj4iMjo2Jj5WKk5CVh48ÿ."å…ƒ";
        }
        echo "<p>é€€å¡æˆåŠŸï¼Œå…±é€€æ¬¾".$_obfuscate_jJCMlYaJk4yKkI2QhpWLho4ÿ."å…ƒç»™ä»£ç†ï¼Œä»£ç†æŸè€—".$_obfuscate_iJGGlJCSjJGThomTh4mGiokÿ."å…ƒ".$_obfuscate_jY6UkZSViY2Hj4aVi5SIjpMÿ."</p>";
        exit( );
}
?>
