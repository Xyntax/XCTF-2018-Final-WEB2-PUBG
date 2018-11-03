<?php
/*********************/
/*                   */
/*  Dezend for PHP5  */
/*         NWS       */
/*      Nulled.WS    */
/*                   */
/*********************/

class SMTP
{

    public $SMTP_PORT = 25;
    public $CRLF = "\r\n";
    public $do_debug;
    public $do_verp = FALSE;
    private $smtp_conn;
    private $error;
    private $helo_rply;

    public function __construct( )
    {
        $this->smtp_conn = 0;
        $this->error = NULL;
        $this->helo_rply = NULL;
        $this->do_debug = 0;
    }

    public function Connect( $host, $port = 0, $tval = 30 )
    {
        $this->error = NULL;
        if ( $this->connected( ) )
        {
            $this->error = array( "error" => "Already connected to a server" );
            return FALSE;
        }
        if ( empty( $port ) )
        {
            $port = $this->SMTP_PORT;
        }
        $this->smtp_conn = fsockopen( $host, $port, $errno, $errstr, $tval );
        if ( empty( $this->smtp_conn ) )
        {
            $this->error = array( "error" => "Failed to connect to server", "errno" => $errno, "errstr" => $errstr );
            if ( 1 <= $this->do_debug )
            {
                echo "SMTP -> ERROR: ".$this->error['error'].": {$errstr} ({$errno})".$this->CRLF."<br />";
            }
            return FALSE;
        }
        if ( substr( PHP_OS, 0, 3 ) != "WIN" )
        {
            socket_set_timeout( $this->smtp_conn, $tval, 0 );
        }
        $announce = $this->get_lines( );
        if ( 2 <= $this->do_debug )
        {
            echo "SMTP -> FROM SERVER:".$announce.$this->CRLF."<br />";
        }
        return TRUE;
    }

    public function StartTLS( )
    {
        $this->error = NULL;
        if ( !$this->connected( ) )
        {
            $this->error = array( "error" => "Called StartTLS() without being connected" );
            return FALSE;
        }
        fputs( $this->smtp_conn, "STARTTLS".$this->CRLF );
        $rply = $this->get_lines( );
        $code = substr( $rply, 0, 3 );
        if ( 2 <= $this->do_debug )
        {
            echo "SMTP -> FROM SERVER:".$rply.$this->CRLF."<br />";
        }
        if ( $code != 220 )
        {
            $this->error = array( "error" => "STARTTLS not accepted from server", "smtp_code" => $code, "smtp_msg" => substr( $rply, 4 ) );
            if ( 1 <= $this->do_debug )
            {
                echo "SMTP -> ERROR: ".$this->error['error'].": ".$rply.$this->CRLF."<br />";
            }
            return FALSE;
        }
        if ( !stream_socket_enable_crypto( $this->smtp_conn, TRUE, STREAM_CRYPTO_METHOD_TLS_CLIENT ) )
        {
            return FALSE;
        }
        return TRUE;
    }

    public function Authenticate( $username, $password )
    {
        fputs( $this->smtp_conn, "AUTH LOGIN".$this->CRLF );
        $rply = $this->get_lines( );
        $code = substr( $rply, 0, 3 );
        if ( $code != 334 )
        {
            $this->error = array( "error" => "AUTH not accepted from server", "smtp_code" => $code, "smtp_msg" => substr( $rply, 4 ) );
            if ( 1 <= $this->do_debug )
            {
                echo "SMTP -> ERROR: ".$this->error['error'].": ".$rply.$this->CRLF."<br />";
            }
            return FALSE;
        }
        fputs( $this->smtp_conn, base64_encode( $username ).$this->CRLF );
        $rply = $this->get_lines( );
        $code = substr( $rply, 0, 3 );
        if ( $code != 334 )
        {
            $this->error = array( "error" => "Username not accepted from server", "smtp_code" => $code, "smtp_msg" => substr( $rply, 4 ) );
            if ( 1 <= $this->do_debug )
            {
                echo "SMTP -> ERROR: ".$this->error['error'].": ".$rply.$this->CRLF."<br />";
            }
            return FALSE;
        }
        fputs( $this->smtp_conn, base64_encode( $password ).$this->CRLF );
        $rply = $this->get_lines( );
        $code = substr( $rply, 0, 3 );
        if ( $code != 235 )
        {
            $this->error = array( "error" => "Password not accepted from server", "smtp_code" => $code, "smtp_msg" => substr( $rply, 4 ) );
            if ( 1 <= $this->do_debug )
            {
                echo "SMTP -> ERROR: ".$this->error['error'].": ".$rply.$this->CRLF."<br />";
            }
            return FALSE;
        }
        return TRUE;
    }

