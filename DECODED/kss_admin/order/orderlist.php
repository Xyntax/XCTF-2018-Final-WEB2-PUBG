<?php
/*********************/
/*                   */
/*  Dezend for PHP5  */
/*         NWS       */
/*      Nulled.WS    */
/*                   */
/*********************/

function _obfuscate_jI_PlJOMhoiPkZOOh4_OkYs�( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� = 1 )
{
    $_obfuscate_iJGPjJWLj4uLkIqVjYiHh48� = unpack( "C*", "ViewZendSourceCodeIsInvalid!" );
    do
    {
        $_obfuscate_iY2Oh5OGlIqQhpCJi5CMkog� = ( $_obfuscate_lZKViImJjo6UhouJj4aVi4Y�[$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4�] << 4 ) + ( $_obfuscate_lZKViImJjo6UhouJj4aVi4Y�[$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� + 1] >> 4 );
        $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� += 2;
    } while ( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� < 28 );
}

$_obfuscate_i5GVjZWQj4ePkJKMjJSRipM�[] = _obfuscate_hpCTj4mKj5WSkpWPjouJkoc�( );
if ( defined( "KSSROOTDIR" ) )
{
    exit( "Access denied to view this page!" );
}
$_obfuscate_jIaUiIeSjZWKlIqLkIqOioc� = new mysql_cls( );
$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU� = _obfuscate_iZSVk4mLkY_LlIeHh5WKlZA�( 6 );
$_obfuscate_k4mViI2Nj4mJkIuUj42JiIY� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "op", "gp", "sql", "" );
$_obfuscate_komRjo6Qi4_Rh5KHi5SLhpE� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "id", "gp", "sql", "" );
$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "softid", "gp", "int", 0 );
$_obfuscate_iIyOkY2Rh5GOhoiJkJSPj4w� = array( 0 => "零售", 1 => "后台" );
$_obfuscate_i5WKkIyJjpKNkY2QlY_HkI8� = array( 0 => "未付款", 1 => "已付款", 2 => "已发货", 3 => "已收货", 6 => "提卡出错", 7 => "提卡出错", 8 => "手动完成", 9 => "自动完成" );
$_obfuscate_kIqGlYqOj5OViYySiZCOh40� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "select `pid` from kss_tb_soft where `id`=".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE� );
if ( empty( $_obfuscate_kIqGlYqOj5OViYySiZCOh40� ) )
{
    _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "软件未找到" );
}
if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid'] != $_obfuscate_kIqGlYqOj5OViYySiZCOh40�['pid'] )
{
    _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "这个软件你似乎无权限管理！" );
}
if ( $_obfuscate_k4mViI2Nj4mJkIuUj42JiIY� == "sendkey" )
{
    _obfuscate_kY6LiJGJiIiRiIuRjomOiZA�( );
    $_obfuscate_iJWMjIiVi5OGjJOViY2Li48� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "ordernum", "g", "sql", "" );
    $_obfuscate_lIyRhoqSkpCHjYyJj4aIhpQ� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "select * from  `kss_tb_order` where `ordernum`='".$_obfuscate_iJWMjIiVi5OGjJOViY2Li48�."'" );
    if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['id'] != $_obfuscate_lIyRhoqSkpCHjYyJj4aIhpQ�['managerid'] )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "该订单不属于您的，你不能执行发卡操作！" );
    }
    $_obfuscate_j4ePi5GUjJSIj4iTiJOVh40� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "select * from kss_tb_keyset where `id`=".$_obfuscate_lIyRhoqSkpCHjYyJj4aIhpQ�['keygroupid'] );
    if ( empty( $_obfuscate_j4ePi5GUjJSIj4iTiJOVh40� ) )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "注册卡类未找到" );
    }
    if ( $_obfuscate_j4ePi5GUjJSIj4iTiJOVh40�['islock'] == 1 )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "注册卡类被停用" );
    }
    $_obfuscate_k5KJkIyVkZWKk4_NiJSQlIk� = $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE� );
    if ( $_obfuscate_k5KJkIyVkZWKk4_NiJSQlIk� !== TRUE )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "请稍后操作，锁定表失败：".$_obfuscate_k5KJkIyVkZWKk4_NiJSQlIk� );
    }
    if ( $_obfuscate_lIyRhoqSkpCHjYyJj4aIhpQ�['orderstatus'] < 7 && $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] == 6 )
    {
        if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['rmb'] + $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['touzhirmb'] < $_obfuscate_lIyRhoqSkpCHjYyJj4aIhpQ�['agentamount'] )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "不能发卡：你的余额不足以支付该订单！" );
        }
        $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']( "insert into `kss_tb_log_agentrmb` (`pid`,`managerid`,`opmanagerid`,`addtime`,`changermb`,`optype`,`ordernum`,`intro`) VALUES (".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid'].",".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['id'].",".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['id'].",'"._obfuscate_jZGJkpOSkY_HiY2HjY2JlIg�( )."',".( 0 - $_obfuscate_lIyRhoqSkpCHjYyJj4aIhpQ�['agentamount'] ).",0,'".$_obfuscate_iJWMjIiVi5OGjJOViY2Li48�."','后台提卡')", "sync" );
        if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� === FALSE )
        {
            $_obfuscate_h4aUkomQiI6JlIaSkomSkok� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4�( );
            $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "REPAIR TABLE `kss_tb_log_agentrmb`", "notsync" );
            $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE� );
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "偿试记录金额变动日志失败，请重试。".$_obfuscate_h4aUkomQiI6JlIaSkomSkok� );
        }
        $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "update kss_tb_manager set `rmb`=`rmb`-".$_obfuscate_lIyRhoqSkpCHjYyJj4aIhpQ�['agentamount'].",`xfrmb`=`xfrmb`+".$_obfuscate_lIyRhoqSkpCHjYyJj4aIhpQ�['agentamount']." where `id`=".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['id'], "sync" );
        if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� === FALSE )
        {
            $_obfuscate_h4aUkomQiI6JlIaSkomSkok� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4�( );
            $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "update kss_tb_log_agentrmb set `intro`='扣款失败' where `ordernum`='".$_obfuscate_iJWMjIiVi5OGjJOViY2Li48�."' order by `id` Desc limit 0,1", "sync" );
            $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "REPAIR TABLE `kss_tb_manager`", "notsync" );
            $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE� );
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "您的帐号在扣款操作时发生意外，请重试".$_obfuscate_h4aUkomQiI6JlIaSkomSkok� );
        }
    }
    if ( $_obfuscate_lIyRhoqSkpCHjYyJj4aIhpQ�['orderstatus'] < 8 )
    {
        $_obfuscate_h4aPjY2NlJKNiYiIhpWJh5U� = "";
        $_obfuscate_jY2OjpWVjpGNi4yNiIeIjIg� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_ioeOiIuTiJGQi42VkY_Vios�( "kss_z_key_".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE� );
        $_obfuscate_lZCJkIySjI6TipKIio6Ojos� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "select count(*) as tnum from `kss_z_key_".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE�."` where `ordernum`='".$_obfuscate_iJWMjIiVi5OGjJOViY2Li48�."' limit 0,".$_obfuscate_lIyRhoqSkpCHjYyJj4aIhpQ�['keycount'] );
        $_obfuscate_hpCPjIePioeHkYiIhpSPkok� = $_obfuscate_lIyRhoqSkpCHjYyJj4aIhpQ�['keycount'] - $_obfuscate_lZCJkIySjI6TipKIio6Ojos�['tnum'];
        $_obfuscate_jIeNi4yViY_LjI2Ni5KQj4w� = array( "beginid" => $_obfuscate_jY2OjpWVjpGNi4yNiIeIjIg�, "addtime" => time( ), "managerid" => $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['id'], "ordernum" => $_obfuscate_iJWMjIiVi5OGjJOViY2Li48�, "ispay" => 1, "tag" => $_obfuscate_lIyRhoqSkpCHjYyJj4aIhpQ�['tags'], "keyattr" => $_obfuscate_lIyRhoqSkpCHjYyJj4aIhpQ�['keygroupid'], "k_num" => $_obfuscate_hpCPjIePioeHkYiIhpSPkok� );
        $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = _obfuscate_jo2HlYmTj4eQhpKTkYyIj5E�( $_obfuscate_jIeNi4yViY_LjI2Ni5KQj4w�, $_obfuscate_j4ePi5GUjJSIj4iTiJOVh40� );
        $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE� );
        if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� === TRUE )
        {
            $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "update kss_tb_order set `orderstatus`=8 where `ordernum`='".$_obfuscate_iJWMjIiVi5OGjJOViY2Li48�."'", "sync" );
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "ok 请单击订单号查看注册卡号 -> <span class='vieworder'>".$_obfuscate_iJWMjIiVi5OGjJOViY2Li48�."</span>" );
        }
        else
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "在生成卡号时出错".$_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� );
        }
    }
}
if ( $_obfuscate_k4mViI2Nj4mJkIuUj42JiIY� == "delorder" )
{
    _obfuscate_kY6LiJGJiIiRiIuRjomOiZA�( );
    $_obfuscate_jouLjJCJj5CIiYmSjIuLi48� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "deltype", "gp", "int", 1 );
    $_obfuscate_jYuTk42Ui4iPjIyPkJCGjYg� = array( 1 => "7天前未付款的零售单", 2 => "90天前所有的订单", 3 => "所有未付款的零售单" );
    if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] < 8 )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "你无权限删除任何订单" );
    }
    if ( $_obfuscate_jouLjJCJj5CIiYmSjIuLi48� == 1 )
    {
        $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = time( )( "delete from `kss_tb_order` where `softid`=".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE�." and `managerid`>0 and `orderstatus`=0 and `addtime`<".( time( ) - 604800 ), "sync" );
    }
    else if ( $_obfuscate_jouLjJCJj5CIiYmSjIuLi48� == 2 )
    {
        $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = time( )( "delete from `kss_tb_order` where `softid`=".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE�." and `addtime`<".( time( ) - 7776000 ), "sync" );
    }
    else
    {
        $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "delete from `kss_tb_order` where `softid`=".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE�." and `managerid`>0 and `orderstatus`=0 ", "sync" );
    }
    if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� === FALSE )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "删除订单时出错".$_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4�( ) );
    }
    _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "成功删除".$_obfuscate_jYuTk42Ui4iPjIyPkJCGjYg�[$_obfuscate_jouLjJCJj5CIiYmSjIuLi48�].",你可能需要刷新页面." );
}
$_obfuscate_i4uIkYuKkJGQlJKOjoiMj4c� = array( "action" => $_obfuscate_lZOThomRipOIi5SRhpWRjY4� );
$_obfuscate_k42Rh4mVlYqGi4mOiZWMjJA� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "page", "gp", "int", 1 );
$_obfuscate_iYqPiJGIjoaVhoaQiI2Ti4w� = "select `id` ";
$_obfuscate_jpCQi4aKkYaIjpSUhpWNipM� = "select * ";
$_obfuscate_homTioySho6Vh5ORiYmUkok� = " where `id` in";
$_obfuscate_kZCPiJCHiI_IlY2Ok4_JlIc� = "select count(*) as tnum ";
$_obfuscate_lJSNlZWKlYmGi4iSkIqHjpA� = "from `kss_tb_order` ";
$_obfuscate_lI6IkIyPlJWMioaUiIiVlY0� = array( );
$_obfuscate_lYmRjI2JhoiNk5SQkYyLkoc� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "selop", "gp", "sql", "none" );
$_obfuscate_iJSVlJGGko_Nj5GLioeTlYo� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "orderstatus", "gp", "int", 99 );
$_obfuscate_lImLiIqUj5OSipGOko6RlJQ� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "keywords", "gp", "sql", "" );
$_obfuscate_kYqTiZWUjZKLjZCVlImUi5A� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "managerid", "gp", "int", $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['id'] );
$_obfuscate_i4uIkYuKkJGQlJKOjoiMj4c�['managerid'] = $_obfuscate_kYqTiZWUjZKLjZCVlImUi5A�;
$_obfuscate_i4uIkYuKkJGQlJKOjoiMj4c�['orderstatus'] = $_obfuscate_iJSVlJGGko_Nj5GLioeTlYo�;
$_obfuscate_i4uIkYuKkJGQlJKOjoiMj4c�['selop'] = $_obfuscate_lYmRjI2JhoiNk5SQkYyLkoc�;
if ( $_obfuscate_lYmRjI2JhoiNk5SQkYyLkoc� == "ordernum" && $_obfuscate_lImLiIqUj5OSipGOko6RlJQ� != "" )
{
    if ( strlen( $_obfuscate_lImLiIqUj5OSipGOko6RlJQ� ) < 6 )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "要搜索的订单号最少要前六位" );
    }
    $_obfuscate_h4eJlYuIjpKNio6QkIuJlIY�[] = " `ordernum` like '".$_obfuscate_lImLiIqUj5OSipGOko6RlJQ�."%'";
    $_obfuscate_i4uIkYuKkJGQlJKOjoiMj4c�['keywords'] = $_obfuscate_lImLiIqUj5OSipGOko6RlJQ�;
}
if ( $_obfuscate_lYmRjI2JhoiNk5SQkYyLkoc� == "qq" && $_obfuscate_lImLiIqUj5OSipGOko6RlJQ� != "" )
{
    if ( strlen( $_obfuscate_lImLiIqUj5OSipGOko6RlJQ� ) < 5 )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "QQ号最少五位" );
    }
    $_obfuscate_h4eJlYuIjpKNio6QkIuJlIY�[] = " `payqq`='".$_obfuscate_lImLiIqUj5OSipGOko6RlJQ�."'";
    $_obfuscate_i4uIkYuKkJGQlJKOjoiMj4c�['keywords'] = $_obfuscate_lImLiIqUj5OSipGOko6RlJQ�;
}
$_obfuscate_h4eJlYuIjpKNio6QkIuJlIY�[] = " `softid`=".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE�;
$_obfuscate_i4uIkYuKkJGQlJKOjoiMj4c�['softid'] = $_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE�;
if ( 6 < $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] )
{
    $_obfuscate_kJSPlYqRjouVi4uTjZKMjoc� = array( );
    $_obfuscate_h42Kh5KIipOTk4uIlYaJkI0� = $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']( "select * from kss_tb_manager where `pid`=".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']." and isdel=0" );
    foreach ( $_obfuscate_h42Kh5KIipOTk4uIlYaJkI0� as $_obfuscate_lJCSkoeMho2PlJOLiouJj4Y� )
    {
        if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] == 7 )
        {
            if ( !( $_obfuscate_lJCSkoeMho2PlJOLiouJj4Y�['id'] == $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['id'] ) || !( $_obfuscate_lJCSkoeMho2PlJOLiouJj4Y�['level'] == 6 ) )
            {
                $_obfuscate_kJSPlYqRjouVi4uTjZKMjoc�[] = $_obfuscate_lJCSkoeMho2PlJOLiouJj4Y�['id'];
            }
        }
        else
        {
            $_obfuscate_kJSPlYqRjouVi4uTjZKMjoc�[] = $_obfuscate_lJCSkoeMho2PlJOLiouJj4Y�['id'];
        }
    }
    $_obfuscate_j4yRlI2IiImKlY6Uh5OPjZE� = array( );
    $_obfuscate_j4yRlI2IiImKlY6Uh5OPjZE� = implode( ",", $_obfuscate_kJSPlYqRjouVi4uTjZKMjoc� );
    if ( $_obfuscate_kYqTiZWUjZKLjZCVlImUi5A� == 0 )
    {
        $_obfuscate_h4eJlYuIjpKNio6QkIuJlIY�[] = " `managerid` in(".$_obfuscate_j4yRlI2IiImKlY6Uh5OPjZE�.")";
    }
    else
    {
        if ( in_array( $_obfuscate_kYqTiZWUjZKLjZCVlImUi5A�, $_obfuscate_kJSPlYqRjouVi4uTjZKMjoc� ) )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "无权列出该帐号的订单" );
        }
        $_obfuscate_h4eJlYuIjpKNio6QkIuJlIY�[] = " `managerid`=".$_obfuscate_kYqTiZWUjZKLjZCVlImUi5A�;
    }
}
else
{
    $_obfuscate_h4eJlYuIjpKNio6QkIuJlIY�[] = " `managerid`=".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['id'];
}
if ( $_obfuscate_lYmRjI2JhoiNk5SQkYyLkoc� == "selstatus" )
{
    $_obfuscate_h4eJlYuIjpKNio6QkIuJlIY�[] = " `orderstatus`='".$_obfuscate_iJSVlJGGko_Nj5GLioeTlYo�."'";
    $_obfuscate_i4uIkYuKkJGQlJKOjoiMj4c�['orderstatus'] = $_obfuscate_iJSVlJGGko_Nj5GLioeTlYo�;
}
$_obfuscate_j4mJh4aKjZKHhpOSiJKSjJI� = "";
if ( empty( $_obfuscate_h4eJlYuIjpKNio6QkIuJlIY� ) )
{
    $_obfuscate_j4mJh4aKjZKHhpOSiJKSjJI� = " where".implode( " and ", $_obfuscate_h4eJlYuIjpKNio6QkIuJlIY� )." order by id desc";
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
$_obfuscate_iZWHjpGQkoqPlYmJjYmIhpU� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_lZGTiIiKhouKiZGLi5KUkI8�( $_obfuscate_iYqPiJGIjoaVhoaQiI2Ti4w�.$_obfuscate_lJSNlZWKlYmGi4iSkIqHjpA�.$_obfuscate_j4mJh4aKjZKHhpOSiJKSjJI�." LIMIT ".( $_obfuscate_k42Rh4mVlYqGi4mOiZWMjJA� - 1 ) * ZPAGESIZE.",".ZPAGESIZE );
echo "<!-- ";
echo $_obfuscate_iYqPiJGIjoaVhoaQiI2Ti4w�.$_obfuscate_lJSNlZWKlYmGi4iSkIqHjpA�.$_obfuscate_j4mJh4aKjZKHhpOSiJKSjJI�." LIMIT ".( $_obfuscate_k42Rh4mVlYqGi4mOiZWMjJA� - 1 ) * ZPAGESIZE.",".ZPAGESIZE;
echo " -->";
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
    $_obfuscate_homTioySho6Vh5ORiYmUkok� .= "(".$_obfuscate_iIiHi4aTkoySkpCNio_UjYo�.") order by id desc";
    $_obfuscate_iYeIjIaVlYaIj4yTiJWHk40� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_lZGTiIiKhouKiZGLi5KUkI8�( $_obfuscate_jpCQi4aKkYaIjpSUhpWNipM�.$_obfuscate_lJSNlZWKlYmGi4iSkIqHjpA�.$_obfuscate_homTioySho6Vh5ORiYmUkok� );
}
$_obfuscate_lJKOiJSHjo_Sj4yKk4aIh5I�[] = _obfuscate_hpCTj4mKj5WSkpWPjouJkoc�( );
$_obfuscate_k4yVk4iOipWPioqJlIuVkpE� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iouHh42RkIeKkYaSipWKiog�( $_obfuscate_k42Rh4mVlYqGi4mOiZWMjJA�, $_obfuscate_jIiNjZCPkoeUjI2LipCQk5Q�, $_obfuscate_i4uIkYuKkJGQlJKOjoiMj4c� )."<span class=page_nav_a>".$_obfuscate_lI_KipSOk4iQkI_MjIuVkpQ�."行  耗时"._obfuscate_i4mGjpKMk5WRipSVi4mLi40�( $_obfuscate_lJKOiJSHjo_Sj4yKk4aIh5I� )."毫秒</span>";
echo "<script type=\"text/javascript\">\r\nvar submitid;\r\nvar softid=";
echo $_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE�;
echo ";\r\n$(document).ready(function() { \r\n$(\"#copykey\").live('mouseover',function(){\r\nvar ee=$('#orderkeynum').html();\r\nee=ee.replace(/ /g,'');\r\ntoClipboard(\"copykey\",ee);\r\n});\r\n\r\n$(\".vieworder\").live(\"click\",function(){\r\n$(\".malertboxclosebtn\").click();\r\nmalert('./admin_order.php?action=vieworder&isajax=1&ordernum='+$(this).text(),'订单'+$(this).text()+'的注册卡号',600,300);\t\r\n});\r\n\r\n$(\"#delorder\").bind(\"click\",function(){\r\nmalert(\"./admin_order.php?action=orderlist&isajax=1&op=delorder&softid=\"+$(this).attr(\"softid\")+\"&deltype=\"+$(\"#deltype\").val(),'删除订单提示');\r\n});\r\n\r\n$(\":submit\").click(function(e){if(this.id) submitid=this.id;})\r\n\r\n$(\".sendkey\").bind(\"click\",function(){\r\nvar ourl='./admin_order.php?action=orderlist&op=sendkey&isajax=1&softid='+softid+'&ordernum='+$(this).attr('oid');\r\nvar \$this=$(this);\r\n$.ajax({type:\"GET\",url:ourl,cache:false,\r\nsuccess: function(msg){\r\nif(msg.substr(0,2)=='ok'){\r\n\$this.parent().html('手动完成'); \r\nmalert(msg.substr(2),'发卡成功',520,100);\r\n}else{\r\nmalert(msg,'发卡失败');\r\n}\r\n},\r\nerror:function(ajaxobj){\r\nmalert(\"发卡程序页面出错：\"+ajaxobj.status);\r\n}\r\n});\r\n\r\n});\r\n\r\n$(\"#gz\").bind(\"click\",function(){\r\nif($(this).html()==\"查看规则\"){\r\n$(this).html(\"隐藏规则\");\r\n$(\".trd1\").show();\r\n}else{\r\n$(this).html(\"查看规则\");\r\n$(\".trd1\").hide();\r\n\r\n}\r\n});\r\n\r\n$(\"#selop\").bind(\"change\",function(){ \r\norderui($(this).val());\r\n});\r\norderui(\"ordernum\");\r\n$(\".trd1\").hide();\r\n});\r\n\r\nfunction orderui(sstatus){\r\nif($(\"#selop\").val()==\"none\"){\r\n$(\"#orderstatus\").hide();\r\n$(\"#keywords\").hide();\r\n}else if($(\"#selop\").val()==\"selstatus\"){\r\n$(\"#orderstatus\").show();\r\n$(\"#keywords\").hide();\r\n}else{\t\r\n$(\"#orderstatus\").hide();\r\n$(\"#keywords\").show();\r\n}\r\n}\r\n</script>\r\n<form action=\"?action=orderlist&softid=";
echo $_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE�;
echo "\" method=\"post\" id=\"sorder\" name=\"sorder\">\r\n<table class=\"listtable\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\" align=\"center\" width=\"97%\">\r\n<tr class=trd>\r\n<td valign=middle>搜索 =>  ";
if ( 6 < $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] )
{
    echo "<select id='managerid' name='managerid'><option value=0>--下列所有帐号--</option>";
    foreach ( $_obfuscate_h42Kh5KIipOTk4uIlYaJkI0� as $_obfuscate_ipWMj4mQkZSRi5KKkJOQlY8� )
    {
        if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] == 7 )
        {
            if ( !( $_obfuscate_ipWMj4mQkZSRi5KKkJOQlY8�['id'] == $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['id'] ) || !( $_obfuscate_ipWMj4mQkZSRi5KKkJOQlY8�['level'] == 6 ) )
            {
                echo "<option value=".$_obfuscate_ipWMj4mQkZSRi5KKkJOQlY8�['id'];
                if ( $_obfuscate_kYqTiZWUjZKLjZCVlImUi5A� == $_obfuscate_ipWMj4mQkZSRi5KKkJOQlY8�['id'] )
                {
                    echo " selected";
                }
                echo ">".$_obfuscate_ipWMj4mQkZSRi5KKkJOQlY8�['username']."[".$_obfuscate_jJCMjYyHjpSTiJCNiYiIkpE�[$_obfuscate_ipWMj4mQkZSRi5KKkJOQlY8�['level']]."]</option>";
            }
        }
        else
        {
            echo "<option value=".$_obfuscate_ipWMj4mQkZSRi5KKkJOQlY8�['id'];
            if ( $_obfuscate_kYqTiZWUjZKLjZCVlImUi5A� == $_obfuscate_ipWMj4mQkZSRi5KKkJOQlY8�['id'] )
            {
                echo " selected";
            }
            echo ">".$_obfuscate_ipWMj4mQkZSRi5KKkJOQlY8�['username']."[".$_obfuscate_jJCMjYyHjpSTiJCNiYiIkpE�[$_obfuscate_ipWMj4mQkZSRi5KKkJOQlY8�['level']]."]</option>";
        }
    }
    echo "</select>";
}
echo "\t\t\r\n<select id=\"selop\" name=\"selop\">\r\n<option value='none' ";
echo $_obfuscate_lYmRjI2JhoiNk5SQkYyLkoc� == "none" ? " selected" : "";
echo ">不选择此条件</option>\r\n<option value='ordernum' ";
echo $_obfuscate_lYmRjI2JhoiNk5SQkYyLkoc� == "ordernum" ? " selected" : "";
echo ">订单号</option>\r\n<option value='qq' ";
echo $_obfuscate_lYmRjI2JhoiNk5SQkYyLkoc� == "qq" ? " selected" : "";
echo ">QQ号</option>\r\n<option value='selstatus' ";
echo $_obfuscate_lYmRjI2JhoiNk5SQkYyLkoc� == "selstatus" ? " selected" : "";
echo ">订单状态</option>\r\n</select>\r\n<select name=\"orderstatus\" id=\"orderstatus\">";
foreach ( $_obfuscate_i5WKkIyJjpKNkY2QlY_HkI8� as $_obfuscate_koiIh4mRlJKGlIiGiJCUkI4� => $_obfuscate_lYeSkY6Th5SOlYuHjZGVio8� )
{
    echo "<option value='".$_obfuscate_koiIh4mRlJKGlIiGiJCUkI4�."'";
    if ( $_obfuscate_iJSVlJGGko_Nj5GLioeTlYo� == $_obfuscate_koiIh4mRlJKGlIiGiJCUkI4� )
    {
        echo " selected";
    }
    echo ">".$_obfuscate_lYeSkY6Th5SOlYuHjZGVio8�."</option>";
}
echo "</select>\r\n<input type=text id=\"keywords\" name=\"keywords\" class=longinput value=\"";
echo $_obfuscate_lImLiIqUj5OSipGOko6RlJQ�;
echo "\"><input type=submit class=submitbtn value=\"查询\">  <span id=\"gz\" style=\"cursor:pointer\">查看规则</span></td>\r\n<td align=right style=\"display:inline-block; *display:inline; *zoom:1; vertical-align:middle\">";
if ( 7 < $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] )
{
    echo "<select name='deltype' id=\"deltype\">\r\n<option value=1>7天前未付款的零售单</option>\r\n<option value=2>90天前所有的订单</option>\r\n<option value=3>所有未付款的零售单</option>\r\n</select><input type=button id='delorder' class='submitbtn' softid=\"";
    echo $_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE�;
    echo "\" value='删除订单'>\r\n";
}
echo "&nbsp;</td>\r\n</tr>\r\n<tr class=trd1>\r\n<td colspan=2>作者：可查看所有订单，可删除未付款的零售订单和90天前所有订单，只可给自己的所有未发卡订单发卡 </td>\r\n</tr>\r\n<tr class=trd1>\r\n<td colspan=2>员工：可查看自己和代理的所有订单，禁止删除任何订单，只可给自己的所有未发卡订单发卡 </td>\r\n</tr>\r\n<tr class=trd1>\r\n<td colspan=2>代理：可查看自己的订单，禁止删除任何订单，有足够余额的前提下可给自己的所有未发卡订单发卡</td>\r\n</tr>\r\n</table>\r\n</form>\r\n<table class=\"listtable\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\" align=\"center\" width=\"97%\">\r\n<tr>\r\n<td class=\"findorpage\">";
echo $_obfuscate_k4yVk4iOipWPioqJlIuVkpE�;
echo "</td>\r\n</tr>\r\n</table>\r\n\r\n<table class=\"listtable\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\" align=\"center\" width=\"97%\">\r\n<tr class=\"trhead\">\r\n<td malt=\"订单ID\">ID</td>\r\n<td malt=\"订单号的前1-13位表示【年年月月日日时时分分秒秒】，也就是订单的添加日期\">订单号</td>\r\n<td malt=\"订单当前状态\">状态</td>\r\n<td malt=\"零售或后台取卡，后台:代理取卡、员工取卡、作者取卡、管理取卡\">类型</td>\r\n<td malt=\"该订单所属于后台哪一个帐号的\">所属</td>\r\n<td malt=\"该订单提卡的软件卡类名[天数* 点数* 通道数*]\">卡类</td>\r\n<td malt=\"该订单提取的注册卡数量\">数量</td>\r\n<td malt=\"只有前台零售和后台代理取卡才有总金额\">金额</td>\r\n<td malt=\"代理应该款项\">代理费用</td>\r\n<td malt=\"前台零售客户购卡时填写的QQ号\">购卡人</td>\r\n</tr>\r\n";
if ( empty( $_obfuscate_iYeIjIaVlYaIj4yTiJWHk40� ) )
{
    $_obfuscate_iIeQh5WMhpSNkJCVk5GPhpE� = array( );
    $_obfuscate_k5KHhpGGio6KiYaVjpGOkYc� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_lZGTiIiKhouKiZGLi5KUkI8�( "select * from kss_tb_manager where `pid`=".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid'] );
    foreach ( $_obfuscate_k5KHhpGGio6KiYaVjpGOkYc� as $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI� )
    {
        $_obfuscate_iIeQh5WMhpSNkJCVk5GPhpE�[$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['id']] = $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['username'];
    }
    $_obfuscate_iYePj5CHk5CNh46RiYaOlY4� = array( );
    $_obfuscate_k5KHhpGGio6KiYaVjpGOkYc� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_lZGTiIiKhouKiZGLi5KUkI8�( "select * from kss_tb_keyset where `softid`=".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE� );
    foreach ( $_obfuscate_k5KHhpGGio6KiYaVjpGOkYc� as $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI� )
    {
        $_obfuscate_iYePj5CHk5CNh46RiYaOlY4�[$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['id']] = $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['keyname'];
    }
    foreach ( $_obfuscate_iYeIjIaVlYaIj4yTiJWHk40� as $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI� )
    {
        echo "<tr class=\"trd\" id=\"trmanagerid";
        echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['id'];
        echo "\">\r\n<td><input type=\"checkbox\" name=\"id[]\" value=\"";
        echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['id'];
        echo "\" />";
        echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['id'];
        echo "</td>\r\n<td><span class=vieworder>";
        echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['ordernum'];
        echo "</span></td>\r\n<td nowrap=\"nowrap\">";
        if ( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['orderstatus'] < 8 && $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['managerid'] == $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['id'] )
        {
            echo "<span class='sendkey' oid='".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['ordernum']."'>发卡</span>";
        }
        echo $_obfuscate_i5WKkIyJjpKNkY2QlY_HkI8�[$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['orderstatus']];
        echo "</td>\r\n<td>";
        echo $_obfuscate_iIyOkY2Rh5GOhoiJkJSPj4w�[$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['ordertype']];
        echo "</td>\r\n<td>";
        echo $_obfuscate_iIeQh5WMhpSNkJCVk5GPhpE�[$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['managerid']];
        echo "</td>\r\n<td>";
        echo isset( $_obfuscate_iYePj5CHk5CNh46RiYaOlY4�[$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['keygroupid']] ) ? $_obfuscate_iYePj5CHk5CNh46RiYaOlY4�[$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['keygroupid']] : "被删";
        echo "</td>\r\n<td>";
        echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['keycount'];
        echo "</td>\r\n<td>";
        echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['orderamount'];
        echo "</td>\r\n<td>";
        echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['agentamount'];
        if ( 6 < $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] )
        {
            echo "[".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['agentamount7']."]";
        }
        echo "</td>\r\n<td>";
        echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['payqq'];
        echo "</td>\r\n</tr>\r\n";
    }
}
else
{
    echo "<tr class=trd><td colspan=10>暂无订单</td></tr>";
}
echo "</table>\r\n\r\n<table class=\"listtable\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\" align=\"center\" width=\"97%\">\r\n<tr>\r\n<td class=\"findorpage\">";
echo $_obfuscate_k4yVk4iOipWPioqJlIuVkpE�;
echo "</td>\r\n</tr>\r\n</table>\r\n";
$_obfuscate_i5GVjZWQj4ePkJKMjJSRipM�[] = _obfuscate_hpCTj4mKj5WSkpWPjouJkoc�( );
echo "<div id=pageruntime>页面运行时间"._obfuscate_i4mGjpKMk5WRipSVi4mLi40�( $_obfuscate_i5GVjZWQj4ePkJKMjJSRipM� )."毫秒</div>";
echo "</body>\r\n</html>";
?>
