<!DOCTYPE html>
<html>
<head>
<title>Neem</title>
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
<h3>NEEM</h3>
</div>
<br>
<nav>
<br>
<br>
<a href = "https://www.accuweather.com/">
<img alt="weather" src="wheather.jfif" width="70" height="70">
<br> Weather
</a>
<br><br>
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

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script><br><br>

<p>It is popularly known as the miracle tree as it has multipurpose use. Neem oil extracted from its seeds is used in medicines, pest control and cosmetics etc. Its leaves are used to treat the Chickenpox. In south India its wood is used to make the furniture. Neem cake is widely used in India as fertilizer. This has been used as a medicinal plant for long time and provides almost all the requirements of rural areas. It is a tall evergreen tree up to 100 feet tall. It blossoms in spring with the small white flowers.
</p><br>
<div style="float:right" class="zoom"><img alt="neem" src="neem1.jpg"></div>
<button class="accordion" style="width:75%">Soil</button>
<div class="panel">
  <p>It can easily be grown in the dry, stony, shallow, clayey soils also on saline and alkaline soils, with pH upto 8.5. It gives best result when grown in black cotton soil and deep well drained soil. It cannot withstand water-logged areas and poorly drained soils. </p>
</div>
<br>
<button class="accordion" style="width:75%">Land Preparation</button>
<div class="panel">
<p>Plough the land and break clods and clumps. </p>
</div>
<br>
<button class="accordion" style="width:75%">Sowing</button>
<div class="panel">
<p><b>Time of sowing</b><br>
Transplantation of seedling (about four to six month old) should be done during monsoon periods.<br>
<b>Spacing</b><br>
Nursery preparation: Prepare raise bed of 10 m length, 1 m breadth and 15 cm height. Mix well decomposed cow dung, sand and local soil in ration of 1:1:3 and mix on top of raised bed. Sow the seeds at distance of 15-20 cm and to depth of 1-1.5 cm. Give light irrigation after sowing.
<br> 
<b>Sowing Depth</b><br>
Sow the seeds at depth of 1-1.5 cm.
<br>
<b>Method of Sowing</b><br>
Neem is sown by direct sowing and transplanting method.
<br></p>
</div>
<br>
<button class="accordion">Transplanting method</button>
<div class="panel">
<p>From tree collect ripe seeds. Remove pulp and wash seed with water. Seeds are dried in shade for 3-7 days. Prepared nursery and sow seeds at distance of 15-20 cm. Seedlings are ready in 5-6 weeks. Remove seedlings and plant them in polythene begs. Fill polythene begs in silt, sand, clay and farmyard manure@1:1:1:1. 
</p>
</div>
<br>
<button class="accordion">Transplantation</button>
<div class="panel">
<p>When seedlings become four to six month old i.e. plant become 15 to 22.5 cm old, are ready for transplantation. Dug pits of 30x30x30 cm dug at distance of 5x5m (65plant/acre). Transplantation should be done during monsoon periods. Depending upon rainfall, give irrigation once in 2-3 days. Afterwards water can be given, once in 7-10 days.
</p>
</div>
<br>
<button class="accordion">Seed</button>
<div class="panel">
<p><b>Seed Rate:</b>
Sow one seed per pit.</p>
</div>
<br>
<button class="accordion">Climate</button>
<div class="panel">
  <center>
<table style="width:50%">
  <tr style="background-color:orchid">
    <th>Temperature</th>
    <th>Rainfall</th>
	<th>Harvesting Temperature</th>
	<th>Sowing Temperature</th>
  </tr>
  <tr style="background-color:magenta">
    <td>25-30°C</td>
    <td>400-1200mm</td>
	<td>20-30°C</td>
    <td>25-30°C</td>
  </tr>
</table></center>
</div><br>

<button class="accordion">Fertilizer</button>
<div class="panel">
<center>
<b>Fertilizer Requirement (gm/acre)</b><br>
<table style="width:50%">
  <tr>
    <th>VAM</th>
    <th>AZOSPIRILLUM</th>
	<th>PHOSPHOBACTERIA</th>
  </tr>
  <tr>
    <td>22</td>
    <td>20</td>
    <td>20</td>
  </tr>
</table></center>
<br> 
<p>Apply 50gm of VAM fertilizer, 20gm of Azospirillum and Phosphobacteria to be applied regularly.
</p>
</div>
<br>
<button class="accordion">Irrigation</button>
<div class="panel">
<p>Proper watering and weeding are very essential during the first two years for proper establishment. Apply irrigation, after each weeding and hoeing. In case of water scarcity, do spot application of water, once in 10 days will help the crop to survive in drought conditions. Do mulching around the tree basins, it will help to conserved water.</p>
</div><br>
<button class="accordion">Weed Control</button>
<div class="panel">
<p>Carry out weeding operation at juvenile and maturity stage. Keep field clean and weed free. Presence of heavy weeds can cause poor growth. Proper watering and weeding are very essential during the first two years for proper establishment and growth of neem crop. Weedings also help in loosening the soil for better aeration and root growth.</p>
</div>
<br>
<button class="accordion">Harvesting</button>
<div class="panel">
<p>Plants start bearing fruits from 3-5 years of age after plantation. In northern region tree bears flowers in March-April and fruits mature in June-July months. Depending upon rainfall, soil type fruits yield ranges from 30-100 kg per tree. Kernels are well dried by spreading them on hard ground in shade and then they are stored. To avoid fungus growth, store kernels in Jute sack. Storing seed for more than one month will decrease rate of growth. Do not dry kernels if immediate sowing is to be done.
</p>
</div>
<br>
<button class="accordion">Post Harvesting</button>
<div class="panel">
<p>Neem has multiple uses. The wood is used as timber for construction, furniture etc. Neem leaves are good fodder for sheeps and camels. Neem seed yields 20-30% oil content. Neem oil yields azadirachtin which is used as insect repellent. </p>
</div><br>
<div class="zoom">
<img alt="neem" src="neem2.jpg">

</div><br><br><br><br>
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
<br><br><br><br>
</header>
</body>
</html>