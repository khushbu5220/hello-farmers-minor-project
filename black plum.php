<!DOCTYPE html>
<html>
<head>
<title>Black Plum</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
*{ margin: 0; padding: 0;}

header{
width: 100%;
height: 400%;
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
<h3>Black Plum</h3>
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
<p>Jamun is known as the indigenous crop of India. Its fruits are used for eating and seeds are used to prepare various drugs. Drugs prepared from Jamun plant is used to cure diabetes and increased blood sugar level. It is an evergreen tree with average height of 30m having brown or grey bark. Leaves are smooth which are 10-15cm long and 4-6cm wide. Flowers are yellow in color which is 5mm in diameter and having green fruits which turns crimson red at maturity.  Fruits bear seeds which are 1-1.5cm long. Afghanistan, Myanmar, Philippines, Pakistan, Indonesia and India are the countries where Jamun plant can grow. Maharashtra, Tamil Nadu, Gujarat, Assam and Rajasthan are major Jamun growing states in India.</p><br>
<div style="float:right" class="zoom"><img alt="Blackberry" src="blackberry1.jpg"></div>
<button class="accordion" style="width:75%">Soil</button>
<div class="panel">
  <p>It is grown in variety of soils because of its hardy nature. They can grow in sodic soil, poor soil, saline soil, calcareous soil and can be grown in marshy soils. They can even survive in poorly drained soil. It gives best result when grown in fertile, deep loamy soil with good drainage system. Avoid cultivation in heavy soil and sandy soil. </p>
</div>
<br>
<button class="accordion"style="width:75%">Land Preparation</button>
<div class="panel">
<p>For Jamun plantation, it requires well prepared land. To bring soil to good level, plough land once. Then pits are dug and are filled with Farm Yard Manure in the ratio of 3:1. Transplantation of seedlings is done on raised beds.</p>
</div>
<br>
<button class="accordion"style="width:75%">Sowing</button>
<div class="panel">
<p><b>Time of sowing</b><br>
It is planted in both spring and monsoon season. In spring season, it is planted in the month of February-March and in monsoon season it is planted in the month of July-August. <br>
<b>Spacing</b><br>
For seedling trees, spacing of 10m on both ways is recommended and for budded seedlings, spacing of 8m on both ways is recommended.
<br> 
<b>Sowing Depth</b><br>
The sowing depth should be 4-5cm.<br>
<b>Method of Sowing</b><br>
Direct sowing is done by seeds.
<br>Grafting method is also used.
<br></p>
</div>
<br>
<button class="accordion" style="width:75%">Seed</button>
<div class="panel">
<p><b>Seed Rate</b><br>
One seed per pit is used.<br>
<b>Seed Treatment</b>
To protect crop from soil borne disease and pest, before sowing do seed treatment with Bavistin. After chemical treatment seeds are air dried and are used for sowing.
</p></div>
<br><br>

<button class="accordion">Nursery Management and Transplanting</button>
<div class="panel">
<p>Sow Jamun seeds on raised beds having convenient length and are 4-5cm deep. After sowing beds are covered with thin cloth to retain moisture. To protect crop form virus attack the seeds are first treated with Bavistin. Germination starts within 10-15 days from sowing.
<br>Pits are dug before monsoon or spring season. Pits are dug with convenient measurements i.e. 1m x 1m x 1m. On these prepared pits transplanting is done. 
<br>Transplanting is mainly done in next monsoon when the seedlings have 3-4 leaves. Water seedling beds 24hours before transplanting so that seedlings can be easily uprooted and be turgid at transplanting time.</p>
</div>
<br>
<button class="accordion">Fertilizer</button>
<div class="panel">
<center>
<b>Fertilizer Requirement (kg/plant/year)</b><br>
<table style="width:50%">
  <tr>
    <th>UREA</th>
    <th>SSP</th>
	<th>MURIATE OF POTASH</th>
  </tr>
  <tr>
    <td>1</td>
    <td>1.5</td>
    <td>0.5</td>
  </tr>
</table> <br>
<b>Nutrient Requirement (gm/plant/year)</b>
<table style="width:50%">
  <tr>
    <th>NITROGEN</th>
    <th>PHOSPHORUS</th>
	<th>POTASH</th> 
  </tr>
  <tr>
    <td>500</td>
    <td>600</td>
    <td>300</td>
  </tr>
</table></center>
<br> 
<p>Apply well rotten Farmyard manure or compost @20-25kg/plant/year in pre bearing period. The FYM dose should be increased when plants get mature i.e. 50-60kg/plant/year is given. Apply fertilizer dose of Nitrogen @500g/plant/year, potassium @600g/plant/year and potash@300g/plant/year is given to grown up trees.<br>
</p>
</div>
<br>

<button class="accordion">Irrigation</button>
<div class="panel">
<p>Regular irrigation at regular interval of time is necessary for this plant. Light irrigation is necessary immediately after manuring. For young plant it requires 6-8 irrigations and for mature plant it requires 5-6 irrigations. Along with regular irrigations, once irrigation is required in the month of September – October for good bud growth and one is required in the month of May – June for good fruit growth. If drought occurs for long time then life-saving irrigation is given.</p>
</div><br>
<button class="accordion">Weed Control</button>
<div class="panel">
<p>Do frequent hand weeding from the base of plant to keep the field weed free. If weed left uncontrolled then it will affect the crop growth. Mulching is also an effective way to reduce soil temperature along with weed control.</p>
</div><br>
<button class="accordion"> Plant Protect</button>
<div class ="panel">
<p><b>Pest and their control:</b><br>
<b>Leaf eating caterpillar:</b> The caterpillar will affect the crop by eating the fresh growing leaves and stem.<br>
It can be controlled spraying of Flubendiamide@20ml or Quinalphos@400ml per acre in 150 ltr of water. <br>
<b>Jamun leaf caterpillar:</b>The leaf caterpillar will affect the crop by feeding themselves on leaves.<br> .
To get rid of caterpillar pest spraying of Dimethoate 30 EC @1.2ml/ltr should be done.<br>
<b>Bark eating caterpillar:</b> The caterpillar will affect the crop by eating bark of tissue.<br>
Treatment: Spraying of Rogor30 EC@3ml/ltr or Malathion 50 EC @3ml/ltr of water is done at the time of flowering to get rid from Bark eating caterpillar.<br>
<b>Jamun leaf roller:</b>The leaf roller will affect the crop by rolling the leaves.  <br>
Treatment with Chlorpyriphos 20 EC @2ml/ltr or Endosulfan 35 EC @2ml/ltr is done to cure from leaf roller pest.<br>
<b>Leaf webber:</b>The leaf webber with affect the crop by eating leaves and buds.<br>
Treatment with Chlorpyriphos 20 EC @2ml/ltr or Endosulfan 35 EC @2ml/ltr is done to get rid of leaf webber.<br>
<br><b>Disease and their control:</b><br><br>
<b>Anthracnose:</b> It causes leaf spots, defoliation and dieback disease in the crop.<br>
If infestation is observed take spray of Zineb 75WP@400gm or M-45@400gm per acre in 150 ltr of water.<br>
<b>Flower and fruit drop:</b>  In this the flower and fruits gets drop early without maturing. This will result in low yield.<br>
Spraying of Gibberellic acid 3 is done two times, one when full bloom occurs and next after 15 days of interval when fruit set.<br>
</p>
</div>
<br>
<button class="accordion">Harvesting</button>
<div class="panel">
<p>Harvesting is mainly done daily after the fruit matures. Harvesting is mainly done by the climb pickers. The fruit which is blackish purple in color is chosen for harvesting. While harvesting care should be taken to avoid any injury to fruit. For processing and seed extraction purpose, fully ripe fruits with soft flesh are used.</p>
</div>
<br>
<button class="accordion">Post Harvesting</button>
<div class="panel">
<p>After harvesting, grading is done. Then fruits are packed in Bamboo baskets or crates or wooden boxes. To increase self-life of Jamun they are kept at low temperature. Perfect packing and quick transport is done for less spoilage of fruits. From fruits various products like vinegar, capsules, seed powder, jams, jellies and squashes are made after processing.</p>
</div><br>
<div class="zoom">
<img alt="Blackberry" src="blackberry2.jpg">
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
