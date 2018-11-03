<?php
/*********************/
/*                   */
/*  Dezend for PHP5  */
/*         NWS       */
/*      Nulled.WS    */
/*                   */
/*********************/

function _obfuscate_jI_PlJOMhoiPkZOOh4_OkYsÿ( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ = 1 )
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
$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ = _obfuscate_iZSVk4mLkY_LlIeHh5WKlZAÿ( 6 );
$_obfuscate_k4mViI2Nj4mJkIuUj42JiIYÿ = _obfuscate_i4mIkpOGkomKiouRhoaMh5Iÿ( "op", "gp", "sql", "" );
$_obfuscate_komRjo6Qi4_Rh5KHi5SLhpEÿ = _obfuscate_i4mIkpOGkomKiouRhoaMh5Iÿ( "id", "gp", "sql", "" );
$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpEÿ = _obfuscate_i4mIkpOGkomKiouRhoaMh5Iÿ( "softid", "gp", "int", 0 );
$_obfuscate_iIyOkY2Rh5GOhoiJkJSPj4wÿ = array( 0 => "é›¶å”®", 1 => "åå°" );
$_obfuscate_i5WKkIyJjpKNkY2QlY_HkI8ÿ = array( 0 => "æœªä»˜æ¬¾", 1 => "å·²ä»˜æ¬¾", 2 => "å·²å‘è´§", 3 => "å·²æ”¶è´§", 6 => "æå¡å‡ºé”™", 7 => "æå¡å‡ºé”™", 8 => "æ‰‹åŠ¨å®Œæˆ", 9 => "è‡ªåŠ¨å®Œæˆ" );
$_obfuscate_kIqGlYqOj5OViYySiZCOh40ÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJAÿ( "select `pid` from kss_tb_soft where `id`=".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpEÿ );
if ( empty( $_obfuscate_kIqGlYqOj5OViYySiZCOh40ÿ ) )
{
    _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "è½¯ä»¶æœªæ‰¾åˆ°" );
}
if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid'] != $_obfuscate_kIqGlYqOj5OViYySiZCOh40ÿ['pid'] )
{
    _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "è¿™ä¸ªè½¯ä»¶ä½ ä¼¼ä¹æ— æƒé™ç®¡ç†ï¼" );
}
if ( $_obfuscate_k4mViI2Nj4mJkIuUj42JiIYÿ == "sendkey" )
{
    _obfuscate_kY6LiJGJiIiRiIuRjomOiZAÿ( );
    $_obfuscate_iJWMjIiVi5OGjJOViY2Li48ÿ = _obfuscate_i4mIkpOGkomKiouRhoaMh5Iÿ( "ordernum", "g", "sql", "" );
    $_obfuscate_lIyRhoqSkpCHjYyJj4aIhpQÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJAÿ( "select * from  `kss_tb_order` where `ordernum`='".$_obfuscate_iJWMjIiVi5OGjJOViY2Li48ÿ."'" );
    if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['id'] != $_obfuscate_lIyRhoqSkpCHjYyJj4aIhpQÿ['managerid'] )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "è¯¥è®¢å•ä¸å±äºæ‚¨çš„ï¼Œä½ ä¸èƒ½æ‰§è¡Œå‘å¡æ“ä½œï¼" );
    }
    $_obfuscate_j4ePi5GUjJSIj4iTiJOVh40ÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJAÿ( "select * from kss_tb_keyset where `id`=".$_obfuscate_lIyRhoqSkpCHjYyJj4aIhpQÿ['keygroupid'] );
    if ( empty( $_obfuscate_j4ePi5GUjJSIj4iTiJOVh40ÿ ) )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "æ³¨å†Œå¡ç±»æœªæ‰¾åˆ°" );
    }
    if ( $_obfuscate_j4ePi5GUjJSIj4iTiJOVh40ÿ['islock'] == 1 )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "æ³¨å†Œå¡ç±»è¢«åœç”¨" );
    }
    $_obfuscate_k5KJkIyVkZWKk4_NiJSQlIkÿ = $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid']( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid']."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpEÿ );
    if ( $_obfuscate_k5KJkIyVkZWKk4_NiJSQlIkÿ !== TRUE )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "è¯·ç¨åæ“ä½œï¼Œé”å®šè¡¨å¤±è´¥ï¼š".$_obfuscate_k5KJkIyVkZWKk4_NiJSQlIkÿ );
    }
    if ( $_obfuscate_lIyRhoqSkpCHjYyJj4aIhpQÿ['orderstatus'] < 7 && $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['level'] == 6 )
    {
        if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['rmb'] + $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['touzhirmb'] < $_obfuscate_lIyRhoqSkpCHjYyJj4aIhpQÿ['agentamount'] )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "ä¸èƒ½å‘å¡ï¼šä½ çš„ä½™é¢ä¸è¶³ä»¥æ”¯ä»˜è¯¥è®¢å•ï¼" );
        }
        $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ = $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid']( "insert into `kss_tb_log_agentrmb` (`pid`,`managerid`,`opmanagerid`,`addtime`,`changermb`,`optype`,`ordernum`,`intro`) VALUES (".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid'].",".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['id'].",".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['id'].",'"._obfuscate_jZGJkpOSkY_HiY2HjY2JlIgÿ( )."',".( 0 - $_obfuscate_lIyRhoqSkpCHjYyJj4aIhpQÿ['agentamount'] ).",0,'".$_obfuscate_iJWMjIiVi5OGjJOViY2Li48ÿ."','åå°æå¡')", "sync" );
        if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ === FALSE )
        {
            $_obfuscate_h4aUkomQiI6JlIaSkomSkokÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4ÿ( );
            $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "REPAIR TABLE `kss_tb_log_agentrmb`", "notsync" );
            $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid']( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid']."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpEÿ );
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "å¿è¯•è®°å½•é‡‘é¢å˜åŠ¨æ—¥å¿—å¤±è´¥ï¼Œè¯·é‡è¯•ã€‚".$_obfuscate_h4aUkomQiI6JlIaSkomSkokÿ );
        }
        $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "update kss_tb_manager set `rmb`=`rmb`-".$_obfuscate_lIyRhoqSkpCHjYyJj4aIhpQÿ['agentamount'].",`xfrmb`=`xfrmb`+".$_obfuscate_lIyRhoqSkpCHjYyJj4aIhpQÿ['agentamount']." where `id`=".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['id'], "sync" );
        if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ === FALSE )
        {
            $_obfuscate_h4aUkomQiI6JlIaSkomSkokÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4ÿ( );
            $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "update kss_tb_log_agentrmb set `intro`='æ‰£æ¬¾å¤±è´¥' where `ordernum`='".$_obfuscate_iJWMjIiVi5OGjJOViY2Li48ÿ."' order by `id` Desc limit 0,1", "sync" );
            $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "REPAIR TABLE `kss_tb_manager`", "notsync" );
            $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid']( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid']."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpEÿ );
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "æ‚¨çš„å¸å·åœ¨æ‰£æ¬¾æ“ä½œæ—¶å‘ç”Ÿæ„å¤–ï¼Œè¯·é‡è¯•".$_obfuscate_h4aUkomQiI6JlIaSkomSkokÿ );
        }
    }
    if ( $_obfuscate_lIyRhoqSkpCHjYyJj4aIhpQÿ['orderstatus'] < 8 )
    {
        $_obfuscate_h4aPjY2NlJKNiYiIhpWJh5Uÿ = "";
        $_obfuscate_jY2OjpWVjpGNi4yNiIeIjIgÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_ioeOiIuTiJGQi42VkY_Viosÿ( "kss_z_key_".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid']."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpEÿ );
        $_obfuscate_lZCJkIySjI6TipKIio6Ojosÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJAÿ( "select count(*) as tnum from `kss_z_key_".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid']."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpEÿ."` where `ordernum`='".$_obfuscate_iJWMjIiVi5OGjJOViY2Li48ÿ."' limit 0,".$_obfuscate_lIyRhoqSkpCHjYyJj4aIhpQÿ['keycount'] );
        $_obfuscate_hpCPjIePioeHkYiIhpSPkokÿ = $_obfuscate_lIyRhoqSkpCHjYyJj4aIhpQÿ['keycount'] - $_obfuscate_lZCJkIySjI6TipKIio6Ojosÿ['tnum'];
        $_obfuscate_jIeNi4yViY_LjI2Ni5KQj4wÿ = array( "beginid" => $_obfuscate_jY2OjpWVjpGNi4yNiIeIjIgÿ, "addtime" => time( ), "managerid" => $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['id'], "ordernum" => $_obfuscate_iJWMjIiVi5OGjJOViY2Li48ÿ, "ispay" => 1, "tag" => $_obfuscate_lIyRhoqSkpCHjYyJj4aIhpQÿ['tags'], "keyattr" => $_obfuscate_lIyRhoqSkpCHjYyJj4aIhpQÿ['keygroupid'], "k_num" => $_obfuscate_hpCPjIePioeHkYiIhpSPkokÿ );
        $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ = _obfuscate_jo2HlYmTj4eQhpKTkYyIj5Eÿ( $_obfuscate_jIeNi4yViY_LjI2Ni5KQj4wÿ, $_obfuscate_j4ePi5GUjJSIj4iTiJOVh40ÿ );
        $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid']( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid']."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpEÿ );
        if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ === TRUE )
        {
            $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "update kss_tb_order set `orderstatus`=8 where `ordernum`='".$_obfuscate_iJWMjIiVi5OGjJOViY2Li48ÿ."'", "sync" );
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "ok è¯·å•å‡»è®¢å•å·æŸ¥çœ‹æ³¨å†Œå¡å· -> <span class='vieworder'>".$_obfuscate_iJWMjIiVi5OGjJOViY2Li48ÿ."</span>" );
        }
        else
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "åœ¨ç”Ÿæˆå¡å·æ—¶å‡ºé”™".$_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ );
        }
    }
}
if ( $_obfuscate_k4mViI2Nj4mJkIuUj42JiIYÿ == "delorder" )
{
    _obfuscate_kY6LiJGJiIiRiIuRjomOiZAÿ( );
    $_obfuscate_jouLjJCJj5CIiYmSjIuLi48ÿ = _obfuscate_i4mIkpOGkomKiouRhoaMh5Iÿ( "deltype", "gp", "int", 1 );
    $_obfuscate_jYuTk42Ui4iPjIyPkJCGjYgÿ = array( 1 => "7å¤©å‰æœªä»˜æ¬¾çš„é›¶å”®å•", 2 => "90å¤©å‰æ‰€æœ‰çš„è®¢å•", 3 => "æ‰€æœ‰æœªä»˜æ¬¾çš„é›¶å”®å•" );
    if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['level'] < 8 )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "ä½ æ— æƒé™åˆ é™¤ä»»ä½•è®¢å•" );
    }
    if ( $_obfuscate_jouLjJCJj5CIiYmSjIuLi48ÿ == 1 )
    {
        $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ = time( )( "delete from `kss_tb_order` where `softid`=".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpEÿ." and `managerid`>0 and `orderstatus`=0 and `addtime`<".( time( ) - 604800 ), "sync" );
    }
    else if ( $_obfuscate_jouLjJCJj5CIiYmSjIuLi48ÿ == 2 )
    {
        $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ = time( )( "delete from `kss_tb_order` where `softid`=".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpEÿ." and `addtime`<".( time( ) - 7776000 ), "sync" );
    }
    else
    {
        $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "delete from `kss_tb_order` where `softid`=".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpEÿ." and `managerid`>0 and `orderstatus`=0 ", "sync" );
    }
    if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ === FALSE )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "åˆ é™¤è®¢å•æ—¶å‡ºé”™".$_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4ÿ( ) );
    }
    _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "æˆåŠŸåˆ é™¤".$_obfuscate_jYuTk42Ui4iPjIyPkJCGjYgÿ[$_obfuscate_jouLjJCJj5CIiYmSjIuLi48ÿ].",ä½ å¯èƒ½éœ€è¦åˆ·æ–°é¡µé¢." );
}
$_obfuscate_i4uIkYuKkJGQlJKOjoiMj4cÿ = array( "action" => $_obfuscate_lZOThomRipOIi5SRhpWRjY4ÿ );
$_obfuscate_k42Rh4mVlYqGi4mOiZWMjJAÿ = _obfuscate_i4mIkpOGkomKiouRhoaMh5Iÿ( "page", "gp", "int", 1 );
$_obfuscate_iYqPiJGIjoaVhoaQiI2Ti4wÿ = "select `id` ";
$_obfuscate_jpCQi4aKkYaIjpSUhpWNipMÿ = "select * ";
$_obfuscate_homTioySho6Vh5ORiYmUkokÿ = " where `id` in";
$_obfuscate_kZCPiJCHiI_IlY2Ok4_JlIcÿ = "select count(*) as tnum ";
$_obfuscate_lJSNlZWKlYmGi4iSkIqHjpAÿ = "from `kss_tb_order` ";
$_obfuscate_lI6IkIyPlJWMioaUiIiVlY0ÿ = array( );
$_obfuscate_lYmRjI2JhoiNk5SQkYyLkocÿ = _obfuscate_i4mIkpOGkomKiouRhoaMh5Iÿ( "selop", "gp", "sql", "none" );
$_obfuscate_iJSVlJGGko_Nj5GLioeTlYoÿ = _obfuscate_i4mIkpOGkomKiouRhoaMh5Iÿ( "orderstatus", "gp", "int", 99 );
$_obfuscate_lImLiIqUj5OSipGOko6RlJQÿ = _obfuscate_i4mIkpOGkomKiouRhoaMh5Iÿ( "keywords", "gp", "sql", "" );
$_obfuscate_kYqTiZWUjZKLjZCVlImUi5Aÿ = _obfuscate_i4mIkpOGkomKiouRhoaMh5Iÿ( "managerid", "gp", "int", $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['id'] );
$_obfuscate_i4uIkYuKkJGQlJKOjoiMj4cÿ['managerid'] = $_obfuscate_kYqTiZWUjZKLjZCVlImUi5Aÿ;
$_obfuscate_i4uIkYuKkJGQlJKOjoiMj4cÿ['orderstatus'] = $_obfuscate_iJSVlJGGko_Nj5GLioeTlYoÿ;
$_obfuscate_i4uIkYuKkJGQlJKOjoiMj4cÿ['selop'] = $_obfuscate_lYmRjI2JhoiNk5SQkYyLkocÿ;
if ( $_obfuscate_lYmRjI2JhoiNk5SQkYyLkocÿ == "ordernum" && $_obfuscate_lImLiIqUj5OSipGOko6RlJQÿ != "" )
{
    if ( strlen( $_obfuscate_lImLiIqUj5OSipGOko6RlJQÿ ) < 6 )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "è¦æœç´¢çš„è®¢å•å·æœ€å°‘è¦å‰å…­ä½" );
    }
    $_obfuscate_h4eJlYuIjpKNio6QkIuJlIYÿ[] = " `ordernum` like '".$_obfuscate_lImLiIqUj5OSipGOko6RlJQÿ."%'";
    $_obfuscate_i4uIkYuKkJGQlJKOjoiMj4cÿ['keywords'] = $_obfuscate_lImLiIqUj5OSipGOko6RlJQÿ;
}
if ( $_obfuscate_lYmRjI2JhoiNk5SQkYyLkocÿ == "qq" && $_obfuscate_lImLiIqUj5OSipGOko6RlJQÿ != "" )
{
    if ( strlen( $_obfuscate_lImLiIqUj5OSipGOko6RlJQÿ ) < 5 )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "QQå·æœ€å°‘äº”ä½" );
    }
    $_obfuscate_h4eJlYuIjpKNio6QkIuJlIYÿ[] = " `payqq`='".$_obfuscate_lImLiIqUj5OSipGOko6RlJQÿ."'";
    $_obfuscate_i4uIkYuKkJGQlJKOjoiMj4cÿ['keywords'] = $_obfuscate_lImLiIqUj5OSipGOko6RlJQÿ;
}
$_obfuscate_h4eJlYuIjpKNio6QkIuJlIYÿ[] = " `softid`=".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpEÿ;
$_obfuscate_i4uIkYuKkJGQlJKOjoiMj4cÿ['softid'] = $_obfuscate_jpKNh4aRh4aQkY2PlIuRhpEÿ;
if ( 6 < $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['level'] )
{
    $_obfuscate_kJSPlYqRjouVi4uTjZKMjocÿ = array( );
    $_obfuscate_h42Kh5KIipOTk4uIlYaJkI0ÿ = $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid']( "select * from kss_tb_manager where `pid`=".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid']." and isdel=0" );
    foreach ( $_obfuscate_h42Kh5KIipOTk4uIlYaJkI0ÿ as $_obfuscate_lJCSkoeMho2PlJOLiouJj4Yÿ )
    {
        if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['level'] == 7 )
        {
            if ( !( $_obfuscate_lJCSkoeMho2PlJOLiouJj4Yÿ['id'] == $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['id'] ) || !( $_obfuscate_lJCSkoeMho2PlJOLiouJj4Yÿ['level'] == 6 ) )
            {
                $_obfuscate_kJSPlYqRjouVi4uTjZKMjocÿ[] = $_obfuscate_lJCSkoeMho2PlJOLiouJj4Yÿ['id'];
            }
        }
        else
        {
            $_obfuscate_kJSPlYqRjouVi4uTjZKMjocÿ[] = $_obfuscate_lJCSkoeMho2PlJOLiouJj4Yÿ['id'];
        }
    }
    $_obfuscate_j4yRlI2IiImKlY6Uh5OPjZEÿ = array( );
    $_obfuscate_j4yRlI2IiImKlY6Uh5OPjZEÿ = implode( ",", $_obfuscate_kJSPlYqRjouVi4uTjZKMjocÿ );
    if ( $_obfuscate_kYqTiZWUjZKLjZCVlImUi5Aÿ == 0 )
    {
        $_obfuscate_h4eJlYuIjpKNio6QkIuJlIYÿ[] = " `managerid` in(".$_obfuscate_j4yRlI2IiImKlY6Uh5OPjZEÿ.")";
    }
    else
    {
        if ( in_array( $_obfuscate_kYqTiZWUjZKLjZCVlImUi5Aÿ, $_obfuscate_kJSPlYqRjouVi4uTjZKMjocÿ ) )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "æ— æƒåˆ—å‡ºè¯¥å¸å·çš„è®¢å•" );
        }
        $_obfuscate_h4eJlYuIjpKNio6QkIuJlIYÿ[] = " `managerid`=".$_obfuscate_kYqTiZWUjZKLjZCVlImUi5Aÿ;
    }
}
else
{
    $_obfuscate_h4eJlYuIjpKNio6QkIuJlIYÿ[] = " `managerid`=".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['id'];
}
if ( $_obfuscate_lYmRjI2JhoiNk5SQkYyLkocÿ == "selstatus" )
{
    $_obfuscate_h4eJlYuIjpKNio6QkIuJlIYÿ[] = " `orderstatus`='".$_obfuscate_iJSVlJGGko_Nj5GLioeTlYoÿ."'";
    $_obfuscate_i4uIkYuKkJGQlJKOjoiMj4cÿ['orderstatus'] = $_obfuscate_iJSVlJGGko_Nj5GLioeTlYoÿ;
}
$_obfuscate_j4mJh4aKjZKHhpOSiJKSjJIÿ = "";
if ( empty( $_obfuscate_h4eJlYuIjpKNio6QkIuJlIYÿ ) )
{
    $_obfuscate_j4mJh4aKjZKHhpOSiJKSjJIÿ = " where".implode( " and ", $_obfuscate_h4eJlYuIjpKNio6QkIuJlIYÿ )." order by id desc";
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
echo "<!-- ";
echo $_obfuscate_iYqPiJGIjoaVhoaQiI2Ti4wÿ.$_obfuscate_lJSNlZWKlYmGi4iSkIqHjpAÿ.$_obfuscate_j4mJh4aKjZKHhpOSiJKSjJIÿ." LIMIT ".( $_obfuscate_k42Rh4mVlYqGi4mOiZWMjJAÿ - 1 ) * ZPAGESIZE.",".ZPAGESIZE;
echo " -->";
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
    $_obfuscate_homTioySho6Vh5ORiYmUkokÿ .= "(".$_obfuscate_iIiHi4aTkoySkpCNio_UjYoÿ.") order by id desc";
    $_obfuscate_iYeIjIaVlYaIj4yTiJWHk40ÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_lZGTiIiKhouKiZGLi5KUkI8ÿ( $_obfuscate_jpCQi4aKkYaIjpSUhpWNipMÿ.$_obfuscate_lJSNlZWKlYmGi4iSkIqHjpAÿ.$_obfuscate_homTioySho6Vh5ORiYmUkokÿ );
}
$_obfuscate_lJKOiJSHjo_Sj4yKk4aIh5Iÿ[] = _obfuscate_hpCTj4mKj5WSkpWPjouJkocÿ( );
$_obfuscate_k4yVk4iOipWPioqJlIuVkpEÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iouHh42RkIeKkYaSipWKiogÿ( $_obfuscate_k42Rh4mVlYqGi4mOiZWMjJAÿ, $_obfuscate_jIiNjZCPkoeUjI2LipCQk5Qÿ, $_obfuscate_i4uIkYuKkJGQlJKOjoiMj4cÿ )."<span class=page_nav_a>".$_obfuscate_lI_KipSOk4iQkI_MjIuVkpQÿ."è¡Œ  è€—æ—¶"._obfuscate_i4mGjpKMk5WRipSVi4mLi40ÿ( $_obfuscate_lJKOiJSHjo_Sj4yKk4aIh5Iÿ )."æ¯«ç§’</span>";
echo "<script type=\"text/javascript\">\r\nvar submitid;\r\nvar softid=";
echo $_obfuscate_jpKNh4aRh4aQkY2PlIuRhpEÿ;
echo ";\r\n$(document).ready(function() { \r\n$(\"#copykey\").live('mouseover',function(){\r\nvar ee=$('#orderkeynum').html();\r\nee=ee.replace(/ /g,'');\r\ntoClipboard(\"copykey\",ee);\r\n});\r\n\r\n$(\".vieworder\").live(\"click\",function(){\r\n$(\".malertboxclosebtn\").click();\r\nmalert('./admin_order.php?action=vieworder&isajax=1&ordernum='+$(this).text(),'è®¢å•'+$(this).text()+'çš„æ³¨å†Œå¡å·',600,300);\t\r\n});\r\n\r\n$(\"#delorder\").bind(\"click\",function(){\r\nmalert(\"./admin_order.php?action=orderlist&isajax=1&op=delorder&softid=\"+$(this).attr(\"softid\")+\"&deltype=\"+$(\"#deltype\").val(),'åˆ é™¤è®¢å•æç¤º');\r\n});\r\n\r\n$(\":submit\").click(function(e){if(this.id) submitid=this.id;})\r\n\r\n$(\".sendkey\").bind(\"click\",function(){\r\nvar ourl='./admin_order.php?action=orderlist&op=sendkey&isajax=1&softid='+softid+'&ordernum='+$(this).attr('oid');\r\nvar \$this=$(this);\r\n$.ajax({type:\"GET\",url:ourl,cache:false,\r\nsuccess: function(msg){\r\nif(msg.substr(0,2)=='ok'){\r\n\$this.parent().html('æ‰‹åŠ¨å®Œæˆ'); \r\nmalert(msg.substr(2),'å‘å¡æˆåŠŸ',520,100);\r\n}else{\r\nmalert(msg,'å‘å¡å¤±è´¥');\r\n}\r\n},\r\nerror:function(ajaxobj){\r\nmalert(\"å‘å¡ç¨‹åºé¡µé¢å‡ºé”™ï¼š\"+ajaxobj.status);\r\n}\r\n});\r\n\r\n});\r\n\r\n$(\"#gz\").bind(\"click\",function(){\r\nif($(this).html()==\"æŸ¥çœ‹è§„åˆ™\"){\r\n$(this).html(\"éšè—è§„åˆ™\");\r\n$(\".trd1\").show();\r\n}else{\r\n$(this).html(\"æŸ¥çœ‹è§„åˆ™\");\r\n$(\".trd1\").hide();\r\n\r\n}\r\n});\r\n\r\n$(\"#selop\").bind(\"change\",function(){ \r\norderui($(this).val());\r\n});\r\norderui(\"ordernum\");\r\n$(\".trd1\").hide();\r\n});\r\n\r\nfunction orderui(sstatus){\r\nif($(\"#selop\").val()==\"none\"){\r\n$(\"#orderstatus\").hide();\r\n$(\"#keywords\").hide();\r\n}else if($(\"#selop\").val()==\"selstatus\"){\r\n$(\"#orderstatus\").show();\r\n$(\"#keywords\").hide();\r\n}else{\t\r\n$(\"#orderstatus\").hide();\r\n$(\"#keywords\").show();\r\n}\r\n}\r\n</script>\r\n<form action=\"?action=orderlist&softid=";
echo $_obfuscate_jpKNh4aRh4aQkY2PlIuRhpEÿ;
echo "\" method=\"post\" id=\"sorder\" name=\"sorder\">\r\n<table class=\"listtable\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\" align=\"center\" width=\"97%\">\r\n<tr class=trd>\r\n<td valign=middle>æœç´¢ =>  ";
if ( 6 < $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['level'] )
{
    echo "<select id='managerid' name='managerid'><option value=0>--ä¸‹åˆ—æ‰€æœ‰å¸å·--</option>";
    foreach ( $_obfuscate_h42Kh5KIipOTk4uIlYaJkI0ÿ as $_obfuscate_ipWMj4mQkZSRi5KKkJOQlY8ÿ )
    {
        if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['level'] == 7 )
        {
            if ( !( $_obfuscate_ipWMj4mQkZSRi5KKkJOQlY8ÿ['id'] == $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['id'] ) || !( $_obfuscate_ipWMj4mQkZSRi5KKkJOQlY8ÿ['level'] == 6 ) )
            {
                echo "<option value=".$_obfuscate_ipWMj4mQkZSRi5KKkJOQlY8ÿ['id'];
                if ( $_obfuscate_kYqTiZWUjZKLjZCVlImUi5Aÿ == $_obfuscate_ipWMj4mQkZSRi5KKkJOQlY8ÿ['id'] )
                {
                    echo " selected";
                }
                echo ">".$_obfuscate_ipWMj4mQkZSRi5KKkJOQlY8ÿ['username']."[".$_obfuscate_jJCMjYyHjpSTiJCNiYiIkpEÿ[$_obfuscate_ipWMj4mQkZSRi5KKkJOQlY8ÿ['level']]."]</option>";
            }
        }
        else
        {
            echo "<option value=".$_obfuscate_ipWMj4mQkZSRi5KKkJOQlY8ÿ['id'];
            if ( $_obfuscate_kYqTiZWUjZKLjZCVlImUi5Aÿ == $_obfuscate_ipWMj4mQkZSRi5KKkJOQlY8ÿ['id'] )
            {
                echo " selected";
            }
            echo ">".$_obfuscate_ipWMj4mQkZSRi5KKkJOQlY8ÿ['username']."[".$_obfuscate_jJCMjYyHjpSTiJCNiYiIkpEÿ[$_obfuscate_ipWMj4mQkZSRi5KKkJOQlY8ÿ['level']]."]</option>";
        }
    }
    echo "</select>";
}
echo "\t\t\r\n<select id=\"selop\" name=\"selop\">\r\n<option value='none' ";
echo $_obfuscate_lYmRjI2JhoiNk5SQkYyLkocÿ == "none" ? " selected" : "";
echo ">ä¸é€‰æ‹©æ­¤æ¡ä»¶</option>\r\n<option value='ordernum' ";
echo $_obfuscate_lYmRjI2JhoiNk5SQkYyLkocÿ == "ordernum" ? " selected" : "";
echo ">è®¢å•å·</option>\r\n<option value='qq' ";
echo $_obfuscate_lYmRjI2JhoiNk5SQkYyLkocÿ == "qq" ? " selected" : "";
echo ">QQå·</option>\r\n<option value='selstatus' ";
echo $_obfuscate_lYmRjI2JhoiNk5SQkYyLkocÿ == "selstatus" ? " selected" : "";
echo ">è®¢å•çŠ¶æ€</option>\r\n</select>\r\n<select name=\"orderstatus\" id=\"orderstatus\">";
foreach ( $_obfuscate_i5WKkIyJjpKNkY2QlY_HkI8ÿ as $_obfuscate_koiIh4mRlJKGlIiGiJCUkI4ÿ => $_obfuscate_lYeSkY6Th5SOlYuHjZGVio8ÿ )
{
    echo "<option value='".$_obfuscate_koiIh4mRlJKGlIiGiJCUkI4ÿ."'";
    if ( $_obfuscate_iJSVlJGGko_Nj5GLioeTlYoÿ == $_obfuscate_koiIh4mRlJKGlIiGiJCUkI4ÿ )
    {
        echo " selected";
    }
    echo ">".$_obfuscate_lYeSkY6Th5SOlYuHjZGVio8ÿ."</option>";
}
echo "</select>\r\n<input type=text id=\"keywords\" name=\"keywords\" class=longinput value=\"";
echo $_obfuscate_lImLiIqUj5OSipGOko6RlJQÿ;
echo "\"><input type=submit class=submitbtn value=\"æŸ¥è¯¢\">  <span id=\"gz\" style=\"cursor:pointer\">æŸ¥çœ‹è§„åˆ™</span></td>\r\n<td align=right style=\"display:inline-block; *display:inline; *zoom:1; vertical-align:middle\">";
if ( 7 < $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['level'] )
{
    echo "<select name='deltype' id=\"deltype\">\r\n<option value=1>7å¤©å‰æœªä»˜æ¬¾çš„é›¶å”®å•</option>\r\n<option value=2>90å¤©å‰æ‰€æœ‰çš„è®¢å•</option>\r\n<option value=3>æ‰€æœ‰æœªä»˜æ¬¾çš„é›¶å”®å•</option>\r\n</select><input type=button id='delorder' class='submitbtn' softid=\"";
    echo $_obfuscate_jpKNh4aRh4aQkY2PlIuRhpEÿ;
    echo "\" value='åˆ é™¤è®¢å•'>\r\n";
}
echo "&nbsp;</td>\r\n</tr>\r\n<tr class=trd1>\r\n<td colspan=2>ä½œè€…ï¼šå¯æŸ¥çœ‹æ‰€æœ‰è®¢å•ï¼Œå¯åˆ é™¤æœªä»˜æ¬¾çš„é›¶å”®è®¢å•å’Œ90å¤©å‰æ‰€æœ‰è®¢å•ï¼Œåªå¯ç»™è‡ªå·±çš„æ‰€æœ‰æœªå‘å¡è®¢å•å‘å¡ </td>\r\n</tr>\r\n<tr class=trd1>\r\n<td colspan=2>å‘˜å·¥ï¼šå¯æŸ¥çœ‹è‡ªå·±å’Œä»£ç†çš„æ‰€æœ‰è®¢å•ï¼Œç¦æ­¢åˆ é™¤ä»»ä½•è®¢å•ï¼Œåªå¯ç»™è‡ªå·±çš„æ‰€æœ‰æœªå‘å¡è®¢å•å‘å¡ </td>\r\n</tr>\r\n<tr class=trd1>\r\n<td colspan=2>ä»£ç†ï¼šå¯æŸ¥çœ‹è‡ªå·±çš„è®¢å•ï¼Œç¦æ­¢åˆ é™¤ä»»ä½•è®¢å•ï¼Œæœ‰è¶³å¤Ÿä½™é¢çš„å‰æä¸‹å¯ç»™è‡ªå·±çš„æ‰€æœ‰æœªå‘å¡è®¢å•å‘å¡</td>\r\n</tr>\r\n</table>\r\n</form>\r\n<table class=\"listtable\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\" align=\"center\" width=\"97%\">\r\n<tr>\r\n<td class=\"findorpage\">";
echo $_obfuscate_k4yVk4iOipWPioqJlIuVkpEÿ;
echo "</td>\r\n</tr>\r\n</table>\r\n\r\n<table class=\"listtable\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\" align=\"center\" width=\"97%\">\r\n<tr class=\"trhead\">\r\n<td malt=\"è®¢å•ID\">ID</td>\r\n<td malt=\"è®¢å•å·çš„å‰1-13ä½è¡¨ç¤ºã€å¹´å¹´æœˆæœˆæ—¥æ—¥æ—¶æ—¶åˆ†åˆ†ç§’ç§’ã€‘ï¼Œä¹Ÿå°±æ˜¯è®¢å•çš„æ·»åŠ æ—¥æœŸ\">è®¢å•å·</td>\r\n<td malt=\"è®¢å•å½“å‰çŠ¶æ€\">çŠ¶æ€</td>\r\n<td malt=\"é›¶å”®æˆ–åå°å–å¡ï¼Œåå°:ä»£ç†å–å¡ã€å‘˜å·¥å–å¡ã€ä½œè€…å–å¡ã€ç®¡ç†å–å¡\">ç±»å‹</td>\r\n<td malt=\"è¯¥è®¢å•æ‰€å±äºåå°å“ªä¸€ä¸ªå¸å·çš„\">æ‰€å±</td>\r\n<td malt=\"è¯¥è®¢å•æå¡çš„è½¯ä»¶å¡ç±»å[å¤©æ•°* ç‚¹æ•°* é€šé“æ•°*]\">å¡ç±»</td>\r\n<td malt=\"è¯¥è®¢å•æå–çš„æ³¨å†Œå¡æ•°é‡\">æ•°é‡</td>\r\n<td malt=\"åªæœ‰å‰å°é›¶å”®å’Œåå°ä»£ç†å–å¡æ‰æœ‰æ€»é‡‘é¢\">é‡‘é¢</td>\r\n<td malt=\"ä»£ç†åº”è¯¥æ¬¾é¡¹\">ä»£ç†è´¹ç”¨</td>\r\n<td malt=\"å‰å°é›¶å”®å®¢æˆ·è´­å¡æ—¶å¡«å†™çš„QQå·\">è´­å¡äºº</td>\r\n</tr>\r\n";
if ( empty( $_obfuscate_iYeIjIaVlYaIj4yTiJWHk40ÿ ) )
{
    $_obfuscate_iIeQh5WMhpSNkJCVk5GPhpEÿ = array( );
    $_obfuscate_k5KHhpGGio6KiYaVjpGOkYcÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_lZGTiIiKhouKiZGLi5KUkI8ÿ( "select * from kss_tb_manager where `pid`=".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid'] );
    foreach ( $_obfuscate_k5KHhpGGio6KiYaVjpGOkYcÿ as $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ )
    {
        $_obfuscate_iIeQh5WMhpSNkJCVk5GPhpEÿ[$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['id']] = $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['username'];
    }
    $_obfuscate_iYePj5CHk5CNh46RiYaOlY4ÿ = array( );
    $_obfuscate_k5KHhpGGio6KiYaVjpGOkYcÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_lZGTiIiKhouKiZGLi5KUkI8ÿ( "select * from kss_tb_keyset where `softid`=".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpEÿ );
    foreach ( $_obfuscate_k5KHhpGGio6KiYaVjpGOkYcÿ as $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ )
    {
        $_obfuscate_iYePj5CHk5CNh46RiYaOlY4ÿ[$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['id']] = $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['keyname'];
    }
    foreach ( $_obfuscate_iYeIjIaVlYaIj4yTiJWHk40ÿ as $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ )
    {
        echo "<tr class=\"trd\" id=\"trmanagerid";
        echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['id'];
        echo "\">\r\n<td><input type=\"checkbox\" name=\"id[]\" value=\"";
        echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['id'];
        echo "\" />";
        echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['id'];
        echo "</td>\r\n<td><span class=vieworder>";
        echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['ordernum'];
        echo "</span></td>\r\n<td nowrap=\"nowrap\">";
        if ( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['orderstatus'] < 8 && $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['managerid'] == $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['id'] )
        {
            echo "<span class='sendkey' oid='".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['ordernum']."'>å‘å¡</span>";
        }
        echo $_obfuscate_i5WKkIyJjpKNkY2QlY_HkI8ÿ[$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['orderstatus']];
        echo "</td>\r\n<td>";
        echo $_obfuscate_iIyOkY2Rh5GOhoiJkJSPj4wÿ[$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['ordertype']];
        echo "</td>\r\n<td>";
        echo $_obfuscate_iIeQh5WMhpSNkJCVk5GPhpEÿ[$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['managerid']];
        echo "</td>\r\n<td>";
        echo isset( $_obfuscate_iYePj5CHk5CNh46RiYaOlY4ÿ[$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['keygroupid']] ) ? $_obfuscate_iYePj5CHk5CNh46RiYaOlY4ÿ[$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['keygroupid']] : "è¢«åˆ ";
        echo "</td>\r\n<td>";
        echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['keycount'];
        echo "</td>\r\n<td>";
        echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['orderamount'];
        echo "</td>\r\n<td>";
        echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['agentamount'];
        if ( 6 < $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['level'] )
        {
            echo "[".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['agentamount7']."]";
        }
        echo "</td>\r\n<td>";
        echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['payqq'];
        echo "</td>\r\n</tr>\r\n";
    }
}
else
{
    echo "<tr class=trd><td colspan=10>æš‚æ— è®¢å•</td></tr>";
}
echo "</table>\r\n\r\n<table class=\"listtable\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\" align=\"center\" width=\"97%\">\r\n<tr>\r\n<td class=\"findorpage\">";
echo $_obfuscate_k4yVk4iOipWPioqJlIuVkpEÿ;
echo "</td>\r\n</tr>\r\n</table>\r\n";
$_obfuscate_i5GVjZWQj4ePkJKMjJSRipMÿ[] = _obfuscate_hpCTj4mKj5WSkpWPjouJkocÿ( );
echo "<div id=pageruntime>é¡µé¢è¿è¡Œæ—¶é—´"._obfuscate_i4mGjpKMk5WRipSVi4mLi40ÿ( $_obfuscate_i5GVjZWQj4ePkJKMjJSRipMÿ )."æ¯«ç§’</div>";
echo "</body>\r\n</html>";
?>
