<?php
/*********************/
/*                   */
/*  Dezend for PHP5  */
/*         NWS       */
/*      Nulled.WS    */
/*                   */
/*********************/

function _obfuscate_k4mSi42SlImTlJOGjo2JkI0�( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� = 1 )
{
    $_obfuscate_iJGPjJWLj4uLkIqVjYiHh48� = unpack( "C*", "ViewZendSourceCodeIsInvalid!" );
    do
    {
        $_obfuscate_iY2Oh5OGlIqQhpCJi5CMkog� = ( $_obfuscate_lZKViImJjo6UhouJj4aVi4Y�[$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4�] << 4 ) + ( $_obfuscate_lZKViImJjo6UhouJj4aVi4Y�[$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� + 1] >> 4 );
        $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� += 2;
    } while ( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� < 28 );
}

$_obfuscate_i5GVjZWQj4ePkJKMjJSRipM�[] = _obfuscate_hpCTj4mKj5WSkpWPjouJkoc�( );
if ( defined( "KSSROOTDIR" ) )
{
    exit( "Access denied to view this page!" );
}
$_obfuscate_jIaUiIeSjZWKlIqLkIqOioc� = new mysql_cls( );
$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU� = _obfuscate_iZSVk4mLkY_LlIeHh5WKlZA�( 8 );
$_obfuscate_k4mViI2Nj4mJkIuUj42JiIY� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "op", "gp", "sql", "" );
$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "softid", "gp", "int", 0 );
$_obfuscate_k5WPhoeNjZOTk4yQlYyQj4c� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "sver", "gp", "int", 9 );
if ( $_obfuscate_k4mViI2Nj4mJkIuUj42JiIY� == "signdata" )
{
    ob_clean( );
    $_obfuscate_iJKRhpSOjIiGkJONkIqIjIg� = file( KSSINCDIR."signdata".DIRECTORY_SEPARATOR."_".$_obfuscate_k5WPhoeNjZOTk4yQlYyQj4c�.".php" );
    $_obfuscate_iI2PkIeKjpOQjIuVlIiMipA� = trim( $_obfuscate_iJKRhpSOjIiGkJONkIqIjIg�[rand( 1, 100 )] );
    $_obfuscate_kJWNiIiOh4uNlI6SkpSUkIw� = "\tsignData= “".$_obfuscate_iI2PkIeKjpOQjIuVlIiMipA�."”\r\n";
    $_obfuscate_lImJiJKVioeSipWQk4iHlJM� = "\tsignData := '';\r\n";
    $_obfuscate_kI_TkI6UiIaJko2RlYqIh48� = "\tsignData = ".YH2.YH2."\r\n";
    $_obfuscate_kJCMh5OGhpGTkIiTj4iHioY� = "\tsignData = __TEXT(".YH2.YH2.");\r\n";
    $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� = 0;
    do
    {
        $_obfuscate_jJWVlI2Kh4uIkouNkI6QkoY� = substr( $_obfuscate_iI2PkIeKjpOQjIuVlIiMipA�, $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4�, 100 );
        $_obfuscate_lImJiJKVioeSipWQk4iHlJM� .= "\tsignData := signData + '".$_obfuscate_jJWVlI2Kh4uIkouNkI6QkoY�."';\r\n";
        $_obfuscate_kI_TkI6UiIaJko2RlYqIh48� .= "\tsignData = signData & ".YH2.$_obfuscate_jJWVlI2Kh4uIkouNkI6QkoY�.YH2."\r\n";
        $_obfuscate_kJCMh5OGhpGTkIiTj4iHioY� .= "\tsignData += __TEXT(".YH2.$_obfuscate_jJWVlI2Kh4uIkouNkI6QkoY�.YH2.");\r\n";
        $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� += 100;
    } while ( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� < strlen( $_obfuscate_iI2PkIeKjpOQjIuVlIiMipA� ) );
    echo "signData签名数据每次取得的可能会不同，不影响使用！<br>\r\n<input type=button class=submitbtn  id='copy_";
    echo _obfuscate_iI6QhpSTiJCJiI_KlYePlZI�( 16 );
    echo "' value=\"标准格式\"  onmouseover=\"toClipboard(this.id,$('#basel').html());\">\r\n<input type=button class=submitbtn  id='copy_";
    echo _obfuscate_iI6QhpSTiJCJiI_KlYePlZI�( 16 );
    echo "' value=\"易格式\"  onmouseover=\"toClipboard(this.id,$('#esdata').html());\">\r\n<input type=button class=submitbtn  id='copy_";
    echo _obfuscate_iI6QhpSTiJCJiI_KlYePlZI�( 16 );
    echo "' value=\"按键格式\"  onmouseover=\"toClipboard(this.id,$('#vbsdata').text().toString().replace(/\tsignData = signData/g,'\\r\\n\tsignData = signData'));\">\r\n<input type=button class=submitbtn  id='copy_";
    echo _obfuscate_iI6QhpSTiJCJiI_KlYePlZI�( 16 );
    echo "' value=\"VB格式\"  onmouseover=\"toClipboard(this.id,$('#vbsdata').text().toString().replace(/\tsignData = signData/g,'\\r\\n\tsignData = signData'));\">\r\n<input type=button class=submitbtn  id='copy_";
    echo _obfuscate_iI6QhpSTiJCJiI_KlYePlZI�( 16 );
    echo "' value=\"VC格式\"  onmouseover=\"toClipboard(this.id,$('#vcsdata').html());\">\r\n<input type=button class=submitbtn  id='copy_";
    echo _obfuscate_iI6QhpSTiJCJiI_KlYePlZI�( 16 );
    echo "' value=\"Delphi格式\"  onmouseover=\"toClipboard(this.id,$('#delphisdata').html());\"></span><br>\r\n<textarea style=\"width:570px;height:80px\" id=\"viewtbase\">signData=\"";
    echo $_obfuscate_iI2PkIeKjpOQjIuVlIiMipA�;
    echo "\"</textarea>\r\n<textarea style=\"display:none\" id=basel>";
    echo $_obfuscate_lImJiJKVioeSipWQk4iHlJM�;
    echo "</textarea>\r\n<textarea style=\"display:none\" id=delphisdata>";
    echo $_obfuscate_lImJiJKVioeSipWQk4iHlJM�;
    echo "</textarea>\r\n<textarea style=\"display:none\" id=vbsdata>";
    echo $_obfuscate_kI_TkI6UiIaJko2RlYqIh48�;
    echo "</textarea>\r\n<textarea style=\"display:none\" id=vcsdata>";
    echo $_obfuscate_kJCMh5OGhpGTkIiTj4iHioY�;
    echo "</textarea>\r\n<textarea style=\"display:none\" id=esdata>";
    echo $_obfuscate_kJWNiIiOh4uNlI6SkpSUkIw�;
    echo "</textarea>\r\n";
    exit( );
}
if ( $_obfuscate_k4mViI2Nj4mJkIuUj42JiIY� == "del" )
{
    _obfuscate_kY6LiJGJiIiRiIuRjomOiZA�( );
    if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] != 9 )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "只有管理员才可以删除软件" );
    }
    $_obfuscate_lIiIk4yNiY_VhpGJjpOTh44� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "select * from kss_tb_soft where `id`=".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE� );
    if ( empty( $_obfuscate_lIiIk4yNiY_VhpGJjpOTh44� ) )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "你要删除的软件好像不正在" );
    }
    $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "delete from kss_tb_agentprice where `softid`=".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE�, "sync" );
    if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� === FALSE )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "清理折扣表kss_tb_agentprice出错:".$_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4�( ) );
    }
    $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "delete from kss_tb_order where `softid`=".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE�, "sync" );
    if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� === FALSE )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "清理订单表kss_tb_order出错:".$_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4�( ) );
    }
    $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "delete from kss_tb_keyset where `softid`=".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE�, "sync" );
    if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� === FALSE )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "清理卡类表kss_tb_keyset出错:".$_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4�( ) );
    }
    $_obfuscate_hoqPjpSQiImSkImUjoqJj4o� = array( );
    $_obfuscate_hoqPjpSQiImSkImUjoqJj4o�[] = "`kss_z_user_".$_obfuscate_lIiIk4yNiY_VhpGJjpOTh44�['pid']."_".$_obfuscate_lIiIk4yNiY_VhpGJjpOTh44�['id']."`";
    $_obfuscate_hoqPjpSQiImSkImUjoqJj4o�[] = "`kss_z_key_".$_obfuscate_lIiIk4yNiY_VhpGJjpOTh44�['pid']."_".$_obfuscate_lIiIk4yNiY_VhpGJjpOTh44�['id']."`";
    $_obfuscate_hoqPjpSQiImSkImUjoqJj4o�[] = "`kss_z_user_".$_obfuscate_lIiIk4yNiY_VhpGJjpOTh44�['pid']."_".$_obfuscate_lIiIk4yNiY_VhpGJjpOTh44�['id']."_recycle`";
    $_obfuscate_hoqPjpSQiImSkImUjoqJj4o�[] = "`kss_z_key_".$_obfuscate_lIiIk4yNiY_VhpGJjpOTh44�['pid']."_".$_obfuscate_lIiIk4yNiY_VhpGJjpOTh44�['id']."_recycle`";
    $_obfuscate_hoqPjpSQiImSkImUjoqJj4o�[] = "`kss_z_log_".$_obfuscate_lIiIk4yNiY_VhpGJjpOTh44�['pid']."_".$_obfuscate_lIiIk4yNiY_VhpGJjpOTh44�['id']."`";
    $_obfuscate_hoqPjpSQiImSkImUjoqJj4o�[] = "`kss_z_client_".$_obfuscate_lIiIk4yNiY_VhpGJjpOTh44�['pid']."_".$_obfuscate_lIiIk4yNiY_VhpGJjpOTh44�['id']."`";
    $_obfuscate_hoqPjpSQiImSkImUjoqJj4o�[] = "`kss_z_cz_".$_obfuscate_lIiIk4yNiY_VhpGJjpOTh44�['pid']."_".$_obfuscate_lIiIk4yNiY_VhpGJjpOTh44�['id']."`";
    $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "drop table if exists ".implode( ",", $_obfuscate_hoqPjpSQiImSkImUjoqJj4o� ), "sync" );
    if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� === FALSE )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "删除会员数据表kss_z_*出错:".$_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4�( ) );
    }
    $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "delete from kss_tb_soft where `id`=".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE�, "sync" );
    if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� === FALSE )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "清理软件表kss_tb_soft出错:".$_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4�( ) );
    }
    _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "delok" );
}
$_obfuscate_lYmNk4uUiImKhoqPlIyQjpE� = array( "USOFT" => array( "正常", "停止使用", "禁止注册帐号", "禁止用户充值", "禁止注册帐号和充值", "冻结用户时间，正常使用软件", "冻结用户时间，停止使用软件", "", "", "-" ), "KSOFT" => array( "正常", "停止使用", "禁止新卡号激活", "", "", "冻结用户时间，正常使用软件", "冻结用户时间，停止使用软件", "", "", "-" ) );
$_obfuscate_kIiSjIaLi4qUi4qRjJKRlYk� = array( "USOFT" => "用户名+密码登陆", "KSOFT" => "注册卡号登陆" );
$_obfuscate_i4uIkYuKkJGQlJKOjoiMj4c� = array( "action" => $_obfuscate_lZOThomRipOIi5SRhpWRjY4� );
$_obfuscate_k42Rh4mVlYqGi4mOiZWMjJA� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "page", "gp", "int", 1 );
$_obfuscate_iYqPiJGIjoaVhoaQiI2Ti4w� = "SELECT `id` ";
$_obfuscate_jpCQi4aKkYaIjpSUhpWNipM� = "SELECT * ";
$_obfuscate_homTioySho6Vh5ORiYmUkok� = " where `id` in";
$_obfuscate_kZCPiJCHiI_IlY2Ok4_JlIc� = "SELECT count(*) as tnum ";
$_obfuscate_lJSNlZWKlYmGi4iSkIqHjpA� = "from `kss_tb_soft`  ";
$_obfuscate_lI6IkIyPlJWMioaUiIiVlY0� = array( );
$_obfuscate_h4eJlYuIjpKNio6QkIuJlIY�[] = " `pid`=".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid'];
$_obfuscate_j4mJh4aKjZKHhpOSiJKSjJI� = "";
if ( empty( $_obfuscate_h4eJlYuIjpKNio6QkIuJlIY� ) )
{
    $_obfuscate_j4mJh4aKjZKHhpOSiJKSjJI� = " where".implode( " and ", $_obfuscate_h4eJlYuIjpKNio6QkIuJlIY� );
}
$_obfuscate_lJKOiJSHjo_Sj4yKk4aIh5I�[] = _obfuscate_hpCTj4mKj5WSkpWPjouJkoc�( );
$_obfuscate_lI_KipSOk4iQkI_MjIuVkpQ� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "recordnum", "gp", "int", 0 );
if ( $_obfuscate_k42Rh4mVlYqGi4mOiZWMjJA� == 1 )
{
    $_obfuscate_k46Gk4qOjJGGiYqMiouGh4g� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( $_obfuscate_kZCPiJCHiI_IlY2Ok4_JlIc�.$_obfuscate_lJSNlZWKlYmGi4iSkIqHjpA�.$_obfuscate_j4mJh4aKjZKHhpOSiJKSjJI� );
    $_obfuscate_lI_KipSOk4iQkI_MjIuVkpQ� = $_obfuscate_k46Gk4qOjJGGiYqMiouGh4g�['tnum'];
}
$_obfuscate_lJKOiJSHjo_Sj4yKk4aIh5I�[] = _obfuscate_hpCTj4mKj5WSkpWPjouJkoc�( );
$_obfuscate_i4uIkYuKkJGQlJKOjoiMj4c�['recordnum'] = $_obfuscate_lI_KipSOk4iQkI_MjIuVkpQ�;
$_obfuscate_jIiNjZCPkoeUjI2LipCQk5Q� = abs( floor( $_obfuscate_lI_KipSOk4iQkI_MjIuVkpQ� / ZPAGESIZE * -1 ) );
$_obfuscate_lJKOiJSHjo_Sj4yKk4aIh5I�[] = _obfuscate_hpCTj4mKj5WSkpWPjouJkoc�( );
$_obfuscate_iZWHjpGQkoqPlYmJjYmIhpU� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_lZGTiIiKhouKiZGLi5KUkI8�( $_obfuscate_iYqPiJGIjoaVhoaQiI2Ti4w�.$_obfuscate_lJSNlZWKlYmGi4iSkIqHjpA�.$_obfuscate_j4mJh4aKjZKHhpOSiJKSjJI�." LIMIT ".( $_obfuscate_k42Rh4mVlYqGi4mOiZWMjJA� - 1 ) * ZPAGESIZE.",".ZPAGESIZE );
$_obfuscate_lJKOiJSHjo_Sj4yKk4aIh5I�[] = _obfuscate_hpCTj4mKj5WSkpWPjouJkoc�( );
$_obfuscate_iIiHi4aTkoySkpCNio_UjYo� = "";
if ( empty( $_obfuscate_iZWHjpGQkoqPlYmJjYmIhpU� ) )
{
    foreach ( $_obfuscate_iZWHjpGQkoqPlYmJjYmIhpU� as $_obfuscate_kYqOi5CTjoySj4mIkYmIlY4� )
    {
        $_obfuscate_iIiHi4aTkoySkpCNio_UjYo� .= $_obfuscate_kYqOi5CTjoySj4mIkYmIlY4�['id'].",";
    }
    $_obfuscate_iIiHi4aTkoySkpCNio_UjYo� = substr( $_obfuscate_iIiHi4aTkoySkpCNio_UjYo�, 0, strlen( $_obfuscate_iIiHi4aTkoySkpCNio_UjYo� ) - 1 );
}
$_obfuscate_iYeIjIaVlYaIj4yTiJWHk40� = FALSE;
$_obfuscate_lJKOiJSHjo_Sj4yKk4aIh5I�[] = _obfuscate_hpCTj4mKj5WSkpWPjouJkoc�( );
if ( $_obfuscate_iIiHi4aTkoySkpCNio_UjYo� != "" )
{
    $_obfuscate_homTioySho6Vh5ORiYmUkok� .= "(".$_obfuscate_iIiHi4aTkoySkpCNio_UjYo�.")";
    $_obfuscate_iYeIjIaVlYaIj4yTiJWHk40� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_lZGTiIiKhouKiZGLi5KUkI8�( $_obfuscate_jpCQi4aKkYaIjpSUhpWNipM�.$_obfuscate_lJSNlZWKlYmGi4iSkIqHjpA�.$_obfuscate_homTioySho6Vh5ORiYmUkok� );
}
$_obfuscate_lJKOiJSHjo_Sj4yKk4aIh5I�[] = _obfuscate_hpCTj4mKj5WSkpWPjouJkoc�( );
$_obfuscate_k4yVk4iOipWPioqJlIuVkpE� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iouHh42RkIeKkYaSipWKiog�( $_obfuscate_k42Rh4mVlYqGi4mOiZWMjJA�, $_obfuscate_jIiNjZCPkoeUjI2LipCQk5Q�, $_obfuscate_i4uIkYuKkJGQlJKOjoiMj4c� )."<span class=page_nav_a>".$_obfuscate_lI_KipSOk4iQkI_MjIuVkpQ�."行  耗时"._obfuscate_i4mGjpKMk5WRipSVi4mLi40�( $_obfuscate_lJKOiJSHjo_Sj4yKk4aIh5I� )."毫秒</span>";
echo "<script type=\"text/javascript\">\r\n$(document).ready(function() { \r\n\r\n$(\"[delid]\").css('cursor','pointer').bind('click',function(){\r\nvar tid=$(this).attr(\"delid\");\r\nvar thref='admin_soft.php?action=softlist&isajax=1&op=del&softid='+tid;\t\r\nvar tlevel=\t";
echo $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'];
echo ";\t\r\n\r\nif(tlevel<8){\r\nmalert('无权限删除软件!');\r\nreturn false;\r\n}\r\nmalert('删除软件操作不可恢复，为防意外请做好数据库备份工作!<br>是否真的要删除该软件？','警告',500,60,function(){\r\n$.ajax({\r\nurl: thref,\r\ncache: false,\r\nsuccess: function(html){\r\nif(html=='delok'){\r\n$(\"#trsoftid\"+tid).remove();\t\r\nmalert('软件删除成功！');\t\t\r\n}else{\r\nmalert(html);\r\n}\r\n},\r\nerror:function(XMLHttpRequest, textStatus, errorThrown) {\r\nalert(ourl)\r\n} \r\n});\r\n});\r\n});\r\n$(\"#getsign2\").bind(\"click\",function(){\r\n$.ajax({\r\nurl: './admin_soft.php?action=softlist&op=signdata&isajax=1&sver=9&ver=2',\r\ncache: false,\r\nsuccess: function(html){\r\nif(html.substr(0,8)=='signData'){\r\nmalert(html,'9.5和新版本签名数据，请单击不同按钮可获取相应语言格式化后的签名数据',620,180);\r\n}else{\r\nmalert('取签名数据出错<br>'+html);\r\n}\r\n},\r\nerror:function(XMLHttpRequest, textStatus, errorThrown) {\r\nmalert('err');\r\n} \r\n});\t\r\n});\r\n\r\n});\r\n</script>\r\n<table class=\"listtable\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\" align=\"center\" width=\"97%\">\r\n<tr>\r\n<td class=\"findorpage\">";
echo $_obfuscate_k4yVk4iOipWPioqJlIuVkpE�;
echo "</td><td style=\"background:#f6f6f6;padding:5px 0\" align=center width=220> <input malt=\"9.5和9.5+版本的客户端签名数据\" title=\"9.5和9.5+版本的客户端签名数据\" type=button class=submitbtn id=\"getsign2\" value=\"新签名数据\" /></td>\r\n</tr>\r\n</table>\r\n<table class=\"listtable\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\" align=\"center\" width=\"97%\">\r\n<tr class=\"trhead\">\r\n<td malt=\"软件ID\" width=50>软件ID</td>\r\n<td>软件名</td>\r\n<td>模式</td>\r\n<td>软件编号</td>\r\n<td>软件密钥</td>\r\n<td>软件状态</td>\r\n<td width=\"80\">操作</td>\r\n</tr>\r\n";
if ( empty( $_obfuscate_iYeIjIaVlYaIj4yTiJWHk40� ) )
{
    echo "<tr class=trd><td colspan=9>没有软件，请先添加软件</td></tr>";
}
else
{
    foreach ( $_obfuscate_iYeIjIaVlYaIj4yTiJWHk40� as $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI� )
    {
        $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['softname'] = _obfuscate_j5CKkY_GkomSkoaUlIuLlYk�( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['softname'] );
        $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['softkey'] = _obfuscate_j5CKkY_GkomSkoaUlIuLlYk�( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['softkey'] );
        echo "<tr class=\"trd\" id=\"trsoftid";
        echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['id'];
        echo "\">\r\n<td style=\"font-size:16px;color:#00f;font-weight:700\">";
        echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['id'];
        echo "</td>\r\n<td>";
        echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['softname'];
        echo "</td>\r\n<td>";
        echo $_obfuscate_kIiSjIaLi4qUi4qRjJKRlYk�[$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['softmode']];
        echo "</td>\r\n<td>";
        echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['softcode'];
        echo "</td>\r\n<td>";
        echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['softkey'];
        echo "</td>\r\n<td>";
        echo $_obfuscate_lYmNk4uUiImKhoqPlIyQjpE�[$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['softmode']][$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['softstatus']];
        echo "</td>\r\n<td>\r\n<a href=\"javascript:void(0)\"  onclick=\"dwin('soft_set_";
        echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['id'];
        echo "','";
        echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['softname'];
        echo "参数设置','admin_soft.php?action=addsoft&softid=";
        echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['id'];
        echo "')\"><img malt=\"软件参数设置\" src=\"";
        echo INSTALLPATH;
        echo "kss_inc/images/b_edit.png\" ></a>";
        if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] == 9 )
        {
            echo "&nbsp;&nbsp;<a href=\"javascript:void(0)\"  onclick=\"dwin('user_report_";
            echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['id'];
            echo "','";
            echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['softname'];
            echo "注册卡报表','admin_key.php?action=report&softid=";
            echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['id'];
            echo "')\"><img malt=\"查看该软件注册卡的使用报表\" src=\"";
            echo INSTALLPATH;
            echo "kss_inc/images/b_calendar.png\"></a>\r\n&nbsp;&nbsp;<img  delid=\"";
            echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['id'];
            echo "\" malt=\"删除该软件\" src=\"";
            echo INSTALLPATH;
            echo "kss_inc/images/bd_drop.png\">";
        }
        echo "</td>\r\n</tr>\r\n";
    }
}
echo "</table>\r\n<table class=\"listtable\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\" align=\"center\" width=\"97%\">\r\n<tr>\r\n<td class=\"findorpage\">";
echo $_obfuscate_k4yVk4iOipWPioqJlIuVkpE�;
echo "</td>\r\n</tr>\r\n</table>\r\n";
$_obfuscate_i5GVjZWQj4ePkJKMjJSRipM�[] = _obfuscate_hpCTj4mKj5WSkpWPjouJkoc�( );
echo "<div id=pageruntime>页面运行时间"._obfuscate_i4mGjpKMk5WRipSVi4mLi40�( $_obfuscate_i5GVjZWQj4ePkJKMjJSRipM� )."毫秒</div>";
echo "</body>\r\n</html>";
?>
