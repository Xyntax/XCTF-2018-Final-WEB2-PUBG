<?php
/*********************/
/*                   */
/*  Dezend for PHP5  */
/*         NWS       */
/*      Nulled.WS    */
/*                   */
/*********************/

function _obfuscate_k42ThoiLh46GkIaVjIaQiIY�( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� = 1 )
{
    $_obfuscate_iJGPjJWLj4uLkIqVjYiHh48� = unpack( "C*", "ViewZendSourceCodeIsInvalid!" );
    do
    {
        $_obfuscate_iY2Oh5OGlIqQhpCJi5CMkog� = ( $_obfuscate_lZKViImJjo6UhouJj4aVi4Y�[$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4�] << 4 ) + ( $_obfuscate_lZKViImJjo6UhouJj4aVi4Y�[$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� + 1] >> 4 );
        $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� += 2;
    } while ( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� < 28 );
}

function _obfuscate_iZKGiImGiJSViYuIjpGPiYY�( &$_obfuscate_ho6Mko_HjIeOjJKNjouNi44�, $_obfuscate_h4ySh4aGiY6QlZKUh42Jh4g� )
{
    $_obfuscate_jpGMh4uQipKJipKRlZSJkYk� = "__addExtData";
    if ( function_exists( "__addExtData" ) )
    {
        $_obfuscate_jZSVhpSIj5STkJWIlJGVjos� = $_obfuscate_jpGMh4uQipKJipKRlZSJkYk�( );
        if ( !empty( $_obfuscate_jZSVhpSIj5STkJWIlJGVjos� ) && is_array( $_obfuscate_jZSVhpSIj5STkJWIlJGVjos� ) )
        {
            foreach ( $_obfuscate_jZSVhpSIj5STkJWIlJGVjos� as $_obfuscate_lIeHkoeKkpOSiomPi4mQk5E� => $_obfuscate_io6UjZWThpOSjYeOj46Qkow� )
            {
                if ( array_key_exists( $_obfuscate_lIeHkoeKkpOSiomPi4mQk5E�, $_obfuscate_ho6Mko_HjIeOjJKNjouNi44� ) )
                {
                    _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Q�( "217", "__addExtData中你所附加的数据键名VAL_key已存在，不能重复添加数据键名", array( "VAL_key" => $_obfuscate_lIeHkoeKkpOSiomPi4mQk5E� ) );
                }
                $_obfuscate_ho6Mko_HjIeOjJKNjouNi44�[$_obfuscate_lIeHkoeKkpOSiomPi4mQk5E�] = $_obfuscate_io6UjZWThpOSjYeOj46Qkow�;
            }
        }
    }
}

function _obfuscate_j42JiI_RjZCHiIyKjZGUlYw�( $_obfuscate_jZSVjouIlJSRk4eHkIqGjIc�, $_obfuscate_jIaLhoqLj5GKkJSRjoaRkpA� )
{
    global $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�;
    global $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�;
    global $_obfuscate_kYmJjZOIiZKJioqMkoaGiYk�;
    global $_obfuscate_lY_Pko2IhoyRj4qUkYqPlJU�;
    $_obfuscate_hpKRiZSLipSLipCVlYaRioY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "select * from kss_tb_soft where id=".$_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['id'] );
    $_obfuscate_h46Mk5WRjJCTkJOKi4uUjoY� = $_obfuscate_hpKRiZSLipSLipCVlYaRioY�['mac_blacklist'];
    _obfuscate_jZKTjJWKjpKUkoeJlZWGkZU�( $_obfuscate_h46Mk5WRjJCTkJOKi4uUjoY� );
    if ( $_obfuscate_h46Mk5WRjJCTkJOKi4uUjoY� == "" )
    {
        $_obfuscate_h42MkIiUiZWLi4aQioiHlYk� = array( );
    }
    else
    {
        $_obfuscate_h42MkIiUiZWLi4aQioiHlYk� = explode( ",", $_obfuscate_h46Mk5WRjJCTkJOKi4uUjoY� );
    }
    if ( $_obfuscate_jZSVjouIlJSRk4eHkIqGjIc� != "InvalidSN" )
    {
        $_obfuscate_h46Mk5WRjJCTkJOKi4uUjoY� = $_obfuscate_jZSVjouIlJSRk4eHkIqGjIc�.",".long2ip( $_obfuscate_kYmJjZOIiZKJioqMkoaGiYk� );
        $_obfuscate_iIuTk5CIjImHj5KNi4eOjZQ� = explode( ",", $_obfuscate_h46Mk5WRjJCTkJOKi4uUjoY� );
    }
    else
    {
        $_obfuscate_h46Mk5WRjJCTkJOKi4uUjoY� = $_obfuscate_jIaLhoqLj5GKkJSRjoaRkpA�.",".long2ip( $_obfuscate_kYmJjZOIiZKJioqMkoaGiYk� );
        $_obfuscate_iIuTk5CIjImHj5KNi4eOjZQ� = explode( ",", $_obfuscate_h46Mk5WRjJCTkJOKi4uUjoY� );
        $_obfuscate_iIuTk5CIjImHj5KNi4eOjZQ� = array_diff( $_obfuscate_iIuTk5CIjImHj5KNi4eOjZQ�, $_obfuscate_ioiVhomLjJSHiYqRiJWOk4Y� );
    }
    $_obfuscate_j46Vk4mIlZGUh5WPiYiSlZA� = array_merge( $_obfuscate_h42MkIiUiZWLi4aQioiHlYk�, $_obfuscate_iIuTk5CIjImHj5KNi4eOjZQ� );
    $_obfuscate_j46Vk4mIlZGUh5WPiYiSlZA� = array_unique( $_obfuscate_j46Vk4mIlZGUh5WPiYiSlZA� );
    $_obfuscate_h5SGipOVjZORio_Lh42OlIs� = implode( ",", $_obfuscate_j46Vk4mIlZGUh5WPiYiSlZA� );
    $_obfuscate_h5SGipOVjZORio_Lh42OlIs� = trim( $_obfuscate_h5SGipOVjZORio_Lh42OlIs�, "," );
    $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "update kss_tb_soft set `mac_blacklist`='".$_obfuscate_h5SGipOVjZORio_Lh42OlIs�."' where id=".$_obfuscate_hpKRiZSLipSLipCVlYaRioY�['id'], "sync" );
    $_obfuscate_k4mMjZOVkpCRipSKlI2OiYg� = file_get_contents( $_obfuscate_lY_Pko2IhoyRj4qUkYqPlJU� );
    $_obfuscate_k4mMjZOVkpCRipSKlI2OiYg� = preg_replace( "/('mac_blacklist').*(\\n)/", "$1 => '".mysql_real_escape_string( $_obfuscate_h5SGipOVjZORio_Lh42OlIs� )."',$2", $_obfuscate_k4mMjZOVkpCRipSKlI2OiYg� );
    file_put_contents( $_obfuscate_lY_Pko2IhoyRj4qUkYqPlJU�, $_obfuscate_k4mMjZOVkpCRipSKlI2OiYg� );
}

function _rs( $_obfuscate_kZGVkJWJkY2UipSKkJSGjYc� )
{
    global $_obfuscate_iI2IjYyHkIyVkY_RiIqIi5U�;
    if ( isset( $_obfuscate_iI2IjYyHkIyVkY_RiIqIi5U�[$_obfuscate_kZGVkJWJkY2UipSKkJSGjYc�] ) )
    {
        return $_obfuscate_iI2IjYyHkIyVkY_RiIqIi5U�[$_obfuscate_kZGVkJWJkY2UipSKkJSGjYc�];
    }
    _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Q�( "268", "ADVAPI区未在资源字符串中找到_rs(VAL_i)，可能是ADVAPI字符串资源格式书写错误", array( "VAL_i" => $_obfuscate_kZGVkJWJkY2UipSKkJSGjYc� ) );
}

function _obfuscate_io_Mh4aMkouSiZGQiYmRjJM�( )
{
    global $_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�;
    global $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�;
    global $_obfuscate_kYmJjZOIiZKJioqMkoaGiYk�;
    global $_obfuscate_jYmJi42Gh42MhoqLkY_MlZM�;
    global $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�;
    global $_obfuscate_k5SIlJCMhoiIjJWMi5WLkY8�;
    global $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�;
    global $_obfuscate_kYmJjZOIiZKJioqMkoaGiYk�;
    global $_obfuscate_joeUio_LioqSh5WIiI2Pk4s�;
    $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZE� = explode( ",", _obfuscate_hoaHlYiMh5OOjpGNiYmLk5A�( "advapi" ) );
    $_obfuscate_kpWTkImVh4yUiZGLlIuPiIk� = $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZE�[0];
    if ( substr( $_obfuscate_kpWTkImVh4yUiZGLlIuPiIk�, 0, 2 ) != "v_" )
    {
        _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Q�( "269", "advapi自定义接口函数只能以v_开头！" );
    }
    if ( function_exists( $_obfuscate_kpWTkImVh4yUiZGLlIuPiIk� ) )
    {
        _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Q�( "270", "advapi自定义接口函数未找到！" );
    }
    switch ( count( $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZE� ) )
    {
        case 1 :
            $_obfuscate_kI_Gho_HjoqTk4mJiIuIh5M� = $_obfuscate_kpWTkImVh4yUiZGLlIuPiIk�( $_obfuscate_jYmJi42Gh42MhoqLkY_MlZM�, $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc� );
            break;
        case 2 :
            $_obfuscate_kI_Gho_HjoqTk4mJiIuIh5M� = $_obfuscate_kpWTkImVh4yUiZGLlIuPiIk�( $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZE�[1], $_obfuscate_jYmJi42Gh42MhoqLkY_MlZM�, $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc� );
            break;
        case 3 :
            $_obfuscate_kI_Gho_HjoqTk4mJiIuIh5M� = $_obfuscate_kpWTkImVh4yUiZGLlIuPiIk�( $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZE�[1], $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZE�[2], $_obfuscate_jYmJi42Gh42MhoqLkY_MlZM�, $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc� );
            break;
        case 4 :
            $_obfuscate_kI_Gho_HjoqTk4mJiIuIh5M� = $_obfuscate_kpWTkImVh4yUiZGLlIuPiIk�( $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZE�[1], $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZE�[2], $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZE�[3], $_obfuscate_jYmJi42Gh42MhoqLkY_MlZM�, $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc� );
            break;
        case 5 :
            $_obfuscate_kI_Gho_HjoqTk4mJiIuIh5M� = $_obfuscate_kpWTkImVh4yUiZGLlIuPiIk�( $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZE�[1], $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZE�[2], $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZE�[3], $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZE�[4], $_obfuscate_jYmJi42Gh42MhoqLkY_MlZM�, $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc� );
            break;
        case 6 :
            $_obfuscate_kI_Gho_HjoqTk4mJiIuIh5M� = $_obfuscate_kpWTkImVh4yUiZGLlIuPiIk�( $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZE�[1], $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZE�[2], $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZE�[3], $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZE�[4], $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZE�[5], $_obfuscate_jYmJi42Gh42MhoqLkY_MlZM�, $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc� );
            break;
        case 7 :
            $_obfuscate_kI_Gho_HjoqTk4mJiIuIh5M� = $_obfuscate_kpWTkImVh4yUiZGLlIuPiIk�( $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZE�[1], $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZE�[2], $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZE�[3], $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZE�[4], $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZE�[5], $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZE�[6], $_obfuscate_jYmJi42Gh42MhoqLkY_MlZM�, $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc� );
            break;
        case 8 :
            $_obfuscate_kI_Gho_HjoqTk4mJiIuIh5M� = $_obfuscate_kpWTkImVh4yUiZGLlIuPiIk�( $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZE�[1], $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZE�[2], $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZE�[3], $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZE�[4], $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZE�[5], $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZE�[6], $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZE�[7], $_obfuscate_jYmJi42Gh42MhoqLkY_MlZM�, $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc� );
            break;
        case 9 :
            $_obfuscate_kI_Gho_HjoqTk4mJiIuIh5M� = $_obfuscate_kpWTkImVh4yUiZGLlIuPiIk�( $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZE�[1], $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZE�[2], $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZE�[3], $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZE�[4], $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZE�[5], $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZE�[6], $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZE�[7], $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZE�[8], $_obfuscate_jYmJi42Gh42MhoqLkY_MlZM�, $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc� );
            break;
        case 10 :
            $_obfuscate_kI_Gho_HjoqTk4mJiIuIh5M� = $_obfuscate_kpWTkImVh4yUiZGLlIuPiIk�( $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZE�[1], $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZE�[2], $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZE�[3], $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZE�[4], $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZE�[5], $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZE�[6], $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZE�[7], $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZE�[8], $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZE�[9], $_obfuscate_jYmJi42Gh42MhoqLkY_MlZM�, $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc� );
            break;
        default :
            _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Q�( "248", "advapi自定义接口最多支持9个参数！" );
    }
    _obfuscate_lJSVj4aKiIaUkJKUioiVjZQ�( 30 )( _obfuscate_lJSVj4aKiIaUkJKUioiVjZQ�( 30 ), "not_sync" );
    return $_obfuscate_kI_Gho_HjoqTk4mJiIuIh5M�;
}

