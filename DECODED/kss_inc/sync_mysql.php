<?php
/*********************/
/*                   */
/*  Dezend for PHP5  */
/*         NWS       */
/*      Nulled.WS    */
/*                   */
/*********************/

function _obfuscate_iYuRlIaRioySiZKTj4mPkY0ÿ( )
{
    global $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ;
    global $_obfuscate_j42OiJORiY6OjYuMkY2Lj4kÿ;
    global $_obfuscate_h5KGh42MlI2Ij5WRjI6Nh48ÿ;
    $_obfuscate_ioqNlY6GjpCVjY2Ph5WViocÿ = $_GET['notifyid'];
    $_obfuscate_h4iLlI2KlI_QjoqNkoyRh4cÿ = isset( $_GET['trytimes'] ) ? $_GET['trytimes'] : 0;
    if ( !_obfuscate_kZKMiI2OlY6Ih42OkI6Sjo0ÿ( $_obfuscate_ioqNlY6GjpCVjY2Ph5WViocÿ ) )
    {
        exit( "notifyid invalid!" );
    }
    if ( 3 < $_obfuscate_h4iLlI2KlI_QjoqNkoyRh4cÿ )
    {
        _obfuscate_lJSMlYuJk5SMkI_KiI_RiIkÿ( "å–å¤‡æœæ•°æ®å¤±è´¥ï¼Œ".( $_obfuscate_h4iLlI2KlI_QjoqNkoyRh4cÿ - 1 )."æ¬¡é‡è¯•å‡å¤±è´¥ï¼ŒåŒæ­¥ç»“æŸï¼" );
        exit( );
    }
    if ( $_obfuscate_h4iLlI2KlI_QjoqNkoyRh4cÿ == 0 )
    {
        _obfuscate_lJSMlYuJk5SMkI_KiI_RiIkÿ( "CURLæ¨¡å¼ï¼ŒåŒæ­¥å¼€å§‹ï¼" );
    }
    else
    {
        _obfuscate_lJSMlYuJk5SMkI_KiI_RiIkÿ( "å–å¤‡æœæ•°æ®å¤±è´¥ï¼Œå¼€å§‹ç¬¬".$_obfuscate_h4iLlI2KlI_QjoqNkoyRh4cÿ."æ¬¡é‡è¯•ï¼" );
    }
    $_obfuscate_lY6IiZSRk5OMk42Hi4eMkoYÿ = _obfuscate_j5SMi5KSiouIj4iIipWIkIsÿ( SYNC2URL."?step=b1&notifyid=".$_obfuscate_ioqNlY6GjpCVjY2Ph5WViocÿ."&pwd=".MYSQLBAKPASSWORD, FALSE, $_obfuscate_h5KGh42MlI2Ij5WRjI6Nh48ÿ / 1000 - 5 );
    if ( substr( $_obfuscate_lY6IiZSRk5OMk42Hi4eMkoYÿ, 0, 6 ) != "dataok" )
    {
        _obfuscate_lJSMlYuJk5SMkI_KiI_RiIkÿ( "é”™è¯¯ä¿¡æ¯ï¼š".$_obfuscate_lY6IiZSRk5OMk42Hi4eMkoYÿ );
        $_obfuscate_koqTiIuHiY6NlJWOiYqRkZEÿ = _obfuscate_j5SMi5KSiouIj4iIipWIkIsÿ( SYNC1URL."?step=a1&notifyid=".$_obfuscate_ioqNlY6GjpCVjY2Ph5WViocÿ."&trytimes=".( $_obfuscate_h4iLlI2KlI_QjoqNkoyRh4cÿ + 1 )."&pwd=".MYSQLBAKPASSWORD, FALSE, 1 );
        exit( );
    }
    _obfuscate_lJSMlYuJk5SMkI_KiI_RiIkÿ( "å–å¤‡æœæ•°æ®æˆåŠŸï¼" );
    $_obfuscate_kJCUiZKMhomPkZSVkYmUio8ÿ = explode( "|", $_obfuscate_lY6IiZSRk5OMk42Hi4eMkoYÿ );
    unset( $•ˆ‰”‘““Œ“‡‹‡Œ’† );
    $_obfuscate_hoqLk5OLlIuMkIuRk5CNlJAÿ = "";
    $_obfuscate_iYqQh5CQkpGIkI6JjpWRk4wÿ = "";
    if ( $_obfuscate_kJCUiZKMhomPkZSVkYmUio8ÿ[1] != "" )
    {
        $_obfuscate_hoqLk5OLlIuMkIuRk5CNlJAÿ = _obfuscate_lYuLkpWKjJOKk4eLiZWHi4gÿ( $_obfuscate_kJCUiZKMhomPkZSVkYmUio8ÿ[1] );
    }
    if ( $_obfuscate_kJCUiZKMhomPkZSVkYmUio8ÿ[2] != "" )
    {
        $_obfuscate_iYqQh5CQkpGIkI6JjpWRk4wÿ = _obfuscate_lYuLkpWKjJOKk4eLiZWHi4gÿ( $_obfuscate_kJCUiZKMhomPkZSVkYmUio8ÿ[2] );
    }
    if ( !empty( $_obfuscate_hoqLk5OLlIuMkIuRk5CNlJAÿ ) )
    {
        _obfuscate_lJSMlYuJk5SMkI_KiI_RiIkÿ( "å¤‡æœæœ‰æ¿€æ´»è®°å½•ï¼Œå¼€å§‹å¤„ç†æ¿€æ´»è®°å½•" );
        foreach ( $_obfuscate_hoqLk5OLlIuMkIuRk5CNlJAÿ as $_obfuscate_lJCSkoeMho2PlJOLiouJj4Yÿ )
        {
            _obfuscate_kZWOkouLho6Uko2OjIqMjI0ÿ( );
            $_obfuscate_kpWKiI2Jj5SGipKVkI_OjY8ÿ = $_obfuscate_lJCSkoeMho2PlJOLiouJj4Yÿ['id'];
            $_obfuscate_j5KIipONlJSQiYmTiYeVlYkÿ = "kss_z_user_".$_obfuscate_lJCSkoeMho2PlJOLiouJj4Yÿ['tbname'];
            $_obfuscate_jo6SlY_VkouJhoqGio2IiZIÿ = "kss_z_key_".$_obfuscate_lJCSkoeMho2PlJOLiouJj4Yÿ['tbname'];
            $_obfuscate_i4yKj4eSi4mRkIqSkY6Piokÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJAÿ( "select * from ".$_obfuscate_j5KIipONlJSQiYmTiYeVlYkÿ." where `username`='".$_obfuscate_lJCSkoeMho2PlJOLiouJj4Yÿ['username']."'" );
            if ( empty( $_obfuscate_i4yKj4eSi4mRkIqSkY6Piokÿ ) )
            {
                $_obfuscate_joaVlZWPkYeKi5WTiZWVkYwÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJAÿ( "select * from ".$_obfuscate_jo6SlY_VkouJhoqGio2IiZIÿ." where `keys`='".substr( $_obfuscate_lJCSkoeMho2PlJOLiouJj4Yÿ['username'], 4, 6 )."' and `keyfix`='".substr( $_obfuscate_lJCSkoeMho2PlJOLiouJj4Yÿ['username'], 0, 4 )."'" );
                if ( empty( $_obfuscate_joaVlZWPkYeKi5WTiZWVkYwÿ ) )
                {
                    $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5Uÿ = "delete from ".$_obfuscate_j5KIipONlJSQiYmTiYeVlYkÿ." where `username`='".$_obfuscate_lJCSkoeMho2PlJOLiouJj4Yÿ['username']."'";
                    $_obfuscate_iouNho2VkZGNi4qGhoiLiJAÿ[] = array( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5Uÿ, 2 );
                    _obfuscate_lJSMlYuJk5SMkI_KiI_RiIkÿ( "ä¸»æœæœªæ‰¾åˆ°æ³¨å†Œå¡".$_obfuscate_lJCSkoeMho2PlJOLiouJj4Yÿ['username']."ï¼Œåˆ é™¤å¤‡æœç”¨æˆ·" );
                    continue;
                }
                else
                {
                    if ( $_obfuscate_joaVlZWPkYeKi5WTiZWVkYwÿ['islock'] != 0 )
                    {
                        $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5Uÿ = "update ".$_obfuscate_j5KIipONlJSQiYmTiYeVlYkÿ." set islock=".$_obfuscate_joaVlZWPkYeKi5WTiZWVkYwÿ['islock']." where `username`='".$_obfuscate_lJCSkoeMho2PlJOLiouJj4Yÿ['username']."'";
                        $_obfuscate_iouNho2VkZGNi4qGhoiLiJAÿ[] = array( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5Uÿ, 2 );
                        _obfuscate_lJSMlYuJk5SMkI_KiI_RiIkÿ( "ä¸»æœæ³¨å†Œå¡ç”¨æˆ·è¢«é”å®š".$_obfuscate_lJCSkoeMho2PlJOLiouJj4Yÿ['username']."ï¼Œé”å®šå¤‡æœæ³¨å†Œå¡ç”¨æˆ·" );
                        continue;
                    }
                    if ( $_obfuscate_joaVlZWPkYeKi5WTiZWVkYwÿ['isback'] != 0 )
                    {
                        $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5Uÿ = "delete from ".$_obfuscate_j5KIipONlJSQiYmTiYeVlYkÿ." where `username`='".$_obfuscate_lJCSkoeMho2PlJOLiouJj4Yÿ['username']."'";
                        $_obfuscate_iouNho2VkZGNi4qGhoiLiJAÿ[] = array( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5Uÿ, 2 );
                        _obfuscate_lJSMlYuJk5SMkI_KiI_RiIkÿ( "ä¸»æœæ³¨å†Œå¡é€€æ¬¾".$_obfuscate_lJCSkoeMho2PlJOLiouJj4Yÿ['username']."ï¼Œåˆ é™¤å¤‡æœæ³¨å†Œå¡ç”¨æˆ·" );
                        continue;
                    }
                    $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ = array( );
                    $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['username'] = $_obfuscate_joaVlZWPkYeKi5WTiZWVkYwÿ['keyfix'].$_obfuscate_joaVlZWPkYeKi5WTiZWVkYwÿ['keys'];
                    $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['password'] = substr( $_obfuscate_joaVlZWPkYeKi5WTiZWVkYwÿ['keyspassword'], 0, 10 );
                    $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['password2'] = substr( $_obfuscate_joaVlZWPkYeKi5WTiZWVkYwÿ['keyspassword'], 10 );
                    $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['addtime'] = $_obfuscate_lJCSkoeMho2PlJOLiouJj4Yÿ['starttime'];
                    $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['starttime'] = $_obfuscate_lJCSkoeMho2PlJOLiouJj4Yÿ['starttime'];
                    $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['managerid'] = $_obfuscate_joaVlZWPkYeKi5WTiZWVkYwÿ['managerid'];
                    $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['cday'] = $_obfuscate_joaVlZWPkYeKi5WTiZWVkYwÿ['cday'];
                    $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['points'] = $_obfuscate_joaVlZWPkYeKi5WTiZWVkYwÿ['points'];
                    $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['tag'] = $_obfuscate_joaVlZWPkYeKi5WTiZWVkYwÿ['tag'];
                    $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['linknum'] = $_obfuscate_joaVlZWPkYeKi5WTiZWVkYwÿ['linknum'];
                    $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['keyextattr'] = $_obfuscate_joaVlZWPkYeKi5WTiZWVkYwÿ['keyextattr'];
                    $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['endtime'] = $_obfuscate_lJCSkoeMho2PlJOLiouJj4Yÿ['starttime'] + $_obfuscate_joaVlZWPkYeKi5WTiZWVkYwÿ['cday'] * 86400;
                    $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['cztimes'] = 1;
                    $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5Uÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSVjoiHkoeTlJSRiJGHiI0ÿ( $_obfuscate_j5KIipONlJSQiYmTiYeVlYkÿ, $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ, "sql" );
                    $_obfuscate_iouNho2VkZGNi4qGhoiLiJAÿ[] = array( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5Uÿ, 1 );
                    $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5Uÿ = "update `".$_obfuscate_jo6SlY_VkouJhoqGio2IiZIÿ."` set cztime=".$_obfuscate_lJCSkoeMho2PlJOLiouJj4Yÿ['starttime'].",czusername='".$_obfuscate_lJCSkoeMho2PlJOLiouJj4Yÿ['username']."' where `keys`='".$_obfuscate_joaVlZWPkYeKi5WTiZWVkYwÿ['keys']."'";
                    $_obfuscate_iouNho2VkZGNi4qGhoiLiJAÿ[] = array( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5Uÿ, 1 );
                }
            }
            else
            {
                if ( $_obfuscate_lJCSkoeMho2PlJOLiouJj4Yÿ['starttime'] < $_obfuscate_i4yKj4eSi4mRkIqSkY6Piokÿ['starttime'] )
                {
                    $_obfuscate_kZGIi4yVio2Nh5CNkJOHiY8ÿ = $_obfuscate_lJCSkoeMho2PlJOLiouJj4Yÿ['starttime'];
                    $_obfuscate_ipKHlZGViZOSkZOMho2ViZMÿ = 1;
                    _obfuscate_lJSMlYuJk5SMkI_KiI_RiIkÿ( "å¤‡æœå…ˆæ¿€æ´»".$_obfuscate_lJCSkoeMho2PlJOLiouJj4Yÿ['username'] );
                }
                else
                {
                    $_obfuscate_kZGIi4yVio2Nh5CNkJOHiY8ÿ = $_obfuscate_i4yKj4eSi4mRkIqSkY6Piokÿ['starttime'];
                    $_obfuscate_ipKHlZGViZOSkZOMho2ViZMÿ = 2;
                    _obfuscate_lJSMlYuJk5SMkI_KiI_RiIkÿ( "ä¸»æœå…ˆæ¿€æ´»".$_obfuscate_lJCSkoeMho2PlJOLiouJj4Yÿ['username'] );
                }
                $_obfuscate_kY_HiJOShpCTioiIiJWLho4ÿ = $_obfuscate_kZGIi4yVio2Nh5CNkJOHiY8ÿ + $_obfuscate_i4yKj4eSi4mRkIqSkY6Piokÿ['cday'] * 86400;
                $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5Uÿ = "update `".$_obfuscate_j5KIipONlJSQiYmTiYeVlYkÿ."` set cday='".$_obfuscate_i4yKj4eSi4mRkIqSkY6Piokÿ['cday']."', starttime=".$_obfuscate_kZGIi4yVio2Nh5CNkJOHiY8ÿ.", endtime=".$_obfuscate_kY_HiJOShpCTioiIiJWLho4ÿ." where `username`='".$_obfuscate_i4yKj4eSi4mRkIqSkY6Piokÿ['username']."'";
                $_obfuscate_iouNho2VkZGNi4qGhoiLiJAÿ[] = array( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5Uÿ, $_obfuscate_ipKHlZGViZOSkZOMho2ViZMÿ );
            }
        }
        $_obfuscate_k5OTjZSSlY6PiY6LhoyUh5Mÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_komUlJONiIqQk42JjYmOioYÿ( "kss_tb_sql" );
        foreach ( $_obfuscate_iouNho2VkZGNi4qGhoiLiJAÿ as $_obfuscate_jYqGj4aRj4_TiY_Mk4qUipAÿ )
        {
            $_obfuscate_kI6TlIiSlYaMjpKQi4eHj5Aÿ = "insert into `kss_tb_sql` (`addtime`,`sqltext`,`isact`,`notifyid`) VALUES(".time( ).",'".mysql_real_escape_string( $_obfuscate_jYqGj4aRj4_TiY_Mk4qUipAÿ[0] )."',".$_obfuscate_jYqGj4aRj4_TiY_Mk4qUipAÿ[1].",'".$_obfuscate_ioqNlY6GjpCVjY2Ph5WViocÿ."')";
            $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( $_obfuscate_kI6TlIiSlYaMjpKQi4eHj5Aÿ, "notsync" );
            if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ === FALSE )
            {
                $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "repair table kss_tb_sql", "notsync" );
                $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( $_obfuscate_kI6TlIiSlYaMjpKQi4eHj5Aÿ, "notsync" );
                if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ === FALSE )
                {
                    $_obfuscate_h4aUkomQiI6JlIaSkomSkokÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4ÿ( );
                    $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "delete from kss_tb_sql where notifyid='".$_obfuscate_ioqNlY6GjpCVjY2Ph5WViocÿ."'", "notsync" );
                    _obfuscate_lJSMlYuJk5SMkI_KiI_RiIkÿ( "å½•å…¥ä¸´æ—¶æ•°æ®æ—¶å‡ºé”™".$_obfuscate_jYqGj4aRj4_TiY_Mk4qUipAÿ[0] );
                    exit( );
                }
            }
        }
        unset( $†Š‹““‹”‹Œ‹‘“” );
        _obfuscate_lJSMlYuJk5SMkI_KiI_RiIkÿ( "æ¿€æ´»è®°å½•å¤„ç†å®Œæ¯•ï¼" );
    }
    if ( !empty( $_obfuscate_iYqQh5CQkpGIkI6JjpWRk4wÿ ) )
    {
        _obfuscate_lJSMlYuJk5SMkI_KiI_RiIkÿ( "å¤‡æœæœ‰æ‰£ç‚¹è®°å½•ï¼Œå¼€å§‹å¤„ç†æ‰£ç‚¹è®°å½•" );
        $_obfuscate_kpWKiI2Jj5SGipKVkI_OjY8ÿ = 0;
        $_obfuscate_hpWVj5COj5KSh5GHkoqIk4gÿ = array( );
        foreach ( $_obfuscate_iYqQh5CQkpGIkI6JjpWRk4wÿ as $_obfuscate_jZWHko2GjY6MkI2QlYqJiIcÿ )
        {
            _obfuscate_kZWOkouLho6Uko2OjIqMjI0ÿ( );
            $_obfuscate_kpWKiI2Jj5SGipKVkI_OjY8ÿ = $_obfuscate_jZWHko2GjY6MkI2QlYqJiIcÿ['id'];
            if ( isset( $_obfuscate_hpWVj5COj5KSh5GHkoqIk4gÿ[$_obfuscate_jZWHko2GjY6MkI2QlYqJiIcÿ['tbname'].$_obfuscate_jZWHko2GjY6MkI2QlYqJiIcÿ['username']] ) )
            {
                $_obfuscate_hpWVj5COj5KSh5GHkoqIk4gÿ[$_obfuscate_jZWHko2GjY6MkI2QlYqJiIcÿ['tbname'].$_obfuscate_jZWHko2GjY6MkI2QlYqJiIcÿ['username']] = array( $_obfuscate_jZWHko2GjY6MkI2QlYqJiIcÿ['tbname'], $_obfuscate_jZWHko2GjY6MkI2QlYqJiIcÿ['username'], $_obfuscate_hpWVj5COj5KSh5GHkoqIk4gÿ[$_obfuscate_jZWHko2GjY6MkI2QlYqJiIcÿ['tbname'].$_obfuscate_jZWHko2GjY6MkI2QlYqJiIcÿ['username']][2] + $_obfuscate_jZWHko2GjY6MkI2QlYqJiIcÿ['points'] );
            }
            else
            {
                $_obfuscate_hpWVj5COj5KSh5GHkoqIk4gÿ[$_obfuscate_jZWHko2GjY6MkI2QlYqJiIcÿ['tbname'].$_obfuscate_jZWHko2GjY6MkI2QlYqJiIcÿ['username']] = array( $_obfuscate_jZWHko2GjY6MkI2QlYqJiIcÿ['tbname'], $_obfuscate_jZWHko2GjY6MkI2QlYqJiIcÿ['username'], $_obfuscate_jZWHko2GjY6MkI2QlYqJiIcÿ['points'] );
            }
        }
        unset( $‰Š‡’‘ˆ‰•‘“Œ );
        foreach ( $_obfuscate_hpWVj5COj5KSh5GHkoqIk4gÿ as $_obfuscate_koiIh4mRlJKGlIiGiJCUkI4ÿ => $_obfuscate_lYeSkY6Th5SOlYuHjZGVio8ÿ )
        {
            $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "insert into kss_tb_sql_points (`addtime`,`tbname`,`username`,`points`,`svrid`) values (".time( ).",'".$_obfuscate_lYeSkY6Th5SOlYuHjZGVio8ÿ[0]."','".$_obfuscate_lYeSkY6Th5SOlYuHjZGVio8ÿ[1]."',".$_obfuscate_lYeSkY6Th5SOlYuHjZGVio8ÿ[2].",2)", "notsync" );
        }
        _obfuscate_lJSMlYuJk5SMkI_KiI_RiIkÿ( "æ‰£ç‚¹è®°å½•å¤„ç†å®Œæ¯•" );
    }
    if ( !empty( $_obfuscate_iYqQh5CQkpGIkI6JjpWRk4wÿ ) || !empty( $_obfuscate_hoqLk5OLlIuMkIuRk5CNlJAÿ ) )
    {
        file_put_contents( KSSROOTDIR."kss_logs".DIRECTORY_SEPARATOR."notifyid.txt", "11112" );
        $_obfuscate_koqTiIuHiY6NlJWOiYqRkZEÿ = _obfuscate_j5SMi5KSiouIj4iIipWIkIsÿ( SYNC1URL."?step=a2&notifyid=".$_obfuscate_ioqNlY6GjpCVjY2Ph5WViocÿ."&trytimes=0&pwd=".MYSQLBAKPASSWORD, FALSE, 1 );
    }
    else
    {
        $_obfuscate_koqTiIuHiY6NlJWOiYqRkZEÿ = _obfuscate_j5SMi5KSiouIj4iIipWIkIsÿ( SYNC1URL."?step=a3&notifyid=".$_obfuscate_ioqNlY6GjpCVjY2Ph5WViocÿ."&trytimes=0&pwd=".MYSQLBAKPASSWORD, FALSE, 1 );
    }
    exit( );
}