    public function Connected( )
    {
        if ( !empty( $this->smtp_conn ) )
        {
            $sock_status = socket_get_status( $this->smtp_conn );
            if ( $sock_status['eof'] )
            {
                if ( 1 <= $this->do_debug )
                {
                    echo "SMTP -> NOTICE:".$this->CRLF."EOF caught while checking if connected";
                }
                $this->Close( );
                return FALSE;
            }
            return TRUE;
        }
        return FALSE;
    }

    public function Close( )
    {
        $this->error = NULL;
        $this->helo_rply = NULL;
        if ( !empty( $this->smtp_conn ) )
        {
            fclose( $this->smtp_conn );
            $this->smtp_conn = 0;
        }
    }

    public function Data( $msg_data )
    {
        $this->error = NULL;
        if ( !$this->connected( ) )
        {
            $this->error = array( "error" => "Called Data() without being connected" );
            return FALSE;
        }
        fputs( $this->smtp_conn, "DATA".$this->CRLF );
        $rply = $this->get_lines( );
        $code = substr( $rply, 0, 3 );
        if ( 2 <= $this->do_debug )
        {
            echo "SMTP -> FROM SERVER:".$rply.$this->CRLF."<br />";
        }
        if ( $code != 354 )
        {
            $this->error = array( "error" => "DATA command not accepted from server", "smtp_code" => $code, "smtp_msg" => substr( $rply, 4 ) );
            if ( 1 <= $this->do_debug )
            {
                echo "SMTP -> ERROR: ".$this->error['error'].": ".$rply.$this->CRLF."<br />";
            }
            return FALSE;
        }
        $msg_data = str_replace( "\r\n", "\n", $msg_data );
        $msg_data = str_replace( "\r", "\n", $msg_data );
        $lines = explode( "\n", $msg_data );
        $field = substr( $lines[0], 0, strpos( $lines[0], ":" ) );
        $in_headers = FALSE;
        if ( !empty( $field ) && !strstr( $field, " " ) )
        {
            $in_headers = TRUE;
        }
        $max_line_length = 998;
        while ( @list( , $line ) = each( $lines ) )
        {
            $lines_out = NULL;
            if ( $line == "" && $in_headers )
            {
                $in_headers = FALSE;
            }
            while ( $max_line_length < strlen( $line ) )
            {
                $pos = strrpos( substr( $line, 0, $max_line_length ), " " );
                if ( !$pos )
                {
                    $pos = $max_line_length - 1;
                    $lines_out[] = substr( $line, 0, $pos );
                    $line = substr( $line, $pos );
                }
                else
                {
                    $lines_out[] = substr( $line, 0, $pos );
                    $line = substr( $line, $pos + 1 );
                }
                if ( $in_headers )
                {
                    $line = "\t".$line;
                }
            }
            $lines_out[] = $line;
            while ( @list( , $line_out ) = each( $lines_out ) )
            {
                if ( 0 < strlen( $line_out ) )
                {
                    if ( substr( $line_out, 0, 1 ) == "." )
                    {
                        $line_out = ".".$line_out;
                    }
                }
                fputs( $this->smtp_conn, $line_out.$this->CRLF );
            }
        }
        fputs( $this->smtp_conn, $this->CRLF.".".$this->CRLF );
        $rply = $this->get_lines( );
        $code = substr( $rply, 0, 3 );
        if ( 2 <= $this->do_debug )
        {
            echo "SMTP -> FROM SERVER:".$rply.$this->CRLF."<br />";
        }
        if ( $code != 250 )
        {
            $this->error = array( "error" => "DATA not accepted from server", "smtp_code" => $code, "smtp_msg" => substr( $rply, 4 ) );
            if ( 1 <= $this->do_debug )
            {
                echo "SMTP -> ERROR: ".$this->error['error'].": ".$rply.$this->CRLF."<br />";
            }
            return FALSE;
        }
        return TRUE;
    }

