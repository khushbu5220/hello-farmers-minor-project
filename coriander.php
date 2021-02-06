<!DOCTYPE html>
<html>
<head>
<title>Coriander</title>
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
<h3>CORIANDER</h3>
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
<p>Coriander is an annual herb plant used as a spice in kitchen. It is mostly grown for its fruit and green leaves to provide flavor in dishes. Dry seeds of coriander contain essential oils which are used in confectionary, to mask offensive odours in pharmaceutical industry and for flavoring liquors. Green leaves are good source of Vitamin C and are used for making chutney, soups and sauces etc. Coriander also has good medicinal value. Tamil Nadu, Karnataka, Madhya Pradesh and Rajasthan are major producers of Coriander in India.</p><br>
<div style="float:right" class="zoom"><img alt="Coriander" src="coriander1.jfif"></div>
<button class="accordion"style="width:75%">Soil</button>
<div class="panel">
<p>It can grow in all types of soil but well drained loamy soils are suitable for good growth. pH range of soil should be 8-10.</p>
</div>
<br>
<button class="accordion"style="width:75%">Land Preparation</button>
<div class="panel">
<p>Land should be prepared well by giving 2-3 deep ploughing followed by planking to make uniform and leveled beds. Before last ploughing, add 40qtl/acre of well decomposed cow dung in soil.</p>
</div><br>
<button class="accordion"style="width:75%">Sowing</button>
<div class="panel">
<p><b>Time of sowing</b><br>
For vegetable purpose, optimum time for sowing is first week of October and when grown for seed purpose, complete sowing in last week of October to first week of November.<br>
<b>Spacing</b><br>
Keep row to row distance of 30 cm and plant to plant spacing of 15 cm.<br>
<b>Sowing Depth</b><br>
Depth of soil should not more than 3 cm.<br>
<b>Method of sowing</b><br>
Use Pora method for sowing.</p>
</div><br>
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
    <td>15-28°C</td>
    <td>75-100mm</td>
	<td>15-25°C</td>
	<td>22-28°C</td>
	</tr>
</table></center>
</div><br>
<button class="accordion">Seeding</button>
<div class="panel">
<p><b>Seed Rate:</b>For sowing one acre land, seed rate of 8-10kg is used. <br>

<b>Seed Treatment:</b>
For quick germination, before sowing crushed, break seeds into 2 parts. Before sowing, soak seeds in water for 8-12 hr. To prevent crop from wilt , root rot and damping off disease, treat seeds with Trichoderma viride/ Pseudomonas fluorescens @4gm/kg of the seeds before sowing.</p>
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
    <td>90</td>
  </tr>
  <tr>
    <td>2.</td>
    <td>SSP</td>
    <td>On soil test results</td>
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
    <td>40</td>
  </tr>
  <tr>
    <td>2.</td>
    <td>phosphorus</td>
    <td>-</td>
  </tr>
  <tr>
  <td>3.</td>
  <td>potash</td>
  <td>-</td>
  </tr>
</table><br>
  <p> Add more sufficient organic content while preparing soil.</p>
  </center></div><br><br>
  <button type="button">
<a href="https://www.amazon.in/Shiviproducts-Fertilizer-Coriander-Fenugreek-Flowering/dp/B07NJCQSS4" class="button button1">Buy Fertilizer Here</a>
</button>
</div>
<br>
<br>
<button class="accordion">Weeding</button>
<div class="panel">
<p>At initial growth stage of coriander, weed is a serious problem. Take one or two weeding operations to keep field weed free. Take first weeding 4week after sowing and second 5-6week after sowing.</p>
</div><br>
<button class="accordion">Irrigation</button>
<div class="panel">
<p>Irrigation should be given according to soil moisture present in the soil. First irrigation should be given immediately after sowing of seeds. Subsequent irrigations should be given at 10 to 12days interval.</p>
</div><br>
<button class="accordion">Pesticide and diesease</button>
<div class="panel">
<p><b>Pest and their control:</b><br>
i.<b>Aphid</b>:If Infestation of Aphid is observed, to control take spray of Imidacloprid@6ml/10Ltr water or Thiamethoxam@4gm/10Ltr of water.<br>
<br>
<b> Disease and their control:</b><br>
i.<b>Powdery Mildew</b>: Patchy, White powdery growth appears on upper surface of leaves.<br>
If infestation is observed take Spray of water soluble Sulphur@20gm/10Ltr of water. If needed repeat spray with interval of 10days or take spray of Propiconazole10EC (Topas)@200ml/acre in 200Ltr of water.<br>
ii.<b>Grain Mould</b>:To prevent crop from grain mould, take spray of Carbendazim@200gm/acre 20 days after grain set.<br>
iii.<b>Root Rot</b>:To protect crop from root rot, as preventive measure do soil application of Neem Cake@60gm/acre. Also treat seeds with Trichoderma viride@4gm/kg of seed.<br>
If infestation of root rot, observed in field to control, drenched soil with Carbendazim @5gm/Ltr of water or Copper oxychloride@2gm/litre of water.</p>
</div><br>
<br><button type="button">
<a href="https://www.amazon.in/Katyayani-Pesticide-Insecticide-Vegetable-Concentrated/dp/B07YL8B2Q7/ref=asc_df_B07YL8B2Q7/?tag=googleshopdes-21&linkCode=df0&hvadid=397003273195&hvpos=&hvnetw=g&hvrand=8067131156863665400&hvpone=&hvptwo=&hvqmt=&hvdev=c&hvdvcmdl=&hvlocint=&hvlocphy=9075215&hvtargid=pla-836499148946&psc=1&ext_vrnc=hi" class="button button2">Buy Pesticide Here</a>
</button>
<br><br>
<button class="accordion">Harvesting</button>
<div class="panel">
<p>When crop attained 20-25 cm height harvesting for green leaves can be started. Three to four cutting can be taken. When crop is grown for seed purpose, it is ready for harvesting in April month. Harvest when capsule gets matures but having green color. Over ripe capsule fetch lower price.</p>
</div><br>
<button class="accordion">Post Harvesting</button>
<div class="panel">
<p>After harvesting allowed crop to dry in sunlight for 6-7 days. After proper drying, carry out threshing after then cleaning operation. </p>
</div><br>
<div class="zoom">
<img alt="Coriander" src="coriander2.jfif">
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