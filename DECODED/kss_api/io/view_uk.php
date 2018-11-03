<?php
/*********************/
/*                   */
/*  Dezend for PHP5  */
/*         NWS       */
/*      Nulled.WS    */
/*                   */
/*********************/

function _obfuscate_lYqMiY2Mj4aIhouOlZOVjpIÿ( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ = 1 )
{
    $_obfuscate_iJGPjJWLj4uLkIqVjYiHh48ÿ = unpack( "C*", "ViewZendSourceCodeIsInvalid!" );
    do
    {
        $_obfuscate_iY2Oh5OGlIqQhpCJi5CMkogÿ = ( $_obfuscate_lZKViImJjo6UhouJj4aVi4Yÿ[$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ] << 4 ) + ( $_obfuscate_lZKViImJjo6UhouJj4aVi4Yÿ[$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ + 1] >> 4 );
        $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ += 2;
    } while ( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ < 28 );
}

if ( !defined( "YH2" ) )
{
    exit( "Access denied to view this page!" );
}
_obfuscate_kpSOkYmPh5SSi4mMlYePjY4ÿ( 0 );
$_obfuscate_k4yVh4iNjZOMk5OTiJWHiZAÿ = "";
$_obfuscate_iIuTh4yVh4mShoiIiouMjIYÿ = array( 16, 24, 28, 29 );
if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['softmode'] == "KSOFT" )
{
    $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['czkey'] = $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['username'];
    if ( _obfuscate_jpOIlY_HlIaJi46IiYySiJUÿ( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['czkey'] ) )
    {
        exit( "kssdata".QQ215 );
    }
    $_obfuscate_jYaVkI6TlJGRipSPkIyRjYwÿ = strlen( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['czkey'] );
    if ( in_array( $_obfuscate_jYaVkI6TlJGRipSPkIyRjYwÿ, $_obfuscate_iIuTh4yVh4mShoiIiouMjIYÿ ) )
    {
        $_obfuscate_jJOSkYeSjJSJkoaUkIaTkpIÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJAÿ( "select * from kss_olddata where `oldkey`='".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['czkey']."' and `softcode`=".$_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['softcode'] );
        if ( empty( $_obfuscate_jJOSkYeSjJSJkoaUkIaTkpIÿ ) )
        {
            exit( "kssdata".QQ216 );
        }
        $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['czkey'] = $_obfuscate_jJOSkYeSjJSJkoaUkIaTkpIÿ['newkey'];
        $_obfuscate_k4yVh4iNjZOMk5OTiJWHiZAÿ = sprintf( GG_NEWKEY, $_obfuscate_jJOSkYeSjJSJkoaUkIaTkpIÿ['newkey'] );
    }
    if ( strlen( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['czkey'] ) != 32 )
    {
        exit( "kssdata".QQ203 );
    }
    if ( _obfuscate_joeQipOGjouJko_VlJSKiJEÿ( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['czkey'] ) )
    {
        exit( "kssdata".QQ204 );
    }
    $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['username'] = substr( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['czkey'], 0, 10 );
    $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['password'] = substr( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['czkey'], 10, 10 );
    $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['password2'] = substr( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['czkey'], 20 );
    $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJAÿ( "select * from kss_z_user_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYsÿ." where `username`='".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['username']."' and `password`='".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['password']."' and `password2`='".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['password2']."'" );
    if ( empty( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ ) )
    {
        if ( 0 < $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['islock'] )
        {
            exit( "kssdata".QQ220 );
        }
        $_obfuscate_lI2HjIqUkYqTho2HiJWUk5Iÿ = sprintf( GG_KEYOUTPUT1, _obfuscate_jZGJkpOSkY_HiY2HjY2JlIgÿ( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['starttime'] ), _obfuscate_jZGJkpOSkY_HiY2HjY2JlIgÿ( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['starttime'] + 86400 * $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['cday'] ), $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['cday'], $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['points'], $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['linknum'], $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['bdinfo'], $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['keyextattr'] );
    }
    else
    {
        if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['viewkey'] != 1 )
        {
            exit( "kssdata".QQ226 );
        }
        $_obfuscate_j46GkYaTj5KIkIyUh4aTjYsÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJAÿ( "select * from kss_z_key_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYsÿ." where `keys`='".substr( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['czkey'], 4, 6 )."' and `keyfix`='".substr( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['czkey'], 0, 4 )."' and `keyspassword`='".substr( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['czkey'], 10 )."'" );
        if ( empty( $_obfuscate_j46GkYaTj5KIkIyUh4aTjYsÿ ) )
        {
            _obfuscate_kpSOkYmPh5SSi4mMlYePjY4ÿ( 1 );
            exit( "kssdata".QQ130 );
        }
        if ( 0 < $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['islock'] )
        {
            exit( "kssdata".QQ220 );
        }
        if ( 0 < $_obfuscate_j46GkYaTj5KIkIyUh4aTjYsÿ['cztime'] )
        {
            $_obfuscate_lI2HjIqUkYqTho2HiJWUk5Iÿ = sprintf( GG_KEYOUTPUT2, $_obfuscate_j46GkYaTj5KIkIyUh4aTjYsÿ['cday'], $_obfuscate_j46GkYaTj5KIkIyUh4aTjYsÿ['points'], $_obfuscate_j46GkYaTj5KIkIyUh4aTjYsÿ['linknum'], $_obfuscate_j46GkYaTj5KIkIyUh4aTjYsÿ['tag'], $_obfuscate_j46GkYaTj5KIkIyUh4aTjYsÿ['keyextattr'] );
        }
        else
        {
            $_obfuscate_lI2HjIqUkYqTho2HiJWUk5Iÿ = sprintf( GG_KEYOUTPUT3, $_obfuscate_j46GkYaTj5KIkIyUh4aTjYsÿ['cday'], $_obfuscate_j46GkYaTj5KIkIyUh4aTjYsÿ['points'], $_obfuscate_j46GkYaTj5KIkIyUh4aTjYsÿ['linknum'], $_obfuscate_j46GkYaTj5KIkIyUh4aTjYsÿ['tag'], $_obfuscate_j46GkYaTj5KIkIyUh4aTjYsÿ['keyextattr'] );
        }
    }
}
else
{
    $_obfuscate_jYaVkI6TlJGRipSPkIyRjYwÿ = strlen( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['username'] );
    if ( in_array( $_obfuscate_jYaVkI6TlJGRipSPkIyRjYwÿ, $_obfuscate_iIuTh4yVh4mShoiIiouMjIYÿ ) && _obfuscate_jpOIlY_HlIaJi46IiYySiJUÿ( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['username'] ) )
    {
        $_obfuscate_jJOSkYeSjJSJkoaUkIaTkpIÿ = $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['username']( "select * from kss_olddata where `oldkey`='".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['username']."'" );
        if ( empty( $_obfuscate_jJOSkYeSjJSJkoaUkIaTkpIÿ ) )
        {
            exit( "kssdata".QQ216 );
        }
        if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['softcode'] != $_obfuscate_jJOSkYeSjJSJkoaUkIaTkpIÿ['softcode'] )
        {
            exit( "kssdata".QQ229 );
        }
        $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['username'] = $_obfuscate_jJOSkYeSjJSJkoaUkIaTkpIÿ['newkey'];
        $_obfuscate_k4yVh4iNjZOMk5OTiJWHiZAÿ = sprintf( GG_NEWKEY, $_obfuscate_jJOSkYeSjJSJkoaUkIaTkpIÿ['newkey'] );
    }
    if ( strlen( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['username'] ) == 32 )
    {
        if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['viewkey'] != 1 )
        {
            exit( "kssdata".QQ230 );
        }
        if ( _obfuscate_joeQipOGjouJko_VlJSKiJEÿ( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['username'] ) )
        {
            exit( "kssdata".QQ204 );
        }
        $_obfuscate_j46GkYaTj5KIkIyUh4aTjYsÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJAÿ( "select * from kss_z_key_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYsÿ." where `keys`='".substr( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['username'], 4, 6 )."' and `keyfix`='".substr( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['username'], 0, 4 )."' and `keyspassword`='".substr( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['username'], 10 )."'" );
        if ( empty( $_obfuscate_j46GkYaTj5KIkIyUh4aTjYsÿ ) )
        {
            _obfuscate_kpSOkYmPh5SSi4mMlYePjY4ÿ( 1 );
            exit( "kssdata".QQ130 );
        }
        if ( 0 < $_obfuscate_j46GkYaTj5KIkIyUh4aTjYsÿ['islock'] )
        {
            exit( "kssdata".QQ150.$_obfuscate_k4yVh4iNjZOMk5OTiJWHiZAÿ );
        }
        if ( 0 < $_obfuscate_j46GkYaTj5KIkIyUh4aTjYsÿ['cztime'] )
        {
            $_obfuscate_lI2HjIqUkYqTho2HiJWUk5Iÿ = sprintf( GG_KEYOUTPUT4, $_obfuscate_j46GkYaTj5KIkIyUh4aTjYsÿ['cday'], $_obfuscate_j46GkYaTj5KIkIyUh4aTjYsÿ['points'], $_obfuscate_j46GkYaTj5KIkIyUh4aTjYsÿ['linknum'], $_obfuscate_j46GkYaTj5KIkIyUh4aTjYsÿ['tag'], $_obfuscate_j46GkYaTj5KIkIyUh4aTjYsÿ['keyextattr'], _obfuscate_jZGJkpOSkY_HiY2HjY2JlIgÿ( $_obfuscate_j46GkYaTj5KIkIyUh4aTjYsÿ['cztime'] ), $_obfuscate_j46GkYaTj5KIkIyUh4aTjYsÿ['czusername'] );
        }
        else
        {
            $_obfuscate_lI2HjIqUkYqTho2HiJWUk5Iÿ = sprintf( GG_KEYOUTPUT5, $_obfuscate_j46GkYaTj5KIkIyUh4aTjYsÿ['cday'], $_obfuscate_j46GkYaTj5KIkIyUh4aTjYsÿ['points'], $_obfuscate_j46GkYaTj5KIkIyUh4aTjYsÿ['linknum'], $_obfuscate_j46GkYaTj5KIkIyUh4aTjYsÿ['tag'], $_obfuscate_j46GkYaTj5KIkIyUh4aTjYsÿ['keyextattr'] );
        }
    }
    else
    {
        $_obfuscate_ho6VjYuRh5SJkomOjouOiY4ÿ = _obfuscate_iZONjY2Nk42Ji42LjIeOj5Qÿ( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['username'] );
        if ( $_obfuscate_ho6VjYuRh5SJkomOjouOiY4ÿ !== TRUE )
        {
            exit( "kssdata".QQ177.$_obfuscate_ho6VjYuRh5SJkomOjouOiY4ÿ );
        }
        $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJAÿ( "select * from kss_z_user_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYsÿ." where `username`='".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['username']."'" );
        if ( empty( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ ) )
        {
            exit( "kssdata".QQ154 );
        }
        if ( 0 < $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['islock'] )
        {
            exit( "kssdata".QQ157 );
        }
        $_obfuscate_lI2HjIqUkYqTho2HiJWUk5Iÿ = sprintf( GG_KEYOUTPUT6, _obfuscate_jZGJkpOSkY_HiY2HjY2JlIgÿ( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['starttime'] ), _obfuscate_jZGJkpOSkY_HiY2HjY2JlIgÿ( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['starttime'] + 86400 * $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['cday'] ), $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['cday'], $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['points'], $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['linknum'], $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['bdinfo'], $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['keyextattr'], $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['tag'] );
    }
}
exit( "kssdata".$_obfuscate_lI2HjIqUkYqTho2HiJWUk5Iÿ.$_obfuscate_k4yVh4iNjZOMk5OTiJWHiZAÿ );
?>
