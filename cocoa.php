<!DOCTYPE html>
<html>
<head>
<title>Cocoa</title>
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
<h3>COCOA</h3>
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
<p>Cocoa is also called as cacao (derives from the Spanish word cacao) and this is mainly grown for its bean from which cocoa solids and cocoa butter are extracted. Cocoa beans are mainly used in the production of chocolate, cocoa powder and cocoa butter whereas cocoa butter is also used in the cosmetic industry. Cocoa is an important commercial bean crop from humid tropics. In India, this crop is grown as mixed crop in suitable regions. Kerala state of south India tops the production of cocoa beans in Indian continent. Ivory Coast is top producer of cocoa beans in the world. Usually, cocoa is grown as mixed crop in arecanut,coconut and oil palm gardens.</p>
<br>
<div style="float:right" class="zoom"><img alt="Cocoa" src="cocoa1.jpg"></div>
<button class="accordion" style="width:75%">Soil</button>
<div class="panel">
  <p>Cocoa trees can be grown in a wide variety of soil. Cocoa trees are predominantly cultivated in red laterite soil. These trees prefer well drained sandy loamy soil with pH range of 6.5-7. Water retaining soils are best for its optimum growth and yeild. </p>
</div>
<br>
<button class="accordion"style="width:75%">Land Preparation</button>
<div class="panel">
<p>Land should be prepared by giving 3-4 ploughings until soil attains its fine tilth stage. If crop is grown on large scale then soil test is required. Based on test results soil should be supplemmented with required nutrients. As,crop requires well-drainage soil,land should be prepared in such a way that water should be drained quickly. </p>
</div>
<br>
<button class="accordion"style="width:75%">Propagation Methods</button>
<div class="panel">
<p><b>1. Seed Propagation</b><br>
In seed propagation of cocoa seeds should be trated with ash or lime. Cocoa seeds should be sown in polythene bags. These can be raised in nursery beds without required shadeSeeds sown soon after extraction. Seeds of 60cm height should be ready for transplantation in main feild.<br>
<b>2. Vegetative Propagation</b><br>
Cocoa seeds may be prpoagated by vegetative cutting, budding and grafting. To achieve 90% of rooting,should use cutting of 3 to 4cm long with 1-2 leaves on it treated with IBA and planted in medium of rotten palm fibre and sand in equal part. Generally free cuttings of 15cm length bearing four terminal leaves should be treated with NNA + IBA dip and planted in poly bags. This will result in rooting of 65% to 75% after a month.
</p>
</div>
<br>
<button class="accordion"style="width:75%">Planting and Spacing</button>
<div class="panel">
<p>Cocoa plantation depends on cultivar and method adopted. Fowling shows recommended spacing when cocoa is intercrop. Basically cocoa is a shade of loving plant and natural or artificial shade should be created during its seedling period. Cocoa requires more shade initial stages than later stages of growth. <br>
<b>I.Case where main crop is coconut and inter-crop is cocoa:</b> Requires 7.5 meter by 7.5 meter which accommodates 500 cocoa plants per hectare land.<br>
<b>II.In case where main crop is Arecanut and inter-crop is cocoa:</b>Requires 2.7 meter by 2.7 meter which accommodates 686 cocoa plants per hectare land.<br>
<b>III.In case where main crop is Oil palm and inter-crop is cocoa:</b> Requires 4.5 meter by 4.5 meter which accommodates 400 cocoa plants per hectare land.<br>
</p>
</div>
<br>
<button class="accordion">Planting Material Selection in Cocoa Cultivation</button>
<div class="panel">
<p>Selection of good and healthy planting material is very important in any commercial crop farming. If you are planning to use seedlings, select vigorous and healthy seedlings from genuine/reputed certified nurseries. Make sure select the seedling or budded or grafted plant which is at least 4 to 5 months old. The cocoa seedling or grafted plant or budded plant should be placed in the center of the pot.</p>
</div>
<br>
<button class="accordion">Climate</button>
<div class="panel">
  <center>
<table style="width:50%">
  <tr style="background-color:orchid">
    <th>Rainfall</th>
	<th>Cultivation Temperature</th>
	<th>Relative Humidity</th>
	</tr>
  <tr style="background-color:magenta">
    <td>12-30°C</td>
    <td>1000-2000mm</td>
	<td>34 and 14°C</td>
	</tr>
