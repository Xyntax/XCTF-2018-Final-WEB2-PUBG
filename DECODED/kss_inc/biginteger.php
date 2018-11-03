<?php
/*********************/
/*                   */
/*  Dezend for PHP5  */
/*         NWS       */
/*      Nulled.WS    */
/*                   */
/*********************/

class Math_BigInteger
{

    public $value;
    public $is_negative = FALSE;
    public $generator = "mt_rand";
    public $precision = -1;
    public $bitmask = FALSE;
    public $hex;

    public function __construct( $x = 0, $base = 10 )
    {
        if ( !defined( "MATH_BIGINTEGER_BASE" ) )
        {
            switch ( PHP_INT_SIZE )
            {
                case 8 :
                    define( "MATH_BIGINTEGER_BASE", 31 );
                    define( "MATH_BIGINTEGER_BASE_FULL", 2.14748e+009 );
                    define( "MATH_BIGINTEGER_MAX_DIGIT", 2147483647 );
                    define( "MATH_BIGINTEGER_MSB", 1073741824 );
                    define( "MATH_BIGINTEGER_MAX10", 1000000000 );
                    define( "MATH_BIGINTEGER_MAX10_LEN", 9 );
                    define( "MATH_BIGINTEGER_MAX_DIGIT2", pow( 2, 62 ) );
                    break;
                default :
            }
            do
            {
                define( "MATH_BIGINTEGER_BASE", 26 );
                define( "MATH_BIGINTEGER_BASE_FULL", 67108864 );
                define( "MATH_BIGINTEGER_MAX_DIGIT", 67108863 );
                define( "MATH_BIGINTEGER_MSB", 33554432 );
                define( "MATH_BIGINTEGER_MAX10", 10000000 );
                define( "MATH_BIGINTEGER_MAX10_LEN", 7 );
                define( "MATH_BIGINTEGER_MAX_DIGIT2", pow( 2, 52 ) );
                break;
            } while ( 1 );
        }
        $this->value = array( );
        if ( empty( $x ) && ( abs( $base ) != 256 || $x !== "0" ) )
        {
            return;
        }
    case 0 - 256 :
        switch ( $base )
        {
                if ( ord( $x[0] ) & 128 )
                {
                    $x = ~$x;
                    $this->is_negative = TRUE;
                }
        }
        switch ( $base )
        {
            case 256 :
                while ( strlen( $x ) )
                {
                    $this->value[] = $this->_bytes2int( $this->_base256_rshift( $x, MATH_BIGINTEGER_BASE ) );
                }
                if ( $this->is_negative )
                {
                    $temp = $this->add( new Math_BigInteger( "-1" ) );
                    $this->value = $temp->value;
                }
                break;
            case 16 :
            case 0 - 16 :
                if ( 0 < $base && $x[0] == "-" )
                {
                    $this->is_negative = TRUE;
                    $x = substr( $x, 1 );
                }
                $x = preg_replace( "#^(?:0x)?([A-Fa-f0-9]*).*#", "$1", $x );
                $is_negative = FALSE;
                if ( $base < 0 && 8 <= hexdec( $x[0] ) )
                {
                    $this->is_negative = $is_negative = TRUE;
                    $x = bin2hex( ~pack( "H*", $x ) );
                }
                $x = strlen( $x ) & 1 ? "0".$x : $x;
                $temp = new Math_BigInteger( pack( "H*", $x ), 256 );
                $this->value = $temp->value;
                if ( $is_negative )
                {
                    $temp = $this->add( new Math_BigInteger( "-1" ) );
                    $this->value = $temp->value;
                }
                break;
            case 10 :
            case 0 - 10 :
                $x = preg_replace( "#(?<!^)(?:-).*|(?<=^|-)0*|[^-0-9].*#", "", $x );
                $temp = new Math_BigInteger( );
                $multiplier = new Math_BigInteger( );
                $multiplier->value = array( MATH_BIGINTEGER_MAX10 );
                if ( $x[0] == "-" )
                {
                    $this->is_negative = TRUE;
                    $x = substr( $x, 1 );
                }
                $x = str_pad( $x, strlen( $x ) + ( MATH_BIGINTEGER_MAX10_LEN - 1 ) * strlen( $x ) % MATH_BIGINTEGER_MAX10_LEN, 0, STR_PAD_LEFT );
                while ( strlen( $x ) )
                {
                    $temp = $temp->multiply( $multiplier );
                    $temp = $temp->add( new Math_BigInteger( $this->_int2bytes( substr( $x, 0, MATH_BIGINTEGER_MAX10_LEN ) ), 256 ) );
                    $x = substr( $x, MATH_BIGINTEGER_MAX10_LEN );
                }
                $this->value = $temp->value;
                break;
            case 2 :
            case 0 - 2 :
                if ( 0 < $base && $x[0] == "-" )
                {
                    $this->is_negative = TRUE;
                    $x = substr( $x, 1 );
                }
                $x = preg_replace( "#^([01]*).*#", "$1", $x );
                $x = str_pad( $x, strlen( $x ) + 3 * strlen( $x ) % 4, 0, STR_PAD_LEFT );
                $str = "0x";
                while ( strlen( $x ) )
                {
                    $part = substr( $x, 0, 4 );
                    $str .= dechex( bindec( $part ) );
                    $x = substr( $x, 4 );
                }
                if ( $this->is_negative )
                {
                    $str = "-".$str;
                }
                $temp = new Math_BigInteger( $str, 8 * $base );
                $this->value = $temp->value;
                $this->is_negative = $temp->is_negative;
                break;
            default :
                do
                {
                    break;
                } while ( 1 );
        }
    }

    public function Math_BigInteger( $x = 0, $base = 10 )
    {
        ( $x, $base );
    }

    public function toBytes( $twos_compliment = FALSE )
    {
        if ( $twos_compliment )
        {
            $comparison = $this->compare( new Math_BigInteger( ) );
            if ( $comparison == 0 )
            {
                return 0 < $this->precision ? str_repeat( chr( 0 ), $this->precision + 1 >> 3 ) : "";
            }
            $temp = $comparison < 0 ? $this->add( new Math_BigInteger( 1 ) ) : $this->copy( );
            $bytes = $temp->toBytes( );
            if ( empty( $bytes ) )
            {
                $bytes = chr( 0 );
            }
            if ( ord( $bytes[0] ) & 128 )
            {
                $bytes = chr( 0 ).$bytes;
            }
            return $comparison < 0 ? ~$bytes : $bytes;
        }
        if ( !count( $this->value ) )
        {
            return 0 < $this->precision ? str_repeat( chr( 0 ), $this->precision + 1 >> 3 ) : "";
        }
        $result = $this->_int2bytes( $this->value[count( $this->value ) - 1] );
        $temp = $this->copy( );
        $i = count( $temp->value ) - 2;
        for ( ; 0 <= $i; --$i )
        {
            $temp->_base256_lshift( $result, MATH_BIGINTEGER_BASE );
            $result = $result | str_pad( $temp->_int2bytes( $temp->value[$i] ), strlen( $result ), chr( 0 ), STR_PAD_LEFT );
        }
        return 0 < $this->precision ? str_pad( substr( $result, 0 - ( $this->precision + 7 >> 3 ) ), $this->precision + 7 >> 3, chr( 0 ), STR_PAD_LEFT ) : $result;
    }

    public function toHex( $twos_compliment = FALSE )
    {
        return bin2hex( $this->toBytes( $twos_compliment ) );
    }

    public function toBits( $twos_compliment = FALSE )
    {
        $hex = $this->toHex( $twos_compliment );
        $bits = "";
        $i = strlen( $hex ) - 8;
        $start = strlen( $hex ) & 7;
        for ( ; $start <= $i; $i -= 8 )
        {
            $bits = str_pad( decbin( hexdec( substr( $hex, $i, 8 ) ) ), 32, "0", STR_PAD_LEFT ).$bits;
        }
        if ( $start )
        {
            $bits = str_pad( decbin( hexdec( substr( $hex, 0, $start ) ) ), 8, "0", STR_PAD_LEFT ).$bits;
        }
        $result = 0 < $this->precision ? substr( $bits, 0 - $this->precision ) : ltrim( $bits, "0" );
        if ( $twos_compliment && 0 < $this->compare( new Math_BigInteger( ) ) && $this->precision <= 0 )
        {
            return "0".$result;
        }
        return $result;
    }

