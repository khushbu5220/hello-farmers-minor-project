<!DOCTYPE html>
<html>
<head>
<title>Orange</title>
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
<h3>ORANGE</h3>
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

<div style="float:right" class="zoom"><img alt="Orange" src="orange1.jpg"></div>
<button class="accordion"style="width:75%">Choose a good location</button>
<div class="panel">
<p>It can be grown on wide variety of soils. Medium-Light Loam soils with pH of 6.0-8.0 are suitable for its best growth.
</p>
</div>
<br>
<button class="accordion"style="width:75%">Soil preparation</button>
<div class="panel">
<p>Land need to be prepare properly for growing seedlings. Land should be ploughed, cross ploughed and leveled. Terrace planting is done on hills. High density planting is possible in hilly areas.</p>
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
    <td>10-30°C</td>
    <td>500-600mm</td>
	</tr>
</table></center>
</div><br>
<button class="accordion"style="width:75%">Seeding</button>
<div class="panel">
<p><b>Seed Rate:</b>Minimum plant density of 110 plant/acre should be maintained.    
</p></div>
<br>
<br>
<button class="accordion">Fertilizer</button>
<div class="panel">
<br>
<center>
<p><b>Fertilizer Requirement (gm/tree)</b></p>
<table style="width:50%">
  <tr>
    <th>Age of crop (Year)</th>
    <th>Urea</th>
    <th>SSP</th>
  </tr>
  <tr>
    <td>First to three year</td>
    <td>240-720</td>
    <td>-</td>
  </tr>
  <tr>
    <td>Four to Seven</td>
    <td>960-1680</td>
    <td>1375-2400</td>
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
    <th>phosphorus</th>
  </tr>
  <tr>
    <td>First to three year</td>
    <td>110-130</td>
    <td>-</td>
  </tr>
  <tr>
    <td>Four to Seven</td>
    <td>440-770</td>
    <td>220-385</td>
  </tr>
  <tr>
  <td>Eight and above</td>
  <td>880</td>
  <td>2750</td>
  </tr>
</table><br>
  </center></div><br><br>
  <button type="button">
<a href="https://agribegri.com/products/tropical-fruit-and-citrus-special--online-fertilizer-blend.php" class="button button1">Buy Fertilizer Here</a>
</button>
</div>
<br><br>
<button class="accordion">Planting</button>
<div class="panel">
<p><b>Time of sowing:</b>
In Punjab planting is done in spring season (February to March) and Monsoon season (15 August to October end).
<br>

<b>Spacing:</b>
For sweet oranges use spacing of 5mx5m is recommended. Dig pit of 1mx1mx1m, kept open in sun for some days. Add 15-20kg of well decomposed cow dung, SSP@500gm per Pit.
<br>
 
<b>Sowing Depth:</b>
Pits of size 60×60×60cm should be dug for planting seedlings.
<br>

<b>Method of Sowing:</b><br>
Propagation<br>
Orange can be propagated either by Seed or By Budding.<br>

<b>Seed Propagation:</b>
Fruits from healthy plants with high density are selected for extracting seeds. Seeds should be mixed with ash and are left in the shade to dry. To prevent seed viability, they should be sown immediately at a distance of 3-4cm. Germination may take 3-4 weeks. Unhealthy seedlings should be removed from the field. Proper care must be taken to protect the seedlings from various diseases and insect-pests.

<b>Budding:</b>
Sow citrus seeds in nursery on bed of 2mx1m size and with 15cm distance between the rows. When seedlings are of 10-12cm height, transplanting is to be done. Select healthy and uniform size seedling for transplantation purpose. Remove dwarf and weak seedlings. If needed, pruned roots slightly before planting. In nursery, Budding is done when plant are of pencil thickness. Shield budding or T shape budding is done for that, T shaped slot is made in bark of tree at distance of 15-20cm from ground. Horizontal cut of about 1.5-2cm long is given, and vertical cut of 2.5cm long is made from middle of horizontal cut. Remove bud from bud stick and insert it into T shape slots, afterward wrapped it with plastic paper.  
T budding is done during February-March and also in August- September. Propagation in sweet orange, kinnow, grape fruit is done by T budding while For lime and Lemon, it is propagated by Air layering method.
</p>
</div>
<br>
<button class="accordion">Caring</button>
<div class="panel">
<p><b>Fertilization –</b>For Orange crop:  For 1-3year old crop, apply well decomposed cowdung@10-30kg, Urea@240-720gm per tree. For 4-7year old crop, apply well decomposed cow dung@40-80kg, Urea@960-1680gm and SSP@1375-2400gm per tree. For eight years and above crop, apply cowdung@100kg, Urea@1920gm and SSP@2750gm per Tree.

