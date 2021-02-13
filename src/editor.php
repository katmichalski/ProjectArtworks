<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">

<script>



function Loadeditor () {
document.getElementById('EntryFrame').style.width=screen.width+'px';
document.getElementById('EntryFrame').src='editorlayer.html';
CanvasPage ='localhost:3000'
CanvasPage = decodeURIComponent(CanvasPage);
document.getElementById('FluxReturnUrl').value=CanvasPage;
document.getElementById('bodyentry').style.width=screen.width+'px';
}
 
 
var helptimer=setTimeout(function(){ document.getElementById('Help').style.backgroundColor='grey';document.getElementById('Help').style.color='black'; }, 3000); 
function Help(a){
document.getElementById('Help').innerHTML=a
document.getElementById('Help').style.backgroundColor='white';
document.getElementById('Help').style.color='red';
 clearTimeout(helptimer);
helptimer=setTimeout(function(){ document.getElementById('Help').style.backgroundColor='grey';document.getElementById('Help').style.color='black'; }, 3000);
}

ExitPage='localhost:3000/home';

if (navigator.appName == 'Microsoft Internet Explorer' ||  !!(navigator.userAgent.match(/Trident/) || navigator.userAgent.match(/rv 11/)) )
{
  alert("This Version Of Microsoft Internet Explorer Is Not Supported. Browser Requirements: Microsoft Edge, Modern Version Of FireFox Or Chrome");
}


function SetErrorData(){
document.getElementById('NoPage').innerHTML=document.getElementById('NoPage').innerHTML + '<br><br>Canvas Page:<br> '+ CanvasPage
}

</script>
<style type="text/css">
html, body {
  overflow: hidden;
  margin:0px;
  padding:0px;
  height:100vh
}

input {
margin-right:5px;float:right;min-width:60px;font-size:10px;font-weight:bold;border: 1px solid white;background-color:#333333;color:#C2C2C2;cursor : pointer;
}

.tools img {
max-width:100%;
max-height:90%;
cursor:pointer;
float:left;
padding-left:10px;

}


