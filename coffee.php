<!DOCTYPE html>
<html>
<head>
<title>Coffee</title>
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
<h3>COFFEE</h3>
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
<p>Coffee is a flowering plant which is cultivated for its grains/seeds called coffee beans. Many coffee products including beverages are made from these freshly grown coffee beans. The coffee tree produces purple or red cherries (edible fruits) and these cherries can consist of seeds (coffee beans). Coffee trees are bush or tree type that can reach a height of 12 feet. The coffee plant flowers have an excellent aroma and usually exists in white color.</p><br>
<div style="float:right" class="zoom"><img alt="Coffee" src="coffee1.jpg"></div>
<button class="accordion" style="width:75%">Soil</button>
<div class="panel">
  <p>Coffee crop may be grown on a wide range of soils. However, the shallow soils (sandy loam) with good organic matter to virgin soils on steep mountain slopes or almost flatlands are ideal its cultivation. You must consider the water balance of soil as this can play a vital role in coffee growing. Commercial coffee growers should go for soil testing. Any soil nutrient deficiencies should be supplemented before starting a coffee garden. For high yields and quality produces, the ph of the soil should be between 5.0 – 6.0. </p>
</div>
<br>
<button class="accordion"style="width:75%">Land Preparation</button>
<div class="panel">
<p>The land should be prepared very well by giving 4 or 5 ploughings and harrowing to bring the soil to fine tilth stage. As part of this preparation, remove any stones/debris/ and weeds from previous crops. </p>
</div>
<br>
<button class="accordion"style="width:75%">Sowing</button>
<div class="panel">
<p><b>Time of sowing</b><br>
The coffee crop is planted during the spring season or just before the rainy season as this crop requires moist soil conditions and cool climate for better establishment and growth. <br>
<b>Spacing</b><br>
Transplanting is done at the distance of 50 cm x 50 cm x 50 cm.<br> 
<b>Sowing Depth</b><br>
Sow seeds at depth of 0.5-1 cm.<br></p>
</div>
<br>
<button class="accordion" style="width:75%">Seed</button>
<div class="panel">
<p><b>Seed Rate</b><br>
4000 to 5000 seeds are required to cover one-hectare land.</p>
</div>
<br>
<button class="accordion">Climate</button>
<div class="panel">
  <center>
<table style="width:50%">
  <tr style="background-color:orchid">
    <th>Temperature</th>
    <th>Rainfall</th>
  </tr>
  <tr style="background-color:magenta">
    <td>10-28°C</td>
    <td>2200-2300 mm</td>
  </tr>
</table></center>
</div><br>
<button class="accordion">Nursery Management and Transplanting</button>
<div class="panel">
<p>Before sowing apply mixture of calcium ammonium nitrate and single superphosphate @150g on the raised beds. Sow celery seeds on raised beds of 8 m x 1.25 m and of convenient width. After sowing cover the seed beds with FYM and mix well in the soil.  After sowing immediate water sprinkler is necessary.<br>
12-15 days after sowing germination of seed starts. When germination begins, application of calcium ammonium nitrate at fortnight to each bed is given. For good plant size application of calcium ammonium nitrate @100g is given to each bed at the interval of one month.<br>
Seedlings are ready for transplantation in 60-70 days after sowing. Before transplanting light irrigation is given to beds so that seedlings can be easily uprooted and be turgid at transplanting time. Transplanting is mainly done in the month of mid-November – end of December.</p>
</div>
<br>
<button class="accordion">Mulching</button>
<div class="panel">
<p>Mulching is another task that can provide weed control and prevent moisture loss and soil erosion. Another benefit of mulching is, it can enrich the soil, moderates of excessive soil temperature and improves soil texture. In most of the cases, multing material can convert into excellent organic matter.</p>
</div>
<br>
<button class="accordion">Pruning</button>
<div class="panel">
<p>Pruning includes removal of dried, dead branches, and any unhealthy branches. This operation includes part of pole pruning and this may be done once in 4 years to bring back to good shape and control unwanted shoots. Make sure this task is done immediately after harvesting.</p>
</div>
<br>

