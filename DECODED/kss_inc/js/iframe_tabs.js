/*
 * jquery.mousewheel插件
 */
(function($){$.event.special.mousewheel={setup:function(){var handler=$.event.special.mousewheel.handler;if($.browser.mozilla)$(this).bind('mousemove.mousewheel',function(event){$.data(this,'mwcursorposdata',{pageX:event.pageX,pageY:event.pageY,clientX:event.clientX,clientY:event.clientY})});if(this.addEventListener)this.addEventListener(($.browser.mozilla?'DOMMouseScroll':'mousewheel'),handler,false);else this.onmousewheel=handler},teardown:function(){var handler=$.event.special.mousewheel.handler;$(this).unbind('mousemove.mousewheel');if(this.removeEventListener)this.removeEventListener(($.browser.mozilla?'DOMMouseScroll':'mousewheel'),handler,false);else this.onmousewheel=function(){};$.removeData(this,'mwcursorposdata')},handler:function(event){var args=Array.prototype.slice.call(arguments,1);event=$.event.fix(event||window.event);$.extend(event,$.data(this,'mwcursorposdata')||{});var delta=0,returnValue=true;if(event.wheelDelta)delta=event.wheelDelta/120;if(event.detail)delta=-event.detail/3;if($.browser.opera)delta=-event.wheelDelta;event.data=event.data||{};event.type="mousewheel";args.unshift(delta);args.unshift(event);return $.event.handle.apply(this,args)}};$.fn.extend({mousewheel:function(fn){return fn?this.bind("mousewheel",fn):this.trigger("mousewheel")},unmousewheel:function(fn){return this.unbind("mousewheel",fn)}})})(jQuery);

/*
 * JavaScript iframe tabs
 */
var ulx=0;
$(document).ready(function(){
	var bodyobj=$("body");
	var iswheel=0;
	$('ul').mousewheel(function(event, delta) {
		if(iswheel==0){
			iswheel=1;
			$('li').die("mouseover");
		}
		
		if (delta > 0){
			ulx=ulx+200;
			if(ulx>0)ulx=0;
			$("#div_tab").animate({left:ulx}, {queue: false, duration:300} );
		}else{		
			ulx=ulx-200;
			c=$("li:last").position().left+$("li:last").width()-bodyobj.width();
			if(c+ulx<0)ulx=0-c;
			if(ulx>0)ulx=0;
			$("#div_tab").animate({left:ulx}, {queue: false, duration:300} );
		}
	});
	
	$("li").live("mouseover", function(){	
		var p=$(this).position();
		var p2=$("li:last").position();
		nowlix=p.left;
		penx=bodyobj.width();
		lastlix=p2.left+$("li:last").width();
		if(nowlix+ulx< penx/3){ 
			if(ulx<0){
				ulx=ulx+100;
				if(ulx>0)ulx=0;
				$("#div_tab").animate({left:ulx}, {queue: false, duration:200} );
			}
		}else{
			if(nowlix+ulx > penx*2/3){
				if(lastlix+ulx > penx ){
					ulx=ulx-100;
					$("#div_tab").animate({left:ulx}, {queue: false, duration:200 } );				
				}
			}
		}
	});	
	

	CreateDiv("homepage", "admin_homepage.php?action=main", "面板首页");
});


function CreateDiv(tabid, url, name, name2){
	///如果当前tabid存在直接显示已经打开的tab
	var nametitle=name2||name;
	
	if (document.getElementById("div_" + tabid) == null)
	{
		//创建iframe
		var box = document.createElement("iframe");
		box.id = "div_" + tabid;
		box.src = url;
		box.height = "100%";
		box.frameBorder = 0;
		box.width = "100%";
		document.getElementById("div_pannel").appendChild(box);

		//遍历并清除开始存在的tab当前效果并隐藏其显示的div
		var tablist = document.getElementById("div_tab").getElementsByTagName('li');
		var pannellist = document.getElementById("div_pannel").getElementsByTagName('iframe');
		if (tablist.length > 0)
		{
			for (i = 0; i < tablist.length; i++)
			{
					tablist[i].className = "";
					pannellist[i].style.display = "none";
			}
		}

		//创建li菜单
		var tab = document.createElement("li");
		tab.className = "crent";
		tab.id = tabid;
		var ishomepage="<a onclick=\"RemoveDiv('" + tabid + "')\" class=\"win_close\" title=\"关闭当前窗口\"><a>";
		if(tabid=="homepage")ishomepage="";
		var litxt = "<span><a onclick=\"javascript:CreateDiv('" + tabid + "','" + url + "','" + name + "','" + nametitle + "')\" title=" + nametitle + " class=\"menua\" id=\""+tabid+"_ahref\"  hidefocus=\"hidefocus\">" + name + "</a>"+ishomepage+"</span>";
		tab.innerHTML = litxt;
		document.getElementById("div_tab").appendChild(tab);
	}
	else
	{
		var tablist = document.getElementById("div_tab").getElementsByTagName('li');
		var pannellist = document.getElementById("div_pannel").getElementsByTagName('iframe');
		//alert(tablist.length);
		for (i = 0; i < tablist.length; i++)
		{
				tablist[i].className = "";
				pannellist[i].style.display = "none"
		}
		document.getElementById(tabid).className = 'crent';
		if($("#div_" + tabid).attr("src")!=url){
			$("#"+tabid+"_ahref").attr("onclick","").unbind('click').bind('click',function(){
				CreateDiv(tabid,url,name);
			});
			document.getElementById("div_" + tabid).src = url;
		}
		document.getElementById(tabid+"_ahref").innerHTML = name;
		document.getElementById("div_" + tabid).style.display = 'block';
	}
	var nli=$("#"+tabid);
	var nlip=nli.position();
	var nliw=nli.width();
	var penw=$("body").width();
	if(nlip.left+nliw+ulx>penw){
		ulx=ulx-(nlip.left+nliw+ulx-penw);
		$("#div_tab").animate({left:ulx}, {queue: false, duration:200 } );	
	}else{
		if(nlip.left+ulx<0){
			ulx=nlip.left;
			if(ulx>0)ulx=0;
			$("#div_tab").animate({left:ulx}, {queue: false, duration:200 } );	
		}
	}
}

function RemoveDiv(obj) {
	var ob = document.getElementById(obj);
	var cobcname=ob.className;
	ob.parentNode.removeChild(ob);
	var obdiv = document.getElementById("div_" + obj);
	
	obdiv.parentNode.removeChild(obdiv);
	var tablist = document.getElementById("div_tab").getElementsByTagName('li');
	var pannellist = document.getElementById("div_pannel").getElementsByTagName('iframe');
	if (cobcname=="crent" && tablist.length > 0){
		tablist[tablist.length - 1].className = 'crent';
		pannellist[tablist.length - 1].style.display = 'block';
	}             
}

