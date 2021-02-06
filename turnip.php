<!DOCTYPE html>
<html>
<head>
<title>Turnip</title>
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
<h3>TURNIP</h3>
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

<p>It is hardy cool weather crop belongs to family of Brassicaceae. It is grown for its roots as well as for green leaves. Turnip root is rich source of Vitamin C where as its leaves are rich source of Vitamin A, Vitamin C, Vitamin K, foliate and Calcium. It is grown in temperate, tropical as well as sub-tropical region of India. Commonly grown turnip is of white color. Bihar, Punjab, Haryana, Himachal Pradesh and Tamil Nadu are major turnip growing states in India.</p>
<br>
<div style="float:right" class="zoom"><img alt="Turnip" src="turnip1.jpg"></div>
<button class="accordion" style="width:75%">Soil</button>
<div class="panel">
  <p>It can be grown on variety of soil but turnip give best result when grown on loamy soils rich in organic matter. Avoid heavy or compact soils also very light soils as it produce rough, malformed roots. Ideal pH of soil for good growth is 5.5 to 6.8.</p>
</div>
<br>
<button class="accordion"style="width:75%">Land Preparation</button>
<div class="panel">
<p>Plough land thoroughly and make land weed and clods free. Add well decomposed cow dung of 60-80 qtl/acre and mix well in soils at the time of land preparation. Avoid use of undecomposed or free cowdung as it will leads to forking of fleshy roots. </p>
</div>
<br>
<button class="accordion"style="width:75%">Sowing</button>
<div class="panel">
<p><b>Time of sowing</b><br>
August-September is best time for sowing desi varieties whereas October-November month is ideal for European varieties.<br>
<b>Spacing</b><br>
Use row to row spacing of 45 cm and plant to plant spacing of 7.5 cm.<br>
<b>Sowing depth</b><br>
Sow seeds at depth of 1.5 cm.<br>
<b>Method of Sowing</b><br>
Direct sowing on bed, in lines or on ridge.</p>
</div>
<br>
<button class="accordion"style="width:75%">Climate</button>
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
    <td>12-30°C</td>
    <td>200-400cm</td>
	<td>10-15°C</td>
    <td>18-23°C</td>
	</tr>
</table></center>
</div><br>
<button class="accordion">Seed</button>
<div class="panel">
<p><b>Seed Rate</b><br>
For sowing of one acre land seed rate of 2-3 kg is sufficient. <br>
<b>Seed Treatment</b><br>
Before sowing treat seed with Thiram@3gm per kg of seeds to protect crop from crown rot.
</p>
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
<p>Amount of fertilizer to be applied is vary from place to place as it depend upon various factor like climate, soil type, fertility status etc.<br>
Along with well decomposed cowdung, apply Nitrogen@25 kg (in the form of Urea@55 kg), Phosphorus@12 kg (in the form of SSP@ 75 kg/acre) per acre in soil at time of sowing.
</p>
</div>
<br>

<button class="accordion">Irrigation</button>
<div class="panel">
<p>After sowing, apply first irrigation, it will help in good germination. Depending upon soil type and climate, apply remaining irrigations at the interval of 6-7 days in summer and 10-12 days interval in winter month. Overall turnip required five to six irrigations. Avoid excessive irrigation as it will leads ugly shape of roots and numerous hair growth.</p>
</div><br>
<button class="accordion">Weed Control</button>
<div class="panel">
<p>10-15 days after germination, carry out thinning operation. Take interculture operation like weeding and hoeing to keep check on weed growth also to provide soil aeration. Take one weeding operation, two to three weeks after sowing. After weeding, carryout earthing operation.</p>
</div><br>
<button class="accordion"> Plant Protect</button>
<div class ="panel">
<p><b>Disease and their control:</b><br><br>
i.<b>Crown rot:</b> As a preventive measure, before sowing treat seed with Thiram@3 gm per kg of seeds. 7th and 15th day after sowing, drenched soil around seedlings with Captan@200 gm in 100 ltrs water.</p>
</div>
<br>
<button class="accordion">Harvesting</button>
<div class="panel">
<p>Depending upon variety uproot turnip roots after attaining marketable size i.e. when they are 5-10 cm in diameter. Generally roots are reached to marketable size in 45-60 days i.e. depending upon variety after sowing. Delay in harvesting will leads to tough and fibrous root formation. Carry out harvesting in evening time. After harvesting, roots along with green tops are washed with water. They are filled into the basket and then sent to market. Under cool and moist condition, roots can be stored for 2-3 days where as they can store for 8-15 week at 0-5 °C temperature with 90-95% relative humidity.</p>
</div><br>
<button class="accordion">Seed Production</button>
<div class="panel">
<p>For seed purpose, sow seeds of turnip in mid-September and then transplant seedling in first week of December. Use spacing of 45 cm x15 cm. Apply N@30 kg (in form of Urea@65 kg) and P@8 kg (in form of SSP@50 kg) per acre. At time of sowing apply whole amount of Phosphorus and half amount of Nitrogen. Apply remaining amount of Nitrogen, 30 days after sowing. Carry out harvesting when 70% pods changes its color to light yellow.</p>
</div><br>
<div class="zoom">
<img alt="Turnip" src="turnip2.jpg" style="height:100%;width:140%">
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
