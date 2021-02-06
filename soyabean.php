<!DOCTYPE html>
<html>
<head>
<title>Soyabean</title>
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
<h3>SOYABEAN</h3>
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
<div style="float:right" class="zoom"><img alt="Soyabean" src="soyabean1.jfif"></div>
<button class="accordion"style="width:75%">Choose a good location</button>
<div class="panel">
<p>It gives good result, when grown on well drained, fertile loamy soils. pH of 6 to 7.5 is favourable for optimum yield of soybean. Water logged, saline/alkaline soils are not suitable for its cultivation. Low temperature affect crop severely.</p>
</div>
<br>
<button class="accordion"style="width:75%">Soil preparation</button>
<div class="panel">
<p>Prepared field by giving two to three ploughings followed by planking. </p>
</div><br>
<button class="accordion" style="width:75%">Climate</button>
<div class="panel">
  <center>
<table style="width:50%">
  <tr style="background-color:orchid">
    <th>Temperature</th>
    <th>Rainfall</th>
  </tr>
  <tr style="background-color:magenta">
    <td>18-38°C</td>
    <td>30-60cm</td>
	</tr>
</table></center>
</div><br>
<button class="accordion"style="width:75%">Seeding</button>
<div class="panel">
<p><b>Seed Rate:</b>Use seed rate of 25-30 kg for sowing in one acre land.<br>

<b>Seed Treatment:</b>
To protect seeds from soil borne diseases, treat seeds with Thiram or Captan@3 gm per kg of seeds.    
</p></div>
<br><br><br><br>
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
    <td>28 kg</td>
  </tr>
  <tr>
    <td>2.</td>
    <td>SSP</td>
    <td>200 kg</td>
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
    <td>12.5 kg</td>
  </tr>
  <tr>
    <td>2.</td>
    <td>phosphorus</td>
    <td>32 kg</td>
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
<a href="https://www.indiamart.com/proddetail/fertilizer-filler-for-soybean-crops-4690041273.html" class="button button1">Buy Fertilizer Here</a>
</button>
</div>
<br>
<br>
<button class="accordion">Planting</button>
<div class="panel">
<p><b>Time of sowing:</b>
First fortnight of June is best time for sowing Soybean.
<br>

<b>Spacing:</b>
While sowing use row to row spacing of 45 cm and plant to plant spacing of 4-7 cm.<br>
 
<b>Sowing Depth:</b>
Sow seeds at depth of 2.5-5 cm.
<br>

<b>Method of Sowing:</b>
Sow seeds with help of seed drill.
</p>
</div>
<br>
<button class="accordion">Caring</button>
<div class="panel">
<p><b>Fertilization -</b>Apply FYM or well decomposed cowdung@4 ton/acre. Also apply Nitrogen@12.5 kg and Phosphorus@32 kg in form of Urea@28kg and SSP@200 kg per acre at time of sowing.
<br>To obtain good growth and optimum yield, take spray of Urea@3 kg/150 ltr of water on 60th and 75th day after sowing.
 <br><br>
<b>Watering -</b>Overall crop required three to four irrigation. Irrigation at time of pod filling stage is necessary. Water stress at this period will affect yield drastically. Apply irrigation depending upon rainfall conditions. No irrigation required in good rainfall conditions.
<br><br>
<b>Weeding -</b>To keep field weed free, two hoeing are required, give first hoeing 20 days after sowing and second hoeing 40 days after sowing.
<br>To control weed chemically, after sowing, within two days, take spray of Pendimethalin@800 ml/acre in 100-200 ltrs of water.
 </p>
</div>
<br>
<button class="accordion">Pesticide and diesease</button>
<div class="panel">
<p><b>Pest and their control:</b><br>
i.<b>Tobacco caterpillar:</b> If infestation is observed, take spray of Acephate 57SP@800 gm/acre or Chlorpyriphos 20EC@ 1.5 ltr/acre. If necessary take second spray 10 days after first spray.
<br>
ii.<b>White Fly: </b>For white fly control, take spray of Thiamethoxam@40 gm or Triazophos@300 ml/acre. If necessary take second spray 10 days after first spray.
<br>
iii.<b>Hairy Caterpillar:</b>  To control hairy caterpillar pick caterpillar manually and destroyed by crushing or putting in kerosene water when infestation is low. In case of high infestation, take spray of Quinalphos@300 ml or Dichlorvos@200 ml/acre.
<br>
iv.<b>Blister beetle:</b>They cause damage at flowering stage. They feed on flowers, buds thus prevent grain formation.
<br>If infestation is observed, take spray of Indoxacarb 14.5SC@200 ml or Acephate 75SC@800 gm/acre. Carry out spraying in evening hours and if necessary take second spray 10 days after first spray. 
<br><br>
<b> Disease and their control:</b><br>
i.<b>Yellow mosaic virus:</b> It is spread due to white fly. Irregular yellow, green patches are observed on leaves. Pods not developed on infected plants.
<br>Grow yellow mosaic virus resistant varieties. For white fly control, take spray of Thiamethoxam@40 gm, Triazophos@ 400 ml/acre. If necessary take second spray 10 days after first spray. 
</p></div><br><br>
<button type="button">
<a href="https://www.indiamart.com/proddetail/agriculture-soybean-pesticide-11826457191.html" class="button button2">Buy Pesticide Here</a>
</button>
<br><br>
<button class="accordion">Harvesting</button>
<div class="panel">
<p>Pods become dry and leaves changes their color to yellow and fall of, it is sign of crop is ready for harvesting. Harvest the crop with sickle or by hand. After harvesting, carry out threshing operation. </p>
</div><br>
<button class="accordion">Post-harvesting</button>
<div class="panel">
<p>After drying, carry out proper cleaning of seeds. Remove small size seeds, damaged seeds and crop stalks.</p>
</div>
<br>
<div class="zoom">
<img alt="Soyabean" src="soyabean2.jfif">
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