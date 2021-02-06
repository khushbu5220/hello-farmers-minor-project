<!DOCTYPE html>
<html>
<head>
<title>Plum</title>
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
<h3>PLUM</h3>
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

<p>The botanical name of celery is Apium graveolens and is also known as Karnauli. It is also known for its medicinal properties. Celery is used to cure joint pain, headache, nervousness, gout, weight loss, blood purification etc. It is rich in vitamin C, vitamin K, vitamin B6, folate and potassium. It is an herbaceous plant with average height of stalk is about 10-14 inches and has white color flowers. Stems are light green in color having leaves attached with stem which is 7-18 cm long. Leaves bear flowers which is greenish white in color that bears fruit which later becomes seeds which are 1-2 mm in length and are greenish brown in color. It is used in making stews, salads and soups. It is found mainly in Mediterranean area, mountainous parts of Southern Asia, marshes of Europe and North Africa and in some parts of India. Ladhwa and Saharanpur districts of western Uttar Pradesh, Haryana and Amritsar, Gurdaspur and Jalandhar districts of Punjab are major Celery growing states in India.</p><br>
<div style="float:right" class="zoom"><img alt="plum" src="plum1.jpg"></div>
<button class="accordion" style="width:75%">Soil</button>
<div class="panel">
  <p>Plum develops on an array of soils, deep fertile as well as properly drained, loamy land with a pH of 5.5-6.5. The land must be clear of hard pan, water logging as well as extreme salts. </p>
</div>
<br>
<button class="accordion"style="width:75%">Land Preparation</button>
<div class="panel">
<p>Do ploughing, cross ploughing of land and then levelled the land. Prepare land in such way that water stagnation should not occurred in field. </p>
</div>
<br>
<button class="accordion"style="width:75%">Sowing</button>
<div class="panel">
<p><b>Time of sowing</b><br>
Planting is done in first fortnight of January.<br>
<b>Spacing</b><br>
The ideal spacing of plum plant is 15cm X 30cm. The tree should be planted 6m X 6m apart from row and between plants.<br> 
<b>Method of Sowing</b><br>
Direct sowing of seedlings.<br></p>
</div>
<br>
<button class="accordion" style="width:75%">Seed</button>
<div class="panel">
<p><b>Seed Rate</b><br>
The plum seed accommodates 110 tree/acre.</p>
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
    <td>20-30°C</td>
    <td>200-300mm</td>
	<td>20-25°C</td>
    <td>25-30°C</td>
  </tr>
</table></center>
</div><br>
<button class="accordion">Propagation</button>
<div class="panel">
<p>Plums could be propagated efficiently on peach, plum with apricot rootstocks. For light ground area usage of peach rootstock is advisable, while for heavy garden soil, plum Kabul Green Gage cuttings and apricot rootstocks provide good outcome. Planted cuttings of Kala Amritsari are helpful straight away without budding. To do this, stem-cuttings are ready in the 1st week of December and after callusing around 30 days it is raised in area from 15cm x 30cm in January.</p></div>
<br>
<button class="accordion">Fertilizer</button>
<div class="panel">
<center>
<b>Fertilizer Requirement (kg/acre)</b><br>
<table style="width:50%">
  <tr>
  <th>Tree age (in years)</th>
  <th>FYM (kg/tree)</th>
    <th>UREA (gm/tree)</th>
    <th>SSP (gm/tree)</th>
	<th>MURIATE OF POTASH (gm/tree)</th>
  </tr>
  <tr>
    <td>1-2 years</td>
    <td>6-12</td>
    <td>60-120</td>
	<td>95-120</td>
    <td>60-120</td>
  </tr>
  <tr>
    <td>3-4 years</td>
    <td>18-24</td>
	<td>180-240</td> 
	<td>285-380</td>
    <td>180-240</td>
  </tr>
  <tr>
    <td>5 and above years</td>
    <td>30-36</td>
    <td>300-360</td>
	<td>475-570</td>
    <td>300-360</td>
  </tr>
