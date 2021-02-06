<!DOCTYPE html>
<html>
<head>
<title>Rice</title>
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
<h3>RICE</h3>
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


<div style="float:right" class="zoom"><img alt="Rice" src="rice1.jfif"></div>
<button class="accordion" style="width:75%">Choose a good location</button>
<div class="panel">
<p>Land should have right amount of soil, water and other nutrients. The land is in wet condition, specifically swamp-like conditions. Make sure the soil in the area you're planting consists of slightly acidic clay for the best results. Wherever you plant, make sure you have a reliable water source and a way to drain that water when you need to harvest.<br>Pick a location that receives full sunlight, as rice grows best with bright light and warm temperatures of at least 70° Fahrenheit (approximately 21° Celsius).<br>Consider the season – your area needs to allow for 3 to 6 months of plant and flower growth. Rice needs a long, warm growing season, so a climate like the southern United States is best. If you don't have long periods of warmth, it may be best growing your rice inside.</p>
</div><br>
<button class="accordion" style="width:75%">Soil preparation</button>
<div class="panel">
<p>Before rice can be planted, the soil should be in the best physical condition for crop growth and the soil surface is level. Land preparation involves plowing and harrowing to ‘till’ or dig-up, mix and level the soil.
Tillage allows the seeds to be planted at the right depth, and also helps with weed control. Farmers can till the land themselves using hoes and other equipment or they can be assisted by draft animals, such as buffalo, or tractors and other machinery.
Next, the land is leveled to reduce the amount of water wasted by uneven pockets of too-deep water or exposed soil. Effective land leveling allows the seedlings to become established more easily, reduces the amount of effort required to manage the crop, and increases both grain quality and yields.</p>
</div>
<br>
<button class="accordion" style="width:75%">Climate</button>
<div class="panel">
  <p>Rice crop needs a hot and humid climate. It is best suited to regions which have high humidity, prolonged sunshine and an assured supply of water. The average temperature required throughout the life period of the crop ranges from 21 to 37º C. Maximum temp which the crop can tolerate 40C to 42C.</p>
</div>
<br>
<button class="accordion" style="width:75%">Seeding</button>
<div class="panel">
<p> Gather at least 1 to 2 ounces (28.5 to 56.5 g) of rice seeds to sow. Soak the seeds in water to prep them for planting. Allow them to soak for at least 12 hours but not longer than 36 hours. Remove the seeds from the water afterward.
While your seeds are soaking, plan out where and how you want to plant them. Most prefer to plant the seeds in rows to make it easier to water and weed. Consider building trenches and blocking the ends so the water stays contained and dammed (berms can be used as well). That being said, the area doesn't need to stay flooded per se, it just needs to stay wet.</p>
</div>
<br>
<button class="accordion">Fertilizer</button>
<div class="panel"><br>
<center>
<table style="width:50%">
  <tr>
    <th>S.NO.</th>
    <th>Fertilizer</th>
    <th>Quantity (per ha)</th>
  </tr>
  <tr>
    <td>1.</td>
    <td>Nitrogen</td>
    <td>81.7 kg</td>
  </tr>
  <tr>
    <td>2.</td>
    <td>phosphorus</td>
    <td>24.3 kg</td>
  </tr>
  <tr>
  <td>3.</td>
  <td>potash</td>
  <td>13.1 kg</td>
  </tr>
</table>
  <p> Add more sufficient organic content while preparing soil.</p>
  </center>
  </div><br><br>
  <button type="button">
