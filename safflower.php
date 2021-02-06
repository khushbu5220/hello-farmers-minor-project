<!DOCTYPE html>
<html>
<head>
<title>Safflower</title>
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
<h3>SAFFLOWER</h3>
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

<div style="float:right" class="zoom"><img alt="Safflower" src="safflower1.jfif"></div>
<button class="accordion"style="width:75%">Choose a good location</button>
<div class="panel">
<p>Safflower is grown on maximum variety of soil. It is well grown in drained sandy loam soil and the soil which is rich in organic matter.</p>
</div>
<br>
<button class="accordion"style="width:75%">Soil preparation</button>
<div class="panel">
<p>To bring soil to the fine tilth stage land should be ploughed several times so that all weeds are removed which would be present their previously. Low-lying land must be eluded as water logged situation is liable to destroy by wilts as well as root rots.</p>
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
    <td>15-20°C</td>
    <td>60-90cm</td>
	</tr>
</table></center>
</div><br>
<button class="accordion"style="width:75%">Seeding</button>
<div class="panel">
<p><b>Seed Rate:</b>For sowing, use seed rate of 6 kg for one acre.<br>

<b>Seed Treatment:</b>
The seeds must be treated with Captan or Agrosan GN @ 3 gm/kg of seed before sowing. Healthy and disease free seeds must be soaked in water for overnight for better germination.    
</p></div>
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
    <td>35 kg</td>
  </tr>
  <tr>
    <td>2.</td>
    <td>SSP</td>
    <td>On soil test</td>
  </tr>
  <tr>
  <td>3.</td>
  <td>Muriate of Potash</td>
  <td>On soil test</td>
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
    <td>16 kg</td>
  </tr>
  <tr>
    <td>2.</td>
    <td>phosphorus</td>
    <td>On soil test</td>
  </tr>
  <tr>
  <td>3.</td>
  <td>potash</td>
  <td>On soil test</td>
  </tr>
</table><br>
  <p> Add more sufficient organic content while preparing soil.</p>
  </center></div><br><br>
  <button type="button">
<a href="https://www.amazon.in/s?k=fertilizer+for+safflower&ref=nb_sb_noss" class="button button1">Buy Fertilizer Here</a>
</button>
</div>
<br><br>
<button class="accordion">Planting</button>
<div class="panel">
<p><b>Time of sowing:</b>
Optimum time for sowing seeds is last week of October to first week of November.
<br>

<b>Spacing:</b>
Use Plant to Plant spacing of 15 cm and row to row spacing of 45 cm.
<br>
 
<b>Sowing Depth:</b>
Sow seeds at depth of 5-7 cm.
<br>

<b>Method of Sowing:</b>
Sowing is done through drilling method.</p>
</div>
<br>
<button class="accordion">Caring</button>
<div class="panel">
<p><b>Fertilization:</b>Apply 16 kg N (35 kg urea) per acre. If soil nutrient is low apply phosphorus and all these fertilizers should be drilled before sowing.<br><br>
<b>Watering:</b>This crop can be grown even in areas where irrigation is not required if soil is moist as seasonal varies. Water is necessary during the flowering stage so once irrigation is required in 30 days for better yield. For area where soil is less moist, apply one heavy pre- sowing irrigation, it will be beneficial for better growth.
<br><br>
<b>Weeding:</b>Safflower is extremely  vulnerable to weed while rosette phase which ends around 25-30 days in deccan areas as well as two month or even more in other areas with long term winter. The area must be retained weed-free within this crucial period via regular weeding with intercultural 1-2 times 25-30 rather 45-50 days after sowing. Pre-plant use of Trifluralin @ 200 gm/acre or EPTC@200 gm/acre or pre-emergence use of Atrazine @ 800 gm/acre or Alachlor @600 gm/acre is used for efficient weed regulation in safflower.
 </p>
</div>
<br>
<button class="accordion">Pesticide and diesease</button>
<div class="panel">
<p><b>Pest and their control:</b><br>
i.<b>Green peach aphid (Myzus persicae):</b>  Its appearance is like burnt on the plant.
<br>
ii.<b>Safflower aphid: </b>These are seen on tender shoot, leaves as well as stem it make the plant look weak and some areas are dried up.
<br>
Control: Spray 100 ml Chlorpyriphos 20EC in 100 ltr of water/acre. If required can be repeated even after 15 days.
<br><br>
<b> Disease and their control:</b><br>
i.<b>Wilt and heat rot: </b> In this plant turn yellow later with brown and finally die. Sclerotic are fungus type which is seen on the crown, adjoin root areas, and stem.
<br>Control: Use Healthy and disease free seeds. Soil should not be piled up around stem in rainy season.
</p></div><br><br>
<button type="button">
<a href="https://www.amazon.in/OrganicDews-Neem-Concentrate-Plants-Measuring/dp/B00VAQNFL4/ref=sr_1_9_mod_primary_lightning_deal?dchild=1&keywords=pesticide+for+safflower&qid=1603480691&sbo=Tc8eqSFhUl4VwMzbE4fw%2Fw%3D%3D&smid=A2YQCDMINRJ26S&sr=8-9" class="button button2">Buy Pesticide Here</a>
</button>
<br><br>
<button class="accordion">Harvesting</button>
<div class="panel">
<p>Safflower matures in 150-180 days. Harvesting should be done in mid-May when the flowers turn in yellow brown in color.</p>
Safflower matures in 150-180 days. Harvesting should be done in mid-May when the flowers turn in yellow brown in color.</div>
<br>
<div class="zoom">
<img alt="Safflower" src="safflower2.jfif">
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