function _obfuscate_ipWRkoaJjZONiYyPlJKIkoYÿ( )
{
    global $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ;
    global $_obfuscate_j42OiJORiY6OjYuMkY2Lj4kÿ;
    global $_obfuscate_h5KGh42MlI2Ij5WRjI6Nh48ÿ;
    $_obfuscate_ioqNlY6GjpCVjY2Ph5WViocÿ = $_GET['notifyid'];
    $_obfuscate_h4iLlI2KlI_QjoqNkoyRh4cÿ = $_GET['trytimes'];
    if ( !_obfuscate_kZKMiI2OlY6Ih42OkI6Sjo0ÿ( $_obfuscate_ioqNlY6GjpCVjY2Ph5WViocÿ ) )
    {
        exit( "notifyid invalid!" );
    }
    if ( 2 < $_obfuscate_h4iLlI2KlI_QjoqNkoyRh4cÿ )
    {
        _obfuscate_lJSMlYuJk5SMkI_KiI_RiIkÿ( "åˆ é™¤å¤‡æœå·²å¤„ç†æ•°æ®2æ¬¡é‡è¯•å‡å¤±è´¥ï¼ŒåŒæ­¥ç»“æŸï¼" );
        exit( );
    }
    if ( $_obfuscate_h4iLlI2KlI_QjoqNkoyRh4cÿ == 0 )
    {
        _obfuscate_lJSMlYuJk5SMkI_KiI_RiIkÿ( "å‘å¤‡æœå‘é€åˆ é™¤å·²å¤„ç†æ•°æ®çš„å‘½ä»¤ï¼" );
    }
    else
    {
        _obfuscate_lJSMlYuJk5SMkI_KiI_RiIkÿ( "åˆ é™¤å¤‡æœå·²å¤„ç†æ•°æ®å‘½ä»¤å¤±è´¥ï¼Œå¼€å§‹ç¬¬".$_obfuscate_h4iLlI2KlI_QjoqNkoyRh4cÿ."æ¬¡é‡è¯•ï¼" );
    }
    $_obfuscate_jYyRlJOMh4uPh5KUlZSRiZEÿ = _obfuscate_j5SMi5KSiouIj4iIipWIkIsÿ( SYNC2URL."?step=b2&notifyid=".$_obfuscate_ioqNlY6GjpCVjY2Ph5WViocÿ."&trytimes=".$_obfuscate_h4iLlI2KlI_QjoqNkoyRh4cÿ."&pwd=".MYSQLBAKPASSWORD, FALSE, $_obfuscate_h5KGh42MlI2Ij5WRjI6Nh48ÿ / 1000 - 5 );
    if ( substr( $_obfuscate_jYyRlJOMh4uPh5KUlZSRiZEÿ, 0, 6 ) != "dataok" )
    {
        $_obfuscate_koqTiIuHiY6NlJWOiYqRkZEÿ = _obfuscate_j5SMi5KSiouIj4iIipWIkIsÿ( SYNC1URL."?step=a2&notifyid=".$_obfuscate_ioqNlY6GjpCVjY2Ph5WViocÿ."&trytimes=".( $_obfuscate_h4iLlI2KlI_QjoqNkoyRh4cÿ + 1 )."&pwd=".MYSQLBAKPASSWORD, FALSE, 1 );
        exit( );
    }
    _obfuscate_lJSMlYuJk5SMkI_KiI_RiIkÿ( "å¤‡æœå·²å¤„ç†æ•°æ®åˆ é™¤æˆåŠŸï¼Œå¼€å§‹å¤„ç†ä¸»æœæ•°æ®å˜æ›´åˆ°å¤‡æœï¼" );
    $_obfuscate_koqTiIuHiY6NlJWOiYqRkZEÿ = _obfuscate_j5SMi5KSiouIj4iIipWIkIsÿ( SYNC1URL."?step=a3&notifyid=".$_obfuscate_ioqNlY6GjpCVjY2Ph5WViocÿ."&trytimes=0&limit=0&pwd=".MYSQLBAKPASSWORD, FALSE, 1 );
    exit( );
}

