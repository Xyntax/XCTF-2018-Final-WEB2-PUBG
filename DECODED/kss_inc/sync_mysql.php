<?php
/*********************/
/*                   */
/*  Dezend for PHP5  */
/*         NWS       */
/*      Nulled.WS    */
/*                   */
/*********************/

function _obfuscate_iYuRlIaRioySiZKTj4mPkY0�( )
{
    global $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�;
    global $_obfuscate_j42OiJORiY6OjYuMkY2Lj4k�;
    global $_obfuscate_h5KGh42MlI2Ij5WRjI6Nh48�;
    $_obfuscate_ioqNlY6GjpCVjY2Ph5WVioc� = $_GET['notifyid'];
    $_obfuscate_h4iLlI2KlI_QjoqNkoyRh4c� = isset( $_GET['trytimes'] ) ? $_GET['trytimes'] : 0;
    if ( !_obfuscate_kZKMiI2OlY6Ih42OkI6Sjo0�( $_obfuscate_ioqNlY6GjpCVjY2Ph5WVioc� ) )
    {
        exit( "notifyid invalid!" );
    }
    if ( 3 < $_obfuscate_h4iLlI2KlI_QjoqNkoyRh4c� )
    {
        _obfuscate_lJSMlYuJk5SMkI_KiI_RiIk�( "取备服数据失败，".( $_obfuscate_h4iLlI2KlI_QjoqNkoyRh4c� - 1 )."次重试均失败，同步结束！" );
        exit( );
    }
    if ( $_obfuscate_h4iLlI2KlI_QjoqNkoyRh4c� == 0 )
    {
        _obfuscate_lJSMlYuJk5SMkI_KiI_RiIk�( "CURL模式，同步开始！" );
    }
    else
    {
        _obfuscate_lJSMlYuJk5SMkI_KiI_RiIk�( "取备服数据失败，开始第".$_obfuscate_h4iLlI2KlI_QjoqNkoyRh4c�."次重试！" );
    }
    $_obfuscate_lY6IiZSRk5OMk42Hi4eMkoY� = _obfuscate_j5SMi5KSiouIj4iIipWIkIs�( SYNC2URL."?step=b1&notifyid=".$_obfuscate_ioqNlY6GjpCVjY2Ph5WVioc�."&pwd=".MYSQLBAKPASSWORD, FALSE, $_obfuscate_h5KGh42MlI2Ij5WRjI6Nh48� / 1000 - 5 );
    if ( substr( $_obfuscate_lY6IiZSRk5OMk42Hi4eMkoY�, 0, 6 ) != "dataok" )
    {
        _obfuscate_lJSMlYuJk5SMkI_KiI_RiIk�( "错误信息：".$_obfuscate_lY6IiZSRk5OMk42Hi4eMkoY� );
        $_obfuscate_koqTiIuHiY6NlJWOiYqRkZE� = _obfuscate_j5SMi5KSiouIj4iIipWIkIs�( SYNC1URL."?step=a1&notifyid=".$_obfuscate_ioqNlY6GjpCVjY2Ph5WVioc�."&trytimes=".( $_obfuscate_h4iLlI2KlI_QjoqNkoyRh4c� + 1 )."&pwd=".MYSQLBAKPASSWORD, FALSE, 1 );
        exit( );
    }
    _obfuscate_lJSMlYuJk5SMkI_KiI_RiIk�( "取备服数据成功！" );
    $_obfuscate_kJCUiZKMhomPkZSVkYmUio8� = explode( "|", $_obfuscate_lY6IiZSRk5OMk42Hi4eMkoY� );
    unset( $����������������� );
    $_obfuscate_hoqLk5OLlIuMkIuRk5CNlJA� = "";
    $_obfuscate_iYqQh5CQkpGIkI6JjpWRk4w� = "";
    if ( $_obfuscate_kJCUiZKMhomPkZSVkYmUio8�[1] != "" )
    {
        $_obfuscate_hoqLk5OLlIuMkIuRk5CNlJA� = _obfuscate_lYuLkpWKjJOKk4eLiZWHi4g�( $_obfuscate_kJCUiZKMhomPkZSVkYmUio8�[1] );
    }
    if ( $_obfuscate_kJCUiZKMhomPkZSVkYmUio8�[2] != "" )
    {
        $_obfuscate_iYqQh5CQkpGIkI6JjpWRk4w� = _obfuscate_lYuLkpWKjJOKk4eLiZWHi4g�( $_obfuscate_kJCUiZKMhomPkZSVkYmUio8�[2] );
    }
    if ( !empty( $_obfuscate_hoqLk5OLlIuMkIuRk5CNlJA� ) )
    {
        _obfuscate_lJSMlYuJk5SMkI_KiI_RiIk�( "备服有激活记录，开始处理激活记录" );
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
            $_obfuscate_kI6TlIiSlYaMjpKQi4eHj5A� = "insert into `kss_tb_sql` (`addtime`,`sqltext`,`isact`,`notifyid`) VALUES(".time( ).",'".mysql_real_escape_string( $_obfuscate_jYqGj4aRj4_TiY_Mk4qUipA�[0] )."',".$_obfuscate_jYqGj4aRj4_TiY_Mk4qUipA�[1].",'".$_obfuscate_ioqNlY6GjpCVjY2Ph5WVioc�."')";
            $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( $_obfuscate_kI6TlIiSlYaMjpKQi4eHj5A�, "notsync" );
            if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� === FALSE )
            {
                $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "repair table kss_tb_sql", "notsync" );
                $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( $_obfuscate_kI6TlIiSlYaMjpKQi4eHj5A�, "notsync" );
                if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� === FALSE )
                {
                    $_obfuscate_h4aUkomQiI6JlIaSkomSkok� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4�( );
                    $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "delete from kss_tb_sql where notifyid='".$_obfuscate_ioqNlY6GjpCVjY2Ph5WVioc�."'", "notsync" );
                    _obfuscate_lJSMlYuJk5SMkI_KiI_RiIk�( "录入临时数据时出错".$_obfuscate_jYqGj4aRj4_TiY_Mk4qUipA�[0] );
                    exit( );
                }
            }
        }
        unset( $����������������� );
        _obfuscate_lJSMlYuJk5SMkI_KiI_RiIk�( "激活记录处理完毕！" );
    }
    if ( !empty( $_obfuscate_iYqQh5CQkpGIkI6JjpWRk4w� ) )
    {
        _obfuscate_lJSMlYuJk5SMkI_KiI_RiIk�( "备服有扣点记录，开始处理扣点记录" );
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
        foreach ( $_obfuscate_hpWVj5COj5KSh5GHkoqIk4g� as $_obfuscate_koiIh4mRlJKGlIiGiJCUkI4� => $_obfuscate_lYeSkY6Th5SOlYuHjZGVio8� )
        {
            $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "insert into kss_tb_sql_points (`addtime`,`tbname`,`username`,`points`,`svrid`) values (".time( ).",'".$_obfuscate_lYeSkY6Th5SOlYuHjZGVio8�[0]."','".$_obfuscate_lYeSkY6Th5SOlYuHjZGVio8�[1]."',".$_obfuscate_lYeSkY6Th5SOlYuHjZGVio8�[2].",2)", "notsync" );
        }
        _obfuscate_lJSMlYuJk5SMkI_KiI_RiIk�( "扣点记录处理完毕" );
    }
    if ( !empty( $_obfuscate_iYqQh5CQkpGIkI6JjpWRk4w� ) || !empty( $_obfuscate_hoqLk5OLlIuMkIuRk5CNlJA� ) )
    {
        file_put_contents( KSSROOTDIR."kss_logs".DIRECTORY_SEPARATOR."notifyid.txt", "11112" );
        $_obfuscate_koqTiIuHiY6NlJWOiYqRkZE� = _obfuscate_j5SMi5KSiouIj4iIipWIkIs�( SYNC1URL."?step=a2&notifyid=".$_obfuscate_ioqNlY6GjpCVjY2Ph5WVioc�."&trytimes=0&pwd=".MYSQLBAKPASSWORD, FALSE, 1 );
    }
    else
    {
        $_obfuscate_koqTiIuHiY6NlJWOiYqRkZE� = _obfuscate_j5SMi5KSiouIj4iIipWIkIs�( SYNC1URL."?step=a3&notifyid=".$_obfuscate_ioqNlY6GjpCVjY2Ph5WVioc�."&trytimes=0&pwd=".MYSQLBAKPASSWORD, FALSE, 1 );
    }
    exit( );
}

