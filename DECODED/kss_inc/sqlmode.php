<?php
/*********************/
/*                   */
/*  Dezend for PHP5  */
/*         NWS       */
/*      Nulled.WS    */
/*                   */
/*********************/

function _obfuscate_k4qTkYmKjpWRh42TlIeVlIoÿ( )
{
    global $_obfuscate_mGKRY4dMuU6bZZJfh1_TX5kÿ;
    global $_obfuscate_kJCSj4qIjZCUjZSQlYuKi4sÿ;
    global $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ;
    global $_obfuscate_ho_Ik5KOh5KVh4eGlJCNjpMÿ;
    global $_obfuscate_j42OiJORiY6OjYuMkY2Lj4kÿ;
    global $_obfuscate_h5KGh42MlI2Ij5WRjI6Nh48ÿ;
    $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_jIuSjYuUkJGHlYuPjZOQjY4ÿ( $_obfuscate_mGKRY4dMuU6bZZJfh1_TX5kÿ, 1 );
    $_obfuscate_joyJlIaJkoePkYqNk4iVjIYÿ = $_obfuscate_ho_Ik5KOh5KVh4eGlJCNjpMÿ->_obfuscate_jIuSjYuUkJGHlYuPjZOQjY4ÿ( $_obfuscate_kJCSj4qIjZCUjZSQlYuKi4sÿ, 0 );
    echo "123456789012345678901234567890123456789012345678901234567890123456789012345678901234567890123456789012345678901234567890";
    if ( $_obfuscate_joyJlIaJkoePkYqNk4iVjIYÿ == "success" )
    {
        _obfuscate_lJSMlYuJk5SMkI_KiI_RiIkÿ( "â†“â†“â†“â†“â†“â†“â†“â†“â†“â†“â†“è¿žæŽ¥å¤‡ç”¨æœåŠ¡å™¨".$_obfuscate_kJCSj4qIjZCUjZSQlYuKi4sÿ['dbhost']."æ•°æ®åº“".$_obfuscate_kJCSj4qIjZCUjZSQlYuKi4sÿ['dbname']."æˆåŠŸ" );
    }
    else
    {
        _obfuscate_lJSMlYuJk5SMkI_KiI_RiIkÿ( "â†‘â†‘â†‘â†‘â†‘â†‘â†‘â†‘â†‘â†‘â†‘è¿žæŽ¥å¤‡ç”¨æ•°æ®åº“".$_obfuscate_kJCSj4qIjZCUjZSQlYuKi4sÿ['dbhost']."æ•°æ®åº“".$_obfuscate_kJCSj4qIjZCUjZSQlYuKi4sÿ['dbname']."å¤±è´¥,".SYNCTIME."ç§’åŽè‡ªåŠ¨é‡è¯•" );
        exit( );
    }
    $_obfuscate_iouNho2VkZGNi4qGhoiLiJAÿ = array( );
    $_obfuscate_hoqLk5OLlIuMkIuRk5CNlJAÿ = $_obfuscate_ho_Ik5KOh5KVh4eGlJCNjpMÿ->_obfuscate_lZGTiIiKhouKiZGLi5KUkI8ÿ( "select * from `kss_tb_sql_active` order by id asc" );
    if ( !empty( $_obfuscate_hoqLk5OLlIuMkIuRk5CNlJAÿ ) )
    {
        _obfuscate_lJSMlYuJk5SMkI_KiI_RiIkÿ( "å¼€å§‹å¤„ç†kss_tb_sql_activeè¡¨" );
        $_obfuscate_kpWKiI2Jj5SGipKVkI_OjY8ÿ = 0;
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
            $_obfuscate_kI6TlIiSlYaMjpKQi4eHj5Aÿ = "insert into `kss_tb_sql` (`addtime`,`sqltext`,`isact`) VALUES(".time( ).",'".mysql_real_escape_string( $_obfuscate_jYqGj4aRj4_TiY_Mk4qUipAÿ[0] )."',".$_obfuscate_jYqGj4aRj4_TiY_Mk4qUipAÿ[1].")";
            $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( $_obfuscate_kI6TlIiSlYaMjpKQi4eHj5Aÿ, "notsync" );
            if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ === FALSE )
            {
                $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "repair table kss_tb_sql", "notsync" );
                $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( $_obfuscate_kI6TlIiSlYaMjpKQi4eHj5Aÿ, "notsync" );
                if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ === FALSE )
                {
                    $_obfuscate_h4aUkomQiI6JlIaSkomSkokÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4ÿ( );
                    $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "delete from kss_tb_sql where id>".$_obfuscate_k5OTjZSSlY6PiY6LhoyUh5Mÿ." and isact>0", "notsync" );
                    _obfuscate_lJSMlYuJk5SMkI_KiI_RiIkÿ( "å½•å…¥ä¸´æ—¶æ•°æ®æ—¶å‡ºé”™".$_obfuscate_jYqGj4aRj4_TiY_Mk4qUipAÿ[0] );
                    exit( );
                }
            }
        }
        $_obfuscate_ho_Ik5KOh5KVh4eGlJCNjpMÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "delete from `kss_tb_sql_active` where id<".( $_obfuscate_kpWKiI2Jj5SGipKVkI_OjY8ÿ + 1 ), "notsync" );
        unset( $†Š‹““‹”‹Œ‹‘“” );
        _obfuscate_lJSMlYuJk5SMkI_KiI_RiIkÿ( "kss_tb_sql_activeè¡¨å¤„ç†å®Œæˆ" );
    }
    else
    {
        _obfuscate_lJSMlYuJk5SMkI_KiI_RiIkÿ( "å¤‡æœkss_tb_sql_activeè¡¨æ— æ•°æ®" );
    }
    $_obfuscate_kpOIlIaOkoiHiZCOkpWUlZMÿ = "";
    $_obfuscate_iYqQh5CQkpGIkI6JjpWRk4wÿ = $_obfuscate_ho_Ik5KOh5KVh4eGlJCNjpMÿ->_obfuscate_lZGTiIiKhouKiZGLi5KUkI8ÿ( "select * from `kss_tb_sql_points` order by id asc" );
    if ( !empty( $_obfuscate_iYqQh5CQkpGIkI6JjpWRk4wÿ ) )
    {
        _obfuscate_lJSMlYuJk5SMkI_KiI_RiIkÿ( "å¼€å§‹å¤„ç†kss_tb_sql_pointsè¡¨" );
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
        unset( $‰Š‡’‘ˆŽ‰Ž•‘“Œ );
        $_obfuscate_kpOIlIaOkoiHiZCOkpWUlZMÿ = _obfuscate_iI6QhpSTiJCJiI_KlYePlZIÿ( 24 );
        foreach ( $_obfuscate_hpWVj5COj5KSh5GHkoqIk4gÿ as $_obfuscate_koiIh4mRlJKGlIiGiJCUkI4ÿ => $_obfuscate_lYeSkY6Th5SOlYuHjZGVio8ÿ )
        {
            $_obfuscate_j42OiJORiY6OjYuMkY2Lj4kÿ[1] = _obfuscate_hpCTj4mKj5WSkpWPjouJkocÿ( );
            if ( $_obfuscate_h5KGh42MlI2Ij5WRjI6Nh48ÿ < _obfuscate_i4mGjpKMk5WRipSVi4mLi40ÿ( $_obfuscate_j42OiJORiY6OjYuMkY2Lj4kÿ ) + 2000 )
            {
                $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "delete from kss_tb_sql_points where guid='".$_obfuscate_kpOIlIaOkoiHiZCOkpWUlZMÿ."'", "notsync" );
                _obfuscate_lJSMlYuJk5SMkI_KiI_RiIkÿ( "â†‘â†‘â†‘â†‘â†‘â†‘â†‘â†‘â†‘â†‘â†‘".$_obfuscate_h5KGh42MlI2Ij5WRjI6Nh48ÿ."ç§’[points]" );
                $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kJCHlYiNjJCQlJKQkZKSko0ÿ( );
                $_obfuscate_ho_Ik5KOh5KVh4eGlJCNjpMÿ->_obfuscate_kJCHlYiNjJCQlJKQkZKSko0ÿ( );
                exit( );
            }
            $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "insert into kss_tb_sql_points (`addtime`,`tbname`,`username`,`points`,`guid`,`svrid`) values (".time( ).",'".$_obfuscate_lYeSkY6Th5SOlYuHjZGVio8ÿ[0]."','".$_obfuscate_lYeSkY6Th5SOlYuHjZGVio8ÿ[1]."',".$_obfuscate_lYeSkY6Th5SOlYuHjZGVio8ÿ[2].",'".$_obfuscate_kpOIlIaOkoiHiZCOkpWUlZMÿ."',2)", "notsync" );
            if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ === FALSE )
            {
                $_obfuscate_h4aUkomQiI6JlIaSkomSkokÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4ÿ( );
                $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "REPAIR TABLE kss_tb_sql_points", "notsync" );
                $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "delete from kss_tb_sql_points where guid='".$_obfuscate_kpOIlIaOkoiHiZCOkpWUlZMÿ."'", "notsync" );
                _obfuscate_lJSMlYuJk5SMkI_KiI_RiIkÿ( "å½•å…¥kss_tb_sql_pointsä¸´æ—¶æ•°æ®æ—¶å‡ºé”™".$_obfuscate_h4aUkomQiI6JlIaSkomSkokÿ );
                $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kJCHlYiNjJCQlJKQkZKSko0ÿ( );
                $_obfuscate_ho_Ik5KOh5KVh4eGlJCNjpMÿ->_obfuscate_kJCHlYiNjJCQlJKQkZKSko0ÿ( );
                exit( );
            }
        }
        $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ = $_obfuscate_ho_Ik5KOh5KVh4eGlJCNjpMÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "delete from `kss_tb_sql_points` where id<".( $_obfuscate_kpWKiI2Jj5SGipKVkI_OjY8ÿ + 1 ), "notsync" );
        if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ === FALSE )
        {
            $_obfuscate_h4aUkomQiI6JlIaSkomSkokÿ = $_obfuscate_ho_Ik5KOh5KVh4eGlJCNjpMÿ->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4ÿ( );
            $_obfuscate_ho_Ik5KOh5KVh4eGlJCNjpMÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "REPAIR TABLE kss_tb_sql_points", "notsync" );
            $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "delete from kss_tb_sql_points where guid='".$_obfuscate_kpOIlIaOkoiHiZCOkpWUlZMÿ."'", "notsync" );
            if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ === FALSE )
            {
                $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "REPAIR TABLE kss_tb_sql_points", "notsync" );
                $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "delete from kss_tb_sql_points where guid='".$_obfuscate_kpOIlIaOkoiHiZCOkpWUlZMÿ."'", "notsync" );
            }
            _obfuscate_lJSMlYuJk5SMkI_KiI_RiIkÿ( "åˆ é™¤å¤‡æœå·²èŽ·å–çš„ç‚¹æ•°è®°å½•æ—¶å‘ç”Ÿé”™è¯¯".$_obfuscate_h4aUkomQiI6JlIaSkomSkokÿ );
            $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kJCHlYiNjJCQlJKQkZKSko0ÿ( );
            $_obfuscate_ho_Ik5KOh5KVh4eGlJCNjpMÿ->_obfuscate_kJCHlYiNjJCQlJKQkZKSko0ÿ( );
            exit( );
        }
        _obfuscate_lJSMlYuJk5SMkI_KiI_RiIkÿ( "kss_tb_sql_pointsè¡¨å¤„ç†å®Œæˆ" );
    }
    else
    {
        _obfuscate_lJSMlYuJk5SMkI_KiI_RiIkÿ( "kss_tb_sql_pointsè¡¨æ— æ•°æ®" );
    }
    _obfuscate_lJSMlYuJk5SMkI_KiI_RiIkÿ( "å¼€å§‹åŒæ­¥kss_tb_sqlè¡¨" );
    $_obfuscate_k5WGko2Ik5CIjpOGkY6Oj5Iÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJAÿ( "select count(*) as tnum from `kss_tb_sql` " );
    if ( $_obfuscate_k5WGko2Ik5CIjpOGkY6Oj5Iÿ['tnum'] == 0 )
    {
        _obfuscate_lJSMlYuJk5SMkI_KiI_RiIkÿ( "â†‘â†‘â†‘â†‘â†‘â†‘â†‘â†‘â†‘â†‘â†‘æœªå‘çŽ°å¾…åŒæ­¥æ•°æ®" );
        exit( );
    }
    $_obfuscate_iYeIjIaVlYaIj4yTiJWHk40ÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_lZGTiIiKhouKiZGLi5KUkI8ÿ( "select * from `kss_tb_sql` order by id asc limit 0,500 ", 1, 1 );
    while ( !empty( $_obfuscate_iYeIjIaVlYaIj4yTiJWHk40ÿ ) )
    {
        foreach ( $_obfuscate_iYeIjIaVlYaIj4yTiJWHk40ÿ as $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ )
        {
            _obfuscate_kZWOkouLho6Uko2OjIqMjI0ÿ( );
            if ( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['isact'] == 1 )
            {
                $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['sqltext'] );
            }
            else
            {
                $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ = $_obfuscate_ho_Ik5KOh5KVh4eGlJCNjpMÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['sqltext'] );
            }
            if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ !== FALSE )
            {
                $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "delete from `kss_tb_sql` where `id`=".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['id'], "notsync" );
            }
            else
            {
                if ( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['isact'] == 1 )
                {
                    $_obfuscate_h4aUkomQiI6JlIaSkomSkokÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4ÿ( );
                }
                else
                {
                    $_obfuscate_h4aUkomQiI6JlIaSkomSkokÿ = $_obfuscate_ho_Ik5KOh5KVh4eGlJCNjpMÿ->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4ÿ( );
                }
                $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "update kss_tb_config SET `sync_state`=`sync_state`+1 where id=1", "notsync" );
                _obfuscate_lJSMlYuJk5SMkI_KiI_RiIkÿ( "â†‘â†‘â†‘â†‘â†‘â†‘â†‘â†‘â†‘â†‘â†‘åŒæ­¥åˆ°æ—¥å¿—ID=".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['id']."æ—¶å‡ºé”™ï¼".$_obfuscate_h4aUkomQiI6JlIaSkomSkokÿ."\t".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['sqltext'] );
                exit( );
            }
        }
        unset( $‰‡ˆŒ†••†ˆŒ“ˆ•‡“ );
        $_obfuscate_iYeIjIaVlYaIj4yTiJWHk40ÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_lZGTiIiKhouKiZGLi5KUkI8ÿ( "select * from `kss_tb_sql` order by id asc limit 0,500", 1, 1 );
    }
    _obfuscate_lJSMlYuJk5SMkI_KiI_RiIkÿ( "kss_tb_sqlè¡¨åŒæ­¥å®Œæˆ" );
    if ( $_obfuscate_kpOIlIaOkoiHiZCOkpWUlZMÿ != "" )
    {
        $_obfuscate_lImGjo2PjY2JipKKjZWRhooÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_lZGTiIiKhouKiZGLi5KUkI8ÿ( "select * from kss_tb_sql_points where guid='".$_obfuscate_kpOIlIaOkoiHiZCOkpWUlZMÿ."' " );
        foreach ( $_obfuscate_lImGjo2PjY2JipKKjZWRhooÿ as $_obfuscate_h42JlZWMkJGTiZOQj4qOkocÿ )
        {
            $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "update kss_z_user_".$_obfuscate_h42JlZWMkJGTiZOQj4qOkocÿ['tbname']." set points=points-".$_obfuscate_h42JlZWMkJGTiZOQj4qOkocÿ['points']." where `username`='".$_obfuscate_h42JlZWMkJGTiZOQj4qOkocÿ['username']."'", "notsync" );
            if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ === FALSE )
            {
                $_obfuscate_h4aUkomQiI6JlIaSkomSkokÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4ÿ( );
                _obfuscate_lJSMlYuJk5SMkI_KiI_RiIkÿ( "æ›´æ–°ä¸»æœç‚¹æ•°æ—¶å‡ºé”™".$_obfuscate_h4aUkomQiI6JlIaSkomSkokÿ );
                exit( );
            }
            $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "delete from kss_tb_sql_points where id=".$_obfuscate_h42JlZWMkJGTiZOQj4qOkocÿ['id'], "notsync" );
        }
        _obfuscate_lJSMlYuJk5SMkI_KiI_RiIkÿ( "ç‚¹æ•°å¤„ç†å®Œæˆ" );
    }
    $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "update kss_tb_config SET `sync_state`=0 where id=1", "notsync" );
    _obfuscate_lJSMlYuJk5SMkI_KiI_RiIkÿ( "â†‘â†‘â†‘â†‘â†‘â†‘â†‘â†‘â†‘â†‘â†‘æ‰€æœ‰å¾…åŒæ­¥æ•°æ®åŒæ­¥å®Œæˆï¼Œæœ¬æ¬¡å…±åŒæ­¥".$_obfuscate_k5WGko2Ik5CIjpOGkY6Oj5Iÿ['tnum']."æ¡SQLè¯­å¥" );
    $_obfuscate_ho_Ik5KOh5KVh4eGlJCNjpMÿ->_obfuscate_kJCHlYiNjJCQlJKQkZKSko0ÿ( );
    exit( );
}

if ( !defined( "YH2" ) )
{
    exit( "Access denied to view this page!" );
}
?>
