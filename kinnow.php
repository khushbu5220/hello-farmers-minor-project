<!DOCTYPE html>
<html>
<head>
<title>Kinnow</title>
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
<h3>Kinnow</h3>
</div>
<nav>
<br>
<br>
<a href="https://www.accuweather.com/">
<img alt="wheather" src="wheather.jfif" width="70" height="70">
<br>Weather
</a>
<br>
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

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

<br><br>
<p>Citrus is originated in South East Asia. It comprises Kinnow, Oranges, Lime and Lemon; these are major fruit crops of Punjab. Kinnow is cultivated throughout North India. In India, Citrus is third largest fruit crop after Banana and Mango. Citrus fruits are important source of Vitamin C. Punjab, Rajasthan, Haryana, Himachal Pradesh, Jammu and Kashmir and Uttar Pradesh are major Kinnow growing states.</p>
<br><div style="float:right" class="zoom"><img alt="kinnow" src="kinnow1.jpg"></div>
<button class="accordion" style="width:75%">Choose a good location</button>
<div class="panel">
<p>It can be grown on wide range of soil ranging from sandy loam soils to clay loam or deep clay loam or acidic soils with good drainage facility. Crop not thrives well in saline and alkaline soils also it cannot withstand in waterlogged soils. For optimum crop growth, pH of soil should be in range of 5.5 to 7.5.</p>
</div>
<br>
<button class="accordion" style="width:75%">Soil preparation</button>
<div class="panel">
<p>Land should be ploughed, cross ploughed and leveled properly.</p>
</div>
<br>
<button class="accordion" style="width:75%">Fertilizer</button>
<div class="panel">
<br>
<center>
<p><b>Fertilizer Requirement (gm/tree)</b></p>
<table style="width:50%">
  <tr>
    <th>Age of crop (Year)</th>
    <th>Urea (in gm)</th>
    <th>SSP (in gm)</th>
  </tr>
  <tr>
    <td>First to three year</td>
    <td> 240-720</td>
    <td>-</td>
  </tr>
  <tr>
    <td>Four to seven</td>
    <td>	 960-1680</td>
    <td> 1375-2400</td>
  </tr>
  <tr>
  <td>Eight and above</td>
  <td>1920</td>
  <td>2750</td>
  </tr>
 
</table>
<br><br>
<p><b>Nutrient Requirement (gm/tree)</b></p>
<table style="width:50%">
  <tr>
    <th>Age of crop (Year)</th>
    <th>Nitrogen</th>
    <th>Phosphorus</th>
  </tr>
  <tr>
    <td>First to three year</td>
    <td>110-130</td>
    <td>-</td>
  </tr>
  <tr>
    <td>Four to seven</td>
    <td>440-770</td>
    <td>220-385</td>
  </tr>
  <tr>
  <td>Eight and above</td>
  <td>880</td>
  <td>440</td>
  </tr>
</table><br>
  <p> Add more sufficient organic content while preparing soil.</p>
  </center></div><br><br>
  <button type="button">
<a href="https://www.google.com/aclk?sa=L&ai=DChcSEwjapo6ZrePsAhVO2JYKHT5yA3gYABAMGgJ0bA&sig=AOD64_099MVYpfX2plkssb5IZ2FLCjEt_Q&ctype=5&q=&ved=0ahUKEwjzwYaZrePsAhXNzzgGHc2MDusQww8IvwQ&adurl=" class="button button1">Buy Fertilizer Here</a>
</button>
<br><br>
<button class="accordion">Wheather requirement</button>
<div class="panel">
  <p>Temperature: 13°C - 37°C<br>Rainfall: 300-400 mm</p></div>
<br>
<button class="accordion">Varieties</button>
<div class="panel">
<p>Kinnow is available in many different types and varieties all over the world. Some popular Kinnow varieties available and cultivated in India are as follows:</p>
<br>
<center>
<table style="width:50%">
<tr>
<th>S.No.</th>
<th>VARIETY</th>
<th>SPECIALITY</th>
</tr>
<tr>
<th>1.</th>
<th>Kinnow:</th>
<th>It is the major fruit of Punjab state. Fruits are of golden orange color, juice is sweet and slightly acidic in taste with rich flavor. Fruit are ready to harvest in January.</th>
</tr>
<tr>
<th>2.</th>
<th>Local:</th>
<th>Grown in small pockets of Punjab. Fruits are small to medium in size. Skin is of cadmium yellow. Fruits are ready to harvest in December to January.</th>
</tr>
<tr>
<th>3.</th>
<th>PAU Kinnow-1:</th>
<th>The fruit matures in January month. The fruit contains 0-9 seeds. it gives an average yield of 45kilo per tree.</th>
</tr>
<tr>
<th>4.</th>
<th>Daisy: </th>
<th>The fruit matures in third week of November. The fruit contains 10-15 seeds. It gives an average yield of 57kilo per tree.</th>
</tr>
</table>
</center>
</div>
<br>
<button class="accordion">Seeding</button>
<div class="panel">
<p><b>Seed Rate:</b>Minimum plant density of 111 plants/acre should be maintained.<br>
</p></div>
<br>
<button class="accordion">Planting</button>
<div class="panel">
<p><b>Time of sowing:</b>
The best season for planting is from middle of June (with onset of monsoon) to end of September.
To minimize effect of strong wind during initial growth stage, plant Mango, Guava, Jamun, Aonla, Shisham or Mulberry on field boundaries.
<br>

