<!DOCTYPE html>
<html>
<head>
<title>Lettuce</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
*{ margin: 0; padding: 0;}

header{
width: 100%;
height: 310%;
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
<h3>LETTUCE</h3>
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

<p>Lettuce belongs to family of Asteraceae. It is also called as Salad crops as it is consumed in uncooked form. Because of its diet and medicinal values, its demand is increasing rapidly. It is mostly grown for leaves purpose but sometime it is cultivated for seed and stem purpose. It is good source of Vitamin K and chlorophyll. Among different types of lettuce, loose leaf is considered as best as it contain high amount of iron and vitamin A and C. China is a top producer of Lettuce in world.</p><br>
<div style="float:right" class="zoom"><img alt="Lettuce" src="lettuce1.jpg"></div>
<button class="accordion" style="width:75%">Soil</button>
<div class="panel">
  <p>It can grow on variety of soils but it gives good result when grown on sandy loam and silt loam soils. Also soils should be rich in nitrogen, potassium also rich in organic matter content. For good growth, ideal pH of soil should be in range of 6 to 6.8. Avoid waterlogged, acidic soils for cultivation.</p>
</div>
<br>
<button class="accordion"style="width:75%">Land Preparation</button>
<div class="panel">
<p>Plough land for two-three times and bring soil to fine tilth. Carry out soil testing to check nutritional status of soil. If soil is deficient in nutrients apply micro-nutrients on basis of soil test results.</p>
</div>
<br>
<button class="accordion"style="width:75%">Sowing</button>
<div class="panel">
<p><b>Time of sowing</b><br>
Prepare nursery in the month of mid-September to mid-November. Sow seeds in nursery at a distance of 15-20 cm. It takes 3-4 days for germination of seeds. After germinations, lettuce required sunlight for minimum 3-4 hours per day in morning. When seedlings become four to six weeks old, transplant them into main field.<br>
<b>Spacing</b><br>
When seedling are transplanted in main field, use row to row spacing of 45 cm and plant to plant distance of 30 cm.<br>
<b>Sowing depth</b><br>
Depth should be 2-4 cm.<br>
<b>Method of Sowing</b><br>
For sowing of lettuce use transplanting method.</p>
</div>
<br>
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
    <td>20-30°C</td>
    <td>100-150cm</td>
	<td>20-28°C</td>
    <td>25-30°C</td>
  </tr>
</table></center>
</div><br>
<button class="accordion">Seed</button>
<div class="panel">
<p><b>Seed Rate</b><br>
To raise seedlings for 1 acre, sow 400gm seeds in 2 marla. Irrigate nursery beds at interval of week.</p>
</div>
<br>
<button class="accordion">Fertilizer</button>
<div class="panel">
<center>
<b>Fertilizer Requirement (kg/acre)</b><br>
<table style="width:50%">
  <tr>
    <th>UREA</th>
    <th>SSP</th>
	<th>MURIATE OF POTASH</th>
  </tr>
  <tr>
    <td>55</td>
    <td>75</td>
    <td>#</td>
  </tr>
</table> <br>
<b>Nutrient Requirement (kg/acre)</b>
<table style="width:50%">
  <tr>
    <th>NITROGEN</th>
    <th>PHOSPHORUS</th>
	<th>POTASH</th> 
  </tr>
  <tr>
    <td>25</td>
    <td>12</td>
    <td>#</td>
  </tr>
</table></center>
<br> 
<p>Apply well decomposed cow dung@15 ton per acre, and Nitrogen@25 kg (in form of Urea@55 kg), Phosphorus@12 kg (in form of Super Phosphate@75 kg) per acre. Apply whole amount of phosphorus and half amount of nitrogen before transplantation. Give remaining amount of nitrogen six weeks after transplantation.
</p></div>
<br>
<br>
<button>
<a href="https://www.google.com/search?q=buy+fertilizer+for+lettuce&rlz=1C1CHBD_enIN921IN921&sxsrf=ALeKk01cZ4LUsRrHv3L62FyYHU-d1Wn0WA:1607178603370&source=lnms&tbm=shop&sa=X&ved=2ahUKEwi21PnthrftAhXmyjgGHesTAWgQ_AUoAXoECAwQAw&biw=732&bih=687" class="button button1">Buy Fertilizer</a>
</button>
<br><br>
<button class="accordion">Irrigation</button>
<div class="panel">
<p>48 hours before transplantation stop irrigating nursery beds. 30 minutes before transplantation apply good amount of irrigation. It will help in easy pulling of seedlings. Provide first irrigation, immediately after transplantation. Apply remaining irrigation, at interval of 5-6 days on light soils whereas 8 to 10 days irrigation interval for heavy soils.
</p></div><br>
<button class="accordion"> Plant Protect</button>
<div class ="panel">
<p><b>Pest and their control:</b><br>
i.<b>Aphid:</b> If incidence of sucking pest like aphid is observed to control take spray of Imidacloprid 17.8SL@60 ml/acre using 150 ltr water.<br>
<br><b>Disease and their control:</b><br><br>
i.<b>Downy Mildew and Mosaic:</b> Use resistant variety for control of downy mildew. Mosaic is seed borne disease so as a preventive measure use disease free seeds for cultivation of lettuce.</p>
</div>
<br><br>
<button>
<a href="https://www.google.com/search?q=buy+pesticide+for+lettuce&rlz=1C1CHBD_enIN921IN921&hl=hi&sxsrf=ALeKk035yq27OJIei4lfMHZUI1leJC3oLw:1607178685186&source=lnms&tbm=shop&sa=X&ved=2ahUKEwj1yPuUh7ftAhU2zjgGHecnCV4Q_AUoAnoECA4QBA&biw=732&bih=687" class="button button2">Buy Pesticide Here</a>
</button>
<br>
<br>
<button class="accordion">Harvesting</button>
<div class="panel">
<p>Loose leaf type variety is harvested when they are fully developed or reached to marketable size. Tender leaves are cut regularly with interval of one week. At the end of March or at beginning of April stop harvesting of leaves as plant attain milky stage. For seed purpose complete harvesting in May month. It gives average seed yield of 50 kg/acre.<br>
For head type variety, carry out harvesting when heads are fully developed. Harvesting can be done by hand or by cutting of plant just above soil surface.<br>
Carry out harvesting early in morning. It will keep leaves fresh.<br>
</p>
</div>
<br>
<button class="accordion">Post_Harvest</button>
<div class="panel">
<p>After harvesting, do sorting and grading of leaves according head size, leaves size etc. After then lettuce is packed in crates or cartons. Lettuce can be stored for three weeks at temperature of 4 to 5°C at 95% relative humidity.</p>
</div><br>
<div class="zoom">
<img alt="Lettuce" src="lettuce2.jpg">
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
