<?php
/*********************/
/*                   */
/*  Dezend for PHP5  */
/*         NWS       */
/*      Nulled.WS    */
/*                   */
/*********************/

function _obfuscate_k4qTkYmKjpWRh42TlIeVlIo�( )
{
    global $_obfuscate_mGKRY4dMuU6bZZJfh1_TX5k�;
    global $_obfuscate_kJCSj4qIjZCUjZSQlYuKi4s�;
    global $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�;
    global $_obfuscate_ho_Ik5KOh5KVh4eGlJCNjpM�;
    global $_obfuscate_j42OiJORiY6OjYuMkY2Lj4k�;
    global $_obfuscate_h5KGh42MlI2Ij5WRjI6Nh48�;
    $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_jIuSjYuUkJGHlYuPjZOQjY4�( $_obfuscate_mGKRY4dMuU6bZZJfh1_TX5k�, 1 );
    $_obfuscate_joyJlIaJkoePkYqNk4iVjIY� = $_obfuscate_ho_Ik5KOh5KVh4eGlJCNjpM�->_obfuscate_jIuSjYuUkJGHlYuPjZOQjY4�( $_obfuscate_kJCSj4qIjZCUjZSQlYuKi4s�, 0 );
    echo "123456789012345678901234567890123456789012345678901234567890123456789012345678901234567890123456789012345678901234567890";
    if ( $_obfuscate_joyJlIaJkoePkYqNk4iVjIY� == "success" )
    {
        _obfuscate_lJSMlYuJk5SMkI_KiI_RiIk�( "↓↓↓↓↓↓↓↓↓↓↓连接备用服务器".$_obfuscate_kJCSj4qIjZCUjZSQlYuKi4s�['dbhost']."数据库".$_obfuscate_kJCSj4qIjZCUjZSQlYuKi4s�['dbname']."成功" );
    }
    else
    {
        _obfuscate_lJSMlYuJk5SMkI_KiI_RiIk�( "↑↑↑↑↑↑↑↑↑↑↑连接备用数据库".$_obfuscate_kJCSj4qIjZCUjZSQlYuKi4s�['dbhost']."数据库".$_obfuscate_kJCSj4qIjZCUjZSQlYuKi4s�['dbname']."失败,".SYNCTIME."秒后自动重试" );
        exit( );
    }
    $_obfuscate_iouNho2VkZGNi4qGhoiLiJA� = array( );
    $_obfuscate_hoqLk5OLlIuMkIuRk5CNlJA� = $_obfuscate_ho_Ik5KOh5KVh4eGlJCNjpM�->_obfuscate_lZGTiIiKhouKiZGLi5KUkI8�( "select * from `kss_tb_sql_active` order by id asc" );
    if ( !empty( $_obfuscate_hoqLk5OLlIuMkIuRk5CNlJA� ) )
    {
        _obfuscate_lJSMlYuJk5SMkI_KiI_RiIk�( "开始处理kss_tb_sql_active表" );
        $_obfuscate_kpWKiI2Jj5SGipKVkI_OjY8� = 0;
        foreach ( $_obfuscate_hoqLk5OLlIuMkIuRk5CNlJA� as $_obfuscate_lJCSkoeMho2PlJOLiouJj4Y� )
        {
            _obfuscate_kZWOkouLho6Uko2OjIqMjI0�( );
            $_obfuscate_kpWKiI2Jj5SGipKVkI_OjY8� = $_obfuscate_lJCSkoeMho2PlJOLiouJj4Y�['id'];
            $_obfuscate_j5KIipONlJSQiYmTiYeVlYk� = "kss_z_user_".$_obfuscate_lJCSkoeMho2PlJOLiouJj4Y�['tbname'];
            $_obfuscate_jo6SlY_VkouJhoqGio2IiZI� = "kss_z_key_".$_obfuscate_lJCSkoeMho2PlJOLiouJj4Y�['tbname'];
            $_obfuscate_i4yKj4eSi4mRkIqSkY6Piok� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "select * from ".$_obfuscate_j5KIipONlJSQiYmTiYeVlYk�." where `username`='".$_obfuscate_lJCSkoeMho2PlJOLiouJj4Y�['username']."'" );
            if ( empty( $_obfuscate_i4yKj4eSi4mRkIqSkY6Piok� ) )
            {
                $_obfuscate_joaVlZWPkYeKi5WTiZWVkYw� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "select * from ".$_obfuscate_jo6SlY_VkouJhoqGio2IiZI�." where `keys`='".substr( $_obfuscate_lJCSkoeMho2PlJOLiouJj4Y�['username'], 4, 6 )."' and `keyfix`='".substr( $_obfuscate_lJCSkoeMho2PlJOLiouJj4Y�['username'], 0, 4 )."'" );
                if ( empty( $_obfuscate_joaVlZWPkYeKi5WTiZWVkYw� ) )
                {
                    $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5U� = "delete from ".$_obfuscate_j5KIipONlJSQiYmTiYeVlYk�." where `username`='".$_obfuscate_lJCSkoeMho2PlJOLiouJj4Y�['username']."'";
                    $_obfuscate_iouNho2VkZGNi4qGhoiLiJA�[] = array( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5U�, 2 );
                    _obfuscate_lJSMlYuJk5SMkI_KiI_RiIk�( "主服未找到注册卡".$_obfuscate_lJCSkoeMho2PlJOLiouJj4Y�['username']."，删除备服用户" );
                    continue;
                }
                else
                {
                    if ( $_obfuscate_joaVlZWPkYeKi5WTiZWVkYw�['islock'] != 0 )
                    {
                        $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5U� = "update ".$_obfuscate_j5KIipONlJSQiYmTiYeVlYk�." set islock=".$_obfuscate_joaVlZWPkYeKi5WTiZWVkYw�['islock']." where `username`='".$_obfuscate_lJCSkoeMho2PlJOLiouJj4Y�['username']."'";
                        $_obfuscate_iouNho2VkZGNi4qGhoiLiJA�[] = array( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5U�, 2 );
                        _obfuscate_lJSMlYuJk5SMkI_KiI_RiIk�( "主服注册卡用户被锁定".$_obfuscate_lJCSkoeMho2PlJOLiouJj4Y�['username']."，锁定备服注册卡用户" );
                        continue;
                    }
                    if ( $_obfuscate_joaVlZWPkYeKi5WTiZWVkYw�['isback'] != 0 )
                    {
                        $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5U� = "delete from ".$_obfuscate_j5KIipONlJSQiYmTiYeVlYk�." where `username`='".$_obfuscate_lJCSkoeMho2PlJOLiouJj4Y�['username']."'";
                        $_obfuscate_iouNho2VkZGNi4qGhoiLiJA�[] = array( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5U�, 2 );
                        _obfuscate_lJSMlYuJk5SMkI_KiI_RiIk�( "主服注册卡退款".$_obfuscate_lJCSkoeMho2PlJOLiouJj4Y�['username']."，删除备服注册卡用户" );
                        continue;
                    }
                    $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k� = array( );
                    $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['username'] = $_obfuscate_joaVlZWPkYeKi5WTiZWVkYw�['keyfix'].$_obfuscate_joaVlZWPkYeKi5WTiZWVkYw�['keys'];
                    $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['password'] = substr( $_obfuscate_joaVlZWPkYeKi5WTiZWVkYw�['keyspassword'], 0, 10 );
                    $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['password2'] = substr( $_obfuscate_joaVlZWPkYeKi5WTiZWVkYw�['keyspassword'], 10 );
                    $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['addtime'] = $_obfuscate_lJCSkoeMho2PlJOLiouJj4Y�['starttime'];
                    $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['starttime'] = $_obfuscate_lJCSkoeMho2PlJOLiouJj4Y�['starttime'];
                    $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['managerid'] = $_obfuscate_joaVlZWPkYeKi5WTiZWVkYw�['managerid'];
                    $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['cday'] = $_obfuscate_joaVlZWPkYeKi5WTiZWVkYw�['cday'];
                    $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['points'] = $_obfuscate_joaVlZWPkYeKi5WTiZWVkYw�['points'];
                    $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['tag'] = $_obfuscate_joaVlZWPkYeKi5WTiZWVkYw�['tag'];
                    $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['linknum'] = $_obfuscate_joaVlZWPkYeKi5WTiZWVkYw�['linknum'];
                    $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['keyextattr'] = $_obfuscate_joaVlZWPkYeKi5WTiZWVkYw�['keyextattr'];
                    $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['endtime'] = $_obfuscate_lJCSkoeMho2PlJOLiouJj4Y�['starttime'] + $_obfuscate_joaVlZWPkYeKi5WTiZWVkYw�['cday'] * 86400;
                    $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['cztimes'] = 1;
                    $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5U� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSVjoiHkoeTlJSRiJGHiI0�( $_obfuscate_j5KIipONlJSQiYmTiYeVlYk�, $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�, "sql" );
                    $_obfuscate_iouNho2VkZGNi4qGhoiLiJA�[] = array( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5U�, 1 );
                    $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5U� = "update `".$_obfuscate_jo6SlY_VkouJhoqGio2IiZI�."` set cztime=".$_obfuscate_lJCSkoeMho2PlJOLiouJj4Y�['starttime'].",czusername='".$_obfuscate_lJCSkoeMho2PlJOLiouJj4Y�['username']."' where `keys`='".$_obfuscate_joaVlZWPkYeKi5WTiZWVkYw�['keys']."'";
                    $_obfuscate_iouNho2VkZGNi4qGhoiLiJA�[] = array( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5U�, 1 );
                }
            }
            else
            {
                if ( $_obfuscate_lJCSkoeMho2PlJOLiouJj4Y�['starttime'] < $_obfuscate_i4yKj4eSi4mRkIqSkY6Piok�['starttime'] )
                {
                    $_obfuscate_kZGIi4yVio2Nh5CNkJOHiY8� = $_obfuscate_lJCSkoeMho2PlJOLiouJj4Y�['starttime'];
                    $_obfuscate_ipKHlZGViZOSkZOMho2ViZM� = 1;
                    _obfuscate_lJSMlYuJk5SMkI_KiI_RiIk�( "备服先激活".$_obfuscate_lJCSkoeMho2PlJOLiouJj4Y�['username'] );
                }
                else
                {
                    $_obfuscate_kZGIi4yVio2Nh5CNkJOHiY8� = $_obfuscate_i4yKj4eSi4mRkIqSkY6Piok�['starttime'];
                    $_obfuscate_ipKHlZGViZOSkZOMho2ViZM� = 2;
                    _obfuscate_lJSMlYuJk5SMkI_KiI_RiIk�( "主服先激活".$_obfuscate_lJCSkoeMho2PlJOLiouJj4Y�['username'] );
                }
                $_obfuscate_kY_HiJOShpCTioiIiJWLho4� = $_obfuscate_kZGIi4yVio2Nh5CNkJOHiY8� + $_obfuscate_i4yKj4eSi4mRkIqSkY6Piok�['cday'] * 86400;
                $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5U� = "update `".$_obfuscate_j5KIipONlJSQiYmTiYeVlYk�."` set cday='".$_obfuscate_i4yKj4eSi4mRkIqSkY6Piok�['cday']."', starttime=".$_obfuscate_kZGIi4yVio2Nh5CNkJOHiY8�.", endtime=".$_obfuscate_kY_HiJOShpCTioiIiJWLho4�." where `username`='".$_obfuscate_i4yKj4eSi4mRkIqSkY6Piok�['username']."'";
                $_obfuscate_iouNho2VkZGNi4qGhoiLiJA�[] = array( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5U�, $_obfuscate_ipKHlZGViZOSkZOMho2ViZM� );
            }
        }
        $_obfuscate_k5OTjZSSlY6PiY6LhoyUh5M� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_komUlJONiIqQk42JjYmOioY�( "kss_tb_sql" );
        foreach ( $_obfuscate_iouNho2VkZGNi4qGhoiLiJA� as $_obfuscate_jYqGj4aRj4_TiY_Mk4qUipA� )
        {
            $_obfuscate_kI6TlIiSlYaMjpKQi4eHj5A� = "insert into `kss_tb_sql` (`addtime`,`sqltext`,`isact`) VALUES(".time( ).",'".mysql_real_escape_string( $_obfuscate_jYqGj4aRj4_TiY_Mk4qUipA�[0] )."',".$_obfuscate_jYqGj4aRj4_TiY_Mk4qUipA�[1].")";
            $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( $_obfuscate_kI6TlIiSlYaMjpKQi4eHj5A�, "notsync" );
            if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� === FALSE )
            {
                $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "repair table kss_tb_sql", "notsync" );
                $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( $_obfuscate_kI6TlIiSlYaMjpKQi4eHj5A�, "notsync" );
                if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� === FALSE )
                {
                    $_obfuscate_h4aUkomQiI6JlIaSkomSkok� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4�( );
                    $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "delete from kss_tb_sql where id>".$_obfuscate_k5OTjZSSlY6PiY6LhoyUh5M�." and isact>0", "notsync" );
                    _obfuscate_lJSMlYuJk5SMkI_KiI_RiIk�( "录入临时数据时出错".$_obfuscate_jYqGj4aRj4_TiY_Mk4qUipA�[0] );
                    exit( );
                }
            }
        }
        $_obfuscate_ho_Ik5KOh5KVh4eGlJCNjpM�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "delete from `kss_tb_sql_active` where id<".( $_obfuscate_kpWKiI2Jj5SGipKVkI_OjY8� + 1 ), "notsync" );
        unset( $����������������� );
        _obfuscate_lJSMlYuJk5SMkI_KiI_RiIk�( "kss_tb_sql_active表处理完成" );
    }
    else
    {
        _obfuscate_lJSMlYuJk5SMkI_KiI_RiIk�( "备服kss_tb_sql_active表无数据" );
    }
    $_obfuscate_kpOIlIaOkoiHiZCOkpWUlZM� = "";
    $_obfuscate_iYqQh5CQkpGIkI6JjpWRk4w� = $_obfuscate_ho_Ik5KOh5KVh4eGlJCNjpM�->_obfuscate_lZGTiIiKhouKiZGLi5KUkI8�( "select * from `kss_tb_sql_points` order by id asc" );
    if ( !empty( $_obfuscate_iYqQh5CQkpGIkI6JjpWRk4w� ) )
    {
        _obfuscate_lJSMlYuJk5SMkI_KiI_RiIk�( "开始处理kss_tb_sql_points表" );
        $_obfuscate_kpWKiI2Jj5SGipKVkI_OjY8� = 0;
        $_obfuscate_hpWVj5COj5KSh5GHkoqIk4g� = array( );
        foreach ( $_obfuscate_iYqQh5CQkpGIkI6JjpWRk4w� as $_obfuscate_jZWHko2GjY6MkI2QlYqJiIc� )
        {
            _obfuscate_kZWOkouLho6Uko2OjIqMjI0�( );
            $_obfuscate_kpWKiI2Jj5SGipKVkI_OjY8� = $_obfuscate_jZWHko2GjY6MkI2QlYqJiIc�['id'];
            if ( isset( $_obfuscate_hpWVj5COj5KSh5GHkoqIk4g�[$_obfuscate_jZWHko2GjY6MkI2QlYqJiIc�['tbname'].$_obfuscate_jZWHko2GjY6MkI2QlYqJiIc�['username']] ) )
            {
                $_obfuscate_hpWVj5COj5KSh5GHkoqIk4g�[$_obfuscate_jZWHko2GjY6MkI2QlYqJiIc�['tbname'].$_obfuscate_jZWHko2GjY6MkI2QlYqJiIc�['username']] = array( $_obfuscate_jZWHko2GjY6MkI2QlYqJiIc�['tbname'], $_obfuscate_jZWHko2GjY6MkI2QlYqJiIc�['username'], $_obfuscate_hpWVj5COj5KSh5GHkoqIk4g�[$_obfuscate_jZWHko2GjY6MkI2QlYqJiIc�['tbname'].$_obfuscate_jZWHko2GjY6MkI2QlYqJiIc�['username']][2] + $_obfuscate_jZWHko2GjY6MkI2QlYqJiIc�['points'] );
            }
            else
            {
                $_obfuscate_hpWVj5COj5KSh5GHkoqIk4g�[$_obfuscate_jZWHko2GjY6MkI2QlYqJiIc�['tbname'].$_obfuscate_jZWHko2GjY6MkI2QlYqJiIc�['username']] = array( $_obfuscate_jZWHko2GjY6MkI2QlYqJiIc�['tbname'], $_obfuscate_jZWHko2GjY6MkI2QlYqJiIc�['username'], $_obfuscate_jZWHko2GjY6MkI2QlYqJiIc�['points'] );
            }
        }
        unset( $����������������� );
        $_obfuscate_kpOIlIaOkoiHiZCOkpWUlZM� = _obfuscate_iI6QhpSTiJCJiI_KlYePlZI�( 24 );
        foreach ( $_obfuscate_hpWVj5COj5KSh5GHkoqIk4g� as $_obfuscate_koiIh4mRlJKGlIiGiJCUkI4� => $_obfuscate_lYeSkY6Th5SOlYuHjZGVio8� )
        {
            $_obfuscate_j42OiJORiY6OjYuMkY2Lj4k�[1] = _obfuscate_hpCTj4mKj5WSkpWPjouJkoc�( );
            if ( $_obfuscate_h5KGh42MlI2Ij5WRjI6Nh48� < _obfuscate_i4mGjpKMk5WRipSVi4mLi40�( $_obfuscate_j42OiJORiY6OjYuMkY2Lj4k� ) + 2000 )
            {
                $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "delete from kss_tb_sql_points where guid='".$_obfuscate_kpOIlIaOkoiHiZCOkpWUlZM�."'", "notsync" );
                _obfuscate_lJSMlYuJk5SMkI_KiI_RiIk�( "↑↑↑↑↑↑↑↑↑↑↑".$_obfuscate_h5KGh42MlI2Ij5WRjI6Nh48�."秒[points]" );
                $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kJCHlYiNjJCQlJKQkZKSko0�( );
                $_obfuscate_ho_Ik5KOh5KVh4eGlJCNjpM�->_obfuscate_kJCHlYiNjJCQlJKQkZKSko0�( );
                exit( );
            }
            $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "insert into kss_tb_sql_points (`addtime`,`tbname`,`username`,`points`,`guid`,`svrid`) values (".time( ).",'".$_obfuscate_lYeSkY6Th5SOlYuHjZGVio8�[0]."','".$_obfuscate_lYeSkY6Th5SOlYuHjZGVio8�[1]."',".$_obfuscate_lYeSkY6Th5SOlYuHjZGVio8�[2].",'".$_obfuscate_kpOIlIaOkoiHiZCOkpWUlZM�."',2)", "notsync" );
            if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� === FALSE )
            {
                $_obfuscate_h4aUkomQiI6JlIaSkomSkok� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4�( );
                $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "REPAIR TABLE kss_tb_sql_points", "notsync" );
                $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "delete from kss_tb_sql_points where guid='".$_obfuscate_kpOIlIaOkoiHiZCOkpWUlZM�."'", "notsync" );
                _obfuscate_lJSMlYuJk5SMkI_KiI_RiIk�( "录入kss_tb_sql_points临时数据时出错".$_obfuscate_h4aUkomQiI6JlIaSkomSkok� );
                $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kJCHlYiNjJCQlJKQkZKSko0�( );
                $_obfuscate_ho_Ik5KOh5KVh4eGlJCNjpM�->_obfuscate_kJCHlYiNjJCQlJKQkZKSko0�( );
                exit( );
            }
        }
        $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_ho_Ik5KOh5KVh4eGlJCNjpM�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "delete from `kss_tb_sql_points` where id<".( $_obfuscate_kpWKiI2Jj5SGipKVkI_OjY8� + 1 ), "notsync" );
        if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� === FALSE )
        {
            $_obfuscate_h4aUkomQiI6JlIaSkomSkok� = $_obfuscate_ho_Ik5KOh5KVh4eGlJCNjpM�->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4�( );
            $_obfuscate_ho_Ik5KOh5KVh4eGlJCNjpM�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "REPAIR TABLE kss_tb_sql_points", "notsync" );
            $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "delete from kss_tb_sql_points where guid='".$_obfuscate_kpOIlIaOkoiHiZCOkpWUlZM�."'", "notsync" );
            if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� === FALSE )
            {
                $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "REPAIR TABLE kss_tb_sql_points", "notsync" );
                $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "delete from kss_tb_sql_points where guid='".$_obfuscate_kpOIlIaOkoiHiZCOkpWUlZM�."'", "notsync" );
            }
            _obfuscate_lJSMlYuJk5SMkI_KiI_RiIk�( "删除备服已获取的点数记录时发生错误".$_obfuscate_h4aUkomQiI6JlIaSkomSkok� );
            $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kJCHlYiNjJCQlJKQkZKSko0�( );
            $_obfuscate_ho_Ik5KOh5KVh4eGlJCNjpM�->_obfuscate_kJCHlYiNjJCQlJKQkZKSko0�( );
            exit( );
        }
        _obfuscate_lJSMlYuJk5SMkI_KiI_RiIk�( "kss_tb_sql_points表处理完成" );
    }
    else
    {
        _obfuscate_lJSMlYuJk5SMkI_KiI_RiIk�( "kss_tb_sql_points表无数据" );
    }
    _obfuscate_lJSMlYuJk5SMkI_KiI_RiIk�( "开始同步kss_tb_sql表" );
    $_obfuscate_k5WGko2Ik5CIjpOGkY6Oj5I� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "select count(*) as tnum from `kss_tb_sql` " );
    if ( $_obfuscate_k5WGko2Ik5CIjpOGkY6Oj5I�['tnum'] == 0 )
    {
        _obfuscate_lJSMlYuJk5SMkI_KiI_RiIk�( "↑↑↑↑↑↑↑↑↑↑↑未发现待同步数据" );
        exit( );
    }
    $_obfuscate_iYeIjIaVlYaIj4yTiJWHk40� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_lZGTiIiKhouKiZGLi5KUkI8�( "select * from `kss_tb_sql` order by id asc limit 0,500 ", 1, 1 );
    while ( !empty( $_obfuscate_iYeIjIaVlYaIj4yTiJWHk40� ) )
    {
        foreach ( $_obfuscate_iYeIjIaVlYaIj4yTiJWHk40� as $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI� )
        {
            _obfuscate_kZWOkouLho6Uko2OjIqMjI0�( );
            if ( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['isact'] == 1 )
            {
                $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['sqltext'] );
            }
            else
            {
                $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_ho_Ik5KOh5KVh4eGlJCNjpM�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['sqltext'] );
            }
            if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� !== FALSE )
            {
                $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "delete from `kss_tb_sql` where `id`=".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['id'], "notsync" );
            }
            else
            {
                if ( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['isact'] == 1 )
                {
                    $_obfuscate_h4aUkomQiI6JlIaSkomSkok� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4�( );
                }
                else
                {
                    $_obfuscate_h4aUkomQiI6JlIaSkomSkok� = $_obfuscate_ho_Ik5KOh5KVh4eGlJCNjpM�->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4�( );
                }
                $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "update kss_tb_config SET `sync_state`=`sync_state`+1 where id=1", "notsync" );
                _obfuscate_lJSMlYuJk5SMkI_KiI_RiIk�( "↑↑↑↑↑↑↑↑↑↑↑同步到日志ID=".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['id']."时出错！".$_obfuscate_h4aUkomQiI6JlIaSkomSkok�."\t".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['sqltext'] );
                exit( );
            }
        }
        unset( $����������������� );
        $_obfuscate_iYeIjIaVlYaIj4yTiJWHk40� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_lZGTiIiKhouKiZGLi5KUkI8�( "select * from `kss_tb_sql` order by id asc limit 0,500", 1, 1 );
    }
    _obfuscate_lJSMlYuJk5SMkI_KiI_RiIk�( "kss_tb_sql表同步完成" );
    if ( $_obfuscate_kpOIlIaOkoiHiZCOkpWUlZM� != "" )
    {
        $_obfuscate_lImGjo2PjY2JipKKjZWRhoo� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_lZGTiIiKhouKiZGLi5KUkI8�( "select * from kss_tb_sql_points where guid='".$_obfuscate_kpOIlIaOkoiHiZCOkpWUlZM�."' " );
        foreach ( $_obfuscate_lImGjo2PjY2JipKKjZWRhoo� as $_obfuscate_h42JlZWMkJGTiZOQj4qOkoc� )
        {
            $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "update kss_z_user_".$_obfuscate_h42JlZWMkJGTiZOQj4qOkoc�['tbname']." set points=points-".$_obfuscate_h42JlZWMkJGTiZOQj4qOkoc�['points']." where `username`='".$_obfuscate_h42JlZWMkJGTiZOQj4qOkoc�['username']."'", "notsync" );
            if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� === FALSE )
            {
                $_obfuscate_h4aUkomQiI6JlIaSkomSkok� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4�( );
                _obfuscate_lJSMlYuJk5SMkI_KiI_RiIk�( "更新主服点数时出错".$_obfuscate_h4aUkomQiI6JlIaSkomSkok� );
                exit( );
            }
            $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "delete from kss_tb_sql_points where id=".$_obfuscate_h42JlZWMkJGTiZOQj4qOkoc�['id'], "notsync" );
        }
        _obfuscate_lJSMlYuJk5SMkI_KiI_RiIk�( "点数处理完成" );
    }
    $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "update kss_tb_config SET `sync_state`=0 where id=1", "notsync" );
    _obfuscate_lJSMlYuJk5SMkI_KiI_RiIk�( "↑↑↑↑↑↑↑↑↑↑↑所有待同步数据同步完成，本次共同步".$_obfuscate_k5WGko2Ik5CIjpOGkY6Oj5I�['tnum']."条SQL语句" );
    $_obfuscate_ho_Ik5KOh5KVh4eGlJCNjpM�->_obfuscate_kJCHlYiNjJCQlJKQkZKSko0�( );
    exit( );
}

if ( !defined( "YH2" ) )
{
    exit( "Access denied to view this page!" );
}
?>