function _obfuscate_kIiQjY_Uh5OLhpKOkZOLkpUÿ( )
{
    global $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ;
    global $_obfuscate_j42OiJORiY6OjYuMkY2Lj4kÿ;
    global $_obfuscate_h5KGh42MlI2Ij5WRjI6Nh48ÿ;
    $_obfuscate_ioqNlY6GjpCVjY2Ph5WViocÿ = $_GET['notifyid'];
    if ( !_obfuscate_kZKMiI2OlY6Ih42OkI6Sjo0ÿ( $_obfuscate_ioqNlY6GjpCVjY2Ph5WViocÿ ) )
    {
        exit( "notifyid invalid!" );
    }
    _obfuscate_lJSMlYuJk5SMkI_KiI_RiIkÿ( "å¼€å§‹å¤„ç†ä¸»æœæ•°æ®" );
    $_obfuscate_k5OTjZSSlY6PiY6LhoyUh5Mÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_komUlJONiIqQk42JjYmOioYÿ( "kss_tb_sql" );
    if ( $_obfuscate_k5OTjZSSlY6PiY6LhoyUh5Mÿ == 0 )
    {
        _obfuscate_lJSMlYuJk5SMkI_KiI_RiIkÿ( "æœªå‘ç°å¾…åŒæ­¥æ•°æ®" );
        exit( );
    }
    $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "update kss_tb_sql set notifyid='".$_obfuscate_ioqNlY6GjpCVjY2Ph5WViocÿ."' where notifyid='' ", "notsync" );
    $_obfuscate_iouGh4aRkYmSioiOlImUio4ÿ = array( "sqldata" => "" );
    $_obfuscate_hoiVk4iHiIaLlIySi4qVkZMÿ = 0;
    $_obfuscate_i4mIjpWGkJSLkZWJjYeGlJIÿ = 0;
    $_obfuscate_iYeIjIaVlYaIj4yTiJWHk40ÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_lZGTiIiKhouKiZGLi5KUkI8ÿ( "select * from `kss_tb_sql` where notifyid='".$_obfuscate_ioqNlY6GjpCVjY2Ph5WViocÿ."' order by id asc limit 0,300 ", 1, 1 );
    while ( !empty( $_obfuscate_iYeIjIaVlYaIj4yTiJWHk40ÿ ) )
    {
        foreach ( $_obfuscate_iYeIjIaVlYaIj4yTiJWHk40ÿ as $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ )
        {
            if ( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['isact'] == 1 )
            {
                $_obfuscate_i4mIjpWGkJSLkZWJjYeGlJIÿ = 1;
                $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['sqltext'] );
                if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ !== FALSE )
                {
                    $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "delete from `kss_tb_sql` where `id`=".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['id'], "notsync" );
                }
                else
                {
                    $_obfuscate_h4aUkomQiI6JlIaSkomSkokÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4ÿ( );
                    $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "update kss_tb_config SET `sync_state`=`sync_state`+1 where id=1", "notsync" );
                    _obfuscate_lJSMlYuJk5SMkI_KiI_RiIkÿ( "â†‘â†‘â†‘â†‘â†‘â†‘â†‘â†‘â†‘â†‘â†‘åŒæ­¥åˆ°æ—¥å¿—ID=".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['id']."æ—¶å‡ºé”™ï¼".$_obfuscate_h4aUkomQiI6JlIaSkomSkokÿ."\t".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['sqltext'] );
                    exit( );
                }
            }
            else
            {
                $_obfuscate_iouGh4aRkYmSioiOlImUio4ÿ .= "sqldata";
            }
        }
        unset( $‰‡ˆŒ†••†ˆŒ“ˆ•‡“ );
        $_obfuscate_hoiVk4iHiIaLlIySi4qVkZMÿ = $_obfuscate_hoiVk4iHiIaLlIySi4qVkZMÿ + 300;
        $_obfuscate_iYeIjIaVlYaIj4yTiJWHk40ÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_lZGTiIiKhouKiZGLi5KUkI8ÿ( "select * from `kss_tb_sql` where notifyid='".$_obfuscate_ioqNlY6GjpCVjY2Ph5WViocÿ."' order by id asc limit ".$_obfuscate_hoiVk4iHiIaLlIySi4qVkZMÿ.",300", 1, 1 );
    }
    if ( $_obfuscate_i4mIjpWGkJSLkZWJjYeGlJIÿ == 1 )
    {
        _obfuscate_lJSMlYuJk5SMkI_KiI_RiIkÿ( "æ³¨å†Œå¡æ¿€æ´»è®°å½•ä¸»æœç›¸å…³å˜æ›´å®Œæˆï¼" );
    }
    $_obfuscate_hoiVk4iHiIaLlIySi4qVkZMÿ = 0;
    $_obfuscate_jI2Ri4eIiIqNjZKSiY_HkZIÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_lZGTiIiKhouKiZGLi5KUkI8ÿ( "select * from `kss_tb_sql_points` where `svrid`=2 order by id asc limit 0,300 ", 1, 1 );
    while ( !empty( $_obfuscate_jI2Ri4eIiIqNjZKSiY_HkZIÿ ) )
    {
        foreach ( $_obfuscate_jI2Ri4eIiIqNjZKSiY_HkZIÿ as $_obfuscate_jZWPiZWJlIeHkZWIhouRlZAÿ )
        {
            $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "update kss_z_user_".$_obfuscate_jZWPiZWJlIeHkZWIhouRlZAÿ['tbname']." SET `points`=`points`-".$_obfuscate_jZWPiZWJlIeHkZWIhouRlZAÿ['points']." where `username`='".$_obfuscate_jZWPiZWJlIeHkZWIhouRlZAÿ['username']."'", "notsync" );
            $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "delete from `kss_tb_sql_points` where `id`=".$_obfuscate_jZWPiZWJlIeHkZWIhouRlZAÿ['id'], "notsync" );
        }
        unset( $Œ‘‹‡ˆˆŠ’’‰‡‘’ );
        $_obfuscate_hoiVk4iHiIaLlIySi4qVkZMÿ = $_obfuscate_hoiVk4iHiIaLlIySi4qVkZMÿ + 300;
        $_obfuscate_jI2Ri4eIiIqNjZKSiY_HkZIÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_lZGTiIiKhouKiZGLi5KUkI8ÿ( "select * from `kss_tb_sql_points` where `svrid`=2 order by id asc limit ".$_obfuscate_hoiVk4iHiIaLlIySi4qVkZMÿ.",300", 1, 1 );
        _obfuscate_lJSMlYuJk5SMkI_KiI_RiIkÿ( "ç‚¹æ•°å¤„ç†".$_obfuscate_hoiVk4iHiIaLlIySi4qVkZMÿ );
    }
    if ( empty( $_obfuscate_iouGh4aRkYmSioiOlImUio4ÿ['sqldata'] ) )
    {
        _obfuscate_lJSMlYuJk5SMkI_KiI_RiIkÿ( "æ— éœ€åŒæ­¥æ•°æ®å–å¤‡æœ" );
        file_put_contents( KSSLOGDIR."sendsqldata.php", "<".( "?" )."php exit('x');"."?".">" );
        exit( );
    }
    $_obfuscate_lI2Vh4qTjpKPlZSVjo_JhpEÿ = strlen( $_obfuscate_iouGh4aRkYmSioiOlImUio4ÿ['sqldata'] );
    $_obfuscate_iouGh4aRkYmSioiOlImUio4ÿ['sqldata'] = substr( $_obfuscate_iouGh4aRkYmSioiOlImUio4ÿ['sqldata'], 0, strlen( $_obfuscate_iouGh4aRkYmSioiOlImUio4ÿ['sqldata'] ) - 1 );
    $_obfuscate_iouGh4aRkYmSioiOlImUio4ÿ['sqldata'] = base64_encode( gzcompress( $_obfuscate_iouGh4aRkYmSioiOlImUio4ÿ['sqldata'] ) );
    $_obfuscate_iouGh4aRkYmSioiOlImUio4ÿ['sqldata'] = strtr( $_obfuscate_iouGh4aRkYmSioiOlImUio4ÿ['sqldata'], "+/=", "*_-" );
    file_put_contents( KSSLOGDIR."sendsqldata.php", "<".( "?" )."php exit('x');"."?".">".$_obfuscate_ioqNlY6GjpCVjY2Ph5WViocÿ.$_obfuscate_iouGh4aRkYmSioiOlImUio4ÿ['sqldata'] );
    $_obfuscate_kIqHiYqIko2Qk4eOjIaOj4sÿ = strlen( $_obfuscate_iouGh4aRkYmSioiOlImUio4ÿ['sqldata'] );
    _obfuscate_lJSMlYuJk5SMkI_KiI_RiIkÿ( "ä¸»æœæ•°æ®å¤„ç†å®Œæ¯•ï¼Œå¼€å§‹å‘é€æ•°æ®åˆ°å¤‡æœï¼".round( $_obfuscate_kIqHiYqIko2Qk4eOjIaOj4sÿ / 1024, 2 )."KBæ•°æ®å‹ç¼©ç‡".round( $_obfuscate_kIqHiYqIko2Qk4eOjIaOj4sÿ * 100 / $_obfuscate_lI2Vh4qTjpKPlZSVjo_JhpEÿ )."%" );
    $_obfuscate_koqTiIuHiY6NlJWOiYqRkZEÿ = _obfuscate_j5SMi5KSiouIj4iIipWIkIsÿ( SYNC2URL."?step=b3&notifyid=".$_obfuscate_ioqNlY6GjpCVjY2Ph5WViocÿ."&trytimes=0&randid=".time( )."&limit=0&pwd=".MYSQLBAKPASSWORD, $_obfuscate_iouGh4aRkYmSioiOlImUio4ÿ, intval( $_obfuscate_h5KGh42MlI2Ij5WRjI6Nh48ÿ / 1000 - 10 ) );
    if ( substr( $_obfuscate_koqTiIuHiY6NlJWOiYqRkZEÿ, 0, 6 ) != "dataok" )
    {
        _obfuscate_lJSMlYuJk5SMkI_KiI_RiIkÿ( $_obfuscate_koqTiIuHiY6NlJWOiYqRkZEÿ );
        $_obfuscate_koqTiIuHiY6NlJWOiYqRkZEÿ = _obfuscate_j5SMi5KSiouIj4iIipWIkIsÿ( SYNC2URL."?step=a4&notifyid=".$_obfuscate_ioqNlY6GjpCVjY2Ph5WViocÿ."&trytimes=1&limit=0&pwd=".MYSQLBAKPASSWORD, $_obfuscate_iouGh4aRkYmSioiOlImUio4ÿ, 1 );
        exit( );
    }
    _obfuscate_lJSMlYuJk5SMkI_KiI_RiIkÿ( "å¤‡æœå¤„ç†ä¸»æœæ•°æ®ç»“æœï¼š".substr( $_obfuscate_koqTiIuHiY6NlJWOiYqRkZEÿ, 6 ) );
    $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "delete from kss_tb_sql where notifyid='".$_obfuscate_ioqNlY6GjpCVjY2Ph5WViocÿ."' ", "notsync" );
    $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "update kss_tb_config SET `sync_state`=0 where id=1", "notsync" );
    file_put_contents( KSSLOGDIR."sendsqldata.php", "<".( "?" )."php exit('x');"."?".">" );
    _obfuscate_lJSMlYuJk5SMkI_KiI_RiIkÿ( "æœ¬æ¬¡åŒæ­¥å®Œæˆ" );
    exit( );
}

