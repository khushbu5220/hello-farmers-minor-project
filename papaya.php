<!DOCTYPE html>
<html>
<head>
<title>Papaya</title>
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
<h3>PAPAYA</h3>
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


<div style="float:right" class="zoom"><img alt="Papaya" src="papaya1.jfif"></div>
<button class="accordion"style="width:75%">Choose a good location</button>
<div class="panel">
<p>It is grown in wide range of soils. Hilly soil having well drainage system is suited best for papaya farming. Avoid cultivation in sandy or heavy soil. The pH soil ranging from 6.5-7.0 is best for papaya farming.</p>
</div>
<br>
<button class="accordion"style="width:75%">Soil preparation</button>
<div class="panel">
<p>For papaya farming, well prepared land is required. To bring the soil to fine tilth leveling is required. At the time of last ploughing, apply FYM (Farm Yard Manure).</p>
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
    <td>22-36°C</td>
    <td>35-250cm</td>
	</tr>
</table></center>
</div><br>
<button class="accordion"style="width:75%">Seeding</button>
<div class="panel">
<p><b>Seed Rate:</b>Use 150-200gm seeds for per acre land.<br>

<b>Seed Treatment:</b>
Before seed sowing, treat the seeds with Captan@3gm to protect the plant from soil borne diseases.    
</p></div>
<br>
<button class="accordion">Fertilizer</button>
<div class="panel">
<p>Do not add any fertilizer at the time of plant transplanting. Afterwards N:P:K(19:19:19)@1kg is added two times in February month.</p>
</div><br><br>
  <button type="button">
<a href="https://www.indiamart.com/proddetail/papaya-bio-fertilizer-21631960688.html" class="button button1">Buy Fertilizer Here</a>
</button>
</div>
<br><br>
<button class="accordion">Planting</button>
<div class="panel">
<p><b>Time of sowing:</b>
Seeds are sown in second week of July to third week of September and transplanting is done from first week of September to mid-October.
<br>

<b>Spacing:</b>
Use plant to plant spacing of 1.5 X 1.5m.<br>
 
<b>Sowing Depth:</b>
1cm deep seeds are sown.
<br>

<b>Method of Sowing:</b>
Propagation method is used.</p>
</div>
<br>
<button class="accordion">Caring</button>
<div class="panel">
<p><b>Watering:</b>Irrigation will depend upon season, crop growth and soil type.
<br><br>
<b>Weeding:</b>Weed can be controlled by hand-hoeing and also controlled by chemically, use glyphosate@1.6litre per 150 litre of water. Use glyphosate only on weeds not on crop plants.</p>
</div>
<br>
<button class="accordion">Pesticide and diesease</button>
<div class="panel">
<p><b>Pest and their control:</b><br>
i.<b>Aphid:</b>They suck the sap of the plant. Aphids help in spreading disease in plants.
<br>Treatment: To control this pest spraying with Malathion@300ml in 150ltr water is done.
  <br>
ii.<b>Fruit fly:</b>The female lays eggs in the mesocarp, after hatching the maggots feed themselves on fruit pulp which will destroy the fruit.
<br>Treatment: To control this pest spraying with Malathion@300ml in 150ltr water is done.
<br><br>
<b> Disease and their control:</b><br>
i.<b>Stem rot:</b>Water like wet spots are seen on plant stem. The symptoms get spread on all sides of the plant. Plant leaves fall apart before it is fully developed.
<br>Treatment: To control this disease spray with M-45@300gm in 150ltr water.<br><br>
ii.<b>Powdery mildew:</b>Patchy, white powdery growth appears on upper surface of leaves also on main stem of infected plant. It parasitizes the plant using it as a food source. In severe infestation it causes defoliation and premature fruit ripening.
<br>Treatment: Spraying of Thiophanate methyl 70% WP@300gm in 150-160ltr water/acre is done.<br><br>
iii.<b>Root rot or wilt:</b>The disease causes rotting of roots which ultimately result in plant wilting.
<br>Treatment: To control this disease drenching with Saaf@400gm in 150ltr water.<br><br>
iv.<b>Papaya mosaic:</b>The symptoms appear on top young leaves of the plants.
<br>Treatment: To control this pest spraying with Malathion@300ml in 150ltr water is done.
</p></div><br><br>
<button type="button">
<a href="https://www.agriplexindia.com/index.php/chemical/pesticides/fruits/papaya.html" class="button button2">Buy Pesticide Here</a>
</button>
<br><br>
<button class="accordion">Harvesting</button>
<div class="panel">
<p>Harvesting is mainly done when fruit attains the full size and is light green in color with a tinge of yellow at apical end. First picking can be done after 14-15 months of planting. 4-5 harvestings can be done per season.
</div>
<br>
<div class="zoom">
<img alt="Papaya" src="papaya2.jfif">
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