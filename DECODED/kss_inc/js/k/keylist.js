function loadfindui(v_sel){
	if(v_sel=='keys' || v_sel=='tags' || v_sel=='ordernum' || v_sel=='keyextattr' || v_sel=='czusername'){
		$("#keywords").show();
		$("#morekeys").hide();
		$("#prefix").hide();
		$("#managerid").val(0);
		$("#managerid").hide();
		$("#czarea").hide();
	}else if(v_sel=='morekeys'){
		$("#morekeys").show();
		$("#keywords").hide();
		$("#prefix").hide();
		$("#managerid").val(0);
		$("#managerid").hide();
		$("#czarea").hide();
	}else if(v_sel=='no' || v_sel=='islock' || v_sel=='isback'){
		$("#morekeys").hide();
		$("#keywords").hide();
		$("#prefix").hide();
		$("#managerid").show();
		$("#czarea").hide();
	}else{
		$("#morekeys").hide();
		$("#keywords").hide();
		$("#prefix").show();
		$("#managerid").show();
		$("#isactive").attr("checked")==true?$("#cztime").show():$("#cztime").hide();	
		$("#czarea").show();
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
	$("#cztime1,#cztime2").date_input({addhss: "00:00:00"});
	loadfindui($("#selcmd").val());
	
	$(".savetag").bind("click",function(e){
		var tagobj=$(this).prev();
		if(tagobj.attr("oldval")==tagobj.val())return false;
		Mouse(e);//计算显示层的位置
		var tkey=$(this).parent().parent().attr("id").substr(3);

		var ourl="admin_key.php?action=keylist&op=savetags&isajax=1&softid="+softid+"&keys="+tkey+"&tags="+encodeURIComponent(tagobj.val());
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
	
	$("#copyselkey").bind("mouseover",function(e){
		var copykeystr='';
		$("input[name='keys[]']:checked").each(function(i){
			copykeystr=copykeystr+"\r\n"+$(this).parent().parent().find(".keynum:eq(0)").attr("copyt");
		});
		if(copykeystr==''){
			mview('你未选中任何卡号',25,0);
			return false;
		}
		toClipboard($(this).attr("id"),copykeystr);
	});
	
	$("#setalltag,#lockkey,#unlockkey,#delkey,#recoverykey").bind("click",function(e){
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
	$("#isactive").bind("click",function(e){
		
		Mouse(e);//计算显示层的位置
		mview('如果后边的两个日期都是 2012-01-01 00:00:00或0 <br>就是查未充值的卡');
		$(this).attr("checked")==true?$("#cztime").show():$("#cztime").hide();
	});
	
	$("#selcmd").bind("change",function(){
		loadfindui($(this).val());	
	});
	
	$("input[Readonly]").bind("click",function(){
		this.blur();
	}); 
	
	$('#keylist').ajaxForm({
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
			}else if(strs[0]=='ok4'){
				var newtag2=$("#newtag").val();
				for (i=2;i<strs.length ;i++ ){
					//$("#trd"+strs[i]).find("input[oldval]").attr({oldval:newtag2,value:newtag2});
					$("#trd"+strs[i]).children().eq(4).children().eq(0).attr({oldval:newtag2,value:newtag2});
				}
				if(strs[1]!='')	{
					malert(strs[1]);
				}else{					
					mview('批量修改标签成功',25,0);
				}
			}else if(strs[0]=='ok6'){
				malert(responseText.substr(4),'退卡报表---注意退卡没有日志表记录，你可以COPY本报表到本地备查',800,400);
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
		if(othis.parent().parent().children().eq(10).text()!='-'){
			mview("已使用过的卡没必要锁定或解锁。");	
			return false;
		}
		islock=mylevel-5;
		var op=$(this).attr("op");
		if(islock>0 && mylevel-5<islock){
			malert('该注册卡被你级别高的用户锁定，你无权解锁！');
		}
		var ourl="admin_key.php?action=keylist&op="+encodeURIComponent(op)+"&isajax=1&softid="+softid+"&keys="+tkey;
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
	
	
	$("img[op='删除']").bind('click',function(e){
		var tkey=$(this).parent().parent().attr("id");
		tkey=tkey.substr(3);
		var ourl="admin_key.php?action=keylist&op="+encodeURIComponent("删除")+"&isajax=1&softid="+softid+"&keys="+tkey;
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