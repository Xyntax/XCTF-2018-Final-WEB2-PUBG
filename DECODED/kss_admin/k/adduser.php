<?php
/*********************/
/*                   */
/*  Dezend for PHP5  */
/*         NWS       */
/*      Nulled.WS    */
/*                   */
/*********************/

function _obfuscate_jpOPh5OJiY6PkYaUiIiKho0�( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� = 1 )
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
_obfuscate_kY6LiJGJiIiRiIuRjomOiZA�( );
$_obfuscate_i5GVjZWQj4ePkJKMjJSRipM�[] = _obfuscate_hpCTj4mKj5WSkpWPjouJkoc�( );
$_obfuscate_jIaUiIeSjZWKlIqLkIqOioc� = new mysql_cls( );
$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU� = _obfuscate_iZSVk4mLkY_LlIeHh5WKlZA�( 8 );
if ( 1000 < LICTYPE && $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] != 9 )
{
    _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "特殊服务器，禁止后台添加用户！" );
}
$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "softid", "gp", "int", 0 );
$_obfuscate_j5WKlJOMkIyQjoePlYuSjJE� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "keys", "gp", "sqljs", "" );
$_obfuscate_k4mViI2Nj4mJkIuUj42JiIY� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "op", "gp", "sql", "" );
$_obfuscate_jZGRipSRkIeUiIeQjoaUjJI� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "select * from kss_tb_soft where `id`=".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE�." and pid=".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid'] );
if ( empty( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI� ) )
{
    _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "软件未找到" );
}
if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['softmode'] != "USOFT" )
{
    _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "只有用户名+密码模式登陆的软件才可以用本页面添加用户。" );
}
if ( $_obfuscate_k4mViI2Nj4mJkIuUj42JiIY� == "ok" )
{
    $_obfuscate_kYqTiZWUjZKLjZCVlImUi5A� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "managerid", "gp", "int", 0 );
    $_obfuscate_kJCVjoaIiYeKiI6UiYuIjYo� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "linknum", "gp", "int", 1 );
    $_obfuscate_iI_TiI_HjoiGj4eIkZSIjog� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "points", "gp", "int", 0 );
    $_obfuscate_kI2Sh4eRlYeIio_LjpOTjZI� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "tag", "gp", "sqljs", "" );
    $_obfuscate_k4_Gk5CUhoaJlZGNj42PiIs� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "bdinfo", "gp", "sqljs", "" );
    $_obfuscate_k4mUiJWNjpWTjYuJj4qRk5A� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "intro", "gp", "sqljs", "" );
    $_obfuscate_i4eIipGJiZWSlIeIh4uJj5Q� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "keyextattr", "gp", "sqljs", "" );
    if ( $_obfuscate_iI_TiI_HjoiGj4eIkZSIjog� < 0 )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "点数不能小于0" );
    }
    if ( $_obfuscate_kJCVjoaIiYeKiI6UiYuIjYo� < 1 )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "通道数不能小于1" );
    }
    if ( isset( $_POST['moreadd'] ) && $_POST['moreadd'] == 1 )
    {
        $_obfuscate_lYyIiYmPkJCIko6JjpWPio8� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "moreuserdata", "gp", "sqljs", "" );
        $_obfuscate_lYyIiYmPkJCIko6JjpWPio8� = trim( $_obfuscate_lYyIiYmPkJCIko6JjpWPio8� );
        $_obfuscate_lYyIiYmPkJCIko6JjpWPio8� = str_replace( "\r", "", $_obfuscate_lYyIiYmPkJCIko6JjpWPio8� );
        $_obfuscate_lYyIiYmPkJCIko6JjpWPio8� = str_replace( "\n\n\n\n", "\n", $_obfuscate_lYyIiYmPkJCIko6JjpWPio8� );
        $_obfuscate_lYyIiYmPkJCIko6JjpWPio8� = str_replace( "\n\n\n\n", "\n", $_obfuscate_lYyIiYmPkJCIko6JjpWPio8� );
        $_obfuscate_lYyIiYmPkJCIko6JjpWPio8� = str_replace( "\n\n\n\n", "\n", $_obfuscate_lYyIiYmPkJCIko6JjpWPio8� );
        $_obfuscate_lYyIiYmPkJCIko6JjpWPio8� = str_replace( "\n\n", "\n", $_obfuscate_lYyIiYmPkJCIko6JjpWPio8� );
        $_obfuscate_lYyIiYmPkJCIko6JjpWPio8� = str_replace( "\n\n", "\n", $_obfuscate_lYyIiYmPkJCIko6JjpWPio8� );
        $_obfuscate_lYyIiYmPkJCIko6JjpWPio8� = str_replace( "\n\n", "\n", $_obfuscate_lYyIiYmPkJCIko6JjpWPio8� );
        $_obfuscate_lYyIiYmPkJCIko6JjpWPio8� = str_replace( "\n\n", "\n", $_obfuscate_lYyIiYmPkJCIko6JjpWPio8� );
        $_obfuscate_lYyIiYmPkJCIko6JjpWPio8� = str_replace( "\n\n", "\n", $_obfuscate_lYyIiYmPkJCIko6JjpWPio8� );
        $_obfuscate_lYyIiYmPkJCIko6JjpWPio8� = str_replace( "\n\n", "\n", $_obfuscate_lYyIiYmPkJCIko6JjpWPio8� );
        $_obfuscate_jIiLi4uMjY2Ij4yPjIyUjoY� = explode( "\n", $_obfuscate_lYyIiYmPkJCIko6JjpWPio8� );
        if ( count( $_obfuscate_jIiLi4uMjY2Ij4yPjIyUjoY� ) < 1 )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "多用户数据为空" );
        }
        foreach ( $_obfuscate_jIiLi4uMjY2Ij4yPjIyUjoY� as $_obfuscate_koiIh4mRlJKGlIiGiJCUkI4� => $_obfuscate_lYeSkY6Th5SOlYuHjZGVio8� )
        {
            $_obfuscate_jI6Ti4qOkIaRj4yGkY2TlZQ� = explode( ",", $_obfuscate_lYeSkY6Th5SOlYuHjZGVio8� );
            if ( count( $_obfuscate_jI6Ti4qOkIaRj4yGkY2TlZQ� ) != 4 )
            {
                _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "数据格式错误，【帐号,密码,安全密码,天数】。".$_obfuscate_lYeSkY6Th5SOlYuHjZGVio8� );
            }
            if ( is_numeric( $_obfuscate_jI6Ti4qOkIaRj4yGkY2TlZQ�[3] ) )
            {
                _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "数据格式错误,天数应为数字。".$_obfuscate_lYeSkY6Th5SOlYuHjZGVio8� );
            }
            if ( strlen( $_obfuscate_jI6Ti4qOkIaRj4yGkY2TlZQ�[0] ) < 3 )
            {
                _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "数据格式错误,用户名长度小于5位。".$_obfuscate_lYeSkY6Th5SOlYuHjZGVio8� );
            }
            if ( strlen( $_obfuscate_jI6Ti4qOkIaRj4yGkY2TlZQ�[1] ) < 5 )
            {
                _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "数据格式错误,用户密码长度小于5位。".$_obfuscate_lYeSkY6Th5SOlYuHjZGVio8� );
            }
            if ( strlen( $_obfuscate_jI6Ti4qOkIaRj4yGkY2TlZQ�[2] ) < 8 )
            {
                _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "数据格式错误,安全密码长度小于8位。".$_obfuscate_lYeSkY6Th5SOlYuHjZGVio8� );
            }
            if ( is_numeric( $_obfuscate_jI6Ti4qOkIaRj4yGkY2TlZQ�[3] ) )
            {
                _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "数据格式错误,天数应为数字。".$_obfuscate_lYeSkY6Th5SOlYuHjZGVio8� );
            }
            if ( 1000 < $_obfuscate_jI6Ti4qOkIaRj4yGkY2TlZQ�[3] )
            {
                _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "数据格式错误,天数应小于1000。".$_obfuscate_lYeSkY6Th5SOlYuHjZGVio8� );
            }
        }
        $_obfuscate_i4mQlJGKioeNjJGMlI2LkZM� = "本次操作成功的帐号：<br>";
        foreach ( $_obfuscate_jIiLi4uMjY2Ij4yPjIyUjoY� as $_obfuscate_koiIh4mRlJKGlIiGiJCUkI4� => $_obfuscate_lYeSkY6Th5SOlYuHjZGVio8� )
        {
            $_obfuscate_jI6Ti4qOkIaRj4yGkY2TlZQ� = explode( ",", $_obfuscate_lYeSkY6Th5SOlYuHjZGVio8� );
            $_obfuscate_h4eSk4uGiZCKhoyNkIiTlI8� = $_obfuscate_jI6Ti4qOkIaRj4yGkY2TlZQ�[0];
            $_obfuscate_jZOIiIiJkJOGiY_KjoaGh4c� = $_obfuscate_jI6Ti4qOkIaRj4yGkY2TlZQ�[1];
            $_obfuscate_iY_Hk5KMh4uRkpKGkoeQkZI� = $_obfuscate_jI6Ti4qOkIaRj4yGkY2TlZQ�[2];
            $_obfuscate_iYmHlIeIio2Ni5CRjIeJkYk� = $_obfuscate_jI6Ti4qOkIaRj4yGkY2TlZQ�[3];
            $_obfuscate_iYmHlIeIio2Ni5CRjIeJkYk� = number_format( $_obfuscate_iYmHlIeIio2Ni5CRjIeJkYk�, 2, ".", "" );
            $_obfuscate_kJWMj42MlJKLi5KLio2Qj44� = $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']( "select * from kss_z_user_".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE�." where username='".$_obfuscate_h4eSk4uGiZCKhoyNkIiTlI8�."'" );
            if ( empty( $_obfuscate_kJWMj42MlJKLi5KLio2Qj44� ) )
            {
                _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "已存在同名帐号，请修改帐号名！".$_obfuscate_lYeSkY6Th5SOlYuHjZGVio8�."<br><br>".$_obfuscate_i4mQlJGKioeNjJGMlI2LkZM� );
            }
            if ( $_obfuscate_iYmHlIeIio2Ni5CRjIeJkYk� < 0 )
            {
                _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "天数不能小于0<br><br>".$_obfuscate_i4mQlJGKioeNjJGMlI2LkZM� );
            }
            if ( PETIME <= time( ) + $_obfuscate_iYmHlIeIio2Ni5CRjIeJkYk� * 86400 )
            {
                _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "当前用户最大天数可设置为".round( ( PETIME - time( ) - 86400 ) / 86400, 2 )."<br><br>".$_obfuscate_i4mQlJGKioeNjJGMlI2LkZM� );
            }
            $_obfuscate_lIyOkJGLj5KHiIyHiYiHiYY� = 0;
            $_obfuscate_i4mJk4yMj4_PkoeQlIqJiJI� = time( );
            $_obfuscate_i5KRj5SGiJSOi5OJh4uUlY4� = $_obfuscate_i4mJk4yMj4_PkoeQlIqJiJI�;
            $_obfuscate_kJSSjJKSkIyJiZCViI2TlJQ� = $_obfuscate_i4mJk4yMj4_PkoeQlIqJiJI� + 86400 * $_obfuscate_iYmHlIeIio2Ni5CRjIeJkYk�;
            $_obfuscate_lYyKjIyGkY2Gk4uUiZWIjI8� = 0;
            $_obfuscate_io6KiIyHkouMlY6LlImMiIc� = array( );
            $_obfuscate_io6KiIyHkouMlY6LlImMiIc�['managerid'] = $_obfuscate_kYqTiZWUjZKLjZCVlImUi5A�;
            $_obfuscate_io6KiIyHkouMlY6LlImMiIc�['username'] = $_obfuscate_h4eSk4uGiZCKhoyNkIiTlI8�;
            $_obfuscate_io6KiIyHkouMlY6LlImMiIc�['password'] = $_obfuscate_jZOIiIiJkJOGiY_KjoaGh4c�;
            $_obfuscate_io6KiIyHkouMlY6LlImMiIc�['password2'] = $_obfuscate_iY_Hk5KMh4uRkpKGkoeQkZI�;
            $_obfuscate_io6KiIyHkouMlY6LlImMiIc�['cday'] = $_obfuscate_iYmHlIeIio2Ni5CRjIeJkYk�;
            $_obfuscate_io6KiIyHkouMlY6LlImMiIc�['linknum'] = $_obfuscate_kJCVjoaIiYeKiI6UiYuIjYo�;
            $_obfuscate_io6KiIyHkouMlY6LlImMiIc�['points'] = $_obfuscate_iI_TiI_HjoiGj4eIkZSIjog�;
            $_obfuscate_io6KiIyHkouMlY6LlImMiIc�['tag'] = $_obfuscate_kI2Sh4eRlYeIio_LjpOTjZI�;
            $_obfuscate_io6KiIyHkouMlY6LlImMiIc�['bdinfo'] = $_obfuscate_k4_Gk5CUhoaJlZGNj42PiIs�;
            $_obfuscate_io6KiIyHkouMlY6LlImMiIc�['intro'] = $_obfuscate_k4mUiJWNjpWTjYuJj4qRk5A�;
            $_obfuscate_io6KiIyHkouMlY6LlImMiIc�['keyextattr'] = $_obfuscate_i4eIipGJiZWSlIeIh4uJj5Q�;
            $_obfuscate_io6KiIyHkouMlY6LlImMiIc�['cztimes'] = $_obfuscate_lIyOkJGLj5KHiIyHiYiHiYY�;
            $_obfuscate_io6KiIyHkouMlY6LlImMiIc�['addtime'] = $_obfuscate_i4mJk4yMj4_PkoeQlIqJiJI�;
            $_obfuscate_io6KiIyHkouMlY6LlImMiIc�['starttime'] = $_obfuscate_i5KRj5SGiJSOi5OJh4uUlY4�;
            $_obfuscate_io6KiIyHkouMlY6LlImMiIc�['endtime'] = $_obfuscate_kJSSjJKSkIyJiZCViI2TlJQ�;
            $_obfuscate_io6KiIyHkouMlY6LlImMiIc�['lasttime'] = $_obfuscate_lYyKjIyGkY2Gk4uUiZWIjI8�;
            $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSVjoiHkoeTlJSRiJGHiI0�( "kss_z_user_".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE�, $_obfuscate_io6KiIyHkouMlY6LlImMiIc�, "sync" );
            if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� === FALSE )
            {
                _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( $_obfuscate_lYeSkY6Th5SOlYuHjZGVio8�."    添加用户时出错".$_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4�( )."<br><br>".$_obfuscate_i4mQlJGKioeNjJGMlI2LkZM� );
            }
            $_obfuscate_i4mQlJGKioeNjJGMlI2LkZM� .= ",".$_obfuscate_h4eSk4uGiZCKhoyNkIiTlI8�;
        }
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "批量添加用户成功" );
    }
    else
    {
        $_obfuscate_h4eSk4uGiZCKhoyNkIiTlI8� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "username", "gp", "sqljs", "" );
        $_obfuscate_jZOIiIiJkJOGiY_KjoaGh4c� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "password", "gp", "sqljs", "" );
        $_obfuscate_iY_Hk5KMh4uRkpKGkoeQkZI� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "password2", "gp", "sqljs", "" );
        $_obfuscate_iYmHlIeIio2Ni5CRjIeJkYk� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "cday", "gp", "num", 0 );
        $_obfuscate_iYmHlIeIio2Ni5CRjIeJkYk� = number_format( $_obfuscate_iYmHlIeIio2Ni5CRjIeJkYk�, 2, ".", "" );
        $_obfuscate_kJWMj42MlJKLi5KLio2Qj44� = $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']( "select * from kss_z_user_".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE�." where username='".$_obfuscate_h4eSk4uGiZCKhoyNkIiTlI8�."'" );
        if ( empty( $_obfuscate_kJWMj42MlJKLi5KLio2Qj44� ) )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "已存在同名帐号，请修改帐号名！" );
        }
        if ( $_obfuscate_iYmHlIeIio2Ni5CRjIeJkYk� < 0 )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "天数不能小于0" );
        }
        if ( PETIME <= time( ) + $_obfuscate_iYmHlIeIio2Ni5CRjIeJkYk� * 86400 )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "当前用户最大天数可设置为".round( ( PETIME - time( ) - 86400 ) / 86400, 2 ) );
        }
        if ( strlen( $_obfuscate_h4eSk4uGiZCKhoyNkIiTlI8� ) < 3 )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "用户名最少3位" );
        }
        if ( strlen( $_obfuscate_jZOIiIiJkJOGiY_KjoaGh4c� ) < 5 )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "用户密码最少5位" );
        }
        if ( strlen( $_obfuscate_iY_Hk5KMh4uRkpKGkoeQkZI� ) < 8 )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "安全密码最少8位" );
        }
        $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['password'] = $_obfuscate_jZOIiIiJkJOGiY_KjoaGh4c�;
        $_obfuscate_lIyOkJGLj5KHiIyHiYiHiYY� = 0;
        $_obfuscate_i4mJk4yMj4_PkoeQlIqJiJI� = time( );
        $_obfuscate_i5KRj5SGiJSOi5OJh4uUlY4� = $_obfuscate_i4mJk4yMj4_PkoeQlIqJiJI�;
        $_obfuscate_kJSSjJKSkIyJiZCViI2TlJQ� = $_obfuscate_i4mJk4yMj4_PkoeQlIqJiJI� + 86400 * $_obfuscate_iYmHlIeIio2Ni5CRjIeJkYk�;
        $_obfuscate_lYyKjIyGkY2Gk4uUiZWIjI8� = 0;
        $_obfuscate_io6KiIyHkouMlY6LlImMiIc� = array( );
        $_obfuscate_io6KiIyHkouMlY6LlImMiIc�['managerid'] = $_obfuscate_kYqTiZWUjZKLjZCVlImUi5A�;
        $_obfuscate_io6KiIyHkouMlY6LlImMiIc�['username'] = $_obfuscate_h4eSk4uGiZCKhoyNkIiTlI8�;
        $_obfuscate_io6KiIyHkouMlY6LlImMiIc�['password'] = $_obfuscate_jZOIiIiJkJOGiY_KjoaGh4c�;
        $_obfuscate_io6KiIyHkouMlY6LlImMiIc�['password2'] = $_obfuscate_iY_Hk5KMh4uRkpKGkoeQkZI�;
        $_obfuscate_io6KiIyHkouMlY6LlImMiIc�['cday'] = $_obfuscate_iYmHlIeIio2Ni5CRjIeJkYk�;
        $_obfuscate_io6KiIyHkouMlY6LlImMiIc�['linknum'] = $_obfuscate_kJCVjoaIiYeKiI6UiYuIjYo�;
        $_obfuscate_io6KiIyHkouMlY6LlImMiIc�['points'] = $_obfuscate_iI_TiI_HjoiGj4eIkZSIjog�;
        $_obfuscate_io6KiIyHkouMlY6LlImMiIc�['tag'] = $_obfuscate_kI2Sh4eRlYeIio_LjpOTjZI�;
        $_obfuscate_io6KiIyHkouMlY6LlImMiIc�['bdinfo'] = $_obfuscate_k4_Gk5CUhoaJlZGNj42PiIs�;
        $_obfuscate_io6KiIyHkouMlY6LlImMiIc�['intro'] = $_obfuscate_k4mUiJWNjpWTjYuJj4qRk5A�;
        $_obfuscate_io6KiIyHkouMlY6LlImMiIc�['keyextattr'] = $_obfuscate_i4eIipGJiZWSlIeIh4uJj5Q�;
        $_obfuscate_io6KiIyHkouMlY6LlImMiIc�['cztimes'] = $_obfuscate_lIyOkJGLj5KHiIyHiYiHiYY�;
        $_obfuscate_io6KiIyHkouMlY6LlImMiIc�['addtime'] = $_obfuscate_i4mJk4yMj4_PkoeQlIqJiJI�;
        $_obfuscate_io6KiIyHkouMlY6LlImMiIc�['starttime'] = $_obfuscate_i5KRj5SGiJSOi5OJh4uUlY4�;
        $_obfuscate_io6KiIyHkouMlY6LlImMiIc�['endtime'] = $_obfuscate_kJSSjJKSkIyJiZCViI2TlJQ�;
        $_obfuscate_io6KiIyHkouMlY6LlImMiIc�['lasttime'] = $_obfuscate_lYyKjIyGkY2Gk4uUiZWIjI8�;
        $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSVjoiHkoeTlJSRiJGHiI0�( "kss_z_user_".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE�, $_obfuscate_io6KiIyHkouMlY6LlImMiIc�, "sync" );
        if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� === FALSE )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "添加用户时出错".$_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4�( ) );
        }
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "添加用户".$_obfuscate_h4eSk4uGiZCKhoyNkIiTlI8�."成功" );
    }
}
echo "<script>\r\nfunction closeat(){\r\n$(\".malertboxclosebtn\").click();\r\n}\r\n$(document).ready(function() {\t\r\n\r\n$(\"#chkmoreadd\").bind(\"click\",function(){\r\nif($(this).attr(\"checked\")==1){\r\n$(\".tr6\").hide();\r\n$(\".tr7\").show();\r\n}else{\r\n$(\".tr7\").hide();\r\n$(\".tr6\").show();\r\n}\r\n});\r\n\r\n$('#adduser').ajaxForm({\r\nbeforeSubmit:function (arr, \$form, options) {\r\nreturn true;\r\n},\r\nsuccess:function (responseText, statusText, xhr, \$form) {\r\nif(responseText.substr(0,2)!='ok'){\r\nmalert(responseText);\r\n}else{\r\n$(\"#load__script\").append(responseText.substr(2)); \r\nwindow.setTimeout(\"closeat()\", 1);\r\n}\r\n},\r\nerror:function(){isclickadd=0;alert(\"error!\");}\r\n});\r\n});\r\n</script>\r\n\r\n\r\n\r\n<div id='load__script'></div>\r\n<form id=\"adduser\" action=\"?action=adduser&op=ok&isajax=1&softid=";
echo $_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE�;
echo "\" method=\"post\">\r\n<div class=\"edittable\">\r\n<table class=\"edittable_th4\" width=\"97%\" height=\"35\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\r\n<tr>\r\n<td width=8 class=\"edittable_th1\">&nbsp;</td>\r\n<td width=250  class=\"edittable_th2\">";
echo $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['softname'];
echo "添加新用户</td>\r\n<td width=8 class=\"edittable_th3\">&nbsp;</td>\r\n<td>&nbsp;</td>\r\n<td width=6 class=\"edittable_th5\">&nbsp;</td>\r\n</tr>\r\n</table><br><br>\r\n\r\n<div>\r\n\r\n\r\n<table border=0  cellpadding=\"0\" cellspacing=\"0\" width='100%'>\r\n<tr><td valitn=top>\r\n<table border=0  cellpadding=\"5\" cellspacing=\"5\" >\t\r\n<tr>\r\n<td align=right>批量添加用户</td>\r\n<td align=left><input type='checkbox' name='moreadd' value='1' id=\"chkmoreadd\"></td>\r\n</tr>\r\n<tr>\r\n<td align=right>所属</td>\r\n<td align=left><select name=managerid style=\"width:200px\">";
$_obfuscate_hoaUkoqUi5WTh5KNjZWGh44� = $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']( "select * from kss_tb_manager where pid=".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']." and level<>7 order by level desc" );
foreach ( $_obfuscate_hoaUkoqUi5WTh5KNjZWGh44� as $_obfuscate_ioqTkYqPk4eUi4uSio2Pk5U� )
{
    echo "<option value=".$_obfuscate_ioqTkYqPk4eUi4uSio2Pk5U�['id'].">".$_obfuscate_ioqTkYqPk4eUi4uSio2Pk5U�['username']."</option>";
}
echo "</select></td>\r\n</tr>\r\n<tr class=\"tr6\">\r\n<td align=right>用户名</td>\r\n<td align=left><input class=\"longinput\" type=\"text\" maxlength=\"32\" name=\"username\" value=\"\" /></td>\r\n</tr>\r\n<tr class=\"tr6\">\r\n<td align=right>用户密码</td>\r\n<td align=left><input class=\"longinput\" type=\"text\" maxlength=\"32\"  name=\"password\" value=\"\"/></td>\r\n</tr>\r\n<tr class=\"tr6\">\r\n<td align=right>安全密码</td>\r\n<td align=left><input class=\"longinput\" type=\"text\" maxlength=\"32\" name=\"password2\" value=\"\" ></td>\r\n</tr>\r\n<tr class=\"tr6\">\r\n<td align=right>天数</td>\r\n<td align=left><input class=\"midinput\" type=\"text\" maxlength=\"6\" name=\"cday\" value=\"0.04\" /> </td>\r\n</tr>\r\n<tr class=\"tr7\" style=\"display:none;\">\r\n<td align=right>批量添加用户数据</td>\r\n<td align=left>每行一条用户信息  用户信息格式 用户名,密码,安全密码,天数<br><textarea name=\"moreuserdata\"  rows=\"12\" cols=\"60\" />用户名,密码,安全密码,天数</textarea></td>\r\n</tr>\r\n</table></td><td valign=top>\r\n<table border=0  cellpadding=\"5\" cellspacing=\"5\" >\r\n<tr>\r\n<td align=right>标签</td>\r\n<td align=left><input class=\"longinput\" type=\"text\" maxlength=\"100\" name=\"tag\" value=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td align=right>绑定信息</td>\r\n<td align=left><input class=\"longinput\" type=\"text\" maxlength=\"100\" name=\"bdinfo\" value=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td align=right>点数</td>\r\n<td align=left><input class=\"longinput\" type=\"text\" maxlength=\"6\" name=\"points\" value=\"0\" /></td>\r\n</tr>\r\n<tr>\r\n<td align=right>通道</td>\r\n<td align=left><input class=\"longinput\" type=\"text\" maxlength=\"4\" name=\"linknum\" value=\"1\" /></td>\r\n</tr>\r\n<tr>\r\n<td align=right>附属性</td>\r\n<td align=left><input class=\"longinput\" type=\"text\" maxlength=\"100\" name=\"keyextattr\" value=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td align=right>备注</td>\r\n<td align=left><input class=\"longinput\" type=\"text\" maxlength=\"100\" name=\"intro\" value=\"\" /></td>\r\n</tr>\r\n</table></td></tr>\r\n</table>\r\n\r\n</div>\r\n<div style=\"padding:10px 0 10px 150px\"><input id=\"addsubmit\" type=submit class=\"submitbtn\" onclick=\"if(isclickadd==1){return false;}else{isclickadd=1;return true}\" value=\"确认添加\"><img id=\"addnow\" style=\"display:none\" src=";
echo INSTALLPATH;
echo "kss_inc/images/load1.gif></div>\r\n</div>\r\n\r\n</form>\r\n</body>\r\n</html>";
?>
