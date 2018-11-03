<?php
/*********************/
/*                   */
/*  Dezend for PHP5  */
/*         NWS       */
/*      Nulled.WS    */
/*                   */
/*********************/

function _obfuscate_lIaSjpGPlImJk42Mk5CPiJA�( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� = 1 )
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
$_obfuscate_h4qRkYiVi4uHlZWKk42JlI0� = "�����������������";
_obfuscate_kY6LiJGJiIiRiIuRjomOiZA�( );
$_obfuscate_i5GVjZWQj4ePkJKMjJSRipM�[] = _obfuscate_hpCTj4mKj5WSkpWPjouJkoc�( );
$_obfuscate_jIaUiIeSjZWKlIqLkIqOioc� = new mysql_cls( );
$$_obfuscate_h4qRkYiVi4uHlZWKk42JlI0� = _obfuscate_iZSVk4mLkY_LlIeHh5WKlZA�( 6 );
if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] == 9 )
{
    _obfuscate_lI_NjpSLio_JjZCVh4qUjYc�( );
}
if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] == 7 )
{
    _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( $_obfuscate_jJCMjYyHjpSTiJCNiYiIkpE�[7]."帐号不能添加任何注册卡。<br>如若".$_obfuscate_jJCMjYyHjpSTiJCNiYiIkpE�[7]."帐号需要销售注册卡，请添加一个自己用的".$_obfuscate_jJCMjYyHjpSTiJCNiYiIkpE�[6]."帐号。" );
}
$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "softid", "gp", "int", 0 );
$_obfuscate_jZGRipSRkIeUiIeQjoaUjJI� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "select * from kss_tb_soft where id=".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE� );
if ( empty( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI� ) )
{
    _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "软件不存在" );
}
if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['pid'] != $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid'] )
{
    _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "您不能为该软件添加注册卡号" );
}
$_obfuscate_lIiPjo6LjoqUjYiUjJKOhpA� = 1;
$_obfuscate_lJOGjpSRkI2NiJSIjpCKj5A� = _obfuscate_iY6RiYaNio6PiIyIiZWJkJQ�( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid'], 1 );
if ( !empty( $_obfuscate_lJOGjpSRkI2NiJSIjpCKj5A� ) && $_obfuscate_lJOGjpSRkI2NiJSIjpCKj5A�['islock'] == 0 )
{
    $_obfuscate_lIiPjo6LjoqUjYiUjJKOhpA� = 0;
}
$_obfuscate_jYiHj4qPj4aUlIiUjIyJipE� = _obfuscate_iY6RiYaNio6PiIyIiZWJkJQ�( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid'] );
$_obfuscate_kIiVkYqGk4aTjoyIiJGGlYo� = FALSE;
if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] == 6 )
{
    $_obfuscate_kIiVkYqGk4aTjoyIiJGGlYo� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_lZGTiIiKhouKiZGLi5KUkI8�( "select * from kss_tb_agentprice where `softid`=".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE�." and managerid=".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['id'] );
    if ( empty( $_obfuscate_kIiVkYqGk4aTjoyIiJGGlYo� ) )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "您没有该软件的管理授权" );
    }
}
if ( $_obfuscate_lZOThomRipOIi5SRhpWRjY4� == "addkey_save" )
{
    _obfuscate_kY6LiJGJiIiRiIuRjomOiZA�( );
    $_obfuscate_i46NkpCVjoqTipKRlYuVlZE� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "keygroupid", "p", "int", 0 );
    $_obfuscate_hpCPjIePioeHkYiIhpSPkok� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "keynum", "p", "int", 0 );
    $_obfuscate_lYqOkIyVi5WGhoqLhouThoo� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "tags", "p", "sqljs", "" );
    if ( 50 < _obfuscate_ioqHi5WHiJKIkoeIhouHjYw�( $_obfuscate_lYqOkIyVi5WGhoqLhouThoo� ) )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "标签长度超出50个字符" );
    }
    if ( $_obfuscate_i46NkpCVjoqTipKRlYuVlZE� == 0 )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "请选择卡类" );
    }
    if ( 500 < $_obfuscate_hpCPjIePioeHkYiIhpSPkok� || $_obfuscate_hpCPjIePioeHkYiIhpSPkok� < 1 )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "每次添加最少1张卡，最多500张卡！" );
    }
    $_obfuscate_j4ePi5GUjJSIj4iTiJOVh40� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "select * from kss_tb_keyset where `id`=".$_obfuscate_i46NkpCVjoqTipKRlYuVlZE�." and `softid`=".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE�." and `islock`=0" );
    if ( empty( $_obfuscate_j4ePi5GUjJSIj4iTiJOVh40� ) )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "卡类未找到" );
    }
    $_obfuscate_iJGKkZWOkpKNjIeMj5OHjYY� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "kmid", "gp", "int", 0 );
    $_obfuscate_jo2NiZGSi42JiJSRlY2JkpA� = $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['id'];
    if ( 7 < $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] && 0 < $_obfuscate_iJGKkZWOkpKNjIeMj5OHjYY� )
    {
        $_obfuscate_lZORi4mPj4uSh5CVjoyPho8� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "select * from kss_tb_manager where id=".$_obfuscate_iJGKkZWOkpKNjIeMj5OHjYY�." and pid=".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid'] );
        if ( empty( $_obfuscate_lZORi4mPj4uSh5CVjoyPho8� ) )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "指定的代理帐号未找到" );
        }
        $_obfuscate_jo2NiZGSi42JiJSRlY2JkpA� = $_obfuscate_iJGKkZWOkpKNjIeMj5OHjYY�;
    }
    $_obfuscate_k5KJkIyVkZWKk4_NiJSQlIk� = $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE� );
    if ( $_obfuscate_k5KJkIyVkZWKk4_NiJSQlIk� !== TRUE )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "添加注册卡时未能成功独占操作：".$_obfuscate_k5KJkIyVkZWKk4_NiJSQlIk� );
    }
    $_obfuscate_iJWMjIiVi5OGjJOViY2Li48� = _obfuscate_jY_QjpOPk46MkoqNlZCQiJU�( "K" );
    $_obfuscate_hoiIjJOLhoyKjZONh4eLiZU� = 0;
    $_obfuscate_hpGMlZWJho_Pj5CNlJWUiJI� = 0;
    $_obfuscate_iIyOkY2Rh5GOhoiJkJSPj4w� = 1;
    $_obfuscate_jZGIi4eRiJOGjJCKk42IjI8� = "";
    $_obfuscate_hpKUj5GNh4aPlI2JhpSGlZE� = "";
    $_obfuscate_i4yTlYaRiIeKjY6QjImVi5E� = "";
    if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] == 6 )
    {
        $_obfuscate_kYqLhouRj5GLipOGk4iPh4c� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "select * from kss_tb_agentprice where `softid`=".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE�." and `keygroupid`=".$_obfuscate_i46NkpCVjoqTipKRlYuVlZE�." and `managerid`=".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['id']." and `tmpkey`='no'" );
        if ( empty( $_obfuscate_kYqLhouRj5GLipOGk4iPh4c� ) )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "你的帐号没有该卡的提卡授权！" );
        }
        if ( $_obfuscate_kYqLhouRj5GLipOGk4iPh4c�['keyprice'] == 0 )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "你的帐号该卡类授权价格为0不允许提卡！" );
        }
        $_obfuscate_h5SKjZOQh4yGkoqGkYuUj4Y� = $_obfuscate_kYqLhouRj5GLipOGk4iPh4c�['keyprice'];
        $_obfuscate_hoiIjJOLhoyKjZONh4eLiZU� = $_obfuscate_h5SKjZOQh4yGkoqGkYuUj4Y� * $_obfuscate_hpCPjIePioeHkYiIhpSPkok�;
        $_obfuscate_iIyOkY2Rh5GOhoiJkJSPj4w� = 1;
        if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['touzhirmb'] + $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['rmb'] < $_obfuscate_hoiIjJOLhoyKjZONh4eLiZU� )
        {
            $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE� );
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "余额不足，请先充值后再提卡！" );
        }
        $_obfuscate_lJOGjpSRkI2NiJSIjpCKj5A� = _obfuscate_iY6RiYaNio6PiIyIiZWJkJQ�( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid'], $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pmid'] );
        if ( empty( $_obfuscate_lJOGjpSRkI2NiJSIjpCKj5A� ) )
        {
            $_obfuscate_hoaGiZOUjIyGk4eMjJCPio0� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "select * from kss_tb_agentprice where `softid`=".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE�." and `keygroupid`=".$_obfuscate_i46NkpCVjoqTipKRlYuVlZE�." and `managerid`=".$_obfuscate_lJOGjpSRkI2NiJSIjpCKj5A�['id']." and `tmpkey`='no'" );
            if ( empty( $_obfuscate_hoaGiZOUjIyGk4eMjJCPio0� ) )
            {
                _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "上级总代没有该卡的提卡授权！" );
            }
            if ( $_obfuscate_hoaGiZOUjIyGk4eMjJCPio0�['keyprice'] == 0 )
            {
                _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "上级总代该卡类授权价格为0不允许提卡！" );
            }
            $_obfuscate_jo_ThoyRjpCLkoqVkYeViJA� = $_obfuscate_hoaGiZOUjIyGk4eMjJCPio0�['keyprice'];
            $_obfuscate_hpGMlZWJho_Pj5CNlJWUiJI� = $_obfuscate_jo_ThoyRjpCLkoqVkYeViJA� * $_obfuscate_hpCPjIePioeHkYiIhpSPkok�;
            if ( $_obfuscate_lJOGjpSRkI2NiJSIjpCKj5A�['touzhirmb'] + $_obfuscate_lJOGjpSRkI2NiJSIjpCKj5A�['rmb'] < $_obfuscate_hpGMlZWJho_Pj5CNlJWUiJI� )
            {
                $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE� );
                _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "上级".$_obfuscate_jJCMjYyHjpSTiJCNiYiIkpE�[7]."帐号余额不足，导致你无法添加注册卡！" );
            }
        }
        $_obfuscate_iYiHj4aUkoqOjZOHjZKMh4c� = _obfuscate_iY6RiYaNio6PiIyIiZWJkJQ�( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid'] );
        if ( empty( $_obfuscate_iYiHj4aUkoqOjZOHjZKMh4c� ) )
        {
            $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE� );
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "作者帐号未找到" );
        }
        if ( $_obfuscate_iYiHj4aUkoqOjZOHjZKMh4c�['level'] == 8 )
        {
            $_obfuscate_kYiSlYiLiZKKk4qHiIaIlYs� = _obfuscate_iImThpCMlYmSjIeMi5GOlIg�( $_obfuscate_j4ePi5GUjJSIj4iTiJOVh40�['cday'], $_obfuscate_j4ePi5GUjJSIj4iTiJOVh40�['linknum'] );
            $_obfuscate_joeIhoiOh5KLlY6GiI_Hh5M� = $_obfuscate_kYiSlYiLiZKKk4qHiIaIlYs� * $_obfuscate_hpCPjIePioeHkYiIhpSPkok�;
            if ( $_obfuscate_iYiHj4aUkoqOjZOHjZKMh4c�['touzhirmb'] + $_obfuscate_iYiHj4aUkoqOjZOHjZKMh4c�['rmb'] < $_obfuscate_joeIhoiOh5KLlY6GiI_Hh5M� )
            {
                $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE� );
                _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "上级".$_obfuscate_jJCMjYyHjpSTiJCNiYiIkpE�[8]."帐号余额不足，导致你无法添加注册卡！" );
            }
        }
    }
    else if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] == 8 )
    {
        $_obfuscate_iIyOkY2Rh5GOhoiJkJSPj4w� = 1;
        $_obfuscate_iYiHj4aUkoqOjZOHjZKMh4c� = $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�;
        $_obfuscate_kYiSlYiLiZKKk4qHiIaIlYs� = _obfuscate_iImThpCMlYmSjIeMi5GOlIg�( $_obfuscate_j4ePi5GUjJSIj4iTiJOVh40�['cday'], $_obfuscate_j4ePi5GUjJSIj4iTiJOVh40�['linknum'] );
        $_obfuscate_joeIhoiOh5KLlY6GiI_Hh5M� = $_obfuscate_kYiSlYiLiZKKk4qHiIaIlYs� * $_obfuscate_hpCPjIePioeHkYiIhpSPkok�;
        if ( $_obfuscate_iYiHj4aUkoqOjZOHjZKMh4c�['touzhirmb'] + $_obfuscate_iYiHj4aUkoqOjZOHjZKMh4c�['rmb'] < $_obfuscate_joeIhoiOh5KLlY6GiI_Hh5M� )
        {
            $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE� );
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "您帐号余额不足，导致你无法添加注册卡！" );
        }
    }
    if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] == 6 )
    {
        $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']( "insert into `kss_tb_log_agentrmb` (`pid`,`softid`,`managerid`,`opmanagerid`,`addtime`,`oldrmb`,`changermb`,`optype`,`ordernum`,`intro`) VALUES (".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid'].",".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE�.",".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['id'].",".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['id'].",".time( ).",".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['rmb'].",".( 0 - $_obfuscate_hoiIjJOLhoyKjZONh4eLiZU� ).",0,'".$_obfuscate_iJWMjIiVi5OGjJOViY2Li48�."','后台提卡')", "sync" );
        if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� === FALSE )
        {
            $_obfuscate_h4aUkomQiI6JlIaSkomSkok� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4�( );
            $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "REPAIR TABLE `kss_tb_log_agentrmb`", "notsync" );
            $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE� );
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "记录日志失败，操作中断[未扣款]。".$_obfuscate_h4aUkomQiI6JlIaSkomSkok� );
        }
        $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "update kss_tb_manager set `rmb`=`rmb`-".$_obfuscate_hoiIjJOLhoyKjZONh4eLiZU�.",`xfrmb`=`xfrmb`+".$_obfuscate_hoiIjJOLhoyKjZONh4eLiZU�." where `id`=".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['id'], "sync" );
        if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� === FALSE )
        {
            $_obfuscate_h4aUkomQiI6JlIaSkomSkok� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4�( );
            $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "update kss_tb_log_agentrmb set `intro`='<font color=red>扣款失败</font>' where `ordernum`='".$_obfuscate_iJWMjIiVi5OGjJOViY2Li48�."' order by `id` Desc limit 0,1", "sync" );
            $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "REPAIR TABLE `kss_tb_manager`", "notsync" );
            $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE� );
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "代理扣款操作失败".$_obfuscate_h4aUkomQiI6JlIaSkomSkok� );
        }
        $_obfuscate_jZGIi4eRiJOGjJCKk42IjI8� = "代理款项已扣，";
        if ( empty( $_obfuscate_lJOGjpSRkI2NiJSIjpCKj5A� ) )
        {
            $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']( "insert into `kss_tb_log_agentrmb` (`pid`,`softid`,`managerid`,`opmanagerid`,`addtime`,`oldrmb`,`changermb`,`optype`,`ordernum`,`intro`) VALUES (".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid'].",".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE�.",".$_obfuscate_lJOGjpSRkI2NiJSIjpCKj5A�['id'].",".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['id'].",".time( ).",".$_obfuscate_lJOGjpSRkI2NiJSIjpCKj5A�['rmb'].",".( 0 - $_obfuscate_hpGMlZWJho_Pj5CNlJWUiJI� ).",0,'".$_obfuscate_iJWMjIiVi5OGjJOViY2Li48�."','后台提卡')", "sync" );
            if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� === FALSE )
            {
                $_obfuscate_h4aUkomQiI6JlIaSkomSkok� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4�( );
                $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "REPAIR TABLE `kss_tb_log_agentrmb`", "notsync" );
                $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE� );
                _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( $_obfuscate_jZGIi4eRiJOGjJCKk42IjI8�."记录总代扣款日志失败，操作中断[总代未扣款]。".$_obfuscate_h4aUkomQiI6JlIaSkomSkok� );
            }
            $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "update kss_tb_manager set `rmb`=`rmb`-".$_obfuscate_hpGMlZWJho_Pj5CNlJWUiJI�.",`xfrmb`=`xfrmb`+".$_obfuscate_hpGMlZWJho_Pj5CNlJWUiJI�." where `id`=".$_obfuscate_lJOGjpSRkI2NiJSIjpCKj5A�['id'], "sync" );
            if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� === FALSE )
            {
                $_obfuscate_h4aUkomQiI6JlIaSkomSkok� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4�( );
                $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "update kss_tb_log_agentrmb set `intro`='<font color=red>扣款失败</font>' where `ordernum`='".$_obfuscate_iJWMjIiVi5OGjJOViY2Li48�."' order by `id` Desc limit 0,1", "sync" );
                $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "REPAIR TABLE `kss_tb_manager`", "notsync" );
                $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE� );
                _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( $_obfuscate_jZGIi4eRiJOGjJCKk42IjI8�."总代理扣款操作失败".$_obfuscate_h4aUkomQiI6JlIaSkomSkok� );
            }
            $_obfuscate_hpKUj5GNh4aPlI2JhpSGlZE� = "总代理款项已扣，";
        }
        if ( $_obfuscate_iYiHj4aUkoqOjZOHjZKMh4c�['level'] == 8 )
        {
            $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']( "insert into `kss_tb_log_agentrmb` (`pid`,`softid`,`managerid`,`opmanagerid`,`addtime`,`oldrmb`,`changermb`,`optype`,`ordernum`,`intro`) VALUES (".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid'].",".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE�.",".$_obfuscate_iYiHj4aUkoqOjZOHjZKMh4c�['id'].",".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['id'].",".time( ).",".$_obfuscate_iYiHj4aUkoqOjZOHjZKMh4c�['rmb'].",".( 0 - $_obfuscate_joeIhoiOh5KLlY6GiI_Hh5M� ).",0,'".$_obfuscate_iJWMjIiVi5OGjJOViY2Li48�."','后台提卡')", "sync" );
            if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� === FALSE )
            {
                $_obfuscate_h4aUkomQiI6JlIaSkomSkok� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4�( );
                $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "REPAIR TABLE `kss_tb_log_agentrmb`", "notsync" );
                $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE� );
                _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( $_obfuscate_jZGIi4eRiJOGjJCKk42IjI8�.$_obfuscate_hpKUj5GNh4aPlI2JhpSGlZE�."记录作者扣款日志失败，操作中断[作者未扣款]。".$_obfuscate_h4aUkomQiI6JlIaSkomSkok� );
            }
            $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "update kss_tb_manager set `rmb`=`rmb`-".$_obfuscate_joeIhoiOh5KLlY6GiI_Hh5M�.",`xfrmb`=`xfrmb`+".$_obfuscate_joeIhoiOh5KLlY6GiI_Hh5M�." where `id`=".$_obfuscate_iYiHj4aUkoqOjZOHjZKMh4c�['id'], "sync" );
            if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� === FALSE )
            {
                $_obfuscate_h4aUkomQiI6JlIaSkomSkok� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4�( );
                $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "update kss_tb_log_agentrmb set `intro`='<font color=red>扣款失败</font>' where `ordernum`='".$_obfuscate_iJWMjIiVi5OGjJOViY2Li48�."' order by `id` Desc limit 0,1", "sync" );
                $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "REPAIR TABLE `kss_tb_manager`", "notsync" );
                $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE� );
                _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( $_obfuscate_jZGIi4eRiJOGjJCKk42IjI8�.$_obfuscate_hpKUj5GNh4aPlI2JhpSGlZE�."作者扣款操作失败".$_obfuscate_h4aUkomQiI6JlIaSkomSkok� );
            }
            $_obfuscate_i4yTlYaRiIeKjY6QjImVi5E� = "作者款项已扣，";
        }
    }
    else if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] == 8 )
    {
        $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']( "insert into `kss_tb_log_agentrmb` (`pid`,`softid`,`managerid`,`opmanagerid`,`addtime`,`oldrmb`,`changermb`,`optype`,`ordernum`,`intro`) VALUES (".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid'].",".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE�.",".$_obfuscate_iYiHj4aUkoqOjZOHjZKMh4c�['id'].",".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['id'].",".time( ).",".$_obfuscate_iYiHj4aUkoqOjZOHjZKMh4c�['rmb'].",".( 0 - $_obfuscate_joeIhoiOh5KLlY6GiI_Hh5M� ).",0,'".$_obfuscate_iJWMjIiVi5OGjJOViY2Li48�."','后台提卡')", "sync" );
        if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� === FALSE )
        {
            $_obfuscate_h4aUkomQiI6JlIaSkomSkok� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4�( );
            $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "REPAIR TABLE `kss_tb_log_agentrmb`", "notsync" );
            $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE� );
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "记录日志失败，操作中断[未扣款]。".$_obfuscate_h4aUkomQiI6JlIaSkomSkok� );
        }
        $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "update kss_tb_manager set `rmb`=`rmb`-".$_obfuscate_joeIhoiOh5KLlY6GiI_Hh5M�.",`xfrmb`=`xfrmb`+".$_obfuscate_joeIhoiOh5KLlY6GiI_Hh5M�." where `id`=".$_obfuscate_iYiHj4aUkoqOjZOHjZKMh4c�['id'], "sync" );
        if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� === FALSE )
        {
            $_obfuscate_h4aUkomQiI6JlIaSkomSkok� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4�( );
            $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "update kss_tb_log_agentrmb set `intro`='<font color=red>扣款失败</font>' where `ordernum`='".$_obfuscate_iJWMjIiVi5OGjJOViY2Li48�."' order by `id` Desc limit 0,1", "sync" );
            $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "REPAIR TABLE `kss_tb_manager`", "notsync" );
            $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE� );
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "作者扣款操作失败".$_obfuscate_h4aUkomQiI6JlIaSkomSkok� );
        }
        $_obfuscate_i4yTlYaRiIeKjY6QjImVi5E� = "作者款项已扣，";
    }
    $_obfuscate_jY2OjpWVjpGNi4yNiIeIjIg� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_ioeOiIuTiJGQi42VkY_Vios�( "kss_z_key_".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE� );
    $_obfuscate_k4qViYqJiJOShpGPjoeNh5M� = array( "pid" => $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid'], "managerid" => $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['id'], "softid" => $_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE�, "keygroupid" => $_obfuscate_i46NkpCVjoqTipKRlYuVlZE�, "keycount" => $_obfuscate_hpCPjIePioeHkYiIhpSPkok�, "tags" => $_obfuscate_lYqOkIyVi5WGhoqLhouThoo�, "ordernum" => $_obfuscate_iJWMjIiVi5OGjJOViY2Li48�, "orderamount" => "0.00", "agentamount" => $_obfuscate_hoiIjJOLhoyKjZONh4eLiZU�, "agentamount7" => $_obfuscate_hpGMlZWJho_Pj5CNlJWUiJI�, "ordertype" => 1, "orderstatus" => 9, "beginid" => $_obfuscate_jY2OjpWVjpGNi4yNiIeIjIg�, "addtime" => time( ) );
    $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSVjoiHkoeTlJSRiJGHiI0�( "kss_tb_order", $_obfuscate_k4qViYqJiJOShpGPjoeNh5M�, "sync" );
    if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� === FALSE )
    {
        $_obfuscate_h4aUkomQiI6JlIaSkomSkok� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4�( );
        $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE� );
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( $_obfuscate_jZGIi4eRiJOGjJCKk42IjI8�.$_obfuscate_hpKUj5GNh4aPlI2JhpSGlZE�.$_obfuscate_i4yTlYaRiIeKjY6QjImVi5E�."订单添加失败".$_obfuscate_h4aUkomQiI6JlIaSkomSkok� );
    }
    $_obfuscate_jZGIi4eRiJOGjJCKk42IjI8� .= "订单已添加，";
    $_obfuscate_jIeNi4yViY_LjI2Ni5KQj4w� = array( "beginid" => $_obfuscate_jY2OjpWVjpGNi4yNiIeIjIg�, "addtime" => time( ), "managerid" => $_obfuscate_jo2NiZGSi42JiJSRlY2JkpA�, "ordernum" => $_obfuscate_iJWMjIiVi5OGjJOViY2Li48�, "ispay" => 1, "tag" => $_obfuscate_lYqOkIyVi5WGhoqLhouThoo�, "keyattr" => $_obfuscate_i46NkpCVjoqTipKRlYuVlZE�, "k_num" => $_obfuscate_hpCPjIePioeHkYiIhpSPkok� );
    $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = _obfuscate_jo2HlYmTj4eQhpKTkYyIj5E�( $_obfuscate_jIeNi4yViY_LjI2Ni5KQj4w�, $_obfuscate_j4ePi5GUjJSIj4iTiJOVh40� );
    $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE� );
    if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� === TRUE )
    {
        $_obfuscate_lJCJh4yIiZSPi5WUko2Nh4g� = "addok";
        $_obfuscate_lJCJh4yIiZSPi5WUko2Nh4g� .= "<input type='button' class=submitbtn onclick=window.open('admin_key.php?action=downkey&orderid=".$_obfuscate_iJWMjIiVi5OGjJOViY2Li48�."','downwin')  value='另存为'>  <input type='button' class=submitbtn value='复制' id='copykey'><span id=copyed></span>";
        if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] == 8 )
        {
            $_obfuscate_lJCJh4yIiZSPi5WUko2Nh4g� .= "  扣除".$_obfuscate_joeIhoiOh5KLlY6GiI_Hh5M�."元";
        }
        $_obfuscate_lJCJh4yIiZSPi5WUko2Nh4g� .= "<br>";
        $_obfuscate_lJCJh4yIiZSPi5WUko2Nh4g� .= "<iframe name=downwin id=downwin style='display:none' src='blank.htm'></iframe>";
        $_obfuscate_lJCJh4yIiZSPi5WUko2Nh4g� .= "<textarea id=keydata class=keynum style='width:420px;height:120px;word-wrap:normal'>卡名:".$_obfuscate_j4ePi5GUjJSIj4iTiJOVh40�['keyname']."　　\r\n 天数:".$_obfuscate_j4ePi5GUjJSIj4iTiJOVh40�['cday']."　　  点数:".$_obfuscate_j4ePi5GUjJSIj4iTiJOVh40�['points']."　　  通道:".$_obfuscate_j4ePi5GUjJSIj4iTiJOVh40�['linknum']."　　　　　　　　　　　　　　　　　　　　　　　　　　　　　\r\n".implode( "　　　　　　　　　　　　　　　　　　　　　　　　　　　　　\r\n", $_obfuscate_iZGLlYiTk42PlJOHh4aJkok� )."</textarea>";
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( $_obfuscate_lJCJh4yIiZSPi5WUko2Nh4g� );
        exit( );
    }
    $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "update kss_tb_order set `orderstatus`=7 where `ordernum`='".$_obfuscate_iJWMjIiVi5OGjJOViY2Li48�."'", "sync" );
    _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( $_obfuscate_jZGIi4eRiJOGjJCKk42IjI8�.$_obfuscate_hpKUj5GNh4aPlI2JhpSGlZE�.$_obfuscate_i4yTlYaRiIeKjY6QjImVi5E�.$_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� );
    exit( );
}
echo "<!-- 添加注册卡表单开始 -->\r\n<script type=\"text/javascript\">\t\r\nvar canaddkey=1;\r\nvar isclickadd=0;\r\nvar isDivView = true;\r\n\r\nfunction downkey(fname){\r\nvar e=$(\"#keydata\").html();\r\nkdwin=window.open(\"blank.htm\",\"downwin\",\"\");\r\nkdwin.document.innerHTML='';\r\nkdwin.document.write($(\"#keydata\").text());\r\ntry {\r\nkdwin.document.charset = \"utf-8\";\r\n} catch (err) { }\r\n\r\n\r\nkdwin.document.execCommand(\"saveAs\",true,fname);\r\n}\r\n\r\n$(document).ready(function() { \r\n\r\n$(\"#copykey\").live('mouseover',function(){\r\nvar ee=$('#keydata').html();\r\nee=ee.replace(/　/g,'');\r\ntoClipboard(\"copykey\",ee);\r\n});\r\n\r\n$('#admin_addkey').ajaxForm({\r\nbeforeSubmit:function (arr, \$form, options) {\r\n$(\"#addsubmit\").hide();\r\n$(\"#addnow\").show();\r\nif(canaddkey==0){\r\nmalert('你的余额不足以支付本次取卡的费用，请充值！','请充值'); \r\nisclickadd=0;\r\n$(\"#addsubmit\").show();\r\n$(\"#addnow\").hide();\r\nreturn false; \t\t\t\r\n}\r\nreturn true;\r\n},\r\nsuccess:function (responseText, statusText, xhr, \$form) {\r\nisclickadd=0;\r\n$(\"#addsubmit\").show();\r\n$(\"#addnow\").hide();\t\t\t\r\nif(responseText.substr(0,5)!='addok'){\r\nif(isDivView==true){\r\n$(\"#keydivview\").html(responseText);\r\n}else{\r\nmalert(responseText);\r\n}\r\n}else{\r\n$(\"#yk\").text($(\"#yk\").text()*1-$(\"#jg\").text()*1);\r\nif(isDivView==true){\r\n$(\"#keydivview\").html(responseText.substr(5));\r\n}else{\r\nmalert(responseText.substr(5),'添加注册卡成功',460,120);\r\n}\r\n}\r\n},\r\nerror:function(){\r\nisclickadd=0;\r\nalert(\"error!\");\t\t\t\r\n}\r\n});\r\n";
if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] == 6 )
{
    echo "jsrmb();\r\n$(\"#keygroupid\").bind(\"change\",function(){\r\njsrmb();\r\n});\r\n$(\"#keynum\").bind(\"keyup\",function(){\t\t\r\njsrmb();\r\n});\r\n";
}
else
{
    echo "$(\"#keynum\").bind(\"keyup\",function(){\t\t\r\nif($(this).val()>500)$(this).val(500);\r\n});\t\r\n";
}
echo "});\r\n\r\nfunction jsrmb(){\r\nvar price=$(\"#keygroupid option:selected\").attr(\"price\");\r\nvar knum=$(\"#keynum\").val();\r\nif(!isNaN(price) && !isNaN(knum)){\r\nif(knum>0){\r\nif(knum>500){\r\n\$knum=500;\r\n$(\"#keynum\").val(500);\r\n}\r\nvar jgs=price*knum;\r\njgs=jgs.toFixed(2);\r\n$(\"#jg\").text(jgs);\r\nif($(\"#yk\").text()*1+$(\"#tz\").text()*1<jgs){\r\ncanaddkey=0;\r\n$(\"#canadd\").html(\"<font color=#ff0000><img src=\"+INSTALLPATH+\"kss_inc/images/s_error.png></font>\");\r\n}else{\t\r\ncanaddkey=1;\r\n$(\"#canadd\").html(\"<font color=#0000ff><img src=\"+INSTALLPATH+\"kss_inc/images/s_okay.png></font>\");\r\n}\r\n}\t\r\n}\r\n}\r\n\r\n</script>\r\n<form id=\"admin_addkey\" action=\"?action=addkey_save&softid=";
echo $_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE�;
echo "\" method=\"post\"> \r\n\r\n<div class=\"edittable\">\r\n<table class=\"edittable_th4\" width=\"97%\" height=\"35\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\r\n<tr>\r\n<td width=8 class=\"edittable_th1\">&nbsp;</td>\r\n<td width=250  class=\"edittable_th2\">";
echo $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['softname'];
echo "添加注册卡</td>\r\n<td width=8 class=\"edittable_th3\">&nbsp;</td>\r\n<td>&nbsp;</td>\r\n<td width=6 class=\"edittable_th5\">&nbsp;</td>\r\n</tr>\r\n</table><br><br>\r\n\r\n<div>\r\n<input type=\"hidden\" alt=\"ajax提交必须添加此项\" name=\"isajax\" value=\"1\" />\r\n<input type=\"hidden\" name=\"softid\" value=\"";
echo $_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE�;
echo "\" />\r\n<table border=0  cellpadding=\"10\" cellspacing=\"10\" >\r\n";
if ( 7 < $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] )
{
    echo "<tr malt=\"作者级帐号添加注册卡时可指定该注册卡归谁管理，默认是自己\"><td align=right>注册卡所属用户</td><td align=left>\r\n<select name=\"kmid\"><option value=0>自己(作者帐号)</option>\r\n";
    $_obfuscate_jYeKipKNk46LkZCUk4yKkY4� = $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']( "select * from kss_tb_manager where pid=".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']." and level=6 and isdel=0" );
    if ( empty( $_obfuscate_jYeKipKNk46LkZCUk4yKkY4� ) )
    {
        foreach ( $_obfuscate_jYeKipKNk46LkZCUk4yKkY4� as $_obfuscate_h5COhpGIk4yPjpOTj4yJkoc� )
        {
            echo "<option value=".$_obfuscate_h5COhpGIk4yPjpOTj4yJkoc�['id'].">".$_obfuscate_h5COhpGIk4yPjpOTj4yJkoc�['username']."</option>";
        }
    }
    echo "</select><span style='color:red'>&nbsp;&nbsp;&nbsp;注意：作者给代理加卡是不会扣除代理余额的。</span>\r\n</td></tr>\r\n\r\n";
}
echo "<tr malt=\"如果这其中找不到你需要的注册卡类，请用系统管理员或作者身份登陆：软件管理->卡类和零售价设置 即可以添加新的卡类\"><td align=right>请选择注册卡类</td><td align=left><select name=\"keygroupid\" id=\"keygroupid\">\r\n";
$_obfuscate_lJCHlI_UjJWJjYmKioySjYo� = _obfuscate_lIeLiY6Gk4aNiY2Si4uJiIs�( $_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE�, 0, 1, $_obfuscate_kIiVkYqGk4aTjoyIiJGGlYo� );
echo $_obfuscate_lJCHlI_UjJWJjYmKioySjYo�;
echo "</select>";
if ( stripos( $_obfuscate_lJCHlI_UjJWJjYmKioySjYo�, "暂无卡类" ) )
{
    echo "<script>malert('请先为该软件<input type=button class=submitbtn value=\"添加卡类\" onclick=dwin(\"soft_keyset\",\"";
    echo $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['softname'];
    echo "卡类与价格\",\"admin_soft.php?action=keygroup&softid=";
    echo $_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE�;
    echo "\")>(注册卡管理 ->  卡类和零售价设置)<br><br>卡类添加好后<input type=button class=submitbtn onclick=\"history.go(0)\" value=\"刷新本页面\">才可以添加相应的注册卡 ','0友情提示'); </script>\r\n";
}
echo "</td></tr>\r\n<tr malt=\"每次最多只能添加500张卡\"><td align=right>添加注册卡的数量</td><td align=left><input class=\"smlinput\" type=\"text\" maxlength=\"3\" name=\"keynum\" id=\"keynum\" value=1  AUTOCOMPLETE=\"off\" onkeyup=\"this.value=this.value.replace(/\\D/g, '')\" /> ";
if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] == 6 )
{
    echo "&nbsp;<span id=canadd></span>&nbsp;帐号余款<span id=yk>".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['rmb']."</span>元 可透支<span id=tz>".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['touzhirmb']."</span>元，制卡需<span id=jg>0.00</span>元。";
}
echo "</td></tr>\r\n<tr malt=\"使用标签是一个好的习惯，在日后您整理和查找卡时可以起到很大的作用，请尽量用有实际意义方便你记忆的字符串做为标签\"><td align=right>请输入标签</td><td align=left><input class=\"longinput\" type=\"text\" maxlength=\"20\" name=\"tags\" value='";
echo date( "m-d" );
echo "' /></td></tr>\r\n<tr><td align=right>&nbsp</td><td align=left>友情提示：请按需取卡（要出售多少取多少），尽量不要只为了库存卡而取卡。";
if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] == 8 )
{
    echo "<br>作者提卡扣费算法（简单点就是 周卡0.4元，月卡1元），<input type=button value=\"点击查看完整算法\" onclick=\"$('#kabi').show();\">\r\n<pre id=\"kabi\" style=\"display:none\">\t\t\t\t\t\r\n天数=四舍五入取整\r\n\r\n<font color=#0000ff>如果</font> (天数=0 ) <font color=#0000ff>那么</font> 天数=1;\r\n\r\n<font color=#0000ff>如果</font> (天数  ＜ 7) <font color=#0000ff>那么</font> <font color=#ff0000>扣费</font> = 天数 × 0.05\r\n\r\n<font color=#0000ff>如果</font> (7  ＜= 天数 ＜ 10)  <font color=#0000ff>那么</font> <font color=#ff0000>扣费</font> = 0.4\r\n\r\n<font color=#0000ff>如果</font> (10 ＜= 天数 ＜ 20) <font color=#0000ff>那么</font> <font color=#ff0000>扣费</font> = 0.6\r\n\r\n<font color=#0000ff>如果</font> (20 ＜= 天数 ＜ 30)  <font color=#0000ff>那么</font> <font color=#ff0000>扣费</font> = 0.8\r\n\r\n<font color=#0000ff>如果</font> (30 ＜= 天数)  <font color=#0000ff>那么</font> <font color=#ff0000>扣费</font> = 1 × 取整数(天数 ÷ 30)  + 0.03 × 取余数(天数 ÷ 30 )\r\n\r\n最终：  <font color=#ff0000>扣费</font>=<font color=#ff0000>扣费</font> × 通道数量\r\n</pre>\r\n";
}
echo "</td></tr>\r\n\r\n</table>\r\n</div>\r\n<div style=\"padding:10px 0 10px 150px\"><input id=\"addsubmit\" type=submit class=\"submitbtn\" onclick=\"if(isclickadd==1){return false;}else{isclickadd=1;return true}\" value=\"确认添加\"><img id=\"addnow\" style=\"display:none\" src=";
echo INSTALLPATH;
echo "kss_inc/images/load1.gif></div>\r\n\r\n<div id=\"keydivview\" style=\"background:#f6f6f6;width:460px;height:160px\"></div>\r\n</div>\r\n\r\n</form>\r\n</body>\r\n</html>";
?>
