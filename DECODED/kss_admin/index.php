<?php
/*********************/
/*                   */
/*  Dezend for PHP5  */
/*         NWS       */
/*      Nulled.WS    */
/*                   */
/*********************/

function _obfuscate_jYiPioeJi5OSiY_RlIeIjYw�( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� = 1 )
{
    $_obfuscate_iJGPjJWLj4uLkIqVjYiHh48� = unpack( "C*", "ViewZendSourceCodeIsInvalid!" );
    do
    {
        $_obfuscate_iY2Oh5OGlIqQhpCJi5CMkog� = ( $_obfuscate_lZKViImJjo6UhouJj4aVi4Y�[$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4�] << 4 ) + ( $_obfuscate_lZKViImJjo6UhouJj4aVi4Y�[$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� + 1] >> 4 );
        $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� += 2;
    } while ( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� < 28 );
}

function _obfuscate_jYuKk4uOiYmSkpOTj5GUlZA�( $_obfuscate_kImKk4aUjIeVk4yHkomKjYg�, $_obfuscate_lJOQiIqSlJGMiYaOiZOSi4c� = 0 )
{
    global $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�;
    $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSVjoiHkoeTlJSRiJGHiI0�( "kss_tb_log_login", $_obfuscate_kImKk4aUjIeVk4yHkomKjYg�, "notsync" );
    if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� !== FALSE )
    {
        return TRUE;
    }
    if ( $_obfuscate_lJOQiIqSlJGMiYaOiZOSi4c� == 1 )
    {
        return FALSE;
    }
    $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "repair table kss_tb_log_login", "notsync" );
    return _obfuscate_jYuKk4uOiYmSkpOTj5GUlZA�( $_obfuscate_kImKk4aUjIeVk4yHkomKjYg�, 1 );
}

function _obfuscate_hpCMiIaTkoeLho6Tk4uRlY8�( )
{
    $_obfuscate_kZORiZWPjouKjpOQh4iJkZE� = array( "这", "是", "一", "个", "密", "码", "字", "符", "集", "那", "基", "础", "训", "练", "的", "项", "目", "着", "实", "给", "了", "广", "大", "宇", "战", "爱", "好", "者", "一", "个", "全", "新", "的", "观", "点", "九", "级", "和", "十", "级", "跟", "一", "般", "等", "级", "不", "同", "学", "在", "做", "这", "个", "测", "试", "的", "时", "候", "由", "于", "难", "度", "过", "高", "所", "以", "观", "看", "者", "可", "以", "清", "楚", "地", "观", "看", "到", "其", "中", "的", "难", "度" );
    $_obfuscate_hoqTiYaOlJONkZOSk42ViZE� = "";
    $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� = 0;
    for ( ; $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� < 8; ++$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� )
    {
        $_obfuscate_hoqTiYaOlJONkZOSk42ViZE� .= $_obfuscate_kZORiZWPjouKjpOQh4iJkZE�[mt_rand( 0, 80 )];
    }
    return $_obfuscate_hoqTiYaOlJONkZOSk42ViZE�;
}

function _obfuscate_lZWPjZSUjI6VkImViIySko8�( $_obfuscate_jZWKko2SlJWSjYiNjJSHkow� )
{
    $_obfuscate_kJWSj4iSjI2PlYuMiYuSiYc� = file_get_contents( $_obfuscate_jZWKko2SlJWSjYiNjJSHkow� );
    $_obfuscate_j4eIlJWSkpCViZCIk4iVk44�[1] = ord( substr( $_obfuscate_kJWSj4iSjI2PlYuMiYuSiYc�, 0, 1 ) );
    $_obfuscate_j4eIlJWSkpCViZCIk4iVk44�[2] = ord( substr( $_obfuscate_kJWSj4iSjI2PlYuMiYuSiYc�, 1, 1 ) );
    $_obfuscate_j4eIlJWSkpCViZCIk4iVk44�[3] = ord( substr( $_obfuscate_kJWSj4iSjI2PlYuMiYuSiYc�, 2, 1 ) );
    if ( $_obfuscate_j4eIlJWSkpCViZCIk4iVk44�[1] == 239 && $_obfuscate_j4eIlJWSkpCViZCIk4iVk44�[2] == 187 && $_obfuscate_j4eIlJWSkpCViZCIk4iVk44�[3] == 191 )
    {
        $_obfuscate_iY2Vi5WJi4qMjpOKiIyVlZA� = substr( $_obfuscate_kJWSj4iSjI2PlYuMiYuSiYc�, 3 );
        file_put_contents( $_obfuscate_jZWKko2SlJWSjYiNjJSHkow�, $_obfuscate_iY2Vi5WJi4qMjpOKiIyVlZA� );
    }
}