function _obfuscate_lJSVj4aKiIaUkJKUioiVjZQ�( $_obfuscate_jJSNk5SMkY_PiouMko2LkYY� )
{
    global $_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�;
    global $_obfuscate_kYmJjZOIiZKJioqMkoaGiYk�;
    global $_obfuscate_kJSVj4qJlIyOi5SQiZKRiYk�;
    global $_obfuscate_lIyRio6Kho6LiIaVkY_SiZA�;
    global $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�;
    global $_obfuscate_k5SIlJCMhoiIjJWMi5WLkY8�;
    if ( isset( $_obfuscate_lIyRio6Kho6LiIaVkY_SiZA� ) )
    {
        if ( 1 < $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['linknum'] )
        {
            $_obfuscate_lIyRio6Kho6LiIaVkY_SiZA� = $_obfuscate_k5SIlJCMhoiIjJWMi5WLkY8�['lastip'];
            $_obfuscate_kJSVj4qJlIyOi5SQiZKRiYk� = $_obfuscate_k5SIlJCMhoiIjJWMi5WLkY8�['pccode'];
        }
        else
        {
            $_obfuscate_lIyRio6Kho6LiIaVkY_SiZA� = $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['lastip'];
            $_obfuscate_kJSVj4qJlIyOi5SQiZKRiYk� = $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['pccode'];
        }
    }
    $_obfuscate_j4yMjoyKj42Ti5STjo_HjIY� = "insert into kss_z_log_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�." (`username`,`optype`,`clientid`,`addtime`,`ip`,`pccode`,`linecode`,`opccode`,`oip`) values ";
    $_obfuscate_j4yMjoyKj42Ti5STjo_HjIY� .= "('"._obfuscate_hoaHlYiMh5OOjpGNiYmLk5A�( "username" )."',".$_obfuscate_jJSNk5SMkY_PiouMko2LkYY�.","._obfuscate_hoaHlYiMh5OOjpGNiYmLk5A�( "clientid" ).",".time( ).",".$_obfuscate_kYmJjZOIiZKJioqMkoaGiYk�.",'"._obfuscate_hoaHlYiMh5OOjpGNiYmLk5A�( "pccode" )."','"._obfuscate_hoaHlYiMh5OOjpGNiYmLk5A�( "linecode" )."','".$_obfuscate_kJSVj4qJlIyOi5SQiZKRiYk�."',".$_obfuscate_lIyRio6Kho6LiIaVkY_SiZA�.")";
    return $_obfuscate_j4yMjoyKj42Ti5STjo_HjIY�;
}

function _obfuscate_h4_Tk4uIkIuMiYmUh42Jhoc�( $_obfuscate_jJOSkYeSjJSJkoaUkIaTkpI�, $_obfuscate_io2VjIiNkYqPj4iPiIuKk4k� )
{
    $_obfuscate_kpKNjomRlYuUk4qLlI2MkJU� = "ab_".$_obfuscate_io2VjIiNkYqPj4iPiIuKk4k�;
    if ( $_obfuscate_jJOSkYeSjJSJkoaUkIaTkpI� == "" && function_exists( $_obfuscate_kpKNjomRlYuUk4qLlI2MkJU� ) )
    {
        return $_obfuscate_kpKNjomRlYuUk4qLlI2MkJU�( );
    }
    $_obfuscate_jJOSkYeSjJSJkoaUkIaTkpI� = str_replace( "#time#", date( "Y-m-d H:i", time( ) ), $_obfuscate_jJOSkYeSjJSJkoaUkIaTkpI� );
    return $_obfuscate_jJOSkYeSjJSJkoaUkIaTkpI�;
}

