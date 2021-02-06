<!DOCTYPE html>
<html>
<head>
<title>Pudina</title>
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
<h3>PUDINA</h3>
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

<p>Pudina also known as mentha is an energizing herb. Mint is used as mint oil, tooth pastes, mouth washes and flavoring agents in many dishes. Its leaves are used for preparing various drugs. Drugs prepared from mint are used in treatment of nasal, rheumatism, neuralgia, carminative and bronchial treatment. It is used in wide range of pharmaceutical. It is a small herb with average height of 1-2 feet with spreading root stocks. Leaves are 3.7-10cm long and have purplish small flowers. It is originated from Mediterranean basin. It is found mainly in Angola, Thailand, china, Argentina, Brazil, japan, India and Paraguay. Uttar Pradesh and Punjab are major mint growing states in India. 
</p><br>
<div style="float:right" class="zoom"><img alt="Pudina" src="pudina1.jpg"></div>
<button class="accordion" style="width:75%">Soil</button>
<div class="panel">
  <p>It grows in variety of soil i.e. medium to fertile deep soil having good water holding capacity. It can survive in poor water logging. It gives best result under rich humus soil. The pH ranging from 6-7.5 suited best for the crop</p>
</div>
<br>
<button class="accordion" style="width:75%">Land Preparation</button>
<div class="panel">
<p>For Mint plantation, beds of convenient size are made. Ploughing and harrowing should be done during land preparation. Application of organic manure i.e. FYM @100-120 qtl/acre is mixed with soil. Green manuring is added after FYM. </p>
</div>
<br>
<button class="accordion" style="width:75%">Sowing</button>
<div class="panel">
<p><b>Time of sowing</b><br>
Optimum time for sowing is from December-January.<br>
<b>Spacing</b><br>
Suckers are planted at end to end distance of 40 cm and row to row 60 cm distance.
<br> 
<b>Sowing Depth</b><br>
Depth should be 2-3 cm.<br>
<b>Method of Sowing</b><br>
Transplanting of suckers in main field.
<br></p>
</div>
<br>
<button class="accordion" style="width:75%">Seed</button>
<div class="panel">
<p><b>Seed Rate:</b><br>
Propagation is done by stolons or branches. For good growth, use stolons at the rate of 160 kg per acre land. Stolons are obtained from previous planting and obtained in the month of December and January.  
<br><br>
<b>Seed treatment:</b><br>
To protect crop from stolon root, before sowing do stolon treatment with Captan @0.25% or Agallol solution @0.3% or Benlate @0.1% for 2-3 minutes.
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
    <td>41°C</td>
    <td>100mm</td>
	<td>15-20°C</td>
    <td>30-40°C</td>
  </tr>
</table></center>
</div><br>
<button class="accordion">Nursery Management and Transplanting</button>
<div class="panel">
<p>Do cutting of suckers of length 10-14 cm before sowing. Sow Mint suckers on furrows of convenient size and width. Suckers are planted at end to end distance of 40 cm and row to row 60 cm distance. After sowing, irrigation is given to moist the soil.
 <br>After transplanting take spray of Sinbar @400 g/acre for weed control.
<br>To protect from weeding, herbicides spray of Atrazine and Simazine @400 g/acre, Pendimethalin @800 ml/acre and Oxyfluorfen @200 ml/acre are given.</p>
</div>
<br>
<button class="accordion">Fertilizer</button>
<div class="panel">
<center>
<b>Fertilizer Requirement (kg/acre)</b><br>
<table style="width:50%">
  <tr>
    <th>Urea (in gm)</th>
    <th>SSP (in gm)</th>
	<th>MURIATE OF POTASH (in gm)</th>
  </tr>
  <tr>
    <td>130</td>
    <td>80-100</td>
    <td>33</td>
  </tr>
</table>
<br><br>
<b>Nutrient Requirement (kg/acre)</b><br>
<table style="width:50%">
  <tr>
    <th>NITROGEN</th>
    <th>PHOSPHORUS</th>
	<th>POTASH</th>
  </tr>
  <tr>
    <td>58</td>
    <td>32-40</td>
    <td>20</td>
  </tr>