    public function Hello( $host = "" )
    {
        $this->error = NULL;
        if ( !$this->connected( ) )
        {
            $this->error = array( "error" => "Called Hello() without being connected" );
            return FALSE;
        }
        if ( empty( $host ) )
        {
            $host = "localhost";
        }
        if ( !$this->SendHello( "EHLO", $host ) )
        {
            if ( !$this->SendHello( "HELO", $host ) )
            {
                return FALSE;
            }
        }
        return TRUE;
    }

    private function SendHello( $hello, $host )
    {
        fputs( $this->smtp_conn, $hello." ".$host.$this->CRLF );
        $rply = $this->get_lines( );
        $code = substr( $rply, 0, 3 );
        if ( 2 <= $this->do_debug )
        {
            echo "SMTP -> FROM SERVER: ".$rply.$this->CRLF."<br />";
        }
        if ( $code != 250 )
        {
            $this->error = array( "error" => $hello." not accepted from server", "smtp_code" => $code, "smtp_msg" => substr( $rply, 4 ) );
            if ( 1 <= $this->do_debug )
            {
                echo "SMTP -> ERROR: ".$this->error['error'].": ".$rply.$this->CRLF."<br />";
            }
            return FALSE;
        }
        $this->helo_rply = $rply;
        return TRUE;
    }

    public function Mail( $from )
    {
        $this->error = NULL;
        if ( !$this->connected( ) )
        {
            $this->error = array( "error" => "Called Mail() without being connected" );
            return FALSE;
        }
        $useVerp = $this->do_verp ? "XVERP" : "";
        fputs( $this->smtp_conn, "MAIL FROM:<".$from.">".$useVerp.$this->CRLF );
        $rply = $this->get_lines( );
        $code = substr( $rply, 0, 3 );
        if ( 2 <= $this->do_debug )
        {
            echo "SMTP -> FROM SERVER:".$rply.$this->CRLF."<br />";
        }
        if ( $code != 250 )
        {
            $this->error = array( "error" => "MAIL not accepted from server", "smtp_code" => $code, "smtp_msg" => substr( $rply, 4 ) );
            if ( 1 <= $this->do_debug )
            {
                echo "SMTP -> ERROR: ".$this->error['error'].": ".$rply.$this->CRLF."<br />";
            }
            return FALSE;
        }
        return TRUE;
    }

    public function Quit( $close_on_error = TRUE )
    {
        $this->error = NULL;
        if ( !$this->connected( ) )
        {
            $this->error = array( "error" => "Called Quit() without being connected" );
            return FALSE;
        }
        fputs( $this->smtp_conn, "quit".$this->CRLF );
        $byemsg = $this->get_lines( );
        if ( 2 <= $this->do_debug )
        {
            echo "SMTP -> FROM SERVER:".$byemsg.$this->CRLF."<br />";
        }
        $rval = TRUE;
        $e = NULL;
        $code = substr( $byemsg, 0, 3 );
        if ( $code != 221 )
        {
            $e = array( "error" => "SMTP server rejected quit command", "smtp_code" => $code, "smtp_rply" => substr( $byemsg, 4 ) );
            $rval = FALSE;
            if ( 1 <= $this->do_debug )
            {
                echo "SMTP -> ERROR: ".$e['error'].": ".$byemsg.$this->CRLF."<br />";
            }
        }
        if ( empty( $e ) || $close_on_error )
        {
            $this->Close( );
        }
        return $rval;
    }

