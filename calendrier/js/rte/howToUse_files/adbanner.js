var ddcurpageurl=window.location.toString() //current page url
var ddscripttitle=document.title.replace(/^D.+[-:]\s+/,"")
ddscripttitle=ddscripttitle.replace(/[<>]/g, "")

var bnum=new Number(Math.floor(99999999 * Math.random())+1); //Hostway random num
var showincontentheader=0

var randban=new Array()
randban[0]='<scr'+'ipt language=javascript src="http://a.tribalfusion.com/j.ad?site=DynamicDrive&adSpace=ros&size=468x60&type=horiz&noAd=1&pop=0&requestID='+((new Date()).getTime() % 2147483648) + Math.random()+'"></scr'+'ipt>'
randban[1]=''
randban[2]='<iframe src="http://media.fastclick.net/w/get.media?sid=6286&m=1&d=f&v=1.0c&t=s&pageid=1" width=468 height=60 hspace=0 vspace=0 frameborder=0 marginheight=0 marginwidth=0 scrolling=no><a href="http://media.fastclick.net/w/click.here?sid=6286&m=1&pageid=1" target="_top"><img width=468 height=60 src="http://media.fastclick.net/w/get.media?sid=6286&m=1&d=s&v=1.0c&pageid=1" border=0></a></iframe>'
randban[3]=''
randban[4]='<a href="http://www.dynamicdrive.com/partners.php?id=hs"><img src="http://www.dynamicdrive.com/sponsors/hs.gif" border=0></a>'

var bweight=new Array()

bweight[0]=3
bweight[1]=2
bweight[2]=2 //fastclick
bweight[3]=2
bweight[4]=1 //hs


var banner_num=0
var stepbystep=totalweight=bweight[0]

for (ct=1;ct<bweight.length;ct++)
totalweight+=bweight[ct]

var revised_ranban=new Array()
var ran_num=Math.floor(Math.random()*totalweight)

while (banner_num<randban.length){
for (ct=0;ct<bweight[banner_num];ct++)
revised_ranban[revised_ranban.length]=randban[banner_num]
banner_num++
}

if (typeof isfrontpage !="undefined") //if frontpage
document.write('<div id="topbanner" align="center"><scr'+'ipt language=javascript src="http://a.tribalfusion.com/j.ad?site=DynamicDrive&adSpace=ros&size=468x60&type=horiz&pop=0&noAd=1&requestID='+((new Date()).getTime() % 2147483648) + Math.random()+'"></scr'+'ipt></div>');
else if (typeof ismenucategory!="undefined") //if Menu Category page
ismenucategory=1 //do nothing
else if (revised_ranban[ran_num].indexOf("tribal")!=-1 || ddcurpageurl.indexOf("dynamicindex")==-1) //if TF or non script page
document.write('<div id="topbanner" align="center">'+revised_ranban[ran_num]+'</div>')
else
showincontentheader=1

/////Highlight Current Category/////

var testre=/dynamicindex(\d+)/i
//#D7FBBC
if (ddcurpageurl.match && ddcurpageurl.match(testre)!=null){
var catid="#c"+ddcurpageurl.match(testre)[1]
document.write('<style type="text/css">')
document.write(catid+" a{ color: black; background: #F0F0F0}")
document.write('<\/style>')
}

/////Style Supplimentary pages differently/////

if (ddcurpageurl.indexOf("suppliment")!=-1){
document.write('<style type="text/css">')
document.write("#leftbar .headers{background:#5D5D5D}")
document.write('<\/style>')
}

////////////Tally stuff/////////////////////

var tally_alreadyclicked=0
var tally_rootdomain="http://"+window.location.hostname
var tally_url=window.location.href.toLowerCase().split("dynamicdrive.com/")
tally_url=(tally_url.length)==2? tally_url[1] : "invalid"
if (tally_url.charAt(tally_url.length-1)=="/")
tally_url+="index.htm"
if (tally_url.indexOf("#")!=-1)
tally_url=tally_url.substring(0, tally_url.indexOf("#"))

function tally_calculate(){
if (tally_alreadyclicked==1)
return
var tally_page_request = false
if (window.XMLHttpRequest) // if Mozilla, Safari etc
tally_page_request = new XMLHttpRequest()
else if (window.ActiveXObject){ // if IE
try {
tally_page_request = new ActiveXObject("Msxml2.XMLHTTP")
} 
catch (e){
try{
tally_page_request = new ActiveXObject("Microsoft.XMLHTTP")
}
catch (e){}
}
}
else
return false
tally_alreadyclicked=1
tally_page_request.onreadystatechange=function(){
//tally_response(tally_page_request)
}
tally_page_request.open("GET", tally_rootdomain+"/php/tally.php?ms=" + new Date().getTime() + "&url="+escape(tally_url), true)
tally_page_request.send(null)
}

function jsenabledmark(id){
if (ddcurpageurl.indexOf("dynamicdrive.")!=-1){
if (id=="deli")
window.location='http://del.icio.us/post?&url='+encodeURIComponent(location.href)+'&title='+encodeURIComponent("Dynamic Drive JavaScripts- "+ddscripttitle)
else if (id=="furl")
window.location='http://www.furl.net/storeIt.jsp?u='+encodeURIComponent(location.href)+'&t='+encodeURIComponent("Dynamic Drive JavaScripts- "+ddscripttitle)
}
return false
}


/////Highlight textarea stuff/////

function highlight(x){
var x=x+1
document.forms[x].elements[0].select()
//if (document.getElementById && tally_url!="invalid")
//tally_calculate()
}


/////Page Nav Select Menu function/////

function pagenavselect_dd(selectobj){
location=selectobj.options[selectobj.selectedIndex].value
}