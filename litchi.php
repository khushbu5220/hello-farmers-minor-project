<!DOCTYPE html>
<html>
<head>
<title>Litchi</title>
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
<h3>LITCHI</h3>
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

<p>Juicy fruit having excellent quality. It is a rich source of Vitamin C along with B complex Vitamin. Its origin is from Southern China. India is second largest producer of litchi in the World after China. In India its cultivation is restricted to Jammu and Kashmir, Uttar Pradesh and Madhya Pradesh but due to increasing demand its cultivation is spread to other states like Bihar, Jharkhand, Chhattisgarh, Orissa, Punjab and Haryana, Uttaranchal, Assam, Tripura and West Bengal.</p><br>
<div style="float:right" class="zoom"><img alt="Litchi" src="litchi1.jpg"></div>
<button class="accordion" style="width:75%">Soil</button>
<div class="panel">
  <p>It can be grown on variety of soil. Deep, fertile, well drained, medium texture soil is suitable for litchi cultivation. pH of soil should be 7.5 to 8. Litchi crop cannot tolerate high pH and saline soils.   </p>
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
Planting can be done just after monsoon in month of August-September, sometime it can be extended up to November in Punjab. For planting select two year old plant.<br>
<b>Spacing</b><br>
Use distance of 8-10 meter in row to row and also plant to plant in case of square method.
<br> 
<b>Sowing Depth</b><br>
Dug pits of 1m x 1m x 1m and expose to sun for some days. Then fill the pit with top soil with 20-25 kg of well decomposed cow dung, 2 kg of bone meal and 300 gm of MOP. After filling sprinkle some water on it. Plant the seedlings in middle of pit.<br>
<b>Method of Sowing</b><br>
Direct sowing or transplanting method.<br></p>
</div>
<br>
<button class="accordion" style="width:75%">Propagation</button>
<div class="panel">
<p>Litchi is commercially propagated by Air-Layering method. Seed propagation is not common one and takes long time for tree establishment. For air layering, select branches of 2-3cm diameter and 30-60cm long free from pest and disease. Remove 4cm wide ring of bark with help of sharp knife. Place wet moss on exposed portion and then wrapped polythene sheet around it tightly. Root development will start after 4weeks. When good numbers of roots are developed detached "gootee" from mother tree. After then immediately plant it in nursery. Then apply irrigation to it. Air layering can be done in middle of July to September.
</p>
</div>
<br>
<button class="accordion" style="width:75%">Pruning and Training</button>
<div class="panel">
<p>Initially training is needed to give definite shape. But pruning is not much needed for Litchi plants. Light pruning is needed after harvesting of fruits to promote new shoots.</p>
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
    <td>25-35°C</td>
    <td>1200mm</td>
	<td>25-35°C</td>
    <td>25-30°C</td>
  </tr>
</table></center>
</div><br>
<button class="accordion">Intercrops</button>
<div class="panel">
<p>It is slow growing crop and required about 7-10years to come into commercial bearing. Intercrop can be taken during initial 3-4 years. It will give additional annual income along with enriching the soil and improve soil condition also help in weed control. Quick growing plant like peach, plum, kinnow can be taken as intercrop. Also vegetables and pulses are preferred as intercrop. When orchard come into commercial bearing, uproot intercrops.
<br>Litchi is cross pollinated and pollination is done by insect, honey bees etc. Place 20-25boxes of honey bees per hectare to get proper pollination and fruit sets.
</p>
</div>
<br>
<button class="accordion">Protection of young plant</button>
<div class="panel">
<p>To protect young crops from hot wind in summer and cold waves in winter, plant suitable windbreak trees around litchi plantation upto 4-5 years. Growing of Dhaincha around litchi plantation will protect plant during summer and winter, for that grows dhaincha seeds in middle of February. To protect crop from heavy winds grow tall trees seedling like Mango, Jamun etc. around litchi plantation.</p>
</div>
<br>
<button class="accordion">Fertilizer</button>
<div class="panel">
<center>
<b>Fertilizer Requirement</b><br>
<table style="width:50%">
  <tr>
    <th>Age of crop (Year)</th>
	<th>Well decomposed cow dung (in Kg)</th>
	<th>Urea (in gm)</th>
    <th>SSP (in gm)</th>
	<th>MURIATE OF POTASH (in gm)</th>
  </tr>
  <tr>
    <td>First to three years</td>
    <td>10-20</td>
    <td>150-500</td>
	<td>200-600	</td>
	<td>60-150</td>
  </tr>
  <tr>
    <td>Four to six years</td>
    <td>25-40</td>
    <td>500-1000</td>
	<td>750-1250</td>
	<td>200-300</td>
  </tr>
  <tr>
    <td>Seven to ten year</td>
    <td>40-50</td>
    <td>1000-1500</td>
	<td>1500-2000</td>
	<td>300-500</td>
  </tr>
  <tr>
    <td>Ten year and above</td>
    <td>60</td>
    <td>1600</td>
	<td>2250	</td>
	<td>600</td>
  </tr>