</table>
</center>
<br> 
<p>At the time of land preparation, apply FYM @80-120 qtl/acre and mix well in soil. Apply nitrogen@58 kg/acre in the form of urea@130 kg/acre, Phosphorus @32-40 kg in the form of single super phosphate @80-100 kg/acre and Potassium @20 kg/acre in the form of MOP@33 kg/acre.
</p>
</div>
<br>
<button class="accordion">Irrigation</button>
<div class="panel">
<p>In summers before monsoon depending upon climate and soil 6-9 irrigations must be done. After monsoon crop requires 3 irrigation i.e. one irrigation in each month (September, October and November). In winters, crop does not require too much irrigation but if no rains occur in winter then single irrigation should be given.</p>
</div><br>
<button class="accordion">Weed Control</button>
<div class="panel">
<p>Do frequent hand weeding and hoeing after the first harvest to keep field weed free. Application of Sinbar@400 g/acre is used to control weeds. Application of organic mulch with oxyfluorfen @200 ml/acre or application of pendimethalin herbicide @800 ml/acre is done to control weeds. If weed intensity is high, take post emergence spray of Dalapon @1.6 kg/acre or Gramoxone @1 ltr/acre and pre emergence spray of Diuron @ 800 g/acre or Terbacil @800 g/acre.</p>
</div><br>
<button class="accordion"> Plant Protect</button>
<div class ="panel">
<p><b>Pest and their control:</b><br>
<b>Hairy caterpillar:</b> Caused by Dicarsia obliqua. They feed on green leaves and damage the whole plant.
<br>To control this pest application of Malathion or Thiodan @1.7ml in litre of water is done.
<br><br>
<b>Cutworms:</b>Caused by Agrotis flammatra. It damages the collar region of the plant during spring season.
<br>To control this disease soil is treated with Phorate @10gm before planting is done.<br><br>
<b>Red Pumpkin Beetle:</b>Caused by Aulocophora foevicollis. It feeds on fresh greeny leaves and buds.
<br>To control this disease application of Thiodan @1ml in 1 lire of water is given.<br><br>
<b>Mint Leaf Roller:</b>Caused by Syngamia abrupatalis. The pest folds the leaf and feed themselves inside the leaf mainly in August-September.
<br>To get rid of this disease application of Thiodan @1.5ml in 1 litre of water is given 2-3 times at weekly intervals.<br><br>
<b>Disease and their control:</b><br>
<b>Stolon Rot:</b>Caused by Macrophomina phaseoli. It occurs on underground parts of the plant causes visible brown lesions resulting in decay.
<br>To control this disease application of Captan @0.25% or Agallol solution @0.3% or Benlate @0.1% are given for 2-3 minutes on the stolons is given.<br><br>
<b>Fusarium Wilt:</b>Caused by Fusarium oxysporum. It caused yellowing, curling and drying of leaves.;
<br>To get rid of this disease application of Bavistin, Benlate and Topsin is given.<br>
<br>
<b>Leaf Blight:</b> Caused by Alternaria sp. It causes damage of foliage in summer season.
<br>To control this disease application of copper fungicide is done.
<br><br>
</p>
</div>
<br>
<button class="accordion">Harvesting</button>
<div class="panel">
<p>Plants are ready for harvesting after 100-120 days. Harvesting is done when yellowing of lower leaves starts. Harvesting is done with the help of sickle and herbs are removed 2-3cm above ground. Next harvesting is done at the interval of 80 days after first harvesting. For processing fresh leaves are used.</p>
</div>
<br>
<button class="accordion">Post Harvesting</button>
<div class="panel">
<p>After harvesting, distillation is done by stem distillation method. Then mint oil is packed in large steel or aluminum containers. Quick transports are done for less spoilage of crop. From mint leaves several products like mint oil and chutneys are made after processing. </p>
</div><br>
<div class="zoom">
<img alt="pudina" src="pudina2.jpg">

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
<br><br><br><br>
</header>
</body>
</html>