    public function toString( )
    {
        if ( !count( $this->value ) )
        {
            return "0";
        }
        $temp = $this->copy( );
        $temp->is_negative = FALSE;
        $divisor = new Math_BigInteger( );
        $divisor->value = array( MATH_BIGINTEGER_MAX10 );
        $result = "";
        while ( count( $temp->value ) )
        {
            list( $temp, $mod ) = $temp->divide( $divisor );
            $result = str_pad( isset( $mod->value[0] ) ? $mod->value[0] : "", MATH_BIGINTEGER_MAX10_LEN, "0", STR_PAD_LEFT ).$result;
        }
        $result = ltrim( $result, "0" );
        if ( empty( $result ) )
        {
            $result = "0";
        }
        if ( $this->is_negative )
        {
            $result = "-".$result;
        }
        return $result;
    }

    public function copy( )
    {
        $temp = new Math_BigInteger( );
        $temp->value = $this->value;
        $temp->is_negative = $this->is_negative;
        $temp->generator = $this->generator;
        $temp->precision = $this->precision;
        $temp->bitmask = $this->bitmask;
        return $temp;
    }

    public function __toString( )
    {
        return $this->toString( );
    }

    public function __clone( )
    {
        return $this->copy( );
    }

    public function __sleep( )
    {
        $this->hex = $this->toHex( TRUE );
        $vars = array( "hex" );
        if ( $this->generator != "mt_rand" )
        {
            $vars[] = "generator";
        }
        if ( 0 < $this->precision )
        {
            $vars[] = "precision";
        }
        return $vars;
    }

    public function __wakeup( )
    {
        $temp = new Math_BigInteger( $this->hex, 0 - 16 );
        $this->value = $temp->value;
        $this->is_negative = $temp->is_negative;
        $this->setRandomGenerator( $this->generator );
        if ( 0 < $this->precision )
        {
            $this->setPrecision( $this->precision );
        }
    }

    public function add( $y )
    {
        $temp = $this->_add( $this->value, $this->is_negative, $y->value, $y->is_negative );
        $result = new Math_BigInteger( );
        $result->value = $temp[MATH_BIGINTEGER_VALUE];
        $result->is_negative = $temp[MATH_BIGINTEGER_SIGN];
        return $this->_normalize( $result );
    }

    public function _add( $x_value, $x_negative, $y_value, $y_negative )
    {
        $x_size = count( $x_value );
        $y_size = count( $y_value );
        if ( $x_size == 0 )
        {
            return array( MATH_BIGINTEGER_VALUE => $y_value, MATH_BIGINTEGER_SIGN => $y_negative );
        }
        else if ( $y_size == 0 )
        {
            return array( MATH_BIGINTEGER_VALUE => $x_value, MATH_BIGINTEGER_SIGN => $x_negative );
        }
        if ( $x_negative != $y_negative )
        {
            if ( $x_value == $y_value )
            {
                return array( MATH_BIGINTEGER_VALUE => array( ), FALSE );
            }
            $temp = $this->_subtract( $x_value, FALSE, $y_value, FALSE );
            $temp[MATH_BIGINTEGER_SIGN] = 0 < $this->_compare( $x_value, FALSE, $y_value, FALSE ) ? $x_negative : $y_negative;
            return $temp;
        }
        if ( $x_size < $y_size )
        {
            $size = $x_size;
            $value = $y_value;
        }
        else
        {
            $size = $y_size;
            $value = $x_value;
        }
        $value[] = 0;
        $carry = 0;
        $i = 0;
        $j = 1;
        for ( ; $j < $size; $i += 2, $j += 2 )
        {
            $sum = $x_value[$j] * MATH_BIGINTEGER_BASE_FULL + $x_value[$i] + $y_value[$j] * MATH_BIGINTEGER_BASE_FULL + $y_value[$i] + $carry;
            $carry = MATH_BIGINTEGER_MAX_DIGIT2 <= $sum;
            $sum = $carry ? $sum - MATH_BIGINTEGER_MAX_DIGIT2 : $sum;
            $temp = ( integer )( $sum / MATH_BIGINTEGER_BASE_FULL );
            $value[$i] = ( integer )( $sum - MATH_BIGINTEGER_BASE_FULL * $temp );
            $value[$j] = $temp;
        }
        if ( $j == $size )
        {
            $sum = $x_value[$i] + $y_value[$i] + $carry;
            $carry = MATH_BIGINTEGER_BASE_FULL <= $sum;
            $value[$i] = $carry ? $sum - MATH_BIGINTEGER_BASE_FULL : $sum;
            ++$i;
        }
        if ( $carry )
        {
            for ( ; $value[$i] == MATH_BIGINTEGER_MAX_DIGIT; ++$i )
            {
                $value[$i] = 0;
            }
            ++$value[$i];
        }
        return array( MATH_BIGINTEGER_VALUE => $this->_trim( $value ), MATH_BIGINTEGER_SIGN => $x_negative );
    }

    public function subtract( $y )
    {
        $temp = $this->_subtract( $this->value, $this->is_negative, $y->value, $y->is_negative );
        $result = new Math_BigInteger( );
        $result->value = $temp[MATH_BIGINTEGER_VALUE];
        $result->is_negative = $temp[MATH_BIGINTEGER_SIGN];
        return $this->_normalize( $result );
    }

    public function _subtract( $x_value, $x_negative, $y_value, $y_negative )
    {
        $x_size = count( $x_value );
        $y_size = count( $y_value );
        if ( $x_size == 0 )
        {
            return array( MATH_BIGINTEGER_VALUE => $y_value, MATH_BIGINTEGER_SIGN => !$y_negative );
        }
        else if ( $y_size == 0 )
        {
            return array( MATH_BIGINTEGER_VALUE => $x_value, MATH_BIGINTEGER_SIGN => $x_negative );
        }
        if ( $x_negative != $y_negative )
        {
            $temp = $this->_add( $x_value, FALSE, $y_value, FALSE );
            $temp[MATH_BIGINTEGER_SIGN] = $x_negative;
            return $temp;
        }
        $diff = $this->_compare( $x_value, $x_negative, $y_value, $y_negative );
        if ( !$diff )
        {
            return array( MATH_BIGINTEGER_VALUE => array( ), FALSE );
        }
        if ( !$x_negative && $diff < 0 || $x_negative && 0 < $diff )
        {
            $temp = $x_value;
            $x_value = $y_value;
            $y_value = $temp;
            $x_negative = !$x_negative;
            $x_size = count( $x_value );
            $y_size = count( $y_value );
        }
        $carry = 0;
        $i = 0;
        $j = 1;
        for ( ; $j < $y_size; $i += 2, $j += 2 )
        {
            $sum = $x_value[$j] * MATH_BIGINTEGER_BASE_FULL + $x_value[$i] - $y_value[$j] * MATH_BIGINTEGER_BASE_FULL - $y_value[$i] - $carry;
            $carry = $sum < 0;
            $sum = $carry ? $sum + MATH_BIGINTEGER_MAX_DIGIT2 : $sum;
            $temp = ( integer )( $sum / MATH_BIGINTEGER_BASE_FULL );
            $x_value[$i] = ( integer )( $sum - MATH_BIGINTEGER_BASE_FULL * $temp );
            $x_value[$j] = $temp;
        }
        if ( $j == $y_size )
        {
            $sum = $x_value[$i] - $y_value[$i] - $carry;
            $carry = $sum < 0;
            $x_value[$i] = $carry ? $sum + MATH_BIGINTEGER_BASE_FULL : $sum;
            ++$i;
        }
        if ( $carry )
        {
            for ( ; !$x_value[$i]; ++$i )
            {
                $x_value[$i] = MATH_BIGINTEGER_MAX_DIGIT;
            }
            --$x_value[$i];
        }
        return array( MATH_BIGINTEGER_VALUE => $this->_trim( $x_value ), MATH_BIGINTEGER_SIGN => $x_negative );
    }

    public function multiply( $x )
    {
        $temp = $this->_multiply( $this->value, $this->is_negative, $x->value, $x->is_negative );
        $product = new Math_BigInteger( );
        $product->value = $temp[MATH_BIGINTEGER_VALUE];
        $product->is_negative = $temp[MATH_BIGINTEGER_SIGN];
        return $this->_normalize( $product );
    }

    public function _multiply( $x_value, $x_negative, $y_value, $y_negative )
    {
        $x_length = count( $x_value );
        $y_length = count( $y_value );
        if ( !$x_length || !$y_length )
        {
            return array( MATH_BIGINTEGER_VALUE => array( ), FALSE );
        }
        return array( MATH_BIGINTEGER_VALUE => min( $x_length, $y_length ) < 2 * MATH_BIGINTEGER_KARATSUBA_CUTOFF ? $this->_trim( $this->_regularMultiply( $x_value, $y_value ) ) : $this->_trim( $this->_karatsuba( $x_value, $y_value ) ), MATH_BIGINTEGER_SIGN => $x_negative != $y_negative );
    }