function _obfuscate_ipWRkoaJjZONiYyPlJKIkoY�( )
{
    global $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�;
    global $_obfuscate_j42OiJORiY6OjYuMkY2Lj4k�;
    global $_obfuscate_h5KGh42MlI2Ij5WRjI6Nh48�;
    $_obfuscate_ioqNlY6GjpCVjY2Ph5WVioc� = $_GET['notifyid'];
    $_obfuscate_h4iLlI2KlI_QjoqNkoyRh4c� = $_GET['trytimes'];
    if ( !_obfuscate_kZKMiI2OlY6Ih42OkI6Sjo0�( $_obfuscate_ioqNlY6GjpCVjY2Ph5WVioc� ) )
    {
        exit( "notifyid invalid!" );
    }
    if ( 2 < $_obfuscate_h4iLlI2KlI_QjoqNkoyRh4c� )
    {
        _obfuscate_lJSMlYuJk5SMkI_KiI_RiIk�( "删除备服已处理数据2次重试均失败，同步结束！" );
        exit( );
    }
    if ( $_obfuscate_h4iLlI2KlI_QjoqNkoyRh4c� == 0 )
    {
        _obfuscate_lJSMlYuJk5SMkI_KiI_RiIk�( "向备服发送删除已处理数据的命令！" );
    }
    else
    {
        _obfuscate_lJSMlYuJk5SMkI_KiI_RiIk�( "删除备服已处理数据命令失败，开始第".$_obfuscate_h4iLlI2KlI_QjoqNkoyRh4c�."次重试！" );
    }
    $_obfuscate_jYyRlJOMh4uPh5KUlZSRiZE� = _obfuscate_j5SMi5KSiouIj4iIipWIkIs�( SYNC2URL."?step=b2&notifyid=".$_obfuscate_ioqNlY6GjpCVjY2Ph5WVioc�."&trytimes=".$_obfuscate_h4iLlI2KlI_QjoqNkoyRh4c�."&pwd=".MYSQLBAKPASSWORD, FALSE, $_obfuscate_h5KGh42MlI2Ij5WRjI6Nh48� / 1000 - 5 );
    if ( substr( $_obfuscate_jYyRlJOMh4uPh5KUlZSRiZE�, 0, 6 ) != "dataok" )
    {
        $_obfuscate_koqTiIuHiY6NlJWOiYqRkZE� = _obfuscate_j5SMi5KSiouIj4iIipWIkIs�( SYNC1URL."?step=a2&notifyid=".$_obfuscate_ioqNlY6GjpCVjY2Ph5WVioc�."&trytimes=".( $_obfuscate_h4iLlI2KlI_QjoqNkoyRh4c� + 1 )."&pwd=".MYSQLBAKPASSWORD, FALSE, 1 );
        exit( );
    }
    _obfuscate_lJSMlYuJk5SMkI_KiI_RiIk�( "备服已处理数据删除成功，开始处理主服数据变更到备服！" );
    $_obfuscate_koqTiIuHiY6NlJWOiYqRkZE� = _obfuscate_j5SMi5KSiouIj4iIipWIkIs�( SYNC1URL."?step=a3&notifyid=".$_obfuscate_ioqNlY6GjpCVjY2Ph5WVioc�."&trytimes=0&limit=0&pwd=".MYSQLBAKPASSWORD, FALSE, 1 );
    exit( );
}