</table> <br>
</center>
<br> 
<p>For 1 to 3 year old crop, apply 10-20 kg of well decomposed cowdung along with Urea@150-500 g, SSP@200-600 gm and MOP@60-150 gm per Tree. For 4-6 year old crop, give dose of 25-40 kg of cowdung, Urea@500 gm -1000 gm, SSP@750 gm -1250 gm and MOP@200-300 gm per Tree. For 7-10 year old crop, apply Urea@1000-1500 gm, SSP@1000 gm, MOP@300 -500 gm and Cowdung@40-50 kg per Tree. When crop is above 10 year, apply well decomposed cowdung@60 kg, Urea@1600 gm, SSP@2250 gm and MOP@600 gm per Tree.
<br>
</p>
</div>
<br>
<br>
<button>
<a href="https://www.agriplexindia.com/index.php/catalogsearch/result/?q=Litchi+fertilizer" class="button button1">Buy Fertilizer</a>
</button>
<br><br>
<button class="accordion">Irrigation</button>
<div class="panel">
<p>Apply irrigation at all stage of development. At early growth stage frequent irrigation is needed. During summer, apply irrigation twice a week to young plants and once a week for plant older than 4year age. Give irrigation after completing fertilizer application. To protect crop from frost injury, apply water at November end or December first week. Fruit development stage is critical for irrigation. At this stage apply irrigation twice a week; it will help to reduce cracking of fruits to greater extent.</p>
</div><br>
<button class="accordion"> Plant Protect</button>
<div class ="panel">
<p><b>Pest and their control:</b><br>
<b>Leaf miner:</b>If infestation is observed, remove affected leaves.
<br>At new flush development stage, take spray of Dimethoate 30EC @200ml/150Ltr or Imidacloprid 17.8SL@60ml/150Ltr. Take second spray with interval of 15 days.
<br><b>Fruit borer:</b> It feeds on pulp and thus damage fruits and make unfit for human consumption. Small pin head hole can be seen on fruits.
<br>Keep orchids clean. Destroy affected and fallen fruits away from the field. Release Trichogramma @ 20,000 eggs / acre. Take combine spray of Nimbicidine@50gm/10Ltr of water + Cypermethrin 25EC@8ml/10Ltr and Dichlorvos@20ml in 10 Ltr water at fruit set and color development stage. Repeat the spray at interval of 7 days. Spraying of Diflubenzuron 25WP@2gm/Ltr of water at fruit development stage is also effective. Take last spray 15 days before harvest. <br>
<b>Mite:</b>Serious pest of Litchi. Nymph and adults suck sap from the under surface of leaf, shoot etc. Due to mite infection, leaves turn yellow to greyish yellow. Affected leaves get curl, twisted and later get defoliate.
<br>Remove and destroy affected portion. Take two spray of Dicofol 17.8EC@3ml/Ltr or Propargite 57EC@2.5ml/Ltr of water with interval of seven days. Take spray of these insecticides on new shoots and before panicle emergence. <br> 
<br><b>Disease and their control:</b><br><br>
i.<b>Anthracnose:</b>Deep chocolate color irregular spots are observed on leaves, branches, flower and fruits.
<br>Do pruning operation and avoid overcrowding of branches. Take spray of bordeaux mixture in February, April and October month or Captan WP@0.2% as preventive measure.<br>
<b>Tree decline and Root Rot:</b> In tree decline, Incidence can be observed on whole tree or on one - two branches. Sudden wilting of tree is main symptom. Root rot kill tree quickly and no control measure found effective for it.
<br>Before planting new orchards, clean field and remove roots of harvested crops. Provide proper drainage system and avoid water logging around tree. Carry out pruning operations and remove extra branches.<br>
<b>Downy mildew:</b>It is also known as brown blight. Brown lesion along with white powdery growth observed on leaves, flower and immature fruits. It attacks also on ripen fruits. Higher temperature at day and lower temperature at night, high humidity, and continuous rain are main cause of spread of this disease. 
<br>After harvesting, maintain proper cleaning in orchards. In winter take spray of Copper oxychloride and in spring take copper sulphate spray to keep check on this disease.<br>
<b>Red Rust:</b> Small dark algae are observed on patches on lower side of leaves. Spread quickly and later on develops velvet reddish brown to orange color growth. Affected leaves show curling of leaves.
<br>As a preventive measure, take spray of Copper Oxychloride@0.3% in June and october month, If infestation is observed in field, take spray of Bordeaux Mixture in September-October month and February-March month. Depending upon intensity repeat spray with 15days interval. <br>
<b>Fruit rot:</b>It is serious disease of litchi after harvesting. If storage is not proper, large water soaked lesions are developed on fruits and later on give odour of fermentation.
 <br>After harvesting, store fruits at low temperature. Low temperature slowdowns the rate of roting.
</p>
</div>
<br><br>
<button>
<a href="https://www.agriplexindia.com/index.php/catalogsearch/result/?q=Litchi+insecticide" class="button button2">Buy Pesticide Here</a>
</button>
<br>
<br>
<button class="accordion">Harvesting</button>
<div class="panel">
<p>Change in fruit color, from green to pink along with smoothness of skin is indication of fruit maturity. Fruits are harvested in bunch. While harvesting, take little portion of leaves and branches. It possesses poor shelf life. For local markets, do harvesting at ripening stage while for distant markets, harvesting is to be done when they start to turn pink.</p>
</div>
<br>
<button class="accordion">Post Harvesting</button>
<div class="panel">
<p>After harvesting, do grading of fruits depending upon fruit color, size. Remove damaged, cracked fruits. Use small baskets or creates lined with green leaves of litchi. Store litchi fruits at temperature of 1.6-1.7°C with relative humidity between 85-90%. At this temperature fruits can be store for period of 8-12weeks.</p>
</div><br>
<div class="zoom">
<img alt="litchi" src="litchi2.jpg">
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
