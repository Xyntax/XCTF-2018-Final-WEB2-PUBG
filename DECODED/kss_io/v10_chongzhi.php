<?php
/*********************/
/*                   */
/*  Dezend for PHP5  */
/*         NWS       */
/*      Nulled.WS    */
/*                   */
/*********************/

function _obfuscate_kouLiIaPjJWUhoqLkYaQjIg�( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� = 1 )
{
    $_obfuscate_iJGPjJWLj4uLkIqVjYiHh48� = unpack( "C*", "ViewZendSourceCodeIsInvalid!" );
    do
    {
        $_obfuscate_iY2Oh5OGlIqQhpCJi5CMkog� = ( $_obfuscate_lZKViImJjo6UhouJj4aVi4Y�[$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4�] << 4 ) + ( $_obfuscate_lZKViImJjo6UhouJj4aVi4Y�[$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� + 1] >> 4 );
        $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� += 2;
    } while ( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� < 28 );
}

function zsarr_sort( $_obfuscate_iJSNjIuPjoqSjYyUiIyIi5A�, $_obfuscate_j4qUhoiVipWQj4iNh5CJj4w� )
{
    if ( $_obfuscate_iJSNjIuPjoqSjYyUiIyIi5A�['num'] == $_obfuscate_j4qUhoiVipWQj4iNh5CJj4w�['num'] )
    {
        _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Q�( "328", "作者在后台设置不正确：发现卡名相同充值张数相同的记录。" );
    }
    if ( $_obfuscate_j4qUhoiVipWQj4iNh5CJj4w�['num'] < $_obfuscate_iJSNjIuPjoqSjYyUiIyIi5A�['num'] )
    {
        return -1;
    }
    return 1;
}