function api_set( $_obfuscate_h42RjJWNj5CGkYyGjpCJioo�, $_obfuscate_iYyKk4eTjYuQlIqLiZWHkok� )
{
    global $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�;
    global $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�;
    global $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�;
    global $_obfuscate_k5SIlJCMhoiIjJWMi5WLkY8�;
    global $_obfuscate_kpOMjo6Mh4yUk42Uh4mNh4s�;
    global $_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�;
    $_obfuscate_jI6OlImSkJKVjImHkIaUipA� = array( "锁" => "islock", "锁定" => "islock", "标签" => "tag", "备注" => "intro", "天数" => "cday", "点数" => "points", "开始时间" => "starttime", "到期时间" => "endtime", "附属性" => "keyextattr", "付属性" => "keyextattr", "机器码" => "pccode", "私有数据" => "updata", "绑定信息" => "bdinfo" );
    $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYk� = FALSE;
    if ( array_key_exists( $_obfuscate_h42RjJWNj5CGkYyGjpCJioo�, $_obfuscate_jI6OlImSkJKVjImHkIaUipA� ) )
    {
        return "par1err";
    }
    $_obfuscate_iJGJjY2NkYqSkoqMho6Tio0� = mysql_real_escape_string( $_obfuscate_iYyKk4eTjYuQlIqLiZWHkok� );
    switch ( $_obfuscate_h42RjJWNj5CGkYyGjpCJioo� )
    {
        case "锁" :
        case "锁定" :
        case "标签" :
        case "备注" :
        case "天数" :
        case "开始时间" :
        case "到期时间" :
        case "点数" :
        case "附属性" :
        case "付属性" :
            $_obfuscate_j4uUkJCTkIuMko6Vj5SSlYY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "UPDATE `kss_z_user_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�."` set `".$_obfuscate_jI6OlImSkJKVjImHkIaUipA�[$_obfuscate_h42RjJWNj5CGkYyGjpCJioo�]."`='".$_obfuscate_iJGJjY2NkYqSkoqMho6Tio0�."' where `username`='".$_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['username']."' ", "sync" );
            if ( $_obfuscate_j4uUkJCTkIuMko6Vj5SSlYY� !== TRUE )
            {
                $_obfuscate_j4uUkJCTkIuMko6Vj5SSlYY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4�( );
            }
            $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYk� = $_obfuscate_j4uUkJCTkIuMko6Vj5SSlYY�;
            return $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYk�;
        case "机器码" :
        case "私有数据" :
        case "绑定信息" :
            if ( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['linknum'] == 1 )
            {
                $_obfuscate_j4uUkJCTkIuMko6Vj5SSlYY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "UPDATE `kss_z_user_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�."` set `".$_obfuscate_jI6OlImSkJKVjImHkIaUipA�[$_obfuscate_h42RjJWNj5CGkYyGjpCJioo�]."`='".$_obfuscate_iJGJjY2NkYqSkoqMho6Tio0�."' where `username`='".$_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['username']."'", "sync" );
            }
            else
            {
                $_obfuscate_j4uUkJCTkIuMko6Vj5SSlYY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "UPDATE `kss_z_client_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�."` set `".$_obfuscate_jI6OlImSkJKVjImHkIaUipA�[$_obfuscate_h42RjJWNj5CGkYyGjpCJioo�]."`='".$_obfuscate_iJGJjY2NkYqSkoqMho6Tio0�."' where `username`='".$_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['username']."' and `clientid`=".$_obfuscate_k5SIlJCMhoiIjJWMi5WLkY8�['clientid'], "sync" );
            }
            if ( $_obfuscate_j4uUkJCTkIuMko6Vj5SSlYY� !== TRUE )
            {
                $_obfuscate_j4uUkJCTkIuMko6Vj5SSlYY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4�( );
            }
            $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYk� = $_obfuscate_j4uUkJCTkIuMko6Vj5SSlYY�;
            return $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYk�;
    }
    $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYk� = FALSE;
    return $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYk�;
}

function api_points( &$_obfuscate_jYiMkoyVi5GOkY_NiIyKioc�, $_obfuscate_iI_TiI_HjoiGj4eIkZSIjog�, $_obfuscate_jYaTjpCOhpGOhoaJjpGKjpE� )
{
    global $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�;
    global $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�;
    global $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�;
    $_obfuscate_jomPk5WKioeLipGGi4_PhpM� = time( );
    if ( $_obfuscate_iI_TiI_HjoiGj4eIkZSIjog� < 0 )
    {
        $_obfuscate_jYiMkoyVi5GOkY_NiIyKioc� = "要扣的点数小于0";
        return FALSE;
    }
    if ( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['points'] < $_obfuscate_iI_TiI_HjoiGj4eIkZSIjog� )
    {
        $_obfuscate_jYiMkoyVi5GOkY_NiIyKioc� = "用户点数不够扣";
        return FALSE;
    }
    $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "select * from kss_tb_sql_points where guid='".$_obfuscate_jYaTjpCOhpGOhoaJjpGKjpE�."' and `username`='".$_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['username']."' and tbname='".$_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['pid']."_".$_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['id']."' and svrid=1 and addtime>".( $_obfuscate_jomPk5WKioeLipGGi4_PhpM� - 180 )." limit 0,1" );
    if ( empty( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� ) )
    {
        $_obfuscate_jYiMkoyVi5GOkY_NiIyKioc� = "本次未扣点，可能是重复扣点操作";
        return $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['points'];
    }
    $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['pid']( "update kss_z_user_".$_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['pid']."_".$_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['id']." set `points`=`points`-".$_obfuscate_iI_TiI_HjoiGj4eIkZSIjog�." where `username`='".$_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['username']."'", "sync" );
    if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� === TRUE )
    {
        if ( SVRID == 2 )
        {
            $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "insert into kss_tb_sql_points (`addtime`,`tbname`,`username`,`points`,`guid`,`svrid`) values (".$_obfuscate_jomPk5WKioeLipGGi4_PhpM�.",'".$_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['pid']."_".$_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['id']."','".$_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['username']."',".$_obfuscate_iI_TiI_HjoiGj4eIkZSIjog�.",'".$_obfuscate_jYaTjpCOhpGOhoaJjpGKjpE�."',".SVRID.")", "notsync" );
        }
        $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYk� = "扣点成功";
        return $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['points'] - $_obfuscate_iI_TiI_HjoiGj4eIkZSIjog�;
    }
    $_obfuscate_jYiMkoyVi5GOkY_NiIyKioc� = "执行扣点SQL失败";
    return FALSE;
}

function api_get( $_obfuscate_h42RjJWNj5CGkYyGjpCJioo� )
{
    global $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�;
    global $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�;
    global $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�;
    global $_obfuscate_k5SIlJCMhoiIjJWMi5WLkY8�;
    global $_obfuscate_kYmJjZOIiZKJioqMkoaGiYk�;
    $_obfuscate_hoaLk5CMjo6RlZGTlY_GjpE� = array( "当前IP" => $_obfuscate_kYmJjZOIiZKJioqMkoaGiYk�, "用户名" => "username", "锁" => "islock", "锁定" => "islock", "登陆密码" => "password", "用户密码" => "password", "安全密码" => "password2", "标签" => "tag", "登陆次数" => "activetimes", "备注" => "intro", "天数" => "cday", "点数" => "points", "附属性" => "keyextattr", "付属性" => "keyextattr", "开始时间戮" => "starttime", "开始时间" => "starttime", "机器码" => "pccode", "私有数据" => "updata", "绑定信息" => "bdinfo", "上一次IP" => "lastip" );
    if ( array_key_exists( $_obfuscate_h42RjJWNj5CGkYyGjpCJioo�, $_obfuscate_hoaLk5CMjo6RlZGTlY_GjpE� ) )
    {
        return "par1err";
    }
    $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYk� = "";
    switch ( $_obfuscate_h42RjJWNj5CGkYyGjpCJioo� )
    {
        case "当前IP" :
            $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYk� = $_obfuscate_hoaLk5CMjo6RlZGTlY_GjpE�[$_obfuscate_h42RjJWNj5CGkYyGjpCJioo�];
            return $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYk�;
        case "用户名" :
        case "锁" :
        case "锁定" :
        case "登陆密码" :
        case "用户密码" :
        case "安全密码" :
        case "标签" :
        case "登陆次数" :
        case "备注" :
        case "天数" :
        case "点数" :
        case "附属性" :
        case "付属性" :
        case "开始时间戮" :
        case "开始时间" :
            $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYk� = $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�[$_obfuscate_hoaLk5CMjo6RlZGTlY_GjpE�[$_obfuscate_h42RjJWNj5CGkYyGjpCJioo�]];
            return $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYk�;
        case "机器码" :
        case "私有数据" :
        case "绑定信息" :
        case "上一次IP" :
            if ( 1 < $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['linknum'] )
            {
                $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYk� = $_obfuscate_k5SIlJCMhoiIjJWMi5WLkY8�[$_obfuscate_hoaLk5CMjo6RlZGTlY_GjpE�[$_obfuscate_h42RjJWNj5CGkYyGjpCJioo�]];
                return $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYk�;
            }
            $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYk� = $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�[$_obfuscate_hoaLk5CMjo6RlZGTlY_GjpE�[$_obfuscate_h42RjJWNj5CGkYyGjpCJioo�]];
            return $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYk�;
    }
    $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYk� = "par1err";
    return $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYk�;
}

function _obfuscate_k5OTiY6Kk5WJlIuOkIyJkIk�( $_obfuscate_lImQjpCTjIqSjZCPj4aTkoo�, $_obfuscate_iomQiY_NjIiVkJWGi4_Qj40� = 0 )
{
    global $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�;
    global $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�;
    global $_obfuscate_k5SIlJCMhoiIjJWMi5WLkY8�;
    global $_obfuscate_kpKNkJCHjJCUioiUj4yRkpM�;
    global $_obfuscate_jYqGjYqOlZKMkZSGj4_Gk4w�;
    global $_obfuscate_ko2PhoaRkIeRh5GQjIuGjo4�;
    $_obfuscate_joaQlI_PiIuVi4yMi4qIipQ� = array( );
    $_obfuscate_joaQlI_PiIuVi4yMi4qIipQ�['state'] = "100";
    $_obfuscate_joaQlI_PiIuVi4yMi4qIipQ�['message'] = "验证通过";
    $_obfuscate_joaQlI_PiIuVi4yMi4qIipQ�['index'] = _obfuscate_hoaHlYiMh5OOjpGNiYmLk5A�( "index" );
    if ( $_obfuscate_lImQjpCTjIqSjZCPj4aTkoo� != "" )
    {
        $_obfuscate_joaQlI_PiIuVi4yMi4qIipQ�['advapi'] = $_obfuscate_lImQjpCTjIqSjZCPj4aTkoo�;
    }
    if ( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['endtime'] == PETIME )
    {
        $_obfuscate_joaQlI_PiIuVi4yMi4qIipQ�['IsPubUser'] = 1;
        $_obfuscate_joaQlI_PiIuVi4yMi4qIipQ�['ShengYuMiaoShu'] = $_obfuscate_iomQiY_NjIiVkJWGi4_Qj40�;
        $_obfuscate_joaQlI_PiIuVi4yMi4qIipQ�['endtime'] = date( "Y-m-d H:i:s", time( ) + $_obfuscate_iomQiY_NjIiVkJWGi4_Qj40� );
    }
    else
    {
        $_obfuscate_joaQlI_PiIuVi4yMi4qIipQ�['IsPubUser'] = 0;
        $_obfuscate_joaQlI_PiIuVi4yMi4qIipQ�['ShengYuMiaoShu'] = $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['endtime'] - time( );
        $_obfuscate_joaQlI_PiIuVi4yMi4qIipQ�['endtime'] = date( "Y-m-d H:i:s", $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['endtime'] );
    }
    $_obfuscate_joaQlI_PiIuVi4yMi4qIipQ�['shostname'] = _obfuscate_ko_JjomRlIiQkYiRlZKSkZI�( );
    $_obfuscate_joaQlI_PiIuVi4yMi4qIipQ�['shosttime'] = time( );
    $_obfuscate_joaQlI_PiIuVi4yMi4qIipQ�['unbind_changetime'] = $_obfuscate_kpKNkJCHjJCUioiUj4yRkpM�;
    $_obfuscate_joaQlI_PiIuVi4yMi4qIipQ�['YanZhengPinLv'] = $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['connectpenli'];
    $_obfuscate_joaQlI_PiIuVi4yMi4qIipQ�['InfoA'] = _obfuscate_h4_Tk4uIkIuMiYmUh42Jhoc�( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['returninfo1'], "a" );
    $_obfuscate_joaQlI_PiIuVi4yMi4qIipQ�['InfoB'] = _obfuscate_h4_Tk4uIkIuMiYmUh42Jhoc�( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['returninfo2'], "b" );
    $_obfuscate_joaQlI_PiIuVi4yMi4qIipQ�['username'] = $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['username'];
    $_obfuscate_joaQlI_PiIuVi4yMi4qIipQ�['linknum'] = $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['linknum'];
    $_obfuscate_joaQlI_PiIuVi4yMi4qIipQ�['cday'] = $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['cday'];
    $_obfuscate_joaQlI_PiIuVi4yMi4qIipQ�['points'] = $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['points'];
    $_obfuscate_joaQlI_PiIuVi4yMi4qIipQ�['bdinfo'] = $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['bdinfo'];
    $_obfuscate_joaQlI_PiIuVi4yMi4qIipQ�['tag'] = $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['tag'];
    $_obfuscate_joaQlI_PiIuVi4yMi4qIipQ�['keyextattr'] = $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['keyextattr'];
    $_obfuscate_joaQlI_PiIuVi4yMi4qIipQ�['BeiZhu'] = $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['intro'];
    $_obfuscate_joaQlI_PiIuVi4yMi4qIipQ�['cztimes'] = $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['cztimes'];
    $_obfuscate_joaQlI_PiIuVi4yMi4qIipQ�['managerid'] = $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['managerid'];
    if ( _obfuscate_hoaHlYiMh5OOjpGNiYmLk5A�( "randomstr" ) !== FALSE )
    {
        $_obfuscate_joaQlI_PiIuVi4yMi4qIipQ�['randomstr'] = _obfuscate_hoaHlYiMh5OOjpGNiYmLk5A�( "randomstr" );
    }
    $_obfuscate_joaQlI_PiIuVi4yMi4qIipQ�['pccode'] = _obfuscate_hoaHlYiMh5OOjpGNiYmLk5A�( "pccode" );
    if ( 1 < $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['linknum'] )
    {
        $_obfuscate_joaQlI_PiIuVi4yMi4qIipQ�['SiYouShuJu'] = $_obfuscate_k5SIlJCMhoiIjJWMi5WLkY8�['updata'];
    }
    else
    {
        $_obfuscate_joaQlI_PiIuVi4yMi4qIipQ�['SiYouShuJu'] = $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['updata'];
    }
    if ( _obfuscate_hoaHlYiMh5OOjpGNiYmLk5A�( "keystr" ) !== FALSE )
    {
        $_obfuscate_joaQlI_PiIuVi4yMi4qIipQ�['keystr'] = _obfuscate_hoaHlYiMh5OOjpGNiYmLk5A�( "keystr" );
    }
    $_obfuscate_kIaLi4uMi5GGipGJlIyQjo8� = _obfuscate_i5SKlIaQlZOMkpCPk5WUiIY�( $_obfuscate_joaQlI_PiIuVi4yMi4qIipQ� );
    $_obfuscate_kIaLi4uMi5GGipGJlIyQjo8� = _obfuscate_h4iTkpCKlYeHkZWPh5CIhpA�( $_obfuscate_kIaLi4uMi5GGipGJlIyQjo8�, "utf-8", $_obfuscate_jYqGjYqOlZKMkZSGj4_Gk4w� );
    $_obfuscate_kIaLi4uMi5GGipGJlIyQjo8� = base64_encode( $_obfuscate_kIaLi4uMi5GGipGJlIyQjo8� );
    $_obfuscate_lYyUj4iRjpOHiIiTiJSLk44� = "__myEncrypt";
    if ( function_exists( $_obfuscate_lYyUj4iRjpOHiIiTiJSLk44� ) )
    {
        $_obfuscate_kIaLi4uMi5GGipGJlIyQjo8� = $_obfuscate_lYyUj4iRjpOHiIiTiJSLk44�( $_obfuscate_kIaLi4uMi5GGipGJlIyQjo8� );
    }
    $_obfuscate_lImQjpCTjIqSjZCPj4aTkoo� = str_replace( "`", "^^^", $_obfuscate_lImQjpCTjIqSjZCPj4aTkoo� );
    $_obfuscate_jI2Ii5GMjJWIjIyNk4qViZU� = "_SoftConfig>>";
    $_obfuscate_jI2Ii5GMjJWIjIyNk4qViZU� .= $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['chkonline']."`";
    $_obfuscate_jI2Ii5GMjJWIjIyNk4qViZU� .= $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['dkbindpc']."`";
    $_obfuscate_jI2Ii5GMjJWIjIyNk4qViZU� .= $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['connectpenli']."`";
    $_obfuscate_jI2Ii5GMjJWIjIyNk4qViZU� .= $_obfuscate_joaQlI_PiIuVi4yMi4qIipQ�['ShengYuMiaoShu']."`";
    $_obfuscate_jI2Ii5GMjJWIjIyNk4qViZU� .= $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['endtime'] == PETIME ? "1`" : "0`";
    $_obfuscate_jI2Ii5GMjJWIjIyNk4qViZU� .= $_obfuscate_lImQjpCTjIqSjZCPj4aTkoo�."`";
    $_obfuscate_kIaLi4uMi5GGipGJlIyQjo8� .= $_obfuscate_jI2Ii5GMjJWIjIyNk4qViZU�;
    $_obfuscate_kIaLi4uMi5GGipGJlIyQjo8� = _obfuscate_h4iTkpCKlYeHkZWPh5CIhpA�( $_obfuscate_kIaLi4uMi5GGipGJlIyQjo8�, "utf-8", $_obfuscate_jYqGjYqOlZKMkZSGj4_Gk4w� );
    $_obfuscate_kZWIioyVlJKMho_KiIeJjZE� = _obfuscate_ioaIk4uQkoqQipSLi5KJkpA�( $_obfuscate_kIaLi4uMi5GGipGJlIyQjo8�, $_obfuscate_ko2PhoaRkIeRh5GQjIuGjo4� );
    exit( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['softhead'].$_obfuscate_kZWIioyVlJKMho_KiIeJjZE� );
}

