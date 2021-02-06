<!DOCTYPE html>
<html>
<head>
<title>Sweet Potato</title>
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
<h3>SWEET POTATO</h3>
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

<p>The botanical name of Sweet potato is Ipomoea batatas. This crop is mainly grown because of its sweet taste and starchy roots. The tubers are rich source of beta-carotene and are used as anti-oxidants. It is an herbaceous perennial vine having lobed or heart shaped leaves. Its tubers are edible, smooth skin, tapered and long. It has wide color range of tuber skin i.e. purple, brown, white and purple which contains wide range of flesh i.e. yellow, orange, white and purple. In India about 2 lakh of land is under cultivation of sweet potatoes. In Bihar, West Bengal, Uttar Pradesh and Orissa are the major growing states in India.</p><br>
<div style="float:right" class="zoom"><img alt="Sweet Potato" src="sweetpotato1.jpg"></div>
<button class="accordion" style="width:75%">Soil</button>
<div class="panel">
  <p>It is grown in variety of soil types ranging from sandy to loamy soil, but it gives best result when grown under sandy loam soil having high fertility and good drainage system. Avoid cultivation of sweet potato in very light sandy and heavy clayey soil as it is not good for tuber development. It requires pH ranging from 5.8-6.7 is best for sweet potato cultivation.</p>
</div>
<br>
<button class="accordion"style="width:75%">Land Preparation</button>
<div class="panel">
<p>For sweet potato plantation, the land should be well prepared. To bring the soil to the fine tilth, before sowing land must be ploughed 3-4 times followed by planking’s. The field should be weed-free.</p>
</div>
<br>
<button class="accordion"style="width:75%">Sowing</button>
<div class="panel">
<p><b>Time of sowing</b><br>
For optimum yield, tubers should be sown in nursery beds in the month of January to February and the optimum time for planting vines in the field is in the month of April to July.<br>
<b>Spacing</b><br>
Use row to row spacing of 60cm and plant to plant spacing of 30cm.<br>
<b>Sowing depth</b><br>
Use depth of 20-25cm for tuber planting.<br>
<b>Method of Sowing</b><br>
Mainly propagation is done by tubers or vine cuttings. In vine cutting method (commonly used), the tubers are taken from the old vines and planted on prepared nursery beds.  Mainly vines are planted in ridges or on prepared flat beds. It is seen that terminal cuttings gives better result. The host plant must have at least 4 nodes. Row spacing of 60cm and within row spacing of 30cm is used. Before planting it is better to treat the cuttings with DDT 50% solution for 8-10 minutes.</p>
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
    <td>26-30°C</td>
    <td>750-1200mm</td>
	</tr>
</table></center>
</div><br>
<button class="accordion">Seed</button>
<div class="panel">
<p><b>Seed Rate</b><br>
Use 25,000-30,000 of vines cutting in per acre land. Sowing of 35-40kg tubers in half a kanal land is done for raising vines in February to March month. Vines are then planted in the main fields in one acre land.<br>
<b>Seed Treatment</b><br>
Place the tubers in plastic bag and then soak them in concentrated sulphuric acid for 10-40 minutes.</p>
</div>
<br>
<button class="accordion">Rotation</button>
<div class="panel">
<p>Sweet potato + Rice crop rotation can be taken up successfully under irrigated conditions. Sweet potato can be planted in the month of December-January after second harvesting of rice.</p>
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
    <td>125</td>
    <td>155</td>
    <td>35</td>
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
    <td>30</td>
    <td>20</td>
    <td>25</td>
  </tr>
</table></center>
<br> 
<p>Apply FYM (Farm Yard Manure) @100 qtl/acre. Along with FYM apply fertilizer dose in terms of CAN @125 kg/acre, SSP @155 kg/acre and MOP @35 kg/acre.<br>
Full dose of K2O and P2O5 is applied at the time of planting. Nitrogen dose is applied in 2 splits i.e. first at the time of planting and secondly should be applied after 5 weeks of planting.</p>
</div>
<br>

<button class="accordion">Irrigation</button>
<div class="panel">
<p>After planting, irrigation is given once in 2 days for period of 10 days and thereafter irrigation is given once in 7-10 days. Irrigation must be stopped before 3 weeks of harvesting. But before 2 days of harvesting one irrigation is necessary.</p>
</div><br>
<button class="accordion">Weed Control</button>
<div class="panel">
<p>Apply Metribuzine 70WP@200gm per acre or Alachlor@2Ltr per acre before sprouts emergence. On 5-10% sprout emergence and ridge are infested with weeds then only apply Paraquat@500-750ml per acre.</p>
</div><br>
<button class="accordion"> Plant Protect</button>
<div class ="panel">
<p><b>Pest and their control:</b><br>
i.<b>Sweet potato weevils:</b> They damage the plant by feeding themselves on the epidermis of vines and leaves.<br> 
<b>Treatment:</b> To control weevils spray of 200 ml Rogor @150 ltr water per acre.<br>
ii.<b>Tuber Moth:</b> It is major pest in field as well as in storage. It make tunnel in potato and feeds on flesh. Use healthy and diseased free seeds for sowing. Use only well decomposed cow dung.<br>
If infestation is observed take spray of Carbaryl@400gm/100ltr of water.<br>
iii.<b>Aphid:</b> Adult and nymphs, both suck the sap thus weaken the plant. In severe infestation, they cause curling and deformation of young leaves. They secrete honey dew like substance and Sooty, black mould is developed on affected parts.<br>
Cut the foliage according region timing, to check infestation of Aphid. If Infestation of Aphid and Jassid observed take spray of Imidacloprid@50ml or Thiamethoxam@40gm/acre/150Ltr water.<br>
<br><b>Disease and their control:</b><br><br>
i.<b>Black scurf:</b> Black speck observed on tubers. Affected plant show drying up. In infected tubers, at time of sprouting, black, brown color appear on eyes.<br>
For planting use diseased free tubers. Before sowing, seed treatment with Mercury is essential. Avoid mono-cropping and follow crop rotation. If land kept fallow for two years then severity of disease is reduced.<br>
ii.<b>Early blight:</b> Necrotic spots observed on lower leaves. The fungus due which infestation occurred lies in soil. It rapidly spread in high moisture and low temperature.<br>
Avoid mono-cropping of crop and follow crop rotation. If infestation is observed, take spray of Mancozeb@30gm or Copper oxychloride@30gm/10Ltr water at 45 days 2-3 times at 10 days interval.<br>
iii.<b>Common scab:</b> It survives in field as well as in storage. Disease is spread rapidly in low moisture condition. Light brown to dark brown lesion are appeared on infected tubers.<br>
Use only well rotten cow dung for application in field. Use diseased free seeds for planting. Avoid deep planting of tubers. Follow crop rotation and avoid mono cropping in same field. Before sowing, treat seeds with Emisan 6@0.25% (2.5gm/Ltr of water) for five minutes.</p>
</div>
<br>
<button class="accordion">Harvesting</button>
<div class="panel">
<p>The crops get mature after 120 days of planting. Harvesting is mainly done when tubers get mature and the leaves turn yellow. Harvesting is done by digging tubers. It gives an average yield of 100 qtl/acre. Freshly harvested tubers are ready for market purposes.</p>
</div><br>
<div class="zoom">
<img alt="Sweet Potato" src="sweetpotato2.jpg" style="height:100%;width:140%">
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
