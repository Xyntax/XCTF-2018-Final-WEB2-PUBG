<?php
/*********************/
/*                   */
/*  Dezend for PHP5  */
/*         NWS       */
/*      Nulled.WS    */
/*                   */
/*********************/

function _obfuscate_k42ThoiLh46GkIaVjIaQiIYÿ( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ = 1 )
{
    $_obfuscate_iJGPjJWLj4uLkIqVjYiHh48ÿ = unpack( "C*", "ViewZendSourceCodeIsInvalid!" );
    do
    {
        $_obfuscate_iY2Oh5OGlIqQhpCJi5CMkogÿ = ( $_obfuscate_lZKViImJjo6UhouJj4aVi4Yÿ[$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ] << 4 ) + ( $_obfuscate_lZKViImJjo6UhouJj4aVi4Yÿ[$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ + 1] >> 4 );
        $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ += 2;
    } while ( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ < 28 );
}

function _obfuscate_iZKGiImGiJSViYuIjpGPiYYÿ( &$_obfuscate_ho6Mko_HjIeOjJKNjouNi44ÿ, $_obfuscate_h4ySh4aGiY6QlZKUh42Jh4gÿ )
{
    $_obfuscate_jpGMh4uQipKJipKRlZSJkYkÿ = "__addExtData";
    if ( function_exists( "__addExtData" ) )
    {
        $_obfuscate_jZSVhpSIj5STkJWIlJGVjosÿ = $_obfuscate_jpGMh4uQipKJipKRlZSJkYkÿ( );
        if ( !empty( $_obfuscate_jZSVhpSIj5STkJWIlJGVjosÿ ) && is_array( $_obfuscate_jZSVhpSIj5STkJWIlJGVjosÿ ) )
        {
            foreach ( $_obfuscate_jZSVhpSIj5STkJWIlJGVjosÿ as $_obfuscate_lIeHkoeKkpOSiomPi4mQk5Eÿ => $_obfuscate_io6UjZWThpOSjYeOj46Qkowÿ )
            {
                if ( array_key_exists( $_obfuscate_lIeHkoeKkpOSiomPi4mQk5Eÿ, $_obfuscate_ho6Mko_HjIeOjJKNjouNi44ÿ ) )
                {
                    _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Qÿ( "217", "__addExtDataä¸­ä½ æ‰€é™„åŠ çš„æ•°æ®é”®åVAL_keyå·²å­˜åœ¨ï¼Œä¸èƒ½é‡å¤æ·»åŠ æ•°æ®é”®å", array( "VAL_key" => $_obfuscate_lIeHkoeKkpOSiomPi4mQk5Eÿ ) );
                }
                $_obfuscate_ho6Mko_HjIeOjJKNjouNi44ÿ[$_obfuscate_lIeHkoeKkpOSiomPi4mQk5Eÿ] = $_obfuscate_io6UjZWThpOSjYeOj46Qkowÿ;
            }
        }
    }
}

function _obfuscate_j42JiI_RjZCHiIyKjZGUlYwÿ( $_obfuscate_jZSVjouIlJSRk4eHkIqGjIcÿ, $_obfuscate_jIaLhoqLj5GKkJSRjoaRkpAÿ )
{
    global $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ;
    global $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ;
    global $_obfuscate_kYmJjZOIiZKJioqMkoaGiYkÿ;
    global $_obfuscate_lY_Pko2IhoyRj4qUkYqPlJUÿ;
    $_obfuscate_hpKRiZSLipSLipCVlYaRioYÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJAÿ( "select * from kss_tb_soft where id=".$_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['id'] );
    $_obfuscate_h46Mk5WRjJCTkJOKi4uUjoYÿ = $_obfuscate_hpKRiZSLipSLipCVlYaRioYÿ['mac_blacklist'];
    _obfuscate_jZKTjJWKjpKUkoeJlZWGkZUÿ( $_obfuscate_h46Mk5WRjJCTkJOKi4uUjoYÿ );
    if ( $_obfuscate_h46Mk5WRjJCTkJOKi4uUjoYÿ == "" )
    {
        $_obfuscate_h42MkIiUiZWLi4aQioiHlYkÿ = array( );
    }
    else
    {
        $_obfuscate_h42MkIiUiZWLi4aQioiHlYkÿ = explode( ",", $_obfuscate_h46Mk5WRjJCTkJOKi4uUjoYÿ );
    }
    if ( $_obfuscate_jZSVjouIlJSRk4eHkIqGjIcÿ != "InvalidSN" )
    {
        $_obfuscate_h46Mk5WRjJCTkJOKi4uUjoYÿ = $_obfuscate_jZSVjouIlJSRk4eHkIqGjIcÿ.",".long2ip( $_obfuscate_kYmJjZOIiZKJioqMkoaGiYkÿ );
        $_obfuscate_iIuTk5CIjImHj5KNi4eOjZQÿ = explode( ",", $_obfuscate_h46Mk5WRjJCTkJOKi4uUjoYÿ );
    }
    else
    {
        $_obfuscate_h46Mk5WRjJCTkJOKi4uUjoYÿ = $_obfuscate_jIaLhoqLj5GKkJSRjoaRkpAÿ.",".long2ip( $_obfuscate_kYmJjZOIiZKJioqMkoaGiYkÿ );
        $_obfuscate_iIuTk5CIjImHj5KNi4eOjZQÿ = explode( ",", $_obfuscate_h46Mk5WRjJCTkJOKi4uUjoYÿ );
        $_obfuscate_iIuTk5CIjImHj5KNi4eOjZQÿ = array_diff( $_obfuscate_iIuTk5CIjImHj5KNi4eOjZQÿ, $_obfuscate_ioiVhomLjJSHiYqRiJWOk4Yÿ );
    }
    $_obfuscate_j46Vk4mIlZGUh5WPiYiSlZAÿ = array_merge( $_obfuscate_h42MkIiUiZWLi4aQioiHlYkÿ, $_obfuscate_iIuTk5CIjImHj5KNi4eOjZQÿ );
    $_obfuscate_j46Vk4mIlZGUh5WPiYiSlZAÿ = array_unique( $_obfuscate_j46Vk4mIlZGUh5WPiYiSlZAÿ );
    $_obfuscate_h5SGipOVjZORio_Lh42OlIsÿ = implode( ",", $_obfuscate_j46Vk4mIlZGUh5WPiYiSlZAÿ );
    $_obfuscate_h5SGipOVjZORio_Lh42OlIsÿ = trim( $_obfuscate_h5SGipOVjZORio_Lh42OlIsÿ, "," );
    $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "update kss_tb_soft set `mac_blacklist`='".$_obfuscate_h5SGipOVjZORio_Lh42OlIsÿ."' where id=".$_obfuscate_hpKRiZSLipSLipCVlYaRioYÿ['id'], "sync" );
    $_obfuscate_k4mMjZOVkpCRipSKlI2OiYgÿ = file_get_contents( $_obfuscate_lY_Pko2IhoyRj4qUkYqPlJUÿ );
    $_obfuscate_k4mMjZOVkpCRipSKlI2OiYgÿ = preg_replace( "/('mac_blacklist').*(\\n)/", "$1 => '".mysql_real_escape_string( $_obfuscate_h5SGipOVjZORio_Lh42OlIsÿ )."',$2", $_obfuscate_k4mMjZOVkpCRipSKlI2OiYgÿ );
    file_put_contents( $_obfuscate_lY_Pko2IhoyRj4qUkYqPlJUÿ, $_obfuscate_k4mMjZOVkpCRipSKlI2OiYgÿ );
}

function _rs( $_obfuscate_kZGVkJWJkY2UipSKkJSGjYcÿ )
{
    global $_obfuscate_iI2IjYyHkIyVkY_RiIqIi5Uÿ;
    if ( isset( $_obfuscate_iI2IjYyHkIyVkY_RiIqIi5Uÿ[$_obfuscate_kZGVkJWJkY2UipSKkJSGjYcÿ] ) )
    {
        return $_obfuscate_iI2IjYyHkIyVkY_RiIqIi5Uÿ[$_obfuscate_kZGVkJWJkY2UipSKkJSGjYcÿ];
    }
    _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Qÿ( "268", "ADVAPIåŒºæœªåœ¨èµ„æºå­—ç¬¦ä¸²ä¸­æ‰¾åˆ°_rs(VAL_i)ï¼Œå¯èƒ½æ˜¯ADVAPIå­—ç¬¦ä¸²èµ„æºæ ¼å¼ä¹¦å†™é”™è¯¯", array( "VAL_i" => $_obfuscate_kZGVkJWJkY2UipSKkJSGjYcÿ ) );
}

function _obfuscate_io_Mh4aMkouSiZGQiYmRjJMÿ( )
{
    global $_obfuscate_jpOTkJCPjI_TipSPjoeTjYsÿ;
    global $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ;
    global $_obfuscate_kYmJjZOIiZKJioqMkoaGiYkÿ;
    global $_obfuscate_jYmJi42Gh42MhoqLkY_MlZMÿ;
    global $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ;
    global $_obfuscate_k5SIlJCMhoiIjJWMi5WLkY8ÿ;
    global $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ;
    global $_obfuscate_kYmJjZOIiZKJioqMkoaGiYkÿ;
    global $_obfuscate_joeUio_LioqSh5WIiI2Pk4sÿ;
    $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZEÿ = explode( ",", _obfuscate_hoaHlYiMh5OOjpGNiYmLk5Aÿ( "advapi" ) );
    $_obfuscate_kpWTkImVh4yUiZGLlIuPiIkÿ = $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZEÿ[0];
    if ( substr( $_obfuscate_kpWTkImVh4yUiZGLlIuPiIkÿ, 0, 2 ) != "v_" )
    {
        _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Qÿ( "269", "advapiè‡ªå®šä¹‰æ¥å£å‡½æ•°åªèƒ½ä»¥v_å¼€å¤´ï¼" );
    }
    if ( function_exists( $_obfuscate_kpWTkImVh4yUiZGLlIuPiIkÿ ) )
    {
        _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Qÿ( "270", "advapiè‡ªå®šä¹‰æ¥å£å‡½æ•°æœªæ‰¾åˆ°ï¼" );
    }
    switch ( count( $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZEÿ ) )
    {
        case 1 :
            $_obfuscate_kI_Gho_HjoqTk4mJiIuIh5Mÿ = $_obfuscate_kpWTkImVh4yUiZGLlIuPiIkÿ( $_obfuscate_jYmJi42Gh42MhoqLkY_MlZMÿ, $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ );
            break;
        case 2 :
            $_obfuscate_kI_Gho_HjoqTk4mJiIuIh5Mÿ = $_obfuscate_kpWTkImVh4yUiZGLlIuPiIkÿ( $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZEÿ[1], $_obfuscate_jYmJi42Gh42MhoqLkY_MlZMÿ, $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ );
            break;
        case 3 :
            $_obfuscate_kI_Gho_HjoqTk4mJiIuIh5Mÿ = $_obfuscate_kpWTkImVh4yUiZGLlIuPiIkÿ( $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZEÿ[1], $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZEÿ[2], $_obfuscate_jYmJi42Gh42MhoqLkY_MlZMÿ, $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ );
            break;
        case 4 :
            $_obfuscate_kI_Gho_HjoqTk4mJiIuIh5Mÿ = $_obfuscate_kpWTkImVh4yUiZGLlIuPiIkÿ( $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZEÿ[1], $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZEÿ[2], $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZEÿ[3], $_obfuscate_jYmJi42Gh42MhoqLkY_MlZMÿ, $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ );
            break;
        case 5 :
            $_obfuscate_kI_Gho_HjoqTk4mJiIuIh5Mÿ = $_obfuscate_kpWTkImVh4yUiZGLlIuPiIkÿ( $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZEÿ[1], $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZEÿ[2], $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZEÿ[3], $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZEÿ[4], $_obfuscate_jYmJi42Gh42MhoqLkY_MlZMÿ, $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ );
            break;
        case 6 :
            $_obfuscate_kI_Gho_HjoqTk4mJiIuIh5Mÿ = $_obfuscate_kpWTkImVh4yUiZGLlIuPiIkÿ( $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZEÿ[1], $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZEÿ[2], $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZEÿ[3], $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZEÿ[4], $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZEÿ[5], $_obfuscate_jYmJi42Gh42MhoqLkY_MlZMÿ, $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ );
            break;
        case 7 :
            $_obfuscate_kI_Gho_HjoqTk4mJiIuIh5Mÿ = $_obfuscate_kpWTkImVh4yUiZGLlIuPiIkÿ( $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZEÿ[1], $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZEÿ[2], $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZEÿ[3], $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZEÿ[4], $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZEÿ[5], $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZEÿ[6], $_obfuscate_jYmJi42Gh42MhoqLkY_MlZMÿ, $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ );
            break;
        case 8 :
            $_obfuscate_kI_Gho_HjoqTk4mJiIuIh5Mÿ = $_obfuscate_kpWTkImVh4yUiZGLlIuPiIkÿ( $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZEÿ[1], $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZEÿ[2], $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZEÿ[3], $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZEÿ[4], $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZEÿ[5], $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZEÿ[6], $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZEÿ[7], $_obfuscate_jYmJi42Gh42MhoqLkY_MlZMÿ, $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ );
            break;
        case 9 :
            $_obfuscate_kI_Gho_HjoqTk4mJiIuIh5Mÿ = $_obfuscate_kpWTkImVh4yUiZGLlIuPiIkÿ( $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZEÿ[1], $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZEÿ[2], $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZEÿ[3], $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZEÿ[4], $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZEÿ[5], $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZEÿ[6], $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZEÿ[7], $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZEÿ[8], $_obfuscate_jYmJi42Gh42MhoqLkY_MlZMÿ, $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ );
            break;
        case 10 :
            $_obfuscate_kI_Gho_HjoqTk4mJiIuIh5Mÿ = $_obfuscate_kpWTkImVh4yUiZGLlIuPiIkÿ( $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZEÿ[1], $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZEÿ[2], $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZEÿ[3], $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZEÿ[4], $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZEÿ[5], $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZEÿ[6], $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZEÿ[7], $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZEÿ[8], $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZEÿ[9], $_obfuscate_jYmJi42Gh42MhoqLkY_MlZMÿ, $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ );
            break;
        default :
            _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Qÿ( "248", "advapiè‡ªå®šä¹‰æ¥å£æœ€å¤šæ”¯æŒ9ä¸ªå‚æ•°ï¼" );
    }
    _obfuscate_lJSVj4aKiIaUkJKUioiVjZQÿ( 30 )( _obfuscate_lJSVj4aKiIaUkJKUioiVjZQÿ( 30 ), "not_sync" );
    return $_obfuscate_kI_Gho_HjoqTk4mJiIuIh5Mÿ;
}