</table></center>
</div><br>
<button class="accordion">Fertilizer</button>
<div class="panel">
<p>Cocoa plant responds very well to organic manures and fertilizers. Any nutrient/micro-nutrient gaps should be filled during soil/land preparation. On an average, each cocoa plant requires 8 to 10 kg of well rotten farm yard manure (FMY) along with 100 grams of ‘N’, 40 grams of ‘P2O5’ AND 140 grams of K20 per year. These fertilizers should be applied in 2 equal split doses one in Apr-May other in Aug-Sep.  Organic manures should be applied in first year itself. 1/3 rd of fertilizers in first year, 2/3 rd in second year and full dose should be applied from third year.</p>
</div>
<br>

<button class="accordion">Irrigation</button>
<div class="panel">
<p>Proper irrigation of cocoa plants ensures healthy growth and yield. Constant moisture should be maintained as cocoa plants are sensitive to drought. Young cocoa plants should be irrigated frequently at an interval of 3 days during summer and hot/dry climatic conditions. It does not require any watering in rainy season. In case of floods and over rains, make sure to drain out the water from fields as soon as possible. Adopting drip irrigation is best method of using water effectively. Even applying fertilizers through drip is possible for better utilization of fertilizers and controlling weed growth.</p>
</div><br>
<button class="accordion">Pruning in Cocoa Cultivation</button>
<div class="panel">
<p>Pruning is the process of thinning of branches and removing old or dead stems/branches. This is mandatory in most of the farm management to allow the crop to grow well by allowing direct sunlight.  Pruning in cocoa cultivation should be carried out twice a year. Pruning is done to encourage a tree structure or control the height that allows sunlight. Carry out the first pruning after main harvest just before monsoon. Second pruning should be done 6 months after the first one. Any lower branches and dead branches should be removed. Limit the branches 4 to 5 for better sun light. Burn any diseases branches after they are removed.</p>
</div><br>
<button class="accordion"> Plant Protect</button>
<div class ="panel">
<p>In any crop, pest and disease control play major role for getting quality produce and higher  yields. The following are the main pests and diseases found in cocoa cultivation.<br>
<b>Pests and their control</b><br><br>
The following are common pests found in cocoa cultivation: Mealy bugs, Aphids, Plant hoppers, Caterpillars, Mosquitoes, Cocoa pod borer and Stem Girdlers.<br>
Pests control measures: For symptoms of these pests and their control, contact local horticulture department as they are the best source.<br>
<b>Disease and their control:</b><br><br>
The following are common diseases found in cocoa cultivation: Cocoa swollen shoot, Seedling blight, Witches broom, Black Pod, Frosty pod, Stem Canker and Wilt.<br>
Disease control measures: For symptoms of these diseases and their control, contact local horticulture department as they are the best source.<br>
</p></div>
<br>
<button class="accordion">Harvest and Threshing in Cocoa Cultivation</button>
<div class="panel">
<p>Cocoa trees start flowering from third year of sowing/planting. Actual economic yield starts from fifth year. Cocoa pods mature in about 5 to 6 months. Usually cocoa produces two main crops in a year. Usually, one can judge the maturity of pods by colour change. Generally, green pods turn to yellow when mature. Make sure to harvest at regular intervals of 10 -12 days. Do not allow pods to be over ripened. The pods are opened by heating on a hard surface or using a mallet.</p>
</div><br>
<button class="accordion">Post-Harvest in Cocoa Cultivation</button>
<div class="panel">
<p>Once harvesting is done, pod fermentation should be carried out. Afterwards pod breaking should take place; in this you may get 30 to 35 wet cocoa beans per each pod. These beans should go through fermentation and drying. Dried cocoa beans should be graded, packed and stored.</p>
</div><br>
<button class="accordion">Yield in Cocoa Cultivation</button>
<div class="panel">
<p>Yield of cocoa crop depends on many factors like variety/cultivar, soil type, plant age, and other farm management practices. On an average of 50 to 60 pods/tree/year can be expected. The yield would be in vegetative propagation when compared to seed propagation method. In seed propagation crop, 200 kg/ha dried bean and in vegetative crop, 500 to 800 kg/ha dried bean can be obtained.</p>
</div><br>
<div class="zoom">
<img alt="Cocoa" src="cocoa2.jpg" style="height:100%;width:140%">
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