Apply whole amount of cow dung during December month whereas apply Urea in two parts, apply first of Urea in February, and second dose in April-May month. At time of applying first dose of Urea, apply whole dose of SSP fertilizer.

If fruit drop is observed, to control excessive fruit drop, take spray of 2,4-D@10gm in 500Ltr of water. Take first spray in March end, then in April end. Repeat the spray in August and September end. If cotton is planted in nearby field of citrus, avoid spraying of 2, 4-D, instead take spray of GA3.<br><br>
<b>Watering –</b>Irrigation requirement of orange is very high due to its evergreen nature throughout the year. Amount of irrigation also depends upon the type of soil.  Proper irrigation should be provided at the time of flowering, Fruit set and Fruit development. Water logging should be avoided. Irrigation water should be free from salts.
<br><br>
<b>Weeding -</b>Weed can be controlled by hand-hoeing and also controlled by chemically, use glyphosate@1.6litre per 150 litre of water. Use glyphosate only on weeds not on crop plants.</p>
</div>
<br>
<button class="accordion">Pesticide and diesease</button>
<div class="panel">
<p><b>Pest and their control:</b><br>

i.<b>Citrus Psylla:</b>These are Juice sucking pests. Damage is mainly caused by Nymphs. It injects a plant toxin liquid which burns foliage and skin of fruit. Leaves curl and fall off prematurely.
<br>Treatment:It can be controlled by pruning of diseased plants, burning them. Spraying of Monocrotophos-0.025% or carbaryl- 0.1% can also be helpful.
<br>
ii.<b>Leaf miner:</b>Larvae inside the upper or lower surface of young and newly emerged leaves are curled and look distorted. Young trees show a reduction in growth due to leaf miner
<br>Treatment:Best management for leaf miner is to leave it alone and let the natural enemies to feed upon them and parasitize their larvae. It can also be controlled by spraying Phosphomidon @1ml or Monocrotophos @1.5ml per 3-4 times fortnightly. Pheromone traps are also available for detecting leaf minor moths.
<br>
iii.<br>Scale Insects:</b>Citrus scale insects are small insects that suck sap from the citrus trees and fruits. Honeydew is produced which is feasted upon by ants. They do not have much mouth parts. Male citrus scale has a short life span. There are mainly two types of scale on citrus plants armored scale and soft scales.  Armored scale insects insert their mouth parts in the plant and never move again, eating and reproducing in the same spot. Soft scale bugs on citrus form a protective coating, which in turns cover citrus leaves and prevents photosynthesis. Once dead and soft scale will fall from tree instead of remaining stuck.
<br>Treatment:They can be controlled with the introduction of indigenous parasitic wasps. Neem oil is also effective against them. Spraying of Parathion (0.03%) emulsion, dimethoate 150ml or malathion @0.1% are effective against scale control.
<br>
iv.<br>Orange Shoot Borer:</b>Freshly hatched larvae bore into twigs. They feed upon soft tissues. This insect feed upon trees in the day hours. Affected plants tend to lose its vigor. It is very serious pest of citrus plant.
<br>Treatment:It can be controlled by destroying the affected branches. Kerosene oil/petrol injection can also help to control this insect. Monocrotophos (5ml/20ml of water) also
<br>
v.<br>Aphids & Mealy Bugs:</b>They are small sap sucking pests. Bugs are present on the underside of leaves.
<br>Treatment:Synthetic pyrethroids or pest oil can be used to control aphids and bugs.
<br><br>
<b> Disease and their control:</b><br>
i.<b>Citrus Canker:</b>Plants have lesions on stems, leaves and fruits with brown, water-soaked margins. Citrus canker bacteria can enter through plant’s stomata into the leaves. Younger leaves are highly susceptible. Lesions oozes bacterial cells which can be dispersed by blowing wind to healthy plants in area.
Contaminated equipment tends to spread disease to healthy plants. Bacteria can stay viable in old lesions for several months. It can be detected by appearance of lesions.
<br>Treatment:It can be controlled by cutting of effected branches, twigs. Spraying of Bordeaux mixture @1%. Aqueous solution of 550ppm, Streptomycin Sulphate is also helpful in controlling citrus canker.
<br>
ii.<b>Gummosis:</b>Exudation of gum from bark of tree is the characteristic symptom of gummosis disease. Affected plant leaves turns to pale yellow in color. Hardness masses of gum are common on stem and leaf surfaces. In severe cases, bark may be destroyed by rotting and tree may dies. Plant dies before the fruit matures. This disease is also called foot rot.
<br>Treatment:Drench the soil with 0.2% metalaxyl MZ-72 + 0.5% trichodermaviride, which helps to control this disease. Bordeaux mixture should be applied to plant upto 50-75 cm height from ground level at least once in a year.
<br>
iii.<b>Powdery mildew:</b>White cottony powdery growth is noticed on all aerial plant parts. Leaves tend to become pale yellow and crinkle. Distorted margins are also seen. Upper surface of leaves are more affected. Young fruits drop off prematurely. Yield is reduced significantly.
<br>Treatment:To control powdery mildew, affected plant parts should be removed and destroyed completely. Carbendazim, three times at 20-22 days of interval helps to control this disease.
<br>
iv.<b>Black Spot:</b>Black spot is a fungal disease. Circular, dark spots on fruits are seen.
<br>Treatment:Copper spray in early spring should be sprayed on foliage helps to cure plants from black spots. It should be repeated in 6 weeks again.
<br>
v.<b>Collar Rot:</b>Collar rot is also caused due to fungus. This disease mainly affects the bark on tree trunk. Bark begins to rot and forms a band just above ground surface, this band decay gradually and covers the whole trunk. It is very severe in some cases that even the trees may die. This is caused due to incorrect mulching, injury due to weeding, mowing etc. Tree may lose its vigor.
<br>Treatment:To protect trees from collar rot, cut and scrape away the soft, infected bark to clean the trunk of tree. Mixture of copper spray or Bordeaux mixture should be painted on the affected part of the tree. Remove all the weak, diseased and congested tree branches to ensure proper air circulation.
<br>
vi.<b>Zinc Deficiency:</b>It is very common in citrus trees. It is notified as yellow areas between main lateral veins and midrib of the leaves. Twigs may die back, dense shoots having stunted bushy appearance is commonly seen. Fruits tend to become pale, elongated and small in size.
<br>Treatment:Proper fertilizer application should be given to the citrus tree to prevent zinc deficiency. Zinc sulphate should be provided by dissolving 2 table spoons in 10 liters of water. This should be sprayed thoroughly on all the tree branches and foliage. It can also be cured by providing cow or sheep manure.
<br>
vii.<b>Iron deficiency:</b>Color of new leaves changes to yellowish green. Iron chelates should be provided to the plants.
<br>Treatment:Cow or Sheep manure is also helpful to cure plants from iron deficiency. This deficiency mostly occurs in case of alkaline soils.
</p></div><br><br>
<button type="button">
<a href="https://agribegri.com/products/buy-katyayani-organic-pesticides-online--water-soluble-fertilize.php" class="button button2">Buy Pesticide Here</a>
</button>
<br><br>
<button class="accordion">Harvesting</button>
<div class="panel">
<p>On attaining proper size, shape along with attractive color having TSS to Acid ratio of 12:1, kinnow fruits is ready for harvest. Depending upon variety fruits are generally ready for harvesting in Mid- January to Mid- February. Do harvesting at proper time as too early or too late harvesting will give poor quality.</p>
</div>
<br>
<button class="accordion">Post-harvesting</button>
<div class="panel">
After harvesting, wash fruits with clean water then dip fruits in Chlorinated water@2.5ml per Liter water. Then partially dried them. To improve appearance along with to maintain good quality, do Citrashine wax coating along with foam. Then these fruits are dried under shade and then packing is done. Fruits are packed in boxes.
</div>
<br>
<div class="zoom">
<img alt="Orange" src="orange2.jpg">
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