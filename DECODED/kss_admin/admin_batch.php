<?php
/*********************/
/*                   */
/*  Dezend for PHP5  */
/*         NWS       */
/*      Nulled.WS    */
/*                   */
/*********************/

function _obfuscate_h42SipGLj4iSlIaIlYuKkJE�( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� = 1 )
{
    $_obfuscate_iJGPjJWLj4uLkIqVjYiHh48� = unpack( "C*", "ViewZendSourceCodeIsInvalid!" );
    do
    {
        $_obfuscate_iY2Oh5OGlIqQhpCJi5CMkog� = ( $_obfuscate_lZKViImJjo6UhouJj4aVi4Y�[$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4�] << 4 ) + ( $_obfuscate_lZKViImJjo6UhouJj4aVi4Y�[$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� + 1] >> 4 );
        $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� += 2;
    } while ( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� < 28 );
}

require( "../kss_inc/inc.php" );
$_obfuscate_lZOThomRipOIi5SRhpWRjY4� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "action", "gp", "sql", "" );
$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "softid", "gp", "int", 0 );
$_obfuscate_k4mViI2Nj4mJkIuUj42JiIY� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "op", "gp", "sql", "" );
$_obfuscate_jIaUiIeSjZWKlIqLkIqOioc� = new mysql_cls( );
$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU� = _obfuscate_iZSVk4mLkY_LlIeHh5WKlZA�( 8 );
if ( isset( $openids ) )
{
    $openids = array( 1 );
}
if ( !in_array( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['id'], $openids ) && stripos( $_SERVER['SERVER_NAME'], "v9.hphu.com" ) !== FALSE && $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] != 9 )
{
    _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "权限未对你开放" );
}
$_obfuscate_jZGRipSRkIeUiIeQjoaUjJI� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "select * from kss_tb_soft where id=".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE� );
if ( empty( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI� ) )
{
    _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "软件不存在" );
}
$_obfuscate_k5WOjYqNj4mOiJGGipOQiIY� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "table", "gp", "sql", "" );
$_obfuscate_kYqTiZWUjZKLjZCVlImUi5A� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "managerid", "gp", "int", 0 );
$_obfuscate_jo_SiI6SjIeSjoiMjoyTkpA� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "keyfix", "gp", "sql", "" );
$_obfuscate_iJWMjIiVi5OGjJOViY2Li48� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "ordernum", "gp", "sql", "" );
$_obfuscate_jpWNko2RipCJjIySjYyJkY4� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "addday", "gp", "num", "0" );
$_obfuscate_iI_TiI_HjoiGj4eIkZSIjog� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "points", "gp", "int", "0" );
$_obfuscate_lYqOkIyVi5WGhoqLhouThoo� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "tags", "gp", "sql", "" );
$_obfuscate_kJKGk5SVkY_RiI2TjY2RkI4� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "cztime", "gp", "time", "2000-01-01 00:00:00" );
$_obfuscate_j5WMjpGGjY_UipCPjY6GjYw� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "cztime0", "gp", "time", "2000-01-01 00:00:00" );
$_obfuscate_kJSSjJKSkIyJiZCViI2TlJQ� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "endtime", "gp", "time", "2000-01-01 00:00:00" );
$_obfuscate_lIiSi4yJkoqIiZCSk4yRlZU� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "addtime1", "gp", "time", "2000-01-01 00:00:00" );
$_obfuscate_hpSVho2Lh4qQiIiTkomLho8� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "addtime2", "gp", "time", "2000-01-01 00:00:00" );
$_obfuscate_h46Uj5SIkZOHioqGjZGQkY8� = strtotime( $_obfuscate_kJKGk5SVkY_RiI2TjY2RkI4� );
$_obfuscate_lY_Gi4mGlJKGjZSUj5GMjIY� = strtotime( $_obfuscate_j5WMjpGGjY_UipCPjY6GjYw� );
$_obfuscate_kIaKlIiUkZWRj4yLhoqUjJM� = $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['softmode'] == "USOFT" ? "充值" : "激活";
switch ( $_obfuscate_k4mViI2Nj4mJkIuUj42JiIY� )
{
    case "批量删除" :
        ob_clean( );
        _obfuscate_kY6LiJGJiIiRiIuRjomOiZA�( );
        $_obfuscate_jo2SkYaVh4_RjJKJjpWUjYc� = array( );
        if ( $_obfuscate_kYqTiZWUjZKLjZCVlImUi5A� != 0 )
        {
            $_obfuscate_jo2SkYaVh4_RjJKJjpWUjYc�['7'] = " managerid=".$_obfuscate_kYqTiZWUjZKLjZCVlImUi5A�." ";
        }
        if ( $_obfuscate_lYqOkIyVi5WGhoqLhouThoo� != "" )
        {
            $_obfuscate_jo2SkYaVh4_RjJKJjpWUjYc�['1'] = " tag like '".$_obfuscate_lYqOkIyVi5WGhoqLhouThoo�."%' ";
        }
        if ( $_obfuscate_k5WOjYqNj4mOiJGGipOQiIY� == "注册卡" )
        {
            $_obfuscate_h42UkpKSh46Jh4eHh46PkYw� = "kss_z_key_".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE�;
            if ( strlen( $_obfuscate_jo_SiI6SjIeSjoiMjoyTkpA� ) == 4 )
            {
                $_obfuscate_jo2SkYaVh4_RjJKJjpWUjYc�['6'] = " keyfix='".$_obfuscate_jo_SiI6SjIeSjoiMjoyTkpA�."' ";
            }
            if ( $_obfuscate_kJKGk5SVkY_RiI2TjY2RkI4� != "2000-01-01 00:00:00" )
            {
                if ( $_obfuscate_h46Uj5SIkZOHioqGjZGQkY8� < $_obfuscate_lY_Gi4mGlJKGjZSUj5GMjIY� )
                {
                    _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( $_obfuscate_kIaKlIiUkZWRj4yLhoqUjJM�."日期 前边的必须小于后边的！" );
                }
                if ( $_obfuscate_lY_Gi4mGlJKGjZSUj5GMjIY� < 946742400 )
                {
                    $_obfuscate_jo2SkYaVh4_RjJKJjpWUjYc�['8'] = " cztime < ".$_obfuscate_h46Uj5SIkZOHioqGjZGQkY8�." ";
                }
                else
                {
                    $_obfuscate_jo2SkYaVh4_RjJKJjpWUjYc�['8'] = " cztime between ".$_obfuscate_lY_Gi4mGlJKGjZSUj5GMjIY�." and ".$_obfuscate_h46Uj5SIkZOHioqGjZGQkY8�;
                }
            }
            if ( strlen( $_obfuscate_iJWMjIiVi5OGjJOViY2Li48� ) == 24 )
            {
                $_obfuscate_jo2SkYaVh4_RjJKJjpWUjYc�['2'] = " ordernum='".$_obfuscate_iJWMjIiVi5OGjJOViY2Li48�."' ";
            }
            if ( $_obfuscate_lIiSi4yJkoqIiZCSk4yRlZU� != "2000-01-01 00:00:00" || $_obfuscate_hpSVho2Lh4qQiIiTkomLho8� != "2000-01-01 00:00:00" )
            {
                if ( $_obfuscate_lIiSi4yJkoqIiZCSk4yRlZU� != "2000-01-01 00:00:00" && $_obfuscate_hpSVho2Lh4qQiIiTkomLho8� != "2000-01-01 00:00:00" && $_obfuscate_hpSVho2Lh4qQiIiTkomLho8� < $_obfuscate_lIiSi4yJkoqIiZCSk4yRlZU� )
                {
                    _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "添加日期后边的要比前边的小" );
                }
                if ( $_obfuscate_lIiSi4yJkoqIiZCSk4yRlZU� == "2000-01-01 00:00:00" )
                {
                    $_obfuscate_jo2SkYaVh4_RjJKJjpWUjYc�['11'] = " addtime <".strtotime( $_obfuscate_hpSVho2Lh4qQiIiTkomLho8� )." ";
                }
                else
                {
                    if ( $_obfuscate_hpSVho2Lh4qQiIiTkomLho8� == "2000-01-01 00:00:00" )
                    {
                        $_obfuscate_jo2SkYaVh4_RjJKJjpWUjYc�['11'] = " addtime >".strtotime( $_obfuscate_lIiSi4yJkoqIiZCSk4yRlZU� )." ";
                    }
                    else
                    {
                        $_obfuscate_jo2SkYaVh4_RjJKJjpWUjYc�['11'] = " addtime between ".strtotime( $_obfuscate_lIiSi4yJkoqIiZCSk4yRlZU� )." and ".strtotime( $_obfuscate_hpSVho2Lh4qQiIiTkomLho8� )." ";
                    }
                }
            }
        }
        else
        {
            $_obfuscate_h42UkpKSh46Jh4eHh46PkYw� = "kss_z_user_".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE�;
            if ( $_obfuscate_kJSSjJKSkIyJiZCViI2TlJQ� != "2000-01-01 00:00:00" )
            {
                $_obfuscate_jo2SkYaVh4_RjJKJjpWUjYc�['2'] = " endtime < ".strtotime( $_obfuscate_kJSSjJKSkIyJiZCViI2TlJQ� )." ";
            }
        }
        if ( empty( $_obfuscate_jo2SkYaVh4_RjJKJjpWUjYc� ) )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "你最少要选择一个条件！" );
        }
        ksort( &$_obfuscate_jo2SkYaVh4_RjJKJjpWUjYc� );
        $_obfuscate_j4mJh4aKjZKHhpOSiJKSjJI� = " where".implode( " and ", $_obfuscate_jo2SkYaVh4_RjJKJjpWUjYc� );
        $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "delete from ".$_obfuscate_h42UkpKSh46Jh4eHh46PkYw�.$_obfuscate_j4mJh4aKjZKHhpOSiJKSjJI�, "sync" );
        if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "批量删除成功，共影响".$_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->�����������������."条！<br>SQL：<input type=text style='width:400px' value=".YH2."delete from ".$_obfuscate_h42UkpKSh46Jh4eHh46PkYw�.$_obfuscate_j4mJh4aKjZKHhpOSiJKSjJI�.YH2.">" );
        }
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "批量删除失败：".$_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4�( )."<br>SQL：<input type=text style='width:400px' value=".YH2."delete from ".$_obfuscate_h42UkpKSh46Jh4eHh46PkYw�.$_obfuscate_j4mJh4aKjZKHhpOSiJKSjJI�.YH2.">" );
        break;
    case "批量锁定" :
        ob_clean( );
        _obfuscate_kY6LiJGJiIiRiIuRjomOiZA�( );
        $_obfuscate_jo2SkYaVh4_RjJKJjpWUjYc� = array( );
        if ( $_obfuscate_kYqTiZWUjZKLjZCVlImUi5A� != 0 )
        {
            $_obfuscate_jo2SkYaVh4_RjJKJjpWUjYc�['7'] = " managerid=".$_obfuscate_kYqTiZWUjZKLjZCVlImUi5A�." ";
        }
        if ( $_obfuscate_lYqOkIyVi5WGhoqLhouThoo� != "" )
        {
            $_obfuscate_jo2SkYaVh4_RjJKJjpWUjYc�['1'] = " tag like '".$_obfuscate_lYqOkIyVi5WGhoqLhouThoo�."%' ";
        }
        if ( $_obfuscate_k5WOjYqNj4mOiJGGipOQiIY� == "注册卡" )
        {
            $_obfuscate_h42UkpKSh46Jh4eHh46PkYw� = "kss_z_key_".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE�;
            if ( strlen( $_obfuscate_jo_SiI6SjIeSjoiMjoyTkpA� ) == 4 )
            {
                $_obfuscate_jo2SkYaVh4_RjJKJjpWUjYc�['6'] = " keyfix='".$_obfuscate_jo_SiI6SjIeSjoiMjoyTkpA�."' ";
            }
            if ( $_obfuscate_kJKGk5SVkY_RiI2TjY2RkI4� != "2000-01-01 00:00:00" )
            {
                if ( $_obfuscate_h46Uj5SIkZOHioqGjZGQkY8� < $_obfuscate_lY_Gi4mGlJKGjZSUj5GMjIY� )
                {
                    _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( $_obfuscate_kIaKlIiUkZWRj4yLhoqUjJM�."日期 前边的必须小于后边的！" );
                }
                if ( $_obfuscate_lY_Gi4mGlJKGjZSUj5GMjIY� < 946742400 )
                {
                    $_obfuscate_jo2SkYaVh4_RjJKJjpWUjYc�['8'] = " cztime < ".$_obfuscate_h46Uj5SIkZOHioqGjZGQkY8�." ";
                }
                else
                {
                    $_obfuscate_jo2SkYaVh4_RjJKJjpWUjYc�['8'] = " cztime between ".$_obfuscate_lY_Gi4mGlJKGjZSUj5GMjIY�." and ".$_obfuscate_h46Uj5SIkZOHioqGjZGQkY8�;
                }
            }
            if ( strlen( $_obfuscate_iJWMjIiVi5OGjJOViY2Li48� ) == 24 )
            {
                $_obfuscate_jo2SkYaVh4_RjJKJjpWUjYc�['2'] = " ordernum='".$_obfuscate_iJWMjIiVi5OGjJOViY2Li48�."' ";
            }
            if ( $_obfuscate_lIiSi4yJkoqIiZCSk4yRlZU� != "2000-01-01 00:00:00" || $_obfuscate_hpSVho2Lh4qQiIiTkomLho8� != "2000-01-01 00:00:00" )
            {
                if ( $_obfuscate_lIiSi4yJkoqIiZCSk4yRlZU� != "2000-01-01 00:00:00" && $_obfuscate_hpSVho2Lh4qQiIiTkomLho8� != "2000-01-01 00:00:00" && $_obfuscate_hpSVho2Lh4qQiIiTkomLho8� < $_obfuscate_lIiSi4yJkoqIiZCSk4yRlZU� )
                {
                    _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "添加日期后边的要比前边的小" );
                }
                if ( $_obfuscate_lIiSi4yJkoqIiZCSk4yRlZU� == "2000-01-01 00:00:00" )
                {
                    $_obfuscate_jo2SkYaVh4_RjJKJjpWUjYc�['11'] = " addtime <".strtotime( $_obfuscate_hpSVho2Lh4qQiIiTkomLho8� )." ";
                }
                else
                {
                    if ( $_obfuscate_hpSVho2Lh4qQiIiTkomLho8� == "2000-01-01 00:00:00" )
                    {
                        $_obfuscate_jo2SkYaVh4_RjJKJjpWUjYc�['11'] = " addtime >".strtotime( $_obfuscate_lIiSi4yJkoqIiZCSk4yRlZU� )." ";
                    }
                    else
                    {
                        $_obfuscate_jo2SkYaVh4_RjJKJjpWUjYc�['11'] = " addtime between ".strtotime( $_obfuscate_lIiSi4yJkoqIiZCSk4yRlZU� )." and ".strtotime( $_obfuscate_hpSVho2Lh4qQiIiTkomLho8� )." ";
                    }
                }
            }
        }
        else
        {
            $_obfuscate_h42UkpKSh46Jh4eHh46PkYw� = "kss_z_user_".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE�;
            if ( $_obfuscate_kJSSjJKSkIyJiZCViI2TlJQ� != "2000-01-01 00:00:00" )
            {
                $_obfuscate_jo2SkYaVh4_RjJKJjpWUjYc�['2'] = " endtime < ".strtotime( $_obfuscate_kJSSjJKSkIyJiZCViI2TlJQ� )." ";
            }
        }
        if ( empty( $_obfuscate_jo2SkYaVh4_RjJKJjpWUjYc� ) )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "你最少要选择一个条件！" );
        }
        ksort( &$_obfuscate_jo2SkYaVh4_RjJKJjpWUjYc� );
        $_obfuscate_j4mJh4aKjZKHhpOSiJKSjJI� = " where".implode( " and ", $_obfuscate_jo2SkYaVh4_RjJKJjpWUjYc� );
        $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "update ".$_obfuscate_h42UkpKSh46Jh4eHh46PkYw�." set islock=3 ".$_obfuscate_j4mJh4aKjZKHhpOSiJKSjJI�, "sync" );
        if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "批量锁定成功，共影响".$_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->�����������������."条！<br>SQL：<input type=text style='width:400px' value=".YH2."update ".$_obfuscate_h42UkpKSh46Jh4eHh46PkYw�." set islock=3 ".$_obfuscate_j4mJh4aKjZKHhpOSiJKSjJI�.YH2.">" );
        }
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "批量锁定失败：".$_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4�( )."<br>SQL：<input type=text style='width:400px' value=".YH2."update ".$_obfuscate_h42UkpKSh46Jh4eHh46PkYw�." set islock=3 ".$_obfuscate_j4mJh4aKjZKHhpOSiJKSjJI�.YH2.">" );
        break;
    case "批量解锁" :
        ob_clean( );
        _obfuscate_kY6LiJGJiIiRiIuRjomOiZA�( );
        $_obfuscate_jo2SkYaVh4_RjJKJjpWUjYc� = array( );
        if ( $_obfuscate_kYqTiZWUjZKLjZCVlImUi5A� != 0 )
        {
            $_obfuscate_jo2SkYaVh4_RjJKJjpWUjYc�['7'] = " managerid=".$_obfuscate_kYqTiZWUjZKLjZCVlImUi5A�." ";
        }
        if ( $_obfuscate_lYqOkIyVi5WGhoqLhouThoo� != "" )
        {
            $_obfuscate_jo2SkYaVh4_RjJKJjpWUjYc�['1'] = " tag like '".$_obfuscate_lYqOkIyVi5WGhoqLhouThoo�."%' ";
        }
        if ( $_obfuscate_k5WOjYqNj4mOiJGGipOQiIY� == "注册卡" )
        {
            $_obfuscate_h42UkpKSh46Jh4eHh46PkYw� = "kss_z_key_".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE�;
            if ( strlen( $_obfuscate_jo_SiI6SjIeSjoiMjoyTkpA� ) == 4 )
            {
                $_obfuscate_jo2SkYaVh4_RjJKJjpWUjYc�['6'] = " keyfix='".$_obfuscate_jo_SiI6SjIeSjoiMjoyTkpA�."' ";
            }
            if ( $_obfuscate_kJKGk5SVkY_RiI2TjY2RkI4� != "2000-01-01 00:00:00" )
            {
                if ( $_obfuscate_h46Uj5SIkZOHioqGjZGQkY8� < $_obfuscate_lY_Gi4mGlJKGjZSUj5GMjIY� )
                {
                    _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( $_obfuscate_kIaKlIiUkZWRj4yLhoqUjJM�."日期 前边的必须小于后边的！" );
                }
                if ( $_obfuscate_lY_Gi4mGlJKGjZSUj5GMjIY� < 946742400 )
                {
                    $_obfuscate_jo2SkYaVh4_RjJKJjpWUjYc�['8'] = " cztime < ".$_obfuscate_h46Uj5SIkZOHioqGjZGQkY8�." ";
                }
                else
                {
                    $_obfuscate_jo2SkYaVh4_RjJKJjpWUjYc�['8'] = " cztime between ".$_obfuscate_lY_Gi4mGlJKGjZSUj5GMjIY�." and ".$_obfuscate_h46Uj5SIkZOHioqGjZGQkY8�;
                }
            }
            if ( strlen( $_obfuscate_iJWMjIiVi5OGjJOViY2Li48� ) == 24 )
            {
                $_obfuscate_jo2SkYaVh4_RjJKJjpWUjYc�['2'] = " ordernum='".$_obfuscate_iJWMjIiVi5OGjJOViY2Li48�."' ";
            }
            if ( $_obfuscate_lIiSi4yJkoqIiZCSk4yRlZU� != "2000-01-01 00:00:00" || $_obfuscate_hpSVho2Lh4qQiIiTkomLho8� != "2000-01-01 00:00:00" )
            {
                if ( $_obfuscate_lIiSi4yJkoqIiZCSk4yRlZU� != "2000-01-01 00:00:00" && $_obfuscate_hpSVho2Lh4qQiIiTkomLho8� != "2000-01-01 00:00:00" && $_obfuscate_hpSVho2Lh4qQiIiTkomLho8� < $_obfuscate_lIiSi4yJkoqIiZCSk4yRlZU� )
                {
                    _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "添加日期后边的要比前边的小" );
                }
                if ( $_obfuscate_lIiSi4yJkoqIiZCSk4yRlZU� == "2000-01-01 00:00:00" )
                {
                    $_obfuscate_jo2SkYaVh4_RjJKJjpWUjYc�['11'] = " addtime <".strtotime( $_obfuscate_hpSVho2Lh4qQiIiTkomLho8� )." ";
                }
                else
                {
                    if ( $_obfuscate_hpSVho2Lh4qQiIiTkomLho8� == "2000-01-01 00:00:00" )
                    {
                        $_obfuscate_jo2SkYaVh4_RjJKJjpWUjYc�['11'] = " addtime >".strtotime( $_obfuscate_lIiSi4yJkoqIiZCSk4yRlZU� )." ";
                    }
                    else
                    {
                        $_obfuscate_jo2SkYaVh4_RjJKJjpWUjYc�['11'] = " addtime between ".strtotime( $_obfuscate_lIiSi4yJkoqIiZCSk4yRlZU� )." and ".strtotime( $_obfuscate_hpSVho2Lh4qQiIiTkomLho8� )." ";
                    }
                }
            }
        }
        else
        {
            $_obfuscate_h42UkpKSh46Jh4eHh46PkYw� = "kss_z_user_".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE�;
            if ( $_obfuscate_kJSSjJKSkIyJiZCViI2TlJQ� != "2000-01-01 00:00:00" )
            {
                $_obfuscate_jo2SkYaVh4_RjJKJjpWUjYc�['2'] = " endtime < ".strtotime( $_obfuscate_kJSSjJKSkIyJiZCViI2TlJQ� )." ";
            }
        }
        if ( empty( $_obfuscate_jo2SkYaVh4_RjJKJjpWUjYc� ) )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "你最少要选择一个条件！" );
        }
        ksort( &$_obfuscate_jo2SkYaVh4_RjJKJjpWUjYc� );
        $_obfuscate_j4mJh4aKjZKHhpOSiJKSjJI� = " where".implode( " and ", $_obfuscate_jo2SkYaVh4_RjJKJjpWUjYc� );
        $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "update ".$_obfuscate_h42UkpKSh46Jh4eHh46PkYw�." set islock=0 ".$_obfuscate_j4mJh4aKjZKHhpOSiJKSjJI�, "sync" );
        if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "批量解锁成功，共影响".$_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->�����������������."条！<br>SQL：<input type=text style='width:400px' value=".YH2."update ".$_obfuscate_h42UkpKSh46Jh4eHh46PkYw�." set islock=3 ".$_obfuscate_j4mJh4aKjZKHhpOSiJKSjJI�.YH2.">" );
        }
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "批量解锁失败：".$_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4�( )."<br>SQL：<input type=text style='width:400px' value=".YH2."update ".$_obfuscate_h42UkpKSh46Jh4eHh46PkYw�." set islock=3 ".$_obfuscate_j4mJh4aKjZKHhpOSiJKSjJI�.YH2.">" );
        break;
    case "批量导出" :
        ob_clean( );
        $_obfuscate_jo2SkYaVh4_RjJKJjpWUjYc� = array( );
        if ( $_obfuscate_kYqTiZWUjZKLjZCVlImUi5A� != 0 )
        {
            $_obfuscate_jo2SkYaVh4_RjJKJjpWUjYc�['7'] = " managerid=".$_obfuscate_kYqTiZWUjZKLjZCVlImUi5A�." ";
        }
        if ( $_obfuscate_lYqOkIyVi5WGhoqLhouThoo� != "" )
        {
            $_obfuscate_jo2SkYaVh4_RjJKJjpWUjYc�['1'] = " tag like '".$_obfuscate_lYqOkIyVi5WGhoqLhouThoo�."%' ";
        }
        if ( strlen( $_obfuscate_iJWMjIiVi5OGjJOViY2Li48� ) == 24 )
        {
            $_obfuscate_jo2SkYaVh4_RjJKJjpWUjYc�['2'] = " ordernum='".$_obfuscate_iJWMjIiVi5OGjJOViY2Li48�."' ";
        }
        if ( $_obfuscate_lIiSi4yJkoqIiZCSk4yRlZU� != "2000-01-01 00:00:00" || $_obfuscate_hpSVho2Lh4qQiIiTkomLho8� != "2000-01-01 00:00:00" )
        {
            if ( $_obfuscate_lIiSi4yJkoqIiZCSk4yRlZU� != "2000-01-01 00:00:00" && $_obfuscate_hpSVho2Lh4qQiIiTkomLho8� != "2000-01-01 00:00:00" && $_obfuscate_hpSVho2Lh4qQiIiTkomLho8� < $_obfuscate_lIiSi4yJkoqIiZCSk4yRlZU� )
            {
                _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "添加日期后边的要比前边的小" );
            }
            if ( $_obfuscate_lIiSi4yJkoqIiZCSk4yRlZU� == "2000-01-01 00:00:00" )
            {
                $_obfuscate_jo2SkYaVh4_RjJKJjpWUjYc�['11'] = " addtime <".strtotime( $_obfuscate_hpSVho2Lh4qQiIiTkomLho8� )." ";
            }
            else if ( $_obfuscate_hpSVho2Lh4qQiIiTkomLho8� == "2000-01-01 00:00:00" )
            {
                $_obfuscate_jo2SkYaVh4_RjJKJjpWUjYc�['11'] = " addtime >".strtotime( $_obfuscate_lIiSi4yJkoqIiZCSk4yRlZU� )." ";
            }
            else
            {
                $_obfuscate_jo2SkYaVh4_RjJKJjpWUjYc�['11'] = " addtime between ".strtotime( $_obfuscate_lIiSi4yJkoqIiZCSk4yRlZU� )." and ".strtotime( $_obfuscate_hpSVho2Lh4qQiIiTkomLho8� )." ";
            }
        }
        if ( strlen( $_obfuscate_jo_SiI6SjIeSjoiMjoyTkpA� ) == 4 )
        {
            $_obfuscate_jo2SkYaVh4_RjJKJjpWUjYc�['6'] = " keyfix='".$_obfuscate_jo_SiI6SjIeSjoiMjoyTkpA�."' ";
        }
        if ( $_obfuscate_kJKGk5SVkY_RiI2TjY2RkI4� != "2000-01-01 00:00:00" )
        {
            if ( $_obfuscate_h46Uj5SIkZOHioqGjZGQkY8� < $_obfuscate_lY_Gi4mGlJKGjZSUj5GMjIY� )
            {
                _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( $_obfuscate_kIaKlIiUkZWRj4yLhoqUjJM�."日期 前边的必须小于后边的！" );
            }
            if ( $_obfuscate_lY_Gi4mGlJKGjZSUj5GMjIY� < 946742400 )
            {
                $_obfuscate_jo2SkYaVh4_RjJKJjpWUjYc�['8'] = " cztime < ".$_obfuscate_h46Uj5SIkZOHioqGjZGQkY8�." ";
            }
            else
            {
                $_obfuscate_jo2SkYaVh4_RjJKJjpWUjYc�['8'] = " cztime between ".$_obfuscate_lY_Gi4mGlJKGjZSUj5GMjIY�." and ".$_obfuscate_h46Uj5SIkZOHioqGjZGQkY8�;
            }
        }
        if ( empty( $_obfuscate_jo2SkYaVh4_RjJKJjpWUjYc� ) )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "你最少要选择一个条件！" );
        }
        ksort( &$_obfuscate_jo2SkYaVh4_RjJKJjpWUjYc� );
        $_obfuscate_h42UkpKSh46Jh4eHh46PkYw� = "kss_z_key_".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE�;
        $_obfuscate_j4mJh4aKjZKHhpOSiJKSjJI� = " where".implode( " and ", $_obfuscate_jo2SkYaVh4_RjJKJjpWUjYc� );
        $_obfuscate_kIaSjoeRlIeJhomQkY6QjZI� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_lZGTiIiKhouKiZGLi5KUkI8�( "select `keyfix`,`keys`,`keyspassword` from ".$_obfuscate_h42UkpKSh46Jh4eHh46PkYw�.$_obfuscate_j4mJh4aKjZKHhpOSiJKSjJI� );
        if ( empty( $_obfuscate_kIaSjoeRlIeJhomQkY6QjZI� ) )
        {
            $_obfuscate_hoaLkYuIk5KVlIyHj4yTlIo� = "";
            foreach ( $_obfuscate_kIaSjoeRlIeJhomQkY6QjZI� as $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI� )
            {
                $_obfuscate_hoaLkYuIk5KVlIyHj4yTlIo� .= $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['keyfix'].$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['keys'].$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['keyspassword']."\r\n";
            }
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "批量导出注册卡成功！<br><textarea class=dwidth style='width:400px;height:200px'>".$_obfuscate_hoaLkYuIk5KVlIyHj4yTlIo�."</textarea><br>SQL：<input type=text style='width:400px' value=".YH2."select `keyfix`,`keys`,`keyspassword` from ".$_obfuscate_h42UkpKSh46Jh4eHh46PkYw�.$_obfuscate_j4mJh4aKjZKHhpOSiJKSjJI�.YH2.">" );
        }
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "没有找到需要导出的数据。<br>SQL：<input type=text style='width:400px' value=".YH2."select `keyfix`,`keys`,`keyspassword` from ".$_obfuscate_h42UkpKSh46Jh4eHh46PkYw�.$_obfuscate_j4mJh4aKjZKHhpOSiJKSjJI�.YH2.">" );
        break;
    case "批量加时" :
        ob_clean( );
        _obfuscate_kY6LiJGJiIiRiIuRjomOiZA�( );
        if ( $_obfuscate_jpWNko2RipCJjIySjYyJkY4� == 0 && $_obfuscate_iI_TiI_HjoiGj4eIkZSIjog� == 0 )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "加时和加点不能都为0，加时间或点数请用正数，减时间或点数请用负数！" );
        }
        $_obfuscate_jo2SkYaVh4_RjJKJjpWUjYc� = array( );
        $_obfuscate_h5OHlYqIh46Li4uMk5CMjo0� = "给";
        if ( $_obfuscate_lYqOkIyVi5WGhoqLhouThoo� != "" )
        {
            $_obfuscate_jo2SkYaVh4_RjJKJjpWUjYc�['1'] = " tag like '".$_obfuscate_lYqOkIyVi5WGhoqLhouThoo�."%' ";
            $_obfuscate_h5OHlYqIh46Li4uMk5CMjo0� .= "标签为".$_obfuscate_lYqOkIyVi5WGhoqLhouThoo�;
        }
        if ( $_obfuscate_kJSSjJKSkIyJiZCViI2TlJQ� != "2000-01-01 00:00:00" )
        {
            $_obfuscate_jo2SkYaVh4_RjJKJjpWUjYc�['2'] = " endtime > ".strtotime( $_obfuscate_kJSSjJKSkIyJiZCViI2TlJQ� )." ";
            $_obfuscate_h5OHlYqIh46Li4uMk5CMjo0� .= "到期日期大于".$_obfuscate_kJSSjJKSkIyJiZCViI2TlJQ�;
        }
        $_obfuscate_h5OHlYqIh46Li4uMk5CMjo0� .= "的用户批量加时";
        if ( empty( $_obfuscate_jo2SkYaVh4_RjJKJjpWUjYc� ) )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "你最少要选择一个条件【标签或到期日期】！" );
        }
        $_obfuscate_jo2SkYaVh4_RjJKJjpWUjYc�['3'] = " endtime <> ".PETIME." ";
        ksort( &$_obfuscate_jo2SkYaVh4_RjJKJjpWUjYc� );
        $_obfuscate_h42UkpKSh46Jh4eHh46PkYw� = "kss_z_user_".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE�;
        $_obfuscate_j4mJh4aKjZKHhpOSiJKSjJI� = " where".implode( " and ", $_obfuscate_jo2SkYaVh4_RjJKJjpWUjYc� );
        if ( $_obfuscate_jpWNko2RipCJjIySjYyJkY4� == 0 )
        {
            $_obfuscate_i5WOlZONiY6Ik5WSkI6Skos� = "`points`=`points`+".$_obfuscate_iI_TiI_HjoiGj4eIkZSIjog�;
        }
        else if ( $_obfuscate_iI_TiI_HjoiGj4eIkZSIjog� == 0 )
        {
            $_obfuscate_i5WOlZONiY6Ik5WSkI6Skos� = "`cday`=`cday`+".$_obfuscate_jpWNko2RipCJjIySjYyJkY4�.",`endtime`=`endtime`+".$_obfuscate_jpWNko2RipCJjIySjYyJkY4� * 86400;
        }
        else
        {
            $_obfuscate_i5WOlZONiY6Ik5WSkI6Skos� = "`cday`=`cday`+".$_obfuscate_jpWNko2RipCJjIySjYyJkY4�.",`endtime`=`endtime`+".$_obfuscate_jpWNko2RipCJjIySjYyJkY4� * 86400.", `points`=`points`+".$_obfuscate_iI_TiI_HjoiGj4eIkZSIjog�;
        }
        if ( 0 < $_obfuscate_jpWNko2RipCJjIySjYyJkY4� )
        {
            if ( !in_array( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['id'], $openids ) && stripos( $_SERVER['SERVER_NAME'], "v9.hphu.com" ) !== FALSE && $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] != 9 )
            {
                _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "禁止加时操作！" );
            }
            $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']( "insert into `kss_tb_log_addcday` (`pid`,`managerid`,`softid`,`addtime`,`cday`,`username`,`intro`) VALUES (".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid'].",".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['id'].",".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE�.",".time( ).",".$_obfuscate_jpWNko2RipCJjIySjYyJkY4�.",'','批量，标签【".$_obfuscate_lYqOkIyVi5WGhoqLhouThoo�."】到期日期大于【".$_obfuscate_kJSSjJKSkIyJiZCViI2TlJQ�."】，加时".$_obfuscate_jpWNko2RipCJjIySjYyJkY4�."天')", "notsync" );
            if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� !== TRUE )
            {
                $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "REPAIR TABLE `kss_tb_log_addcday`", "notsync" );
            }
        }
        $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "update ".$_obfuscate_h42UkpKSh46Jh4eHh46PkYw�." set ".$_obfuscate_i5WOlZONiY6Ik5WSkI6Skos�." ".$_obfuscate_j4mJh4aKjZKHhpOSiJKSjJI�, "sync" );
        if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� )
        {
            $_obfuscate_kZWHjJGJkpOMjZGQkIuHiZU� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->�����������������;
            $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5U� = "insert into kss_z_cz_".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE�." (`addtime`,`cztype`,`username`,`oldcday`,`newcday`,`oldtimes`,`newtimes`,`keys`,`tzxguser`) values\t(".time( ).",10,'admin_addtime',0,".$_obfuscate_jpWNko2RipCJjIySjYyJkY4�.",0,".$_obfuscate_iI_TiI_HjoiGj4eIkZSIjog�.",'".$_obfuscate_h5OHlYqIh46Li4uMk5CMjo0�."','')";
            $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5U� );
            if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� !== TRUE )
            {
                _obfuscate_h4aIlI6QlYmUkY6MlI6Qhos�( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5U�, $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4�( ), __FILE__, 289 );
            }
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "批量加时成功，共改变".$_obfuscate_kZWHjJGJkpOMjZGQkIuHiZU�."用户的时间！<br>SQL：<input type=text style='width:400px' value=".YH2."update ".$_obfuscate_h42UkpKSh46Jh4eHh46PkYw�." set ".$_obfuscate_i5WOlZONiY6Ik5WSkI6Skos�." ".$_obfuscate_j4mJh4aKjZKHhpOSiJKSjJI�.YH2.">" );
        }
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "批量加时失败：".$_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4�( )."<br>SQL：<input type=text style='width:400px' value=".YH2."update ".$_obfuscate_h42UkpKSh46Jh4eHh46PkYw�." set ".$_obfuscate_i5WOlZONiY6Ik5WSkI6Skos�." ".$_obfuscate_j4mJh4aKjZKHhpOSiJKSjJI�.YH2.">" );
}
$_obfuscate_kouLj4_JkJWKkJCQkIaMjZE� = "批处理数据";
include( dirname( __FILE__ ).DIRECTORY_SEPARATOR."c_head.php" );
$_obfuscate_kIiMk4_SkpOVho2SjoyMjZU� = $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']( "select `id`,`username`,`level` from `kss_tb_manager` where `pid`=".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']." and isdel=0 order by id asc" );
echo "\r\n<script type=\"text/javascript\">\r\n$(document).ready(function() {\r\n$('#admin_batch').ajaxForm({\r\nbeforeSubmit:function (arr, \$form, options) {\r\nif($(\"#op_1\").attr(\"checked\")==true){\r\nif(confirm(\"批量删除是将数据从数据库中彻底删除，操作不可还原！\\r\\n\\r\\n请在批量删除前做好数据库备份，以防数据丢失。\\r\\n\\r\\n是否继续执行批量删除操作？\")){\r\nreturn true; \r\n}else{\r\nreturn false;\r\n}\r\n}else{\r\nreturn true;\r\n}\r\n},\r\nsuccess:function (responseText, statusText, xhr, \$form) {\r\nif($(\"#op_2\").attr(\"checked\")==true){\r\nmalert(responseText,'导出数据',420,300);\r\n}else{\r\nmalert(responseText); \r\n}\r\n},\r\nerror:function(){isclickadd=0;alert(\"error!\");}\r\n});\r\n$(\"#cztime,#cztime0,#endtime,#addtime1,#addtime2\").date_input({addhss: \"00:00:00\"});\r\n$(\"#tabs01\").ksstabs();\r\n$(\"input[id^='table_']\").bind(\"click\",function(){\r\nif($(this).attr(\"id\")==\"table_1\"){\r\n$(\"#b_table_1\").show();\r\n$(\"#b_table_2\").hide();\r\n$(\"#b_keyg\").show();\r\n$(\"#ordernumtr,#addtimetr\").show();\t\r\n}else{\r\n$(\"#b_table_2\").show();\r\n$(\"#b_table_1\").hide();\t\r\n$(\"#b_keyg\").hide();\t\r\n$(\"#ordernumtr,#addtimetr\").hide();\t\r\n}\t\r\n});\r\n$(\"input[name='op']\").bind(\"click\",function(){\r\nif($(this).val()=='批量加时'){\r\n$(\"#b_js\").show();\t\r\n$(\"#b_notaddtime\").hide();\r\n$(\"#b_jds\").show();\t\r\n$(\"#table_1\").attr('disabled','disabled');\t\r\n$(\"#table_2\").attr('disabled','');\r\n$(\"#table_2\").click();\t\r\n$(\"#b_etime\").text(\"到期日期大于\");\r\n}else if($(this).val()=='批量导出'){\t\r\n$(\"#b_notaddtime\").show();\r\n$(\"#b_js\").hide();\t\r\n$(\"#b_jds\").hide();\t\r\n$(\"#table_1\").attr('disabled','');\r\n$(\"#table_2\").attr('disabled','disabled');\t\r\n$(\"#table_1\").click();\t\r\n$(\"#b_etime\").text(\"到期日期小于\");\r\n}else{\t\t\r\n$(\"#b_notaddtime\").show();\r\n$(\"#b_js\").hide();\t\r\n$(\"#b_jds\").hide();\t\t\r\n$(\"#table_1\").attr('disabled','');\t\r\n$(\"#table_2\").attr('disabled','');\r\n$(\"#b_etime\").text(\"到期日期小于\");\r\n}\r\n\r\n});\r\n\r\n\r\n});\r\n\r\n</script>\r\n<form id=\"admin_batch\" method=\"post\"> \r\n<input type=\"hidden\" alt=\"ajax提交必须添加此项\" name=\"isajax\" value=\"1\" />\r\n<input type=\"hidden\" name=\"softid\" id=\"softid\" value=\"";
echo $_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE�;
echo "\" />\r\n\r\n<div class=\"edittable\">\r\n<table class=\"edittable_th4\" width=\"97%\" height=\"35\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\r\n<tr>\r\n<td width=8 class=\"edittable_th1\">&nbsp;</td>\r\n<td width=250  class=\"edittable_th2\">";
echo $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['softname'];
echo "批量处理数据</td>\r\n<td width=8 class=\"edittable_th3\">&nbsp;</td>\r\n<td>&nbsp;</td>\r\n<td width=6 class=\"edittable_th5\">&nbsp;</td>\r\n</tr>\r\n</table><br><br>\r\n\r\n<div>\r\n<table border=0  cellpadding=\"5\" cellspacing=\"5\" >\r\n<tr>\r\n<td align=right>执行操作</td>\r\n<td align=left>\r\n<input type=radio value='批量删除' name=\"op\" id=\"op_1\" checked><label for=\"op_1\">批量删除</label>&nbsp;&nbsp;&nbsp;&nbsp;\r\n<input type=radio value='批量锁定' name=\"op\" id=\"op_3\"><label for=\"op_3\">批量锁定</label>&nbsp;&nbsp;&nbsp;&nbsp;\r\n<input type=radio value='批量解锁' name=\"op\" id=\"op_4\"><label for=\"op_4\">批量解锁</label>&nbsp;&nbsp;&nbsp;&nbsp;\r\n<input type=radio value='批量导出' name=\"op\" id=\"op_2\"><label for=\"op_2\">批量导出</label>&nbsp;&nbsp;&nbsp;&nbsp;\r\n<input type=radio value='批量加时' name=\"op\" id=\"op_5\"><label for=\"op_5\">批量加时加点</label>\r\n</td>\r\n</tr>\r\n<tr>  \r\n<td align=right>操作对像</td>\r\n<td align=left>\r\n<input type=radio value='注册卡' name=\"table\" id=\"table_1\" checked><label for=\"table_1\">注册卡</label>&nbsp;&nbsp;&nbsp;&nbsp;\r\n<input type=radio value='用户' name=\"table\" id=\"table_2\"><label for=\"table_2\">用户（卡号模式的已激活注册卡在用户表以10位用户名+22位密码的形式表示）</label>\r\n</td>\r\n</tr>\r\n<tr id=\"b_notaddtime\">\r\n<td align=right>所属用户</td>\r\n<td align=left>\t\t\t\t\t\r\n<select name='managerid'>\r\n<option value=0>所有后台用户</option>\r\n";
foreach ( $_obfuscate_kIiMk4_SkpOVho2SjoyMjZU� as $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI� )
{
    echo "\t\t\t<option value='".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['id']."'>".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['username']."[".$_obfuscate_jJCMjYyHjpSTiJCNiYiIkpE�[$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['level']]."]</option>";
}
echo "\t\r\n</select>\r\n</td>\r\n</tr>\r\n<tr id=\"b_keyg\"><td align=right>注册卡类</td><td align=left><select name=\"keyfix\" id=\"keygroupid\">\r\n<option value='0'>不限</option>\r\n";
echo _obfuscate_lIeLiY6Gk4aNiY2Si4uJiIs�( $_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE�, 0, 2 );
echo "</select></td></tr>\r\n<tr id=\"b_js\" style=\"display:none\">\r\n<td align=right>加时</td>\r\n<td align=left><input class=\"smlinput\" type=\"text\" maxlength=\"4\" name=\"addday\" id=\"addday\" value=\"\" />天，0.04天约等于1小时</td>\r\n</tr>\r\n<tr id=\"b_jds\" style=\"display:none\">\r\n<td align=right>加点</td>\r\n<td align=left><input class=\"smlinput\" type=\"text\" maxlength=\"4\" name=\"points\" id=\"points\" value=\"\" />点</td>\r\n</tr>\r\n<tr>\r\n<td align=right>标签等于</td>\r\n<td align=left><input class=\"longinput\" type=\"text\" maxlength=\"50\" name=\"tags\" id=\"tags\" value=\"\" /></td>\r\n</tr>\r\n<tr id='ordernumtr'>\r\n<td align=right>订单号</td>\r\n<td align=left><input class=\"longinput\" type=\"text\" maxlength=\"24\" name=\"ordernum\" id=\"ordernum\" value=\"\" /></td>\r\n</tr>\r\n<tr id=\"addtimetr\" malt=\"如果不用该条件，请删除输入框里的内容\">\r\n<td align=right>添加日期</td>\r\n<td align=left><input class=\"longinput\" type=\"text\" maxlength=\"19\" name=\"addtime1\" id=\"addtime1\" value=\"\" />&lt; 日期 &lt;<input class=\"longinput\" type=\"text\" maxlength=\"19\" name=\"addtime2\" id=\"addtime2\" value=\"\" /></td>\r\n</tr>\r\n<tr id=\"b_table_1\" malt=\"用户模式已使用的充值卡、注册卡号模式已激活的注册卡，充值或激活日期在某天之前的<br>如果想选未充值或未激活的注册卡，这里选一个很早的时间即可，比如2010年的某一天<br>如果不用该条件，请删除输入框里的内容\">\r\n<td align=right>";
echo $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['softmode'] == "USOFT" ? "充值" : "激活";
echo "日期</td>\r\n<td align=left><input class=\"longinput\" type=\"text\" maxlength=\"19\" name=\"cztime0\" id=\"cztime0\" value=\"\" />&lt; 日期 &lt;<input class=\"longinput\" type=\"text\" maxlength=\"19\" name=\"cztime\" id=\"cztime\" value=\"\" /></td>\r\n</tr>\r\n<tr id=\"b_table_2\" style=\"display:none\" malt=\"如果不用该条件，请删除输入框里的内容\">\r\n<td align=right id=\"b_etime\">到期日期小于</td>\r\n<td align=left><input class=\"longinput\" type=\"text\" maxlength=\"19\" name=\"endtime\" id=\"endtime\" value=\"\" /></td>\r\n</tr>\r\n</table>\r\n\r\n</div>\r\n<div style=\"padding:10px 0 10px 150px\">&nbsp;&nbsp;&nbsp;&nbsp;<input type=submit name=submit class=\"submitbtn\" id=\"submit1\" value=\"执行操作\"></div>\r\n</div>\r\n\r\n</form>\r\n</body>\r\n</html>";
?>
