<?php
/*********************/
/*                   */
/*  Dezend for PHP5  */
/*         NWS       */
/*      Nulled.WS    */
/*                   */
/*********************/

function _obfuscate_iZGRlJGUk4qShpWUlZKGkoo�( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� = 1 )
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
$_obfuscate_i5GVjZWQj4ePkJKMjJSRipM�[] = _obfuscate_hpCTj4mKj5WSkpWPjouJkoc�( );
$_obfuscate_jIaUiIeSjZWKlIqLkIqOioc� = new mysql_cls( );
$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU� = _obfuscate_iZSVk4mLkY_LlIeHh5WKlZA�( 7 );
$_obfuscate_k4mViI2Nj4mJkIuUj42JiIY� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "op", "gp", "sql", "" );
$_obfuscate_komRjo6Qi4_Rh5KHi5SLhpE� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "id", "gp", "int", 0 );
if ( $_obfuscate_lZOThomRipOIi5SRhpWRjY4� == "managerlist_delprice" )
{
    _obfuscate_kY6LiJGJiIiRiIuRjomOiZA�( );
    $_obfuscate_i42UjJCUlIyVk5KLi5KIj5A� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "w_id", "pg", "sql", "" );
    $_obfuscate_jYuHhoeLlZSSlJSJj42MjIo� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "w_softid", "pg", "int", 0 );
    $_obfuscate_iIuQlIiQkJSTj5KVj5CTlY0� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "w_kgid", "pg", "int", 0 );
    $_obfuscate_homKkImLlIaUkZCMioeVj5E� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "w_keyprice", "pg", "num", 0 );
    $_obfuscate_lJKIk4eJkoeLlY_Vi4mMipE� = "no";
    if ( $_obfuscate_i42UjJCUlIyVk5KLi5KIj5A� == "" )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "你还未选择任何代理！" );
    }
    $_obfuscate_i5KHlIeVi4mQlIaOioqTkpE� = explode( ",", $_obfuscate_i42UjJCUlIyVk5KLi5KIj5A� );
    if ( $_obfuscate_jYuHhoeLlZSSlJSJj42MjIo� == 0 )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "你还未选择软件！" );
    }
    if ( $_obfuscate_iIuQlIiQkJSTj5KVj5CTlY0� == 0 )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "你还未选择卡类！" );
    }
    $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "select * from kss_tb_keyset where softid=".$_obfuscate_jYuHhoeLlZSSlJSJj42MjIo�." and id=".$_obfuscate_iIuQlIiQkJSTj5KVj5CTlY0�." and pid=".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid'] );
    if ( empty( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� ) )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "你要保存的软件卡类不存在或你无权修改！" );
    }
    if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] == 7 )
    {
        $_obfuscate_i4iViJWVj4uQkYqIiJCMj48� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_lZGTiIiKhouKiZGLi5KUkI8�( "select * from kss_tb_manager where id in (".$_obfuscate_i42UjJCUlIyVk5KLi5KIj5A�.")" );
        foreach ( $_obfuscate_i4iViJWVj4uQkYqIiJCMj48� as $_obfuscate_i4aKi4iTh4mQkJOOkpCOkog� )
        {
            if ( 6 < $_obfuscate_i4aKi4iTh4mQkJOOkpCOkog�['level'] )
            {
                _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "你只能删除代理级别帐号的销售价！无权限的帐号ID：".$_obfuscate_i4aKi4iTh4mQkJOOkpCOkog�['id'] );
            }
            if ( $_obfuscate_i4aKi4iTh4mQkJOOkpCOkog�['pmid'] != $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['id'] )
            {
                _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "你只能删除你帐号下代理级别帐号的销售价，无权限的帐号ID：".$_obfuscate_i4aKi4iTh4mQkJOOkpCOkog�['id'] );
            }
        }
    }
    $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "delete from kss_tb_agentprice where softid=".$_obfuscate_jYuHhoeLlZSSlJSJj42MjIo�." and pid=".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']." and keygroupid=".$_obfuscate_iIuQlIiQkJSTj5KVj5CTlY0�." and managerid in (".$_obfuscate_i42UjJCUlIyVk5KLi5KIj5A�.")", "sync" );
    if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� !== FALSE )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "delok" );
    }
    _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "批量删除提卡授权时出错：".$_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4�( ) );
}
if ( $_obfuscate_lZOThomRipOIi5SRhpWRjY4� == "managerlist_saveprice" )
{
    _obfuscate_kY6LiJGJiIiRiIuRjomOiZA�( );
    $_obfuscate_i42UjJCUlIyVk5KLi5KIj5A� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "w_id", "pg", "sql", "" );
    $_obfuscate_jYuHhoeLlZSSlJSJj42MjIo� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "w_softid", "pg", "int", 0 );
    $_obfuscate_iIuQlIiQkJSTj5KVj5CTlY0� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "w_kgid", "pg", "int", 0 );
    $_obfuscate_homKkImLlIaUkZCMioeVj5E� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "w_keyprice", "pg", "num", 0 );
    $_obfuscate_lJKIk4eJkoeLlY_Vi4mMipE� = "no";
    if ( $_obfuscate_i42UjJCUlIyVk5KLi5KIj5A� == "" )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "你还未选择任何代理！" );
    }
    $_obfuscate_i5KHlIeVi4mQlIaOioqTkpE� = explode( ",", $_obfuscate_i42UjJCUlIyVk5KLi5KIj5A� );
    if ( $_obfuscate_jYuHhoeLlZSSlJSJj42MjIo� == 0 )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "你还未选择软件！" );
    }
    if ( $_obfuscate_iIuQlIiQkJSTj5KVj5CTlY0� == 0 )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "你还未选择卡类！" );
    }
    if ( $_obfuscate_homKkImLlIaUkZCMioeVj5E� == 0 )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "你还未设置价格！" );
    }
    $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "select * from kss_tb_keyset where softid=".$_obfuscate_jYuHhoeLlZSSlJSJj42MjIo�." and id=".$_obfuscate_iIuQlIiQkJSTj5KVj5CTlY0�." and pid=".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid'] );
    if ( empty( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� ) )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "你要保存的软件卡类不存在或你无权修改！" );
    }
    if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] == 7 )
    {
        $_obfuscate_i4iViJWVj4uQkYqIiJCMj48� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "select * from kss_tb_agentprice where managerid=".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['id']." and softid=".$_obfuscate_jYuHhoeLlZSSlJSJj42MjIo�." and keygroupid=".$_obfuscate_iIuQlIiQkJSTj5KVj5CTlY0� );
        if ( empty( $_obfuscate_i4iViJWVj4uQkYqIiJCMj48� ) )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "作者没有给你该软件卡类的销售权，你无权保存！" );
        }
        $_obfuscate_i4iViJWVj4uQkYqIiJCMj48� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_lZGTiIiKhouKiZGLi5KUkI8�( "select * from kss_tb_manager where id in (".$_obfuscate_i42UjJCUlIyVk5KLi5KIj5A�.")" );
        foreach ( $_obfuscate_i4iViJWVj4uQkYqIiJCMj48� as $_obfuscate_i4aKi4iTh4mQkJOOkpCOkog� )
        {
            if ( 6 < $_obfuscate_i4aKi4iTh4mQkJOOkpCOkog�['level'] )
            {
                _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "你只能操作代理级别帐号的销售价！无权限的帐号ID：".$_obfuscate_i4aKi4iTh4mQkJOOkpCOkog�['id'] );
            }
            if ( $_obfuscate_i4aKi4iTh4mQkJOOkpCOkog�['pmid'] != $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['id'] )
            {
                _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "你只能操作你帐号下代理级别帐号的销售价，无权限的帐号ID：".$_obfuscate_i4aKi4iTh4mQkJOOkpCOkog�['id'] );
            }
        }
    }
    foreach ( $_obfuscate_i5KHlIeVi4mQlIaOioqTkpE� as $_obfuscate_kIuKio2Mk4qIjJKSjo2Nh5I� )
    {
        $_obfuscate_i4iViJWVj4uQkYqIiJCMj48� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "select * from kss_tb_agentprice where managerid=".$_obfuscate_kIuKio2Mk4qIjJKSjo2Nh5I�." and softid=".$_obfuscate_jYuHhoeLlZSSlJSJj42MjIo�." and keygroupid=".$_obfuscate_iIuQlIiQkJSTj5KVj5CTlY0�." and pid=".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid'] );
        if ( empty( $_obfuscate_i4iViJWVj4uQkYqIiJCMj48� ) )
        {
            $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']( "insert into `kss_tb_agentprice` (`pid`,`managerid`,`softid`,`keygroupid`,`keyprice`,`tmpkey`) VALUES (".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid'].",".$_obfuscate_kIuKio2Mk4qIjJKSjo2Nh5I�.",".$_obfuscate_jYuHhoeLlZSSlJSJj42MjIo�.",".$_obfuscate_iIuQlIiQkJSTj5KVj5CTlY0�.",".$_obfuscate_homKkImLlIaUkZCMioeVj5E�.",'no')", "sync" );
        }
        else
        {
            $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "update kss_tb_agentprice set keyprice=".$_obfuscate_homKkImLlIaUkZCMioeVj5E�." where `id`=".$_obfuscate_i4iViJWVj4uQkYqIiJCMj48�['id'], "sync" );
        }
    }
    _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "saveok" );
}
if ( $_obfuscate_k4mViI2Nj4mJkIuUj42JiIY� == "del" )
{
    _obfuscate_kY6LiJGJiIiRiIuRjomOiZA�( );
    if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] < 8 )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "非作者，禁止删除帐号。" );
    }
    if ( $_obfuscate_komRjo6Qi4_Rh5KHi5SLhpE� == $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['id'] )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "你不能自己删除自己。" );
    }
    $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "select * from kss_tb_manager where id=".$_obfuscate_komRjo6Qi4_Rh5KHi5SLhpE� );
    if ( empty( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI� ) )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "你要删除的帐号未找到。" );
    }
    if ( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['level'] == 7 )
    {
        if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] < 7 )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "只有作者级以上的帐号才有权限执行此操作！" );
        }
        if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid'] != $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['pid'] )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "该总代理帐号不是您的(pid)，你无权操作" );
        }
        $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "select * from kss_tb_manager where pmid=".$_obfuscate_komRjo6Qi4_Rh5KHi5SLhpE�." limit 0,1" );
        if ( empty( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� ) )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "该总代理名下还有代理帐号，请先将名下的代理帐号转出或删除。" );
        }
        $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "delete from kss_tb_agentprice where managerid=".$_obfuscate_komRjo6Qi4_Rh5KHi5SLhpE�, "sync" );
        if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� === FALSE )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "删除总代理帐号时清理kss_tb_agentprice表出错:".$_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4�( ) );
        }
        $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "delete from kss_tb_log_agentrmb where managerid=".$_obfuscate_komRjo6Qi4_Rh5KHi5SLhpE�, "sync" );
        if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� === FALSE )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "删除总代理帐号时清理kss_tb_log_agentrmb表出错:".$_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4�( ) );
        }
        $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "delete from kss_tb_manager where `id`=".$_obfuscate_komRjo6Qi4_Rh5KHi5SLhpE�, "sync" );
        if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� === FALSE )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "删除总代理帐号时操作kss_tb_manager表出错:".$_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4�( ) );
        }
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "delok删除总代理帐号成功" );
    }
    if ( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['level'] == 6 )
    {
        if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid'] != $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['pid'] )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "该代理帐号不是您的(pid)，你无权操作" );
        }
        $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "delete from kss_tb_agentprice where managerid=".$_obfuscate_komRjo6Qi4_Rh5KHi5SLhpE�, "sync" );
        if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� === FALSE )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "删除代理帐号时清理kss_tb_agentprice表出错:".$_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4�( ) );
        }
        $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "delete from kss_tb_log_agentrmb where managerid=".$_obfuscate_komRjo6Qi4_Rh5KHi5SLhpE�, "sync" );
        if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� === FALSE )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "删除代理帐号时清理kss_tb_log_agentrmb表出错:".$_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4�( ) );
        }
        $_obfuscate_jIiRkpOJkYqOh42PjIyKkI0� = $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']( "select * from kss_tb_manager where pid=".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']." and level>7 limit 0,1" );
        if ( empty( $_obfuscate_jIiRkpOJkYqOh42PjIyKkI0� ) )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "未找到该代理的作者级帐号ID" );
        }
        $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "update kss_tb_manager set pmid=".$_obfuscate_jIiRkpOJkYqOh42PjIyKkI0�['id'].",`isdel`=1,`username`=concat('del_',`username`) where `id`=".$_obfuscate_komRjo6Qi4_Rh5KHi5SLhpE�, "sync" );
        if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� === FALSE )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "删除代理帐号时出错:".$_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4�( ) );
        }
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "delok删除代理帐号成功" );
    }
    if ( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['level'] == 8 )
    {
        if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] != 9 )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "只有管理员才有权限删除作者帐号" );
        }
        $_obfuscate_i4mQlJGKioeNjJGMlI2LkZM� = "delok已清理的表";
        $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "delete from kss_tb_agentprice where `pid`=".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['pid'], "sync" );
        if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� === FALSE )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "清理折扣表kss_tb_agentprice出错:".$_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4�( ) );
        }
        $_obfuscate_i4mQlJGKioeNjJGMlI2LkZM� = "折扣表kss_tb_agentprice, ";
        $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "delete from kss_tb_log_agentrmb where `pid`=".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['pid'], "sync" );
        if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� === FALSE )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "清理代理财务日志表kss_tb_log_agentrmb出错:".$_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4�( ) );
        }
        $_obfuscate_i4mQlJGKioeNjJGMlI2LkZM� .= "代理财务日志表kss_tb_log_agentrmb, ";
        $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "delete from kss_tb_keyset where `pid`=".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['pid'], "sync" );
        if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� === FALSE )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "清理卡类表kss_tb_keyset出错:".$_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4�( ) );
        }
        $_obfuscate_i4mQlJGKioeNjJGMlI2LkZM� .= "卡类表kss_tb_keyset, ";
        $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "delete from kss_tb_log_login where `pid`=".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['pid'], "sync" );
        if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� === FALSE )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "清理登陆日志表kss_tb_log_login出错:".$_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4�( ) );
        }
        $_obfuscate_i4mQlJGKioeNjJGMlI2LkZM� .= "卡类表`kss_tb_log_login, ";
        $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "delete from kss_tb_order where `pid`=".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['pid'], "sync" );
        if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� === FALSE )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "删除作者帐号时清理订单表kss_tb_order出错:".$_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4�( ) );
        }
        $_obfuscate_i4mQlJGKioeNjJGMlI2LkZM� .= "订单表kss_tb_order, ";
        $_obfuscate_iYmJioaKkIyOiY_PkJCOlJA� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_lZGTiIiKhouKiZGLi5KUkI8�( "select * from kss_tb_soft where `pid`=".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['pid'] );
        if ( empty( $_obfuscate_iYmJioaKkIyOiY_PkJCOlJA� ) )
        {
            $_obfuscate_hoqPjpSQiImSkImUjoqJj4o� = array( );
            foreach ( $_obfuscate_iYmJioaKkIyOiY_PkJCOlJA� as $_obfuscate_lIiIk4yNiY_VhpGJjpOTh44� )
            {
                $_obfuscate_hoqPjpSQiImSkImUjoqJj4o�[] = "`kss_z_user_".$_obfuscate_lIiIk4yNiY_VhpGJjpOTh44�['pid']."_".$_obfuscate_lIiIk4yNiY_VhpGJjpOTh44�['id']."`";
                $_obfuscate_hoqPjpSQiImSkImUjoqJj4o�[] = "`kss_z_key_".$_obfuscate_lIiIk4yNiY_VhpGJjpOTh44�['pid']."_".$_obfuscate_lIiIk4yNiY_VhpGJjpOTh44�['id']."`";
                $_obfuscate_hoqPjpSQiImSkImUjoqJj4o�[] = "`kss_z_log_".$_obfuscate_lIiIk4yNiY_VhpGJjpOTh44�['pid']."_".$_obfuscate_lIiIk4yNiY_VhpGJjpOTh44�['id']."`";
                $_obfuscate_hoqPjpSQiImSkImUjoqJj4o�[] = "`kss_z_client_".$_obfuscate_lIiIk4yNiY_VhpGJjpOTh44�['pid']."_".$_obfuscate_lIiIk4yNiY_VhpGJjpOTh44�['id']."`";
                $_obfuscate_hoqPjpSQiImSkImUjoqJj4o�[] = "`kss_z_cz_".$_obfuscate_lIiIk4yNiY_VhpGJjpOTh44�['pid']."_".$_obfuscate_lIiIk4yNiY_VhpGJjpOTh44�['id']."`";
                $_obfuscate_hoqPjpSQiImSkImUjoqJj4o�[] = "`kss_z_user_".$_obfuscate_lIiIk4yNiY_VhpGJjpOTh44�['pid']."_".$_obfuscate_lIiIk4yNiY_VhpGJjpOTh44�['id']."_recycle`";
                $_obfuscate_hoqPjpSQiImSkImUjoqJj4o�[] = "`kss_z_key_".$_obfuscate_lIiIk4yNiY_VhpGJjpOTh44�['pid']."_".$_obfuscate_lIiIk4yNiY_VhpGJjpOTh44�['id']."_recycle`";
            }
            $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "drop table if exists ".implode( ",", $_obfuscate_hoqPjpSQiImSkImUjoqJj4o� ), "sync" );
            if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� === FALSE )
            {
                _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "删除作者帐号时清理会员数据表kss_z_*出错:".$_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4�( ) );
            }
            $_obfuscate_i4mQlJGKioeNjJGMlI2LkZM� .= "数据表kss_z_系列, ";
            $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "delete from kss_tb_soft where `pid`=".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['pid'], "sync" );
            if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� === FALSE )
            {
                _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "删除作者帐号时清理软件表kss_tb_soft出错:".$_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4�( ) );
            }
            $_obfuscate_i4mQlJGKioeNjJGMlI2LkZM� .= "软件表kss_tb_soft, ";
        }
        $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "delete from kss_tb_manager where pid=".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['pid'], "sync" );
        if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� === FALSE )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "删除作者帐号时清理kss_tb_manager出错:".$_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4�( ) );
        }
    }
    _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "delok删除作者帐号成功" );
}
if ( $_obfuscate_k4mViI2Nj4mJkIuUj42JiIY� == "lock" )
{
    _obfuscate_kY6LiJGJiIiRiIuRjomOiZA�( );
    $_obfuscate_ho_Ljo6NjpOOhpGHj5KHiYs� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "lock", "gp", "int", 0 );
    if ( $_obfuscate_komRjo6Qi4_Rh5KHi5SLhpE� == 0 )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "传入的帐号ID错误！" );
    }
    if ( $_obfuscate_komRjo6Qi4_Rh5KHi5SLhpE� == $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['id'] )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "你不能自己锁定自己。" );
    }
    $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "select * from kss_tb_manager where `id`=".$_obfuscate_komRjo6Qi4_Rh5KHi5SLhpE� );
    if ( empty( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg� ) )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "用户帐号没找到" );
    }
    if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] != 9 && $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['pid'] != $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid'] )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "该帐号不属于您的(pid)，您无权操作该帐号" );
    }
    if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] == 7 && $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['id'] != $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['pmid'] )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "该代理帐号不是您的(pmid)，你无权操作" );
    }
    if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] <= $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['level'] )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "你只能锁定比你级别低的帐号" );
    }
    if ( $_obfuscate_ho_Ljo6NjpOOhpGHj5KHiYs� == 1 )
    {
        $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "update kss_tb_manager set `islock`=0 where `id`=".$_obfuscate_komRjo6Qi4_Rh5KHi5SLhpE�, "sync" );
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "unlock" );
    }
    else
    {
        $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "update kss_tb_manager set `islock`=1 where `id`=".$_obfuscate_komRjo6Qi4_Rh5KHi5SLhpE�, "sync" );
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "lock" );
    }
}
$_obfuscate_lJKGipSShoyHi4aRkoyKjo0� = array( );
$_obfuscate_lJKGipSShoyHi4aRkoyKjo0�[0] = "无";
$_obfuscate_jo_Mh4iRkIuRjYyUh5CVj4g� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_lZGTiIiKhouKiZGLi5KUkI8�( "select id,username from kss_tb_manager" );
foreach ( $_obfuscate_jo_Mh4iRkIuRjYyUh5CVj4g� as $_obfuscate_ko2TkI6OjY_GiI2IjZKOlIo� )
{
    $_obfuscate_lJKGipSShoyHi4aRkoyKjo0�[$_obfuscate_ko2TkI6OjY_GiI2IjZKOlIo�['id']] = $_obfuscate_ko2TkI6OjY_GiI2IjZKOlIo�['username'];
}
unset( $����������������� );
$_obfuscate_i4uIkYuKkJGQlJKOjoiMj4c� = array( "action" => $_obfuscate_lZOThomRipOIi5SRhpWRjY4� );
$_obfuscate_k42Rh4mVlYqGi4mOiZWMjJA� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "page", "gp", "int", 1 );
$_obfuscate_iYqPiJGIjoaVhoaQiI2Ti4w� = "SELECT `id` ";
$_obfuscate_jpCQi4aKkYaIjpSUhpWNipM� = "SELECT * ";
$_obfuscate_homTioySho6Vh5ORiYmUkok� = " where `id` in";
$_obfuscate_kZCPiJCHiI_IlY2Ok4_JlIc� = "SELECT count(*) as tnum ";
$_obfuscate_lJSNlZWKlYmGi4iSkIqHjpA� = "from `kss_tb_manager`  ";
$_obfuscate_h4eJlYuIjpKNio6QkIuJlIY� = array( );
$_obfuscate_j4aLlZCQhoyUh5GSjoeSh4c� = "username";
if ( stripos( $_SERVER['HTTP_HOST'], ".hphu.com" ) )
{
    $_obfuscate_j4aLlZCQhoyUh5GSjoeSh4c� = "qq";
}
$_obfuscate_hoaTko6Ki5GUioeUi5CNiJA� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "keyword", "pg", "sql", "" );
$_obfuscate_iJKPi4eTkoaKhpOVio2Ojow� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "filed", "pg", "sql", $_obfuscate_j4aLlZCQhoyUh5GSjoeSh4c� );
$_obfuscate_i4uIkYuKkJGQlJKOjoiMj4c�['keyword'] = $_obfuscate_hoaTko6Ki5GUioeUi5CNiJA�;
$_obfuscate_i4uIkYuKkJGQlJKOjoiMj4c�['filed'] = $_obfuscate_iJKPi4eTkoaKhpOVio2Ojow�;
if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] == "9" && 1 < LICTYPE )
{
    $_obfuscate_h4eJlYuIjpKNio6QkIuJlIY�[] = " `isdel`=0 ";
    if ( $_obfuscate_hoaTko6Ki5GUioeUi5CNiJA� != "" )
    {
        switch ( $_obfuscate_iJKPi4eTkoaKhpOVio2Ojow� )
        {
            case "username" :
                $_obfuscate_h4eJlYuIjpKNio6QkIuJlIY�[] = " `username` like '".$_obfuscate_hoaTko6Ki5GUioeUi5CNiJA�."%'";
                break;
            case "pid" :
                $_obfuscate_h4eJlYuIjpKNio6QkIuJlIY�[] = " `pid`=".$_obfuscate_hoaTko6Ki5GUioeUi5CNiJA�;
                break;
            case "qq" :
                $_obfuscate_h4eJlYuIjpKNio6QkIuJlIY�[] = " `qq`='".$_obfuscate_hoaTko6Ki5GUioeUi5CNiJA�."'";
        }
    }
    $_obfuscate_jYeUjIaQh4_Gh46KjoeQipA� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "level", "pg", "int", 0 );
    $_obfuscate_i4uIkYuKkJGQlJKOjoiMj4c�['level'] = $_obfuscate_jYeUjIaQh4_Gh46KjoeQipA�;
    switch ( $_obfuscate_jYeUjIaQh4_Gh46KjoeQipA� )
    {
        case "1" :
            $_obfuscate_h4eJlYuIjpKNio6QkIuJlIY�[] = " `level`>'7'";
            break;
        case "2" :
            $_obfuscate_h4eJlYuIjpKNio6QkIuJlIY�[] = " `level`='7'";
            break;
        case "3" :
            $_obfuscate_h4eJlYuIjpKNio6QkIuJlIY�[] = " `level`='6'";
        }
        else
        {
            $_obfuscate_h4eJlYuIjpKNio6QkIuJlIY�[] = " `pid`=".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid'];
            $_obfuscate_h4eJlYuIjpKNio6QkIuJlIY�[] = " `isdel`=0 ";
            if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] == 7 )
            {
                $_obfuscate_h4eJlYuIjpKNio6QkIuJlIY�[] = " `level`=6 ";
                $_obfuscate_h4eJlYuIjpKNio6QkIuJlIY�[] = " `pmid`=".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['id']." ";
            }
            if ( $_obfuscate_hoaTko6Ki5GUioeUi5CNiJA� != "" )
            {
                switch ( $_obfuscate_iJKPi4eTkoaKhpOVio2Ojow� )
                {
                    case "username" :
                        $_obfuscate_h4eJlYuIjpKNio6QkIuJlIY�[] = " `username` like '".$_obfuscate_hoaTko6Ki5GUioeUi5CNiJA�."%'";
                        break;
                    case "qq" :
                        $_obfuscate_h4eJlYuIjpKNio6QkIuJlIY�[] = " `qq`='".$_obfuscate_hoaTko6Ki5GUioeUi5CNiJA�."'";
                }
            }
            if ( 7 < $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] )
            {
                $_obfuscate_jYeUjIaQh4_Gh46KjoeQipA� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "level", "pg", "int", 0 );
                $_obfuscate_i4uIkYuKkJGQlJKOjoiMj4c�['level'] = $_obfuscate_jYeUjIaQh4_Gh46KjoeQipA�;
                switch ( $_obfuscate_jYeUjIaQh4_Gh46KjoeQipA� )
                {
                    case "1" :
                        $_obfuscate_h4eJlYuIjpKNio6QkIuJlIY�[] = " `level`>'7'";
                        break;
                    case "2" :
                        $_obfuscate_h4eJlYuIjpKNio6QkIuJlIY�[] = " `level`='7'";
                        break;
                    case "3" :
                        $_obfuscate_h4eJlYuIjpKNio6QkIuJlIY�[] = " `level`='6'";
                }
            }
    }
}
$_obfuscate_j4mJh4aKjZKHhpOSiJKSjJI� = "";
if ( empty( $_obfuscate_h4eJlYuIjpKNio6QkIuJlIY� ) )
{
    $_obfuscate_j4mJh4aKjZKHhpOSiJKSjJI� = " where".implode( " and ", $_obfuscate_h4eJlYuIjpKNio6QkIuJlIY� );
}
$_obfuscate_lJKOiJSHjo_Sj4yKk4aIh5I�[] = _obfuscate_hpCTj4mKj5WSkpWPjouJkoc�( );
$_obfuscate_lI_KipSOk4iQkI_MjIuVkpQ� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "recordnum", "gp", "int", 0 );
if ( $_obfuscate_k42Rh4mVlYqGi4mOiZWMjJA� == 1 )
{
    $_obfuscate_k46Gk4qOjJGGiYqMiouGh4g� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( $_obfuscate_kZCPiJCHiI_IlY2Ok4_JlIc�.$_obfuscate_lJSNlZWKlYmGi4iSkIqHjpA�.$_obfuscate_j4mJh4aKjZKHhpOSiJKSjJI� );
    $_obfuscate_lI_KipSOk4iQkI_MjIuVkpQ� = $_obfuscate_k46Gk4qOjJGGiYqMiouGh4g�['tnum'];
}
$_obfuscate_lJKOiJSHjo_Sj4yKk4aIh5I�[] = _obfuscate_hpCTj4mKj5WSkpWPjouJkoc�( );
$_obfuscate_i4uIkYuKkJGQlJKOjoiMj4c�['recordnum'] = $_obfuscate_lI_KipSOk4iQkI_MjIuVkpQ�;
$_obfuscate_jIiNjZCPkoeUjI2LipCQk5Q� = abs( floor( $_obfuscate_lI_KipSOk4iQkI_MjIuVkpQ� / ZPAGESIZE * -1 ) );
$_obfuscate_lJKOiJSHjo_Sj4yKk4aIh5I�[] = _obfuscate_hpCTj4mKj5WSkpWPjouJkoc�( );
echo "<textarea id=viewsql>";
echo htmlspecialchars( $_obfuscate_iYqPiJGIjoaVhoaQiI2Ti4w�.$_obfuscate_lJSNlZWKlYmGi4iSkIqHjpA�.$_obfuscate_j4mJh4aKjZKHhpOSiJKSjJI�." LIMIT ".( $_obfuscate_k42Rh4mVlYqGi4mOiZWMjJA� - 1 ) * ZPAGESIZE.",".ZPAGESIZE );
echo "\r\n";
$_obfuscate_iZWHjpGQkoqPlYmJjYmIhpU� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_lZGTiIiKhouKiZGLi5KUkI8�( $_obfuscate_iYqPiJGIjoaVhoaQiI2Ti4w�.$_obfuscate_lJSNlZWKlYmGi4iSkIqHjpA�.$_obfuscate_j4mJh4aKjZKHhpOSiJKSjJI�." LIMIT ".( $_obfuscate_k42Rh4mVlYqGi4mOiZWMjJA� - 1 ) * ZPAGESIZE.",".ZPAGESIZE );
$_obfuscate_lJKOiJSHjo_Sj4yKk4aIh5I�[] = _obfuscate_hpCTj4mKj5WSkpWPjouJkoc�( );
$_obfuscate_iIiHi4aTkoySkpCNio_UjYo� = "";
if ( empty( $_obfuscate_iZWHjpGQkoqPlYmJjYmIhpU� ) )
{
    foreach ( $_obfuscate_iZWHjpGQkoqPlYmJjYmIhpU� as $_obfuscate_kYqOi5CTjoySj4mIkYmIlY4� )
    {
        $_obfuscate_iIiHi4aTkoySkpCNio_UjYo� .= $_obfuscate_kYqOi5CTjoySj4mIkYmIlY4�['id'].",";
    }
    $_obfuscate_iIiHi4aTkoySkpCNio_UjYo� = substr( $_obfuscate_iIiHi4aTkoySkpCNio_UjYo�, 0, strlen( $_obfuscate_iIiHi4aTkoySkpCNio_UjYo� ) - 1 );
}
$_obfuscate_iYeIjIaVlYaIj4yTiJWHk40� = FALSE;
$_obfuscate_lJKOiJSHjo_Sj4yKk4aIh5I�[] = _obfuscate_hpCTj4mKj5WSkpWPjouJkoc�( );
if ( $_obfuscate_iIiHi4aTkoySkpCNio_UjYo� != "" )
{
    $_obfuscate_homTioySho6Vh5ORiYmUkok� .= "(".$_obfuscate_iIiHi4aTkoySkpCNio_UjYo�.") order by id asc";
    $_obfuscate_iYeIjIaVlYaIj4yTiJWHk40� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_lZGTiIiKhouKiZGLi5KUkI8�( $_obfuscate_jpCQi4aKkYaIjpSUhpWNipM�.$_obfuscate_lJSNlZWKlYmGi4iSkIqHjpA�.$_obfuscate_homTioySho6Vh5ORiYmUkok� );
    echo $_obfuscate_jpCQi4aKkYaIjpSUhpWNipM�.$_obfuscate_lJSNlZWKlYmGi4iSkIqHjpA�.$_obfuscate_homTioySho6Vh5ORiYmUkok�;
    echo "\r\n";
}
$_obfuscate_lJKOiJSHjo_Sj4yKk4aIh5I�[] = _obfuscate_hpCTj4mKj5WSkpWPjouJkoc�( );
$_obfuscate_k4yVk4iOipWPioqJlIuVkpE� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iouHh42RkIeKkYaSipWKiog�( $_obfuscate_k42Rh4mVlYqGi4mOiZWMjJA�, $_obfuscate_jIiNjZCPkoeUjI2LipCQk5Q�, $_obfuscate_i4uIkYuKkJGQlJKOjoiMj4c� )."<span class=page_nav_a>".$_obfuscate_lI_KipSOk4iQkI_MjIuVkpQ�."行  耗时"._obfuscate_i4mGjpKMk5WRipSVi4mLi40�( $_obfuscate_lJKOiJSHjo_Sj4yKk4aIh5I� )."毫秒</span>";
echo "</textarea><script type=\"text/javascript\">\r\n$(document).ready(function() { \r\n$(\"[delid]\").css('cursor','pointer').bind('click',function(){\r\nvar tid=$(this).attr(\"delid\");\r\nvar thref='admin_manager.php?action=managerlist&isajax=1&op=del&id='+tid;\t\r\nvar tlevel=\t$(this).attr(\"level\");\t\r\nvar talert='';\r\nif(tlevel==6){\r\ntalert='删除代理帐号会连代理的所有日志信息一起删除，并且不可恢复!<br>该代理的注册卡号不会被删除。<br>请确认是否删除该代理帐号？';\r\n}else if(tlevel==7){\r\ntalert='总代理帐号下没有代理帐号才可以删除，且删除后不可以恢复。<br>请确认是否删除该总代理帐号？';\t\r\n}else if(tlevel==8){\r\ntalert='删除作者帐号会连作者的所有软件一起删除，并且不可恢复!<br>是否删除该作者帐号吗？';\t\t\t\r\n}else{\r\nmalert('这是管理员帐号禁止删除!');\r\nreturn false;\r\n}\r\nmalert(talert,'警告',500,60,function(){\r\n$.ajax({\r\nurl: thref,\r\ncache: false,\r\nsuccess: function(html){\r\nif(html.substr(0,5)=='delok'){\r\n$(\"#trmanagerid\"+tid).remove();\t\r\nmalert(html.substr(5));\t\t\r\n}else{\r\nmalert(html);\r\n}\r\n},\r\nerror:function(XMLHttpRequest, textStatus, errorThrown) {\r\nalert(ourl)\r\n} \r\n});\r\n});\r\n});\r\n\r\n\r\n$(\"[lockid]\").bind('click',function(){\r\nvar othis=$(this);\r\nislock=othis.attr(\"lock\");\r\nvar ourl=\"admin_manager.php?action=managerlist&op=lock&isajax=1&id=\"+$(this).attr(\"lockid\")+\"&lock=\"+islock;\r\n$.ajax({\r\nurl: ourl,\r\ncache: false,\r\nsuccess: function(html){\r\nif(html=='lock'){\r\nothis.attr(\"lock\",1);\r\nothis.attr(\"src\",othis.attr(\"src\").replace(\"b_usrcheck.png\",\"b_uncheck.png\"));\t\t\t\t\r\n}else if(html=='unlock'){\r\nothis.attr(\"lock\",0);\r\nothis.attr(\"src\",othis.attr(\"src\").replace(\"b_uncheck.png\",\"b_usrcheck.png\"));\r\n}else{\r\nmalert(html);\r\n}\r\n},\r\nerror:function(XMLHttpRequest, textStatus, errorThrown) {\r\nalert(ourl)\r\n} \r\n});\t\r\n});\r\n\r\n\r\n});\r\n</script>\r\n";
if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] == 9 && 1 < LICTYPE )
{
    echo "<table class=\"listtable\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\" align=\"center\" width=\"97%\">\r\n<tr>\r\n<td class=\"findorpage\"><form id=\"find_manager\" action=\"?action=managerlist\" method=\"post\"> \r\n<select name=\"level\" style=\"width:200px;height:22px\">\r\n<option value=0";
    echo $_obfuscate_jYeUjIaQh4_Gh46KjoeQipA� == 0 ? " selected" : "";
    echo ">显示所有类型帐号</option>\r\n<option value=1";
    echo $_obfuscate_jYeUjIaQh4_Gh46KjoeQipA� == 1 ? " selected" : "";
    echo ">只显示作者帐号</option>\r\n<option value=2";
    echo $_obfuscate_jYeUjIaQh4_Gh46KjoeQipA� == 2 ? " selected" : "";
    echo ">只显示总代理帐号</option>\r\n<option value=3";
    echo $_obfuscate_jYeUjIaQh4_Gh46KjoeQipA� == 3 ? " selected" : "";
    echo ">只显示代理帐号</option>\r\n</select>\r\n<select name=\"filed\" style=\"width:200px;height:22px\">\r\n<option value='qq' ";
    echo $_obfuscate_iJKPi4eTkoaKhpOVio2Ojow� == "qq" ? " selected" : "";
    echo ">QQ</option>\r\n<option value='username' ";
    echo $_obfuscate_iJKPi4eTkoaKhpOVio2Ojow� == "username" ? " selected" : "";
    echo ">用户名</option>\r\n";
    if ( 1000 < LICTYPE && $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] == 9 )
    {
        echo "<option value='pid' ";
        echo $_obfuscate_iJKPi4eTkoaKhpOVio2Ojow� == "pid" ? " selected" : "";
        echo ">PID</option>\r\n";
    }
    echo "</select>=><input type=\"text\" class=\"smlinput\" name=\"keyword\" value=\"";
    echo $_obfuscate_hoaTko6Ki5GUioeUi5CNiJA�;
    echo "\" onclick=\"this.select()\"/>\r\n<input type=\"submit\" name=\"submit\" class=\"submitbtn\" value=\"查找帐号\" />\r\n</form></td>\r\n</tr>\r\n</table>\r\n";
}
else
{
    echo "<table class=\"listtable\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\" align=\"center\" width=\"97%\">\r\n<tr>\r\n<td class=\"findorpage\"><form id=\"find_manager\" action=\"?action=managerlist\" method=\"post\">\r\n";
    if ( 7 < $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] )
    {
        echo "<select name=\"level\" style=\"width:200px;height:22px\">\r\n<option value=0";
        echo $_obfuscate_jYeUjIaQh4_Gh46KjoeQipA� == 0 ? " selected" : "";
        echo ">所有帐号</option>\r\n<option value=2";
        echo $_obfuscate_jYeUjIaQh4_Gh46KjoeQipA� == 2 ? " selected" : "";
        echo ">所有总代理帐号</option>\r\n<option value=3";
        echo $_obfuscate_jYeUjIaQh4_Gh46KjoeQipA� == 3 ? " selected" : "";
        echo ">所有代理帐号</option>\r\n</select>\r\n";
    }
    else
    {
        echo "<input type='hidden' name='level' value=0 />";
    }
    echo "<select name=\"filed\" style=\"width:200px;height:22px\">\r\n<option value='username' ";
    echo $_obfuscate_iJKPi4eTkoaKhpOVio2Ojow� == "username" ? " selected" : "";
    echo ">用户名</option>\r\n<option value='qq' ";
    echo $_obfuscate_iJKPi4eTkoaKhpOVio2Ojow� == "qq" ? " selected" : "";
    echo ">QQ</option>\r\n</select>=><input type=\"text\" class=\"smlinput\" name=\"keyword\" value=\"";
    echo $_obfuscate_hoaTko6Ki5GUioeUi5CNiJA�;
    echo "\" onclick=\"this.select()\"/>\r\n<input type=\"submit\" name=\"submit\" class=\"submitbtn\" value=\"查找帐号\" />\r\n</form></td>\r\n</tr>\r\n</table>\r\n";
}
echo "<table class=\"listtable\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\" align=\"center\" width=\"97%\">\r\n<tr>\r\n<td class=\"findorpage\">";
echo $_obfuscate_k4yVk4iOipWPioqJlIuVkpE�;
echo "</td>\r\n</tr>\r\n</table>\r\n<table class=\"listtable\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\" align=\"center\" width=\"97%\">\r\n<tr class=\"trhead\">\r\n<td malt=\"后台帐号ID\">ID</td>\r\n";
if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] == 9 && 1 < LICTYPE )
{
    echo "<td>PID</td>";
}
echo "<td>帐号</td>\r\n<td>余额</td>\r\n<td>上级</td>\r\n<td>QQ</td>\r\n<td>类型</td>\r\n<td>添加日期</td>\r\n<td>到期日期</td>\r\n<td>最后登录日期</td>\r\n<td>最后登录IP</td>\r\n<td colspan=4>操作</td>\r\n</tr>\r\n";
if ( empty( $_obfuscate_iYeIjIaVlYaIj4yTiJWHk40� ) )
{
    if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] == 9 && 1 < LICTYPE )
    {
        echo "<tr class=trd><td colspan=14>无任何数据</td></tr>";
    }
    else
    {
        echo "<tr class=trd><td colspan=13>无任何数据</td></tr>";
    }
}
else
{
    foreach ( $_obfuscate_iYeIjIaVlYaIj4yTiJWHk40� as $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI� )
    {
        echo "<tr class=\"trd\" id=\"trmanagerid";
        echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['id'];
        echo "\">\r\n<td>";
        echo "<input type='checkbox' value='".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['id']."' ";
        if ( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['level'] != 6 )
        {
            echo "disabled='disabled' name='vailids' ";
        }
        else
        {
            echo "name='ids'";
        }
        echo ">".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['id'];
        echo "</td>\t\t\r\n";
        if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] == 9 && 1 < LICTYPE )
        {
            echo "<td>".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['pid']."</td>";
        }
        if ( 8 < $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] && 7 < $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['level'] )
        {
            echo "<td><a href=admin_manager.php?action=mmlogin&id=".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['id'].">"._obfuscate_j5CKkY_GkomSkoaUlIuLlYk�( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['username'] )."</a></td>";
        }
        else
        {
            echo "<td>".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['username']."</td>";
        }
        echo "<td>".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['rmb']."</td>";
        echo "<td>".$_obfuscate_lJKGipSShoyHi4aRkoyKjo0�[$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['pmid']]."</td>";
        echo "\r\n<td>";
        echo _obfuscate_j5CKkY_GkomSkoaUlIuLlYk�( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['qq'] );
        echo "</td>\r\n<td>";
        echo $_obfuscate_jJCMjYyHjpSTiJCNiYiIkpE�[$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['level']];
        echo "</td>\r\n<td>";
        echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['addtime'];
        echo "</td>\r\n<td ";
        if ( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['endtime'] < date( "Y-m-d H:i:s" ) )
        {
            echo "style='color:red'";
        }
        echo ">";
        echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['endtime'];
        echo "</td>\r\n<td>";
        echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['lastlogintime'];
        echo "</td>\r\n<td class=isip>";
        echo long2ip( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['lastloginip'] );
        echo "</td>\r\n<td width=\"20\"><img lockid=\"";
        echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['id'];
        echo "\" lock=\"";
        echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['islock'];
        echo "\" malt=\"点击此按钮锁定或解锁，绿色小对号表示正常状态点击即可锁定，灰色小锁表示是锁定状态点击可解锁\" src=\"";
        echo INSTALLPATH;
        echo "kss_inc/images/";
        echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['islock'] == 1 ? "b_uncheck.png" : "b_usrcheck.png";
        echo "\"></td>\r\n<td width=\"20\"><a href=\"javascript:void(0)\"  onclick=\"dwin('sup_addmanageruser','编辑后台帐号','admin_manager.php?action=addmanager&id=";
        echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['id'];
        echo "')\"><img malt=\"编辑该帐号\" src=\"";
        echo INSTALLPATH;
        echo "kss_inc/images/b_edit.png\" ></a></td>\r\n<td width=\"20\"><a href=\"javascript:void(0)\"  onclick=\"dwin('info_myoplog','后台帐号登陆日志','admin_logs.php?action=managerlogin&managerid=";
        echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['id'];
        echo "')\"><img malt=\"该帐号登陆后台的日志记录\" src=\"";
        echo INSTALLPATH;
        echo "kss_inc/images/b_calendar.png\"></a></td>\r\n<td width=\"20\"><img level=";
        echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['level'];
        echo " delid=\"";
        echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['id'];
        echo "\" malt=\"删除该用户\" src=\"";
        echo INSTALLPATH;
        echo "kss_inc/images/bd_drop.png\"></td>\r\n</tr>\r\n";
    }
}
echo "</table>\r\n<!-- 批处理提卡授权开始 -->\r\n";
if ( 7 < $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] )
{
    $_obfuscate_hpWVkpCIi4yPiIeQkI6RkYY� = $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']( "select * from kss_tb_keyset where `pid`=".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']." and `islock`=0" );
}
else
{
    $_obfuscate_hpWVkpCIi4yPiIeQkI6RkYY� = $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']( "select * from kss_tb_keyset where `pid`=".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']." and `islock`=0 and `id` in (select distinct `keygroupid` from `kss_tb_agentprice` where managerid=".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['id'].") " );
}
$_obfuscate_kZOSlZGUjouQjI2TlY6Gh4w� = "";
if ( empty( $_obfuscate_hpWVkpCIi4yPiIeQkI6RkYY� ) )
{
    $_obfuscate_kZOSlZGUjouQjI2TlY6Gh4w� = array( );
    foreach ( $_obfuscate_hpWVkpCIi4yPiIeQkI6RkYY� as $_obfuscate_lJCSkoeMho2PlJOLiouJj4Y� )
    {
        $_obfuscate_lJCSkoeMho2PlJOLiouJj4Y�['keyname'] = _obfuscate_j5CKkY_GkomSkoaUlIuLlYk�( $_obfuscate_lJCSkoeMho2PlJOLiouJj4Y�['keyname'] );
        $_obfuscate_lJCSkoeMho2PlJOLiouJj4Y�['keyname'] = _obfuscate_j5CKkY_GkomSkoaUlIuLlYk�( $_obfuscate_lJCSkoeMho2PlJOLiouJj4Y�['keyname'] );
        $_obfuscate_lJCSkoeMho2PlJOLiouJj4Y�['extattr1'] = _obfuscate_j5CKkY_GkomSkoaUlIuLlYk�( $_obfuscate_lJCSkoeMho2PlJOLiouJj4Y�['extattr1'] );
        $_obfuscate_lJCSkoeMho2PlJOLiouJj4Y�['extattr1'] = _obfuscate_j5CKkY_GkomSkoaUlIuLlYk�( $_obfuscate_lJCSkoeMho2PlJOLiouJj4Y�['extattr1'] );
        $_obfuscate_kZOSlZGUjouQjI2TlY6Gh4w�[] = "['".$_obfuscate_lJCSkoeMho2PlJOLiouJj4Y�['softid']."','".$_obfuscate_lJCSkoeMho2PlJOLiouJj4Y�['keyname']."','".$_obfuscate_lJCSkoeMho2PlJOLiouJj4Y�['cday']."','".$_obfuscate_lJCSkoeMho2PlJOLiouJj4Y�['points']."','".$_obfuscate_lJCSkoeMho2PlJOLiouJj4Y�['linknum']."','".$_obfuscate_lJCSkoeMho2PlJOLiouJj4Y�['retailprice']."','".$_obfuscate_lJCSkoeMho2PlJOLiouJj4Y�['id']."']";
    }
    $_obfuscate_kZOSlZGUjouQjI2TlY6Gh4w� = implode( ",", $_obfuscate_kZOSlZGUjouQjI2TlY6Gh4w� );
}
echo "<script>\r\n";
echo "var kgroup=[".$_obfuscate_kZOSlZGUjouQjI2TlY6Gh4w�."];";
echo "function getids(){\t\t\r\nvar idsjsstr='';\r\nvar idsjsjoin='';\r\n$(\"input[name='ids']:checked\").each(function(){\r\nidsjsstr=idsjsstr+idsjsjoin+$(this).val(); \r\nidsjsjoin=',';  \r\n});\r\nreturn idsjsstr;\t\r\n}\r\n\r\n$(document).ready(function() { \r\n$(\"#w_softid\").bind('change',function(){\r\nvar tval=$(this).val();\r\nvar optdata='';\r\nvar piss=0;\r\nif(tval!=0){\r\nfor(var i = 0; i < kgroup.length; i++)  {        \nif(kgroup[i][0]==tval){\r\nif(piss==0){\r\n$(\"#w_rprice\").text(kgroup[i][5]);\r\npiss=1;\r\n}\r\noptdata +='<option rprice='+kgroup[i][5]+' value=\"'+kgroup[i][6]+'\">'+kgroup[i][1]+'--'+kgroup[i][2]+'天--'+kgroup[i][3]+'点--'+kgroup[i][4]+'通道</option>';\r\n}\r\n}\r\n$(\"#w_kgid\").html(optdata);\r\n}\r\n\r\n});\r\n$(\"#w_kgid\").bind('change',function(){\r\nvar rpei=$(\"#w_kgid option:selected\").attr(\"rprice\");\r\n$(\"#w_rprice\").text(rpei);\t\t\t\r\n});\t\r\n$(\"#chkall\").click(function(){ \r\n$(\"input[name='ids']\").checkCbx(); \r\n});\t\r\n\r\n$('#w_delkeyprice').bind(\"click\",function(e){\t\t\r\nvar idsstr=getids();\r\nif(idsstr==''){\r\nmalert('请最少选择一个代理');\r\nreturn false;\r\n}\r\nif($(\"#w_softid\").val()==0){\r\nmalert('请选择一个软件');\r\nreturn false;\r\n}\r\nvar thref='admin_manager.php?action=managerlist_delprice&isajax=1';\r\nthref=thref+'&w_tmpkey='+$(\"#w_tmpkey\").val();\t\r\nthref=thref+'&w_softid='+$(\"#w_softid\").val();\r\nthref=thref+'&w_kgid='+$(\"#w_kgid\").val();\r\nthref=thref+'&w_id='+idsstr;\r\nMouse(e);\r\n$.ajax({\r\nurl: thref,\r\ncache: false,\r\nsuccess: function(html){\r\nif(html.substr(0,5)=='delok'){\r\nmview('批量删除提卡授权添加成功！',-20,-200);\t\t\r\n}else{\r\nmalert(html);\r\n}\r\n},\r\nerror:function(XMLHttpRequest, textStatus, errorThrown) {\r\nalert(ourl)\r\n} \r\n});\r\n\r\n});\t\t\t\r\n$('#w_savekeyprice').bind(\"click\",function(e){\t\t\r\nvar idsstr=getids();\r\nif(idsstr==''){\r\nmalert('请最少选择一个代理');\r\nreturn false;\r\n}\r\nif($(\"#w_softid\").val()==0){\r\nmalert('请选择一个软件');\r\nreturn false;\r\n}\r\nif($(\"#w_keyprice\").val()<=0){\r\nmalert('请输入一个代理价');\r\nreturn false;\r\n}\r\nvar thref='admin_manager.php?action=managerlist_saveprice&isajax=1';\t\r\nthref=thref+'&w_tmpkey='+$(\"#w_tmpkey\").val();\t\r\nthref=thref+'&w_softid='+$(\"#w_softid\").val();\t\r\nthref=thref+'&w_kgid='+$(\"#w_kgid\").val();\t\r\nthref=thref+'&w_keyprice='+$(\"#w_keyprice\").val();\r\nthref=thref+'&w_id='+idsstr;\r\nMouse(e);\r\n$.ajax({\r\nurl: thref,\r\ncache: false,\r\nsuccess: function(html){\r\nif(html.substr(0,6)=='saveok'){\r\nmview('批量保存提卡授权添加成功！',-20,-200);\t\t\r\n}else{\r\nmalert(html);\r\n}\r\n},\r\nerror:function(XMLHttpRequest, textStatus, errorThrown) {\r\nalert(ourl)\r\n} \r\n});\r\n\r\n});\t        \r\n});\r\n</script>\r\n<table class=\"listtable\" id=\"keypricesets\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\" align=\"center\" width=\"97%\">\r\n<tr class=\"trhead\">\r\n<td>用户列表中选择的代理</td>\r\n<td>软件名</td>\r\n<td>卡类</td>\r\n<td>零售价</td>\r\n<td id=\"whprice\">代理价</td>\r\n<td>操作</td>\r\n</tr>\r\n";
$_obfuscate_h4uPi4aIh5KQjIiIi4aNkZM� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_lZGTiIiKhouKiZGLi5KUkI8�( "select kss_tb_agentprice.*, kss_tb_keyset.`keyname`, kss_tb_keyset.`retailprice`, kss_tb_keyset.cday, kss_tb_keyset.points, kss_tb_keyset.linknum ,kss_tb_soft.`softname` from kss_tb_agentprice left join kss_tb_keyset on kss_tb_agentprice.`keygroupid`=kss_tb_keyset.`id` left join kss_tb_soft on kss_tb_agentprice.softid=kss_tb_soft.`id` where kss_tb_agentprice.managerid=".$_obfuscate_komRjo6Qi4_Rh5KHi5SLhpE�." and kss_tb_agentprice.`tmpkey`='no' order by softid" );
if ( 7 < $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] )
{
    $_obfuscate_k5SLh42UiZKPkouUjIuKjJI� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_lZGTiIiKhouKiZGLi5KUkI8�( "select `id`,`softname` from kss_tb_soft where `pid`=".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid'] );
}
else
{
    $_obfuscate_k5SLh42UiZKPkouUjIuKjJI� = $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']( "select `id`,`softname` from kss_tb_soft where `pid`=".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']." and id in (select distinct `softid` from `kss_tb_agentprice` where managerid=".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['id'].")" );
}
echo "<tr class=\"trd\" id=\"trkeyprice\">\r\n<td><input type=\"button\" name=\"chkall\" id=\"chkall\" value=\"全选/反选\" class=\"submitbtn\"></td>\r\n<td><input type=hidden name='w_tmpkey' value='no' id='w_tmpkey'><input type=hidden value='";
echo $_obfuscate_komRjo6Qi4_Rh5KHi5SLhpE�;
echo "' id='w_mid'><select name='w_softid' id=\"w_softid\"><option value='0'>选择软件</option>\r\n";
foreach ( $_obfuscate_k5SLh42UiZKPkouUjIuKjJI� as $_obfuscate_jpSNkYeQi5CGjIeTipSTkYY� )
{
    $_obfuscate_jpSNkYeQi5CGjIeTipSTkYY�['softname'] = _obfuscate_j5CKkY_GkomSkoaUlIuLlYk�( $_obfuscate_jpSNkYeQi5CGjIeTipSTkYY�['softname'] );
    echo "<option value=".$_obfuscate_jpSNkYeQi5CGjIeTipSTkYY�['id'].">".$_obfuscate_jpSNkYeQi5CGjIeTipSTkYY�['softname']."</option>";
}
echo "\t\t\t\t\t\t\t\r\n</select></td>\r\n<td><select name='w_kgid' id=\"w_kgid\"><option value='0'>请先选择软件</option></select></td>\r\n<td id=\"w_rprice\">&nbsp;</td>\r\n<td><input maxlength=\"8\" type=text id='w_keyprice' class=smlinput value='0'></td>\r\n<td><input type=button class=submitbtn value=\"保存授权\" id=\"w_savekeyprice\">&nbsp;<input type=button class=submitbtn value=\"删除授权\" id=\"w_delkeyprice\"></td>\r\n\r\n</tr>\r\n</table>\r\n\r\n<!-- 批处理提卡授权结束 -->\t\t\t\t\r\n<table class=\"listtable\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\" align=\"center\" width=\"97%\">\r\n<tr>\r\n<td class=\"findorpage\">";
echo $_obfuscate_k4yVk4iOipWPioqJlIuVkpE�;
echo "</td>\r\n</tr>\r\n</table>\r\n";
$_obfuscate_i5GVjZWQj4ePkJKMjJSRipM�[] = _obfuscate_hpCTj4mKj5WSkpWPjouJkoc�( );
echo "<div id=pageruntime>页面运行时间"._obfuscate_i4mGjpKMk5WRipSVi4mLi40�( $_obfuscate_i5GVjZWQj4ePkJKMjJSRipM� )."毫秒</div>";
echo "</body>\r\n</html>";
?>