<button class="accordion">Fertilizer</button>
<div class="panel">
<p>a) Maintaining optimum pH by liming is essential requirement for nutrition management in coffee. If proper pH is not maintained, the applied fertilizers will not be utilised by the plants effectively.<br>
b)Soil testing at least once in 2-3 years should be mandatory for lime and fertilizer applications.<br>
c) Use agricultural lime analysing 80% calcium carbonate. November is the best period for lime application. Application of dolomite lime once in a while in rotation is beneficial.<br>
d) Application of bulky organic manures like FYM or compost @ 5 tonnes/ha once in two years would improve the soil condition and better utilization of applied fertilizers.<br>
e) The recommended dose of fertilizers should be applied in three splits (post-blossom, pre-monsoon, post-monsoon) by adopting drip circle method. In slopy areas, the fertilizers should be applied in the upper half of the drip circle.
</p>
</div>
<br>
<br>
<button>
<a href="https://www.agriplexindia.com/index.php/catalogsearch/result/?q=Coffee+fertilizer" class="button button1">Buy Fertilizer</a>
</button>
<br><br>
<button class="accordion">Irrigation</button>
<div class="panel">
<p>The frequency of irrigation in coffee growing depends on the type of soil, moisture level in the soil, plant age and climate. There are many irrigation methods are available like drip irrigation, sprinkler irrigation, microjet, and basin irrigation can be adopted in coffee growing. However, drip irrigation is the best method for best utilization of water and fertilizers. This can also control weed growth at plant basins. Under irrigated conditions, each coffee plant requires 50 to 55 mm water and this should be applied before transplanting. Subsequent irrigations of 25 mm should be provided at 8 to 10 days interval. Make sure to keep the soil moist and avoid too much wetness. Overwatering can result in plant rot and fungal diseases in coffee growing. The thumb rule is to provide 2 irrigations in a week in dry climatic conditions (like in summer) and 1 irrigation per week in the cool winter season.</p>
</div><br>
<button class="accordion">Weed Control</button>
<div class="panel">
<p>Digging and forking open should be done during the months of September, November and again in February and March. Weed control can be done during the initial years. Chemical weedicides like Dalapon can be  used for controlling grasses. Amino salt of 2, 4 – D can be used or controlling broad-leaved weeds.</p>
</div><br>
<button class="accordion"> Plant Protect</button>
<div class ="panel">
<p><b>Pest:</b><br>
<b>Grey coffee snout beetle:</b> <br>
Coffeeberry moth<br>
c) white stem borer <br>
d) Antestia stink bug <br>
e) Leafminer, Mealybug<br>
f) Black coffee stem borer <br>
g) Variegated coffee bug.<br>
<br><b>Disease:</b><br><br>
a) Rosellinia bunodes<br>
b) Armillaria mellea<br>
c) Coffee berry disease<br>
d) Tracheomycosis wilt<br>
e) American leaf spot<br>
f) Root rot diseases<br>
g) Cercospora spot<br>
</p>
</div>
<br><br>
<button>
<a href="https://agribegri.com/products/coragen---broad-spectrum-insecticide-.php" class="button button2">Buy Pesticide Here</a>
</button>
<br>
<br>
<button class="accordion">Harvesting</button>
<div class="panel">
<p>Coffee beans/cherries start bearing from the third year onwards after transplanting in the field. Healthy and best yield can be obtained from the fifth year. The best part is, the coffee plantation continues to yield up to 50 to 55 years.</p>
</div>
<br>
<button class="accordion">Post Harvesting</button>
<div class="panel">
<p>After harvesting, tasks of coffee includes the activities of Drying, Grading, Packing, Storage and Transpiration. </p>
</div><br>
<div class="zoom">
<img alt="Coffee" src="coffee2.jpg">
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