function _obfuscate_i5SNipCHjImPkoeRlZGTjo0ÿ( )
{
    global $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ;
    global $_obfuscate_j42OiJORiY6OjYuMkY2Lj4kÿ;
    global $_obfuscate_h5KGh42MlI2Ij5WRjI6Nh48ÿ;
    $_obfuscate_ioqNlY6GjpCVjY2Ph5WViocÿ = $_GET['notifyid'];
    $_obfuscate_h4iLlI2KlI_QjoqNkoyRh4cÿ = $_GET['trytimes'];
    if ( !_obfuscate_kZKMiI2OlY6Ih42OkI6Sjo0ÿ( $_obfuscate_ioqNlY6GjpCVjY2Ph5WViocÿ ) )
    {
        exit( "notifyid invalid!" );
    }
    if ( 3 < $_obfuscate_h4iLlI2KlI_QjoqNkoyRh4cÿ )
    {
        _obfuscate_lJSMlYuJk5SMkI_KiI_RiIkÿ( "å‘é€æ•°æ®åˆ°å¤‡æœ".( $_obfuscate_h4iLlI2KlI_QjoqNkoyRh4cÿ - 1 )."æ¬¡é‡è¯•å‡å¤±è´¥ï¼ŒåŒæ­¥ç»“æŸï¼" );
        exit( );
    }
    _obfuscate_lJSMlYuJk5SMkI_KiI_RiIkÿ( "å‘é€æ•°æ®åˆ°å¤‡æœï¼Œå¼€å§‹ç¬¬".$_obfuscate_h4iLlI2KlI_QjoqNkoyRh4cÿ."æ¬¡é‡è¯•ï¼" );
    $_obfuscate_jZWRiYeJlI2Pj4mGioiKkpMÿ = file_get_contents( KSSLOGDIR."sendsqldata.php" );
    if ( substr( $_obfuscate_jZWRiYeJlI2Pj4mGioiKkpMÿ, 18, 20 ) != $_obfuscate_ioqNlY6GjpCVjY2Ph5WViocÿ )
    {
        $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "update kss_tb_config SET `sync_state`=10 where id=1", "notsync" );
        _obfuscate_lJSMlYuJk5SMkI_KiI_RiIkÿ( "åŒæ­¥ç»“æŸsendsqldataå†…å®¹è¢«æ”¹å˜ï¼Œå»ºè®®æ‰‹å·¥åŒæ­¥ä¸€æ¬¡æ•°æ®åº“ï¼" );
        exit( );
    }
    $_obfuscate_iouGh4aRkYmSioiOlImUio4ÿ = array( );
    $_obfuscate_iouGh4aRkYmSioiOlImUio4ÿ['sqldata'] = substr( $_obfuscate_jZWRiYeJlI2Pj4mGioiKkpMÿ, 38 );
    $_obfuscate_koqTiIuHiY6NlJWOiYqRkZEÿ = _obfuscate_j5SMi5KSiouIj4iIipWIkIsÿ( SYNC2URL."?step=b3&notifyid=".$_obfuscate_ioqNlY6GjpCVjY2Ph5WViocÿ."&trytimes=0&pwd=".MYSQLBAKPASSWORD, $_obfuscate_iouGh4aRkYmSioiOlImUio4ÿ, $_obfuscate_h5KGh42MlI2Ij5WRjI6Nh48ÿ / 1000 - 5 );
    if ( substr( $_obfuscate_koqTiIuHiY6NlJWOiYqRkZEÿ, 0, 6 ) != "dataok" )
    {
        $_obfuscate_koqTiIuHiY6NlJWOiYqRkZEÿ = _obfuscate_j5SMi5KSiouIj4iIipWIkIsÿ( SYNC2URL."?step=a4&notifyid=".$_obfuscate_ioqNlY6GjpCVjY2Ph5WViocÿ."&trytimes=".( $_obfuscate_h4iLlI2KlI_QjoqNkoyRh4cÿ + 1 )."&limit=0&pwd=".MYSQLBAKPASSWORD, $_obfuscate_iouGh4aRkYmSioiOlImUio4ÿ, 1 );
        exit( );
    }
    _obfuscate_lJSMlYuJk5SMkI_KiI_RiIkÿ( "å¤‡æœå¤„ç†ä¸»æœæ•°æ®ç»“æœï¼š".substr( $_obfuscate_koqTiIuHiY6NlJWOiYqRkZEÿ, 6 ) );
    $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "delete from kss_tb_sql where notifyid='".$_obfuscate_ioqNlY6GjpCVjY2Ph5WViocÿ."' ", "notsync" );
    $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "update kss_tb_config SET `sync_state`=0 where id=1", "notsync" );
    file_put_contents( KSSLOGDIR."sendsqldata.php", "<".( "?" )."php exit('x');"."?".">" );
    _obfuscate_lJSMlYuJk5SMkI_KiI_RiIkÿ( "æœ¬æ¬¡åŒæ­¥å®Œæˆ" );
    exit( );
}

