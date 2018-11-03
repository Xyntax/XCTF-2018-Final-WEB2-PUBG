<?php
/**
 * Created by PhpStorm.
 * User: xy
 * Date: 2018/11/2
 * Time: 上午11:43
 */

function filter( $_content )
{
    $_packed = unpack( "C*", $_content );
    foreach ( $_packed as $item )
    {
        if ( !( $item < 48 ) && !( 57 < $item ) || !( $item != 45 ) )
        {
            return FALSE;
            break;
        }
    }
    return TRUE;
}


$a=$_GET['a'];
if ( !filter( $a ) )
{
    exit( "notifyid invalid!" );
}
echo $a;