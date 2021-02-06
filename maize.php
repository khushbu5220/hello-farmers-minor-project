<!DOCTYPE html>
<html>
<head>
<title>Maize</title>
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
<h3>MAZIE</h3>
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

<div style="float:right" class="zoom"><img alt="Maize" src="maize1.jfif"></div>
<button class="accordion" style="width:75%">Choose a good location</button>
<div class="panel">
<p>A good seedbed for maize should be fine but compact, and free from weeds. It is desirable that the previous crop refuse is buried under with a mouldboard plough. In due course, two or three ploughings with the wooden plough are given. In case the tractor is used, one ploughing followed by a couple of diskings is generally adequate.<br>
For kharif cultivation, it is essential that adequate drainage is provided. It may be provided in the form of very shallow surface drains at 40-50 m apart (depending on the slope and the texture of the soil) across the slope and connected to main outlet. Shallow drains do not obstruct the movement of the cattle or tractors during cultivation. Surface drains should be provided during sowing.</p>
</div>
<br>
<button class="accordion" style="width:75%">Soil preparation</button>
<div class="panel">
<p>Maize requires fertile, deep and well drained soils. However, it can be grown on any type of soil, ranging from deep heavy clays to light sandy ones.Accordingly the provision of proper drainage is essential for the successful cultivation of this crop. The slight sandy soils greatly facilitated drainage, but have a relatively poor water holding capacity; on the contrary, very heavy soils, with excellent water holding capacity, have relatively poor drainage. Hence, soils ideally suited for maize cultivation should have adequate water holding capacity and should also provide for good drainage. Over 85 per cent of the maize acreage is own under rain fed conditions during the monsoon when over 80 per cent of the annual rainfall is received.<br>
<b>ph of soil-</b> not deviate from the range 7.5 to 8.5 </p>
</div>
<br>
<button class="accordion" style="width:75%">Seeding</button>
<div class="panel">
<p> Seventeen to 20 kg of seed for the grain crop and 35-40 kg per hectare for the fodder crop is needed.</p></div>
<br>
 <button class="accordion" style="width:75%">Climate</button>
<div class="panel">
  <p>Maize is essentially a warm weather crop. It is grown under extremely divergent climatic conditions in different parts of the world, ranging from tropical to temperate regions. It is widely cultivated from the sea level upto altitudes of 2,500 m. It can be successfully grown where the night temperature does not go below 15.60C (600F). It cannot withstand frost any stage of its growth.
  </p></div>
<br>
<button class="accordion">Fertilizer</button>
<div class="panel">
<br>
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
    <td>100-120 kg</td>
  </tr>
  <tr>
    <td>2.</td>
    <td>phosphorus</td>
    <td>60 kg</td>
  </tr>
  <tr>
  <td>3.</td>
  <td>potash</td>
  <td> 40kg</td>
  </tr>
  <tr>
  <th>4.</th>
  <th>zinc sulphate</th>
  <th>10-20 kg</th>
</table>
  <p> Add more sufficient organic content while preparing soil.</p>
  </center></div>
  <br><br>
  <button type="button">
