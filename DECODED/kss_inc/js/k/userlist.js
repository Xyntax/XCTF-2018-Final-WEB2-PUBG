function loadfindui(v_sel){
	if(v_sel=='keys' || v_sel=='tags'|| v_sel=='bdinfo' || v_sel=='keyextattr' || v_sel=='pccode'){
		$("#keywords").show();
		$("#morekeys").hide();
		$("#managerid").val(0);
		$("#managerid").hide();
	}else if(v_sel=='morekeys'){
		$("#morekeys").show();
		$("#keywords").hide();
		$("#managerid").val(0);
		$("#managerid").hide();
	}else if(v_sel=='islock' || v_sel=='isonline' || v_sel=='isend'){
		$("#morekeys").hide();
		$("#keywords").hide();
		$("#managerid").show();
	}else{
		$("#morekeys").hide();
		$("#keywords").hide();
		$("#managerid").show();
	}
}

function changewinsize(){
	if($(window).width()<1000){
		var tw=$(window.top.document).find("#hvm");
			if(tw.attr("dis")==1){
				tw.click();
				malert('你屏幕分辩率宽似乎是1024px！为了方便您浏览注册卡信息系统已自动隐藏的左侧菜单栏。<br>如果你想找回左侧菜单栏，请先切换到顶部的其它页面标签<br>然后点击最左侧的红绿蓝小三角图标可重新看到左侧菜单栏','友情提示',600,100);
			}
			return false;

	}	
}	

	
$(document).ready(function() { 
	loadfindui($("#selcmd").val());
	$(".viewipc").hover(function(){
		$(this).attr('src',INSTALLPATH+"kss_inc/images/b_view.png");
	},function(){
		$(this).attr('src',INSTALLPATH+"kss_inc/images/b_view2.png");
	}).bind("click",function(){
		dwin('user_dklist'+softid,'多开记录','admin_key.php?action=dklist&softid='+softid+'&keywords='+encodeURIComponent($(this).parent().parent().children().eq(0).children().eq(0).val()));
	});
	
	$(".viewlog").bind("click",function(){
		dwin('key_userlog'+softid,'用户日志','admin_logs.php?action=user_log&softid='+softid+'&keywords='+encodeURIComponent($(this).parent().parent().children().eq(0).children().eq(0).val()));
	});
	$(".viewczlog").bind("click",function(){
		dwin('key_czlog'+softid,'充值日志','admin_logs.php?action=userczlog&softid='+softid+'&keywords='+encodeURIComponent($(this).parent().parent().children().eq(0).children().eq(0).val()));
	});
	
	$(".edituser").bind("click",function(){
		var tkey=$(this).parent().parent().attr("id").substr(3);
		var ourl="./admin_key.php?action=edituser&isajax=1&smode="+smode+"&softid="+softid+"&keys="+encodeURIComponent(tkey);
		malert(ourl,'编辑客户资料',700,200);
	});

	$(".savetag").bind("click",function(e){
		var tagobj=$(this).prev();
		if(tagobj.attr("oldval")==tagobj.val())return false;
		Mouse(e);//计算显示层的位置
		var tkey=$(this).parent().parent().attr("id").substr(3);

		var ourl="admin_key.php?action=userlist&op=savetags&isajax=1&softid="+softid+"&keys="+encodeURIComponent(tkey)+"&tags="+encodeURIComponent(tagobj.val());
		$.ajax({
			url: ourl,
			cache: false,
			success: function(html){
				if(html=='ok'){
					tagobj.attr("oldval",tagobj.val());
					mview("已保存。");
				}else{
					malert(html);
				}
			},
			error:function(XMLHttpRequest, textStatus, errorThrown) {
				alert(ourl)
			} 
		});	
	
	});	
	
	$("#setalltag,#lockkey,#unlockkey,#pausekey,#unpausekey,#delkey,#recoverykey,#unbindkey,#unlinekey").bind("click",function(e){
		Mouse(e);//计算显示层的位置
	});

	$("#chkall").click(function(){ 
		$("input[name='keys[]']").checkCbx(); 
	});
	$("tr[id^='trd'] td:first-child").bind("click",function(e){
		if(e.target.tagName=='TD'){
			$(this).find("input:first").click();
		}
	});

	
	$("#selcmd").bind("change",function(){
		loadfindui($(this).val());	
	});
	
	$("input[Readonly]").bind("click",function(){
		this.blur();
	}); 
	
	$(".online2,.online3").bind("click",function(e){
	
		var othis=$(this);
		var tkey=othis.parent().parent().attr("id");
		tkey=tkey.substr(3);
		Mouse(e);//计算显示层的位置
		
		var ourl="admin_key.php?action=userlist&op=unline&isajax=1&softid="+softid+"&keys="+encodeURIComponent(tkey);
		$.ajax({
			url: ourl,
			cache: false,
			success: function(html){
				if(html.substr(0,2)=='ok'){
					othis.removeClass("online2").removeClass("online3").addClass("online0");
					mview("强制离线成功。");
				}else{
					malert(html);
				}
			},
			error:function(XMLHttpRequest, textStatus, errorThrown) {
				alert(ourl)
			} 
		});	
		return false;
	});
	$('#userlist').ajaxForm({
		beforeSubmit:function (arr, $form, options) {
			if($("input[name='keys[]']:checked").length==0){
				malert('请还未选择任何数据！');
				return false;
			}
			
			return true;
		},
		success:function (responseText, statusText, xhr, $form) {
			strs=responseText.split(","); //字符分割 
			if(strs[0]=='ok1'){
				for (i=2;i<strs.length ;i++ ){
					imgthis=$("#trd"+strs[i]+" td:eq(1)").find("[lock]");
					imgthis.attr("op","解锁").attr("src",	imgthis.attr("src").replace("b_usrcheck.png","b_uncheck.png"));	
				}
				if(strs[1]!='')	{
					malert(strs[1]);
				}else{
					mview("批量锁定成功。");
				}
			}else if(strs[0]=='ok0'){
				for (i=2;i<strs.length ;i++ ){
					imgthis=$("#trd"+strs[i]+" td:eq(1)").find("[lock]");
					imgthis.attr("op","锁定").attr("src",imgthis.attr("src").replace("b_uncheck.png","b_usrcheck.png"));
				}
				if(strs[1]!='')	{
					malert(strs[1]);
				}else{
					mview("批量解锁成功。");
				}
			}else if(strs[0]=='ok6'){
				for (i=2;i<strs.length ;i++ ){
					imgthis=$("#trd"+strs[i]+" td:eq(1)").find("[pause]");
					imgthis.attr("op","解冻").attr("src",	imgthis.attr("src").replace("b_pause.png","b_unpause.png"));	
				}
				if(strs[1]!='')	{
					malert(strs[1]);
				}else{
					mview("批量冻结成功。");
				}
			}else if(strs[0]=='ok7'){
				for (i=2;i<strs.length ;i++ ){
					imgthis=$("#trd"+strs[i]+" td:eq(1)").find("[pause]");
					imgthis.attr("op","冻结").attr("src",imgthis.attr("src").replace("b_unpause.png","b_pause.png"));
				}
				if(strs[1]!='')	{
					malert(strs[1]);
				}else{
					mview("批量解冻成功。");
				}
			}else if(strs[0]=='ok3'){
				j=0;
				for (i=2;i<strs.length ;i++ ){
					$("#trd"+strs[i]).remove();
					j=j+1;
				}
				if(strs[1]!='')	{
					malert(strs[1]);
				}else{
					mview("批量删除成功。",0-j*32,0);
				}
			}else if(strs[0]=='ok5'){
				j=0;
				for (i=2;i<strs.length ;i++ ){
					$("#trd"+strs[i]).remove();
					j=j+1;
				}
				if(strs[1]!='')	{
					malert(strs[1]);
				}else{
					mview("批量还原成功。",0-j*32,0);
				}
			}else if(strs[0]=='ok9'){
				if(strs[1]!='')	{
					malert(strs[1]);
				}else{
					mview("批量解绑成功。");
				}
			}else if(strs[0]=='ok4'){
				var newtag2=$("#newtag").val();
				for (i=2;i<strs.length ;i++ ){
					$("#trd"+strs[i]).find("input[oldval]").attr({oldval:newtag2,value:newtag2});
					//$("#trd"+strs[i]).children().eq(3).children().eq(0).attr({oldval:newtag2,value:newtag2});
				}
				if(strs[1]!='')	{
					malert(strs[1]);
				}else{					
					mview('批量修改标签成功',25,0);
				}
			}else{		     
				malert(responseText);
			}
		},
		error:function(){isclickadd=0;alert("error!");}
	});
	
	$("img[lock]").bind('click',function(e){
		var othis=$(this);
		var tkey=othis.parent().parent().attr("id");
		tkey=tkey.substr(3);
		Mouse(e);//计算显示层的位置
		islock=mylevel-5;
		var op=$(this).attr("op");
		if(islock>0 && mylevel-5<islock){
			malert('该会员被你级别高的用户锁定，你无权解锁！'+mylevel);
		}
		var ourl="admin_key.php?action=userlist&op="+encodeURIComponent(op)+"&isajax=1&softid="+softid+"&keys="+encodeURIComponent(tkey);
		$.ajax({
			url: ourl,
			cache: false,
			success: function(html){
				if(html.substr(0,2)=='ok'){
					if(op=='锁定'){
						othis.attr("op","解锁");
						othis.attr("src",othis.attr("src").replace("b_usrcheck.png","b_uncheck.png"));	
						mview("锁定成功。");	
					}else{
						othis.attr("op","锁定");
						othis.attr("src",othis.attr("src").replace("b_uncheck.png","b_usrcheck.png"));
						mview("解锁成功。");					
					}		
				}else{
					malert(html);
				}
			},
			error:function(XMLHttpRequest, textStatus, errorThrown) {
				alert(ourl)
			} 
		});	
		//return false;
	});

	
	$("img[pause]").bind('click',function(e){
		var othis=$(this);
		var tkey=othis.parent().parent().attr("id");
		tkey=tkey.substr(3);
		Mouse(e);//计算显示层的位置
		islock=mylevel-5;
		var op=$(this).attr("op");
		if(islock>0 && mylevel-5<islock){
			malert('该会员被你级别高的用户冻结，你无权冻结！'+mylevel);
		}
		var ourl="admin_key.php?action=userlist&op="+encodeURIComponent(op)+"&isajax=1&softid="+softid+"&keys="+encodeURIComponent(tkey);
		$.ajax({
			url: ourl,
			cache: false,
			success: function(html){
				if(html.substr(0,2)=='ok'){
					if(op=='冻结'){
						othis.attr("op","解冻");
						othis.attr("src",othis.attr("src").replace("b_pause.png","b_unpause.png"));	
						mview("冻结成功。");	
					}else{
						othis.attr("op","冻结");
						othis.attr("src",othis.attr("src").replace("b_unpause.png","b_pause.png"));
						mview("解冻成功。");					
					}		
				}else{
					malert(html);
				}
			},
			error:function(XMLHttpRequest, textStatus, errorThrown) {
				alert(ourl)
			} 
		});	
		//return false;
	});	
	
	
	$("img[op='删除']").bind('click',function(e){
		var tkey=$(this).parent().parent().attr("id");
		tkey=tkey.substr(3);
		var ourl="admin_key.php?action=userlist&op="+encodeURIComponent("删除")+"&isajax=1&softid="+softid+"&keys="+encodeURIComponent(tkey);
		Mouse(e);//计算显示层的位置
		$.ajax({
			url: ourl,
			cache: false,
			success: function(html){
				if(html.substr(0,3)=='ok3'){
					mview("删除成功，页面数据已经刷新，不要重复单击删除。",-5,50);	
					$("#trd"+tkey).remove();
				}else{
					malert(html);
				}
			},
			error:function(XMLHttpRequest, textStatus, errorThrown) {
				alert(ourl)
			} 
		});	
	});	
	changewinsize();
	$(window).resize(function(){
		changewinsize();
	});

});