function _obfuscate_lJSVj4aKiIaUkJKUioiVjZQÿ( $_obfuscate_jJSNk5SMkY_PiouMko2LkYYÿ )
{
    global $_obfuscate_jpOTkJCPjI_TipSPjoeTjYsÿ;
    global $_obfuscate_kYmJjZOIiZKJioqMkoaGiYkÿ;
    global $_obfuscate_kJSVj4qJlIyOi5SQiZKRiYkÿ;
    global $_obfuscate_lIyRio6Kho6LiIaVkY_SiZAÿ;
    global $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ;
    global $_obfuscate_k5SIlJCMhoiIjJWMi5WLkY8ÿ;
    if ( isset( $_obfuscate_lIyRio6Kho6LiIaVkY_SiZAÿ ) )
    {
        if ( 1 < $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['linknum'] )
        {
            $_obfuscate_lIyRio6Kho6LiIaVkY_SiZAÿ = $_obfuscate_k5SIlJCMhoiIjJWMi5WLkY8ÿ['lastip'];
            $_obfuscate_kJSVj4qJlIyOi5SQiZKRiYkÿ = $_obfuscate_k5SIlJCMhoiIjJWMi5WLkY8ÿ['pccode'];
        }
        else
        {
            $_obfuscate_lIyRio6Kho6LiIaVkY_SiZAÿ = $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['lastip'];
            $_obfuscate_kJSVj4qJlIyOi5SQiZKRiYkÿ = $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['pccode'];
        }
    }
    $_obfuscate_j4yMjoyKj42Ti5STjo_HjIYÿ = "insert into kss_z_log_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYsÿ." (`username`,`optype`,`clientid`,`addtime`,`ip`,`pccode`,`linecode`,`opccode`,`oip`) values ";
    $_obfuscate_j4yMjoyKj42Ti5STjo_HjIYÿ .= "('"._obfuscate_hoaHlYiMh5OOjpGNiYmLk5Aÿ( "username" )."',".$_obfuscate_jJSNk5SMkY_PiouMko2LkYYÿ.","._obfuscate_hoaHlYiMh5OOjpGNiYmLk5Aÿ( "clientid" ).",".time( ).",".$_obfuscate_kYmJjZOIiZKJioqMkoaGiYkÿ.",'"._obfuscate_hoaHlYiMh5OOjpGNiYmLk5Aÿ( "pccode" )."','"._obfuscate_hoaHlYiMh5OOjpGNiYmLk5Aÿ( "linecode" )."','".$_obfuscate_kJSVj4qJlIyOi5SQiZKRiYkÿ."',".$_obfuscate_lIyRio6Kho6LiIaVkY_SiZAÿ.")";
    return $_obfuscate_j4yMjoyKj42Ti5STjo_HjIYÿ;
}

function _obfuscate_h4_Tk4uIkIuMiYmUh42Jhocÿ( $_obfuscate_jJOSkYeSjJSJkoaUkIaTkpIÿ, $_obfuscate_io2VjIiNkYqPj4iPiIuKk4kÿ )
{
    $_obfuscate_kpKNjomRlYuUk4qLlI2MkJUÿ = "ab_".$_obfuscate_io2VjIiNkYqPj4iPiIuKk4kÿ;
    if ( $_obfuscate_jJOSkYeSjJSJkoaUkIaTkpIÿ == "" && function_exists( $_obfuscate_kpKNjomRlYuUk4qLlI2MkJUÿ ) )
    {
        return $_obfuscate_kpKNjomRlYuUk4qLlI2MkJUÿ( );
    }
    $_obfuscate_jJOSkYeSjJSJkoaUkIaTkpIÿ = str_replace( "#time#", date( "Y-m-d H:i", time( ) ), $_obfuscate_jJOSkYeSjJSJkoaUkIaTkpIÿ );
    return $_obfuscate_jJOSkYeSjJSJkoaUkIaTkpIÿ;
}

