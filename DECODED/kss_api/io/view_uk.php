<?php
/*********************/
/*                   */
/*  Dezend for PHP5  */
/*         NWS       */
/*      Nulled.WS    */
/*                   */
/*********************/

function _obfuscate_lYqMiY2Mj4aIhouOlZOVjpI�( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� = 1 )
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
_obfuscate_kpSOkYmPh5SSi4mMlYePjY4�( 0 );
$_obfuscate_k4yVh4iNjZOMk5OTiJWHiZA� = "";
$_obfuscate_iIuTh4yVh4mShoiIiouMjIY� = array( 16, 24, 28, 29 );
if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['softmode'] == "KSOFT" )
{
    $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['czkey'] = $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username'];
    if ( _obfuscate_jpOIlY_HlIaJi46IiYySiJU�( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['czkey'] ) )
    {
        exit( "kssdata".QQ215 );
    }
    $_obfuscate_jYaVkI6TlJGRipSPkIyRjYw� = strlen( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['czkey'] );
    if ( in_array( $_obfuscate_jYaVkI6TlJGRipSPkIyRjYw�, $_obfuscate_iIuTh4yVh4mShoiIiouMjIY� ) )
    {
        $_obfuscate_jJOSkYeSjJSJkoaUkIaTkpI� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "select * from kss_olddata where `oldkey`='".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['czkey']."' and `softcode`=".$_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['softcode'] );
        if ( empty( $_obfuscate_jJOSkYeSjJSJkoaUkIaTkpI� ) )
        {
            exit( "kssdata".QQ216 );
        }
        $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['czkey'] = $_obfuscate_jJOSkYeSjJSJkoaUkIaTkpI�['newkey'];
        $_obfuscate_k4yVh4iNjZOMk5OTiJWHiZA� = sprintf( GG_NEWKEY, $_obfuscate_jJOSkYeSjJSJkoaUkIaTkpI�['newkey'] );
    }
    if ( strlen( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['czkey'] ) != 32 )
    {
        exit( "kssdata".QQ203 );
    }
    if ( _obfuscate_joeQipOGjouJko_VlJSKiJE�( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['czkey'] ) )
    {
        exit( "kssdata".QQ204 );
    }
    $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username'] = substr( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['czkey'], 0, 10 );
    $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['password'] = substr( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['czkey'], 10, 10 );
    $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['password2'] = substr( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['czkey'], 20 );
    $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "select * from kss_z_user_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�." where `username`='".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username']."' and `password`='".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['password']."' and `password2`='".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['password2']."'" );
    if ( empty( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg� ) )
    {
        if ( 0 < $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['islock'] )
        {
            exit( "kssdata".QQ220 );
        }
        $_obfuscate_lI2HjIqUkYqTho2HiJWUk5I� = sprintf( GG_KEYOUTPUT1, _obfuscate_jZGJkpOSkY_HiY2HjY2JlIg�( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['starttime'] ), _obfuscate_jZGJkpOSkY_HiY2HjY2JlIg�( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['starttime'] + 86400 * $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['cday'] ), $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['cday'], $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['points'], $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['linknum'], $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['bdinfo'], $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['keyextattr'] );
    }
    else
    {
        if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['viewkey'] != 1 )
        {
            exit( "kssdata".QQ226 );
        }
        $_obfuscate_j46GkYaTj5KIkIyUh4aTjYs� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "select * from kss_z_key_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�." where `keys`='".substr( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['czkey'], 4, 6 )."' and `keyfix`='".substr( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['czkey'], 0, 4 )."' and `keyspassword`='".substr( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['czkey'], 10 )."'" );
        if ( empty( $_obfuscate_j46GkYaTj5KIkIyUh4aTjYs� ) )
        {
            _obfuscate_kpSOkYmPh5SSi4mMlYePjY4�( 1 );
            exit( "kssdata".QQ130 );
        }
        if ( 0 < $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['islock'] )
        {
            exit( "kssdata".QQ220 );
        }
        if ( 0 < $_obfuscate_j46GkYaTj5KIkIyUh4aTjYs�['cztime'] )
        {
            $_obfuscate_lI2HjIqUkYqTho2HiJWUk5I� = sprintf( GG_KEYOUTPUT2, $_obfuscate_j46GkYaTj5KIkIyUh4aTjYs�['cday'], $_obfuscate_j46GkYaTj5KIkIyUh4aTjYs�['points'], $_obfuscate_j46GkYaTj5KIkIyUh4aTjYs�['linknum'], $_obfuscate_j46GkYaTj5KIkIyUh4aTjYs�['tag'], $_obfuscate_j46GkYaTj5KIkIyUh4aTjYs�['keyextattr'] );
        }
        else
        {
            $_obfuscate_lI2HjIqUkYqTho2HiJWUk5I� = sprintf( GG_KEYOUTPUT3, $_obfuscate_j46GkYaTj5KIkIyUh4aTjYs�['cday'], $_obfuscate_j46GkYaTj5KIkIyUh4aTjYs�['points'], $_obfuscate_j46GkYaTj5KIkIyUh4aTjYs�['linknum'], $_obfuscate_j46GkYaTj5KIkIyUh4aTjYs�['tag'], $_obfuscate_j46GkYaTj5KIkIyUh4aTjYs�['keyextattr'] );
        }
    }
}
else
{
    $_obfuscate_jYaVkI6TlJGRipSPkIyRjYw� = strlen( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username'] );
    if ( in_array( $_obfuscate_jYaVkI6TlJGRipSPkIyRjYw�, $_obfuscate_iIuTh4yVh4mShoiIiouMjIY� ) && _obfuscate_jpOIlY_HlIaJi46IiYySiJU�( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username'] ) )
    {
        $_obfuscate_jJOSkYeSjJSJkoaUkIaTkpI� = $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username']( "select * from kss_olddata where `oldkey`='".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username']."'" );
        if ( empty( $_obfuscate_jJOSkYeSjJSJkoaUkIaTkpI� ) )
        {
            exit( "kssdata".QQ216 );
        }
        if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['softcode'] != $_obfuscate_jJOSkYeSjJSJkoaUkIaTkpI�['softcode'] )
        {
            exit( "kssdata".QQ229 );
        }
        $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username'] = $_obfuscate_jJOSkYeSjJSJkoaUkIaTkpI�['newkey'];
        $_obfuscate_k4yVh4iNjZOMk5OTiJWHiZA� = sprintf( GG_NEWKEY, $_obfuscate_jJOSkYeSjJSJkoaUkIaTkpI�['newkey'] );
    }
    if ( strlen( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username'] ) == 32 )
    {
        if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['viewkey'] != 1 )
        {
            exit( "kssdata".QQ230 );
        }
        if ( _obfuscate_joeQipOGjouJko_VlJSKiJE�( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username'] ) )
        {
            exit( "kssdata".QQ204 );
        }
        $_obfuscate_j46GkYaTj5KIkIyUh4aTjYs� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "select * from kss_z_key_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�." where `keys`='".substr( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username'], 4, 6 )."' and `keyfix`='".substr( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username'], 0, 4 )."' and `keyspassword`='".substr( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username'], 10 )."'" );
        if ( empty( $_obfuscate_j46GkYaTj5KIkIyUh4aTjYs� ) )
        {
            _obfuscate_kpSOkYmPh5SSi4mMlYePjY4�( 1 );
            exit( "kssdata".QQ130 );
        }
        if ( 0 < $_obfuscate_j46GkYaTj5KIkIyUh4aTjYs�['islock'] )
        {
            exit( "kssdata".QQ150.$_obfuscate_k4yVh4iNjZOMk5OTiJWHiZA� );
        }
        if ( 0 < $_obfuscate_j46GkYaTj5KIkIyUh4aTjYs�['cztime'] )
        {
            $_obfuscate_lI2HjIqUkYqTho2HiJWUk5I� = sprintf( GG_KEYOUTPUT4, $_obfuscate_j46GkYaTj5KIkIyUh4aTjYs�['cday'], $_obfuscate_j46GkYaTj5KIkIyUh4aTjYs�['points'], $_obfuscate_j46GkYaTj5KIkIyUh4aTjYs�['linknum'], $_obfuscate_j46GkYaTj5KIkIyUh4aTjYs�['tag'], $_obfuscate_j46GkYaTj5KIkIyUh4aTjYs�['keyextattr'], _obfuscate_jZGJkpOSkY_HiY2HjY2JlIg�( $_obfuscate_j46GkYaTj5KIkIyUh4aTjYs�['cztime'] ), $_obfuscate_j46GkYaTj5KIkIyUh4aTjYs�['czusername'] );
        }
        else
        {
            $_obfuscate_lI2HjIqUkYqTho2HiJWUk5I� = sprintf( GG_KEYOUTPUT5, $_obfuscate_j46GkYaTj5KIkIyUh4aTjYs�['cday'], $_obfuscate_j46GkYaTj5KIkIyUh4aTjYs�['points'], $_obfuscate_j46GkYaTj5KIkIyUh4aTjYs�['linknum'], $_obfuscate_j46GkYaTj5KIkIyUh4aTjYs�['tag'], $_obfuscate_j46GkYaTj5KIkIyUh4aTjYs�['keyextattr'] );
        }
    }
    else
    {
        $_obfuscate_ho6VjYuRh5SJkomOjouOiY4� = _obfuscate_iZONjY2Nk42Ji42LjIeOj5Q�( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username'] );
        if ( $_obfuscate_ho6VjYuRh5SJkomOjouOiY4� !== TRUE )
        {
            exit( "kssdata".QQ177.$_obfuscate_ho6VjYuRh5SJkomOjouOiY4� );
        }
        $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "select * from kss_z_user_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�." where `username`='".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username']."'" );
        if ( empty( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg� ) )
        {
            exit( "kssdata".QQ154 );
        }
        if ( 0 < $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['islock'] )
        {
            exit( "kssdata".QQ157 );
        }
        $_obfuscate_lI2HjIqUkYqTho2HiJWUk5I� = sprintf( GG_KEYOUTPUT6, _obfuscate_jZGJkpOSkY_HiY2HjY2JlIg�( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['starttime'] ), _obfuscate_jZGJkpOSkY_HiY2HjY2JlIg�( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['starttime'] + 86400 * $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['cday'] ), $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['cday'], $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['points'], $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['linknum'], $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['bdinfo'], $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['keyextattr'], $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['tag'] );
    }
}
exit( "kssdata".$_obfuscate_lI2HjIqUkYqTho2HiJWUk5I�.$_obfuscate_k4yVh4iNjZOMk5OTiJWHiZA� );
?>
