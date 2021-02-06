<!DOCTYPE html>
<html>
<head>
<title>JUTE</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
*{ margin: 0; padding: 0;}

header{
width: 100%;
height: 350%;
background-image: linear-gradient(to left, #fff 80%, #2DF90E 20%);
}
.navsection{
width: 100%;  background-color: orange;
display: flex; justify-content: space-around;
align-item: center;
background-image: linear-gradient(to top, #fff 60%, #2DF90E 40%);
}
.logo{
width: 40%;                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        
color: #fff;
background-image: linear-gradient(#FFA500 40%, #FF8C00 60%);
padding-left: 100px;
box-sizing: border-box;
}
.logo h3{
text-transform: uppercase;
font-size: 1.5rem;
animation: aagepichhe 2s linear infinite;
animation-direction: alternate;
}
@keyframes aagepichhe{
from{ padding-left: 40%; }
to{ padding-right: 40%; }
}
nav{

width: 60%;
display: flex;
justify-content: space-around;
  border-color: #0000;
}
nav img{
border-radius: 50% 50% 50% 50% / 50% 50% 50% 50% ;
border: visible;
  display: inline-block;
  border-color: #000;
}
.translator {
text-align: right;
}
.accordion {
  background: linear-gradient(to bottom,blue,white);;
  color: #444;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: center;
  outline: none;
  font-size: 15px;
  transition: 0.4s;
}

.active, .accordion:hover {
  background: linear-gradient(to bottom,lightblue,white);
}

.accordion:after {
  content: '\002B';
  color: #777;
  font-weight: bold;
  float: right;
  margin-left: 5px;
}

.active:after {
  content: "\2212";
}

.panel {
  padding: 0 18px;
  background-color: white;
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.2s ease-out;
}

table , th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 5px;
  text-align: left; 
  }
  tr:nth-child(odd) {background-color: blueviolet;}
  tr:nth-child(even) {background-color: mediumslateblue;}
.container {
 color: #000;
 }
 .button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}
.button1 {
  background-color: white;
  color: black;
  border: 2px solid #FF69B4;
}

.button1:hover {background-color: #FF69B4;}
.button2 {
  background-color: white; 
  color: black; 
  border: 2px solid #008CBA;
}

.button2:hover {
  background-color: #008CBA;
  color: white;
}
p{ text-align:center;}
.zoom {
  padding: 50px;
  transition: transform .2s;
  width: 200px;
  height: 200px;
  margin: 0 auto;
}

.zoom:hover {
  -ms-transform: scale(1.5); /* IE 9 */
  -webkit-transform: scale(1.5); /* Safari 3-8 */
  transform: scale(1.5); 
}
a {
	text-decoration: none;
}
</style>
</head>
<body>
<header>
<section class="navsection">
<div class="logo">
<h3>JUTE CULTIVATION</h3>
</div>
<nav>
<br>
<br>
<a href="https://www.accuweather.com/">
<img alt="wheather" src="wheather.jfif" width="70" height="70">
<br>Weather
</a>
<br>
</nav>
</section>
<h4 style="text-align: right;">Translate this page: &nbsp&nbsp</h4>

<div id="google_translate_element" class="translator"></div>

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<script type="text/javascript">
(function(){var gtConstEvalStartTime = new Date();/*

 Copyright The Closure Library Authors.
 SPDX-License-Identifier: Apache-2.0
*/
function d(b){var a=document.getElementsByTagName("head")[0];a||(a=document.body.parentNode.appendChild(document.createElement("head")));a.appendChild(b)}function _loadJs(b){var a=document.createElement("script");a.type="text/javascript";a.charset="UTF-8";a.src=b;d(a)}function _loadCss(b){var a=document.createElement("link");a.type="text/css";a.rel="stylesheet";a.charset="UTF-8";a.href=b;d(a)}function _isNS(b){b=b.split(".");for(var a=window,c=0;c<b.length;++c)if(!(a=a[b[c]]))return!1;return!0}
function _setupNS(b){b=b.split(".");for(var a=window,c=0;c<b.length;++c)a.hasOwnProperty?a.hasOwnProperty(b[c])?a=a[b[c]]:a=a[b[c]]={}:a=a[b[c]]||(a[b[c]]={});return a}window.addEventListener&&"undefined"==typeof document.readyState&&window.addEventListener("DOMContentLoaded",function(){document.readyState="complete"},!1);
if (_isNS('google.translate.Element')){return}(function(){var c=_setupNS('google.translate._const');c._cest = gtConstEvalStartTime;gtConstEvalStartTime = undefined;c._cl='en';c._cuc='googleTranslateElementInit';c._cac='';c._cam='';c._ctkk='445303.2143855006';var h='translate.googleapis.com';var s=(true?'https':window.location.protocol=='https:'?'https':'http')+'://';var b=s+h;c._pah=h;c._pas=s;c._pbi=b+'/translate_static/img/te_bk.gif';c._pci=b+'/translate_static/img/te_ctrl3.gif';c._pli=b+'/translate_static/img/loading.gif';c._plla=h+'/translate_a/l';c._pmi=b+'/translate_static/img/mini_google.png';c._ps=b+'/translate_static/css/translateelement.css';c._puh='translate.google.com';_loadCss(c._ps);_loadJs(b+'/translate_static/js/element/main.js');})();})();
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>


<div style="float:right" class="zoom"><img alt="jute" src="jute1.jfif"></div>
<button class="accordion" style="width:75%">Climate and Soils</button>
<div class="panel">
<p>i. Jute requires a warm and humid climate with temperature between 24° C to 37° C. <br> 
ii. Constant rain or water-logging is harmful.<br>
iii. The new gray alluvial soil of good depth, receiving salt from annual floods, is best for jute.<br>
iv. Flow ever jute is grown widely in sandy loams and clay loams.</p></div>
<br>
<button class="accordion" style="width:75%">Sowing of jute</button>
<div class="panel">
<p>i. Sowing of jute in midlands and high lands starts with showers in March or April and continues till early June in the western part of the jute belt.<br>
ii. Compost or firm yard manure, Phosphorus and Potash, Nitrogen fertilizers are used as a fertilizer.<br>
iii. Interculturing is essential in the early stage.  Pasts are also require for plant protection. </p>
</div>
<br>
 <button class="accordion" style="width:75%">The Fibre Extraction </button>
<div class="panel">
  <p>The jute plant's fibres  lie beneath the bark and surrounded the woody central part of the stem.To extract the fibres from the stem, the process is carried out in the following stages :
   </p>
  </div>
<br>
<div class="zoom">
<img alt="jute" src="jute2.jpeg">

</div><br>
<button class="accordion">Retting</button>
<div class="panel">
<p>Retting is a process in which the tied bundles of jute stalks are taken to the tank by which fibres get loosened and separated from the woody stalk.<br>
The bundles are steeped in water at least 60 cm to 100 cm depth.<br>
The retting process is completed in 8 to 30 days, when the barks separate out easily from the stick or wood and the fibres are ready for extraction.<br>
A development in recent years is adoption of ribbon retting technology in jute growing trade of the country.</p></div>
<br>
<button class="accordion">Stripping (Fibre Extraction) </button>
<div class="panel">
<p>Stripping is the process of removing the fibres from the stalk after the completion of retting.  Fibres are removed from the stalk by any one of the following methods  :<br>
i.Single plants are taken and their fibers are taken off.<br> 
ii.Taken off a handful of stalks,breaking it in a to and fro motion in water.<br>
iii.Washing the stalks first by standing in waist deep water and then stripping afterwards.<br>
When there is a plenty of water, bundles of stalks are laid in the pond ditches or slow moving streams and left for 5-15 days under water.The bunch of stem is held in one hand and the root end tapped lightly with a mallet.After loosens the rest of fibres, fibres are extracted and washed.</p>
</div><br>
<button class="accordion">Washing and Drying</button>
<div class="panel">
<p>i.Extracted fibres are washed in clean water.<br>
ii.The dark colour of fibres can be removed by dipping them in tamarind water for 15 to 20 minutes and again washed in clean water.<br>
iii.After squeezing excess water the fibres are hang on bamboo railing for sun drying for 2-3 days</p></div>
<br>
<button class="accordion"> Bailing and Packing</button>
<div class="panel">
<p>i.The jute fibre is graded into tops, middles, B, C and X-bottoms.<br>
ii.Packing into Kutcha bales about 250 pounds for use in the home trade.<br>
iii.They are transported to jute market or direct to jute mills.</p>
</div><br>
<button class="accordion">Harvesting </button>
<div class="panel">
<p>i.Jute is harvested any time between 120 days to 150 days when the flowers have been shed, early harvesting gives good healthy fibers.<br>
ii.The plant from 8 to 12 feet high are cut with stickles at or close the ground level.<br>
iii.In flooded land, plants are up rooted.<br>
iv.The harvested plants are left in field for 3 days for the leaves to shed.<br>
v.The stems are then made up into bundles for steeping in water.  Steeping is carried out immediately after harvest.</p>
</div>
<br>
<br><br><br>
<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}
</script>

</header>
</body>
</html>
