<!DOCTYPE html>
<html>
<head>
<title>Urad</title>
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
<h3>URAD</h3>
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
<div style="float:right" class="zoom"><img alt="Urad" src="urad1.jfif"></div>
<button class="accordion"style="width:75%">Choose a good location</button>
<div class="panel">
<p> Saline - alkaline soil, also waterlogged soils are not suitable for mash cultivation. For good growth, it required stiff loamy or heavy soils with good water retentive capacity.</p>
</div>
<br>
<button class="accordion"style="width:75%">Soil preparation</button>
<div class="panel">
<p>To bring soil to fine tilth give two to three ploughing. After each ploughing carry out planking. Keep field weed free.</p>
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
    <td>15-30°C</td>
    <td>500-700mm</td>
	</tr>
</table></center>
</div><br>
<button class="accordion"style="width:75%">Seeding</button>
<div class="panel">
<p><b>Seed Rate:</b>For kharif sowing use seed rate of 7-8kg/acre whereas for summer sowing use seed rate of 19-20kg/acre of bold seeds.<br>

<b>Seed Treatment:</b>
Before sowing treat seeds with Captan or Thiram or Mancozeb or Carbendazim@2.5gm per kg of seeds. After then dry them in shades. After chemical treatment treat seed with Rhizobium@2gm/kg of seeds.    
<br>Use any one fungicides from below
</p><br><center>
<table>
<tr style="background-color:gold">
<th>Fungicide/Insecticide name</th>
<th>Quantity (Dosage per Kg seed)</th>
</tr>
<tr style="background-color:yellow">
<td>Carbendazim</td>
<td>2.5gm</td>
</tr>
<tr style="background-color:yellow">
<td>Captan</td>
<td>2.5gm</td>
</tr>
<tr style="background-color:yellow">
<td>Thiram</td>
<td>2.5gm</td>
</tr>
<tr style="background-color:yellow">
<td>Mancozeb</td>
<td>2.5gm</td>
</tr>
</table></center>
</div>
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
    <td>11 kg</td>
  </tr>
  <tr>
    <td>2.</td>
    <td>SSP</td>
    <td>60 kg</td>
  </tr>
  <tr>
  <td>3.</td>
  <td>Muriate of Potash</td>
  <td>On soil test</td>
  </tr>
  <tr>
  <td>4.</td>
  <td>Zinc</td>
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
    <td>5 kg</td>
  </tr>
  <tr>
    <td>2.</td>
    <td>phosphorus</td>
    <td>10 kg</td>
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
<a href="https://www.amazon.in/s?k=fertilizer+for+black+gram&ref=nb_sb_noss_2" class="button button1">Buy Fertilizer Here</a>
</button>
</div>
<br><br>
<button class="accordion">Planting</button>
<div class="panel">
<p><b>Time of sowing:</b>
Optimum time for kharif sowing is last week of June to first week of July. Optimum time for summer cultivation is from March to April. For sub-mountainous region, complete sowing from 15-25 July.
<br>

<b>Spacing:</b>
Use row spacing of 30 cm and plant to plant spacing of 10 cm for Kharif sowing. For Rabi sowing use row spacing of 22.5 cm and plant to plant spacing of 4-5 cm.<br>
 
<b>Sowing Depth:</b>
Sow seeds at depth of 4-6 cm. Mash grown in hilly areas are of better quality.
<br>

<b>Method of Sowing:</b>
For sowing use Kera or Pora method or sow seeds by seed drill.
<br>
</div>
<br>
<button class="accordion">Caring</button>
<div class="panel">
<p><b>Fertilization: </b>At time of sowing, apply Nitrogen@5kg in form of Urea@11kg per acre and Phosphorus@10kg in form of SSP@60kg/acre.<br><br>
<b>Watering: </b>Mash is grown as a kharif crop. If needed provide irrigation depending upon the climatic conditions.
<br><br>
<b>Weeding:</b>To keep field weed free, one or two hoeing are required. Take first hoeing one month after sowing. To control weed chemically, after sowing, within two days, take spray of Pendimethalin@1Ltr/acre in 100-200Ltrs of water.</p>
</div>
<br>
<button class="accordion">Pesticide and diesease</button>
<div class="panel">
<p><b>Pest and their control:</b><br>
i.<b>Tobacco caterpillar:</b>If infestation is observed, take spray of Acephate 57SP@800gm/acre or Chlorpyriphos 20EC@ 1.5Ltr/acre. If necessary take second spray 10days after first spray.
<br>
ii.<b>Hairy Caterpillar:</b>To control hairy caterpillar pick caterpillar manually and destroyed by crushing or putting in kerosene water when infestation is low. In case of high infestation, take spray of Quinalphos@500ml or Dichlorvos@200ml/acre.
<br>
iii.<b>Pod Borer:</b>Serious pest cause heavy loss in yield. If infestation is observed, take spray of Indoxacarb 14.5SC@200ml or Acephate 75SP@800gm or Spinosad 45SC@60ml/acre. Repeat spray after two weeks.
<br>
iv.<b>Mite:</b>If infestation is observed take spray of Dimethoate 30EC@150ml/acre.
<br>
v.<b>Blister beetle:</b>They cause damage at flowering stage. They feed on flowers, buds thus prevent grain formation.
<br>If infestation is observed, take spray of Indoxacarb 14.5SC@200ml or Acephate 75SC@800gm/acre. Carry out spraying in evening hours and if necessary take second spray 10 days after first spray.
<br>
vi.<b>Sucking pest (Jassid, aphid, white fly):</b>If infestation is observed, take spray of Malathion@375ml or Dimethoate@250ml or Oxydemeton Methyl@250ml/acre.
<br>For white fly control, take spray of Thiamethoxam@40gm Triazophos@600ml/acre. If necessary take second spray 10days after first spray.
<br><br>
<b> Disease and their control:</b><br>
i.<b>Yellow mosaic virus:</b>It is spread due to white fly. Irregular yellow, green patches are observed on leaves. Pods not developed on infected plants.
<br>Grow yellow mosaic virus resistant varieties. For white fly control, take spray of Thiamethoxam@40gm, Triazophos@ 600ml/acre. If necessary take second spray 10days after first spray.
<br>
ii.<b>Cercospora leaf spot:</b>As a preventive measure, do seed treatment with Captan and Thiram. Use cercospora leaf spot resistant variety. If infestation is observed take spray of Zineb 75WP@400gm/acre. Take two to three sprays at interval of 10days.
</p></div><br><br>
<button type="button">
<a href="https://www.amazon.in/s?k=pesticides+for+black+gram&ref=nb_sb_noss" class="button button2">Buy Pesticide Here</a>
</button>
<br><br>
<button class="accordion">Harvesting</button>
<div class="panel">
<p>Best time for harvesting of mash is when leaves are shed and pods become greyish black. Cut crop with sickle and then spread harvested crop on floor to dry. Then threshing is done and seeds are separated from pods.</p>
</div>
<br>
<div class="zoom">
<img alt="Urad" src="urad2.jfif">
</div><br><br><br>
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