<?php
/*********************/
/*                   */
/*  Dezend for PHP5  */
/*         NWS       */
/*      Nulled.WS    */
/*                   */
/*********************/

class PHPzip
{

    public $file_count = 0;
    public $datastr_len = 0;
    public $dirstr_len = 0;
    public $filedata = "";
    public $fp;
    public $dirstr = "";

    public function unix2DosTime( $unixtime = 0 )
    {
        $timearray = $unixtime == 0 ? getdate( ) : getdate( $unixtime );
        if ( $timearray['year'] < 1980 )
        {
            $timearray['year'] = 1980;
            $timearray['mon'] = 1;
            $timearray['mday'] = 1;
            $timearray['hours'] = 0;
            $timearray['minutes'] = 0;
            $timearray['seconds'] = 0;
        }
        return $timearray['year'] - 1980 << 25 | $timearray['mon'] << 21 | $timearray['mday'] << 16 | $timearray['hours'] << 11 | $timearray['minutes'] << 5 | $timearray['seconds'] >> 1;
    }

    public function startfile( $path )
    {
        if ( $this->fp = fopen( $path, "w" ) )
        {
            return TRUE;
        }
        return FALSE;
    }

    public function addfile( $data, $name )
    {
        $name = str_replace( "\\", "/", $name );
        if ( strrchr( $name, "/" ) == "/" )
        {
            return $this->adddir( $name );
        }
        $dtime = dechex( $this->unix2DosTime( ) );
        $hexdtime = "\\x".$dtime[6].$dtime[7]."\\x".$dtime[4].$dtime[5]."\\x".$dtime[2].$dtime[3]."\\x".$dtime[0].$dtime[1];
        eval( "\$hexdtime = ".YH2."".$hexdtime."".YH2.";" );
        $unc_len = strlen( $data );
        $crc = crc32( $data );
        $zdata = gzcompress( $data );
        $c_len = strlen( $zdata );
        $zdata = substr( substr( $zdata, 0, strlen( $zdata ) - 4 ), 2 );
        $datastr = "PK\x03\x04";
        $datastr .= "\x14\x00";
        $datastr .= "\x00\x00";
        $datastr .= "\x08\x00";
        $datastr .= $hexdtime;
        $datastr .= pack( "V", $crc );
        $datastr .= pack( "V", $c_len );
        $datastr .= pack( "V", $unc_len );
        $datastr .= pack( "v", strlen( $name ) );
        $datastr .= pack( "v", 0 );
        $datastr .= $name;
        $datastr .= $zdata;
        $datastr .= pack( "V", $crc );
        $datastr .= pack( "V", $c_len );
        $datastr .= pack( "V", $unc_len );
        fwrite( $this->fp, $datastr );
        $my_datastr_len = strlen( $datastr );
        unset( $datastr );
        $dirstr = "PK\x01\x02";
        $dirstr .= "\x00\x00";
        $dirstr .= "\x14\x00";
        $dirstr .= "\x00\x00";
        $dirstr .= "\x08\x00";
        $dirstr .= $hexdtime;
        $dirstr .= pack( "V", $crc );
        $dirstr .= pack( "V", $c_len );
        $dirstr .= pack( "V", $unc_len );
        $dirstr .= pack( "v", strlen( $name ) );
        $dirstr .= pack( "v", 0 );
        $dirstr .= pack( "v", 0 );
        $dirstr .= pack( "v", 0 );
        $dirstr .= pack( "v", 0 );
        $dirstr .= pack( "V", 32 );
        $dirstr .= pack( "V", $this->datastr_len );
        $dirstr .= $name;
        $ && _39455136 .= "dirstr";
        $this->file_count++;
        $ && _39455136 += "dirstr_len";
        $ && _39455264 += "datastr_len";
    }

    public function adddir( $name )
    {
        $name = str_replace( "\\", "/", $name );
        $datastr = "PK\x03\x04\n\x00\x00\x00\x00\x00\x00\x00\x00\x00";
        $datastr .= pack( "V", 0 ).pack( "V", 0 ).pack( "V", 0 ).pack( "v", strlen( $name ) );
        $datastr .= pack( "v", 0 ).$name.pack( "V", 0 ).pack( "V", 0 ).pack( "V", 0 );
        fwrite( $this->fp, $datastr );
        $my_datastr_len = strlen( $datastr );
        unset( $datastr );
        $dirstr = "PK\x01\x02\x00\x00\n\x00\x00\x00\x00\x00\x00\x00\x00\x00";
        $dirstr .= pack( "V", 0 ).pack( "V", 0 ).pack( "V", 0 ).pack( "v", strlen( $name ) );
        $dirstr .= pack( "v", 0 ).pack( "v", 0 ).pack( "v", 0 ).pack( "v", 0 );
        $dirstr .= pack( "V", 16 ).pack( "V", $this->datastr_len ).$name;
        $ && _39456760 .= "dirstr";
        $this->file_count++;
        $ && _39456760 += "dirstr_len";
        $ && _39456880 += "datastr_len";
    }

    public function createfile( )
    {
        $endstr = "PK\x05\x06\x00\x00\x00\x00".pack( "v", $this->file_count ).pack( "v", $this->file_count ).pack( "V", $this->dirstr_len ).pack( "V", $this->datastr_len )."\x00\x00";
        fwrite( $this->fp, $this->dirstr.$endstr );
        fclose( $this->fp );
    }

}

?>
