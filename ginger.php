<!DOCTYPE html>
<html>
<head>
<title>Ginger</title>
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
<h3>GINGER</h3>
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

<br><br>
<p>Ginger, known as "Adrakh" is most important major spice crop of India. India is leading producer of Ginger. Karnataka, Orissa, Assam, Meghalaya, Arunachal Pradesh and Gujarat are major ginger producing states.</p><br>
<div style="float:right" class="zoom"><img alt="Ginger" src="ginger1.jfif"></div>
<button class="accordion"style="width:75%">Soil</button>
<div class="panel">
<p>It gives best results, when grown on well drained loamy soils also in sandy or clay loam or red loamy soils. Avoid water stagnation in field as it cannot survive in water logged conditions. Ideal pH range of 6-6.5 is required for good growth of crop. Avoid soil on which previously ginger was taken. Do not cultivate ginger crop on same site year after year.</p>
</div>
<br>
<button class="accordion"style="width:75%">Land Preparation</button>
<div class="panel">
<p>Prepare field by ploughing land two - three times. After ploughing do planking operation. For turmeric planting, beds of 15 cm height, 1 m width and of convenient length are prepared. Keep distance of 50 cm between beds.</p>
</div><br>
<button class="accordion"style="width:75%">Sowing</button>
<div class="panel">
<p><b>Time of sowing</b><br>
Sowing is done by first week of May- June.<br>
<b>Spacing</b><br>
keep plant distance of 15-20 cm between the row and 30 cm between two plant.<br>
<b>Sowing Depth</b><br>
Depth should be near about 3-4 cm.<br>
<b>Method of sowing</b><br>
Direct sowing also transplanting method is used for planting.</p>
</div><br>
<button class="accordion" style="width:75%">Climate</button>
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
    <td>12-35°C</td>
    <td>1500mm</td>
	<td>25-33°C</td>
	<td>30-35°C</td>
	</tr>
</table></center>
</div><br>
<button class="accordion">Seeding</button>
<div class="panel">
<p><b>Seed Rate:</b>For sowing, select fresh and diseased free rhizomes (mother rhizomes as well as fingers) are used. Seed rate of 480-720 kg is sufficient for sowing one acre land.<br>
<b>Seed Treatment:</b>
Before sowing, carry out rhizome treatment with Mancozeb@3 gm/Ltr of water. Dip rhizomes for 30min in solution. It will protect rhizomes from fungal infestation. After treatment, dry rhizomes in shade for 3-4 hours.
</p>
</div>
<br>
<button class="accordion">Fertilizer</button>
<div class="panel">
<br>
<center>
<p><b>Fertilizer Requirement</b></p>
<table style="width:50%">
  <tr>
    <th>S.NO.</th>
    <th>Fertilizer</th>
    <th>Quantity (per acre)</th>
  </tr>
  <tr>
    <td>1.</td>
    <td>Urea</td>
    <td>55</td>
  </tr>
  <tr>
    <td>2.</td>
    <td>SSP</td>
    <td>60</td>
  </tr>
  <tr>
  <td>3.</td>
  <td>Muriate of Potash</td>
  <td>16</td>
  </tr>
  
</table>
<br><br>
<p><b>Nutrient Requirement</b></p>
<table style="width:50%">
  <tr>
    <th>S.NO.</th>
    <th>Fertilizer</th>
    <th>Quantity (per acre)</th>
  </tr>
  <tr>
    <td>1.</td>
    <td>Nitrogen</td>
    <td>25</td>
  </tr>
  <tr>
    <td>2.</td>
    <td>phosphorus</td>
    <td>10</td>
  </tr>
  <tr>
  <td>3.</td>
  <td>potash</td>
  <td>10</td>
  </tr>
</table><br>
  <p> At time of field preparation, apply well decomposed cow dung@150 qtl/acre in soil. Apply N:P:K@25:10:10 kg/acre in form of Urea@55 kg/acre, SSP@60 kg/acre and MOP@16 kg/acre. Full dose of Potash and Phosphorus are applied at time of rhizome planting. Nitrogen dose is given in two equal splits. First half dose of N is given 75 days after planting and remaining half dose is given three month after planting.</p>
  </center></div><br><br>
  <button type="button">
