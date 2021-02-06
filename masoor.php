<!DOCTYPE html>
<html>
<head>
<title>Masoor</title>
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
<h3>MASOOR</h3>
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

<div style="float:right" class="zoom"><img alt="Masoor" src="masoor1.jfif"></div>
<button class="accordion" style="width:75%">Choose a good location</button>
<div class="panel">
<p>Lentil can be grown on all type of soil. Saline, Alkaline or waterlogged soils should be avoided. Soil should be friable and weed free so that seed could be placed at uniform depth.</p>
</div>
<br>
<button class="accordion" style="width:75%">Soil preparation</button>
<div class="panel">
<p>In case of light soils, less tillage or soil manipulation is required to prepare seed-bed. One deep ploughing followed by 3-4 cross harrowing’s should be given in case of heavy soils. 2-3 ploughings are sufficient for proper pulverization of land. Levelling of field should also be done for proper distribution of water. Proper moisture should be present in the field at the time of sowing seeds.</p>
</div><br>
<button class="accordion"style="width:75%">Planting</button>
<div class="panel">
<p><b>Time of sowing:</b>
Seed should be sown in the mid of October to First week of November.
<br>

<b>Spacing:</b>
Seeds should be sown in lines 22 cm apart. Under late sowing conditions, row- spacing should be reduced to 20 cm.<br>
 
<b>Sowing Depth:</b>
Sow seeds at depth of 3-4 cm.
<br>

<b>Method of Sowing:</b>
For Sowing use pora method or seed cum fertilizer drill. Seed can also be sown by broadcasted manually.
<br>
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
    <td>18°C - 20°C</td>
    <td>1000 mm</td>
	</tr>
</table></center>
</div><br>
<button class="accordion">Seeding</button>
<div class="panel">
<p><b>Seed Rate:</b>Seed rate of 12-15 kg/acre is optimum.<br>

<b>Seed Treatment:</b>Seed should be treated with Captan or Thiram @3gm/kg of seed before sowing.</p>
<center>
<table>
<tr style="background-color:gold">
<th>Fungicide/Insecticide name</th>
<th>Quantity (Dosage per kg seed)</th>
</tr>
<tr style="background-color:yellow">
<td>Captan</td>
<td>3gm</td>
</tr>
<tr style="background-color:yellow">
<td>Thiram</td>
<td>3gm</td>
</tr>
</table>
</div>
<br>
<div>
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
    <td>12 kg</td>
  </tr>
  <tr>
    <td>2.</td>
    <td>SSP</td>
    <td>50 kg</td>
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
    <td>5 kg</td>
  </tr>
  <tr>
    <td>2.</td>
    <td>phosphorus</td>
    <td>8 kg</td>
  </tr>
  <tr>
  <td>3.</td>
  <td>potash</td>
  <td>On soil test</td>
  </tr>
</table>
  </center></div><br><br>
  <button type="button">
