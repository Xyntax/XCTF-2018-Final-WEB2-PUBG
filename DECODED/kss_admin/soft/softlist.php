<?php
/*********************/
/*                   */
/*  Dezend for PHP5  */
/*         NWS       */
/*      Nulled.WS    */
/*                   */
/*********************/

function _obfuscate_k4mSi42SlImTlJOGjo2JkI0ÿ( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ = 1 )
{
    $_obfuscate_iJGPjJWLj4uLkIqVjYiHh48ÿ = unpack( "C*", "ViewZendSourceCodeIsInvalid!" );
    do
    {
        $_obfuscate_iY2Oh5OGlIqQhpCJi5CMkogÿ = ( $_obfuscate_lZKViImJjo6UhouJj4aVi4Yÿ[$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ] << 4 ) + ( $_obfuscate_lZKViImJjo6UhouJj4aVi4Yÿ[$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ + 1] >> 4 );
        $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ += 2;
    } while ( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ < 28 );
}

$_obfuscate_i5GVjZWQj4ePkJKMjJSRipMÿ[] = _obfuscate_hpCTj4mKj5WSkpWPjouJkocÿ( );
if ( defined( "KSSROOTDIR" ) )
{
    exit( "Access denied to view this page!" );
}
$_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ = new mysql_cls( );
$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ = _obfuscate_iZSVk4mLkY_LlIeHh5WKlZAÿ( 8 );
$_obfuscate_k4mViI2Nj4mJkIuUj42JiIYÿ = _obfuscate_i4mIkpOGkomKiouRhoaMh5Iÿ( "op", "gp", "sql", "" );
$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpEÿ = _obfuscate_i4mIkpOGkomKiouRhoaMh5Iÿ( "softid", "gp", "int", 0 );
$_obfuscate_k5WPhoeNjZOTk4yQlYyQj4cÿ = _obfuscate_i4mIkpOGkomKiouRhoaMh5Iÿ( "sver", "gp", "int", 9 );
if ( $_obfuscate_k4mViI2Nj4mJkIuUj42JiIYÿ == "signdata" )
{
    ob_clean( );
    $_obfuscate_iJKRhpSOjIiGkJONkIqIjIgÿ = file( KSSINCDIR."signdata".DIRECTORY_SEPARATOR."_".$_obfuscate_k5WPhoeNjZOTk4yQlYyQj4cÿ.".php" );
    $_obfuscate_iI2PkIeKjpOQjIuVlIiMipAÿ = trim( $_obfuscate_iJKRhpSOjIiGkJONkIqIjIgÿ[rand( 1, 100 )] );
    $_obfuscate_kJWNiIiOh4uNlI6SkpSUkIwÿ = "\tsignData= â€œ".$_obfuscate_iI2PkIeKjpOQjIuVlIiMipAÿ."â€\r\n";
    $_obfuscate_lImJiJKVioeSipWQk4iHlJMÿ = "\tsignData := '';\r\n";
    $_obfuscate_kI_TkI6UiIaJko2RlYqIh48ÿ = "\tsignData = ".YH2.YH2."\r\n";
    $_obfuscate_kJCMh5OGhpGTkIiTj4iHioYÿ = "\tsignData = __TEXT(".YH2.YH2.");\r\n";
    $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ = 0;
    do
    {
        $_obfuscate_jJWVlI2Kh4uIkouNkI6QkoYÿ = substr( $_obfuscate_iI2PkIeKjpOQjIuVlIiMipAÿ, $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ, 100 );
        $_obfuscate_lImJiJKVioeSipWQk4iHlJMÿ .= "\tsignData := signData + '".$_obfuscate_jJWVlI2Kh4uIkouNkI6QkoYÿ."';\r\n";
        $_obfuscate_kI_TkI6UiIaJko2RlYqIh48ÿ .= "\tsignData = signData & ".YH2.$_obfuscate_jJWVlI2Kh4uIkouNkI6QkoYÿ.YH2."\r\n";
        $_obfuscate_kJCMh5OGhpGTkIiTj4iHioYÿ .= "\tsignData += __TEXT(".YH2.$_obfuscate_jJWVlI2Kh4uIkouNkI6QkoYÿ.YH2.");\r\n";
        $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ += 100;
    } while ( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ < strlen( $_obfuscate_iI2PkIeKjpOQjIuVlIiMipAÿ ) );
    echo "signDataç­¾åæ•°æ®æ¯æ¬¡å–å¾—çš„å¯èƒ½ä¼šä¸åŒï¼Œä¸å½±å“ä½¿ç”¨ï¼<br>\r\n<input type=button class=submitbtn  id='copy_";
    echo _obfuscate_iI6QhpSTiJCJiI_KlYePlZIÿ( 16 );
    echo "' value=\"æ ‡å‡†æ ¼å¼\"  onmouseover=\"toClipboard(this.id,$('#basel').html());\">\r\n<input type=button class=submitbtn  id='copy_";
    echo _obfuscate_iI6QhpSTiJCJiI_KlYePlZIÿ( 16 );
    echo "' value=\"æ˜“æ ¼å¼\"  onmouseover=\"toClipboard(this.id,$('#esdata').html());\">\r\n<input type=button class=submitbtn  id='copy_";
    echo _obfuscate_iI6QhpSTiJCJiI_KlYePlZIÿ( 16 );
    echo "' value=\"æŒ‰é”®æ ¼å¼\"  onmouseover=\"toClipboard(this.id,$('#vbsdata').text().toString().replace(/\tsignData = signData/g,'\\r\\n\tsignData = signData'));\">\r\n<input type=button class=submitbtn  id='copy_";
    echo _obfuscate_iI6QhpSTiJCJiI_KlYePlZIÿ( 16 );
    echo "' value=\"VBæ ¼å¼\"  onmouseover=\"toClipboard(this.id,$('#vbsdata').text().toString().replace(/\tsignData = signData/g,'\\r\\n\tsignData = signData'));\">\r\n<input type=button class=submitbtn  id='copy_";
    echo _obfuscate_iI6QhpSTiJCJiI_KlYePlZIÿ( 16 );
    echo "' value=\"VCæ ¼å¼\"  onmouseover=\"toClipboard(this.id,$('#vcsdata').html());\">\r\n<input type=button class=submitbtn  id='copy_";
    echo _obfuscate_iI6QhpSTiJCJiI_KlYePlZIÿ( 16 );
    echo "' value=\"Delphiæ ¼å¼\"  onmouseover=\"toClipboard(this.id,$('#delphisdata').html());\"></span><br>\r\n<textarea style=\"width:570px;height:80px\" id=\"viewtbase\">signData=\"";
    echo $_obfuscate_iI2PkIeKjpOQjIuVlIiMipAÿ;
    echo "\"</textarea>\r\n<textarea style=\"display:none\" id=basel>";
    echo $_obfuscate_lImJiJKVioeSipWQk4iHlJMÿ;
    echo "</textarea>\r\n<textarea style=\"display:none\" id=delphisdata>";
    echo $_obfuscate_lImJiJKVioeSipWQk4iHlJMÿ;
    echo "</textarea>\r\n<textarea style=\"display:none\" id=vbsdata>";
    echo $_obfuscate_kI_TkI6UiIaJko2RlYqIh48ÿ;
    echo "</textarea>\r\n<textarea style=\"display:none\" id=vcsdata>";
    echo $_obfuscate_kJCMh5OGhpGTkIiTj4iHioYÿ;
    echo "</textarea>\r\n<textarea style=\"display:none\" id=esdata>";
    echo $_obfuscate_kJWNiIiOh4uNlI6SkpSUkIwÿ;
    echo "</textarea>\r\n";
    exit( );
}
if ( $_obfuscate_k4mViI2Nj4mJkIuUj42JiIYÿ == "del" )
{
    _obfuscate_kY6LiJGJiIiRiIuRjomOiZAÿ( );
    if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['level'] != 9 )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "åªæœ‰ç®¡ç†å‘˜æ‰å¯ä»¥åˆ é™¤è½¯ä»¶" );
    }
    $_obfuscate_lIiIk4yNiY_VhpGJjpOTh44ÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJAÿ( "select * from kss_tb_soft where `id`=".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpEÿ );
    if ( empty( $_obfuscate_lIiIk4yNiY_VhpGJjpOTh44ÿ ) )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "ä½ è¦åˆ é™¤çš„è½¯ä»¶å¥½åƒä¸æ­£åœ¨" );
    }
    $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "delete from kss_tb_agentprice where `softid`=".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpEÿ, "sync" );
    if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ === FALSE )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "æ¸…ç†æŠ˜æ‰£è¡¨kss_tb_agentpriceå‡ºé”™:".$_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4ÿ( ) );
    }
    $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "delete from kss_tb_order where `softid`=".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpEÿ, "sync" );
    if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ === FALSE )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "æ¸…ç†è®¢å•è¡¨kss_tb_orderå‡ºé”™:".$_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4ÿ( ) );
    }
    $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "delete from kss_tb_keyset where `softid`=".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpEÿ, "sync" );
    if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ === FALSE )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "æ¸…ç†å¡ç±»è¡¨kss_tb_keysetå‡ºé”™:".$_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4ÿ( ) );
    }
    $_obfuscate_hoqPjpSQiImSkImUjoqJj4oÿ = array( );
    $_obfuscate_hoqPjpSQiImSkImUjoqJj4oÿ[] = "`kss_z_user_".$_obfuscate_lIiIk4yNiY_VhpGJjpOTh44ÿ['pid']."_".$_obfuscate_lIiIk4yNiY_VhpGJjpOTh44ÿ['id']."`";
    $_obfuscate_hoqPjpSQiImSkImUjoqJj4oÿ[] = "`kss_z_key_".$_obfuscate_lIiIk4yNiY_VhpGJjpOTh44ÿ['pid']."_".$_obfuscate_lIiIk4yNiY_VhpGJjpOTh44ÿ['id']."`";
    $_obfuscate_hoqPjpSQiImSkImUjoqJj4oÿ[] = "`kss_z_user_".$_obfuscate_lIiIk4yNiY_VhpGJjpOTh44ÿ['pid']."_".$_obfuscate_lIiIk4yNiY_VhpGJjpOTh44ÿ['id']."_recycle`";
    $_obfuscate_hoqPjpSQiImSkImUjoqJj4oÿ[] = "`kss_z_key_".$_obfuscate_lIiIk4yNiY_VhpGJjpOTh44ÿ['pid']."_".$_obfuscate_lIiIk4yNiY_VhpGJjpOTh44ÿ['id']."_recycle`";
    $_obfuscate_hoqPjpSQiImSkImUjoqJj4oÿ[] = "`kss_z_log_".$_obfuscate_lIiIk4yNiY_VhpGJjpOTh44ÿ['pid']."_".$_obfuscate_lIiIk4yNiY_VhpGJjpOTh44ÿ['id']."`";
    $_obfuscate_hoqPjpSQiImSkImUjoqJj4oÿ[] = "`kss_z_client_".$_obfuscate_lIiIk4yNiY_VhpGJjpOTh44ÿ['pid']."_".$_obfuscate_lIiIk4yNiY_VhpGJjpOTh44ÿ['id']."`";
    $_obfuscate_hoqPjpSQiImSkImUjoqJj4oÿ[] = "`kss_z_cz_".$_obfuscate_lIiIk4yNiY_VhpGJjpOTh44ÿ['pid']."_".$_obfuscate_lIiIk4yNiY_VhpGJjpOTh44ÿ['id']."`";
    $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "drop table if exists ".implode( ",", $_obfuscate_hoqPjpSQiImSkImUjoqJj4oÿ ), "sync" );
    if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ === FALSE )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "åˆ é™¤ä¼šå‘˜æ•°æ®è¡¨kss_z_*å‡ºé”™:".$_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4ÿ( ) );
    }
    $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "delete from kss_tb_soft where `id`=".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpEÿ, "sync" );
    if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ === FALSE )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "æ¸…ç†è½¯ä»¶è¡¨kss_tb_softå‡ºé”™:".$_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4ÿ( ) );
    }
    _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "delok" );
}
$_obfuscate_lYmNk4uUiImKhoqPlIyQjpEÿ = array( "USOFT" => array( "æ­£å¸¸", "åœæ­¢ä½¿ç”¨", "ç¦æ­¢æ³¨å†Œå¸å·", "ç¦æ­¢ç”¨æˆ·å……å€¼", "ç¦æ­¢æ³¨å†Œå¸å·å’Œå……å€¼", "å†»ç»“ç”¨æˆ·æ—¶é—´ï¼Œæ­£å¸¸ä½¿ç”¨è½¯ä»¶", "å†»ç»“ç”¨æˆ·æ—¶é—´ï¼Œåœæ­¢ä½¿ç”¨è½¯ä»¶", "", "", "-" ), "KSOFT" => array( "æ­£å¸¸", "åœæ­¢ä½¿ç”¨", "ç¦æ­¢æ–°å¡å·æ¿€æ´»", "", "", "å†»ç»“ç”¨æˆ·æ—¶é—´ï¼Œæ­£å¸¸ä½¿ç”¨è½¯ä»¶", "å†»ç»“ç”¨æˆ·æ—¶é—´ï¼Œåœæ­¢ä½¿ç”¨è½¯ä»¶", "", "", "-" ) );
$_obfuscate_kIiSjIaLi4qUi4qRjJKRlYkÿ = array( "USOFT" => "ç”¨æˆ·å+å¯†ç ç™»é™†", "KSOFT" => "æ³¨å†Œå¡å·ç™»é™†" );
$_obfuscate_i4uIkYuKkJGQlJKOjoiMj4cÿ = array( "action" => $_obfuscate_lZOThomRipOIi5SRhpWRjY4ÿ );
$_obfuscate_k42Rh4mVlYqGi4mOiZWMjJAÿ = _obfuscate_i4mIkpOGkomKiouRhoaMh5Iÿ( "page", "gp", "int", 1 );
$_obfuscate_iYqPiJGIjoaVhoaQiI2Ti4wÿ = "SELECT `id` ";
$_obfuscate_jpCQi4aKkYaIjpSUhpWNipMÿ = "SELECT * ";
$_obfuscate_homTioySho6Vh5ORiYmUkokÿ = " where `id` in";
$_obfuscate_kZCPiJCHiI_IlY2Ok4_JlIcÿ = "SELECT count(*) as tnum ";
$_obfuscate_lJSNlZWKlYmGi4iSkIqHjpAÿ = "from `kss_tb_soft`  ";
$_obfuscate_lI6IkIyPlJWMioaUiIiVlY0ÿ = array( );
$_obfuscate_h4eJlYuIjpKNio6QkIuJlIYÿ[] = " `pid`=".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid'];
$_obfuscate_j4mJh4aKjZKHhpOSiJKSjJIÿ = "";
if ( empty( $_obfuscate_h4eJlYuIjpKNio6QkIuJlIYÿ ) )
{
    $_obfuscate_j4mJh4aKjZKHhpOSiJKSjJIÿ = " where".implode( " and ", $_obfuscate_h4eJlYuIjpKNio6QkIuJlIYÿ );
}
$_obfuscate_lJKOiJSHjo_Sj4yKk4aIh5Iÿ[] = _obfuscate_hpCTj4mKj5WSkpWPjouJkocÿ( );
$_obfuscate_lI_KipSOk4iQkI_MjIuVkpQÿ = _obfuscate_i4mIkpOGkomKiouRhoaMh5Iÿ( "recordnum", "gp", "int", 0 );
if ( $_obfuscate_k42Rh4mVlYqGi4mOiZWMjJAÿ == 1 )
{
    $_obfuscate_k46Gk4qOjJGGiYqMiouGh4gÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJAÿ( $_obfuscate_kZCPiJCHiI_IlY2Ok4_JlIcÿ.$_obfuscate_lJSNlZWKlYmGi4iSkIqHjpAÿ.$_obfuscate_j4mJh4aKjZKHhpOSiJKSjJIÿ );
    $_obfuscate_lI_KipSOk4iQkI_MjIuVkpQÿ = $_obfuscate_k46Gk4qOjJGGiYqMiouGh4gÿ['tnum'];
}
$_obfuscate_lJKOiJSHjo_Sj4yKk4aIh5Iÿ[] = _obfuscate_hpCTj4mKj5WSkpWPjouJkocÿ( );
$_obfuscate_i4uIkYuKkJGQlJKOjoiMj4cÿ['recordnum'] = $_obfuscate_lI_KipSOk4iQkI_MjIuVkpQÿ;
$_obfuscate_jIiNjZCPkoeUjI2LipCQk5Qÿ = abs( floor( $_obfuscate_lI_KipSOk4iQkI_MjIuVkpQÿ / ZPAGESIZE * -1 ) );
$_obfuscate_lJKOiJSHjo_Sj4yKk4aIh5Iÿ[] = _obfuscate_hpCTj4mKj5WSkpWPjouJkocÿ( );
$_obfuscate_iZWHjpGQkoqPlYmJjYmIhpUÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_lZGTiIiKhouKiZGLi5KUkI8ÿ( $_obfuscate_iYqPiJGIjoaVhoaQiI2Ti4wÿ.$_obfuscate_lJSNlZWKlYmGi4iSkIqHjpAÿ.$_obfuscate_j4mJh4aKjZKHhpOSiJKSjJIÿ." LIMIT ".( $_obfuscate_k42Rh4mVlYqGi4mOiZWMjJAÿ - 1 ) * ZPAGESIZE.",".ZPAGESIZE );
$_obfuscate_lJKOiJSHjo_Sj4yKk4aIh5Iÿ[] = _obfuscate_hpCTj4mKj5WSkpWPjouJkocÿ( );
$_obfuscate_iIiHi4aTkoySkpCNio_UjYoÿ = "";
if ( empty( $_obfuscate_iZWHjpGQkoqPlYmJjYmIhpUÿ ) )
{
    foreach ( $_obfuscate_iZWHjpGQkoqPlYmJjYmIhpUÿ as $_obfuscate_kYqOi5CTjoySj4mIkYmIlY4ÿ )
    {
        $_obfuscate_iIiHi4aTkoySkpCNio_UjYoÿ .= $_obfuscate_kYqOi5CTjoySj4mIkYmIlY4ÿ['id'].",";
    }
    $_obfuscate_iIiHi4aTkoySkpCNio_UjYoÿ = substr( $_obfuscate_iIiHi4aTkoySkpCNio_UjYoÿ, 0, strlen( $_obfuscate_iIiHi4aTkoySkpCNio_UjYoÿ ) - 1 );
}
$_obfuscate_iYeIjIaVlYaIj4yTiJWHk40ÿ = FALSE;
$_obfuscate_lJKOiJSHjo_Sj4yKk4aIh5Iÿ[] = _obfuscate_hpCTj4mKj5WSkpWPjouJkocÿ( );
if ( $_obfuscate_iIiHi4aTkoySkpCNio_UjYoÿ != "" )
{
    $_obfuscate_homTioySho6Vh5ORiYmUkokÿ .= "(".$_obfuscate_iIiHi4aTkoySkpCNio_UjYoÿ.")";
    $_obfuscate_iYeIjIaVlYaIj4yTiJWHk40ÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_lZGTiIiKhouKiZGLi5KUkI8ÿ( $_obfuscate_jpCQi4aKkYaIjpSUhpWNipMÿ.$_obfuscate_lJSNlZWKlYmGi4iSkIqHjpAÿ.$_obfuscate_homTioySho6Vh5ORiYmUkokÿ );
}
$_obfuscate_lJKOiJSHjo_Sj4yKk4aIh5Iÿ[] = _obfuscate_hpCTj4mKj5WSkpWPjouJkocÿ( );
$_obfuscate_k4yVk4iOipWPioqJlIuVkpEÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iouHh42RkIeKkYaSipWKiogÿ( $_obfuscate_k42Rh4mVlYqGi4mOiZWMjJAÿ, $_obfuscate_jIiNjZCPkoeUjI2LipCQk5Qÿ, $_obfuscate_i4uIkYuKkJGQlJKOjoiMj4cÿ )."<span class=page_nav_a>".$_obfuscate_lI_KipSOk4iQkI_MjIuVkpQÿ."è¡Œ  è€—æ—¶"._obfuscate_i4mGjpKMk5WRipSVi4mLi40ÿ( $_obfuscate_lJKOiJSHjo_Sj4yKk4aIh5Iÿ )."æ¯«ç§’</span>";
echo "<script type=\"text/javascript\">\r\n$(document).ready(function() { \r\n\r\n$(\"[delid]\").css('cursor','pointer').bind('click',function(){\r\nvar tid=$(this).attr(\"delid\");\r\nvar thref='admin_soft.php?action=softlist&isajax=1&op=del&softid='+tid;\t\r\nvar tlevel=\t";
echo $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['level'];
echo ";\t\r\n\r\nif(tlevel<8){\r\nmalert('æ— æƒé™åˆ é™¤è½¯ä»¶!');\r\nreturn false;\r\n}\r\nmalert('åˆ é™¤è½¯ä»¶æ“ä½œä¸å¯æ¢å¤ï¼Œä¸ºé˜²æ„å¤–è¯·åšå¥½æ•°æ®åº“å¤‡ä»½å·¥ä½œ!<br>æ˜¯å¦çœŸçš„è¦åˆ é™¤è¯¥è½¯ä»¶ï¼Ÿ','è­¦å‘Š',500,60,function(){\r\n$.ajax({\r\nurl: thref,\r\ncache: false,\r\nsuccess: function(html){\r\nif(html=='delok'){\r\n$(\"#trsoftid\"+tid).remove();\t\r\nmalert('è½¯ä»¶åˆ é™¤æˆåŠŸï¼');\t\t\r\n}else{\r\nmalert(html);\r\n}\r\n},\r\nerror:function(XMLHttpRequest, textStatus, errorThrown) {\r\nalert(ourl)\r\n} \r\n});\r\n});\r\n});\r\n$(\"#getsign2\").bind(\"click\",function(){\r\n$.ajax({\r\nurl: './admin_soft.php?action=softlist&op=signdata&isajax=1&sver=9&ver=2',\r\ncache: false,\r\nsuccess: function(html){\r\nif(html.substr(0,8)=='signData'){\r\nmalert(html,'9.5å’Œæ–°ç‰ˆæœ¬ç­¾åæ•°æ®ï¼Œè¯·å•å‡»ä¸åŒæŒ‰é’®å¯è·å–ç›¸åº”è¯­è¨€æ ¼å¼åŒ–åçš„ç­¾åæ•°æ®',620,180);\r\n}else{\r\nmalert('å–ç­¾åæ•°æ®å‡ºé”™<br>'+html);\r\n}\r\n},\r\nerror:function(XMLHttpRequest, textStatus, errorThrown) {\r\nmalert('err');\r\n} \r\n});\t\r\n});\r\n\r\n});\r\n</script>\r\n<table class=\"listtable\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\" align=\"center\" width=\"97%\">\r\n<tr>\r\n<td class=\"findorpage\">";
echo $_obfuscate_k4yVk4iOipWPioqJlIuVkpEÿ;
echo "</td><td style=\"background:#f6f6f6;padding:5px 0\" align=center width=220> <input malt=\"9.5å’Œ9.5+ç‰ˆæœ¬çš„å®¢æˆ·ç«¯ç­¾åæ•°æ®\" title=\"9.5å’Œ9.5+ç‰ˆæœ¬çš„å®¢æˆ·ç«¯ç­¾åæ•°æ®\" type=button class=submitbtn id=\"getsign2\" value=\"æ–°ç­¾åæ•°æ®\" /></td>\r\n</tr>\r\n</table>\r\n<table class=\"listtable\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\" align=\"center\" width=\"97%\">\r\n<tr class=\"trhead\">\r\n<td malt=\"è½¯ä»¶ID\" width=50>è½¯ä»¶ID</td>\r\n<td>è½¯ä»¶å</td>\r\n<td>æ¨¡å¼</td>\r\n<td>è½¯ä»¶ç¼–å·</td>\r\n<td>è½¯ä»¶å¯†é’¥</td>\r\n<td>è½¯ä»¶çŠ¶æ€</td>\r\n<td width=\"80\">æ“ä½œ</td>\r\n</tr>\r\n";
if ( empty( $_obfuscate_iYeIjIaVlYaIj4yTiJWHk40ÿ ) )
{
    echo "<tr class=trd><td colspan=9>æ²¡æœ‰è½¯ä»¶ï¼Œè¯·å…ˆæ·»åŠ è½¯ä»¶</td></tr>";
}
else
{
    foreach ( $_obfuscate_iYeIjIaVlYaIj4yTiJWHk40ÿ as $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ )
    {
        $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['softname'] = _obfuscate_j5CKkY_GkomSkoaUlIuLlYkÿ( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['softname'] );
        $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['softkey'] = _obfuscate_j5CKkY_GkomSkoaUlIuLlYkÿ( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['softkey'] );
        echo "<tr class=\"trd\" id=\"trsoftid";
        echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['id'];
        echo "\">\r\n<td style=\"font-size:16px;color:#00f;font-weight:700\">";
        echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['id'];
        echo "</td>\r\n<td>";
        echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['softname'];
        echo "</td>\r\n<td>";
        echo $_obfuscate_kIiSjIaLi4qUi4qRjJKRlYkÿ[$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['softmode']];
        echo "</td>\r\n<td>";
        echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['softcode'];
        echo "</td>\r\n<td>";
        echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['softkey'];
        echo "</td>\r\n<td>";
        echo $_obfuscate_lYmNk4uUiImKhoqPlIyQjpEÿ[$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['softmode']][$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['softstatus']];
        echo "</td>\r\n<td>\r\n<a href=\"javascript:void(0)\"  onclick=\"dwin('soft_set_";
        echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['id'];
        echo "','";
        echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['softname'];
        echo "å‚æ•°è®¾ç½®','admin_soft.php?action=addsoft&softid=";
        echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['id'];
        echo "')\"><img malt=\"è½¯ä»¶å‚æ•°è®¾ç½®\" src=\"";
        echo INSTALLPATH;
        echo "kss_inc/images/b_edit.png\" ></a>";
        if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['level'] == 9 )
        {
            echo "&nbsp;&nbsp;<a href=\"javascript:void(0)\"  onclick=\"dwin('user_report_";
            echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['id'];
            echo "','";
            echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['softname'];
            echo "æ³¨å†Œå¡æŠ¥è¡¨','admin_key.php?action=report&softid=";
            echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['id'];
            echo "')\"><img malt=\"æŸ¥çœ‹è¯¥è½¯ä»¶æ³¨å†Œå¡çš„ä½¿ç”¨æŠ¥è¡¨\" src=\"";
            echo INSTALLPATH;
            echo "kss_inc/images/b_calendar.png\"></a>\r\n&nbsp;&nbsp;<img  delid=\"";
            echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['id'];
            echo "\" malt=\"åˆ é™¤è¯¥è½¯ä»¶\" src=\"";
            echo INSTALLPATH;
            echo "kss_inc/images/bd_drop.png\">";
        }
        echo "</td>\r\n</tr>\r\n";
    }
}
echo "</table>\r\n<table class=\"listtable\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\" align=\"center\" width=\"97%\">\r\n<tr>\r\n<td class=\"findorpage\">";
echo $_obfuscate_k4yVk4iOipWPioqJlIuVkpEÿ;
echo "</td>\r\n</tr>\r\n</table>\r\n";
$_obfuscate_i5GVjZWQj4ePkJKMjJSRipMÿ[] = _obfuscate_hpCTj4mKj5WSkpWPjouJkocÿ( );
echo "<div id=pageruntime>é¡µé¢è¿è¡Œæ—¶é—´"._obfuscate_i4mGjpKMk5WRipSVi4mLi40ÿ( $_obfuscate_i5GVjZWQj4ePkJKMjJSRipMÿ )."æ¯«ç§’</div>";
echo "</body>\r\n</html>";
?>
