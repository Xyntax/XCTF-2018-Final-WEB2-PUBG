<?php
/*********************/
/*                   */
/*  Dezend for PHP5  */
/*         NWS       */
/*      Nulled.WS    */
/*                   */
/*********************/

function _obfuscate_iIuSi4iHkIaKiouRj5WTk4k�( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� = 1 )
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
if ( SVRID == 2 )
{
    exit( "kssdata".QQ146 );
}
if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['softmode'] == "KSOFT" )
{
    $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['czkey'] = $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username'];
    if ( strlen( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['czkey'] ) != 32 )
    {
        exit( "kssdata".QQ123 );
    }
    if ( _obfuscate_joeQipOGjouJko_VlJSKiJE�( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['czkey'] ) )
    {
        exit( "kssdata".QQ147 );
    }
    $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username'] = substr( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['czkey'], 0, 10 );
    $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['password'] = substr( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['czkey'], 10, 10 );
    $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['password2'] = substr( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['czkey'], 20 );
    $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "select * from kss_z_user_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�." where `username`='".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username']."' and `password`='".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['password']."' and `password2`='".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['password2']."'" );
    if ( empty( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg� ) )
    {
        exit( "kssdata".QQ148 );
    }
    if ( PETIME <= $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['endtime'] )
    {
        exit( "kssdata".QQ149 );
    }
    if ( 0 < $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['islock'] )
    {
        exit( "kssdata".QQ150 );
    }
}
$_obfuscate_ho6VjYuRh5SJkomOjouOiY4� = _obfuscate_iZONjY2Nk42Ji42LjIeOj5Q�( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username'] );
if ( $_obfuscate_ho6VjYuRh5SJkomOjouOiY4� !== TRUE )
{
    exit( "kssdata".QQ151.$_obfuscate_ho6VjYuRh5SJkomOjouOiY4� );
}
$_obfuscate_ho6VjYuRh5SJkomOjouOiY4� = _obfuscate_iZONjY2Nk42Ji42LjIeOj5Q�( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['password'] );
if ( $_obfuscate_ho6VjYuRh5SJkomOjouOiY4� !== TRUE )
{
    exit( "kssdata".QQ152.$_obfuscate_ho6VjYuRh5SJkomOjouOiY4� );
}
$_obfuscate_ho6VjYuRh5SJkomOjouOiY4� = _obfuscate_iZONjY2Nk42Ji42LjIeOj5Q�( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['password2'] );
if ( $_obfuscate_ho6VjYuRh5SJkomOjouOiY4� !== TRUE )
{
    exit( "kssdata".QQ153.$_obfuscate_ho6VjYuRh5SJkomOjouOiY4� );
}
$_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "select * from kss_z_user_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�." where `username`='".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username']."'" );
if ( empty( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg� ) )
{
    exit( "kssdata".QQ154 );
}
if ( PETIME <= $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['endtime'] )
{
    exit( "kssdata".QQ155 );
}
if ( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['password2'] != $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['password2'] )
{
    exit( "kssdata".QQ156 );
}
if ( 0 < $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['islock'] )
{
    exit( "kssdata".QQ157 );
}
$_obfuscate_ho6VjYuRh5SJkomOjouOiY4� = _obfuscate_iZONjY2Nk42Ji42LjIeOj5Q�( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['bdinfo'] );
if ( $_obfuscate_ho6VjYuRh5SJkomOjouOiY4� !== TRUE )
{
    exit( "kssdata".QQ158.$_obfuscate_ho6VjYuRh5SJkomOjouOiY4� );
}
$_obfuscate_jJCMkpKRj4mNh4eNjpKGi4g� = array( );
$_obfuscate_lI6Oh5CKh42Ri5STio2HjpE� = "";
if ( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['bdinfo'] != "" )
{
    if ( strlen( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['bdinfo'] ) < 3 )
    {
        exit( "kssdata".QQ159 );
    }
    if ( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['bdinfo'] == $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['bdinfo'] )
    {
        exit( "kssdata".QQ160 );
    }
    $_obfuscate_jJCMkpKRj4mNh4eNjpKGi4g�['bdinfo'] = $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['bdinfo'];
    if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['onlyonebdinfo'] == "1" )
    {
        $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "SELECT * from `kss_z_user_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�."` where `bdinfo`='".mysql_real_escape_string( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['bdinfo'] )."'" );
        if ( empty( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� ) )
        {
            exit( "kssdata".QQ260 );
        }
    }
    if ( 0 < $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['editbdinfo_changetime'] )
    {
        if ( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['endtime'] - $_obfuscate_jomPk5WKioeLipGGi4_PhpM� < $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['editbdinfo_changetime'] * 86400 )
        {
            exit( "kssdata".QQ161.$_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['editbdinfo_changetime']."天！" );
        }
        $_obfuscate_jJCMkpKRj4mNh4eNjpKGi4g�['cday'] = $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['cday'] - $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['editbdinfo_changetime'];
        $_obfuscate_jJCMkpKRj4mNh4eNjpKGi4g�['endtime'] = $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['starttime'] + $_obfuscate_jJCMkpKRj4mNh4eNjpKGi4g�['cday'] * 86400;
        $_obfuscate_lI6Oh5CKh42Ri5STio2HjpE� = "insert into kss_z_cz_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�." (`addtime`,`cztype`,`username`,`oldcday`,`newcday`,`oldtimes`,`newtimes`,`keys`,`tzxguser`) values (".$_obfuscate_jomPk5WKioeLipGGi4_PhpM�.",5,'".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username']."',".$_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['cday'].",".$_obfuscate_jJCMkpKRj4mNh4eNjpKGi4g�['cday'].",".$_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['points'].",".$_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['points'].",'".$_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['bdinfo']." - ".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['bdinfo']."','')";
        exit( "kssdata".QQ162 );
    }
    if ( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['bdinfo'] != "" && $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['softmode'] == "KSOFT" )
    {
        exit( "kssdata".QQ163 );
    }
    if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['softmode'] == "USOFT" && $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['password'] != $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['password'] )
    {
        if ( strlen( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['password'] ) < 5 )
        {
            exit( "kssdata".QQ164 );
        }
        $_obfuscate_jJCMkpKRj4mNh4eNjpKGi4g�['password'] = $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['password'];
    }
    if ( empty( $_obfuscate_jJCMkpKRj4mNh4eNjpKGi4g� ) )
    {
        exit( "kssdata".QQ165 );
    }
    $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5U� = $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username']( "kss_z_user_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�, $_obfuscate_jJCMkpKRj4mNh4eNjpKGi4g�, "username='".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username']."'", "sql" );
    $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5U�, "sync" );
    if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� !== TRUE )
    {
        exit( "kssdata".QQ166.$_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4�( ) );
    }
    if ( $_obfuscate_lI6Oh5CKh42Ri5STio2HjpE� != "" )
    {
        $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( $_obfuscate_lI6Oh5CKh42Ri5STio2HjpE�, "sync" );
        if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� !== TRUE )
        {
            _obfuscate_h4aIlI6QlYmUkY6MlI6Qhos�( $_obfuscate_lI6Oh5CKh42Ri5STio2HjpE�, $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4�( ), __FILE__, 111 );
        }
    }
    exit( "kssdata".QQ167 );
?>
