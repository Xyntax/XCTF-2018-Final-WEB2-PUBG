<?php
/*********************/
/*                   */
/*  Dezend for PHP5  */
/*         NWS       */
/*      Nulled.WS    */
/*                   */
/*********************/

function _obfuscate_k4aNj4iRh5WPipSRjYeQjoc�( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� = 1 )
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
        _obfuscate_lJCQjZSSkpSSiI2Sh42LjYk�( "297", "作者在后台设置不正确：发现卡名相同充值张数相同的记录" );
    }
    if ( $_obfuscate_j4qUhoiVipWQj4iNh5CJj4w�['num'] < $_obfuscate_iJSNjIuPjoqSjYyUiIyIi5A�['num'] )
    {
        return -1;
    }
    return 1;
}

function _obfuscate_lJCQjZSSkpSSiI2Sh42LjYk�( $_obfuscate_io_SlIuNkIuKjZOIkIiOlZA�, $_obfuscate_lY6ViI_KiJWHj4aTlZKNjYw�, $_obfuscate_jZSVhpSIj5STkJWIlJGVjos� = array( ), $_obfuscate_kpGKjomRjY6SkIyHh4qUj5M� = "global" )
{
    global $_obfuscate_kI6OjImLjJCRh46PjYqLhoo�;
    global $_obfuscate_joyHlI2KjY6PkJKQhpSGkI8�;
    global $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�;
    if ( $_obfuscate_kpGKjomRjY6SkIyHh4qUj5M� == "global" )
    {
        $_obfuscate_kpGKjomRjY6SkIyHh4qUj5M� = $_obfuscate_kI6OjImLjJCRh46PjYqLhoo�;
    }
    if ( isset( $_obfuscate_jZSVhpSIj5STkJWIlJGVjos� ) )
    {
        $_obfuscate_lY6ViI_KiJWHj4aTlZKNjYw� = strtr( $_obfuscate_lY6ViI_KiJWHj4aTlZKNjYw�, $_obfuscate_jZSVhpSIj5STkJWIlJGVjos� );
    }
    $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kYyNi4eQiouGlY6Qj46HjpE�( $_obfuscate_joyHlI2KjY6PkJKQhpSGkI8� );
    switch ( $_obfuscate_kpGKjomRjY6SkIyHh4qUj5M� )
    {
        case "0" :
            $_obfuscate_jo6SjIuHj46LjIyTlIyQk4s� = array( "state" => $_obfuscate_io_SlIuNkIuKjZOIkIiOlZA�, "message" => $_obfuscate_lY6ViI_KiJWHj4aTlZKNjYw� );
            if ( empty( $_obfuscate_jZSVhpSIj5STkJWIlJGVjos� ) )
            {
                foreach ( $_obfuscate_jZSVhpSIj5STkJWIlJGVjos� as $_obfuscate_lIeHkoeKkpOSiomPi4mQk5E� => $_obfuscate_io6UjZWThpOSjYeOj46Qkow� )
                {
                    $_obfuscate_jo6SjIuHj46LjIyTlIyQk4s�[$_obfuscate_lIeHkoeKkpOSiomPi4mQk5E�] = $_obfuscate_io6UjZWThpOSjYeOj46Qkow�;
                }
            }
            exit( _obfuscate_hpKJipCTlIePjoiMjZSOkZU�( $_obfuscate_jo6SjIuHj46LjIyTlIyQk4s� ) );
        case "1" :
            $_obfuscate_jo6SjIuHj46LjIyTlIyQk4s� = array( "state" => $_obfuscate_io_SlIuNkIuKjZOIkIiOlZA�, "message" => $_obfuscate_lY6ViI_KiJWHj4aTlZKNjYw� );
            if ( empty( $_obfuscate_jZSVhpSIj5STkJWIlJGVjos� ) )
            {
                foreach ( $_obfuscate_jZSVhpSIj5STkJWIlJGVjos� as $_obfuscate_lIeHkoeKkpOSiomPi4mQk5E� => $_obfuscate_io6UjZWThpOSjYeOj46Qkow� )
                {
                    $_obfuscate_jo6SjIuHj46LjIyTlIyQk4s�[$_obfuscate_lIeHkoeKkpOSiomPi4mQk5E�] = $_obfuscate_io6UjZWThpOSjYeOj46Qkow�;
                }
            }
            exit( _obfuscate_i5SKlIaQlZOMkpCPk5WUiIY�( $_obfuscate_jo6SjIuHj46LjIyTlIyQk4s� ) );
        case "2" :
            exit( $_obfuscate_io_SlIuNkIuKjZOIkIiOlZA�."  :  ".$_obfuscate_lY6ViI_KiJWHj4aTlZKNjYw� );
    }
    $_obfuscate_jo6SjIuHj46LjIyTlIyQk4s� = array( "state" => $_obfuscate_io_SlIuNkIuKjZOIkIiOlZA�, "message" => $_obfuscate_lY6ViI_KiJWHj4aTlZKNjYw� );
    if ( empty( $_obfuscate_jZSVhpSIj5STkJWIlJGVjos� ) )
    {
        foreach ( $_obfuscate_jZSVhpSIj5STkJWIlJGVjos� as $_obfuscate_lIeHkoeKkpOSiomPi4mQk5E� => $_obfuscate_io6UjZWThpOSjYeOj46Qkow� )
        {
            $_obfuscate_jo6SjIuHj46LjIyTlIyQk4s�[$_obfuscate_lIeHkoeKkpOSiomPi4mQk5E�] = $_obfuscate_io6UjZWThpOSjYeOj46Qkow�;
        }
    }
    exit( _obfuscate_i5SKlIaQlZOMkpCPk5WUiIY�( $_obfuscate_jo6SjIuHj46LjIyTlIyQk4s� ) );
}

