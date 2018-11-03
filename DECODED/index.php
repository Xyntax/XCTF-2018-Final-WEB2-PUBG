<?php
/*********************/
/*                   */
/*  Dezend for PHP5  */
/*         NWS       */
/*      Nulled.WS    */
/*                   */
/*********************/

if ( is_file( "config_ksreg.php" ) )
{
    include( "config_ksreg.php" );
    if ( is_file( "install/install.sql" ) )
    {
        header( "location:"._MMFUN_e58f74c5ea3d676934( )."/install/index.php" );
        exit( );
    }
    if ( LOGINADMIN == 1 )
    {
        header( "location:"._MMFUN_e58f74c5ea3d676934( ).KS_PATH."/index.php" );
    }
    else if ( LOGINADMIN == 0 )
    {
        header( "location:"._MMFUN_e58f74c5ea3d676934( ).KS_PATH_PAY."/card.php?userid=10000" );
    }
    else
    {
        echo "<p align=center><div style='margin:100px 0 0 0'><img src=./ksreg_public/images/noweb.gif></div></p>";
    }
}
else
{
    require( "./kss_inc/inc.php" );
    header( "location:".HOMEPAGEGOTO );
}
?>
