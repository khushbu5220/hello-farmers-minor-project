<!DOCTYPE html>
<html>
<head>
<title>Oats</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
*{ margin: 0; padding: 0;}

header{
width: 100%;
height: 650%;
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
<h3>OATS</h3>
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
<div style="float:right" class="zoom"><img alt="Oat" src="oat1.jfif"></div>
<button class="accordion"style="width:75%">Choose a good location</button>
<div class="panel">
<p>It can be cultivated on all kinds of soil. Well drained loamy soil rich in organic matter is suitable for cultivation. pH range of 5 - 6.6 is optimum for oats.</p>
</div>
<br>
<button class="accordion"style="width:75%">Soil preparation</button>
<div class="panel">
<p>Land should be properly prepared to form a weed free field. Ploughing should be done 6-8 times to gain higher yields. Oat crop can tolerate higher pH levels than barley and wheat. Propagation in Oats is done through seeds.</p>
</div>
<br>
<button class="accordion" style="width:75%">Climate</button>
<div class="panel">
  <center>
<table style="width:50%">
  <tr style="background-color:orchid">
    <th>Temperature</th>
    <th>Rainfall</th>
	</tr>
  <tr style="background-color:magenta">
    <td>20-30°C</td>
    <td>80-100mm</td>
	</tr>
</table></center>
</div><br>
<button class="accordion" style="width:75%">Seeding</button>
<div class="panel">
<p><b>Seed Rate:</b>Seed rate of 25 kg is required for one acre land.<br>

<b>Seed Treatment:</b>
Seed should be treated with Captan or Thiram @3 gm/kg of seeds to protect seeds from various fungal and pathogenic diseases.</p>
</div>
<br>
<button class="accordion">Fertilizer</button>
<div class="panel">
<center>
<p><b>Fertilizers Requirement (kg/Acre)</b></p>
<table style="width:50%">
  <tr>
    <th>Urea</th>
    <th>SSP</th>
    <th>MOP)</th>
  </tr>
  <tr>
    <td>66</td>
    <td>50</td>
    <td>-</td>
  </tr>
</table>
<br><br><b>Nutrients Value (kg/Acre)</b>
<table style="width:50%">
  <tr>
    <th>Nitrogen</th>
    <th>Phosphorus</th>
    <th>Potash</th>
  </tr>
  <tr>
    <td>30</td>
    <td>8</td>
    <td>-</td>
  </tr>
</table>
<br>
Add more sufficient organic content while preparing soil.
  </center>
  </div><br><br>
  <button type="button">
<a href="https://www.indiamart.com/company/42366729/other-products.html" class="button button1">Buy Fertilizer Here</a>
</button>
<br><br>
<button class="accordion">Planting</button>
<div class="panel">
<p><b>Time of sowing:</b>
Second week of October to last week of October is optimum time for sowing seeds.<br>

<b>Spacing:</b>
Spacing of 25-30 cm should be kept between rows.<br>
 
<b>Sowing Depth:</b>
Depth should be 3-4 cm.<br>

<b>Method of Sowing:</b>
Sowing is done through drilling method, zero tillage drill.</p>
</div>
<br>
<button class="accordion">Caring</button>
<div class="panel">
<p>•<b>Fertilization –</b>FYM should be added at the time of land preparation. Apply 30 kg of Nitrogen in form of (Urea 66 kg) and 8 kg of Phosphorus (in form of SSP@50 kg) per acre. Apply half dose of nitrogen and full dose of Phosphorus at the time of sowing. Apply remaining amount of Nitrogen, 30-40 days after sowing
<br><br>
•<b>Watering –</b>Oats are mainly cultivated as rain-fed crop. But if they are grown as irrigated crop, two irrigations should be given at 25-28 days interval from sowing.
<br>Apply first irrigation at crown root initiation i.e 25 to 30 days after sowing. At panicle emergence stage applies second irrigation.
<br><br>
•<b>Weeding -</b>Weed management is not necessary in case if plants become successful to make a good crop stand. Weeds are less likely to occur in oats. 1-2 hoeing can be given as intercultural operations.
<br>To control narrow leaf weeds use Isoproturon 75%WP@500 gm/100 Ltr of water or Pendimethalin 30% EC@1.4 Ltr/100 ltr water for one acre. </p>
</div>
<br>
<button class="accordion">Pesticide and diesease</button>
<div class="panel">
<p><b>Insect-Pest and Their Management:</b><br>
i.<b>Aphid:</b> It is the main pest of oats. It causes considerable damage by sucking of cell sap. It results in distortion and mottling of leaves. Dimethoate 30EC @0.03% helps to prevent aphid attack. This fodder should not be fed to animals for at least 10-15 days after spraying.
<br><br>
<b> Disease and Their Management:</b><br>
i.<b>Leaf Blotch:</b> Fungus establishes itself inter-cellular, tends to produce conidiophores which emerges through stomata and bears single terminal conidia. These conidia are brown to black in color, tapered at apex, 4-6 spectate. Primarily infection occurs through these conidia. Secondary infection occurs through Air-borne spores. Seed treatment should be done properly to manage this disease.
<br><br>
ii.<b>Root Rot:</b> It is caused due to root parasite. It can be cured by proper seed treatment during seed sowing.</p>
</div><br><br>
<button type="button">
<a href="https://www.google.com/search?rlz=1C1CHBD_enIN921IN921&hl=en&biw=1536&bih=631&tbm=shop&sxsrf=ALeKk00It3sphwJ2UkVmMtacATuzp2XF_Q%3A1602160735944&ei=Xwh_X4SFOcfarQHm-6mYCA&q=pesticide+for+oats&oq=pesticide+for+oats&gs_lcp=Cgtwcm9kdWN0cy1jYxADOgQIIxAnOgIIADoECAAQGFDBswRYnsgEYLjRBGgAcAB4AIAB5QiIAfI2kgENMi0yLjEuMC4xLjUuMZgBAKABAaoBD3Byb2R1Y3RzLWNjLXdpesABAQ&sclient=products-cc&ved=0ahUKEwjEsKfsgaXsAhVHbSsKHeZ9CoMQ4dUDCAs&uact=5" class="button button2">Buy Pesticide Here</a>
</button>
<br>
<br>
<button class="accordion">Harvesting</button>
<div class="panel">
<p>Oats are fully mature and ready to harvest after 4-5 months of sowing. To avoid grain shedding, Crop should be harvested in early April month.</p>
</div>
<br>
<div class="zoom">
<img alt="Oat" src="oat2.jfif">
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
</header>
</body>          
</html>  