function _obfuscate_kIiQjY_Uh5OLhpKOkZOLkpU�( )
{
    global $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�;
    global $_obfuscate_j42OiJORiY6OjYuMkY2Lj4k�;
    global $_obfuscate_h5KGh42MlI2Ij5WRjI6Nh48�;
    $_obfuscate_ioqNlY6GjpCVjY2Ph5WVioc� = $_GET['notifyid'];
    if ( !_obfuscate_kZKMiI2OlY6Ih42OkI6Sjo0�( $_obfuscate_ioqNlY6GjpCVjY2Ph5WVioc� ) )
    {
        exit( "notifyid invalid!" );
    }
    _obfuscate_lJSMlYuJk5SMkI_KiI_RiIk�( "开始处理主服数据" );
    $_obfuscate_k5OTjZSSlY6PiY6LhoyUh5M� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_komUlJONiIqQk42JjYmOioY�( "kss_tb_sql" );
    if ( $_obfuscate_k5OTjZSSlY6PiY6LhoyUh5M� == 0 )
    {
        _obfuscate_lJSMlYuJk5SMkI_KiI_RiIk�( "未发现待同步数据" );
        exit( );
    }
    $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "update kss_tb_sql set notifyid='".$_obfuscate_ioqNlY6GjpCVjY2Ph5WVioc�."' where notifyid='' ", "notsync" );
    $_obfuscate_iouGh4aRkYmSioiOlImUio4� = array( "sqldata" => "" );
    $_obfuscate_hoiVk4iHiIaLlIySi4qVkZM� = 0;
    $_obfuscate_i4mIjpWGkJSLkZWJjYeGlJI� = 0;
    $_obfuscate_iYeIjIaVlYaIj4yTiJWHk40� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_lZGTiIiKhouKiZGLi5KUkI8�( "select * from `kss_tb_sql` where notifyid='".$_obfuscate_ioqNlY6GjpCVjY2Ph5WVioc�."' order by id asc limit 0,300 ", 1, 1 );
    while ( !empty( $_obfuscate_iYeIjIaVlYaIj4yTiJWHk40� ) )
    {
        foreach ( $_obfuscate_iYeIjIaVlYaIj4yTiJWHk40� as $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI� )
        {
            if ( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['isact'] == 1 )
            {
                $_obfuscate_i4mIjpWGkJSLkZWJjYeGlJI� = 1;
                $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['sqltext'] );
                if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� !== FALSE )
                {
                    $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "delete from `kss_tb_sql` where `id`=".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['id'], "notsync" );
                }
                else
                {
                    $_obfuscate_h4aUkomQiI6JlIaSkomSkok� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4�( );
                    $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "update kss_tb_config SET `sync_state`=`sync_state`+1 where id=1", "notsync" );
                    _obfuscate_lJSMlYuJk5SMkI_KiI_RiIk�( "↑↑↑↑↑↑↑↑↑↑↑同步到日志ID=".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['id']."时出错！".$_obfuscate_h4aUkomQiI6JlIaSkomSkok�."\t".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['sqltext'] );
                    exit( );
                }
            }
            else
            {
                $_obfuscate_iouGh4aRkYmSioiOlImUio4� .= "sqldata";
            }
        }
        unset( $����������������� );
        $_obfuscate_hoiVk4iHiIaLlIySi4qVkZM� = $_obfuscate_hoiVk4iHiIaLlIySi4qVkZM� + 300;
        $_obfuscate_iYeIjIaVlYaIj4yTiJWHk40� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_lZGTiIiKhouKiZGLi5KUkI8�( "select * from `kss_tb_sql` where notifyid='".$_obfuscate_ioqNlY6GjpCVjY2Ph5WVioc�."' order by id asc limit ".$_obfuscate_hoiVk4iHiIaLlIySi4qVkZM�.",300", 1, 1 );
    }
    if ( $_obfuscate_i4mIjpWGkJSLkZWJjYeGlJI� == 1 )
    {
        _obfuscate_lJSMlYuJk5SMkI_KiI_RiIk�( "注册卡激活记录主服相关变更完成！" );
    }
    $_obfuscate_hoiVk4iHiIaLlIySi4qVkZM� = 0;
    $_obfuscate_jI2Ri4eIiIqNjZKSiY_HkZI� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_lZGTiIiKhouKiZGLi5KUkI8�( "select * from `kss_tb_sql_points` where `svrid`=2 order by id asc limit 0,300 ", 1, 1 );
    while ( !empty( $_obfuscate_jI2Ri4eIiIqNjZKSiY_HkZI� ) )
    {
        foreach ( $_obfuscate_jI2Ri4eIiIqNjZKSiY_HkZI� as $_obfuscate_jZWPiZWJlIeHkZWIhouRlZA� )
        {
            $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "update kss_z_user_".$_obfuscate_jZWPiZWJlIeHkZWIhouRlZA�['tbname']." SET `points`=`points`-".$_obfuscate_jZWPiZWJlIeHkZWIhouRlZA�['points']." where `username`='".$_obfuscate_jZWPiZWJlIeHkZWIhouRlZA�['username']."'", "notsync" );
            $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "delete from `kss_tb_sql_points` where `id`=".$_obfuscate_jZWPiZWJlIeHkZWIhouRlZA�['id'], "notsync" );
        }
        unset( $����������������� );
        $_obfuscate_hoiVk4iHiIaLlIySi4qVkZM� = $_obfuscate_hoiVk4iHiIaLlIySi4qVkZM� + 300;
        $_obfuscate_jI2Ri4eIiIqNjZKSiY_HkZI� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_lZGTiIiKhouKiZGLi5KUkI8�( "select * from `kss_tb_sql_points` where `svrid`=2 order by id asc limit ".$_obfuscate_hoiVk4iHiIaLlIySi4qVkZM�.",300", 1, 1 );
        _obfuscate_lJSMlYuJk5SMkI_KiI_RiIk�( "点数处理".$_obfuscate_hoiVk4iHiIaLlIySi4qVkZM� );
    }
    if ( empty( $_obfuscate_iouGh4aRkYmSioiOlImUio4�['sqldata'] ) )
    {
        _obfuscate_lJSMlYuJk5SMkI_KiI_RiIk�( "无需同步数据取备服" );
        file_put_contents( KSSLOGDIR."sendsqldata.php", "<".( "?" )."php exit('x');"."?".">" );
        exit( );
    }
    $_obfuscate_lI2Vh4qTjpKPlZSVjo_JhpE� = strlen( $_obfuscate_iouGh4aRkYmSioiOlImUio4�['sqldata'] );
    $_obfuscate_iouGh4aRkYmSioiOlImUio4�['sqldata'] = substr( $_obfuscate_iouGh4aRkYmSioiOlImUio4�['sqldata'], 0, strlen( $_obfuscate_iouGh4aRkYmSioiOlImUio4�['sqldata'] ) - 1 );
    $_obfuscate_iouGh4aRkYmSioiOlImUio4�['sqldata'] = base64_encode( gzcompress( $_obfuscate_iouGh4aRkYmSioiOlImUio4�['sqldata'] ) );
    $_obfuscate_iouGh4aRkYmSioiOlImUio4�['sqldata'] = strtr( $_obfuscate_iouGh4aRkYmSioiOlImUio4�['sqldata'], "+/=", "*_-" );
    file_put_contents( KSSLOGDIR."sendsqldata.php", "<".( "?" )."php exit('x');"."?".">".$_obfuscate_ioqNlY6GjpCVjY2Ph5WVioc�.$_obfuscate_iouGh4aRkYmSioiOlImUio4�['sqldata'] );
    $_obfuscate_kIqHiYqIko2Qk4eOjIaOj4s� = strlen( $_obfuscate_iouGh4aRkYmSioiOlImUio4�['sqldata'] );
    _obfuscate_lJSMlYuJk5SMkI_KiI_RiIk�( "主服数据处理完毕，开始发送数据到备服！".round( $_obfuscate_kIqHiYqIko2Qk4eOjIaOj4s� / 1024, 2 )."KB数据压缩率".round( $_obfuscate_kIqHiYqIko2Qk4eOjIaOj4s� * 100 / $_obfuscate_lI2Vh4qTjpKPlZSVjo_JhpE� )."%" );
    $_obfuscate_koqTiIuHiY6NlJWOiYqRkZE� = _obfuscate_j5SMi5KSiouIj4iIipWIkIs�( SYNC2URL."?step=b3&notifyid=".$_obfuscate_ioqNlY6GjpCVjY2Ph5WVioc�."&trytimes=0&randid=".time( )."&limit=0&pwd=".MYSQLBAKPASSWORD, $_obfuscate_iouGh4aRkYmSioiOlImUio4�, intval( $_obfuscate_h5KGh42MlI2Ij5WRjI6Nh48� / 1000 - 10 ) );
    if ( substr( $_obfuscate_koqTiIuHiY6NlJWOiYqRkZE�, 0, 6 ) != "dataok" )
    {
        _obfuscate_lJSMlYuJk5SMkI_KiI_RiIk�( $_obfuscate_koqTiIuHiY6NlJWOiYqRkZE� );
        $_obfuscate_koqTiIuHiY6NlJWOiYqRkZE� = _obfuscate_j5SMi5KSiouIj4iIipWIkIs�( SYNC2URL."?step=a4&notifyid=".$_obfuscate_ioqNlY6GjpCVjY2Ph5WVioc�."&trytimes=1&limit=0&pwd=".MYSQLBAKPASSWORD, $_obfuscate_iouGh4aRkYmSioiOlImUio4�, 1 );
        exit( );
    }
    _obfuscate_lJSMlYuJk5SMkI_KiI_RiIk�( "备服处理主服数据结果：".substr( $_obfuscate_koqTiIuHiY6NlJWOiYqRkZE�, 6 ) );
    $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "delete from kss_tb_sql where notifyid='".$_obfuscate_ioqNlY6GjpCVjY2Ph5WVioc�."' ", "notsync" );
    $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "update kss_tb_config SET `sync_state`=0 where id=1", "notsync" );
    file_put_contents( KSSLOGDIR."sendsqldata.php", "<".( "?" )."php exit('x');"."?".">" );
    _obfuscate_lJSMlYuJk5SMkI_KiI_RiIk�( "本次同步完成" );
    exit( );
}