<a href="https://www.indiamart.com/proddetail/paddy-organic-fertilizer-1000ml-17578362212.html" class="button button1">Buy Fertilizer Here</a>
</button>
<br><br>
<button class="accordion">Planting</button>
<div class="panel">
<p>The two main practices of establishing rice plants are transplanting and direct seeding.
<br><br>•Transplanting  is the most popular plant establishment technique across Asia. Pre- germinated seedlings are transferred from a seedbed to the wet field. It requires less seed and is an effective method to control weeds, but requires more labor. Seedlings may be transplanted by either machine or hand.
<br><br>•Direct seeding involves broadcasting dry seed or pre-germinated seeds and seedlings by hand or planting them by machine. In rainfed and deepwater ecosystems, dry seed is manually broadcast onto the soil surface and then incorporated either by ploughing or by harrowing while the soil is still dry. In irrigated areas, seed is normally pre- germinated prior to broadcasting.
</p>
</div>
<br>
<button class="accordion">Caring</button>
<div class="panel">
<p><b>•Fertilization –</b> Fertilization is done in order to add substances and food elements needed by plants in the soil. Fertilizers used for rice plants are usually farmers use inorganic fertilizer, some other farmers also use organic fertilizer. For basic fertilizer application is usually given 7-10 days before planted, for example: green manure, manure, and compost. Number of approximately 10 tons/ha. 2. While artificial fertilizer is given after planting, example: ZA / Urea, DS / TS, and ZK.
<br><br>
•<b>Water maintenance –</b> Water used for irrigating rice paddy fields is water coming from the river, because the river water contains mud and dirt are very useful to increase plants fertility. Water that comes from the spring is not good for irrigating rice fields, because the water is clear, does not contain mud and dirt.

The water is fed to the paddy fields is water that comes from the secondary channels. Water is inserted into the rice field through the feed channel, by stopping the water on the secondary channel. To keep the puddles inside the paddy field remain, do not forget to make also the exhaust hole.

Entry holes and drain holes should not be made straight, It is intended that there is deposition of mud and dirt that is very useful for plant growth. If the entry and exhaust holes are made straight, then the water will continue to flow in the absence of precipitate.

Irrigating rice crops in rice fields should be considered the depth of water in accordance with the age of the plant, Water depth should be well regulated, plants 0-8 days old enough water 5 cm, while the 8-45 days old water can be added up to 10-20 cm.
<br><br>
•<b>Weeding -</b> Weeding weed done 2 stages, the first stage of weeding done at age of the plant approximately 15 days and the second stage at of plant aged 30-35 days. The weeding is done by weeding the weeds and turned off with or without using the tool, usually weeding is done in conjunction with activities of stitching.
</div>
<br>
<button class="accordion">Pesticide and diesease</button>
<div class="panel">
<p>Stem borers are major pests of rice during both kharif and summer seasons. Five
species of stem borers attack rice crop from which the yellow stem borer (YSB),
Scirpophaga incertulas is dominant. The adult moth is slender, straw coloured with a
pointed head. The female moth has a distinct black spot at the centre of fore wings.
Caterpillar is yellowish white with orange coloured head. </p>
</div><br>
<br>
<button type="button">
<a href="https://www.indiamart.com/proddetail/pesticide-for-wheat-2532399130.html" class="button button2">Buy Pesticide Here</a>
</button>
<br><br>
<button class="accordion">Harvesting</button>
<div class="panel">
<p>Harvesting is the process of collecting the mature rice crop from the field. Depending on the variety, a rice crop usually reaches maturity at around 105–150 days after crop establishment. Harvesting activities include cutting, stacking, handling, threshing, cleaning, and hauling. Good harvesting methods help maximize grain yield and minimize grain damage and deterioration.
<br>Harvesting can be done manually or mechanically:<br><br>
•Manual harvesting is common across Asia It involves cutting the rice crop with simple hand tools like sickles and knives. Manual harvesting is very effective when a crop has lodged or fallen over, however it is labor intensive. Manual harvesting requires 40 to 80 hours per hectare and it takes additional labor to manually collect and haul the harvested crop.
<br><br>•Mechanical harvesting using reapers or combine harvesters is the other option, but not so common due to the availability and cost of machinery. Following cutting the rice must be threshed to separate the grain from the stalk and cleaned. These processes can also be done by hand or machine.</p>
</div><br>
<div class="zoom">
<img alt="Rice" src="rice2.jpg">
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