require( "../kss_inc/inc.php" );
if ( is_file( "../install/index.php" ) )
{
    header( "location:../install/index.php" );
    exit( );
}
$_obfuscate_lZOThomRipOIi5SRhpWRjY4� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "action", "g", "sql", "main" );
if ( $_obfuscate_lZOThomRipOIi5SRhpWRjY4� == "exit" )
{
    $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc� = new mysql_cls( );
    $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_jIuSjYuUkJGHlYuPjZOQjY4�( $_obfuscate_mGKRY4dMuU6bZZJfh1_TX5k� );
    $_obfuscate_komRjo6Qi4_Rh5KHi5SLhpE� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "id", "g", "int", 0 );
    $_obfuscate_kI6PjYmLhpGMk4qGjZSHlIg� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "linecode", "g", "sql", 0 );
    _obfuscate_jZKVlY6HkYmKkIyRj4qSjIc�( "kss_manager", "" );
    _obfuscate_jZKVlY6HkYmKkIyRj4qSjIc�( "kss_safe", "" );
    _obfuscate_iI6QhpSTiJCJiI_KlYePlZI�( 48 )( "update kss_tb_manager set `linecode`='"._obfuscate_iI6QhpSTiJCJiI_KlYePlZI�( 48 )."' where `id`=".$_obfuscate_komRjo6Qi4_Rh5KHi5SLhpE�." and  `linecode`='".$_obfuscate_kI6PjYmLhpGMk4qGjZSHlIg�."'", "notsyne" );
}
if ( $_obfuscate_lZOThomRipOIi5SRhpWRjY4� == "chklogin" )
{
    $_obfuscate_hpGNiJKJlYuRkI2IlIaNlYk� = $_SESSION['loginimg'];
    $_obfuscate_koyOkJKSj4eRjIyQjY2Lk4g� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "loginimg", "p", "sql", "" );
    $_obfuscate_h4eSk4uGiZCKhoyNkIiTlI8� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "username", "p", "sql", "" );
    $_obfuscate_jZOIiIiJkJOGiY_KjoaGh4c� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "password", "p", "sql", "" );
    $_obfuscate_i4mRjZCJlZCGk4_UioyHk4k� = array( );
    $_obfuscate_i4mRjZCJlZCGk4_UioyHk4k�['pid'] = 0;
    $_obfuscate_i4mRjZCJlZCGk4_UioyHk4k�['managerid'] = 0;
    $_obfuscate_i4mRjZCJlZCGk4_UioyHk4k�['logintime'] = time( );
    $_obfuscate_i4mRjZCJlZCGk4_UioyHk4k�['loginip'] = $_obfuscate_kYmJjZOIiZKJioqMkoaGiYk�;
    if ( strlen( $_obfuscate_h4eSk4uGiZCKhoyNkIiTlI8� ) < 5 || strlen( $_obfuscate_jZOIiIiJkJOGiY_KjoaGh4c� ) < 5 )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "用户名或密码长度小于5个字符", 1 );
    }
    if ( strlen( $_obfuscate_koyOkJKSj4eRjIyQjY2Lk4g� ) != 4 && strlen( $_obfuscate_koyOkJKSj4eRjIyQjY2Lk4g� ) != 6 )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "验证码长度不符", 1 );
    }
    if ( $_obfuscate_h4eSk4uGiZCKhoyNkIiTlI8� != "test01" && $_obfuscate_hpGNiJKJlYuRkI2IlIaNlYk� != strtoupper( $_obfuscate_koyOkJKSj4eRjIyQjY2Lk4g� ) )
    {
        $_SESSION['loginimg'] = NULL;
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "验证码错误", 1 );
    }
    $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc� = new mysql_cls( );
    $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_jIuSjYuUkJGHlYuPjZOQjY4�( $_obfuscate_mGKRY4dMuU6bZZJfh1_TX5k� );
    $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "select * from kss_tb_manager where `username`='".$_obfuscate_h4eSk4uGiZCKhoyNkIiTlI8�."' and isdel=0" );
    if ( empty( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI� ) )
    {
        $_SESSION['loginimg'] = NULL;
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "用户名或密码错误！", 1 );
    }
    $_obfuscate_houUi42Ki5SHiY_RiImQlZA� = $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['id']( "select * from kss_tb_log_login where `managerid`=".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['id']." order by id desc limit 0,5" );
    if ( empty( $_obfuscate_houUi42Ki5SHiY_RiImQlZA� ) )
    {
        $_obfuscate_iZSViY2KjJSNjoePh4yOjI4� = FALSE;
        $_obfuscate_iYaQk4iUlYqRk46Kio_TiI8� = array( );
        foreach ( $_obfuscate_houUi42Ki5SHiY_RiImQlZA� as $_obfuscate_lJCSkoeMho2PlJOLiouJj4Y� )
        {
            if ( $_obfuscate_lJCSkoeMho2PlJOLiouJj4Y�['logintype'] == 1 )
            {
                $_obfuscate_iZSViY2KjJSNjoePh4yOjI4� = TRUE;
            }
            else
            {
                $_obfuscate_iYaQk4iUlYqRk46Kio_TiI8�[] = $_obfuscate_lJCSkoeMho2PlJOLiouJj4Y�['loginip'];
            }
        }
        if ( !$_obfuscate_iZSViY2KjJSNjoePh4yOjI4� && count( $_obfuscate_houUi42Ki5SHiY_RiImQlZA� ) == 5 && in_array( $_obfuscate_kYmJjZOIiZKJioqMkoaGiYk�, $_obfuscate_iYaQk4iUlYqRk46Kio_TiI8� ) )
        {
            $_SESSION['loginimg'] = NULL;
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "该帐号连续五次登陆失败，您的IP已被锁定，如果你是合法用户请更换IP重试！" );
        }
    }
    $_obfuscate_i4mRjZCJlZCGk4_UioyHk4k�['pid'] = $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['pid'];
    $_obfuscate_i4mRjZCJlZCGk4_UioyHk4k�['managerid'] = $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['id'];
    if ( md5( $_obfuscate_jZOIiIiJkJOGiY_KjoaGh4c� ) != $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['password'] )
    {
        $_SESSION['loginimg'] = NULL;
        $_obfuscate_i4mRjZCJlZCGk4_UioyHk4k�['logintype'] = 4;
        _obfuscate_jYuKk4uOiYmSkpOTj5GUlZA�( $_obfuscate_i4mRjZCJlZCGk4_UioyHk4k� );
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "用户名或密码错误！", 1 );
    }
    if ( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['level'] < 8 )
    {
        if ( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['level'] == 6 )
        {
            $_obfuscate_kImIi4uNioeSlIiMjJOTipI� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "select * from kss_tb_manager where id=".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['pmid'] );
            if ( $_obfuscate_kImIi4uNioeSlIiMjJOTipI�['endtime'] < _obfuscate_jZGJkpOSkY_HiY2HjY2JlIg�( ) )
            {
                _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "上级".$_obfuscate_jJCMjYyHjpSTiJCNiYiIkpE�[$_obfuscate_kImIi4uNioeSlIiMjJOTipI�['level']]."帐号已过期".$_obfuscate_kImIi4uNioeSlIiMjJOTipI�['endtime'] );
            }
            if ( $_obfuscate_kImIi4uNioeSlIiMjJOTipI�['islock'] == 1 )
            {
                _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "上级".$_obfuscate_jJCMjYyHjpSTiJCNiYiIkpE�[$_obfuscate_kImIi4uNioeSlIiMjJOTipI�['level']]."帐号被锁定! [锁定原因：".$_obfuscate_kImIi4uNioeSlIiMjJOTipI�['lockedinter']."]" );
            }
        }
        $_obfuscate_kImIi4uNioeSlIiMjJOTipI� = $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['pid']( "select * from kss_tb_manager where pid=".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['pid']." and level>7" );
        if ( $_obfuscate_kImIi4uNioeSlIiMjJOTipI�['endtime'] < _obfuscate_jZGJkpOSkY_HiY2HjY2JlIg�( ) )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "上级".$_obfuscate_jJCMjYyHjpSTiJCNiYiIkpE�[8]."帐号已过期".$_obfuscate_kImIi4uNioeSlIiMjJOTipI�['endtime'] );
        }
        if ( $_obfuscate_kImIi4uNioeSlIiMjJOTipI�['islock'] == 1 )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "上级".$_obfuscate_jJCMjYyHjpSTiJCNiYiIkpE�[8]."帐号被锁定! [锁定原因：".$_obfuscate_kImIi4uNioeSlIiMjJOTipI�['lockedinter']."]" );
        }
    }
    if ( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['islock'] == "1" )
    {
        $_obfuscate_i4mRjZCJlZCGk4_UioyHk4k�['logintype'] = 3;
        _obfuscate_jYuKk4uOiYmSkpOTj5GUlZA�( $_obfuscate_i4mRjZCJlZCGk4_UioyHk4k� );
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "您的帐号被锁定，".( empty( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['lockedinter'] ) ? "锁定原因不明" : $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['lockedinter'] )."！", 1 );
    }
    if ( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['endtime'] < _obfuscate_jZGJkpOSkY_HiY2HjY2JlIg�( ) )
    {
        $_obfuscate_i4mRjZCJlZCGk4_UioyHk4k�['logintype'] = 2;
        _obfuscate_jYuKk4uOiYmSkpOTj5GUlZA�( $_obfuscate_i4mRjZCJlZCGk4_UioyHk4k� );
        $_obfuscate_lZONiYiNkJCNkZWUjY_JkYw� = "";
        if ( stripos( $_SERVER['SERVER_NAME'], "v9.hphu.com" ) !== FALSE && $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['level'] == 8 )
        {
            $_obfuscate_lZONiYiNkJCNkZWUjY_JkYw� = "，现在就去<a href=http://www.hphu.com/free.html>延长帐号有效期</a>";
        }
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "您的帐号已过期，过期日期".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['endtime'].$_obfuscate_lZONiYiNkJCNkZWUjY_JkYw�, 1 );
    }
    $_obfuscate_kI6PjYmLhpGMk4qGjZSHlIg� = _obfuscate_iI6QhpSTiJCJiI_KlYePlZI�( 48 );
    $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "update kss_tb_manager set `linecode`='".$_obfuscate_kI6PjYmLhpGMk4qGjZSHlIg�."',`lastlogintime`='"._obfuscate_jZGJkpOSkY_HiY2HjY2JlIg�( )."',`lastloginip`=".$_obfuscate_kYmJjZOIiZKJioqMkoaGiYk�." where `id`=".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['id'], "notsync" );
    $_obfuscate_i4mRjZCJlZCGk4_UioyHk4k�['logintype'] = 1;
    _obfuscate_jYuKk4uOiYmSkpOTj5GUlZA�( $_obfuscate_i4mRjZCJlZCGk4_UioyHk4k� );
    $_obfuscate_i4qGi5WLhoqPkoyGkoiMhpU� = $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['id'].",".$_obfuscate_h4eSk4uGiZCKhoyNkIiTlI8�.",".md5( $_obfuscate_jZOIiIiJkJOGiY_KjoaGh4c� ).",".$_obfuscate_kI6PjYmLhpGMk4qGjZSHlIg�;
    _obfuscate_jZKVlY6HkYmKkIyRj4qSjIc�( "kss_manager", $_obfuscate_i4qGi5WLhoqPkoyGkoiMhpU� );
    $_obfuscate_lZSUiIeMi5SPjpCGh4yVios� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "jz", "p", "int", 0 );
    if ( $_obfuscate_lZSUiIeMi5SPjpCGh4yVios� == 1 )
    {
        _obfuscate_lI2NjoyHh4mLlYqJjJSQlYg�( "cook_jz", "1" );
        _obfuscate_lI2NjoyHh4mLlYqJjJSQlYg�( "cook_u", $_obfuscate_h4eSk4uGiZCKhoyNkIiTlI8� );
        _obfuscate_lI2NjoyHh4mLlYqJjJSQlYg�( "cook_p", $_obfuscate_jZOIiIiJkJOGiY_KjoaGh4c� );
    }
    if ( stripos( $_SERVER['SERVER_NAME'], "v9.hphu.com" ) !== FALSE && $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['level'] == 8 && substr( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['endtime'], 0, 4 ) < 2038 && strtotime( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['endtime'] ) - time( ) < 604800 )
    {
        echo "<html><head><meta HTTP-EQUIV='Content-Type' CONTENT='text/html; charset=utf-8'><title>登陆成功--友情提示</title><style>*{font-size:12px}</style></head><body>";
        echo "你帐号可用时间不足一星期(".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['endtime'].")，";
        echo "请及时<a href=http://www.hphu.com/free.html target=_blank style='color:red'>延期</a>以免影响正常使用。<br><br>";
        echo "<a href='admin.php?nc=".time( )."' style='color:red'>进入后台</a>";
        echo "<body></html>";
        exit( );
    }
    echo "<html><head><meta HTTP-EQUIV='Content-Type' CONTENT='text/html; charset=utf-8'>";
    echo "<meta http-equiv='refresh' content='0.1;url=admin.php?nc=".time( )."'>";
    echo "<title>登陆成功--跳转中</title><style>*{font-size:12px}</style></head><body><script>location.href='admin.php?nc=".time( )."';</script>";
    echo "<a href='admin.php?nc=".time( )."'>正在转向中，如果长时间没跳转请单击这里</a>";
    echo "<body></html>";
    exit( );
}
$_obfuscate_jYuMjo_JjZGOj4uNlIeTh4s� = "";
$_obfuscate_jZCUkIiLjYaTjpOSlYmJjIo� = "";
if ( isset( $_GET['demo'] ) )
{
    $_obfuscate_jYuMjo_JjZGOj4uNlIeTh4s� = "test01";
    $_obfuscate_jZCUkIiLjYaTjpOSlYmJjIo� = "可可网络验证";
}
$_obfuscate_ioeUkIqVhpSTk5GTj4yJj5E� = 0;
if ( _obfuscate_k5OSjY_Rh4_HkYiOko6QhpM�( "cook_jz" ) == 1 )
{
    $_obfuscate_ioeUkIqVhpSTk5GTj4yJj5E� = 1;
}
if ( $_obfuscate_ioeUkIqVhpSTk5GTj4yJj5E� == 1 )
{
    $_obfuscate_jYuMjo_JjZGOj4uNlIeTh4s� = _obfuscate_k5OSjY_Rh4_HkYiOko6QhpM�( "cook_u" );
    $_obfuscate_jZCUkIiLjYaTjpOSlYmJjIo� = _obfuscate_k5OSjY_Rh4_HkYiOko6QhpM�( "cook_p" );
}
_obfuscate_lZWPjZSUjI6VkImViIySko8�( KSSINCDIR."_config.php" );
_obfuscate_lZWPjZSUjI6VkImViIySko8�( KSSINCDIR."inc.php" );
_obfuscate_lZWPjZSUjI6VkImViIySko8�( KSSROOTDIR."kss_api".DIRECTORY_SEPARATOR."BIG5.php" );
_obfuscate_lZWPjZSUjI6VkImViIySko8�( KSSROOTDIR."kss_api".DIRECTORY_SEPARATOR."GBK.php" );
_obfuscate_lZWPjZSUjI6VkImViIySko8�( KSSROOTDIR."kss_api".DIRECTORY_SEPARATOR."io_ext.php" );
echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">\r\n<html xmlns=\"http://www.w3.org/1999/xhtml\">\r\n<head>\r\n<title>";
echo ADMINWEBNAME;
echo "--";
echo KSSVERSION;
echo "  </title>\r\n<meta HTTP-EQUIV=\"Content-Type\" CONTENT=\"text/html; charset=utf-8\" />\r\n<meta name=\"服务端版本\" content=\"Version ";
echo KSSVERSION;
echo "\" />\r\n<meta name=\"开发商\" content=\"火云网络工作室  http://www.hphu.com  QQ188372002\" />\r\n<script type=\"text/javascript\" src=\"";
echo INSTALLPATH;
echo "kss_inc/js/jquery.1.3.2.pack.js\" charset=\"utf-8\"></script>\r\n<link rel=\"shortcut icon\" href=\"/favicon.ico\" />\r\n<style>\r\na{font-size:12px;color:#666;text-decoration:none;}\r\nbody{background:#ffffff url(../kss_inc/images/login_01.png) repeat-x;}\r\nform{margin:0;padding:0}\r\ninput{font-size:12px}\r\n#username{background:url(../kss_inc/images/user1.png) no-repeat;border:1px solid #ccc;width:200px;height:28px;padding:0 0 0 40px;margin:0;line-height:28px;}\r\n\r\n#password{font-size:12px;font-family: Fixedsys;line-height:24px;background:url(../kss_inc/images/passwordt.png) no-repeat;border:1px solid #ccc;color:#fff;width:200px;height:28px;padding:0 0 0 40px;margin:0;line-height:28px;}\r\n#input3{background:url(../kss_inc/images/password2.png) no-repeat;ime-mode:disabled;border:1px solid #ccc;width:200px!important;height:28px;padding:0 0 0 40px;margin:0;line-height:28px;}\r\n#chkimg{display:block;position:absolute;top:-26px;left:187px}\r\n#psssdiv{position:absolute;top:-100px;left:0px;width:200px;height:22px;line-height:22px;background-color:#fff;margin:0;font-size:12px;font-family: Fixedsys;color:#ccc;}\r\n</style>\r\n</head>\r\n<body  leftmargin=\"0\" topmargin=\"0\" marginwidth=\"0\" marginheight=\"0\">\r\n\r\n<script type=\"text/javascript\">\r\nvar imgtime=0;\r\nfunction t2p(s){\r\nvar e='';\r\nfor(var i = 0; i < s.length; i++){\r\nif(s.charCodeAt(i) < 256 ) {\r\ne=e+\"#\";\r\n}else{\r\ne=e+\"╳\";  \n}\r\n}\r\nreturn e;\r\n}\r\n\r\nfunction sTime(){var d,s;d = new Date();s=d.getTime();return(s);}\r\n$(document).ready(function(){\r\nimgtime=sTime();\r\n$(\"#input3\").bind(\"focus\",function(){\r\nif(sTime()-imgtime>50*1000){\r\n$(\"#chkimg\").attr(\"src\",\"./loginimg.php?rndid=\"+sTime());\r\nimgtime=sTime();\r\n}\r\n});\r\n$(\"#chkimg\").bind(\"click\",function(){\r\n$(\"#chkimg\").attr(\"src\",\"./loginimg.php?rndid=\"+sTime());\r\n});\r\n\r\n$(\"#password\").bind(\"click\",function(){\r\nvar c1=$(this).offset();\r\n$(\"#psssdiv\").css({top:c1.top+5,left:c1.left+40});\r\n$(this).val(\"\");\r\n$(\"#psssdiv\").text(\"\");\r\n});\r\n\r\n$(\"#password\").bind(\"keyup\",function(){\r\nvar e1=$(this).val();\r\n$(\"#psssdiv\").text(t2p(e1));\r\n});\r\n\r\n$(\"#psssdiv\").bind(\"click\",function(){\r\n$(\"#password\").click().focus();\r\n}).bind(\"dblclick\",function(){\r\n$(\"#password\").dblclick().focus();\r\n});\r\nwindow.setInterval(loadps, 200);\r\n$(\"#username\").focus();\r\n";
if ( $_obfuscate_ioeUkIqVhpSTk5GTj4yJj5E� == 1 )
{
    echo "$(\"#psssdiv\").text(t2p($(\"#password\").val()));\r\n$(\"#input3\").focus();\r\n";
}
if ( isset( $_GET['demo'] ) )
{
    echo "$(\"#input3\").val(\"8888\");\r\n$(\"#find_manager\").submit();\r\n";
}
echo "});\r\nfunction loadps(){\r\nvar c3=$(\"#password\").offset();\r\n$(\"#psssdiv\").css({top:c3.top+5,left:c3.left+40});\r\n}\r\n</script>\r\n<table id=\"__login\" width=\"940\" height=\"560\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" align=center>\r\n<form id=\"find_manager\" action=\"index.php?action=chklogin\" method=\"post\"> \r\n<tr>\r\n<td rowspan=\"3\" style=\"background:url(../kss_inc/images/login_02.png);\"  width=\"208\" height=\"560\">&nbsp;</td>\r\n<td style=\"background:url(../kss_inc/images/login_03.png);\"  width=\"517\" height=\"239\">&nbsp;</td>\r\n<td rowspan=\"3\" style=\"background:url(../kss_inc/images/login_04.png);\" width=\"215\" height=\"560\">&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:url(../kss_inc/images/login_05.png);\" width=\"517\" height=\"190\" align=center>\r\n<table width=\"230\" height=100\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" align=center>\r\n<tr>\r\n<td colspan=2><input type=\"text\" value=\"";
echo $_obfuscate_jYuMjo_JjZGOj4uNlIeTh4s�;
echo "\" name=\"username\" id=\"username\" maxlength=\"15\" AUTOCOMPLETE=\"off\"><br><br></td>\r\n</tr>\r\n<tr>\r\n<td colspan=2><input type=\"text\" value=\"";
echo $_obfuscate_jZCUkIiLjYaTjpOSlYmJjIo�;
echo "\" id=\"password\" name=\"password\"  maxlength=\"15\" AUTOCOMPLETE=\"off\"><br><br></td>\r\n</tr>\r\n<tr>\r\n<td colspan=2 align=left><input type=\"text\" name=\"loginimg\" maxlength=\"6\" AUTOCOMPLETE=\"off\" id=\"input3\"><div style=\"position:relative;\"><img id=\"chkimg\" src=\"./loginimg.php?rndid=";
echo time( );
echo "\"></div></td>\r\n</tr>\r\n<tr>\r\n<td width=120 nowarp><input type=checkbox ";
if ( $_obfuscate_ioeUkIqVhpSTk5GTj4yJj5E� == 1 )
{
    echo "checked ";
}
echo " value=1 name=jz id=jz ><label style=\"font-size:11px\" for=jz>记住密码</label></td><td><input style=\"margin-top:3px\" type=\"image\" src=\"../kss_inc/images/login_.png\"></td>\r\n</tr>\r\n</table>\t\t\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:url(../kss_inc/images/login_06.png);\" width=\"517\" height=\"131\" align=center>";
if ( ICPNUM != "" )
{
    echo "<a href=http://www.miibeian.gov.cn/ target=_blank>".ICPNUM."</a>";
}
echo "&nbsp;Ver: ";
echo KSSVERSION;
echo "</td>\r\n</tr>\r\n</table>\r\n<div id='psssdiv'>请输入密码，支持中文</div><div id=\"psssdiv2\"></div>\r\n<script>\r\n\r\n\r\n</script>\r\n</body>\r\n</html>";
?>