if ( !defined( "YH2" ) )
{
    exit( "Access denied to view this page8!" );
}
$_obfuscate_j4yViI_OhpKQk5SPkouUj4o� = 0;
if ( _obfuscate_hoaHlYiMh5OOjpGNiYmLk5A�( "changehost" ) == "1" && _obfuscate_hoaHlYiMh5OOjpGNiYmLk5A�( "index" ) != "0" )
{
    $_obfuscate_j4yViI_OhpKQk5SPkouUj4o� = 1;
}
$_obfuscate_h4_LhpSTi5WNi5COkIiViYk� = _obfuscate_hoaHlYiMh5OOjpGNiYmLk5A�( "valhost" );
if ( $_obfuscate_h4_LhpSTi5WNi5COkIiViYk� == 2 )
{
    _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Q�( "218", "客户端禁止重定向域名（hosts）！" );
}
if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['softstatus'] == 1 )
{
    _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Q�( "219", "服务端已暂停使用该软件！" );
}
if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['softstatus'] == 6 )
{
    _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Q�( "220", "服务端已暂停使用该软件（冻结状态）。解冻后系统将自动为你帐号补上被冻结后无法使用的时间！" );
}
if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['softstatus'] == 9 )
{
    _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Q�( "221", "因为超过60%的用户均无法解读HOSTS，服务端已被系统暂停使用（非作者操作）！" );
}
if ( _obfuscate_hoaHlYiMh5OOjpGNiYmLk5A�( "softver" ) < $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['softversion'] && $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['ismustupdate'] == 1 )
{
    _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Q�( "222", "有新版本发布，该版本已停止使用！新软件下载地址:VAL_url", array( "VAL_url" => base64_decode( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['softdownurl'] ) ) );
}
$_obfuscate_kpKNkJCHjJCUioiUj4yRkpM� = 0;
if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['softmode'] == "KSOFT" )
{
    if ( _obfuscate_hoaHlYiMh5OOjpGNiYmLk5A�( "keystr" ) === FALSE )
    {
        _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Q�( "223", "软件模式为卡模式，但是你没有传入注册卡参数" );
    }
    if ( strlen( _obfuscate_hoaHlYiMh5OOjpGNiYmLk5A�( "keystr" ) ) != 32 )
    {
        _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Q�( "224", "软件模式为卡模式，输入的卡号必须是32位" );
    }
    _obfuscate_k5OKiY_Pj4_OlZWRjIeSjoc�( "username", substr( _obfuscate_hoaHlYiMh5OOjpGNiYmLk5A�( "keystr" ), 0, 10 ) );
    _obfuscate_k5OKiY_Pj4_OlZWRjIeSjoc�( "password", substr( _obfuscate_hoaHlYiMh5OOjpGNiYmLk5A�( "keystr" ), 10, 10 ) );
    _obfuscate_k5OKiY_Pj4_OlZWRjIeSjoc�( "password2", substr( _obfuscate_hoaHlYiMh5OOjpGNiYmLk5A�( "keystr" ), 20 ) );
    $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_jIuSjYuUkJGHlYuPjZOQjY4�( $_obfuscate_mGKRY4dMuU6bZZJfh1_TX5k� );
    $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "select * from kss_z_user_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�." where `username`='"._obfuscate_hoaHlYiMh5OOjpGNiYmLk5A�( "username" )."'" );
    if ( empty( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg� ) )
    {
        if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['softstatus'] == 2 || $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['softstatus'] == 4 )
        {
            _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Q�( "225", "软件模式为卡模式，服务端禁止了新卡号激活！" );
        }
        $_obfuscate_j46GkYaTj5KIkIyUh4aTjYs� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "select * from kss_z_key_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�." where `keys`='".substr( _obfuscate_hoaHlYiMh5OOjpGNiYmLk5A�( "keystr" ), 4, 6 )."' and `keyfix`='".substr( _obfuscate_hoaHlYiMh5OOjpGNiYmLk5A�( "keystr" ), 0, 4 )."' and `keyspassword`='".substr( _obfuscate_hoaHlYiMh5OOjpGNiYmLk5A�( "keystr" ), 10 )."' " );
        if ( empty( $_obfuscate_j46GkYaTj5KIkIyUh4aTjYs� ) )
        {
            _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Q�( "226", "软件模式为卡模式，注册卡号未找到！" );
        }
        if ( 0 < $_obfuscate_j46GkYaTj5KIkIyUh4aTjYs�['cztime'] )
        {
            _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Q�( "227", "软件模式为卡模式，注册卡号已激活，但在用户表中无记录！".RNBR."（可能过期太久被作者删除，也可能是用户表异常需修复）" );
        }
        if ( $_obfuscate_j46GkYaTj5KIkIyUh4aTjYs�['islock'] != 0 )
        {
            _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Q�( "228", "软件模式为卡模式，注册卡号被锁定无法激活！" );
        }
        if ( $_obfuscate_j46GkYaTj5KIkIyUh4aTjYs�['isback'] != 0 )
        {
            _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Q�( "229", "软件模式为卡模式，注册卡已执行退卡操作，无法激活！" );
        }
        $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['managerid'] = $_obfuscate_j46GkYaTj5KIkIyUh4aTjYs�['managerid'];
        $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['username'] = substr( _obfuscate_hoaHlYiMh5OOjpGNiYmLk5A�( "keystr" ), 0, 10 );
        $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['password'] = substr( _obfuscate_hoaHlYiMh5OOjpGNiYmLk5A�( "keystr" ), 10, 10 );
        $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['password2'] = substr( _obfuscate_hoaHlYiMh5OOjpGNiYmLk5A�( "keystr" ), 20 );
        $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['cday'] = $_obfuscate_j46GkYaTj5KIkIyUh4aTjYs�['cday'];
        $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['points'] = $_obfuscate_j46GkYaTj5KIkIyUh4aTjYs�['points'];
        $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['tag'] = $_obfuscate_j46GkYaTj5KIkIyUh4aTjYs�['tag'];
        $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['linknum'] = $_obfuscate_j46GkYaTj5KIkIyUh4aTjYs�['linknum'];
        $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['keyextattr'] = $_obfuscate_j46GkYaTj5KIkIyUh4aTjYs�['keyextattr'];
        $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['addtime'] = $_obfuscate_jomPk5WKioeLipGGi4_PhpM�;
        $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['starttime'] = $_obfuscate_jomPk5WKioeLipGGi4_PhpM�;
        $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['endtime'] = $_obfuscate_jomPk5WKioeLipGGi4_PhpM� + $_obfuscate_j46GkYaTj5KIkIyUh4aTjYs�['cday'] * 86400;
        $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['cztimes'] = 1;
        if ( _obfuscate_hoaHlYiMh5OOjpGNiYmLk5A�( "bdinfo" ) === FALSE )
        {
            $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['bdinfo'] = _obfuscate_hoaHlYiMh5OOjpGNiYmLk5A�( "bdinfo" );
        }
        $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5U� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSVjoiHkoeTlJSRiJGHiI0�( "kss_z_user_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�, $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�, "sql" );
        $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5U�, "sync" );
        if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� !== TRUE )
        {
            _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Q�( "230", "软件模式为卡模式，注册卡激活失败，请重试！VAL_sqlerr", array( "VAL_sqlerr" => $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4�( ) ) );
        }
        $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5U� = "update `kss_z_key_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�."` set cztime=".$_obfuscate_jomPk5WKioeLipGGi4_PhpM�.",czusername='"._obfuscate_hoaHlYiMh5OOjpGNiYmLk5A�( "username" )."' where `keys`='".$_obfuscate_j46GkYaTj5KIkIyUh4aTjYs�['keys']."'";
        $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5U�, "sync" );
        if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� !== TRUE )
        {
            _obfuscate_h4aIlI6QlYmUkY6MlI6Qhos�( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5U�, $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4�( ), __FILE__, 107 );
        }
        if ( SVRID == 2 )
        {
            $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5U� = "insert into kss_tb_sql_active (`tbname`,`username`,`starttime`,`pccode`) values ('".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�."','"._obfuscate_hoaHlYiMh5OOjpGNiYmLk5A�( "username" )."',".$_obfuscate_jomPk5WKioeLipGGi4_PhpM�.",'".$_obfuscate_joeUio_LioqSh5WIiI2Pk4s�."')";
            $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5U�, "notsync" );
            if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� !== TRUE )
            {
                _obfuscate_h4aIlI6QlYmUkY6MlI6Qhos�( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5U�, $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4�( ), __FILE__, 114 );
            }
        }
        $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "select * from kss_z_user_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�." where `username`='"._obfuscate_hoaHlYiMh5OOjpGNiYmLk5A�( "username" )."'" );
    }
    if ( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['password'] != _obfuscate_hoaHlYiMh5OOjpGNiYmLk5A�( "password" ) || $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['password2'] != _obfuscate_hoaHlYiMh5OOjpGNiYmLk5A�( "password2" ) )
    {
        _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Q�( "231", "软件模式为卡模式，注册卡号错误，请检查输入（尽用复制输入卡号保证输入的准确性）！" );
    }
}
else
{
    if ( strlen( _obfuscate_hoaHlYiMh5OOjpGNiYmLk5A�( "username" ) ) < 3 )
    {
        if ( _obfuscate_hoaHlYiMh5OOjpGNiYmLk5A�( "keystr" ) !== FALSE )
        {
            _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Q�( "232", "服务端软件模式为帐号密码模式登入，但你好像是用卡号模式模板开发的软件！" );
        }
        _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Q�( "233", "用户帐号长度小于3位！" );
    }
    $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_jIuSjYuUkJGHlYuPjZOQjY4�( $_obfuscate_mGKRY4dMuU6bZZJfh1_TX5k� );
    $_obfuscate_h4aUkomQiI6JlIaSkomSkok� = "";
    $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "select * from kss_z_user_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�." where `username`='"._obfuscate_hoaHlYiMh5OOjpGNiYmLk5A�( "username" )."'" );
    if ( empty( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg� ) )
    {
        $_obfuscate_h4aUkomQiI6JlIaSkomSkok� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4�( );
        if ( $_obfuscate_h4aUkomQiI6JlIaSkomSkok� != "" )
        {
            $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "repair table kss_z_user_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�, "notsync" );
            $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "select * from kss_z_user_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�." where `username`='"._obfuscate_hoaHlYiMh5OOjpGNiYmLk5A�( "username" )."'", 1, 1 );
            if ( empty( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg� ) )
            {
                $_obfuscate_h4aUkomQiI6JlIaSkomSkok� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4�( );
                if ( $_obfuscate_h4aUkomQiI6JlIaSkomSkok� != "" )
                {
                    exit( "<b>TableErr[kss_z_user_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�."],try repair,but repair is failure！mysql errinfo:".$_obfuscate_h4aUkomQiI6JlIaSkomSkok�."</b>" );
                }
                _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Q�( "234", "用户帐号未找到！" );
            }
        }
        else
        {
            _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Q�( "234", "用户帐号未找到！" );
        }
    }
    if ( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['password'] !== _obfuscate_hoaHlYiMh5OOjpGNiYmLk5A�( "password" ) )
    {
        _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Q�( "235", "登陆密码错误！" );
    }
}
_obfuscate_ho_Ki4_TiZCUk4yOkJCPh5M�( );
if ( 0 < $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['ispause'] )
{
    _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Q�( "236", "帐号冻结状态[VAL_pausetime]，解冻后系统将自动为你帐号补上被冻结后无法使用的时间！", array( "VAL_pausetime" => date( "Y-m-d H:i", $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['pausetime'] ) ) );
}
if ( 0 < $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['islock'] )
{
    _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Q�( "237", "帐号锁定状态，仍然在计时！" );
}
if ( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['starttime'] + $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['cday'] * 86400 < time( ) )
{
    _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Q�( "238", "帐号已过期！" );
}
$_obfuscate_ipKHkZSLjYmPk5KOjJGPiZI� = ( integer );
if ( $_obfuscate_ipKHkZSLjYmPk5KOjJGPiZI� < 1 )
{
    $_obfuscate_ipKHkZSLjYmPk5KOjJGPiZI� = 1;
    _obfuscate_k5OKiY_Pj4_OlZWRjIeSjoc�( "clientid", "1" );
}
if ( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['linknum'] < _obfuscate_hoaHlYiMh5OOjpGNiYmLk5A�( "clientid" ) )
{
    _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Q�( "239", "通道ID号超出限制！[VAL_linknum]", array( "VAL_linknum" => $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['linknum'] ) );
}
$_obfuscate_k5SIlJCMhoiIjJWMi5WLkY8� = array( );
if ( 1 < $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['linknum'] )
{
    $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "update kss_z_client_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�." set id=1 where id=0", "notsync" );
    if ( $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_lI6Gio6PjomOj4mRjoaUjoY�( ) == 1146 )
    {
        $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "CREATE TABLE IF NOT EXISTS `kss_z_client_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�."` (`id` int(11) NOT NULL auto_increment,`username` varchar(32) character set utf8 collate utf8_bin NOT NULL,`clientid` int(4) unsigned NOT NULL,`linecode` varchar(10) NOT NULL,`pccode` varchar(512) NOT NULL default '', `unlockday` tinyint(3) unsigned NOT NULL default '0',  `unlocktimes` int(10) unsigned NOT NULL default '0',`isonline` int(2) unsigned NOT NULL,`lasttime` int(10) unsigned NOT NULL,`lastip` bigint(20) unsigned NOT NULL default '0',`updata` varchar(128) NOT NULL default '',PRIMARY KEY  (`id`),KEY `username` (`username`)) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ", "sync" );
        if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� === FALSE )
        {
            _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Q�( "240", "创建通道表时出错，请重试或联系软件作者！" );
        }
    }
    if ( _obfuscate_hoaHlYiMh5OOjpGNiYmLk5A�( "index" ) == 0 )
    {
        $_obfuscate_k5SIlJCMhoiIjJWMi5WLkY8� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "select * from kss_z_client_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�." where username='"._obfuscate_hoaHlYiMh5OOjpGNiYmLk5A�( "username" )."' and `clientid`="._obfuscate_hoaHlYiMh5OOjpGNiYmLk5A�( "clientid" ) );
        if ( empty( $_obfuscate_k5SIlJCMhoiIjJWMi5WLkY8� ) )
        {
            $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "insert into kss_z_client_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�." (`username`,`clientid`,`linecode`,`unlockday`,`unlocktimes`,`pccode`,`isonline`,`lasttime`,`lastip`,`updata`) values ('"._obfuscate_hoaHlYiMh5OOjpGNiYmLk5A�( "username" )."',"._obfuscate_hoaHlYiMh5OOjpGNiYmLk5A�( "clientid" ).",'',0,0,'',0,0,0,'')", "notsync" );
            if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� === FALSE )
            {
                _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Q�( "241", "通道表中加入用户数据出时出错，请重试或联系软件作者！VAL_sqlerr", array( "VAL_sqlerr" => $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4�( ) ) );
            }
            $_obfuscate_k5SIlJCMhoiIjJWMi5WLkY8� = array( "username" => _obfuscate_hoaHlYiMh5OOjpGNiYmLk5A�( "username" ), "clientid" => _obfuscate_hoaHlYiMh5OOjpGNiYmLk5A�( "clientid" ), "linecode" => "", "unlockday" => 0, "unlocktimes" => 0, "pccode" => "", "isonline" => 0, "lasttime" => 0, "lastip" => 0, "updata" => "" );
        }
    }
    else
    {
        $_obfuscate_k5SIlJCMhoiIjJWMi5WLkY8� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "select * from kss_z_client_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�." where username='"._obfuscate_hoaHlYiMh5OOjpGNiYmLk5A�( "username" )."' and `clientid`="._obfuscate_hoaHlYiMh5OOjpGNiYmLk5A�( "clientid" ) );
        if ( empty( $_obfuscate_k5SIlJCMhoiIjJWMi5WLkY8� ) )
        {
            _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Q�( "242", "通道表中未找到帐号通道号记录，请重试或联系软件作者！" );
        }
    }
}
$_obfuscate_lIeKioqNiYaOlIyQjouSlY8� = "../kss_inc/advapi/".$_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['pid'].$_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['id'].".php";
if ( is_file( $_obfuscate_lIeKioqNiYaOlIyQjouSlY8� ) )
{
    _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Q�( "243", "高级API接口缓存文件丢失，需重建缓存。（高级管理，更新缓存）" );
}
include( $_obfuscate_lIeKioqNiYaOlIyQjouSlY8� );
$_obfuscate_iZKMh5WIiI2UkpGHj5SPkYk� = explode( "#", $_obfuscate_jIaLhoqLj5GKkJSRjoaRkpA� );
$_obfuscate_iZWVjY6HiIyQj4uUjpKHkJU� = array_intersect( $_obfuscate_iZKMh5WIiI2UkpGHj5SPkYk�, $_obfuscate_ioiVhomLjJSHiYqRiJWOk4Y� );
if ( empty( $_obfuscate_iZWVjY6HiIyQj4uUjpKHkJU� ) )
{
    _obfuscate_j42JiI_RjZCHiIyKjZGUlYw�( $_obfuscate_jZSVjouIlJSRk4eHkIqGjIc�, $_obfuscate_jIaLhoqLj5GKkJSRjoaRkpA� );
    if ( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['endtime'] != PETIME )
    {
        $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "update kss_z_user_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�." set islock=3,intro='该用户使用调试工具登陆' where username='"._obfuscate_hoaHlYiMh5OOjpGNiYmLk5A�( "username" )."' and password='"._obfuscate_hoaHlYiMh5OOjpGNiYmLk5A�( "password" )."'", "sync" );
        _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Q�( "244", "客户端异常操作，帐号锁定，IP、机器码均已被列入黑名单！" );
    }
    else
    {
        _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Q�( "245", "客户端异常操作，IP、机器码均已被列入黑名单！" );
    }
}
if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['nodebuger'] == 1 )
{
    $_obfuscate_kJGNi4qHkI6Hjo2QkIaSlYo� = _obfuscate_hoaHlYiMh5OOjpGNiYmLk5A�( "isdebuger" );
    if ( $_obfuscate_kJGNi4qHkI6Hjo2QkIaSlYo� !== FALSE && 0 < $_obfuscate_kJGNi4qHkI6Hjo2QkIaSlYo� )
    {
        _obfuscate_j42JiI_RjZCHiIyKjZGUlYw�( $_obfuscate_jZSVjouIlJSRk4eHkIqGjIc�, $_obfuscate_jIaLhoqLj5GKkJSRjoaRkpA� );
        if ( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['endtime'] != PETIME )
        {
            $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "update kss_z_user_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�." set islock=3,intro='该用户使用调试工具登陆' where username='"._obfuscate_hoaHlYiMh5OOjpGNiYmLk5A�( "username" )."' and password='"._obfuscate_hoaHlYiMh5OOjpGNiYmLk5A�( "password" )."'", "sync" );
            _obfuscate_lJSVj4aKiIaUkJKUioiVjZQ�( 34 )( _obfuscate_lJSVj4aKiIaUkJKUioiVjZQ�( 34 ), "notsync" );
            _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Q�( "246", "客户调试操作，帐号锁定，IP、机器码均已被列入黑名单！（如果你正在开发调试软件，请暂时去掉检测：后台软件参数设置->安全策略->禁止调试不要勾选）" );
        }
        else
        {
            _obfuscate_lJSVj4aKiIaUkJKUioiVjZQ�( 34 )( _obfuscate_lJSVj4aKiIaUkJKUioiVjZQ�( 34 ), "notsync" );
            _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Q�( "247", "客户调试操作，IP、机器码均已被列入黑名单！（如果你正在开发调试软件，请暂时去掉检测：后台软件参数设置->安全策略->禁止调试不要勾选）" );
        }
    }
}
if ( _obfuscate_hoaHlYiMh5OOjpGNiYmLk5A�( "index" ) == "0" && $_obfuscate_h4_LhpSTi5WNi5COkIiViYk� !== FALSE && 1 < $_obfuscate_h4_LhpSTi5WNi5COkIiViYk� )
{
    $_obfuscate_k46Gk4qOjJGGiYqMiouGh4g� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "SELECT COUNT( * ) AS tnum FROM  kss_z_user_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�." where `hstats2`>0" );
    $_obfuscate_lYmGjomGho2UipSQi5ONj48� = $_obfuscate_k46Gk4qOjJGGiYqMiouGh4g�['tnum'];
    $_obfuscate_k46Gk4qOjJGGiYqMiouGh4g� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "SELECT COUNT( * ) AS tnum FROM  kss_z_user_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�." where `hstats`=1" );
    $_obfuscate_koiTh5WPjIyRjZWLipSMjI0� = $_obfuscate_k46Gk4qOjJGGiYqMiouGh4g�['tnum'];
    if ( 30 < $_obfuscate_lYmGjomGho2UipSQi5ONj48� && $_obfuscate_koiTh5WPjIyRjZWLipSMjI0� / $_obfuscate_lYmGjomGho2UipSQi5ONj48� < 0.4 )
    {
        $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['id']( "update kss_tb_soft set softstatus=9 where id='".$_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['id']."'", "sync" );
        $_obfuscate_k4mMjZOVkpCRipSKlI2OiYg� = file_get_contents( $_obfuscate_lY_Pko2IhoyRj4qUkYqPlJU� );
        $_obfuscate_k4mMjZOVkpCRipSKlI2OiYg� = preg_replace( "/('softstatus').*(\\n)/", "$1 => 9,$2", $_obfuscate_k4mMjZOVkpCRipSKlI2OiYg� );
        file_put_contents( $_obfuscate_lY_Pko2IhoyRj4qUkYqPlJU�, $_obfuscate_k4mMjZOVkpCRipSKlI2OiYg� );
        _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Q�( "221", "因为超过60%的用户均无法解读HOSTS，服务端已被系统暂停使用（非作者操作）！" );
    }
}
$_obfuscate_iI2IjYyHkIyVkY_RiIqIi5U� = array( );
$_obfuscate_jJWVlI2Kh4uIkouNkI6QkoY� = base64_decode( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['resstring'] );
$_obfuscate_jJWVlI2Kh4uIkouNkI6QkoY� = preg_replace( "/(====NEW RESSTR====).*(\\s*)/", "$1$2", $_obfuscate_jJWVlI2Kh4uIkouNkI6QkoY� );
$_obfuscate_iI2IjYyHkIyVkY_RiIqIi5U� = explode( "====NEW RESSTR====\n", $_obfuscate_jJWVlI2Kh4uIkouNkI6QkoY� );
foreach ( $_obfuscate_iI2IjYyHkIyVkY_RiIqIi5U� as $_obfuscate_lIeHkoeKkpOSiomPi4mQk5E� => $_obfuscate_io6UjZWThpOSjYeOj46Qkow� )
{
    $_obfuscate_iI2IjYyHkIyVkY_RiIqIi5U�[$_obfuscate_lIeHkoeKkpOSiomPi4mQk5E�] = chop( $_obfuscate_io6UjZWThpOSjYeOj46Qkow� );
}
$_obfuscate_k5OQi5SRipSGhpKPi46UlJI� = "resstring";
$$_obfuscate_k5OQi5SRipSGhpKPi46UlJI� = $_obfuscate_iI2IjYyHkIyVkY_RiIqIi5U�;
if ( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['endtime'] == PETIME )
{
    if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['dkbindpc'] == "0" && _obfuscate_hoaHlYiMh5OOjpGNiYmLk5A�( "isrun" ) == 1 )
    {
        _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Q�( "249", "本机该帐号正在使用，请先关闭已登陆成功的软件！如果你确认已关闭，可能是还有残留的软件进程未被关闭，请用任务管理器结束异常的软件进程！" );
    }
    $_obfuscate_lZCTlJCVlYmKlZGRiZCJjIY� = date( "H" );
    $_obfuscate_h5CLhoaTko2OkIaJiYyKhoY� = explode( ",", $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['test_timearea'] );
    if ( $_obfuscate_lZCTlJCVlYmKlZGRiZCJjIY� < $_obfuscate_h5CLhoaTko2OkIaJiYyKhoY�[0] || $_obfuscate_h5CLhoaTko2OkIaJiYyKhoY�[1] < $_obfuscate_lZCTlJCVlYmKlZGRiZCJjIY� )
    {
        _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Q�( "250", "公用帐号当前时段不允许使用！" );
    }
    $_obfuscate_iomQiY_NjIiVkJWGi4_Qj40� = 8640000;
    if ( 0 < $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['test_times'] )
    {
        $_obfuscate_iomQiY_NjIiVkJWGi4_Qj40� = $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['test_time'] * 60;
        $_obfuscate_i4yKj4eSi4mRkIqSkY6Piok� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "select * from kss_tb_log_pubuser where `pccode`='"._obfuscate_hoaHlYiMh5OOjpGNiYmLk5A�( "pccode" )."' and `softid`=".$_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['id'] );
        if ( empty( $_obfuscate_i4yKj4eSi4mRkIqSkY6Piok� ) )
        {
            $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['id']( "insert into kss_tb_log_pubuser (`softid`,`pccode`,`nday`,`ntimes`,`lasttime`) values (".$_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['id'].",'"._obfuscate_hoaHlYiMh5OOjpGNiYmLk5A�( "pccode" )."',".$_obfuscate_jomPk5WKioeLipGGi4_PhpM�.",1,".$_obfuscate_jomPk5WKioeLipGGi4_PhpM�.")", "notsync" );
        }
        else if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['test_time'] * 60 < $_obfuscate_jomPk5WKioeLipGGi4_PhpM� - $_obfuscate_i4yKj4eSi4mRkIqSkY6Piok�['lasttime'] )
        {
            if ( _obfuscate_hoaHlYiMh5OOjpGNiYmLk5A�( "index" ) != 0 )
            {
                _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Q�( "251", "本次试用时间结束！" );
            }
            if ( ( $_obfuscate_jomPk5WKioeLipGGi4_PhpM� - $_obfuscate_i4yKj4eSi4mRkIqSkY6Piok�['nday'] ) / 86400 < $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['test_day'] )
            {
                if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['test_times'] <= $_obfuscate_i4yKj4eSi4mRkIqSkY6Piok�['ntimes'] )
                {
                    _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Q�( "252", "今天你不能使用公用帐号！" );
                }
                $_obfuscate_i4yKj4eSi4mRkIqSkY6Piok�['ntimes']( "update kss_tb_log_pubuser set `ntimes`=".( $_obfuscate_i4yKj4eSi4mRkIqSkY6Piok�['ntimes'] + 1 ).",`lasttime`=".$_obfuscate_jomPk5WKioeLipGGi4_PhpM�." where `pccode`='"._obfuscate_hoaHlYiMh5OOjpGNiYmLk5A�( "pccode" )."' and `softid`=".$_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['id'], "notsync" );
            }
            else
            {
                $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "update kss_tb_log_pubuser set nday=".$_obfuscate_jomPk5WKioeLipGGi4_PhpM�.",`ntimes`=1,`lasttime`=".$_obfuscate_jomPk5WKioeLipGGi4_PhpM�." where `pccode`='"._obfuscate_hoaHlYiMh5OOjpGNiYmLk5A�( "pccode" )."' and `softid`=".$_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['id'], "notsync" );
            }
        }
        else
        {
            $_obfuscate_iomQiY_NjIiVkJWGi4_Qj40� = $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['test_time'] * 60 - $_obfuscate_jomPk5WKioeLipGGi4_PhpM� + $_obfuscate_i4yKj4eSi4mRkIqSkY6Piok�['lasttime'];
        }
    }
    $_obfuscate_lImQjpCTjIqSjZCPj4aTkoo� = "";
    if ( _obfuscate_hoaHlYiMh5OOjpGNiYmLk5A�( "advapi" ) !== FALSE )
    {
        $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['advapi'] = "";
        $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['softintro'] = "";
        $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['softnotice'] = "";
        $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['updatelog'] = "";
        $_obfuscate_jYmJi42Gh42MhoqLkY_MlZM� = array( "soft" => $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�, "member" => $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�, "ip" => long2ip( $_obfuscate_kYmJjZOIiZKJioqMkoaGiYk� ), "intip" => $_obfuscate_kYmJjZOIiZKJioqMkoaGiYk�, "pccode" => _obfuscate_hoaHlYiMh5OOjpGNiYmLk5A�( "pccode" ), "username" => _obfuscate_hoaHlYiMh5OOjpGNiYmLk5A�( "username" ), "password" => _obfuscate_hoaHlYiMh5OOjpGNiYmLk5A�( "password" ), "clientid" => _obfuscate_hoaHlYiMh5OOjpGNiYmLk5A�( "clientid" ), "linecode" => _obfuscate_hoaHlYiMh5OOjpGNiYmLk5A�( "linecode" ), "ischangesvr" => _obfuscate_hoaHlYiMh5OOjpGNiYmLk5A�( "ischangesvr" ), "apicmd" => _obfuscate_hoaHlYiMh5OOjpGNiYmLk5A�( "apicmd" ) );
        $adv_db = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�;
        $adv_table = $_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�;
        $adb_pdata = $_obfuscate_jYmJi42Gh42MhoqLkY_MlZM�;
        $adv_user = $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�;
        $_obfuscate_lImQjpCTjIqSjZCPj4aTkoo� = _obfuscate_io_Mh4aMkouSiZGQiYmRjJM�( );
    }
    _obfuscate_k5OTiY6Kk5WJlIuOkIyJkIk�( $_obfuscate_lImQjpCTjIqSjZCPj4aTkoo�, $_obfuscate_iomQiY_NjIiVkJWGi4_Qj40� );
}
if ( 1 < $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['linknum'] && $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['softmode2'] == 1 )
{
    _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Q�( "253", "任意登陆模式，不允许存在多通道帐号，请联系作者！" );
}
if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['dkbindpc'] == "0" && _obfuscate_hoaHlYiMh5OOjpGNiYmLk5A�( "isrun" ) == 1 )
{
    _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Q�( "249", "本机该帐号正在使用，请先关闭已登陆成功的软件！如果你确认已关闭，可能是还有残留的软件进程未被关闭，请用任务管理器结束异常的软件进程！" );
}
if ( _obfuscate_hoaHlYiMh5OOjpGNiYmLk5A�( "bdinfo" ) != "" && $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['bdinfo'] != _obfuscate_hoaHlYiMh5OOjpGNiYmLk5A�( "bdinfo" ) )
{
    _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Q�( "255", "绑定信息不符！" );
}
$_obfuscate_hpGLjYmMi5CJkoqGjJSIiIY� = array( );
$_obfuscate_lI6Oh5CKh42Ri5STio2HjpE� = array( );
if ( 1 < $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['linknum'] )
{
    $_obfuscate_lIyRio6Kho6LiIaVkY_SiZA� = $_obfuscate_k5SIlJCMhoiIjJWMi5WLkY8�['lastip'];
    $_obfuscate_kJSVj4qJlIyOi5SQiZKRiYk� = $_obfuscate_k5SIlJCMhoiIjJWMi5WLkY8�['pccode'];
    $_obfuscate_h5GPkpGLkYePioqSiomMlZM� = $_obfuscate_k5SIlJCMhoiIjJWMi5WLkY8�['unlockday'];
    $_obfuscate_j5WGlIqLlYqNlYqJjo_JiJU� = $_obfuscate_k5SIlJCMhoiIjJWMi5WLkY8�['unlocktimes'];
    $_obfuscate_j42KiZKIk5OMi4yGlYyPlI0� = $_obfuscate_k5SIlJCMhoiIjJWMi5WLkY8�['lasttime'];
    $_obfuscate_iouLk4eQj5KOj4eQh42Vi4g� = _obfuscate_h4_HlI6KlZKKlZCKkY_Jjo4�( _obfuscate_hoaHlYiMh5OOjpGNiYmLk5A�( "pccode" ), $_obfuscate_kJSVj4qJlIyOi5SQiZKRiYk� );
    $_obfuscate_lYmOk4iOkZGIkIuPiIyTioo� = $_obfuscate_k5SIlJCMhoiIjJWMi5WLkY8�['isonline'];
    $_obfuscate_k4yQlYyNkpOJkZCIiIiMj5A� = $_obfuscate_k5SIlJCMhoiIjJWMi5WLkY8�['linecode'];
}
else
{
    $_obfuscate_lIyRio6Kho6LiIaVkY_SiZA� = $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['lastip'];
    $_obfuscate_kJSVj4qJlIyOi5SQiZKRiYk� = $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['pccode'];
    $_obfuscate_iouLk4eQj5KOj4eQh42Vi4g� = _obfuscate_h4_HlI6KlZKKlZCKkY_Jjo4�( _obfuscate_hoaHlYiMh5OOjpGNiYmLk5A�( "pccode" ), $_obfuscate_kJSVj4qJlIyOi5SQiZKRiYk� );
    $_obfuscate_k4yQlYyNkpOJkZCIiIiMj5A� = $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['linecode'];
    $_obfuscate_j42KiZKIk5OMi4yGlYyPlI0� = $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['lasttime'];
    $_obfuscate_lYmOk4iOkZGIkIuPiIyTioo� = $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['isonline'];
    $_obfuscate_h5GPkpGLkYePioqSiomMlZM� = $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['unlockday'];
    $_obfuscate_j5WGlIqLlYqNlYqJjo_JiJU� = $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['unlocktimes'];
}
if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['autolock_time'] != 0 && $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['autolock_times'] != 0 )
{
    $_obfuscate_kZKOjI2JjoaKiJCGi4qQkok� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "select count(*) as tnum from kss_z_log_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�." where username='"._obfuscate_hoaHlYiMh5OOjpGNiYmLk5A�( "username" )."' and optype=1 and addtime>".( $_obfuscate_jomPk5WKioeLipGGi4_PhpM� - $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['autolock_time'] * 60 ) );
    if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['autolock_times'] < $_obfuscate_kZKOjI2JjoaKiJCGi4qQkok�['tnum'] )
    {
        $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "update kss_z_user_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�." set islock=3,intro='短时间内登陆次数太多，锁定帐号' where username='"._obfuscate_hoaHlYiMh5OOjpGNiYmLk5A�( "username" )."'", "sync" );
        _obfuscate_lJSVj4aKiIaUkJKUioiVjZQ�( 22 )( _obfuscate_lJSVj4aKiIaUkJKUioiVjZQ�( 22 ), "notsync" );
        _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Q�( "256", "由于短时间内登陆次数太多，帐号被锁定！" );
    }
}
if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['autolock_time_ip'] != 0 && $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['autolock_ipnum'] != 0 )
{
    $_obfuscate_kZKOjI2JjoaKiJCGi4qQkok� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "select count(distinct ip) as tnum from kss_z_log_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�." where username='"._obfuscate_hoaHlYiMh5OOjpGNiYmLk5A�( "username" )."' and optype=1 and addtime>".( $_obfuscate_jomPk5WKioeLipGGi4_PhpM� - $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['autolock_time_ip'] * 60 ) );
    if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['autolock_ipnum'] < $_obfuscate_kZKOjI2JjoaKiJCGi4qQkok�['tnum'] )
    {
        $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "update kss_z_user_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�." set islock=3,intro='IP变动太频繁，锁定帐号' where username='"._obfuscate_hoaHlYiMh5OOjpGNiYmLk5A�( "username" )."'", "sync" );
        _obfuscate_lJSVj4aKiIaUkJKUioiVjZQ�( 32 )( _obfuscate_lJSVj4aKiIaUkJKUioiVjZQ�( 32 ), "notsync" );
        _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Q�( "257", "由于短时间内登陆IP变动次数过多，帐号被锁定！" );
    }
}
if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['autolock_time_advapi'] != 0 && $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['autolock_times_advapi'] != 0 )
{
    $_obfuscate_kZKOjI2JjoaKiJCGi4qQkok� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "select count(*) as tnum from kss_z_log_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�." where username='"._obfuscate_hoaHlYiMh5OOjpGNiYmLk5A�( "username" )."' and optype=30 and addtime>".( $_obfuscate_jomPk5WKioeLipGGi4_PhpM� - $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['autolock_time_advapi'] * 60 ) );
    if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['autolock_times_advapi'] < $_obfuscate_kZKOjI2JjoaKiJCGi4qQkok�['tnum'] )
    {
        $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "update kss_z_user_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�." set islock=3,intro='调用advapi太频繁，锁定帐号' where username='"._obfuscate_hoaHlYiMh5OOjpGNiYmLk5A�( "username" )."'", "sync" );
        _obfuscate_lJSVj4aKiIaUkJKUioiVjZQ�( 31 )( _obfuscate_lJSVj4aKiIaUkJKUioiVjZQ�( 31 ), "notsync" );
        _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Q�( "258", "由于短时间内调用advapi次数太多，帐号被锁定！" );
    }
}
if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['softmode2'] != "1" && $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['dkbindpc'] != "1" )
{
    if ( _obfuscate_hoaHlYiMh5OOjpGNiYmLk5A�( "index" ) == 0 || $_obfuscate_j4yViI_OhpKQk5SPkouUj4o� == 1 )
    {
        $_obfuscate_hpGLjYmMi5CJkoqGjJSIiIY�['linecode'] = _obfuscate_hoaHlYiMh5OOjpGNiYmLk5A�( "linecode" );
    }
    else if ( $_obfuscate_k4yQlYyNkpOJkZCIiIiMj5A� == "" )
    {
        $_obfuscate_hpGLjYmMi5CJkoqGjJSIiIY�['linecode'] = _obfuscate_hoaHlYiMh5OOjpGNiYmLk5A�( "linecode" );
    }
    else if ( $_obfuscate_k4yQlYyNkpOJkZCIiIiMj5A� != _obfuscate_hoaHlYiMh5OOjpGNiYmLk5A�( "linecode" ) )
    {
        _obfuscate_lJSVj4aKiIaUkJKUioiVjZQ�( 25 )( _obfuscate_lJSVj4aKiIaUkJKUioiVjZQ�( 25 ), "notsync" );
        _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Q�( "259", "帐号被挤下线（在线码变动）！" );
    }
}
$_obfuscate_kpSSj5GNj4eIh5WGkI_Gk4s� = "";
if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['softmode2'] != "1" )
{
    if ( _obfuscate_hoaHlYiMh5OOjpGNiYmLk5A�( "index" ) == 0 )
    {
        if ( $_obfuscate_iouLk4eQj5KOj4eQh42Vi4g� === FALSE )
        {
            if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['chkonline'] == 1 )
            {
                if ( $_obfuscate_lYmOk4iOkZGIkIuPiIyTioo� == 1 )
                {
                    if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['outlinetimes'] == 0 )
                    {
                        _obfuscate_lJSVj4aKiIaUkJKUioiVjZQ�( 33 )( _obfuscate_lJSVj4aKiIaUkJKUioiVjZQ�( 33 ), "notsync" );
                        _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Q�( "260", "用户在线，禁止换机登陆！" );
                    }
                    if ( $_obfuscate_jomPk5WKioeLipGGi4_PhpM� - $_obfuscate_j42KiZKIk5OMi4yGlYyPlI0� < $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['outlinetime'] * 60 )
                    {
                        _obfuscate_lJSVj4aKiIaUkJKUioiVjZQ�( 24 )( _obfuscate_lJSVj4aKiIaUkJKUioiVjZQ�( 24 ), "notsync" );
                        _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Q�( "261", "用户在线，请多等待一会再偿试重新登陆！注意：如果原程序还在运行，你换电脑偿试登陆，帐号可能会被系统锁定！" );
                    }
                    if ( $_obfuscate_h5GPkpGLkYePioqSiomMlZM� != date( "d" ) )
                    {
                        $_obfuscate_hpGLjYmMi5CJkoqGjJSIiIY�['unlockday'] = date( "d" );
                        $_obfuscate_hpGLjYmMi5CJkoqGjJSIiIY�['unlocktimes'] = 1;
                    }
                    else
                    {
                        if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['outlinetimes'] < $_obfuscate_j5WGlIqLlYqNlYqJjo_JiJU� + 1 )
                        {
                            _obfuscate_lJSVj4aKiIaUkJKUioiVjZQ�( 26 )( _obfuscate_lJSVj4aKiIaUkJKUioiVjZQ�( 26 ), "notsync" );
                            _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Q�( "262", "当日强登陆次数已用完，不可再强登陆！" );
                        }
                        $_obfuscate_hpGLjYmMi5CJkoqGjJSIiIY�['unlocktimes'] = $_obfuscate_j5WGlIqLlYqNlYqJjo_JiJU� + 1;
                    }
                    $_obfuscate_lI6Oh5CKh42Ri5STio2HjpE�['notsync_01'] = _obfuscate_lJSVj4aKiIaUkJKUioiVjZQ�( 23 );
                }
                else
                {
                    $_obfuscate_hpGLjYmMi5CJkoqGjJSIiIY�['isonline'] = 1;
                    $_obfuscate_lI6Oh5CKh42Ri5STio2HjpE�['notsync_01'] = _obfuscate_lJSVj4aKiIaUkJKUioiVjZQ�( 2 );
                }
                $_obfuscate_hpGLjYmMi5CJkoqGjJSIiIY�['pccode'] = _obfuscate_hoaHlYiMh5OOjpGNiYmLk5A�( "pccode" );
            }
            else
            {
                if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['unbindpc_set'] == 2 )
                {
                    if ( $_obfuscate_jomPk5WKioeLipGGi4_PhpM� - $_obfuscate_j42KiZKIk5OMi4yGlYyPlI0� < $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['unbindpc_autotime'] * 60 )
                    {
                        _obfuscate_lJSVj4aKiIaUkJKUioiVjZQ�( 27 )( _obfuscate_lJSVj4aKiIaUkJKUioiVjZQ�( 27 ), "notsync" );
                        _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Q�( "263", "机器码变动，未到自动解绑时间！" );
                    }
                    $_obfuscate_joiHh46HlYmMkouLlJWNk4w� = 0;
                    if ( $_obfuscate_h5GPkpGLkYePioqSiomMlZM� != date( "d" ) )
                    {
                        $_obfuscate_hpGLjYmMi5CJkoqGjJSIiIY�['unlockday'] = date( "d" );
                        $_obfuscate_hpGLjYmMi5CJkoqGjJSIiIY�['unlocktimes'] = 1;
                        if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['unbindpc_ctset'] == 1 )
                        {
                            $_obfuscate_joiHh46HlYmMkouLlJWNk4w� = 1;
                            $_obfuscate_lI6Oh5CKh42Ri5STio2HjpE�['notsync_01'] = _obfuscate_lJSVj4aKiIaUkJKUioiVjZQ�( 15 );
                        }
                        else
                        {
                            $_obfuscate_lI6Oh5CKh42Ri5STio2HjpE�['notsync_01'] = _obfuscate_lJSVj4aKiIaUkJKUioiVjZQ�( 16 );
                        }
                    }
                    else
                    {
                        if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['unbindpc_ctset'] == 1 )
                        {
                            $_obfuscate_joiHh46HlYmMkouLlJWNk4w� = 1;
                            if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['unbindpc_times'] < $_obfuscate_j5WGlIqLlYqNlYqJjo_JiJU� + 1 )
                            {
                                _obfuscate_lJSVj4aKiIaUkJKUioiVjZQ�( 28 )( _obfuscate_lJSVj4aKiIaUkJKUioiVjZQ�( 28 ), "notsync" );
                                _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Q�( "264", "当日解绑次数已用完！" );
                            }
                            $_obfuscate_lI6Oh5CKh42Ri5STio2HjpE�['notsync_01'] = _obfuscate_lJSVj4aKiIaUkJKUioiVjZQ�( 15 );
                        }
                        else if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['unbindpc_ctset'] == 2 )
                        {
                            if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['unbindpc_times'] < $_obfuscate_j5WGlIqLlYqNlYqJjo_JiJU� + 1 )
                            {
                                $_obfuscate_joiHh46HlYmMkouLlJWNk4w� = 1;
                                $_obfuscate_lI6Oh5CKh42Ri5STio2HjpE�['notsync_01'] = _obfuscate_lJSVj4aKiIaUkJKUioiVjZQ�( 17 );
                            }
                            else
                            {
                                $_obfuscate_lI6Oh5CKh42Ri5STio2HjpE�['notsync_01'] = _obfuscate_lJSVj4aKiIaUkJKUioiVjZQ�( 18 );
                            }
                        }
                        else
                        {
                            $_obfuscate_joiHh46HlYmMkouLlJWNk4w� = 0;
                            if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['unbindpc_times'] < $_obfuscate_j5WGlIqLlYqNlYqJjo_JiJU� + 1 )
                            {
                                $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5U� = _obfuscate_lJSVj4aKiIaUkJKUioiVjZQ�( 28 );
                                $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5U�, "notsync" );
                                _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Q�( "264", "当日解绑次数已用完！" );
                            }
                            $_obfuscate_lI6Oh5CKh42Ri5STio2HjpE�['notsync_01'] = _obfuscate_lJSVj4aKiIaUkJKUioiVjZQ�( 16 );
                        }
                        $_obfuscate_hpGLjYmMi5CJkoqGjJSIiIY�['unlocktimes'] = $_obfuscate_j5WGlIqLlYqNlYqJjo_JiJU� + 1;
                    }
                    if ( $_obfuscate_joiHh46HlYmMkouLlJWNk4w� == 1 )
                    {
                        $_obfuscate_ioiIkIyNi4uSiY2GlY6Oko0� = $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['cday'];
                        $_obfuscate_kpKNkJCHjJCUioiUj4yRkpM� = $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['unbindpc_changetime'];
                        $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['cday'] = $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['cday'] - $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['unbindpc_changetime'];
                        $_obfuscate_hpGLjYmMi5CJkoqGjJSIiIY�['cday'] = $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['cday'];
                        $_obfuscate_hpGLjYmMi5CJkoqGjJSIiIY�['endtime'] = $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['cday'] * 86400 + $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['starttime'];
                        if ( $_obfuscate_hpGLjYmMi5CJkoqGjJSIiIY�['endtime'] < $_obfuscate_jomPk5WKioeLipGGi4_PhpM� || $_obfuscate_hpGLjYmMi5CJkoqGjJSIiIY�['cday'] < 0 )
                        {
                            _obfuscate_lJSVj4aKiIaUkJKUioiVjZQ�( 29 )( _obfuscate_lJSVj4aKiIaUkJKUioiVjZQ�( 29 ), "notsync" );
                            _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Q�( "265", "帐号剩余时间不足，不能自动解绑！" );
                        }
                        $_obfuscate_kpSSj5GNj4eIh5WGkI_Gk4s� = "insert into kss_z_cz_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�." (`addtime`,`cztype`,`username`,`oldcday`,`newcday`,`oldtimes`,`newtimes`,`keys`,`tzxguser`) values (".$_obfuscate_jomPk5WKioeLipGGi4_PhpM�.",6,'".$_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['username']."',".$_obfuscate_ioiIkIyNi4uSiY2GlY6Oko0�.",".$_obfuscate_hpGLjYmMi5CJkoqGjJSIiIY�['cday'].",".$_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['points'].",".$_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['points'].",'','')";
                    }
                    $_obfuscate_hpGLjYmMi5CJkoqGjJSIiIY�['pccode'] = _obfuscate_hoaHlYiMh5OOjpGNiYmLk5A�( "pccode" );
                }
                else
                {
                    _obfuscate_lJSVj4aKiIaUkJKUioiVjZQ�( 10 )( _obfuscate_lJSVj4aKiIaUkJKUioiVjZQ�( 10 ), "notsync" );
                    _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Q�( "266", "机器码变动，禁止登陆！" );
                }
            }
        }
        else
        {
            if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['chkonline'] == 1 )
            {
                $_obfuscate_hpGLjYmMi5CJkoqGjJSIiIY�['isonline'] = 1;
            }
            if ( $_obfuscate_kJSVj4qJlIyOi5SQiZKRiYk� != $_obfuscate_iouLk4eQj5KOj4eQh42Vi4g� )
            {
                $_obfuscate_hpGLjYmMi5CJkoqGjJSIiIY�['pccode'] = $_obfuscate_iouLk4eQj5KOj4eQh42Vi4g�;
            }
            $_obfuscate_lI6Oh5CKh42Ri5STio2HjpE�['notsync_01'] = _obfuscate_lJSVj4aKiIaUkJKUioiVjZQ�( 1 );
        }
        $_obfuscate_hpGLjYmMi5CJkoqGjJSIiIY�['activetimes'] = $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['activetimes'] + 1;
    }
    else
    {
        if ( $_obfuscate_iouLk4eQj5KOj4eQh42Vi4g� === FALSE )
        {
            _obfuscate_lJSVj4aKiIaUkJKUioiVjZQ�( 11 )( _obfuscate_lJSVj4aKiIaUkJKUioiVjZQ�( 11 ), "notsync" );
            _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Q�( "267", "帐号被挤下线（机器码变动）！" );
        }
        if ( $_obfuscate_j4yViI_OhpKQk5SPkouUj4o� == 1 && $_obfuscate_iouLk4eQj5KOj4eQh42Vi4g� != $_obfuscate_kJSVj4qJlIyOi5SQiZKRiYk� )
        {
            $_obfuscate_hpGLjYmMi5CJkoqGjJSIiIY�['pccode'] = $_obfuscate_iouLk4eQj5KOj4eQh42Vi4g�;
        }
    }
}
else if ( _obfuscate_hoaHlYiMh5OOjpGNiYmLk5A�( "index" ) == 0 )
{
    $_obfuscate_lI6Oh5CKh42Ri5STio2HjpE�['notsync_01'] = _obfuscate_lJSVj4aKiIaUkJKUioiVjZQ�( 9 );
}
$_obfuscate_hpGLjYmMi5CJkoqGjJSIiIY�['lasttime'] = $_obfuscate_jomPk5WKioeLipGGi4_PhpM�;
if ( $_obfuscate_lIyRio6Kho6LiIaVkY_SiZA� != $_obfuscate_kYmJjZOIiZKJioqMkoaGiYk� )
{
    $_obfuscate_hpGLjYmMi5CJkoqGjJSIiIY�['lastip'] = $_obfuscate_kYmJjZOIiZKJioqMkoaGiYk�;
}
if ( isset( $_obfuscate_hpGLjYmMi5CJkoqGjJSIiIY�['isonline'] ) && $_obfuscate_hpGLjYmMi5CJkoqGjJSIiIY�['isonline'] == 1 && $_obfuscate_lYmOk4iOkZGIkIuPiIyTioo� == 1 )
{
    unset( $_obfuscate_hpGLjYmMi5CJkoqGjJSIiIY�['isonline'] );
}
if ( 1 < $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['linknum'] )
{
    if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['dkbindpc'] == 1 )
    {
        $_obfuscate_kpCTiIiUhouPjo6PipGMk5E� = array( "cday" => 0, "endtime" => 0, "activetimes" => 0 );
        $_obfuscate_j4mGiJCKlI6QjJCGkpCQjo4� = array( "lastip" => 0, "pccode" => 0, "unlockday" => 0, "unlocktimes" => 0, "lasttime" => 0, "isonline" => 0 );
    }
    else
    {
        $_obfuscate_kpCTiIiUhouPjo6PipGMk5E� = array( "cday" => 0, "endtime" => 0, "activetimes" => 0 );
        $_obfuscate_j4mGiJCKlI6QjJCGkpCQjo4� = array( "lastip" => 0, "pccode" => 0, "unlockday" => 0, "unlocktimes" => 0, "lasttime" => 0, "isonline" => 0, "linecode" => 0 );
    }
}
else
{
    if ( $_obfuscate_h4_LhpSTi5WNi5COkIiViYk� !== FALSE )
    {
        $_obfuscate_hpGLjYmMi5CJkoqGjJSIiIY�['hstats'] = $_obfuscate_h4_LhpSTi5WNi5COkIiViYk�;
    }
    if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['dkbindpc'] == 1 )
    {
        $_obfuscate_kpCTiIiUhouPjo6PipGMk5E� = array( "hstats" => 0, "cday" => 0, "endtime" => 0, "lastip" => 0, "pccode" => 0, "unlockday" => 0, "unlocktimes" => 0, "lasttime" => 0, "isonline" => 0, "activetimes" => 0 );
        $_obfuscate_j4mGiJCKlI6QjJCGkpCQjo4� = array( "no_key" => 0 );
    }
    else
    {
        $_obfuscate_kpCTiIiUhouPjo6PipGMk5E� = array( "hstats" => 0, "cday" => 0, "endtime" => 0, "lastip" => 0, "pccode" => 0, "unlockday" => 0, "unlocktimes" => 0, "lasttime" => 0, "isonline" => 0, "activetimes" => 0, "linecode" => 0 );
        $_obfuscate_j4mGiJCKlI6QjJCGkpCQjo4� = array( "no_key" => 0 );
    }
}
$_obfuscate_ho6HiImLipSMlYaRhpCOkI4� = array_intersect_key( $_obfuscate_hpGLjYmMi5CJkoqGjJSIiIY�, $_obfuscate_kpCTiIiUhouPjo6PipGMk5E� );
$_obfuscate_lZWLlYqJiZSQkYuVkJGKkZQ� = array_intersect_key( $_obfuscate_hpGLjYmMi5CJkoqGjJSIiIY�, $_obfuscate_j4mGiJCKlI6QjJCGkpCQjo4� );
if ( empty( $_obfuscate_lI6Oh5CKh42Ri5STio2HjpE� ) )
{
    foreach ( $_obfuscate_lI6Oh5CKh42Ri5STio2HjpE� as $_obfuscate_i4qNkYqQlYuOh4iLiIuOjpQ� )
    {
        $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( $_obfuscate_i4qNkYqQlYuOh4iLiIuOjpQ�, "notsync" );
    }
}
$_obfuscate_lZCSkpOUjoaNi5OUkY6Pjo4� = array( "hstats" => 0, "linecode" => 0, "lasttime" => 0, "lastip" => 0, "activetimes" => 0, "unlockday" => 0, "unlocktimes" => 0, "isonline" => 0, "pccode" => 0 );
if ( empty( $_obfuscate_ho6HiImLipSMlYaRhpCOkI4� ) )
{
    $_obfuscate_kY2SiY6LkI6Sk46LipSOi44� = "sync";
    $_obfuscate_k5SPi4eOiYyTk5SSlJCSk4c� = array_diff_key( $_obfuscate_ho6HiImLipSMlYaRhpCOkI4�, $_obfuscate_lZCSkpOUjoaNi5OUkY6Pjo4� );
    if ( empty( $_obfuscate_k5SPi4eOiYyTk5SSlJCSk4c� ) )
    {
        $_obfuscate_kY2SiY6LkI6Sk46LipSOi44� = "notsync";
    }
    $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = _obfuscate_hoaHlYiMh5OOjpGNiYmLk5A�( "username" )( "kss_z_user_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�, $_obfuscate_ho6HiImLipSMlYaRhpCOkI4�, "username='"._obfuscate_hoaHlYiMh5OOjpGNiYmLk5A�( "username" )."'", $_obfuscate_kY2SiY6LkI6Sk46LipSOi44� );
}
if ( empty( $_obfuscate_lZWLlYqJiZSQkYuVkJGKkZQ� ) )
{
    $_obfuscate_kY2SiY6LkI6Sk46LipSOi44� = "sync";
    $_obfuscate_k5SPi4eOiYyTk5SSlJCSk4c� = array_diff_key( $_obfuscate_lZWLlYqJiZSQkYuVkJGKkZQ�, $_obfuscate_lZCSkpOUjoaNi5OUkY6Pjo4� );
    if ( empty( $_obfuscate_k5SPi4eOiYyTk5SSlJCSk4c� ) )
    {
        $_obfuscate_kY2SiY6LkI6Sk46LipSOi44� = "notsync";
    }
    $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iJOJipCPk4yQlJOMlIeTjYs�( "kss_z_client_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�, $_obfuscate_lZWLlYqJiZSQkYuVkJGKkZQ�, "username='"._obfuscate_hoaHlYiMh5OOjpGNiYmLk5A�( "username" )."' and `clientid`="._obfuscate_hoaHlYiMh5OOjpGNiYmLk5A�( "clientid" ), $_obfuscate_kY2SiY6LkI6Sk46LipSOi44� );
}
if ( $_obfuscate_kpSSj5GNj4eIh5WGkI_Gk4s� != "" )
{
    $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( $_obfuscate_kpSSj5GNj4eIh5WGkI_Gk4s�, "sync" );
}
$_obfuscate_lImQjpCTjIqSjZCPj4aTkoo� = "";
if ( _obfuscate_hoaHlYiMh5OOjpGNiYmLk5A�( "advapi" ) !== FALSE )
{
    $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['advapi'] = "";
    $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['softintro'] = "";
    $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['softnotice'] = "";
    $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['updatelog'] = "";
    $_obfuscate_jYmJi42Gh42MhoqLkY_MlZM� = array( "soft" => $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�, "member" => $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�, "client" => $_obfuscate_k5SIlJCMhoiIjJWMi5WLkY8�, "ip" => long2ip( $_obfuscate_kYmJjZOIiZKJioqMkoaGiYk� ), "intip" => $_obfuscate_kYmJjZOIiZKJioqMkoaGiYk�, "pccode" => _obfuscate_hoaHlYiMh5OOjpGNiYmLk5A�( "pccode" ), "username" => _obfuscate_hoaHlYiMh5OOjpGNiYmLk5A�( "username" ), "password" => _obfuscate_hoaHlYiMh5OOjpGNiYmLk5A�( "password" ), "clientid" => _obfuscate_hoaHlYiMh5OOjpGNiYmLk5A�( "clientid" ), "linecode" => _obfuscate_hoaHlYiMh5OOjpGNiYmLk5A�( "linecode" ), "ischangesvr" => _obfuscate_hoaHlYiMh5OOjpGNiYmLk5A�( "ischangesvr" ), "apicmd" => _obfuscate_hoaHlYiMh5OOjpGNiYmLk5A�( "apicmd" ) );
    $adv_db = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�;
    $adv_table = $_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�;
    $adb_pdata = $_obfuscate_jYmJi42Gh42MhoqLkY_MlZM�;
    $adv_user = $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�;
    $adv_user2 = $_obfuscate_k5SIlJCMhoiIjJWMi5WLkY8�;
    $_obfuscate_lImQjpCTjIqSjZCPj4aTkoo� = _obfuscate_io_Mh4aMkouSiZGQiYmRjJM�( );
}
_obfuscate_k5OTiY6Kk5WJlIuOkIyJkIk�( $_obfuscate_lImQjpCTjIqSjZCPj4aTkoo� );
?>
