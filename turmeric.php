<!DOCTYPE html>
<html>
<head>
<title>Turmeric</title>
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
<h3>TURMERIC</h3>
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
<p>Turmeric is a perennial herb, native of south Asia. It is also known as "Indian Saffron" is sacred spice of India. It is principal ingredient in Indian culinary and used as flavouring and coloring agent. It is used in drug and cosmetic industry because of its anti-cancer and anti-viral property. Turmeric has special place in religious and ceremonial occasions. Rhizomes are used for propagation. Its leaves are long, broad and of bright green color and flowers are of pale yellow color. India is world largest producer, consumer and exporter of turmeric. In India, Andhra Pradesh, Orissa, West Bengal, Karnataka and Kerala are major producers of Turmeric.</p><br>
<div style="float:right" class="zoom"><img alt="Turmeric" src="Turmeric1.jfif"></div>
<button class="accordion"style="width:75%">Soil</button>
<div class="panel">
<p>It gives best results, when grown on well drained loamy soils also in sandy or clay loam or red loamy soils. Avoid water stagnation in field as it cannot survive in water logged conditions.</p>
</div>
<br>
<button class="accordion"style="width:75%">Land Preparation</button>
<div class="panel">
<p>Prepared field by ploughing land, two - three times. After ploughing do planking operation. For turmeric planting, beds of 15cm height, 1m width and of convenient length are prepared. Keep distance of 50cm between beds.</p>
</div><br>
<button class="accordion"style="width:75%">Sowing</button>
<div class="panel">
<p><b>Time of sowing</b><br>
To get higher yield, complete rhizome sowing in field by April end. It is also raised by transplanting method, for that rhizome transplantation should be completed within first fortnight of June. For transplanting 35-45 days old seedling is used.  
<br>
<b>Spacing</b><br>
Sow rhizomes in line and keep distance of 30 cm between the row and 20 cm between two plant. After rhizome planting, straw mulch@ 2.5 ton/acre is applied in field.
<br>
<b>Sowing Depth</b><br>
Depth of soil should not exceed 3 cm.
<br>
<b>Method of sowing</b><br>
Direct sowing and transplanting method is used for planting.</p>
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
    <td>24-28°C</td>
    <td>70-230cm</td>
	<td>20-22°C</td>
	<td>25-34°C</td>
	</tr>
</table></center>
</div><br>
<button class="accordion">Seeding</button>
<div class="panel">
<p><b>Seed Rate:</b>For sowing, select fresh and diseased free rhizomes (mother rhizomes as well as fingers) are used. Seed rate of 6-8 qtl is sufficient for sowing one acre land.<br>
<b>Seed Treatment:</b>
Before sowing, carry out rhizome treatment with Quinalphos 25EC@20ml + Carbendazim@10gm/10Ltr of water and prepare solution. Then dip rhizomes for 20min in solution. It protects rhizomes from fungal infestation.
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
    <td>25</td>
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
    <td>10</td>
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
  <p> At the time of field preparation, apply well decomposed cow dung@150 qtl/acre in soil. Apply N:P:K@10:10:10 kg/acre in form of Urea@25 kg/acre, SSP@60 kg/acre and MOP@16 kg/acre. Full dose of Potash and Phosphorus are applied at time of rhizome planting. Nitrogen dose is given in two equal splits. First half dose of N is given 75 days after planting and remaining half dose is given three month after planting.</p>
  </center></div><br><br>
  <button type="button">
<a href="https://www.agriplexindia.com/index.php/chemical/fertilizers/spices/turmeric.html" class="button button1">Buy Fertilizer Here</a>
</button>
</div>
<br>
<br>
<button class="accordion">Weeding</button>
<div class="panel">
<p>Apply Pendimethalin 30EC@800ml per acre or Metribuzin 70WP@400gm/acre in 200Ltr of water within two - three days after planting rhizomes. After weedicide application, cover field with green manure or paddy straw.<br>
Earthing up operation is carried to enhanced root development. After 50-60 days of planting, carry out first earthing operation and next should be done after 40 days.</p>
</div><br>
<button class="accordion">Irrigation</button>
<div class="panel">
<p>It is grown as rainfed crop so provide irrigation depending upon rainfall intensity and rainfall frequency. For light textured soil, in whole life cycle, 35-40 irrigations are required.<br>
After planting, crop is mulched with green leaves@40-60 qtl/acre. Repeat mulching@30 qtl/acre after every fertilizer application. </p>
</div><br>
<button class="accordion">Pesticide and diesease</button>
<div class="panel">
<p><b>Pest and their control:</b><br>
i.<b>Rhizome fly:</b> If Infestation of rhizome fly is observed in field, to control take spray of Acephate 75SP@600gm in 100Ltr of water. Repeat the spray with 15days interval.<br>
ii.<b>Sucking pest:</b> To control sucking pests take spray of neem based pesticide like Azadirachtin 0.3EC@ 2 ml/Ltr of water.<br>
iii.<b>Shoot borer:</b> If infestation of shoot borer is observed, take spray of Dimethoate@250ml/150Ltr or Quinalphos@250ml/150Ltr of water to control shoot borer.<br>
<br>
<br>
<b> Disease and their control:</b><br>
i.<b>Blight and leaf spots: </b>If infestation of blight and leaf spot is observed, take spray of Mancozeb@30 gm or Carbendazim@30gm in 10 ltr water by interval of 15-20 alternatively. Or spray with Propiconazole@2ml/ltr of water<br>
ii.<b>Root or Rhizome Rot: </b>To prevent crop from root rot, drench crop with Mancozeb@3gm/Ltr at 30, 60 and 90 days after planting.<br>
iii.<b>Bacterial wilt:</b> To prevent crop from bacterial wilt, drench plants with Copper oxychloride@3gm/Ltr of water immediately after disease is seen in field.<br>
iv.<b>Leaf Blotch:</b> If infestation is observed to control take spray of Mancozeb@20gm or Copper oxycloride@25gm/10Ltr of water.
</p>
</div><br>
<br><button type="button">
<a href="https://www.agriplexindia.com/index.php/chemical/pesticides/spices/turmeric.html?gclid=CjwKCAiA_Kz-BRAJEiwAhJNY722QGnwGvvstJEI7ukK2sNcHzvXPckKEuDQj-ob6IE5wHo9ZwcdESRoCI-IQAvD_BwE" class="button button2">Buy Pesticide Here</a>
</button>
<br><br>
<button class="accordion">Harvesting</button>
<div class="panel">
<p>Depending upon variety, it takes 6-9months for harvesting. Right time for harvesting of turmeric is when leaves of turmeric gets yellow and dry out completely, Remove rhizomes by dugging and after harvesting clean rhizomes. Then dry them in shades for 2-3days. It will make peel hard and easy for boiling.</p>
</div><br>
<button class="accordion">Post Harvesting</button>
<div class="panel">
<p>After cleaning, rhizomes are boiled in water containing sodium bicarbonate (100gm sodium bicarbonate in 100Ltr water) for 1hour. For boiling of rhizomes, utensils, kadhai and boilers are used. To get better quality product, stop the boiling when froth comes out and white fumes appear giving out a typical odour (Price deciding factor). After boiling rhizomes are dried properly for 10-15days. After proper drying, polishing of rhizomes is done manually using wire mesh, gunny bags or mechanically by power operated drum. Then grading of polished rhizomes is done on basis of size, shape and color.</p>
</div><br>
<div class="zoom">
<img alt="Turmeric" src="turmeric2.jfif">
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