function _obfuscate_i5SNipCHjImPkoeRlZGTjo0�( )
{
    global $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�;
    global $_obfuscate_j42OiJORiY6OjYuMkY2Lj4k�;
    global $_obfuscate_h5KGh42MlI2Ij5WRjI6Nh48�;
    $_obfuscate_ioqNlY6GjpCVjY2Ph5WVioc� = $_GET['notifyid'];
    $_obfuscate_h4iLlI2KlI_QjoqNkoyRh4c� = $_GET['trytimes'];
    if ( !_obfuscate_kZKMiI2OlY6Ih42OkI6Sjo0�( $_obfuscate_ioqNlY6GjpCVjY2Ph5WVioc� ) )
    {
        exit( "notifyid invalid!" );
    }
    if ( 3 < $_obfuscate_h4iLlI2KlI_QjoqNkoyRh4c� )
    {
        _obfuscate_lJSMlYuJk5SMkI_KiI_RiIk�( "发送数据到备服".( $_obfuscate_h4iLlI2KlI_QjoqNkoyRh4c� - 1 )."次重试均失败，同步结束！" );
        exit( );
    }
    _obfuscate_lJSMlYuJk5SMkI_KiI_RiIk�( "发送数据到备服，开始第".$_obfuscate_h4iLlI2KlI_QjoqNkoyRh4c�."次重试！" );
    $_obfuscate_jZWRiYeJlI2Pj4mGioiKkpM� = file_get_contents( KSSLOGDIR."sendsqldata.php" );
    if ( substr( $_obfuscate_jZWRiYeJlI2Pj4mGioiKkpM�, 18, 20 ) != $_obfuscate_ioqNlY6GjpCVjY2Ph5WVioc� )
    {
        $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "update kss_tb_config SET `sync_state`=10 where id=1", "notsync" );
        _obfuscate_lJSMlYuJk5SMkI_KiI_RiIk�( "同步结束sendsqldata内容被改变，建议手工同步一次数据库！" );
        exit( );
    }
    $_obfuscate_iouGh4aRkYmSioiOlImUio4� = array( );
    $_obfuscate_iouGh4aRkYmSioiOlImUio4�['sqldata'] = substr( $_obfuscate_jZWRiYeJlI2Pj4mGioiKkpM�, 38 );
    $_obfuscate_koqTiIuHiY6NlJWOiYqRkZE� = _obfuscate_j5SMi5KSiouIj4iIipWIkIs�( SYNC2URL."?step=b3&notifyid=".$_obfuscate_ioqNlY6GjpCVjY2Ph5WVioc�."&trytimes=0&pwd=".MYSQLBAKPASSWORD, $_obfuscate_iouGh4aRkYmSioiOlImUio4�, $_obfuscate_h5KGh42MlI2Ij5WRjI6Nh48� / 1000 - 5 );
    if ( substr( $_obfuscate_koqTiIuHiY6NlJWOiYqRkZE�, 0, 6 ) != "dataok" )
    {
        $_obfuscate_koqTiIuHiY6NlJWOiYqRkZE� = _obfuscate_j5SMi5KSiouIj4iIipWIkIs�( SYNC2URL."?step=a4&notifyid=".$_obfuscate_ioqNlY6GjpCVjY2Ph5WVioc�."&trytimes=".( $_obfuscate_h4iLlI2KlI_QjoqNkoyRh4c� + 1 )."&limit=0&pwd=".MYSQLBAKPASSWORD, $_obfuscate_iouGh4aRkYmSioiOlImUio4�, 1 );
        exit( );
    }
    _obfuscate_lJSMlYuJk5SMkI_KiI_RiIk�( "备服处理主服数据结果：".substr( $_obfuscate_koqTiIuHiY6NlJWOiYqRkZE�, 6 ) );
    $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "delete from kss_tb_sql where notifyid='".$_obfuscate_ioqNlY6GjpCVjY2Ph5WVioc�."' ", "notsync" );
    $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "update kss_tb_config SET `sync_state`=0 where id=1", "notsync" );
    file_put_contents( KSSLOGDIR."sendsqldata.php", "<".( "?" )."php exit('x');"."?".">" );
    _obfuscate_lJSMlYuJk5SMkI_KiI_RiIk�( "本次同步完成" );
    exit( );
}

