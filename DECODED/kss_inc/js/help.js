$(document).ready(function(){
	$("input[type='text']").css("background","#E8FBE8").focus(function(){$(this).css("background","#F9F282")}).blur(function(){$(this).css("background","#E8FBE8")});
	$("input[type='password']").css("background","#E8FBE8").focus(function(){$(this).css("background","#F9F282")}).blur(function(){$(this).css("background","#E8FBE8")});
	$("textarea").css("background","#E8FBE8").focus(function(){$(this).css("background","#F9F282")}).blur(function(){$(this).css("background","#E8FBE8")});
	$("select").css("background","#E8FBE8").focus(function(){$(this).css("background","#F9F282")}).blur(function(){$(this).css("background","#E8FBE8")});
	$('label[help]').each(function(){	
		var keywords=$.trim($(this).text());
		keywords=ucode(keywords);
		$(this).attr("keywords",keywords).css({'padding':'0 0 3px 0','background':'url(..'+ksreg_public_jspath+'/images/line.gif)'});
	}); 
	$('label[help]').css("cursor","help");
	$('label[help]').bind("click",function(){
		var pagename=$(this).attr('help');
		var keywords=$(this).attr("keywords");
		var mtext=$(this).text();
		$.ajax({type: "GET",url: "../kss_inc/help.php?&ajax=12&pagename="+pagename+"&keywords="+keywords+"&rndid="+sTime876,
			success: function(msg){
				$.msgbox({width:800,height:250,title:'帮助中心',content:{type:'text', content:'<p><b>'+mtext+'</b><font color=#ffffff>'+pagename+'</font></p><br><br>'+msg}});
			},error:function(ajaxobj){
				$.msgbox({width:300,height:120,title:'出错',content:{type:'alert', content:'获取帮助信息出错：'+ajaxobj.status}});
			}
		});
	});

});

function sTime876(){var d = new Date();return(d.getTime())}
var base64EncodeChars = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/";
function base64encode(str) {
    var out, i, len,c1, c2, c3;
    len = str.length;i = 0;out = "";
    while(i < len) {
		c1 = str.charCodeAt(i++) & 0xff;
		if(i == len) {
			out += base64EncodeChars.charAt(c1 >> 2);
			out += base64EncodeChars.charAt((c1 & 0x3) << 4);
			out += "==";
			break;
		}
		c2 = str.charCodeAt(i++);
		if(i == len) {
			out += base64EncodeChars.charAt(c1 >> 2);
			out += base64EncodeChars.charAt(((c1 & 0x3)<< 4) | ((c2 & 0xF0) >> 4));
			out += base64EncodeChars.charAt((c2 & 0xF) << 2);
			out += "=";
			break;
		}
		c3 = str.charCodeAt(i++);
		out += base64EncodeChars.charAt(c1 >> 2);
		out += base64EncodeChars.charAt(((c1 & 0x3)<< 4) | ((c2 & 0xF0) >> 4));
		out += base64EncodeChars.charAt(((c2 & 0xF) << 2) | ((c3 & 0xC0) >>6));
		out += base64EncodeChars.charAt(c3 & 0x3F);
    }
    return out;
}
function utf16to8(str) {
    var out, i, len, c;
    out = "";
    len = str.length;
    for(i = 0; i < len; i++) {
		c = str.charCodeAt(i);
		if ((c >= 0x0001) && (c <= 0x007F)) {
			out += str.charAt(i);
		} else if (c > 0x07FF) {
			out += String.fromCharCode(0xE0 | ((c >> 12) & 0x0F));
			out += String.fromCharCode(0x80 | ((c >>  6) & 0x3F));
			out += String.fromCharCode(0x80 | ((c >>  0) & 0x3F));
		} else {
			out += String.fromCharCode(0xC0 | ((c >>  6) & 0x1F));
			out += String.fromCharCode(0x80 | ((c >>  0) & 0x3F));
		}
    }
    return out;
}
function ucode(ostr){

	var tstr=base64encode(utf16to8(ostr));
	tstr=tstr.replace(/=/,'K0001');
	tstr=tstr.replace(/\+/,'K0002');
	tstr=tstr.replace(/\//,'K0003');
	return tstr;
}