</table></center>
<br> 
<p>When the tree is 1-2 years old, apply FYM@6-12 kg/tree, UREA@60-120gm/tree, SSP@95-120gm/tree and MOP@60-120gm/tree. When the tree is 3-4 years old, apply FYM@18-24kg/tree, UREA@180-240gm/tree, SSP@95-120gm/tree and MOP@180-240gm/tree. When the trees is 5 years and above, apply FYM@30-36 kg/tree, UREA@300-360gm/tree, SSP@475-570gm/tree and MOP@300-360gm/tree.<br>
</p>
</div>
<br>
<br>
<button>
<a href="https://www.google.com/search?q=plum+fertilizer&rlz=1C1CHBD_enIN921IN921&sxsrf=ALeKk01Dm-QeUpEwhBAWq63_WkBqz84rPg:1604396452158&source=lnms&tbm=shop&sa=X&ved=2ahUKEwjL7u_EiubsAhXc63MBHZJ7DEwQ_AUoAnoECBQQBA&biw=1536&bih=666" class="button button1">Buy Fertilizer</a>
</button>
<br><br>
<button class="accordion">Irrigation</button>
<div class="panel">
<p>Plums are irregular rooted as well as rapid maturing thus requires adequate moisture throughout developing period. Time period of irrigation might rely on numerous aspects like soil variety, weather as well as type of major fruit trees. Regular irrigation at per week timeframe could be utilized in April, May as well as June. Hardly any irrigation is provided at complete blossom phase and ripening phase is provided to prevent flower. Throughout rainy climate no irrigation is needed. The timeframe might rise to twenty days in September, October as well as November.
</p>
</div><br>
<button class="accordion">Weed Control</button>
<div class="panel">
<p>Recommendation of Diuron with terbacil 1.2kg/acre or Simazine 1.6kg/acre is done pre-emergence. In post emergence apply glyphosate@320ml/acre is good to control weed.</p>
</div><br>
<button class="accordion"> Plant Protect</button>
<div class ="panel">
<p><b>Pest and their control:</b><br>
<b>Plum curculios (weevil):</b>Small crescent shaped scars on fruit, which drop easily.
<br>Control:- Pick up fallen fruits frequently. Once petals start to fall, each day spread a sheet below the tree and hit the tree trunk with a padded stick; collect and destroy the curculios that fall onto the sheet. Continue for 3 week. <br>
<b>Leaf-curl plum aphids:</b>Leaves and young shoots are twisted and stunted. Tiny, sticky insects are present.
<br>Control: - Carefully timed sprays of horticultural oil will kill these aphids as they hatch. Or, apply neem when aphids are seen on leaves.
<br><br><b>Disease and their control:</b><br>
<b>Brown rot (fungus):</b>Fruits have brown powdery masses. Fruits shrivel and form ‘mummies’.
<br>Control:  Keep trees well pruned to encourage air circulation. Remove and destroy dropped fruit. Spray with sulfur at pre-blossom stage repeat when shucks split, then weekly for 2 week.<br>
<b>Black knot (fungus):</b>Smoky black knots (galls) on twigs and limbs, which range in size from 1 to 30cm.
Control: Plant resistant cultivars, such as ‘president’ and ‘shiro’. Prune off galls. Make sure to cut at least 10cm below swellings.<br></p>
</div>
<br><br>
<button>
<a href="https://www.google.com/search?rlz=1C1CHBD_enIN921IN921&biw=1536&bih=666&tbm=shop&sxsrf=ALeKk030gGCirpDpezvQb-G4Cn0vtJUlfg%3A1604396501031&ei=1SWhX_rBAcbez7sP8K6lGA&q=plum+pesticides&oq=plum+pesticides&gs_lcp=Cgtwcm9kdWN0cy1jYxADMgYIABAeEBgyCAgAEAgQHhAYOgQIIxAnOgYIABAIEB46CAgAEAUQHhAYOgQIABATOgYIABAKEBM6CggAEA0QBRAeEBM6CggAEAgQDRAeEBM6CAgAEB4QExAYOgoIABANEB4QExAYUOa2E1ih6BNg4-0TaABwAHgAgAH0AYgB3h2SAQYwLjE1LjWYAQCgAQGqAQ9wcm9kdWN0cy1jYy13aXrAAQE&sclient=products-cc&ved=0ahUKEwi6gJfciubsAhVG73MBHXBXCQMQ4dUDCAs&uact=5" class="button button2">Buy Pesticide Here</a>
</button>
<br>
<br>
<button class="accordion">Harvesting</button>
<div class="panel">
<p>The maturity of plum fruit varies depending on the different types of variety. Plum must ripen fully on tree. The ripe fruit are used in several pickings and are packed with proper care.</p>
</div>
<br>
<button class="accordion">Post Harvesting</button>
<div class="panel">
<p>Due to highly perishable character of plum it needs to be packed properly and are stored in proper temperature as they are chilling sensitive.</p>
</div><br>
<div class="zoom">
<img alt="plum" src="plum2.jpg">
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
