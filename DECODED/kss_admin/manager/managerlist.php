<?php
/*********************/
/*                   */
/*  Dezend for PHP5  */
/*         NWS       */
/*      Nulled.WS    */
/*                   */
/*********************/

function _obfuscate_iZGRlJGUk4qShpWUlZKGkooÿ( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ = 1 )
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
$_obfuscate_i5GVjZWQj4ePkJKMjJSRipMÿ[] = _obfuscate_hpCTj4mKj5WSkpWPjouJkocÿ( );
$_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ = new mysql_cls( );
$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ = _obfuscate_iZSVk4mLkY_LlIeHh5WKlZAÿ( 7 );
$_obfuscate_k4mViI2Nj4mJkIuUj42JiIYÿ = _obfuscate_i4mIkpOGkomKiouRhoaMh5Iÿ( "op", "gp", "sql", "" );
$_obfuscate_komRjo6Qi4_Rh5KHi5SLhpEÿ = _obfuscate_i4mIkpOGkomKiouRhoaMh5Iÿ( "id", "gp", "int", 0 );
if ( $_obfuscate_lZOThomRipOIi5SRhpWRjY4ÿ == "managerlist_delprice" )
{
    _obfuscate_kY6LiJGJiIiRiIuRjomOiZAÿ( );
    $_obfuscate_i42UjJCUlIyVk5KLi5KIj5Aÿ = _obfuscate_i4mIkpOGkomKiouRhoaMh5Iÿ( "w_id", "pg", "sql", "" );
    $_obfuscate_jYuHhoeLlZSSlJSJj42MjIoÿ = _obfuscate_i4mIkpOGkomKiouRhoaMh5Iÿ( "w_softid", "pg", "int", 0 );
    $_obfuscate_iIuQlIiQkJSTj5KVj5CTlY0ÿ = _obfuscate_i4mIkpOGkomKiouRhoaMh5Iÿ( "w_kgid", "pg", "int", 0 );
    $_obfuscate_homKkImLlIaUkZCMioeVj5Eÿ = _obfuscate_i4mIkpOGkomKiouRhoaMh5Iÿ( "w_keyprice", "pg", "num", 0 );
    $_obfuscate_lJKIk4eJkoeLlY_Vi4mMipEÿ = "no";
    if ( $_obfuscate_i42UjJCUlIyVk5KLi5KIj5Aÿ == "" )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "ä½ è¿˜æœªé€‰æ‹©ä»»ä½•ä»£ç†ï¼" );
    }
    $_obfuscate_i5KHlIeVi4mQlIaOioqTkpEÿ = explode( ",", $_obfuscate_i42UjJCUlIyVk5KLi5KIj5Aÿ );
    if ( $_obfuscate_jYuHhoeLlZSSlJSJj42MjIoÿ == 0 )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "ä½ è¿˜æœªé€‰æ‹©è½¯ä»¶ï¼" );
    }
    if ( $_obfuscate_iIuQlIiQkJSTj5KVj5CTlY0ÿ == 0 )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "ä½ è¿˜æœªé€‰æ‹©å¡ç±»ï¼" );
    }
    $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJAÿ( "select * from kss_tb_keyset where softid=".$_obfuscate_jYuHhoeLlZSSlJSJj42MjIoÿ." and id=".$_obfuscate_iIuQlIiQkJSTj5KVj5CTlY0ÿ." and pid=".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid'] );
    if ( empty( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ ) )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "ä½ è¦ä¿å­˜çš„è½¯ä»¶å¡ç±»ä¸å­˜åœ¨æˆ–ä½ æ— æƒä¿®æ”¹ï¼" );
    }
    if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['level'] == 7 )
    {
        $_obfuscate_i4iViJWVj4uQkYqIiJCMj48ÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_lZGTiIiKhouKiZGLi5KUkI8ÿ( "select * from kss_tb_manager where id in (".$_obfuscate_i42UjJCUlIyVk5KLi5KIj5Aÿ.")" );
        foreach ( $_obfuscate_i4iViJWVj4uQkYqIiJCMj48ÿ as $_obfuscate_i4aKi4iTh4mQkJOOkpCOkogÿ )
        {
            if ( 6 < $_obfuscate_i4aKi4iTh4mQkJOOkpCOkogÿ['level'] )
            {
                _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "ä½ åªèƒ½åˆ é™¤ä»£ç†çº§åˆ«å¸å·çš„é”€å”®ä»·ï¼æ— æƒé™çš„å¸å·IDï¼š".$_obfuscate_i4aKi4iTh4mQkJOOkpCOkogÿ['id'] );
            }
            if ( $_obfuscate_i4aKi4iTh4mQkJOOkpCOkogÿ['pmid'] != $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['id'] )
            {
                _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "ä½ åªèƒ½åˆ é™¤ä½ å¸å·ä¸‹ä»£ç†çº§åˆ«å¸å·çš„é”€å”®ä»·ï¼Œæ— æƒé™çš„å¸å·IDï¼š".$_obfuscate_i4aKi4iTh4mQkJOOkpCOkogÿ['id'] );
            }
        }
    }
    $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "delete from kss_tb_agentprice where softid=".$_obfuscate_jYuHhoeLlZSSlJSJj42MjIoÿ." and pid=".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid']." and keygroupid=".$_obfuscate_iIuQlIiQkJSTj5KVj5CTlY0ÿ." and managerid in (".$_obfuscate_i42UjJCUlIyVk5KLi5KIj5Aÿ.")", "sync" );
    if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ !== FALSE )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "delok" );
    }
    _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "æ‰¹é‡åˆ é™¤æå¡æˆæƒæ—¶å‡ºé”™ï¼š".$_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4ÿ( ) );
}
if ( $_obfuscate_lZOThomRipOIi5SRhpWRjY4ÿ == "managerlist_saveprice" )
{
    _obfuscate_kY6LiJGJiIiRiIuRjomOiZAÿ( );
    $_obfuscate_i42UjJCUlIyVk5KLi5KIj5Aÿ = _obfuscate_i4mIkpOGkomKiouRhoaMh5Iÿ( "w_id", "pg", "sql", "" );
    $_obfuscate_jYuHhoeLlZSSlJSJj42MjIoÿ = _obfuscate_i4mIkpOGkomKiouRhoaMh5Iÿ( "w_softid", "pg", "int", 0 );
    $_obfuscate_iIuQlIiQkJSTj5KVj5CTlY0ÿ = _obfuscate_i4mIkpOGkomKiouRhoaMh5Iÿ( "w_kgid", "pg", "int", 0 );
    $_obfuscate_homKkImLlIaUkZCMioeVj5Eÿ = _obfuscate_i4mIkpOGkomKiouRhoaMh5Iÿ( "w_keyprice", "pg", "num", 0 );
    $_obfuscate_lJKIk4eJkoeLlY_Vi4mMipEÿ = "no";
    if ( $_obfuscate_i42UjJCUlIyVk5KLi5KIj5Aÿ == "" )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "ä½ è¿˜æœªé€‰æ‹©ä»»ä½•ä»£ç†ï¼" );
    }
    $_obfuscate_i5KHlIeVi4mQlIaOioqTkpEÿ = explode( ",", $_obfuscate_i42UjJCUlIyVk5KLi5KIj5Aÿ );
    if ( $_obfuscate_jYuHhoeLlZSSlJSJj42MjIoÿ == 0 )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "ä½ è¿˜æœªé€‰æ‹©è½¯ä»¶ï¼" );
    }
    if ( $_obfuscate_iIuQlIiQkJSTj5KVj5CTlY0ÿ == 0 )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "ä½ è¿˜æœªé€‰æ‹©å¡ç±»ï¼" );
    }
    if ( $_obfuscate_homKkImLlIaUkZCMioeVj5Eÿ == 0 )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "ä½ è¿˜æœªè®¾ç½®ä»·æ ¼ï¼" );
    }
    $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJAÿ( "select * from kss_tb_keyset where softid=".$_obfuscate_jYuHhoeLlZSSlJSJj42MjIoÿ." and id=".$_obfuscate_iIuQlIiQkJSTj5KVj5CTlY0ÿ." and pid=".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid'] );
    if ( empty( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ ) )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "ä½ è¦ä¿å­˜çš„è½¯ä»¶å¡ç±»ä¸å­˜åœ¨æˆ–ä½ æ— æƒä¿®æ”¹ï¼" );
    }
    if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['level'] == 7 )
    {
        $_obfuscate_i4iViJWVj4uQkYqIiJCMj48ÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJAÿ( "select * from kss_tb_agentprice where managerid=".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['id']." and softid=".$_obfuscate_jYuHhoeLlZSSlJSJj42MjIoÿ." and keygroupid=".$_obfuscate_iIuQlIiQkJSTj5KVj5CTlY0ÿ );
        if ( empty( $_obfuscate_i4iViJWVj4uQkYqIiJCMj48ÿ ) )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "ä½œè€…æ²¡æœ‰ç»™ä½ è¯¥è½¯ä»¶å¡ç±»çš„é”€å”®æƒï¼Œä½ æ— æƒä¿å­˜ï¼" );
        }
        $_obfuscate_i4iViJWVj4uQkYqIiJCMj48ÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_lZGTiIiKhouKiZGLi5KUkI8ÿ( "select * from kss_tb_manager where id in (".$_obfuscate_i42UjJCUlIyVk5KLi5KIj5Aÿ.")" );
        foreach ( $_obfuscate_i4iViJWVj4uQkYqIiJCMj48ÿ as $_obfuscate_i4aKi4iTh4mQkJOOkpCOkogÿ )
        {
            if ( 6 < $_obfuscate_i4aKi4iTh4mQkJOOkpCOkogÿ['level'] )
            {
                _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "ä½ åªèƒ½æ“ä½œä»£ç†çº§åˆ«å¸å·çš„é”€å”®ä»·ï¼æ— æƒé™çš„å¸å·IDï¼š".$_obfuscate_i4aKi4iTh4mQkJOOkpCOkogÿ['id'] );
            }
            if ( $_obfuscate_i4aKi4iTh4mQkJOOkpCOkogÿ['pmid'] != $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['id'] )
            {
                _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "ä½ åªèƒ½æ“ä½œä½ å¸å·ä¸‹ä»£ç†çº§åˆ«å¸å·çš„é”€å”®ä»·ï¼Œæ— æƒé™çš„å¸å·IDï¼š".$_obfuscate_i4aKi4iTh4mQkJOOkpCOkogÿ['id'] );
            }
        }
    }
    foreach ( $_obfuscate_i5KHlIeVi4mQlIaOioqTkpEÿ as $_obfuscate_kIuKio2Mk4qIjJKSjo2Nh5Iÿ )
    {
        $_obfuscate_i4iViJWVj4uQkYqIiJCMj48ÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJAÿ( "select * from kss_tb_agentprice where managerid=".$_obfuscate_kIuKio2Mk4qIjJKSjo2Nh5Iÿ." and softid=".$_obfuscate_jYuHhoeLlZSSlJSJj42MjIoÿ." and keygroupid=".$_obfuscate_iIuQlIiQkJSTj5KVj5CTlY0ÿ." and pid=".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid'] );
        if ( empty( $_obfuscate_i4iViJWVj4uQkYqIiJCMj48ÿ ) )
        {
            $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ = $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid']( "insert into `kss_tb_agentprice` (`pid`,`managerid`,`softid`,`keygroupid`,`keyprice`,`tmpkey`) VALUES (".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid'].",".$_obfuscate_kIuKio2Mk4qIjJKSjo2Nh5Iÿ.",".$_obfuscate_jYuHhoeLlZSSlJSJj42MjIoÿ.",".$_obfuscate_iIuQlIiQkJSTj5KVj5CTlY0ÿ.",".$_obfuscate_homKkImLlIaUkZCMioeVj5Eÿ.",'no')", "sync" );
        }
        else
        {
            $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "update kss_tb_agentprice set keyprice=".$_obfuscate_homKkImLlIaUkZCMioeVj5Eÿ." where `id`=".$_obfuscate_i4iViJWVj4uQkYqIiJCMj48ÿ['id'], "sync" );
        }
    }
    _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "saveok" );
}
if ( $_obfuscate_k4mViI2Nj4mJkIuUj42JiIYÿ == "del" )
{
    _obfuscate_kY6LiJGJiIiRiIuRjomOiZAÿ( );
    if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['level'] < 8 )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "éä½œè€…ï¼Œç¦æ­¢åˆ é™¤å¸å·ã€‚" );
    }
    if ( $_obfuscate_komRjo6Qi4_Rh5KHi5SLhpEÿ == $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['id'] )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "ä½ ä¸èƒ½è‡ªå·±åˆ é™¤è‡ªå·±ã€‚" );
    }
    $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJAÿ( "select * from kss_tb_manager where id=".$_obfuscate_komRjo6Qi4_Rh5KHi5SLhpEÿ );
    if ( empty( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ ) )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "ä½ è¦åˆ é™¤çš„å¸å·æœªæ‰¾åˆ°ã€‚" );
    }
    if ( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['level'] == 7 )
    {
        if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['level'] < 7 )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "åªæœ‰ä½œè€…çº§ä»¥ä¸Šçš„å¸å·æ‰æœ‰æƒé™æ‰§è¡Œæ­¤æ“ä½œï¼" );
        }
        if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid'] != $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['pid'] )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "è¯¥æ€»ä»£ç†å¸å·ä¸æ˜¯æ‚¨çš„(pid)ï¼Œä½ æ— æƒæ“ä½œ" );
        }
        $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJAÿ( "select * from kss_tb_manager where pmid=".$_obfuscate_komRjo6Qi4_Rh5KHi5SLhpEÿ." limit 0,1" );
        if ( empty( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ ) )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "è¯¥æ€»ä»£ç†åä¸‹è¿˜æœ‰ä»£ç†å¸å·ï¼Œè¯·å…ˆå°†åä¸‹çš„ä»£ç†å¸å·è½¬å‡ºæˆ–åˆ é™¤ã€‚" );
        }
        $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "delete from kss_tb_agentprice where managerid=".$_obfuscate_komRjo6Qi4_Rh5KHi5SLhpEÿ, "sync" );
        if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ === FALSE )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "åˆ é™¤æ€»ä»£ç†å¸å·æ—¶æ¸…ç†kss_tb_agentpriceè¡¨å‡ºé”™:".$_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4ÿ( ) );
        }
        $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "delete from kss_tb_log_agentrmb where managerid=".$_obfuscate_komRjo6Qi4_Rh5KHi5SLhpEÿ, "sync" );
        if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ === FALSE )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "åˆ é™¤æ€»ä»£ç†å¸å·æ—¶æ¸…ç†kss_tb_log_agentrmbè¡¨å‡ºé”™:".$_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4ÿ( ) );
        }
        $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "delete from kss_tb_manager where `id`=".$_obfuscate_komRjo6Qi4_Rh5KHi5SLhpEÿ, "sync" );
        if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ === FALSE )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "åˆ é™¤æ€»ä»£ç†å¸å·æ—¶æ“ä½œkss_tb_managerè¡¨å‡ºé”™:".$_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4ÿ( ) );
        }
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "delokåˆ é™¤æ€»ä»£ç†å¸å·æˆåŠŸ" );
    }
    if ( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['level'] == 6 )
    {
        if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid'] != $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['pid'] )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "è¯¥ä»£ç†å¸å·ä¸æ˜¯æ‚¨çš„(pid)ï¼Œä½ æ— æƒæ“ä½œ" );
        }
        $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "delete from kss_tb_agentprice where managerid=".$_obfuscate_komRjo6Qi4_Rh5KHi5SLhpEÿ, "sync" );
        if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ === FALSE )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "åˆ é™¤ä»£ç†å¸å·æ—¶æ¸…ç†kss_tb_agentpriceè¡¨å‡ºé”™:".$_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4ÿ( ) );
        }
        $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "delete from kss_tb_log_agentrmb where managerid=".$_obfuscate_komRjo6Qi4_Rh5KHi5SLhpEÿ, "sync" );
        if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ === FALSE )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "åˆ é™¤ä»£ç†å¸å·æ—¶æ¸…ç†kss_tb_log_agentrmbè¡¨å‡ºé”™:".$_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4ÿ( ) );
        }
        $_obfuscate_jIiRkpOJkYqOh42PjIyKkI0ÿ = $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid']( "select * from kss_tb_manager where pid=".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid']." and level>7 limit 0,1" );
        if ( empty( $_obfuscate_jIiRkpOJkYqOh42PjIyKkI0ÿ ) )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "æœªæ‰¾åˆ°è¯¥ä»£ç†çš„ä½œè€…çº§å¸å·ID" );
        }
        $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "update kss_tb_manager set pmid=".$_obfuscate_jIiRkpOJkYqOh42PjIyKkI0ÿ['id'].",`isdel`=1,`username`=concat('del_',`username`) where `id`=".$_obfuscate_komRjo6Qi4_Rh5KHi5SLhpEÿ, "sync" );
        if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ === FALSE )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "åˆ é™¤ä»£ç†å¸å·æ—¶å‡ºé”™:".$_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4ÿ( ) );
        }
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "delokåˆ é™¤ä»£ç†å¸å·æˆåŠŸ" );
    }
    if ( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['level'] == 8 )
    {
        if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['level'] != 9 )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "åªæœ‰ç®¡ç†å‘˜æ‰æœ‰æƒé™åˆ é™¤ä½œè€…å¸å·" );
        }
        $_obfuscate_i4mQlJGKioeNjJGMlI2LkZMÿ = "delokå·²æ¸…ç†çš„è¡¨";
        $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "delete from kss_tb_agentprice where `pid`=".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['pid'], "sync" );
        if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ === FALSE )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "æ¸…ç†æŠ˜æ‰£è¡¨kss_tb_agentpriceå‡ºé”™:".$_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4ÿ( ) );
        }
        $_obfuscate_i4mQlJGKioeNjJGMlI2LkZMÿ = "æŠ˜æ‰£è¡¨kss_tb_agentprice, ";
        $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "delete from kss_tb_log_agentrmb where `pid`=".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['pid'], "sync" );
        if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ === FALSE )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "æ¸…ç†ä»£ç†è´¢åŠ¡æ—¥å¿—è¡¨kss_tb_log_agentrmbå‡ºé”™:".$_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4ÿ( ) );
        }
        $_obfuscate_i4mQlJGKioeNjJGMlI2LkZMÿ .= "ä»£ç†è´¢åŠ¡æ—¥å¿—è¡¨kss_tb_log_agentrmb, ";
        $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "delete from kss_tb_keyset where `pid`=".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['pid'], "sync" );
        if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ === FALSE )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "æ¸…ç†å¡ç±»è¡¨kss_tb_keysetå‡ºé”™:".$_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4ÿ( ) );
        }
        $_obfuscate_i4mQlJGKioeNjJGMlI2LkZMÿ .= "å¡ç±»è¡¨kss_tb_keyset, ";
        $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "delete from kss_tb_log_login where `pid`=".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['pid'], "sync" );
        if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ === FALSE )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "æ¸…ç†ç™»é™†æ—¥å¿—è¡¨kss_tb_log_loginå‡ºé”™:".$_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4ÿ( ) );
        }
        $_obfuscate_i4mQlJGKioeNjJGMlI2LkZMÿ .= "å¡ç±»è¡¨`kss_tb_log_login, ";
        $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "delete from kss_tb_order where `pid`=".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['pid'], "sync" );
        if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ === FALSE )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "åˆ é™¤ä½œè€…å¸å·æ—¶æ¸…ç†è®¢å•è¡¨kss_tb_orderå‡ºé”™:".$_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4ÿ( ) );
        }
        $_obfuscate_i4mQlJGKioeNjJGMlI2LkZMÿ .= "è®¢å•è¡¨kss_tb_order, ";
        $_obfuscate_iYmJioaKkIyOiY_PkJCOlJAÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_lZGTiIiKhouKiZGLi5KUkI8ÿ( "select * from kss_tb_soft where `pid`=".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['pid'] );
        if ( empty( $_obfuscate_iYmJioaKkIyOiY_PkJCOlJAÿ ) )
        {
            $_obfuscate_hoqPjpSQiImSkImUjoqJj4oÿ = array( );
            foreach ( $_obfuscate_iYmJioaKkIyOiY_PkJCOlJAÿ as $_obfuscate_lIiIk4yNiY_VhpGJjpOTh44ÿ )
            {
                $_obfuscate_hoqPjpSQiImSkImUjoqJj4oÿ[] = "`kss_z_user_".$_obfuscate_lIiIk4yNiY_VhpGJjpOTh44ÿ['pid']."_".$_obfuscate_lIiIk4yNiY_VhpGJjpOTh44ÿ['id']."`";
                $_obfuscate_hoqPjpSQiImSkImUjoqJj4oÿ[] = "`kss_z_key_".$_obfuscate_lIiIk4yNiY_VhpGJjpOTh44ÿ['pid']."_".$_obfuscate_lIiIk4yNiY_VhpGJjpOTh44ÿ['id']."`";
                $_obfuscate_hoqPjpSQiImSkImUjoqJj4oÿ[] = "`kss_z_log_".$_obfuscate_lIiIk4yNiY_VhpGJjpOTh44ÿ['pid']."_".$_obfuscate_lIiIk4yNiY_VhpGJjpOTh44ÿ['id']."`";
                $_obfuscate_hoqPjpSQiImSkImUjoqJj4oÿ[] = "`kss_z_client_".$_obfuscate_lIiIk4yNiY_VhpGJjpOTh44ÿ['pid']."_".$_obfuscate_lIiIk4yNiY_VhpGJjpOTh44ÿ['id']."`";
                $_obfuscate_hoqPjpSQiImSkImUjoqJj4oÿ[] = "`kss_z_cz_".$_obfuscate_lIiIk4yNiY_VhpGJjpOTh44ÿ['pid']."_".$_obfuscate_lIiIk4yNiY_VhpGJjpOTh44ÿ['id']."`";
                $_obfuscate_hoqPjpSQiImSkImUjoqJj4oÿ[] = "`kss_z_user_".$_obfuscate_lIiIk4yNiY_VhpGJjpOTh44ÿ['pid']."_".$_obfuscate_lIiIk4yNiY_VhpGJjpOTh44ÿ['id']."_recycle`";
                $_obfuscate_hoqPjpSQiImSkImUjoqJj4oÿ[] = "`kss_z_key_".$_obfuscate_lIiIk4yNiY_VhpGJjpOTh44ÿ['pid']."_".$_obfuscate_lIiIk4yNiY_VhpGJjpOTh44ÿ['id']."_recycle`";
            }
            $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "drop table if exists ".implode( ",", $_obfuscate_hoqPjpSQiImSkImUjoqJj4oÿ ), "sync" );
            if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ === FALSE )
            {
                _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "åˆ é™¤ä½œè€…å¸å·æ—¶æ¸…ç†ä¼šå‘˜æ•°æ®è¡¨kss_z_*å‡ºé”™:".$_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4ÿ( ) );
            }
            $_obfuscate_i4mQlJGKioeNjJGMlI2LkZMÿ .= "æ•°æ®è¡¨kss_z_ç³»åˆ—, ";
            $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "delete from kss_tb_soft where `pid`=".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['pid'], "sync" );
            if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ === FALSE )
            {
                _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "åˆ é™¤ä½œè€…å¸å·æ—¶æ¸…ç†è½¯ä»¶è¡¨kss_tb_softå‡ºé”™:".$_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4ÿ( ) );
            }
            $_obfuscate_i4mQlJGKioeNjJGMlI2LkZMÿ .= "è½¯ä»¶è¡¨kss_tb_soft, ";
        }
        $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "delete from kss_tb_manager where pid=".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['pid'], "sync" );
        if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ === FALSE )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "åˆ é™¤ä½œè€…å¸å·æ—¶æ¸…ç†kss_tb_managerå‡ºé”™:".$_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4ÿ( ) );
        }
    }
    _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "delokåˆ é™¤ä½œè€…å¸å·æˆåŠŸ" );
}
if ( $_obfuscate_k4mViI2Nj4mJkIuUj42JiIYÿ == "lock" )
{
    _obfuscate_kY6LiJGJiIiRiIuRjomOiZAÿ( );
    $_obfuscate_ho_Ljo6NjpOOhpGHj5KHiYsÿ = _obfuscate_i4mIkpOGkomKiouRhoaMh5Iÿ( "lock", "gp", "int", 0 );
    if ( $_obfuscate_komRjo6Qi4_Rh5KHi5SLhpEÿ == 0 )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "ä¼ å…¥çš„å¸å·IDé”™è¯¯ï¼" );
    }
    if ( $_obfuscate_komRjo6Qi4_Rh5KHi5SLhpEÿ == $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['id'] )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "ä½ ä¸èƒ½è‡ªå·±é”å®šè‡ªå·±ã€‚" );
    }
    $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJAÿ( "select * from kss_tb_manager where `id`=".$_obfuscate_komRjo6Qi4_Rh5KHi5SLhpEÿ );
    if ( empty( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ ) )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "ç”¨æˆ·å¸å·æ²¡æ‰¾åˆ°" );
    }
    if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['level'] != 9 && $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['pid'] != $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid'] )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "è¯¥å¸å·ä¸å±äºæ‚¨çš„(pid)ï¼Œæ‚¨æ— æƒæ“ä½œè¯¥å¸å·" );
    }
    if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['level'] == 7 && $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['id'] != $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['pmid'] )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "è¯¥ä»£ç†å¸å·ä¸æ˜¯æ‚¨çš„(pmid)ï¼Œä½ æ— æƒæ“ä½œ" );
    }
    if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['level'] <= $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['level'] )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "ä½ åªèƒ½é”å®šæ¯”ä½ çº§åˆ«ä½çš„å¸å·" );
    }
    if ( $_obfuscate_ho_Ljo6NjpOOhpGHj5KHiYsÿ == 1 )
    {
        $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "update kss_tb_manager set `islock`=0 where `id`=".$_obfuscate_komRjo6Qi4_Rh5KHi5SLhpEÿ, "sync" );
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "unlock" );
    }
    else
    {
        $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "update kss_tb_manager set `islock`=1 where `id`=".$_obfuscate_komRjo6Qi4_Rh5KHi5SLhpEÿ, "sync" );
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "lock" );
    }
}
$_obfuscate_lJKGipSShoyHi4aRkoyKjo0ÿ = array( );
$_obfuscate_lJKGipSShoyHi4aRkoyKjo0ÿ[0] = "æ— ";
$_obfuscate_jo_Mh4iRkIuRjYyUh5CVj4gÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_lZGTiIiKhouKiZGLi5KUkI8ÿ( "select id,username from kss_tb_manager" );
foreach ( $_obfuscate_jo_Mh4iRkIuRjYyUh5CVj4gÿ as $_obfuscate_ko2TkI6OjY_GiI2IjZKOlIoÿ )
{
    $_obfuscate_lJKGipSShoyHi4aRkoyKjo0ÿ[$_obfuscate_ko2TkI6OjY_GiI2IjZKOlIoÿ['id']] = $_obfuscate_ko2TkI6OjY_GiI2IjZKOlIoÿ['username'];
}
unset( $Œ‡ˆ‘‹‘Œ”‡•ˆ );
$_obfuscate_i4uIkYuKkJGQlJKOjoiMj4cÿ = array( "action" => $_obfuscate_lZOThomRipOIi5SRhpWRjY4ÿ );
$_obfuscate_k42Rh4mVlYqGi4mOiZWMjJAÿ = _obfuscate_i4mIkpOGkomKiouRhoaMh5Iÿ( "page", "gp", "int", 1 );
$_obfuscate_iYqPiJGIjoaVhoaQiI2Ti4wÿ = "SELECT `id` ";
$_obfuscate_jpCQi4aKkYaIjpSUhpWNipMÿ = "SELECT * ";
$_obfuscate_homTioySho6Vh5ORiYmUkokÿ = " where `id` in";
$_obfuscate_kZCPiJCHiI_IlY2Ok4_JlIcÿ = "SELECT count(*) as tnum ";
$_obfuscate_lJSNlZWKlYmGi4iSkIqHjpAÿ = "from `kss_tb_manager`  ";
$_obfuscate_h4eJlYuIjpKNio6QkIuJlIYÿ = array( );
$_obfuscate_j4aLlZCQhoyUh5GSjoeSh4cÿ = "username";
if ( stripos( $_SERVER['HTTP_HOST'], ".hphu.com" ) )
{
    $_obfuscate_j4aLlZCQhoyUh5GSjoeSh4cÿ = "qq";
}
$_obfuscate_hoaTko6Ki5GUioeUi5CNiJAÿ = _obfuscate_i4mIkpOGkomKiouRhoaMh5Iÿ( "keyword", "pg", "sql", "" );
$_obfuscate_iJKPi4eTkoaKhpOVio2Ojowÿ = _obfuscate_i4mIkpOGkomKiouRhoaMh5Iÿ( "filed", "pg", "sql", $_obfuscate_j4aLlZCQhoyUh5GSjoeSh4cÿ );
$_obfuscate_i4uIkYuKkJGQlJKOjoiMj4cÿ['keyword'] = $_obfuscate_hoaTko6Ki5GUioeUi5CNiJAÿ;
$_obfuscate_i4uIkYuKkJGQlJKOjoiMj4cÿ['filed'] = $_obfuscate_iJKPi4eTkoaKhpOVio2Ojowÿ;
if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['level'] == "9" && 1 < LICTYPE )
{
    $_obfuscate_h4eJlYuIjpKNio6QkIuJlIYÿ[] = " `isdel`=0 ";
    if ( $_obfuscate_hoaTko6Ki5GUioeUi5CNiJAÿ != "" )
    {
        switch ( $_obfuscate_iJKPi4eTkoaKhpOVio2Ojowÿ )
        {
            case "username" :
                $_obfuscate_h4eJlYuIjpKNio6QkIuJlIYÿ[] = " `username` like '".$_obfuscate_hoaTko6Ki5GUioeUi5CNiJAÿ."%'";
                break;
            case "pid" :
                $_obfuscate_h4eJlYuIjpKNio6QkIuJlIYÿ[] = " `pid`=".$_obfuscate_hoaTko6Ki5GUioeUi5CNiJAÿ;
                break;
            case "qq" :
                $_obfuscate_h4eJlYuIjpKNio6QkIuJlIYÿ[] = " `qq`='".$_obfuscate_hoaTko6Ki5GUioeUi5CNiJAÿ."'";
        }
    }
    $_obfuscate_jYeUjIaQh4_Gh46KjoeQipAÿ = _obfuscate_i4mIkpOGkomKiouRhoaMh5Iÿ( "level", "pg", "int", 0 );
    $_obfuscate_i4uIkYuKkJGQlJKOjoiMj4cÿ['level'] = $_obfuscate_jYeUjIaQh4_Gh46KjoeQipAÿ;
    switch ( $_obfuscate_jYeUjIaQh4_Gh46KjoeQipAÿ )
    {
        case "1" :
            $_obfuscate_h4eJlYuIjpKNio6QkIuJlIYÿ[] = " `level`>'7'";
            break;
        case "2" :
            $_obfuscate_h4eJlYuIjpKNio6QkIuJlIYÿ[] = " `level`='7'";
            break;
        case "3" :
            $_obfuscate_h4eJlYuIjpKNio6QkIuJlIYÿ[] = " `level`='6'";
        }
        else
        {
            $_obfuscate_h4eJlYuIjpKNio6QkIuJlIYÿ[] = " `pid`=".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid'];
            $_obfuscate_h4eJlYuIjpKNio6QkIuJlIYÿ[] = " `isdel`=0 ";
            if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['level'] == 7 )
            {
                $_obfuscate_h4eJlYuIjpKNio6QkIuJlIYÿ[] = " `level`=6 ";
                $_obfuscate_h4eJlYuIjpKNio6QkIuJlIYÿ[] = " `pmid`=".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['id']." ";
            }
            if ( $_obfuscate_hoaTko6Ki5GUioeUi5CNiJAÿ != "" )
            {
                switch ( $_obfuscate_iJKPi4eTkoaKhpOVio2Ojowÿ )
                {
                    case "username" :
                        $_obfuscate_h4eJlYuIjpKNio6QkIuJlIYÿ[] = " `username` like '".$_obfuscate_hoaTko6Ki5GUioeUi5CNiJAÿ."%'";
                        break;
                    case "qq" :
                        $_obfuscate_h4eJlYuIjpKNio6QkIuJlIYÿ[] = " `qq`='".$_obfuscate_hoaTko6Ki5GUioeUi5CNiJAÿ."'";
                }
            }
            if ( 7 < $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['level'] )
            {
                $_obfuscate_jYeUjIaQh4_Gh46KjoeQipAÿ = _obfuscate_i4mIkpOGkomKiouRhoaMh5Iÿ( "level", "pg", "int", 0 );
                $_obfuscate_i4uIkYuKkJGQlJKOjoiMj4cÿ['level'] = $_obfuscate_jYeUjIaQh4_Gh46KjoeQipAÿ;
                switch ( $_obfuscate_jYeUjIaQh4_Gh46KjoeQipAÿ )
                {
                    case "1" :
                        $_obfuscate_h4eJlYuIjpKNio6QkIuJlIYÿ[] = " `level`>'7'";
                        break;
                    case "2" :
                        $_obfuscate_h4eJlYuIjpKNio6QkIuJlIYÿ[] = " `level`='7'";
                        break;
                    case "3" :
                        $_obfuscate_h4eJlYuIjpKNio6QkIuJlIYÿ[] = " `level`='6'";
                }
            }
    }
}
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
echo "<textarea id=viewsql>";
echo htmlspecialchars( $_obfuscate_iYqPiJGIjoaVhoaQiI2Ti4wÿ.$_obfuscate_lJSNlZWKlYmGi4iSkIqHjpAÿ.$_obfuscate_j4mJh4aKjZKHhpOSiJKSjJIÿ." LIMIT ".( $_obfuscate_k42Rh4mVlYqGi4mOiZWMjJAÿ - 1 ) * ZPAGESIZE.",".ZPAGESIZE );
echo "\r\n";
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
    $_obfuscate_homTioySho6Vh5ORiYmUkokÿ .= "(".$_obfuscate_iIiHi4aTkoySkpCNio_UjYoÿ.") order by id asc";
    $_obfuscate_iYeIjIaVlYaIj4yTiJWHk40ÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_lZGTiIiKhouKiZGLi5KUkI8ÿ( $_obfuscate_jpCQi4aKkYaIjpSUhpWNipMÿ.$_obfuscate_lJSNlZWKlYmGi4iSkIqHjpAÿ.$_obfuscate_homTioySho6Vh5ORiYmUkokÿ );
    echo $_obfuscate_jpCQi4aKkYaIjpSUhpWNipMÿ.$_obfuscate_lJSNlZWKlYmGi4iSkIqHjpAÿ.$_obfuscate_homTioySho6Vh5ORiYmUkokÿ;
    echo "\r\n";
}
$_obfuscate_lJKOiJSHjo_Sj4yKk4aIh5Iÿ[] = _obfuscate_hpCTj4mKj5WSkpWPjouJkocÿ( );
$_obfuscate_k4yVk4iOipWPioqJlIuVkpEÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iouHh42RkIeKkYaSipWKiogÿ( $_obfuscate_k42Rh4mVlYqGi4mOiZWMjJAÿ, $_obfuscate_jIiNjZCPkoeUjI2LipCQk5Qÿ, $_obfuscate_i4uIkYuKkJGQlJKOjoiMj4cÿ )."<span class=page_nav_a>".$_obfuscate_lI_KipSOk4iQkI_MjIuVkpQÿ."è¡Œ  è€—æ—¶"._obfuscate_i4mGjpKMk5WRipSVi4mLi40ÿ( $_obfuscate_lJKOiJSHjo_Sj4yKk4aIh5Iÿ )."æ¯«ç§’</span>";
echo "</textarea><script type=\"text/javascript\">\r\n$(document).ready(function() { \r\n$(\"[delid]\").css('cursor','pointer').bind('click',function(){\r\nvar tid=$(this).attr(\"delid\");\r\nvar thref='admin_manager.php?action=managerlist&isajax=1&op=del&id='+tid;\t\r\nvar tlevel=\t$(this).attr(\"level\");\t\r\nvar talert='';\r\nif(tlevel==6){\r\ntalert='åˆ é™¤ä»£ç†å¸å·ä¼šè¿ä»£ç†çš„æ‰€æœ‰æ—¥å¿—ä¿¡æ¯ä¸€èµ·åˆ é™¤ï¼Œå¹¶ä¸”ä¸å¯æ¢å¤!<br>è¯¥ä»£ç†çš„æ³¨å†Œå¡å·ä¸ä¼šè¢«åˆ é™¤ã€‚<br>è¯·ç¡®è®¤æ˜¯å¦åˆ é™¤è¯¥ä»£ç†å¸å·ï¼Ÿ';\r\n}else if(tlevel==7){\r\ntalert='æ€»ä»£ç†å¸å·ä¸‹æ²¡æœ‰ä»£ç†å¸å·æ‰å¯ä»¥åˆ é™¤ï¼Œä¸”åˆ é™¤åä¸å¯ä»¥æ¢å¤ã€‚<br>è¯·ç¡®è®¤æ˜¯å¦åˆ é™¤è¯¥æ€»ä»£ç†å¸å·ï¼Ÿ';\t\r\n}else if(tlevel==8){\r\ntalert='åˆ é™¤ä½œè€…å¸å·ä¼šè¿ä½œè€…çš„æ‰€æœ‰è½¯ä»¶ä¸€èµ·åˆ é™¤ï¼Œå¹¶ä¸”ä¸å¯æ¢å¤!<br>æ˜¯å¦åˆ é™¤è¯¥ä½œè€…å¸å·å—ï¼Ÿ';\t\t\t\r\n}else{\r\nmalert('è¿™æ˜¯ç®¡ç†å‘˜å¸å·ç¦æ­¢åˆ é™¤!');\r\nreturn false;\r\n}\r\nmalert(talert,'è­¦å‘Š',500,60,function(){\r\n$.ajax({\r\nurl: thref,\r\ncache: false,\r\nsuccess: function(html){\r\nif(html.substr(0,5)=='delok'){\r\n$(\"#trmanagerid\"+tid).remove();\t\r\nmalert(html.substr(5));\t\t\r\n}else{\r\nmalert(html);\r\n}\r\n},\r\nerror:function(XMLHttpRequest, textStatus, errorThrown) {\r\nalert(ourl)\r\n} \r\n});\r\n});\r\n});\r\n\r\n\r\n$(\"[lockid]\").bind('click',function(){\r\nvar othis=$(this);\r\nislock=othis.attr(\"lock\");\r\nvar ourl=\"admin_manager.php?action=managerlist&op=lock&isajax=1&id=\"+$(this).attr(\"lockid\")+\"&lock=\"+islock;\r\n$.ajax({\r\nurl: ourl,\r\ncache: false,\r\nsuccess: function(html){\r\nif(html=='lock'){\r\nothis.attr(\"lock\",1);\r\nothis.attr(\"src\",othis.attr(\"src\").replace(\"b_usrcheck.png\",\"b_uncheck.png\"));\t\t\t\t\r\n}else if(html=='unlock'){\r\nothis.attr(\"lock\",0);\r\nothis.attr(\"src\",othis.attr(\"src\").replace(\"b_uncheck.png\",\"b_usrcheck.png\"));\r\n}else{\r\nmalert(html);\r\n}\r\n},\r\nerror:function(XMLHttpRequest, textStatus, errorThrown) {\r\nalert(ourl)\r\n} \r\n});\t\r\n});\r\n\r\n\r\n});\r\n</script>\r\n";
if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['level'] == 9 && 1 < LICTYPE )
{
    echo "<table class=\"listtable\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\" align=\"center\" width=\"97%\">\r\n<tr>\r\n<td class=\"findorpage\"><form id=\"find_manager\" action=\"?action=managerlist\" method=\"post\"> \r\n<select name=\"level\" style=\"width:200px;height:22px\">\r\n<option value=0";
    echo $_obfuscate_jYeUjIaQh4_Gh46KjoeQipAÿ == 0 ? " selected" : "";
    echo ">æ˜¾ç¤ºæ‰€æœ‰ç±»å‹å¸å·</option>\r\n<option value=1";
    echo $_obfuscate_jYeUjIaQh4_Gh46KjoeQipAÿ == 1 ? " selected" : "";
    echo ">åªæ˜¾ç¤ºä½œè€…å¸å·</option>\r\n<option value=2";
    echo $_obfuscate_jYeUjIaQh4_Gh46KjoeQipAÿ == 2 ? " selected" : "";
    echo ">åªæ˜¾ç¤ºæ€»ä»£ç†å¸å·</option>\r\n<option value=3";
    echo $_obfuscate_jYeUjIaQh4_Gh46KjoeQipAÿ == 3 ? " selected" : "";
    echo ">åªæ˜¾ç¤ºä»£ç†å¸å·</option>\r\n</select>\r\n<select name=\"filed\" style=\"width:200px;height:22px\">\r\n<option value='qq' ";
    echo $_obfuscate_iJKPi4eTkoaKhpOVio2Ojowÿ == "qq" ? " selected" : "";
    echo ">QQ</option>\r\n<option value='username' ";
    echo $_obfuscate_iJKPi4eTkoaKhpOVio2Ojowÿ == "username" ? " selected" : "";
    echo ">ç”¨æˆ·å</option>\r\n";
    if ( 1000 < LICTYPE && $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['level'] == 9 )
    {
        echo "<option value='pid' ";
        echo $_obfuscate_iJKPi4eTkoaKhpOVio2Ojowÿ == "pid" ? " selected" : "";
        echo ">PID</option>\r\n";
    }
    echo "</select>=><input type=\"text\" class=\"smlinput\" name=\"keyword\" value=\"";
    echo $_obfuscate_hoaTko6Ki5GUioeUi5CNiJAÿ;
    echo "\" onclick=\"this.select()\"/>\r\n<input type=\"submit\" name=\"submit\" class=\"submitbtn\" value=\"æŸ¥æ‰¾å¸å·\" />\r\n</form></td>\r\n</tr>\r\n</table>\r\n";
}
else
{
    echo "<table class=\"listtable\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\" align=\"center\" width=\"97%\">\r\n<tr>\r\n<td class=\"findorpage\"><form id=\"find_manager\" action=\"?action=managerlist\" method=\"post\">\r\n";
    if ( 7 < $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['level'] )
    {
        echo "<select name=\"level\" style=\"width:200px;height:22px\">\r\n<option value=0";
        echo $_obfuscate_jYeUjIaQh4_Gh46KjoeQipAÿ == 0 ? " selected" : "";
        echo ">æ‰€æœ‰å¸å·</option>\r\n<option value=2";
        echo $_obfuscate_jYeUjIaQh4_Gh46KjoeQipAÿ == 2 ? " selected" : "";
        echo ">æ‰€æœ‰æ€»ä»£ç†å¸å·</option>\r\n<option value=3";
        echo $_obfuscate_jYeUjIaQh4_Gh46KjoeQipAÿ == 3 ? " selected" : "";
        echo ">æ‰€æœ‰ä»£ç†å¸å·</option>\r\n</select>\r\n";
    }
    else
    {
        echo "<input type='hidden' name='level' value=0 />";
    }
    echo "<select name=\"filed\" style=\"width:200px;height:22px\">\r\n<option value='username' ";
    echo $_obfuscate_iJKPi4eTkoaKhpOVio2Ojowÿ == "username" ? " selected" : "";
    echo ">ç”¨æˆ·å</option>\r\n<option value='qq' ";
    echo $_obfuscate_iJKPi4eTkoaKhpOVio2Ojowÿ == "qq" ? " selected" : "";
    echo ">QQ</option>\r\n</select>=><input type=\"text\" class=\"smlinput\" name=\"keyword\" value=\"";
    echo $_obfuscate_hoaTko6Ki5GUioeUi5CNiJAÿ;
    echo "\" onclick=\"this.select()\"/>\r\n<input type=\"submit\" name=\"submit\" class=\"submitbtn\" value=\"æŸ¥æ‰¾å¸å·\" />\r\n</form></td>\r\n</tr>\r\n</table>\r\n";
}
echo "<table class=\"listtable\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\" align=\"center\" width=\"97%\">\r\n<tr>\r\n<td class=\"findorpage\">";
echo $_obfuscate_k4yVk4iOipWPioqJlIuVkpEÿ;
echo "</td>\r\n</tr>\r\n</table>\r\n<table class=\"listtable\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\" align=\"center\" width=\"97%\">\r\n<tr class=\"trhead\">\r\n<td malt=\"åå°å¸å·ID\">ID</td>\r\n";
if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['level'] == 9 && 1 < LICTYPE )
{
    echo "<td>PID</td>";
}
echo "<td>å¸å·</td>\r\n<td>ä½™é¢</td>\r\n<td>ä¸Šçº§</td>\r\n<td>QQ</td>\r\n<td>ç±»å‹</td>\r\n<td>æ·»åŠ æ—¥æœŸ</td>\r\n<td>åˆ°æœŸæ—¥æœŸ</td>\r\n<td>æœ€åç™»å½•æ—¥æœŸ</td>\r\n<td>æœ€åç™»å½•IP</td>\r\n<td colspan=4>æ“ä½œ</td>\r\n</tr>\r\n";
if ( empty( $_obfuscate_iYeIjIaVlYaIj4yTiJWHk40ÿ ) )
{
    if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['level'] == 9 && 1 < LICTYPE )
    {
        echo "<tr class=trd><td colspan=14>æ— ä»»ä½•æ•°æ®</td></tr>";
    }
    else
    {
        echo "<tr class=trd><td colspan=13>æ— ä»»ä½•æ•°æ®</td></tr>";
    }
}
else
{
    foreach ( $_obfuscate_iYeIjIaVlYaIj4yTiJWHk40ÿ as $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ )
    {
        echo "<tr class=\"trd\" id=\"trmanagerid";
        echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['id'];
        echo "\">\r\n<td>";
        echo "<input type='checkbox' value='".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['id']."' ";
        if ( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['level'] != 6 )
        {
            echo "disabled='disabled' name='vailids' ";
        }
        else
        {
            echo "name='ids'";
        }
        echo ">".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['id'];
        echo "</td>\t\t\r\n";
        if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['level'] == 9 && 1 < LICTYPE )
        {
            echo "<td>".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['pid']."</td>";
        }
        if ( 8 < $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['level'] && 7 < $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['level'] )
        {
            echo "<td><a href=admin_manager.php?action=mmlogin&id=".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['id'].">"._obfuscate_j5CKkY_GkomSkoaUlIuLlYkÿ( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['username'] )."</a></td>";
        }
        else
        {
            echo "<td>".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['username']."</td>";
        }
        echo "<td>".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['rmb']."</td>";
        echo "<td>".$_obfuscate_lJKGipSShoyHi4aRkoyKjo0ÿ[$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['pmid']]."</td>";
        echo "\r\n<td>";
        echo _obfuscate_j5CKkY_GkomSkoaUlIuLlYkÿ( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['qq'] );
        echo "</td>\r\n<td>";
        echo $_obfuscate_jJCMjYyHjpSTiJCNiYiIkpEÿ[$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['level']];
        echo "</td>\r\n<td>";
        echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['addtime'];
        echo "</td>\r\n<td ";
        if ( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['endtime'] < date( "Y-m-d H:i:s" ) )
        {
            echo "style='color:red'";
        }
        echo ">";
        echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['endtime'];
        echo "</td>\r\n<td>";
        echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['lastlogintime'];
        echo "</td>\r\n<td class=isip>";
        echo long2ip( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['lastloginip'] );
        echo "</td>\r\n<td width=\"20\"><img lockid=\"";
        echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['id'];
        echo "\" lock=\"";
        echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['islock'];
        echo "\" malt=\"ç‚¹å‡»æ­¤æŒ‰é’®é”å®šæˆ–è§£é”ï¼Œç»¿è‰²å°å¯¹å·è¡¨ç¤ºæ­£å¸¸çŠ¶æ€ç‚¹å‡»å³å¯é”å®šï¼Œç°è‰²å°é”è¡¨ç¤ºæ˜¯é”å®šçŠ¶æ€ç‚¹å‡»å¯è§£é”\" src=\"";
        echo INSTALLPATH;
        echo "kss_inc/images/";
        echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['islock'] == 1 ? "b_uncheck.png" : "b_usrcheck.png";
        echo "\"></td>\r\n<td width=\"20\"><a href=\"javascript:void(0)\"  onclick=\"dwin('sup_addmanageruser','ç¼–è¾‘åå°å¸å·','admin_manager.php?action=addmanager&id=";
        echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['id'];
        echo "')\"><img malt=\"ç¼–è¾‘è¯¥å¸å·\" src=\"";
        echo INSTALLPATH;
        echo "kss_inc/images/b_edit.png\" ></a></td>\r\n<td width=\"20\"><a href=\"javascript:void(0)\"  onclick=\"dwin('info_myoplog','åå°å¸å·ç™»é™†æ—¥å¿—','admin_logs.php?action=managerlogin&managerid=";
        echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['id'];
        echo "')\"><img malt=\"è¯¥å¸å·ç™»é™†åå°çš„æ—¥å¿—è®°å½•\" src=\"";
        echo INSTALLPATH;
        echo "kss_inc/images/b_calendar.png\"></a></td>\r\n<td width=\"20\"><img level=";
        echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['level'];
        echo " delid=\"";
        echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['id'];
        echo "\" malt=\"åˆ é™¤è¯¥ç”¨æˆ·\" src=\"";
        echo INSTALLPATH;
        echo "kss_inc/images/bd_drop.png\"></td>\r\n</tr>\r\n";
    }
}
echo "</table>\r\n<!-- æ‰¹å¤„ç†æå¡æˆæƒå¼€å§‹ -->\r\n";
if ( 7 < $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['level'] )
{
    $_obfuscate_hpWVkpCIi4yPiIeQkI6RkYYÿ = $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid']( "select * from kss_tb_keyset where `pid`=".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid']." and `islock`=0" );
}
else
{
    $_obfuscate_hpWVkpCIi4yPiIeQkI6RkYYÿ = $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid']( "select * from kss_tb_keyset where `pid`=".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid']." and `islock`=0 and `id` in (select distinct `keygroupid` from `kss_tb_agentprice` where managerid=".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['id'].") " );
}
$_obfuscate_kZOSlZGUjouQjI2TlY6Gh4wÿ = "";
if ( empty( $_obfuscate_hpWVkpCIi4yPiIeQkI6RkYYÿ ) )
{
    $_obfuscate_kZOSlZGUjouQjI2TlY6Gh4wÿ = array( );
    foreach ( $_obfuscate_hpWVkpCIi4yPiIeQkI6RkYYÿ as $_obfuscate_lJCSkoeMho2PlJOLiouJj4Yÿ )
    {
        $_obfuscate_lJCSkoeMho2PlJOLiouJj4Yÿ['keyname'] = _obfuscate_j5CKkY_GkomSkoaUlIuLlYkÿ( $_obfuscate_lJCSkoeMho2PlJOLiouJj4Yÿ['keyname'] );
        $_obfuscate_lJCSkoeMho2PlJOLiouJj4Yÿ['keyname'] = _obfuscate_j5CKkY_GkomSkoaUlIuLlYkÿ( $_obfuscate_lJCSkoeMho2PlJOLiouJj4Yÿ['keyname'] );
        $_obfuscate_lJCSkoeMho2PlJOLiouJj4Yÿ['extattr1'] = _obfuscate_j5CKkY_GkomSkoaUlIuLlYkÿ( $_obfuscate_lJCSkoeMho2PlJOLiouJj4Yÿ['extattr1'] );
        $_obfuscate_lJCSkoeMho2PlJOLiouJj4Yÿ['extattr1'] = _obfuscate_j5CKkY_GkomSkoaUlIuLlYkÿ( $_obfuscate_lJCSkoeMho2PlJOLiouJj4Yÿ['extattr1'] );
        $_obfuscate_kZOSlZGUjouQjI2TlY6Gh4wÿ[] = "['".$_obfuscate_lJCSkoeMho2PlJOLiouJj4Yÿ['softid']."','".$_obfuscate_lJCSkoeMho2PlJOLiouJj4Yÿ['keyname']."','".$_obfuscate_lJCSkoeMho2PlJOLiouJj4Yÿ['cday']."','".$_obfuscate_lJCSkoeMho2PlJOLiouJj4Yÿ['points']."','".$_obfuscate_lJCSkoeMho2PlJOLiouJj4Yÿ['linknum']."','".$_obfuscate_lJCSkoeMho2PlJOLiouJj4Yÿ['retailprice']."','".$_obfuscate_lJCSkoeMho2PlJOLiouJj4Yÿ['id']."']";
    }
    $_obfuscate_kZOSlZGUjouQjI2TlY6Gh4wÿ = implode( ",", $_obfuscate_kZOSlZGUjouQjI2TlY6Gh4wÿ );
}
echo "<script>\r\n";
echo "var kgroup=[".$_obfuscate_kZOSlZGUjouQjI2TlY6Gh4wÿ."];";
echo "function getids(){\t\t\r\nvar idsjsstr='';\r\nvar idsjsjoin='';\r\n$(\"input[name='ids']:checked\").each(function(){\r\nidsjsstr=idsjsstr+idsjsjoin+$(this).val(); \r\nidsjsjoin=',';  \r\n});\r\nreturn idsjsstr;\t\r\n}\r\n\r\n$(document).ready(function() { \r\n$(\"#w_softid\").bind('change',function(){\r\nvar tval=$(this).val();\r\nvar optdata='';\r\nvar piss=0;\r\nif(tval!=0){\r\nfor(var i = 0; i < kgroup.length; i++)  {        \nif(kgroup[i][0]==tval){\r\nif(piss==0){\r\n$(\"#w_rprice\").text(kgroup[i][5]);\r\npiss=1;\r\n}\r\noptdata +='<option rprice='+kgroup[i][5]+' value=\"'+kgroup[i][6]+'\">'+kgroup[i][1]+'--'+kgroup[i][2]+'å¤©--'+kgroup[i][3]+'ç‚¹--'+kgroup[i][4]+'é€šé“</option>';\r\n}\r\n}\r\n$(\"#w_kgid\").html(optdata);\r\n}\r\n\r\n});\r\n$(\"#w_kgid\").bind('change',function(){\r\nvar rpei=$(\"#w_kgid option:selected\").attr(\"rprice\");\r\n$(\"#w_rprice\").text(rpei);\t\t\t\r\n});\t\r\n$(\"#chkall\").click(function(){ \r\n$(\"input[name='ids']\").checkCbx(); \r\n});\t\r\n\r\n$('#w_delkeyprice').bind(\"click\",function(e){\t\t\r\nvar idsstr=getids();\r\nif(idsstr==''){\r\nmalert('è¯·æœ€å°‘é€‰æ‹©ä¸€ä¸ªä»£ç†');\r\nreturn false;\r\n}\r\nif($(\"#w_softid\").val()==0){\r\nmalert('è¯·é€‰æ‹©ä¸€ä¸ªè½¯ä»¶');\r\nreturn false;\r\n}\r\nvar thref='admin_manager.php?action=managerlist_delprice&isajax=1';\r\nthref=thref+'&w_tmpkey='+$(\"#w_tmpkey\").val();\t\r\nthref=thref+'&w_softid='+$(\"#w_softid\").val();\r\nthref=thref+'&w_kgid='+$(\"#w_kgid\").val();\r\nthref=thref+'&w_id='+idsstr;\r\nMouse(e);\r\n$.ajax({\r\nurl: thref,\r\ncache: false,\r\nsuccess: function(html){\r\nif(html.substr(0,5)=='delok'){\r\nmview('æ‰¹é‡åˆ é™¤æå¡æˆæƒæ·»åŠ æˆåŠŸï¼',-20,-200);\t\t\r\n}else{\r\nmalert(html);\r\n}\r\n},\r\nerror:function(XMLHttpRequest, textStatus, errorThrown) {\r\nalert(ourl)\r\n} \r\n});\r\n\r\n});\t\t\t\r\n$('#w_savekeyprice').bind(\"click\",function(e){\t\t\r\nvar idsstr=getids();\r\nif(idsstr==''){\r\nmalert('è¯·æœ€å°‘é€‰æ‹©ä¸€ä¸ªä»£ç†');\r\nreturn false;\r\n}\r\nif($(\"#w_softid\").val()==0){\r\nmalert('è¯·é€‰æ‹©ä¸€ä¸ªè½¯ä»¶');\r\nreturn false;\r\n}\r\nif($(\"#w_keyprice\").val()<=0){\r\nmalert('è¯·è¾“å…¥ä¸€ä¸ªä»£ç†ä»·');\r\nreturn false;\r\n}\r\nvar thref='admin_manager.php?action=managerlist_saveprice&isajax=1';\t\r\nthref=thref+'&w_tmpkey='+$(\"#w_tmpkey\").val();\t\r\nthref=thref+'&w_softid='+$(\"#w_softid\").val();\t\r\nthref=thref+'&w_kgid='+$(\"#w_kgid\").val();\t\r\nthref=thref+'&w_keyprice='+$(\"#w_keyprice\").val();\r\nthref=thref+'&w_id='+idsstr;\r\nMouse(e);\r\n$.ajax({\r\nurl: thref,\r\ncache: false,\r\nsuccess: function(html){\r\nif(html.substr(0,6)=='saveok'){\r\nmview('æ‰¹é‡ä¿å­˜æå¡æˆæƒæ·»åŠ æˆåŠŸï¼',-20,-200);\t\t\r\n}else{\r\nmalert(html);\r\n}\r\n},\r\nerror:function(XMLHttpRequest, textStatus, errorThrown) {\r\nalert(ourl)\r\n} \r\n});\r\n\r\n});\t        \r\n});\r\n</script>\r\n<table class=\"listtable\" id=\"keypricesets\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\" align=\"center\" width=\"97%\">\r\n<tr class=\"trhead\">\r\n<td>ç”¨æˆ·åˆ—è¡¨ä¸­é€‰æ‹©çš„ä»£ç†</td>\r\n<td>è½¯ä»¶å</td>\r\n<td>å¡ç±»</td>\r\n<td>é›¶å”®ä»·</td>\r\n<td id=\"whprice\">ä»£ç†ä»·</td>\r\n<td>æ“ä½œ</td>\r\n</tr>\r\n";
$_obfuscate_h4uPi4aIh5KQjIiIi4aNkZMÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_lZGTiIiKhouKiZGLi5KUkI8ÿ( "select kss_tb_agentprice.*, kss_tb_keyset.`keyname`, kss_tb_keyset.`retailprice`, kss_tb_keyset.cday, kss_tb_keyset.points, kss_tb_keyset.linknum ,kss_tb_soft.`softname` from kss_tb_agentprice left join kss_tb_keyset on kss_tb_agentprice.`keygroupid`=kss_tb_keyset.`id` left join kss_tb_soft on kss_tb_agentprice.softid=kss_tb_soft.`id` where kss_tb_agentprice.managerid=".$_obfuscate_komRjo6Qi4_Rh5KHi5SLhpEÿ." and kss_tb_agentprice.`tmpkey`='no' order by softid" );
if ( 7 < $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['level'] )
{
    $_obfuscate_k5SLh42UiZKPkouUjIuKjJIÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_lZGTiIiKhouKiZGLi5KUkI8ÿ( "select `id`,`softname` from kss_tb_soft where `pid`=".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid'] );
}
else
{
    $_obfuscate_k5SLh42UiZKPkouUjIuKjJIÿ = $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid']( "select `id`,`softname` from kss_tb_soft where `pid`=".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid']." and id in (select distinct `softid` from `kss_tb_agentprice` where managerid=".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['id'].")" );
}
echo "<tr class=\"trd\" id=\"trkeyprice\">\r\n<td><input type=\"button\" name=\"chkall\" id=\"chkall\" value=\"å…¨é€‰/åé€‰\" class=\"submitbtn\"></td>\r\n<td><input type=hidden name='w_tmpkey' value='no' id='w_tmpkey'><input type=hidden value='";
echo $_obfuscate_komRjo6Qi4_Rh5KHi5SLhpEÿ;
echo "' id='w_mid'><select name='w_softid' id=\"w_softid\"><option value='0'>é€‰æ‹©è½¯ä»¶</option>\r\n";
foreach ( $_obfuscate_k5SLh42UiZKPkouUjIuKjJIÿ as $_obfuscate_jpSNkYeQi5CGjIeTipSTkYYÿ )
{
    $_obfuscate_jpSNkYeQi5CGjIeTipSTkYYÿ['softname'] = _obfuscate_j5CKkY_GkomSkoaUlIuLlYkÿ( $_obfuscate_jpSNkYeQi5CGjIeTipSTkYYÿ['softname'] );
    echo "<option value=".$_obfuscate_jpSNkYeQi5CGjIeTipSTkYYÿ['id'].">".$_obfuscate_jpSNkYeQi5CGjIeTipSTkYYÿ['softname']."</option>";
}
echo "\t\t\t\t\t\t\t\r\n</select></td>\r\n<td><select name='w_kgid' id=\"w_kgid\"><option value='0'>è¯·å…ˆé€‰æ‹©è½¯ä»¶</option></select></td>\r\n<td id=\"w_rprice\">&nbsp;</td>\r\n<td><input maxlength=\"8\" type=text id='w_keyprice' class=smlinput value='0'></td>\r\n<td><input type=button class=submitbtn value=\"ä¿å­˜æˆæƒ\" id=\"w_savekeyprice\">&nbsp;<input type=button class=submitbtn value=\"åˆ é™¤æˆæƒ\" id=\"w_delkeyprice\"></td>\r\n\r\n</tr>\r\n</table>\r\n\r\n<!-- æ‰¹å¤„ç†æå¡æˆæƒç»“æŸ -->\t\t\t\t\r\n<table class=\"listtable\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\" align=\"center\" width=\"97%\">\r\n<tr>\r\n<td class=\"findorpage\">";
echo $_obfuscate_k4yVk4iOipWPioqJlIuVkpEÿ;
echo "</td>\r\n</tr>\r\n</table>\r\n";
$_obfuscate_i5GVjZWQj4ePkJKMjJSRipMÿ[] = _obfuscate_hpCTj4mKj5WSkpWPjouJkocÿ( );
echo "<div id=pageruntime>é¡µé¢è¿è¡Œæ—¶é—´"._obfuscate_i4mGjpKMk5WRipSVi4mLi40ÿ( $_obfuscate_i5GVjZWQj4ePkJKMjJSRipMÿ )."æ¯«ç§’</div>";
echo "</body>\r\n</html>";
?>