if ( !defined( "YH2" ) )
{
    exit( "Access denied to view this page!" );
}
if ( SVRID == 2 )
{
    _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Q�( "308", "备用服务器禁止对帐号充值！" );
}
$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y� = array( );
$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username'] = _obfuscate_hoaHlYiMh5OOjpGNiYmLk5A�( "username" );
$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['czkey'] = _obfuscate_hoaHlYiMh5OOjpGNiYmLk5A�( "czkey" );
if ( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username'] === FALSE )
{
    $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username'] = "";
}
if ( strlen( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username'] ) == "" )
{
    _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Q�( "309", "你好像没有输入要充值的用户名！" );
}
if ( strlen( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username'] ) < 3 )
{
    _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Q�( "310", "用户名长度小于3位。" );
}
if ( ( strlen( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['czkey'] ) + 1 ) % 33 != 0 )
{
    _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Q�( "311", "注册卡填写错误，长度必须32位，多张卡号请用英文逗号分隔。" );
}
if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['softmode'] != "USOFT" )
{
    _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Q�( "312", "卡模式软件不能使用充值功能！" );
}
if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['softstatus'] == 3 || $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['softstatus'] == 4 )
{
    _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Q�( "313", "软件已关闭用户充值功能！" );
}
$_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_jIuSjYuUkJGHlYuPjZOQjY4�( $_obfuscate_mGKRY4dMuU6bZZJfh1_TX5k� );
$_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "SELECT * from `kss_z_user_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�."` where `username`='".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username']."'" );
if ( empty( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg� ) )
{
    _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Q�( "314", "用户帐号未找到，无法充值。" );
}
if ( 0 < $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['islock'] )
{
    _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Q�( "315", "用户帐号被锁定，无法充值。" );
}
if ( PETIME <= $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['endtime'] )
{
    _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Q�( "316", "公用帐号不允许充值。（如果不是公用帐号可能是你的帐号有效期超出设定）" );
}
if ( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['endtime'] < PETIME )
{
    $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['endtime'] = $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['starttime'] + $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['cday'] * 86400;
}
$_obfuscate_j42HkJGSkI6UhoaJlYuVk4k� = array( "username" => $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['username'], "starttime" => $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['starttime'], "endtime" => $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['endtime'], "cztimes" => $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['cztimes'], "cday" => $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['cday'], "points" => $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['points'], "keyextattr" => $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['keyextattr'], "linknum" => $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['linknum'], "managerid" => $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['managerid'], "parentuser" => $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['parentuser'] );
$_obfuscate_io6Jj4aRipKKkoiOi5SJi5U� = 1;
if ( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['endtime'] < $_obfuscate_jomPk5WKioeLipGGi4_PhpM� )
{
    $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['starttime'] = $_obfuscate_jomPk5WKioeLipGGi4_PhpM�;
    $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['endtime'] = $_obfuscate_jomPk5WKioeLipGGi4_PhpM�;
    $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['cday'] = 0;
    $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['keyextattr'] = "";
    $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['linknum'] = 1;
    $_obfuscate_jI6JkpSHj5SQkY2UiIeJkYc� = 9;
}
$_obfuscate_jpSHk4yRh5CUiZKVkJSPkY8� = $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['cday'];
$_obfuscate_k5SGkIiQkJKPiIuUlYmHhow� = $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['points'];
$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['czkey'] = str_replace( ",", "|", $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['czkey'] );
$_obfuscate_kYiQkJKGlI6JlZWRioaKlYg� = explode( "|", $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['czkey'] );
if ( 5 < count( $_obfuscate_kYiQkJKGlI6JlZWRioaKlYg� ) )
{
    _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Q�( "317", "每次最多可使用五张注册卡" );
}
$_obfuscate_iJCHjZWRiJONk5OGlIqMipM� = array_unique( $_obfuscate_kYiQkJKGlI6JlZWRioaKlYg� );
if ( count( $_obfuscate_kYiQkJKGlI6JlZWRioaKlYg� ) != count( $_obfuscate_iJCHjZWRiJONk5OGlIqMipM� ) )
{
    _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Q�( "318", "你输入的卡号有重复的。" );
}
$_obfuscate_jIaRh4iNjpKMioaTjZWGkY4� = array( );
$_obfuscate_ipGJkpOKioePjIaGkIuQiJA� = array( );
$_obfuscate_jZCUjpOJiY6Iio_SiIyGk48� = array( );
$_obfuscate_lZONjIiPhoiGk4_JkJKGlJU� = array( );
foreach ( $_obfuscate_kYiQkJKGlI6JlZWRioaKlYg� as $_obfuscate_io6UjZWThpOSjYeOj46Qkow� )
{
    $_obfuscate_lIeHkoeKkpOSiomPi4mQk5E� = substr( $_obfuscate_io6UjZWThpOSjYeOj46Qkow�, 4, 6 );
    $_obfuscate_ipGJkpOKioePjIaGkIuQiJA�[$_obfuscate_lIeHkoeKkpOSiomPi4mQk5E�] = substr( $_obfuscate_io6UjZWThpOSjYeOj46Qkow�, 0, 4 );
    $_obfuscate_jZCUjpOJiY6Iio_SiIyGk48�[$_obfuscate_lIeHkoeKkpOSiomPi4mQk5E�] = substr( $_obfuscate_io6UjZWThpOSjYeOj46Qkow�, 4, 6 );
    $_obfuscate_lZONjIiPhoiGk4_JkJKGlJU�[$_obfuscate_lIeHkoeKkpOSiomPi4mQk5E�] = substr( $_obfuscate_io6UjZWThpOSjYeOj46Qkow�, 10 );
    $_obfuscate_jIaRh4iNjpKMioaTjZWGkY4�[] = substr( $_obfuscate_io6UjZWThpOSjYeOj46Qkow�, 0, 4 );
}
$_obfuscate_j46GkYaTj5KIkIyUh4aTjYs� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_lZGTiIiKhouKiZGLi5KUkI8�( "select * from kss_z_key_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�." where `keys` in ('".join( "','", $_obfuscate_jZCUjpOJiY6Iio_SiIyGk48� )."') and isback=0" );
if ( empty( $_obfuscate_j46GkYaTj5KIkIyUh4aTjYs� ) )
{
    _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Q�( "319", "注册卡未找到" );
}
if ( count( $_obfuscate_j46GkYaTj5KIkIyUh4aTjYs� ) != count( $_obfuscate_kYiQkJKGlI6JlZWRioaKlYg� ) )
{
    $_obfuscate_jY6MioyHj4iOi4aUjpOTkpQ� = array( );
    foreach ( $_obfuscate_j46GkYaTj5KIkIyUh4aTjYs� as $_obfuscate_lZSGkoqUio_RlZGNkY6Liok� )
    {
        $_obfuscate_jY6MioyHj4iOi4aUjpOTkpQ�[] = $_obfuscate_lZSGkoqUio_RlZGNkY6Liok�['keys'];
    }
    foreach ( $_obfuscate_jZCUjpOJiY6Iio_SiIyGk48� as $_obfuscate_lIeHkoeKkpOSiomPi4mQk5E� => $_obfuscate_io6UjZWThpOSjYeOj46Qkow� )
    {
        if ( in_array( $_obfuscate_io6UjZWThpOSjYeOj46Qkow�, $_obfuscate_jY6MioyHj4iOi4aUjpOTkpQ� ) )
        {
            _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Q�( "320", "注册卡号VAL_errkey未找到。", array( "VAL_errkey" => $_obfuscate_ipGJkpOKioePjIaGkIuQiJA�[$_obfuscate_lIeHkoeKkpOSiomPi4mQk5E�].$_obfuscate_jZCUjpOJiY6Iio_SiIyGk48�[$_obfuscate_lIeHkoeKkpOSiomPi4mQk5E�].$_obfuscate_lZONjIiPhoiGk4_JkJKGlJU�[$_obfuscate_lIeHkoeKkpOSiomPi4mQk5E�] ) );
        }
    }
}
$_obfuscate_j5CIk4qSjZKKjImVkYmHh48� = 0;
$_obfuscate_jpKNh4eVkY2Tio6RlZGMiI8� = 0;
$_obfuscate_ipCMlJGQiY2ShoqQjImHlI0� = array( );
foreach ( $_obfuscate_j46GkYaTj5KIkIyUh4aTjYs� as $_obfuscate_lZSGkoqUio_RlZGNkY6Liok� )
{
    $_obfuscate_lIeHkoeKkpOSiomPi4mQk5E� = $_obfuscate_lZSGkoqUio_RlZGNkY6Liok�['keys'];
    $_obfuscate_kJKGlYqQkoiHjYeVkIuKkYY� = $_obfuscate_ipGJkpOKioePjIaGkIuQiJA�[$_obfuscate_lIeHkoeKkpOSiomPi4mQk5E�].$_obfuscate_jZCUjpOJiY6Iio_SiIyGk48�[$_obfuscate_lIeHkoeKkpOSiomPi4mQk5E�].$_obfuscate_lZONjIiPhoiGk4_JkJKGlJU�[$_obfuscate_lIeHkoeKkpOSiomPi4mQk5E�];
    if ( $_obfuscate_lZSGkoqUio_RlZGNkY6Liok�['keyfix'] != $_obfuscate_ipGJkpOKioePjIaGkIuQiJA�[$_obfuscate_lIeHkoeKkpOSiomPi4mQk5E�] || $_obfuscate_lZSGkoqUio_RlZGNkY6Liok�['keyspassword'] != $_obfuscate_lZONjIiPhoiGk4_JkJKGlJU�[$_obfuscate_lIeHkoeKkpOSiomPi4mQk5E�] )
    {
        _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Q�( "321", "注册卡VAL_errkey错误。", array( "VAL_errkey" => $_obfuscate_kJKGlYqQkoiHjYeVkIuKkYY� ) );
    }
    else
    {
        if ( $_obfuscate_lZSGkoqUio_RlZGNkY6Liok�['islock'] != 0 )
        {
            _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Q�( "322", "注册卡VAL_errkey被锁定。", array( "VAL_errkey" => $_obfuscate_kJKGlYqQkoiHjYeVkIuKkYY� ) );
        }
        if ( 0 < $_obfuscate_lZSGkoqUio_RlZGNkY6Liok�['cztime'] )
        {
            _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Q�( "323", "注册卡VAL_errkey已使用过。", array( "VAL_errkey" => $_obfuscate_kJKGlYqQkoiHjYeVkIuKkYY� ) );
        }
        if ( isset( $_obfuscate_ipCMlJGQiY2ShoqQjImHlI0�['keyextattr'] ) )
        {
            $_obfuscate_ipCMlJGQiY2ShoqQjImHlI0�['keyextattr'] = $_obfuscate_lZSGkoqUio_RlZGNkY6Liok�['keyextattr'];
            $_obfuscate_ipCMlJGQiY2ShoqQjImHlI0�['linknum'] = $_obfuscate_lZSGkoqUio_RlZGNkY6Liok�['linknum'];
            if ( $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['keyextattr'] != $_obfuscate_lZSGkoqUio_RlZGNkY6Liok�['keyextattr'] )
            {
                if ( $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['keyextattr'] == "" )
                {
                    $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['keyextattr'] = $_obfuscate_lZSGkoqUio_RlZGNkY6Liok�['keyextattr'];
                }
                else
                {
                    _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Q�( "324", "你所使用的注册卡如原帐号的附属性不同，不允许使用。" );
                }
            }
            if ( $_obfuscate_lZSGkoqUio_RlZGNkY6Liok�['linknum'] < $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['linknum'] )
            {
                _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Q�( "325", "你所使用的注册卡通道号小于原卡，不允许使用。" );
            }
            else
            {
                $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['linknum'] = $_obfuscate_lZSGkoqUio_RlZGNkY6Liok�['linknum'];
            }
        }
        else
        {
            if ( $_obfuscate_ipCMlJGQiY2ShoqQjImHlI0�['keyextattr'] != $_obfuscate_lZSGkoqUio_RlZGNkY6Liok�['keyextattr'] )
            {
                _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Q�( "326", "不同附属性的注册卡不能混在一起使用。" );
            }
            if ( $_obfuscate_ipCMlJGQiY2ShoqQjImHlI0�['linknum'] != $_obfuscate_lZSGkoqUio_RlZGNkY6Liok�['linknum'] )
            {
                _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Q�( "327", "不同通道数的注册卡不能混在一起使用。" );
            }
        }
        if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['onetimeskeyattrid'] == $_obfuscate_lZSGkoqUio_RlZGNkY6Liok�['keyfix'] )
        {
            $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_lZGTiIiKhouKiZGLi5KUkI8�( "SELECT * from `kss_z_cz_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�."` where `username`='".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username']."' and `keys` like '".$_obfuscate_lZSGkoqUio_RlZGNkY6Liok�['keyfix']."%' and cztype<2" );
            if ( empty( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� ) )
            {
                _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Q�( "296", "VAL_errkey开头的注册卡每个帐号只能使用一张！", array( "VAL_errkey" => $_obfuscate_lZSGkoqUio_RlZGNkY6Liok�['keyfix'] ) );
            }
        }
        $_obfuscate_j5CIk4qSjZKKjImVkYmHh48� += $_obfuscate_lZSGkoqUio_RlZGNkY6Liok�['cday'];
        $_obfuscate_jpKNh4eVkY2Tio6RlZGMiI8� += $_obfuscate_lZSGkoqUio_RlZGNkY6Liok�['points'];
        $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['cday'] = $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['cday'] + $_obfuscate_lZSGkoqUio_RlZGNkY6Liok�['cday'];
        $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['points'] = $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['points'] + $_obfuscate_lZSGkoqUio_RlZGNkY6Liok�['points'];
        $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['endtime'] = $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['endtime'] + $_obfuscate_lZSGkoqUio_RlZGNkY6Liok�['cday'] * 86400;
        $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['cztimes'] = $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['cztimes'] + 1;
        $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['managerid'] = $_obfuscate_lZSGkoqUio_RlZGNkY6Liok�['managerid'];
    }
}
$_obfuscate_ioyQkY6QhoeUjo6MjIaSkJM� = $_obfuscate_j5CIk4qSjZKKjImVkYmHh48�;
$_obfuscate_lI6Oh5CKh42Ri5STio2HjpE� = array( );
$_obfuscate_lI6Oh5CKh42Ri5STio2HjpE�[] = "insert into kss_z_cz_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�." (`addtime`,`cztype`,`username`,`oldcday`,`newcday`,`oldtimes`,`newtimes`,`keys`,`tzxguser`) values (".$_obfuscate_jomPk5WKioeLipGGi4_PhpM�.",".$_obfuscate_io6Jj4aRipKKkoiOi5SJi5U�.",'".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username']."',".$_obfuscate_jpSHk4yRh5CUiZKVkJSPkY8�.",".$_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['cday'].",".$_obfuscate_k5SGkIiQkJKPiIuUlYmHhow�.",".$_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['points'].",'".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['czkey']."','')";
$_obfuscate_iZWHiZKQjpOJk5GKiJSPkpE� = 0;
$_obfuscate_lIyIi5GQlYaNkIeIlI6LiIo� = 0;
if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['zs_czset'] != "" )
{
    $_obfuscate_lI_Jj4uGiZGPh5SUj4yNi4k� = array_unique( $_obfuscate_jIaRh4iNjpKMioaTjZWGkY4� );
    $_obfuscate_lJKNk5OTkYiOj4uTlI_JiYc� = json_decode( base64_decode( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['zs_czset'] ), TRUE );
    foreach ( $_obfuscate_lI_Jj4uGiZGPh5SUj4yNi4k� as $_obfuscate_jo_SiI6SjIeSjoiMjoyTkpA� )
    {
        if ( isset( $_obfuscate_lJKNk5OTkYiOj4uTlI_JiYc�[$_obfuscate_jo_SiI6SjIeSjoiMjoyTkpA�] ) )
        {
            $_obfuscate_i5OKioaRlY6TkIaGkZSGlIo� = 0;
            foreach ( $_obfuscate_jIaRh4iNjpKMioaTjZWGkY4� as $_obfuscate_io6UjZWThpOSjYeOj46Qkow� )
            {
                if ( $_obfuscate_io6UjZWThpOSjYeOj46Qkow� == $_obfuscate_jo_SiI6SjIeSjoiMjoyTkpA� )
                {
                    ++$_obfuscate_i5OKioaRlY6TkIaGkZSGlIo�;
                }
            }
            uasort( &$_obfuscate_lJKNk5OTkYiOj4uTlI_JiYc�[$_obfuscate_jo_SiI6SjIeSjoiMjoyTkpA�], "zsarr_sort" );
            foreach ( $_obfuscate_lJKNk5OTkYiOj4uTlI_JiYc�[$_obfuscate_jo_SiI6SjIeSjoiMjoyTkpA�] as $_obfuscate_jIyQkoaHk5OPiImPh4uUjYw� )
            {
                $_obfuscate_jpSNkJSGhpGKiImJi4_LkJM� = floor( $_obfuscate_i5OKioaRlY6TkIaGkZSGlIo� / $_obfuscate_jIyQkoaHk5OPiImPh4uUjYw�['num'] );
                if ( $_obfuscate_jpSNkJSGhpGKiImJi4_LkJM� == 0 )
                {
                    $_obfuscate_i5OKioaRlY6TkIaGkZSGlIo� -= $_obfuscate_jIyQkoaHk5OPiImPh4uUjYw�['num'] * $_obfuscate_jpSNkJSGhpGKiImJi4_LkJM�;
                    $_obfuscate_iZWHiZKQjpOJk5GKiJSPkpE� += $_obfuscate_jIyQkoaHk5OPiImPh4uUjYw�['zsday'] * $_obfuscate_jpSNkJSGhpGKiImJi4_LkJM�;
                    $_obfuscate_lIyIi5GQlYaNkIeIlI6LiIo� += $_obfuscate_jIyQkoaHk5OPiImPh4uUjYw�['zspoints'] * $_obfuscate_jpSNkJSGhpGKiImJi4_LkJM�;
                }
            }
        }
    }
    $_obfuscate_iJSNkomSi4qVlJOHlYuSi4k� = $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['cday'];
    $_obfuscate_k42Sho2GiIeHk42OjIaPipQ� = $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['points'];
    if ( $_obfuscate_iZWHiZKQjpOJk5GKiJSPkpE� != 0 )
    {
        $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['cday'] = $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['cday'] + $_obfuscate_iZWHiZKQjpOJk5GKiJSPkpE�;
        $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['endtime'] = $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['endtime'] + $_obfuscate_iZWHiZKQjpOJk5GKiJSPkpE� * 86400;
    }
    if ( $_obfuscate_lIyIi5GQlYaNkIeIlI6LiIo� != 0 )
    {
        $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['points'] = $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['points'] + $_obfuscate_lIyIi5GQlYaNkIeIlI6LiIo�;
    }
    if ( $_obfuscate_iZWHiZKQjpOJk5GKiJSPkpE� != 0 || $_obfuscate_lIyIi5GQlYaNkIeIlI6LiIo� != 0 )
    {
        $_obfuscate_lI6Oh5CKh42Ri5STio2HjpE�[] = "insert into kss_z_cz_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�." (`addtime`,`cztype`,`username`,`oldcday`,`newcday`,`oldtimes`,`newtimes`,`keys`,`tzxguser`) values\t(".$_obfuscate_jomPk5WKioeLipGGi4_PhpM�.",7,'".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username']."',".$_obfuscate_iJSNkomSi4qVlJOHlYuSi4k�.",".$_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['cday'].",".$_obfuscate_k42Sho2GiIeHk42OjIaPipQ�.",".$_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['points'].",'".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['czkey']."','')";
    }
}
$_obfuscate_kIaHkJSNhpOPi5OSh4eJlIY� = array( );
$_obfuscate_lI2HjIqUkYqTho2HiJWUk5I� = "";
$_obfuscate_hpSOkJGOiZGNiJOPiY_ViZQ� = 0;
$_obfuscate_kYuMjomSiYiHioePiYmQiIo� = 0;
$_obfuscate_iJWQj5WQlY_NkYePk5OGjZM� = 0;
$_obfuscate_iZOGi4uQkI2Uho_Lk5CPhpM� = 0;
$_obfuscate_h4aOh4mKiZCUkoaIhouTiIg� = FALSE;
if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['zs_tgset'] != "" && $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['parentuser'] != "" )
{
    $_obfuscate_kI2Li4aJk4aMiIeSiIeUjIo� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "SELECT * from `kss_z_user_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�."` where `username`='".$_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['parentuser']."'" );
    if ( empty( $_obfuscate_kI2Li4aJk4aMiIeSiIeUjIo� ) )
    {
        $_obfuscate_kI2Li4aJk4aMiIeSiIeUjIo�['endtime'] = $_obfuscate_kI2Li4aJk4aMiIeSiIeUjIo�['starttime'] + $_obfuscate_kI2Li4aJk4aMiIeSiIeUjIo�['cday'] * 86400;
        if ( 0 < $_obfuscate_kI2Li4aJk4aMiIeSiIeUjIo�['islock'] || 0 < $_obfuscate_kI2Li4aJk4aMiIeSiIeUjIo�['ispause'] || $_obfuscate_kI2Li4aJk4aMiIeSiIeUjIo�['endtime'] < $_obfuscate_jomPk5WKioeLipGGi4_PhpM� )
        {
            $_obfuscate_h4aOh4mKiZCUkoaIhouTiIg� = FALSE;
        }
        else
        {
            $_obfuscate_h4aOh4mKiZCUkoaIhouTiIg� = TRUE;
            if ( PETIME <= $_obfuscate_kI2Li4aJk4aMiIeSiIeUjIo�['endtime'] )
            {
                $_obfuscate_h4aOh4mKiZCUkoaIhouTiIg� = FALSE;
            }
        }
    }
    if ( $_obfuscate_h4aOh4mKiZCUkoaIhouTiIg� )
    {
        $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['parentuser'] = "";
    }
}
if ( $_obfuscate_h4aOh4mKiZCUkoaIhouTiIg� )
{
    $_obfuscate_kpWRkZOIkYuNiIeTlIqPkpQ� = json_decode( base64_decode( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['zs_tgset'] ), TRUE );
    foreach ( $_obfuscate_jIaRh4iNjpKMioaTjZWGkY4� as $_obfuscate_jo_SiI6SjIeSjoiMjoyTkpA� )
    {
        if ( !isset( $_obfuscate_kpWRkZOIkYuNiIeTlIqPkpQ�[$_obfuscate_jo_SiI6SjIeSjoiMjoyTkpA�] ) || !( $_obfuscate_kpWRkZOIkYuNiIeTlIqPkpQ�[$_obfuscate_jo_SiI6SjIeSjoiMjoyTkpA�]['cj'] == 2 ) )
        {
            $_obfuscate_hpSOkJGOiZGNiJOPiY_ViZQ� += $_obfuscate_kpWRkZOIkYuNiIeTlIqPkpQ�[$_obfuscate_jo_SiI6SjIeSjoiMjoyTkpA�]['zsday1'];
            $_obfuscate_kYuMjomSiYiHioePiYmQiIo� += $_obfuscate_kpWRkZOIkYuNiIeTlIqPkpQ�[$_obfuscate_jo_SiI6SjIeSjoiMjoyTkpA�]['zspoints1'];
            $_obfuscate_iJWQj5WQlY_NkYePk5OGjZM� += $_obfuscate_kpWRkZOIkYuNiIeTlIqPkpQ�[$_obfuscate_jo_SiI6SjIeSjoiMjoyTkpA�]['zsday2'];
            $_obfuscate_iZOGi4uQkI2Uho_Lk5CPhpM� += $_obfuscate_kpWRkZOIkYuNiIeTlIqPkpQ�[$_obfuscate_jo_SiI6SjIeSjoiMjoyTkpA�]['zspoints2'];
        }
    }
    $_obfuscate_iJSNkomSi4qVlJOHlYuSi4k� = $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['cday'];
    $_obfuscate_k42Sho2GiIeHk42OjIaPipQ� = $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['points'];
    if ( $_obfuscate_hpSOkJGOiZGNiJOPiY_ViZQ� != 0 )
    {
        $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['cday'] = $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['cday'] + $_obfuscate_hpSOkJGOiZGNiJOPiY_ViZQ�;
        $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['endtime'] = $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['endtime'] + $_obfuscate_hpSOkJGOiZGNiJOPiY_ViZQ� * 86400;
    }
    if ( $_obfuscate_kYuMjomSiYiHioePiYmQiIo� != 0 )
    {
        $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['points'] = $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['points'] + $_obfuscate_kYuMjomSiYiHioePiYmQiIo�;
    }
    if ( $_obfuscate_hpSOkJGOiZGNiJOPiY_ViZQ� != 0 || $_obfuscate_kYuMjomSiYiHioePiYmQiIo� != 0 )
    {
        $_obfuscate_lI6Oh5CKh42Ri5STio2HjpE�[] = "insert into kss_z_cz_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�." (`addtime`,`cztype`,`username`,`oldcday`,`newcday`,`oldtimes`,`newtimes`,`keys`,`tzxguser`) values \t(".$_obfuscate_jomPk5WKioeLipGGi4_PhpM�.",4,'".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username']."',".$_obfuscate_iJSNkomSi4qVlJOHlYuSi4k�.",".$_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['cday'].",".$_obfuscate_k42Sho2GiIeHk42OjIaPipQ�.",".$_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['points'].",'','".$_obfuscate_kI2Li4aJk4aMiIeSiIeUjIo�['username']."')";
    }
    $_obfuscate_iI_QkZGJh4yRk4mIkYuOiYg� = array( );
    $_obfuscate_iJSNkomSi4qVlJOHlYuSi4k� = $_obfuscate_kI2Li4aJk4aMiIeSiIeUjIo�['cday'];
    $_obfuscate_k42Sho2GiIeHk42OjIaPipQ� = $_obfuscate_kI2Li4aJk4aMiIeSiIeUjIo�['points'];
    if ( $_obfuscate_iJWQj5WQlY_NkYePk5OGjZM� != 0 )
    {
        $_obfuscate_iI_QkZGJh4yRk4mIkYuOiYg�['cday'] = $_obfuscate_kI2Li4aJk4aMiIeSiIeUjIo�['cday'] + $_obfuscate_iJWQj5WQlY_NkYePk5OGjZM�;
        $_obfuscate_iI_QkZGJh4yRk4mIkYuOiYg�['endtime'] = $_obfuscate_kI2Li4aJk4aMiIeSiIeUjIo�['endtime'] + $_obfuscate_iJWQj5WQlY_NkYePk5OGjZM� * 86400;
        $_obfuscate_lI2HjIqUkYqTho2HiJWUk5I� .= "推广帐号赠送VAL_pBday天";
        $_obfuscate_kIaHkJSNhpOPi5OSh4eJlIY�['VAL_pBday'] = $_obfuscate_iJWQj5WQlY_NkYePk5OGjZM�;
    }
    if ( $_obfuscate_iZOGi4uQkI2Uho_Lk5CPhpM� != 0 )
    {
        $_obfuscate_iI_QkZGJh4yRk4mIkYuOiYg�['points'] = $_obfuscate_kI2Li4aJk4aMiIeSiIeUjIo�['points'] + $_obfuscate_iZOGi4uQkI2Uho_Lk5CPhpM�;
        if ( $_obfuscate_lI2HjIqUkYqTho2HiJWUk5I� == "" )
        {
            $_obfuscate_lI2HjIqUkYqTho2HiJWUk5I� .= "推广帐号赠送";
        }
        $_obfuscate_lI2HjIqUkYqTho2HiJWUk5I� .= "VAL_pBpoints点";
        $_obfuscate_kIaHkJSNhpOPi5OSh4eJlIY�['VAL_pBpoints'] = $_obfuscate_iZOGi4uQkI2Uho_Lk5CPhpM�;
    }
    if ( $_obfuscate_iJWQj5WQlY_NkYePk5OGjZM� != 0 || $_obfuscate_iZOGi4uQkI2Uho_Lk5CPhpM� != 0 )
    {
        $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_kI2Li4aJk4aMiIeSiIeUjIo�['username']( "kss_z_user_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�, $_obfuscate_iI_QkZGJh4yRk4mIkYuOiYg�, "username='".$_obfuscate_kI2Li4aJk4aMiIeSiIeUjIo�['username']."'", "sql" );
        if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� !== FALSE )
        {
            $_obfuscate_lI6Oh5CKh42Ri5STio2HjpE�[] = $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY�;
        }
        $_obfuscate_lI6Oh5CKh42Ri5STio2HjpE�[] = "insert into kss_z_cz_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�." (`addtime`,`cztype`,`username`,`oldcday`,`newcday`,`oldtimes`,`newtimes`,`keys`,`tzxguser`) values (".$_obfuscate_jomPk5WKioeLipGGi4_PhpM�.",3,'".$_obfuscate_kI2Li4aJk4aMiIeSiIeUjIo�['username']."',".$_obfuscate_iJSNkomSi4qVlJOHlYuSi4k�.",".$_obfuscate_iI_QkZGJh4yRk4mIkYuOiYg�['cday'].",".$_obfuscate_k42Sho2GiIeHk42OjIaPipQ�.",".$_obfuscate_iI_QkZGJh4yRk4mIkYuOiYg�['points'].",'','".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username']."')";
    }
}
if ( 10001 < $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['pid'] && 0.5 < ( $_obfuscate_hpSOkJGOiZGNiJOPiY_ViZQ� + $_obfuscate_iZWHiZKQjpOJk5GKiJSPkpE� ) / $_obfuscate_ioyQkY6QhoeUjo6MjIaSkJM� )
{
    _obfuscate_lJCQjZSSkpSSiI2Sh42LjYk�( "329", "月付版客户的赠送天数不能超出卡面天数的50%[ VAL_zsday / VAL_kmday ]", array( "VAL_zsday" => $_obfuscate_hpSOkJGOiZGNiJOPiY_ViZQ� + $_obfuscate_iZWHiZKQjpOJk5GKiJSPkpE�, "VAL_kmday" => $_obfuscate_ioyQkY6QhoeUjo6MjIaSkJM� ) );
}
if ( $_obfuscate_lI2HjIqUkYqTho2HiJWUk5I� != "" )
{
    $_obfuscate_lI2HjIqUkYqTho2HiJWUk5I� .= "，";
}
$_obfuscate_iIqGj4aSiJOUkY6HiYeGiYk� = "本帐号赠送";
if ( 0 < $_obfuscate_hpSOkJGOiZGNiJOPiY_ViZQ� + $_obfuscate_iZWHiZKQjpOJk5GKiJSPkpE� )
{
    $_obfuscate_lI2HjIqUkYqTho2HiJWUk5I� .= $_obfuscate_iIqGj4aSiJOUkY6HiYeGiYk�."VAL_Bday天";
    $_obfuscate_kIaHkJSNhpOPi5OSh4eJlIY�['VAL_Bday'] = $_obfuscate_iZWHiZKQjpOJk5GKiJSPkpE� + $_obfuscate_hpSOkJGOiZGNiJOPiY_ViZQ�;
    $_obfuscate_iIqGj4aSiJOUkY6HiYeGiYk� = "";
}
if ( 0 < $_obfuscate_kYuMjomSiYiHioePiYmQiIo� + $_obfuscate_lIyIi5GQlYaNkIeIlI6LiIo� )
{
    $_obfuscate_lI2HjIqUkYqTho2HiJWUk5I� .= $_obfuscate_iIqGj4aSiJOUkY6HiYeGiYk�."VAL_Bpoints点";
    $_obfuscate_kIaHkJSNhpOPi5OSh4eJlIY�['VAL_Bpoints'] = $_obfuscate_lIyIi5GQlYaNkIeIlI6LiIo� + $_obfuscate_kYuMjomSiYiHioePiYmQiIo�;
}
if ( $_obfuscate_lI2HjIqUkYqTho2HiJWUk5I� != "" )
{
    $_obfuscate_lI2HjIqUkYqTho2HiJWUk5I� .= "，";
}
$_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5U� = "update kss_z_key_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�." set `cztime`=".$_obfuscate_jomPk5WKioeLipGGi4_PhpM�.",`czusername`='".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username']."' where `keys` in ('".join( "','", $_obfuscate_jZCUjpOJiY6Iio_SiIyGk48� )."')";
$_obfuscate_kY2Qi5OGjImIh46TjZKNk48� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5U�, "sync" );
if ( $_obfuscate_kY2Qi5OGjImIh46TjZKNk48� !== TRUE )
{
    _obfuscate_h4aIlI6QlYmUkY6MlI6Qhos�( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5U�, $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4�( ), __FILE__, 309 );
    _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Q�( "330", "帐号充值失败！修改注册卡状态时出错VAL_sqlerr", array( "VAL_sqlerr" => $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4�( ) ) );
}
$_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5U� = $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username']( "kss_z_user_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�, $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�, "username='".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username']."'", "sql" );
$_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5U�, "sync" );
if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� !== FALSE )
{
    if ( empty( $_obfuscate_lI6Oh5CKh42Ri5STio2HjpE� ) )
    {
        foreach ( $_obfuscate_lI6Oh5CKh42Ri5STio2HjpE� as $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI� )
        {
            $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�, "sync" );
            if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� !== TRUE )
            {
                _obfuscate_h4aIlI6QlYmUkY6MlI6Qhos�( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�, $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4�( ), __FILE__, 320 );
            }
        }
    }
    $_obfuscate_lI2HjIqUkYqTho2HiJWUk5I� .= "本帐号时间VAL_Aday天";
    $_obfuscate_kIaHkJSNhpOPi5OSh4eJlIY�['VAL_Aday'] = $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['cday'];
    $_obfuscate_lI2HjIqUkYqTho2HiJWUk5I� .= "VAL_Apoints点。";
    $_obfuscate_kIaHkJSNhpOPi5OSh4eJlIY�['VAL_Apoints'] = $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['points'];
    _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Q�( "332", "充值帐号成功，".$_obfuscate_lI2HjIqUkYqTho2HiJWUk5I�, $_obfuscate_kIaHkJSNhpOPi5OSh4eJlIY� );
}
else
{
    _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Q�( "331", "帐号充值失败！原因：VAL_sqlerr", array( "VAL_sqlerr" => $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4�( ) ) );
}
?>