    public function _regularMultiply( $x_value, $y_value )
    {
        $x_length = count( $x_value );
        $y_length = count( $y_value );
        if ( !$x_length || !$y_length )
        {
            return array( );
        }
        if ( $x_length < $y_length )
        {
            $temp = $x_value;
            $x_value = $y_value;
            $y_value = $temp;
            $x_length = count( $x_value );
            $y_length = count( $y_value );
        }
        $product_value = $this->_array_repeat( 0, $x_length + $y_length );
        $carry = 0;
        $j = 0;
        for ( ; $j < $x_length; ++$j )
        {
            $temp = $x_value[$j] * $y_value[0] + $carry;
            $carry = ( integer )( $temp / MATH_BIGINTEGER_BASE_FULL );
            $product_value[$j] = ( integer )( $temp - MATH_BIGINTEGER_BASE_FULL * $carry );
        }
        $product_value[$j] = $carry;
        $i = 1;
        for ( ; $i < $y_length; ++$i )
        {
            $carry = 0;
            $j = 0;
            $k = $i;
            for ( ; $j < $x_length; ++$j, ++$k )
            {
                $temp = $product_value[$k] + $x_value[$j] * $y_value[$i] + $carry;
                $carry = ( integer )( $temp / MATH_BIGINTEGER_BASE_FULL );
                $product_value[$k] = ( integer )( $temp - MATH_BIGINTEGER_BASE_FULL * $carry );
            }
            $product_value[$k] = $carry;
        }
        return $product_value;
    }

    public function _karatsuba( $x_value, $y_value )
    {
        $m = min( count( $x_value ) >> 1, count( $y_value ) >> 1 );
        if ( $m < MATH_BIGINTEGER_KARATSUBA_CUTOFF )
        {
            return $this->_regularMultiply( $x_value, $y_value );
        }
        $x1 = array_slice( $x_value, $m );
        $x0 = array_slice( $x_value, 0, $m );
        $y1 = array_slice( $y_value, $m );
        $y0 = array_slice( $y_value, 0, $m );
        $z2 = $this->_karatsuba( $x1, $y1 );
        $z0 = $this->_karatsuba( $x0, $y0 );
        $z1 = $this->_add( $x1, FALSE, $x0, FALSE );
        $temp = $this->_add( $y1, FALSE, $y0, FALSE );
        $z1 = $this->_karatsuba( $z1[MATH_BIGINTEGER_VALUE], $temp[MATH_BIGINTEGER_VALUE] );
        $temp = $this->_add( $z2, FALSE, $z0, FALSE );
        $z1 = $this->_subtract( $z1, FALSE, $temp[MATH_BIGINTEGER_VALUE], FALSE );
        $z2 = array_merge( array_fill( 0, 2 * $m, 0 ), $z2 );
        $z1[MATH_BIGINTEGER_VALUE] = array_merge( array_fill( 0, $m, 0 ), $z1[MATH_BIGINTEGER_VALUE] );
        $xy = $this->_add( $z2, FALSE, $z1[MATH_BIGINTEGER_VALUE], $z1[MATH_BIGINTEGER_SIGN] );
        $xy = $this->_add( $xy[MATH_BIGINTEGER_VALUE], $xy[MATH_BIGINTEGER_SIGN], $z0, FALSE );
        return $xy[MATH_BIGINTEGER_VALUE];
    }

    public function _square( $x = FALSE )
    {
        return count( $x ) < 2 * MATH_BIGINTEGER_KARATSUBA_CUTOFF ? $this->_trim( $this->_baseSquare( $x ) ) : $this->_trim( $this->_karatsubaSquare( $x ) );
    }

    public function _baseSquare( $value )
    {
        if ( empty( $value ) )
        {
            return array( );
        }
        $square_value = $this->_array_repeat( 0, 2 * count( $value ) );
        $i = 0;
        $max_index = count( $value ) - 1;
        for ( ; $i <= $max_index; ++$i )
        {
            $i2 = $i << 1;
            $temp = $square_value[$i2] + $value[$i] * $value[$i];
            $carry = ( integer )( $temp / MATH_BIGINTEGER_BASE_FULL );
            $square_value[$i2] = ( integer )( $temp - MATH_BIGINTEGER_BASE_FULL * $carry );
            $j = $i + 1;
            $k = $i2 + 1;
            for ( ; $j <= $max_index; ++$j, ++$k )
            {
                $temp = $square_value[$k] + 2 * $value[$j] * $value[$i] + $carry;
                $carry = ( integer )( $temp / MATH_BIGINTEGER_BASE_FULL );
                $square_value[$k] = ( integer )( $temp - MATH_BIGINTEGER_BASE_FULL * $carry );
            }
            $square_value[$i + $max_index + 1] = $carry;
        }
        return $square_value;
    }

    public function _karatsubaSquare( $value )
    {
        $m = count( $value ) >> 1;
        if ( $m < MATH_BIGINTEGER_KARATSUBA_CUTOFF )
        {
            return $this->_baseSquare( $value );
        }
        $x1 = array_slice( $value, $m );
        $x0 = array_slice( $value, 0, $m );
        $z2 = $this->_karatsubaSquare( $x1 );
        $z0 = $this->_karatsubaSquare( $x0 );
        $z1 = $this->_add( $x1, FALSE, $x0, FALSE );
        $z1 = $this->_karatsubaSquare( $z1[MATH_BIGINTEGER_VALUE] );
        $temp = $this->_add( $z2, FALSE, $z0, FALSE );
        $z1 = $this->_subtract( $z1, FALSE, $temp[MATH_BIGINTEGER_VALUE], FALSE );
        $z2 = array_merge( array_fill( 0, 2 * $m, 0 ), $z2 );
        $z1[MATH_BIGINTEGER_VALUE] = array_merge( array_fill( 0, $m, 0 ), $z1[MATH_BIGINTEGER_VALUE] );
        $xx = $this->_add( $z2, FALSE, $z1[MATH_BIGINTEGER_VALUE], $z1[MATH_BIGINTEGER_SIGN] );
        $xx = $this->_add( $xx[MATH_BIGINTEGER_VALUE], $xx[MATH_BIGINTEGER_SIGN], $z0, FALSE );
        return $xx[MATH_BIGINTEGER_VALUE];
    }

    public function divide( $y )
    {
        if ( count( $y->value ) == 1 )
        {
            list( $q, $r ) = $this->_divide_digit( $this->value, $y->value[0] );
            $quotient = new Math_BigInteger( );
            $remainder = new Math_BigInteger( );
            $quotient->value = $q;
            $remainder->value = array( $r );
            $quotient->is_negative = $this->is_negative != $y->is_negative;
            return array( $this->_normalize( $quotient ), $this->_normalize( $remainder ) );
        }
        static $zero = NULL;
        if ( !isset( $zero ) )
        {
            $zero = new Math_BigInteger( );
        }
        $x = $this->copy( );
        $y = $y->copy( );
        $x_sign = $x->is_negative;
        $y_sign = $y->is_negative;
        $x->is_negative = $y->is_negative = FALSE;
        $diff = $x->compare( $y );
        if ( !$diff )
        {
            $temp = new Math_BigInteger( );
            $temp->value = array( 1 );
            $temp->is_negative = $x_sign != $y_sign;
            return array( $this->_normalize( $temp ), $this->_normalize( new Math_BigInteger( ) ) );
        }
        if ( $diff < 0 )
        {
            if ( $x_sign )
            {
                $x = $y->subtract( $x );
            }
            return array( $this->_normalize( new Math_BigInteger( ) ), $this->_normalize( $x ) );
        }
        $msb = $y->value[count( $y->value ) - 1];
        $shift = 0;
        for ( ; !( $msb & MATH_BIGINTEGER_MSB ); ++$shift )
        {
            $msb <<= 1;
        }
        $x->_lshift( $shift );
        $y->_lshift( $shift );
        $y_value =& $y->value;
        $x_max = count( $x->value ) - 1;
        $y_max = count( $y->value ) - 1;
        $quotient = new Math_BigInteger( );
        $quotient_value =& $quotient->value;
        $quotient_value = $this->_array_repeat( 0, $x_max - $y_max + 1 );
        static $temp = NULL;
        static $lhs = NULL;
        static $rhs = NULL;
        if ( !isset( $temp ) )
        {
            $temp = new Math_BigInteger( );
            $lhs = new Math_BigInteger( );
            $rhs = new Math_BigInteger( );
        }
        $temp_value =& $temp->value;
        $rhs_value =& $rhs->value;
        $temp_value = array_merge( $this->_array_repeat( 0, $x_max - $y_max ), $y_value );
        while ( 0 <= $x->compare( $temp ) )
        {
            ++$quotient_value[$x_max - $y_max];
            $x = $x->subtract( $temp );
            $x_max = count( $x->value ) - 1;
        }
        $i = $x_max;
        for ( ; $y_max + 1 <= $i; --$i )
        {
            $x_value =& $x->value;
            $x_window = array( isset( $x_value[$i] ) ? $x_value[$i] : 0, isset( $x_value[$i - 1] ) ? $x_value[$i - 1] : 0, isset( $x_value[$i - 2] ) ? $x_value[$i - 2] : 0 );
            $y_window = array( $y_value[$y_max], 0 < $y_max ? $y_value[$y_max - 1] : 0 );
            $q_index = $i - $y_max - 1;
            if ( $x_window[0] == $y_window[0] )
            {
                $quotient_value[$q_index] = MATH_BIGINTEGER_MAX_DIGIT;
            }
            else
            {
                $quotient_value[$q_index] = ( integer )( ( $x_window[0] * MATH_BIGINTEGER_BASE_FULL + $x_window[1] ) / $y_window[0] );
            }
            $temp_value = array( $y_window[1], $y_window[0] );
            $lhs->value = array( $quotient_value[$q_index] );
            $lhs = $lhs->multiply( $temp );
            $rhs_value = array( $x_window[2], $x_window[1], $x_window[0] );
            while ( 0 < $lhs->compare( $rhs ) )
            {
                --$quotient_value[$q_index];
                $lhs->value = array( $quotient_value[$q_index] );
                $lhs = $lhs->multiply( $temp );
            }
            $adjust = $this->_array_repeat( 0, $q_index );
            $temp_value = array( $quotient_value[$q_index] );
            $temp = $temp->multiply( $y );
            $temp_value =& $temp->value;
            $temp_value = array_merge( $adjust, $temp_value );
            $x = $x->subtract( $temp );
            if ( $x->compare( $zero ) < 0 )
            {
                $temp_value = array_merge( $adjust, $y_value );
                $x = $x->add( $temp );
                --$quotient_value[$q_index];
            }
            $x_max = count( $x_value ) - 1;
        }
        $x->_rshift( $shift );
        $quotient->is_negative = $x_sign != $y_sign;
        if ( $x_sign )
        {
            $y->_rshift( $shift );
            $x = $y->subtract( $x );
        }
        return array( $this->_normalize( $quotient ), $this->_normalize( $x ) );
    }