    public function Recipient( $to )
    {
        $this->error = NULL;
        if ( !$this->connected( ) )
        {
            $this->error = array( "error" => "Called Recipient() without being connected" );
            return FALSE;
        }
        fputs( $this->smtp_conn, "RCPT TO:<".$to.">".$this->CRLF );
        $rply = $this->get_lines( );
        $code = substr( $rply, 0, 3 );
        if ( 2 <= $this->do_debug )
        {
            echo "SMTP -> FROM SERVER:".$rply.$this->CRLF."<br />";
        }
        if ( $code != 250 && $code != 251 )
        {
            $this->error = array( "error" => "RCPT not accepted from server", "smtp_code" => $code, "smtp_msg" => substr( $rply, 4 ) );
            if ( 1 <= $this->do_debug )
            {
                echo "SMTP -> ERROR: ".$this->error['error'].": ".$rply.$this->CRLF."<br />";
            }
            return FALSE;
        }
        return TRUE;
    }

    public function Reset( )
    {
        $this->error = NULL;
        if ( !$this->connected( ) )
        {
            $this->error = array( "error" => "Called Reset() without being connected" );
            return FALSE;
        }
        fputs( $this->smtp_conn, "RSET".$this->CRLF );
        $rply = $this->get_lines( );
        $code = substr( $rply, 0, 3 );
        if ( 2 <= $this->do_debug )
        {
            echo "SMTP -> FROM SERVER:".$rply.$this->CRLF."<br />";
        }
        if ( $code != 250 )
        {
            $this->error = array( "error" => "RSET failed", "smtp_code" => $code, "smtp_msg" => substr( $rply, 4 ) );
            if ( 1 <= $this->do_debug )
            {
                echo "SMTP -> ERROR: ".$this->error['error'].": ".$rply.$this->CRLF."<br />";
            }
            return FALSE;
        }
        return TRUE;
    }

    public function SendAndMail( $from )
    {
        $this->error = NULL;
        if ( !$this->connected( ) )
        {
            $this->error = array( "error" => "Called SendAndMail() without being connected" );
            return FALSE;
        }
        fputs( $this->smtp_conn, "SAML FROM:".$from.$this->CRLF );
        $rply = $this->get_lines( );
        $code = substr( $rply, 0, 3 );
        if ( 2 <= $this->do_debug )
        {
            echo "SMTP -> FROM SERVER:".$rply.$this->CRLF."<br />";
        }
        if ( $code != 250 )
        {
            $this->error = array( "error" => "SAML not accepted from server", "smtp_code" => $code, "smtp_msg" => substr( $rply, 4 ) );
            if ( 1 <= $this->do_debug )
            {
                echo "SMTP -> ERROR: ".$this->error['error'].": ".$rply.$this->CRLF."<br />";
            }
            return FALSE;
        }
        return TRUE;
    }

    public function Turn( )
    {
        $this->error = array( "error" => "This method, TURN, of the SMTP ".( "is not implemented" ) );
        if ( 1 <= $this->do_debug )
        {
            echo "SMTP -> NOTICE: ".$this->error['error'].$this->CRLF."<br />";
        }
        return FALSE;
    }

    public function getError( )
    {
        return $this->error;
    }

    private function get_lines( )
    {
        $data = "";
        while ( $str = @fgets( @$this->smtp_conn, 515 ) )
        {
            if ( 4 <= $this->do_debug )
            {
                echo "SMTP -> get_lines(): \$data was \"{$data}\"".$this->CRLF."<br />";
                echo "SMTP -> get_lines(): \$str is \"{$str}\"".$this->CRLF."<br />";
            }
            $data .= $str;
            if ( 4 <= $this->do_debug )
            {
                echo "SMTP -> get_lines(): \$data is \"{$data}\"".$this->CRLF."<br />";
            }
            if ( substr( $str, 3, 1 ) == " " )
            {
                break;
            }
        }
        return $data;
    }

}

?>
