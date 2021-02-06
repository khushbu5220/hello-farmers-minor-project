<!DOCTYPE html>
<html>
<head>
<title>Pomegranate</title>
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
<h3>POMEGRANATE</h3>
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
<br>
<div style="float:right" class="zoom"><img alt="Pomegranate" src="pomegranate1.jfif"></div>
<button class="accordion"style="width:75%">Choose a good location</button>
<div class="panel">
<p>It can be grown on variety of soils. For optimum growth and yield, it required deep loamy and alluvial soils. It is tolerant to loamy and slightly alkaline soils. It is also cultivated on poor soils. Also medium and black soils are suitable for pomegranate cultivation.</p>
</div>
<br>
<button class="accordion"style="width:75%">Soil preparation</center></button>
<div class="panel">
<p>Plough the land for two - three times and bring soil to fine tilth. After then carry out planking operation to make land leveled and uniform.
</p>
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
    <td>18-25°C</td>
    <td>500-800mm</td>
	</tr>
</table></center>
</div><br>
<button class="accordion">Seeding</button>
<div class="panel">
<p><b>Seed Rate:</b>240 plants per acre.<br>

<b>Seed Treatment:</b>
Before sowing, dipped seedling or cutting in IBA solution of 1000PPM@1gm/litre of water.    
</p></div>
<br>
<button class="accordion">Fertilizer</button>
<div class="panel">
<p>Apply 5-6 kg Farm yard manure to one year old plant in December. Put Urea@50gm per plant every year in two equal splits. First dose is given in March month and second dose is given in April month. After 5 years start adding urea@250gm per plant.</p>
</div><br><br>
  <button type="button">
<a href="https://www.agriplexindia.com/index.php/chemical/fertilizers/fruits/pomegranate.html" class="button button1">Buy Fertilizer Here</a>
</button>
</div>
<br><br>
<button class="accordion">Planting</button>
<div class="panel">
<p><b>Time of sowing:</b>
Mainly sowing is done in December to January month. 
<br>

<b>Spacing:</b>
Optimum spacing is depending on soil type and climate. For Pomegranate planting, if square system of planting is adopted, use spacing of 4m x 4m.
<br>
 
<b>Sowing Depth:</b>
For sowing, dug Pits of 60 x 60 x 60 cm size about a month prior to planting. Keep pits open under the sun for a fortnight. Then filled pits with top soil mixed with 20kg of farmyard manure and 1 kg of super phosphate. After filling pit, apply water. It settle down the soil. 
<br>

<b>Method of Sowing:</b>
Transplanting method is used. Pomegranate is propagated through air layering method.  Air layering is done in rainy season as well as in November-December month. For air layering, select one to two year old, healthy, mature shoot having length of 45-60cm with pencil thickness.
</p>
</div>
<br>
<button class="accordion">Caring</button>
<div class="panel">
<p><b>Watering:</b>In summer apply water at the interval of 10-15 days and in winter increase irrigation interval upto 20-25 days.
<br><br>
<b>Weeding:</b>To control weeds, mulching can be done. Along with weed control, it helps to conserved moisture and reduces evaporation loss.
<br>
<b>Pruning and Training:</b>Training and Pruning help in growth of fresh healthy shoots. It removes old also disease branches and avoids overcrowding of branches. It also maintains proper shape of plant.
 </p>
</div>
<br>
<button class="accordion">Pesticide and diesease</button>
<div class="panel">
<p><b>Pest and their control:</b><br>
i.<b>Thrips:</b>If thrips infestation is observed, take spray of Fipronil 80%WP@20ml/15Ltr of water.<br>
ii.<b>Fruit Fly:</b>It lay eggs on fruit rind/skin. After hatching they feed on pulp. Affected fruits get rot and then drop.
<br>Keep cleanliness in field. At time of flowering and fruit development, take spray of Carbaryl 50WP@2-4gm or Quinalphos 25EC@2ml/Ltr of water.<br><br>
iii.<b>Mealy Bug:</b>Its nymphs, start crawling on trees and feed on young flowers. Also secrete honeydew like substance and black mould is developed on it. 
<br>As a preventive measure, fastened, 25cm width Polythene(400gauge) strip around tree trunk to stop ascent of nymphs before hatching of eggs in month of Nov and Dec. keep orchard clean. If infestation is observed, take spray of Thiamethoxam 25WG@0.25gm/Ltr or Imidaclopird 17 SL@0.35ml/Ltr or Dimethoate 30 EC@2ml/Ltr of water.
 <br>
iv.<b>Aphid: </b>Infestation of Aphids is observed take Spray of Thiamethoxam 25WG@0.20gm/Ltr or Imidacloprid @0.35ml/Ltr of water.
<br>
v.<b>Shot hole borer:</b> If infestation is observed, to control take spray of Chlorpyriphos20EC@2ml/Ltr or Cypermethrin @60ml/150Ltr respectively.
<br><br>
<b> Disease and their control:</b><br>
i.<b>Fruit spots:</b> If infestation is observed take spray of Mancozeb or Copper oxychloride@2.5gm/Ltr of water.<br><br>
<b>Fruit rot:</b>To control fruit rot, take spray of Streptocycline@50gm + Copper oxychloride@400gm/150Ltr of water. Take second spray 15 days after first spraying.
<br>
ii.<b>Wilt:</b> If infestation is observed, do drenching of Carbendazim@5gm/5Ltr to infected plant also other plants surrounding diseases plants.<br><br>
</p></div><br><br>
<button type="button">
<a href="https://www.agriplexindia.com/index.php/chemical/pesticides/fruits/pomegranate.html?pest_disease=Aspergillus%20Fruit%20Rot&pd_type=1" class="button button2">Buy Pesticide Here</a>
</button>
<br><br>
<button class="accordion">Harvesting</button>
<div class="panel">
<p>After flowering, fruits gets mature within 5-6months. When fruit changes its color from green to light yellow or red i.e fruits start ripening, it is optimum time for harvesting. Avoid delay in harvesting as it will lead to fruit cracking and thus leads to yield loss.</p>
</div><br>
<button class="accordion">Post-harvesting</button>
<div class="panel">
<p>After harvesting, stored fruits in shades for a one week. It will help in hardening of fruit skin. So that less damage is observed in transportation. Fruits are graded according to weight.
</p>
</div>
<br>
<div class="zoom">
<img alt="Pomegranate" src="pomegranate2.jfif">
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