function _obfuscate_hpCLjoyMjJSSiY6Qjo6VjZQÿ( )
{
    global $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ;
    global $_obfuscate_j42OiJORiY6OjYuMkY2Lj4kÿ;
    global $_obfuscate_h5KGh42MlI2Ij5WRjI6Nh48ÿ;
    $_obfuscate_ioqNlY6GjpCVjY2Ph5WViocÿ = $_GET['notifyid'];
    if ( !_obfuscate_kZKMiI2OlY6Ih42OkI6Sjo0ÿ( $_obfuscate_ioqNlY6GjpCVjY2Ph5WViocÿ ) )
    {
        exit( "notifyid invalid!" );
    }
    $_obfuscate_iIyIjoeKjYuOj46JkYqVkoYÿ = "";
    $_obfuscate_iYeViIuKjpWHhoaMio6GjIYÿ = "";
    $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "delete from kss_tb_sql_active where notifyid not in('".$_obfuscate_ioqNlY6GjpCVjY2Ph5WViocÿ."','')", "notsync" );
    $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "delete from kss_tb_sql_points where notifyid not in('".$_obfuscate_ioqNlY6GjpCVjY2Ph5WViocÿ."','')", "notsync" );
    $_obfuscate_jY2Kh4aJkJCJlIaSlY_Nj5Iÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_lZGTiIiKhouKiZGLi5KUkI8ÿ( "select * from `kss_tb_sql_points` where notifyid='".$_obfuscate_ioqNlY6GjpCVjY2Ph5WViocÿ."' order by id asc" );
    if ( !empty( $_obfuscate_jY2Kh4aJkJCJlIaSlY_Nj5Iÿ ) )
    {
        $_obfuscate_iIyIjoeKjYuOj46JkYqVkoYÿ = _obfuscate_i5KKjpOTlJGTiYeMkZCTk4gÿ( $_obfuscate_jY2Kh4aJkJCJlIaSlY_Nj5Iÿ );
    }
    else
    {
        $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "update kss_tb_sql_points set notifyid='".$_obfuscate_ioqNlY6GjpCVjY2Ph5WViocÿ."'", "notsync" );
        $_obfuscate_jY2Kh4aJkJCJlIaSlY_Nj5Iÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_lZGTiIiKhouKiZGLi5KUkI8ÿ( "select * from `kss_tb_sql_points` where notifyid='".$_obfuscate_ioqNlY6GjpCVjY2Ph5WViocÿ."' order by id asc" );
        if ( !empty( $_obfuscate_jY2Kh4aJkJCJlIaSlY_Nj5Iÿ ) )
        {
            $_obfuscate_iIyIjoeKjYuOj46JkYqVkoYÿ = _obfuscate_i5KKjpOTlJGTiYeMkZCTk4gÿ( $_obfuscate_jY2Kh4aJkJCJlIaSlY_Nj5Iÿ );
        }
    }
    $_obfuscate_i5WNkIiOkoqUkYeGk4uTjIcÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_lZGTiIiKhouKiZGLi5KUkI8ÿ( "select * from `kss_tb_sql_active` where notifyid='".$_obfuscate_ioqNlY6GjpCVjY2Ph5WViocÿ."' order by id asc" );
    if ( !empty( $_obfuscate_i5WNkIiOkoqUkYeGk4uTjIcÿ ) )
    {
        $_obfuscate_iYeViIuKjpWHhoaMio6GjIYÿ = _obfuscate_i5KKjpOTlJGTiYeMkZCTk4gÿ( $_obfuscate_i5WNkIiOkoqUkYeGk4uTjIcÿ );
    }
    else
    {
        $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "update kss_tb_sql_active set notifyid='".$_obfuscate_ioqNlY6GjpCVjY2Ph5WViocÿ."'", "notsync" );
        $_obfuscate_i5WNkIiOkoqUkYeGk4uTjIcÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_lZGTiIiKhouKiZGLi5KUkI8ÿ( "select * from `kss_tb_sql_active` where notifyid='".$_obfuscate_ioqNlY6GjpCVjY2Ph5WViocÿ."' order by id asc" );
        if ( !empty( $_obfuscate_i5WNkIiOkoqUkYeGk4uTjIcÿ ) )
        {
            $_obfuscate_iYeViIuKjpWHhoaMio6GjIYÿ = _obfuscate_i5KKjpOTlJGTiYeMkZCTk4gÿ( $_obfuscate_i5WNkIiOkoqUkYeGk4uTjIcÿ );
        }
    }
    exit( "dataok|".$_obfuscate_iYeViIuKjpWHhoaMio6GjIYÿ."|".$_obfuscate_iIyIjoeKjYuOj46JkYqVkoYÿ );
}

