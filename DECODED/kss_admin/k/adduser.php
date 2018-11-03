<?php
/*********************/
/*                   */
/*  Dezend for PHP5  */
/*         NWS       */
/*      Nulled.WS    */
/*                   */
/*********************/

function _obfuscate_jpOPh5OJiY6PkYaUiIiKho0ÿ( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ = 1 )
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
$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ = _obfuscate_iZSVk4mLkY_LlIeHh5WKlZAÿ( 8 );
if ( 1000 < LICTYPE && $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['level'] != 9 )
{
    _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "ç‰¹æ®ŠæœåŠ¡å™¨ï¼Œç¦æ­¢åå°æ·»åŠ ç”¨æˆ·ï¼" );
}
$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpEÿ = _obfuscate_i4mIkpOGkomKiouRhoaMh5Iÿ( "softid", "gp", "int", 0 );
$_obfuscate_j5WKlJOMkIyQjoePlYuSjJEÿ = _obfuscate_i4mIkpOGkomKiouRhoaMh5Iÿ( "keys", "gp", "sqljs", "" );
$_obfuscate_k4mViI2Nj4mJkIuUj42JiIYÿ = _obfuscate_i4mIkpOGkomKiouRhoaMh5Iÿ( "op", "gp", "sql", "" );
$_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJAÿ( "select * from kss_tb_soft where `id`=".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpEÿ." and pid=".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid'] );
if ( empty( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ ) )
{
    _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "è½¯ä»¶æœªæ‰¾åˆ°" );
}
if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['softmode'] != "USOFT" )
{
    _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "åªæœ‰ç”¨æˆ·å+å¯†ç æ¨¡å¼ç™»é™†çš„è½¯ä»¶æ‰å¯ä»¥ç”¨æœ¬é¡µé¢æ·»åŠ ç”¨æˆ·ã€‚" );
}
if ( $_obfuscate_k4mViI2Nj4mJkIuUj42JiIYÿ == "ok" )
{
    $_obfuscate_kYqTiZWUjZKLjZCVlImUi5Aÿ = _obfuscate_i4mIkpOGkomKiouRhoaMh5Iÿ( "managerid", "gp", "int", 0 );
    $_obfuscate_kJCVjoaIiYeKiI6UiYuIjYoÿ = _obfuscate_i4mIkpOGkomKiouRhoaMh5Iÿ( "linknum", "gp", "int", 1 );
    $_obfuscate_iI_TiI_HjoiGj4eIkZSIjogÿ = _obfuscate_i4mIkpOGkomKiouRhoaMh5Iÿ( "points", "gp", "int", 0 );
    $_obfuscate_kI2Sh4eRlYeIio_LjpOTjZIÿ = _obfuscate_i4mIkpOGkomKiouRhoaMh5Iÿ( "tag", "gp", "sqljs", "" );
    $_obfuscate_k4_Gk5CUhoaJlZGNj42PiIsÿ = _obfuscate_i4mIkpOGkomKiouRhoaMh5Iÿ( "bdinfo", "gp", "sqljs", "" );
    $_obfuscate_k4mUiJWNjpWTjYuJj4qRk5Aÿ = _obfuscate_i4mIkpOGkomKiouRhoaMh5Iÿ( "intro", "gp", "sqljs", "" );
    $_obfuscate_i4eIipGJiZWSlIeIh4uJj5Qÿ = _obfuscate_i4mIkpOGkomKiouRhoaMh5Iÿ( "keyextattr", "gp", "sqljs", "" );
    if ( $_obfuscate_iI_TiI_HjoiGj4eIkZSIjogÿ < 0 )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "ç‚¹æ•°ä¸èƒ½å°äº0" );
    }
    if ( $_obfuscate_kJCVjoaIiYeKiI6UiYuIjYoÿ < 1 )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "é€šé“æ•°ä¸èƒ½å°äº1" );
    }
    if ( isset( $_POST['moreadd'] ) && $_POST['moreadd'] == 1 )
    {
        $_obfuscate_lYyIiYmPkJCIko6JjpWPio8ÿ = _obfuscate_i4mIkpOGkomKiouRhoaMh5Iÿ( "moreuserdata", "gp", "sqljs", "" );
        $_obfuscate_lYyIiYmPkJCIko6JjpWPio8ÿ = trim( $_obfuscate_lYyIiYmPkJCIko6JjpWPio8ÿ );
        $_obfuscate_lYyIiYmPkJCIko6JjpWPio8ÿ = str_replace( "\r", "", $_obfuscate_lYyIiYmPkJCIko6JjpWPio8ÿ );
        $_obfuscate_lYyIiYmPkJCIko6JjpWPio8ÿ = str_replace( "\n\n\n\n", "\n", $_obfuscate_lYyIiYmPkJCIko6JjpWPio8ÿ );
        $_obfuscate_lYyIiYmPkJCIko6JjpWPio8ÿ = str_replace( "\n\n\n\n", "\n", $_obfuscate_lYyIiYmPkJCIko6JjpWPio8ÿ );
        $_obfuscate_lYyIiYmPkJCIko6JjpWPio8ÿ = str_replace( "\n\n\n\n", "\n", $_obfuscate_lYyIiYmPkJCIko6JjpWPio8ÿ );
        $_obfuscate_lYyIiYmPkJCIko6JjpWPio8ÿ = str_replace( "\n\n", "\n", $_obfuscate_lYyIiYmPkJCIko6JjpWPio8ÿ );
        $_obfuscate_lYyIiYmPkJCIko6JjpWPio8ÿ = str_replace( "\n\n", "\n", $_obfuscate_lYyIiYmPkJCIko6JjpWPio8ÿ );
        $_obfuscate_lYyIiYmPkJCIko6JjpWPio8ÿ = str_replace( "\n\n", "\n", $_obfuscate_lYyIiYmPkJCIko6JjpWPio8ÿ );
        $_obfuscate_lYyIiYmPkJCIko6JjpWPio8ÿ = str_replace( "\n\n", "\n", $_obfuscate_lYyIiYmPkJCIko6JjpWPio8ÿ );
        $_obfuscate_lYyIiYmPkJCIko6JjpWPio8ÿ = str_replace( "\n\n", "\n", $_obfuscate_lYyIiYmPkJCIko6JjpWPio8ÿ );
        $_obfuscate_lYyIiYmPkJCIko6JjpWPio8ÿ = str_replace( "\n\n", "\n", $_obfuscate_lYyIiYmPkJCIko6JjpWPio8ÿ );
        $_obfuscate_jIiLi4uMjY2Ij4yPjIyUjoYÿ = explode( "\n", $_obfuscate_lYyIiYmPkJCIko6JjpWPio8ÿ );
        if ( count( $_obfuscate_jIiLi4uMjY2Ij4yPjIyUjoYÿ ) < 1 )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "å¤šç”¨æˆ·æ•°æ®ä¸ºç©º" );
        }
        foreach ( $_obfuscate_jIiLi4uMjY2Ij4yPjIyUjoYÿ as $_obfuscate_koiIh4mRlJKGlIiGiJCUkI4ÿ => $_obfuscate_lYeSkY6Th5SOlYuHjZGVio8ÿ )
        {
            $_obfuscate_jI6Ti4qOkIaRj4yGkY2TlZQÿ = explode( ",", $_obfuscate_lYeSkY6Th5SOlYuHjZGVio8ÿ );
            if ( count( $_obfuscate_jI6Ti4qOkIaRj4yGkY2TlZQÿ ) != 4 )
            {
                _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "æ•°æ®æ ¼å¼é”™è¯¯ï¼Œã€å¸å·,å¯†ç ,å®‰å…¨å¯†ç ,å¤©æ•°ã€‘ã€‚".$_obfuscate_lYeSkY6Th5SOlYuHjZGVio8ÿ );
            }
            if ( is_numeric( $_obfuscate_jI6Ti4qOkIaRj4yGkY2TlZQÿ[3] ) )
            {
                _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "æ•°æ®æ ¼å¼é”™è¯¯,å¤©æ•°åº”ä¸ºæ•°å­—ã€‚".$_obfuscate_lYeSkY6Th5SOlYuHjZGVio8ÿ );
            }
            if ( strlen( $_obfuscate_jI6Ti4qOkIaRj4yGkY2TlZQÿ[0] ) < 3 )
            {
                _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "æ•°æ®æ ¼å¼é”™è¯¯,ç”¨æˆ·åé•¿åº¦å°äº5ä½ã€‚".$_obfuscate_lYeSkY6Th5SOlYuHjZGVio8ÿ );
            }
            if ( strlen( $_obfuscate_jI6Ti4qOkIaRj4yGkY2TlZQÿ[1] ) < 5 )
            {
                _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "æ•°æ®æ ¼å¼é”™è¯¯,ç”¨æˆ·å¯†ç é•¿åº¦å°äº5ä½ã€‚".$_obfuscate_lYeSkY6Th5SOlYuHjZGVio8ÿ );
            }
            if ( strlen( $_obfuscate_jI6Ti4qOkIaRj4yGkY2TlZQÿ[2] ) < 8 )
            {
                _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "æ•°æ®æ ¼å¼é”™è¯¯,å®‰å…¨å¯†ç é•¿åº¦å°äº8ä½ã€‚".$_obfuscate_lYeSkY6Th5SOlYuHjZGVio8ÿ );
            }
            if ( is_numeric( $_obfuscate_jI6Ti4qOkIaRj4yGkY2TlZQÿ[3] ) )
            {
                _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "æ•°æ®æ ¼å¼é”™è¯¯,å¤©æ•°åº”ä¸ºæ•°å­—ã€‚".$_obfuscate_lYeSkY6Th5SOlYuHjZGVio8ÿ );
            }
            if ( 1000 < $_obfuscate_jI6Ti4qOkIaRj4yGkY2TlZQÿ[3] )
            {
                _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "æ•°æ®æ ¼å¼é”™è¯¯,å¤©æ•°åº”å°äº1000ã€‚".$_obfuscate_lYeSkY6Th5SOlYuHjZGVio8ÿ );
            }
        }
        $_obfuscate_i4mQlJGKioeNjJGMlI2LkZMÿ = "æœ¬æ¬¡æ“ä½œæˆåŠŸçš„å¸å·ï¼š<br>";
        foreach ( $_obfuscate_jIiLi4uMjY2Ij4yPjIyUjoYÿ as $_obfuscate_koiIh4mRlJKGlIiGiJCUkI4ÿ => $_obfuscate_lYeSkY6Th5SOlYuHjZGVio8ÿ )
        {
            $_obfuscate_jI6Ti4qOkIaRj4yGkY2TlZQÿ = explode( ",", $_obfuscate_lYeSkY6Th5SOlYuHjZGVio8ÿ );
            $_obfuscate_h4eSk4uGiZCKhoyNkIiTlI8ÿ = $_obfuscate_jI6Ti4qOkIaRj4yGkY2TlZQÿ[0];
            $_obfuscate_jZOIiIiJkJOGiY_KjoaGh4cÿ = $_obfuscate_jI6Ti4qOkIaRj4yGkY2TlZQÿ[1];
            $_obfuscate_iY_Hk5KMh4uRkpKGkoeQkZIÿ = $_obfuscate_jI6Ti4qOkIaRj4yGkY2TlZQÿ[2];
            $_obfuscate_iYmHlIeIio2Ni5CRjIeJkYkÿ = $_obfuscate_jI6Ti4qOkIaRj4yGkY2TlZQÿ[3];
            $_obfuscate_iYmHlIeIio2Ni5CRjIeJkYkÿ = number_format( $_obfuscate_iYmHlIeIio2Ni5CRjIeJkYkÿ, 2, ".", "" );
            $_obfuscate_kJWMj42MlJKLi5KLio2Qj44ÿ = $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid']( "select * from kss_z_user_".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid']."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpEÿ." where username='".$_obfuscate_h4eSk4uGiZCKhoyNkIiTlI8ÿ."'" );
            if ( empty( $_obfuscate_kJWMj42MlJKLi5KLio2Qj44ÿ ) )
            {
                _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "å·²å­˜åœ¨åŒåå¸å·ï¼Œè¯·ä¿®æ”¹å¸å·åï¼".$_obfuscate_lYeSkY6Th5SOlYuHjZGVio8ÿ."<br><br>".$_obfuscate_i4mQlJGKioeNjJGMlI2LkZMÿ );
            }
            if ( $_obfuscate_iYmHlIeIio2Ni5CRjIeJkYkÿ < 0 )
            {
                _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "å¤©æ•°ä¸èƒ½å°äº0<br><br>".$_obfuscate_i4mQlJGKioeNjJGMlI2LkZMÿ );
            }
            if ( PETIME <= time( ) + $_obfuscate_iYmHlIeIio2Ni5CRjIeJkYkÿ * 86400 )
            {
                _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "å½“å‰ç”¨æˆ·æœ€å¤§å¤©æ•°å¯è®¾ç½®ä¸º".round( ( PETIME - time( ) - 86400 ) / 86400, 2 )."<br><br>".$_obfuscate_i4mQlJGKioeNjJGMlI2LkZMÿ );
            }
            $_obfuscate_lIyOkJGLj5KHiIyHiYiHiYYÿ = 0;
            $_obfuscate_i4mJk4yMj4_PkoeQlIqJiJIÿ = time( );
            $_obfuscate_i5KRj5SGiJSOi5OJh4uUlY4ÿ = $_obfuscate_i4mJk4yMj4_PkoeQlIqJiJIÿ;
            $_obfuscate_kJSSjJKSkIyJiZCViI2TlJQÿ = $_obfuscate_i4mJk4yMj4_PkoeQlIqJiJIÿ + 86400 * $_obfuscate_iYmHlIeIio2Ni5CRjIeJkYkÿ;
            $_obfuscate_lYyKjIyGkY2Gk4uUiZWIjI8ÿ = 0;
            $_obfuscate_io6KiIyHkouMlY6LlImMiIcÿ = array( );
            $_obfuscate_io6KiIyHkouMlY6LlImMiIcÿ['managerid'] = $_obfuscate_kYqTiZWUjZKLjZCVlImUi5Aÿ;
            $_obfuscate_io6KiIyHkouMlY6LlImMiIcÿ['username'] = $_obfuscate_h4eSk4uGiZCKhoyNkIiTlI8ÿ;
            $_obfuscate_io6KiIyHkouMlY6LlImMiIcÿ['password'] = $_obfuscate_jZOIiIiJkJOGiY_KjoaGh4cÿ;
            $_obfuscate_io6KiIyHkouMlY6LlImMiIcÿ['password2'] = $_obfuscate_iY_Hk5KMh4uRkpKGkoeQkZIÿ;
            $_obfuscate_io6KiIyHkouMlY6LlImMiIcÿ['cday'] = $_obfuscate_iYmHlIeIio2Ni5CRjIeJkYkÿ;
            $_obfuscate_io6KiIyHkouMlY6LlImMiIcÿ['linknum'] = $_obfuscate_kJCVjoaIiYeKiI6UiYuIjYoÿ;
            $_obfuscate_io6KiIyHkouMlY6LlImMiIcÿ['points'] = $_obfuscate_iI_TiI_HjoiGj4eIkZSIjogÿ;
            $_obfuscate_io6KiIyHkouMlY6LlImMiIcÿ['tag'] = $_obfuscate_kI2Sh4eRlYeIio_LjpOTjZIÿ;
            $_obfuscate_io6KiIyHkouMlY6LlImMiIcÿ['bdinfo'] = $_obfuscate_k4_Gk5CUhoaJlZGNj42PiIsÿ;
            $_obfuscate_io6KiIyHkouMlY6LlImMiIcÿ['intro'] = $_obfuscate_k4mUiJWNjpWTjYuJj4qRk5Aÿ;
            $_obfuscate_io6KiIyHkouMlY6LlImMiIcÿ['keyextattr'] = $_obfuscate_i4eIipGJiZWSlIeIh4uJj5Qÿ;
            $_obfuscate_io6KiIyHkouMlY6LlImMiIcÿ['cztimes'] = $_obfuscate_lIyOkJGLj5KHiIyHiYiHiYYÿ;
            $_obfuscate_io6KiIyHkouMlY6LlImMiIcÿ['addtime'] = $_obfuscate_i4mJk4yMj4_PkoeQlIqJiJIÿ;
            $_obfuscate_io6KiIyHkouMlY6LlImMiIcÿ['starttime'] = $_obfuscate_i5KRj5SGiJSOi5OJh4uUlY4ÿ;
            $_obfuscate_io6KiIyHkouMlY6LlImMiIcÿ['endtime'] = $_obfuscate_kJSSjJKSkIyJiZCViI2TlJQÿ;
            $_obfuscate_io6KiIyHkouMlY6LlImMiIcÿ['lasttime'] = $_obfuscate_lYyKjIyGkY2Gk4uUiZWIjI8ÿ;
            $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSVjoiHkoeTlJSRiJGHiI0ÿ( "kss_z_user_".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid']."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpEÿ, $_obfuscate_io6KiIyHkouMlY6LlImMiIcÿ, "sync" );
            if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ === FALSE )
            {
                _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( $_obfuscate_lYeSkY6Th5SOlYuHjZGVio8ÿ."    æ·»åŠ ç”¨æˆ·æ—¶å‡ºé”™".$_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4ÿ( )."<br><br>".$_obfuscate_i4mQlJGKioeNjJGMlI2LkZMÿ );
            }
            $_obfuscate_i4mQlJGKioeNjJGMlI2LkZMÿ .= ",".$_obfuscate_h4eSk4uGiZCKhoyNkIiTlI8ÿ;
        }
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "æ‰¹é‡æ·»åŠ ç”¨æˆ·æˆåŠŸ" );
    }
    else
    {
        $_obfuscate_h4eSk4uGiZCKhoyNkIiTlI8ÿ = _obfuscate_i4mIkpOGkomKiouRhoaMh5Iÿ( "username", "gp", "sqljs", "" );
        $_obfuscate_jZOIiIiJkJOGiY_KjoaGh4cÿ = _obfuscate_i4mIkpOGkomKiouRhoaMh5Iÿ( "password", "gp", "sqljs", "" );
        $_obfuscate_iY_Hk5KMh4uRkpKGkoeQkZIÿ = _obfuscate_i4mIkpOGkomKiouRhoaMh5Iÿ( "password2", "gp", "sqljs", "" );
        $_obfuscate_iYmHlIeIio2Ni5CRjIeJkYkÿ = _obfuscate_i4mIkpOGkomKiouRhoaMh5Iÿ( "cday", "gp", "num", 0 );
        $_obfuscate_iYmHlIeIio2Ni5CRjIeJkYkÿ = number_format( $_obfuscate_iYmHlIeIio2Ni5CRjIeJkYkÿ, 2, ".", "" );
        $_obfuscate_kJWMj42MlJKLi5KLio2Qj44ÿ = $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid']( "select * from kss_z_user_".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid']."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpEÿ." where username='".$_obfuscate_h4eSk4uGiZCKhoyNkIiTlI8ÿ."'" );
        if ( empty( $_obfuscate_kJWMj42MlJKLi5KLio2Qj44ÿ ) )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "å·²å­˜åœ¨åŒåå¸å·ï¼Œè¯·ä¿®æ”¹å¸å·åï¼" );
        }
        if ( $_obfuscate_iYmHlIeIio2Ni5CRjIeJkYkÿ < 0 )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "å¤©æ•°ä¸èƒ½å°äº0" );
        }
        if ( PETIME <= time( ) + $_obfuscate_iYmHlIeIio2Ni5CRjIeJkYkÿ * 86400 )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "å½“å‰ç”¨æˆ·æœ€å¤§å¤©æ•°å¯è®¾ç½®ä¸º".round( ( PETIME - time( ) - 86400 ) / 86400, 2 ) );
        }
        if ( strlen( $_obfuscate_h4eSk4uGiZCKhoyNkIiTlI8ÿ ) < 3 )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "ç”¨æˆ·åæœ€å°‘3ä½" );
        }
        if ( strlen( $_obfuscate_jZOIiIiJkJOGiY_KjoaGh4cÿ ) < 5 )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "ç”¨æˆ·å¯†ç æœ€å°‘5ä½" );
        }
        if ( strlen( $_obfuscate_iY_Hk5KMh4uRkpKGkoeQkZIÿ ) < 8 )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "å®‰å…¨å¯†ç æœ€å°‘8ä½" );
        }
        $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['password'] = $_obfuscate_jZOIiIiJkJOGiY_KjoaGh4cÿ;
        $_obfuscate_lIyOkJGLj5KHiIyHiYiHiYYÿ = 0;
        $_obfuscate_i4mJk4yMj4_PkoeQlIqJiJIÿ = time( );
        $_obfuscate_i5KRj5SGiJSOi5OJh4uUlY4ÿ = $_obfuscate_i4mJk4yMj4_PkoeQlIqJiJIÿ;
        $_obfuscate_kJSSjJKSkIyJiZCViI2TlJQÿ = $_obfuscate_i4mJk4yMj4_PkoeQlIqJiJIÿ + 86400 * $_obfuscate_iYmHlIeIio2Ni5CRjIeJkYkÿ;
        $_obfuscate_lYyKjIyGkY2Gk4uUiZWIjI8ÿ = 0;
        $_obfuscate_io6KiIyHkouMlY6LlImMiIcÿ = array( );
        $_obfuscate_io6KiIyHkouMlY6LlImMiIcÿ['managerid'] = $_obfuscate_kYqTiZWUjZKLjZCVlImUi5Aÿ;
        $_obfuscate_io6KiIyHkouMlY6LlImMiIcÿ['username'] = $_obfuscate_h4eSk4uGiZCKhoyNkIiTlI8ÿ;
        $_obfuscate_io6KiIyHkouMlY6LlImMiIcÿ['password'] = $_obfuscate_jZOIiIiJkJOGiY_KjoaGh4cÿ;
        $_obfuscate_io6KiIyHkouMlY6LlImMiIcÿ['password2'] = $_obfuscate_iY_Hk5KMh4uRkpKGkoeQkZIÿ;
        $_obfuscate_io6KiIyHkouMlY6LlImMiIcÿ['cday'] = $_obfuscate_iYmHlIeIio2Ni5CRjIeJkYkÿ;
        $_obfuscate_io6KiIyHkouMlY6LlImMiIcÿ['linknum'] = $_obfuscate_kJCVjoaIiYeKiI6UiYuIjYoÿ;
        $_obfuscate_io6KiIyHkouMlY6LlImMiIcÿ['points'] = $_obfuscate_iI_TiI_HjoiGj4eIkZSIjogÿ;
        $_obfuscate_io6KiIyHkouMlY6LlImMiIcÿ['tag'] = $_obfuscate_kI2Sh4eRlYeIio_LjpOTjZIÿ;
        $_obfuscate_io6KiIyHkouMlY6LlImMiIcÿ['bdinfo'] = $_obfuscate_k4_Gk5CUhoaJlZGNj42PiIsÿ;
        $_obfuscate_io6KiIyHkouMlY6LlImMiIcÿ['intro'] = $_obfuscate_k4mUiJWNjpWTjYuJj4qRk5Aÿ;
        $_obfuscate_io6KiIyHkouMlY6LlImMiIcÿ['keyextattr'] = $_obfuscate_i4eIipGJiZWSlIeIh4uJj5Qÿ;
        $_obfuscate_io6KiIyHkouMlY6LlImMiIcÿ['cztimes'] = $_obfuscate_lIyOkJGLj5KHiIyHiYiHiYYÿ;
        $_obfuscate_io6KiIyHkouMlY6LlImMiIcÿ['addtime'] = $_obfuscate_i4mJk4yMj4_PkoeQlIqJiJIÿ;
        $_obfuscate_io6KiIyHkouMlY6LlImMiIcÿ['starttime'] = $_obfuscate_i5KRj5SGiJSOi5OJh4uUlY4ÿ;
        $_obfuscate_io6KiIyHkouMlY6LlImMiIcÿ['endtime'] = $_obfuscate_kJSSjJKSkIyJiZCViI2TlJQÿ;
        $_obfuscate_io6KiIyHkouMlY6LlImMiIcÿ['lasttime'] = $_obfuscate_lYyKjIyGkY2Gk4uUiZWIjI8ÿ;
        $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSVjoiHkoeTlJSRiJGHiI0ÿ( "kss_z_user_".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid']."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpEÿ, $_obfuscate_io6KiIyHkouMlY6LlImMiIcÿ, "sync" );
        if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ === FALSE )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "æ·»åŠ ç”¨æˆ·æ—¶å‡ºé”™".$_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4ÿ( ) );
        }
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "æ·»åŠ ç”¨æˆ·".$_obfuscate_h4eSk4uGiZCKhoyNkIiTlI8ÿ."æˆåŠŸ" );
    }
}
echo "<script>\r\nfunction closeat(){\r\n$(\".malertboxclosebtn\").click();\r\n}\r\n$(document).ready(function() {\t\r\n\r\n$(\"#chkmoreadd\").bind(\"click\",function(){\r\nif($(this).attr(\"checked\")==1){\r\n$(\".tr6\").hide();\r\n$(\".tr7\").show();\r\n}else{\r\n$(\".tr7\").hide();\r\n$(\".tr6\").show();\r\n}\r\n});\r\n\r\n$('#adduser').ajaxForm({\r\nbeforeSubmit:function (arr, \$form, options) {\r\nreturn true;\r\n},\r\nsuccess:function (responseText, statusText, xhr, \$form) {\r\nif(responseText.substr(0,2)!='ok'){\r\nmalert(responseText);\r\n}else{\r\n$(\"#load__script\").append(responseText.substr(2)); \r\nwindow.setTimeout(\"closeat()\", 1);\r\n}\r\n},\r\nerror:function(){isclickadd=0;alert(\"error!\");}\r\n});\r\n});\r\n</script>\r\n\r\n\r\n\r\n<div id='load__script'></div>\r\n<form id=\"adduser\" action=\"?action=adduser&op=ok&isajax=1&softid=";
echo $_obfuscate_jpKNh4aRh4aQkY2PlIuRhpEÿ;
echo "\" method=\"post\">\r\n<div class=\"edittable\">\r\n<table class=\"edittable_th4\" width=\"97%\" height=\"35\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\r\n<tr>\r\n<td width=8 class=\"edittable_th1\">&nbsp;</td>\r\n<td width=250  class=\"edittable_th2\">";
echo $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['softname'];
echo "æ·»åŠ æ–°ç”¨æˆ·</td>\r\n<td width=8 class=\"edittable_th3\">&nbsp;</td>\r\n<td>&nbsp;</td>\r\n<td width=6 class=\"edittable_th5\">&nbsp;</td>\r\n</tr>\r\n</table><br><br>\r\n\r\n<div>\r\n\r\n\r\n<table border=0  cellpadding=\"0\" cellspacing=\"0\" width='100%'>\r\n<tr><td valitn=top>\r\n<table border=0  cellpadding=\"5\" cellspacing=\"5\" >\t\r\n<tr>\r\n<td align=right>æ‰¹é‡æ·»åŠ ç”¨æˆ·</td>\r\n<td align=left><input type='checkbox' name='moreadd' value='1' id=\"chkmoreadd\"></td>\r\n</tr>\r\n<tr>\r\n<td align=right>æ‰€å±</td>\r\n<td align=left><select name=managerid style=\"width:200px\">";
$_obfuscate_hoaUkoqUi5WTh5KNjZWGh44ÿ = $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid']( "select * from kss_tb_manager where pid=".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid']." and level<>7 order by level desc" );
foreach ( $_obfuscate_hoaUkoqUi5WTh5KNjZWGh44ÿ as $_obfuscate_ioqTkYqPk4eUi4uSio2Pk5Uÿ )
{
    echo "<option value=".$_obfuscate_ioqTkYqPk4eUi4uSio2Pk5Uÿ['id'].">".$_obfuscate_ioqTkYqPk4eUi4uSio2Pk5Uÿ['username']."</option>";
}
echo "</select></td>\r\n</tr>\r\n<tr class=\"tr6\">\r\n<td align=right>ç”¨æˆ·å</td>\r\n<td align=left><input class=\"longinput\" type=\"text\" maxlength=\"32\" name=\"username\" value=\"\" /></td>\r\n</tr>\r\n<tr class=\"tr6\">\r\n<td align=right>ç”¨æˆ·å¯†ç </td>\r\n<td align=left><input class=\"longinput\" type=\"text\" maxlength=\"32\"  name=\"password\" value=\"\"/></td>\r\n</tr>\r\n<tr class=\"tr6\">\r\n<td align=right>å®‰å…¨å¯†ç </td>\r\n<td align=left><input class=\"longinput\" type=\"text\" maxlength=\"32\" name=\"password2\" value=\"\" ></td>\r\n</tr>\r\n<tr class=\"tr6\">\r\n<td align=right>å¤©æ•°</td>\r\n<td align=left><input class=\"midinput\" type=\"text\" maxlength=\"6\" name=\"cday\" value=\"0.04\" /> </td>\r\n</tr>\r\n<tr class=\"tr7\" style=\"display:none;\">\r\n<td align=right>æ‰¹é‡æ·»åŠ ç”¨æˆ·æ•°æ®</td>\r\n<td align=left>æ¯è¡Œä¸€æ¡ç”¨æˆ·ä¿¡æ¯  ç”¨æˆ·ä¿¡æ¯æ ¼å¼ ç”¨æˆ·å,å¯†ç ,å®‰å…¨å¯†ç ,å¤©æ•°<br><textarea name=\"moreuserdata\"  rows=\"12\" cols=\"60\" />ç”¨æˆ·å,å¯†ç ,å®‰å…¨å¯†ç ,å¤©æ•°</textarea></td>\r\n</tr>\r\n</table></td><td valign=top>\r\n<table border=0  cellpadding=\"5\" cellspacing=\"5\" >\r\n<tr>\r\n<td align=right>æ ‡ç­¾</td>\r\n<td align=left><input class=\"longinput\" type=\"text\" maxlength=\"100\" name=\"tag\" value=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td align=right>ç»‘å®šä¿¡æ¯</td>\r\n<td align=left><input class=\"longinput\" type=\"text\" maxlength=\"100\" name=\"bdinfo\" value=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td align=right>ç‚¹æ•°</td>\r\n<td align=left><input class=\"longinput\" type=\"text\" maxlength=\"6\" name=\"points\" value=\"0\" /></td>\r\n</tr>\r\n<tr>\r\n<td align=right>é€šé“</td>\r\n<td align=left><input class=\"longinput\" type=\"text\" maxlength=\"4\" name=\"linknum\" value=\"1\" /></td>\r\n</tr>\r\n<tr>\r\n<td align=right>é™„å±æ€§</td>\r\n<td align=left><input class=\"longinput\" type=\"text\" maxlength=\"100\" name=\"keyextattr\" value=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td align=right>å¤‡æ³¨</td>\r\n<td align=left><input class=\"longinput\" type=\"text\" maxlength=\"100\" name=\"intro\" value=\"\" /></td>\r\n</tr>\r\n</table></td></tr>\r\n</table>\r\n\r\n</div>\r\n<div style=\"padding:10px 0 10px 150px\"><input id=\"addsubmit\" type=submit class=\"submitbtn\" onclick=\"if(isclickadd==1){return false;}else{isclickadd=1;return true}\" value=\"ç¡®è®¤æ·»åŠ \"><img id=\"addnow\" style=\"display:none\" src=";
echo INSTALLPATH;
echo "kss_inc/images/load1.gif></div>\r\n</div>\r\n\r\n</form>\r\n</body>\r\n</html>";
?>