if ( !defined( "YH2" ) )
{
    exit( "Access denied to view this page!" );
}
if ( SVRID == 2 )
{
    _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Q�( "271", "禁止在备用服务器上注册帐号！" );
}
if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['softmode'] == "KSOFT" )
{
    _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Q�( "272", "卡模式软件是自动激活帐号，无需注册！" );
}
if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['softstatus'] == 4 )
{
    _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Q�( "273", "软件已关闭新用户注册！" );
}
$_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_jIuSjYuUkJGHlYuPjZOQjY4�( $_obfuscate_mGKRY4dMuU6bZZJfh1_TX5k� );
if ( 0 < $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['manager_maxusernum'] )
{
    $_obfuscate_iZWGh5SKipCTk4mUkI_Kk48� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "select count(*) as tnum,sum(`linknum`) from kss_z_user_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYs� );
    if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['manager_maxusernum'] <= $_obfuscate_iZWGh5SKipCTk4mUkI_Kk48�['tnum'] + ( $_obfuscate_iZWGh5SKipCTk4mUkI_Kk48�['tnum'] - $_obfuscate_iZWGh5SKipCTk4mUkI_Kk48�['tnum'] ) / 2 )
    {
        _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Q�( "274", "作者可管理用户数已达上限！" );
    }
}
$_obfuscate_lJKIh46Pho6OiZWUi4aJhpU� = _obfuscate_hoaHlYiMh5OOjpGNiYmLk5A�( "bdinfo" );
$_obfuscate_lI2KiouPkIaOj5OJiJSTiI4� = _obfuscate_hoaHlYiMh5OOjpGNiYmLk5A�( "username" );
$_obfuscate_k5CUiZCKjI6Mk5OGlZCJlIY� = _obfuscate_hoaHlYiMh5OOjpGNiYmLk5A�( "password" );
$_obfuscate_jpWHioeQiJWMh42MjoyQkI8� = _obfuscate_hoaHlYiMh5OOjpGNiYmLk5A�( "password2" );
$_obfuscate_k5WIi4mIlIaGkY2GlJGOj4w� = _obfuscate_hoaHlYiMh5OOjpGNiYmLk5A�( "puser" );
$_obfuscate_joyMko_HhpCVlJOMlJGPkIo� = _obfuscate_hoaHlYiMh5OOjpGNiYmLk5A�( "czkey" );
if ( $_obfuscate_lJKIh46Pho6OiZWUi4aJhpU� === FALSE )
{
    $_obfuscate_lJKIh46Pho6OiZWUi4aJhpU� = "";
}
if ( $_obfuscate_lI2KiouPkIaOj5OJiJSTiI4� === FALSE )
{
    $_obfuscate_lI2KiouPkIaOj5OJiJSTiI4� = "";
}
if ( $_obfuscate_k5CUiZCKjI6Mk5OGlZCJlIY� === FALSE )
{
    $_obfuscate_k5CUiZCKjI6Mk5OGlZCJlIY� = "";
}
if ( $_obfuscate_jpWHioeQiJWMh42MjoyQkI8� === FALSE )
{
    $_obfuscate_jpWHioeQiJWMh42MjoyQkI8� = "";
}
if ( $_obfuscate_k5WIi4mIlIaGkY2GlJGOj4w� === FALSE )
{
    $_obfuscate_k5WIi4mIlIaGkY2GlJGOj4w� = "";
}
if ( $_obfuscate_joyMko_HhpCVlJOMlJGPkIo� === FALSE )
{
    $_obfuscate_joyMko_HhpCVlJOMlJGPkIo� = "";
}
$_obfuscate_lI2KiouPkIaOj5OJiJSTiI4� = trim( $_obfuscate_lI2KiouPkIaOj5OJiJSTiI4� );
$_obfuscate_joyMko_HhpCVlJOMlJGPkIo� = trim( $_obfuscate_joyMko_HhpCVlJOMlJGPkIo� );
if ( strlen( $_obfuscate_lI2KiouPkIaOj5OJiJSTiI4� ) < 3 )
{
    _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Q�( "275", "用户名长度最少为3！" );
}
if ( strlen( $_obfuscate_k5CUiZCKjI6Mk5OGlZCJlIY� ) < 5 )
{
    _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Q�( "276", "用户名密码长度最少为5！" );
}
if ( strlen( $_obfuscate_jpWHioeQiJWMh42MjoyQkI8� ) < 8 )
{
    _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Q�( "277", "安全密码长度最少为8！" );
}
$_obfuscate_iImHk5CLiY2Gk5OTlZONk4k� = array( );
$_obfuscate_iYuKhpCNhoaJlYmThpOTiIY� = FALSE;
if ( strlen( $_obfuscate_joyMko_HhpCVlJOMlJGPkIo� == "" ) )
{
    if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['nokeyreg'] == "0.00" )
    {
        _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Q�( "278", "注册本软件帐号必须输入注册卡号！" );
    }
    else
    {
        if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['freeregs'] == "0" )
        {
            $_obfuscate_k4yGjoyTjJGKjJWUkZSNlIc� = _obfuscate_hoaHlYiMh5OOjpGNiYmLk5A�( "pccode" );
            if ( $_obfuscate_k4yGjoyTjJGKjJWUkZSNlIc� )
            {
                _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Q�( "254", "你运行的客户端版本DLL有BUG，未找到机器码参数。" );
            }
            $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� = strpos( $_obfuscate_k4yGjoyTjJGKjJWUkZSNlIc�, "~" );
            if ( 5 < $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� )
            {
                $_obfuscate_k4yGjoyTjJGKjJWUkZSNlIc� = substr( $_obfuscate_k4yGjoyTjJGKjJWUkZSNlIc�, 0, $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� );
            }
            $_obfuscate_io_UkouIkIyHj42UlI_GiZA� = explode( ",", $_obfuscate_k4yGjoyTjJGKjJWUkZSNlIc� );
            $_obfuscate_h46JiZOTlZSPhpGIj4yHi5I� = "('".join( "','", $_obfuscate_io_UkouIkIyHj42UlI_GiZA� )."')";
            $_obfuscate_jI6LkY2TlJSJjJCHlImHj4Y� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "select * from kss_tb_log_havereg where `pccode` in ".$_obfuscate_h46JiZOTlZSPhpGIj4yHi5I�." and `softid`=".$_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['id'] );
            if ( empty( $_obfuscate_jI6LkY2TlJSJjJCHlImHj4Y� ) )
            {
                _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Q�( "279", "你所使用的电脑已免费注册过帐号，如果想继续注册新帐号请输入注册卡号！" );
            }
            foreach ( $_obfuscate_io_UkouIkIyHj42UlI_GiZA� as $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI� )
            {
                $_obfuscate_iImHk5CLiY2Gk5OTlZONk4k�[] = "insert into kss_tb_log_havereg (`softid`,`addtime`,`pccode`) values (".$_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['id'].",".time( ).",'".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�."')";
            }
        }
        $_obfuscate_iYuKhpCNhoaJlYmThpOTiIY� = TRUE;
    }
}
else if ( ( strlen( $_obfuscate_joyMko_HhpCVlJOMlJGPkIo� ) + 1 ) % 33 != 0 )
{
    _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Q�( "280", "注册卡填写错误，长度必须32位，多张卡号请用英文逗号分隔。" );
}
if ( 100 < _obfuscate_ioqHi5WHiJKIkoeIhouHjYw�( $_obfuscate_lJKIh46Pho6OiZWUi4aJhpU� ) )
{
    _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Q�( "281", "绑定信息最多只允许100个字符" );
}
$_obfuscate_jZCGhpKRipWQjY_UjZWMj5M� = crc32( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['softcode'].$_obfuscate_lI2KiouPkIaOj5OJiJSTiI4� );
$_obfuscate_joyHlI2KjY6PkJKQhpSGkI8� = "regu".sprintf( "%u", $_obfuscate_jZCGhpKRipWQjY_UjZWMj5M� );
$_obfuscate_k4eUjoiPkomNjIaPi4aLlYo� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "SELECT `nonononono` FROM `kss_z_user_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�."`", "notsync" );
if ( 1054 != $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_lI6Gio6PjomOj4mRjoaUjoY�( ) )
{
    $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "repair table kss_z_user_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�, "notsync" );
    $_obfuscate_h4aUkomQiI6JlIaSkomSkok� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4�( );
    if ( $_obfuscate_h4aUkomQiI6JlIaSkomSkok� != "" )
    {
        _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Q�( "254", "用户表[kss_z_user_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�."]出错，偿试修复但修复失败。修复时产生的错误信息：VAL_sqlerr", array( "VAL_sqlerr" => $_obfuscate_h4aUkomQiI6JlIaSkomSkok� ) );
    }
}
if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['onlyonebdinfo'] == "1" && !empty( $_obfuscate_lJKIh46Pho6OiZWUi4aJhpU� ) )
{
    $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "SELECT * from `kss_z_user_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�."` where `bdinfo`='".mysql_real_escape_string( $_obfuscate_lJKIh46Pho6OiZWUi4aJhpU� )."'" );
    if ( empty( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� ) )
    {
        _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Q�( "282", "绑定信息已被其他用户使用！" );
    }
}
$_obfuscate_jpOPko_LjYiHkoqPjZWLiog� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_ho_Ljo6NjpOOhpGHj5KHiYs�( $_obfuscate_joyHlI2KjY6PkJKQhpSGkI8� );
if ( $_obfuscate_jpOPko_LjYiHkoqPjZWLiog� !== TRUE )
{
    _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Q�( "283", "注册帐号时未能取得数据锁，请一分钟后重试！" );
}
$_obfuscate_h42NjZKIkoqSkouPh5WIiYw� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "SELECT * from `kss_z_user_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�."` where `username`='".$_obfuscate_lI2KiouPkIaOj5OJiJSTiI4�."'", 1, 1 );
if ( empty( $_obfuscate_h42NjZKIkoqSkouPh5WIiYw� ) )
{
    _obfuscate_lJCQjZSSkpSSiI2Sh42LjYk�( "284", "用户帐号已存在，不需要再注册。" );
}
else
{
    $_obfuscate_ko_OkJOPkIqLjY_Mj4_SjoY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "SELECT * from `kss_z_user_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�."_recycle` where `username`='".$_obfuscate_lI2KiouPkIaOj5OJiJSTiI4�."'" );
    if ( empty( $_obfuscate_ko_OkJOPkIqLjY_Mj4_SjoY� ) )
    {
        $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "update `kss_z_user_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�."_recycle` set `username`=concat('delete_',`username`) where `username`='".$_obfuscate_lI2KiouPkIaOj5OJiJSTiI4�."'" );
    }
}
if ( $_obfuscate_iYuKhpCNhoaJlYmThpOTiIY� === TRUE )
{
    $_obfuscate_iouSi4_PlIuKhoeUlI_LkpE� = $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['manager_id'];
    if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['fregmanagerid'] != 0 )
    {
        $_obfuscate_iouSi4_PlIuKhoeUlI_LkpE� = $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['fregmanagerid'];
    }
    $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k� = array( "managerid" => $_obfuscate_iouSi4_PlIuKhoeUlI_LkpE�, "username" => $_obfuscate_lI2KiouPkIaOj5OJiJSTiI4�, "password" => $_obfuscate_k5CUiZCKjI6Mk5OGlZCJlIY�, "password2" => $_obfuscate_jpWHioeQiJWMh42MjoyQkI8�, "cday" => $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['nokeyreg'], "points" => $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['nokeyreg_points'], "tag" => $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['fregtag'], "keyextattr" => $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['fregattr'], "bdinfo" => $_obfuscate_lJKIh46Pho6OiZWUi4aJhpU�, "addtime" => $_obfuscate_jomPk5WKioeLipGGi4_PhpM�, "starttime" => $_obfuscate_jomPk5WKioeLipGGi4_PhpM�, "endtime" => $_obfuscate_jomPk5WKioeLipGGi4_PhpM� + $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['nokeyreg'] * 86400, "isusetestkey" => 1, "intro" => "无卡注册" );
    $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSVjoiHkoeTlJSRiJGHiI0�( "kss_z_user_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�, $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�, "sync" );
    if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� !== FALSE )
    {
        if ( empty( $_obfuscate_iImHk5CLiY2Gk5OTlZONk4k� ) )
        {
            foreach ( $_obfuscate_iImHk5CLiY2Gk5OTlZONk4k� as $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI� )
            {
                $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�, "sync" );
            }
        }
        _obfuscate_lJCQjZSSkpSSiI2Sh42LjYk�( "285", "无卡注册帐号成功，帐号时间VAL_Aday天VAL_Apoints点。", array( "VAL_Aday" => $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['nokeyreg'], "VAL_Apoints" => $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['nokeyreg_points'] ) );
    }
    else
    {
        _obfuscate_lJCQjZSSkpSSiI2Sh42LjYk�( "286", "注册帐号失败！原因：VAL_sqlerr", array( "VAL_sqlerr" => $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4�( ) ) );
    }
}
$_obfuscate_j42HkJGSkI6UhoaJlYuVk4k� = array( "username" => $_obfuscate_lI2KiouPkIaOj5OJiJSTiI4�, "password" => $_obfuscate_k5CUiZCKjI6Mk5OGlZCJlIY�, "password2" => $_obfuscate_jpWHioeQiJWMh42MjoyQkI8�, "bdinfo" => $_obfuscate_lJKIh46Pho6OiZWUi4aJhpU�, "addtime" => $_obfuscate_jomPk5WKioeLipGGi4_PhpM�, "starttime" => $_obfuscate_jomPk5WKioeLipGGi4_PhpM� );
$_obfuscate_joyMko_HhpCVlJOMlJGPkIo� = str_replace( ",", "|", $_obfuscate_joyMko_HhpCVlJOMlJGPkIo� );
$_obfuscate_kYiQkJKGlI6JlZWRioaKlYg� = explode( "|", $_obfuscate_joyMko_HhpCVlJOMlJGPkIo� );
if ( 5 < count( $_obfuscate_kYiQkJKGlI6JlZWRioaKlYg� ) )
{
    _obfuscate_lJCQjZSSkpSSiI2Sh42LjYk�( "287", "每次最多可使用五张注册卡" );
}
$_obfuscate_iJCHjZWRiJONk5OGlIqMipM� = array_unique( $_obfuscate_kYiQkJKGlI6JlZWRioaKlYg� );
if ( count( $_obfuscate_kYiQkJKGlI6JlZWRioaKlYg� ) != count( $_obfuscate_iJCHjZWRiJONk5OGlIqMipM� ) )
{
    _obfuscate_lJCQjZSSkpSSiI2Sh42LjYk�( "288", "你输入的多张注册有相同的卡号" );
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
    _obfuscate_lJCQjZSSkpSSiI2Sh42LjYk�( "289", "注册卡未找到" );
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
            _obfuscate_lJCQjZSSkpSSiI2Sh42LjYk�( "290", "注册卡号VAL_errkey未找到。", array( "VAL_errkey" => $_obfuscate_ipGJkpOKioePjIaGkIuQiJA�[$_obfuscate_lIeHkoeKkpOSiomPi4mQk5E�].$_obfuscate_jZCUjpOJiY6Iio_SiIyGk48�[$_obfuscate_lIeHkoeKkpOSiomPi4mQk5E�].$_obfuscate_lZONjIiPhoiGk4_JkJKGlJU�[$_obfuscate_lIeHkoeKkpOSiomPi4mQk5E�] ) );
        }
    }
}
$_obfuscate_ioyQkY6QhoeUjo6MjIaSkJM� = 0;
foreach ( $_obfuscate_j46GkYaTj5KIkIyUh4aTjYs� as $_obfuscate_lZSGkoqUio_RlZGNkY6Liok� )
{
    $_obfuscate_lIeHkoeKkpOSiomPi4mQk5E� = $_obfuscate_lZSGkoqUio_RlZGNkY6Liok�['keys'];
    $_obfuscate_kJKGlYqQkoiHjYeVkIuKkYY� = $_obfuscate_ipGJkpOKioePjIaGkIuQiJA�[$_obfuscate_lIeHkoeKkpOSiomPi4mQk5E�].$_obfuscate_jZCUjpOJiY6Iio_SiIyGk48�[$_obfuscate_lIeHkoeKkpOSiomPi4mQk5E�].$_obfuscate_lZONjIiPhoiGk4_JkJKGlJU�[$_obfuscate_lIeHkoeKkpOSiomPi4mQk5E�];
    if ( $_obfuscate_lZSGkoqUio_RlZGNkY6Liok�['keyfix'] != $_obfuscate_ipGJkpOKioePjIaGkIuQiJA�[$_obfuscate_lIeHkoeKkpOSiomPi4mQk5E�] || $_obfuscate_lZSGkoqUio_RlZGNkY6Liok�['keyspassword'] != $_obfuscate_lZONjIiPhoiGk4_JkJKGlJU�[$_obfuscate_lIeHkoeKkpOSiomPi4mQk5E�] )
    {
        _obfuscate_lJCQjZSSkpSSiI2Sh42LjYk�( "291", "注册卡VAL_errkey错误。", array( "VAL_errkey" => $_obfuscate_kJKGlYqQkoiHjYeVkIuKkYY� ) );
    }
    else
    {
        if ( $_obfuscate_lZSGkoqUio_RlZGNkY6Liok�['islock'] != 0 )
        {
            _obfuscate_lJCQjZSSkpSSiI2Sh42LjYk�( "292", "注册卡VAL_errkey被锁定。", array( "VAL_errkey" => $_obfuscate_kJKGlYqQkoiHjYeVkIuKkYY� ) );
        }
        if ( 0 < $_obfuscate_lZSGkoqUio_RlZGNkY6Liok�['cztime'] )
        {
            _obfuscate_lJCQjZSSkpSSiI2Sh42LjYk�( "293", "注册卡VAL_errkey已使用过。", array( "VAL_errkey" => $_obfuscate_kJKGlYqQkoiHjYeVkIuKkYY� ) );
        }
        $_obfuscate_ioyQkY6QhoeUjo6MjIaSkJM� += $_obfuscate_lZSGkoqUio_RlZGNkY6Liok�['cday'];
        if ( isset( $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['cday'] ) )
        {
            $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['managerid'] = $_obfuscate_lZSGkoqUio_RlZGNkY6Liok�['managerid'];
            $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['tag'] = $_obfuscate_lZSGkoqUio_RlZGNkY6Liok�['tag'];
            $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['cday'] = $_obfuscate_lZSGkoqUio_RlZGNkY6Liok�['cday'];
            $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['points'] = $_obfuscate_lZSGkoqUio_RlZGNkY6Liok�['points'];
            $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['endtime'] = $_obfuscate_jomPk5WKioeLipGGi4_PhpM� + $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['cday'] * 86400;
            $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['cztimes'] = 1;
            $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['keyextattr'] = $_obfuscate_lZSGkoqUio_RlZGNkY6Liok�['keyextattr'];
            $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['linknum'] = $_obfuscate_lZSGkoqUio_RlZGNkY6Liok�['linknum'];
            if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['onetimeskeyattrid'] == $_obfuscate_lZSGkoqUio_RlZGNkY6Liok�['keyfix'] )
            {
                $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['isusetestkey'] = 1;
            }
            else
            {
                $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['isusetestkey'] = 0;
            }
        }
        else
        {
            if ( $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['keyextattr'] != $_obfuscate_lZSGkoqUio_RlZGNkY6Liok�['keyextattr'] )
            {
                _obfuscate_lJCQjZSSkpSSiI2Sh42LjYk�( "294", "不同附属性的注册卡不能混在一起使用！" );
            }
            if ( $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['linknum'] != $_obfuscate_lZSGkoqUio_RlZGNkY6Liok�['linknum'] )
            {
                _obfuscate_lJCQjZSSkpSSiI2Sh42LjYk�( "295", "不同通道数的注册卡不能混在一起使用！" );
            }
            if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['onetimeskeyattrid'] == $_obfuscate_lZSGkoqUio_RlZGNkY6Liok�['keyfix'] )
            {
                $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['isusetestkey'] = $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['isusetestkey'] + 1;
                if ( 1 < $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['isusetestkey'] )
                {
                    _obfuscate_lJCQjZSSkpSSiI2Sh42LjYk�( "296", "VAL_errkey开头的注册卡每个帐号只能使用一张！", array( "VAL_errkey" => $_obfuscate_lZSGkoqUio_RlZGNkY6Liok�['keyfix'] ) );
                }
            }
            $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['cday'] = $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['cday'] + $_obfuscate_lZSGkoqUio_RlZGNkY6Liok�['cday'];
            $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['points'] = $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['points'] + $_obfuscate_lZSGkoqUio_RlZGNkY6Liok�['points'];
            $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['endtime'] = $_obfuscate_jomPk5WKioeLipGGi4_PhpM� + $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['cday'] * 86400;
            $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['cztimes'] = $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['cztimes'] + 1;
        }
    }
}
$_obfuscate_lI6Oh5CKh42Ri5STio2HjpE� = array( );
$_obfuscate_lI6Oh5CKh42Ri5STio2HjpE�[] = "insert into kss_z_cz_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�." (`addtime`,`cztype`,`username`,`oldcday`,`newcday`,`oldtimes`,`newtimes`,`keys`,`tzxguser`) values (".$_obfuscate_jomPk5WKioeLipGGi4_PhpM�.",0,'".$_obfuscate_lI2KiouPkIaOj5OJiJSTiI4�."',0,".$_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['cday'].",0,".$_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['points'].",'".$_obfuscate_joyMko_HhpCVlJOMlJGPkIo�."','')";
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
        $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['endtime'] = $_obfuscate_jomPk5WKioeLipGGi4_PhpM� + $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['cday'] * 86400;
    }
    if ( $_obfuscate_lIyIi5GQlYaNkIeIlI6LiIo� != 0 )
    {
        $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['points'] = $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['points'] + $_obfuscate_lIyIi5GQlYaNkIeIlI6LiIo�;
    }
    if ( $_obfuscate_iZWHiZKQjpOJk5GKiJSPkpE� != 0 || $_obfuscate_lIyIi5GQlYaNkIeIlI6LiIo� != 0 )
    {
        $_obfuscate_lI6Oh5CKh42Ri5STio2HjpE�[] = "insert into kss_z_cz_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�." (`addtime`,`cztype`,`username`,`oldcday`,`newcday`,`oldtimes`,`newtimes`,`keys`,`tzxguser`) values\t(".$_obfuscate_jomPk5WKioeLipGGi4_PhpM�.",7,'".$_obfuscate_lI2KiouPkIaOj5OJiJSTiI4�."',".$_obfuscate_iJSNkomSi4qVlJOHlYuSi4k�.",".$_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['cday'].",".$_obfuscate_k42Sho2GiIeHk42OjIaPipQ�.",".$_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['points'].",'".$_obfuscate_joyMko_HhpCVlJOMlJGPkIo�."','')";
    }
}
$_obfuscate_kIaHkJSNhpOPi5OSh4eJlIY� = array( );
$_obfuscate_lI2HjIqUkYqTho2HiJWUk5I� = "";
$_obfuscate_hpSOkJGOiZGNiJOPiY_ViZQ� = 0;
$_obfuscate_kYuMjomSiYiHioePiYmQiIo� = 0;
$_obfuscate_iJWQj5WQlY_NkYePk5OGjZM� = 0;
$_obfuscate_iZOGi4uQkI2Uho_Lk5CPhpM� = 0;
if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['zs_tgset'] != "" && $_obfuscate_k5WIi4mIlIaGkY2GlJGOj4w� != "" )
{
    if ( _obfuscate_ioqHi5WHiJKIkoeIhouHjYw�( $_obfuscate_k5WIi4mIlIaGkY2GlJGOj4w� ) < 3 )
    {
        _obfuscate_lJCQjZSSkpSSiI2Sh42LjYk�( "298", "推广帐号长度少于3个字符，如不知道推广帐号请留空。" );
    }
    $_obfuscate_kI2Li4aJk4aMiIeSiIeUjIo� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "SELECT * from `kss_z_user_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�."` where `username`='".$_obfuscate_k5WIi4mIlIaGkY2GlJGOj4w�."'" );
    if ( empty( $_obfuscate_kI2Li4aJk4aMiIeSiIeUjIo� ) )
    {
        _obfuscate_lJCQjZSSkpSSiI2Sh42LjYk�( "299", "所填的推广帐号不存在，如果你不清楚推广帐号请留空。" );
    }
    if ( PETIME <= $_obfuscate_kI2Li4aJk4aMiIeSiIeUjIo�['endtime'] )
    {
        _obfuscate_lJCQjZSSkpSSiI2Sh42LjYk�( "300", "不能用公用帐号做为推广帐号。" );
    }
    if ( intval( $_obfuscate_kI2Li4aJk4aMiIeSiIeUjIo�['islock'] ) != 0 )
    {
        _obfuscate_lJCQjZSSkpSSiI2Sh42LjYk�( "301", "注册失败：所填的推广帐号被锁定，请填写一个有效的推广帐号或不填。" );
    }
    if ( intval( $_obfuscate_kI2Li4aJk4aMiIeSiIeUjIo�['ispause'] ) != 0 )
    {
        _obfuscate_lJCQjZSSkpSSiI2Sh42LjYk�( "302", "注册失败：所填的推广帐号被冻结，请填写一个有效的推广帐号或不填。" );
    }
    if ( intval( $_obfuscate_kI2Li4aJk4aMiIeSiIeUjIo�['endtime'] ) < time( ) )
    {
        _obfuscate_lJCQjZSSkpSSiI2Sh42LjYk�( "303", "注册失败：所填的推广帐号已过期，请填写一个有效的推广帐号或不填。" );
    }
    $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['parentuser'] = $_obfuscate_k5WIi4mIlIaGkY2GlJGOj4w�;
    $_obfuscate_kpWRkZOIkYuNiIeTlIqPkpQ� = json_decode( base64_decode( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['zs_tgset'] ), TRUE );
    foreach ( $_obfuscate_jIaRh4iNjpKMioaTjZWGkY4� as $_obfuscate_jo_SiI6SjIeSjoiMjoyTkpA� )
    {
        if ( isset( $_obfuscate_kpWRkZOIkYuNiIeTlIqPkpQ�[$_obfuscate_jo_SiI6SjIeSjoiMjoyTkpA�] ) )
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
        $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['endtime'] = $_obfuscate_jomPk5WKioeLipGGi4_PhpM� + $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['cday'] * 86400;
    }
    if ( $_obfuscate_kYuMjomSiYiHioePiYmQiIo� != 0 )
    {
        $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['points'] = $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['points'] + $_obfuscate_kYuMjomSiYiHioePiYmQiIo�;
    }
    if ( $_obfuscate_hpSOkJGOiZGNiJOPiY_ViZQ� != 0 || $_obfuscate_kYuMjomSiYiHioePiYmQiIo� != 0 )
    {
        $_obfuscate_lI6Oh5CKh42Ri5STio2HjpE�[] = "insert into kss_z_cz_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�." (`addtime`,`cztype`,`username`,`oldcday`,`newcday`,`oldtimes`,`newtimes`,`keys`,`tzxguser`) values \t(".$_obfuscate_jomPk5WKioeLipGGi4_PhpM�.",4,'".$_obfuscate_lI2KiouPkIaOj5OJiJSTiI4�."',".$_obfuscate_iJSNkomSi4qVlJOHlYuSi4k�.",".$_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['cday'].",".$_obfuscate_k42Sho2GiIeHk42OjIaPipQ�.",".$_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['points'].",'','".$_obfuscate_kI2Li4aJk4aMiIeSiIeUjIo�['username']."')";
    }
    $_obfuscate_iI_QkZGJh4yRk4mIkYuOiYg� = array( );
    $_obfuscate_iJSNkomSi4qVlJOHlYuSi4k� = $_obfuscate_kI2Li4aJk4aMiIeSiIeUjIo�['cday'];
    $_obfuscate_k42Sho2GiIeHk42OjIaPipQ� = $_obfuscate_kI2Li4aJk4aMiIeSiIeUjIo�['points'];
    if ( $_obfuscate_iJWQj5WQlY_NkYePk5OGjZM� != 0 )
    {
        $_obfuscate_iI_QkZGJh4yRk4mIkYuOiYg�['cday'] = $_obfuscate_kI2Li4aJk4aMiIeSiIeUjIo�['cday'] + $_obfuscate_iJWQj5WQlY_NkYePk5OGjZM�;
        $_obfuscate_iI_QkZGJh4yRk4mIkYuOiYg�['endtime'] = $_obfuscate_kI2Li4aJk4aMiIeSiIeUjIo�['starttime'] + $_obfuscate_iI_QkZGJh4yRk4mIkYuOiYg�['cday'] * 86400;
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
        $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iJOJipCPk4yQlJOMlIeTjYs�( "kss_z_user_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�, $_obfuscate_iI_QkZGJh4yRk4mIkYuOiYg�, "username='".$_obfuscate_k5WIi4mIlIaGkY2GlJGOj4w�."'", "sql" );
        if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� !== FALSE )
        {
            $_obfuscate_lI6Oh5CKh42Ri5STio2HjpE�[] = $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY�;
        }
        if ( isset( $_obfuscate_iI_QkZGJh4yRk4mIkYuOiYg�['cday'] ) )
        {
            $_obfuscate_iI_QkZGJh4yRk4mIkYuOiYg�['cday'] = $_obfuscate_kI2Li4aJk4aMiIeSiIeUjIo�['cday'];
        }
        if ( isset( $_obfuscate_iI_QkZGJh4yRk4mIkYuOiYg�['points'] ) )
        {
            $_obfuscate_iI_QkZGJh4yRk4mIkYuOiYg�['points'] = $_obfuscate_kI2Li4aJk4aMiIeSiIeUjIo�['points'];
        }
        $_obfuscate_lI6Oh5CKh42Ri5STio2HjpE�[] = "insert into kss_z_cz_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�." (`addtime`,`cztype`,`username`,`oldcday`,`newcday`,`oldtimes`,`newtimes`,`keys`,`tzxguser`) values (".$_obfuscate_jomPk5WKioeLipGGi4_PhpM�.",3,'".$_obfuscate_kI2Li4aJk4aMiIeSiIeUjIo�['username']."',".$_obfuscate_iJSNkomSi4qVlJOHlYuSi4k�.",".$_obfuscate_iI_QkZGJh4yRk4mIkYuOiYg�['cday'].",".$_obfuscate_k42Sho2GiIeHk42OjIaPipQ�.",".$_obfuscate_iI_QkZGJh4yRk4mIkYuOiYg�['points'].",'','".$_obfuscate_lI2KiouPkIaOj5OJiJSTiI4�."')";
    }
}
if ( 10001 < $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['pid'] && 0.5 < ( $_obfuscate_hpSOkJGOiZGNiJOPiY_ViZQ� + $_obfuscate_iZWHiZKQjpOJk5GKiJSPkpE� ) / $_obfuscate_ioyQkY6QhoeUjo6MjIaSkJM� )
{
    _obfuscate_lJCQjZSSkpSSiI2Sh42LjYk�( "304", "月付版客户总的赠送天数不能超出卡面天数的50%[ VAL_zsday / VAL_kmday ]", array( "VAL_zsday" => $_obfuscate_hpSOkJGOiZGNiJOPiY_ViZQ� + $_obfuscate_iZWHiZKQjpOJk5GKiJSPkpE�, "VAL_kmday" => $_obfuscate_ioyQkY6QhoeUjo6MjIaSkJM� ) );
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
$_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5U� = "update kss_z_key_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�." set `cztime`=".$_obfuscate_jomPk5WKioeLipGGi4_PhpM�.",`czusername`='".$_obfuscate_lI2KiouPkIaOj5OJiJSTiI4�."' where `keys` in ('".join( "','", $_obfuscate_jZCUjpOJiY6Iio_SiIyGk48� )."')";
$_obfuscate_kY2Qi5OGjImIh46TjZKNk48� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5U�, "sync" );
if ( $_obfuscate_kY2Qi5OGjImIh46TjZKNk48� !== TRUE )
{
    _obfuscate_h4aIlI6QlYmUkY6MlI6Qhos�( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5U�, $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4�( ), __FILE__, 402 );
    _obfuscate_lJCQjZSSkpSSiI2Sh42LjYk�( "305", "注册帐号失败：修改注册卡状态时出错VAL_sqlerr", array( "VAL_sqlerr" => $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4�( ) ) );
}
$_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSVjoiHkoeTlJSRiJGHiI0�( "kss_z_user_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�, $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�, "sync" );
if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� !== FALSE )
{
    if ( empty( $_obfuscate_lI6Oh5CKh42Ri5STio2HjpE� ) )
    {
        foreach ( $_obfuscate_lI6Oh5CKh42Ri5STio2HjpE� as $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI� )
        {
            $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�, "sync" );
            if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� !== TRUE )
            {
                _obfuscate_h4aIlI6QlYmUkY6MlI6Qhos�( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�, $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4�( ), __FILE__, 412 );
            }
        }
    }
    $_obfuscate_lI2HjIqUkYqTho2HiJWUk5I� .= "本帐号时间VAL_Aday天";
    $_obfuscate_kIaHkJSNhpOPi5OSh4eJlIY�['VAL_Aday'] = $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['cday'];
    $_obfuscate_lI2HjIqUkYqTho2HiJWUk5I� .= "VAL_Apoints点。";
    $_obfuscate_kIaHkJSNhpOPi5OSh4eJlIY�['VAL_Apoints'] = $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['points'];
    _obfuscate_lJCQjZSSkpSSiI2Sh42LjYk�( "307", "注册帐号成功，".$_obfuscate_lI2HjIqUkYqTho2HiJWUk5I�, $_obfuscate_kIaHkJSNhpOPi5OSh4eJlIY� );
}
else
{
    _obfuscate_lJCQjZSSkpSSiI2Sh42LjYk�( "306", "注册帐号失败！原因：VAL_sqlerr", array( "VAL_sqlerr" => $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4�( ) ) );
}
?>