<b>Spacing:</b>
Spacing between plants should be kept between 6×6 m.<br>
 
<b>Sowing Depth:</b>
Pits of size 60×60×60 cm should be dug for planting seedlings.
<br>

<b>Method of Sowing:</b>
Propagation in kinnow is done by T budding method. It is usually budded on rough lemon (jambhiri, Soh-myndong or jatli khatti) rootstock. It is also budded on kharna khatta rootstock.

Sow citrus seeds in nursery on bed of 2 m x 1 m size and with 15 cm distance between the rows. When seedlings are of 10-12 cm height, transplanting is to be done. Select healthy and uniform size seedling for transplantation purpose. Remove dwarf and weak seedlings. If needed, pruned roots slightly before planting. In nursery, Budding is done when plants are of pencil thickness. Shield budding or T shape budding is done for that, T shaped slot is made in bark of tree at distance of 15-20 cm from ground. Horizontal cut of about 1.5-2 cm long is given, and vertical cut of 2.5 cm long is made from middle of horizontal cut. Remove bud from bud stick and insert it into T shape slots, afterward wrapped it with plastic paper.  
T budding is done during February-March and also in August- September.
<br>
</p>
</div>
<br>
<button class="accordion">Caring</button>
<div class="panel">
<p><b>Fertilization –</b>For Kinnow crop: For 1-3 year old crop, apply well decomposed cowdung@10-30 kg and Urea@240-720 gm per tree should be done. For 4-7 year old crop, apply well decomposed cow dung@40-80 kg, Urea@960-1680 gm and SSP@1375-2400 gm per tree. For eight years and above crop, apply cowdung@100 kg, Urea@1920 gm and SSP@2750 gm per Tree.  
Apply whole amount of cowdung during December month whereas apply Urea in two parts; apply first of Urea in February, and second dose in April-May month. At time of applying first dose of Urea, apply whole dose of SSP fertilizer.  
If fruit drop is observed, to control excessive fruit drop, take spray of 2,4-D@10 gm in 500 Ltr of water. Take first spray in March end, then in April end. Repeat the spray in August and September end. If cotton is planted in nearby field of citrus, avoid spraying of 2,4-D, instead take spray of GA3.
<br>
<b>Watering –</b>It requires frequent watering at initial growth years. Apply irrigation at weekly intervals to 3-4 years old crop. For older tree apply irrigation at interval of 2-3 weeks depending upon soil type, weather conditions and rainfall. Avoid flood irrigation as it causes disease like root rot, collar rot etc. Always apply light irrigation with high frequency for optimum yield. Irrigation before sprouting and after fruit set is crucial stage of irrigation.
<br>
<br><br>
<b>Weeding -</b>To control weed, take post emergence spray of Glyphosate@1.6 Ltr/acre or Paraquat@1.2 Ltr per acre mixed in 200 Ltr of water.</p>
</div>
<br>

