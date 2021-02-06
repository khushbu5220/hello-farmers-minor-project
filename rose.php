<!DOCTYPE html>
<html>
<head>
<title>Rose</title>
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
<h3>ROSE</h3>
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


<div style="float:right" class="zoom"><img alt="Rose" src="rose1.jfif"></div>
<button class="accordion"style="width:75%">Climate Required For Growing Roses</button>
<div class="panel">
<p>Roses are grown well in tropical and subtropical weather condition in the worldwide. The perfect temperature conditions for rose farming techniques in between 15 °C to 28 °C. Rose plants at list require 5 to 6 hours the sunlight during the growth phase and flowering period. Generally, the sunshine requires in moisture weather condition area or in a cloudy situation. Roses also grow well at below 15°C temperature.</p>
</div><br>
<button class="accordion"style="width:75%">Soil preparation</button>
<div class="panel">
<p>For rose farming, you can require the soil PH in between 6 to 7.5 it is the best PH for getting the high yield. Rose plants are growing well in sandy loam soils with high organic matter and also have a high content of oxygen. If you have a 30cm long soil then you must be required approximately 30% of organic matter.</p>
</div>
<br>
<button class="accordion"style="width:75%">Land Preparation And Planting </button>
<div class="panel">
<p>Rose flowers are generally cultivated by using the seeds, budding and cuttings but most of the farmers are planting rose flower by using seeds. In rose farming business, first of all, plow the soil for making it weed free and tilth soil. You can be sowing the rose seed in the nursery beds or pits before 4 to 6 weeks of planting the plants in the main field. Also, create the 60 to 90 cm deep and 60 to 90 cm across pits or beds for sowing rose seeds. After that fill the beds or pits by using some soil and decomposed farm yard manure (FMY) and provide irrigation.
In between November to January farmers sowing the rose seeds in nursery beds and before monsoon rose plants are ready for planting in the main field. When the rose plants come from the nursery immediately planting them in the main field. At evening time or after the afternoon it’s considered as the best time for Planting the rose plant.
If you are planting the rose plant in the one-acre land then must keep the line to line distance 5ft and plant to plant distance 5 ft. You can approximately be planting the 4000 rose plant in a one-acre land. Time in between September to October is the optimum season for planting the rose plant in the farm. Rose plants require pruning one time in a year that is done in November, December, and January.</p>
</div>
<br>
<button class="accordion"style="width:75%">Homemade Fertilizer </button>
<div class="panel">
<p> When you preparing land for the rose farming project then mostly use the organic matter donot use the chemical fertilizer. If you are using the chemical for rose farming process then you can not get the good quality in rose water or oil. By using the organic fertilizer you will get the high-quality based rose flower.
You can make the organic fertilizer by using the cow urine, tobacco, Datura(Angel’s trumpets). First of all Mixing well this three material and buried in the land for one month. After a one month, you will get the ready pesticide and you can apply on the rose plant. You can only use this organic fertilizer 1 kg or l litter in one-acre land.
If you want to use the chemical fertilizer then apply the 8 grams nitrogen, 8 grams Phosphorus, and 16 grams Potassium per plant. After the pruning, in three-months interval apply the 10 kg decomposed farm yard manure (FYM) and above chemical fertilizer to rose plants.</p>
</div>
<br>
<br>
  <button type="button">
<a href="https://www.amazon.in/Rose-Fertilizer/s?k=Rose+Fertilizer" class="button button1">Buy Fertilizer Here</a>
</button>
</div>
<br><br>
<button class="accordion">Best Irrigation System</button>
<div class="panel">
<p>There are many irrigation systems are available in latest technology like drip irrigation, sprinkler irrigation, micro jet, and basin irrigation but rose flower plant requires less water compared to other flower farming. So, the drip irrigation and sprinkler irrigation systems are suitable for the rose farming.
After transplanting the rose plant in the main field irrigation is required immediately. In starting, days rose plants require irrigation daily or one time in two days. After some day it requires irrigation one time in a week.</p>
</div>
<br><br>
  <button type="button">
<a href="https://www.amazon.in/s?k=fungicide+for+rose+plants&adgrpid=60589247882&ext_vrnc=hi&gclid=Cj0KCQiAtqL-BRC0ARIsAF4K3WHXAdLM4WlpG8N7TrYMA26mcZ-nxGF2ffraYGD33aGfMCq5VJQBMlwaAmFLEALw_wcB&hvadid=346146452848&hvdev=m&hvlocphy=1007751&hvnetw=g&hvqmt=b&hvrand=9505940901294263555&hvtargid=kwd-331795657124&hydadcr=2675_1931698&tag=googinhydrmob-21&ref=pd_sl_1q44nojpo0_b" class="button button2">Buy Pesticide Here</a>
</button>
</div>
<br><br>
<button class="accordion">Harvesting Of Rose Flowers</button>
<div class="panel">
<p> Rose flowers are ready for harvesting from the main field when the flower get the bright color petals.In the first year, rose plants are prepared for the flowering and in the second year you will get a good yield from this rose flowers. Rose plants obtain the flowering in March after the 45 to 50 days of pruning. Generally, rose flowers can stay 40 days on the plant. The rose flowers mostly picked by hands at early morning.
After the harvesting rose flowers are immediately put in the water bucket then it’s transferred into the cold storage. Rose flowers require 2 to 5°C temperature in cold storage.</p>
</div>
<br>
<button class="accordion">Uses of rose flower</button>
<div class="panel">
<p>Rose water<br>Rose oil<br>Gulkand<br>Floral arrangements<br>Bouquets<br>Worship<br>Presentation of gifts or Decoration of gifts<br>Ornamental use<br>Use in medicinal<br>Culinary purposes<br>Use for expressing feelings<br>Cosmetics<br>Used for making perfumes and scented products<br>
<b>Health Benefits Of Rose Flower For Human</b><br>
A.The rose flower petals are used for the weight loss.<br>B.It also works as natural aphrodisiac.<br>C.Different rose flower petals are relieve stress and depression.<br>D.The rose flower petals help to combat symptoms of piles.<br>E.The rose flower petals are a well-known astringent.<br>F.The rose water can be used to treat acne naturally.<br>G.Rose water makes your skin young and healthy.<br>H.It is beneficial for skin and its troubles.<br>I.Rose water and rose tea good for women.<br>J.Rose makes the immune system stronger.<br>K.Cures sore throat.<br>L.Improves digestive powers.<br>M.Rose water is the cure for constipation and diarrhea.<br>N.Maintains urinary tract health.<br>O.Natural stress buster.<br>
</div>
<br>
<div class="zoom">
<img alt="Rose" src="rose2.jpg">
</div>
<br><br><br><br>
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