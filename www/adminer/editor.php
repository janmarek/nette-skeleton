<?php
/** Adminer Editor - Compact database editor
* @link http://www.adminer.org/
* @author Jakub Vrana, http://www.vrana.cz/
* @copyright 2009 Jakub Vrana
* @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU General Public License, version 2 (one or other)
* @version 3.3.3
*/error_reporting(6135);$ub=(!ereg('^(unsafe_raw)?$',ini_get("filter.default")));if($ub||ini_get("filter.default_flags")){foreach(array('_GET','_POST','_COOKIE','_SERVER')as$V){$Id=filter_input_array(constant("INPUT$V"),FILTER_UNSAFE_RAW);if($Id){$$V=$Id;}}}if(isset($_GET["file"])){header("Expires: ".gmdate("D, d M Y H:i:s",time()+365*24*60*60)." GMT");if($_GET["file"]=="favicon.ico"){header("Content-Type: image/x-icon");echo
base64_decode("AAABAAEAEBAQAAEABAAoAQAAFgAAACgAAAAQAAAAIAAAAAEABAAAAAAAwAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA////AAAA/wBhTgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAERERAAAAAAETMzEQAAAAATERExAAAAABMRETEAAAAAExERMQAAAAATERExAAAAABMRETEAAAAAEzMzMREREQATERExEhEhABEzMxEhEREAAREREhERIRAAAAARIRESEAAAAAESEiEQAAAAABEREQAAAAAAAAAAD//9UAwP/VAIB/AACAf/AAgH+kAIB/gACAfwAAgH8AAIABAACAAf8AgAH/AMAA/wD+AP8A/wAIAf+B1QD//9UA");}elseif($_GET["file"]=="default.css"){header("Content-Type: text/css; charset=utf-8");echo'body{color:#000;background:#fff;font:90%/1.25 Verdana,Arial,Helvetica,sans-serif;margin:0;}a{color:blue;}a:visited{color:navy;}a:hover{color:red;}h1{font-size:150%;margin:0;padding:.8em 1em;border-bottom:1px solid #999;font-weight:normal;color:#777;background:#eee;}h2{font-size:150%;margin:0 0 20px -18px;padding:.8em 1em;border-bottom:1px solid #000;color:#000;font-weight:normal;background:#ddf;}h3{font-weight:normal;font-size:130%;margin:1em 0 0;}form{margin:0;}table{margin:1em 20px 0 0;border:0;border-top:1px solid #999;border-left:1px solid #999;font-size:90%;}td,th{border:0;border-right:1px solid #999;border-bottom:1px solid #999;padding:.2em .3em;}th{background:#eee;text-align:left;}thead th{text-align:center;}thead td,thead th{background:#ddf;}fieldset{display:inline;vertical-align:top;padding:.5em .8em;margin:.8em .5em 0 0;border:1px solid #999;}p{margin:.8em 20px 0 0;}img{vertical-align:middle;border:0;}td img{max-width:200px;max-height:200px;}code{background:#eee;}tbody tr:hover td,tbody tr:hover th{background:#eee;}pre{margin:1em 0 0;}input[type=image]{vertical-align:middle;}.version{color:#777;font-size:67%;}.js .hidden,.nojs .jsonly{display:none;}.nowrap td,.nowrap th,td.nowrap{white-space:pre;}.wrap td{white-space:normal;}.error{color:red;background:#fee;}.error b{background:#fff;font-weight:normal;}.message{color:green;background:#efe;}.error,.message{padding:.5em .8em;margin:1em 20px 0 0;}.char{color:#007F00;}.date{color:#7F007F;}.enum{color:#007F7F;}.binary{color:red;}.odd td{background:#F5F5F5;}.js .checked td,.js .checked th{background:#ddf;}.time{color:silver;font-size:70%;}.function{text-align:right;}.number{text-align:right;}.datetime{text-align:right;}.type{width:15ex;width:auto\\9;}.options select{width:20ex;width:auto\\9;}.active{font-weight:bold;}.sqlarea{width:98%;}#menu{position:absolute;margin:10px 0 0;padding:0 0 30px 0;top:2em;left:0;width:19em;overflow:auto;overflow-y:hidden;white-space:nowrap;}#menu p{padding:.8em 1em;margin:0;border-bottom:1px solid #ccc;}#content{margin:2em 0 0 21em;padding:10px 20px 20px 0;}#lang{position:absolute;top:0;left:0;line-height:1.8em;padding:.3em 1em;}#breadcrumb{white-space:nowrap;position:absolute;top:0;left:21em;background:#eee;height:2em;line-height:1.8em;padding:0 1em;margin:0 0 0 -18px;}#loader{position:fixed;top:0;left:18em;z-index:1;}#h1{color:#777;text-decoration:none;font-style:italic;}#version{font-size:67%;color:red;}#schema{margin-left:60px;position:relative;}#schema .table{border:1px solid silver;padding:0 2px;cursor:move;position:absolute;}#schema .references{position:absolute;}.rtl h2{margin:0 -18px 20px 0;}.rtl p,.rtl table,.rtl .error,.rtl .message{margin:1em 0 0 20px;}.rtl #content{margin:2em 21em 0 0;padding:10px 0 20px 20px;}.rtl #breadcrumb{left:auto;right:21em;margin:0 -18px 0 0;}.rtl #lang,.rtl #menu{left:auto;right:0;}@media print{#lang,#menu{display:none;}#content{margin-left:1em;}#breadcrumb{left:1em;}.nowrap td,.nowrap th,td.nowrap{white-space:normal;}}';}elseif($_GET["file"]=="functions.js"){header("Content-Type: text/javascript; charset=utf-8");?>
function toggle(id){var el=document.getElementById(id);el.className=(el.className=='hidden'?'':'hidden');return true;}
function cookie(assign,days){var date=new Date();date.setDate(date.getDate()+days);document.cookie=assign+'; expires='+date;}
function verifyVersion(){cookie('adminer_version=0',1);var script=document.createElement('script');script.src=location.protocol+'//www.adminer.org/version.php';document.body.appendChild(script);}
function selectValue(select){var selected=select.options[select.selectedIndex];return((selected.attributes.value||{}).specified?selected.value:selected.text);}
function trCheck(el){var tr=el.parentNode.parentNode;tr.className=tr.className.replace(/(^|\s)checked(\s|$)/,'$2')+(el.checked?' checked':'');}
function formCheck(el,name){var elems=el.form.elements;for(var i=0;i<elems.length;i++){if(name.test(elems[i].name)){elems[i].checked=el.checked;trCheck(elems[i]);}}}
function tableCheck(){var tables=document.getElementsByTagName('table');for(var i=0;i<tables.length;i++){if(/(^|\s)checkable(\s|$)/.test(tables[i].className)){var trs=tables[i].getElementsByTagName('tr');for(var j=0;j<trs.length;j++){trCheck(trs[j].firstChild.firstChild);}}}}
function formUncheck(id){var el=document.getElementById(id);el.checked=false;trCheck(el);}
function formChecked(el,name){var checked=0;var elems=el.form.elements;for(var i=0;i<elems.length;i++){if(name.test(elems[i].name)&&elems[i].checked){checked++;}}
return checked;}
function tableClick(event){var click=true;var el=event.target||event.srcElement;while(!/^tr$/i.test(el.tagName)){if(/^table$/i.test(el.tagName)){return;}
if(/^(a|input|textarea)$/i.test(el.tagName)){click=false;}
el=el.parentNode;}
el=el.firstChild.firstChild;if(click){el.click&&el.click();el.onclick&&el.onclick();}
trCheck(el);}
function setHtml(id,html){var el=document.getElementById(id);if(el){if(html==undefined){el.parentNode.innerHTML='&nbsp;';}else{el.innerHTML=html;}}}
function nodePosition(el){var pos=0;while(el=el.previousSibling){pos++;}
return pos;}
function pageClick(href,page,event){if(!isNaN(page)&&page){href+=(page!=1?'&page='+(page-1):'');if(!ajaxSend(href)){location.href=href;}}}
function selectAddRow(field){field.onchange=function(){};var row=field.parentNode.cloneNode(true);var selects=row.getElementsByTagName('select');for(var i=0;i<selects.length;i++){selects[i].name=selects[i].name.replace(/[a-z]\[\d+/,'$&1');selects[i].selectedIndex=0;}
var inputs=row.getElementsByTagName('input');if(inputs.length){inputs[0].name=inputs[0].name.replace(/[a-z]\[\d+/,'$&1');inputs[0].value='';inputs[0].className='';}
field.parentNode.parentNode.appendChild(row);}
function bodyKeydown(event,button){var target=event.target||event.srcElement;if(event.ctrlKey&&(event.keyCode==13||event.keyCode==10)&&!event.altKey&&!event.metaKey&&/select|textarea|input/i.test(target.tagName)){target.blur();if(!ajaxForm(target.form,(button?button+'=1':''))){if(button){target.form[button].click();}else{target.form.submit();}}
return false;}
return true;}
function editingKeydown(event){if((event.keyCode==40||event.keyCode==38)&&event.ctrlKey&&!event.altKey&&!event.metaKey){var target=event.target||event.srcElement;var sibling=(event.keyCode==40?'nextSibling':'previousSibling');var el=target.parentNode.parentNode[sibling];if(el&&(/^tr$/i.test(el.tagName)||(el=el[sibling]))&&/^tr$/i.test(el.tagName)&&(el=el.childNodes[nodePosition(target.parentNode)])&&(el=el.childNodes[nodePosition(target)])){el.focus();}
return false;}
if(event.shiftKey&&!bodyKeydown(event,'insert')){eventStop(event);return false;}
return true;}
function functionChange(select){var input=select.form[select.name.replace(/^function/,'fields')];if(selectValue(select)){if(input.origMaxLength===undefined){input.origMaxLength=input.maxLength;}
input.removeAttribute('maxlength');}else if(input.origMaxLength>=0){input.maxLength=input.origMaxLength;}}
function ajax(url,callback,data){var xmlhttp=(window.XMLHttpRequest?new XMLHttpRequest():(window.ActiveXObject?new ActiveXObject('Microsoft.XMLHTTP'):false));if(xmlhttp){xmlhttp.open((data?'POST':'GET'),url);if(data){xmlhttp.setRequestHeader('Content-Type','application/x-www-form-urlencoded');}
xmlhttp.setRequestHeader('X-Requested-With','XMLHttpRequest');xmlhttp.onreadystatechange=function(){if(xmlhttp.readyState==4){callback(xmlhttp);}};xmlhttp.send(data);}
return xmlhttp;}
function ajaxSetHtml(url){return ajax(url,function(xmlhttp){if(xmlhttp.status){var data=eval('('+xmlhttp.responseText+')');for(var key in data){setHtml(key,data[key]);}}});}
var originalFavicon;function replaceFavicon(href){var favicon=document.getElementById('favicon');if(favicon){favicon.href=href;favicon.parentNode.appendChild(favicon);}}
var ajaxState=0;function ajaxSend(url,data,popState,noscroll){if(!history.pushState){return false;}
var currentState=++ajaxState;onblur=function(){if(!originalFavicon){originalFavicon=(document.getElementById('favicon')||{}).href;}
replaceFavicon(location.pathname+'?file=loader.gif&amp;version=3.3.3');};setHtml('loader','<img src="'+location.pathname+'?file=loader.gif&amp;version=3.3.3" alt="">');return ajax(url,function(xmlhttp){if(currentState==ajaxState){var title=xmlhttp.getResponseHeader('X-AJAX-Title');if(title){document.title=decodeURIComponent(title);}
var redirect=xmlhttp.getResponseHeader('X-AJAX-Redirect');if(redirect){return ajaxSend(redirect,'',popState);}
onblur=function(){};if(originalFavicon){replaceFavicon(originalFavicon);}
if(!xmlhttp.status){setHtml('loader','');}else{if(!popState){if(data||url!=location.href){history.pushState(data,'',url);}}
if(!noscroll&&!/&order/.test(url)){scrollTo(0,0);}
setHtml('content',xmlhttp.responseText);var content=document.getElementById('content');var scripts=content.getElementsByTagName('script');var length=scripts.length;for(var i=0;i<length;i++){var script=document.createElement('script');script.text=scripts[i].text;content.appendChild(script);}
var as=document.getElementById('menu').getElementsByTagName('a');var href=location.href.replace(/(&(sql=|dump=|(select|table)=[^&]*)).*/,'$1');for(var i=0;i<as.length;i++){as[i].className=(href==as[i].href?'active':'');}
var dump=document.getElementById('dump');if(dump){var match=/&(select|table)=([^&]+)/.exec(href);dump.href=dump.href.replace(/[^=]+$/,'')+(match?match[2]:'');}
if(window.jush){jush.highlight_tag('code',0);}}}},data);}
onpopstate=function(event){if((ajaxState||event.state)&&!/#/.test(location.href)){ajaxSend(location.href,(event.state&&confirm(areYouSure)?event.state:''),1);}else{ajaxState++;}};function ajaxForm(form,data,noscroll){if((/&(database|scheme|create|view|sql|user|dump|call)=/.test(location.href)&&!/\./.test(data))||(form.onsubmit&&form.onsubmit()===false)){return false;}
var params=[];for(var i=0;i<form.elements.length;i++){var el=form.elements[i];if(/file/i.test(el.type)&&el.value){return false;}else if(el.name&&(!/checkbox|radio|submit|file/i.test(el.type)||el.checked)){params.push(encodeURIComponent(el.name)+'='+encodeURIComponent(/select/i.test(el.tagName)?selectValue(el):el.value));}}
if(data){params.push(data);}
if(form.method=='post'){return ajaxSend((/\?/.test(form.action)?form.action:location.href),params.join('&'),false,noscroll);}
return ajaxSend((form.action||location.href).replace(/\?.*/,'')+'?'+params.join('&'),'',false,noscroll);}
function selectDblClick(td,event,text){if(/input|textarea/i.test(td.firstChild.tagName)){return;}
var original=td.innerHTML;var input=document.createElement(text?'textarea':'input');input.onkeydown=function(event){if(!event){event=window.event;}
if(event.keyCode==27&&!(event.ctrlKey||event.shiftKey||event.altKey||event.metaKey)){td.innerHTML=original;}};var pos=event.rangeOffset;var value=td.firstChild.alt||td.textContent||td.innerText;input.style.width=Math.max(td.clientWidth-14,20)+'px';if(text){var rows=1;value.replace(/\n/g,function(){rows++;});input.rows=rows;}
if(value=='\u00A0'||td.getElementsByTagName('i').length){value='';}
if(document.selection){var range=document.selection.createRange();range.moveToPoint(event.clientX,event.clientY);var range2=range.duplicate();range2.moveToElementText(td);range2.setEndPoint('EndToEnd',range);pos=range2.text.length;}
td.innerHTML='';td.appendChild(input);input.focus();if(text==2){return ajax(location.href+'&'+encodeURIComponent(td.id)+'=',function(xmlhttp){if(xmlhttp.status){input.value=xmlhttp.responseText;input.name=td.id;}});}
input.value=value;input.name=td.id;input.selectionStart=pos;input.selectionEnd=pos;if(document.selection){var range=document.selection.createRange();range.moveEnd('character',-input.value.length+pos);range.select();}}
function bodyClick(event,db,ns){if(event.button||event.ctrlKey||event.shiftKey||event.altKey||event.metaKey){return;}
if(event.getPreventDefault?event.getPreventDefault():event.returnValue===false||event.defaultPrevented){return false;}
var el=event.target||event.srcElement;if(/^a$/i.test(el.parentNode.tagName)){el=el.parentNode;}
if(/^a$/i.test(el.tagName)&&!/:|#|&download=/i.test(el.getAttribute('href'))&&/[&?]username=/.test(el.href)){var match=/&db=([^&]*)/.exec(el.href);var match2=/&ns=([^&]*)/.exec(el.href);return!(db==(match?match[1]:'')&&ns==(match2?match2[1]:'')&&ajaxSend(el.href));}
if(/^input$/i.test(el.tagName)&&/image|submit/.test(el.type)){return!ajaxForm(el.form,(el.name?encodeURIComponent(el.name)+(el.type=='image'?'.x':'')+'=1':''),el.type=='image');}
return true;}
function eventStop(event){if(event.stopPropagation){event.stopPropagation();}else{event.cancelBubble=true;}}
function bodyLoad(version){if(history.state!==undefined){onpopstate(history);}}
function whisperClick(event,field){var el=event.target||event.srcElement;if(/^a$/i.test(el.tagName)&&!(event.button||event.ctrlKey||event.shiftKey||event.altKey||event.metaKey)){field.value=el.firstChild.data;field.previousSibling.value=decodeURIComponent(el.href.replace(/.*=/,''));field.nextSibling.style.display='none';eventStop(event);return false;}}
function whisper(url,field){if(field.orig!=field.value){field.orig=field.value;field.previousSibling.value=field.value;return ajax(url+encodeURIComponent(field.value),function(xmlhttp){if(xmlhttp.status&&field.orig==field.value){field.nextSibling.innerHTML=xmlhttp.responseText;field.nextSibling.style.display='';var a=field.nextSibling.firstChild;if(a&&a.firstChild.data==field.value){field.previousSibling.value=decodeURIComponent(a.href.replace(/.*=/,''));a.className='active';}}});}}<?php
}else{header("Content-Type: image/gif");switch($_GET["file"]){case"plus.gif":echo
base64_decode("R0lGODdhEgASAKEAAO7u7gAAAJmZmQAAACwAAAAAEgASAAACIYSPqcvtD00I8cwqKb5v+q8pIAhxlRmhZYi17iPE8kzLBQA7");break;case"cross.gif":echo
base64_decode("R0lGODdhEgASAKEAAO7u7gAAAJmZmQAAACwAAAAAEgASAAACI4SPqcvtDyMKYdZGb355wy6BX3dhlOEx57FK7gtHwkzXNl0AADs=");break;case"up.gif":echo
base64_decode("R0lGODdhEgASAKEAAO7u7gAAAJmZmQAAACwAAAAAEgASAAACIISPqcvtD00IUU4K730T9J5hFTiKEXmaYcW2rgDH8hwXADs=");break;case"down.gif":echo
base64_decode("R0lGODdhEgASAKEAAO7u7gAAAJmZmQAAACwAAAAAEgASAAACIISPqcvtD00I8cwqKb5bV/5cosdMJtmcHca2lQDH8hwXADs=");break;case"arrow.gif":echo
base64_decode("R0lGODlhCAAKAIAAAICAgP///yH5BAEAAAEALAAAAAAIAAoAAAIPBIJplrGLnpQRqtOy3rsAADs=");break;case"loader.gif":echo
base64_decode("R0lGODlhEAAQAPIAAP///wAAAMLCwkJCQgAAAGJiYoKCgpKSkiH/C05FVFNDQVBFMi4wAwEAAAAh/hpDcmVhdGVkIHdpdGggYWpheGxvYWQuaW5mbwAh+QQJCgAAACwAAAAAEAAQAAADMwi63P4wyklrE2MIOggZnAdOmGYJRbExwroUmcG2LmDEwnHQLVsYOd2mBzkYDAdKa+dIAAAh+QQJCgAAACwAAAAAEAAQAAADNAi63P5OjCEgG4QMu7DmikRxQlFUYDEZIGBMRVsaqHwctXXf7WEYB4Ag1xjihkMZsiUkKhIAIfkECQoAAAAsAAAAABAAEAAAAzYIujIjK8pByJDMlFYvBoVjHA70GU7xSUJhmKtwHPAKzLO9HMaoKwJZ7Rf8AYPDDzKpZBqfvwQAIfkECQoAAAAsAAAAABAAEAAAAzMIumIlK8oyhpHsnFZfhYumCYUhDAQxRIdhHBGqRoKw0R8DYlJd8z0fMDgsGo/IpHI5TAAAIfkECQoAAAAsAAAAABAAEAAAAzIIunInK0rnZBTwGPNMgQwmdsNgXGJUlIWEuR5oWUIpz8pAEAMe6TwfwyYsGo/IpFKSAAAh+QQJCgAAACwAAAAAEAAQAAADMwi6IMKQORfjdOe82p4wGccc4CEuQradylesojEMBgsUc2G7sDX3lQGBMLAJibufbSlKAAAh+QQJCgAAACwAAAAAEAAQAAADMgi63P7wCRHZnFVdmgHu2nFwlWCI3WGc3TSWhUFGxTAUkGCbtgENBMJAEJsxgMLWzpEAACH5BAkKAAAALAAAAAAQABAAAAMyCLrc/jDKSatlQtScKdceCAjDII7HcQ4EMTCpyrCuUBjCYRgHVtqlAiB1YhiCnlsRkAAAOwAAAAAAAAAAAA==");break;}}exit;}function
connection(){global$f;return$f;}function
adminer(){global$b;return$b;}function
idf_unescape($Ob){$ac=substr($Ob,-1);return
str_replace($ac.$ac,$ac,substr($Ob,1,-1));}function
escape_string($V){return
substr(q($V),1,-1);}function
remove_slashes($Kc,$ub=false){if(get_magic_quotes_gpc()){while(list($s,$V)=each($Kc)){foreach($V
as$r=>$U){unset($Kc[$s][$r]);if(is_array($U)){$Kc[$s][stripslashes($r)]=$U;$Kc[]=&$Kc[$s][stripslashes($r)];}else{$Kc[$s][stripslashes($r)]=($ub?$U:stripslashes($U));}}}}}function
bracket_escape($Ob,$qa=false){static$zd=array(':'=>':1',']'=>':2','['=>':3');return
strtr($Ob,($qa?array_flip($zd):$zd));}function
h($O){return
htmlspecialchars(str_replace("\0","",$O),ENT_QUOTES);}function
nbsp($O){return(trim($O)!=""?h($O):"&nbsp;");}function
nl_br($O){return
str_replace("\n","<br>",$O);}function
checkbox($_,$W,$za,$Yb="",$vc="",$Vb=false){static$o=0;$o++;$I="<input type='checkbox' name='$_' value='".h($W)."'".($za?" checked":"").($vc?' onclick="'.h($vc).'"':'').($Vb?" class='jsonly'":"")." id='checkbox-$o'>";return($Yb!=""?"<label for='checkbox-$o'>$I".h($Yb)."</label>":$I);}function
optionlist($A,$Yc=null,$Nd=false){$I="";foreach($A
as$r=>$U){$zc=array($r=>$U);if(is_array($U)){$I.='<optgroup label="'.h($r).'">';$zc=$U;}foreach($zc
as$s=>$V){$I.='<option'.($Nd||is_string($s)?' value="'.h($s).'"':'').(($Nd||is_string($s)?(string)$s:$V)===$Yc?' selected':'').'>'.h($V);}if(is_array($U)){$I.='</optgroup>';}}return$I;}function
html_select($_,$A,$W="",$uc=true){if($uc){return"<select name='".h($_)."'".(is_string($uc)?' onchange="'.h($uc).'"':"").">".optionlist($A,$W)."</select>";}$I="";foreach($A
as$s=>$V){$I.="<label><input type='radio' name='".h($_)."' value='".h($s)."'".($s==$W?" checked":"").">".h($V)."</label>";}return$I;}function
confirm($Ia="",$hd=false){return" onclick=\"".($hd?"eventStop(event); ":"")."return confirm('".'Opravdu?'.($Ia?" (' + $Ia + ')":"")."');\"";}function
print_fieldset($o,$cc,$Qd=false,$vc=""){echo"<fieldset><legend><a href='#fieldset-$o' onclick=\"".h($vc)."return !toggle('fieldset-$o');\">$cc</a></legend><div id='fieldset-$o'".($Qd?"":" class='hidden'").">\n";}function
bold($va){return($va?" class='active'":"");}function
odd($I=' class="odd"'){static$n=0;if(!$I){$n=-1;}return($n++%
2?$I:'');}function
js_escape($O){return
addcslashes($O,"\r\n'\\/");}function
json_row($s,$V=null){static$vb=true;if($vb){echo"{";}if($s!=""){echo($vb?"":",")."\n\t\"".addcslashes($s,"\r\n\"\\").'": '.(isset($V)?'"'.addcslashes($V,"\r\n\"\\").'"':'undefined');$vb=false;}else{echo"\n}\n";$vb=true;}}function
ini_bool($Sb){$V=ini_get($Sb);return(eregi('^(on|true|yes)$',$V)||(int)$V);}function
sid(){static$I;if(!isset($I)){$I=(SID&&!($_COOKIE&&ini_bool("session.use_cookies")));}return$I;}function
q($O){global$f;return$f->quote($O);}function
get_vals($G,$d=0){global$f;$I=array();$H=$f->query($G);if(is_object($H)){while($J=$H->fetch_row()){$I[]=$J[$d];}}return$I;}function
get_key_vals($G,$Ha=null){global$f;if(!is_object($Ha)){$Ha=$f;}$I=array();$H=$Ha->query($G);if(is_object($H)){while($J=$H->fetch_row()){$I[$J[0]]=$J[1];}}return$I;}function
get_rows($G,$Ha=null,$h="<p class='error'>"){global$f;if(!is_object($Ha)){$Ha=$f;}$I=array();$H=$Ha->query($G);if(is_object($H)){while($J=$H->fetch_assoc()){$I[]=$J;}}elseif(!$H&&$f->error&&$h&&defined("PAGE_HEADER")){echo$h.error()."\n";}return$I;}function
unique_array($J,$q){foreach($q
as$p){if(ereg("PRIMARY|UNIQUE",$p["type"])){$I=array();foreach($p["columns"]as$s){if(!isset($J[$s])){continue
2;}$I[$s]=$J[$s];}return$I;}}$I=array();foreach($J
as$s=>$V){if(!preg_match('~^(COUNT\\((\\*|(DISTINCT )?`(?:[^`]|``)+`)\\)|(AVG|GROUP_CONCAT|MAX|MIN|SUM)\\(`(?:[^`]|``)+`\\))$~',$s)){$I[$s]=$V;}}return$I;}function
where($X){global$Wb;$I=array();foreach((array)$X["where"]as$s=>$V){$I[]=idf_escape(bracket_escape($s,1)).(ereg('\\.',$V)||$Wb=="mssql"?" LIKE ".exact_value(addcslashes($V,"%_\\")):" = ".exact_value($V));}foreach((array)$X["null"]as$s){$I[]=idf_escape($s)." IS NULL";}return
implode(" AND ",$I);}function
where_check($V){parse_str($V,$ya);remove_slashes(array(&$ya));return
where($ya);}function
where_link($n,$d,$W,$xc="="){return"&where%5B$n%5D%5Bcol%5D=".urlencode($d)."&where%5B$n%5D%5Bop%5D=".urlencode((isset($W)?$xc:"IS NULL"))."&where%5B$n%5D%5Bval%5D=".urlencode($W);}function
cookie($_,$W){global$aa;$Cc=array($_,(ereg("\n",$W)?"":$W),time()+2592000,preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$aa);if(version_compare(PHP_VERSION,'5.2.0')>=0){$Cc[]=true;}return
call_user_func_array('setcookie',$Cc);}function
restart_session(){if(!ini_bool("session.use_cookies")){session_start();}}function&get_session($s){return$_SESSION[$s][DRIVER][SERVER][$_GET["username"]];}function
set_session($s,$V){$_SESSION[$s][DRIVER][SERVER][$_GET["username"]]=$V;}function
auth_url($Wa,$M,$T){global$Xa;preg_match('~([^?]*)\\??(.*)~',remove_from_uri(implode("|",array_keys($Xa))."|username|".session_name()),$w);return"$w[1]?".(sid()?SID."&":"").($Wa!="server"||$M!=""?urlencode($Wa)."=".urlencode($M)."&":"")."username=".urlencode($T).($w[2]?"&$w[2]":"");}function
is_ajax(){return($_SERVER["HTTP_X_REQUESTED_WITH"]=="XMLHttpRequest");}function
redirect($v,$y=null){if(isset($y)){restart_session();$_SESSION["messages"][preg_replace('~^[^?]*~','',(isset($v)?$v:$_SERVER["REQUEST_URI"]))][]=$y;}if(isset($v)){if($v==""){$v=".";}header((is_ajax()?"X-AJAX-Redirect":"Location").": $v");exit;}}function
query_redirect($G,$v,$y,$Pc=true,$nb=true,$qb=false){global$f,$h,$b;if($nb){$qb=!$f->query($G);}$ed="";if($G){$ed=$b->messageQuery("$G;");}if($qb){$h=error().$ed;return
false;}if($Pc){redirect($v,$y.$ed);}return
true;}function
queries($G=null){global$f;static$Nc=array();if(!isset($G)){return
implode(";\n",$Nc);}$Nc[]=(ereg(';$',$G)?"DELIMITER ;;\n$G;\nDELIMITER ":$G);return$f->query($G);}function
apply_queries($G,$qd,$jb='table'){foreach($qd
as$Q){if(!queries("$G ".$jb($Q))){return
false;}}return
true;}function
queries_redirect($v,$y,$Pc){return
query_redirect(queries(),$v,$y,$Pc,false,!$Pc);}function
remove_from_uri($Bc=""){return
substr(preg_replace("~(?<=[?&])($Bc".(SID?"":"|".session_name()).")=[^&]*&~",'',"$_SERVER[REQUEST_URI]&"),0,-1);}function
pagination($D,$Ma){return" ".($D==$Ma?$D+1:'<a href="'.h(remove_from_uri("page").($D?"&page=$D":"")).'">'.($D+1)."</a>");}function
get_file($s,$Qa=false){$k=$_FILES[$s];if(!$k||$k["error"]){return$k["error"];}$I=file_get_contents($Qa&&ereg('\\.gz$',$k["name"])?"compress.zlib://$k[tmp_name]":($Qa&&ereg('\\.bz2$',$k["name"])?"compress.bzip2://$k[tmp_name]":$k["tmp_name"]));if($Qa){$fd=substr($I,0,3);if(function_exists("iconv")&&ereg("^\xFE\xFF|^\xFF\xFE",$fd,$Qc)){$I=iconv("utf-16","utf-8",$I);}elseif($fd=="\xEF\xBB\xBF"){$I=substr($I,3);}}return$I;}function
upload_error($h){$jc=($h==UPLOAD_ERR_INI_SIZE?ini_get("upload_max_filesize"):null);return($h?'Nepodařilo se nahrát soubor.'.($jc?" ".sprintf('Maximální povolená velikost souboru je %sB.',$jc):""):'Soubor neexistuje.');}function
repeat_pattern($F,$dc){return
str_repeat("$F{0,65535}",$dc/65535)."$F{0,".($dc
%
65535)."}";}function
is_utf8($V){return(preg_match('~~u',$V)&&!preg_match('~[\\0-\\x8\\xB\\xC\\xE-\\x1F]~',$V));}function
shorten_utf8($O,$dc=80,$md=""){if(!preg_match("(^(".repeat_pattern("[\t\r\n -\x{FFFF}]",$dc).")($)?)u",$O,$w)){preg_match("(^(".repeat_pattern("[\t\r\n -~]",$dc).")($)?)",$O,$w);}return
h($w[1]).$md.(isset($w[2])?"":"<i>...</i>");}function
friendly_url($V){return
preg_replace('~[^a-z0-9_]~i','-',$V);}function
hidden_fields($Kc,$Qb=array()){while(list($s,$V)=each($Kc)){if(is_array($V)){foreach($V
as$r=>$U){$Kc[$s."[$r]"]=$U;}}elseif(!in_array($s,$Qb)){echo'<input type="hidden" name="'.h($s).'" value="'.h($V).'">';}}}function
hidden_fields_get(){echo(sid()?'<input type="hidden" name="'.session_name().'" value="'.h(session_id()).'">':''),(SERVER!==null?'<input type="hidden" name="'.DRIVER.'" value="'.h(SERVER).'">':""),'<input type="hidden" name="username" value="'.h($_GET["username"]).'">';}function
column_foreign_keys($Q){global$b;$I=array();foreach($b->foreignKeys($Q)as$_b){foreach($_b["source"]as$V){$I[$V][]=$_b;}}return$I;}function
enum_input($Bd,$c,$i,$W,$fb=null){global$b;preg_match_all("~'((?:[^']|'')*)'~",$i["length"],$x);$I=(isset($fb)?"<label><input type='$Bd'$c value='$fb'".((is_array($W)?in_array($fb,$W):$W===0)?" checked":"")."><i>".'prázdné'."</i></label>":"");foreach($x[1]as$n=>$V){$V=stripcslashes(str_replace("''","'",$V));$za=(is_int($W)?$W==$n+1:(is_array($W)?in_array($n+1,$W):$W===$V));$I.=" <label><input type='$Bd'$c value='".($n+1)."'".($za?' checked':'').'>'.h($b->editVal($V,$i)).'</label>';}return$I;}function
input($i,$W,$l){global$Dd,$b,$Wb;$_=h(bracket_escape($i["field"]));echo"<td class='function'>";$Tc=($Wb=="mssql"&&$i["auto_increment"]);if($Tc&&!$_POST["save"]){$l=null;}$Fb=(isset($_GET["select"])||$Tc?array("orig"=>'původní'):array())+$b->editFunctions($i);$c=" name='fields[$_]'";if($i["type"]=="enum"){echo
nbsp($Fb[""])."<td>".$b->editInput($_GET["edit"],$i,$c,$W);}else{$vb=0;foreach($Fb
as$s=>$V){if($s===""||!$V){break;}$vb++;}$uc=($vb?" onchange=\"var f = this.form['function[".h(js_escape(bracket_escape($i["field"])))."]']; if ($vb > f.selectedIndex) f.selectedIndex = $vb;\"":"");$c.=$uc;echo(count($Fb)>1?html_select("function[$_]",$Fb,!isset($l)||in_array($l,$Fb)||isset($Fb[$l])?$l:"","functionChange(this);"):nbsp(reset($Fb))).'<td>';$Ub=$b->editInput($_GET["edit"],$i,$c,$W);if($Ub!=""){echo$Ub;}elseif($i["type"]=="set"){preg_match_all("~'((?:[^']|'')*)'~",$i["length"],$x);foreach($x[1]as$n=>$V){$V=stripcslashes(str_replace("''","'",$V));$za=(is_int($W)?($W>>$n)&1:in_array($V,explode(",",$W),true));echo" <label><input type='checkbox' name='fields[$_][$n]' value='".(1<<$n)."'".($za?' checked':'')."$uc>".h($b->editVal($V,$i)).'</label>';}}elseif(ereg('blob|bytea|raw|file',$i["type"])&&ini_bool("file_uploads")){echo"<input type='file' name='fields-$_'$uc>";}elseif(ereg('text|lob',$i["type"])){echo"<textarea ".($Wb!="sqlite"||ereg("\n",$W)?"cols='50' rows='12'":"cols='30' rows='1' style='height: 1.2em;'")."$c>".h($W).'</textarea>';}else{$kc=(!ereg('int',$i["type"])&&preg_match('~^(\\d+)(,(\\d+))?$~',$i["length"],$w)?((ereg("binary",$i["type"])?2:1)*$w[1]+($w[3]?1:0)+($w[2]&&!$i["unsigned"]?1:0)):($Dd[$i["type"]]?$Dd[$i["type"]]+($i["unsigned"]?0:1):0));echo"<input value='".h($W)."'".($kc?" maxlength='$kc'":"").(ereg('char|binary',$i["type"])&&$kc>20?" size='40'":"")."$c>";}}}function
process_input($i){global$b;$Ob=bracket_escape($i["field"]);$l=$_POST["function"][$Ob];$W=$_POST["fields"][$Ob];if($i["type"]=="enum"){if($W==-1){return
false;}if($W==""){return"NULL";}return+$W;}if($i["auto_increment"]&&$W==""){return
null;}if($l=="orig"){return($i["on_update"]=="CURRENT_TIMESTAMP"?idf_escape($i["field"]):false);}if($l=="NULL"){return"NULL";}if($i["type"]=="set"){return
array_sum((array)$W);}if(ereg('blob|bytea|raw|file',$i["type"])&&ini_bool("file_uploads")){$k=get_file("fields-$Ob");if(!is_string($k)){return
false;}return
q($k);}return$b->processInput($i,$W,$l);}function
search_tables(){global$b,$f;$_GET["where"][0]["op"]="LIKE %%";$_GET["where"][0]["val"]=$_POST["query"];$Bb=false;foreach(table_status()as$Q=>$R){$_=$b->tableName($R);if(isset($R["Engine"])&&$_!=""&&(!$_POST["tables"]||in_array($Q,$_POST["tables"]))){$H=$f->query("SELECT".limit("1 FROM ".table($Q)," WHERE ".implode(" AND ",$b->selectSearchProcess(fields($Q),array())),1));if($H->fetch_row()){if(!$Bb){echo"<ul>\n";$Bb=true;}echo"<li><a href='".h(ME."select=".urlencode($Q)."&where[0][op]=".urlencode($_GET["where"][0]["op"])."&where[0][val]=".urlencode($_GET["where"][0]["val"]))."'>$_</a>\n";}}}echo($Bb?"</ul>":"<p class='message'>".'Žádné tabulky.')."\n";}function
dump_headers($Nb,$nc=false){global$b;$I=$b->dumpHeaders($Nb,$nc);$Ac=$_POST["output"];if($Ac!="text"){header("Content-Disposition: attachment; filename=".friendly_url($Nb!=""?$Nb:(SERVER!=""?SERVER:"localhost")).".$I".($Ac!="file"&&!ereg('[^0-9a-z]',$Ac)?".$Ac":""));}session_write_close();return$I;}function
dump_csv($J){foreach($J
as$s=>$V){if(preg_match("~[\"\n,;\t]~",$V)||$V===""){$J[$s]='"'.str_replace('"','""',$V).'"';}}echo
implode(($_POST["format"]=="csv"?",":($_POST["format"]=="tsv"?"\t":";")),$J)."\r\n";}function
apply_sql_function($l,$d){return($l?($l=="unixepoch"?"DATETIME($d, '$l')":($l=="count distinct"?"COUNT(DISTINCT ":strtoupper("$l("))."$d)"):$d);}function
password_file(){$Ua=ini_get("upload_tmp_dir");if(!$Ua){if(function_exists('sys_get_temp_dir')){$Ua=sys_get_temp_dir();}else{$sb=@tempnam("","");if(!$sb){return
false;}$Ua=dirname($sb);unlink($sb);}}$sb="$Ua/adminer.key";$I=@file_get_contents($sb);if($I){return$I;}$Db=@fopen($sb,"w");if($Db){$I=md5(uniqid(mt_rand(),true));fwrite($Db,$I);fclose($Db);}return$I;}function
is_mail($cb){$ma='[-a-z0-9!#$%&\'*+/=?^_`{|}~]';$Va='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';$F="$ma+(\\.$ma+)*@($Va?\\.)+$Va";return
preg_match("(^$F(,\\s*$F)*\$)i",$cb);}function
is_url($O){$Va='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';return(preg_match("~^(https?)://($Va?\\.)+$Va(:\\d+)?(/.*)?(\\?.*)?(#.*)?\$~i",$O,$w)?strtolower($w[1]):"");}global$b,$f,$Xa,$ab,$hb,$h,$Fb,$Hb,$aa,$Tb,$Wb,$ba,$Zb,$tc,$jd,$yd,$Ad,$Dd,$Kd,$ca;if(!isset($_SERVER["REQUEST_URI"])){$_SERVER["REQUEST_URI"]=$_SERVER["ORIG_PATH_INFO"].($_SERVER["QUERY_STRING"]!=""?"?$_SERVER[QUERY_STRING]":"");}$aa=$_SERVER["HTTPS"]&&strcasecmp($_SERVER["HTTPS"],"off");@ini_set("session.use_trans_sid",false);if(!defined("SID")){session_name("adminer_sid");$Cc=array(0,preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$aa);if(version_compare(PHP_VERSION,'5.2.0')>=0){$Cc[]=true;}call_user_func_array('session_set_cookie_params',$Cc);session_start();}remove_slashes(array(&$_GET,&$_POST,&$_COOKIE),$ub);if(function_exists("set_magic_quotes_runtime")){set_magic_quotes_runtime(false);}@set_time_limit(0);@ini_set("zend.ze1_compatibility_mode",false);@ini_set("precision",20);function
get_lang(){return'cs';}function
lang($_d,$rc){$Gc=($rc==1?0:($rc&&$rc<5?1:2));return
sprintf($_d[$Gc],$rc);}if(extension_loaded('pdo')){class
Min_PDO
extends
PDO{var$_result,$server_info,$affected_rows,$error;function
__construct(){}function
dsn($Ya,$T,$E,$mb='auth_error'){set_exception_handler($mb);parent::__construct($Ya,$T,$E);restore_exception_handler();$this->setAttribute(13,array('Min_PDOStatement'));$this->server_info=$this->getAttribute(4);}function
query($G,$Ed=false){$H=parent::query($G);if(!$H){$ib=$this->errorInfo();$this->error=$ib[2];return
false;}$this->store_result($H);return$H;}function
multi_query($G){return$this->_result=$this->query($G);}function
store_result($H=null){if(!$H){$H=$this->_result;}if($H->columnCount()){$H->num_rows=$H->rowCount();return$H;}$this->affected_rows=$H->rowCount();return
true;}function
next_result(){return$this->_result->nextRowset();}function
result($G,$i=0){$H=$this->query($G);if(!$H){return
false;}$J=$H->fetch();return$J[$i];}}class
Min_PDOStatement
extends
PDOStatement{var$_offset=0,$num_rows;function
fetch_assoc(){return$this->fetch(2);}function
fetch_row(){return$this->fetch(3);}function
fetch_field(){$J=(object)$this->getColumnMeta($this->_offset++);$J->orgtable=$J->table;$J->orgname=$J->name;$J->charsetnr=(in_array("blob",$J->flags)?63:0);return$J;}}}$Xa=array();$Xa=array("server"=>"MySQL")+$Xa;if(!defined("DRIVER")){$Hc=array("MySQLi","MySQL","PDO_MySQL");define("DRIVER","server");if(extension_loaded("mysqli")){class
Min_DB
extends
MySQLi{var$extension="MySQLi";function
Min_DB(){parent::init();}function
connect($M,$T,$E){mysqli_report(MYSQLI_REPORT_OFF);list($Mb,$Fc)=explode(":",$M,2);$I=@$this->real_connect(($M!=""?$Mb:ini_get("mysqli.default_host")),($M.$T!=""?$T:ini_get("mysqli.default_user")),($M.$T.$E!=""?$E:ini_get("mysqli.default_pw")),null,(is_numeric($Fc)?$Fc:ini_get("mysqli.default_port")),(!is_numeric($Fc)?$Fc:null));if($I){if(method_exists($this,'set_charset')){$this->set_charset("utf8");}else{$this->query("SET NAMES utf8");}}return$I;}function
result($G,$i=0){$H=$this->query($G);if(!$H){return
false;}$J=$H->fetch_array();return$J[$i];}function
quote($O){return"'".$this->escape_string($O)."'";}}}elseif(extension_loaded("mysql")){class
Min_DB{var$extension="MySQL",$server_info,$affected_rows,$error,$_link,$_result;function
connect($M,$T,$E){$this->_link=@mysql_connect(($M!=""?$M:ini_get("mysql.default_host")),("$M$T"!=""?$T:ini_get("mysql.default_user")),("$M$T$E"!=""?$E:ini_get("mysql.default_password")),true,131072);if($this->_link){$this->server_info=mysql_get_server_info($this->_link);if(function_exists('mysql_set_charset')){mysql_set_charset("utf8",$this->_link);}else{$this->query("SET NAMES utf8");}}else{$this->error=mysql_error();}return(bool)$this->_link;}function
quote($O){return"'".mysql_real_escape_string($O,$this->_link)."'";}function
select_db($Na){return
mysql_select_db($Na,$this->_link);}function
query($G,$Ed=false){$H=@($Ed?mysql_unbuffered_query($G,$this->_link):mysql_query($G,$this->_link));if(!$H){$this->error=mysql_error($this->_link);return
false;}if($H===true){$this->affected_rows=mysql_affected_rows($this->_link);$this->info=mysql_info($this->_link);return
true;}return
new
Min_Result($H);}function
multi_query($G){return$this->_result=$this->query($G);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($G,$i=0){$H=$this->query($G);if(!$H||!$H->num_rows){return
false;}return
mysql_result($H->_result,0,$i);}}class
Min_Result{var$num_rows,$_result,$_offset=0;function
Min_Result($H){$this->_result=$H;$this->num_rows=mysql_num_rows($H);}function
fetch_assoc(){return
mysql_fetch_assoc($this->_result);}function
fetch_row(){return
mysql_fetch_row($this->_result);}function
fetch_field(){$I=mysql_fetch_field($this->_result,$this->_offset++);$I->orgtable=$I->table;$I->orgname=$I->name;$I->charsetnr=($I->blob?63:0);return$I;}function
__destruct(){mysql_free_result($this->_result);}}}elseif(extension_loaded("pdo_mysql")){class
Min_DB
extends
Min_PDO{var$extension="PDO_MySQL";function
connect($M,$T,$E){$this->dsn("mysql:host=".str_replace(":",";unix_socket=",preg_replace('~:(\\d)~',';port=\\1',$M)),$T,$E);$this->query("SET NAMES utf8");return
true;}function
select_db($Na){return$this->query("USE ".idf_escape($Na));}function
query($G,$Ed=false){$this->setAttribute(1000,!$Ed);return
parent::query($G,$Ed);}}}function
idf_escape($Ob){return"`".str_replace("`","``",$Ob)."`";}function
table($Ob){return
idf_escape($Ob);}function
connect(){global$b;$f=new
Min_DB;$La=$b->credentials();if($f->connect($La[0],$La[1],$La[2])){$f->query("SET sql_quote_show_create = 1");return$f;}$I=$f->error;if(function_exists('iconv')&&!is_utf8($I)&&strlen($Vc=iconv("windows-1250","utf-8",$I))>strlen($I)){$I=$Vc;}return$I;}function
get_databases($wb=true){global$f;$I=&get_session("dbs");if(!isset($I)){if($wb){restart_session();ob_flush();flush();}$I=get_vals($f->server_info>=5?"SELECT SCHEMA_NAME FROM information_schema.SCHEMATA":"SHOW DATABASES");}return$I;}function
limit($G,$X,$t,$sc=0,$ad=" "){return" $G$X".(isset($t)?$ad."LIMIT $t".($sc?" OFFSET $sc":""):"");}function
limit1($G,$X){return
limit($G,$X,1);}function
db_collation($Pa,$Ca){global$f;$I=null;$Ja=$f->result("SHOW CREATE DATABASE ".idf_escape($Pa),1);if(preg_match('~ COLLATE ([^ ]+)~',$Ja,$w)){$I=$w[1];}elseif(preg_match('~ CHARACTER SET ([^ ]+)~',$Ja,$w)){$I=$Ca[$w[1]][-1];}return$I;}function
engines(){$I=array();foreach(get_rows("SHOW ENGINES")as$J){if(ereg("YES|DEFAULT",$J["Support"])){$I[]=$J["Engine"];}}return$I;}function
logged_user(){global$f;return$f->result("SELECT USER()");}function
tables_list(){global$f;return
get_key_vals("SHOW".($f->server_info>=5?" FULL":"")." TABLES");}function
count_tables($Oa){$I=array();foreach($Oa
as$Pa){$I[$Pa]=count(get_vals("SHOW TABLES IN ".idf_escape($Pa)));}return$I;}function
table_status($_=""){$I=array();foreach(get_rows("SHOW TABLE STATUS".($_!=""?" LIKE ".q(addcslashes($_,"%_")):""))as$J){if($J["Engine"]=="InnoDB"){$J["Comment"]=preg_replace('~(?:(.+); )?InnoDB free: .*~','\\1',$J["Comment"]);}if(!isset($J["Rows"])){$J["Comment"]="";}if($_!=""){return$J;}$I[$J["Name"]]=$J;}return$I;}function
is_view($R){return!isset($R["Rows"]);}function
fk_support($R){return
eregi("InnoDB|IBMDB2I",$R["Engine"]);}function
fields($Q){$I=array();foreach(get_rows("SHOW FULL COLUMNS FROM ".table($Q))as$J){preg_match('~^([^( ]+)(?:\\((.+)\\))?( unsigned)?( zerofill)?$~',$J["Type"],$w);$I[$J["Field"]]=array("field"=>$J["Field"],"full_type"=>$J["Type"],"type"=>$w[1],"length"=>$w[2],"unsigned"=>ltrim($w[3].$w[4]),"default"=>($J["Default"]!=""||ereg("char",$w[1])?$J["Default"]:null),"null"=>($J["Null"]=="YES"),"auto_increment"=>($J["Extra"]=="auto_increment"),"on_update"=>(eregi('^on update (.+)',$J["Extra"],$w)?$w[1]:""),"collation"=>$J["Collation"],"privileges"=>array_flip(explode(",",$J["Privileges"])),"comment"=>$J["Comment"],"primary"=>($J["Key"]=="PRI"),);}return$I;}function
indexes($Q,$Ha=null){$I=array();foreach(get_rows("SHOW INDEX FROM ".table($Q),$Ha)as$J){$I[$J["Key_name"]]["type"]=($J["Key_name"]=="PRIMARY"?"PRIMARY":($J["Index_type"]=="FULLTEXT"?"FULLTEXT":($J["Non_unique"]?"INDEX":"UNIQUE")));$I[$J["Key_name"]]["columns"][]=$J["Column_name"];$I[$J["Key_name"]]["lengths"][]=$J["Sub_part"];}return$I;}function
foreign_keys($Q){global$f,$tc;static$F='`(?:[^`]|``)+`';$I=array();$Ka=$f->result("SHOW CREATE TABLE ".table($Q),1);if($Ka){preg_match_all("~CONSTRAINT ($F) FOREIGN KEY \\(((?:$F,? ?)+)\\) REFERENCES ($F)(?:\\.($F))? \\(((?:$F,? ?)+)\\)(?: ON DELETE ($tc))?(?: ON UPDATE ($tc))?~",$Ka,$x,PREG_SET_ORDER);foreach($x
as$w){preg_match_all("~$F~",$w[2],$dd);preg_match_all("~$F~",$w[5],$S);$I[idf_unescape($w[1])]=array("db"=>idf_unescape($w[4]!=""?$w[3]:$w[4]),"table"=>idf_unescape($w[4]!=""?$w[4]:$w[3]),"source"=>array_map('idf_unescape',$dd[0]),"target"=>array_map('idf_unescape',$S[0]),"on_delete"=>$w[6],"on_update"=>$w[7],);}}return$I;}function
view($_){global$f;return
array("select"=>preg_replace('~^(?:[^`]|`[^`]*`)*\\s+AS\\s+~isU','',$f->result("SHOW CREATE VIEW ".table($_),1)));}function
collations(){$I=array();foreach(get_rows("SHOW COLLATION")as$J){if($J["Default"]){$I[$J["Charset"]][-1]=$J["Collation"];}else{$I[$J["Charset"]][]=$J["Collation"];}}ksort($I);foreach($I
as$s=>$V){asort($I[$s]);}return$I;}function
information_schema($Pa){global$f;return($f->server_info>=5&&$Pa=="information_schema");}function
error(){global$f;return
h(preg_replace('~^You have an error.*syntax to use~U',"Syntax error",$f->error));}function
exact_value($V){return
q($V)." COLLATE utf8_bin";}function
create_database($Pa,$Ba){set_session("dbs",null);return
queries("CREATE DATABASE ".idf_escape($Pa).($Ba?" COLLATE ".q($Ba):""));}function
drop_databases($Oa){set_session("dbs",null);return
apply_queries("DROP DATABASE",$Oa,'idf_escape');}function
rename_database($_,$Ba){if(create_database($_,$Ba)){$Rc=array();foreach(tables_list()as$Q=>$Bd){$Rc[]=table($Q)." TO ".idf_escape($_).".".table($Q);}if(!$Rc||queries("RENAME TABLE ".implode(", ",$Rc))){queries("DROP DATABASE ".idf_escape(DB));return
true;}}return
false;}function
auto_increment(){$pa=" PRIMARY KEY";if($_GET["create"]!=""&&$_POST["auto_increment_col"]){foreach(indexes($_GET["create"])as$p){if(in_array($_POST["fields"][$_POST["auto_increment_col"]]["orig"],$p["columns"],true)){$pa="";break;}if($p["type"]=="PRIMARY"){$pa=" UNIQUE";}}}return" AUTO_INCREMENT$pa";}function
alter_table($Q,$_,$j,$xb,$Fa,$gb,$Ba,$oa,$Dc){$la=array();foreach($j
as$i){$la[]=($i[1]?($Q!=""?($i[0]!=""?"CHANGE ".idf_escape($i[0]):"ADD"):" ")." ".implode($i[1]).($Q!=""?" $i[2]":""):"DROP ".idf_escape($i[0]));}$la=array_merge($la,$xb);$gd="COMMENT=".q($Fa).($gb?" ENGINE=".q($gb):"").($Ba?" COLLATE ".q($Ba):"").($oa!=""?" AUTO_INCREMENT=$oa":"").$Dc;if($Q==""){return
queries("CREATE TABLE ".table($_)." (\n".implode(",\n",$la)."\n) $gd");}if($Q!=$_){$la[]="RENAME TO ".table($_);}$la[]=$gd;return
queries("ALTER TABLE ".table($Q)."\n".implode(",\n",$la));}function
alter_indexes($Q,$la){foreach($la
as$s=>$V){$la[$s]=($V[2]=="DROP"?"\nDROP INDEX ".idf_escape($V[1]):"\nADD $V[0] ".($V[0]=="PRIMARY"?"KEY ":"").($V[1]!=""?idf_escape($V[1])." ":"").$V[2]);}return
queries("ALTER TABLE ".table($Q).implode(",",$la));}function
truncate_tables($qd){return
apply_queries("TRUNCATE TABLE",$qd);}function
drop_views($Pd){return
queries("DROP VIEW ".implode(", ",array_map('table',$Pd)));}function
drop_tables($qd){return
queries("DROP TABLE ".implode(", ",array_map('table',$qd)));}function
move_tables($qd,$Pd,$S){$Rc=array();foreach(array_merge($qd,$Pd)as$Q){$Rc[]=table($Q)." TO ".idf_escape($S).".".table($Q);}return
queries("RENAME TABLE ".implode(", ",$Rc));}function
copy_tables($qd,$Pd,$S){queries("SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO'");foreach($qd
as$Q){$_=($S==DB?table("copy_$Q"):idf_escape($S).".".table($Q));if(!queries("DROP TABLE IF EXISTS $_")||!queries("CREATE TABLE $_ LIKE ".table($Q))||!queries("INSERT INTO $_ SELECT * FROM ".table($Q))){return
false;}}foreach($Pd
as$Q){$_=($S==DB?table("copy_$Q"):idf_escape($S).".".table($Q));$Od=view($Q);if(!queries("DROP VIEW IF EXISTS $_")||!queries("CREATE VIEW $_ AS $Od[select]")){return
false;}}return
true;}function
trigger($_){if($_==""){return
array();}$K=get_rows("SHOW TRIGGERS WHERE `Trigger` = ".q($_));return
reset($K);}function
triggers($Q){$I=array();foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($Q,"%_")))as$J){$I[$J["Trigger"]]=array($J["Timing"],$J["Event"]);}return$I;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER"),"Type"=>array("FOR EACH ROW"),);}function
routine($_,$Bd){global$f,$hb,$Tb,$Dd;$ka=array("bool","boolean","integer","double precision","real","dec","numeric","fixed","national char","national varchar");$Cd="((".implode("|",array_merge(array_keys($Dd),$ka)).")(?:\\s*\\(((?:[^'\")]*|$hb)+)\\))?\\s*(zerofill\\s*)?(unsigned(?:\\s+zerofill)?)?)(?:\\s*(?:CHARSET|CHARACTER\\s+SET)\\s*['\"]?([^'\"\\s]+)['\"]?)?";$F="\\s*(".($Bd=="FUNCTION"?"":$Tb).")?\\s*(?:`((?:[^`]|``)*)`\\s*|\\b(\\S+)\\s+)$Cd";$Ja=$f->result("SHOW CREATE $Bd ".idf_escape($_),2);preg_match("~\\(((?:$F\\s*,?)*)\\)".($Bd=="FUNCTION"?"\\s*RETURNS\\s+$Cd":"")."\\s*(.*)~is",$Ja,$w);$j=array();preg_match_all("~$F\\s*,?~is",$w[1],$x,PREG_SET_ORDER);foreach($x
as$Bc){$_=str_replace("``","`",$Bc[2]).$Bc[3];$j[]=array("field"=>$_,"type"=>strtolower($Bc[5]),"length"=>preg_replace_callback("~$hb~s",'normalize_enum',$Bc[6]),"unsigned"=>strtolower(preg_replace('~\\s+~',' ',trim("$Bc[8] $Bc[7]"))),"full_type"=>$Bc[4],"inout"=>strtoupper($Bc[1]),"collation"=>strtolower($Bc[9]),);}if($Bd!="FUNCTION"){return
array("fields"=>$j,"definition"=>$w[11]);}return
array("fields"=>$j,"returns"=>array("type"=>$w[12],"length"=>$w[13],"unsigned"=>$w[15],"collation"=>$w[16]),"definition"=>$w[17],"language"=>"SQL",);}function
routines(){return
get_rows("SELECT * FROM information_schema.ROUTINES WHERE ROUTINE_SCHEMA = ".q(DB));}function
routine_languages(){return
array();}function
begin(){return
queries("BEGIN");}function
insert_into($Q,$N){return
queries("INSERT INTO ".table($Q)." (".implode(", ",array_keys($N)).")\nVALUES (".implode(", ",$N).")");}function
insert_update($Q,$N,$Ic){foreach($N
as$s=>$V){$N[$s]="$s = $V";}$Ld=implode(", ",$N);return
queries("INSERT INTO ".table($Q)." SET $Ld ON DUPLICATE KEY UPDATE $Ld");}function
last_id(){global$f;return$f->result("SELECT LAST_INSERT_ID()");}function
explain($f,$G){return$f->query("EXPLAIN $G");}function
found_rows($R,$X){return($X||$R["Engine"]!="InnoDB"?null:$R["Rows"]);}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($Wc){return
true;}function
create_sql($Q,$oa){global$f;$I=$f->result("SHOW CREATE TABLE ".table($Q),1);if(!$oa){$I=preg_replace('~ AUTO_INCREMENT=\\d+~','',$I);}return$I;}function
truncate_sql($Q){return"TRUNCATE ".table($Q);}function
use_sql($Na){return"USE ".idf_escape($Na);}function
trigger_sql($Q,$kd){$I="";foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($Q,"%_")),null,"-- ")as$J){$I.="\n".($kd=='CREATE+ALTER'?"DROP TRIGGER IF EXISTS ".idf_escape($J["Trigger"]).";;\n":"")."CREATE TRIGGER ".idf_escape($J["Trigger"])." $J[Timing] $J[Event] ON ".table($J["Table"])." FOR EACH ROW\n$J[Statement];;\n";}return$I;}function
show_variables(){return
get_key_vals("SHOW VARIABLES");}function
process_list(){return
get_rows("SHOW FULL PROCESSLIST");}function
show_status(){return
get_key_vals("SHOW STATUS");}function
support($rb){global$f;return!ereg("scheme|sequence|type".($f->server_info<5.1?"|event|partitioning".($f->server_info<5?"|view|routine|trigger":""):""),$rb);}$Wb="sql";$Dd=array();$jd=array();foreach(array('Čísla'=>array("tinyint"=>3,"smallint"=>5,"mediumint"=>8,"int"=>10,"bigint"=>20,"decimal"=>66,"float"=>12,"double"=>21),'Datum a čas'=>array("date"=>10,"datetime"=>19,"timestamp"=>19,"time"=>10,"year"=>4),'Řetězce'=>array("char"=>255,"varchar"=>65535,"tinytext"=>255,"text"=>65535,"mediumtext"=>16777215,"longtext"=>4294967295),'Binární'=>array("bit"=>20,"binary"=>255,"varbinary"=>65535,"tinyblob"=>255,"blob"=>65535,"mediumblob"=>16777215,"longblob"=>4294967295),'Seznamy'=>array("enum"=>65535,"set"=>64),)as$s=>$V){$Dd+=$V;$jd[$s]=array_keys($V);}$Kd=array("unsigned","zerofill","unsigned zerofill");$yc=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","REGEXP","IN","IS NULL","NOT LIKE","NOT REGEXP","NOT IN","IS NOT NULL","");$Fb=array("char_length","date","from_unixtime","hex","lower","round","sec_to_time","time_to_sec","upper");$Hb=array("avg","count","count distinct","group_concat","max","min","sum");$ab=array(array("char"=>"md5/sha1/password/encrypt/uuid","binary"=>"md5/sha1/hex","date|time"=>"now",),array("int|float|double|decimal"=>"+/-","date"=>"+ interval/- interval","time"=>"addtime/subtime","char|text"=>"concat",));}define("SERVER",$_GET[DRIVER]);define("DB",$_GET["db"]);define("ME",preg_replace('~^[^?]*/([^?]*).*~','\\1',$_SERVER["REQUEST_URI"]).'?'.(sid()?SID.'&':'').(SERVER!==null?DRIVER."=".urlencode(SERVER).'&':'').(isset($_GET["username"])?"username=".urlencode($_GET["username"]).'&':'').(DB!=""?'db='.urlencode(DB).'&'.(isset($_GET["ns"])?"ns=".urlencode($_GET["ns"])."&":""):''));$ca="3.3.3";class
Adminer{var$operators=array("<=",">=");var$_values=array();function
name(){return"<a href='http://www.adminer.org/editor/' id='h1'>".'Editor'."</a>";}function
credentials(){return
array(SERVER,$_GET["username"],get_session("pwds"));}function
permanentLogin(){return
password_file();}function
database(){global$f;$Oa=get_databases(false);return(!$Oa?$f->result("SELECT SUBSTRING_INDEX(CURRENT_USER, '@', 1)"):$Oa[(information_schema($Oa[0])?1:0)]);}function
headers(){return
true;}function
head(){return
true;}function
loginForm(){echo'<table cellspacing="0">
<tr><th>Uživatel<td><input type="hidden" name="driver" value="server"><input type="hidden" name="server" value=""><input id="username" name="username" value="',h($_GET["username"]),'">
<tr><th>Heslo<td><input type="password" name="password">
</table>
<script type="text/javascript">
document.getElementById(\'username\').focus();
</script>
',"<p><input type='submit' value='".'Přihlásit se'."'>\n",checkbox("permanent",1,$_COOKIE["adminer_permanent"],'Trvalé přihlášení')."\n";}function
login($fc,$E){global$f;$f->query("SET time_zone = ".q(substr_replace(@date("O"),":",-2,0)));return
true;}function
tableName($od){return
h($od["Comment"]!=""?$od["Comment"]:$od["Name"]);}function
fieldName($i,$B=0){return
h($i["comment"]!=""?$i["comment"]:$i["field"]);}function
selectLinks($od,$N=""){$a=$od["Name"];if(isset($N)){echo'<p class="tabs"><a href="'.h(ME.'edit='.urlencode($a).$N).'">'.'Nová položka'."</a>\n";}echo"<a href='".h(remove_from_uri("page"))."&amp;page=last' title='".'Poslední stránka'."'>&gt;&gt;</a>\n";}function
foreignKeys($Q){return
foreign_keys($Q);}function
backwardKeys($Q,$nd){$I=array();foreach(get_rows("SELECT TABLE_NAME, CONSTRAINT_NAME, COLUMN_NAME, REFERENCED_COLUMN_NAME
FROM information_schema.KEY_COLUMN_USAGE
WHERE TABLE_SCHEMA = ".q($this->database())."
AND REFERENCED_TABLE_SCHEMA = ".q($this->database())."
AND REFERENCED_TABLE_NAME = ".q($Q)."
ORDER BY ORDINAL_POSITION",null,"")as$J){$I[$J["TABLE_NAME"]]["keys"][$J["CONSTRAINT_NAME"]][$J["COLUMN_NAME"]]=$J["REFERENCED_COLUMN_NAME"];}foreach($I
as$s=>$V){$_=$this->tableName(table_status($s));if($_!=""){$Xc=preg_quote($nd);$ad="(:|\\s*-)?\\s+";$I[$s]["name"]=(preg_match("(^$Xc$ad(.+)|^(.+?)$ad$Xc\$)iu",$_,$w)?$w[2].$w[3]:$_);}else{unset($I[$s]);}}return$I;}function
backwardKeysPrint($sa,$J){foreach($sa
as$Q=>$ra){foreach($ra["keys"]as$Da){$u=ME.'select='.urlencode($Q);$n=0;foreach($Da
as$d=>$V){$u.=where_link($n++,$d,$J[$V]);}echo"<a href='".h($u)."'>".h($ra["name"])."</a>";$u=ME.'edit='.urlencode($Q);foreach($Da
as$d=>$V){$u.="&set".urlencode("[".bracket_escape($d)."]")."=".urlencode($J[$V]);}echo"<a href='".h($u)."' title='".'Nová položka'."'>+</a> ";}}}function
selectQuery($G){return"<!--\n".str_replace("--","--><!-- ",$G)."\n-->\n";}function
rowDescription($Q){foreach(fields($Q)as$i){if(ereg("varchar|character varying",$i["type"])){return
idf_escape($i["field"]);}}return"";}function
rowDescriptions($K,$zb){$I=$K;foreach($K[0]as$s=>$V){if(list($Q,$o,$_)=$this->_foreignColumn($zb,$s)){$Pb=array();foreach($K
as$J){$Pb[$J[$s]]=exact_value($J[$s]);}$Ta=$this->_values[$Q];if(!$Ta){$Ta=get_key_vals("SELECT $o, $_ FROM ".table($Q)." WHERE $o IN (".implode(", ",$Pb).")");}foreach($K
as$z=>$J){if(isset($J[$s])){$I[$z][$s]=(string)$Ta[$J[$s]];}}}}return$I;}function
selectVal($V,$u,$i){$I=($V=="<i>NULL</i>"?"&nbsp;":$V);if(ereg('blob|bytea',$i["type"])&&!is_utf8($V)){$I=lang(array('%d bajt','%d bajty','%d bajtů'),strlen($V));if(ereg("^(GIF|\xFF\xD8\xFF|\x89PNG\x0D\x0A\x1A\x0A)",$V)){$I="<img src='$u' alt='$I'>";}}if(like_bool($i)&&$I!="&nbsp;"){$I='<img src="'.($V?"".h(preg_replace("~\\?.*~","",ME))."?file=plus.gif&amp;version=3.3.3":"".h(preg_replace("~\\?.*~","",ME))."?file=cross.gif&amp;version=3.3.3").'" alt="'.h($V).'">';}if($u){$I="<a href='$u'>$I</a>";}if(!$u&&!like_bool($i)&&ereg('int|float|double|decimal',$i["type"])){$I="<div class='number'>$I</div>";}elseif(ereg('date',$i["type"])){$I="<div class='datetime'>$I</div>";}return$I;}function
editVal($V,$i){if(ereg('date|timestamp',$i["type"])&&isset($V)){return
preg_replace('~^(\\d{2}(\\d+))-(0?(\\d+))-(0?(\\d+))~','$6.$4.$1',$V);}return(ereg("binary",$i["type"])?reset(unpack("H*",$V)):$V);}function
selectColumnsPrint($L,$e){}function
selectSearchPrint($X,$e,$q){$X=(array)$_GET["where"];echo'<fieldset><legend>'.'Vyhledat'."</legend><div>\n";$Xb=array();foreach($X
as$s=>$V){$Xb[$V["col"]]=$s;}$n=0;$j=fields($_GET["select"]);foreach($j
as$_=>$i){$Sa=$e[$_];if(ereg("enum",$i["type"])&&$Sa!=""){$s=$Xb[$_];$n--;echo"<div>".h($Sa)."<input type='hidden' name='where[$n][col]' value='".h($_)."'>:",enum_input("checkbox"," name='where[$n][val][]'",$i,(array)$X[$s]["val"],($i["null"]?0:null)),"</div>\n";unset($e[$_]);}}foreach($e
as$_=>$Sa){$A=$this->_foreignKeyOptions($_GET["select"],$_);if(is_array($A)){if($j[$_]["null"]){$A[0]='('.'prázdné'.')';}$s=$Xb[$_];$n--;echo"<div>".h($Sa)."<input type='hidden' name='where[$n][col]' value='".h($_)."'><input type='hidden' name='where[$n][op]' value='='>: <select name='where[$n][val]'>".optionlist($A,$X[$s]["val"],true)."</select></div>\n";unset($e[$_]);}}$n=0;foreach($X
as$V){if(($V["col"]==""||$e[$V["col"]])&&"$V[col]$V[val]"!=""){echo"<div><select name='where[$n][col]'><option value=''>(".'kdekoliv'.")".optionlist($e,$V["col"],true)."</select>",html_select("where[$n][op]",array(-1=>"")+$this->operators,$V["op"]),"<input name='where[$n][val]' value='".h($V["val"])."'></div>\n";$n++;}}echo"<div><select name='where[$n][col]' onchange='selectAddRow(this);'><option value=''>(".'kdekoliv'.")".optionlist($e,null,true)."</select>",html_select("where[$n][op]",array(-1=>"")+$this->operators),"<input name='where[$n][val]'></div>\n","</div></fieldset>\n";}function
selectOrderPrint($B,$e,$q){$_c=array();foreach($q
as$s=>$p){$B=array();foreach($p["columns"]as$V){$B[]=$e[$V];}if(count(array_filter($B,'strlen'))>1&&$s!="PRIMARY"){$_c[$s]=implode(", ",$B);}}if($_c){echo'<fieldset><legend>'.'Seřadit'."</legend><div>","<select name='index_order'>".optionlist(array(""=>"")+$_c,($_GET["order"][0]!=""?"":$_GET["index_order"]),true)."</select>","</div></fieldset>\n";}if($_GET["order"]){echo"<div style='display: none;'>".hidden_fields(array("order"=>array(1=>reset($_GET["order"])),"desc"=>($_GET["desc"]?array(1=>1):array()),))."</div>\n";}}function
selectLimitPrint($t){echo"<fieldset><legend>".'Limit'."</legend><div>";echo
html_select("limit",array("","30","100"),$t),"</div></fieldset>\n";}function
selectLengthPrint($sd){}function
selectActionPrint(){echo"<fieldset><legend>".'Akce'."</legend><div>","<input type='submit' value='".'Vypsat'."'>","</div></fieldset>\n";}function
selectCommandPrint(){return
true;}function
selectImportPrint(){return
true;}function
selectEmailPrint($db,$e){if($db){print_fieldset("email",'E-mail',$_POST["email_append"]);echo"<div onkeydown=\"eventStop(event); return bodyKeydown(event, 'email');\">\n","<p>".'Odesílatel'.": <input name='email_from' value='".h($_POST?$_POST["email_from"]:$_COOKIE["adminer_email"])."'>\n",'Předmět'.": <input name='email_subject' value='".h($_POST["email_subject"])."'>\n","<p><textarea name='email_message' rows='15' cols='75'>".h($_POST["email_message"].($_POST["email_append"]?'{$'."$_POST[email_addition]}":""))."</textarea>\n";echo"<p onkeydown=\"eventStop(event); return bodyKeydown(event, 'email_append');\">".html_select("email_addition",$e,$_POST["email_addition"])."<input type='submit' name='email_append' value='".'Vložit'."'>\n";echo"<p>".'Přílohy'.": <input type='file' name='email_files[]' onchange=\"this.onchange = function () { }; var el = this.cloneNode(true); el.value = ''; this.parentNode.appendChild(el);\">","<p>".(count($db)==1?'<input type="hidden" name="email_field" value="'.h(key($db)).'">':html_select("email_field",$db)),"<input type='submit' name='email' value='".'Odeslat'."' onclick=\"return this.form['delete'].onclick();\">\n","</div>\n","</div></fieldset>\n";}}function
selectColumnsProcess($e,$q){return
array(array(),array());}function
selectSearchProcess($j,$q){$I=array();foreach((array)$_GET["where"]as$s=>$X){$Aa=$X["col"];$wc=$X["op"];$V=$X["val"];if(($s<0?"":$Aa).$V!=""){$Ga=array();foreach(($Aa!=""?array($Aa=>$j[$Aa]):$j)as$_=>$i){if($Aa!=""||is_numeric($V)||!ereg('int|float|double|decimal',$i["type"])){$_=idf_escape($_);if($Aa!=""&&$i["type"]=="enum"){$Ga[]=(in_array(0,$V)?"$_ IS NULL OR ":"")."$_ IN (".implode(", ",array_map('intval',$V)).")";}else{$td=ereg('char|text|enum|set',$i["type"]);$W=$this->processInput($i,(!$wc&&$td&&ereg('^[^%]+$',$V)?"%$V%":$V));$Ga[]=$_.($W=="NULL"?" IS".($wc==">="?" NOT":"")." $W":(in_array($wc,$this->operators)||$wc=="="?" $wc $W":($td?" LIKE $W":" IN (".str_replace(",","', '",$W).")")));if($s<0&&$V=="0"){$Ga[]="$_ IS NULL";}}}}$I[]=($Ga?"(".implode(" OR ",$Ga).")":"0");}}return$I;}function
selectOrderProcess($j,$q){$Rb=$_GET["index_order"];if($Rb!=""){unset($_GET["order"][1]);}if($_GET["order"]){return
array(idf_escape(reset($_GET["order"])).($_GET["desc"]?" DESC":""));}foreach(($Rb!=""?array($q[$Rb]):$q)as$p){if($Rb!=""||$p["type"]=="INDEX"){$Sa=false;foreach($p["columns"]as$V){if(ereg('date|timestamp',$j[$V]["type"])){$Sa=true;break;}}$I=array();foreach($p["columns"]as$V){$I[]=idf_escape($V).($Sa?" DESC":"");}return$I;}}return
array();}function
selectLimitProcess(){return(isset($_GET["limit"])?$_GET["limit"]:"30");}function
selectLengthProcess(){return"100";}function
selectEmailProcess($X,$zb){if($_POST["email_append"]){return
true;}if($_POST["email"]){$Zc=0;if($_POST["all"]||$_POST["check"]){$i=idf_escape($_POST["email_field"]);$ld=$_POST["email_subject"];$y=$_POST["email_message"];preg_match_all('~\\{\\$([a-z0-9_]+)\\}~i',"$ld.$y",$x);$K=get_rows("SELECT DISTINCT $i".($x[1]?", ".implode(", ",array_map('idf_escape',array_unique($x[1]))):"")." FROM ".table($_GET["select"])." WHERE $i IS NOT NULL AND $i != ''".($X?" AND ".implode(" AND ",$X):"").($_POST["all"]?"":" AND ((".implode(") OR (",array_map('where_check',(array)$_POST["check"]))."))"));$j=fields($_GET["select"]);foreach($this->rowDescriptions($K,$zb)as$J){$Sc=array('{\\'=>'{');foreach($x[1]as$V){$Sc['{$'."$V}"]=$this->editVal($J[$V],$j[$V]);}$cb=$J[$_POST["email_field"]];if(is_mail($cb)&&send_mail($cb,strtr($ld,$Sc),strtr($y,$Sc),$_POST["email_from"],$_FILES["email_files"])){$Zc++;}}}cookie("adminer_email",$_POST["email_from"]);redirect(remove_from_uri(),lang(array('Byl odeslán %d e-mail.','Byly odeslány %d e-maily.','Bylo odesláno %d e-mailů.'),$Zc));}return
false;}function
messageQuery($G){return"<!--\n".str_replace("--","--><!-- ",$G)."\n-->";}function
editFunctions($i){$I=array();if($i["null"]&&ereg('blob',$i["type"])){$I["NULL"]='prázdné';}$I[""]=($i["null"]||$i["auto_increment"]||like_bool($i)?"":"*");if(ereg('date|time',$i["type"])){$I["now"]='teď';}if(eregi('_(md5|sha1)$',$i["field"],$w)){$I[]=strtolower($w[1]);}return$I;}function
editInput($Q,$i,$c,$W){if($i["type"]=="enum"){return(isset($_GET["select"])?"<label><input type='radio'$c value='-1' checked><i>".'původní'."</i></label> ":"").enum_input("radio",$c,$i,($W||isset($_GET["select"])?$W:0),($i["null"]?"":null));}$A=$this->_foreignKeyOptions($Q,$i["field"],$W);if(isset($A)){return(is_array($A)?"<select$c>".optionlist($A,$W,true)."</select>":"<input value='".h($W)."'$c class='hidden'><input value='".h($A)."' class='jsonly' onkeyup=\"whisper('".h(ME."script=complete&source=".urlencode($Q)."&field=".urlencode($i["field"]))."&value=', this);\"><div onclick='return whisperClick(event, this.previousSibling);'></div>");}if(like_bool($i)){return'<input type="checkbox" value="'.h($W?$W:1).'"'.($W?' checked':'')."$c>";}$Lb="";if(ereg('time',$i["type"])){$Lb='HH:MM:SS';}if(ereg('date|timestamp',$i["type"])){$Lb='d.m.[rrrr]'.($Lb?" [$Lb]":"");}if($Lb){return"<input value='".h($W)."'$c> ($Lb)";}if(eregi('_(md5|sha1)$',$i["field"])){return"<input type='password' value='".h($W)."'$c>";}return'';}function
processInput($i,$W,$l=""){if($l=="now"){return"$l()";}$I=$W;if(ereg('date|timestamp',$i["type"])&&preg_match('(^'.str_replace('\\$1','(?P<p1>\\d*)',preg_replace('~(\\\\\\$([2-6]))~','(?P<p\\2>\\d{1,2})',preg_quote('$6.$4.$1'))).'(.*))',$W,$w)){$I=($w["p1"]!=""?$w["p1"]:($w["p2"]!=""?($w["p2"]<70?20:19).$w["p2"]:gmdate("Y")))."-$w[p3]$w[p4]-$w[p5]$w[p6]".end($w);}$I=($i["type"]=="bit"&&ereg('^[0-9]+$',$W)?$I:q($I));if($W==""&&($i["null"]||!ereg('char|text',$i["type"]))&&!like_bool($i)){$I="NULL";}elseif(ereg('^(md5|sha1)$',$l)){$I="$l($I)";}if(ereg("binary",$i["type"])){$I="unhex($I)";}return$I;}function
dumpOutput(){return
array();}function
dumpFormat(){return
array('csv'=>'CSV,','csv;'=>'CSV;','tsv'=>'TSV');}function
dumpTable(){echo"\xef\xbb\xbf";}function
dumpData($Q,$kd,$G){global$f;$H=$f->query($G,1);if($H){while($J=$H->fetch_assoc()){if($kd=="table"){dump_csv(array_keys($J));$kd="INSERT";}dump_csv($J);}}}function
dumpHeaders($Nb,$nc=false){$ob="csv";header("Content-Type: text/csv; charset=utf-8");return$ob;}function
homepage(){return
true;}function
navigation($mc){global$ca,$yd;echo'<h1>
',$this->name(),' <span class="version">',$ca,'</span>
<a href="http://www.adminer.org/editor/#download" id="version">',(version_compare($ca,$_COOKIE["adminer_version"])<0?h($_COOKIE["adminer_version"]):""),'</a>
</h1>
';if($mc=="auth"){$vb=true;foreach((array)$_SESSION["pwds"]["server"][""]as$T=>$E){if(isset($E)){if($vb){echo"<p onclick='eventStop(event);'>\n";$vb=false;}echo"<a href='".h(auth_url("server","",$T))."'>".($T!=""?h($T):"<i>".'prázdné'."</i>")."</a><br>\n";}}}else{echo'<form action="" method="post">
<p class="logout">
<input type="submit" name="logout" value="Odhlásit" onclick="eventStop(event);">
<input type="hidden" name="token" value="',$yd,'">
</p>
</form>
';if($mc!="db"&&$mc!="ns"){$R=table_status();if(!$R){echo"<p class='message'>".'Žádné tabulky.'."\n";}else{$this->tablesPrint($R);}}}}function
tablesPrint($qd){echo"<p id='tables'>\n";foreach($qd
as$J){$_=$this->tableName($J);if(isset($J["Engine"])&&$_!=""){echo"<a href='".h(ME).'select='.urlencode($J["Name"])."'".bold($_GET["select"]==$J["Name"])." title='".'Vypsat data'."'>$_</a><br>\n";}}}function
_foreignColumn($zb,$d){foreach((array)$zb[$d]as$yb){if(count($yb["source"])==1){$_=$this->rowDescription($yb["table"]);if($_!=""){$o=idf_escape($yb["target"][0]);return
array($yb["table"],$o,$_);}}}}function
_foreignKeyOptions($Q,$d,$W=null){global$f;if(list($S,$o,$_)=$this->_foreignColumn(column_foreign_keys($Q),$d)){$I=&$this->_values[$S];if(!isset($I)){$R=table_status($S);$I=($R["Rows"]>1000?"":array(""=>"")+get_key_vals("SELECT $o, $_ FROM ".table($S)." ORDER BY 2"));}if(!$I&&isset($W)){return$f->result("SELECT $_ FROM ".table($S)." WHERE $o = ".q($W));}return$I;}}}$b=(function_exists('adminer_object')?adminer_object():new
Adminer);function
page_header($ud,$h="",$xa=array(),$vd=""){global$ba,$b,$f,$Xa;header("Content-Type: text/html; charset=utf-8");if($b->headers()){header("X-Frame-Options: deny");header("X-XSS-Protection: 0");}$wd=$ud.($vd!=""?": ".h($vd):"");$xd=strip_tags($wd.(SERVER!=""&&SERVER!="localhost"?h(" - ".SERVER):"")." - ".$b->name());if(is_ajax()){header("X-AJAX-Title: ".rawurlencode($xd));}else{echo'<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html lang="cs" dir="ltr">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Script-Type" content="text/javascript">
<meta name="robots" content="noindex">
<title>',$xd,'</title>
<link rel="stylesheet" type="text/css" href="',h(preg_replace("~\\?.*~","",ME))."?file=default.css&amp;version=3.3.3",'">
<script type="text/javascript">
var areYouSure = \'Znovu odeslat POST data?\';
</script>
<script type="text/javascript" src="',h(preg_replace("~\\?.*~","",ME))."?file=functions.js&amp;version=3.3.3",'"></script>
';if($b->head()){echo'<link rel="shortcut icon" type="image/x-icon" href="',h(preg_replace("~\\?.*~","",ME))."?file=favicon.ico&amp;version=3.3.3",'" id="favicon">
';if(file_exists("adminer.css")){echo'<link rel="stylesheet" type="text/css" href="adminer.css">
';}}echo'
<body class="ltr nojs"',($_POST?"":" onclick=\"return bodyClick(event, '".h(js_escape(DB)."', '".js_escape($_GET["ns"]))."');\"");echo' onkeydown="bodyKeydown(event);" onload="bodyLoad(\'',(is_object($f)?substr($f->server_info,0,3):""),'\');',(isset($_COOKIE["adminer_version"])?"":" verifyVersion();");?>">
<script type="text/javascript">
document.body.className = document.body.className.replace(/(^|\s)nojs(\s|$)/, '$1js$2');
</script>

<div id="content">
<?php
}if(isset($xa)){$u=substr(preg_replace('~(username|db|ns)=[^&]*&~','',ME),0,-1);echo'<p id="breadcrumb"><a href="'.h($u?$u:".").'">'.$Xa[DRIVER].'</a> &raquo; ';$u=substr(preg_replace('~(db|ns)=[^&]*&~','',ME),0,-1);$M=(SERVER!=""?h(SERVER):'Server');if($xa===false){echo"$M\n";}else{echo"<a href='".($u?h($u):".")."' accesskey='1' title='Alt+Shift+1'>$M</a> &raquo; ";if($_GET["ns"]!=""||(DB!=""&&is_array($xa))){echo'<a href="'.h($u."&db=".urlencode(DB).(support("scheme")?"&ns=":"")).'">'.h(DB).'</a> &raquo; ';}if(is_array($xa)){if($_GET["ns"]!=""){echo'<a href="'.h(substr(ME,0,-1)).'">'.h($_GET["ns"]).'</a> &raquo; ';}foreach($xa
as$s=>$V){$Sa=(is_array($V)?$V[1]:$V);if($Sa!=""){echo'<a href="'.h(ME."$s=").urlencode(is_array($V)?$V[0]:$V).'">'.h($Sa).'</a> &raquo; ';}}}echo"$ud\n";}}echo"<span id='loader'></span>\n","<h2>$wd</h2>\n";restart_session();$Md=preg_replace('~^[^?]*~','',$_SERVER["REQUEST_URI"]);$lc=$_SESSION["messages"][$Md];if($lc){echo"<div class='message'>".implode("</div>\n<div class='message'>",$lc)."</div>\n";unset($_SESSION["messages"][$Md]);}$Oa=&get_session("dbs");if(DB!=""&&$Oa&&!in_array(DB,$Oa,true)){$Oa=null;}if($h){echo"<div class='error'>$h</div>\n";}define("PAGE_HEADER",1);}function
page_footer($mc=""){global$b;if(!is_ajax()){echo'</div>

<div id="menu">
';$b->navigation($mc);echo'</div>
';}}function
int32($z){while($z>=2147483648){$z-=4294967296;}while($z<=-2147483649){$z+=4294967296;}return(int)$z;}function
long2str($U,$Rd){$Vc='';foreach($U
as$V){$Vc.=pack('V',$V);}if($Rd){return
substr($Vc,0,end($U));}return$Vc;}function
str2long($Vc,$Rd){$U=array_values(unpack('V*',str_pad($Vc,4*ceil(strlen($Vc)/4),"\0")));if($Rd){$U[]=strlen($Vc);}return$U;}function
xxtea_mx($Z,$Y,$P,$r){return
int32((($Z>>5&0x7FFFFFF)^$Y<<2)+(($Y>>3&0x1FFFFFFF)^$Z<<4))^int32(($P^$Y)+($r^$Z));}function
encrypt_string($id,$s){if($id==""){return"";}$s=array_values(unpack("V*",pack("H*",md5($s))));$U=str2long($id,true);$z=count($U)-1;$Z=$U[$z];$Y=$U[0];$Mc=floor(6+52/($z+1));$P=0;while($Mc-->0){$P=int32($P+0x9E3779B9);$Za=$P>>2&3;for($C=0;$C<$z;$C++){$Y=$U[$C+1];$oc=xxtea_mx($Z,$Y,$P,$s[$C&3^$Za]);$Z=int32($U[$C]+$oc);$U[$C]=$Z;}$Y=$U[0];$oc=xxtea_mx($Z,$Y,$P,$s[$C&3^$Za]);$Z=int32($U[$z]+$oc);$U[$z]=$Z;}return
long2str($U,false);}function
decrypt_string($id,$s){if($id==""){return"";}$s=array_values(unpack("V*",pack("H*",md5($s))));$U=str2long($id,false);$z=count($U)-1;$Z=$U[$z];$Y=$U[0];$Mc=floor(6+52/($z+1));$P=int32($Mc*0x9E3779B9);while($P){$Za=$P>>2&3;for($C=$z;$C>0;$C--){$Z=$U[$C-1];$oc=xxtea_mx($Z,$Y,$P,$s[$C&3^$Za]);$Y=int32($U[$C]-$oc);$U[$C]=$Y;}$Z=$U[$z];$oc=xxtea_mx($Z,$Y,$P,$s[$C&3^$Za]);$Y=int32($U[0]-$oc);$U[0]=$Y;$P=int32($P-0x9E3779B9);}return
long2str($U,true);}$f='';$yd=$_SESSION["token"];if(!$_SESSION["token"]){$_SESSION["token"]=rand(1,1e6);}$Ec=array();if($_COOKIE["adminer_permanent"]){foreach(explode(" ",$_COOKIE["adminer_permanent"])as$V){list($s)=explode(":",$V);$Ec[$s]=$V;}}if(isset($_POST["server"])){session_regenerate_id();$_SESSION["pwds"][$_POST["driver"]][$_POST["server"]][$_POST["username"]]=$_POST["password"];if($_POST["permanent"]){$s=base64_encode($_POST["driver"])."-".base64_encode($_POST["server"])."-".base64_encode($_POST["username"]);$Jc=$b->permanentLogin();$Ec[$s]="$s:".base64_encode($Jc?encrypt_string($_POST["password"],$Jc):"");cookie("adminer_permanent",implode(" ",$Ec));}if(count($_POST)==($_POST["permanent"]?5:4)||DRIVER!=$_POST["driver"]||SERVER!=$_POST["server"]||$_GET["username"]!==$_POST["username"]){redirect(auth_url($_POST["driver"],$_POST["server"],$_POST["username"]));}}elseif($_POST["logout"]){if($yd&&$_POST["token"]!=$yd){page_header('Odhlásit','Neplatný token CSRF. Odešlete formulář znovu.');page_footer("db");exit;}else{foreach(array("pwds","dbs","queries")as$s){set_session($s,null);}$s=base64_encode(DRIVER)."-".base64_encode(SERVER)."-".base64_encode($_GET["username"]);if($Ec[$s]){unset($Ec[$s]);cookie("adminer_permanent",implode(" ",$Ec));}redirect(substr(preg_replace('~(username|db|ns)=[^&]*&~','',ME),0,-1),'Odhlášení proběhlo v pořádku.');}}elseif($Ec&&!$_SESSION["pwds"]){session_regenerate_id();$Jc=$b->permanentLogin();foreach($Ec
as$s=>$V){list(,$_a)=explode(":",$V);list($Wa,$M,$T)=array_map('base64_decode',explode("-",$s));$_SESSION["pwds"][$Wa][$M][$T]=decrypt_string(base64_decode($_a),$Jc);}}function
auth_error($lb=null){global$f,$b,$yd;$cd=session_name();$h="";if(!$_COOKIE[$cd]&&$_GET[$cd]&&ini_bool("session.use_only_cookies")){$h='Session proměnné musí být povolené.';}elseif(isset($_GET["username"])){if(($_COOKIE[$cd]||$_GET[$cd])&&!$yd){$h='Session vypršela, přihlašte se prosím znovu.';}else{$E=&get_session("pwds");if(isset($E)){$h=h($lb?$lb->getMessage():(is_string($f)?$f:'Neplatné přihlašovací údaje.'));$E=null;}}}page_header('Přihlásit se',$h,null);echo"<form action='' method='post' onclick='eventStop(event);'>\n";$b->loginForm();echo"<div>";hidden_fields($_POST,array("driver","server","username","password","permanent"));echo"</div>\n","</form>\n";page_footer("auth");}if(isset($_GET["username"])){if(!class_exists("Min_DB")){unset($_SESSION["pwds"][DRIVER]);page_header('Žádná extenze',sprintf('Není dostupná žádná z podporovaných PHP extenzí (%s).',implode(", ",$Hc)),false);page_footer("auth");exit;}$f=connect();}if(is_string($f)||!$b->login($_GET["username"],get_session("pwds"))){auth_error();exit;}$yd=$_SESSION["token"];if(isset($_POST["server"])&&$_POST["token"]){$_POST["token"]=$yd;}$h=($_POST?($_POST["token"]==$yd?"":'Neplatný token CSRF. Odešlete formulář znovu.'):($_SERVER["REQUEST_METHOD"]!="POST"?"":sprintf('Příliš velká POST data. Zmenšete data nebo zvyšte hodnotu konfigurační direktivy %s.','"post_max_size"')));$f->select_db($b->database());function
email_header($Jb){return"=?UTF-8?B?".base64_encode($Jb)."?=";}function
send_mail($cb,$ld,$y,$Eb="",$tb=array()){$g=(strncasecmp(PHP_OS,"win",3)?"\n":"\r\n");$y=str_replace("\n",$g,wordwrap(str_replace("\r","","$y\n")));$wa=uniqid("boundary");$na="";foreach((array)$tb["error"]as$s=>$V){if(!$V){$na.="--$wa$g"."Content-Type: ".str_replace("\n","",$tb["type"][$s]).$g."Content-Disposition: attachment; filename=\"".preg_replace('~["\\n]~','',$tb["name"][$s])."\"$g"."Content-Transfer-Encoding: base64$g$g".chunk_split(base64_encode(file_get_contents($tb["tmp_name"][$s])),76,$g).$g;}}$ua="";$Kb="Content-Type: text/plain; charset=utf-8$g"."Content-Transfer-Encoding: 8bit";if($na){$na.="--$wa--$g";$ua="--$wa$g$Kb$g$g";$Kb="Content-Type: multipart/mixed; boundary=\"$wa\"";}$Kb.=$g."MIME-Version: 1.0$g"."X-Mailer: Adminer Editor".($Eb?$g."From: ".str_replace("\n","",$Eb):"");return
mail($cb,email_header($ld),$ua.$y.$na,$Kb);}function
like_bool($i){return
ereg("bool|(tinyint|bit)\\(1\\)",$i["full_type"]);}session_cache_limiter("");if(!ini_bool("session.use_cookies")||@ini_set("session.use_cookies",false)!==false){session_write_close();}$tc="RESTRICT|CASCADE|SET NULL|NO ACTION";$Xa[DRIVER]='Přihlásit se';if(isset($_GET["select"])&&($_POST["edit"]||$_POST["clone"])&&!$_POST["save"]){$_GET["edit"]=$_GET["select"];}if(isset($_GET["download"])){$a=$_GET["download"];header("Content-Type: application/octet-stream");header("Content-Disposition: attachment; filename=".friendly_url("$a-".implode("_",$_GET["where"])).".".friendly_url($_GET["field"]));echo$f->result("SELECT".limit(idf_escape($_GET["field"])." FROM ".table($a)," WHERE ".where($_GET),1));exit;}elseif(isset($_GET["edit"])){$a=$_GET["edit"];$X=(isset($_GET["select"])?(count($_POST["check"])==1?where_check($_POST["check"][0]):""):where($_GET));$Ld=(isset($_GET["select"])?$_POST["edit"]:$X);$j=fields($a);foreach($j
as$_=>$i){if(!isset($i["privileges"][$Ld?"update":"insert"])||$b->fieldName($i)==""){unset($j[$_]);}}if($_POST&&!$h&&!isset($_GET["select"])){$v=$_POST["referer"];if($_POST["insert"]){$v=($Ld?null:$_SERVER["REQUEST_URI"]);}elseif(!ereg('^.+&select=.+$',$v)){$v=ME."select=".urlencode($a);}if(isset($_POST["delete"])){query_redirect("DELETE".limit1("FROM ".table($a)," WHERE $X"),$v,'Položka byla smazána.');}else{$N=array();foreach($j
as$_=>$i){$V=process_input($i);if($V!==false&&$V!==null){$N[idf_escape($_)]=($Ld?"\n".idf_escape($_)." = $V":$V);}}if($Ld){if(!$N){redirect($v);}query_redirect("UPDATE".limit1(table($a)." SET".implode(",",$N),"\nWHERE $X"),$v,'Položka byla aktualizována.');}else{$H=insert_into($a,$N);$bc=($H?last_id():0);queries_redirect($v,sprintf('Položka%s byla vložena.',($bc?" $bc":"")),$H);}}}$pd=$b->tableName(table_status($a));page_header(($Ld?'Upravit':'Vložit'),$h,array("select"=>array($a,$pd)),$pd);$J=null;if($_POST["save"]){$J=(array)$_POST["fields"];}elseif($X){$L=array();foreach($j
as$_=>$i){if(isset($i["privileges"]["select"])){$L[]=($_POST["clone"]&&$i["auto_increment"]?"'' AS ":(ereg("enum|set",$i["type"])?"1*".idf_escape($_)." AS ":"")).idf_escape($_);}}$J=array();if($L){$K=get_rows("SELECT".limit(implode(", ",$L)." FROM ".table($a)," WHERE $X",(isset($_GET["select"])?2:1)));$J=(isset($_GET["select"])&&count($K)!=1?null:reset($K));}}if($J===false){echo"<p class='error'>".'Žádné řádky.'."\n";}echo'
<form action="" method="post" enctype="multipart/form-data" id="form">
';if($j){echo"<table cellspacing='0' onkeydown='return editingKeydown(event);'>\n";foreach($j
as$_=>$i){echo"<tr><th>".$b->fieldName($i);$Ra=$_GET["set"][bracket_escape($_)];$W=(isset($J)?($J[$_]!=""&&ereg("enum|set",$i["type"])?(is_array($J[$_])?array_sum($J[$_]):+$J[$_]):$J[$_]):(!$Ld&&$i["auto_increment"]?"":(isset($_GET["select"])?false:(isset($Ra)?$Ra:$i["default"]))));if(!$_POST["save"]&&is_string($W)){$W=$b->editVal($W,$i);}$l=($_POST["save"]?(string)$_POST["function"][$_]:($Ld&&$i["on_update"]=="CURRENT_TIMESTAMP"?"now":($W===false?null:(isset($W)?'':'NULL'))));if($i["type"]=="timestamp"&&$W=="CURRENT_TIMESTAMP"){$W="";$l="now";}input($i,$W,$l);echo"\n";}echo"</table>\n";}echo'<p>
';if($j){echo"<input type='submit' value='".'Uložit'."'>\n";if(!isset($_GET["select"])){echo"<input type='submit' name='insert' value='".($Ld?'Uložit a pokračovat v editaci':'Uložit a vložit další')."' title='Ctrl+Shift+Enter'>\n";}}echo($Ld?"<input type='submit' name='delete' value='".'Smazat'."' onclick=\"return confirm('".'Opravdu?'."');\">\n":($_POST||!$j?"":"<script type='text/javascript'>document.getElementById('form').getElementsByTagName('td')[1].firstChild.focus();</script>\n"));if(isset($_GET["select"])){hidden_fields(array("check"=>(array)$_POST["check"],"clone"=>$_POST["clone"],"all"=>$_POST["all"]));}echo'<input type="hidden" name="referer" value="',h(isset($_POST["referer"])?$_POST["referer"]:$_SERVER["HTTP_REFERER"]),'">
<input type="hidden" name="save" value="1">
<input type="hidden" name="token" value="',$yd,'">
</form>
';}elseif(isset($_GET["select"])){$a=$_GET["select"];$R=table_status($a);$q=indexes($a);$j=fields($a);$Ab=column_foreign_keys($a);if($R["Oid"]=="t"){$q[]=array("type"=>"PRIMARY","columns"=>array("oid"));}parse_str($_COOKIE["adminer_import"],$ha);$Uc=array();$e=array();$sd=null;foreach($j
as$s=>$i){$_=$b->fieldName($i);if(isset($i["privileges"]["select"])&&$_!=""){$e[$s]=html_entity_decode(strip_tags($_));if(ereg('text|lob',$i["type"])){$sd=$b->selectLengthProcess();}}$Uc+=$i["privileges"];}list($L,$m)=$b->selectColumnsProcess($e,$q);$X=$b->selectSearchProcess($j,$q);$B=$b->selectOrderProcess($j,$q);$t=$b->selectLimitProcess();$Eb=($L?implode(", ",$L):($R["Oid"]=="t"?"oid, ":"")."*")."\nFROM ".table($a);$Gb=($m&&count($m)<count($L)?"\nGROUP BY ".implode(", ",$m):"").($B?"\nORDER BY ".implode(", ",$B):"");if($_GET["val"]&&is_ajax()){header("Content-Type: text/plain; charset=utf-8");foreach($_GET["val"]as$Hd=>$J){echo$f->result("SELECT".limit(idf_escape(key($J))." FROM ".table($a)," WHERE ".where_check($Hd).($X?" AND ".implode(" AND ",$X):"").($B?" ORDER BY ".implode(", ",$B):""),1));}exit;}if($_POST&&!$h){$Td="(".implode(") OR (",array_map('where_check',(array)$_POST["check"])).")";$Ic=$Jd=null;foreach($q
as$p){if($p["type"]=="PRIMARY"){$Ic=array_flip($p["columns"]);$Jd=($L?$Ic:array());break;}}foreach((array)$Jd
as$s=>$V){if(in_array(idf_escape($s),$L)){unset($Jd[$s]);}}if($_POST["export"]){cookie("adminer_import","output=".urlencode($_POST["output"])."&format=".urlencode($_POST["format"]));dump_headers($a);$b->dumpTable($a,"");if(!is_array($_POST["check"])||$Jd===array()){$Sd=$X;if(is_array($_POST["check"])){$Sd[]="($Td)";}$G="SELECT $Eb".($Sd?"\nWHERE ".implode(" AND ",$Sd):"").$Gb;}else{$Fd=array();foreach($_POST["check"]as$V){$Fd[]="(SELECT".limit($Eb,"\nWHERE ".($X?implode(" AND ",$X)." AND ":"").where_check($V).$Gb,1).")";}$G=implode(" UNION ALL ",$Fd);}$b->dumpData($a,"table",$G);exit;}if(!$b->selectEmailProcess($X,$Ab)){if($_POST["save"]||$_POST["delete"]){$H=true;$ia=0;$G=table($a);$N=array();if(!$_POST["delete"]){foreach($e
as$_=>$V){$V=process_input($j[$_]);if($V!==null){if($_POST["clone"]){$N[idf_escape($_)]=($V!==false?$V:idf_escape($_));}elseif($V!==false){$N[]=idf_escape($_)." = $V";}}}$G.=($_POST["clone"]?" (".implode(", ",array_keys($N)).")\nSELECT ".implode(", ",$N)."\nFROM ".table($a):" SET\n".implode(",\n",$N));}if($_POST["delete"]||$N){$Ea="UPDATE";if($_POST["delete"]){$Ea="DELETE";$G="FROM $G";}if($_POST["clone"]){$Ea="INSERT";$G="INTO $G";}if($_POST["all"]||($Jd===array()&&$_POST["check"])||count($m)<count($L)){$H=queries($Ea." $G".($_POST["all"]?($X?"\nWHERE ".implode(" AND ",$X):""):"\nWHERE $Td"));$ia=$f->affected_rows;}else{foreach((array)$_POST["check"]as$V){$H=queries($Ea.limit1($G,"\nWHERE ".where_check($V)));if(!$H){break;}$ia+=$f->affected_rows;}}}queries_redirect(remove_from_uri("page"),lang(array('Byl ovlivněn %d záznam.','Byly ovlivněny %d záznamy.','Bylo ovlivněno %d záznamů.'),$ia),$H);}elseif(!$_POST["import"]){if(!$_POST["val"]){$h='Dvojklikněte na políčko, které chcete změnit.';}else{$H=true;$ia=0;foreach($_POST["val"]as$Hd=>$J){$N=array();foreach($J
as$s=>$V){$s=bracket_escape($s,1);$N[]=idf_escape($s)." = ".(ereg('char|text',$j[$s]["type"])||$V!=""?$b->processInput($j[$s],$V):"NULL");}$G=table($a)." SET ".implode(", ",$N);$Sd=" WHERE ".where_check($Hd).($X?" AND ".implode(" AND ",$X):"");$H=queries("UPDATE".(count($m)<count($L)?" $G$Sd":limit1($G,$Sd)));if(!$H){break;}$ia+=$f->affected_rows;}queries_redirect(remove_from_uri(),lang(array('Byl ovlivněn %d záznam.','Byly ovlivněny %d záznamy.','Bylo ovlivněno %d záznamů.'),$ia),$H);}}elseif(is_string($k=get_file("csv_file",true))){cookie("adminer_import","output=".urlencode($ha["output"])."&format=".urlencode($_POST["separator"]));$H=true;$Da=array_keys($j);preg_match_all('~(?>"[^"]*"|[^"\\r\\n]+)+~',$k,$x);$ia=count($x[0]);begin();$ad=($_POST["separator"]=="csv"?",":($_POST["separator"]=="tsv"?"\t":";"));foreach($x[0]as$s=>$V){preg_match_all("~((\"[^\"]*\")+|[^$ad]*)$ad~",$V.$ad,$hc);if(!$s&&!array_diff($hc[1],$Da)){$Da=$hc[1];$ia--;}else{$N=array();foreach($hc[1]as$n=>$Aa){$N[idf_escape($Da[$n])]=($Aa==""&&$j[$Da[$n]]["null"]?"NULL":q(str_replace('""','"',preg_replace('~^"|"$~','',$Aa))));}$H=insert_update($a,$N,$Ic);if(!$H){break;}}}if($H){queries("COMMIT");}queries_redirect(remove_from_uri("page"),lang(array('Byl importován %d záznam.','Byly importovány %d záznamy.','Bylo importováno %d záznamů.'),$ia),$H);queries("ROLLBACK");}else{$h=upload_error($k);}}}$pd=$b->tableName($R);page_header('Vypsat'.": $pd",$h);session_write_close();$N=null;if(isset($Uc["insert"])){$N="";foreach((array)$_GET["where"]as$V){if(count($Ab[$V["col"]])==1&&($V["op"]=="="||(!$V["op"]&&!ereg('[_%]',$V["val"])))){$N.="&set".urlencode("[".bracket_escape($V["col"])."]")."=".urlencode($V["val"]);}}}$b->selectLinks($R,$N);if(!$e){echo"<p class='error'>".'Nepodařilo se vypsat tabulku'.($j?".":": ".error())."\n";}else{echo"<form action='' id='form'>\n","<div style='display: none;'>";hidden_fields_get();echo(DB!=""?'<input type="hidden" name="db" value="'.h(DB).'">'.(isset($_GET["ns"])?'<input type="hidden" name="ns" value="'.h($_GET["ns"]).'">':""):"");echo'<input type="hidden" name="select" value="'.h($a).'">',"</div>\n";$b->selectColumnsPrint($L,$e);$b->selectSearchPrint($X,$e,$q);$b->selectOrderPrint($B,$e,$q);$b->selectLimitPrint($t);$b->selectLengthPrint($sd);$b->selectActionPrint();echo"</form>\n";$D=$_GET["page"];if($D=="last"){$Cb=$f->result("SELECT COUNT(*) FROM ".table($a).($X?" WHERE ".implode(" AND ",$X):""));$D=floor(max(0,$Cb-1)/$t);}$G="SELECT".limit((+$t&&$m&&count($m)<count($L)&&$Wb=="sql"?"SQL_CALC_FOUND_ROWS ":"").$Eb,($X?"\nWHERE ".implode(" AND ",$X):"").$Gb,($t!=""?+$t:null),($D?$t*$D:0),"\n");echo$b->selectQuery($G);$H=$f->query($G);if(!$H){echo"<p class='error'>".error()."\n";}else{if($Wb=="mssql"){$H->seek($t*$D);}$eb=array();echo"<form action='' method='post' enctype='multipart/form-data'>\n";$K=array();while($J=$H->fetch_assoc()){if($D&&$Wb=="oracle"){unset($J["RNUM"]);}$K[]=$J;}if($_GET["page"]!="last"){$Cb=(+$t&&$m&&count($m)<count($L)?($Wb=="sql"?$f->result(" SELECT FOUND_ROWS()"):$f->result("SELECT COUNT(*) FROM ($G) x")):count($K));}if(!$K){echo"<p class='message'>".'Žádné řádky.'."\n";}else{$ta=$b->backwardKeys($a,$pd);echo"<table cellspacing='0' class='nowrap checkable' onclick='tableClick(event);' onkeydown='return editingKeydown(event);'>\n","<thead><tr>".(!$m&&$L?"":"<td><input type='checkbox' id='all-page' onclick='formCheck(this, /check/);'> <a href='".h($_GET["modify"]?remove_from_uri("modify"):$_SERVER["REQUEST_URI"]."&modify=1")."'>".'upravit'."</a>");$pc=array();$Fb=array();reset($L);$Oc=1;foreach($K[0]as$s=>$V){if($R["Oid"]!="t"||$s!="oid"){$V=$_GET["columns"][key($L)];$i=$j[$L?($V?$V["col"]:current($L)):$s];$_=($i?$b->fieldName($i,$Oc):"*");if($_!=""){$Oc++;$pc[$s]=$_;$d=idf_escape($s);echo'<th><a href="'.h(remove_from_uri('(order|desc)[^=]*|page').'&order%5B0%5D='.urlencode($s).($B[0]==$d||$B[0]==$s||(!$B&&count($m)<count($L)&&$m[0]==$d)?'&desc%5B0%5D=1':'')).'">'.(!$L||$V?apply_sql_function($V["fun"],$_):h(current($L)))."</a>";}$Fb[$s]=$V["fun"];next($L);}}$ec=array();if($_GET["modify"]){foreach($K
as$J){foreach($J
as$s=>$V){$ec[$s]=max($ec[$s],min(40,strlen(utf8_decode($V))));}}}echo($ta?"<th>".'Vztahy':"")."</thead>\n";foreach($b->rowDescriptions($K,$Ab)as$z=>$J){$Gd=unique_array($K[$z],$q);$Hd="";foreach($Gd
as$s=>$V){$Hd.="&".(isset($V)?urlencode("where[".bracket_escape($s)."]")."=".urlencode($V):"null%5B%5D=".urlencode($s));}echo"<tr".odd().">".(!$m&&$L?"":"<td>".checkbox("check[]",substr($Hd,1),in_array(substr($Hd,1),(array)$_POST["check"]),"","this.form['all'].checked = false; formUncheck('all-page');").(count($m)<count($L)||information_schema(DB)?"":" <a href='".h(ME."edit=".urlencode($a).$Hd)."'>".'upravit'."</a>"));foreach($J
as$s=>$V){if(isset($pc[$s])){$i=$j[$s];if($V!=""&&(!isset($eb[$s])||$eb[$s]!="")){$eb[$s]=(is_mail($V)?$pc[$s]:"");}$u="";$V=$b->editVal($V,$i);if(!isset($V)){$V="<i>NULL</i>";}else{if(ereg('blob|bytea|raw|file',$i["type"])&&$V!=""){$u=h(ME.'download='.urlencode($a).'&field='.urlencode($s).$Hd);}if($V===""){$V="&nbsp;";}elseif($sd!=""&&ereg('text|blob',$i["type"])&&is_utf8($V)){$V=shorten_utf8($V,max(0,+$sd));}else{$V=h($V);}if(!$u){foreach((array)$Ab[$s]as$_b){if(count($Ab[$s])==1||end($_b["source"])==$s){$u="";foreach($_b["source"]as$n=>$dd){$u.=where_link($n,$_b["target"][$n],$K[$z][$dd]);}$u=h(($_b["db"]!=""?preg_replace('~([?&]db=)[^&]+~','\\1'.urlencode($_b["db"]),ME):ME).'select='.urlencode($_b["table"]).$u);if(count($_b["source"])==1){break;}}}}if($s=="COUNT(*)"){$u=h(ME."select=".urlencode($a));$n=0;foreach((array)$_GET["where"]as$U){if(!array_key_exists($U["col"],$Gd)){$u.=h(where_link($n++,$U["col"],$U["val"],$U["op"]));}}foreach($Gd
as$r=>$U){$u.=h(where_link($n++,$r,$U));}}}if(!$u){if(is_mail($V)){$u="mailto:$V";}if($Lc=is_url($J[$s])){$u=($Lc=="http"&&$aa?$J[$s]:"$Lc://www.adminer.org/redirect/?url=".urlencode($J[$s]));}}$o=h("val[$Hd][".bracket_escape($s)."]");$W=$_POST["val"][$Hd][bracket_escape($s)];$Ib=h(isset($W)?$W:$J[$s]);$gc=strpos($V,"<i>...</i>");$bb=is_utf8($V)&&$K[$z][$s]==$J[$s]&&!$Fb[$s];$rd=ereg('text|lob',$i["type"]);echo(($_GET["modify"]&&$bb)||isset($W)?"<td>".($rd?"<textarea name='$o' cols='30' rows='".(substr_count($J[$s],"\n")+1)."'>$Ib</textarea>":"<input name='$o' value='$Ib' size='$ec[$s]'>"):"<td id='$o' ondblclick=\"".($bb?"selectDblClick(this, event".($gc?", 2":($rd?", 1":"")).")":"alert('".h('Ke změně této hodnoty použijte odkaz upravit.')."')").";\">".$b->selectVal($V,$u,$i));}}if($ta){echo"<td>";}$b->backwardKeysPrint($ta,$K[$z]);echo"</tr>\n";}echo"</table>\n",(!$m&&$L?"":"<script type='text/javascript'>tableCheck();</script>\n");}if($K||$D){$kb=true;if($_GET["page"]!="last"&&+$t&&count($m)>=count($L)&&($Cb>=$t||$D)){$Cb=found_rows($R,$X);if($Cb<max(1e4,2*($D+1)*$t)){ob_flush();flush();$Cb=$f->result("SELECT COUNT(*) FROM ".table($a).($X?" WHERE ".implode(" AND ",$X):""));}else{$kb=false;}}echo"<p class='pages'>";if(+$t&&$Cb>$t){$ic=floor(($Cb-1)/$t);echo'<a href="'.h(remove_from_uri("page"))."\" onclick=\"pageClick(this.href, +prompt('".'Stránka'."', '".($D+1)."'), event); return false;\">".'Stránka'."</a>:",pagination(0,$D).($D>5?" ...":"");for($n=max(1,$D-4);$n<min($ic,$D+5);$n++){echo
pagination($n,$D);}echo($D+5<$ic?" ...":"").($kb?pagination($ic,$D):' <a href="'.h(remove_from_uri()."&page=last").'">'.'poslední'."</a>");}echo" (".($kb?"":"~ ").lang(array('%d řádek','%d řádky','%d řádků'),$Cb).") ".checkbox("all",1,0,'celý výsledek')."\n";if($b->selectCommandPrint()){echo'<fieldset><legend>Upravit</legend><div>
<input type="submit" value="Uložit"',($_GET["modify"]?'':' title="'.'Dvojklikněte na políčko, které chcete změnit.'.'" class="jsonly"');?>>
<input type="submit" name="edit" value="Upravit">
<input type="submit" name="clone" value="Klonovat">
<input type="submit" name="delete" value="Smazat" onclick="return confirm('Opravdu? (' + (this.form['all'].checked ? <?php echo$Cb,' : formChecked(this, /check/)) + \')\');">
</div></fieldset>
';}print_fieldset("export",'Export');$Ac=$b->dumpOutput();echo($Ac?html_select("output",$Ac,$ha["output"])." ":""),html_select("format",$b->dumpFormat(),$ha["format"])," <input type='submit' name='export' value='".'Export'."' onclick='eventStop(event);'>\n","</div></fieldset>\n";}if($b->selectImportPrint()){print_fieldset("import",'Import',!$K);echo"<input type='file' name='csv_file'> ",html_select("separator",array("csv"=>"CSV,","csv;"=>"CSV;","tsv"=>"TSV"),$ha["format"],1);echo" <input type='submit' name='import' value='".'Import'."'>","<input type='hidden' name='token' value='$yd'>\n","</div></fieldset>\n";}$b->selectEmailPrint(array_filter($eb,'strlen'),$e);echo"</form>\n";}}}elseif(isset($_GET["script"])){if(list($Q,$o,$_)=$b->_foreignColumn(column_foreign_keys($_GET["source"]),$_GET["field"])){$H=$f->query("SELECT $o, $_ FROM ".table($Q)." WHERE ".(ereg('^[0-9]+$',$_GET["value"])?"$o = $_GET[value] OR ":"")."$_ LIKE ".q("$_GET[value]%")." ORDER BY 2 LIMIT 11");for($n=0;$n<10&&($J=$H->fetch_row());$n++){echo"<a href='".h(ME."edit=".urlencode($Q)."&where".urlencode("[".bracket_escape(idf_unescape($o))."]")."=".urlencode($J[0]))."'>".h($J[1])."</a><br>\n";}if($n==10){echo"...\n";}}exit;}else{page_header('Server',"",false);if($b->homepage()){echo"<form action='' method='post'>\n","<p>".'Vyhledat data v tabulkách'.": <input name='query' value='".h($_POST["query"])."'> <input type='submit' value='".'Vyhledat'."'>\n";if($_POST["query"]!=""){search_tables();}echo"<table cellspacing='0' class='nowrap checkable' onclick='tableClick(event);'>\n",'<thead><tr class="wrap"><td><input id="check-all" type="checkbox" onclick="formCheck(this, /^tables\[/);"><th>'.'Tabulka'.'<td>'.'Řádků'."</thead>\n";foreach(table_status()as$Q=>$J){$_=$b->tableName($J);if(isset($J["Engine"])&&$_!=""){echo'<tr'.odd().'><td>'.checkbox("tables[]",$Q,in_array($Q,(array)$_POST["tables"],true),"","formUncheck('check-all');"),"<th><a href='".h(ME).'select='.urlencode($Q)."'>$_</a>";$V=number_format($J["Rows"],0,'.',' ');echo"<td align='right'><a href='".h(ME."edit=").urlencode($Q)."'>".($J["Engine"]=="InnoDB"&&$V?"~ $V":$V)."</a>";}}echo"</table>\n","<script type='text/javascript'>tableCheck();</script>\n","</form>\n";}}page_footer();