<button class="accordion">Pesticide and diesease</button>
<div class="panel">
<p><b>Pest and their control:</b><br>
<b>Psylla:</b>It attacked crop at any stage of growth. Nymphs are of orange color whereas adult of Psylla is of gray color. They suck sap from leaves, young shoots. It causes drying and curling of leaves. This pest causes die back, greening and citrus decline and ultimately results in heavy damage.
<br>Treatment: If infestation is observed on young shoots, take spray of Triazophos+ Deltamethrin@2 ml or Profenofos+ Cypermethrin@1 ml in 1 Ltr of water or Quinalphos@1 ml or Acephate@1 gm or Imidacloprid@5 ml/Ltr of water. If necessary repeat the spray with interval of 15 days.
<br><br>
<b>Leaf Miner:</b> It is serious pest of citrus. It can cause yield loss up to 20% depending upon severity. They attacked on tender leaves and shoot and make serpentine mines on leaves. In severe infection, defoliation is observed.
<br>Treatment: If infestation is observed, to control, take spray of Profenofos 50EC@60 ml/15 Ltr water 2-3 times at 8 days interval on new flesh. If necessary repeat the spray with interval of 15 days. Or take spray of Fenvalerate@500 ml or Trizophos@250 ml or Imidachloprid@200 ml or Chlorpyriphos@800 ml in 200 ltr of water.
<br><br>
<b>Aphid:</b> Serious and common pest of citrus. Adult and nymphs, both suck the sap thus weaken the plant. In severe infestation, they cause curling and deformation of young leaves. They secrete honey dew like substance and sooty, black mould is developed on affected parts.
<br>Treatment: If infestation is observed to control take spray of Dimethoate@10 ml or Methyl Demeton@10 ml per 10 ltr water on new flush.
<br><br>
<b>Mite:</b>If infestation is observed, to control Citrus Mite, spray with Dicofol@1.75 ml or Wettable Sulphur@3 gm/ltr of water. Take second spray after 15 days if needed.
<br><br>
<b>Mealy Bug:</b> If infestations of sucking pests like Mealy bug is observed then to control spray with Chlorpyriphos 50EC @500 ml/100 ltr of water.
<br><br>
<b>Leaf folder:</b>Larvae web leaves together and feed inside it. It affects plant growth and plants become stunted.
<br>Treatment: If infestation is observed take spray of Chlorpyriphos@1250 ml or Quinalphos@800 ml in 200 ltr of water.
<br><br>
<b>Whitefly and Blackfly:</b>Serious pest of citrus crop. Adult and nymphs, both suck the sap thus weaken the plant. Affected plant gives yellowish appearance in severe infection curling of leaves if observed. They secrete honey dew like substance and Sooty, black mould is developed on affected parts. Black fly lay eggs on lower side of leaves, nymphs are of black color.
<br>Treatment:If infestation is observed, take spray with Acephate@1.25 gm or Quinalphos@1.5 ml or Imidacloprid@2 ml/ litre of water. If necessary take second spray at interval of 15 days.
<br><br>
<b> Disease and their control:</b><br>
<b>Canker:</b>Symptoms can be seen on leaves, branches and fruits. Initially yellow spots observed on leaves, it get enlarges and become brown, rough and raised on both side.
<br>Treatment: In less affected orchard removed canker affected branches, fruits, leaves and destroyed them. And apply Bordo pest (1 kg Morchude + 1 kg Lime+10 ltr water) on infected portion. 2) To control citrus canker, spray COC@18 gm with Streptocycline @6 gms in 10 ltr water. Repeat the spray after 30 days interval.
<br><br>
<b>Gummosis (Root rot):</b>If infestation of Root rot, Foot rot and gum oozing is observed, Removed infected roots along with other infected part and then apply Copper Oxychloride@2.5 gm/ltr and cover it with soil or depending upon severity, Do drenching of (Metalaxyl + Mancozeb)@20 gm per 10 ltr of water near stem. Give two spray of Fosetyl(Aliette)@2.5 gm per ltr of water during April and September month.
<br><br>
<b>Die back:</b>Drying of stem, tips, and branches is main symptoms of die back along with fruit rot.
<br>Treatment: To control die back effectively do Periodical removal of dried twigs along with application of Bordeaux paste on cut ends. Take spray of Copper Oxychloride@3 gm per Ltr of water in March, July and September Month.
<br><br>
<b>Greening of Kinnow:</b>Fruit expose toward sunlight developed orange color but another side gives dull olive green color. On leaves also green circular dots are observed.
<br>Treatment: Remove affected and unproductive trees. Take spray of Tetracycline@500 ppm i.e 5 gm/ltr of water with interval of 15 days to reduce its incidence.
<br><br>
</p></div><br>
<button type="button">
<a href="https://www.google.com/aclk?sa=L&ai=DChcSEwjapo6ZrePsAhVO2JYKHT5yA3gYABAMGgJ0bA&sig=AOD64_099MVYpfX2plkssb5IZ2FLCjEt_Q&ctype=5&q=&ved=0ahUKEwjzwYaZrePsAhXNzzgGHc2MDusQww8IvwQ&adurl=" class="button button2">Buy Pesticide Here</a>
</button>
<br><br>

<button class="accordion">Harvesting</button>
<div class="panel">
<p>On attaining proper size, shape along with attractive color having TSS to Acid ratio of 12:1, kinnow fruits is ready for harvest. Depending upon variety fruits are generally ready for harvesting in Mid- January to Mid- February. Do harvesting at proper time as too early or too late harvesting will give poor quality.</p>
</div><br>
<button class="accordion">Post-harvesting</button>
<div class="panel">
<p>After harvesting, wash fruits with clean water then dip fruits in Chlorinated water@2.5 ml per litre water and then partially dried them. To improve appearance along with to maintain good quality, do Citra Shine wax coating along with foam. Then these fruits are dried under shade and then packing is done. Fruits are packed in boxes.</p>
</div><br>
<div class="zoom">
<img alt="kinnow" src="kinnow2.jpg">

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
