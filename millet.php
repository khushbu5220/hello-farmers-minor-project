<!DOCTYPE html>
<html>
<head>
<title>Millet</title>
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
<h3>MILLET</h3>
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

<div style="float:right" class="zoom"><img alt="Millet" src="millet1.jfif"></div>
<button class="accordion" style="width:75%">Choose a good location</button>
<div class="panel">
<p>It is grown in variety of soils but good water logged and sandy soil is good for its cultivation. </p>
</div>
<br>
<button class="accordion"style="width:75%">Land Preparation</button>
<div class="panel">
<p>Sowing should be done in well prepared land to get good yield. To bring the soil to fine tilth, 2-3 harrowing should be done followed by ploughing. </p>
</div>
<br>
<button class="accordion" style="width:75%">Planting</button>
<div class="panel">
<p><b>Time of sowing:</b><br>
In less rainfall areas, sowing should be done in start July and in more rainfall areas, sowing should be done in end week of July.<br>

<b>Spacing:</b><br>
Use row to row spacing of 50cm and plant to plant spacing of 15cm. <br>
 
<b>Sowing Depth:</b><br>
Sow seeds at depth of 2.5cm. <br>

<b>Method of Sowing:</b><br>
For sowing, use dibbling or drilling method.</p>
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
    <td>45-60cm</td>
	</tr>
</table></center>
</div><br>
<button class="accordion">Seeding</button>
<div class="panel">
<p><b>Seed Rate:</b><br>For improved varieties, use 1.5kg/acre for sowing. Sowing amount can be decreased upto 1kg if sowing is done in well prepared land and uniformly. <br>
<b>Seed Treatment:</b><br>
To protect from ergot disease, dip the seeds in 20% salt solution for five minutes. Remove and destroy the seeds which are floating on water and wash remaining seeds with clean water. <br>
Then treat seeds with Thiram@3gm/kg of seeds or with Chlorpyriphos 20EC@4ml/kg of seeds.  
</p>
</div>
<br>
<button class="accordion">Fertilizer</button>
<div class="panel">
<center>
<p><b>Fertilizer Requirement (kg/acre)</b>
<table style="width:50%">
  <tr>
    <th>Soil Type</th>
    <th>Urea</th>
    <th>DAP or SSP</th>
	<th>MOP</th>
  </tr>
  <tr>
    <td>For loamy soil</td>
    <td>90</td>
    <td>55 or 150 </td>
	<td>- </td>
  </tr>
  <tr>
    <td>For sandy soil</td>
    <td>55</td>
    <td>27 or 75</td>
	<td>- </td>
  </tr>  
</table>
<br><br>
<b>Nutrient Requirement (kg/acre)</b>
<table style="width:50%">
  <tr>
    <th>Soil Type</th>
    <th>Nitrogen</th>
    <th>Phosphorus</th>
	<th>Potassium</th>
  </tr>
  <tr>
    <td>For loamy soil</td>
    <td>40</td>
    <td>24</td>
	<td>-</td>
  </tr>
  <tr>
    <td>For sandy soil</td>
    <td>25</td>
    <td>12</td>
	<td>-</td>
  </tr>
  
</table></center>
<br>
<center>Add more sufficient organic content while preparing soil.</p></center>
  </div>
  <br>
  <br>
  <button type="button">
<a href="https://www.indiamart.com/proddetail/organic-pearl-millet-fertilizer-19263152755.html" class="button button1">Buy Fertilizer Here</a>
</button>
</div>
<br><br>
<button class="accordion">Caring</button>
<div class="panel">
<p><b>Fertilization –</b><br>For loamy soil, use nitrogen@40kg/acre (urea@90kg/acre) and phosphorus@24kg/acre (DAP@55kg/acre or SSP@150kg/acre). For sandy soil, use nitrogen@25kg/acre (urea@55kg/acre) and phosphorus@12kg/acre (DAP@27kg/acre or SSP@75kg/acre).
<br><b>Note:</b> <br>
-In zinc deficiency land, add zinc heptahybrid 21% @10kg/acre or zinc sulphate monohybrid @6.5kg/acre. 
-Use potash element (MOP) when deficiency is detected on soil testing. 
-When DAP@27kg/acre and 55kg/acre is added then lowers the amount of Urea upto 10-20kg/acre.
 </p>
</div>
<br>
<button class="accordion">Pesticide and diesease</button>
<div class="panel"> 
<p><b>Pest and their control:</b><br>
i.<b>Root bug:</b>  If infestation is observed, to control do dusting of Methyl Parathion 2%@10kg/acre.
<br>
ii.<b>Blue beetles:</b>To control blue beetles do spray of 1.5% Quinalphos@250ml per acre.
<br><br>
<b> Disease and their control:</b><br>
i.<b>Downy Mildew:</b>In severe infestation, white growth appears on both upper and lower side of leaves. Earhead is transformed into leafy structure. It is spread rapidly in Cloudy weather.
<br>If infestation is observed, to control take spray of Metalaxyl MZ@30gm/15Ltr of water. If necessary repeat spray with interval of 15 days. 
<br>
ii.<b>Ergot:</b>  Honeydew like substance is secretes on earheads. After 10-15days these droplet dry and turn into dark brown to black color. Seeds are replaced with black color fungus i.e sclerotia.
<br>To protect from ergot disease, dip the seeds in 20% salt solution for five minutes. Remove and destroyed seeds which are floating on water and wash remaining seeds with clean water. As a preventive measure, at time of earhead formation, take spray of Zineb or Mancozeb@2gm/Ltr of water. Take two-three spray with interval of 3 days. 
<br>
iii.<b>Smut:</b>As a preventive measure grow smut resistant varieties. If infestation is observed, remove infected plants and destroyed them away from field. Take spray of Mancozeb@2gm/Ltr of water.
<br>
iv.<b>Rust:</b> Reddish brown to reddish orange spots are developed on foliage.
<br>If infestation is observed, to control take spray of Mancozeb 75WP@2gm/Ltr water.  If necessary repeat sprays with interval of 8 days.
</p>
</div>
<br><br>
<button type="button">
<a href="https://www.google.com/search?q=pesticide+for+millets&rlz=1C1CHBD_enIN921IN921&hl=en&sxsrf=ALeKk02Pt3X37_GqcC9S86EUlmt3zNZvSw:1602160709063&source=lnms&tbm=shop&sa=X&ved=2ahUKEwir7L7fgaXsAhXLfn0KHdKjBoQQ_AUoAXoECBkQAw&biw=1536&bih=631" class="button button2">Buy Pesticide Here</a>
</button>
<br>
<br>
<button class="accordion">Harvesting</button>
<div class="panel"> 
<p>When grains become hard containing sufficient moisture, crop is ready for harvesting. Remove earheads from standing crop with help of sickle. Some farmer cut entire plant with sickle. After harvesting collect and stalk crop in open space and dry them for four-five days.</p>
</div><br>
<button class="accordion">Post Harvesting</button>
<div class="panel"> 
<p>After proper drying, do threshing operation and separate grains from earheads. Then carry out cleaning operation. Sun Dry clean seeds and bring moisture level to 12-14%. Fill grains in gunny bags and stored them in dry place.
</p>
</div>
<div class="zoom">
<img alt="Millet" src="millet2.jfif">
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