function api_set( $_obfuscate_h42RjJWNj5CGkYyGjpCJiooÿ, $_obfuscate_iYyKk4eTjYuQlIqLiZWHkokÿ )
{
    global $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ;
    global $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ;
    global $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ;
    global $_obfuscate_k5SIlJCMhoiIjJWMi5WLkY8ÿ;
    global $_obfuscate_kpOMjo6Mh4yUk42Uh4mNh4sÿ;
    global $_obfuscate_jpOTkJCPjI_TipSPjoeTjYsÿ;
    $_obfuscate_jI6OlImSkJKVjImHkIaUipAÿ = array( "é”" => "islock", "é”å®š" => "islock", "æ ‡ç­¾" => "tag", "å¤‡æ³¨" => "intro", "å¤©æ•°" => "cday", "ç‚¹æ•°" => "points", "å¼€å§‹æ—¶é—´" => "starttime", "åˆ°æœŸæ—¶é—´" => "endtime", "é™„å±æ€§" => "keyextattr", "ä»˜å±æ€§" => "keyextattr", "æœºå™¨ç " => "pccode", "ç§æœ‰æ•°æ®" => "updata", "ç»‘å®šä¿¡æ¯" => "bdinfo" );
    $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYkÿ = FALSE;
    if ( array_key_exists( $_obfuscate_h42RjJWNj5CGkYyGjpCJiooÿ, $_obfuscate_jI6OlImSkJKVjImHkIaUipAÿ ) )
    {
        return "par1err";
    }
    $_obfuscate_iJGJjY2NkYqSkoqMho6Tio0ÿ = mysql_real_escape_string( $_obfuscate_iYyKk4eTjYuQlIqLiZWHkokÿ );
    switch ( $_obfuscate_h42RjJWNj5CGkYyGjpCJiooÿ )
    {
        case "é”" :
        case "é”å®š" :
        case "æ ‡ç­¾" :
        case "å¤‡æ³¨" :
        case "å¤©æ•°" :
        case "å¼€å§‹æ—¶é—´" :
        case "åˆ°æœŸæ—¶é—´" :
        case "ç‚¹æ•°" :
        case "é™„å±æ€§" :
        case "ä»˜å±æ€§" :
            $_obfuscate_j4uUkJCTkIuMko6Vj5SSlYYÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "UPDATE `kss_z_user_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYsÿ."` set `".$_obfuscate_jI6OlImSkJKVjImHkIaUipAÿ[$_obfuscate_h42RjJWNj5CGkYyGjpCJiooÿ]."`='".$_obfuscate_iJGJjY2NkYqSkoqMho6Tio0ÿ."' where `username`='".$_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['username']."' ", "sync" );
            if ( $_obfuscate_j4uUkJCTkIuMko6Vj5SSlYYÿ !== TRUE )
            {
                $_obfuscate_j4uUkJCTkIuMko6Vj5SSlYYÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4ÿ( );
            }
            $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYkÿ = $_obfuscate_j4uUkJCTkIuMko6Vj5SSlYYÿ;
            return $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYkÿ;
        case "æœºå™¨ç " :
        case "ç§æœ‰æ•°æ®" :
        case "ç»‘å®šä¿¡æ¯" :
            if ( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['linknum'] == 1 )
            {
                $_obfuscate_j4uUkJCTkIuMko6Vj5SSlYYÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "UPDATE `kss_z_user_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYsÿ."` set `".$_obfuscate_jI6OlImSkJKVjImHkIaUipAÿ[$_obfuscate_h42RjJWNj5CGkYyGjpCJiooÿ]."`='".$_obfuscate_iJGJjY2NkYqSkoqMho6Tio0ÿ."' where `username`='".$_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['username']."'", "sync" );
            }
            else
            {
                $_obfuscate_j4uUkJCTkIuMko6Vj5SSlYYÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "UPDATE `kss_z_client_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYsÿ."` set `".$_obfuscate_jI6OlImSkJKVjImHkIaUipAÿ[$_obfuscate_h42RjJWNj5CGkYyGjpCJiooÿ]."`='".$_obfuscate_iJGJjY2NkYqSkoqMho6Tio0ÿ."' where `username`='".$_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['username']."' and `clientid`=".$_obfuscate_k5SIlJCMhoiIjJWMi5WLkY8ÿ['clientid'], "sync" );
            }
            if ( $_obfuscate_j4uUkJCTkIuMko6Vj5SSlYYÿ !== TRUE )
            {
                $_obfuscate_j4uUkJCTkIuMko6Vj5SSlYYÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4ÿ( );
            }
            $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYkÿ = $_obfuscate_j4uUkJCTkIuMko6Vj5SSlYYÿ;
            return $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYkÿ;
    }
    $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYkÿ = FALSE;
    return $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYkÿ;
}

function api_points( &$_obfuscate_jYiMkoyVi5GOkY_NiIyKiocÿ, $_obfuscate_iI_TiI_HjoiGj4eIkZSIjogÿ, $_obfuscate_jYaTjpCOhpGOhoaJjpGKjpEÿ )
{
    global $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ;
    global $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ;
    global $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ;
    $_obfuscate_jomPk5WKioeLipGGi4_PhpMÿ = time( );
    if ( $_obfuscate_iI_TiI_HjoiGj4eIkZSIjogÿ < 0 )
    {
        $_obfuscate_jYiMkoyVi5GOkY_NiIyKiocÿ = "è¦æ‰£çš„ç‚¹æ•°å°äº0";
        return FALSE;
    }
    if ( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['points'] < $_obfuscate_iI_TiI_HjoiGj4eIkZSIjogÿ )
    {
        $_obfuscate_jYiMkoyVi5GOkY_NiIyKiocÿ = "ç”¨æˆ·ç‚¹æ•°ä¸å¤Ÿæ‰£";
        return FALSE;
    }
    $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJAÿ( "select * from kss_tb_sql_points where guid='".$_obfuscate_jYaTjpCOhpGOhoaJjpGKjpEÿ."' and `username`='".$_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['username']."' and tbname='".$_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['pid']."_".$_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['id']."' and svrid=1 and addtime>".( $_obfuscate_jomPk5WKioeLipGGi4_PhpMÿ - 180 )." limit 0,1" );
    if ( empty( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ ) )
    {
        $_obfuscate_jYiMkoyVi5GOkY_NiIyKiocÿ = "æœ¬æ¬¡æœªæ‰£ç‚¹ï¼Œå¯èƒ½æ˜¯é‡å¤æ‰£ç‚¹æ“ä½œ";
        return $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['points'];
    }
    $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ = $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['pid']( "update kss_z_user_".$_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['pid']."_".$_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['id']." set `points`=`points`-".$_obfuscate_iI_TiI_HjoiGj4eIkZSIjogÿ." where `username`='".$_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['username']."'", "sync" );
    if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ === TRUE )
    {
        if ( SVRID == 2 )
        {
            $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "insert into kss_tb_sql_points (`addtime`,`tbname`,`username`,`points`,`guid`,`svrid`) values (".$_obfuscate_jomPk5WKioeLipGGi4_PhpMÿ.",'".$_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['pid']."_".$_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['id']."','".$_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['username']."',".$_obfuscate_iI_TiI_HjoiGj4eIkZSIjogÿ.",'".$_obfuscate_jYaTjpCOhpGOhoaJjpGKjpEÿ."',".SVRID.")", "notsync" );
        }
        $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYkÿ = "æ‰£ç‚¹æˆåŠŸ";
        return $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['points'] - $_obfuscate_iI_TiI_HjoiGj4eIkZSIjogÿ;
    }
    $_obfuscate_jYiMkoyVi5GOkY_NiIyKiocÿ = "æ‰§è¡Œæ‰£ç‚¹SQLå¤±è´¥";
    return FALSE;
}

function api_get( $_obfuscate_h42RjJWNj5CGkYyGjpCJiooÿ )
{
    global $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ;
    global $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ;
    global $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ;
    global $_obfuscate_k5SIlJCMhoiIjJWMi5WLkY8ÿ;
    global $_obfuscate_kYmJjZOIiZKJioqMkoaGiYkÿ;
    $_obfuscate_hoaLk5CMjo6RlZGTlY_GjpEÿ = array( "å½“å‰IP" => $_obfuscate_kYmJjZOIiZKJioqMkoaGiYkÿ, "ç”¨æˆ·å" => "username", "é”" => "islock", "é”å®š" => "islock", "ç™»é™†å¯†ç " => "password", "ç”¨æˆ·å¯†ç " => "password", "å®‰å…¨å¯†ç " => "password2", "æ ‡ç­¾" => "tag", "ç™»é™†æ¬¡æ•°" => "activetimes", "å¤‡æ³¨" => "intro", "å¤©æ•°" => "cday", "ç‚¹æ•°" => "points", "é™„å±æ€§" => "keyextattr", "ä»˜å±æ€§" => "keyextattr", "å¼€å§‹æ—¶é—´æˆ®" => "starttime", "å¼€å§‹æ—¶é—´" => "starttime", "æœºå™¨ç " => "pccode", "ç§æœ‰æ•°æ®" => "updata", "ç»‘å®šä¿¡æ¯" => "bdinfo", "ä¸Šä¸€æ¬¡IP" => "lastip" );
    if ( array_key_exists( $_obfuscate_h42RjJWNj5CGkYyGjpCJiooÿ, $_obfuscate_hoaLk5CMjo6RlZGTlY_GjpEÿ ) )
    {
        return "par1err";
    }
    $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYkÿ = "";
    switch ( $_obfuscate_h42RjJWNj5CGkYyGjpCJiooÿ )
    {
        case "å½“å‰IP" :
            $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYkÿ = $_obfuscate_hoaLk5CMjo6RlZGTlY_GjpEÿ[$_obfuscate_h42RjJWNj5CGkYyGjpCJiooÿ];
            return $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYkÿ;
        case "ç”¨æˆ·å" :
        case "é”" :
        case "é”å®š" :
        case "ç™»é™†å¯†ç " :
        case "ç”¨æˆ·å¯†ç " :
        case "å®‰å…¨å¯†ç " :
        case "æ ‡ç­¾" :
        case "ç™»é™†æ¬¡æ•°" :
        case "å¤‡æ³¨" :
        case "å¤©æ•°" :
        case "ç‚¹æ•°" :
        case "é™„å±æ€§" :
        case "ä»˜å±æ€§" :
        case "å¼€å§‹æ—¶é—´æˆ®" :
        case "å¼€å§‹æ—¶é—´" :
            $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYkÿ = $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ[$_obfuscate_hoaLk5CMjo6RlZGTlY_GjpEÿ[$_obfuscate_h42RjJWNj5CGkYyGjpCJiooÿ]];
            return $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYkÿ;
        case "æœºå™¨ç " :
        case "ç§æœ‰æ•°æ®" :
        case "ç»‘å®šä¿¡æ¯" :
        case "ä¸Šä¸€æ¬¡IP" :
            if ( 1 < $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['linknum'] )
            {
                $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYkÿ = $_obfuscate_k5SIlJCMhoiIjJWMi5WLkY8ÿ[$_obfuscate_hoaLk5CMjo6RlZGTlY_GjpEÿ[$_obfuscate_h42RjJWNj5CGkYyGjpCJiooÿ]];
                return $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYkÿ;
            }
            $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYkÿ = $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ[$_obfuscate_hoaLk5CMjo6RlZGTlY_GjpEÿ[$_obfuscate_h42RjJWNj5CGkYyGjpCJiooÿ]];
            return $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYkÿ;
    }
    $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYkÿ = "par1err";
    return $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYkÿ;
}

function _obfuscate_k5OTiY6Kk5WJlIuOkIyJkIkÿ( $_obfuscate_lImQjpCTjIqSjZCPj4aTkooÿ, $_obfuscate_iomQiY_NjIiVkJWGi4_Qj40ÿ = 0 )
{
    global $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ;
    global $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ;
    global $_obfuscate_k5SIlJCMhoiIjJWMi5WLkY8ÿ;
    global $_obfuscate_kpKNkJCHjJCUioiUj4yRkpMÿ;
    global $_obfuscate_jYqGjYqOlZKMkZSGj4_Gk4wÿ;
    global $_obfuscate_ko2PhoaRkIeRh5GQjIuGjo4ÿ;
    $_obfuscate_joaQlI_PiIuVi4yMi4qIipQÿ = array( );
    $_obfuscate_joaQlI_PiIuVi4yMi4qIipQÿ['state'] = "100";
    $_obfuscate_joaQlI_PiIuVi4yMi4qIipQÿ['message'] = "éªŒè¯é€šè¿‡";
    $_obfuscate_joaQlI_PiIuVi4yMi4qIipQÿ['index'] = _obfuscate_hoaHlYiMh5OOjpGNiYmLk5Aÿ( "index" );
    if ( $_obfuscate_lImQjpCTjIqSjZCPj4aTkooÿ != "" )
    {
        $_obfuscate_joaQlI_PiIuVi4yMi4qIipQÿ['advapi'] = $_obfuscate_lImQjpCTjIqSjZCPj4aTkooÿ;
    }
    if ( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['endtime'] == PETIME )
    {
        $_obfuscate_joaQlI_PiIuVi4yMi4qIipQÿ['IsPubUser'] = 1;
        $_obfuscate_joaQlI_PiIuVi4yMi4qIipQÿ['ShengYuMiaoShu'] = $_obfuscate_iomQiY_NjIiVkJWGi4_Qj40ÿ;
        $_obfuscate_joaQlI_PiIuVi4yMi4qIipQÿ['endtime'] = date( "Y-m-d H:i:s", time( ) + $_obfuscate_iomQiY_NjIiVkJWGi4_Qj40ÿ );
    }
    else
    {
        $_obfuscate_joaQlI_PiIuVi4yMi4qIipQÿ['IsPubUser'] = 0;
        $_obfuscate_joaQlI_PiIuVi4yMi4qIipQÿ['ShengYuMiaoShu'] = $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['endtime'] - time( );
        $_obfuscate_joaQlI_PiIuVi4yMi4qIipQÿ['endtime'] = date( "Y-m-d H:i:s", $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['endtime'] );
    }
    $_obfuscate_joaQlI_PiIuVi4yMi4qIipQÿ['shostname'] = _obfuscate_ko_JjomRlIiQkYiRlZKSkZIÿ( );
    $_obfuscate_joaQlI_PiIuVi4yMi4qIipQÿ['shosttime'] = time( );
    $_obfuscate_joaQlI_PiIuVi4yMi4qIipQÿ['unbind_changetime'] = $_obfuscate_kpKNkJCHjJCUioiUj4yRkpMÿ;
    $_obfuscate_joaQlI_PiIuVi4yMi4qIipQÿ['YanZhengPinLv'] = $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['connectpenli'];
    $_obfuscate_joaQlI_PiIuVi4yMi4qIipQÿ['InfoA'] = _obfuscate_h4_Tk4uIkIuMiYmUh42Jhocÿ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['returninfo1'], "a" );
    $_obfuscate_joaQlI_PiIuVi4yMi4qIipQÿ['InfoB'] = _obfuscate_h4_Tk4uIkIuMiYmUh42Jhocÿ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['returninfo2'], "b" );
    $_obfuscate_joaQlI_PiIuVi4yMi4qIipQÿ['username'] = $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['username'];
    $_obfuscate_joaQlI_PiIuVi4yMi4qIipQÿ['linknum'] = $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['linknum'];
    $_obfuscate_joaQlI_PiIuVi4yMi4qIipQÿ['cday'] = $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['cday'];
    $_obfuscate_joaQlI_PiIuVi4yMi4qIipQÿ['points'] = $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['points'];
    $_obfuscate_joaQlI_PiIuVi4yMi4qIipQÿ['bdinfo'] = $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['bdinfo'];
    $_obfuscate_joaQlI_PiIuVi4yMi4qIipQÿ['tag'] = $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['tag'];
    $_obfuscate_joaQlI_PiIuVi4yMi4qIipQÿ['keyextattr'] = $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['keyextattr'];
    $_obfuscate_joaQlI_PiIuVi4yMi4qIipQÿ['BeiZhu'] = $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['intro'];
    $_obfuscate_joaQlI_PiIuVi4yMi4qIipQÿ['cztimes'] = $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['cztimes'];
    $_obfuscate_joaQlI_PiIuVi4yMi4qIipQÿ['managerid'] = $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['managerid'];
    if ( _obfuscate_hoaHlYiMh5OOjpGNiYmLk5Aÿ( "randomstr" ) !== FALSE )
    {
        $_obfuscate_joaQlI_PiIuVi4yMi4qIipQÿ['randomstr'] = _obfuscate_hoaHlYiMh5OOjpGNiYmLk5Aÿ( "randomstr" );
    }
    $_obfuscate_joaQlI_PiIuVi4yMi4qIipQÿ['pccode'] = _obfuscate_hoaHlYiMh5OOjpGNiYmLk5Aÿ( "pccode" );
    if ( 1 < $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['linknum'] )
    {
        $_obfuscate_joaQlI_PiIuVi4yMi4qIipQÿ['SiYouShuJu'] = $_obfuscate_k5SIlJCMhoiIjJWMi5WLkY8ÿ['updata'];
    }
    else
    {
        $_obfuscate_joaQlI_PiIuVi4yMi4qIipQÿ['SiYouShuJu'] = $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['updata'];
    }
    if ( _obfuscate_hoaHlYiMh5OOjpGNiYmLk5Aÿ( "keystr" ) !== FALSE )
    {
        $_obfuscate_joaQlI_PiIuVi4yMi4qIipQÿ['keystr'] = _obfuscate_hoaHlYiMh5OOjpGNiYmLk5Aÿ( "keystr" );
    }
    $_obfuscate_kIaLi4uMi5GGipGJlIyQjo8ÿ = _obfuscate_i5SKlIaQlZOMkpCPk5WUiIYÿ( $_obfuscate_joaQlI_PiIuVi4yMi4qIipQÿ );
    $_obfuscate_kIaLi4uMi5GGipGJlIyQjo8ÿ = _obfuscate_h4iTkpCKlYeHkZWPh5CIhpAÿ( $_obfuscate_kIaLi4uMi5GGipGJlIyQjo8ÿ, "utf-8", $_obfuscate_jYqGjYqOlZKMkZSGj4_Gk4wÿ );
    $_obfuscate_kIaLi4uMi5GGipGJlIyQjo8ÿ = base64_encode( $_obfuscate_kIaLi4uMi5GGipGJlIyQjo8ÿ );
    $_obfuscate_lYyUj4iRjpOHiIiTiJSLk44ÿ = "__myEncrypt";
    if ( function_exists( $_obfuscate_lYyUj4iRjpOHiIiTiJSLk44ÿ ) )
    {
        $_obfuscate_kIaLi4uMi5GGipGJlIyQjo8ÿ = $_obfuscate_lYyUj4iRjpOHiIiTiJSLk44ÿ( $_obfuscate_kIaLi4uMi5GGipGJlIyQjo8ÿ );
    }
    $_obfuscate_lImQjpCTjIqSjZCPj4aTkooÿ = str_replace( "`", "^^^", $_obfuscate_lImQjpCTjIqSjZCPj4aTkooÿ );
    $_obfuscate_jI2Ii5GMjJWIjIyNk4qViZUÿ = "_SoftConfig>>";
    $_obfuscate_jI2Ii5GMjJWIjIyNk4qViZUÿ .= $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['chkonline']."`";
    $_obfuscate_jI2Ii5GMjJWIjIyNk4qViZUÿ .= $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['dkbindpc']."`";
    $_obfuscate_jI2Ii5GMjJWIjIyNk4qViZUÿ .= $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['connectpenli']."`";
    $_obfuscate_jI2Ii5GMjJWIjIyNk4qViZUÿ .= $_obfuscate_joaQlI_PiIuVi4yMi4qIipQÿ['ShengYuMiaoShu']."`";
    $_obfuscate_jI2Ii5GMjJWIjIyNk4qViZUÿ .= $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['endtime'] == PETIME ? "1`" : "0`";
    $_obfuscate_jI2Ii5GMjJWIjIyNk4qViZUÿ .= $_obfuscate_lImQjpCTjIqSjZCPj4aTkooÿ."`";
    $_obfuscate_kIaLi4uMi5GGipGJlIyQjo8ÿ .= $_obfuscate_jI2Ii5GMjJWIjIyNk4qViZUÿ;
    $_obfuscate_kIaLi4uMi5GGipGJlIyQjo8ÿ = _obfuscate_h4iTkpCKlYeHkZWPh5CIhpAÿ( $_obfuscate_kIaLi4uMi5GGipGJlIyQjo8ÿ, "utf-8", $_obfuscate_jYqGjYqOlZKMkZSGj4_Gk4wÿ );
    $_obfuscate_kZWIioyVlJKMho_KiIeJjZEÿ = _obfuscate_ioaIk4uQkoqQipSLi5KJkpAÿ( $_obfuscate_kIaLi4uMi5GGipGJlIyQjo8ÿ, $_obfuscate_ko2PhoaRkIeRh5GQjIuGjo4ÿ );
    exit( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['softhead'].$_obfuscate_kZWIioyVlJKMho_KiIeJjZEÿ );
}

