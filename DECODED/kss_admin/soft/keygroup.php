<?php
/*********************/
/*                   */
/*  Dezend for PHP5  */
/*         NWS       */
/*      Nulled.WS    */
/*                   */
/*********************/

function _obfuscate_kJGRiY6Mj5GMhoaTkYmQi5U�( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� = 1 )
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
$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU� = _obfuscate_iZSVk4mLkY_LlIeHh5WKlZA�( 8 );
$_obfuscate_k4mViI2Nj4mJkIuUj42JiIY� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "op", "gp", "sql", "" );
$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "softid", "gp", "int", 0 );
$_obfuscate_jZGRipSRkIeUiIeQjoaUjJI� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "select * from kss_tb_soft where `id`=".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE�." and `pid`=".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid'] );
if ( empty( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI� ) )
{
    _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "未找到该软件" );
}
if ( $_obfuscate_k4mViI2Nj4mJkIuUj42JiIY� == "del" )
{
    _obfuscate_kY6LiJGJiIiRiIuRjomOiZA�( );
    $_obfuscate_komRjo6Qi4_Rh5KHi5SLhpE� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "id", "gp", "int", 0 );
    $_obfuscate_joqKkIaJhouMkJWNlJSTjpU� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "select * from kss_tb_keyset where `id`=".$_obfuscate_komRjo6Qi4_Rh5KHi5SLhpE�." and `pid`=".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid'] );
    if ( empty( $_obfuscate_joqKkIaJhouMkJWNlJSTjpU� ) )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "你要删除的卡类似乎不存在或不是你能够管理的。" );
    }
    $_obfuscate_lZSKjoiKi4yLiYeTi4aIjJM� = base64_decode( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['zs_czset'] ).base64_decode( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['zs_tgset'] );
    if ( 0 < strpos( $_obfuscate_lZSKjoiKi4yLiYeTi4aIjJM�, $_obfuscate_joqKkIaJhouMkJWNlJSTjpU�['prefix'] ) )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "该软件参数设置，赠送策略里还有该卡类的信息，请手工删除后，再删卡类。" );
    }
    $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']( "select * from kss_z_key_".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE�." where `keyfix`='".$_obfuscate_joqKkIaJhouMkJWNlJSTjpU�['prefix']."' limit 0,1" );
    if ( empty( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� ) )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "为保证注册卡的正常统计，必须先删除该卡类的注册卡才可以删除该卡类<br>（批量删除注册卡可以到：【用户管理】->【批量加时.删除.导出.锁定】里操作）。" );
    }
    $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "delete from kss_tb_keyset where  `id`=".$_obfuscate_komRjo6Qi4_Rh5KHi5SLhpE�." and `pid`=".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid'], "sync" );
    if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� === FALSE )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "删除卡类时异常[执行delete语句时出错]".$_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4�( ) );
    }
    _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "delok" );
}
if ( $_obfuscate_k4mViI2Nj4mJkIuUj42JiIY� == "save" )
{
    _obfuscate_kY6LiJGJiIiRiIuRjomOiZA�( );
    if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] != 9 && $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid'] == 10001 && ( $_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE� == 146 || $_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE� == 147 ) )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "体验作者帐号，不允许添加或修改卡类" );
    }
    $_obfuscate_komRjo6Qi4_Rh5KHi5SLhpE� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "id", "gp", "int", 0 );
    $_obfuscate_lJSPi4mVjpGMkI2GkIiRkY0� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "keyname", "gp", "sqljs", "未命名" );
    if ( trim( $_obfuscate_lJSPi4mVjpGMkI2GkIiRkY0� ) == "" )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "卡类名不能为空" );
    }
    $_obfuscate_iYmHlIeIio2Ni5CRjIeJkYk� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "cday", "gp", "num", "0.00" );
    if ( $_obfuscate_iYmHlIeIio2Ni5CRjIeJkYk� <= 0 || 6000 < $_obfuscate_iYmHlIeIio2Ni5CRjIeJkYk� )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "天数要大于0小于6000，你填写的是".$_obfuscate_iYmHlIeIio2Ni5CRjIeJkYk� );
    }
    $_obfuscate_iYmHlIeIio2Ni5CRjIeJkYk� = sprintf( "%01.2f", $_obfuscate_iYmHlIeIio2Ni5CRjIeJkYk� );
    $_obfuscate_kJCVjoaIiYeKiI6UiYuIjYo� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "linknum", "gp", "int", 1 );
    if ( $_obfuscate_kJCVjoaIiYeKiI6UiYuIjYo� < 1 || 1000 < $_obfuscate_kJCVjoaIiYeKiI6UiYuIjYo� )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "通道数要大于0小于1000" );
    }
    if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['softmode2'] == 1 && 1 < $_obfuscate_kJCVjoaIiYeKiI6UiYuIjYo� )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "软件参数-&gt;解绑换机设置-&gt;任意登陆 是开启状态<br>在此状态时，为避免不必要的数据产生，通道数只能填写1" );
    }
    $_obfuscate_iI_TiI_HjoiGj4eIkZSIjog� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "points", "gp", "int", 0 );
    if ( $_obfuscate_iI_TiI_HjoiGj4eIkZSIjog� < 0 )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "次数要大于或等于0" );
    }
    $_obfuscate_jo6RiJOSjpOJlIyKjY6UkIk� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "extattr1", "gp", "sqljs", "" );
    if ( 100 < _obfuscate_ioqHi5WHiJKIkoeIhouHjYw�( $_obfuscate_jo6RiJOSjpOJlIyKjY6UkIk� ) )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "附属性长度必须小于100个字符" );
    }
    $_obfuscate_lZWSiYeUhpCHlJKQiYyUjYY� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "retailprice", "gp", "num", "0.00" );
    if ( $_obfuscate_lZWSiYeUhpCHlJKQiYyUjYY� < 0 )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "零售价不能小于0" );
    }
    $_obfuscate_lZWSiYeUhpCHlJKQiYyUjYY� = sprintf( "%01.2f", $_obfuscate_lZWSiYeUhpCHlJKQiYyUjYY� );
    $_obfuscate_iYaNkZKGlIqVjoySiJKLi4c� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "islock", "gp", "int", 0 );
    $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k� = array( "islock" => $_obfuscate_iYaNkZKGlIqVjoySiJKLi4c�, "keyname" => $_obfuscate_lJSPi4mVjpGMkI2GkIiRkY0�, "cday" => $_obfuscate_iYmHlIeIio2Ni5CRjIeJkYk�, "linknum" => $_obfuscate_kJCVjoaIiYeKiI6UiYuIjYo�, "points" => $_obfuscate_iI_TiI_HjoiGj4eIkZSIjog�, "extattr1" => $_obfuscate_jo6RiJOSjpOJlIyKjY6UkIk�, "retailprice" => $_obfuscate_lZWSiYeUhpCHlJKQiYyUjYY� );
    if ( $_obfuscate_komRjo6Qi4_Rh5KHi5SLhpE� == 0 )
    {
        $_obfuscate_lIeTkYqHioyIlJKMho6OiJE� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "prefix", "gp", "sql", "ABCD" );
        if ( preg_match( "/^[a-z0-9A-Z]{4,4}$/", $_obfuscate_lIeTkYqHioyIlJKMho6OiJE� ) )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "卡类前缀四位，只能有由大小写英文字母和数字组成" );
        }
        if ( preg_match( "/e|o|0|char/i", $_obfuscate_lIeTkYqHioyIlJKMho6OiJE�, $_obfuscate_i4_Kj5CPh4qKkYyHj42Qkoc� ) )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "卡类前缀不能有字符(e,E,o,O,0,char)：".$_obfuscate_i4_Kj5CPh4qKkYyHj42Qkoc�[0] );
        }
        $_obfuscate_ipCJj5OVjo2Qk4aLioyOlY4� = $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']( "select * from kss_tb_keyset where `pid`=".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']." and `softid`=".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE�." and `prefix`='".$_obfuscate_lIeTkYqHioyIlJKMho6OiJE�."'" );
        if ( empty( $_obfuscate_ipCJj5OVjo2Qk4aLioyOlY4� ) )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "卡类前缀已存在，请更换一个" );
        }
        $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['pid'] = $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid'];
        $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['softid'] = $_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE�;
        $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['prefix'] = $_obfuscate_lIeTkYqHioyIlJKMho6OiJE�;
        $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSVjoiHkoeTlJSRiJGHiI0�( "kss_tb_keyset", $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�, "sync" );
        if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� === FALSE )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "添加卡类失败[执行insert语句时出错]".$_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4�( ) );
        }
        $_obfuscate_koaTkJSOh5SKkoeNiZWJk4c� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_komUlJONiIqQk42JjYmOioY�( "kss_tb_keyset" );
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "addok".$_obfuscate_koaTkJSOh5SKkoeNiZWJk4c� );
    }
    else
    {
        $_obfuscate_joqKkIaJhouMkJWNlJSTjpU� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "select * from kss_tb_keyset where `id`=".$_obfuscate_komRjo6Qi4_Rh5KHi5SLhpE�." and `pid`=".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid'] );
        if ( empty( $_obfuscate_joqKkIaJhouMkJWNlJSTjpU� ) )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "你要编辑的卡类似乎不存在或不是你能够管理的。" );
        }
        $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k� = array_diff_assoc( $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�, $_obfuscate_joqKkIaJhouMkJWNlJSTjpU� );
        if ( empty( $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k� ) )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "没改参数别乱点保存 -_-!" );
        }
        $_obfuscate_io_Oh4eRj42VkIyLj4aLk5U� = array( "keyname" => 1, "cday" => 1, "linknum" => 1, "extattr1" => 1, "points" => 1 );
        $_obfuscate_jomJh46Mi4eTipKJiImPkZA� = array_intersect_key( $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�, $_obfuscate_io_Oh4eRj42VkIyLj4aLk5U� );
        if ( empty( $_obfuscate_jomJh46Mi4eTipKJiImPkZA� ) )
        {
            $_obfuscate_lIyRhoqSkpCHjYyJj4aIhpQ� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "select id from kss_tb_order where `orderstatus`<8 and keygroupid=".$_obfuscate_komRjo6Qi4_Rh5KHi5SLhpE�." limit 0,1" );
            if ( empty( $_obfuscate_lIyRhoqSkpCHjYyJj4aIhpQ� ) )
            {
                _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "操作中断：卡类名、天数、通道数、次数、附属性暂时不可更改。<br>原因：有未完成的订单使用的是该卡类，该操作会使数据紊乱。<br>解决方法：请先删除属于该卡类的未完成订单。" );
            }
        }
        $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iJOJipCPk4yQlJOMlIeTjYs�( "kss_tb_keyset", $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�, "id=".$_obfuscate_komRjo6Qi4_Rh5KHi5SLhpE�, "sync" );
        if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� === FALSE )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "保置设置出错[执行update语句时出错]".$_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4�( ) );
        }
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "saveok" );
    }
}
$_obfuscate_iYeIjIaVlYaIj4yTiJWHk40� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_lZGTiIiKhouKiZGLi5KUkI8�( "select * from kss_tb_keyset where `pid`=".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']." and `softid`=".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE� );
echo "<script type=\"text/javascript\">\r\n$(document).ready(function() { \r\n$(\"[savegroup=1]\").css('cursor','pointer').live('click',function(e){\r\nvar tid=$(this).attr(\"groupid\");\r\nvar thref='admin_soft.php?action=keygroup&isajax=1&op=save&softid=";
echo $_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE�;
echo "&id='+tid;\t\r\nthref=thref+'&keyname='+encodeURIComponent($(\"#keyname\"+tid).val());\t\r\nthref=thref+'&prefix='+$(\"#prefix\"+tid).val();\t\r\nthref=thref+'&cday='+$(\"#cday\"+tid).val();\t\r\nthref=thref+'&linknum='+$(\"#linknum\"+tid).val();\t\r\nthref=thref+'&points='+$(\"#points\"+tid).val();\t\r\nthref=thref+'&extattr1='+encodeURIComponent($(\"#extattra\"+tid).val());\t\r\nthref=thref+'&retailprice='+$(\"#retailprice\"+tid).val();\t\r\nthref=thref+'&islock='+$(\"#islock\"+tid+\":checked\").length;\r\nMouse(e);\r\n$.ajax({\r\nurl: thref,\r\ncache: false,\r\nsuccess: function(html){\r\nif(html=='saveok'){\r\nmview('卡类设置保存成功！',-10,200);\t\t\r\n}else{\r\nmalert(html);\r\n}\r\n},\r\nerror:function(XMLHttpRequest, textStatus, errorThrown) {\r\nalert(ourl)\r\n} \r\n});\r\n});\r\n$(\"[delgroup=1]\").css('cursor','pointer').live('click',function(e){\r\nvar tid=$(this).attr(\"groupid\");\r\nvar thref='admin_soft.php?action=keygroup&isajax=1&op=del&softid=";
echo $_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE�;
echo "&id='+tid;\t\r\nMouse(e);\r\n$.ajax({\r\nurl: thref,\r\ncache: false,\r\nsuccess: function(html){\r\nif(html=='delok'){\r\nmview('卡类删除成功！',-10,200);\r\n$(\"#trkeygroupid\"+tid).remove();\t\t\r\n}else{\r\nmalert(html);\r\n}\r\n},\r\nerror:function(XMLHttpRequest, textStatus, errorThrown) {\r\nalert(ourl)\r\n} \r\n});\r\n});\r\n$(\"#addgroup\").bind(\"click\",function(e){\r\nMouse(e);\r\n});\r\n$('#admin_addkeygroup').ajaxForm({\r\nbeforeSubmit:function (arr, \$form, options) { \r\nreturn true;\r\nvar usernameValue = $('input[name=username]').fieldValue();\r\nvar passwordValue = $('input[name=password]').fieldValue();\r\nif (!usernameValue[0] || !passwordValue[0]) { \r\nmalert('请填写完整用户名或密码','出错'); \r\nreturn false; \r\n} \r\nreturn true;\r\n},\r\nsuccess:function (responseText, statusText, xhr, \$form) {\r\nif(responseText.substr(0,5)!='addok'){\r\nmalert(responseText); \r\n}else{\r\n$(\"[nodata=1]\").remove();\r\nvar nkeyname=$(\"#keyname\").attr(\"value\");\r\nvar tid=responseText.substr(5);\r\ninsertdata='<tr class=\"trd\" id=\"trkeygroupid\"'+tid+'>';\r\ninsertdata=insertdata+'<td align=center><img src='+INSTALLPATH+'kss_inc/images/bd_drop.png malt=\"删除该卡类\" groupid=\"'+tid+'\" delgroup=1 >&nbsp;&nbsp;&nbsp;&nbsp;<img src='+INSTALLPATH+'kss_inc/images/b_save.png malt=\"保存该卡类的修改\" groupid=\"'+tid+'\" savegroup=1 ></td>';\r\ninsertdata=insertdata+'<td><input type=checkbox id=\"islock'+tid+'\" value=\"1\"></td>';\r\ninsertdata=insertdata+'<td><input type=text class=smlinput maxlength=\"20\" id=\"keyname'+tid+'\" value=\"'+nkeyname+'\"></td>';\r\ninsertdata=insertdata+'<td class=dwidth>'+$(\"#prefix\").val()+'</td>';\r\ninsertdata=insertdata+'<td><input type=text class=smlinput maxlength=\"6\" id=\"cday'+tid+'\" value=\"'+$(\"#cday\").val()+'\"></td>';\r\ninsertdata=insertdata+'<td><input type=text class=sml3input  maxlength=\"4\" id=\"linknum'+tid+'\" value=\"'+$(\"#linknum\").val()+'\"></td>';\r\ninsertdata=insertdata+'<td><input type=text class=sml3input maxlength=\"5\" id=\"points'+tid+'\" value=\"'+$(\"#points\").val()+'\"></td>';\r\ninsertdata=insertdata+'<td><input type=text class=midinput maxlength=\"100\" id=\"extattra'+tid+'\" value=\"'+$(\"#extattra\").val()+'\"></td>';\r\ninsertdata=insertdata+'<td><input type=text class=sml3input maxlength=\"7\" id=\"retailprice'+tid+'\" value=\"'+$(\"#retailprice\").val()+'\"></td>';\r\n\r\ninsertdata=insertdata+'</tr>';\r\n$(\"#admin_addkeygroup\").before(insertdata);\r\n$(\"#reset__\").click();\r\nmview('添加卡类成功，新的卡类已经加入到列表！',-10,-400); \r\n}\r\n}\r\n});\r\n\r\n\r\n});\r\n</script>\r\n\r\n<table class=\"listtable\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\" align=\"center\" width=\"97%\">\r\n<tr class=\"trhead\">\r\n<td width=60>操作</td>\r\n<td malt=\"为防止统计数据出错，注册卡类添加后不可以删除，只能停用，停用后的注册卡类将不可用，但之前生成的该类的卡不受影响\">停用</td>\r\n<td malt=\"注册卡的名字，例如周卡、月卡、年卡之类的\">注册卡名</td>\r\n<td malt=\"注册卡号的前四位字符，只能用英文字母和数字，英文字母区分大小写的，该项录入后不可修改\">前缀</td>\r\n<td malt=\"注册卡的有效天数或可充值天数\">天数</td>\r\n<td malt=\"注册卡的通道数，指用户能在多少电脑上同时登陆使用软件。<br>只有在软件参数-&gt;解绑换机设置-&gt;任意登陆未勾选状态，且你需要用户能同时在多台电脑上登陆的时候，通道数才需要填大于1的数字<br>\">通道数</td>\r\n<td malt=\"注册卡的可使用点数，以满足有些需要按次计费的软件\">点数</td>\r\n<td malt=\"注册卡的扩展属性，注册卡添加后就会拥有此属性，可以来实现一些特殊的功能\">附属性</td>\r\n<td malt=\"注册卡在销售站上显示的零售价\">零售价</td>\r\n\r\n</tr>\r\n";
if ( empty( $_obfuscate_iYeIjIaVlYaIj4yTiJWHk40� ) )
{
    echo "<tr nodata=1 class=trd><td colspan=9>没有任何卡类，请先添加</td></tr>";
}
else
{
    foreach ( $_obfuscate_iYeIjIaVlYaIj4yTiJWHk40� as $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI� )
    {
        $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['keyname'] = str_replace( "<", "《", htmlspecialchars_decode( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['keyname'] ) );
        $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['keyname'] = str_replace( ">", "》", htmlspecialchars_decode( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['keyname'] ) );
        $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['extattr1'] = str_replace( "<", "《", htmlspecialchars_decode( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['extattr1'] ) );
        $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['extattr1'] = str_replace( ">", "》", htmlspecialchars_decode( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['extattr1'] ) );
        echo "\r\n<tr class=\"trd\" id=\"trkeygroupid";
        echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['id'];
        echo "\">\r\n<td align=center><img src='";
        echo INSTALLPATH;
        echo "kss_inc/images/bd_drop.png' malt=\"删除该卡类。注意：只有该卡类没有注册卡的情况下才可以删除，如果有该卡类的注册卡，必须先删除该类注册卡然后才可以删除该卡类。\" groupid=\"";
        echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['id'];
        echo "\" delgroup=1>&nbsp;&nbsp;&nbsp;&nbsp;<img src='";
        echo INSTALLPATH;
        echo "kss_inc/images/b_save.png' malt=\"保存该卡类的修改\" groupid=\"";
        echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['id'];
        echo "\" savegroup=1></td>\r\n<td><input type=checkbox id=\"islock";
        echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['id'];
        echo "\" value=\"1\" ";
        echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['islock'] == 1 ? " checked" : "";
        echo "></td>\r\n<td><input type=text class=smlinput maxlength=\"20\" id=\"keyname";
        echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['id'];
        echo "\" value=\"";
        echo _obfuscate_j5CKkY_GkomSkoaUlIuLlYk�( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['keyname'] );
        echo "\" AUTOCOMPLETE=\"off\"></td>\r\n<td class=dwidth>";
        echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['prefix'];
        echo "</td>\r\n<td><input type=text class=smlinput maxlength=\"6\" id=\"cday";
        echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['id'];
        echo "\" value=\"";
        echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['cday'];
        echo "\" AUTOCOMPLETE=\"off\"></td>\r\n<td><input type=text class=sml3input  maxlength=\"4\" id=\"linknum";
        echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['id'];
        echo "\" value=\"";
        echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['linknum'];
        echo "\" AUTOCOMPLETE=\"off\"></td>\r\n<td><input type=text class=sml3input maxlength=\"8\" id=\"points";
        echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['id'];
        echo "\" value=\"";
        echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['points'];
        echo "\" AUTOCOMPLETE=\"off\"></td>\r\n<td><input type=text class=midinput maxlength=\"100\" id=\"extattra";
        echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['id'];
        echo "\" value=\"";
        echo _obfuscate_j5CKkY_GkomSkoaUlIuLlYk�( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['extattr1'] );
        echo "\" malt=\"";
        echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['extattr1'];
        echo "\"></td>\r\n<td><input type=text class=sml3input maxlength=\"7\" id=\"retailprice";
        echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['id'];
        echo "\" value=\"";
        echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['retailprice'];
        echo "\" AUTOCOMPLETE=\"off\"></td>\r\n\r\n</tr>\r\n";
    }
}
echo "<form id=\"admin_addkeygroup\" action=\"?action=keygroup&op=save&softid=";
echo $_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE�;
echo "\" method=\"post\"> \r\n<tr class=\"trd\" id=\"trkeygroupid\">\r\n<td><input type=\"hidden\" alt=\"ajax提交必须添加此项\" name=\"isajax\" value=\"1\" /><input type=submit class=submitbtn value=\"添加卡类\" id=\"addgroup\"><input type=reset id=\"reset__\" style=\"display:none\"></td>\r\n<td><input malt=\"为防止统计数据出错，注册卡类添加后不可以删除，只能锁定，锁定后的注册卡类将不可用，但之前生成的该类的卡不受影响\" type=checkbox id=\"islock\" name=\"islock\" value=\"1\"></td>\r\n<td><input malt=\"注册卡的名字，便如周卡、月卡、年卡之类的\" type=text class=smlinput maxlength=\"20\" id=\"keyname\" name=\"keyname\" value=\"\" AUTOCOMPLETE=\"off\"></td>\r\n<td><input malt=\"注册卡号的前四位字符，只能用英文字母和数字，英文字母区分大小写的，该项录入后不可修改\" type=text class=sml3input maxlength=\"4\" id=\"prefix\" name=\"prefix\" value=\"\" AUTOCOMPLETE=\"off\"></td>\r\n<td><input malt=\"注册卡的有效天数或可充值天数\" type=text class=smlinput maxlength=\"6\" id=\"cday\" name=\"cday\" value=\"\" AUTOCOMPLETE=\"off\"></td>\r\n<td><input malt=\"注册卡的通道数，指用户能在多少电脑上同时登陆使用软件。<br>只有在软件参数-&gt;解绑换机设置-&gt;任意登陆未勾选状态，且你需要用户能同时在多台电脑上登陆的时候，通道数才需要填大于1的数字<br>\" type=text class=sml3input  maxlength=\"4\" id=\"linknum\" name=\"linknum\" value=\"1\"></td>\r\n<td><input malt=\"注册卡的可用点数，以满足有些需要按次计费的软件\" type=text class=sml3input maxlength=\"8\" id=\"points\" name=\"points\" value=\"0\"></td>\r\n<td><input malt=\"注册卡的扩展属性，注册卡添加后就会拥有此属性，可以来实现一些特殊的功能\" type=text class=midinput maxlength=\"20\" id=\"extattra\" name=\"extattr1\" value=\"\"></td>\r\n<td><input malt=\"注册卡在销售站上显示的零售价\" type=text class=sml3input maxlength=\"7\" id=\"retailprice\" name=\"retailprice\" value=\"0.00\" AUTOCOMPLETE=\"off\"></td>\r\n\r\n</tr>\r\n</form>\r\n</table>\r\n";
$_obfuscate_i5GVjZWQj4ePkJKMjJSRipM�[] = _obfuscate_hpCTj4mKj5WSkpWPjouJkoc�( );
echo "<div id=pageruntime>页面运行时间"._obfuscate_i4mGjpKMk5WRipSVi4mLi40�( $_obfuscate_i5GVjZWQj4ePkJKMjJSRipM� )."毫秒</div>";
echo "</body>\r\n</html>";
?>
