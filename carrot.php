<!DOCTYPE html>
<html>
<head>
<title>Carrot</title>
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
<h3>CARROT</h3>
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
<p>Carrot "annual" or "biannual" herb belongs to family of Umbelliferae and it is native of "Europe". It is a great source of Vitamin A. Carrot is major vegetable crop of India. Haryana, Andhra Pradesh, Karnataka, Punjab and Uttar Pradesh are major carrot growing states.</p><br>
<div style="float:right" class="zoom"><img alt="carrot" src="carrot1.jpg"></div>
<button class="accordion" style="width:75%">Soil</button>
<div class="panel">
  <p>For good root development carrot required deep, loose loamy soils. Heavy soils as well as very loose soils are not suitable for carrot cultivation. For optimum yield pH of soil should be in range of 5.5 to 7 (pH of 6.5 is ideal for good yield).</p>
</div>
<br>
<button class="accordion"style="width:75%">Land Preparation</button>
<div class="panel">
<p>Plough land thoroughly and make land weed and clods free. Add well decomposed cow dung of 10 ton/acre and mix well in soils at time of land preparation. Avoid use of undecomposed or free cow dung as it will leads to forking of fleshy roots.</p>
</div>
<br>
<button class="accordion"style="width:75%">Sowing</button>
<div class="panel">
<p><b>Time of sowing</b><br>
August-September is best time for sowing local (desi) varieties of carrots whereas October-November month is ideal for European varieties. <br>
<b>Spacing</b><br>
Use row to row spacing of 45 cm and plant to plant spacing of 7.5 cm.<br> 
<b>Sowing Depth</b><br>
For good growth, sow seeds at depth of 1.5 cm.<br>
<b>Method of Sowing</b><br>
For sowing use dibbling method and also use broadcasting method.
</p>
</div>
<br>
<button class="accordion">Climate</button>
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
    <td>7-23°C</td>
    <td>75-100cm (Winter)</td>
	<td>18-23°C</td>
    <td>20-25°C</td>
  </tr>
</table></center>
</div><br>
<button class="accordion">Seed</button>
<div class="panel">
<p><b>Seed Rate</b><br>
For sowing of one acre land seed rate of 4-5 kg is sufficient.<br>
<b>Seed Treatment</b><br>
Before sowing soaked seeds in water for 12-24 hours. It will increased germination percentage.</p>
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
    <td>175</td>
    <td>50</td>
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
    <td>23</td>
  </tr>
</table></center>
<br> 
<p>Along with well decomposed cowdung, apply Nitrogen@25kg (in form of Urea@55kg), Phosphorus@12kg (in form of SSP@ 75kg/acre) and Potash@30kg (in form of MOP@50kg) per acre in soil at time of sowing. Potash is required for good development of roots.</p>
</div>
<br>
<br>
<button>
<a href="https://www.agriplexindia.com/index.php/chemical/fertilizers/vegetables/carrot.html" class="button button1">Buy Fertilizer</a>
</button>
<br><br>
<button class="accordion">Irrigation</button>
<div class="panel">
<p>After sowing, apply first irrigation, it will help in good germination. Depending upon soil type and climate, apply remaining irrigations at interval of 6-7 days in summer and 10-12 days interval in winter month. Overall carrot required three to four irrigations. Avoid excessive irrigation as it will leads misshape of roots and numerous hair growth. Stop irrigation two to three weeks before harvesting, It will help in increase in sweetness and taste of carrot.</p>
</div><br>
<button class="accordion">Weed Control</button>
<div class="panel">
<p>Take interculture operation like weeding and hoeing to keep check on weed growth also to provide soil aeration.</p>
</div><br>
<button class="accordion"> Plant Protect</button>
<div class ="panel">
<p><b>Pest and their control:</b><br>
<b>Nematodes:</b> To control nematodes, apply neem cake@0.5ton/acre at time of sowing.<br><br>
<b>Disease and their control:</b><br><br>
i.<b>Leaf spot:</b> If infestation is observed in field to control take spray of Mancozeb@2gm/Litre of water.</p>
</div>
<br><br>
<button>
<a href="https://www.indiamart.com/proddetail/organic-carrot-14565603548.html" class="button button2">Buy Pesticide Here</a>
</button>
<br>
<br>
<button class="accordion">Harvesting</button>
<div class="panel">
<p>Depending upon variety, carrots are ready for harvesting in 90-100 days after sowing. Harvesting is done manually by uprooting plants. After harvesting remove green tops from carrots and then they are washed with water.</p>
</div>
<br>
<button class="accordion">Post Harvesting</button>
<div class="panel">
<p>After harvesting grading of carrot depending upon size is carried out. Then they are packed in gunny bags or basket.</p>
</div>
<br>
<div class="zoom"><img alt="carrot" src="carrot2.jpg"></div>
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