<a href="https://www.google.com/search?rlz=1C1CHBD_enIN921IN921&biw=1536&bih=666&tbm=shop&sxsrf=ALeKk035ZY_oUku4N6ab0tfh5R_79RJySw%3A1603545212324&ei=fCiUX8qwE8SU4-EP9LmgeA&q=urea+fertilizer&oq=urea&gs_lcp=Cgtwcm9kdWN0cy1jYxABGAAyBAgAEEMyAggAMgIIADICCAAyAggAMgIIADIECAAQAjIECAAQAjIECAAQAjIECAAQGDoECCMQJzoHCCMQ6gIQJzoICAAQsQMQgwFQgOABWMT2AWChigJoAXAAeASAAakCiAGMEZIBBTAuNC42mAEAoAEBqgEPcHJvZHVjdHMtY2Mtd2l6sAEKwAEB&sclient=products-cc" class="button button1">Buy Fertilizer Here</a>
</button>
</div>
<br>
<br>
<button class="accordion">Caring</button>
<div class="panel"><center>
<p><b>Fertilization:</b>5 kg of Nitrogen (12 kg of Urea), 8kg of P2O5 (50 kg of Superphosphate) should be applied per acre at time of sowing when seeds are inoculated with rhizobium culture. In case, seeds are not inoculated with rhizobium, doubled the dose of P2O5.<br><br>
<b>Watering:</b>Lentil is mainly grown as a rainfed crop. It requires 2-3 irrigations in case of irrigated conditions depending upon the climatic conditions. One irrigation should be provided 4 weeks after sowing and second at flowering stage. Pod formation and flower initiation are critical stages of water requirement.
<br><br>
<b>Weeding:</b>Main weeds found in lentil are Chenopodium album (Bathua), Vicia sativa (ankari), Lathyrus spp (chatrimatri) etc. They can be controlled by 2 hoeing at 30 and 60 days interval. 45-60 days of weed free period should be maintained for proper crops stand and yield. Pre-emergence application of Stomp 30EC@550ml/acre with one hoeing at 50 days after sowing, helps in effective weed control.</p>
</center>
</div>
<br>
<button class="accordion">Pesticide and diesease</button>
<div class="panel">
<p><b>Pest and their control:</b><br>
i.<b>Pod Borer:</b>It mainly fed upon green plant leaves, flowers, pod-grains. It is a serious pest of lentil which cause excessive yield loss. It can be controlled by spraying of 900 gm Hexavin 50WP in 90 litres of water per acre at the time of flowering. Spray should be repeated after 3 weeks if necessary.
<br><br>
<b> Disease and their control:</b><br>
i.<b>Rust:</b>Yellowish white pustules develop on stem branches, pods and leaves of plants. They may appear singly or in groups. Small pustules may grow into large postules slowly. In severe cases, affected plants may dry up and give burnt appearance. Growing of tolerant varieties can help to prevent rust. To control spray of 400 gm M-45 @200 ltr water per acre.
<br><br>
ii.<b>Blight:</b>Dark brown spots are formed on stem, leaves and pods. These lesions slowly elongates. Sometimes spots are formed in the form of concentric rings. Use of Disease free seed, destroy diseased plant debris after harvest to reduce the chances of blight. To control spray of 400 gm Bavistin @200 ltr water per acre.
<br><br>
</p></div><br><br>
<button type="button">
<a href="https://www.google.com/search?rlz=1C1CHBD_enIN921IN921&biw=1536&bih=666&tbm=shop&sxsrf=ALeKk03PlB1xUlB3xp1If3ooTyVNReEidQ%3A1603545247503&ei=nyiUX7CdHqqQ4-EPvqOkkAs&q=pesticide+for+masoor&oq=pesticide+for+masoor&gs_lcp=Cgtwcm9kdWN0cy1jYxADOgUIABDAAzoECAAQEzoECCMQJzoHCCMQ6gIQJzoECAAQQzoCCAA6CAgAELEDEIMBOgQIABAKOgQIABACOgQIABAYOgYIABAKEBM6CAgAEAUQHhATOgoIABAIEAoQHhATOggIABAeEBMQGDoKCAAQBRAeEBMQGEoFCDYSATFQquMDWMfCBGClxgRoA3AAeASAAcYEiAGNLpIBCzAuMTYuMTEuNS0xmAEAoAEBqgEPcHJvZHVjdHMtY2Mtd2l6sAEKwAEB&sclient=products-cc&ved=0ahUKEwjw6O7Gp83sAhUqyDgGHb4RCbIQ4dUDCAs&uact=5" class="button button2">Buy Pesticide Here</a>
</button>
<br><br>
<button class="accordion">Harvesting</button>
<div class="panel">
<p>Harvesting should be done at proper time when plant dry up and pods mature. Over-ripening of pods should be avoided as produce may be lost due to shattering. Plants should be beaten by sticks to thresh. After threshing, seed is cleaned and dried up in the sunshine. Moisture content should be 12% at the time of storage.</p>
</div>
<div class="zoom">
<img alt="Masoor" src="masoor2.jfif">
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