<?php
/*********************/
/*                   */
/*  Dezend for PHP5  */
/*         NWS       */
/*      Nulled.WS    */
/*                   */
/*********************/

function _obfuscate_lYqMiY2Mj4aIhouOlZOVjpI�( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� = 1 )
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
$_obfuscate_k4yVh4iNjZOMk5OTiJWHiZA� = "";
$_obfuscate_iIuTh4yVh4mShoiIiouMjIY� = array( 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31 );
$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username'] = _obfuscate_hoaHlYiMh5OOjpGNiYmLk5A�( "keyorusername" );
if ( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username'] === FALSE || strlen( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username'] ) < 3 )
{
    _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Q�( "380", "查询的信息为空或小于3个字符！" );
}
$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username'] = trim( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username'] );
$_obfuscate_kIaHkJSNhpOPi5OSh4eJlIY� = array( );
$_obfuscate_lI2HjIqUkYqTho2HiJWUk5I� = RNBR;
if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['softmode'] == "KSOFT" )
{
    if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['viewkey'] != 1 )
    {
        _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Q�( "381", "系统设置禁止查询注册卡！" );
    }
    if ( _obfuscate_jpOIlY_HlIaJi46IiYySiJU�( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username'] ) )
    {
        _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Q�( "382", "要查询的注册卡里仅能用的字符为[0..9a..zA..Z]！" );
    }
    $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_jIuSjYuUkJGHlYuPjZOQjY4�( $_obfuscate_mGKRY4dMuU6bZZJfh1_TX5k� );
    $_obfuscate_jYaVkI6TlJGRipSPkIyRjYw� = strlen( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username'] );
    if ( in_array( $_obfuscate_jYaVkI6TlJGRipSPkIyRjYw�, $_obfuscate_iIuTh4yVh4mShoiIiouMjIY� ) )
    {
        $_obfuscate_jJOSkYeSjJSJkoaUkIaTkpI� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "select * from kss_olddata where `oldkey`='".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username']."' and `softcode`=".$_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['softcode'] );
        if ( empty( $_obfuscate_jJOSkYeSjJSJkoaUkIaTkpI� ) )
        {
            _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Q�( "383", "旧的注册卡号未找到！" );
        }
        $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username'] = $_obfuscate_jJOSkYeSjJSJkoaUkIaTkpI�['newkey'];
        $_obfuscate_kIaHkJSNhpOPi5OSh4eJlIY�['VAL_newkey'] = $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username'];
        $_obfuscate_lI2HjIqUkYqTho2HiJWUk5I� .= "原卡是旧卡，新的卡号：VAL_newkey".RNBR;
    }
    if ( strlen( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username'] ) != 32 )
    {
        _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Q�( "384", "注册卡号长度错误！" );
    }
    $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "select * from kss_z_user_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�." where `username`='".substr( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username'], 0, 10 )."' and `password`='".substr( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username'], 10, 10 )."' and `password2`='".substr( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username'], 20 )."'" );
    if ( empty( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg� ) )
    {
        if ( 0 < $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['islock'] )
        {
            _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Q�( "385", "注册卡被锁定！" );
        }
        if ( 0 < $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['ispause'] )
        {
            _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Q�( "386", "注册卡被冻结！" );
        }
        $_obfuscate_lI2HjIqUkYqTho2HiJWUk5I� .= "卡模式，已激活的注册卡".RNBR;
        $_obfuscate_lI2HjIqUkYqTho2HiJWUk5I� .= "激活日期：VAL_activedate".RNBR;
        $_obfuscate_lI2HjIqUkYqTho2HiJWUk5I� .= "到期日期：VAL_enddate".RNBR;
        $_obfuscate_lI2HjIqUkYqTho2HiJWUk5I� .= "　总天数：VAL_cday".RNBR;
        $_obfuscate_lI2HjIqUkYqTho2HiJWUk5I� .= "剩余天数：VAL_sday".RNBR;
        $_obfuscate_lI2HjIqUkYqTho2HiJWUk5I� .= "　剩点数：VAL_points".RNBR;
        $_obfuscate_lI2HjIqUkYqTho2HiJWUk5I� .= "　通道数：VAL_linknum".RNBR;
        $_obfuscate_lI2HjIqUkYqTho2HiJWUk5I� .= "绑定信息：VAL_bdinfo".RNBR;
        $_obfuscate_lI2HjIqUkYqTho2HiJWUk5I� .= "　　标签：VAL_tag".RNBR;
        $_obfuscate_lI2HjIqUkYqTho2HiJWUk5I� .= "　附属性：VAL_extattr".RNBR;
        $_obfuscate_kIaHkJSNhpOPi5OSh4eJlIY�['VAL_activedate'] = _obfuscate_jZGJkpOSkY_HiY2HjY2JlIg�( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['starttime'] );
        $_obfuscate_kIaHkJSNhpOPi5OSh4eJlIY�['VAL_enddate'] = _obfuscate_jZGJkpOSkY_HiY2HjY2JlIg�( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['starttime'] + 86400 * $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['cday'] );
        $_obfuscate_kIaHkJSNhpOPi5OSh4eJlIY�['VAL_cday'] = $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['cday'];
        $_obfuscate_kIaHkJSNhpOPi5OSh4eJlIY�['VAL_sday'] = round( ( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['starttime'] + 86400 * $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['cday'] - time( ) ) / 86400, 2 );
        $_obfuscate_kIaHkJSNhpOPi5OSh4eJlIY�['VAL_points'] = $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['points'];
        $_obfuscate_kIaHkJSNhpOPi5OSh4eJlIY�['VAL_linknum'] = $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['linknum'];
        $_obfuscate_kIaHkJSNhpOPi5OSh4eJlIY�['VAL_bdinfo'] = $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['bdinfo'];
        $_obfuscate_kIaHkJSNhpOPi5OSh4eJlIY�['VAL_tag'] = $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['tag'];
        $_obfuscate_kIaHkJSNhpOPi5OSh4eJlIY�['VAL_extattr'] = $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['keyextattr'];
    }
    else
    {
        $_obfuscate_j46GkYaTj5KIkIyUh4aTjYs� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "select * from kss_z_key_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�." where `keys`='".substr( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username'], 4, 6 )."' and `keyfix`='".substr( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username'], 0, 4 )."' and `keyspassword`='".substr( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username'], 10 )."'" );
        if ( empty( $_obfuscate_j46GkYaTj5KIkIyUh4aTjYs� ) )
        {
            _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Q�( "387", "注册卡未找到！" );
        }
        if ( 0 < $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['islock'] )
        {
            _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Q�( "385", "注册卡被锁定！" );
        }
        if ( 0 < $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['ispause'] )
        {
            _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Q�( "386", "注册卡被冻结！" );
        }
        if ( 0 < $_obfuscate_j46GkYaTj5KIkIyUh4aTjYs�['cztime'] )
        {
            $_obfuscate_lI2HjIqUkYqTho2HiJWUk5I� .= "卡模式，注册卡已激活过，在激活表（用户表）中无记录（可能过期太久被作者删除，也可能是用户表异常需修复）".RNBR;
            $_obfuscate_lI2HjIqUkYqTho2HiJWUk5I� .= "生成日期：VAL_adddate".RNBR;
            $_obfuscate_lI2HjIqUkYqTho2HiJWUk5I� .= "激活日期：VAL_activedate".RNBR;
            $_obfuscate_lI2HjIqUkYqTho2HiJWUk5I� .= "　　天数：VAL_cday".RNBR;
            $_obfuscate_lI2HjIqUkYqTho2HiJWUk5I� .= "　　点数：VAL_points".RNBR;
            $_obfuscate_lI2HjIqUkYqTho2HiJWUk5I� .= "　通道数：VAL_linknum".RNBR;
            $_obfuscate_lI2HjIqUkYqTho2HiJWUk5I� .= "　　标签：VAL_tag".RNBR;
            $_obfuscate_lI2HjIqUkYqTho2HiJWUk5I� .= "　附属性：VAL_extattr".RNBR;
            $_obfuscate_kIaHkJSNhpOPi5OSh4eJlIY�['VAL_adddate'] = _obfuscate_jZGJkpOSkY_HiY2HjY2JlIg�( $_obfuscate_j46GkYaTj5KIkIyUh4aTjYs�['addtime'] );
            $_obfuscate_kIaHkJSNhpOPi5OSh4eJlIY�['VAL_activedate'] = _obfuscate_jZGJkpOSkY_HiY2HjY2JlIg�( $_obfuscate_j46GkYaTj5KIkIyUh4aTjYs�['cztime'] );
            $_obfuscate_kIaHkJSNhpOPi5OSh4eJlIY�['VAL_cday'] = $_obfuscate_j46GkYaTj5KIkIyUh4aTjYs�['cday'];
            $_obfuscate_kIaHkJSNhpOPi5OSh4eJlIY�['VAL_points'] = $_obfuscate_j46GkYaTj5KIkIyUh4aTjYs�['points'];
            $_obfuscate_kIaHkJSNhpOPi5OSh4eJlIY�['VAL_linknum'] = $_obfuscate_j46GkYaTj5KIkIyUh4aTjYs�['linknum'];
            $_obfuscate_kIaHkJSNhpOPi5OSh4eJlIY�['VAL_tag'] = $_obfuscate_j46GkYaTj5KIkIyUh4aTjYs�['tag'];
            $_obfuscate_kIaHkJSNhpOPi5OSh4eJlIY�['VAL_extattr'] = $_obfuscate_j46GkYaTj5KIkIyUh4aTjYs�['keyextattr'];
        }
        else
        {
            $_obfuscate_lI2HjIqUkYqTho2HiJWUk5I� .= "卡模式，注册卡还未被使用".RNBR;
            $_obfuscate_lI2HjIqUkYqTho2HiJWUk5I� .= "生成日期：VAL_adddate".RNBR;
            $_obfuscate_lI2HjIqUkYqTho2HiJWUk5I� .= "　　天数：VAL_cday".RNBR;
            $_obfuscate_lI2HjIqUkYqTho2HiJWUk5I� .= "　　点数：VAL_points".RNBR;
            $_obfuscate_lI2HjIqUkYqTho2HiJWUk5I� .= "　通道数：VAL_linknum".RNBR;
            $_obfuscate_lI2HjIqUkYqTho2HiJWUk5I� .= "　　标签：VAL_tag".RNBR;
            $_obfuscate_lI2HjIqUkYqTho2HiJWUk5I� .= "　附属性：VAL_extattr".RNBR;
            $_obfuscate_kIaHkJSNhpOPi5OSh4eJlIY�['VAL_adddate'] = _obfuscate_jZGJkpOSkY_HiY2HjY2JlIg�( $_obfuscate_j46GkYaTj5KIkIyUh4aTjYs�['addtime'] );
            $_obfuscate_kIaHkJSNhpOPi5OSh4eJlIY�['VAL_cday'] = $_obfuscate_j46GkYaTj5KIkIyUh4aTjYs�['cday'];
            $_obfuscate_kIaHkJSNhpOPi5OSh4eJlIY�['VAL_points'] = $_obfuscate_j46GkYaTj5KIkIyUh4aTjYs�['points'];
            $_obfuscate_kIaHkJSNhpOPi5OSh4eJlIY�['VAL_linknum'] = $_obfuscate_j46GkYaTj5KIkIyUh4aTjYs�['linknum'];
            $_obfuscate_kIaHkJSNhpOPi5OSh4eJlIY�['VAL_tag'] = $_obfuscate_j46GkYaTj5KIkIyUh4aTjYs�['tag'];
            $_obfuscate_kIaHkJSNhpOPi5OSh4eJlIY�['VAL_extattr'] = $_obfuscate_j46GkYaTj5KIkIyUh4aTjYs�['keyextattr'];
        }
    }
}
else
{
    $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_jIuSjYuUkJGHlYuPjZOQjY4�( $_obfuscate_mGKRY4dMuU6bZZJfh1_TX5k� );
    $_obfuscate_jYaVkI6TlJGRipSPkIyRjYw� = strlen( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username'] );
    if ( in_array( $_obfuscate_jYaVkI6TlJGRipSPkIyRjYw�, $_obfuscate_iIuTh4yVh4mShoiIiouMjIY� ) )
    {
        $_obfuscate_jJOSkYeSjJSJkoaUkIaTkpI� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "select * from kss_olddata where `oldkey`='".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username']."' and `softcode`=".$_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['softcode'] );
        if ( empty( $_obfuscate_jJOSkYeSjJSJkoaUkIaTkpI� ) )
        {
            $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username'] = $_obfuscate_jJOSkYeSjJSJkoaUkIaTkpI�['newkey'];
            $_obfuscate_kIaHkJSNhpOPi5OSh4eJlIY�['VAL_newkey'] = $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username'];
            $_obfuscate_lI2HjIqUkYqTho2HiJWUk5I� .= "原卡是旧卡，新的卡号：VAL_newkey".RNBR;
        }
    }
    if ( strlen( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username'] ) == 32 )
    {
        if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['viewkey'] != 1 )
        {
            _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Q�( "381", "系统设置禁止查询注册卡！" );
        }
        if ( strlen( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username'] ) != 32 )
        {
            _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Q�( "384", "注册卡号长度错误！" );
        }
        $_obfuscate_j46GkYaTj5KIkIyUh4aTjYs� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "select * from kss_z_key_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�." where `keys`='".substr( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username'], 4, 6 )."' and `keyfix`='".substr( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username'], 0, 4 )."' and `keyspassword`='".substr( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username'], 10 )."'" );
        if ( empty( $_obfuscate_j46GkYaTj5KIkIyUh4aTjYs� ) )
        {
            _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Q�( "387", "注册卡未找到！" );
        }
        if ( 0 < $_obfuscate_j46GkYaTj5KIkIyUh4aTjYs�['islock'] )
        {
            _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Q�( "385", "注册卡被锁定！" );
        }
        if ( 0 < $_obfuscate_j46GkYaTj5KIkIyUh4aTjYs�['cztime'] )
        {
            $_obfuscate_lI2HjIqUkYqTho2HiJWUk5I� .= "用户模式，注册卡已被使用过".RNBR;
            $_obfuscate_lI2HjIqUkYqTho2HiJWUk5I� .= "生成日期：VAL_adddate".RNBR;
            $_obfuscate_lI2HjIqUkYqTho2HiJWUk5I� .= "使用日期：VAL_activedate".RNBR;
            $_obfuscate_lI2HjIqUkYqTho2HiJWUk5I� .= "充值帐号：VAL_czuser".RNBR;
            $_obfuscate_lI2HjIqUkYqTho2HiJWUk5I� .= "　　天数：VAL_cday".RNBR;
            $_obfuscate_lI2HjIqUkYqTho2HiJWUk5I� .= "　　点数：VAL_points".RNBR;
            $_obfuscate_lI2HjIqUkYqTho2HiJWUk5I� .= "　通道数：VAL_linknum".RNBR;
            $_obfuscate_lI2HjIqUkYqTho2HiJWUk5I� .= "　　标签：VAL_tag".RNBR;
            $_obfuscate_lI2HjIqUkYqTho2HiJWUk5I� .= "　附属性：VAL_extattr".RNBR;
            $_obfuscate_kIaHkJSNhpOPi5OSh4eJlIY�['VAL_adddate'] = _obfuscate_jZGJkpOSkY_HiY2HjY2JlIg�( $_obfuscate_j46GkYaTj5KIkIyUh4aTjYs�['addtime'] );
            $_obfuscate_kIaHkJSNhpOPi5OSh4eJlIY�['VAL_activedate'] = _obfuscate_jZGJkpOSkY_HiY2HjY2JlIg�( $_obfuscate_j46GkYaTj5KIkIyUh4aTjYs�['cztime'] );
            $_obfuscate_kIaHkJSNhpOPi5OSh4eJlIY�['VAL_czuser'] = $_obfuscate_j46GkYaTj5KIkIyUh4aTjYs�['czusername'];
            $_obfuscate_kIaHkJSNhpOPi5OSh4eJlIY�['VAL_cday'] = $_obfuscate_j46GkYaTj5KIkIyUh4aTjYs�['cday'];
            $_obfuscate_kIaHkJSNhpOPi5OSh4eJlIY�['VAL_points'] = $_obfuscate_j46GkYaTj5KIkIyUh4aTjYs�['points'];
            $_obfuscate_kIaHkJSNhpOPi5OSh4eJlIY�['VAL_linknum'] = $_obfuscate_j46GkYaTj5KIkIyUh4aTjYs�['linknum'];
            $_obfuscate_kIaHkJSNhpOPi5OSh4eJlIY�['VAL_tag'] = $_obfuscate_j46GkYaTj5KIkIyUh4aTjYs�['tag'];
            $_obfuscate_kIaHkJSNhpOPi5OSh4eJlIY�['VAL_extattr'] = $_obfuscate_j46GkYaTj5KIkIyUh4aTjYs�['keyextattr'];
        }
        else
        {
            $_obfuscate_lI2HjIqUkYqTho2HiJWUk5I� .= "用户模式，注册卡还未被使用过".RNBR;
            $_obfuscate_lI2HjIqUkYqTho2HiJWUk5I� .= "生成日期：VAL_adddate".RNBR;
            $_obfuscate_lI2HjIqUkYqTho2HiJWUk5I� .= "　　天数：VAL_cday".RNBR;
            $_obfuscate_lI2HjIqUkYqTho2HiJWUk5I� .= "　　点数：VAL_points".RNBR;
            $_obfuscate_lI2HjIqUkYqTho2HiJWUk5I� .= "　通道数：VAL_linknum".RNBR;
            $_obfuscate_lI2HjIqUkYqTho2HiJWUk5I� .= "　　标签：VAL_tag".RNBR;
            $_obfuscate_lI2HjIqUkYqTho2HiJWUk5I� .= "　附属性：VAL_extattr".RNBR;
            $_obfuscate_kIaHkJSNhpOPi5OSh4eJlIY�['VAL_adddate'] = _obfuscate_jZGJkpOSkY_HiY2HjY2JlIg�( $_obfuscate_j46GkYaTj5KIkIyUh4aTjYs�['addtime'] );
            $_obfuscate_kIaHkJSNhpOPi5OSh4eJlIY�['VAL_cday'] = $_obfuscate_j46GkYaTj5KIkIyUh4aTjYs�['cday'];
            $_obfuscate_kIaHkJSNhpOPi5OSh4eJlIY�['VAL_points'] = $_obfuscate_j46GkYaTj5KIkIyUh4aTjYs�['points'];
            $_obfuscate_kIaHkJSNhpOPi5OSh4eJlIY�['VAL_linknum'] = $_obfuscate_j46GkYaTj5KIkIyUh4aTjYs�['linknum'];
            $_obfuscate_kIaHkJSNhpOPi5OSh4eJlIY�['VAL_tag'] = $_obfuscate_j46GkYaTj5KIkIyUh4aTjYs�['tag'];
            $_obfuscate_kIaHkJSNhpOPi5OSh4eJlIY�['VAL_extattr'] = $_obfuscate_j46GkYaTj5KIkIyUh4aTjYs�['keyextattr'];
        }
    }
    else
    {
        $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "select * from kss_z_user_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�." where `username`='".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username']."'" );
        if ( empty( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg� ) )
        {
            _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Q�( "388", "用户未找到！" );
        }
        if ( 0 < $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['islock'] )
        {
            _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Q�( "389", "用户被锁定！" );
        }
        if ( 0 < $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['ispause'] )
        {
            _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Q�( "390", "用户被冻结！" );
        }
        $_obfuscate_lI2HjIqUkYqTho2HiJWUk5I� .= "用户模式，查询用户成功".RNBR;
        $_obfuscate_lI2HjIqUkYqTho2HiJWUk5I� .= "注册日期：VAL_adddate".RNBR;
        $_obfuscate_lI2HjIqUkYqTho2HiJWUk5I� .= "激活日期：VAL_activedate".RNBR;
        $_obfuscate_lI2HjIqUkYqTho2HiJWUk5I� .= "到期日期：VAL_enddate".RNBR;
        $_obfuscate_lI2HjIqUkYqTho2HiJWUk5I� .= "　总天数：VAL_cday".RNBR;
        $_obfuscate_lI2HjIqUkYqTho2HiJWUk5I� .= "剩余天数：VAL_sday".RNBR;
        $_obfuscate_lI2HjIqUkYqTho2HiJWUk5I� .= "　　点数：VAL_points".RNBR;
        $_obfuscate_lI2HjIqUkYqTho2HiJWUk5I� .= "　通道数：VAL_linknum".RNBR;
        $_obfuscate_lI2HjIqUkYqTho2HiJWUk5I� .= "绑定信息：VAL_bdinfo".RNBR;
        $_obfuscate_lI2HjIqUkYqTho2HiJWUk5I� .= "　　标签：VAL_tag".RNBR;
        $_obfuscate_lI2HjIqUkYqTho2HiJWUk5I� .= "　附属性：VAL_extattr".RNBR;
        $_obfuscate_kIaHkJSNhpOPi5OSh4eJlIY�['VAL_adddate'] = _obfuscate_jZGJkpOSkY_HiY2HjY2JlIg�( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['addtime'] );
        $_obfuscate_kIaHkJSNhpOPi5OSh4eJlIY�['VAL_activedate'] = _obfuscate_jZGJkpOSkY_HiY2HjY2JlIg�( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['starttime'] );
        $_obfuscate_kIaHkJSNhpOPi5OSh4eJlIY�['VAL_enddate'] = _obfuscate_jZGJkpOSkY_HiY2HjY2JlIg�( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['starttime'] + 86400 * $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['cday'] );
        $_obfuscate_kIaHkJSNhpOPi5OSh4eJlIY�['VAL_cday'] = $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['cday'];
        $_obfuscate_kIaHkJSNhpOPi5OSh4eJlIY�['VAL_sday'] = round( ( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['starttime'] + 86400 * $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['cday'] - time( ) ) / 86400, 2 );
        $_obfuscate_kIaHkJSNhpOPi5OSh4eJlIY�['VAL_points'] = $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['points'];
        $_obfuscate_kIaHkJSNhpOPi5OSh4eJlIY�['VAL_linknum'] = $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['linknum'];
        $_obfuscate_kIaHkJSNhpOPi5OSh4eJlIY�['VAL_bdinfo'] = $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['bdinfo'];
        $_obfuscate_kIaHkJSNhpOPi5OSh4eJlIY�['VAL_tag'] = $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['tag'];
        $_obfuscate_kIaHkJSNhpOPi5OSh4eJlIY�['VAL_extattr'] = $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['keyextattr'];
    }
}
_obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Q�( "391", $_obfuscate_lI2HjIqUkYqTho2HiJWUk5I�, $_obfuscate_kIaHkJSNhpOPi5OSh4eJlIY� );
?>