function _obfuscate_kYmVhpKGj5OSj5CPho_UlJAÿ( )
{
    global $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ;
    global $_obfuscate_j42OiJORiY6OjYuMkY2Lj4kÿ;
    global $_obfuscate_h5KGh42MlI2Ij5WRjI6Nh48ÿ;
    $_obfuscate_ioqNlY6GjpCVjY2Ph5WViocÿ = $_GET['notifyid'];
    if ( !_obfuscate_kZKMiI2OlY6Ih42OkI6Sjo0ÿ( $_obfuscate_ioqNlY6GjpCVjY2Ph5WViocÿ ) )
    {
        exit( "notifyid invalid!" );
    }
    $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "delete from kss_tb_sql_active where notifyid='".$_obfuscate_ioqNlY6GjpCVjY2Ph5WViocÿ."'", "notsync" );
    if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ === FALSE )
    {
        $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "REPAIR TABLE kss_tb_sql_active", "notsync" );
        $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "delete from kss_tb_sql_active where notifyid='".$_obfuscate_ioqNlY6GjpCVjY2Ph5WViocÿ."'", "notsync" );
    }
    $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "delete from kss_tb_sql_points where notifyid='".$_obfuscate_ioqNlY6GjpCVjY2Ph5WViocÿ."'", "notsync" );
    if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ === FALSE )
    {
        $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "REPAIR TABLE kss_tb_sql_points", "notsync" );
        $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "delete from kss_tb_sql_points where notifyid='".$_obfuscate_ioqNlY6GjpCVjY2Ph5WViocÿ."'", "notsync" );
    }
    _obfuscate_lJSMlYuJk5SMkI_KiI_RiIkÿ( $_obfuscate_ioqNlY6GjpCVjY2Ph5WViocÿ."æ¿€æ´»ä¸ç‚¹æ•°æ•°æ®æˆåŠŸå‘é€åˆ°ä¸»æœ" );
    exit( );
}

function _obfuscate_iYqMlY_Vi5WIjoyGkI2Hko0ÿ( )
{
    global $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ;
    global $_obfuscate_j42OiJORiY6OjYuMkY2Lj4kÿ;
    global $_obfuscate_h5KGh42MlI2Ij5WRjI6Nh48ÿ;
    _obfuscate_hpCHkYaMkYuNko2Gio2KjJQÿ( );
    $_obfuscate_ioqNlY6GjpCVjY2Ph5WViocÿ = $_GET['notifyid'];
    $_obfuscate_hoeUiJCLjYyGjIaKkZKOk4cÿ = $_POST['sqldata'];
    $_obfuscate_hoeUiJCLjYyGjIaKkZKOk4cÿ = strtr( $_obfuscate_hoeUiJCLjYyGjIaKkZKOk4cÿ, "*_-", "+/=" );
    if ( !_obfuscate_kZKMiI2OlY6Ih42OkI6Sjo0ÿ( $_obfuscate_ioqNlY6GjpCVjY2Ph5WViocÿ ) )
    {
        exit( "notifyid invalid!" );
    }
    $_obfuscate_hoeUiJCLjYyGjIaKkZKOk4cÿ = gzuncompress( base64_decode( $_obfuscate_hoeUiJCLjYyGjIaKkZKOk4cÿ ) );
    $_obfuscate_h4yViImPipSNiY6MiZWIkZQÿ = explode( chr( 1 ), $_obfuscate_hoeUiJCLjYyGjIaKkZKOk4cÿ );
    if ( is_file( KSSLOGDIR."notifyid".DIRECTORY_SEPARATOR.$_obfuscate_ioqNlY6GjpCVjY2Ph5WViocÿ.".txt" ) )
    {
        $_obfuscate_jY2OjpWVjpGNi4yNiIeIjIgÿ = file_get_contents( KSSLOGDIR."notifyid".DIRECTORY_SEPARATOR.$_obfuscate_ioqNlY6GjpCVjY2Ph5WViocÿ.".txt" );
    }
    else
    {
        $_obfuscate_jY2OjpWVjpGNi4yNiIeIjIgÿ = 0;
        file_put_contents( KSSLOGDIR."notifyid".DIRECTORY_SEPARATOR.$_obfuscate_ioqNlY6GjpCVjY2Ph5WViocÿ.".txt", "0" );
    }
    if ( !empty( $_obfuscate_h4yViImPipSNiY6MiZWIkZQÿ ) )
    {
        if ( $_obfuscate_jY2OjpWVjpGNi4yNiIeIjIgÿ < count( $_obfuscate_h4yViImPipSNiY6MiZWIkZQÿ ) )
        {
            $_obfuscate_h4yViImPipSNiY6MiZWIkZQÿ = array_slice( $_obfuscate_h4yViImPipSNiY6MiZWIkZQÿ, $_obfuscate_jY2OjpWVjpGNi4yNiIeIjIgÿ );
            $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ = 0;
            foreach ( $_obfuscate_h4yViImPipSNiY6MiZWIkZQÿ as $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5Uÿ )
            {
                $_obfuscate_j42OiJORiY6OjYuMkY2Lj4kÿ[1] = _obfuscate_hpCTj4mKj5WSkpWPjouJkocÿ( );
                if ( $_obfuscate_h5KGh42MlI2Ij5WRjI6Nh48ÿ < _obfuscate_i4mGjpKMk5WRipSVi4mLi40ÿ( $_obfuscate_j42OiJORiY6OjYuMkY2Lj4kÿ ) + 5000 )
                {
                    exit( "tryä¸»æœå‘é€".count( $_obfuscate_h4yViImPipSNiY6MiZWIkZQÿ )."æ¡ï¼Œå¤‡æœå·²æ‰§è¡Œ".( $_obfuscate_jY2OjpWVjpGNi4yNiIeIjIgÿ + $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ + 1 )."æ¡ï¼Œä¸»æœéœ€é‡è¯•å‘é€" );
                }
                $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ = $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ + 1;
                $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5Uÿ, "notsync" );
                if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ === TRUE )
                {
                    file_put_contents( KSSLOGDIR."notifyid".DIRECTORY_SEPARATOR.$_obfuscate_ioqNlY6GjpCVjY2Ph5WViocÿ.".txt", $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ + $_obfuscate_jY2OjpWVjpGNi4yNiIeIjIgÿ );
                }
                else
                {
                    exit( "tryå¤‡æœæ‰§è¡Œåˆ°ç¬¬".( $_obfuscate_jY2OjpWVjpGNi4yNiIeIjIgÿ + $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ + 1 )."æ¡è¯­å¥ã€".$_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5Uÿ."ã€‘æ—¶å‡ºé”™ã€".$_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4ÿ( )."ã€‘" );
                }
            }
            exit( "dataokæ•°æ®å¤„ç†å®Œæ¯•1ï¼" );
        }
        else
        {
            exit( "dataokæ•°æ®å¤„ç†å®Œæ¯•2ï¼" );
        }
    }
    else
    {
        exit( "dataokæ¥æ”¶åˆ°çš„æ•°æ®æ˜¯ç©ºçš„ï¼" );
    }
}

