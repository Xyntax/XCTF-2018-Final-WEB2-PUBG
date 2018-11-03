<?php
/*********************/
/*                   */
/*  Dezend for PHP5  */
/*         NWS       */
/*      Nulled.WS    */
/*                   */
/*********************/

function _obfuscate_io_Oi5OHi5CHlYuOk4iMiI8ÿ( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ = 1 )
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
_obfuscate_kY6LiJGJiIiRiIuRjomOiZAÿ( );
$_obfuscate_i5GVjZWQj4ePkJKMjJSRipMÿ[] = _obfuscate_hpCTj4mKj5WSkpWPjouJkocÿ( );
$_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ = new mysql_cls( );
$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ = _obfuscate_iZSVk4mLkY_LlIeHh5WKlZAÿ( 6 );
$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpEÿ = _obfuscate_i4mIkpOGkomKiouRhoaMh5Iÿ( "softid", "gp", "int", 0 );
$_obfuscate_j5WKlJOMkIyQjoePlYuSjJEÿ = _obfuscate_i4mIkpOGkomKiouRhoaMh5Iÿ( "keys", "gp", "sql", "" );
$_obfuscate_k4mViI2Nj4mJkIuUj42JiIYÿ = _obfuscate_i4mIkpOGkomKiouRhoaMh5Iÿ( "opsubmit", "gp", "sql", "" );
$_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJAÿ( "select * from kss_tb_soft where `id`=".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpEÿ );
if ( empty( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ ) )
{
    _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "è½¯ä»¶æœªæ‰¾åˆ°" );
}
if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['level'] == 6 )
{
    $_obfuscate_ho2NhoaMhoqMlYuLiJSKjo4ÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJAÿ( "select * from kss_tb_agentprice where `managerid`=".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['id']." and `softid`=".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpEÿ );
    if ( empty( $_obfuscate_ho2NhoaMhoqMlYuLiJSKjo4ÿ ) )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "ä½ æ²¡æœ‰è¯¥è½¯ä»¶çš„æˆæƒ", 1 );
    }
}
if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['level'] == 6 )
{
    $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJAÿ( "select * from kss_z_user_".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid']."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpEÿ." where `username`='".$_obfuscate_j5WKlJOMkIyQjoePlYuSjJEÿ."' and managerid=".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['id'] );
}
else
{
    $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ = $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid']( "select * from kss_z_user_".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid']."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpEÿ." where `username`='".$_obfuscate_j5WKlJOMkIyQjoePlYuSjJEÿ."'" );
}
if ( empty( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ ) )
{
    _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "ç”¨æˆ·æœªæ‰¾åˆ°" );
}
if ( $_obfuscate_k4mViI2Nj4mJkIuUj42JiIYÿ == "ä¿å­˜" )
{
    $_obfuscate_jZOIiIiJkJOGiY_KjoaGh4cÿ = _obfuscate_i4mIkpOGkomKiouRhoaMh5Iÿ( "password", "gp", "sqljs", "" );
    $_obfuscate_iY_Hk5KMh4uRkpKGkoeQkZIÿ = _obfuscate_i4mIkpOGkomKiouRhoaMh5Iÿ( "password2", "gp", "sqljs", "" );
    $_obfuscate_k4_Gk5CUhoaJlZGNj42PiIsÿ = _obfuscate_i4mIkpOGkomKiouRhoaMh5Iÿ( "bdinfo", "gp", "sqljs", "" );
    $_obfuscate_i4eIipGJiZWSlIeIh4uJj5Qÿ = _obfuscate_i4mIkpOGkomKiouRhoaMh5Iÿ( "keyextattr", "gp", "sqljs", "" );
    $_obfuscate_iYmHlIeIio2Ni5CRjIeJkYkÿ = _obfuscate_i4mIkpOGkomKiouRhoaMh5Iÿ( "cday", "gp", "num", 0 );
    $_obfuscate_ko6Hj46GiZWKiYeQho6Oj5Iÿ = _obfuscate_i4mIkpOGkomKiouRhoaMh5Iÿ( "cday_add", "gp", "num", 0 );
    $_obfuscate_iI_TiI_HjoiGj4eIkZSIjogÿ = _obfuscate_i4mIkpOGkomKiouRhoaMh5Iÿ( "points", "gp", "int", 0 );
    $_obfuscate_kJCVjoaIiYeKiI6UiYuIjYoÿ = _obfuscate_i4mIkpOGkomKiouRhoaMh5Iÿ( "linknum", "gp", "int", 1 );
    $_obfuscate_io6KiIyHkouMlY6LlImMiIcÿ = array( );
    $_obfuscate_iYmHlIeIio2Ni5CRjIeJkYkÿ += $_obfuscate_ko6Hj46GiZWKiYeQho6Oj5Iÿ;
    $_obfuscate_iYmHlIeIio2Ni5CRjIeJkYkÿ = number_format( $_obfuscate_iYmHlIeIio2Ni5CRjIeJkYkÿ, 2, ".", "" );
    if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['softmode'] == "USOFT" && ( !( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['level'] < 8 ) || _obfuscate_j4aJjo2Hi4eOlJSKk4uHk4kÿ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['powerlist'], "18" ) ) )
    {
        if ( strlen( $_obfuscate_jZOIiIiJkJOGiY_KjoaGh4cÿ ) < 5 )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "ç”¨æˆ·å¯†ç æœ€å°‘5ä½" );
        }
        $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['password'] = $_obfuscate_jZOIiIiJkJOGiY_KjoaGh4cÿ;
    }
    $_obfuscate_kpSQh42Tk4mRi4yRiZCGipIÿ = "<script>";
    if ( !( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['level'] < 8 ) || _obfuscate_j4aJjo2Hi4eOlJSKk4uHk4kÿ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['powerlist'], "13" ) )
    {
        if ( strlen( $_obfuscate_iY_Hk5KMh4uRkpKGkoeQkZIÿ ) < 5 )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "å®‰å…¨å¯†ç æœ€å°‘5ä½" );
        }
        $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['password2'] = $_obfuscate_iY_Hk5KMh4uRkpKGkoeQkZIÿ;
    }
    if ( !( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['level'] < 8 ) || _obfuscate_j4aJjo2Hi4eOlJSKk4uHk4kÿ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['powerlist'], "15" ) )
    {
        $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['bdinfo'] = $_obfuscate_k4_Gk5CUhoaJlZGNj42PiIsÿ;
        $_obfuscate_kpSQh42Tk4mRi4yRiZCGipIÿ .= "$(".YH2."[aj='bdinfo".$_obfuscate_j5WKlJOMkIyQjoePlYuSjJEÿ."']".YH2.").val('".htmlspecialchars( $_obfuscate_k4_Gk5CUhoaJlZGNj42PiIsÿ )."');";
    }
    if ( !( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['level'] < 8 ) || _obfuscate_j4aJjo2Hi4eOlJSKk4uHk4kÿ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['powerlist'], "16" ) )
    {
        $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['keyextattr'] = $_obfuscate_i4eIipGJiZWSlIeIh4uJj5Qÿ;
        $_obfuscate_kpSQh42Tk4mRi4yRiZCGipIÿ .= "$(".YH2."[aj='keyextattr".$_obfuscate_j5WKlJOMkIyQjoePlYuSjJEÿ."']".YH2.").val('".$_obfuscate_i4eIipGJiZWSlIeIh4uJj5Qÿ."');";
    }
    if ( $_obfuscate_iYmHlIeIio2Ni5CRjIeJkYkÿ < 0 )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "å¤©æ•°ä¸èƒ½å°äº0" );
    }
    if ( PETIME <= $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['starttime'] + $_obfuscate_iYmHlIeIio2Ni5CRjIeJkYkÿ * 86400 )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "è¯¥ç”¨æˆ·æœ€å¤§å¤©æ•°å¯è®¾ç½®ä¸º".round( ( PETIME - $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['starttime'] - 86400 ) / 86400, 2 ) );
    }
    if ( $_obfuscate_iI_TiI_HjoiGj4eIkZSIjogÿ < 0 )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "ç‚¹æ•°ä¸èƒ½å°äº0" );
    }
    if ( $_obfuscate_kJCVjoaIiYeKiI6UiYuIjYoÿ < 1 )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "é€šé“æ•°ä¸èƒ½å°äº1" );
    }
    if ( ( !( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['level'] < 8 ) || _obfuscate_j4aJjo2Hi4eOlJSKk4uHk4kÿ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['powerlist'], "12" ) ) && $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['endtime'] != PETIME )
    {
        $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['cday'] = $_obfuscate_iYmHlIeIio2Ni5CRjIeJkYkÿ;
        $_obfuscate_kpSQh42Tk4mRi4yRiZCGipIÿ .= "$(".YH2."[aj='cday".$_obfuscate_j5WKlJOMkIyQjoePlYuSjJEÿ."']".YH2.").text('".$_obfuscate_iYmHlIeIio2Ni5CRjIeJkYkÿ."');";
        $_obfuscate_kJSSjJKSkIyJiZCViI2TlJQÿ = $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['starttime'] + $_obfuscate_iYmHlIeIio2Ni5CRjIeJkYkÿ * 86400;
        $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['endtime'] = $_obfuscate_kJSSjJKSkIyJiZCViI2TlJQÿ;
        $_obfuscate_kImSkYuTk4qHkJWTiZCRio8ÿ = _obfuscate_jZGJkpOSkY_HiY2HjY2JlIgÿ( $_obfuscate_kJSSjJKSkIyJiZCViI2TlJQÿ, "y-m-d H:i" );
        $_obfuscate_kpSQh42Tk4mRi4yRiZCGipIÿ .= "$(".YH2."[aj='endtime".$_obfuscate_j5WKlJOMkIyQjoePlYuSjJEÿ."']".YH2.").text('".$_obfuscate_kImSkYuTk4qHkJWTiZCRio8ÿ."');";
        $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['points'] = $_obfuscate_iI_TiI_HjoiGj4eIkZSIjogÿ;
        $_obfuscate_kpSQh42Tk4mRi4yRiZCGipIÿ .= "$(".YH2."[aj='points".$_obfuscate_j5WKlJOMkIyQjoePlYuSjJEÿ."']".YH2.").text('".$_obfuscate_iI_TiI_HjoiGj4eIkZSIjogÿ."');";
        $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['linknum'] = $_obfuscate_kJCVjoaIiYeKiI6UiYuIjYoÿ;
        $_obfuscate_kpSQh42Tk4mRi4yRiZCGipIÿ .= "$(".YH2."[aj='linknum".$_obfuscate_j5WKlJOMkIyQjoePlYuSjJEÿ."']".YH2.").text('".$_obfuscate_kJCVjoaIiYeKiI6UiYuIjYoÿ."');";
    }
    $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ = array_diff_assoc( $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ, $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ );
    if ( empty( $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ ) )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "ä½ æœªåšä»»ä½•ä¿®æ”¹ï¼" );
    }
    if ( stripos( $_SERVER['SERVER_NAME'], "v9.hphu.com" ) !== FALSE && isset( $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['linknum'] ) )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "ç¦æ­¢ä¿®æ”¹é€šé“æ•°ï¼" );
    }
    if ( isset( $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['cday'] ) )
    {
        if ( stripos( $_SERVER['SERVER_NAME'], "v9.hphu.com" ) !== FALSE && $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['level'] != 9 )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "ç¦æ­¢ä¿®æ”¹å¤©æ•°ï¼" );
        }
        $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ = $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid']( "insert into `kss_tb_log_addcday` (`pid`,`managerid`,`softid`,`addtime`,`cday`,`username`,`intro`) VALUES (".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid'].",".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['id'].",".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpEÿ.",".time( ).",".( $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['cday'] - $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['cday'] ).",'".$_obfuscate_j5WKlJOMkIyQjoePlYuSjJEÿ."','".$_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['username']."åŠ æ—¶å‰å¤©æ•°ï¼š".$_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['cday']."')", "notsync" );
        if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ !== TRUE )
        {
            $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "REPAIR TABLE `kss_tb_log_addcday`", "notsync" );
        }
    }
    $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iJOJipCPk4yQlJOMlIeTjYsÿ( "kss_z_user_".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid']."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpEÿ, $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ, "`username`='".$_obfuscate_j5WKlJOMkIyQjoePlYuSjJEÿ."'", "sync" );
    if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ === FALSE )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "ä¿å­˜æ—¶å‡ºé”™[æ‰§è¡Œupdateè¯­å¥]".$_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4ÿ( ) );
    }
    $_obfuscate_kpSQh42Tk4mRi4yRiZCGipIÿ .= "</script>";
    _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "ok".$_obfuscate_kpSQh42Tk4mRi4yRiZCGipIÿ );
}
else if ( $_obfuscate_k4mViI2Nj4mJkIuUj42JiIYÿ == "setpub" )
{
    if ( stripos( $_SERVER['SERVER_NAME'], "v9.hphu.com" ) !== FALSE && $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['level'] != 9 )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "æœåŠ¡å™¨ç¦æ­¢ä½¿ç”¨å…¬ç”¨å¸å·åŠŸèƒ½ï¼" );
    }
    $_obfuscate_kJWKkYuPko2SkZORiI6UiZMÿ = round( ( PETIME - time( ) ) / 86400 + 0.5 );
    $_obfuscate_hpWPi5KTh4qKh4qUkYePlJQÿ = PETIME - $_obfuscate_kJWKkYuPko2SkZORiI6UiZMÿ * 86400;
    $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ = $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid']( "update kss_z_user_".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid']."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpEÿ." set starttime=".$_obfuscate_hpWPi5KTh4qKh4qUkYePlJQÿ.",cday=".$_obfuscate_kJWKkYuPko2SkZORiI6UiZMÿ.",endtime=".PETIME.",linknum=1,points=0,keyextattr='' where `username`='".$_obfuscate_j5WKlJOMkIyQjoePlYuSjJEÿ."'", "sync" );
    if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ !== TRUE )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4ÿ( ) );
    }
    _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "ok" );
}
echo "<script>\r\nfunction closeat(){\r\n$(\".malertboxclosebtn\").click();\r\n}\r\n$(document).ready(function() {\t\r\n\r\n$('#setpubuser').bind(\"click\",function(){\r\nif(!confirm(\"æ³¨æ„ï¼šæ­¤æ“ä½œä¸å¯é€†ï¼\\r\\næ˜¯å¦çœŸçš„è¦å°†æ­¤å¸å·è®¾ä¸ºå…¬ç”¨å¸å·?\"))return false; \r\nvar cdurl='./admin_key.php?action=edituser&opsubmit=setpub&isajax=1&softid=";
echo $_obfuscate_jpKNh4aRh4aQkY2PlIuRhpEÿ;
echo "&keys='+encodeURIComponent('";
echo $_obfuscate_j5WKlJOMkIyQjoePlYuSjJEÿ;
echo "');\r\n$.ajax({\r\nurl: cdurl,\r\ncache: false,\r\nsuccess: function(html){\r\nif(html=='ok'){\r\nwindow.setTimeout(\"closeat()\", 1);\r\n}else{\r\nmalert(html);\r\n}\r\n},\r\nerror:function(XMLHttpRequest, textStatus, errorThrown) {\r\nalert(ourl)\r\n} \r\n});\t\t\r\n});\r\n\r\n$('#saveuser').ajaxForm({\r\nbeforeSubmit:function (arr, \$form, options) {\r\nreturn true;\r\n},\r\nsuccess:function (responseText, statusText, xhr, \$form) {\r\nif(responseText.substr(0,2)!='ok'){\r\nmalert(responseText);\r\n}else{\r\n$(\"#load__script\").append(responseText.substr(2)); \r\nwindow.setTimeout(\"closeat()\", 1);\r\n}\r\n},\r\nerror:function(){isclickadd=0;alert(\"error!\");}\r\n});\r\n});\r\n</script>\r\n<div id='load__script'></div>\r\n<form id=\"saveuser\" action=\"?action=edituser&isajax=1&softid=";
echo $_obfuscate_jpKNh4aRh4aQkY2PlIuRhpEÿ;
echo "\" method=\"post\">\r\n<table border=0  cellpadding=\"0\" cellspacing=\"0\" width='100%'>\r\n<tr><td valitn=top>\r\n<table border=0  cellpadding=\"5\" cellspacing=\"5\" >\r\n<tr>\r\n<td align=right>ç”¨æˆ·å</td>\r\n<td align=left><input class=\"longinput\" type=\"hidden\" name=\"keys\" value=\"";
echo _obfuscate_j5CKkY_GkomSkoaUlIuLlYkÿ( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['username'] );
echo "\" />";
echo _obfuscate_j5CKkY_GkomSkoaUlIuLlYkÿ( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['username'] );
echo "</td>\r\n</tr>\r\n<tr>\r\n<td align=right>ç”¨æˆ·å¯†ç </td>\r\n<td align=left><input class=\"longinput\" type=\"text\" maxlength=\"32\"  name=\"password\" value=";
if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['level'] < 8 && !_obfuscate_j4aJjo2Hi4eOlJSKk4uHk4kÿ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['powerlist'], "18" ) )
{
    echo YH2."æ— æƒæŸ¥çœ‹å’Œä¿®æ”¹".YH2." readOnly";
    echo YH2.htmlspecialchars( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['password'] ).YH2;
}
else if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['softmode'] == "KSOFT" )
{
    echo " readOnly";
}
echo " /></td>\r\n</tr>\r\n<tr>\r\n<td align=right>å®‰å…¨å¯†ç </td>\r\n<td align=left><input class=\"longinput\" type=\"text\" maxlength=\"32\" name=\"password2\" value=";
if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['level'] < 8 && !_obfuscate_j4aJjo2Hi4eOlJSKk4uHk4kÿ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['powerlist'], "13" ) )
{
    echo YH2."æ— æƒæŸ¥çœ‹å’Œä¿®æ”¹".YH2." readOnly";
    echo YH2.htmlspecialchars( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['password2'] ).YH2;
}
else if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['softmode'] == "KSOFT" )
{
    echo " readOnly";
}
echo " ></td>\r\n</tr>\r\n<tr>\r\n<td align=right>ç»‘å®šä¿¡æ¯</td>\r\n<td align=left><input class=\"longinput\" type=\"text\"  name=\"bdinfo\"";
if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['level'] < 8 && !_obfuscate_j4aJjo2Hi4eOlJSKk4uHk4kÿ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['powerlist'], "15" ) )
{
    echo " disabled";
}
echo " value=\"";
echo htmlspecialchars( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['bdinfo'], ENT_QUOTES, "UTF-8" );
echo "\" /></td>\r\n</tr>\r\n</table></td><td valign=top>\r\n<table border=0  cellpadding=\"5\" cellspacing=\"5\" >\r\n<tr>\r\n<td align=right>å¤©æ•°</td>\r\n<td align=left><input class=\"midinput\" type=\"text\" maxlength=\"6\" name=\"cday\"";
if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['level'] < 8 && !_obfuscate_j4aJjo2Hi4eOlJSKk4uHk4kÿ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['powerlist'], "12" ) )
{
    echo " disabled";
}
echo " value=\"";
echo $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['cday'];
echo "\" />\r\n+\r\n<input style=\"width:76px\" type=\"text\" maxlength=\"6\" name=\"cday_add\"";
if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['level'] < 8 && !_obfuscate_j4aJjo2Hi4eOlJSKk4uHk4kÿ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['powerlist'], "12" ) )
{
    echo " disabled";
}
echo " value=\"0\" /></td>\r\n</tr>\r\n<tr>\r\n<td align=right>ç‚¹æ•°</td>\r\n<td align=left><input class=\"longinput\" type=\"text\" maxlength=\"6\" name=\"points\"";
if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['level'] < 8 && !_obfuscate_j4aJjo2Hi4eOlJSKk4uHk4kÿ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['powerlist'], "12" ) )
{
    echo " disabled";
}
echo " value=\"";
echo $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['points'];
echo "\" /></td>\r\n</tr>\r\n<tr>\r\n<td align=right>é€šé“</td>\r\n<td align=left><input class=\"longinput\" type=\"text\" maxlength=\"4\" name=\"linknum\"";
if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['level'] < 8 && !_obfuscate_j4aJjo2Hi4eOlJSKk4uHk4kÿ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['powerlist'], "12" ) )
{
    echo " disabled";
}
echo " value=\"";
echo $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['linknum'];
echo "\" /></td>\r\n</tr>\r\n<tr>\r\n<td align=right>é™„å±æ€§</td>\r\n<td align=left><input class=\"longinput\" type=\"text\" maxlength=\"100\" name=\"keyextattr\"";
if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['level'] < 8 && !_obfuscate_j4aJjo2Hi4eOlJSKk4uHk4kÿ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['powerlist'], "16" ) )
{
    echo " disabled";
}
echo " value=\"";
echo htmlspecialchars( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['keyextattr'], ENT_QUOTES, "UTF-8" );
echo "\" /></td>\r\n</tr>\r\n</table></td></tr>\r\n<tr><td colspan=2 align=center>";
if ( 7 < $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['level'] )
{
    echo "<input type=button id=setpubuser class=submitbtn value=è®¾ä¸ºå…¬ç”¨ title='ç‚¹æ­¤æŒ‰é’®ä¼šå°†æ­¤å¸å·è®¾ä¸ºå…¬ç”¨å¸å·'>&nbsp;&nbsp;";
}
echo "<input type=submit name=opsubmit class=submitbtn value=ä¿å­˜>&nbsp;&nbsp;<span style=\"color:#0000ff\">æ“ä½œæˆåŠŸæ— æç¤ºï¼Œçª—å£ä¼šè‡ªåŠ¨å…³é—­</span></td></tr>\r\n</table>\r\n</form>";
?>