if ( !defined( "YH2" ) )
{
    exit( "Access denied to view this page8!" );
}
$_obfuscate_j4yViI_OhpKQk5SPkouUj4oÿ = 0;
if ( _obfuscate_hoaHlYiMh5OOjpGNiYmLk5Aÿ( "changehost" ) == "1" && _obfuscate_hoaHlYiMh5OOjpGNiYmLk5Aÿ( "index" ) != "0" )
{
    $_obfuscate_j4yViI_OhpKQk5SPkouUj4oÿ = 1;
}
$_obfuscate_h4_LhpSTi5WNi5COkIiViYkÿ = _obfuscate_hoaHlYiMh5OOjpGNiYmLk5Aÿ( "valhost" );
if ( $_obfuscate_h4_LhpSTi5WNi5COkIiViYkÿ == 2 )
{
    _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Qÿ( "218", "å®¢æˆ·ç«¯ç¦æ­¢é‡å®šå‘åŸŸåï¼ˆhostsï¼‰ï¼" );
}
if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['softstatus'] == 1 )
{
    _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Qÿ( "219", "æœåŠ¡ç«¯å·²æš‚åœä½¿ç”¨è¯¥è½¯ä»¶ï¼" );
}
if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['softstatus'] == 6 )
{
    _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Qÿ( "220", "æœåŠ¡ç«¯å·²æš‚åœä½¿ç”¨è¯¥è½¯ä»¶ï¼ˆå†»ç»“çŠ¶æ€ï¼‰ã€‚è§£å†»åç³»ç»Ÿå°†è‡ªåŠ¨ä¸ºä½ å¸å·è¡¥ä¸Šè¢«å†»ç»“åæ— æ³•ä½¿ç”¨çš„æ—¶é—´ï¼" );
}
if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['softstatus'] == 9 )
{
    _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Qÿ( "221", "å› ä¸ºè¶…è¿‡60%çš„ç”¨æˆ·å‡æ— æ³•è§£è¯»HOSTSï¼ŒæœåŠ¡ç«¯å·²è¢«ç³»ç»Ÿæš‚åœä½¿ç”¨ï¼ˆéä½œè€…æ“ä½œï¼‰ï¼" );
}
if ( _obfuscate_hoaHlYiMh5OOjpGNiYmLk5Aÿ( "softver" ) < $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['softversion'] && $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['ismustupdate'] == 1 )
{
    _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Qÿ( "222", "æœ‰æ–°ç‰ˆæœ¬å‘å¸ƒï¼Œè¯¥ç‰ˆæœ¬å·²åœæ­¢ä½¿ç”¨ï¼æ–°è½¯ä»¶ä¸‹è½½åœ°å€:VAL_url", array( "VAL_url" => base64_decode( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['softdownurl'] ) ) );
}
$_obfuscate_kpKNkJCHjJCUioiUj4yRkpMÿ = 0;
if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['softmode'] == "KSOFT" )
{
    if ( _obfuscate_hoaHlYiMh5OOjpGNiYmLk5Aÿ( "keystr" ) === FALSE )
    {
        _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Qÿ( "223", "è½¯ä»¶æ¨¡å¼ä¸ºå¡æ¨¡å¼ï¼Œä½†æ˜¯ä½ æ²¡æœ‰ä¼ å…¥æ³¨å†Œå¡å‚æ•°" );
    }
    if ( strlen( _obfuscate_hoaHlYiMh5OOjpGNiYmLk5Aÿ( "keystr" ) ) != 32 )
    {
        _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Qÿ( "224", "è½¯ä»¶æ¨¡å¼ä¸ºå¡æ¨¡å¼ï¼Œè¾“å…¥çš„å¡å·å¿…é¡»æ˜¯32ä½" );
    }
    _obfuscate_k5OKiY_Pj4_OlZWRjIeSjocÿ( "username", substr( _obfuscate_hoaHlYiMh5OOjpGNiYmLk5Aÿ( "keystr" ), 0, 10 ) );
    _obfuscate_k5OKiY_Pj4_OlZWRjIeSjocÿ( "password", substr( _obfuscate_hoaHlYiMh5OOjpGNiYmLk5Aÿ( "keystr" ), 10, 10 ) );
    _obfuscate_k5OKiY_Pj4_OlZWRjIeSjocÿ( "password2", substr( _obfuscate_hoaHlYiMh5OOjpGNiYmLk5Aÿ( "keystr" ), 20 ) );
    $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_jIuSjYuUkJGHlYuPjZOQjY4ÿ( $_obfuscate_mGKRY4dMuU6bZZJfh1_TX5kÿ );
    $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJAÿ( "select * from kss_z_user_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYsÿ." where `username`='"._obfuscate_hoaHlYiMh5OOjpGNiYmLk5Aÿ( "username" )."'" );
    if ( empty( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ ) )
    {
        if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['softstatus'] == 2 || $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['softstatus'] == 4 )
        {
            _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Qÿ( "225", "è½¯ä»¶æ¨¡å¼ä¸ºå¡æ¨¡å¼ï¼ŒæœåŠ¡ç«¯ç¦æ­¢äº†æ–°å¡å·æ¿€æ´»ï¼" );
        }
        $_obfuscate_j46GkYaTj5KIkIyUh4aTjYsÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJAÿ( "select * from kss_z_key_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYsÿ." where `keys`='".substr( _obfuscate_hoaHlYiMh5OOjpGNiYmLk5Aÿ( "keystr" ), 4, 6 )."' and `keyfix`='".substr( _obfuscate_hoaHlYiMh5OOjpGNiYmLk5Aÿ( "keystr" ), 0, 4 )."' and `keyspassword`='".substr( _obfuscate_hoaHlYiMh5OOjpGNiYmLk5Aÿ( "keystr" ), 10 )."' " );
        if ( empty( $_obfuscate_j46GkYaTj5KIkIyUh4aTjYsÿ ) )
        {
            _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Qÿ( "226", "è½¯ä»¶æ¨¡å¼ä¸ºå¡æ¨¡å¼ï¼Œæ³¨å†Œå¡å·æœªæ‰¾åˆ°ï¼" );
        }
        if ( 0 < $_obfuscate_j46GkYaTj5KIkIyUh4aTjYsÿ['cztime'] )
        {
            _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Qÿ( "227", "è½¯ä»¶æ¨¡å¼ä¸ºå¡æ¨¡å¼ï¼Œæ³¨å†Œå¡å·å·²æ¿€æ´»ï¼Œä½†åœ¨ç”¨æˆ·è¡¨ä¸­æ— è®°å½•ï¼".RNBR."ï¼ˆå¯èƒ½è¿‡æœŸå¤ªä¹…è¢«ä½œè€…åˆ é™¤ï¼Œä¹Ÿå¯èƒ½æ˜¯ç”¨æˆ·è¡¨å¼‚å¸¸éœ€ä¿®å¤ï¼‰" );
        }
        if ( $_obfuscate_j46GkYaTj5KIkIyUh4aTjYsÿ['islock'] != 0 )
        {
            _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Qÿ( "228", "è½¯ä»¶æ¨¡å¼ä¸ºå¡æ¨¡å¼ï¼Œæ³¨å†Œå¡å·è¢«é”å®šæ— æ³•æ¿€æ´»ï¼" );
        }
        if ( $_obfuscate_j46GkYaTj5KIkIyUh4aTjYsÿ['isback'] != 0 )
        {
            _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Qÿ( "229", "è½¯ä»¶æ¨¡å¼ä¸ºå¡æ¨¡å¼ï¼Œæ³¨å†Œå¡å·²æ‰§è¡Œé€€å¡æ“ä½œï¼Œæ— æ³•æ¿€æ´»ï¼" );
        }
        $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['managerid'] = $_obfuscate_j46GkYaTj5KIkIyUh4aTjYsÿ['managerid'];
        $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['username'] = substr( _obfuscate_hoaHlYiMh5OOjpGNiYmLk5Aÿ( "keystr" ), 0, 10 );
        $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['password'] = substr( _obfuscate_hoaHlYiMh5OOjpGNiYmLk5Aÿ( "keystr" ), 10, 10 );
        $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['password2'] = substr( _obfuscate_hoaHlYiMh5OOjpGNiYmLk5Aÿ( "keystr" ), 20 );
        $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['cday'] = $_obfuscate_j46GkYaTj5KIkIyUh4aTjYsÿ['cday'];
        $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['points'] = $_obfuscate_j46GkYaTj5KIkIyUh4aTjYsÿ['points'];
        $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['tag'] = $_obfuscate_j46GkYaTj5KIkIyUh4aTjYsÿ['tag'];
        $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['linknum'] = $_obfuscate_j46GkYaTj5KIkIyUh4aTjYsÿ['linknum'];
        $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['keyextattr'] = $_obfuscate_j46GkYaTj5KIkIyUh4aTjYsÿ['keyextattr'];
        $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['addtime'] = $_obfuscate_jomPk5WKioeLipGGi4_PhpMÿ;
        $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['starttime'] = $_obfuscate_jomPk5WKioeLipGGi4_PhpMÿ;
        $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['endtime'] = $_obfuscate_jomPk5WKioeLipGGi4_PhpMÿ + $_obfuscate_j46GkYaTj5KIkIyUh4aTjYsÿ['cday'] * 86400;
        $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['cztimes'] = 1;
        if ( _obfuscate_hoaHlYiMh5OOjpGNiYmLk5Aÿ( "bdinfo" ) === FALSE )
        {
            $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['bdinfo'] = _obfuscate_hoaHlYiMh5OOjpGNiYmLk5Aÿ( "bdinfo" );
        }
        $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5Uÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSVjoiHkoeTlJSRiJGHiI0ÿ( "kss_z_user_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYsÿ, $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ, "sql" );
        $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5Uÿ, "sync" );
        if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ !== TRUE )
        {
            _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Qÿ( "230", "è½¯ä»¶æ¨¡å¼ä¸ºå¡æ¨¡å¼ï¼Œæ³¨å†Œå¡æ¿€æ´»å¤±è´¥ï¼Œè¯·é‡è¯•ï¼VAL_sqlerr", array( "VAL_sqlerr" => $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4ÿ( ) ) );
        }
        $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5Uÿ = "update `kss_z_key_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYsÿ."` set cztime=".$_obfuscate_jomPk5WKioeLipGGi4_PhpMÿ.",czusername='"._obfuscate_hoaHlYiMh5OOjpGNiYmLk5Aÿ( "username" )."' where `keys`='".$_obfuscate_j46GkYaTj5KIkIyUh4aTjYsÿ['keys']."'";
        $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5Uÿ, "sync" );
        if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ !== TRUE )
        {
            _obfuscate_h4aIlI6QlYmUkY6MlI6Qhosÿ( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5Uÿ, $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4ÿ( ), __FILE__, 107 );
        }
        if ( SVRID == 2 )
        {
            $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5Uÿ = "insert into kss_tb_sql_active (`tbname`,`username`,`starttime`,`pccode`) values ('".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYsÿ."','"._obfuscate_hoaHlYiMh5OOjpGNiYmLk5Aÿ( "username" )."',".$_obfuscate_jomPk5WKioeLipGGi4_PhpMÿ.",'".$_obfuscate_joeUio_LioqSh5WIiI2Pk4sÿ."')";
            $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5Uÿ, "notsync" );
            if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ !== TRUE )
            {
                _obfuscate_h4aIlI6QlYmUkY6MlI6Qhosÿ( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5Uÿ, $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4ÿ( ), __FILE__, 114 );
            }
        }
        $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJAÿ( "select * from kss_z_user_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYsÿ." where `username`='"._obfuscate_hoaHlYiMh5OOjpGNiYmLk5Aÿ( "username" )."'" );
    }
    if ( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['password'] != _obfuscate_hoaHlYiMh5OOjpGNiYmLk5Aÿ( "password" ) || $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['password2'] != _obfuscate_hoaHlYiMh5OOjpGNiYmLk5Aÿ( "password2" ) )
    {
        _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Qÿ( "231", "è½¯ä»¶æ¨¡å¼ä¸ºå¡æ¨¡å¼ï¼Œæ³¨å†Œå¡å·é”™è¯¯ï¼Œè¯·æ£€æŸ¥è¾“å…¥ï¼ˆå°½ç”¨å¤åˆ¶è¾“å…¥å¡å·ä¿è¯è¾“å…¥çš„å‡†ç¡®æ€§ï¼‰ï¼" );
    }
}
else
{
    if ( strlen( _obfuscate_hoaHlYiMh5OOjpGNiYmLk5Aÿ( "username" ) ) < 3 )
    {
        if ( _obfuscate_hoaHlYiMh5OOjpGNiYmLk5Aÿ( "keystr" ) !== FALSE )
        {
            _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Qÿ( "232", "æœåŠ¡ç«¯è½¯ä»¶æ¨¡å¼ä¸ºå¸å·å¯†ç æ¨¡å¼ç™»å…¥ï¼Œä½†ä½ å¥½åƒæ˜¯ç”¨å¡å·æ¨¡å¼æ¨¡æ¿å¼€å‘çš„è½¯ä»¶ï¼" );
        }
        _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Qÿ( "233", "ç”¨æˆ·å¸å·é•¿åº¦å°äº3ä½ï¼" );
    }
    $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_jIuSjYuUkJGHlYuPjZOQjY4ÿ( $_obfuscate_mGKRY4dMuU6bZZJfh1_TX5kÿ );
    $_obfuscate_h4aUkomQiI6JlIaSkomSkokÿ = "";
    $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJAÿ( "select * from kss_z_user_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYsÿ." where `username`='"._obfuscate_hoaHlYiMh5OOjpGNiYmLk5Aÿ( "username" )."'" );
    if ( empty( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ ) )
    {
        $_obfuscate_h4aUkomQiI6JlIaSkomSkokÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4ÿ( );
        if ( $_obfuscate_h4aUkomQiI6JlIaSkomSkokÿ != "" )
        {
            $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "repair table kss_z_user_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYsÿ, "notsync" );
            $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJAÿ( "select * from kss_z_user_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYsÿ." where `username`='"._obfuscate_hoaHlYiMh5OOjpGNiYmLk5Aÿ( "username" )."'", 1, 1 );
            if ( empty( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ ) )
            {
                $_obfuscate_h4aUkomQiI6JlIaSkomSkokÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4ÿ( );
                if ( $_obfuscate_h4aUkomQiI6JlIaSkomSkokÿ != "" )
                {
                    exit( "<b>TableErr[kss_z_user_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYsÿ."],try repair,but repair is failureï¼mysql errinfo:".$_obfuscate_h4aUkomQiI6JlIaSkomSkokÿ."</b>" );
                }
                _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Qÿ( "234", "ç”¨æˆ·å¸å·æœªæ‰¾åˆ°ï¼" );
            }
        }
        else
        {
            _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Qÿ( "234", "ç”¨æˆ·å¸å·æœªæ‰¾åˆ°ï¼" );
        }
    }
    if ( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['password'] !== _obfuscate_hoaHlYiMh5OOjpGNiYmLk5Aÿ( "password" ) )
    {
        _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Qÿ( "235", "ç™»é™†å¯†ç é”™è¯¯ï¼" );
    }
}
_obfuscate_ho_Ki4_TiZCUk4yOkJCPh5Mÿ( );
if ( 0 < $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['ispause'] )
{
    _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Qÿ( "236", "å¸å·å†»ç»“çŠ¶æ€[VAL_pausetime]ï¼Œè§£å†»åç³»ç»Ÿå°†è‡ªåŠ¨ä¸ºä½ å¸å·è¡¥ä¸Šè¢«å†»ç»“åæ— æ³•ä½¿ç”¨çš„æ—¶é—´ï¼", array( "VAL_pausetime" => date( "Y-m-d H:i", $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['pausetime'] ) ) );
}
if ( 0 < $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['islock'] )
{
    _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Qÿ( "237", "å¸å·é”å®šçŠ¶æ€ï¼Œä»ç„¶åœ¨è®¡æ—¶ï¼" );
}
if ( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['starttime'] + $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['cday'] * 86400 < time( ) )
{
    _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Qÿ( "238", "å¸å·å·²è¿‡æœŸï¼" );
}
$_obfuscate_ipKHkZSLjYmPk5KOjJGPiZIÿ = ( integer );
if ( $_obfuscate_ipKHkZSLjYmPk5KOjJGPiZIÿ < 1 )
{
    $_obfuscate_ipKHkZSLjYmPk5KOjJGPiZIÿ = 1;
    _obfuscate_k5OKiY_Pj4_OlZWRjIeSjocÿ( "clientid", "1" );
}
if ( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['linknum'] < _obfuscate_hoaHlYiMh5OOjpGNiYmLk5Aÿ( "clientid" ) )
{
    _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Qÿ( "239", "é€šé“IDå·è¶…å‡ºé™åˆ¶ï¼[VAL_linknum]", array( "VAL_linknum" => $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['linknum'] ) );
}
$_obfuscate_k5SIlJCMhoiIjJWMi5WLkY8ÿ = array( );
if ( 1 < $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['linknum'] )
{
    $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "update kss_z_client_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYsÿ." set id=1 where id=0", "notsync" );
    if ( $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_lI6Gio6PjomOj4mRjoaUjoYÿ( ) == 1146 )
    {
        $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "CREATE TABLE IF NOT EXISTS `kss_z_client_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYsÿ."` (`id` int(11) NOT NULL auto_increment,`username` varchar(32) character set utf8 collate utf8_bin NOT NULL,`clientid` int(4) unsigned NOT NULL,`linecode` varchar(10) NOT NULL,`pccode` varchar(512) NOT NULL default '', `unlockday` tinyint(3) unsigned NOT NULL default '0',  `unlocktimes` int(10) unsigned NOT NULL default '0',`isonline` int(2) unsigned NOT NULL,`lasttime` int(10) unsigned NOT NULL,`lastip` bigint(20) unsigned NOT NULL default '0',`updata` varchar(128) NOT NULL default '',PRIMARY KEY  (`id`),KEY `username` (`username`)) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ", "sync" );
        if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ === FALSE )
        {
            _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Qÿ( "240", "åˆ›å»ºé€šé“è¡¨æ—¶å‡ºé”™ï¼Œè¯·é‡è¯•æˆ–è”ç³»è½¯ä»¶ä½œè€…ï¼" );
        }
    }
    if ( _obfuscate_hoaHlYiMh5OOjpGNiYmLk5Aÿ( "index" ) == 0 )
    {
        $_obfuscate_k5SIlJCMhoiIjJWMi5WLkY8ÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJAÿ( "select * from kss_z_client_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYsÿ." where username='"._obfuscate_hoaHlYiMh5OOjpGNiYmLk5Aÿ( "username" )."' and `clientid`="._obfuscate_hoaHlYiMh5OOjpGNiYmLk5Aÿ( "clientid" ) );
        if ( empty( $_obfuscate_k5SIlJCMhoiIjJWMi5WLkY8ÿ ) )
        {
            $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "insert into kss_z_client_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYsÿ." (`username`,`clientid`,`linecode`,`unlockday`,`unlocktimes`,`pccode`,`isonline`,`lasttime`,`lastip`,`updata`) values ('"._obfuscate_hoaHlYiMh5OOjpGNiYmLk5Aÿ( "username" )."',"._obfuscate_hoaHlYiMh5OOjpGNiYmLk5Aÿ( "clientid" ).",'',0,0,'',0,0,0,'')", "notsync" );
            if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ === FALSE )
            {
                _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Qÿ( "241", "é€šé“è¡¨ä¸­åŠ å…¥ç”¨æˆ·æ•°æ®å‡ºæ—¶å‡ºé”™ï¼Œè¯·é‡è¯•æˆ–è”ç³»è½¯ä»¶ä½œè€…ï¼VAL_sqlerr", array( "VAL_sqlerr" => $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4ÿ( ) ) );
            }
            $_obfuscate_k5SIlJCMhoiIjJWMi5WLkY8ÿ = array( "username" => _obfuscate_hoaHlYiMh5OOjpGNiYmLk5Aÿ( "username" ), "clientid" => _obfuscate_hoaHlYiMh5OOjpGNiYmLk5Aÿ( "clientid" ), "linecode" => "", "unlockday" => 0, "unlocktimes" => 0, "pccode" => "", "isonline" => 0, "lasttime" => 0, "lastip" => 0, "updata" => "" );
        }
    }
    else
    {
        $_obfuscate_k5SIlJCMhoiIjJWMi5WLkY8ÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJAÿ( "select * from kss_z_client_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYsÿ." where username='"._obfuscate_hoaHlYiMh5OOjpGNiYmLk5Aÿ( "username" )."' and `clientid`="._obfuscate_hoaHlYiMh5OOjpGNiYmLk5Aÿ( "clientid" ) );
        if ( empty( $_obfuscate_k5SIlJCMhoiIjJWMi5WLkY8ÿ ) )
        {
            _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Qÿ( "242", "é€šé“è¡¨ä¸­æœªæ‰¾åˆ°å¸å·é€šé“å·è®°å½•ï¼Œè¯·é‡è¯•æˆ–è”ç³»è½¯ä»¶ä½œè€…ï¼" );
        }
    }
}
$_obfuscate_lIeKioqNiYaOlIyQjouSlY8ÿ = "../kss_inc/advapi/".$_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['pid'].$_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['id'].".php";
if ( is_file( $_obfuscate_lIeKioqNiYaOlIyQjouSlY8ÿ ) )
{
    _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Qÿ( "243", "é«˜çº§APIæ¥å£ç¼“å­˜æ–‡ä»¶ä¸¢å¤±ï¼Œéœ€é‡å»ºç¼“å­˜ã€‚ï¼ˆé«˜çº§ç®¡ç†ï¼Œæ›´æ–°ç¼“å­˜ï¼‰" );
}
include( $_obfuscate_lIeKioqNiYaOlIyQjouSlY8ÿ );
$_obfuscate_iZKMh5WIiI2UkpGHj5SPkYkÿ = explode( "#", $_obfuscate_jIaLhoqLj5GKkJSRjoaRkpAÿ );
$_obfuscate_iZWVjY6HiIyQj4uUjpKHkJUÿ = array_intersect( $_obfuscate_iZKMh5WIiI2UkpGHj5SPkYkÿ, $_obfuscate_ioiVhomLjJSHiYqRiJWOk4Yÿ );
if ( empty( $_obfuscate_iZWVjY6HiIyQj4uUjpKHkJUÿ ) )
{
    _obfuscate_j42JiI_RjZCHiIyKjZGUlYwÿ( $_obfuscate_jZSVjouIlJSRk4eHkIqGjIcÿ, $_obfuscate_jIaLhoqLj5GKkJSRjoaRkpAÿ );
    if ( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['endtime'] != PETIME )
    {
        $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "update kss_z_user_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYsÿ." set islock=3,intro='è¯¥ç”¨æˆ·ä½¿ç”¨è°ƒè¯•å·¥å…·ç™»é™†' where username='"._obfuscate_hoaHlYiMh5OOjpGNiYmLk5Aÿ( "username" )."' and password='"._obfuscate_hoaHlYiMh5OOjpGNiYmLk5Aÿ( "password" )."'", "sync" );
        _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Qÿ( "244", "å®¢æˆ·ç«¯å¼‚å¸¸æ“ä½œï¼Œå¸å·é”å®šï¼ŒIPã€æœºå™¨ç å‡å·²è¢«åˆ—å…¥é»‘åå•ï¼" );
    }
    else
    {
        _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Qÿ( "245", "å®¢æˆ·ç«¯å¼‚å¸¸æ“ä½œï¼ŒIPã€æœºå™¨ç å‡å·²è¢«åˆ—å…¥é»‘åå•ï¼" );
    }
}
if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['nodebuger'] == 1 )
{
    $_obfuscate_kJGNi4qHkI6Hjo2QkIaSlYoÿ = _obfuscate_hoaHlYiMh5OOjpGNiYmLk5Aÿ( "isdebuger" );
    if ( $_obfuscate_kJGNi4qHkI6Hjo2QkIaSlYoÿ !== FALSE && 0 < $_obfuscate_kJGNi4qHkI6Hjo2QkIaSlYoÿ )
    {
        _obfuscate_j42JiI_RjZCHiIyKjZGUlYwÿ( $_obfuscate_jZSVjouIlJSRk4eHkIqGjIcÿ, $_obfuscate_jIaLhoqLj5GKkJSRjoaRkpAÿ );
        if ( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['endtime'] != PETIME )
        {
            $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "update kss_z_user_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYsÿ." set islock=3,intro='è¯¥ç”¨æˆ·ä½¿ç”¨è°ƒè¯•å·¥å…·ç™»é™†' where username='"._obfuscate_hoaHlYiMh5OOjpGNiYmLk5Aÿ( "username" )."' and password='"._obfuscate_hoaHlYiMh5OOjpGNiYmLk5Aÿ( "password" )."'", "sync" );
            _obfuscate_lJSVj4aKiIaUkJKUioiVjZQÿ( 34 )( _obfuscate_lJSVj4aKiIaUkJKUioiVjZQÿ( 34 ), "notsync" );
            _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Qÿ( "246", "å®¢æˆ·è°ƒè¯•æ“ä½œï¼Œå¸å·é”å®šï¼ŒIPã€æœºå™¨ç å‡å·²è¢«åˆ—å…¥é»‘åå•ï¼ï¼ˆå¦‚æœä½ æ­£åœ¨å¼€å‘è°ƒè¯•è½¯ä»¶ï¼Œè¯·æš‚æ—¶å»æ‰æ£€æµ‹ï¼šåå°è½¯ä»¶å‚æ•°è®¾ç½®->å®‰å…¨ç­–ç•¥->ç¦æ­¢è°ƒè¯•ä¸è¦å‹¾é€‰ï¼‰" );
        }
        else
        {
            _obfuscate_lJSVj4aKiIaUkJKUioiVjZQÿ( 34 )( _obfuscate_lJSVj4aKiIaUkJKUioiVjZQÿ( 34 ), "notsync" );
            _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Qÿ( "247", "å®¢æˆ·è°ƒè¯•æ“ä½œï¼ŒIPã€æœºå™¨ç å‡å·²è¢«åˆ—å…¥é»‘åå•ï¼ï¼ˆå¦‚æœä½ æ­£åœ¨å¼€å‘è°ƒè¯•è½¯ä»¶ï¼Œè¯·æš‚æ—¶å»æ‰æ£€æµ‹ï¼šåå°è½¯ä»¶å‚æ•°è®¾ç½®->å®‰å…¨ç­–ç•¥->ç¦æ­¢è°ƒè¯•ä¸è¦å‹¾é€‰ï¼‰" );
        }
    }
}
if ( _obfuscate_hoaHlYiMh5OOjpGNiYmLk5Aÿ( "index" ) == "0" && $_obfuscate_h4_LhpSTi5WNi5COkIiViYkÿ !== FALSE && 1 < $_obfuscate_h4_LhpSTi5WNi5COkIiViYkÿ )
{
    $_obfuscate_k46Gk4qOjJGGiYqMiouGh4gÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJAÿ( "SELECT COUNT( * ) AS tnum FROM  kss_z_user_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYsÿ." where `hstats2`>0" );
    $_obfuscate_lYmGjomGho2UipSQi5ONj48ÿ = $_obfuscate_k46Gk4qOjJGGiYqMiouGh4gÿ['tnum'];
    $_obfuscate_k46Gk4qOjJGGiYqMiouGh4gÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJAÿ( "SELECT COUNT( * ) AS tnum FROM  kss_z_user_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYsÿ." where `hstats`=1" );
    $_obfuscate_koiTh5WPjIyRjZWLipSMjI0ÿ = $_obfuscate_k46Gk4qOjJGGiYqMiouGh4gÿ['tnum'];
    if ( 30 < $_obfuscate_lYmGjomGho2UipSQi5ONj48ÿ && $_obfuscate_koiTh5WPjIyRjZWLipSMjI0ÿ / $_obfuscate_lYmGjomGho2UipSQi5ONj48ÿ < 0.4 )
    {
        $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['id']( "update kss_tb_soft set softstatus=9 where id='".$_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['id']."'", "sync" );
        $_obfuscate_k4mMjZOVkpCRipSKlI2OiYgÿ = file_get_contents( $_obfuscate_lY_Pko2IhoyRj4qUkYqPlJUÿ );
        $_obfuscate_k4mMjZOVkpCRipSKlI2OiYgÿ = preg_replace( "/('softstatus').*(\\n)/", "$1 => 9,$2", $_obfuscate_k4mMjZOVkpCRipSKlI2OiYgÿ );
        file_put_contents( $_obfuscate_lY_Pko2IhoyRj4qUkYqPlJUÿ, $_obfuscate_k4mMjZOVkpCRipSKlI2OiYgÿ );
        _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Qÿ( "221", "å› ä¸ºè¶…è¿‡60%çš„ç”¨æˆ·å‡æ— æ³•è§£è¯»HOSTSï¼ŒæœåŠ¡ç«¯å·²è¢«ç³»ç»Ÿæš‚åœä½¿ç”¨ï¼ˆéä½œè€…æ“ä½œï¼‰ï¼" );
    }
}
$_obfuscate_iI2IjYyHkIyVkY_RiIqIi5Uÿ = array( );
$_obfuscate_jJWVlI2Kh4uIkouNkI6QkoYÿ = base64_decode( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['resstring'] );
$_obfuscate_jJWVlI2Kh4uIkouNkI6QkoYÿ = preg_replace( "/(====NEW RESSTR====).*(\\s*)/", "$1$2", $_obfuscate_jJWVlI2Kh4uIkouNkI6QkoYÿ );
$_obfuscate_iI2IjYyHkIyVkY_RiIqIi5Uÿ = explode( "====NEW RESSTR====\n", $_obfuscate_jJWVlI2Kh4uIkouNkI6QkoYÿ );
foreach ( $_obfuscate_iI2IjYyHkIyVkY_RiIqIi5Uÿ as $_obfuscate_lIeHkoeKkpOSiomPi4mQk5Eÿ => $_obfuscate_io6UjZWThpOSjYeOj46Qkowÿ )
{
    $_obfuscate_iI2IjYyHkIyVkY_RiIqIi5Uÿ[$_obfuscate_lIeHkoeKkpOSiomPi4mQk5Eÿ] = chop( $_obfuscate_io6UjZWThpOSjYeOj46Qkowÿ );
}
$_obfuscate_k5OQi5SRipSGhpKPi46UlJIÿ = "resstring";
$$_obfuscate_k5OQi5SRipSGhpKPi46UlJIÿ = $_obfuscate_iI2IjYyHkIyVkY_RiIqIi5Uÿ;
if ( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['endtime'] == PETIME )
{
    if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['dkbindpc'] == "0" && _obfuscate_hoaHlYiMh5OOjpGNiYmLk5Aÿ( "isrun" ) == 1 )
    {
        _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Qÿ( "249", "æœ¬æœºè¯¥å¸å·æ­£åœ¨ä½¿ç”¨ï¼Œè¯·å…ˆå…³é—­å·²ç™»é™†æˆåŠŸçš„è½¯ä»¶ï¼å¦‚æœä½ ç¡®è®¤å·²å…³é—­ï¼Œå¯èƒ½æ˜¯è¿˜æœ‰æ®‹ç•™çš„è½¯ä»¶è¿›ç¨‹æœªè¢«å…³é—­ï¼Œè¯·ç”¨ä»»åŠ¡ç®¡ç†å™¨ç»“æŸå¼‚å¸¸çš„è½¯ä»¶è¿›ç¨‹ï¼" );
    }
    $_obfuscate_lZCTlJCVlYmKlZGRiZCJjIYÿ = date( "H" );
    $_obfuscate_h5CLhoaTko2OkIaJiYyKhoYÿ = explode( ",", $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['test_timearea'] );
    if ( $_obfuscate_lZCTlJCVlYmKlZGRiZCJjIYÿ < $_obfuscate_h5CLhoaTko2OkIaJiYyKhoYÿ[0] || $_obfuscate_h5CLhoaTko2OkIaJiYyKhoYÿ[1] < $_obfuscate_lZCTlJCVlYmKlZGRiZCJjIYÿ )
    {
        _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Qÿ( "250", "å…¬ç”¨å¸å·å½“å‰æ—¶æ®µä¸å…è®¸ä½¿ç”¨ï¼" );
    }
    $_obfuscate_iomQiY_NjIiVkJWGi4_Qj40ÿ = 8640000;
    if ( 0 < $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['test_times'] )
    {
        $_obfuscate_iomQiY_NjIiVkJWGi4_Qj40ÿ = $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['test_time'] * 60;
        $_obfuscate_i4yKj4eSi4mRkIqSkY6Piokÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJAÿ( "select * from kss_tb_log_pubuser where `pccode`='"._obfuscate_hoaHlYiMh5OOjpGNiYmLk5Aÿ( "pccode" )."' and `softid`=".$_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['id'] );
        if ( empty( $_obfuscate_i4yKj4eSi4mRkIqSkY6Piokÿ ) )
        {
            $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['id']( "insert into kss_tb_log_pubuser (`softid`,`pccode`,`nday`,`ntimes`,`lasttime`) values (".$_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['id'].",'"._obfuscate_hoaHlYiMh5OOjpGNiYmLk5Aÿ( "pccode" )."',".$_obfuscate_jomPk5WKioeLipGGi4_PhpMÿ.",1,".$_obfuscate_jomPk5WKioeLipGGi4_PhpMÿ.")", "notsync" );
        }
        else if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['test_time'] * 60 < $_obfuscate_jomPk5WKioeLipGGi4_PhpMÿ - $_obfuscate_i4yKj4eSi4mRkIqSkY6Piokÿ['lasttime'] )
        {
            if ( _obfuscate_hoaHlYiMh5OOjpGNiYmLk5Aÿ( "index" ) != 0 )
            {
                _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Qÿ( "251", "æœ¬æ¬¡è¯•ç”¨æ—¶é—´ç»“æŸï¼" );
            }
            if ( ( $_obfuscate_jomPk5WKioeLipGGi4_PhpMÿ - $_obfuscate_i4yKj4eSi4mRkIqSkY6Piokÿ['nday'] ) / 86400 < $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['test_day'] )
            {
                if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['test_times'] <= $_obfuscate_i4yKj4eSi4mRkIqSkY6Piokÿ['ntimes'] )
                {
                    _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Qÿ( "252", "ä»Šå¤©ä½ ä¸èƒ½ä½¿ç”¨å…¬ç”¨å¸å·ï¼" );
                }
                $_obfuscate_i4yKj4eSi4mRkIqSkY6Piokÿ['ntimes']( "update kss_tb_log_pubuser set `ntimes`=".( $_obfuscate_i4yKj4eSi4mRkIqSkY6Piokÿ['ntimes'] + 1 ).",`lasttime`=".$_obfuscate_jomPk5WKioeLipGGi4_PhpMÿ." where `pccode`='"._obfuscate_hoaHlYiMh5OOjpGNiYmLk5Aÿ( "pccode" )."' and `softid`=".$_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['id'], "notsync" );
            }
            else
            {
                $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "update kss_tb_log_pubuser set nday=".$_obfuscate_jomPk5WKioeLipGGi4_PhpMÿ.",`ntimes`=1,`lasttime`=".$_obfuscate_jomPk5WKioeLipGGi4_PhpMÿ." where `pccode`='"._obfuscate_hoaHlYiMh5OOjpGNiYmLk5Aÿ( "pccode" )."' and `softid`=".$_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['id'], "notsync" );
            }
        }
        else
        {
            $_obfuscate_iomQiY_NjIiVkJWGi4_Qj40ÿ = $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['test_time'] * 60 - $_obfuscate_jomPk5WKioeLipGGi4_PhpMÿ + $_obfuscate_i4yKj4eSi4mRkIqSkY6Piokÿ['lasttime'];
        }
    }
    $_obfuscate_lImQjpCTjIqSjZCPj4aTkooÿ = "";
    if ( _obfuscate_hoaHlYiMh5OOjpGNiYmLk5Aÿ( "advapi" ) !== FALSE )
    {
        $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['advapi'] = "";
        $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['softintro'] = "";
        $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['softnotice'] = "";
        $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['updatelog'] = "";
        $_obfuscate_jYmJi42Gh42MhoqLkY_MlZMÿ = array( "soft" => $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ, "member" => $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ, "ip" => long2ip( $_obfuscate_kYmJjZOIiZKJioqMkoaGiYkÿ ), "intip" => $_obfuscate_kYmJjZOIiZKJioqMkoaGiYkÿ, "pccode" => _obfuscate_hoaHlYiMh5OOjpGNiYmLk5Aÿ( "pccode" ), "username" => _obfuscate_hoaHlYiMh5OOjpGNiYmLk5Aÿ( "username" ), "password" => _obfuscate_hoaHlYiMh5OOjpGNiYmLk5Aÿ( "password" ), "clientid" => _obfuscate_hoaHlYiMh5OOjpGNiYmLk5Aÿ( "clientid" ), "linecode" => _obfuscate_hoaHlYiMh5OOjpGNiYmLk5Aÿ( "linecode" ), "ischangesvr" => _obfuscate_hoaHlYiMh5OOjpGNiYmLk5Aÿ( "ischangesvr" ), "apicmd" => _obfuscate_hoaHlYiMh5OOjpGNiYmLk5Aÿ( "apicmd" ) );
        $adv_db = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ;
        $adv_table = $_obfuscate_jpOTkJCPjI_TipSPjoeTjYsÿ;
        $adb_pdata = $_obfuscate_jYmJi42Gh42MhoqLkY_MlZMÿ;
        $adv_user = $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ;
        $_obfuscate_lImQjpCTjIqSjZCPj4aTkooÿ = _obfuscate_io_Mh4aMkouSiZGQiYmRjJMÿ( );
    }
    _obfuscate_k5OTiY6Kk5WJlIuOkIyJkIkÿ( $_obfuscate_lImQjpCTjIqSjZCPj4aTkooÿ, $_obfuscate_iomQiY_NjIiVkJWGi4_Qj40ÿ );
}
if ( 1 < $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['linknum'] && $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['softmode2'] == 1 )
{
    _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Qÿ( "253", "ä»»æ„ç™»é™†æ¨¡å¼ï¼Œä¸å…è®¸å­˜åœ¨å¤šé€šé“å¸å·ï¼Œè¯·è”ç³»ä½œè€…ï¼" );
}
if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['dkbindpc'] == "0" && _obfuscate_hoaHlYiMh5OOjpGNiYmLk5Aÿ( "isrun" ) == 1 )
{
    _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Qÿ( "249", "æœ¬æœºè¯¥å¸å·æ­£åœ¨ä½¿ç”¨ï¼Œè¯·å…ˆå…³é—­å·²ç™»é™†æˆåŠŸçš„è½¯ä»¶ï¼å¦‚æœä½ ç¡®è®¤å·²å…³é—­ï¼Œå¯èƒ½æ˜¯è¿˜æœ‰æ®‹ç•™çš„è½¯ä»¶è¿›ç¨‹æœªè¢«å…³é—­ï¼Œè¯·ç”¨ä»»åŠ¡ç®¡ç†å™¨ç»“æŸå¼‚å¸¸çš„è½¯ä»¶è¿›ç¨‹ï¼" );
}
if ( _obfuscate_hoaHlYiMh5OOjpGNiYmLk5Aÿ( "bdinfo" ) != "" && $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['bdinfo'] != _obfuscate_hoaHlYiMh5OOjpGNiYmLk5Aÿ( "bdinfo" ) )
{
    _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Qÿ( "255", "ç»‘å®šä¿¡æ¯ä¸ç¬¦ï¼" );
}
$_obfuscate_hpGLjYmMi5CJkoqGjJSIiIYÿ = array( );
$_obfuscate_lI6Oh5CKh42Ri5STio2HjpEÿ = array( );
if ( 1 < $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['linknum'] )
{
    $_obfuscate_lIyRio6Kho6LiIaVkY_SiZAÿ = $_obfuscate_k5SIlJCMhoiIjJWMi5WLkY8ÿ['lastip'];
    $_obfuscate_kJSVj4qJlIyOi5SQiZKRiYkÿ = $_obfuscate_k5SIlJCMhoiIjJWMi5WLkY8ÿ['pccode'];
    $_obfuscate_h5GPkpGLkYePioqSiomMlZMÿ = $_obfuscate_k5SIlJCMhoiIjJWMi5WLkY8ÿ['unlockday'];
    $_obfuscate_j5WGlIqLlYqNlYqJjo_JiJUÿ = $_obfuscate_k5SIlJCMhoiIjJWMi5WLkY8ÿ['unlocktimes'];
    $_obfuscate_j42KiZKIk5OMi4yGlYyPlI0ÿ = $_obfuscate_k5SIlJCMhoiIjJWMi5WLkY8ÿ['lasttime'];
    $_obfuscate_iouLk4eQj5KOj4eQh42Vi4gÿ = _obfuscate_h4_HlI6KlZKKlZCKkY_Jjo4ÿ( _obfuscate_hoaHlYiMh5OOjpGNiYmLk5Aÿ( "pccode" ), $_obfuscate_kJSVj4qJlIyOi5SQiZKRiYkÿ );
    $_obfuscate_lYmOk4iOkZGIkIuPiIyTiooÿ = $_obfuscate_k5SIlJCMhoiIjJWMi5WLkY8ÿ['isonline'];
    $_obfuscate_k4yQlYyNkpOJkZCIiIiMj5Aÿ = $_obfuscate_k5SIlJCMhoiIjJWMi5WLkY8ÿ['linecode'];
}
else
{
    $_obfuscate_lIyRio6Kho6LiIaVkY_SiZAÿ = $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['lastip'];
    $_obfuscate_kJSVj4qJlIyOi5SQiZKRiYkÿ = $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['pccode'];
    $_obfuscate_iouLk4eQj5KOj4eQh42Vi4gÿ = _obfuscate_h4_HlI6KlZKKlZCKkY_Jjo4ÿ( _obfuscate_hoaHlYiMh5OOjpGNiYmLk5Aÿ( "pccode" ), $_obfuscate_kJSVj4qJlIyOi5SQiZKRiYkÿ );
    $_obfuscate_k4yQlYyNkpOJkZCIiIiMj5Aÿ = $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['linecode'];
    $_obfuscate_j42KiZKIk5OMi4yGlYyPlI0ÿ = $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['lasttime'];
    $_obfuscate_lYmOk4iOkZGIkIuPiIyTiooÿ = $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['isonline'];
    $_obfuscate_h5GPkpGLkYePioqSiomMlZMÿ = $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['unlockday'];
    $_obfuscate_j5WGlIqLlYqNlYqJjo_JiJUÿ = $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['unlocktimes'];
}
if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['autolock_time'] != 0 && $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['autolock_times'] != 0 )
{
    $_obfuscate_kZKOjI2JjoaKiJCGi4qQkokÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJAÿ( "select count(*) as tnum from kss_z_log_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYsÿ." where username='"._obfuscate_hoaHlYiMh5OOjpGNiYmLk5Aÿ( "username" )."' and optype=1 and addtime>".( $_obfuscate_jomPk5WKioeLipGGi4_PhpMÿ - $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['autolock_time'] * 60 ) );
    if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['autolock_times'] < $_obfuscate_kZKOjI2JjoaKiJCGi4qQkokÿ['tnum'] )
    {
        $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "update kss_z_user_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYsÿ." set islock=3,intro='çŸ­æ—¶é—´å†…ç™»é™†æ¬¡æ•°å¤ªå¤šï¼Œé”å®šå¸å·' where username='"._obfuscate_hoaHlYiMh5OOjpGNiYmLk5Aÿ( "username" )."'", "sync" );
        _obfuscate_lJSVj4aKiIaUkJKUioiVjZQÿ( 22 )( _obfuscate_lJSVj4aKiIaUkJKUioiVjZQÿ( 22 ), "notsync" );
        _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Qÿ( "256", "ç”±äºçŸ­æ—¶é—´å†…ç™»é™†æ¬¡æ•°å¤ªå¤šï¼Œå¸å·è¢«é”å®šï¼" );
    }
}
if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['autolock_time_ip'] != 0 && $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['autolock_ipnum'] != 0 )
{
    $_obfuscate_kZKOjI2JjoaKiJCGi4qQkokÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJAÿ( "select count(distinct ip) as tnum from kss_z_log_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYsÿ." where username='"._obfuscate_hoaHlYiMh5OOjpGNiYmLk5Aÿ( "username" )."' and optype=1 and addtime>".( $_obfuscate_jomPk5WKioeLipGGi4_PhpMÿ - $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['autolock_time_ip'] * 60 ) );
    if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['autolock_ipnum'] < $_obfuscate_kZKOjI2JjoaKiJCGi4qQkokÿ['tnum'] )
    {
        $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "update kss_z_user_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYsÿ." set islock=3,intro='IPå˜åŠ¨å¤ªé¢‘ç¹ï¼Œé”å®šå¸å·' where username='"._obfuscate_hoaHlYiMh5OOjpGNiYmLk5Aÿ( "username" )."'", "sync" );
        _obfuscate_lJSVj4aKiIaUkJKUioiVjZQÿ( 32 )( _obfuscate_lJSVj4aKiIaUkJKUioiVjZQÿ( 32 ), "notsync" );
        _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Qÿ( "257", "ç”±äºçŸ­æ—¶é—´å†…ç™»é™†IPå˜åŠ¨æ¬¡æ•°è¿‡å¤šï¼Œå¸å·è¢«é”å®šï¼" );
    }
}
if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['autolock_time_advapi'] != 0 && $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['autolock_times_advapi'] != 0 )
{
    $_obfuscate_kZKOjI2JjoaKiJCGi4qQkokÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJAÿ( "select count(*) as tnum from kss_z_log_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYsÿ." where username='"._obfuscate_hoaHlYiMh5OOjpGNiYmLk5Aÿ( "username" )."' and optype=30 and addtime>".( $_obfuscate_jomPk5WKioeLipGGi4_PhpMÿ - $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['autolock_time_advapi'] * 60 ) );
    if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['autolock_times_advapi'] < $_obfuscate_kZKOjI2JjoaKiJCGi4qQkokÿ['tnum'] )
    {
        $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "update kss_z_user_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYsÿ." set islock=3,intro='è°ƒç”¨advapiå¤ªé¢‘ç¹ï¼Œé”å®šå¸å·' where username='"._obfuscate_hoaHlYiMh5OOjpGNiYmLk5Aÿ( "username" )."'", "sync" );
        _obfuscate_lJSVj4aKiIaUkJKUioiVjZQÿ( 31 )( _obfuscate_lJSVj4aKiIaUkJKUioiVjZQÿ( 31 ), "notsync" );
        _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Qÿ( "258", "ç”±äºçŸ­æ—¶é—´å†…è°ƒç”¨advapiæ¬¡æ•°å¤ªå¤šï¼Œå¸å·è¢«é”å®šï¼" );
    }
}
if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['softmode2'] != "1" && $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['dkbindpc'] != "1" )
{
    if ( _obfuscate_hoaHlYiMh5OOjpGNiYmLk5Aÿ( "index" ) == 0 || $_obfuscate_j4yViI_OhpKQk5SPkouUj4oÿ == 1 )
    {
        $_obfuscate_hpGLjYmMi5CJkoqGjJSIiIYÿ['linecode'] = _obfuscate_hoaHlYiMh5OOjpGNiYmLk5Aÿ( "linecode" );
    }
    else if ( $_obfuscate_k4yQlYyNkpOJkZCIiIiMj5Aÿ == "" )
    {
        $_obfuscate_hpGLjYmMi5CJkoqGjJSIiIYÿ['linecode'] = _obfuscate_hoaHlYiMh5OOjpGNiYmLk5Aÿ( "linecode" );
    }
    else if ( $_obfuscate_k4yQlYyNkpOJkZCIiIiMj5Aÿ != _obfuscate_hoaHlYiMh5OOjpGNiYmLk5Aÿ( "linecode" ) )
    {
        _obfuscate_lJSVj4aKiIaUkJKUioiVjZQÿ( 25 )( _obfuscate_lJSVj4aKiIaUkJKUioiVjZQÿ( 25 ), "notsync" );
        _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Qÿ( "259", "å¸å·è¢«æŒ¤ä¸‹çº¿ï¼ˆåœ¨çº¿ç å˜åŠ¨ï¼‰ï¼" );
    }
}
$_obfuscate_kpSSj5GNj4eIh5WGkI_Gk4sÿ = "";
if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['softmode2'] != "1" )
{
    if ( _obfuscate_hoaHlYiMh5OOjpGNiYmLk5Aÿ( "index" ) == 0 )
    {
        if ( $_obfuscate_iouLk4eQj5KOj4eQh42Vi4gÿ === FALSE )
        {
            if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['chkonline'] == 1 )
            {
                if ( $_obfuscate_lYmOk4iOkZGIkIuPiIyTiooÿ == 1 )
                {
                    if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['outlinetimes'] == 0 )
                    {
                        _obfuscate_lJSVj4aKiIaUkJKUioiVjZQÿ( 33 )( _obfuscate_lJSVj4aKiIaUkJKUioiVjZQÿ( 33 ), "notsync" );
                        _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Qÿ( "260", "ç”¨æˆ·åœ¨çº¿ï¼Œç¦æ­¢æ¢æœºç™»é™†ï¼" );
                    }
                    if ( $_obfuscate_jomPk5WKioeLipGGi4_PhpMÿ - $_obfuscate_j42KiZKIk5OMi4yGlYyPlI0ÿ < $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['outlinetime'] * 60 )
                    {
                        _obfuscate_lJSVj4aKiIaUkJKUioiVjZQÿ( 24 )( _obfuscate_lJSVj4aKiIaUkJKUioiVjZQÿ( 24 ), "notsync" );
                        _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Qÿ( "261", "ç”¨æˆ·åœ¨çº¿ï¼Œè¯·å¤šç­‰å¾…ä¸€ä¼šå†å¿è¯•é‡æ–°ç™»é™†ï¼æ³¨æ„ï¼šå¦‚æœåŸç¨‹åºè¿˜åœ¨è¿è¡Œï¼Œä½ æ¢ç”µè„‘å¿è¯•ç™»é™†ï¼Œå¸å·å¯èƒ½ä¼šè¢«ç³»ç»Ÿé”å®šï¼" );
                    }
                    if ( $_obfuscate_h5GPkpGLkYePioqSiomMlZMÿ != date( "d" ) )
                    {
                        $_obfuscate_hpGLjYmMi5CJkoqGjJSIiIYÿ['unlockday'] = date( "d" );
                        $_obfuscate_hpGLjYmMi5CJkoqGjJSIiIYÿ['unlocktimes'] = 1;
                    }
                    else
                    {
                        if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['outlinetimes'] < $_obfuscate_j5WGlIqLlYqNlYqJjo_JiJUÿ + 1 )
                        {
                            _obfuscate_lJSVj4aKiIaUkJKUioiVjZQÿ( 26 )( _obfuscate_lJSVj4aKiIaUkJKUioiVjZQÿ( 26 ), "notsync" );
                            _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Qÿ( "262", "å½“æ—¥å¼ºç™»é™†æ¬¡æ•°å·²ç”¨å®Œï¼Œä¸å¯å†å¼ºç™»é™†ï¼" );
                        }
                        $_obfuscate_hpGLjYmMi5CJkoqGjJSIiIYÿ['unlocktimes'] = $_obfuscate_j5WGlIqLlYqNlYqJjo_JiJUÿ + 1;
                    }
                    $_obfuscate_lI6Oh5CKh42Ri5STio2HjpEÿ['notsync_01'] = _obfuscate_lJSVj4aKiIaUkJKUioiVjZQÿ( 23 );
                }
                else
                {
                    $_obfuscate_hpGLjYmMi5CJkoqGjJSIiIYÿ['isonline'] = 1;
                    $_obfuscate_lI6Oh5CKh42Ri5STio2HjpEÿ['notsync_01'] = _obfuscate_lJSVj4aKiIaUkJKUioiVjZQÿ( 2 );
                }
                $_obfuscate_hpGLjYmMi5CJkoqGjJSIiIYÿ['pccode'] = _obfuscate_hoaHlYiMh5OOjpGNiYmLk5Aÿ( "pccode" );
            }
            else
            {
                if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['unbindpc_set'] == 2 )
                {
                    if ( $_obfuscate_jomPk5WKioeLipGGi4_PhpMÿ - $_obfuscate_j42KiZKIk5OMi4yGlYyPlI0ÿ < $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['unbindpc_autotime'] * 60 )
                    {
                        _obfuscate_lJSVj4aKiIaUkJKUioiVjZQÿ( 27 )( _obfuscate_lJSVj4aKiIaUkJKUioiVjZQÿ( 27 ), "notsync" );
                        _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Qÿ( "263", "æœºå™¨ç å˜åŠ¨ï¼Œæœªåˆ°è‡ªåŠ¨è§£ç»‘æ—¶é—´ï¼" );
                    }
                    $_obfuscate_joiHh46HlYmMkouLlJWNk4wÿ = 0;
                    if ( $_obfuscate_h5GPkpGLkYePioqSiomMlZMÿ != date( "d" ) )
                    {
                        $_obfuscate_hpGLjYmMi5CJkoqGjJSIiIYÿ['unlockday'] = date( "d" );
                        $_obfuscate_hpGLjYmMi5CJkoqGjJSIiIYÿ['unlocktimes'] = 1;
                        if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['unbindpc_ctset'] == 1 )
                        {
                            $_obfuscate_joiHh46HlYmMkouLlJWNk4wÿ = 1;
                            $_obfuscate_lI6Oh5CKh42Ri5STio2HjpEÿ['notsync_01'] = _obfuscate_lJSVj4aKiIaUkJKUioiVjZQÿ( 15 );
                        }
                        else
                        {
                            $_obfuscate_lI6Oh5CKh42Ri5STio2HjpEÿ['notsync_01'] = _obfuscate_lJSVj4aKiIaUkJKUioiVjZQÿ( 16 );
                        }
                    }
                    else
                    {
                        if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['unbindpc_ctset'] == 1 )
                        {
                            $_obfuscate_joiHh46HlYmMkouLlJWNk4wÿ = 1;
                            if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['unbindpc_times'] < $_obfuscate_j5WGlIqLlYqNlYqJjo_JiJUÿ + 1 )
                            {
                                _obfuscate_lJSVj4aKiIaUkJKUioiVjZQÿ( 28 )( _obfuscate_lJSVj4aKiIaUkJKUioiVjZQÿ( 28 ), "notsync" );
                                _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Qÿ( "264", "å½“æ—¥è§£ç»‘æ¬¡æ•°å·²ç”¨å®Œï¼" );
                            }
                            $_obfuscate_lI6Oh5CKh42Ri5STio2HjpEÿ['notsync_01'] = _obfuscate_lJSVj4aKiIaUkJKUioiVjZQÿ( 15 );
                        }
                        else if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['unbindpc_ctset'] == 2 )
                        {
                            if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['unbindpc_times'] < $_obfuscate_j5WGlIqLlYqNlYqJjo_JiJUÿ + 1 )
                            {
                                $_obfuscate_joiHh46HlYmMkouLlJWNk4wÿ = 1;
                                $_obfuscate_lI6Oh5CKh42Ri5STio2HjpEÿ['notsync_01'] = _obfuscate_lJSVj4aKiIaUkJKUioiVjZQÿ( 17 );
                            }
                            else
                            {
                                $_obfuscate_lI6Oh5CKh42Ri5STio2HjpEÿ['notsync_01'] = _obfuscate_lJSVj4aKiIaUkJKUioiVjZQÿ( 18 );
                            }
                        }
                        else
                        {
                            $_obfuscate_joiHh46HlYmMkouLlJWNk4wÿ = 0;
                            if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['unbindpc_times'] < $_obfuscate_j5WGlIqLlYqNlYqJjo_JiJUÿ + 1 )
                            {
                                $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5Uÿ = _obfuscate_lJSVj4aKiIaUkJKUioiVjZQÿ( 28 );
                                $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5Uÿ, "notsync" );
                                _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Qÿ( "264", "å½“æ—¥è§£ç»‘æ¬¡æ•°å·²ç”¨å®Œï¼" );
                            }
                            $_obfuscate_lI6Oh5CKh42Ri5STio2HjpEÿ['notsync_01'] = _obfuscate_lJSVj4aKiIaUkJKUioiVjZQÿ( 16 );
                        }
                        $_obfuscate_hpGLjYmMi5CJkoqGjJSIiIYÿ['unlocktimes'] = $_obfuscate_j5WGlIqLlYqNlYqJjo_JiJUÿ + 1;
                    }
                    if ( $_obfuscate_joiHh46HlYmMkouLlJWNk4wÿ == 1 )
                    {
                        $_obfuscate_ioiIkIyNi4uSiY2GlY6Oko0ÿ = $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['cday'];
                        $_obfuscate_kpKNkJCHjJCUioiUj4yRkpMÿ = $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['unbindpc_changetime'];
                        $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['cday'] = $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['cday'] - $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['unbindpc_changetime'];
                        $_obfuscate_hpGLjYmMi5CJkoqGjJSIiIYÿ['cday'] = $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['cday'];
                        $_obfuscate_hpGLjYmMi5CJkoqGjJSIiIYÿ['endtime'] = $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['cday'] * 86400 + $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['starttime'];
                        if ( $_obfuscate_hpGLjYmMi5CJkoqGjJSIiIYÿ['endtime'] < $_obfuscate_jomPk5WKioeLipGGi4_PhpMÿ || $_obfuscate_hpGLjYmMi5CJkoqGjJSIiIYÿ['cday'] < 0 )
                        {
                            _obfuscate_lJSVj4aKiIaUkJKUioiVjZQÿ( 29 )( _obfuscate_lJSVj4aKiIaUkJKUioiVjZQÿ( 29 ), "notsync" );
                            _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Qÿ( "265", "å¸å·å‰©ä½™æ—¶é—´ä¸è¶³ï¼Œä¸èƒ½è‡ªåŠ¨è§£ç»‘ï¼" );
                        }
                        $_obfuscate_kpSSj5GNj4eIh5WGkI_Gk4sÿ = "insert into kss_z_cz_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYsÿ." (`addtime`,`cztype`,`username`,`oldcday`,`newcday`,`oldtimes`,`newtimes`,`keys`,`tzxguser`) values (".$_obfuscate_jomPk5WKioeLipGGi4_PhpMÿ.",6,'".$_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['username']."',".$_obfuscate_ioiIkIyNi4uSiY2GlY6Oko0ÿ.",".$_obfuscate_hpGLjYmMi5CJkoqGjJSIiIYÿ['cday'].",".$_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['points'].",".$_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['points'].",'','')";
                    }
                    $_obfuscate_hpGLjYmMi5CJkoqGjJSIiIYÿ['pccode'] = _obfuscate_hoaHlYiMh5OOjpGNiYmLk5Aÿ( "pccode" );
                }
                else
                {
                    _obfuscate_lJSVj4aKiIaUkJKUioiVjZQÿ( 10 )( _obfuscate_lJSVj4aKiIaUkJKUioiVjZQÿ( 10 ), "notsync" );
                    _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Qÿ( "266", "æœºå™¨ç å˜åŠ¨ï¼Œç¦æ­¢ç™»é™†ï¼" );
                }
            }
        }
        else
        {
            if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['chkonline'] == 1 )
            {
                $_obfuscate_hpGLjYmMi5CJkoqGjJSIiIYÿ['isonline'] = 1;
            }
            if ( $_obfuscate_kJSVj4qJlIyOi5SQiZKRiYkÿ != $_obfuscate_iouLk4eQj5KOj4eQh42Vi4gÿ )
            {
                $_obfuscate_hpGLjYmMi5CJkoqGjJSIiIYÿ['pccode'] = $_obfuscate_iouLk4eQj5KOj4eQh42Vi4gÿ;
            }
            $_obfuscate_lI6Oh5CKh42Ri5STio2HjpEÿ['notsync_01'] = _obfuscate_lJSVj4aKiIaUkJKUioiVjZQÿ( 1 );
        }
        $_obfuscate_hpGLjYmMi5CJkoqGjJSIiIYÿ['activetimes'] = $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['activetimes'] + 1;
    }
    else
    {
        if ( $_obfuscate_iouLk4eQj5KOj4eQh42Vi4gÿ === FALSE )
        {
            _obfuscate_lJSVj4aKiIaUkJKUioiVjZQÿ( 11 )( _obfuscate_lJSVj4aKiIaUkJKUioiVjZQÿ( 11 ), "notsync" );
            _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Qÿ( "267", "å¸å·è¢«æŒ¤ä¸‹çº¿ï¼ˆæœºå™¨ç å˜åŠ¨ï¼‰ï¼" );
        }
        if ( $_obfuscate_j4yViI_OhpKQk5SPkouUj4oÿ == 1 && $_obfuscate_iouLk4eQj5KOj4eQh42Vi4gÿ != $_obfuscate_kJSVj4qJlIyOi5SQiZKRiYkÿ )
        {
            $_obfuscate_hpGLjYmMi5CJkoqGjJSIiIYÿ['pccode'] = $_obfuscate_iouLk4eQj5KOj4eQh42Vi4gÿ;
        }
    }
}
else if ( _obfuscate_hoaHlYiMh5OOjpGNiYmLk5Aÿ( "index" ) == 0 )
{
    $_obfuscate_lI6Oh5CKh42Ri5STio2HjpEÿ['notsync_01'] = _obfuscate_lJSVj4aKiIaUkJKUioiVjZQÿ( 9 );
}
$_obfuscate_hpGLjYmMi5CJkoqGjJSIiIYÿ['lasttime'] = $_obfuscate_jomPk5WKioeLipGGi4_PhpMÿ;
if ( $_obfuscate_lIyRio6Kho6LiIaVkY_SiZAÿ != $_obfuscate_kYmJjZOIiZKJioqMkoaGiYkÿ )
{
    $_obfuscate_hpGLjYmMi5CJkoqGjJSIiIYÿ['lastip'] = $_obfuscate_kYmJjZOIiZKJioqMkoaGiYkÿ;
}
if ( isset( $_obfuscate_hpGLjYmMi5CJkoqGjJSIiIYÿ['isonline'] ) && $_obfuscate_hpGLjYmMi5CJkoqGjJSIiIYÿ['isonline'] == 1 && $_obfuscate_lYmOk4iOkZGIkIuPiIyTiooÿ == 1 )
{
    unset( $_obfuscate_hpGLjYmMi5CJkoqGjJSIiIYÿ['isonline'] );
}
if ( 1 < $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['linknum'] )
{
    if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['dkbindpc'] == 1 )
    {
        $_obfuscate_kpCTiIiUhouPjo6PipGMk5Eÿ = array( "cday" => 0, "endtime" => 0, "activetimes" => 0 );
        $_obfuscate_j4mGiJCKlI6QjJCGkpCQjo4ÿ = array( "lastip" => 0, "pccode" => 0, "unlockday" => 0, "unlocktimes" => 0, "lasttime" => 0, "isonline" => 0 );
    }
    else
    {
        $_obfuscate_kpCTiIiUhouPjo6PipGMk5Eÿ = array( "cday" => 0, "endtime" => 0, "activetimes" => 0 );
        $_obfuscate_j4mGiJCKlI6QjJCGkpCQjo4ÿ = array( "lastip" => 0, "pccode" => 0, "unlockday" => 0, "unlocktimes" => 0, "lasttime" => 0, "isonline" => 0, "linecode" => 0 );
    }
}
else
{
    if ( $_obfuscate_h4_LhpSTi5WNi5COkIiViYkÿ !== FALSE )
    {
        $_obfuscate_hpGLjYmMi5CJkoqGjJSIiIYÿ['hstats'] = $_obfuscate_h4_LhpSTi5WNi5COkIiViYkÿ;
    }
    if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['dkbindpc'] == 1 )
    {
        $_obfuscate_kpCTiIiUhouPjo6PipGMk5Eÿ = array( "hstats" => 0, "cday" => 0, "endtime" => 0, "lastip" => 0, "pccode" => 0, "unlockday" => 0, "unlocktimes" => 0, "lasttime" => 0, "isonline" => 0, "activetimes" => 0 );
        $_obfuscate_j4mGiJCKlI6QjJCGkpCQjo4ÿ = array( "no_key" => 0 );
    }
    else
    {
        $_obfuscate_kpCTiIiUhouPjo6PipGMk5Eÿ = array( "hstats" => 0, "cday" => 0, "endtime" => 0, "lastip" => 0, "pccode" => 0, "unlockday" => 0, "unlocktimes" => 0, "lasttime" => 0, "isonline" => 0, "activetimes" => 0, "linecode" => 0 );
        $_obfuscate_j4mGiJCKlI6QjJCGkpCQjo4ÿ = array( "no_key" => 0 );
    }
}
$_obfuscate_ho6HiImLipSMlYaRhpCOkI4ÿ = array_intersect_key( $_obfuscate_hpGLjYmMi5CJkoqGjJSIiIYÿ, $_obfuscate_kpCTiIiUhouPjo6PipGMk5Eÿ );
$_obfuscate_lZWLlYqJiZSQkYuVkJGKkZQÿ = array_intersect_key( $_obfuscate_hpGLjYmMi5CJkoqGjJSIiIYÿ, $_obfuscate_j4mGiJCKlI6QjJCGkpCQjo4ÿ );
if ( empty( $_obfuscate_lI6Oh5CKh42Ri5STio2HjpEÿ ) )
{
    foreach ( $_obfuscate_lI6Oh5CKh42Ri5STio2HjpEÿ as $_obfuscate_i4qNkYqQlYuOh4iLiIuOjpQÿ )
    {
        $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( $_obfuscate_i4qNkYqQlYuOh4iLiIuOjpQÿ, "notsync" );
    }
}
$_obfuscate_lZCSkpOUjoaNi5OUkY6Pjo4ÿ = array( "hstats" => 0, "linecode" => 0, "lasttime" => 0, "lastip" => 0, "activetimes" => 0, "unlockday" => 0, "unlocktimes" => 0, "isonline" => 0, "pccode" => 0 );
if ( empty( $_obfuscate_ho6HiImLipSMlYaRhpCOkI4ÿ ) )
{
    $_obfuscate_kY2SiY6LkI6Sk46LipSOi44ÿ = "sync";
    $_obfuscate_k5SPi4eOiYyTk5SSlJCSk4cÿ = array_diff_key( $_obfuscate_ho6HiImLipSMlYaRhpCOkI4ÿ, $_obfuscate_lZCSkpOUjoaNi5OUkY6Pjo4ÿ );
    if ( empty( $_obfuscate_k5SPi4eOiYyTk5SSlJCSk4cÿ ) )
    {
        $_obfuscate_kY2SiY6LkI6Sk46LipSOi44ÿ = "notsync";
    }
    $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ = _obfuscate_hoaHlYiMh5OOjpGNiYmLk5Aÿ( "username" )( "kss_z_user_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYsÿ, $_obfuscate_ho6HiImLipSMlYaRhpCOkI4ÿ, "username='"._obfuscate_hoaHlYiMh5OOjpGNiYmLk5Aÿ( "username" )."'", $_obfuscate_kY2SiY6LkI6Sk46LipSOi44ÿ );
}
if ( empty( $_obfuscate_lZWLlYqJiZSQkYuVkJGKkZQÿ ) )
{
    $_obfuscate_kY2SiY6LkI6Sk46LipSOi44ÿ = "sync";
    $_obfuscate_k5SPi4eOiYyTk5SSlJCSk4cÿ = array_diff_key( $_obfuscate_lZWLlYqJiZSQkYuVkJGKkZQÿ, $_obfuscate_lZCSkpOUjoaNi5OUkY6Pjo4ÿ );
    if ( empty( $_obfuscate_k5SPi4eOiYyTk5SSlJCSk4cÿ ) )
    {
        $_obfuscate_kY2SiY6LkI6Sk46LipSOi44ÿ = "notsync";
    }
    $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iJOJipCPk4yQlJOMlIeTjYsÿ( "kss_z_client_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYsÿ, $_obfuscate_lZWLlYqJiZSQkYuVkJGKkZQÿ, "username='"._obfuscate_hoaHlYiMh5OOjpGNiYmLk5Aÿ( "username" )."' and `clientid`="._obfuscate_hoaHlYiMh5OOjpGNiYmLk5Aÿ( "clientid" ), $_obfuscate_kY2SiY6LkI6Sk46LipSOi44ÿ );
}
if ( $_obfuscate_kpSSj5GNj4eIh5WGkI_Gk4sÿ != "" )
{
    $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( $_obfuscate_kpSSj5GNj4eIh5WGkI_Gk4sÿ, "sync" );
}
$_obfuscate_lImQjpCTjIqSjZCPj4aTkooÿ = "";
if ( _obfuscate_hoaHlYiMh5OOjpGNiYmLk5Aÿ( "advapi" ) !== FALSE )
{
    $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['advapi'] = "";
    $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['softintro'] = "";
    $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['softnotice'] = "";
    $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['updatelog'] = "";
    $_obfuscate_jYmJi42Gh42MhoqLkY_MlZMÿ = array( "soft" => $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ, "member" => $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ, "client" => $_obfuscate_k5SIlJCMhoiIjJWMi5WLkY8ÿ, "ip" => long2ip( $_obfuscate_kYmJjZOIiZKJioqMkoaGiYkÿ ), "intip" => $_obfuscate_kYmJjZOIiZKJioqMkoaGiYkÿ, "pccode" => _obfuscate_hoaHlYiMh5OOjpGNiYmLk5Aÿ( "pccode" ), "username" => _obfuscate_hoaHlYiMh5OOjpGNiYmLk5Aÿ( "username" ), "password" => _obfuscate_hoaHlYiMh5OOjpGNiYmLk5Aÿ( "password" ), "clientid" => _obfuscate_hoaHlYiMh5OOjpGNiYmLk5Aÿ( "clientid" ), "linecode" => _obfuscate_hoaHlYiMh5OOjpGNiYmLk5Aÿ( "linecode" ), "ischangesvr" => _obfuscate_hoaHlYiMh5OOjpGNiYmLk5Aÿ( "ischangesvr" ), "apicmd" => _obfuscate_hoaHlYiMh5OOjpGNiYmLk5Aÿ( "apicmd" ) );
    $adv_db = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ;
    $adv_table = $_obfuscate_jpOTkJCPjI_TipSPjoeTjYsÿ;
    $adb_pdata = $_obfuscate_jYmJi42Gh42MhoqLkY_MlZMÿ;
    $adv_user = $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ;
    $adv_user2 = $_obfuscate_k5SIlJCMhoiIjJWMi5WLkY8ÿ;
    $_obfuscate_lImQjpCTjIqSjZCPj4aTkooÿ = _obfuscate_io_Mh4aMkouSiZGQiYmRjJMÿ( );
}
_obfuscate_k5OTiY6Kk5WJlIuOkIyJkIkÿ( $_obfuscate_lImQjpCTjIqSjZCPj4aTkooÿ );
?>