function _obfuscate_hpCLjoyMjJSSiY6Qjo6VjZQ�( )
{
    global $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�;
    global $_obfuscate_j42OiJORiY6OjYuMkY2Lj4k�;
    global $_obfuscate_h5KGh42MlI2Ij5WRjI6Nh48�;
    $_obfuscate_ioqNlY6GjpCVjY2Ph5WVioc� = $_GET['notifyid'];
    if ( !_obfuscate_kZKMiI2OlY6Ih42OkI6Sjo0�( $_obfuscate_ioqNlY6GjpCVjY2Ph5WVioc� ) )
    {
        exit( "notifyid invalid!" );
    }
    $_obfuscate_iIyIjoeKjYuOj46JkYqVkoY� = "";
    $_obfuscate_iYeViIuKjpWHhoaMio6GjIY� = "";
    $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "delete from kss_tb_sql_active where notifyid not in('".$_obfuscate_ioqNlY6GjpCVjY2Ph5WVioc�."','')", "notsync" );
    $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "delete from kss_tb_sql_points where notifyid not in('".$_obfuscate_ioqNlY6GjpCVjY2Ph5WVioc�."','')", "notsync" );
    $_obfuscate_jY2Kh4aJkJCJlIaSlY_Nj5I� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_lZGTiIiKhouKiZGLi5KUkI8�( "select * from `kss_tb_sql_points` where notifyid='".$_obfuscate_ioqNlY6GjpCVjY2Ph5WVioc�."' order by id asc" );
    if ( !empty( $_obfuscate_jY2Kh4aJkJCJlIaSlY_Nj5I� ) )
    {
        $_obfuscate_iIyIjoeKjYuOj46JkYqVkoY� = _obfuscate_i5KKjpOTlJGTiYeMkZCTk4g�( $_obfuscate_jY2Kh4aJkJCJlIaSlY_Nj5I� );
    }
    else
    {
        $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "update kss_tb_sql_points set notifyid='".$_obfuscate_ioqNlY6GjpCVjY2Ph5WVioc�."'", "notsync" );
        $_obfuscate_jY2Kh4aJkJCJlIaSlY_Nj5I� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_lZGTiIiKhouKiZGLi5KUkI8�( "select * from `kss_tb_sql_points` where notifyid='".$_obfuscate_ioqNlY6GjpCVjY2Ph5WVioc�."' order by id asc" );
        if ( !empty( $_obfuscate_jY2Kh4aJkJCJlIaSlY_Nj5I� ) )
        {
            $_obfuscate_iIyIjoeKjYuOj46JkYqVkoY� = _obfuscate_i5KKjpOTlJGTiYeMkZCTk4g�( $_obfuscate_jY2Kh4aJkJCJlIaSlY_Nj5I� );
        }
    }
    $_obfuscate_i5WNkIiOkoqUkYeGk4uTjIc� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_lZGTiIiKhouKiZGLi5KUkI8�( "select * from `kss_tb_sql_active` where notifyid='".$_obfuscate_ioqNlY6GjpCVjY2Ph5WVioc�."' order by id asc" );
    if ( !empty( $_obfuscate_i5WNkIiOkoqUkYeGk4uTjIc� ) )
    {
        $_obfuscate_iYeViIuKjpWHhoaMio6GjIY� = _obfuscate_i5KKjpOTlJGTiYeMkZCTk4g�( $_obfuscate_i5WNkIiOkoqUkYeGk4uTjIc� );
    }
    else
    {
        $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "update kss_tb_sql_active set notifyid='".$_obfuscate_ioqNlY6GjpCVjY2Ph5WVioc�."'", "notsync" );
        $_obfuscate_i5WNkIiOkoqUkYeGk4uTjIc� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_lZGTiIiKhouKiZGLi5KUkI8�( "select * from `kss_tb_sql_active` where notifyid='".$_obfuscate_ioqNlY6GjpCVjY2Ph5WVioc�."' order by id asc" );
        if ( !empty( $_obfuscate_i5WNkIiOkoqUkYeGk4uTjIc� ) )
        {
            $_obfuscate_iYeViIuKjpWHhoaMio6GjIY� = _obfuscate_i5KKjpOTlJGTiYeMkZCTk4g�( $_obfuscate_i5WNkIiOkoqUkYeGk4uTjIc� );
        }
    }
    exit( "dataok|".$_obfuscate_iYeViIuKjpWHhoaMio6GjIY�."|".$_obfuscate_iIyIjoeKjYuOj46JkYqVkoY� );
}

function _obfuscate_kYmVhpKGj5OSj5CPho_UlJA�( )
{
    global $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�;
    global $_obfuscate_j42OiJORiY6OjYuMkY2Lj4k�;
    global $_obfuscate_h5KGh42MlI2Ij5WRjI6Nh48�;
    $_obfuscate_ioqNlY6GjpCVjY2Ph5WVioc� = $_GET['notifyid'];
    if ( !_obfuscate_kZKMiI2OlY6Ih42OkI6Sjo0�( $_obfuscate_ioqNlY6GjpCVjY2Ph5WVioc� ) )
    {
        exit( "notifyid invalid!" );
    }
    $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "delete from kss_tb_sql_active where notifyid='".$_obfuscate_ioqNlY6GjpCVjY2Ph5WVioc�."'", "notsync" );
    if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� === FALSE )
    {
        $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "REPAIR TABLE kss_tb_sql_active", "notsync" );
        $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "delete from kss_tb_sql_active where notifyid='".$_obfuscate_ioqNlY6GjpCVjY2Ph5WVioc�."'", "notsync" );
    }
    $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "delete from kss_tb_sql_points where notifyid='".$_obfuscate_ioqNlY6GjpCVjY2Ph5WVioc�."'", "notsync" );
    if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� === FALSE )
    {
        $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "REPAIR TABLE kss_tb_sql_points", "notsync" );
        $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "delete from kss_tb_sql_points where notifyid='".$_obfuscate_ioqNlY6GjpCVjY2Ph5WVioc�."'", "notsync" );
    }
    _obfuscate_lJSMlYuJk5SMkI_KiI_RiIk�( $_obfuscate_ioqNlY6GjpCVjY2Ph5WVioc�."激活与点数数据成功发送到主服" );
    exit( );
}

