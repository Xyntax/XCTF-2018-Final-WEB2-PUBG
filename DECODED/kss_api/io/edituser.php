<?php
/*********************/
/*                   */
/*  Dezend for PHP5  */
/*         NWS       */
/*      Nulled.WS    */
/*                   */
/*********************/

function _obfuscate_iIuSi4iHkIaKiouRj5WTk4kÿ( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ = 1 )
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
if ( SVRID == 2 )
{
    exit( "kssdata".QQ146 );
}
if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['softmode'] == "KSOFT" )
{
    $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['czkey'] = $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['username'];
    if ( strlen( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['czkey'] ) != 32 )
    {
        exit( "kssdata".QQ123 );
    }
    if ( _obfuscate_joeQipOGjouJko_VlJSKiJEÿ( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['czkey'] ) )
    {
        exit( "kssdata".QQ147 );
    }
    $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['username'] = substr( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['czkey'], 0, 10 );
    $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['password'] = substr( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['czkey'], 10, 10 );
    $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['password2'] = substr( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['czkey'], 20 );
    $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJAÿ( "select * from kss_z_user_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYsÿ." where `username`='".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['username']."' and `password`='".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['password']."' and `password2`='".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['password2']."'" );
    if ( empty( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ ) )
    {
        exit( "kssdata".QQ148 );
    }
    if ( PETIME <= $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['endtime'] )
    {
        exit( "kssdata".QQ149 );
    }
    if ( 0 < $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['islock'] )
    {
        exit( "kssdata".QQ150 );
    }
}
$_obfuscate_ho6VjYuRh5SJkomOjouOiY4ÿ = _obfuscate_iZONjY2Nk42Ji42LjIeOj5Qÿ( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['username'] );
if ( $_obfuscate_ho6VjYuRh5SJkomOjouOiY4ÿ !== TRUE )
{
    exit( "kssdata".QQ151.$_obfuscate_ho6VjYuRh5SJkomOjouOiY4ÿ );
}
$_obfuscate_ho6VjYuRh5SJkomOjouOiY4ÿ = _obfuscate_iZONjY2Nk42Ji42LjIeOj5Qÿ( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['password'] );
if ( $_obfuscate_ho6VjYuRh5SJkomOjouOiY4ÿ !== TRUE )
{
    exit( "kssdata".QQ152.$_obfuscate_ho6VjYuRh5SJkomOjouOiY4ÿ );
}
$_obfuscate_ho6VjYuRh5SJkomOjouOiY4ÿ = _obfuscate_iZONjY2Nk42Ji42LjIeOj5Qÿ( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['password2'] );
if ( $_obfuscate_ho6VjYuRh5SJkomOjouOiY4ÿ !== TRUE )
{
    exit( "kssdata".QQ153.$_obfuscate_ho6VjYuRh5SJkomOjouOiY4ÿ );
}
$_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJAÿ( "select * from kss_z_user_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYsÿ." where `username`='".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['username']."'" );
if ( empty( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ ) )
{
    exit( "kssdata".QQ154 );
}
if ( PETIME <= $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['endtime'] )
{
    exit( "kssdata".QQ155 );
}
if ( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['password2'] != $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['password2'] )
{
    exit( "kssdata".QQ156 );
}
if ( 0 < $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['islock'] )
{
    exit( "kssdata".QQ157 );
}
$_obfuscate_ho6VjYuRh5SJkomOjouOiY4ÿ = _obfuscate_iZONjY2Nk42Ji42LjIeOj5Qÿ( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['bdinfo'] );
if ( $_obfuscate_ho6VjYuRh5SJkomOjouOiY4ÿ !== TRUE )
{
    exit( "kssdata".QQ158.$_obfuscate_ho6VjYuRh5SJkomOjouOiY4ÿ );
}
$_obfuscate_jJCMkpKRj4mNh4eNjpKGi4gÿ = array( );
$_obfuscate_lI6Oh5CKh42Ri5STio2HjpEÿ = "";
if ( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['bdinfo'] != "" )
{
    if ( strlen( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['bdinfo'] ) < 3 )
    {
        exit( "kssdata".QQ159 );
    }
    if ( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['bdinfo'] == $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['bdinfo'] )
    {
        exit( "kssdata".QQ160 );
    }
    $_obfuscate_jJCMkpKRj4mNh4eNjpKGi4gÿ['bdinfo'] = $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['bdinfo'];
    if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['onlyonebdinfo'] == "1" )
    {
        $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJAÿ( "SELECT * from `kss_z_user_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYsÿ."` where `bdinfo`='".mysql_real_escape_string( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['bdinfo'] )."'" );
        if ( empty( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ ) )
        {
            exit( "kssdata".QQ260 );
        }
    }
    if ( 0 < $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['editbdinfo_changetime'] )
    {
        if ( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['endtime'] - $_obfuscate_jomPk5WKioeLipGGi4_PhpMÿ < $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['editbdinfo_changetime'] * 86400 )
        {
            exit( "kssdata".QQ161.$_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['editbdinfo_changetime']."å¤©ï¼" );
        }
        $_obfuscate_jJCMkpKRj4mNh4eNjpKGi4gÿ['cday'] = $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['cday'] - $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['editbdinfo_changetime'];
        $_obfuscate_jJCMkpKRj4mNh4eNjpKGi4gÿ['endtime'] = $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['starttime'] + $_obfuscate_jJCMkpKRj4mNh4eNjpKGi4gÿ['cday'] * 86400;
        $_obfuscate_lI6Oh5CKh42Ri5STio2HjpEÿ = "insert into kss_z_cz_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYsÿ." (`addtime`,`cztype`,`username`,`oldcday`,`newcday`,`oldtimes`,`newtimes`,`keys`,`tzxguser`) values (".$_obfuscate_jomPk5WKioeLipGGi4_PhpMÿ.",5,'".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['username']."',".$_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['cday'].",".$_obfuscate_jJCMkpKRj4mNh4eNjpKGi4gÿ['cday'].",".$_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['points'].",".$_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['points'].",'".$_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['bdinfo']." - ".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['bdinfo']."','')";
        exit( "kssdata".QQ162 );
    }
    if ( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['bdinfo'] != "" && $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['softmode'] == "KSOFT" )
    {
        exit( "kssdata".QQ163 );
    }
    if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['softmode'] == "USOFT" && $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['password'] != $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['password'] )
    {
        if ( strlen( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['password'] ) < 5 )
        {
            exit( "kssdata".QQ164 );
        }
        $_obfuscate_jJCMkpKRj4mNh4eNjpKGi4gÿ['password'] = $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['password'];
    }
    if ( empty( $_obfuscate_jJCMkpKRj4mNh4eNjpKGi4gÿ ) )
    {
        exit( "kssdata".QQ165 );
    }
    $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5Uÿ = $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['username']( "kss_z_user_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYsÿ, $_obfuscate_jJCMkpKRj4mNh4eNjpKGi4gÿ, "username='".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['username']."'", "sql" );
    $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5Uÿ, "sync" );
    if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ !== TRUE )
    {
        exit( "kssdata".QQ166.$_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4ÿ( ) );
    }
    if ( $_obfuscate_lI6Oh5CKh42Ri5STio2HjpEÿ != "" )
    {
        $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( $_obfuscate_lI6Oh5CKh42Ri5STio2HjpEÿ, "sync" );
        if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ !== TRUE )
        {
            _obfuscate_h4aIlI6QlYmUkY6MlI6Qhosÿ( $_obfuscate_lI6Oh5CKh42Ri5STio2HjpEÿ, $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4ÿ( ), __FILE__, 111 );
        }
    }
    exit( "kssdata".QQ167 );
?>
