<!DOCTYPE html>
<html>
<head>
<title>Sapota</title>
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
<h3>SAPOTA</h3>
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

<p>It is native to Mexico and other native countries of South America. It is commonly known as Chiku and it is mainly cultivated in India. It is mainly used for the production of latex which is used for the preparation of chewing gums. In India, it is mainly grown in Karnataka, Tamil Nadu, Kerala, Andhra Pradesh, Maharashtra, and Gujarat. Sapota is cultivated in 65thousand acre of land and gives an annual production of 5.4lakhs metric tonnes. Its fruit is berry which contains 3-5 black shining seeds.
</p><br>
<div style="float:right" class="zoom"><img alt="sapota" src="sapota1.jpg"></div>
<button class="accordion" style="width:75%">Soil</button>
<div class="panel">
  <p>It is grown in variety of soil but deep alluvial, sandy loam soil and black soil having good drainage are ideal for doing sapota farming. pH having 6.0-8.0 is optimum for sapota farming. Avoid cultivation in shallow clayey soil and in high calcium content. </p>
</div>
<br>
<button class="accordion"style="width:75%">Land Preparation</button>
<div class="panel">
<p>For sapota farming, well prepared land is required. To bring the soil to fine tilth, ploughing is done 2-3 times followed by leveling.</p>
</div>
<br>
<button class="accordion"style="width:75%">Sowing</button>
<div class="panel">
<p><b>Time of sowing</b><br>
Planting is mainly done in February to March and August to October month.<br>
<b>Spacing</b><br>Spacing of 9m is used for planting.
<br> 
<b>Sowing Depth</b><br>
Sowing is done in 1m deep pit.<br>
</div>
<br>
<button class="accordion" style="width:75%">Intercrops</button>
<div class="panel">
<p>Depending upon climate and irrigation facilities, intercropping with pineapple and cocoa, tomato, brinjal, cauliflower, peas, cucurbits, banana, papaya can be done.</p>
</div>
<br><br><br><br>
<button class="accordion">Climate</button>
<div class="panel">
  <center>
<table style="width:50%">
  <tr style="background-color:orchid">
    <th>Temperature</th>
    <th>Humidity</th>
  </tr>
  <tr style="background-color:magenta">
    <td>10-38°C</td>
    <td>70%</td>
  </tr>
</table></center>
</div><br>
<button class="accordion">Fertilizer</button>
<div class="panel">
<center>
<b>Fertilizer Requirement (kg/acre)</b><br>
<table style="width:50%">
  <tr>
  <th>Age of tree (in years)</th>
  <th>FYM (kg/tree)</th>
    <th>UREA (gm/tree)</th>
    <th>SSP (gm/tree)</th>
	<th>MURIATE OF POTASH (gm/tree)</th>
  </tr>
  <tr>
    <td>1-3 years</td>
    <td>25</td>
    <td>220-660</td>
	<td>300-900</td>
    <td>75-250</td>
  </tr>
  <tr>
    <td>4-6 years</td>
    <td>50</td>
	<td>880-1300</td>
    <td>1240-1860</td>
    <td>340-500</td>	
  </tr>
  <tr>
    <td>7-9 years</td>
    <td>75</td>
    <td>1550-2000</td>
	<td>2200-2800</td>
    <td>600-770</td>
  </tr>
  <tr>
    <td>10 years and above</td>
    <td>100</td>
    <td>2200</td>
	<td>3100</td>
    <td>850</td>
  </tr>
</table></center>
<br> 
<p>In December to January month, application of FYM, phosphorus and potassium is done. Application of nitrogen is done in two equal splits, first half dose is applied in March month and the remaining half dose of nitrogen is applied in July to August month.
<br>
</p>
</div>
<br>
<br>
<button>
<a href="https://www.agriplexindia.com/index.php/catalogsearch/result/?q=Sapota+fertilizer" class="button button1">Buy Fertilizer</a>
</button>
<br><br>
<button class="accordion">Irrigation</button>
<div class="panel">
<p>In winters irrigation is done at the interval of 30 days and in summers irrigation is given at the interval of 12 days. Drip irrigation is done as it will reduce upto 40% water. In initial stage i.e. during first two years, 2 drippers are laid at the spacing of 50cm from the tree and then till 5 years, 4 drippers are laid at the spacing of 1m from the tree.</p>
</div><br>
<button class="accordion">Weed Control</button>
<div class="panel">
<p>Pre emergence application of Stomp@800ml/acre or Diuron@800gm/acre is done for initial 10-12 months for the effective weed control.</p>
</div><br>
<button class="accordion"> Plant Protect</button>
<div class ="panel">
<p><b>Pest and their control:</b><br>
<b>Moth (Leaf Webber):</b> The symptoms are the dark brown color patches are seen on the leaves. It ultimately leads to withering and drying of tree branches.
<br>Treatment: Spraying of Carbaryl@600gm or chlorpyiphos@200ml or quinalphos@300ml in 150ltr of water is done at the interval of 20 days after new shoot formation or at the time of fruit harvest.<br>
<b>Bud worm:</b>They are moth caterpillars which destroy the vegetative buds by feeding themselves on it.
<br>Treatment: Spraying of quinalphos@300ml or fame 20ml in 150 ltr of water per acre is done.<br>
<b>Hairy caterpillar:</b>They destroy the plant by feeding themselves on new shoots and twigs.
<br>Treatment: Spraying of quinalphos@300ml in 150 ltr of water per acre is done.
 <br>
<br><b>Disease and their control:</b><br><br>
<b>Leaf spot:</b> Deep purplish brown color spots which are white from the center and are round in shape are seen. Long spots are seen on the stem of fruits and petals.
<br>Treatment: Spraying of copper oxychloride@400gm per acre is done. <br>
<b>Heart rot:</b> It is a fungal disease that causes the decay of wood at the center of the trunk and branches.
<br>Treatment: Spraying of Carbendazim@400gm or Z-78@400gm in 150 ltr of water per acre is done.<br>
<b>Anthracnose:</b>On stem and branches, deep sunken wounds of canker are seen and on leaves, brown color stains are seen.
<br>Treatment: Spraying of copper oxychloride or M-45@400gm per 150ltr water is done to get rid of anthracnose.<br>
</p>
</div>
<br><br>
<button>
<a href="https://www.agriplexindia.com/index.php/catalogsearch/result/?q=Sapota+treetment+how" class="button button2">Buy Pesticide Here</a>
</button>
<br>
<br>
<button class="accordion">Harvesting</button>
<div class="panel">
<p>Harvesting is done in July-September month. But keep in mind not to harvest unripe fruits. Mainly harvesting is done when fruits are having to fade orange or potato color and fruits having a less sticky milky color product and it is gets easily plucked from the tree. Mainly 5-10 years old tree gives 250-1000 fruits.</p>
</div>
<br>
<button class="accordion">Post Harvesting</button>
<div class="panel">
<p>After harvesting, grading is done and then storage is done at 20oC temperature for a period of 7-8 days. Storage life can be increased for 21-25 days by removing ethylene and adding CO2 @5-10% in the storage atmosphere. After storage packing is done in cardboard boxes and is used for long distance transportation.</p>
</div><br>
<div class="zoom">
<img alt="sapota" src="sapota2.jpg">
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
