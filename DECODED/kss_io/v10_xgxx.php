<?php
/*********************/
/*                   */
/*  Dezend for PHP5  */
/*         NWS       */
/*      Nulled.WS    */
/*                   */
/*********************/

function _obfuscate_iIuSi4iHkIaKiouRj5WTk4k�( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� = 1 )
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
if ( SVRID == 2 )
{
    _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Q�( "333", "备用服务器禁止修改帐号信息！" );
}
$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username'] = _obfuscate_hoaHlYiMh5OOjpGNiYmLk5A�( "username" );
$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['keystr'] = _obfuscate_hoaHlYiMh5OOjpGNiYmLk5A�( "keystr" );
$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['password2'] = _obfuscate_hoaHlYiMh5OOjpGNiYmLk5A�( "password2" );
$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['password'] = _obfuscate_hoaHlYiMh5OOjpGNiYmLk5A�( "password" );
$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['bdinfo'] = _obfuscate_hoaHlYiMh5OOjpGNiYmLk5A�( "bdinfo" );
$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['pccode'] = _obfuscate_hoaHlYiMh5OOjpGNiYmLk5A�( "pccode" );
$_obfuscate_lI6Oh5CKh42Ri5STio2HjpE� = "";
$_obfuscate_jJCMkpKRj4mNh4eNjpKGi4g� = array( );
if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['softmode'] == "KSOFT" )
{
    if ( empty( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['keystr'] ) || empty( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['bdinfo'] ) )
    {
        _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Q�( "334", "修改绑定信息必须输入注册卡号和新的绑定信息！" );
    }
    $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['keystr'] = trim( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['keystr'] );
    if ( strlen( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['keystr'] ) != 32 )
    {
        _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Q�( "335", "注册卡必须是32位！" );
    }
    if ( _obfuscate_joeQipOGjouJko_VlJSKiJE�( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['keystr'] ) )
    {
        _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Q�( "336", "注册卡号格式错误！" );
    }
    $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username'] = substr( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['keystr'], 0, 10 );
    $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['password'] = substr( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['keystr'], 10, 10 );
    $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['password2'] = substr( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['keystr'], 20 );
    $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_jIuSjYuUkJGHlYuPjZOQjY4�( $_obfuscate_mGKRY4dMuU6bZZJfh1_TX5k� );
    $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "select * from kss_z_user_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�." where `username`='".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username']."' and `password`='".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['password']."' and `password2`='".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['password2']."'" );
    if ( empty( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg� ) )
    {
        _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Q�( "337", "注册卡未找到（也可能是未激活，未激活请先激活再修改绑定信息）！" );
    }
    if ( PETIME <= $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['endtime'] )
    {
        _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Q�( "338", "公用帐号禁止客户端修改任何资料！" );
    }
    if ( 0 < $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['islock'] )
    {
        _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Q�( "339", "注册卡被锁定！" );
    }
    if ( 0 < $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['ispause'] )
    {
        _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Q�( "340", "注册卡被冻结！" );
    }
}
else
{
    if ( empty( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username'] ) || empty( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['password2'] ) )
    {
        _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Q�( "341", "修改绑定信息或密码必须输入用户名和安全密码！" );
    }
    if ( empty( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['bdinfo'] ) && empty( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['password'] ) )
    {
        _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Q�( "342", "绑定信息和新密码至少要选填一个！" );
    }
    if ( !empty( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['password'] ) && strlen( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['password'] ) < 5 )
    {
        _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Q�( "343", "新密码长度小于5位" );
    }
    $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_jIuSjYuUkJGHlYuPjZOQjY4�( $_obfuscate_mGKRY4dMuU6bZZJfh1_TX5k� );
    $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "select * from kss_z_user_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�." where `username`='".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username']."'" );
    if ( empty( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg� ) )
    {
        _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Q�( "344", "用户未找到！" );
    }
    if ( PETIME <= $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['endtime'] )
    {
        _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Q�( "345", "公用帐号禁止客户端修改任何资料！" );
    }
    if ( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['password2'] != $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['password2'] )
    {
        _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Q�( "346", "用户安全密码错误！" );
    }
    if ( 0 < $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['islock'] )
    {
        _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Q�( "347", "用户被锁定！" );
    }
    if ( 0 < $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['ispause'] )
    {
        _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Q�( "348", "用户被冻结！" );
    }
    if ( !empty( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['password'] ) && $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['password'] != $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['password'] )
    {
        $_obfuscate_jJCMkpKRj4mNh4eNjpKGi4g�['password'] = $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['password'];
    }
}
$_obfuscate_lI2HjIqUkYqTho2HiJWUk5I� = "修改用户资料成功！";
$_obfuscate_kIaHkJSNhpOPi5OSh4eJlIY� = array( );
if ( empty( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['bdinfo'] ) )
{
    if ( strlen( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['bdinfo'] ) < 3 )
    {
        _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Q�( "349", "绑定信息必须大于2个字符。" );
    }
    if ( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['bdinfo'] == $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['bdinfo'] )
    {
        _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Q�( "350", "绑定信息未变动，不修改请留空！" );
    }
    $_obfuscate_jJCMkpKRj4mNh4eNjpKGi4g�['bdinfo'] = $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['bdinfo'];
    if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['onlyonebdinfo'] == "1" )
    {
        $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "SELECT * from `kss_z_user_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�."` where `bdinfo`='".mysql_real_escape_string( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['bdinfo'] )."'" );
        if ( empty( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� ) )
        {
            _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Q�( "351", "绑定信息已被其他帐号使用" );
        }
    }
    if ( 0 < $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['editbdinfo_changetime'] )
    {
        if ( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['endtime'] - $_obfuscate_jomPk5WKioeLipGGi4_PhpM� < $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['editbdinfo_changetime'] * 86400 )
        {
            _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Q�( "352", "帐号剩余时间不足，修改绑定信息需要扣去VAL_decday天！", array( "VAL_decday" => $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['editbdinfo_changetime'] ) );
        }
        $_obfuscate_lI2HjIqUkYqTho2HiJWUk5I� .= "并扣除了修改绑定信息的费用VAL_decday天。";
        $_obfuscate_kIaHkJSNhpOPi5OSh4eJlIY�['VAL_decday'] = $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['editbdinfo_changetime'];
        $_obfuscate_jJCMkpKRj4mNh4eNjpKGi4g�['cday'] = $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['cday'] - $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['editbdinfo_changetime'];
        $_obfuscate_jJCMkpKRj4mNh4eNjpKGi4g�['endtime'] = $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['starttime'] + $_obfuscate_jJCMkpKRj4mNh4eNjpKGi4g�['cday'] * 86400;
        $_obfuscate_lI6Oh5CKh42Ri5STio2HjpE� = "insert into kss_z_cz_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�." (`addtime`,`cztype`,`username`,`oldcday`,`newcday`,`oldtimes`,`newtimes`,`keys`,`tzxguser`) values (".$_obfuscate_jomPk5WKioeLipGGi4_PhpM�.",5,'".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username']."',".$_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['cday'].",".$_obfuscate_jJCMkpKRj4mNh4eNjpKGi4g�['cday'].",".$_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['points'].",".$_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['points'].",'".$_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['bdinfo']." - ".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['bdinfo']."','')";
    }
    else if ( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['bdinfo'] != "" )
    {
        _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Q�( "353", "禁止修改绑定信息！" );
    }
}
if ( empty( $_obfuscate_jJCMkpKRj4mNh4eNjpKGi4g� ) )
{
    _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Q�( "354", "您未修改任何信息！" );
}
$_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5U� = $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username']( "kss_z_user_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�, $_obfuscate_jJCMkpKRj4mNh4eNjpKGi4g�, "username='".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username']."'", "sql" );
$_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5U�, "sync" );
if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� !== TRUE )
{
    _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Q�( "355", "修改用户资料出错！出错信息：VAL_sqlerr", array( "VAL_sqlerr" => $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4�( ) ) );
}
if ( $_obfuscate_lI6Oh5CKh42Ri5STio2HjpE� != "" )
{
    $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( $_obfuscate_lI6Oh5CKh42Ri5STio2HjpE�, "sync" );
    if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� !== TRUE )
    {
        _obfuscate_h4aIlI6QlYmUkY6MlI6Qhos�( $_obfuscate_lI6Oh5CKh42Ri5STio2HjpE�, $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4�( ), __FILE__, 130 );
    }
}
_obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Q�( "356", $_obfuscate_lI2HjIqUkYqTho2HiJWUk5I�, $_obfuscate_kIaHkJSNhpOPi5OSh4eJlIY� );
?>