<a href="https://www.agriplexindia.com/index.php/chemical/fertilizers/spices/ginger.html" class="button button1">Buy Fertilizer Here</a>
</button>
</div>
<br>
<br>
<button class="accordion">Weeding</button>
<div class="panel">
<p>Third day after plantation take spray of Atrazine@4-5 gm/ltr on moist soil. To kill weeds that grow after first spray of weedkiller, 12-15 days after plantation take spray of Glyphosate@4-5 ml/Ltr water. After weedicide application, cover field with green manure or paddy straw.<br>
Earthing up operation is carried to enhanced root development. 50-60 days after planting take first earthing operation and next after 40 days.</p>
</div><br>
<button class="accordion">Irrigation</button>
<div class="panel">
<p>It is grown as rainfed crop so provide irrigation depending upon rainfall intensity and rainfall frequency.

After planting, crop is mulched with green leaves@50 qtl/acre. Repeat mulching@20 qtl/acre after every fertilizer application.   </p>
</div><br>
<button class="accordion">Pesticide and diesease</button>
<div class="panel">
<p><b>Pest and their control:</b><br>
i.<b>Rhizome fly: </b>If Infestation of rhizome fly is observed in field, To control take spray of Acephate 75SP@15 gm in 10 ltr of water. Repeat the spray with 15 days interval.<br>
ii.<b>Shoot borer:</b> If infestation of shoot borer is observed to control take spray of Dimethoate@2 ml/Ltr or Quinalphos@2.5 ml/ltr of water.<br>
iii.<b>Sucking pest:</b> To control sucking pests take spray of neem based pesticide like Azadirachtin 0.3EC@ 2 ml/Ltr of water.<br>
<br>
<b> Disease and their control:</b><br>
i.<b>Root or Rhizome Rot:</b> To prevent crop from root rot, drench crop with Mancozeb@3 gm/Ltr or Metalaxyl@1.25 gm/Ltr at 30,60 and 90 days after planting.<br>
ii.<b>Bacterial wilt: </b>To prevent crop from bacterial wilt, drench plants with Copper oxychloride@3 gm/ltr of water immediately after disease is seen in field.<br>
iii.<b>Anthracnose:</b> If infestation is observed, to control take spray of Hexaconazole@10 ml or Mancozeb 75WP@25 gm/10 ltr of water+ 10 ml sticker.<br>
iv.<b>Leaf Blotch:</b> If infestation is observed to control take spray of Mancozeb@20 gm or Copper oxycloride@25 gm/10 ltr of water.<br>
v.<b>Blight and leaf spots: </b>If infestation of blight and leaf spot is observed, take spray of Mancozeb@30 gm or Carbendazim@10 gm in 10 ltr water by interval of 15-20 alternatively. Or spray with Propiconazole@1 ml/Ltr of water.<br>
</p>
</div><br>
<br><button type="button">
<a href="https://www.agriplexindia.com/index.php/chemical/pesticides/spices/ginger.html?gclid=CjwKCAiA_Kz-BRAJEiwAhJNY7xChTqWp2j6QciBvDih9MqdFvhi8gHO8PZP3pzixqsNGLTpibjLy1BoCydQQAvD_BwE" class="button button2">Buy Pesticide Here</a>
</button>
<br><br>
<button class="accordion">Harvesting</button>
<div class="panel">
<p>In 8months crop is ready for harvesting. For fresh spice purpose, ginger is harvested from 6th month and if it is to be used for processing, then it is harvested after 8 months. Right time for harvesting of ginger is when leaves gets yellow and dry out completely. Remove rhizomes by dugging and after harvesting clean rhizomes by thoroughly washing in water for 2 to 3 times. Then dry them in shades for 2-3days.</p>
</div><br>
<button class="accordion">Post Harvesting</button>
<div class="panel">
<p>For dry ginger purpose, only the outer skin is to be peeled and then dried in the sun for a week. Outer skin is removed with help of special knife or split bamboos with pointed end. Yield of dry ginger is about 16-25% of green ginger.<br>
<b>Storage:</b> Fresh, disease free rhizomes are selected then treated with solution of Carbendazim + Mancozeb@40 gm/10 ltr of water for 30 min. It will prevent rotting of rhizome in storage. Then dry the rhizomes in shade. Store dried rhizome in pit of convenient size, covered with plank having 2-3 holes for aeration. Before storing rhizomes in pit, spread 1 inch thickness sand layers.
</p>
</div><br>
<div class="zoom">
<img alt="Ginger" src="ginger2.jfif">
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