    public function _divide_digit( $dividend, $divisor )
    {
        $carry = 0;
        $result = array( );
        $i = count( $dividend ) - 1;
        for ( ; 0 <= $i; --$i )
        {
            $temp = MATH_BIGINTEGER_BASE_FULL * $carry + $dividend[$i];
            $result[$i] = ( integer )( $temp / $divisor );
            $carry = ( integer )( $temp - $divisor * $result[$i] );
        }
        return array( $result, $carry );
    }

    public function modPow( $e, $n )
    {
        $n = $this->bitmask !== FALSE && $this->bitmask->compare( $n ) < 0 ? $this->bitmask : $n->abs( );
        if ( $e->compare( new Math_BigInteger( ) ) < 0 )
        {
            $e = $e->abs( );
            $temp = $this->modInverse( $n );
            if ( $temp === FALSE )
            {
                return FALSE;
            }
            return $this->_normalize( $temp->modPow( $e, $n ) );
        }
        if ( $this->compare( new Math_BigInteger( ) ) < 0 || 0 < $this->compare( $n ) )
        {
            list( , $temp ) = $this->divide( $n );
            return $temp->modPow( $e, $n );
        }
        if ( empty( $e->value ) )
        {
            $temp = new Math_BigInteger( );
            $temp->value = array( 1 );
            return $this->_normalize( $temp );
        }
        if ( $e->value == array( 1 ) )
        {
            list( , $temp ) = $this->divide( $n );
            return $this->_normalize( $temp );
        }
        if ( $e->value == array( 2 ) )
        {
            $temp = new Math_BigInteger( );
            $temp->value = $this->_square( $this->value );
            list( , $temp ) = $temp->divide( $n );
            return $this->_normalize( $temp );
        }
        return $this->_normalize( $this->_slidingWindow( $e, $n, MATH_BIGINTEGER_BARRETT ) );
    }

    public function powMod( $e, $n )
    {
        return $this->modPow( $e, $n );
    }

    public function _slidingWindow( $e, $n, $mode )
    {
        static $window_ranges = array( 7, 25, 81, 241, 673, 1793 );
        $e_value = $e->value;
        $e_length = count( $e_value ) - 1;
        $e_bits = decbin( $e_value[$e_length] );
        $i = $e_length - 1;
        for ( ; 0 <= $i; --$i )
        {
            $e_bits .= str_pad( decbin( $e_value[$i] ), MATH_BIGINTEGER_BASE, "0", STR_PAD_LEFT );
        }
        $e_length = strlen( $e_bits );
        $i = 0;
        $window_size = 1;
        for ( ; $window_ranges[$i] < $e_length && $i < count( $window_ranges ); ++$window_size, ++$i )
        {
        }
        $n_value = $n->value;
        $powers = array( );
        $powers[1] = $this->_prepareReduce( $this->value, $n_value, $mode );
        $powers[2] = $this->_squareReduce( $powers[1], $n_value, $mode );
        $temp = 1 << $window_size - 1;
        $i = 1;
        for ( ; $i < $temp; ++$i )
        {
            $i2 = $i << 1;
            $powers[$i2 + 1] = $this->_multiplyReduce( $powers[$i2 - 1], $powers[2], $n_value, $mode );
        }
        $result = array( 1 );
        $result = $this->_prepareReduce( $result, $n_value, $mode );
        $i = 0;
        for ( ; $i < $e_length )
        {
            if ( !$e_bits[$i] )
            {
                $result = $this->_squareReduce( $result, $n_value, $mode );
                ++$i;
            }
            else
            {
                $j = $window_size - 1;
                for ( ; 0 < $j; --$j )
                {
                    if ( !empty( $e_bits[$i + $j] ) )
                    {
                        break;
                    }
                }
                $k = 0;
                for ( ; $k <= $j; ++$k )
                {
                    $result = $this->_squareReduce( $result, $n_value, $mode );
                }
                $result = $this->_multiplyReduce( $result, $powers[bindec( substr( $e_bits, $i, $j + 1 ) )], $n_value, $mode );
                $i += $j + 1;
            }
        }
        $temp = new Math_BigInteger( );
        $temp->value = $this->_reduce( $result, $n_value, $mode );
        return $temp;
    }

    public function _reduce( $x, $n, $mode )
    {
        switch ( $mode )
        {
            case MATH_BIGINTEGER_MONTGOMERY :
                return $this->_montgomery( $x, $n );
            case MATH_BIGINTEGER_BARRETT :
                return $this->_barrett( $x, $n );
            case MATH_BIGINTEGER_POWEROF2 :
                $lhs = new Math_BigInteger( );
                $lhs->value = $x;
                $rhs = new Math_BigInteger( );
                $rhs->value = $n;
                return $x->_mod2( $n );
            case MATH_BIGINTEGER_CLASSIC :
                $lhs = new Math_BigInteger( );
                $lhs->value = $x;
                $rhs = new Math_BigInteger( );
                $rhs->value = $n;
                list( , $temp ) = $lhs->divide( $rhs );
                return $temp->value;
            case MATH_BIGINTEGER_NONE :
                return $x;
            default :
                do
                {
                    break;
                } while ( 1 );
        }
    }

    public function _prepareReduce( $x, $n, $mode )
    {
        if ( $mode == MATH_BIGINTEGER_MONTGOMERY )
        {
            return $this->_prepMontgomery( $x, $n );
        }
        return $this->_reduce( $x, $n, $mode );
    }

    public function _multiplyReduce( $x, $y, $n, $mode )
    {
        if ( $mode == MATH_BIGINTEGER_MONTGOMERY )
        {
            return $this->_montgomeryMultiply( $x, $y, $n );
        }
        $temp = $this->_multiply( $x, FALSE, $y, FALSE );
        return $this->_reduce( $temp[MATH_BIGINTEGER_VALUE], $n, $mode );
    }

    public function _squareReduce( $x, $n, $mode )
    {
        if ( $mode == MATH_BIGINTEGER_MONTGOMERY )
        {
            return $this->_montgomeryMultiply( $x, $x, $n );
        }
        return $this->_reduce( $this->_square( $x ), $n, $mode );
    }

    public function _mod2( $n )
    {
        $temp = new Math_BigInteger( );
        $temp->value = array( 1 );
        return $this->bitwise_and( $n->subtract( $temp ) );
    }