function _obfuscate_iYqMlY_Vi5WIjoyGkI2Hko0�( )
{
    global $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�;
    global $_obfuscate_j42OiJORiY6OjYuMkY2Lj4k�;
    global $_obfuscate_h5KGh42MlI2Ij5WRjI6Nh48�;
    _obfuscate_hpCHkYaMkYuNko2Gio2KjJQ�( );
    $_obfuscate_ioqNlY6GjpCVjY2Ph5WVioc� = $_GET['notifyid'];
    $_obfuscate_hoeUiJCLjYyGjIaKkZKOk4c� = $_POST['sqldata'];
    $_obfuscate_hoeUiJCLjYyGjIaKkZKOk4c� = strtr( $_obfuscate_hoeUiJCLjYyGjIaKkZKOk4c�, "*_-", "+/=" );
    if ( !_obfuscate_kZKMiI2OlY6Ih42OkI6Sjo0�( $_obfuscate_ioqNlY6GjpCVjY2Ph5WVioc� ) )
    {
        exit( "notifyid invalid!" );
    }
    $_obfuscate_hoeUiJCLjYyGjIaKkZKOk4c� = gzuncompress( base64_decode( $_obfuscate_hoeUiJCLjYyGjIaKkZKOk4c� ) );
    $_obfuscate_h4yViImPipSNiY6MiZWIkZQ� = explode( chr( 1 ), $_obfuscate_hoeUiJCLjYyGjIaKkZKOk4c� );
    if ( is_file( KSSLOGDIR."notifyid".DIRECTORY_SEPARATOR.$_obfuscate_ioqNlY6GjpCVjY2Ph5WVioc�.".txt" ) )
    {
        $_obfuscate_jY2OjpWVjpGNi4yNiIeIjIg� = file_get_contents( KSSLOGDIR."notifyid".DIRECTORY_SEPARATOR.$_obfuscate_ioqNlY6GjpCVjY2Ph5WVioc�.".txt" );
    }
    else
    {
        $_obfuscate_jY2OjpWVjpGNi4yNiIeIjIg� = 0;
        file_put_contents( KSSLOGDIR."notifyid".DIRECTORY_SEPARATOR.$_obfuscate_ioqNlY6GjpCVjY2Ph5WVioc�.".txt", "0" );
    }
    if ( !empty( $_obfuscate_h4yViImPipSNiY6MiZWIkZQ� ) )
    {
        if ( $_obfuscate_jY2OjpWVjpGNi4yNiIeIjIg� < count( $_obfuscate_h4yViImPipSNiY6MiZWIkZQ� ) )
        {
            $_obfuscate_h4yViImPipSNiY6MiZWIkZQ� = array_slice( $_obfuscate_h4yViImPipSNiY6MiZWIkZQ�, $_obfuscate_jY2OjpWVjpGNi4yNiIeIjIg� );
            $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� = 0;
            foreach ( $_obfuscate_h4yViImPipSNiY6MiZWIkZQ� as $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5U� )
            {
                $_obfuscate_j42OiJORiY6OjYuMkY2Lj4k�[1] = _obfuscate_hpCTj4mKj5WSkpWPjouJkoc�( );
                if ( $_obfuscate_h5KGh42MlI2Ij5WRjI6Nh48� < _obfuscate_i4mGjpKMk5WRipSVi4mLi40�( $_obfuscate_j42OiJORiY6OjYuMkY2Lj4k� ) + 5000 )
                {
                    exit( "try主服发送".count( $_obfuscate_h4yViImPipSNiY6MiZWIkZQ� )."条，备服已执行".( $_obfuscate_jY2OjpWVjpGNi4yNiIeIjIg� + $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� + 1 )."条，主服需重试发送" );
                }
                $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� = $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� + 1;
                $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5U�, "notsync" );
                if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� === TRUE )
                {
                    file_put_contents( KSSLOGDIR."notifyid".DIRECTORY_SEPARATOR.$_obfuscate_ioqNlY6GjpCVjY2Ph5WVioc�.".txt", $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� + $_obfuscate_jY2OjpWVjpGNi4yNiIeIjIg� );
                }
                else
                {
                    exit( "try备服执行到第".( $_obfuscate_jY2OjpWVjpGNi4yNiIeIjIg� + $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� + 1 )."条语句【".$_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5U�."】时出错【".$_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4�( )."】" );
                }
            }
            exit( "dataok数据处理完毕1！" );
        }
        else
        {
            exit( "dataok数据处理完毕2！" );
        }
    }
    else
    {
        exit( "dataok接收到的数据是空的！" );
    }
}

function _obfuscate_i4iHjpWLlY2SjI2RlJSMk4c�( )
{
    $_obfuscate_kouViYyOlJWMkpSKkpGSlJE� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "fname", "g", "int", 0 );
    $_obfuscate_lJOVj5WVkI2PjI6QjZWJjoY� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "scode", "p", "int", 0 );
    if ( strlen( $_obfuscate_kouViYyOlJWMkpSKkpGSlJE� ) < 6 || strlen( $_obfuscate_lJOVj5WVkI2PjI6QjZWJjoY� ) != 7 )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "，同步advapi代码到备服时出错：软件标识错误".$_obfuscate_kouViYyOlJWMkpSKkpGSlJE� );
    }
    $_obfuscate_h5WSh5WPkoaVjJWVkoiQjoc� = $_POST['advapicode'];
    $_obfuscate_h5WSh5WPkoaVjJWVkoiQjoc� = _obfuscate_kIuUko_Mh42UkZSHjZSQiZI�( $_obfuscate_h5WSh5WPkoaVjJWVkoiQjoc� );
    $_obfuscate_hoaVjJGTj4uNioeOjpSVh4Y� = $_POST['rsacode'];
    $_obfuscate_hoaVjJGTj4uNioeOjpSVh4Y� = _obfuscate_kIuUko_Mh42UkZSHjZSQiZI�( $_obfuscate_hoaVjJGTj4uNioeOjpSVh4Y� );
    file_put_contents( "./advapi/".$_obfuscate_kouViYyOlJWMkpSKkpGSlJE�.".php", $_obfuscate_h5WSh5WPkoaVjJWVkoiQjoc� );
    file_put_contents( "./advapi/rsa".$_obfuscate_lJOVj5WVkI2PjI6QjZWJjoY�.".php", $_obfuscate_hoaVjJGTj4uNioeOjpSVh4Y� );
    exit( "，advapi和rsa缓存代码已更新到备服" );
}

function _obfuscate_hpCHkYaMkYuNko2Gio2KjJQ�( )
{
    clearstatcache( );
    $_obfuscate_j4uTjpCNho6Kh4qGh4eLi40� = KSSLOGDIR."notifyid".DIRECTORY_SEPARATOR;
    $_obfuscate_jZCHlIqNkJSSiYaQk4eVko0� = @dir( $_obfuscate_j4uTjpCNho6Kh4qGh4eLi40� );
    while ( $_obfuscate_kY_Ki4_NiIqMj5CSiIiRk48� = $_obfuscate_jZCHlIqNkJSSiYaQk4eVko0�->read( ) )
    {
        if ( pathinfo( $_obfuscate_kY_Ki4_NiIqMj5CSiIiRk48�, PATHINFO_EXTENSION ) == "txt" && is_file( $_obfuscate_j4uTjpCNho6Kh4qGh4eLi40�.$_obfuscate_kY_Ki4_NiIqMj5CSiIiRk48� ) && filemtime( $_obfuscate_j4uTjpCNho6Kh4qGh4eLi40�.$_obfuscate_kY_Ki4_NiIqMj5CSiIiRk48� ) < time( ) - 36000 )
        {
            @unlink( @$_obfuscate_j4uTjpCNho6Kh4qGh4eLi40�.$_obfuscate_kY_Ki4_NiIqMj5CSiIiRk48� );
        }
    }
    $_obfuscate_jZCHlIqNkJSSiYaQk4eVko0�->close( );
}

function _obfuscate_lJSMlYuJk5SMkI_KiI_RiIk�( $_obfuscate_jIqLjIyJk5WTh5CHiZSVh5E� )
{
    global $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�;
    $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5U� = "insert into `kss_tb_log_task` (`addtime`, `intro`) values (".time( ).", '".mysql_real_escape_string( $_obfuscate_jIqLjIyJk5WTh5CHiZSVh5E� )."')";
    $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5U�, "nosync" );
    if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� !== TRUE )
    {
        _obfuscate_h4aIlI6QlYmUkY6MlI6Qhos�( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5U�, $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4�( ), __FILE__, 528 );
    }
}

