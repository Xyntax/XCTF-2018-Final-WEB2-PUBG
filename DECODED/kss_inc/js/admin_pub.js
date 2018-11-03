var malertnum=0;
var setTimeoutID=new Array();
var setTimeoutIndex=-1;
var pubcallback=function(){};
var leftpos=0;
var toppos=0;
//计算坐标函数
var Mouse = function(e){
	mouse = new MouseEvent(e);
	leftpos = mouse.x +20;
	toppos = mouse.y;
}
//获取鼠标坐标函数
var MouseEvent = function(e) {
	this.x = e.pageX;
	this.y = e.pageY;
}

function tcopy(data){
	alert("旧版本的复制操作错误（错误内容：直接调用tcopy接口），请报告给可可网络验证作者，以便及时的得到更正！");	
	return false;
}

function sTime(){
	var d,s;d = new Date();s=d.getTime();return(s);
}

//生成随机字符串
function randstr(l) {
	var x="123456789poiuytrewqasdfghjklmnbvcxzQWERTYUIPLKJHGFDSAZXCVBNM";
	var tmp="";
	for(var i=0;i< l;i++) {
		tmp += x.charAt(Math.ceil(Math.random()*100000000)%x.length);
	}
	return tmp;
}

//最终窗口中打开新链接
function dwin(winid,winname,winurl){window.parent.CreateDiv(winid,winurl,winname);}

//关闭显示
function clearmalt(){	
	if(window.parent.get_mouse()==0) window.parent.clear_malt();
}


function t2p(s){
	var e='';
	for(var i = 0; i < s.length; i++){
		if(s.charCodeAt(i) < 256 ) {
			e=e+"#";
		}else{
			e=e+"╳";
		}
	}
	return e;
}
function clearcopy(){
	$("#keycopy").hide();
}

function mview(v_text,itop,ileft,itype){
	//alert(v_text+','+toppos);
	itop=itop||0;
	ileft=ileft||0;
	itype=itype||0;
	
	if($("#keycopy").length==0){
		$("body").append("<div id='keycopy'>文本框内容已复制到剪贴板。</div>"); 
	}
	if(itype==1){
		$("#keycopy").html(v_text).css({position:'absolute',top:itop,left:ileft,zIndex:100}).show();
	}else{
		$("#keycopy").html(v_text).css({position:'absolute',top:toppos+itop,left:leftpos+ileft,zIndex:100}).show();
	}
	window.setTimeout(clearcopy, 2000);

}


function toClipboard(copy_id,input_text) {
	var clip = new ZeroClipboard.Client();
	clip.setHandCursor(true);
	input_text = input_text.replace(/\r/g, "");
	input_text = input_text.replace(/\n/g, "\r\n");
	clip.setText(input_text);		
	clip.addEventListener('complete', function (client) {
		mview("完整内容已复制到剪贴板",client.kstop,client.ksleft,1);
	});
	clip.glue(copy_id);	
}
	
$(document).ready(function() { 
	$(".isip").bind("click",function(e){
		Mouse(e);//计算显示层的位置
		var ourl="admin_ipinfo.php?ip="+$(this).text();
		$.ajax({
			url: ourl,
			cache: false,
			success: function(html){
				mview(html);
			},
			error:function(XMLHttpRequest, textStatus, errorThrown) {
				alert(ourl)
			} 
		});	
	
	});

	$("#pageruntime").bind("dblclick",function(){
		$("#viewsql").css("display","block");
	});
	
	$("#keywords").bind("dblclick",function(){
		$(this).select();
	});
	
	
	//注册卡号，订单号复制
	$(".keynum").bind("mouseover",function(e){
		Mouse(e);//计算显示层的位置
		var tval=$(this).attr("copyt");
		if($(this).attr("id")==""){
			alert("旧版本的复制操作错误（错误内容：控件未定义ID），请报告给可可网络验证作者，以便及时的得到更正！");
			return true;
		}
		if(tval=="")return true;
		toClipboard($(this).attr("id"),tval);
		return true;
	});
	

		
	//密码输入框
		$("input[cnpassword=1]").each(function(i){
			var tpos=$(this).offset();
			var tpost=$(this).scrollTop();
			var twidth=$(this).outerWidth();
			var theight=$(this).outerHeight();
			var pdiv="<div id=div"+this.id+" class='pwddiv' style='width:"+(twidth-2)+"px;height:"+(theight-2)+"px;display:block;position:absolute;top:"+(tpos.top+1)+"px;left:"+(tpos.left+1)+"px'>&nbsp;</div>";
			$("body").append(pdiv);		
		}).bind("click",function(){
			var tid=this.id;
			$(this).val("");
			$("#div"+tid).text("");
		}).bind("keyup",function(){
			var e1=$(this).val();
			var tid=this.id;
			$("#div"+tid).text(t2p(e1));
		});
				
		$(".pwddiv").bind("click",function(){
			var tid=this.id;
			$("#"+tid.substr(3)).click().focus();
		});


	//验证码单击刷新
	$(".addkeyimg").bind("click",function(){
		$(this).attr("src","addkeyimg.php?"+sTime())
	});
		
	$(".ck2img").bind("click",function(){
		$(this).attr("src","../kss_inc/ck2.php?"+sTime())
	});	
	

	//$("[malt]").css("cursor","pointer");
	
	//图片按钮效果
	$(".submitbtn").live('mouseover', function () {$(this).removeClass("submitbtn").addClass("submitbtn_");});
	$(".submitbtn_").live("mouseout",function () {$(this).removeClass("submitbtn_").addClass("submitbtn");});
	
	//表格数据行鼠标划过顶部显示title
	$("[malt]").hover(  
		function () {
			setTimeoutIndex=setTimeoutIndex+1;
			if(setTimeoutIndex>0)window.clearTimeout(setTimeoutID[setTimeoutIndex-1]);
			if(setTimeoutIndex>100)setTimeoutIndex=-1;
			window.parent.write_malt($(this).attr("malt"));
		},
		function () {
			setTimeoutID[setTimeoutIndex]=window.setTimeout(clearmalt, 5000);
			
		}
	);
	
	//表格行鼠标划过时状态效果
	$("tr[class^='trd']").hover(
		function (){
			$(this).addClass("trhover");
		},
		function (){
			$(this).removeClass("trhover");
		}
	);
	
	//copy类，可单击鼠标复制
    $(".copy").bind("mousedown",function(){var kkdd=this.innerText;if(tcopy(this.innerText)){$.msgbox({width:300,height:120,content:{type:"信息提示", content:"注册卡号" + kkdd + "已复制到剪贴板！"},autoClose:2})}});

	//malert框，关闭按钮事件
	$(".malertboxclosebtn")
		.live("mouseover",function (){$(this).attr("src",$(this).attr("src").replace("close1.gif","close2.gif"));})
		.live("mouseout",function (){$(this).attr("src",$(this).attr("src").replace("close2.gif","close1.gif"));})
		.live("click",function (){
			var alertid=$(this).attr("id");
			var boxzid=alertid.substr(5)*1;
			$("#mask"+alertid+",#box"+alertid).remove();
			if (fackie==1){
				if(boxzid>1){
					$("#box_____"+(boxzid-1)).find("select").css("visibility","visible");
				}else{
					$("select").css("visibility","visible");
				}
			}
			malertnum=malertnum-1;
		});
		
	
});
function malert_close(s_box){
	$("#"+s_box).click();
}

