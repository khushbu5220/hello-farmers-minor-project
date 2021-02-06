<!DOCTYPE html>
<html>
<head>
<title>Loquat</title>
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
<h3>LOQUAT</h3>
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
<p>In India mainly it is known as Lukat or Lugath. It is an evergreen and subtropical fruit tree. It attains the height of 5-6m and is spreading in nature. The fruit is native to central-eastern China and is mainly grown in Taiwan, Korea, China and Japan countries. In India loquat farming is done in Delhi, Punjab, Himachal Pradesh, Maharashtra, Assam and Uttar Pradesh states. It also has health benefits such as it helps to improve skin health and eye vision, helps in weight loss, maintains blood pressure and increases blood. It also helps in strengthening of teeth and bones. In Punjab it is mainly grown in Roop Nagar, Hoshiarpur, Gurdaspur and Patiala districts. The fruit mainly ripens in end-march to April and fetches good price.
</p><br>
<div style="float:right" class="zoom"><img alt="loquat" src="loquat.jpg"></div>
<button class="accordion" style="width:75%">Soil</button>
<div class="panel">
  <p>Loquat requires sandy loam soil which is rich in organic matter and has a good drainage system.</p>
</div>
<br>
<button class="accordion"style="width:75%">Land Preparation</button>
<div class="panel">
<p>For loquat farming, the well prepared land is required. To bring the soil to a fine tilth, leveling is required followed by 2-3 deep ploughing. </p>
</div>
<br>
<button class="accordion"style="width:75%">Sowing</button>
<div class="panel">
<p><b>Time of sowing</b><br>
June-September month is an optimum time for sowing.<br>
<b>Spacing</b><br>
Use plant to plant spacing of 6-7m.<br> 
<b>Sowing Depth</b><br>
1m deep planting is done.<br>
<b>Method of Sowing</b><br>
Propagation method is used.<br></p>
</div>
<br>
<button class="accordion" style="width:75%">Seed</button>
<div class="panel">
<p><b>Seed Rate</b><br>
Use 95-96 plants per acre.<br>
<b>Seed treatment</b><br>
Treatment of smooth and old-ringed shoots is done with NAA@3% and IBA 250ppm is done.</p>
</div>
<br>

<button class="accordion">Nursery Management and Transplanting</button>
<div class="panel">
<p>Before sowing apply mixture of calcium ammonium nitrate and single superphosphate @150g on the raised beds. Sow celery seeds on raised beds of 8 m x 1.25 m and of convenient width. After sowing cover the seed beds with FYM and mix well in the soil.  After sowing immediate water sprinkler is necessary.<br>
12-15 days after sowing germination of seed starts. When germination begins, application of calcium ammonium nitrate at fortnight to each bed is given. For good plant size application of calcium ammonium nitrate @100g is given to each bed at the interval of one month.<br>
Seedlings are ready for transplantation in 60-70 days after sowing. Before transplanting light irrigation is given to beds so that seedlings can be easily uprooted and be turgid at transplanting time. Transplanting is mainly done in the month of mid-November – end of December.</p>
</div>
<br>
<button class="accordion">Fertilizer</button>
<div class="panel">
<center>
<b>Fertilizer Requirement (gm/acre)</b><br>
<table style="width:50%">
  <tr>
  <th>Age (in years)</th>
  <th>FYM (kg/tree)</th>
    <th>UREA</th>
    <th>SSP</th>
	<th>MURIATE OF POTASH</th>
  </tr>
  <tr>
  <td>1-2 years</td>
  <td>10-20</td>
    <td>150-500</td>
    <td>200-500</td>
    <td>150-400</td>
  </tr>
  <tr>
  <td>3-6 years</td>
  <td>25-40</td>
    <td>600-750</td>
    <td>600-1200</td>
	<td>600-1000</td> 
  </tr>
  <tr>
  <td>7-10 years</td>
  <td>40-50</td>
    <td>800-1000</td>
    <td>1500-2000</td>
    <td>1100-1500</td>
  </tr>
  <tr>
  <td>10 and above years</td>
  <td>50</td>
    <td>1000</td>
    <td>2000</td>
    <td>1500</td>
  </tr>
</table></center>
<br> 
<p>Apply Farm Yard manure, Phosphorus and Potassium in September month and urea dose is added in two equal splits, the first dose is added in October month and rest of the half dose is added in January-February month after fruit set.
<br>
</p>
</div>
<br>
<br>
<button>
<a href="https://www.flipkart.com/ecotika-citrus-fruiting-plant-blend-fertilizer/p/itmb4cd47c113d7f?pid=SMNFP5QZQGXJB5MU&lid=LSTSMNFP5QZQGXJB5MUIVWUI4&marketplace=FLIPKART&cmpid=content_soil-manure_8965229628_gmc" class="button button1">Buy Fertilizer</a>
</button>
<br><br>
<button class="accordion">Irrigation</button>
<div class="panel">
<p>Irrigation is given depending upon soil and weather conditions. Mainly 3-4 irrigations are required at the time of harvesting.</p>
</div><br>
<button class="accordion">Weed Control</button>
<div class="panel">
<p>Weed can be controlled by hand-hoeing and also controlled by chemically, use glyphosate@1.6litre per 150 litre of water. Use glyphosate only on weeds not on crop plants.<br></p>
</div><br>
<button class="accordion"> Plant Protect</button>
<div class ="panel">
<p><b>Pest and their control:</b><br>
<b>Leaf roller caterpillar:</b>The leaf roller will affect the crop by rolling the leaves. 
<br>Treatment: To control leaf roller caterpillar spray with quinalphos@400ml in 150 ltr water per acre.
<br>
<b>Aphids:</b>Adult and nymphs, both suck the sap thus weaken the plant. In severe infestation, they cause curling and deformation of young leaves. They secrete honey dew like substance and Sooty, black mould is developed on affected parts.
<br>Treatment: To control aphids spray with Dimethoate@300ml in 150 ltr water per acre. <br>
<br><b>Disease and their control:</b><br><br>
<b>Black spot:</b>It is a disease caused by fungus. The symptoms are black color sunken spots seen on leaves.
<br>Treatment: If infection of disease is observed spray with Carbendazim@4gm/Ltr or Copper Oxychloride@3gm/Ltr or Mancozeb@3gm/Ltr of water.
 <br>
</p>
</div>
<br><br>
<button>
<a href="https://www.order2india.com/products/non-toxic-fruit-fly-flies-pest-trap-bottle-bait-lure-home-insect-orchard-terrace_182762892373?variant=1256736096271" class="button button2">Buy Pesticide Here</a>
</button>
<br>
<br>
<button class="accordion">Harvesting</button>
<div class="panel">
<p>Mainly plant starts bearing fruits in the third year of the plantation and maximum yield starts from 15th year. Harvesting is done when fruits get fully matured with the help of a sharp instrument. After harvesting, grading is done. It gives an average yield of 6-8qtl/acre.</p>
</div>
<br>
<div class="zoom">
<img alt="loquat" src="loquat2.jpg">
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