    public function _barrett( $n, $m )
    {
        static $cache = array( 'MATH_BIGINTEGER_VARIABLE' => ?id #39518208, 'MATH_BIGINTEGER_DATA' => ?id #39507904 );
        $m_length = count( $m );
        if ( 2 * $m_length < count( $n ) )
        {
            $lhs = new Math_BigInteger( );
            $rhs = new Math_BigInteger( );
            $lhs->value = $n;
            $rhs->value = $m;
            list( , $temp ) = $lhs->divide( $rhs );
            return $temp->value;
        }
        if ( $m_length < 5 )
        {
            return $this->_regularBarrett( $n, $m );
        }
        if ( ( $key = array_search( $m, $cache[MATH_BIGINTEGER_VARIABLE] ) ) === FALSE )
        {
            $key = count( $cache[MATH_BIGINTEGER_VARIABLE] );
            $cache[MATH_BIGINTEGER_VARIABLE][] = $m;
            $lhs = new Math_BigInteger( );
            $lhs_value =& $lhs->value;
            $lhs_value = $this->_array_repeat( 0, $m_length + ( $m_length >> 1 ) );
            $lhs_value[] = 1;
            $rhs = new Math_BigInteger( );
            $rhs->value = $m;
            list( $u, $m1 ) = $lhs->divide( $rhs );
            $u = $u->value;
            $m1 = $m1->value;
            $cache[MATH_BIGINTEGER_DATA][] = array( "u" => $u, "m1" => $m1 );
        }
        else
        {
            extract( $cache[MATH_BIGINTEGER_DATA][$key] );
        }
        $cutoff = $m_length + ( $m_length >> 1 );
        $lsd = array_slice( $n, 0, $cutoff );
        $msd = array_slice( $n, $cutoff );
        $lsd = $this->_trim( $lsd );
        $temp = $this->_multiply( $msd, FALSE, $m1, FALSE );
        $n = $this->_add( $lsd, FALSE, $temp[MATH_BIGINTEGER_VALUE], FALSE );
        if ( $m_length & 1 )
        {
            return $this->_regularBarrett( $n[MATH_BIGINTEGER_VALUE], $m );
        }
        $temp = array_slice( $n[MATH_BIGINTEGER_VALUE], $m_length - 1 );
        $temp = $this->_multiply( $temp, FALSE, $u, FALSE );
        $temp = array_slice( $temp[MATH_BIGINTEGER_VALUE], ( $m_length >> 1 ) + 1 );
        $temp = $this->_multiply( $temp, FALSE, $m, FALSE );
        $result = $this->_subtract( $n[MATH_BIGINTEGER_VALUE], FALSE, $temp[MATH_BIGINTEGER_VALUE], FALSE );
        while ( 0 <= $this->_compare( $result[MATH_BIGINTEGER_VALUE], $result[MATH_BIGINTEGER_SIGN], $m, FALSE ) )
        {
            $result = $this->_subtract( $result[MATH_BIGINTEGER_VALUE], $result[MATH_BIGINTEGER_SIGN], $m, FALSE );
        }
        return $result[MATH_BIGINTEGER_VALUE];
    }

    public function _regularBarrett( $x, $n )
    {
        static $cache = array( 'MATH_BIGINTEGER_VARIABLE' => ?id #39510752, 'MATH_BIGINTEGER_DATA' => ?id #39510952 );
        $n_length = count( $n );
        if ( 2 * $n_length < count( $x ) )
        {
            $lhs = new Math_BigInteger( );
            $rhs = new Math_BigInteger( );
            $lhs->value = $x;
            $rhs->value = $n;
            list( , $temp ) = $lhs->divide( $rhs );
            return $temp->value;
        }
        if ( ( $key = array_search( $n, $cache[MATH_BIGINTEGER_VARIABLE] ) ) === FALSE )
        {
            $key = count( $cache[MATH_BIGINTEGER_VARIABLE] );
            $cache[MATH_BIGINTEGER_VARIABLE][] = $n;
            $lhs = new Math_BigInteger( );
            $lhs_value =& $lhs->value;
            $lhs_value = $this->_array_repeat( 0, 2 * $n_length );
            $lhs_value[] = 1;
            $rhs = new Math_BigInteger( );
            $rhs->value = $n;
            list( $temp ) = $lhs->divide( $rhs );
            $cache[MATH_BIGINTEGER_DATA][] = $temp->value;
        }
        $temp = array_slice( $x, $n_length - 1 );
        $temp = $this->_multiply( $temp, FALSE, $cache[MATH_BIGINTEGER_DATA][$key], FALSE );
        $temp = array_slice( $temp[MATH_BIGINTEGER_VALUE], $n_length + 1 );
        $result = array_slice( $x, 0, $n_length + 1 );
        $temp = $this->_multiplyLower( $temp, FALSE, $n, FALSE, $n_length + 1 );
        if ( $this->_compare( $result, FALSE, $temp[MATH_BIGINTEGER_VALUE], $temp[MATH_BIGINTEGER_SIGN] ) < 0 )
        {
            $corrector_value = $this->_array_repeat( 0, $n_length + 1 );
            $corrector_value[] = 1;
            $result = $this->_add( $result, FALSE, $corrector_value, FALSE );
            $result = $result[MATH_BIGINTEGER_VALUE];
        }
        $result = $this->_subtract( $result, FALSE, $temp[MATH_BIGINTEGER_VALUE], $temp[MATH_BIGINTEGER_SIGN] );
        while ( 0 < $this->_compare( $result[MATH_BIGINTEGER_VALUE], $result[MATH_BIGINTEGER_SIGN], $n, FALSE ) )
        {
            $result = $this->_subtract( $result[MATH_BIGINTEGER_VALUE], $result[MATH_BIGINTEGER_SIGN], $n, FALSE );
        }
        return $result[MATH_BIGINTEGER_VALUE];
    }

    public function _multiplyLower( $x_value, $x_negative, $y_value, $y_negative, $stop )
    {
        $x_length = count( $x_value );
        $y_length = count( $y_value );
        if ( !$x_length || !$y_length )
        {
            return array( MATH_BIGINTEGER_VALUE => array( ), FALSE );
        }
        if ( $x_length < $y_length )
        {
            $temp = $x_value;
            $x_value = $y_value;
            $y_value = $temp;
            $x_length = count( $x_value );
            $y_length = count( $y_value );
        }
        $product_value = $this->_array_repeat( 0, $x_length + $y_length );
        $carry = 0;
        $j = 0;
        for ( ; $j < $x_length; ++$j )
        {
            $temp = $x_value[$j] * $y_value[0] + $carry;
            $carry = ( integer )( $temp / MATH_BIGINTEGER_BASE_FULL );
            $product_value[$j] = ( integer )( $temp - MATH_BIGINTEGER_BASE_FULL * $carry );
        }
        if ( $j < $stop )
        {
            $product_value[$j] = $carry;
        }
        $i = 1;
        for ( ; $i < $y_length; ++$i )
        {
            $carry = 0;
            $j = 0;
            $k = $i;
            for ( ; $j < $x_length && $k < $stop; ++$j, ++$k )
            {
                $temp = $product_value[$k] + $x_value[$j] * $y_value[$i] + $carry;
                $carry = ( integer )( $temp / MATH_BIGINTEGER_BASE_FULL );
                $product_value[$k] = ( integer )( $temp - MATH_BIGINTEGER_BASE_FULL * $carry );
            }
            if ( $k < $stop )
            {
                $product_value[$k] = $carry;
            }
        }
        return array( MATH_BIGINTEGER_VALUE => $this->_trim( $product_value ), MATH_BIGINTEGER_SIGN => $x_negative != $y_negative );
    }

    public function _montgomery( $x, $n )
    {
        static $cache = array( 'MATH_BIGINTEGER_VARIABLE' => ?id #39661640, 'MATH_BIGINTEGER_DATA' => ?id #39661880 );
        if ( ( $key = array_search( $n, $cache[MATH_BIGINTEGER_VARIABLE] ) ) === FALSE )
        {
            $key = count( $cache[MATH_BIGINTEGER_VARIABLE] );
            $cache[MATH_BIGINTEGER_VARIABLE][] = $x;
            $cache[MATH_BIGINTEGER_DATA][] = $this->_modInverse67108864( $n );
        }
        $k = count( $n );
        $result = array( MATH_BIGINTEGER_VALUE => $x );
        $i = 0;
        for ( ; $i < $k; ++$i )
        {
            $temp = $result[MATH_BIGINTEGER_VALUE][$i] * $cache[MATH_BIGINTEGER_DATA][$key];
            $temp = ( integer )( $temp - MATH_BIGINTEGER_BASE_FULL * ( integer )( $temp / MATH_BIGINTEGER_BASE_FULL ) );
            $temp = $this->_regularMultiply( array( $temp ), $n );
            $temp = array_merge( $this->_array_repeat( 0, $i ), $temp );
            $result = $this->_add( $result[MATH_BIGINTEGER_VALUE], FALSE, $temp, FALSE );
        }
        $result[MATH_BIGINTEGER_VALUE] = array_slice( $result[MATH_BIGINTEGER_VALUE], $k );
        if ( 0 <= $this->_compare( $result, FALSE, $n, FALSE ) )
        {
            $result = $this->_subtract( $result[MATH_BIGINTEGER_VALUE], FALSE, $n, FALSE );
        }
        return $result[MATH_BIGINTEGER_VALUE];
    }

    public function _montgomeryMultiply( $x, $y, $m )
    {
        $temp = $this->_multiply( $x, FALSE, $y, FALSE );
        return $this->_montgomery( $temp[MATH_BIGINTEGER_VALUE], $m );
        static $cache = array( 'MATH_BIGINTEGER_VARIABLE' => ?id #39663904, 'MATH_BIGINTEGER_DATA' => ?id #39664128 );
        if ( ( $key = array_search( $m, $cache[MATH_BIGINTEGER_VARIABLE] ) ) === FALSE )
        {
            $key = count( $cache[MATH_BIGINTEGER_VARIABLE] );
            $cache[MATH_BIGINTEGER_VARIABLE][] = $m;
            $cache[MATH_BIGINTEGER_DATA][] = $this->_modInverse67108864( $m );
        }
        $n = max( count( $x ), count( $y ), count( $m ) );
        $x = array_pad( $x, $n, 0 );
        $y = array_pad( $y, $n, 0 );
        $m = array_pad( $m, $n, 0 );
        $a = array( MATH_BIGINTEGER_VALUE => $this->_array_repeat( 0, $n + 1 ) );
        $i = 0;
        for ( ; $i < $n; ++$i )
        {
            $temp = $a[MATH_BIGINTEGER_VALUE][0] + $x[$i] * $y[0];
            $temp = ( integer )( $temp - MATH_BIGINTEGER_BASE_FULL * ( integer )( $temp / MATH_BIGINTEGER_BASE_FULL ) );
            $temp = $temp * $cache[MATH_BIGINTEGER_DATA][$key];
            $temp = ( integer )( $temp - MATH_BIGINTEGER_BASE_FULL * ( integer )( $temp / MATH_BIGINTEGER_BASE_FULL ) );
            $temp = $this->_add( $this->_regularMultiply( array( $x[$i] ), $y ), FALSE, $this->_regularMultiply( array( $temp ), $m ), FALSE );
            $a = $this->_add( $a[MATH_BIGINTEGER_VALUE], FALSE, $temp[MATH_BIGINTEGER_VALUE], FALSE );
            $a[MATH_BIGINTEGER_VALUE] = array_slice( $a[MATH_BIGINTEGER_VALUE], 1 );
        }
        if ( 0 <= $this->_compare( $a[MATH_BIGINTEGER_VALUE], FALSE, $m, FALSE ) )
        {
            $a = $this->_subtract( $a[MATH_BIGINTEGER_VALUE], FALSE, $m, FALSE );
        }
        return $a[MATH_BIGINTEGER_VALUE];
    }

    public function _prepMontgomery( $x, $n )
    {
        $lhs = new Math_BigInteger( );
        $lhs->value = array_merge( $this->_array_repeat( 0, count( $n ) ), $x );
        $rhs = new Math_BigInteger( );
        $rhs->value = $n;
        list( , $temp ) = $lhs->divide( $rhs );
        return $temp->value;
    }

    public function _modInverse67108864( $x )
    {
        $x = 0 - $x[0];
        $result = $x & 3;
        $result = $result * ( 2 - $x * $result ) & 15;
        $result = $result * ( 2 - ( $x & 255 ) * $result ) & 255;
        $result = $result * ( 2 - ( $x & 65535 ) * $result & 65535 ) & 65535;
        $result = fmod( $result * ( 2 - fmod( $x * $result, MATH_BIGINTEGER_BASE_FULL ) ), MATH_BIGINTEGER_BASE_FULL );
        return $result & MATH_BIGINTEGER_MAX_DIGIT;
    }

    public function modInverse( $n )
    {
        static $zero = NULL;
        static $one = NULL;
        if ( !isset( $zero ) )
        {
            $zero = new Math_BigInteger( );
            $one = new Math_BigInteger( 1 );
        }
        $n = $n->abs( );
        if ( $this->compare( $zero ) < 0 )
        {
            $temp = $this->abs( );
            $temp = $temp->modInverse( $n );
            return $this->_normalize( $n->subtract( $temp ) );
        }
        extract( $this->extendedGCD( $n ) );
        if ( !$gcd->equals( $one ) )
        {
            return FALSE;
        }
        $x = $x->compare( $zero ) < 0 ? $x->add( $n ) : $x;
        return $this->compare( $zero ) < 0 ? $this->_normalize( $n->subtract( $x ) ) : $this->_normalize( $x );
    }

    public function extendedGCD( $n )
    {
        $y = $n->copy( );
        $x = $this->copy( );
        $g = new Math_BigInteger( );
        $g->value = array( 1 );
        while ( !( $x->value[0] & 1 || $y->value[0] & 1 ) )
        {
            $x->_rshift( 1 );
            $y->_rshift( 1 );
            $g->_lshift( 1 );
        }
        $u = $x->copy( );
        $v = $y->copy( );
        $a = new Math_BigInteger( );
        $b = new Math_BigInteger( );
        $c = new Math_BigInteger( );
        $d = new Math_BigInteger( );
        $a->value = $d->value = $g->value = array( 1 );
        $b->value = $c->value = array( );
        while ( !empty( $u->value ) )
        {
            while ( !( $u->value[0] & 1 ) )
            {
                $u->_rshift( 1 );
                if ( !empty( $a->value ) && $a->value[0] & 1 || !empty( $b->value ) && $b->value[0] & 1 )
                {
                    $a = $a->add( $y );
                    $b = $b->subtract( $x );
                }
                $a->_rshift( 1 );
                $b->_rshift( 1 );
            }
            while ( !( $v->value[0] & 1 ) )
            {
                $v->_rshift( 1 );
                if ( !empty( $d->value ) && $d->value[0] & 1 || !empty( $c->value ) && $c->value[0] & 1 )
                {
                    $c = $c->add( $y );
                    $d = $d->subtract( $x );
                }
                $c->_rshift( 1 );
                $d->_rshift( 1 );
            }
            if ( 0 <= $u->compare( $v ) )
            {
                $u = $u->subtract( $v );
                $a = $a->subtract( $c );
                $b = $b->subtract( $d );
            }
            else
            {
                $v = $v->subtract( $u );
                $c = $c->subtract( $a );
                $d = $d->subtract( $b );
            }
        }
        return array( "gcd" => $this->_normalize( $g->multiply( $v ) ), "x" => $this->_normalize( $c ), "y" => $this->_normalize( $d ) );
    }

    public function gcd( $n )
    {
        extract( $this->extendedGCD( $n ) );
        return $gcd;
    }

    public function abs( )
    {
        $temp = new Math_BigInteger( );
        $temp->value = $this->value;
        return $temp;
    }

    public function compare( $y )
    {
        return $this->_compare( $this->value, $this->is_negative, $y->value, $y->is_negative );
    }

    public function _compare( $x_value, $x_negative, $y_value, $y_negative )
    {
        if ( $x_negative != $y_negative )
        {
            return !$x_negative && $y_negative ? 1 : 0 - 1;
        }
        $result = $x_negative ? 0 - 1 : 1;
        if ( count( $x_value ) != count( $y_value ) )
        {
            return count( $y_value ) < count( $x_value ) ? $result : 0 - $result;
        }
        $size = max( count( $x_value ), count( $y_value ) );
        $x_value = array_pad( $x_value, $size, 0 );
        $y_value = array_pad( $y_value, $size, 0 );
        $i = count( $x_value ) - 1;
        for ( ; 0 <= $i; --$i )
        {
            if ( $x_value[$i] != $y_value[$i] )
            {
                return $y_value[$i] < $x_value[$i] ? $result : 0 - $result;
            }
        }
        return 0;
    }

    public function equals( $x )
    {
        return $this->value === $x->value && $this->is_negative == $x->is_negative;
    }

    public function setPrecision( $bits )
    {
        $this->precision = $bits;
        $this->bitmask = new Math_BigInteger( chr( ( 1 << ( $bits & 7 ) ) - 1 ).str_repeat( chr( 255 ), $bits >> 3 ), 256 );
        $temp = $this->_normalize( $this );
        $this->value = $temp->value;
    }

    public function bitwise_and( $x )
    {
        $result = $this->copy( );
        $length = min( count( $x->value ), count( $this->value ) );
        $result->value = array_slice( $result->value, 0, $length );
        $i = 0;
        for ( ; $i < $length; ++$i )
        {
            $result->value &= $i;
        }
        return $this->_normalize( $result );
    }

    public function bitwise_or( $x )
    {
        $length = max( count( $this->value ), count( $x->value ) );
        $result = $this->copy( );
        $result->value = array_pad( $result->value, $length, 0 );
        $x->value = array_pad( $x->value, $length, 0 );
        $i = 0;
        for ( ; $i < $length; ++$i )
        {
            $result->value |= $i;
        }
        return $this->_normalize( $result );
    }

    public function bitwise_xor( $x )
    {
        $length = max( count( $this->value ), count( $x->value ) );
        $result = $this->copy( );
        $result->value = array_pad( $result->value, $length, 0 );
        $x->value = array_pad( $x->value, $length, 0 );
        $i = 0;
        for ( ; $i < $length; ++$i )
        {
            $result->value ^= $i;
        }
        return $this->_normalize( $result );
    }

    public function bitwise_not( )
    {
        $temp = $this->toBytes( );
        $pre_msb = decbin( ord( $temp[0] ) );
        $temp = ~$temp;
        $msb = decbin( ord( $temp[0] ) );
        if ( strlen( $msb ) == 8 )
        {
            $msb = substr( $msb, strpos( $msb, "0" ) );
        }
        $temp[0] = chr( bindec( $msb ) );
        $current_bits = strlen( $pre_msb ) + 8 * strlen( $temp ) - 8;
        $new_bits = $this->precision - $current_bits;
        if ( $new_bits <= 0 )
        {
            return $this->_normalize( new Math_BigInteger( $temp, 256 ) );
        }
        $leading_ones = chr( ( 1 << ( $new_bits & 7 ) ) - 1 ).str_repeat( chr( 255 ), $new_bits >> 3 );
        $this->_base256_lshift( $leading_ones, $current_bits );
        $temp = str_pad( $temp, ceil( $this->bits / 8 ), chr( 0 ), STR_PAD_LEFT );
        return $this->_normalize( new Math_BigInteger( $leading_ones | $temp, 256 ) );
    }

    public function bitwise_rightShift( $shift )
    {
        $temp = new Math_BigInteger( );
        $temp->value = $this->value;
        $temp->_rshift( $shift );
        return $this->_normalize( $temp );
    }

    public function bitwise_leftShift( $shift )
    {
        $temp = new Math_BigInteger( );
        $temp->value = $this->value;
        $temp->_lshift( $shift );
        return $this->_normalize( $temp );
    }

    public function bitwise_leftRotate( $shift )
    {
        $bits = $this->toBytes( );
        if ( 0 < $this->precision )
        {
            $precision = $this->precision;
            $mask = $this->bitmask->toBytes( );
        }
        else
        {
            $temp = ord( $bits[0] );
            $i = 0;
            for ( ; $temp >> $i; ++$i )
            {
            }
            $precision = 8 * strlen( $bits ) - 8 + $i;
            $mask = chr( ( 1 << ( $precision & 7 ) ) - 1 ).str_repeat( chr( 255 ), $precision >> 3 );
        }
        if ( $shift < 0 )
        {
            $shift += $precision;
        }
        $shift %= $precision;
        if ( !$shift )
        {
            return $this->copy( );
        }
        $left = $this->bitwise_leftShift( $shift );
        $left = $left->bitwise_and( new Math_BigInteger( $mask, 256 ) );
        $right = $this->bitwise_rightShift( $precision - $shift );
        $result = $left->bitwise_or( $right );
        return $this->_normalize( $result );
    }

    public function bitwise_rightRotate( $shift )
    {
        return $this->bitwise_leftRotate( 0 - $shift );
    }

    public function setRandomGenerator( $generator )
    {
    }

    public function _random_number_helper( $size )
    {
        $crypt_random = function_exists( "crypt_random_string" ) || !class_exists( "Crypt_Random" ) && function_exists( "crypt_random_string" );
        if ( $crypt_random )
        {
            $random = crypt_random_string( $size );
        }
        else
        {
            $random = "";
            if ( $size & 1 )
            {
                $random .= chr( mt_rand( 0, 255 ) );
            }
            $blocks = $size >> 1;
            $i = 0;
            for ( ; $i < $blocks; ++$i )
            {
                $random .= pack( "n", mt_rand( 0, 65535 ) );
            }
        }
        return new Math_BigInteger( $random, 256 );
    }

    public function random( $min = FALSE, $max = FALSE )
    {
        if ( $min === FALSE )
        {
            $min = new Math_BigInteger( 0 );
        }
        if ( $max === FALSE )
        {
            $max = new Math_BigInteger( 2147483647 );
        }
        $compare = $max->compare( $min );
        if ( !$compare )
        {
            return $this->_normalize( $min );
        }
        else if ( $compare < 0 )
        {
            $temp = $max;
            $max = $min;
            $min = $temp;
        }
        static $one = NULL;
        if ( !isset( $one ) )
        {
            $one = new Math_BigInteger( 1 );
        }
        $max = $max->subtract( $min->subtract( $one ) );
        $size = strlen( ltrim( $max->toBytes( ), chr( 0 ) ) );
        $random_max = new Math_BigInteger( chr( 1 ).str_repeat( "\x00", $size ), 256 );
        $random = $this->_random_number_helper( $size );
        list( $max_multiple ) = $random_max->divide( $max );
        $max_multiple = $max_multiple->multiply( $max );
        while ( 0 <= $random->compare( $max_multiple ) )
        {
            $random = $random->subtract( $max_multiple );
            $random_max = $random_max->subtract( $max_multiple );
            $random = $random->bitwise_leftShift( 8 );
            $random = $random->add( $this->_random_number_helper( 1 ) );
            $random_max = $random_max->bitwise_leftShift( 8 );
            list( $max_multiple ) = $random_max->divide( $max );
            $max_multiple = $max_multiple->multiply( $max );
        }
        list( , $random ) = $random->divide( $max );
        return $this->_normalize( $random->add( $min ) );
    }

    public function randomPrime( $min = FALSE, $max = FALSE, $timeout = FALSE )
    {
        if ( $min === FALSE )
        {
            $min = new Math_BigInteger( 0 );
        }
        if ( $max === FALSE )
        {
            $max = new Math_BigInteger( 2147483647 );
        }
        $compare = $max->compare( $min );
        if ( !$compare )
        {
            return $min->isPrime( ) ? $min : FALSE;
        }
        else if ( $compare < 0 )
        {
            $temp = $max;
            $max = $min;
            $min = $temp;
        }
        static $one = NULL;
        static $two = NULL;
        if ( !isset( $one ) )
        {
            $one = new Math_BigInteger( 1 );
            $two = new Math_BigInteger( 2 );
        }
        $start = time( );
        $x = $this->random( $min, $max );
        if ( $x->equals( $two ) )
        {
            return $x;
        }
        $x->_make_odd( );
        if ( 0 < $x->compare( $max ) )
        {
            if ( $min->equals( $max ) )
            {
                return FALSE;
            }
            $x = $min->copy( );
            $x->_make_odd( );
        }
        $initial_x = $x->copy( );
        while ( TRUE )
        {
            if ( $timeout !== FALSE && $timeout < time( ) - $start )
            {
                return FALSE;
            }
            if ( $x->isPrime( ) )
            {
                return $x;
            }
            $x = $x->add( $two );
            if ( 0 < $x->compare( $max ) )
            {
                $x = $min->copy( );
                if ( $x->equals( $two ) )
                {
                    return $x;
                }
                $x->_make_odd( );
            }
            if ( $x->equals( $initial_x ) )
            {
                return FALSE;
            }
        }
    }

    public function _make_odd( )
    {
        $this->value |= 0;
    }

    public function isPrime( $t = FALSE )
    {
        $length = strlen( $this->toBytes( ) );
        if ( !$t )
        {
            if ( 163 <= $length )
            {
                $t = 2;
            }
            else if ( 106 <= $length )
            {
                $t = 3;
            }
            else if ( 81 <= $length )
            {
                $t = 4;
            }
            else if ( 68 <= $length )
            {
                $t = 5;
            }
            else if ( 56 <= $length )
            {
                $t = 6;
            }
            else if ( 50 <= $length )
            {
                $t = 7;
            }
            else if ( 43 <= $length )
            {
                $t = 8;
            }
            else if ( 37 <= $length )
            {
                $t = 9;
            }
            else if ( 31 <= $length )
            {
                $t = 12;
            }
            else if ( 25 <= $length )
            {
                $t = 15;
            }
            else if ( 18 <= $length )
            {
                $t = 18;
            }
            else
            {
                $t = 27;
            }
        }
        if ( $this->value == array( 2 ) )
        {
            return TRUE;
        }
        if ( ~$this->value[0] & 1 )
        {
            return FALSE;
        }
        static $primes = NULL;
        static $zero = NULL;
        static $one = NULL;
        static $two = NULL;
        if ( !isset( $primes ) )
        {
            $primes = array( 3, 5, 7, 11, 13, 17, 19, 23, 29, 31, 37, 41, 43, 47, 53, 59, 61, 67, 71, 73, 79, 83, 89, 97, 101, 103, 107, 109, 113, 127, 131, 137, 139, 149, 151, 157, 163, 167, 173, 179, 181, 191, 193, 197, 199, 211, 223, 227, 229, 233, 239, 241, 251, 257, 263, 269, 271, 277, 281, 283, 293, 307, 311, 313, 317, 331, 337, 347, 349, 353, 359, 367, 373, 379, 383, 389, 397, 401, 409, 419, 421, 431, 433, 439, 443, 449, 457, 461, 463, 467, 479, 487, 491, 499, 503, 509, 521, 523, 541, 547, 557, 563, 569, 571, 577, 587, 593, 599, 601, 607, 613, 617, 619, 631, 641, 643, 647, 653, 659, 661, 673, 677, 683, 691, 701, 709, 719, 727, 733, 739, 743, 751, 757, 761, 769, 773, 787, 797, 809, 811, 821, 823, 827, 829, 839, 853, 857, 859, 863, 877, 881, 883, 887, 907, 911, 919, 929, 937, 941, 947, 953, 967, 971, 977, 983, 991, 997 );
            $zero = new Math_BigInteger( );
            $one = new Math_BigInteger( 1 );
            $two = new Math_BigInteger( 2 );
        }
        if ( $this->equals( $one ) )
        {
            return FALSE;
        }
        $value = $this->value;
        foreach ( $primes as $prime )
        {
            list( , $r ) = $this->_divide_digit( $value, $prime );
            if ( !$r )
            {
                return count( $value ) == 1 && $value[0] == $prime;
            }
        }
        $n = $this->copy( );
        $n_1 = $n->subtract( $one );
        $n_2 = $n->subtract( $two );
        $r = $n_1->copy( );
        $r_value = $r->value;
        $i = 0;
        $r_length = count( $r_value );
        for ( ; $i < $r_length; ++$i )
        {
            $temp = ~$r_value[$i] & 16777215;
            $j = 1;
            for ( ; $temp >> $j & 1; ++$j )
            {
            }
            if ( $j != 25 )
            {
                break;
            }
        }
        $s = 26 * $i + $j - 1;
        $r->_rshift( $s );
        $i = 0;
        for ( ; $i < $t; ++$i )
        {
            $a = $this->random( $two, $n_2 );
            $y = $a->modPow( $r, $n );
            if ( !$y->equals( $one ) && !$y->equals( $n_1 ) )
            {
                $j = 1;
                for ( ; $j < $s && !$y->equals( $n_1 ); ++$j )
                {
                    $y = $y->modPow( $two, $n );
                    if ( $y->equals( $one ) )
                    {
                        return FALSE;
                    }
                }
                if ( !$y->equals( $n_1 ) )
                {
                    return FALSE;
                }
            }
        }
        return TRUE;
    }

    public function _lshift( $shift )
    {
        if ( $shift == 0 )
        {
            return;
        }
        $num_digits = ( integer )( $shift / MATH_BIGINTEGER_BASE );
        $shift %= MATH_BIGINTEGER_BASE;
        $shift = 1 << $shift;
        $carry = 0;
        $i = 0;
        for ( ; $i < count( $this->value ); ++$i )
        {
            $temp = $this->value[$i] * $shift + $carry;
            $carry = ( integer )( $temp / MATH_BIGINTEGER_BASE_FULL );
            $this->value[$i] = ( integer )( $temp - $carry * MATH_BIGINTEGER_BASE_FULL );
        }
        if ( $carry )
        {
            $this->value[] = $carry;
        }
        while ( $num_digits-- )
        {
            array_unshift( $this->value, 0 );
        }
    }

    public function _rshift( $shift )
    {
        if ( $shift == 0 )
        {
            return;
        }
        $num_digits = ( integer )( $shift / MATH_BIGINTEGER_BASE );
        $shift %= MATH_BIGINTEGER_BASE;
        $carry_shift = MATH_BIGINTEGER_BASE - $shift;
        $carry_mask = ( 1 << $shift ) - 1;
        if ( $num_digits )
        {
            $this->value = array_slice( $this->value, $num_digits );
        }
        $carry = 0;
        $i = count( $this->value ) - 1;
        for ( ; 0 <= $i; --$i )
        {
            $temp = $this->value[$i] >> $shift | $carry;
            $carry = ( $this->value[$i] & $carry_mask ) << $carry_shift;
            $this->value[$i] = $temp;
        }
        $this->value = $this->_trim( $this->value );
    }

    public function _normalize( $result )
    {
        $result->precision = $this->precision;
        $result->bitmask = $this->bitmask;
        $value =& $result->value;
        if ( !count( $value ) )
        {
            return $result;
        }
        $value = $this->_trim( $value );
        if ( !empty( $result->bitmask->value ) )
        {
            $length = min( count( $value ), count( $this->bitmask->value ) );
            $value = array_slice( $value, 0, $length );
            $i = 0;
            for ( ; $i < $length; ++$i )
            {
                $value[$i] = $value[$i] & $this->bitmask->value[$i];
            }
        }
        return $result;
    }

    public function _trim( $value )
    {
        $i = count( $value ) - 1;
        for ( ; 0 <= $i; --$i )
        {
            if ( $value[$i] )
            {
                break;
            }
            unset( $value[$i] );
        }
        return $value;
    }

    public function _array_repeat( $input, $multiplier )
    {
        return $multiplier ? array_fill( 0, $multiplier, $input ) : array( );
    }

    public function _base256_lshift( &$x, $shift )
    {
        if ( $shift == 0 )
        {
            return;
        }
        $num_bytes = $shift >> 3;
        $shift &= 7;
        $carry = 0;
        $i = strlen( $x ) - 1;
        for ( ; 0 <= $i; --$i )
        {
            $temp = ord( $x[$i] ) << $shift | $carry;
            $x[$i] = chr( $temp );
            $carry = $temp >> 8;
        }
        $carry = $carry != 0 ? chr( $carry ) : "";
        $x = $carry.$x.str_repeat( chr( 0 ), $num_bytes );
    }

    public function _base256_rshift( &$x, $shift )
    {
        if ( $shift == 0 )
        {
            $x = ltrim( $x, chr( 0 ) );
            return "";
        }
        $num_bytes = $shift >> 3;
        $shift &= 7;
        $remainder = "";
        if ( $num_bytes )
        {
            $start = strlen( $x ) < $num_bytes ? 0 - strlen( $x ) : 0 - $num_bytes;
            $remainder = substr( $x, $start );
            $x = substr( $x, 0, 0 - $num_bytes );
        }
        $carry = 0;
        $carry_shift = 8 - $shift;
        $i = 0;
        for ( ; $i < strlen( $x ); ++$i )
        {
            $temp = ord( $x[$i] ) >> $shift | $carry;
            $carry = ord( $x[$i] ) << $carry_shift & 255;
            $x[$i] = chr( $temp );
        }
        $x = ltrim( $x, chr( 0 ) );
        $remainder = chr( $carry >> $carry_shift ).$remainder;
        return ltrim( $remainder, chr( 0 ) );
    }

    public function _int2bytes( $x )
    {
        return ltrim( pack( "N", $x ), chr( 0 ) );
    }

    public function _bytes2int( $x )
    {
        $temp = unpack( "Nint", str_pad( $x, 4, chr( 0 ), STR_PAD_LEFT ) );
        return $temp['int'];
    }

    public function _encodeASN1Length( $length )
    {
        if ( $length <= 127 )
        {
            return chr( $length );
        }
        $temp = ltrim( pack( "N", $length ), chr( 0 ) );
        return pack( "Ca*", 128 | strlen( $temp ), $temp );
    }

}

function bigint_powmod( $data, $key, $mod )
{
    $_data = new Math_BigInteger( $data, 16 );
    $_key = new Math_BigInteger( $key, 16 );
    $_mod = new Math_BigInteger( $mod, 16 );
    $result = $_data->powmod( $_key, $_mod );
    $_result = new Math_BigInteger( $result, 10 );
    return $_result->toBytes( );
}

define( "MATH_BIGINTEGER_MONTGOMERY", 0 );
define( "MATH_BIGINTEGER_BARRETT", 1 );
define( "MATH_BIGINTEGER_POWEROF2", 2 );
define( "MATH_BIGINTEGER_CLASSIC", 3 );
define( "MATH_BIGINTEGER_NONE", 4 );
define( "MATH_BIGINTEGER_VALUE", 0 );
define( "MATH_BIGINTEGER_SIGN", 1 );
define( "MATH_BIGINTEGER_VARIABLE", 0 );
define( "MATH_BIGINTEGER_DATA", 1 );
define( "MATH_BIGINTEGER_KARATSUBA_CUTOFF", 25 );
?>