<a href="https://www.indiamart.com/company/40023325/other-products.html#fertilizers-for-maize-crop" class="button button1">Buy Fertilizer Here</a>
</button><br>
<br>
<button class="accordion">Planting</button>
<div class="panel">
<p>Maize is sown in rows, 60-75 cm apart, whereas the plants in the row are spaced at 20 to 25 cm. A population of 60-75 thousand plants per hectare at harvest are required for obtaining the optimum yield. Sowing in rows is generally done with drill or by dropping the seed behind the plough. The practice of broading, particularly under rain fed conditions and for fodder maize is still prevalent in several parts of country.</p>
</div><br>
<button class="accordion">Caring</button>
<div class="panel">
<p>They generally do well in favorable climate conditions and require less care. And if you take some extra care, it will be good and will ensure maximum production.<br>
<b>Fertilization –</b> Among all the cereals, maize in general and hybrids in particular are responsive to nutrients applied either through organic or inorganic sources. The rate of nutrient application depends mainly on soil nutrient status/balance and cropping system. For obtaining desirable yields, the doses of applied nutrients should be matched with the soil supplying capacity and plant demand (Site-specific nutrient management approach) by keeping in view of the preceding crop (cropping system). Response of maize to applied organic manures is notable and hence integrated nutrient management (INM) is very important nutrient management strategy in maize based production systems. Therefore, for higher economic yield of maize, application of 10 t FYM ha-1, 10-15 days prior to sowing supplemented with 150-180 kg N, 70-80 kg P2O5, 70-80 kg K2O and 25 kg ZnSO4 ha-1 is recommended. Full doses of P, K and Zn should be applied as basal preferably drilling of fertilizers in bands along the seed using seed-cum-fertilizer drills. Nitrogen should be applied in 5-splits as detailed below for higher productivity and use efficiency. N application at grain filling results in better grain filling. Therefore, nitrogen should be applied in five splits as per below mentioned for higher N use efficiency.<br>
<b>Watering –</b>The irrigation water management depends on season as about 80 % of maize is cultivated during monsoon season particularly under rainfed conditions. However, in areas with assured irrigation facilities are available, depending upon the rains and moisture holding capacity of the soil, irrigation should be applied as and when required by the crop and first irrigation should be applied very carefully wherein water should not overflow on the ridges/beds. In general, the irrigation should be applied in furrows up to 2/3rd height of the ridges/beds. Young seedlings, knee high stage (V8), flowering (VT) and grain filling (GF) are the most sensitive stages for water stress and hence irrigation should ensured at these stages. In raised bed planting system and limited irrigation water availability conditions, the irrigation water can also be applied in alternate furrow to save more irrigation water. In rainfed areas, tied-ridges are helpful in conserving the rainwater for its availability in the root zone for longer period. For winter maize, it is advisable to keep soil wet (frequent & mild irrigation) during 15 December to 15 February to protect the crop from frost injury.<br>
<b>Weeding -</b>Weeds are the serious problem in maize, particularly during kharif /monsoon season they compete with maize for nutrient and causes yield loss up to 35 %. Therefore, timely weed management is needed for achieving higher yield. Atrazine being a selective and broad-spectrum herbicide in maize checks the emergence of wide spectrum of weeds. Pre-emergence application of Atrazine (Atratraf 50 wp, Gesaprim 500 fw) @ of 1.0-1.5 kg a.i ha-1 in 600 litre water, Alachlor (Lasso) @ 2-2.5 kg a.i ha-1, Metolachlor (Dual) @ 1.5-2.0 kg a.i ha-1, Pendamethalin (Stomp) @ 1-1.5 kg a.i. ha-1 are effective way for control of many annual and broad leaved weeds. While spraying, following precautions should be taken care by the person during spray, he should move backward so that the Atrazine film on the soil surface may not be disturbed. Preferably three boom flat fan nozzle should be used for proper ground coverage and saving time. One to two hoeing are recommended for aeration and uprooting of the remaining weeds, if any. While doing hoeing, the person should move backward to avoid compaction and better aeration. For areas where zero tillage is practiced, pre-plant application (10-15 days prior to seeding) of non-selective herbicides viz., Glyphosate @ 1.0 kg a.i. ha-1 in 400-600 litre water or Paraquat @ 0.5 kg a.i. ha-1 in 600 litre water is recommended to control the weeds. Under heavy weed infestation, post-emergence application of Paraquat can also be done as protected spray using hoods.</p>
</div><br>
<button class="accordion">Pesticide and diesease</button>
<div class="panel">
<p>i.<b>Stem borer:</b> These borers feed on leaves in the earlier stages. Later on they bore into the stem and cobs, rendering the plant unproductive.<br>
Control:<br>
- After harvest, the stalks and stubbles should be collected from the field and burnt.<br>
- Crop can be sprayed twice with Thiodan 35 EC @ 27 ml in 18 litres water, once 20-25 days after germination and the second spray at the time of grain formation (in endemic areas).
<br>
ii.<b>Red Hairy Caterpillars:</b> Caterpillars feed and destroy the whole plant if the attack is in the early stages of growth.<br>
Control:<br>
- Egg masses and young caterpillars should be collected as soon as detected, and destroyed.<br>
- The field should be ploughed out after the crop is harvested, so as to expose pupae.<br>
- Thiodan 35 EC @ 27 ml in 18 litres water should be sprayed only as last resort.<br>
iii.<b>Aphids:</b> Tiny, soft bodied insects, usually green in colour. Nymphs and adults suck the sap from leaves and young shoots.<br>
Control:<br>
-The crop can be sprayed with Rogor 30 EC @ 18 ml in 18 litres water.<br>
iv.<b>Grass hoppers:</b> Short-winged hoppers, laying eggs in the soil at a depth of 7.5 to 20 cms, adults feed on foliage.<br>
Control:<br>
-Thiodan 35 EC @ 25 ml or Ekalux 25 EC@ 28 mi in 18 litres water can be sprayed.<br>
v.<b>Termites:</b> These pests attack young seedlings as well as mature plants; attack is also visible on roots and lower parts of the plants.<br>
Control:<br>
Thiodan 4 % Dust @ 12-15 kg per hectare is applied and mixed well with the soil.</p></div>
<br><br>
<button type="button">
<a href="https://www.indiamart.com/proddetail/maize-bio-pesticides-16484809488.html" class="button button2">Buy Pesticide Here</a>
</button><br><br>
<button class="accordion">Harvesting</button>
<div class="panel">
<p>The maize crop sown for grain is harvested when the grains are nearly dry and do not contain more than 20 per cent moisture. The appearance of the plant may be misleading, particularly in the case of high yielding hybrids and composites whose grains are dry, while the stalk and leaves may be still green. Ears are removed from the standing crop. Harvested ears are dried in the sun before shelling. In the case of the late-sown crop, farmers prefer to harvest the whole plants and pile them, and the ears are removed are removed later. Maize stalks are used as cattle feed or fuel. In fact, no part of the maize plant, even the cobs from which the grains have been removed, is left unused.</p>
</div></div>
<div class="zoom">
<img alt="Maize" src="maize2.jfif">
</div>
<br><br><br><br>
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