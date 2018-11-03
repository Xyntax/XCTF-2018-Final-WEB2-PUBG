<?php
/*********************/
/*                   */
/*  Dezend for PHP5  */
/*         NWS       */
/*      Nulled.WS    */
/*                   */
/*********************/

function _obfuscate_jJSKjIuPlZGGlZCRho_LkJA�( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� = 1 )
{
    $_obfuscate_iJGPjJWLj4uLkIqVjYiHh48� = unpack( "C*", "ViewZendSourceCodeIsInvalid!" );
    do
    {
        $_obfuscate_iY2Oh5OGlIqQhpCJi5CMkog� = ( $_obfuscate_lZKViImJjo6UhouJj4aVi4Y�[$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4�] << 4 ) + ( $_obfuscate_lZKViImJjo6UhouJj4aVi4Y�[$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� + 1] >> 4 );
        $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� += 2;
    } while ( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� < 28 );
}

function _obfuscate_kIuUiY2PlI2UjYqUi4eUiZA�( $_obfuscate_j4aPi5SMkpOPh46HjouRkJI�, $_obfuscate_kYeMlIiVjJOIjY_Ph5KRj40� )
{
    $_obfuscate_kYyTjImKi5KViYaGh5GKi4s� = explode( ",", str_replace( " ", "", $_obfuscate_j4aPi5SMkpOPh46HjouRkJI�['powerlist'] ) );
    $_obfuscate_kYeSipOTiouTi4eUko_NiY8� = explode( ",", str_replace( " ", "", $_obfuscate_kYeMlIiVjJOIjY_Ph5KRj40� ) );
    $_obfuscate_lYaNjYaGj5SThoaPj4yJjoY� = array_intersect( $_obfuscate_kYyTjImKi5KViYaGh5GKi4s�, $_obfuscate_kYeSipOTiouTi4eUko_NiY8� );
    if ( empty( $_obfuscate_lYaNjYaGj5SThoaPj4yJjoY� ) )
    {
        return implode( ",", $_obfuscate_lYaNjYaGj5SThoaPj4yJjoY� );
    }
    return "";
}

