 var contextMenuObj;
 var MSIE = navigator.userAgent.indexOf('MSIE')?true:false;
 var navigatorVersion = navigator.appVersion.replace(/.+(MSIE[^;]+).+/g,'$1')/1; 
 var activeContextMenuItem = false;
 function highlightContextMenuItem(){this.className='contextMenuHighlighted';}
 
 function deHighlightContextMenuItem(){this.className='';}
 
 function showContextMenu(e){
   ContextMenuIsShow=true;
   contextMenuSource = this;
   if(activeContextMenuItem)activeContextMenuItem.className='';
   if(document.all)e = event;
   var xPos = e.clientX;
   if(xPos + contextMenuObj.offsetWidth > (document.documentElement.offsetWidth-20)){
    xPos = xPos + (document.documentElement.offsetWidth - (xPos + contextMenuObj.offsetWidth)) - 20; 
   }
   
   var yPos = e.clientY;
   if(document.documentElement.scrollTop > 0)
     {       
       yPos = (window.screen.Height) ? e.clientY + document.documentElement.scrollTop -20 : e.clientY -20;
       yPos = e.clientY + document.documentElement.scrollTop -20 ;
     }
     else if (window.pageYOffset) 
     {
       yPos = (window.pageYOffset > 0) ? e.clientY + window.pageYOffset -20 : e.clientY -20;
     }
     else
     { yPos = e.clientY -20; }
   /* * */
   contextMenuObj.style.left = xPos + 'px';
   contextMenuObj.style.top = yPos + 'px';
   contextMenuObj.style.display='block';
   return false; 
 }

 function hideContextMenu(e){
  if(document.all) e = event;
  if(e.button==0 && !MSIE){   
  }else{
	contextMenuObj.style.display='none';
  }
 }
 
 function initContextMenu(){
  contextMenuObj = document.getElementById('contextMenu');
  contextMenuObj.style.display = 'block';
  var menuItems = contextMenuObj.getElementsByTagName('LI');
  for(var no=0;no<menuItems.length;no++){
   menuItems[no].onmouseover = highlightContextMenuItem;
   menuItems[no].onmouseout = deHighlightContextMenuItem;
   
   var aTag = menuItems[no].getElementsByTagName('A')[0];
   
   var img = menuItems[no].getElementsByTagName('IMG')[0];
   if(img){
    var div = document.createElement('DIV');
    div.className = 'imageBox';
    div.appendChild(img);
    
    if(MSIE && navigatorVersion<6){
     aTag.style.paddingLeft = '0px';
    }
    
    var divTxt = document.createElement('DIV'); 
    divTxt.className='itemTxt';
    divTxt.innerHTML = aTag.innerHTML;
    
    aTag.innerHTML = '';
    aTag.appendChild(div);
    aTag.appendChild(divTxt);
    if(MSIE && navigatorVersion<6){
     div.style.position = 'absolute';
     div.style.left = '2px';
     divTxt.style.paddingLeft = '15px';
    }
    
    if(!document.all){
     var clearDiv = document.createElement('DIV');
     clearDiv.style.clear = 'both';
     aTag.appendChild(clearDiv);  
    }
   }else{
    if(MSIE && navigatorVersion<6){
     aTag.style.paddingLeft = '15px';
     aTag.style.width = (aTag.offsetWidth - 30) + 'px';
    }else{
     aTag.style.paddingLeft = '30px';
     aTag.style.width = (aTag.offsetWidth - 60) + 'px';
    }
   }
  }
  contextMenuObj.style.display = 'none';  
  document.documentElement.oncontextmenu = showContextMenu;
  document.documentElement.onclick = hideContextMenu;
 }