function malert(mtext,mtitle,mwidth,mheight,callback){
	//malert_close();  //先关掉旧的
	malertnum=malertnum+1;
	var malertid="_____"+malertnum;
	var fid="ajax"+sTime();
	var isajax=0;
	var ajaxurl='';
	var viewokbtn=1;
	mtext=mtext||"err";
	mtitle=mtitle||"信息提示";
	mtitle=mtitle.replace(/&/g,'&amp;');
	mwidth=mwidth||500;
	mheight=mheight||100;
	var mtop=mheight>300?20:100;
	pubcallback=callback||null;
	var ieheight=$(window).height();
	var bodyheight=$(document).height();
	var maskheight=ieheight>bodyheight?ieheight:bodyheight;
	var shtml='';
	var malertboxstyle="";
	if(mtitle.substr(0,1)=='0'){
		viewokbtn=0;
		mtitle=mtitle.substr(1);
	}

	if(mtext.substr(0,1)=="/" || mtext.substr(0,2)=="./" || mtext.substr(0,3)=="../" || mtext.substr(0,7)=="http://"){
		isajax=1;
		ajaxurl=mtext;
		mtext="<p align=center><img src="+INSTALLPATH+"kss_inc/images/load1.gif align=absmiddle>正在载入中...</p>";
	}

	if (fackie==1){
		$("select").css("visibility","hidden");	
		malertboxstyle="display:block;background-color:#fff;border:3px solid #ccc;position:absolute;top:"+($(document).scrollTop()*1+mtop)+"px;width:"+mwidth+"px;left:"+($(document).width()-mwidth)/2+"px";		
	}else{
		malertboxstyle="background-color:#fff;margin:auto;border:3px solid #ccc;width:"+mwidth+"px;position:fixed;top:"+mtop+"px;left:"+($(document).width()-mwidth)/2+"px";
	}

	shtml=shtml+"<div id=\"mask"+malertid+"\" class=\"malertmask\" style=\"position:absolute;display:block;top:0;left:0;width:100%;height:"+maskheight+"px;background:#333; -moz-opacity:0.4; -webkit-opacity:0.4; opacity:0.4; filter:progid:DXImageTransform.Microsoft.Alpha(Opacity=40);\"></div>"+
	'<table id="box'+malertid+'" class="malertbox" border="0" cellspacing="0" cellpadding="0" align=center style="'+malertboxstyle+'">'+
	'<tr bgcolor="#cacaca">'+
	'	<td style="color:#333;font-weight:700;">&nbsp;&nbsp;'+mtitle+'</td>'+
	'	<td align=right height=30><img id="'+malertid+'" class="malertboxclosebtn" src="'+INSTALLPATH+'kss_inc/images/close1.gif" style="cursor:pointer">&nbsp;</td></tr>'+
	'<tr><td colspan="2" id="'+fid+'" height='+mheight+' valign="top" style="line-height:150%;font-size:10.5pt;padding:3px 10px">'+mtext+'</td></tr>';
	if(pubcallback!=null){
		shtml=shtml+'<tr><td colspan="2" height="30" valign="middle" align=center ><input type=button class=submitbtn iscallback=1 value="是" onclick=\'pubcallback();$("#'+malertid+'").click();\'/>&nbsp;&nbsp;&nbsp;&nbsp;<input type=button class=submitbtn value="否" onclick=\'$("#'+malertid+'").click();\'/></td></tr></table>';
	}else{
		if(ajaxurl=='' && viewokbtn==1)
		shtml=shtml+'<tr><td colspan="2" height="30" valign="middle" align=center ><input type=button class=submitbtn value="确 定" onclick=\'$("#'+malertid+'").click();\'/></td></tr></table>';
	}
	$("body").append(shtml);
	
	
	if(isajax==1){
		$.ajax({type:"GET",url:ajaxurl,cache:false,
			success: function(msg){
				$("#"+fid).html(msg);
			},
			error:function(ajaxobj){
				$("#"+fid).html("读取数据出错！");
			}
		});
	}
	return malertid;
}