function _obfuscate_i4iHjpWLlY2SjI2RlJSMk4cÿ( )
{
    $_obfuscate_kouViYyOlJWMkpSKkpGSlJEÿ = _obfuscate_i4mIkpOGkomKiouRhoaMh5Iÿ( "fname", "g", "int", 0 );
    $_obfuscate_lJOVj5WVkI2PjI6QjZWJjoYÿ = _obfuscate_i4mIkpOGkomKiouRhoaMh5Iÿ( "scode", "p", "int", 0 );
    if ( strlen( $_obfuscate_kouViYyOlJWMkpSKkpGSlJEÿ ) < 6 || strlen( $_obfuscate_lJOVj5WVkI2PjI6QjZWJjoYÿ ) != 7 )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "ï¼ŒåŒæ­¥advapiä»£ç åˆ°å¤‡æœæ—¶å‡ºé”™ï¼šè½¯ä»¶æ ‡è¯†é”™è¯¯".$_obfuscate_kouViYyOlJWMkpSKkpGSlJEÿ );
    }
    $_obfuscate_h5WSh5WPkoaVjJWVkoiQjocÿ = $_POST['advapicode'];
    $_obfuscate_h5WSh5WPkoaVjJWVkoiQjocÿ = _obfuscate_kIuUko_Mh42UkZSHjZSQiZIÿ( $_obfuscate_h5WSh5WPkoaVjJWVkoiQjocÿ );
    $_obfuscate_hoaVjJGTj4uNioeOjpSVh4Yÿ = $_POST['rsacode'];
    $_obfuscate_hoaVjJGTj4uNioeOjpSVh4Yÿ = _obfuscate_kIuUko_Mh42UkZSHjZSQiZIÿ( $_obfuscate_hoaVjJGTj4uNioeOjpSVh4Yÿ );
    file_put_contents( "./advapi/".$_obfuscate_kouViYyOlJWMkpSKkpGSlJEÿ.".php", $_obfuscate_h5WSh5WPkoaVjJWVkoiQjocÿ );
    file_put_contents( "./advapi/rsa".$_obfuscate_lJOVj5WVkI2PjI6QjZWJjoYÿ.".php", $_obfuscate_hoaVjJGTj4uNioeOjpSVh4Yÿ );
    exit( "ï¼Œadvapiå’Œrsaç¼“å­˜ä»£ç å·²æ›´æ–°åˆ°å¤‡æœ" );
}

function _obfuscate_hpCHkYaMkYuNko2Gio2KjJQÿ( )
{
    clearstatcache( );
    $_obfuscate_j4uTjpCNho6Kh4qGh4eLi40ÿ = KSSLOGDIR."notifyid".DIRECTORY_SEPARATOR;
    $_obfuscate_jZCHlIqNkJSSiYaQk4eVko0ÿ = @dir( $_obfuscate_j4uTjpCNho6Kh4qGh4eLi40ÿ );
    while ( $_obfuscate_kY_Ki4_NiIqMj5CSiIiRk48ÿ = $_obfuscate_jZCHlIqNkJSSiYaQk4eVko0ÿ->read( ) )
    {
        if ( pathinfo( $_obfuscate_kY_Ki4_NiIqMj5CSiIiRk48ÿ, PATHINFO_EXTENSION ) == "txt" && is_file( $_obfuscate_j4uTjpCNho6Kh4qGh4eLi40ÿ.$_obfuscate_kY_Ki4_NiIqMj5CSiIiRk48ÿ ) && filemtime( $_obfuscate_j4uTjpCNho6Kh4qGh4eLi40ÿ.$_obfuscate_kY_Ki4_NiIqMj5CSiIiRk48ÿ ) < time( ) - 36000 )
        {
            @unlink( @$_obfuscate_j4uTjpCNho6Kh4qGh4eLi40ÿ.$_obfuscate_kY_Ki4_NiIqMj5CSiIiRk48ÿ );
        }
    }
    $_obfuscate_jZCHlIqNkJSSiYaQk4eVko0ÿ->close( );
}

function _obfuscate_lJSMlYuJk5SMkI_KiI_RiIkÿ( $_obfuscate_jIqLjIyJk5WTh5CHiZSVh5Eÿ )
{
    global $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ;
    $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5Uÿ = "insert into `kss_tb_log_task` (`addtime`, `intro`) values (".time( ).", '".mysql_real_escape_string( $_obfuscate_jIqLjIyJk5WTh5CHiZSVh5Eÿ )."')";
    $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5Uÿ, "nosync" );
    if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ !== TRUE )
    {
        _obfuscate_h4aIlI6QlYmUkY6MlI6Qhosÿ( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5Uÿ, $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4ÿ( ), __FILE__, 528 );
    }
}

function _obfuscate_kZWOkouLho6Uko2OjIqMjI0ÿ( )
{
    global $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ;
    global $_obfuscate_ho_Ik5KOh5KVh4eGlJCNjpMÿ;
    global $_obfuscate_h5KGh42MlI2Ij5WRjI6Nh48ÿ;
    global $_obfuscate_j42OiJORiY6OjYuMkY2Lj4kÿ;
    $_obfuscate_j42OiJORiY6OjYuMkY2Lj4kÿ[1] = _obfuscate_hpCTj4mKj5WSkpWPjouJkocÿ( );
    if ( $_obfuscate_h5KGh42MlI2Ij5WRjI6Nh48ÿ < _obfuscate_i4mGjpKMk5WRipSVi4mLi40ÿ( $_obfuscate_j42OiJORiY6OjYuMkY2Lj4kÿ ) + 2000 )
    {
        _obfuscate_lJSMlYuJk5SMkI_KiI_RiIkÿ( "â†‘â†‘â†‘â†‘â†‘â†‘â†‘â†‘â†‘â†‘â†‘".$_obfuscate_h5KGh42MlI2Ij5WRjI6Nh48ÿ."ç§’" );
        $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kJCHlYiNjJCQlJKQkZKSko0ÿ( );
        $_obfuscate_ho_Ik5KOh5KVh4eGlJCNjpMÿ->_obfuscate_kJCHlYiNjJCQlJKQkZKSko0ÿ( );
        exit( );
    }
}

function _obfuscate_i5KKjpOTlJGTiYeMkZCTk4gÿ( $_obfuscate_iY2TjIyPlIeMkYeQiJKVjI8ÿ )
{
    $_obfuscate_jIiIiJSJiYyGiIaPiZWJjZIÿ = "";
    foreach ( $_obfuscate_iY2TjIyPlIeMkYeQiJKVjI8ÿ as $_obfuscate_koiIh4mRlJKGlIiGiJCUkI4ÿ => $_obfuscate_lYeSkY6Th5SOlYuHjZGVio8ÿ )
    {
        $_obfuscate_jIiIiJSJiYyGiIaPiZWJjZIÿ .= $_obfuscate_koiIh4mRlJKGlIiGiJCUkI4ÿ.chr( 1 );
        foreach ( $_obfuscate_lYeSkY6Th5SOlYuHjZGVio8ÿ as $_obfuscate_jIiJhoaRhpWMh5WSlI2JkpIÿ => $_obfuscate_hoeShoiJj4qSkZCKh4_Pj5Aÿ )
        {
            $_obfuscate_jIiIiJSJiYyGiIaPiZWJjZIÿ .= $_obfuscate_jIiJhoaRhpWMh5WSlI2JkpIÿ.chr( 2 ).$_obfuscate_hoeShoiJj4qSkZCKh4_Pj5Aÿ.chr( 2 );
        }
        $_obfuscate_jIiIiJSJiYyGiIaPiZWJjZIÿ = substr( $_obfuscate_jIiIiJSJiYyGiIaPiZWJjZIÿ, 0, strlen( $_obfuscate_jIiIiJSJiYyGiIaPiZWJjZIÿ ) - 1 ).chr( 1 );
    }
    $_obfuscate_jIiIiJSJiYyGiIaPiZWJjZIÿ = substr( $_obfuscate_jIiIiJSJiYyGiIaPiZWJjZIÿ, 0, strlen( $_obfuscate_jIiIiJSJiYyGiIaPiZWJjZIÿ ) - 1 );
    $_obfuscate_jIiIiJSJiYyGiIaPiZWJjZIÿ = base64_encode( gzcompress( $_obfuscate_jIiIiJSJiYyGiIaPiZWJjZIÿ ) );
    $_obfuscate_jIiIiJSJiYyGiIaPiZWJjZIÿ = strtr( $_obfuscate_jIiIiJSJiYyGiIaPiZWJjZIÿ, "+/=", "*_-" );
    return $_obfuscate_jIiIiJSJiYyGiIaPiZWJjZIÿ;
}