.button-primary,
.download-button,
.button-primary:visited,
.download-button:visited {
                    height:75%;margin-top:4px;
	background-color: #21759b;
	background-image: -webkit-gradient(linear, left top, left bottom, from(#2a95c5), to(#21759b));
	background-image: -webkit-linear-gradient(top, #2a95c5, #21759b);
	background-image:    -moz-linear-gradient(top, #2a95c5, #21759b);
	background-image:     -ms-linear-gradient(top, #2a95c5, #21759b);
	background-image:      -o-linear-gradient(top, #2a95c5, #21759b);
	background-image:   linear-gradient(to bottom, #2a95c5, #21759b);
	border-color: #21759b;
	border-bottom-color: #1e6a8d;
	-webkit-box-shadow: inset 0 1px 0 rgba(120,200,230,0.5);
	box-shadow: inset 0 1px 0 rgba(120,200,230,0.5);
	color: #fff !important;
	text-decoration: none;
	text-shadow: 0 1px 0 rgba(0,0,0,0.1);
}

.helpi
{

color: #fff !important;
padding-top: 3px;
background-color: #32373c !important;

}


div {
background-color:#333333;
border: 2px solid black;
color:#C2C2C2;
border-radius:1px;
font-size:12px;
font-weight:bolder;
-webkit-box-shadow: 2px 2px 2px 2px rgba(0,0,0,0.75);
-moz-box-shadow: 2px 2px 2px 2px rgba(0,0,0,0.75);
box-shadow: 2px 2px 2px 2px rgba(0,0,0,0.75);
text-align:center;
}
</style>
<title>3D Drag And Drop HTML Editor Online WYSIWYG Visual Editor, Free HTML Editor Online Web Page Builder, Web Based WYSIWYG Editor</title>
</head>
<body id="bodyentry" >
<div id="Information" style="display:none;position:fixed;top:20px;left:10px;width:250px;padding:10px;text-align:justify;opacity:1;z-index:10000">
<img src="assets/32x32/Info.png" >

<p>
You should not edit this page until you have built your "Full Screen" version. The editor will resize, format and place duplicate objects for you.
 </p><p>
After you finish the full size version disconnect the "Mobile" page from your "Full Page" and arrange object on your mobile version as you desire.
 </p><p>
The editor will then no longer change both pages and all edits need to be completed on the individual pages.
  </p>
  <span style="color:white"> Disconnect Mobile from Full Width page.<br></span>
  <div style="text-align:center;cursor:pointer;padding:2px" onclick="document.getElementById('EntryFrame').contentWindow.PNETOOLS.UnlockMobile()">

<img src="assets/m2/32x32/Unlock.png" style="cursor:pointer;padding:2px" onclick="document.getElementById('EntryFrame').contentWindow.PNETOOLS.UnlockMobile()"></div>
<br><br>
Back To Full Screen.<br>

<div style="text-align:center;cursor:pointer;padding:2px" onclick="document.getElementById('EntryFrame').contentWindow.PNETOOLS.SwithToTemplateCanvas('Full');document.getElementById('Information').style.display='none';document.getElementById('StopEditing').style.display='none'">
<img src="assets/desktop.png" style="max-height:32px;padding:2px"  onclick="document.getElementById('EntryFrame').contentWindow.PNETOOLS.SwithToTemplateCanvas('Full');document.getElementById('Information').style.display='none';document.getElementById('StopEditing').style.display='none'" onmouseover="Help('Switch to Full screen view.')" >
</div>
</div>

<div id ="ImageLoading" style="position: absolute;margin: auto;top: 35px;left: 0;right: 0;bottom: 0;z-index:5000;text-align:center;background-color:white;opacity:.9;display:none">
<div  style="position:fixed;top:60px;left:10px;width:350px;padding:10px;text-align:justify;opacity:1;z-index:10000"> <img src="assets/loadingsmall.gif">
<h3>
Loading Image.
</h3>
</div>
</div>

<div id="NoPage" style="display:none;position:fixed;top:20px;left:10px;width:350px;padding:10px;text-align:justify;opacity:1;z-index:10000"> <img src="assets/32x32/Abort.png">
<h3>
This is not a Flux Live page or you are not logged in to WordPress.   <a id="backtoadmin" href="" style="color:white;display:none">Back to admin.</a><br><br> 
If you continue to receive this error contact <a href="mailto:contact@plugnedit.com"> support </a> and include error information.<br>
</h3>
</div>
<div id ="loaderimage" style="position: absolute;margin: auto;top: 0;left: 0;right: 0;bottom: 0;z-index:5000;text-align:center;background-color:white">

<br><img src="assets/frontend3.jpg" style="position: absolute;margin: auto;top: 0;left: 0;right: 0;bottom: 0;z-index:5000">
<span style="font-size:25px">Simply Symphony</span>
  <div style="width:595px;
   position: absolute;margin: auto;bottom: 50px;left: 0;right: 0;bottom: 0;z-index:5000;background-color:white
">
<div id="statusText" style="text-align:center;height:20px">Initializing...</div>
  <div style="width:50px;height:15px;border:2px solid grey;background-color:white;float:left;margin-top:0px" id="status1"></div><div id="status2" style="width:50px;height:15px;border:2px solid grey;background-color:white;float:left;margin-top:0px"></div><div id="status3" style="width:50px;height:15px;border:2px solid grey;background-color:white;float:left;margin-top:0px"></div><div id="status4" style="width:50px;height:15px;border:2px solid grey;background-color:white;float:left;margin-top:0px"></div><div id="status5" style="width:50px;height:15px;border:2px solid grey;background-color:white;float:left;margin-top:0px"></div><div id="status6" style="width:50px;height:15px;border:2px solid grey;background-color:white;float:left;margin-top:0px"></div>
  <div id="status7" style="width:50px;height:15px;border:2px solid grey;background-color:white;float:left;margin-top:0px"></div>
  <div id="status8" style="width:50px;height:15px;border:2px solid grey;background-color:white;float:left;margin-top:0px"></div>
   <div id="status9" style="width:50px;height:15px;border:2px solid grey;background-color:white;float:left;margin-top:0px"></div>
     <div id="status10" style="width:50px;height:15px;border:2px solid grey;background-color:white;float:left;margin-top:0px"></div>
         <div id="status11" style="width:50px;height:15px;border:2px solid grey;background-color:white;float:left;margin-top:0px"></div>
  </div> 
</div>
<div id="StopEditing" style="height:100vh;width:100vw;top:0px;left:0px;background-color:black;position:absolute;z-index:1000;opacity:.9">
</div>
<div style="height:100vh;border:none;border-radius:0px">
<div class="tools" style="width:100%;height:5%;background-color:transparent;border:none;padding:4px;border-radius:0px">
<div class="helpi" id ="Help" style="width:200px;float:left;height:20px">Help: START HERE &#9658; &#9658; &#9658;</div>

 <img title="New Text / HTML Object" src="assets/gluicon/x-office-document.png" alt="New Text / HTML Object" id="NewText" onmouseover="Help('New Text Box')"  onclick="document.getElementById('EntryFrame').contentWindow.PlugNedit.RE('pnenewhtmlwrap').style.display='block';document.getElementById('EntryFrame').contentWindow.PlugNedit.RE('pnenewhtml').style.display='';" style="padding-left:15px">


 <!-- <img title="Headline" src="assets/" alt="Insert Headline"  id="NewHeadline" onmouseover="Help('Insert Headline')"  onclick="document.getElementById('EntryFrame').contentWindow.PlugNedit.NewHTMLLayer(undefined, undefined, undefined, true)"> -->

  
 <img title="Media Gallery" src="assets/" alt="Insert Image" id="NewImage" onclick="document.getElementById('EntryFrame').contentWindow.PlugNedit.RE('pneimageframewrap').style.display='block';document.getElementById('EntryFrame').contentWindow.PlugNedit.RE('pneimageframewrap').style.visibility='visible';document.getElementById('EntryFrame').contentWindow.PlugNedit.RE('pneimageframewrap').style.zIndex='7777';if (!document.getElementById('EntryFrame').contentWindow.PlugNedit.RE('pneimageframe').src.match('gallery')){document.getElementById('EntryFrame').contentWindow.PlugNedit.RE('pneimageframe').style.display='block';document.getElementById('EntryFrame').contentWindow.PlugNedit.RE('pneimageframe').src=document.getElementById('EntryFrame').contentWindow.PlugNedit.CanvasWindow.getElementById('PNEFluxGallerURL').value;};document.getElementById('EntryFrame').contentWindow.PlugNedit.RE('pneimageframe').style.display='block';document.getElementById('EntryFrame').contentWindow.PlugNedit.RE('pneimageframe').style.zIndex='7777';document.getElementById('EntryFrame').contentWindow.PlugNedit.RE('pneimageframe').style.visibility='visible'" onmouseover="Help('Insert Image.')" > <img src="assets/"  title="Embed/Insert HTML" onmouseover="Help('Insert Embed')"  onclick="document.getElementById('EntryFrame').contentWindow.PNETOOLS.EmbedHTML()">
 
 
 <img src="assets/" title="Page Properties Menu" alt="Properties Menu" onmouseover="Help('Properties menu.')"  onclick="document.getElementById('EntryFrame').contentWindow.PlugNedit.SideBar('3')"> &nbsp;&nbsp;<img title="Layers Menu" alt="Layers Menu" src="assets/" onmouseover="Help('Layers menu.')"   onclick="document.getElementById('EntryFrame').contentWindow.PlugNedit.SideBar('4')"><img title="Shutter Stock" alt="Shutter Stock" src="assets/" onmouseover="Help('Shutter Stock Photo Library.')"   onclick="document.getElementById('EntryFrame').contentWindow.PlugNedit.RE('shutterstockwrap').style.display='block';document.getElementById('EntryFrame').contentWindow.PlugNedit.RE('shutterstock').style.display='block';document.getElementById('EntryFrame').contentWindow.PlugNedit.RE('shutterstock').src='shutterstock.html'"  style="cursor:pointer">

<img alt="Trash Object" title="Delete Object" src="assets/" onmouseover="Help('Trash Object.')" alt="Trash Object"   onclick="document.getElementById('EntryFrame').contentWindow.PNETOOLS.DeleteLayers()">



 
  <img src="assets/" title="Help Videos" alt="Help Videos" id="helpvis" onclick="document.getElementById('EntryFrame').contentWindow.PlugNedit.RE('pnehelpvids').src='http://plugnedit.com/Fluxvideohelp/fluxhelp/vd.html';document.getElementById('EntryFrame').contentWindow.PlugNedit.RE('pnehelpvidswrap').style.display='block';document.getElementById('EntryFrame').contentWindow.PlugNedit.RE('pnehelpvids').style.display='block';" onmouseover="Help('Help Videos.')" style="cursor:pointer;max-height:20px;padding-top:4px">  
  
 <img alt="New Link"  onmouseover="Help('Link.')"  onclick="document.getElementById('EntryFrame').contentWindow.PNETOOLS.DisplayOptionsMenu();" src="assets/m2/32x32/Touch.png" id="chyperlink" title="Create Hyperlink" style="cursor:pointer;max-height:20px;padding-top:4px">

<img alt="Undo" title="Undo" src="assets/m2/32x32/Undo.png" onmouseover="Help('Undo.')"   onclick="document.getElementById('EntryFrame').contentWindow.PNETOOLS.UndoIt(-1)" style="max-height:20px;padding-top:4px">
 
 <img src="assets/m2/32x32/Redo.png" title="Redo" alt= "Redo" onmouseover="Help('Redo.')"  onclick="document.getElementById('EntryFrame').contentWindow.PNETOOLS.UndoIt(1)"  style="max-height:20px;padding-top:4px">

<input class="button-primary"  id="Save & Publsh" name=" Save & Publsh !" onclick="document.getElementById('FluxType').value='publish';document.getElementById('SubmitHTML').target='';document.getElementById('EntryFrame').contentWindow.PNETOOLS.SavePage()" style="margin-right:25px" type="button" value=" Publish ! "> 
 
<input class="button-primary"  id="Save As Draft" name=" Save Draft !" onclick="document.getElementById('FluxType').value='draft';document.getElementById('SubmitHTML').target='';document.getElementById('EntryFrame').contentWindow.PNETOOLS.SavePage()" style="" type="button" value=" Draft ! "> 
  
<input class="button-primary"  id="Trash" name=" Trash !" onclick="document.getElementById('FluxType').value='trash';document.getElementById('SubmitHTML').target='';document.getElementById('SubmitHTML').submit()" style="" type="button" value=" Trash ! "> 
    
<!--<input class="button-primary"  id="Delete" name=" Delete !" onclick="document.getElementById('EntryFrame').contentWindow.PNETOOLS.SavePage()" style="" type="button" value=" Reload ! "> -->

<input class="button-primary"  id="Save & Preview! " name=" Save & Preview !" onclick="document.getElementById('FluxType').value='save';document.getElementById('SubmitHTML').target='';document.getElementById('EntryFrame').contentWindow.PNETOOLS.SavePage()" style="" type="button" value=" Save & Preview ! "> 

<input class="button-primary"  id=" Admin " name=" Save & Admin! " onclick="document.getElementById('FluxAdmin').value='true';document.getElementById('FluxType').value='save';document.getElementById('FluxReturnUrl').value=document.getElementById('EntryFrame').contentWindow.PlugNedit.CanvasWindow.getElementById('PNEFluxAdminurl').value;document.getElementById('SubmitHTML').target='';document.getElementById('EntryFrame').contentWindow.PNETOOLS.SavePage()" style="" type="button" value=" Save & Admin! "> 

<img title="Mobile View" src="assets/mobile.png" alt="Mobile View" onmouseover="Help(' Mobile View. ')"  onclick="document.getElementById('EntryFrame').contentWindow.PNETOOLS.SwithToTemplateCanvas('Mobile')" style="padding-left:30px"><img alt="Desktop View" src="assets/desktop.png"  onclick="document.getElementById('EntryFrame').contentWindow.PNETOOLS.SwithToTemplateCanvas('Full')" title="Desk Top View" onmouseover="Help('Desk Top View.')" >

 

<input class="button-primary"  id=" Exit " name=" Exit! " onclick="window.location.href  = ExitPage.replace('PNENoWPToolbars','exit')" style="" type="button" value=" Exit "> 
<form id="SubmitHTML" name="SubmitHTML" action="" method="post">
<input type="hidden" name="FluxPageID" id="page" value="">
<input type="hidden" name="FluxUpdate" id="Update" value="1">
<input type="hidden" name="FluxPageContent" id="PageContent" value="">
<input type="hidden" name="FluxReturnUrl" id="FluxReturnUrl" value="">
<input type="hidden" name="FluxType" id="FluxType" value="">
<input type="hidden" name="FluxAdmin" id="FluxAdmin" value="false">
</form>
</div>

<iframe name="EntryFrame"  id="EntryFrame" src="index.html" style=" margin:auto;overflow:scroll;width:100%;height:93%;background-color:white;border:0px;margin:0px;padding:0px;"> </iframe>
</div>

<script>Loadeditor ()
</script>


</body>
</html>