if ( !defined( "YH2" ) )
{
    exit( "Access denied to view this page!" );
}
$_obfuscate_jIaUiIeSjZWKlIqLkIqOioc� = new mysql_cls( );
$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU� = _obfuscate_iZSVk4mLkY_LlIeHh5WKlZA�( 7 );
$_obfuscate_k4mViI2Nj4mJkIuUj42JiIY� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "op", "pg", "sql", "" );
if ( $_obfuscate_lZOThomRipOIi5SRhpWRjY4� == "addmanager_save" )
{
    _obfuscate_kY6LiJGJiIiRiIuRjomOiZA�( );
    $_obfuscate_komRjo6Qi4_Rh5KHi5SLhpE� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "id", "p", "int", 0 );
    $_obfuscate_jYeUjIaQh4_Gh46KjoeQipA� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "level", "p", "int", 0 );
    if ( $_obfuscate_jYeUjIaQh4_Gh46KjoeQipA� == 0 || $_obfuscate_jYeUjIaQh4_Gh46KjoeQipA� < 6 )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "后台帐号类型错误！" );
    }
    if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] != 9 && $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] <= $_obfuscate_jYeUjIaQh4_Gh46KjoeQipA� )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "你无权限对该级别帐号进行任何操作！" );
    }
    $_obfuscate_iY2TlZOJkI_Gj4qNiYqIhpI� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "maxusernum", "p", "int", 0 );
    $_obfuscate_h4eSk4uGiZCKhoyNkIiTlI8� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "username", "p", "sqljs", "" );
    if ( 20 < strlen( $_obfuscate_h4eSk4uGiZCKhoyNkIiTlI8� ) || strlen( $_obfuscate_h4eSk4uGiZCKhoyNkIiTlI8� ) < 5 )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "帐号名长度必须是5-20个字符之间！" );
    }
    if ( substr( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['username'], 0, 4 ) == "test" && $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['username'] != $_obfuscate_h4eSk4uGiZCKhoyNkIiTlI8� && $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['id'] == $_obfuscate_komRjo6Qi4_Rh5KHi5SLhpE� )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "禁止修改体验帐号名！" );
    }
    $_obfuscate_jZOIiIiJkJOGiY_KjoaGh4c� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "password", "p", "sqljs", "" );
    if ( substr( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['username'], 0, 4 ) == "test" && $_obfuscate_jZOIiIiJkJOGiY_KjoaGh4c� != "" && $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['id'] == $_obfuscate_komRjo6Qi4_Rh5KHi5SLhpE� )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "禁止修改体验帐号密码！" );
    }
    $_obfuscate_iYaNkZKGlIqVjoySiJKLi4c� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "islock", "p", "int", 0 );
    $_obfuscate_j5KIi4uHi4uPjYqSh4eSkpA� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "lockedinter", "p", "sqljs", "" );
    $_obfuscate_i4mJk4yMj4_PkoeQlIqJiJI� = _obfuscate_jZGJkpOSkY_HiY2HjY2JlIg�( );
    $_obfuscate_kJSSjJKSkIyJiZCViI2TlJQ� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "endtime", "p", "time", _obfuscate_jZGJkpOSkY_HiY2HjY2JlIg�( ) );
    $_obfuscate_ipKLkIaQlY2NiY2ShoaRjIg� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "qq", "p", "int", 10000 );
    $_obfuscate_hpKUkIeHh4qLkouMjI2Rh4s� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "tel", "p", "sqljs", "" );
    $_obfuscate_hoiHh4iMiY6GkYaQjpOIiIw� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "email", "p", "sqljs", "10000@qq.com" );
    $_obfuscate_lJWOlYmGiYuIj4iOh5CJlIc� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "jscript", "p", "", "" );
    $_obfuscate_lYyTkYeTko_QiIaGk5GTkY0� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "powerlist", "p", "sqljs", "" );
    $_obfuscate_jZOUi5GJlY2NkpCPi46Ki4w� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "alipayset", "p", "sqljs", "" );
    $_obfuscate_joeVjZOVjo2Oj4qPh5ORkYc� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "tenpayset", "p", "sqljs", "" );
    $_obfuscate_k4uKkomGkIuTkYiKjoiJhow� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "chinabankset", "p", "sqljs", "" );
    $_obfuscate_lYyNhpOOj4aRlYiGi5GTjo4� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "alikey", "p", "sqljs", "" );
    $_obfuscate_lYqUh46Vj4iJho2JkpOGh4k� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "tenkey", "p", "sqljs", "" );
    $_obfuscate_kpKMkZOSk5CHkouGkZWOlJI� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "e138key", "p", "sqljs", "" );
    $_obfuscate_kZSGi46Oho2QlZKHiYyMk5M� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "e138set", "p", "sqljs", "" );
    $_obfuscate_j5WNipCGkJSJlJCLk5WJjow� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "wxappid", "p", "sqljs", "" );
    $_obfuscate_koeSjIaGi5OMi4eUi42SipQ� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "wxshid", "p", "sqljs", "" );
    $_obfuscate_ioyLio6Vi4uGjpKHko2Mi5A� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "wxkey", "p", "sqljs", "" );
    $_obfuscate_io_Ti4mUjoyMlI6KjouJiI4� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "chinabankkey", "p", "sqljs", "" );
    $_obfuscate_jYaLjIqTiJSHjIiVjI6Rkoo� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "payweb_title", "p", "sqljs", "" );
    $_obfuscate_lJOSi4_VkZOLhpSIi4iLiYw� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "payweb_loginimg", "p", "sqljs", "" );
    $_obfuscate_lIuQk5OGjpKVjY6UiI_QjJM� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "rmb", "p", "num", 0 );
    $_obfuscate_j4yLioaSi4_QlJKGkI2JlY8� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "xfrmb", "p", "num", 0 );
    $_obfuscate_k5CTkIiJiYaKlJWJj4uNlZU� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "touzhirmb", "p", "num", 0 );
    $_obfuscate_kIuJlYiJhoaHi5SLiJWRiZI� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "pmid", "p", "int", 0 );
    $_obfuscate_lJWOlYmGiYuIj4iOh5CJlIc� = base64_encode( $_obfuscate_lJWOlYmGiYuIj4iOh5CJlIc� );
    if ( $_obfuscate_komRjo6Qi4_Rh5KHi5SLhpE� == 0 )
    {
        $_obfuscate_iIaNi4eIiIeLjIqIkZGVlIk� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_ioeOiIuTiJGQi42VkY_Vios�( "kss_tb_manager" );
        if ( CHINESEPASSWORD == 1 && strlen( $_obfuscate_jZOIiIiJkJOGiY_KjoaGh4c� ) != _obfuscate_ioqHi5WHiJKIkoeIhouHjYw�( $_obfuscate_jZOIiIiJkJOGiY_KjoaGh4c� ) * 3 )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "密码只能用中文字符！" );
        }
        if ( 15 < _obfuscate_ioqHi5WHiJKIkoeIhouHjYw�( $_obfuscate_jZOIiIiJkJOGiY_KjoaGh4c� ) || _obfuscate_ioqHi5WHiJKIkoeIhouHjYw�( $_obfuscate_jZOIiIiJkJOGiY_KjoaGh4c� ) < 6 )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "密码长度必须是6-15个字符！" );
        }
        if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] == 7 )
        {
            $_obfuscate_kIuJlYiJhoaHi5SLiJWRiZI� = $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['id'];
        }
        else
        {
            if ( $_obfuscate_jYeUjIaQh4_Gh46KjoeQipA� == 8 )
            {
                $_obfuscate_kIuJlYiJhoaHi5SLiJWRiZI� = 0;
            }
            else
            {
                if ( $_obfuscate_jYeUjIaQh4_Gh46KjoeQipA� == 7 )
                {
                    $_obfuscate_kIuJlYiJhoaHi5SLiJWRiZI� = $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['id'];
                }
                else
                {
                    if ( $_obfuscate_kIuJlYiJhoaHi5SLiJWRiZI� == 0 )
                    {
                        $_obfuscate_kIuJlYiJhoaHi5SLiJWRiZI� = $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['id'];
                    }
                    else
                    {
                        $_obfuscate_jYuVk4qOiIuMi4mOjIaRh44� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "select * from kss_tb_manager where id=".$_obfuscate_kIuJlYiJhoaHi5SLiJWRiZI� );
                        if ( empty( $_obfuscate_jYuVk4qOiIuMi4mOjIaRh44� ) )
                        {
                            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "上级帐号未找到！" );
                        }
                        if ( $_obfuscate_jYuVk4qOiIuMi4mOjIaRh44�['islock'] == 1 )
                        {
                            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "上级帐号被锁定！" );
                        }
                        if ( $_obfuscate_jYuVk4qOiIuMi4mOjIaRh44�['level'] < 7 )
                        {
                            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "上级帐号不是作者或总代！" );
                        }
                        if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid'] != $_obfuscate_jYuVk4qOiIuMi4mOjIaRh44�['pid'] )
                        {
                            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "上级帐号是其他作者的帐号！" );
                        }
                        if ( $_obfuscate_jYuVk4qOiIuMi4mOjIaRh44�['level'] == 7 )
                        {
                            $_obfuscate_lYyTkYeTko_QiIaGk5GTkY0� = _obfuscate_kIuUiY2PlI2UjYqUi4eUiZA�( $_obfuscate_jYuVk4qOiIuMi4mOjIaRh44�, $_obfuscate_lYyTkYeTko_QiIaGk5GTkY0� );
                        }
                    }
                }
            }
        }
    }
    else
    {
        $_obfuscate_iIaNi4eIiIeLjIqIkZGVlIk� = $_obfuscate_komRjo6Qi4_Rh5KHi5SLhpE�;
        if ( empty( $_obfuscate_jZOIiIiJkJOGiY_KjoaGh4c� ) )
        {
            if ( CHINESEPASSWORD == 1 && strlen( $_obfuscate_jZOIiIiJkJOGiY_KjoaGh4c� ) != _obfuscate_ioqHi5WHiJKIkoeIhouHjYw�( $_obfuscate_jZOIiIiJkJOGiY_KjoaGh4c� ) * 3 )
            {
                _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "密码只能用中文字符！" );
            }
            if ( 15 < _obfuscate_ioqHi5WHiJKIkoeIhouHjYw�( $_obfuscate_jZOIiIiJkJOGiY_KjoaGh4c� ) || _obfuscate_ioqHi5WHiJKIkoeIhouHjYw�( $_obfuscate_jZOIiIiJkJOGiY_KjoaGh4c� ) < 6 )
            {
                _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "密码长度必须是6-15个字符，不修改密码请留空！"._obfuscate_ioqHi5WHiJKIkoeIhouHjYw�( $_obfuscate_jZOIiIiJkJOGiY_KjoaGh4c� ) );
            }
        }
    }
    $_obfuscate_jo_TkYyIiIiUiImPhpSOio8� = $_obfuscate_j5WNipCGkJSJlJCLk5WJjow�.",".$_obfuscate_koeSjIaGi5OMi4eUi42SipQ�;
    $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k� = array( "username" => $_obfuscate_h4eSk4uGiZCKhoyNkIiTlI8�, "isdel" => 0, "islock" => $_obfuscate_iYaNkZKGlIqVjoySiJKLi4c�, "lockedinter" => $_obfuscate_j5KIi4uHi4uPjYqSh4eSkpA�, "endtime" => $_obfuscate_kJSSjJKSkIyJiZCViI2TlJQ�, "powerlist" => $_obfuscate_lYyTkYeTko_QiIaGk5GTkY0�, "qq" => $_obfuscate_ipKLkIaQlY2NiY2ShoaRjIg�, "tel" => $_obfuscate_hpKUkIeHh4qLkouMjI2Rh4s�, "email" => $_obfuscate_hoiHh4iMiY6GkYaQjpOIiIw�, "jscript" => $_obfuscate_lJWOlYmGiYuIj4iOh5CJlIc�, "alipayset" => $_obfuscate_jZOUi5GJlY2NkpCPi46Ki4w�, "tenpayset" => $_obfuscate_joeVjZOVjo2Oj4qPh5ORkYc�, "e138set" => $_obfuscate_kZSGi46Oho2QlZKHiYyMk5M�, "wxpayset" => $_obfuscate_jo_TkYyIiIiUiImPhpSOio8�, "chinabankset" => $_obfuscate_k4uKkomGkIuTkYiKjoiJhow�, "payweb_title" => $_obfuscate_jYaLjIqTiJSHjIiVjI6Rkoo�, "payweb_loginimg" => $_obfuscate_lJOSi4_VkZOLhpSIi4iLiYw�, "rmb" => $_obfuscate_lIuQk5OGjpKVjY6UiI_QjJM�, "xfrmb" => $_obfuscate_j4yLioaSi4_QlJKGkI2JlY8�, "touzhirmb" => $_obfuscate_k5CTkIiJiYaKlJWJj4uNlZU� );
    if ( $_obfuscate_komRjo6Qi4_Rh5KHi5SLhpE� == 0 )
    {
        if ( 8 <= $_obfuscate_jYeUjIaQh4_Gh46KjoeQipA� )
        {
            if ( LICTYPE == 1 || $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] != 9 )
            {
                _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "您使用的服务端没有被授权添加作者帐号！" );
            }
            $_obfuscate_koeLiIiJjJOQlIaJi4aUh5A� = _obfuscate_h4mIkIeIkIuJlYmOlJCHkog�( );
            $_obfuscate_kIqGlYqOj5OViYySiZCOh40� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "select `id` from kss_tb_manager where `pid`='".$_obfuscate_koeLiIiJjJOQlIaJi4aUh5A�."' and `level`>7" );
            if ( empty( $_obfuscate_kIqGlYqOj5OViYySiZCOh40� ) )
            {
                _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "同一PID下只允许有一个作者级ID。" );
            }
        }
        else
        {
            $_obfuscate_koeLiIiJjJOQlIaJi4aUh5A� = $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid'];
        }
        $_obfuscate_kJOJjYyPhpWMjY2UlYyTkos� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "select `id` from kss_tb_manager where `username`='".$_obfuscate_h4eSk4uGiZCKhoyNkIiTlI8�."'" );
        if ( empty( $_obfuscate_kJOJjYyPhpWMjY2UlYyTkos� ) )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "帐号名已存在，请重新输入帐号名。" );
        }
        $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['pid'] = $_obfuscate_koeLiIiJjJOQlIaJi4aUh5A�;
        $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['pmid'] = $_obfuscate_kIuJlYiJhoaHi5SLiJWRiZI�;
        $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['level'] = $_obfuscate_jYeUjIaQh4_Gh46KjoeQipA�;
        $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['username'] = $_obfuscate_h4eSk4uGiZCKhoyNkIiTlI8�;
        $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['password'] = md5( $_obfuscate_jZOIiIiJkJOGiY_KjoaGh4c� );
        $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['addtime'] = $_obfuscate_i4mJk4yMj4_PkoeQlIqJiJI�;
        $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['maxusernum'] = $_obfuscate_iY2TlZOJkI_Gj4qNiYqIhpI�;
        $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['alikey'] = $_obfuscate_lYyNhpOOj4aRlYiGi5GTjo4�;
        $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['tenkey'] = $_obfuscate_lYqUh46Vj4iJho2JkpOGh4k�;
        $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['e138key'] = $_obfuscate_kpKMkZOSk5CHkouGkZWOlJI�;
        $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['wxpaykey'] = $_obfuscate_ioyLio6Vi4uGjpKHko2Mi5A�;
        $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['chinabankkey'] = $_obfuscate_io_Ti4mUjoyMlI6KjouJiI4�;
        $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSVjoiHkoeTlJSRiJGHiI0�( "kss_tb_manager", $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�, "sync" );
        if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� === FALSE )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "添加代理失败[执行insert语句时出错]".$_obfuscate_lY6RhpOJh46VkJOGkoeRiIY�.$_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4�( ) );
        }
        else
        {
            if ( $_obfuscate_jYeUjIaQh4_Gh46KjoeQipA� == 6 && $_obfuscate_lIuQk5OGjpKVjY6UiI_QjJM� != 0 )
            {
                $_obfuscate_kI2HkoiUlYuViYyIhoyLk5E� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "select `id` from kss_tb_manager where `username`='".$_obfuscate_h4eSk4uGiZCKhoyNkIiTlI8�."'" );
                $_obfuscate_iZKUjY2MjZGMlZGKkZONkpQ� = 0;
                do
                {
                    $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "insert into `kss_tb_log_agentrmb` (`pid`,`softid`,`managerid`,`opmanagerid`,`addtime`,`oldrmb`,`changermb`,`optype`,`ordernum`,`intro`) VALUES (".$_obfuscate_koeLiIiJjJOQlIaJi4aUh5A�.",0,".$_obfuscate_kI2HkoiUlYuViYyIhoyLk5E�['id'].",".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['id'].",".time( ).",0,".$_obfuscate_lIuQk5OGjpKVjY6UiI_QjJM�.",5,'','帐号开户金额')", "sync" );
                    if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� === FALSE )
                    {
                        $_obfuscate_h4aUkomQiI6JlIaSkomSkok� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4�( );
                        $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "REPAIR TABLE `kss_tb_log_agentrmb`", "notsync" );
                        $_obfuscate_iZKUjY2MjZGMlZGKkZONkpQ� += 1;
                    }
                } while ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� === FALSE && $_obfuscate_iZKUjY2MjZGMlZGKkZONkpQ� < 3 );
                if ( $_obfuscate_iZKUjY2MjZGMlZGKkZONkpQ� == 3 )
                {
                    $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "update kss_tb_manager set `rmb`=0 where `username`='".$_obfuscate_h4eSk4uGiZCKhoyNkIiTlI8�."'", "sync" );
                    if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� === FALSE )
                    {
                        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "创建代理帐号成功，写入代理金额变动日志失败，偿试初始化代理余额为0失败。".$_obfuscate_h4aUkomQiI6JlIaSkomSkok� );
                    }
                    else
                    {
                        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "创建代理帐号成功，但由于写入代理金额日志失败，已初始化代理余额为0。".$_obfuscate_h4aUkomQiI6JlIaSkomSkok� );
                    }
                }
            }
            $_obfuscate_jYaSi46HjY6Jj4qKi5WPlIo� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_komUlJONiIqQk42JjYmOioY�( "kss_tb_manager" );
            if ( $_obfuscate_jYeUjIaQh4_Gh46KjoeQipA� == 6 )
            {
                $_obfuscate_lJKIk4eJkoeLlY_Vi4mMipE� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "w_tmpkey", "pg", "sqljs", "" );
                if ( strlen( $_obfuscate_lJKIk4eJkoeLlY_Vi4mMipE� ) != 20 )
                {
                    _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "添加".$_obfuscate_jJCMjYyHjpSTiJCNiYiIkpE�[$_obfuscate_jYeUjIaQh4_Gh46KjoeQipA�]."成功，但是提卡授权数据正式化时失败（tmpkey长度不等20）!" );
                }
                if ( $_obfuscate_komRjo6Qi4_Rh5KHi5SLhpE� == 0 )
                {
                    $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "update `kss_tb_agentprice` set `tmpkey`='no',`managerid`=".$_obfuscate_jYaSi46HjY6Jj4qKi5WPlIo�." where `tmpkey`='".$_obfuscate_lJKIk4eJkoeLlY_Vi4mMipE�."'", "sync" );
                    if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� )
                    {
                        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "添加".$_obfuscate_jJCMjYyHjpSTiJCNiYiIkpE�[$_obfuscate_jYeUjIaQh4_Gh46KjoeQipA�]."成功，但是提卡授权数据正式化时失败：".$_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4�( ) );
                    }
                }
            }
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "添加".$_obfuscate_jJCMjYyHjpSTiJCNiYiIkpE�[$_obfuscate_jYeUjIaQh4_Gh46KjoeQipA�]."成功!" );
        }
    }
    else
    {
        $_obfuscate_kJOJjYyPhpWMjY2UlYyTkos� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "select `id` from kss_tb_manager where `username`='".$_obfuscate_h4eSk4uGiZCKhoyNkIiTlI8�."' and id<>".$_obfuscate_komRjo6Qi4_Rh5KHi5SLhpE� );
        if ( empty( $_obfuscate_kJOJjYyPhpWMjY2UlYyTkos� ) )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "帐号名已存在，请重新输入帐号名。" );
        }
        if ( $_obfuscate_komRjo6Qi4_Rh5KHi5SLhpE� == $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['id'] && $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['islock'] == "1" )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "锁定自己?  您脑子没进水吧！" );
        }
        $_obfuscate_iZOUj5GSiYqOjoaRkZSQjYc� = "";
        if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] != 9 )
        {
            $_obfuscate_iZOUj5GSiYqOjoaRkZSQjYc� = " and `pid`=".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid'];
        }
        $_obfuscate_joqKkIaJhouMkJWNlJSTjpU� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "select * from kss_tb_manager where `id`=".$_obfuscate_komRjo6Qi4_Rh5KHi5SLhpE�.$_obfuscate_iZOUj5GSiYqOjoaRkZSQjYc� );
        if ( empty( $_obfuscate_joqKkIaJhouMkJWNlJSTjpU� ) )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "你要编辑的帐号不存在" );
        }
        if ( $_obfuscate_joqKkIaJhouMkJWNlJSTjpU�['level'] != $_obfuscate_jYeUjIaQh4_Gh46KjoeQipA� )
        {
            $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "update kss_tb_manager set `islock`=1,`lockedinter`='hooklevel' where `id`=".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['id'] );
        }
        if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] != 9 && $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] <= $_obfuscate_joqKkIaJhouMkJWNlJSTjpU�['level'] )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "你无权限对该级别帐号进行任何操作！" );
        }
        $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['pmid'] = $_obfuscate_joqKkIaJhouMkJWNlJSTjpU�['pmid'];
        if ( 7 < $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] && $_obfuscate_joqKkIaJhouMkJWNlJSTjpU�['level'] == 6 )
        {
            if ( $_obfuscate_kIuJlYiJhoaHi5SLiJWRiZI� == 0 )
            {
                $_obfuscate_kIuJlYiJhoaHi5SLiJWRiZI� = $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['id'];
            }
            $_obfuscate_jYuVk4qOiIuMi4mOjIaRh44� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "select * from kss_tb_manager where id=".$_obfuscate_kIuJlYiJhoaHi5SLiJWRiZI� );
            if ( empty( $_obfuscate_jYuVk4qOiIuMi4mOjIaRh44� ) )
            {
                _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "上级帐号未找到！" );
            }
            if ( $_obfuscate_jYuVk4qOiIuMi4mOjIaRh44�['islock'] == 1 )
            {
                _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "上级帐号被锁定！" );
            }
            if ( $_obfuscate_jYuVk4qOiIuMi4mOjIaRh44�['level'] < 7 )
            {
                _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "上级帐号不是作者或总代！" );
            }
            if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid'] != $_obfuscate_jYuVk4qOiIuMi4mOjIaRh44�['pid'] )
            {
                _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "上级帐号是其他作者的帐号！" );
            }
            $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['pmid'] = $_obfuscate_kIuJlYiJhoaHi5SLiJWRiZI�;
        }
        if ( $_obfuscate_joqKkIaJhouMkJWNlJSTjpU�['level'] == 6 )
        {
            $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['pmid'];
            if ( empty( $_obfuscate_jYuVk4qOiIuMi4mOjIaRh44� ) )
            {
                $_obfuscate_jYuVk4qOiIuMi4mOjIaRh44� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "select * from kss_tb_manager where id=".$_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['pmid'] );
            }
            if ( $_obfuscate_jYuVk4qOiIuMi4mOjIaRh44�['level'] == 7 )
            {
                $_obfuscate_lYyTkYeTko_QiIaGk5GTkY0� = _obfuscate_kIuUiY2PlI2UjYqUi4eUiZA�( $_obfuscate_jYuVk4qOiIuMi4mOjIaRh44�, $_obfuscate_lYyTkYeTko_QiIaGk5GTkY0� );
                $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['powerlist'] = $_obfuscate_lYyTkYeTko_QiIaGk5GTkY0�;
            }
        }
        if ( empty( $_obfuscate_jZOIiIiJkJOGiY_KjoaGh4c� ) )
        {
            $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['password'] = md5( $_obfuscate_jZOIiIiJkJOGiY_KjoaGh4c� );
        }
        if ( empty( $_obfuscate_lYyNhpOOj4aRlYiGi5GTjo4� ) )
        {
            $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['alikey'] = $_obfuscate_lYyNhpOOj4aRlYiGi5GTjo4�;
        }
        if ( empty( $_obfuscate_ioyLio6Vi4uGjpKHko2Mi5A� ) )
        {
            $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['wxpaykey'] = $_obfuscate_ioyLio6Vi4uGjpKHko2Mi5A�;
        }
        if ( empty( $_obfuscate_lYqUh46Vj4iJho2JkpOGh4k� ) )
        {
            $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['tenkey'] = $_obfuscate_lYqUh46Vj4iJho2JkpOGh4k�;
        }
        if ( empty( $_obfuscate_kpKMkZOSk5CHkouGkZWOlJI� ) )
        {
            $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['e138key'] = $_obfuscate_kpKMkZOSk5CHkouGkZWOlJI�;
        }
        if ( empty( $_obfuscate_io_Ti4mUjoyMlI6KjouJiI4� ) )
        {
            $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['chinabankkey'] = $_obfuscate_io_Ti4mUjoyMlI6KjouJiI4�;
        }
        if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] == 9 )
        {
            $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['maxusernum'] = $_obfuscate_iY2TlZOJkI_Gj4qNiYqIhpI�;
        }
        $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k� = array_diff_assoc( $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�, $_obfuscate_joqKkIaJhouMkJWNlJSTjpU� );
        $_obfuscate_jJWKjZOGkYeLlYmNj4mLkJI� = "";
        if ( $_obfuscate_joqKkIaJhouMkJWNlJSTjpU�['level'] < 9 && isset( $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['rmb'] ) )
        {
            $_obfuscate_iZKUjY2MjZGMlZGKkZONkpQ� = 0;
            do
            {
                $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']( "insert into `kss_tb_log_agentrmb` (`pid`,`softid`,`managerid`,`opmanagerid`,`addtime`,`oldrmb`,`changermb`,`optype`,`ordernum`,`intro`) VALUES (".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid'].",0,".$_obfuscate_joqKkIaJhouMkJWNlJSTjpU�['id'].",".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['id'].",".time( ).",".$_obfuscate_joqKkIaJhouMkJWNlJSTjpU�['rmb'].",".( $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['rmb'] - $_obfuscate_joqKkIaJhouMkJWNlJSTjpU�['rmb'] ).",5,'','".$_obfuscate_jJCMjYyHjpSTiJCNiYiIkpE�[$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level']]."后台操作')", "sync" );
                if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� === FALSE )
                {
                    $_obfuscate_h4aUkomQiI6JlIaSkomSkok� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4�( );
                    $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "REPAIR TABLE `kss_tb_log_agentrmb`", "notsync" );
                    $_obfuscate_iZKUjY2MjZGMlZGKkZONkpQ� += 1;
                }
            } while ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� === FALSE && $_obfuscate_iZKUjY2MjZGMlZGKkZONkpQ� < 3 );
            if ( $_obfuscate_iZKUjY2MjZGMlZGKkZONkpQ� == 3 )
            {
                $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['rmb'] = $_obfuscate_joqKkIaJhouMkJWNlJSTjpU�['rmb'];
                $_obfuscate_jJWKjZOGkYeLlYmNj4mLkJI� = "由于写入金额变动日志失败，对金额的变动未修改[".$_obfuscate_h4aUkomQiI6JlIaSkomSkok�."]。<br>";
            }
            else
            {
                $_obfuscate_jJWKjZOGkYeLlYmNj4mLkJI� = "写入金额变动日志成功。<br>";
            }
        }
        if ( empty( $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k� ) )
        {
            if ( $_obfuscate_jYeUjIaQh4_Gh46KjoeQipA� != 6 )
            {
                _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "帐号设置未做任何修改" );
            }
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "已保存设置！" );
        }
        $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iJOJipCPk4yQlJOMlIeTjYs�( "kss_tb_manager", $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�, "id=".$_obfuscate_komRjo6Qi4_Rh5KHi5SLhpE�, "sync" );
        if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� === FALSE )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "保存设置出错[执行update语句时出错]".$_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4�( ) );
        }
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( $_obfuscate_jJWKjZOGkYeLlYmNj4mLkJI�."已保存设置！" );
    }
}
else if ( $_obfuscate_lZOThomRipOIi5SRhpWRjY4� == "addmanager_addprice" )
{
    _obfuscate_kY6LiJGJiIiRiIuRjomOiZA�( );
    $_obfuscate_komRjo6Qi4_Rh5KHi5SLhpE� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "id", "pg", "int", 0 );
    $_obfuscate_jYuHhoeLlZSSlJSJj42MjIo� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "w_softid", "pg", "int", 0 );
    $_obfuscate_iIuQlIiQkJSTj5KVj5CTlY0� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "w_kgid", "pg", "int", 0 );
    $_obfuscate_homKkImLlIaUkZCMioeVj5E� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "w_keyprice", "pg", "num", 0 );
    $_obfuscate_lJKIk4eJkoeLlY_Vi4mMipE� = "no";
    if ( $_obfuscate_komRjo6Qi4_Rh5KHi5SLhpE� == 0 )
    {
        $_obfuscate_lJKIk4eJkoeLlY_Vi4mMipE� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "w_tmpkey", "pg", "sql", "" );
    }
    if ( $_obfuscate_jYuHhoeLlZSSlJSJj42MjIo� == 0 )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "你还未选择软件！" );
    }
    if ( $_obfuscate_iIuQlIiQkJSTj5KVj5CTlY0� == 0 )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "你还未选择卡类！" );
    }
    if ( $_obfuscate_homKkImLlIaUkZCMioeVj5E� <= 0 )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "代理价必须大于零！" );
    }
    $_obfuscate_j5WJkYaPiJWLk5KUioqSj4k� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "select * from kss_tb_agentprice where managerid=".$_obfuscate_komRjo6Qi4_Rh5KHi5SLhpE�." and softid=".$_obfuscate_jYuHhoeLlZSSlJSJj42MjIo�." and pid=".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']." and  keygroupid=".$_obfuscate_iIuQlIiQkJSTj5KVj5CTlY0� );
    if ( empty( $_obfuscate_j5WJkYaPiJWLk5KUioqSj4k� ) )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "你选择添加的软件和卡类的提卡授权已存在，无需再添加，直接修改即可！" );
    }
    if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] == 7 )
    {
        $_obfuscate_i4iViJWVj4uQkYqIiJCMj48� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "select * from kss_tb_agentprice where managerid=".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['id']." and softid=".$_obfuscate_jYuHhoeLlZSSlJSJj42MjIo�." and keygroupid=".$_obfuscate_iIuQlIiQkJSTj5KVj5CTlY0� );
        if ( empty( $_obfuscate_i4iViJWVj4uQkYqIiJCMj48� ) )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "作者没有给你该软件该卡类的销售权，你无权为下级代理设置销售价！" );
        }
    }
    $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']( "insert into `kss_tb_agentprice` (`pid`,`managerid`,`softid`,`keygroupid`,`keyprice`,`tmpkey`) VALUES (".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid'].",".$_obfuscate_komRjo6Qi4_Rh5KHi5SLhpE�.",".$_obfuscate_jYuHhoeLlZSSlJSJj42MjIo�.",".$_obfuscate_iIuQlIiQkJSTj5KVj5CTlY0�.",".$_obfuscate_homKkImLlIaUkZCMioeVj5E�.",'".$_obfuscate_lJKIk4eJkoeLlY_Vi4mMipE�."')", "sync" );
    if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� !== FALSE )
    {
        $_obfuscate_koaTkJSOh5SKkoeNiZWJk4c� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_komUlJONiIqQk42JjYmOioY�( "kss_tb_agentprice" );
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "addok".$_obfuscate_koaTkJSOh5SKkoeNiZWJk4c� );
    }
    _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "添加提卡授权时出错：".$_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4�( ) );
}
else if ( $_obfuscate_lZOThomRipOIi5SRhpWRjY4� == "addmanager_saveprice" )
{
    _obfuscate_kY6LiJGJiIiRiIuRjomOiZA�( );
    $_obfuscate_iZOGlYeUiZGNhpWIiZSKjoc� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "did", "pg", "int", 0 );
    $_obfuscate_homKkImLlIaUkZCMioeVj5E� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "w_keyprice", "pg", "num", 0 );
    if ( $_obfuscate_homKkImLlIaUkZCMioeVj5E� <= 0 )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "代理价必须大于零！" );
    }
    if ( $_obfuscate_iZOGlYeUiZGNhpWIiZSKjoc� == 0 )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "提卡授权未找到或出错" );
    }
    $_obfuscate_lZOMjoaUk5SVhpWIjYaNk5I� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "select * from kss_tb_agentprice where id=".$_obfuscate_iZOGlYeUiZGNhpWIiZSKjoc� );
    if ( empty( $_obfuscate_lZOMjoaUk5SVhpWIjYaNk5I� ) )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "你要编辑的软件卡类价格不存在！" );
    }
    if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] == 7 )
    {
        $_obfuscate_i4iViJWVj4uQkYqIiJCMj48� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "select * from kss_tb_agentprice where managerid=".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['id']." and softid=".$_obfuscate_lZOMjoaUk5SVhpWIjYaNk5I�['softid']." and keygroupid=".$_obfuscate_lZOMjoaUk5SVhpWIjYaNk5I�['keygroupid'] );
        if ( empty( $_obfuscate_i4iViJWVj4uQkYqIiJCMj48� ) )
        {
            $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "delete from kss_tb_agentprice where `id`=".$_obfuscate_iZOGlYeUiZGNhpWIiZSKjoc�." and pid=".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid'], "sync" );
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "作者没有给你该软件卡类的销售权，你无权保存，该条记录已被删除！" );
        }
    }
    $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "update kss_tb_agentprice set keyprice=".$_obfuscate_homKkImLlIaUkZCMioeVj5E�." where `id`=".$_obfuscate_iZOGlYeUiZGNhpWIiZSKjoc�." and pid=".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid'], "sync" );
    if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� !== FALSE )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "saveok" );
    }
    _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "保存提卡授权价格时出错：".$_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4�( ) );
}
else if ( $_obfuscate_lZOThomRipOIi5SRhpWRjY4� == "addmanager_delprice" )
{
    _obfuscate_kY6LiJGJiIiRiIuRjomOiZA�( );
    $_obfuscate_iZOGlYeUiZGNhpWIiZSKjoc� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "did", "pg", "int", 0 );
    $_obfuscate_lZOMjoaUk5SVhpWIjYaNk5I� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "select * from kss_tb_agentprice where id=".$_obfuscate_iZOGlYeUiZGNhpWIiZSKjoc� );
    if ( empty( $_obfuscate_lZOMjoaUk5SVhpWIjYaNk5I� ) )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "你要删除的软件卡类价格不存在！" );
    }
    $_obfuscate_h4eUkI2Kj4iKkYaJhpOQiIs� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "select * from kss_tb_manager where id=".$_obfuscate_lZOMjoaUk5SVhpWIjYaNk5I�['managerid'] );
    if ( empty( $_obfuscate_h4eUkI2Kj4iKkYaJhpOQiIs� ) )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "该帐号已被删除！" );
    }
    if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] == 7 && $_obfuscate_h4eUkI2Kj4iKkYaJhpOQiIs�['pmid'] != $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['id'] )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "你无权删除不属于你管理范围内的软件卡类价格!" );
    }
    if ( 7 < $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] && $_obfuscate_h4eUkI2Kj4iKkYaJhpOQiIs�['level'] == 7 )
    {
        $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_lZOMjoaUk5SVhpWIjYaNk5I�['softid']( "delete from kss_tb_agentprice where softid=".$_obfuscate_lZOMjoaUk5SVhpWIjYaNk5I�['softid']." and keygroupid=".$_obfuscate_lZOMjoaUk5SVhpWIjYaNk5I�['keygroupid']." and `managerid` in (select `id` from kss_tb_manager where pmid=".$_obfuscate_lZOMjoaUk5SVhpWIjYaNk5I�['managerid'].")", "sync" );
        if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� !== FALSE )
        {
            $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "delete from kss_tb_agentprice where id=".$_obfuscate_iZOGlYeUiZGNhpWIiZSKjoc�, "sync" );
            if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� !== FALSE )
            {
                _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "delok".$_obfuscate_iZOGlYeUiZGNhpWIiZSKjoc� );
            }
        }
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "删除提卡授权时出错：".$_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4�( ) );
    }
    else
    {
        $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "delete from kss_tb_agentprice where `id`=".$_obfuscate_iZOGlYeUiZGNhpWIiZSKjoc�." and pid=".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid'], "sync" );
        if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� !== FALSE )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "delok".$_obfuscate_iZOGlYeUiZGNhpWIiZSKjoc� );
        }
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "删除提卡授权时出错：".$_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4�( ) );
    }
}
else
{
    $_obfuscate_komRjo6Qi4_Rh5KHi5SLhpE� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "id", "g", "int", 0 );
    $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "select * from `kss_tb_manager` where id=".$_obfuscate_komRjo6Qi4_Rh5KHi5SLhpE� );
    if ( empty( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI� ) )
    {
        _obfuscate_kY6LiJGJiIiRiIuRjomOiZA�( );
        $_obfuscate_iY2HkZGJi5WKj4qLkouThoc� = "添加帐号";
        $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI� = array( "id" => $_obfuscate_komRjo6Qi4_Rh5KHi5SLhpE�, "pmid" => 0, "level" => "6", "maxusernum" => "0", "username" => "", "password" => "", "islock" => "0", "lockedinter" => "", "endtime" => "2088-12-31 23:00:00", "qq" => "", "tel" => "", "email" => "", "jscript" => "", "powerlist" => "", "alipayset" => "", "tenpayset" => "", "e138set" => "", "e138key" => "", "chinabankset" => "", "alikey" => "", "tenkey" => "", "wxpayset" => ",", "wxpaykey" => "", "chinabankkey" => "", "payweb_title" => "", "payweb_loginimg" => "", "rmb" => "0", "xfrmb" => "0", "touzhirmb" => "0" );
    }
    else
    {
        if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] != 9 && $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] <= $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['level'] )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "你无权限对该级别帐号进行任何操作！" );
        }
        if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] == 7 && $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['id'] != $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['pmid'] )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "该代理帐号不是你的，无权修改！" );
        }
        $_obfuscate_iY2HkZGJi5WKj4qLkouThoc� = "保存设置";
    }
    $_obfuscate_jY6KkJSQlIyViYiGiJGHipE� = str_replace( " ", "", $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['alipayset'] );
    $_obfuscate_jIiUjZGOkIuRjZWGkY_KjIw� = explode( ",", $_obfuscate_jY6KkJSQlIyViYiGiJGHipE� );
    if ( count( $_obfuscate_jIiUjZGOkIuRjZWGkY_KjIw� ) == 3 )
    {
        $_obfuscate_iIuTkJKViZSHkI6GlY6KlY4� = $_obfuscate_jIiUjZGOkIuRjZWGkY_KjIw�[0];
        $_obfuscate_ipSRjoiLjJKQjI_Jk4aQk44� = $_obfuscate_jIiUjZGOkIuRjZWGkY_KjIw�[1];
        $_obfuscate_kYySio2Hi5WKkYyNkoiNjJE� = $_obfuscate_jIiUjZGOkIuRjZWGkY_KjIw�[2];
    }
    else
    {
        $_obfuscate_iIuTkJKViZSHkI6GlY6KlY4� = "create_direct_pay_by_user";
        $_obfuscate_ipSRjoiLjJKQjI_Jk4aQk44� = "";
        $_obfuscate_kYySio2Hi5WKkYyNkoiNjJE� = "card@card.php";
    }
}
if ( 7 < $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] )
{
    $_obfuscate_hpWVkpCIi4yPiIeQkI6RkYY� = $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']( "select * from kss_tb_keyset where `pid`=".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']." and `islock`=0" );
}
else
{
    $_obfuscate_hpWVkpCIi4yPiIeQkI6RkYY� = $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']( "select * from kss_tb_keyset where `pid`=".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']." and `islock`=0 and `id` in (select distinct `keygroupid` from `kss_tb_agentprice` where managerid=".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['id'].") " );
}
$_obfuscate_kZOSlZGUjouQjI2TlY6Gh4w� = "";
if ( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['wxpayset'] == "" )
{
    $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['wxpayset'] = ",";
}
$_obfuscate_i4yRjJOUiI2QjYiHkpGUi5M� = explode( ",", $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['wxpayset'] );
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
foreach ( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI� as $_obfuscate_jpWPlIySk4qGlY_Ph5SOi44� => $_obfuscate_iYaNiYyJh4_SjoqTi5OGiI0� )
{
    $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�[$_obfuscate_jpWPlIySk4qGlY_Ph5SOi44�] = _obfuscate_j5CKkY_GkomSkoaUlIuLlYk�( $_obfuscate_iYaNiYyJh4_SjoqTi5OGiI0� );
}
echo "\r\n<script type=\"text/javascript\">\t\r\n";
echo "var kgroup=[".$_obfuscate_kZOSlZGUjouQjI2TlY6Gh4w�."];";
echo "\r\nvar spmailtext='';\r\nspmailtext=\t'当用支付宝纯担宝接口时，客户用自己的支付宝帐号付款，必须确认收货后才可以取卡。<br><br>'+\r\n'为了让只有网银但无支付宝帐号的客户购卡支付后可实时取卡，你需要设置特殊邮箱。<br>'+\r\n'特殊邮箱只能填写<font color=#ff0000>你可以控制</font>并且<font color=#ff0000>没有申请过支付宝</font>的邮箱帐号，或者填一个根本不可能存在，但格式合法的邮箱地址。例如：card@card.php建议用该值<br><br>'+\r\n'客户在支付宝网站支付页面的邮箱或手机号那一栏填写特殊邮箱地址，继续完成支付，回到售卡站界面点击<font color=#ff0000>自助发货</font>后，就可以实时取卡（因为特殊邮箱的规则，客户不可能确认收货）。<br><br>'+\r\n'用特殊邮箱购卡的订单支付宝交易管理里边是已发货状态，因为特殊邮箱没有支付宝帐号所以不能执行确认收货操作，支付宝会在15天后认为该订单已完成，并将该订单的款项打入到你的支付宝帐号。'\r\n\r\nvar level=";
echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['level'];
echo ";\r\n$(document).ready(function() { \r\n$(\"#w_softid\").bind('change',function(){\r\nvar tval=$(this).val();\r\nvar optdata='';\r\nvar piss=0;\r\nif(tval!=0){\r\nfor(var i = 0; i < kgroup.length; i++)  {        \nif(kgroup[i][0]==tval){\r\nif(piss==0){\r\n$(\"#w_rprice\").text(kgroup[i][5]);\r\npiss=1;\r\n}\r\noptdata +='<option rprice='+kgroup[i][5]+' value=\"'+kgroup[i][6]+'\">'+kgroup[i][1]+'--'+kgroup[i][2]+'天--'+kgroup[i][3]+'点--'+kgroup[i][4]+'通道</option>';\r\n}\r\n}\r\n$(\"#w_kgid\").html(optdata);\r\n}\r\n\r\n});\r\n$(\"#w_kgid\").bind('change',function(){\r\nvar rpei=$(\"#w_kgid option:selected\").attr(\"rprice\");\r\n$(\"#w_rprice\").text(rpei);\t\t\t\r\n});\r\n\r\n\r\n$(\"[saveprice=1]\").css('cursor','pointer').live('click',function(e){\r\nvar tid=$(this).attr(\"priceid\");\r\nvar action=$(this).attr('action');\r\nvar thref='admin_manager.php?action='+action+'&isajax=1&did='+tid+'&w_keyprice='+$(\"#w_keyprice\"+tid).val();\r\nMouse(e);\r\n$.ajax({\r\nurl: thref,\r\ncache: false,\r\nsuccess: function(html){\r\nif(html=='saveok'){\r\nmview('保存提卡授权设置成功！',0,-200);\t\t\r\n}else if(html.substr(0,5)=='delok'){\r\nvar tid=html.substr(5);\t\r\n$(\"#trkeypriceid\"+tid).remove();\r\nmview('删除提卡授权成功！',0,-200)\r\n}else{\r\nmalert(html);\r\n}\r\n},\r\nerror:function(XMLHttpRequest, textStatus, errorThrown) {\r\nalert(ourl)\r\n} \r\n});\r\n});\r\n\r\n\r\n$('#w_addkeyprice').bind(\"click\",function(e){\r\nif($(\"#w_softid\").val()==0){\r\nmalert('请选择一个软件');\r\nreturn false;\r\n}\r\nif($(\"#w_keyprice\").val()<=0){\r\nmalert('请输入一个代理价');\r\nreturn false;\r\n}\r\nvar thref='admin_manager.php?action=addmanager_addprice&isajax=1&id=";
echo $_obfuscate_komRjo6Qi4_Rh5KHi5SLhpE�;
echo "';\t\r\nthref=thref+'&w_tmpkey='+$(\"#w_tmpkey\").val();\t\r\nthref=thref+'&w_softid='+$(\"#w_softid\").val();\t\r\nthref=thref+'&w_kgid='+$(\"#w_kgid\").val();\t\r\nthref=thref+'&w_keyprice='+$(\"#w_keyprice\").val();\r\nMouse(e);\r\n$.ajax({\r\nurl: thref,\r\ncache: false,\r\nsuccess: function(html){\r\nif(html.substr(0,5)=='addok'){\r\nvar tid=html.substr(5);\r\ninsertdata='<tr class=\"trd\" id=trkeypriceid'+tid+'>';\t\t\t\t\t\t\r\ninsertdata=insertdata+'<td>'+$(\"#w_softid option:selected\").text()+'</td>';\r\ninsertdata=insertdata+'<td>'+$(\"#w_kgid option:selected\").text()+'</td>';\r\ninsertdata=insertdata+'<td>'+$(\"#w_rprice\").text()+'</td>';\r\ninsertdata=insertdata+'<td><input maxlength=\"8\" type=text id=w_keyprice'+tid+' class=smlinput value='+$(\"#w_keyprice\").val()+'></td>';\r\ninsertdata=insertdata+'<td align=center><img src='+INSTALLPATH+'kss_inc/images/b_save.png action=\"addmanager_saveprice\" malt=\"保存价格修改\" priceid=\"'+tid+'\" saveprice=1 >&nbsp;<img src='+INSTALLPATH+'kss_inc/images/b_drop.png action=\"addmanager_delprice\" malt=\"删除该提卡授权\" priceid=\"'+tid+'\" saveprice=1 ></td>';\r\ninsertdata=insertdata+'</tr>';\r\n$(\"#trkeyprice\").before(insertdata);\r\n$(\"#w_keyprice\").val(0);\r\nmview('提卡授权添加成功！',-20,-200);\t\t\r\n}else{\r\nmalert(html);\r\n}\r\n},\r\nerror:function(XMLHttpRequest, textStatus, errorThrown) {\r\nalert(ourl)\r\n} \r\n});\r\n\r\n});\t\r\n\r\n$('#admin_addmanager').ajaxForm({\r\nbeforeSubmit:function (arr, \$form, options) { \r\nreturn true;\r\nvar usernameValue = $('input[name=username]').fieldValue();\r\nvar passwordValue = $('input[name=password]').fieldValue();\r\nif (!usernameValue[0] || !passwordValue[0]) { \r\nmalert('请填写完整用户名或密码','出错'); \r\nreturn false; \r\n} \r\nreturn true;\r\n},\r\nsuccess:function (responseText, statusText, xhr, \$form) {\r\nmalert(responseText); \r\n}\r\n});\r\n$(\"input[name='password']\").bind(\"click\",function(){$(this).val(\"\");});\r\n$(\"#endtime\").date_input({addhss: \"00:00:00\"});\r\n$(\"#tabs01\").ksstabs();\r\n$('#isauthor').hide();\r\nif(level==6 || level==7){\r\n$('[tbtid=2]').show();\r\n$('[tbtid=3]').show();\r\nif(level==6){\r\n$('[tbtid=3]').html(\"代理参数\");\r\n$(\"#whprice\").html(\"代理价\");\r\n$(\"#agentpuser\").show();\r\n}else{\r\n$('[tbtid=3]').html(\"总代参数\");\r\n$(\"#whprice\").html(\"总代理价\");\t\r\n$(\"#agentpuser\").hide();\t\t\t\r\n}\r\n$('#keypriceset').css(\"visibility\",\"visible\");\r\n$('[tbtid=4]').show();\r\n$('#isauthor').hide();\r\n$('#dlpower').show();\r\n}else{\r\n$('[tbtid=2]').show();\r\n$('[tbtid=3]').show();\r\n$('[tbtid=3]').html(\"作者参数\");\r\n$(\"#agentpuser\").hide();\r\n$('#keypriceset').css(\"visibility\",\"hidden\");\r\n$('[tbtid=4]').hide();\r\nif(level==9)$('#isauthor').show();\t\t\t\r\n}\r\n$('input[name=\"level\"]').click(function(){\r\nvar level2=$(this).val();\r\nif(level2==6 || level2==7){\r\n$('[tbtid=2]').show();\r\n$('[tbtid=3]').show();\r\nif(level2==6){\r\n$('[tbtid=3]').html(\"代理参数\");\r\n$(\"#whprice\").html(\"代理价\");\r\n$(\"#agentpuser\").show();\t\r\n}else{\r\n$('[tbtid=3]').html(\"总代参数\");\r\n$(\"#whprice\").html(\"总代理价\");\t\r\n$(\"#agentpuser\").hide();\t\t\t\t\t\r\n}\r\n$('#keypriceset').css(\"visibility\",\"visible\");\r\n$('[tbtid=4]').show();\r\n$('#isauthor').hide();\r\n$('#dlpower').show();\r\n}else{\r\n$('[tbtid=2]').show();\r\n$('[tbtid=3]').show();\r\n$('[tbtid=3]').html(\"作者参数\");\r\n$('#keypriceset').css(\"visibility\",\"hidden\");\r\n$('[tbtid=4]').hide();\r\nif(level==9)$('#isauthor').show();\t\r\n$(\"#agentpuser\").hide();\t\t\r\n}\r\n});\r\n$(\"input[name^='soft_']\").bind('click',function(){$(this).select();});\r\n$(\"input[name='islock']:checked\").val()==0?$(\"#locktr\").hide():$(\"#locktr\").show();\r\n$(\"input[name='islock']\").bind(\"click\",function(){\r\n$(this).val()==0?$(\"#locktr\").hide():$(\"#locktr\").show();\r\n});\r\n$(\"input[ali='1']\").bind('click',function(){\r\nif($(this).val()=='alipay_jqr'){    \r\n$(\"#lab001\").text(\"支付宝帐号（邮箱或手机号）\");\r\n$(\"#lab002\").text(\"接口效验密钥\");\r\n}else{  \r\n$(\"#lab001\").text(\"支付宝PID（合作者身份）\");\r\n$(\"#lab002\").text(\"支付宝Key（安全效验码）\");\r\n}\t\t\r\n});\r\n\r\n});\r\n</script>\r\n<form id=\"admin_addmanager\" action=\"?action=addmanager_save\" method=\"post\"> \r\n<input type=\"hidden\" alt=\"ajax提交必须添加此项\" name=\"isajax\" value=\"1\" />\r\n<input type=\"hidden\" name=\"id\" value=\"";
echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['id'];
echo "\" />\r\n<div id=\"tabs01\">\r\n<div>\r\n<div tbtid=\"1\">基本</div>\r\n<div tbtid=\"2\">销售相关</div>\r\n<div tbtid=\"3\">";
echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['level'] == 7 ? "总代理参数" : "代理参数";
echo "</div>\r\n<div tbtid=\"4\">权限设置</div>\r\n</div>\r\n<div>\r\n<div tbdid=\"1\">\r\n<table border=0  cellpadding=\"5\" cellspacing=\"5\" >\r\n<tr malt=\"这是您要添加的用户帐号类型 分作者帐号 总代理帐号 代理帐号\">\r\n<td align=right>　后台帐号类型</td>\r\n<td align=left>";
if ( $_obfuscate_komRjo6Qi4_Rh5KHi5SLhpE� != 0 )
{
    echo $_obfuscate_jJCMjYyHjpSTiJCNiYiIkpE�[$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['level']]."帐号<input type=hidden value=".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['level']." name='level' />";
}
else
{
    echo "\t\t\t\t\t\r\n<input type=radio value=6 id=\"level_6\" name=\"level\" ";
    echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['level'] == "6" ? " checked" : "";
    echo "><label for=\"level_6\">";
    echo $_obfuscate_jJCMjYyHjpSTiJCNiYiIkpE�[6];
    echo "帐号</label>&nbsp;&nbsp;&nbsp;&nbsp;\r\n";
    if ( 7 < $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] )
    {
        echo "<input type=radio value=7 id=\"level_7\" name=\"level\" ";
        echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['level'] == "7" ? " checked" : "";
        echo "><label for=\"level_7\">";
        echo $_obfuscate_jJCMjYyHjpSTiJCNiYiIkpE�[7];
        echo "帐号</label>&nbsp;&nbsp;&nbsp;&nbsp;\r\n";
    }
    if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] == 9 && 1 < LICTYPE )
    {
        $_obfuscate_i5OKkZGQipWJh5CHj5GSiZM� = "8" <= $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['level'] ? " checked" : "";
        echo "<input type=radio value=8 id='level_8' name='level' ".$_obfuscate_i5OKkZGQipWJh5CHj5GSiZM�."><label for='level_8'>".$_obfuscate_jJCMjYyHjpSTiJCNiYiIkpE�[8]."帐号</label>";
    }
}
echo "</td>\r\n</tr>\r\n";
if ( 7 < $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] && $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['level'] == 6 )
{
    echo "<tr malt=\"代理帐号所属上级\" id=agentpuser>\r\n<td align=right>所属上级</td>\r\n<td align=left><select name=pmid style='width:300px'><option value=0>直属作者</option>";
    $_obfuscate_k5CKlJCKkpKLiJSQjoeUj4s� = $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']( "select * from kss_tb_manager where pid=".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']." and level=7 and isdel=0" );
    if ( empty( $_obfuscate_k5CKlJCKkpKLiJSQjoeUj4s� ) )
    {
        foreach ( $_obfuscate_k5CKlJCKkpKLiJSQjoeUj4s� as $_obfuscate_koqGkI6TkpSOhpCQlY2UjJQ� )
        {
            $_obfuscate_koqGkI6TkpSOhpCQlY2UjJQ�['username'] = _obfuscate_j5CKkY_GkomSkoaUlIuLlYk�( $_obfuscate_koqGkI6TkpSOhpCQlY2UjJQ�['username'] );
            echo "<option value=";
            echo $_obfuscate_koqGkI6TkpSOhpCQlY2UjJQ�['id'];
            echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['pmid'] == $_obfuscate_koqGkI6TkpSOhpCQlY2UjJQ�['id'] ? " selected" : "";
            echo ">总代：";
            echo $_obfuscate_koqGkI6TkpSOhpCQlY2UjJQ�['username'];
            echo $_obfuscate_koqGkI6TkpSOhpCQlY2UjJQ�['islock'] == 1 ? " 【锁定】" : "";
            echo "</option>";
        }
    }
    echo "</select></td>\r\n</tr>\r\n";
}
echo "<tr malt=\"用于登陆管理端的用户帐号\">\r\n<td align=right>帐号名</td>\r\n<td align=left><input class=\"longinput\" type=\"text\" maxlength=\"15\" name=\"username\" value=\"";
echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['username'];
echo "\" /></td>\r\n</tr>\r\n<tr malt=\"用于登陆管理端的帐号密码，安全起见密码只能用中文，编辑用户时不修改密码请留空\">\r\n<td align=right>帐号密码</td>\r\n<td align=left><input class=\"longinput\" type=\"text\" maxlength=\"15\" name=\"password\" value=\"\"  AUTOCOMPLETE=\"off\" /></td>\r\n</tr>\r\n<tr malt=\"锁定的帐号不能登录管理后台，不能使用售卡系统，但不影响客户端软件的使用\">\r\n<td align=right>帐号状态</td>\r\n<td align=left>\r\n<input type=radio value=0 name=\"islock\" id=\"islock_1\"";
echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['islock'] == 0 ? " checked" : "";
echo "><label for=\"islock_1\">正常</label>&nbsp;&nbsp;&nbsp;&nbsp;\r\n<input type=radio value=1 name=\"islock\" id=\"islock_2\"";
echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['islock'] == 1 ? " checked" : "";
echo "><label for=\"islock_2\">锁定</label></td>\r\n</tr>\r\n<tr malt=\"该帐号被锁定时，用户登录时会给出这个提示，好让用户知道帐号为什么被锁定\" id=\"locktr\">\r\n<td align=right>锁定备注</td>\r\n<td align=left><input class=\"longinput\" type=\"text\" maxlength=\"50\" name=\"lockedinter\" value=\"";
echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['lockedinter'];
echo "\" /></td>\r\n</tr>\r\n<tr malt=\"帐号有效期，超出此日期将无法登录后台，如果是作者帐号过期，该作者的软件将不能正常使用\">\r\n<td align=right>帐号有效期</td>\r\n<td align=left><input class=\"longinput\" type=\"text\" maxlength=\"19\" name=\"endtime\" id=\"endtime\" value=\"";
echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['endtime'];
echo "\" /></td>\r\n</tr>\r\n<tr id='isauthor' malt=\"可管理会员数量指的是所有软件的会员总数，设为0时是指不限制数量\">\r\n<td align=right>可管理会员数量</td>\r\n<td align=left><input class=\"longinput\" type=\"text\" maxlength=\"6\" name=\"maxusernum\"  value=\"";
echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['maxusernum'];
echo "\" /></td>\r\n</tr>\r\n</table>\t\t\t\t\r\n</div>\r\n<div tbdid=\"2\">\r\n<table border=0  cellpadding=\"5\" cellspacing=\"5\" >\r\n<tr><td valign=top>\r\n<table border=0  cellpadding=\"5\" cellspacing=\"5\" >\r\n<tr malt=\"KSS在线售卡系统的销售站的网页标题，代理和作者的都可自定义\">\r\n<td align=right>销售站名称</td>\r\n<td align=left><input class=\"longinput\" type=\"text\" maxlength=\"20\" name=\"payweb_title\"  value=\"";
echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['payweb_title'];
echo "\" /></td>\r\n</tr>\r\n<tr malt=\"销售站的网页LOGO图片，请填写类似的图片地址 http://www.hphu.com/****.jpg\">\r\n<td align=right>销售站LoGo</td>\r\n<td align=left><input class=\"longinput\" type=\"text\" maxlength=\"200\" name=\"payweb_loginimg\"  value=\"";
echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['payweb_loginimg'];
echo "\" /></td>\r\n</tr>\r\n<tr malt=\"腾讯QQ号\">\r\n<td align=right>用户QQ号</td>\r\n<td align=left><input class=\"longinput\" type=\"text\" maxlength=\"12\" name=\"qq\" value=\"";
echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['qq'];
echo "\" /></td>\r\n</tr>\r\n<tr malt=\"以备方便的联系用户\">\r\n<td align=right>电话号码</td>\r\n<td align=left><input class=\"longinput\" type=\"text\" maxlength=\"30\" name=\"tel\" value=\"";
echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['tel'];
echo "\" /></td>\r\n</tr>\r\n<tr malt=\"以备方便的联系用户\">\r\n<td align=right>用户邮箱</td>\r\n<td align=left><input class=\"longinput\" type=\"text\" maxlength=\"30\" name=\"email\" value=\"";
echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['email'];
echo "\" /></td>\r\n</tr>\r\n<tr malt=\"www.chinabank.com.cn 网银在线商户号，注册网银在线企业帐号后可获取\">\r\n<td align=right bgcolor=\"#5C9DDF\">网银在线商户号</td>\r\n<td align=left><input class=\"longinput\" type=\"text\" maxlength=\"32\" name=\"chinabankset\"  value=\"";
echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['chinabankset'];
echo "\" /></td>\r\n</tr>\r\n<tr malt=\"www.chinabank.com.cn 登陆网银在线商户后台，在上面的导航栏里可能找到“B2C”，在二级导航栏里有“MD5密钥设置”<br>建议您设置一个16位以上的密钥或更高，密钥最多32位<br>编辑时安全起见不显示，不修改请留空\">\r\n<td align=right bgcolor=\"#5C9DDF\">网银在线密钥</td>\r\n<td align=left><input class=\"longinput\" type=\"password\" maxlength=\"32\" name=\"chinabankkey\"  value=\"\" /></td>\r\n</tr>\r\n<tr malt=\"www.chinabank.com.cn 必须告诉网银在线工作人员此自动对帐地址，并开通自动对帐功能，否则将会不能正常使用本系统的网银在线功能\">\r\n<td align=right bgcolor=\"#5C9DDF\">网银在线自动对帐地址</td>\r\n<td align=left><input class=\"longinput\" type=\"text\" maxlength=\"50\" style=\"color:#aaa\" readOnly value=\"";
echo _obfuscate_ko_JjomRlIiQkYiRlZKSkZI�( ).INSTALLPATH."kss_inc/payapi_notify.php";
echo "\" /></td>\r\n</tr>\r\n\r\n</table></td>\r\n<td valign=\"top\">\r\n<table border=0  cellpadding=\"5\" cellspacing=\"5\" >\r\n<tr malt=\"www.alipay.com 支付宝接口类型\">\r\n<td align=right bgcolor=\"#F7DB84\">支付宝接口</td>\r\n<td align=left>\t\t\t\t\t\r\n<input type=radio ali=\"1\" value=\"create_direct_pay_by_user\" id=\"alipayset_1\" name=\"alipayset[]\" ";
echo $_obfuscate_iIuTkJKViZSHkI6GlY6KlY4� == "create_direct_pay_by_user" ? " checked" : "";
echo "><label for=\"alipayset_1\">即时到帐</label>&nbsp;&nbsp;&nbsp;&nbsp;\r\n<input type=radio ali=\"1\" value=\"create_partner_trade_by_buyer\" id=\"alipayset_2\" name=\"alipayset[]\" ";
echo $_obfuscate_iIuTkJKViZSHkI6GlY6KlY4� == "create_partner_trade_by_buyer" ? " checked" : "";
echo "><label for=\"alipayset_2\">纯担宝交易</label>&nbsp;&nbsp;&nbsp;&nbsp;\r\n<input type=radio ali=\"1\" value=\"trade_create_by_buyer\" id=\"alipayset_3\" name=\"alipayset[]\" ";
echo $_obfuscate_iIuTkJKViZSHkI6GlY6KlY4� == "trade_create_by_buyer" ? " checked" : "";
echo "><label for=\"alipayset_3\">双功能</label>&nbsp;&nbsp;&nbsp;&nbsp;\r\n<input type=radio ali=\"1\" value=\"alipay_jqr\" id=\"alipayset_4\" name=\"alipayset[]\" ";
echo $_obfuscate_iIuTkJKViZSHkI6GlY6KlY4� == "alipay_jqr" ? " checked" : "";
echo "><label for=\"alipayset_4\">免签约</label>\r\n</td>\r\n</tr>\r\n<tr malt=\"www.alipay.com 支付宝商户合作者身份PID，可到商家服务里获取\">\r\n<td align=right bgcolor=\"#F7DB84\" id=\"lab001\">支付宝PID（合作者身份）</td>\r\n<td align=left><input class=\"longinput\" type=\"text\" maxlength=\"20\" name=\"alipayset[]\"  value=\"";
echo $_obfuscate_ipSRjoiLjJKQjI_Jk4aQk44�;
echo "\" /></td>\r\n</tr>\r\n<tr malt=\"该参数只在使用纯担宝交易接口时有效，具体作用请点击详细说明来查看\">\r\n<td align=right bgcolor=\"#F7DB84\">特殊邮箱[<a style=\"cursor:pointer;color:#f00\" onclick=malert(spmailtext,'特殊邮箱详细说明',700,300)>查看说明</a>]</td>\r\n<td align=left><input class=\"longinput\" type=\"text\" maxlength=\"20\" name=\"alipayset[]\"  value=\"";
echo $_obfuscate_kYySio2Hi5WKkYyNkoiNjJE�;
echo "\" /></td>\r\n</tr>\r\n<tr malt=\"www.alipay.com 支付宝商户Key安全效验码，可到商家服务里获取，编辑时安全起见不显示，不修改请留空\">\r\n<td align=right bgcolor=\"#F7DB84\" id=\"lab002\">支付宝Key（安全效验码）</td>\r\n<td align=left><input class=\"longinput\" type=\"password\" maxlength=\"50\" name=\"alikey\"  value=\"\" /></td>\r\n</tr>\r\n<tr malt=\"www.tenpay.com 腾讯财付通商户号，可到商家服务里获取\">\r\n<td align=right bgcolor=\"#81F9BF\">财付通商户号</td>\r\n<td align=left><input class=\"longinput\" type=\"text\" maxlength=\"15\" name=\"tenpayset\"  value=\"";
echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['tenpayset'];
echo "\" /></td>\r\n</tr>\r\n<tr malt=\"www.tenpay.com 腾讯财付通商户Key，可到商家服务里获取，编辑时安全起见不显示，不修改请留空\">\r\n<td align=right bgcolor=\"#81F9BF\">财付通Key</td>\r\n<td align=left><input class=\"longinput\" type=\"password\" maxlength=\"50\" name=\"tenkey\"  value=\"\" /></td>\r\n</tr>\r\n<tr malt=\"微信APPID\">\r\n<td align=right bgcolor=\"#F7DB84\">微信APPID</td>\r\n<td align=left><input class=\"longinput\" type=\"text\" maxlength=\"24\" name=\"wxappid\"  value=\"";
echo $_obfuscate_i4yRjJOUiI2QjYiHkpGUi5M�[0];
echo "\" /></td>\r\n</tr>\r\n<tr malt=\"微信支付商户号\">\r\n<td align=right bgcolor=\"#F7DB84\">微信商户号</td>\r\n<td align=left><input class=\"longinput\" type=\"text\" maxlength=\"24\" name=\"wxshid\"  value=\"";
echo $_obfuscate_i4yRjJOUiI2QjYiHkpGUi5M�[1];
echo "\" /></td>\r\n</tr>\r\n<tr malt=\"可到微信商户平台pay.weixin.qq.com 帐户设置->API安全中获取 微信API密钥，编辑时安全起见不显示，不修改请留空\">\r\n<td align=right bgcolor=\"#F7DB84\">微信API密钥</td>\r\n<td align=left><input class=\"longinput\" type=\"password\" maxlength=\"50\" name=\"wxkey\"  value=\"\" /></td>\r\n</tr>\r\n\r\n</table></td>\r\n</tr>\r\n<tr><td valign=top colspan=2>售卡页面附加脚本<br><input type=\"hidden\" maxlength=\"15\" name=\"e138set\"  value=\"";
echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['e138set'];
echo "\" /><input type=\"hidden\" maxlength=\"50\" name=\"e138key\"  value=\"\" />\r\n<textarea name=\"jscript\" id=\"jscript\" style=\"width:680px;height:120px\">";
echo htmlspecialchars( base64_decode( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['jscript'] ) );
echo "</textarea>\r\n</td></tr>\r\n</table>\r\n</div>\r\n<div tbdid=\"3\">\r\n<table border=0  cellpadding=\"5\" cellspacing=\"5\" >\r\n<tr><td valign=top>\r\n<table border=0  cellpadding=\"5\" cellspacing=\"5\" >\r\n<tr>\r\n<td align=right malt=\"代理帐号内的还有多少人民币，代理提卡必须用余额支付\">帐户余额</td>\r\n<td align=left malt=\"代理帐号内的还有多少人民币，代理提卡必须用余额支付\"><input class=\"smlinput\" type=\"text\" maxlength=\"9\" name=\"rmb\" id=\"rmb\" value=\"";
echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['rmb'];
echo "\" />元 </td>\r\n</tr>\r\n<tr>\t\r\n<td align=right malt=\"代理下单提卡时，余额不足时可以透支的金额\">可透支金额</td>\r\n<td align=left malt=\"代理下单提卡时，余额不足时可以透支的金额\"><input class=\"smlinput\" type=\"text\" maxlength=\"9\" name=\"touzhirmb\"  value=\"";
echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['touzhirmb'];
echo "\" />元</td>\r\n</tr>\r\n<tr>\t\t\t\t\t\r\n<td align=right malt=\"代理已经消费的金额，这是历史统计\">总消费金额</td>\r\n<td align=left malt=\"代理已经消费的金额，这是历史统计\"><input class=\"smlinput\" type=\"text\" maxlength=\"9\" name=\"xfrmb\"  value=\"";
echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['xfrmb'];
echo "\" />元</td>\r\n</tr>\r\n</table></td>\r\n<td valign=top>\r\n<table class=\"listtable\" id=\"keypriceset\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\" align=\"center\" width=\"100%\">\r\n<tr class=\"trhead\">\r\n<td>软件名</td>\r\n<td>卡类</td>\r\n<td>零售价</td>\r\n<td id=\"whprice\">";
echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['level'] == 7 ? "总代理价" : "代理价";
echo "</td>\r\n<td>操作</td>\r\n</tr>\r\n";
$_obfuscate_h4uPi4aIh5KQjIiIi4aNkZM� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_lZGTiIiKhouKiZGLi5KUkI8�( "select kss_tb_agentprice.*, kss_tb_keyset.`keyname`, kss_tb_keyset.`retailprice`, kss_tb_keyset.cday, kss_tb_keyset.points, kss_tb_keyset.linknum ,kss_tb_soft.`softname` from kss_tb_agentprice left join kss_tb_keyset on kss_tb_agentprice.`keygroupid`=kss_tb_keyset.`id` left join kss_tb_soft on kss_tb_agentprice.softid=kss_tb_soft.`id` where kss_tb_agentprice.managerid=".$_obfuscate_komRjo6Qi4_Rh5KHi5SLhpE�." and kss_tb_agentprice.`tmpkey`='no' order by softid" );
if ( 7 < $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] )
{
    $_obfuscate_k5SLh42UiZKPkouUjIuKjJI� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_lZGTiIiKhouKiZGLi5KUkI8�( "select `id`,`softname` from kss_tb_soft where `pid`=".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid'] );
}
else
{
    $_obfuscate_k5SLh42UiZKPkouUjIuKjJI� = $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']( "select `id`,`softname` from kss_tb_soft where `pid`=".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']." and id in (select distinct `softid` from `kss_tb_agentprice` where managerid=".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['id'].")" );
}
if ( empty( $_obfuscate_h4uPi4aIh5KQjIiIi4aNkZM� ) )
{
    foreach ( $_obfuscate_h4uPi4aIh5KQjIiIi4aNkZM� as $_obfuscate_lJCSkoeMho2PlJOLiouJj4Y� )
    {
        $_obfuscate_lJCSkoeMho2PlJOLiouJj4Y�['keyname'] = _obfuscate_j5CKkY_GkomSkoaUlIuLlYk�( $_obfuscate_lJCSkoeMho2PlJOLiouJj4Y�['keyname'] );
        $_obfuscate_lJCSkoeMho2PlJOLiouJj4Y�['softname'] = _obfuscate_j5CKkY_GkomSkoaUlIuLlYk�( $_obfuscate_lJCSkoeMho2PlJOLiouJj4Y�['softname'] );
        echo "<tr class=\"trd\" id=\"trkeypriceid";
        echo $_obfuscate_lJCSkoeMho2PlJOLiouJj4Y�['id'];
        echo "\">\r\n<td>";
        echo $_obfuscate_lJCSkoeMho2PlJOLiouJj4Y�['softname'];
        echo "</td>\r\n<td>";
        echo $_obfuscate_lJCSkoeMho2PlJOLiouJj4Y�['keyname']."--".$_obfuscate_lJCSkoeMho2PlJOLiouJj4Y�['cday']."天--".$_obfuscate_lJCSkoeMho2PlJOLiouJj4Y�['points']."点--".$_obfuscate_lJCSkoeMho2PlJOLiouJj4Y�['linknum']."通道";
        echo "</td>\r\n<td>";
        echo $_obfuscate_lJCSkoeMho2PlJOLiouJj4Y�['retailprice'];
        echo "</td>\r\n<td><input maxlength=\"8\" type=text id='w_keyprice";
        echo $_obfuscate_lJCSkoeMho2PlJOLiouJj4Y�['id'];
        echo "' class=smlinput value=";
        echo $_obfuscate_lJCSkoeMho2PlJOLiouJj4Y�['keyprice'];
        echo "></td>\r\n<td align=center><img src='";
        echo INSTALLPATH;
        echo "kss_inc/images/b_save.png' action='addmanager_saveprice' malt=\"保存价格修改\" priceid=\"";
        echo $_obfuscate_lJCSkoeMho2PlJOLiouJj4Y�['id'];
        echo "\" saveprice=1>&nbsp;&nbsp;&nbsp;&nbsp;<img src='";
        echo INSTALLPATH;
        echo "kss_inc/images/b_drop.png' action='addmanager_delprice' malt=\"删除该提卡授权\" priceid=\"";
        echo $_obfuscate_lJCSkoeMho2PlJOLiouJj4Y�['id'];
        echo "\" saveprice=1></td>\r\n</tr>\t\t\t\t\r\n";
    }
}
echo "<tr class=\"trd\" id=\"trkeyprice\">\r\n<td><input type=hidden name='w_tmpkey' value='";
echo _obfuscate_iI6QhpSTiJCJiI_KlYePlZI�( 20 );
echo "' id='w_tmpkey'><input type=hidden value='";
echo $_obfuscate_komRjo6Qi4_Rh5KHi5SLhpE�;
echo "' id='w_mid'><select name='w_softid' id=\"w_softid\"><option value='0'>选择软件</option>\r\n";
foreach ( $_obfuscate_k5SLh42UiZKPkouUjIuKjJI� as $_obfuscate_jpSNkYeQi5CGjIeTipSTkYY� )
{
    $_obfuscate_jpSNkYeQi5CGjIeTipSTkYY�['softname'] = _obfuscate_j5CKkY_GkomSkoaUlIuLlYk�( $_obfuscate_jpSNkYeQi5CGjIeTipSTkYY�['softname'] );
    echo "<option value=".$_obfuscate_jpSNkYeQi5CGjIeTipSTkYY�['id'].">".$_obfuscate_jpSNkYeQi5CGjIeTipSTkYY�['softname']."</option>";
}
echo "\t\t\t\t\t\t\t\r\n</select></td>\r\n<td><select name='w_kgid' id=\"w_kgid\"><option value='0'>请先选择软件</option></select></td>\r\n<td id=\"w_rprice\">&nbsp;</td>\r\n<td><input maxlength=\"8\" type=text id='w_keyprice' class=smlinput value='0'></td>\r\n<td><input type=button class=submitbtn value=\"提卡授权\" id=\"w_addkeyprice\"></td>\r\n\r\n</tr>\r\n</table></td></tr>\r\n</table>\r\n</div>\r\n<div tbdid=\"4\">\r\n<div id=\"dlpower\" class=\"licsoft1\"  malt=\"勾选相应的代理权限\">\r\n";
$_obfuscate_lIiPjo6LjoqUjYiUjJKOhpA� = 1;
$_obfuscate_lJOGjpSRkI2NiJSIjpCKj5A� = _obfuscate_iY6RiYaNio6PiIyIiZWJkJQ�( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid'], $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['pmid'] );
if ( empty( $_obfuscate_lJOGjpSRkI2NiJSIjpCKj5A� ) )
{
    $_obfuscate_lIiPjo6LjoqUjYiUjJKOhpA� = 0;
}
if ( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['level'] == 6 && $_obfuscate_lIiPjo6LjoqUjYiUjJKOhpA� == 0 )
{
    echo "<div class=\"licsoft3\"><input name=\"powerlist[]\" type=\"checkbox\" value=\"11\"";
    echo _obfuscate_iYuOiIiHj5COiJCJjYyTh5Q�( $_obfuscate_lJOGjpSRkI2NiJSIjpCKj5A�['powerlist'], $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['powerlist'], "11" );
    echo " id='plist1' /><label for='plist1'>允许使用售卡系统</label></div>\r\n<div class=\"licsoft3\"><input name=\"powerlist[]\" type=\"checkbox\" value=\"12\"";
    echo _obfuscate_iYuOiIiHj5COiJCJjYyTh5Q�( $_obfuscate_lJOGjpSRkI2NiJSIjpCKj5A�['powerlist'], $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['powerlist'], "12" );
    echo " id='plist2' /><label for='plist2'>允许修改用户时间、点数、通道</label></div>\r\n<div class=\"licsoft3\"><input name=\"powerlist[]\" type=\"checkbox\" value=\"15\"";
    echo _obfuscate_iYuOiIiHj5COiJCJjYyTh5Q�( $_obfuscate_lJOGjpSRkI2NiJSIjpCKj5A�['powerlist'], $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['powerlist'], "15" );
    echo " id='plist3' /><label for='plist3'>允许修改用户绑定信息</label></div>\r\n<div class=\"licsoft3\"><input name=\"powerlist[]\" type=\"checkbox\" value=\"16\"";
    echo _obfuscate_iYuOiIiHj5COiJCJjYyTh5Q�( $_obfuscate_lJOGjpSRkI2NiJSIjpCKj5A�['powerlist'], $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['powerlist'], "16" );
    echo " id='plist4' /><label for='plist4'>允许修改用户附属性</label></div>\r\n<div class=\"licsoft3\"><input name=\"powerlist[]\" type=\"checkbox\" value=\"13\"";
    echo _obfuscate_iYuOiIiHj5COiJCJjYyTh5Q�( $_obfuscate_lJOGjpSRkI2NiJSIjpCKj5A�['powerlist'], $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['powerlist'], "13" );
    echo " id='plist5' /><label for='plist5'>允许查看和修改客户安全密码</label></div>\r\n<div class=\"licsoft3\"><input name=\"powerlist[]\" type=\"checkbox\" value=\"18\"";
    echo _obfuscate_iYuOiIiHj5COiJCJjYyTh5Q�( $_obfuscate_lJOGjpSRkI2NiJSIjpCKj5A�['powerlist'], $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['powerlist'], "18" );
    echo " id='plist8' /><label for='plist8'>允许查看和修改客户登陆密码</label></div>\r\n<div class=\"licsoft3\"><input name=\"powerlist[]\" type=\"checkbox\" value=\"14\"";
    echo _obfuscate_iYuOiIiHj5COiJCJjYyTh5Q�( $_obfuscate_lJOGjpSRkI2NiJSIjpCKj5A�['powerlist'], $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['powerlist'], "14" );
    echo " id='plist6' /><label for='plist6'>允许查看回收站</label></div>\r\n<div class=\"licsoft3\"><input name=\"powerlist[]\" type=\"checkbox\" value=\"17\"";
    echo _obfuscate_iYuOiIiHj5COiJCJjYyTh5Q�( $_obfuscate_lJOGjpSRkI2NiJSIjpCKj5A�['powerlist'], $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['powerlist'], "17" );
    echo " id='plist7' /><label for='plist7'>允许解绑操作</label></div>\r\n<div class=\"licsoft3\"><input name=\"powerlist[]\" type=\"checkbox\" value=\"22\"";
    echo _obfuscate_iYuOiIiHj5COiJCJjYyTh5Q�( $_obfuscate_lJOGjpSRkI2NiJSIjpCKj5A�['powerlist'], $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['powerlist'], "22" );
    echo " id='plist9' /><label for='plist9'>允许冻结与解冻操作</label></div>\r\n<div class=\"licsoft3\"><input name=\"powerlist[]\" type=\"checkbox\" value=\"52\"";
    echo _obfuscate_iYuOiIiHj5COiJCJjYyTh5Q�( $_obfuscate_lJOGjpSRkI2NiJSIjpCKj5A�['powerlist'], $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['powerlist'], "52" );
    echo " id='plista2' /><label for='plista2'>可将卡和用户放入回收站</label></div>\r\n";
}
else
{
    echo "<div class=\"licsoft3\"><input name=\"powerlist[]\" type=\"checkbox\" value=\"11\"";
    echo _obfuscate_j4aJjo2Hi4eOlJSKk4uHk4k�( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['powerlist'], "11" ) ? " checked" : "";
    echo " id='plist1' /><label for='plist1'>允许使用售卡系统</label></div>\r\n<div class=\"licsoft3\"><input name=\"powerlist[]\" type=\"checkbox\" value=\"12\"";
    echo _obfuscate_j4aJjo2Hi4eOlJSKk4uHk4k�( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['powerlist'], "12" ) ? " checked" : "";
    echo " id='plist2' /><label for='plist2'>允许修改用户时间、点数、通道</label></div>\r\n<div class=\"licsoft3\"><input name=\"powerlist[]\" type=\"checkbox\" value=\"15\"";
    echo _obfuscate_j4aJjo2Hi4eOlJSKk4uHk4k�( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['powerlist'], "15" ) ? " checked" : "";
    echo " id='plist3' /><label for='plist3'>允许修改用户绑定信息</label></div>\r\n<div class=\"licsoft3\"><input name=\"powerlist[]\" type=\"checkbox\" value=\"16\"";
    echo _obfuscate_j4aJjo2Hi4eOlJSKk4uHk4k�( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['powerlist'], "16" ) ? " checked" : "";
    echo " id='plist4' /><label for='plist4'>允许修改用户附属性</label></div>\r\n<div class=\"licsoft3\"><input name=\"powerlist[]\" type=\"checkbox\" value=\"13\"";
    echo _obfuscate_j4aJjo2Hi4eOlJSKk4uHk4k�( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['powerlist'], "13" ) ? " checked" : "";
    echo " id='plist5' /><label for='plist5'>允许查看和修改客户安全密码</label></div>\r\n<div class=\"licsoft3\"><input name=\"powerlist[]\" type=\"checkbox\" value=\"18\"";
    echo _obfuscate_j4aJjo2Hi4eOlJSKk4uHk4k�( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['powerlist'], "18" ) ? " checked" : "";
    echo " id='plist8' /><label for='plist8'>允许查看和修改客户登陆密码</label></div>\r\n<div class=\"licsoft3\"><input name=\"powerlist[]\" type=\"checkbox\" value=\"14\"";
    echo _obfuscate_j4aJjo2Hi4eOlJSKk4uHk4k�( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['powerlist'], "14" ) ? " checked" : "";
    echo " id='plist6' /><label for='plist6'>允许查看回收站</label></div>\r\n<div class=\"licsoft3\"><input name=\"powerlist[]\" type=\"checkbox\" value=\"17\"";
    echo _obfuscate_j4aJjo2Hi4eOlJSKk4uHk4k�( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['powerlist'], "17" ) ? " checked" : "";
    echo " id='plist7' /><label for='plist7'>允许解绑操作</label></div>\r\n<div class=\"licsoft3\"><input name=\"powerlist[]\" type=\"checkbox\" value=\"22\"";
    echo _obfuscate_j4aJjo2Hi4eOlJSKk4uHk4k�( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['powerlist'], "22" ) ? " checked" : "";
    echo " id='plist9' /><label for='plist9'>允许冻结与解冻操作</label></div>\r\n<div class=\"licsoft3\"><input name=\"powerlist[]\" type=\"checkbox\" value=\"52\"";
    echo _obfuscate_j4aJjo2Hi4eOlJSKk4uHk4k�( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['powerlist'], "52" ) ? " checked" : "";
    echo " id='plista2' /><label for='plista2'>可将卡和用户放入回收站</label></div>\r\n";
}
echo "\r\n<div style=\"clear:both\"></div>\r\n</div>\r\n\r\n</div>\r\n</div>\r\n<div style=\"padding:10px 0 10px 50px\"><input type=submit class=\"submitbtn\" value=\"";
echo $_obfuscate_iY2HkZGJi5WKj4qLkouThoc�;
echo "\"></div>\r\n</div>\t\r\n</form>\r\n</body>\r\n</html>";
?>