function _obfuscate_kZWOkouLho6Uko2OjIqMjI0�( )
{
    global $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�;
    global $_obfuscate_ho_Ik5KOh5KVh4eGlJCNjpM�;
    global $_obfuscate_h5KGh42MlI2Ij5WRjI6Nh48�;
    global $_obfuscate_j42OiJORiY6OjYuMkY2Lj4k�;
    $_obfuscate_j42OiJORiY6OjYuMkY2Lj4k�[1] = _obfuscate_hpCTj4mKj5WSkpWPjouJkoc�( );
    if ( $_obfuscate_h5KGh42MlI2Ij5WRjI6Nh48� < _obfuscate_i4mGjpKMk5WRipSVi4mLi40�( $_obfuscate_j42OiJORiY6OjYuMkY2Lj4k� ) + 2000 )
    {
        _obfuscate_lJSMlYuJk5SMkI_KiI_RiIk�( "↑↑↑↑↑↑↑↑↑↑↑".$_obfuscate_h5KGh42MlI2Ij5WRjI6Nh48�."秒" );
        $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kJCHlYiNjJCQlJKQkZKSko0�( );
        $_obfuscate_ho_Ik5KOh5KVh4eGlJCNjpM�->_obfuscate_kJCHlYiNjJCQlJKQkZKSko0�( );
        exit( );
    }
}

function _obfuscate_i5KKjpOTlJGTiYeMkZCTk4g�( $_obfuscate_iY2TjIyPlIeMkYeQiJKVjI8� )
{
    $_obfuscate_jIiIiJSJiYyGiIaPiZWJjZI� = "";
    foreach ( $_obfuscate_iY2TjIyPlIeMkYeQiJKVjI8� as $_obfuscate_koiIh4mRlJKGlIiGiJCUkI4� => $_obfuscate_lYeSkY6Th5SOlYuHjZGVio8� )
    {
        $_obfuscate_jIiIiJSJiYyGiIaPiZWJjZI� .= $_obfuscate_koiIh4mRlJKGlIiGiJCUkI4�.chr( 1 );
        foreach ( $_obfuscate_lYeSkY6Th5SOlYuHjZGVio8� as $_obfuscate_jIiJhoaRhpWMh5WSlI2JkpI� => $_obfuscate_hoeShoiJj4qSkZCKh4_Pj5A� )
        {
            $_obfuscate_jIiIiJSJiYyGiIaPiZWJjZI� .= $_obfuscate_jIiJhoaRhpWMh5WSlI2JkpI�.chr( 2 ).$_obfuscate_hoeShoiJj4qSkZCKh4_Pj5A�.chr( 2 );
        }
        $_obfuscate_jIiIiJSJiYyGiIaPiZWJjZI� = substr( $_obfuscate_jIiIiJSJiYyGiIaPiZWJjZI�, 0, strlen( $_obfuscate_jIiIiJSJiYyGiIaPiZWJjZI� ) - 1 ).chr( 1 );
    }
    $_obfuscate_jIiIiJSJiYyGiIaPiZWJjZI� = substr( $_obfuscate_jIiIiJSJiYyGiIaPiZWJjZI�, 0, strlen( $_obfuscate_jIiIiJSJiYyGiIaPiZWJjZI� ) - 1 );
    $_obfuscate_jIiIiJSJiYyGiIaPiZWJjZI� = base64_encode( gzcompress( $_obfuscate_jIiIiJSJiYyGiIaPiZWJjZI� ) );
    $_obfuscate_jIiIiJSJiYyGiIaPiZWJjZI� = strtr( $_obfuscate_jIiIiJSJiYyGiIaPiZWJjZI�, "+/=", "*_-" );
    return $_obfuscate_jIiIiJSJiYyGiIaPiZWJjZI�;
}

function _obfuscate_lYuLkpWKjJOKk4eLiZWHi4g�( $_obfuscate_jIiIiJSJiYyGiIaPiZWJjZI� )
{
    $_obfuscate_jIiIiJSJiYyGiIaPiZWJjZI� = strtr( $_obfuscate_jIiIiJSJiYyGiIaPiZWJjZI�, "*_-", "+/=" );
    $_obfuscate_jIiIiJSJiYyGiIaPiZWJjZI� = gzuncompress( base64_decode( $_obfuscate_jIiIiJSJiYyGiIaPiZWJjZI� ) );
    $_obfuscate_iY_KkZKTjJOQjZGLiZSUiIw� = explode( chr( 1 ), $_obfuscate_jIiIiJSJiYyGiIaPiZWJjZI� );
    $_obfuscate_jomViI6KkJOPh4eNiYeGi48� = count( $_obfuscate_iY_KkZKTjJOQjZGLiZSUiIw� );
    $_obfuscate_lIePko6OkoePiJCJkpOSjIo� = array( );
    $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� = 0;
    for ( ; $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� < $_obfuscate_jomViI6KkJOPh4eNiYeGi48�; $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� = $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� + 2 )
    {
        $_obfuscate_jIiLiYiQj5CSk5KRjJSGjYw� = intval( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� / 2 );
        $_obfuscate_i4yLjY6PhoqJkJOUj4uTjJM� = explode( chr( 2 ), $_obfuscate_iY_KkZKTjJOQjZGLiZSUiIw�[$_obfuscate_jIiLiYiQj5CSk5KRjJSGjYw� * 2 + 1] );
        $_obfuscate_koyIh5KTkJWMipWQjpGJh4s� = count( $_obfuscate_i4yLjY6PhoqJkJOUj4uTjJM� );
        $_obfuscate_jJWUlZWTjJWKjY2NkZSHjIk� = array( );
        $_obfuscate_iI2OkIaGi5SPjJKIlZSHjog� = 0;
        for ( ; $_obfuscate_iI2OkIaGi5SPjJKIlZSHjog� < $_obfuscate_koyIh5KTkJWMipWQjpGJh4s�; $_obfuscate_iI2OkIaGi5SPjJKIlZSHjog� = $_obfuscate_iI2OkIaGi5SPjJKIlZSHjog� + 2 )
        {
            $_obfuscate_jJWUlZWTjJWKjY2NkZSHjIk�[$_obfuscate_i4yLjY6PhoqJkJOUj4uTjJM�[$_obfuscate_iI2OkIaGi5SPjJKIlZSHjog�]] = $_obfuscate_i4yLjY6PhoqJkJOUj4uTjJM�[$_obfuscate_iI2OkIaGi5SPjJKIlZSHjog� + 1];
        }
        $_obfuscate_lIePko6OkoePiJCJkpOSjIo�[$_obfuscate_jIiLiYiQj5CSk5KRjJSGjYw�] = $_obfuscate_jJWUlZWTjJWKjY2NkZSHjIk�;
        unset( $����������������� );
    }
    return $_obfuscate_lIePko6OkoePiJCJkpOSjIo�;
}