function _obfuscate_lYuLkpWKjJOKk4eLiZWHi4gÿ( $_obfuscate_jIiIiJSJiYyGiIaPiZWJjZIÿ )
{
    $_obfuscate_jIiIiJSJiYyGiIaPiZWJjZIÿ = strtr( $_obfuscate_jIiIiJSJiYyGiIaPiZWJjZIÿ, "*_-", "+/=" );
    $_obfuscate_jIiIiJSJiYyGiIaPiZWJjZIÿ = gzuncompress( base64_decode( $_obfuscate_jIiIiJSJiYyGiIaPiZWJjZIÿ ) );
    $_obfuscate_iY_KkZKTjJOQjZGLiZSUiIwÿ = explode( chr( 1 ), $_obfuscate_jIiIiJSJiYyGiIaPiZWJjZIÿ );
    $_obfuscate_jomViI6KkJOPh4eNiYeGi48ÿ = count( $_obfuscate_iY_KkZKTjJOQjZGLiZSUiIwÿ );
    $_obfuscate_lIePko6OkoePiJCJkpOSjIoÿ = array( );
    $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ = 0;
    for ( ; $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ < $_obfuscate_jomViI6KkJOPh4eNiYeGi48ÿ; $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ = $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ + 2 )
    {
        $_obfuscate_jIiLiYiQj5CSk5KRjJSGjYwÿ = intval( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ / 2 );
        $_obfuscate_i4yLjY6PhoqJkJOUj4uTjJMÿ = explode( chr( 2 ), $_obfuscate_iY_KkZKTjJOQjZGLiZSUiIwÿ[$_obfuscate_jIiLiYiQj5CSk5KRjJSGjYwÿ * 2 + 1] );
        $_obfuscate_koyIh5KTkJWMipWQjpGJh4sÿ = count( $_obfuscate_i4yLjY6PhoqJkJOUj4uTjJMÿ );
        $_obfuscate_jJWUlZWTjJWKjY2NkZSHjIkÿ = array( );
        $_obfuscate_iI2OkIaGi5SPjJKIlZSHjogÿ = 0;
        for ( ; $_obfuscate_iI2OkIaGi5SPjJKIlZSHjogÿ < $_obfuscate_koyIh5KTkJWMipWQjpGJh4sÿ; $_obfuscate_iI2OkIaGi5SPjJKIlZSHjogÿ = $_obfuscate_iI2OkIaGi5SPjJKIlZSHjogÿ + 2 )
        {
            $_obfuscate_jJWUlZWTjJWKjY2NkZSHjIkÿ[$_obfuscate_i4yLjY6PhoqJkJOUj4uTjJMÿ[$_obfuscate_iI2OkIaGi5SPjJKIlZSHjogÿ]] = $_obfuscate_i4yLjY6PhoqJkJOUj4uTjJMÿ[$_obfuscate_iI2OkIaGi5SPjJKIlZSHjogÿ + 1];
        }
        $_obfuscate_lIePko6OkoePiJCJkpOSjIoÿ[$_obfuscate_jIiLiYiQj5CSk5KRjJSGjYwÿ] = $_obfuscate_jJWUlZWTjJWKjY2NkZSHjIkÿ;
        unset( $Œ•”••“Œ•Š‘”‡Œ‰ );
    }
    return $_obfuscate_lIePko6OkoePiJCJkpOSjIoÿ;
}

function _obfuscate_iIqLh42UipSHk46SlY_ViY0ÿ( $_obfuscate_iY2TjIyPlIeMkYeQiJKVjI8ÿ )
{
    $_obfuscate_jIiIiJSJiYyGiIaPiZWJjZIÿ = "";
    foreach ( $_obfuscate_iY2TjIyPlIeMkYeQiJKVjI8ÿ as $_obfuscate_koiIh4mRlJKGlIiGiJCUkI4ÿ => $_obfuscate_lYeSkY6Th5SOlYuHjZGVio8ÿ )
    {
        $_obfuscate_jIiIiJSJiYyGiIaPiZWJjZIÿ .= $_obfuscate_koiIh4mRlJKGlIiGiJCUkI4ÿ.chr( 1 ).$_obfuscate_lYeSkY6Th5SOlYuHjZGVio8ÿ.chr( 1 );
    }
    $_obfuscate_jIiIiJSJiYyGiIaPiZWJjZIÿ = substr( $_obfuscate_jIiIiJSJiYyGiIaPiZWJjZIÿ, 0, strlen( $_obfuscate_jIiIiJSJiYyGiIaPiZWJjZIÿ ) - 1 );
    $_obfuscate_jIiIiJSJiYyGiIaPiZWJjZIÿ = base64_encode( gzcompress( $_obfuscate_jIiIiJSJiYyGiIaPiZWJjZIÿ ) );
    $_obfuscate_jIiIiJSJiYyGiIaPiZWJjZIÿ = strtr( $_obfuscate_jIiIiJSJiYyGiIaPiZWJjZIÿ, "+/=", "*_-" );
    return $_obfuscate_jIiIiJSJiYyGiIaPiZWJjZIÿ;
}

function _obfuscate_h4qTkJOHjpCGh4uMk4eJh44ÿ( $_obfuscate_jIiIiJSJiYyGiIaPiZWJjZIÿ )
{
    $_obfuscate_jIiIiJSJiYyGiIaPiZWJjZIÿ = strtr( $_obfuscate_jIiIiJSJiYyGiIaPiZWJjZIÿ, "*_-", "+/=" );
    $_obfuscate_jIiIiJSJiYyGiIaPiZWJjZIÿ = gzuncompress( base64_decode( $_obfuscate_jIiIiJSJiYyGiIaPiZWJjZIÿ ) );
    $_obfuscate_iY_KkZKTjJOQjZGLiZSUiIwÿ = explode( chr( 1 ), $_obfuscate_jIiIiJSJiYyGiIaPiZWJjZIÿ );
    $_obfuscate_jomViI6KkJOPh4eNiYeGi48ÿ = count( $_obfuscate_iY_KkZKTjJOQjZGLiZSUiIwÿ );
    $_obfuscate_lIePko6OkoePiJCJkpOSjIoÿ = array( );
    $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ = 0;
    for ( ; $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ < $_obfuscate_jomViI6KkJOPh4eNiYeGi48ÿ; $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ = $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ + 2 )
    {
        $_obfuscate_jIiLiYiQj5CSk5KRjJSGjYwÿ = intval( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ / 2 );
        $_obfuscate_lIePko6OkoePiJCJkpOSjIoÿ[$_obfuscate_iY_KkZKTjJOQjZGLiZSUiIwÿ[$_obfuscate_jIiLiYiQj5CSk5KRjJSGjYwÿ]] = $_obfuscate_iY_KkZKTjJOQjZGLiZSUiIwÿ[$_obfuscate_jIiLiYiQj5CSk5KRjJSGjYwÿ * 2 + 1];
    }
    return $_obfuscate_lIePko6OkoePiJCJkpOSjIoÿ;
}

require( "./inc.php" );
$_obfuscate_j42OiJORiY6OjYuMkY2Lj4kÿ = array( );
$_obfuscate_j42OiJORiY6OjYuMkY2Lj4kÿ[0] = _obfuscate_hpCTj4mKj5WSkpWPjouJkocÿ( );
$_obfuscate_h5KGh42MlI2Ij5WRjI6Nh48ÿ = ini_get( "max_execution_time" );
if ( ini_get( "safe_mode" ) == FALSE )
{
    ini_set( "max_execution_time", 90 );
    $_obfuscate_h5KGh42MlI2Ij5WRjI6Nh48ÿ = 90;
}
$_obfuscate_h5KGh42MlI2Ij5WRjI6Nh48ÿ = $_obfuscate_h5KGh42MlI2Ij5WRjI6Nh48ÿ * 1000;
if ( SVRID == 2 && MYSQLBAKPASSWORD == $_GET['pwd'] )
{
    if ( isset( $_GET['step'] ) && $_GET['step'] == "bsaveapicode" )
    {
        _obfuscate_i4iHjpWLlY2SjI2RlJSMk4cÿ( );
    }
}
if ( SVRID == 1 && MYSQLSYNCMODE == 1 )
{
    $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ = new mysql_cls( );
    $_obfuscate_ho_Ik5KOh5KVh4eGlJCNjpMÿ = new mysql_cls( );
    include( "./sqlmode.php" );
    _obfuscate_k4qTkYmKjpWRh42TlIeVlIoÿ( );
}
else
{
    $_obfuscate_lI_ViZOTiIiSko2QjJCTipMÿ = $_GET['step'];
    if ( $_obfuscate_lI_ViZOTiIiSko2QjJCTipMÿ == "b1" )
    {
        if ( SVRID != 2 || IS2SVR != 1 )
        {
            exit( "å¤‡æœ_config.phpé…ç½®ä¸æ­£ç¡®ï¼ŒSVRIDåº”è¯¥ä¸º2  IS2SVRåº”è¯¥ä¸º1" );
        }
    }
    if ( MYSQLBAKPASSWORD != $_GET['pwd'] )
    {
        exit( "ä¸»æœå’Œå¤‡æœã€ç³»ç»Ÿå‚æ•°è®¾ç½®ã€‘é‡Œçš„ã€å¤‡ä»½æ•°æ®åº“çš„æ¥å£å¯†ç ã€‘ä¸ç›¸åŒï¼Œè¯·ä¿®æ”¹ã€‚" );
    }
    if ( IS2SVR == 1 )
    {
        $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ = new mysql_cls( );
        $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_jIuSjYuUkJGHlYuPjZOQjY4ÿ( $_obfuscate_mGKRY4dMuU6bZZJfh1_TX5kÿ );
        if ( SVRID == 1 )
        {
            switch ( $_obfuscate_lI_ViZOTiIiSko2QjJCTipMÿ )
            {
                case "a1" :
                    _obfuscate_iYuRlIaRioySiZKTj4mPkY0ÿ( );
                    break;
                case "a2" :
                    _obfuscate_ipWRkoaJjZONiYyPlJKIkoYÿ( );
                    break;
                case "a3" :
                    _obfuscate_kIiQjY_Uh5OLhpKOkZOLkpUÿ( );
                    break;
                case "a4" :
                    _obfuscate_i5SNipCHjImPkoeRlZGTjo0ÿ( );
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
            switch ( $_obfuscate_lI_ViZOTiIiSko2QjJCTipMÿ )
            {
                case "b1" :
                    _obfuscate_hpCLjoyMjJSSiY6Qjo6VjZQÿ( );
                    break;
                case "b2" :
                    _obfuscate_kYmVhpKGj5OSj5CPho_UlJAÿ( );
                    break;
                case "b3" :
                    _obfuscate_iYqMlY_Vi5WIjoyGkI2Hko0ÿ( );
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