function _obfuscate_iIqLh42UipSHk46SlY_ViY0�( $_obfuscate_iY2TjIyPlIeMkYeQiJKVjI8� )
{
    $_obfuscate_jIiIiJSJiYyGiIaPiZWJjZI� = "";
    foreach ( $_obfuscate_iY2TjIyPlIeMkYeQiJKVjI8� as $_obfuscate_koiIh4mRlJKGlIiGiJCUkI4� => $_obfuscate_lYeSkY6Th5SOlYuHjZGVio8� )
    {
        $_obfuscate_jIiIiJSJiYyGiIaPiZWJjZI� .= $_obfuscate_koiIh4mRlJKGlIiGiJCUkI4�.chr( 1 ).$_obfuscate_lYeSkY6Th5SOlYuHjZGVio8�.chr( 1 );
    }
    $_obfuscate_jIiIiJSJiYyGiIaPiZWJjZI� = substr( $_obfuscate_jIiIiJSJiYyGiIaPiZWJjZI�, 0, strlen( $_obfuscate_jIiIiJSJiYyGiIaPiZWJjZI� ) - 1 );
    $_obfuscate_jIiIiJSJiYyGiIaPiZWJjZI� = base64_encode( gzcompress( $_obfuscate_jIiIiJSJiYyGiIaPiZWJjZI� ) );
    $_obfuscate_jIiIiJSJiYyGiIaPiZWJjZI� = strtr( $_obfuscate_jIiIiJSJiYyGiIaPiZWJjZI�, "+/=", "*_-" );
    return $_obfuscate_jIiIiJSJiYyGiIaPiZWJjZI�;
}

function _obfuscate_h4qTkJOHjpCGh4uMk4eJh44�( $_obfuscate_jIiIiJSJiYyGiIaPiZWJjZI� )
{
    $_obfuscate_jIiIiJSJiYyGiIaPiZWJjZI� = strtr( $_obfuscate_jIiIiJSJiYyGiIaPiZWJjZI�, "*_-", "+/=" );
    $_obfuscate_jIiIiJSJiYyGiIaPiZWJjZI� = gzuncompress( base64_decode( $_obfuscate_jIiIiJSJiYyGiIaPiZWJjZI� ) );
    $_obfuscate_iY_KkZKTjJOQjZGLiZSUiIw� = explode( chr( 1 ), $_obfuscate_jIiIiJSJiYyGiIaPiZWJjZI� );
    $_obfuscate_jomViI6KkJOPh4eNiYeGi48� = count( $_obfuscate_iY_KkZKTjJOQjZGLiZSUiIw� );
    $_obfuscate_lIePko6OkoePiJCJkpOSjIo� = array( );
    $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� = 0;
    for ( ; $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� < $_obfuscate_jomViI6KkJOPh4eNiYeGi48�; $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� = $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� + 2 )
    {
        $_obfuscate_jIiLiYiQj5CSk5KRjJSGjYw� = intval( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� / 2 );
        $_obfuscate_lIePko6OkoePiJCJkpOSjIo�[$_obfuscate_iY_KkZKTjJOQjZGLiZSUiIw�[$_obfuscate_jIiLiYiQj5CSk5KRjJSGjYw�]] = $_obfuscate_iY_KkZKTjJOQjZGLiZSUiIw�[$_obfuscate_jIiLiYiQj5CSk5KRjJSGjYw� * 2 + 1];
    }
    return $_obfuscate_lIePko6OkoePiJCJkpOSjIo�;
}

require( "./inc.php" );
$_obfuscate_j42OiJORiY6OjYuMkY2Lj4k� = array( );
$_obfuscate_j42OiJORiY6OjYuMkY2Lj4k�[0] = _obfuscate_hpCTj4mKj5WSkpWPjouJkoc�( );
$_obfuscate_h5KGh42MlI2Ij5WRjI6Nh48� = ini_get( "max_execution_time" );
if ( ini_get( "safe_mode" ) == FALSE )
{
    ini_set( "max_execution_time", 90 );
    $_obfuscate_h5KGh42MlI2Ij5WRjI6Nh48� = 90;
}
$_obfuscate_h5KGh42MlI2Ij5WRjI6Nh48� = $_obfuscate_h5KGh42MlI2Ij5WRjI6Nh48� * 1000;
if ( SVRID == 2 && MYSQLBAKPASSWORD == $_GET['pwd'] )
{
    if ( isset( $_GET['step'] ) && $_GET['step'] == "bsaveapicode" )
    {
        _obfuscate_i4iHjpWLlY2SjI2RlJSMk4c�( );
    }
}
if ( SVRID == 1 && MYSQLSYNCMODE == 1 )
{
    $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc� = new mysql_cls( );
    $_obfuscate_ho_Ik5KOh5KVh4eGlJCNjpM� = new mysql_cls( );
    include( "./sqlmode.php" );
    _obfuscate_k4qTkYmKjpWRh42TlIeVlIo�( );
}
else
{
    $_obfuscate_lI_ViZOTiIiSko2QjJCTipM� = $_GET['step'];
    if ( $_obfuscate_lI_ViZOTiIiSko2QjJCTipM� == "b1" )
    {
        if ( SVRID != 2 || IS2SVR != 1 )
        {
            exit( "备服_config.php配置不正确，SVRID应该为2  IS2SVR应该为1" );
        }
    }
    if ( MYSQLBAKPASSWORD != $_GET['pwd'] )
    {
        exit( "主服和备服【系统参数设置】里的【备份数据库的接口密码】不相同，请修改。" );
    }
    if ( IS2SVR == 1 )
    {
        $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc� = new mysql_cls( );
        $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_jIuSjYuUkJGHlYuPjZOQjY4�( $_obfuscate_mGKRY4dMuU6bZZJfh1_TX5k� );
        if ( SVRID == 1 )
        {
            switch ( $_obfuscate_lI_ViZOTiIiSko2QjJCTipM� )
            {
                case "a1" :
                    _obfuscate_iYuRlIaRioySiZKTj4mPkY0�( );
                    break;
                case "a2" :
                    _obfuscate_ipWRkoaJjZONiYyPlJKIkoY�( );
                    break;
                case "a3" :
                    _obfuscate_kIiQjY_Uh5OLhpKOkZOLkpU�( );
                    break;
                case "a4" :
                    _obfuscate_i5SNipCHjImPkoeRlZGTjo0�( );
                    break;
                default :
            }
            do
            {
                break;
            } while ( 1 );
        }
        else
        {
            switch ( $_obfuscate_lI_ViZOTiIiSko2QjJCTipM� )
            {
                case "b1" :
                    _obfuscate_hpCLjoyMjJSSiY6Qjo6VjZQ�( );
                    break;
                case "b2" :
                    _obfuscate_kYmVhpKGj5OSj5CPho_UlJA�( );
                    break;
                case "b3" :
                    _obfuscate_iYqMlY_Vi5WIjoyGkI2Hko0�( );
                    break;
                default :
                    do
                    {
                        break;
                    } while ( 1 );
                    exit( );
                }
                else
                {
            }
        }
    }
}
?>
